$ = jQuery
class FirstVisitModalController extends Spine.Controller
  elements:
    '#first-visit-modal': 'modalContainer'
    '#end-first-visit': 'endVisitButton'

  events:
    'click .first-visit-page a[data-first-time-modal=true]': 'changePage'

  constructor: ->
    super
    if not @firstVisitModalSeen
      @modalContainer.modal(
        show: true
        backdrop: 'static'
      )
      @modalContainer.on('hide', @setFirstVisit)
      @endVisitButton.on('click', @setFirstVisit)

  setFirstVisit: =>
    $.ajax(@userUpdatePath, {
      type: "PUT"
      dataType: "json"
      data: {
        user: {
          first_visit_modal_seen: true,
        }
      }
      async: false
      success: (data, status, xhr) => @el.addClass('ajax-completed')
    })

  changePage: (event) ->
    element = $(event.currentTarget)
    targetPage = element.data('modalPage')
    @modalContainer.find('.first-visit-page').hide()
    targetElement = @modalContainer.find(".first-visit-page[data-first-visit-page=#{targetPage}]")
    targetElement.show()

window.FirstVisitModalController = FirstVisitModalController
