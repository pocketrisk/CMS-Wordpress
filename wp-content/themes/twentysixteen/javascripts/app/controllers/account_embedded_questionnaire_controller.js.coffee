$ = jQuery
class AccountEmbeddedQuestionnaireController extends Spine.Controller
  elements:
    '.add-another-question-group': 'anotherQuestionContainer'
    '.private-access-code-input': 'accessCodeInput'

  events:
    'click .add-another-question': 'handleAddAnotherQuestion'
    'click .add-another-option': 'handleAddAnotherOption'
    'click textarea.embed-code': 'handleTextareaFocus'
    'click #embedded_questionnaire_require_private_access_code_true': 'showAccessCode'
    'click #embedded_questionnaire_require_private_access_code_false': 'hideAccessCode'
    'submit form': 'submitForm'

  constructor: ->
    super
    @el.find('.note-info').mouseenter( (e) =>
      target = $(e.currentTarget)
      target.find('.note').show()
    )

    @el.find('.note-info').mouseleave( (e) =>
      target = $(e.currentTarget)
      target.find('.note').hide()
    )

    @el.find('.add-another-option').each (index, el) ->
      if $(el).parents('.controls').find('.additional-question-option:visible').length >= 15
        $(el).hide()

  handleAddAnotherQuestion: (e) ->
    e.preventDefault()
    @el.find('.control-group.content-hidden:first').slideDown(=>
      @el.find('.control-group.content-hidden:first').removeClass('content-hidden')
      if @el.find('.control-group.content-hidden').length == 0
        @anotherOptionContainer.slideUp()
    )
    @el.find('.control-group-options.content-hidden:first').slideDown(->
      $(this).removeClass('content-hidden')
    )

  handleAddAnotherOption: (e) ->
    console.log('add another', e)
    e.preventDefault()
    currentTarget = $(e.currentTarget)
    container = currentTarget.parents('.additional-question-and-options-wrapper')
    console.log('container', container, currentTarget)
    firstHiddenAdditionalOption = container.find('.additional-question-option.content-hidden:first')
    firstHiddenAdditionalOption.slideDown(=>
      firstHiddenAdditionalOption.removeClass('content-hidden')
      if container.find('.additional-question-option.content-hidden').length == 0
        currentTarget.slideUp()
    )
    #@el.find('.control-group.hidden:first').slideDown(=>
    #  @el.find('.control-group.hidden:first').removeClass('hidden')
    #  if @el.find('.control-group.hidden').length == 0
    #    @anotherQuestionContainer.slideUp()
    #)

  handleTextareaFocus: (e) ->
    $(e.currentTarget).focus().select()

  hideAccessCode: (e) ->
    @accessCodeInput.fadeOut()

  showAccessCode: (e) ->
    @accessCodeInput.fadeIn()

  submitForm: (e) ->
    for wrapper in $('.additional-question-and-options-wrapper')
      questionInput = $(wrapper).find('.control-group-question input').val()
      options = []
      for option in $(wrapper).find('.control-group-options .additional-question-option input')
        optionVal = $(option).val()
        options.push optionVal if optionVal
      $(wrapper).find('.control-group-options input[type=hidden]').val(JSON.stringify(options))

window.AccountEmbeddedQuestionnaireController = AccountEmbeddedQuestionnaireController
