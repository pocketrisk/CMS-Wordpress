$ = jQuery
class AccountModelPortfoliosController extends Spine.Controller
  elements:
    '#portfolios-count': 'portfoliosCountSelect'
    '#portfolio-widget-template': 'widgetTemplate'
    '#portfolios-list': 'portfoliosList'
  events:
    'change #portfolios-count': 'renderPortfolioWidgets'
    'click #save-portfolios': 'save'
    'click #delete-portfolios': 'delete'
    'click .show-description': 'toggleDescription'
    'click .hide-description': 'toggleDescription'
    'click .images-hint': 'toggleImagesHint'
    'click .remove-portfolio-image': 'removePortfolioImage'
    'click #support-link': 'sendSupportRequestEmail'
    'keyup #visible-description': 'mirrorContent'
    'keyup input': 'makeDirty'

  initialCount: 0
  selectedPortfolio: null

  constructor: ->
    super

  initializeFileUpload: ->
    imageTarget = @selectedPortfolio.find('input[name="model_portfolio_image_id"]')
    progress = @el.find('.progress')

    @el.find('.fileupload').fileupload(
                                url: "/account/model_portfolio_images",
                                dataType: 'json',
                                formData:
                                  imageTarget: imageTarget
                                  progress: progress
                                  setThumbnail: @setCurrentThumbnail
                                  selectedPortfolio: @selectedPortfolio
                                done: (e, data) =>
                                  if data.response().textStatus == "success"
                                    imageResponse = data.response().result[0]
                                    data.formData.imageTarget.val(imageResponse.id)
                                    data.formData.imageTarget.data("thumbnail-url", imageResponse.thumbnail_url)
                                    data.formData.setThumbnail(data.formData.selectedPortfolio)
                                    $(".image-errors").empty()
                                  return
                                error: (jqXHR, textStatus, errorThrown) ->
                                  imageError = jqXHR.responseJSON.errors.image[0]
                                  $(".image-errors").append("<span class='help-inline' style='color:#DA4E49'>#{ imageError }</span>")
                                  progress.hide()
                                change: (e, data) ->
                                  progress.find('.bar').css 'width', 0 + '%'
                                  progress.show()
                                  return
                                progressall: (e, data) =>
                                  progressAmount = parseInt(data.loaded / data.total * 100, 10)
                                  progress.find('.bar').css 'width', progressAmount + '%'
                                  setTimeout (-> progress.hide() ), 2000
                                  return
                              )

  toggleDescription: (e) ->
    e.preventDefault()
    desc = $(e.target).parents('.portfolio-widget')
    wrapper = $('.js-description')
    common = $('#visible-description')
    label = $('#visible-description-label')
    wordCount = $('#visible-word-count')
    @selectedPortfolio = desc

    @updateWordCount(@selectedPortfolio.find('textarea').val())
    common.val(desc.find('textarea').val())

    wrapper.slideToggle()
    $(".show-description").toggle()
    @selectedPortfolio.find(".hide-description").toggle()

    @resetProgressBar()
    @setCurrentThumbnail(@selectedPortfolio)
    @initializeFileUpload()

  updateWordCount: (text) ->
    count = @countWords(text)
    $('#visible-word-count > span').text(count)
    if count > 100
      $('#visible-word-count').css('color', "#b94a48")
    else
      $('#visible-word-count').css('color', 'grey')

  setCurrentThumbnail: (selectedPortfolio) ->
    $(".thumbnail-wrapper").empty()
    thumbnailUrl = selectedPortfolio.find('input[name="model_portfolio_image_id"]').data('thumbnail-url')
    if thumbnailUrl
      $(".thumbnail-wrapper").append("<img src=#{thumbnailUrl}>")
      $(".thumbnail-wrapper").append("<a href='#' class='remove-portfolio-image'><i class='icon-remove-sign'></i></a>")

  resetProgressBar: ->
    progressBar = $(".image-wrapper .progress")
    progressBar.hide()
    progressBar.find(".bar").css 'width', 0 + '%'

  countWords: (text) ->
    return 0 if text.trim() == ""
    text.trim().split(/\s+/).length

  mirrorContent: (e) ->
    @selectedPortfolio.find('textarea').val($("#visible-description").val())
    @updateWordCount(@selectedPortfolio.find('textarea').val())

  removePortfolioImage: (e) ->
    e.preventDefault()
    portfolioImageInput = @selectedPortfolio.find('input[name="model_portfolio_image_id"]')
    portfolioImageInput.val ""
    portfolioImageInput.data('thumbnail-url', "")

    $(".thumbnail-wrapper").empty()
    @resetProgressBar()

  sendSupportRequestEmail: (e) ->
    e.preventDefault()
    $.ajax('/support.json',
      type: 'POST'
      dataType: "json"
      success: ->
        $(e.target).text('Email has been sent to our support team. You will be contacted shortly')
    )

  toggleImagesHint: (e) ->
    e.preventDefault()
    $(".images-hint-explanation").slideToggle()

  delete: (e) ->
    e.preventDefault()
    $.ajax('/account/model_portfolios',
      type: "DELETE"
      dataType: "json"
      success: ->
        window.location.reload()
    )

  save: (e) ->
    e.preventDefault()
    errors = []
    widgets = @portfoliosList.find('.portfolio-widget').map((index, widget) -> $(widget))
    data = $('#portfolios-list .portfolio-widget').map((index, widget) ->
      {
        name: $(widget).find('input[name="name"]').val()
        min_score: $(widget).find('input[name="low"]').val()
        max_score: $(widget).find('input[name="high"]').val()
        description: $(widget).find('textarea').val()
        model_portfolio_image_id: $(widget).find('input[name="model_portfolio_image_id"]').val()
      }
    )

    data.each((index, portfolio) ->
      if portfolio.name is ""
        errors.push('Name, Low and High fields of all portfolios are required')
        return false
    )

    data.each((index, portfolio) ->
      if portfolio.description is "" and portfolio.model_portfolio_image_id isnt ""
        errors.push('You can only save your portfolios once you have a description to match the image you have uploaded')
        return false
    )

    data.each((index, portfolio) ->
      if portfolio.min_score < 0 or portfolio.min_score > 100 or portfolio.max_score < 0 or portfolio.max_score > 100
        errors.push('Scores must be between 0 and 100')
        return false
    )
    data.each((index, portfolio) =>
      if @countWords(portfolio.description) > 100
        errors.push('Sorry, you are over the 100 word limit for your portfolio description')
        return false
    )
    ranges = []
    data.each((index, portfolio) ->
      ranges.push([parseInt(portfolio.min_score)..parseInt(portfolio.max_score)])
    )
    ranges = _.flatten(ranges)
    if _.uniq(ranges).length isnt ranges.length
      errors.push('You have scores overlap')

    if errors.length is 0
      $('#model-portfolios').find('.errors').html('').hide()
      $.ajax '/account/model_portfolios',
        type: "POST"
        dataType: "json"
        data:
          portfolios: _.toArray(data)
        success: ->
          window.location.reload()
    else
      $('#model-portfolios').find('#portfolio-actions').addClass('error')
      $('#model-portfolios').find('.help-inline').html(errors.join('. ')).show()

  renderPortfolioWidgets: (e) ->
    isPristine = $('.model-portfolios-page').data('pristine')
    currentCount =  @portfoliosCountSelect.val()
    widgetHtml = $('#portfolio-widget-template').html()
    difference = currentCount - @initialCount
    if currentCount is '0'
      $('#second-section,#portfolio-actions').addClass('no-portfolios')
    else
      $('#second-section,#portfolio-actions').removeClass('no-portfolios')
    if difference > 0
      @portfoliosList.append(widgetHtml) for [0...difference]
    else
      difference = difference * -1
      @portfoliosList.find('.portfolio-widget:last').remove() for [0...difference]

    @initialCount = currentCount
    @setRangeDefaults() if isPristine

  setRangeDefaults: ->
    defaultRanges =
      3: [ [0, 33], [34, 67], [68, 100] ]
      4: [ [0, 24], [25, 50], [51, 75], [75, 100] ]
      5: [ [0, 20], [21, 40], [41, 60], [61, 80], [81, 100] ]
      6: [ [0, 20], [21, 35], [36, 50], [51, 64], [65, 79], [80, 100] ]
      7: [ [0, 14], [15, 29], [30, 44], [45, 58], [59, 72], [73, 86], [87, 100] ]
      8: [ [0, 12], [13, 25], [26, 38], [39, 51], [52, 64], [65, 76], [77, 88], [89, 100] ]
      9: [ [0, 11], [12, 23], [24, 34], [35, 45], [46, 56], [57, 67], [68, 78], [79, 89], [90, 100] ]
      10: [ [0, 10], [11, 22], [23, 33], [34, 44], [45, 55], [56, 66], [67, 77], [78, 88], [89, 98], [99, 100] ]
      11: [ [0, 9], [10, 19], [20, 28], [29, 37], [38, 46], [47, 55], [56, 64], [65, 73], [74, 82], [83, 91], [92, 100] ]
    $('#portfolios-list .portfolio-widget').each (index, el) =>
      $(el).find('input[name="low"]').val(defaultRanges[@initialCount][index][0])
      $(el).find('input[name="high"]').val(defaultRanges[@initialCount][index][1])

  makeDirty: ->
    $('.model-portfolios-page').data('pristine', false)


window.AccountModelPortfoliosController = AccountModelPortfoliosController
