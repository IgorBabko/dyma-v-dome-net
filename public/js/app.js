(function() {
  $(function() {
    var $mainImg;
    $mainImg = $('.tab-content img');
    console.log('jerry');
    $('.single-feature').hover(function() {
      var imgName, imgPath;
      console.log('mike');
      imgName = $(this).parent('a').attr('href');
      imgPath = '/images/' + imgName + '.png';
      return $mainImg.attr('src', imgPath);
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
