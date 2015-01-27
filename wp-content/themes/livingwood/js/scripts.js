$(function(){

$('select').selectBox();


if($('#map').length>0){
  $('#map').gmap({
    markers: [{'latitude': 52.2291233,'longitude': 0.8600701,'name': 'Livingwood','content': 'Address'}],
    markerFile:  'http://92.60.114.159/~corporat/wp-content/themes/corporate_resolve/images/marker.png',
    markerWidth:39,
    markerHeight:52,
    markerAnchorX:19,
    markerAnchorY:52,
    zoom: 12
  })
}

if($('#product-slider').length){
	$('#product-slider').slick({
		dots: true,
		autoplay: false,
  		autoplaySpeed: 5000,
  		arrows: true
	});
	
}

$('#opening-element-carousel').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 8,
      slidesToScroll: 1,
      responsive: [
      {
          breakpoint: 1024,
          settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
    },
      
      {
        breakpoint: 480,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
      }
   ]
  });

});