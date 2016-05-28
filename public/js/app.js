(function() {
  $(function() {
    var map;
    map = new GMaps({
      el: '#map',
      lat: 50.44985,
      lng: 30.523151
    });
    return map.addMarker({
      lat: 50.44985,
      lng: 30.523151,
      title: 'Kiev',
      infoWindow: {
        content: '<h4>Kiev</h4>',
        maxWidth: 100
      }
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
