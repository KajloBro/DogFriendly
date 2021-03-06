function myMap() {
    var options = {
    zoom: 10,
    center : {lat: 45.0809, lng: 14.5926},
        styles:
            [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]

    };

    var map = new google.maps.Map(document.getElementById('map'), options);
    
    var coords = new google.maps.LatLng(45.080136, 14.456912);
    var marker = new google.maps.Marker({
       position: coords,
       map: map,
       icon: '../img/markers/malnar.png',
       zIndex: 9999
    });
    var infoWindow = new google.maps.InfoWindow({
        content: '<a class="normal_text" href="http://www.krktourist.com">\n\
                  <img src="../img/project/logo_with_footer.png" alt="Malnar-Gabor" style="width:150px"/></a>'
    });
    marker.addListener('click', function(){
        infoWindow.open(map, marker);
        setTimeout(function () { infoWindow.close(); }, 2000);
    });
    
    function get_markers(json, icon, link) {
        $.getJSON(json, function(data) { 
            $.each(data, function(i, value) {
                var myLatlng = new google.maps.LatLng(value.lat, value.lng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    icon: (icon)
                });
                var infoWindow = new google.maps.InfoWindow({
                    content: '<a class="normal_text_black" href="' + link + value.id + '"><p>' + value.name + '</p>\n\
                            <img src="' + value.path + '" alt="' + value.name + '" style="width:150px"></a>'
                });
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                    setTimeout(function () { infoWindow.close(); }, 2000);
                });
            });
        });
    };
    
    get_markers('../json/accomm_markers.php', '../img/markers/lodging-2.png', 'object.php?section=accomm&id=');
    get_markers('../json/beach_markers.php', '../img/markers/beach_icon.png', 'object.php?section=beach&id=');
    get_markers('../json/beauty_markers.php', '../img/markers/highhills.png', 'object.php?section=beauty&id=');
    get_markers('../json/medicine_markers.php', '../img/markers/firstaid.png', 'object.php?section=medicine&id=');
    get_markers('../json/restaurant_markers.php', '../img/markers/restaurant.png', 'object.php?section=restaurant&id=');
    get_markers('../json/shopping_markers.php', '../img/markers/mall.png', 'object.php?section=shopping&id=');
    get_markers('../json/transport_markers.php', '../img/markers/bus.png', 'object.php?section=transport&id=');
}

