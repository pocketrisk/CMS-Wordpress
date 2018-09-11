$ = jQuery
class EmailClientQuestionnaireController extends Spine.Controller
  elements:
    '.modal-extra': 'modalExtra'
    'form#new_emailed_report': 'form'
    '#email-client-modal': 'emailClientModal'

  events:
    'click .btn-email-client-questionnaire-link': 'showQuestionnaireLink'
    'change .display-report-wrapper input[type=radio]': 'handleChangeDisplayReportToClient'
    'click .email-client': 'createQuestionnaire'

  handleChangeDisplayReportToClient: (event) ->
    return if not @created
    $.ajax(
      url: @createdReportPath
      data: @form.serialize()
      type: 'PUT'
      success: (response) =>
        @updated = true
    )

  createQuestionnaire: (event) ->
    if @client_email is ""
      $('#empty-email-error').show()
      return
    event.preventDefault()
    if @reportCreated
      alert("Please refresh the page before creating another questionnaire.")
    else
      $('#empty-email-error').hide()
      @form.find('#report_suppress_email').val('true')
      @form.find('#report_questionnaire_link').val('true')
      @form.find('#report_id').val('')
      $.post(
        @form.attr('action'), @form.serialize(), (response) =>
          @reportCreated = true
          if response.token
            @created = true
            @createdReportPath = response.path
            questionnaireLink = @emailClientModal.find('#questionnaire-link')
            questionnaireLink.val( questionnaireLink.val().replace('TOKEN', response.token) )
            @form.find('#report_suppress_email').val('false')
            @form.find('#report_emailed').val('true')
            @form.find('#report_id').val(response.id)
            @emailClientModal.modal('show')
          else
            alert('There was a problem creating the questionnaire')
        , 'json'
      )


  showQuestionnaireLink: (event) ->
    event.preventDefault()
    @modalExtra.slideDown()

window.EmailClientQuestionnaireController = EmailClientQuestionnaireController
