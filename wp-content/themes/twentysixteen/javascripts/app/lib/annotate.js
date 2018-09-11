window.App = window.App || {};


var selector;

App.annotate = function(questionId, pageType) {
  if (pageType == 'intro' || pageType == 'outro') {
    var annotation = $('#' + pageType);
    selector = $('p').first();
  }

  if (pageType == 'question') {
    var questionNumber = parseInt(questionId) + 1;
    var annotation = $('#annotation_' + questionNumber);
    selector = 'label[for="question_' + questionId + '"]';
  }

  if (annotation.html() != "") {
    $(selector).popover({
      content: annotation.html(),
      title: annotation.data('title'),
      html: true,
      placement: 'right'
    });
  }

  $(selector).popover('show');
  if (pageType == 'intro') {
    var popover = $('.popover');
    popover.css('top', '120px');
    popover.css('left', '725px');
  } else if (pageType == 'outro') {
    var popover = $('.popover');
    popover.css('top', '70px');
    popover.css('left', '625px');
  } else {
    var popover = $('.popover');
    popover.css('top', '10px');
    popover.css('left', '600px');
  }
}

App.annotate_report = function() {
  var annotation1 = $('.part-heading');
  annotation1.popover({
    content: $('#report_annotation_1').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'top left'
  });
  annotation1.popover('show');

  var annotation2 = $('ul.graph-bar');
  annotation2.popover({
    content: $('#report_annotation_2').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation2.popover('show');

  var annotation3 = $('h3:contains("Are my answers consistent?")');
  annotation3.popover({
    content: $('#report_annotation_3').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation3.popover('show');
  annotation3.next('.popover').css('top', '1360px');
  annotation3.next('.popover').css('left', '900px');

  var annotation4 = $('h3:contains("Your Completed Questionnaire")');
  annotation4.popover({
    content: $('#report_annotation_4').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation4.popover('show');
  annotation4.next('.popover').css('top', '2255px');
  annotation4.next('.popover').css('left', '900px');
}

App.annotate_sample_report = function() {
  var annotation1 = $('.part-heading');
  annotation1.popover({
    content: $('#sample_report_annotation_1').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation1.popover('show');
  annotation1.next('.popover').css('top', '170px');
  annotation1.next('.popover').css('left', '900px');

  var annotation2 = $('ul.graph-bar');
  annotation2.popover({
    content: $('#sample_report_annotation_2').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation2.popover('show');

  var annotation3 = $('h3:contains("Are my answers consistent?")');
  annotation3.popover({
    content: $('#sample_report_annotation_3').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation3.popover('show');
  annotation3.next('.popover').css('top', '1450px');
  annotation3.next('.popover').css('left', '900px');

  var annotation4 = $('h3:contains("Connecting Your Score To A Portfolio")');
  annotation4.popover({
    content: $('#sample_report_annotation_4').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation4.popover('show');

  var annotation5 = $('span.qid:contains("4.")')
  annotation5.popover({
    content: $('#sample_report_annotation_5').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation5.popover('show');
  annotation5.next('.popover').css('top', '3000px');
  annotation5.next('.popover').css('left', '600px');

  var annotation6 = $('h3:contains("Using This Report")')
  annotation6.popover({
    content: $('#sample_report_annotation_6').html(),
    html: true,
    title: "Pocket Risk Tour",
    placement: 'right'
  });
  annotation6.popover('show');
  annotation6.next('.popover').css('top', '5200px');

  $('.graph-bar > li > span').css('bottom', '-3em');
  $('.graph-bar .bar').css('margin-bottom', '-15px');
  $('.compliance').remove();
}

App.hidePopoverOnBlur = function() {
  $('.content').on('click', function (e) {
    $(selector).popover('hide');
  });
}
