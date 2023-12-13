function initMap() {
	const LatLng= {lat: , lng:};
	const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 15,
		center: LatLng,
	});
	const contentString =
	'<div id="content">' +
	'<div id="siteNotice">' +	
	"</div>" +
	'<h1 id="firstHeading" class="firstHeading> </h1>' +
	'<div id="bodyContent">' +
	"<p><b> </b> </p>" +
	'<p> </p>' +
	"</div>" +
	"</div>";
	
	const infowindow = new google.maps.InfoWindow({
		content: contentString,
		ariaLabel: " ",
	});
	
	const marker = new google.maps.Marker({
		position: LatLng,
		map: map,
		title: ' ',
		icon: ' ',
	  });
	});
	
	marker.addListener("click", () => {
		infowindow.open({
		 anchor: marker,
		 map,
	  });
	});
	
	var additionalMarker = new google.maps.Marker({
		position: LatLng,
		map: map,
		title: ' ',
		icon: ' ',
	});
	
	const trafficLayer = new google.maps.TrafficLayer();
	trafficLayer.setMap(map);
	}
	
	window.initMap = initMap;