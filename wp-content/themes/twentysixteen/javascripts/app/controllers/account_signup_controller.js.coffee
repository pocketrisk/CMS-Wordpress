$ = jQuery
class AccountSignupController extends Spine.Controller
  elements:
    'form.form-account-details': 'accountDetailsForm'
    'form.form-payment-details': 'paymentDetailsForm'

  events:
    'submit form.form-payment-details': 'handleSubmitPaymentForm'
    'click .submit-forms': 'handleSubmitAllForms'
    'blur #account_signup_email': 'validateEmailAddress'
    'keypress #account_signup_email': 'clearEmailValidation'

  constructor: ->
    super
    console.log(@el)
    @el.find('#payment_card_number').attr('data-stripe', 'number')
    @el.find('#payment_cvc').attr('data-stripe', 'cvc')
    @el.find('#payment_expiration_2i').attr('data-stripe', 'exp-month')
    @el.find('#payment_expiration_1i').attr('data-stripe', 'exp-year')

    @el.find('.note-info').mouseenter( (e) =>
      target = $(e.currentTarget)
      target.find('.note').show()
    )

    @el.find('.note-info').mouseleave( (e) =>
      target = $(e.currentTarget)
      target.find('.note').hide()
    )

  addError: (target, error) ->
    container = target.parents('.control-group')
    container.addClass('error')
    container.find('.help-inline').remove()
    $('<span class="help-inline">' + error + '</span>').insertAfter(target)

  clearError: (target) ->
    container = target.parents('.control-group')
    container.removeClass('error')
    container.find('.help-inline').remove()

  clearEmailValidation: (e) ->
    target = $(e.currentTarget)
    @clearError(target)

  handleSubmitAllForms: (e) ->
    @paymentDetailsForm.find('button').prop('disabled', true)
    Stripe.card.createToken(@paymentDetailsForm, (status, response) =>
      if response.error
        # Show the errors on the form
        @paymentDetailsForm.find('.payment-errors').text(response.error.message)
        @paymentDetailsForm.find('button').prop('disabled', false)
      else
        # token contains id, last4, and card type
        token = response.id
        # Insert the token into the form so it gets submitted to the server
        @el.find('#create_account_service_stripe_token').val(token)
        @accountDetailsForm.submit()
    )

  handleSubmitPaymentForm: (e) ->
    e.preventDefault()

  validateEmailAddress: (e) ->
    target = $(e.currentTarget)
    email = target.val()
    $.get('/user_emails',
      email: email
    , (data) =>
      if data['email_error']
        @addError(target, data['email_error'])
    )

window.AccountSignupController = AccountSignupController
