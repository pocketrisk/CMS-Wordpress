//= require webpack-bundle

// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// or vendor/assets/javascripts of plugins, if any, can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear at the bottom of the
// the compiled file.
//
// WARNING: THE FIRST BLANK LINE MARKS THE END OF WHAT'S TO BE PROCESSED, ANY BLANK LINE SHOULD
// GO AFTER THE REQUIRES BELOW.
//
//= require jquery
//= require jquery_ujs
//= require underscore
//= require spine
//= require bootstrap
//= require jquery.metadata
//= require jquery.tablesort.min
//= require jquery.ui.widget
//= require jquery.iframe-transport
//= require jquery.fileupload
//= require form-attribute-polyfill
//= require_tree ./app

//= require semantic-ui

jQuery(function(){
  $(".tip").tooltip({placement: 'bottom'});

  setInterval((function() {
    if($('#zipping-progress').is(':visible')){
      $.ajax({
        type: "GET",
        url: $('#zipping-progress').data('path'),
        
        error: function(xhr, ajaxOptions, thrownError) {
          var er;
          er = JSON.parse(xhr.responseText);
          return console.log(er);
        },
        success: function(data) {
          if ( data['data']['status'] == 'done' ){
            $('#zipping-progress').hide();
            $('#zipped-reports').html(data['data']['html']).show();
          } else if ( data['data']['status'] == 'scheduled' ) {
            $('#zipped-reports').hide();
            $('.zip-progress-msg').html(data['data']['html']).show();
          }
          else{
            $('#zipping-progress').show();
          }
        }
      });
    }
  }), 5000);
})
