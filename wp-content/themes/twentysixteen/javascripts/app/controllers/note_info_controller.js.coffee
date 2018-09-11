$ = jQuery
class NoteInfoController extends Spine.Controller
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

window.NoteInfoController = NoteInfoController