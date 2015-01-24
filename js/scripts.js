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

});