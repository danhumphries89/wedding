$(window).ready(function(){

	//load the google map
	initializeGoogleMap();

	//simple scrollTo animation
	$('.menu-item > a').click(function(event){
		event.preventDefault();

		$('html,body').animate({
			scrollTop: ($(this.hash).offset().top - 50)
		}, 500, 'swing');

	});
});

$(window).scroll(function(){

	var scrollPosition = $(window).scrollTop();
	var mainMenu = $('.main_nav');

	//check what the scroll position is for the menu
	if(scrollPosition > 0){
		
		mainMenu.css({ 'box-shadow': '0 2px 5px #555' });
	}
	if(scrollPosition === 0){
		mainMenu.css({ 'box-shadow': 'none' });
	}
});

function initializeGoogleMap() {
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#333333" },
        { saturation: -75 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(51.101925, 1.039549),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}