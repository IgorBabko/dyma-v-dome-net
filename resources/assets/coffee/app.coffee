$ ->

    map = new GMaps(
        el: '#map'
        lat: 50.44985
        lng: 30.523151
        draggable: false
        scrollwheel: false
        disableDoubleClickZoom: true
        zoomControl: false
    )

    map.addMarker
        lat: 50.44985
        lng: 30.523151
        title: 'Kiev'
        infoWindow:
            content: '<h4>Kiev</h4>'
            maxWidth: 100

    return

# scroll to the top button
$.goup()
    
