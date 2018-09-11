$ = jQuery
class AccountUpgradeController extends Spine.Controller
  elements:
    'form.form-account-details': 'accountDetailsForm'

  events:
    'submit form.account-upgrade': 'handleUpgradeFormSubmit'
    'click .cancel-my-account': 'handleCancelMyAccount'

  handleCancelMyAccount: (e) ->
    link = $(e.currentTarget)
    if link.data('admin')
      e.preventDefault()
      $('#cancel-modal').modal('show')
    else
      alert(link.data('denyMessage'))
      e.preventDefault()

  handleUpgradeFormSubmit: (e) ->
    form = $(e.currentTarget)
    currentPlan = @currentPlanDescription
    targetPlan = form.data('description')
    if !window.confirm("Are you sure you want to change from #{currentPlan} to #{targetPlan}?")
      e.preventDefault()

window.AccountUpgradeController = AccountUpgradeController