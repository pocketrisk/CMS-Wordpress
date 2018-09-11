$ = jQuery
class SearchClientsController extends Spine.Controller
  elements:
    '#clients-table': 'clientsTable'
    '#search-clients': 'searchField'
  events:
    'submit #search-clients-form': 'search'

  search: (e) ->
    e.preventDefault()
    $('.view-all-clients').click()
    $.ajax('/clients/search',
      dataType: 'html'
      type: 'get'
      data: { q: @searchField.val() }
      success: (data) =>
        @clientsTable.html(data)
    )

window.SearchClientsController = SearchClientsController
