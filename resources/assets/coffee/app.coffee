$ ->
    $('.slick-carousel').slick
        slidesToShow: 5 
        slidesToScroll: 1
        autoplay: true
        autoplaySpeed: 2000

    if ($('#text')).length 
        CKEDITOR.config.height = 700 
        CKEDITOR.replace('text')

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
    $('.single-feature').hover ->
        imgName = $(this).parent('a').attr('href')
        $('.tab-content .tab-pane').removeClass('active')
        $('#' + imgName).addClass('active')

    $(".alert-success").fadeTo(2000, 500).slideUp 500, ->
        $(this).alert 'close'


    # change prices tables
    $("input[name='width']").change (e) ->
        console.log('niko')
        width = $(this).val()
        itemName = $(this).parent().siblings('name').text()

        console.log 'itemName: ' + itemName
        console.log 'width: ' + width

        changePricesTableRequest = $.ajax
            url: "/prices/" + itemName + "/" + width
            method: "GET"
         
        changePricesTableRequest.done data ->
            console.log data 
         
        changePricesTableRequest.fail (jqXHR, textStatus) ->
            console.log 'fail'

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
