function myMap() {
    var options = {
        zoom : 10,
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
                    content: '<a class="normal_text_black" href="object.php?section='+link + value.id + '"><p>' + value.name + '</p>\n\
                            <img src="' + value.path + '" alt="' + value.name + '" style="width:150px"></a>'
                });
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                    setTimeout(function () { infoWindow.close(); }, 2000);
                });
            });
        });
    };

    get_markers('../json/accomm_markers.php', '../img/markers/lodging-2.png', 'accomm&id=');

    var coords = new google.maps.LatLng(45.080136, 14.456912);
    var marker = new google.maps.Marker({
       position: coords,
       map: map,
       icon: '../img/markers/malnar.png'
    });
    var infoWindow = new google.maps.InfoWindow({
        content: '<a class="normal_text" href="http://www.krktourist.com">\n\
                  <img src="../img/project/logo_with_footer.png" alt="Malnar-Gabor" style="width:150px"/></a>'
    });
    marker.addListener('click', function(){
        infoWindow.open(map, marker);
        setTimeout(function () { infoWindow.close(); }, 2000);
    });
}

