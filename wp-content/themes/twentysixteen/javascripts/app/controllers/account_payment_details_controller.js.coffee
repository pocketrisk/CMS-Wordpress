$ = jQuery
class AccountPaymentDetailsController extends Spine.Controller
  elements:
    'form.form-payment-details': 'paymentDetailsForm'
    'form.form-payment-token': 'paymentTokenForm'

  events:
    'submit form.form-payment-details': 'handleSubmitPaymentForm'
    'click .submit-forms': 'handleSubmitAllForms'

  constructor: ->
    super
    @el.find('#payment_card_number').attr('data-stripe', 'number')
    @el.find('#payment_cvc').attr('data-stripe', 'cvc')
    @el.find('#payment_expiration_2i').attr('data-stripe', 'exp_month')
    @el.find('#payment_expiration_1i').attr('data-stripe', 'exp_year')
    @el.find('#payment_cardholder_name').attr('data-stripe', 'name')
    @el.find('#payment_billing_zip').attr('data-stripe', 'address_zip')

  handleSubmitPaymentForm: (e) ->
    e.preventDefault()

  handleSubmitAllForms: (e) ->
    e.preventDefault()
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
        @el.find('#account_payment_detail_stripe_token').val(token)
        @paymentTokenForm.submit()
    )

window.AccountPaymentDetailsController = AccountPaymentDetailsController