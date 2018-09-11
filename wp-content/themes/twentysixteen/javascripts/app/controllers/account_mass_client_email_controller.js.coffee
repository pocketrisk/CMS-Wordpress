$ = jQuery
class AccountMassClientEmailController extends Spine.Controller
  elements:
    '.section-mass-client-email form': 'clientListForm'
    '#edit-mass-email-message': 'editMassEmailMessageModal'
    '.check-all input': 'checkAllCheckbox'
    '#zipping-progress': 'zippingProgress'
    '#zipped-reports': 'zippedReports'
    '#zip-reports-link': 'zipReportsLink'
    '#zip-progress-msg': 'zipProgressMsg'

  events:
    'click .section-mass-client-email form button': 'showEditEmailModal'
    'change .check-all': 'toggleCheckAll'
    'change .email-individual-client input': 'uncheckCheckAll'
    'submit form.account-mass-client-edit-email-form': 'handleSubmitEditEmailForm'
    'click #zip-reports-link': 'zipReports'

  zipReports: (e) ->
    e.preventDefault()
    @zipReportsLink.hide()
    @zippedReports.hide()
    @zippingProgress.show()
    $.ajax('/zipped_reports',
      dataType: 'JSON'
      type: 'POST'
      data: {
        account_id: @zipReportsLink.data('account-id')
      }
      success: (data) =>
        @zippingProgress.data('path',data['data']['path'])
        @zippingProgress.show()
        @zippedReports.hide()
        @zipReportsLink.hide()
      error: (data) =>
        @zippingProgress.hide()
        @zippedReports.html('<p>Something went wrong. Please, try again later.</p>')
        @zippedReports.show()
    )

  uncheckCheckAll: (e) ->
    @el.find('.check-all input').prop('checked', false)

  handleSubmitEditEmailForm: (e) ->
    e.preventDefault()
    emailText = @editMassEmailMessageModal.find('#email_message').val()
    displayReportToClient = @editMassEmailMessageModal.find(':checked').val()
    @clientListForm.find('#email-text-hidden-input').val(emailText)
    @clientListForm.find('#display-report-to-client-hidden-input').val(displayReportToClient)
    @clientListForm.submit()
    #$.ajax(@clientListForm.attr('action'),
    #  dataType: 'json'
    #  data: {
    #    account_mass_client_email: {
    #      email_text: emailText,
    #      client_ids: @clientIds
    #    }
    #  }
    #  type: 'put'
    #  success: (data) ->
    #    window.reload()
    #)


  showEditEmailModal: (e) ->
    e.preventDefault()
    @clientIds = []
    for checkedCheckBox in @clientListForm.find(':checked')
      @clientIds.push $(checkedCheckBox).val()

    if @clientIds.length > 0
      @editMassEmailMessageModal.modal('show')
    else
      alert('Please select some clients')

  toggleCheckAll: (e) ->
    @el.find('.email-client input[type=checkbox]').prop('checked', !!@checkAllCheckbox.prop('checked'))


window.AccountMassClientEmailController = AccountMassClientEmailController
