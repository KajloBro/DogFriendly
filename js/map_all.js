function myMap() {
    var options = {
        zoom : 10,
        center : {lat: 45.0809, lng: 14.5926}
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
                    content: '<a class="normal_text" href="' + link + value.id + '"><p>' + value.name + '</p>\n\
                            <img src="' + value.path + '" alt="' + value.name + '" style="width:150px"></a>'
                });
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                    setTimeout(function () { infoWindow.close(); }, 5000);
                });
            });
        });
    };
    
    get_markers('ajax/accomm_markers.php', 'img/markers/lodging-2.png', 'apartment.php?id=');
    get_markers('ajax/beach_markers.php', 'img/markers/beach_icon.png', 'beach.php?id=');
    get_markers('ajax/beauty_markers.php', 'img/markers/highhills.png', 'beauty.php?id=');
    get_markers('ajax/medicine_markers.php', 'img/markers/firstaid.png', 'medicine.php?id=');
    get_markers('ajax/restaurant_markers.php', 'img/markers/restaurant.png', 'restaurant.php?id=');
    get_markers('ajax/shopping_markers.php', 'img/markers/mall.png', 'shopping.php?id=');
    get_markers('ajax/transport_markers.php', 'img/markers/bus.png', 'transport.php?id=');
}

