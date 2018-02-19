<?php

function dump_me_accomm($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, a.stars, a.basic_bed, a.extra_bed, "
            . "l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, d.id, d.hr "
            . "FROM accommodation AS a "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "JOIN accommodation_desc AS d ON d.id = a.id WHERE a.id = $id");
    $pics = ("SELECT id, path FROM accommodation_pics WHERE fk_accomm = $id");
    $data_res = $conn->query($data);
    $pics_res = $conn->query($pics);
    $data_row = $data_res->fetch_assoc();
    $pics_row = $pics_res->fetch_assoc();
    fetch_me_accomm($data_row, $pics_row);
}

function dump_me_beach($id) {
    //query
}

function dump_me_beauty($id) {
    //query
}

function dump_me_medicine($id) {
    //query
}

function dump_me_restaurant($id) {
    //query
}

function dump_me_shopping($id) {
    //query
}

function dump_me_transport($id) {
    //query
}

function fetch_me_accomm($data_row, $pics_row){
    echo '<div class="container space">';
        ///////////////////////////////////////////////TITLE
        echo '<div class="row text-center">';
            echo '<h2 class="object_title">'.$data_row['name'].'</h2>';
        echo '</div>';
        echo '<div class="row text-center">';
            for ($i = 0; $i < $data_row['stars']; $i++) {
                echo '<span class="object_stars"></span>';
            }
        echo '</div>';
        echo '<div class="row object_beds text-center">';
            echo '( '.$data_row['basic_bed'].' / '.$data_row['extra_bed'].' )';
        echo '</div>';
        echo '<div class="row space">';
            //////////////////////////////////////////DESCRIPTION//////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12">';
                echo '<div>'.$data_row['hr'].'</div>';
            echo '</div>';
            ////////////////////////////////////////////ADDRESS////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 text-center object_address">';
                echo '<div class="row">';
                    echo '<div>'.$data_row['address'].'</div>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<div>'.$data_row['city'].'</div>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<div>'.$data_row['zip'].'</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            ////////////////////////////////////////////CAROUSEL///////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12 object_carousel">';
                require_once '/accomm_carousel.php';
                carousel($data_row['id'], $pics_row);
            echo '</div>';
            //////////////////////////////////////////////MAP//////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 object_map">';
                echo '<div id="map"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    //script for map
}

function fetch_me_data($r){
    //dump_html
}