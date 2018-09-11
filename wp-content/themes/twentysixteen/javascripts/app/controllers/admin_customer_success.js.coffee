$ = jQuery
class CustomerSuccessController extends Spine.Controller
  events:
    "click #filter": "filter"
    "click .sort-link": "sort"

  filter: (e) ->
    e.preventDefault()

    window.location.search = @buildQuery()

  sort: (e) ->
    e.preventDefault()
    field = $(e.target).data('field')
    initial_sort = @el.find('#customer_success_sort_by').val().split(' ')
    if initial_sort[0] is field
      order = 'DESC' if initial_sort[1] is 'ASC'
      order = 'ASC' if initial_sort[1] is 'DESC'
    else
      order = "ASC"

    @el.find('#customer_success_sort_by').val(field + ' ' + order)
    window.location.search = @buildQuery()


  buildQuery: ->
    start_year = @el.find('#customer_success_start_date_1i').val()
    start_month = @el.find('#customer_success_start_date_2i').val()
    start_day = @el.find('#customer_success_start_date_3i').val()
    start_date = start_year + "-" + start_month + "-" + start_day

    end_year = @el.find('#customer_success_end_date_1i').val()
    end_month = @el.find('#customer_success_end_date_2i').val()
    end_day = @el.find('#customer_success_end_date_3i').val()
    end_date = end_year + "-" + end_month + "-" + end_day

    query = "?start_date=" + start_date + "&end_date=" + end_date

    sort_by = @el.find('#customer_success_sort_by').val()
    query += "&sort_by=" + sort_by unless sort_by is ''

    created_at = @el.find('#customer_success_created_at').val()
    query += "&created_at=" + created_at unless created_at is ''

    account_type = @el.find('#customer_success_account_type').val()
    query += "&account_type=" + account_type unless account_type is ''

    account_status = @el.find('#customer_success_account_status').val()
    query += "&account_status=" + account_status unless account_status is ''

    logo = @el.find('#customer_success_logo').val()
    query += "&logo=" + logo unless logo is ''

    portfolios = @el.find('#customer_success_model_portfolio').val()
    query += "&model_portfolio=" + portfolios unless portfolios is ''

    embed_used = @el.find('#customer_success_embed_used').val()
    query += "&embed_used=" + embed_used unless embed_used is ''

    mass_client_email = @el.find('#customer_success_mass_client_email').val()
    query += "&mass_client_email=" + mass_client_email unless mass_client_email is ''

    mass_client_upload = @el.find('#customer_success_mass_client_upload').val()
    query += "&mass_client_upload=" + mass_client_upload unless mass_client_upload is ''

    webinar = @el.find('#customer_success_webinar').val()
    query += "&webinar=" + webinar unless webinar is ''

    query

window.CustomerSuccessController = CustomerSuccessController
