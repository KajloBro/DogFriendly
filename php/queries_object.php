<?php

function dump_me_accomm($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, a.stars, a.basic_bed, a.extra_bed, "
            . "l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM accommodation AS a "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "JOIN accommodation_desc AS d ON d.id = a.id WHERE a.id = $id");
    
    $r = $conn->query($data);
    $row = $r->fetch_assoc();
    fetch_me_accomm($row);
}

function dump_me_beach($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM beach AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN beach_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM beach_pics WHERE fk_beach = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function dump_me_beauty($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM beauty AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN beauty_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM beauty_pics WHERE fk_beauty = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function dump_me_medicine($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM medicine AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN medicine_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM medicine_pics WHERE fk_medicine = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function dump_me_restaurant($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM restaurant AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN restaurant_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM restaurant_pics WHERE fk_restaurant = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function dump_me_shopping($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM shopping AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN shopping_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM shopping_pics WHERE fk_shopping = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function dump_me_transport($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.en "
            . "FROM transport AS a JOIN address as l ON a.fk_address = l.id JOIN city AS c ON l.fk_city = c.zip JOIN transport_desc AS d ON d.id = a.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM transport_pics WHERE fk_transport = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_data($row, $pics_res);
}

function fetch_me_accomm($row){
    echo '<div class="container space">';
        ///////////////////////////////////////////////TITLE
        echo '<div class="row text-center">';
            echo '<h2 class="object_title">'.$row['name'].'</h2>';
        echo '</div>';
        echo '<div class="row text-center">';
            for ($i = 0; $i < $row['stars']; $i++) {
                echo '<span class="object_stars"></span>';
            }
        echo '</div>';
        echo '<div class="row object_beds text-center">';
            echo '( '.$row['basic_bed'].' / '.$row['extra_bed'].' )';
        echo '</div>';
        echo '<div class="row space">';
            //////////////////////////////////////////DESCRIPTION//////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12">';
                echo '<div>'.$row['en'].'</div>';
            echo '</div>';
            ////////////////////////////////////////////ADDRESS////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 text-center object_address">';
                echo '<div class="row">';
                    echo '<div>'.$row['address'].'</div>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<div>'.$row['city'].'</div>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<div>'.$row['zip'].'</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            ////////////////////////////////////////////CAROUSEL///////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12 object_carousel">';
                require_once 'php/accomm_gallery.php';
                carousel($row['id']);
            echo '</div>';
            //////////////////////////////////////////////MAP//////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 object_map">';
                echo '<div id="map"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    //script for map
}

function fetch_me_data($row, $pics_res){
    echo '<div class="container space">';
        //////////////////////////////////////////////TITLE////////////////////////////////////////////////
        echo '<div class="row text-center">';
            echo '<h2 class="object_title gimme_some_margin_bot">'.$row['name'].'</h2>';
        echo '</div>';
        echo '<div class="col-md-8 col-xs-12">';
            echo '<div>'.$row['en'].'</div>';
        echo '</div>';
        echo '<div class="col-md-4 col-xs-12 text-center object_address">';
            //////////////////////////////////////////////ADDRESS///////////////////////////////////////////
            echo '<div class="row">';
                echo '<div>'.$row['address'].'</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div>'.$row['city'].'</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div>'.$row['zip'].'</div>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            ////////////////////////////////////////////CAROUSEL///////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12 object_carousel">';
                require_once 'php/object_gallery.php';
                gallery($pics_res);
            echo '</div>';
            //////////////////////////////////////////////MAP//////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 object_map">';
                echo '<div id="map"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    //TO DO: skripta za mapu
}