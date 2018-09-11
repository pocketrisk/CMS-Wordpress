$ = jQuery
class NewClientModalController extends Spine.Controller
  elements:
    '#create-client-button': 'submitButton'
    'label[for="client_email"]': 'label'
  events:
    'click input[type="radio"]': 'changeSubmitButtonValue'

  changeSubmitButtonValue: (e) ->
    if $(e.target).val() is 'true'
      @submitButton.text('Start Questionnaire')
      @label.text('Email (Optional)')
    else
      @submitButton.text('Edit Email Message')
      @label.text('Email *')

window.NewClientModalController = NewClientModalController
