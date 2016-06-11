(function() {
  $(function() {
    $('.single-feature').hover(function() {
      var imgName;
      imgName = $(this).parent('a').attr('href');
      $('.tab-content .tab-pane').removeClass('active');
      return $('#' + imgName).addClass('active');
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
      return $(this).alert('close');
    });
  });

  $.goup();

  $("a.fancy-img").fancyboxPlus({
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'speedIn': 600,
    'speedOut': 200,
    'overlayShow': false
  });

}).call(this);

//# sourceMappingURL=app.js.map
