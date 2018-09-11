$ = jQuery
class SupportQuestionController extends Spine.Controller
  elements:
    '#question': 'question'
    '#email': 'email'
    '.error': 'error'


  events:
    'submit form': 'submit'

  submit: (e) ->
    email_regexp = re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if @question.val() is "" or @email.val() is "" or !email_regexp.test(@email.val())
      @error.show()
      e.preventDefault()

window.SupportQuestionController = SupportQuestionController
