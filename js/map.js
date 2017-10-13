function initMap() {
	var london = {lat: 51.4909566, lng: -0.0967698};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  center: london
	});
	var marker = new google.maps.Marker({
	  position: london,
	  map: map
	});
  }