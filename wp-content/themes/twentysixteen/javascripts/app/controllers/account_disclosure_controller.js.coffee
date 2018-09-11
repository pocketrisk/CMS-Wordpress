$ = jQuery
class AccountDisclosureController extends Spine.Controller
  elements:
    '#account_disclosure_email_template': 'emailTemplate'
  events:
    'click input[type=submit]': 'validatePlaceholderPresence'

  validatePlaceholderPresence: (e) ->
    hasNotLinkPlaceholder = @emailTemplate.val().indexOf('[Questionnaire Link Appears Here]') is -1
    hasNotClientNamePlaceholder = @emailTemplate.val().indexOf('[Client Name]') is -1
    if hasNotLinkPlaceholder or hasNotClientNamePlaceholder
      alert('[Questionnaire Link Appears Here] and [Client Name] must be present for Email Template to work.')
      e.preventDefault()

window.AccountDisclosureController = AccountDisclosureController
