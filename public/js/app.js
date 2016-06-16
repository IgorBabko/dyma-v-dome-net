(function() {
  $(function() {
    $('.slick-carousel').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000
    });
    $('.single-feature').hover(function() {
      var imgName;
      imgName = $(this).parent('a').attr('href');
      $('.tab-content .tab-pane').removeClass('active');
      return $('#' + imgName).addClass('active');
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
      return $(this).alert('close');
    });
    $("input[name='width']").change(function(e) {
      var changePricesTableRequest, itemName, width;
      console.log('niko');
      width = $(this).val();
      itemName = $(this).parent().siblings('name').text();
      console.log('itemName: ' + itemName);
      console.log('width: ' + width);
      changePricesTableRequest = $.ajax({
        url: "/prices/" + itemName + "/" + width,
        method: "GET"
      });
      changePricesTableRequest.done(data(function() {
        return console.log(data);
      }));
      return changePricesTableRequest.fail(function(jqXHR, textStatus) {
        return console.log('fail');
      });
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
