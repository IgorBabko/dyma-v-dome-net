$ ->

#    map = new GMaps(
#        el: '#map'
#        lat: 50.44985
#        lng: 30.523151
#        draggable: false
#        scrollwheel: false
#        disableDoubleClickZoom: true
#        zoomControl: false
#    )
#
#    map.addMarker
#        lat: 50.44985
#        lng: 30.523151
#        title: 'Kiev'
#        infoWindow:
#            content: '<h4>Kiev</h4>'
#            maxWidth: 100


    # change pictures when hovering categories on the main screen
    $mainImg = $('.tab-content img')
    console.log 'jerry'
    $('.single-feature').hover ->
        console.log 'mike'
        imgName = $(this).parent('a').attr('href')
        imgPath = '/images/' + imgName + '.png'
        $mainImg.attr('src', imgPath)

        

    return

# scroll to the top button
$.goup()


# initialize fancybox plugin (cool image viewer)
$("a.fancy-img").fancyboxPlus
	'transitionIn': 'elastic'
	'transitionOut': 'elastic'
	'speedIn':	600
	'speedOut':	200
	'overlayShow':	false
