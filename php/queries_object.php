<?php

function dump_me_accomm($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, a.stars, a.basic_bed, a.extra_bed, a.rooms, a.wifi, a.parking, a.grill, a.pool, a.ac, "
            . "a.tv, a.dist_beach, a.dist_shop, a.dist_rest, a.dog_food, a.dog_bowl, a.dog_bed, "
            . "l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip "
            . "FROM accommodation AS a "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "WHERE a.id = $id");
    
    $r = $conn->query($data);
    $row = $r->fetch_assoc();
    fetch_me_accomm($row);
}

function dump_me_beach($id) {
    global $conn;
    $data = ("SELECT a.id, a.name AS name, l.fk_city, l.name AS address, l.lat, l.lng, c.name AS city, c.zip, "
            . "d.id, d.en AS descript, loc.id, loc.en AS location, e.id, e.en AS equipment "
            . "FROM beach AS a JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "JOIN beach_desc AS d ON d.id = a.fk_desc "
            . "JOIN beach_loc AS loc ON a.fk_loc = loc.id "
            . "JOIN beach_equipment AS e ON a.fk_equipment = e.id "
            . "WHERE a.id = $id");
    $pics = ("SELECT * FROM beach_pics WHERE fk_beach = $id");
    $r = $conn->query($data);
    $pics_res = $conn->query($pics);
    $row = $r->fetch_assoc();
    fetch_me_beach($row, $pics_res);
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
        ///////////////////////////////////////////////TITLE///////////////////////////////////////////////
        echo '<div class="row text-center">';
            echo '<h2 class="object_title">'.$row['name'].', '.$row['address'].' - '.$row['city'].' - '.$row['zip'].'</h2>';
        echo '</div>';
        ///////////////////////////////////////ROW 4 beds, rooms 'n' stars/////////////////////////////////
        echo '<div class="row text-center space">';
            echo '<div class="col-md-4 col-xs-12">';
                echo '<div class="object_beds">';
                    echo 'Person: '.$row['basic_bed'].' + '.$row['extra_bed'].'';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-4 col-xs-12">';
                echo '<div class="object_beds">';
                    echo 'Rooms: '.$row['rooms'].'';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-4 col-xs-12">';
                for ($i = 0; $i < $row['stars']; $i++) {
                    echo '<span class="object_stars"></span>';
                }
                for ($i = 0; $i < (5 - $row['stars']); $i++) {
                    echo '<span class="object_empty_stars"></span>';
                }
            echo '</div>';
        echo '</div>';
            //////////////////////////////////////////booleans///////////////////////////////////////
        echo '<div class="row attributes space">';
            echo '<div class="col-md-3 col-xs-12 radios">';
                if ($row['parking'] == 1){echo '<p class="parking parking1">Free Parking</p>';}
                else {echo '<p class="parking parking0">Free Parking</p>';}
                if ($row['grill'] == 1){echo '<p class="grill grill1">Grill</p>';}
                else {echo '<p class="grill grill0">Grill</p>';}
                if ($row['wifi'] == 1){echo '<p class="wifi wifi1">Wi-Fi</p>';}
                else {echo '<p class="wifi wifi0">Wi-Fi</p>';}
            echo '</div>';
            echo '<div class="col-md-3 col-xs-12 radios">';
                if ($row['pool'] == 1){echo '<p class="pool pool1">Pool</p>';}
                else {echo '<p class="pool pool0">Pool</p>';}
                if ($row['ac'] == 1){echo '<p class="ac ac1">Air-Condition</p>';}
                else {echo '<p class="ac ac0">Air-Condition</p>';}
                if ($row['tv'] == 1){echo '<p class="tv tv1">TV</p>';}
                else {echo '<p class="tv tv0">TV</p>';}
            echo '</div>';
            echo '<div class="col-md-3 col-xs-12 radios">';
                if ($row['dog_food'] == 1){echo '<p class="dog_food dog_food1">Dog Food</p>';}
                else {echo '<p class="dog_food dog_food0">Dog Food</p>';}
                if ($row['dog_bowl'] == 1){echo '<p class="dog_bowl dog_bowl1">Dog Bowl(s)</p>';}
                else {echo '<p class="dog_bowl dog_bowl0">Dog Bowl(s)</p>';}
                if ($row['dog_bed'] == 1){echo '<p class="dog_bed dog_bed1">Dog Bed</p>';}
                else {echo '<p class="dog_bed dog_bed0">Dog Bed</p>';}
            echo '</div>';
            echo '<div class="col-md-3 col-xs-12 radios">';
                echo '<p class="dist_beach">Beach - '.$row['dist_beach'].' m</p>';
                echo '<p class="dist_shop">Shop - '.$row['dist_shop'].' m</p>';
                echo '<p class="dist_rest">Restaurant - '.$row['dist_rest'].' m</p>';
            echo '</div>';
        echo '</div>';
            ////////////////////////////////////////////CAROUSEL///////////////////////////////////////////
            echo '<div class="col-md-8 col-xs-12 object_carousel">';
                require_once 'php/accomm_gallery.php';
                carousel($row['id']);
            echo '</div>';
            //////////////////////////////////////////////MAP//////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 space space_bot">';
                echo '<div id="map"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    echo '<div class="container">';
        //////////////////////////////////////////////MODALS////////////////////////////////////////////////
    require 'php/modals.php';
    accomm();
    echo '</div>';
    //////////////////////////////////////////////ACCOMM////////////////////////////////////////////////////
    echo '<hr class="my_custom_line">';
    echo '<hr class="my_custom_line space_bot">';
    echo '<div class="container">';
    echo '<h3 class="object_title" style="padding-left: 40px;">Accommodation</h3>';
    echo '<div class="space_bot"></div>';
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, a.stars, a.basic_bed, a.extra_bed, p.path, l.fk_city, c.name AS city FROM accommodation_pics AS p "
            . "JOIN accommodation AS a ON p.fk_accomm = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
        while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space_bot">
                    <div class="hover_2_caption object_data_black"><p>'.$row['name'].' '.$row['city'].'</p>'
                 . '<p>Stars: '.$row['stars'].' ('.$row['basic_bed'].' + '.$row['extra_bed'].')</p></div>
                    <a href="object.php?section=accomm&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                    . 'alt="'.$row['name'].'">
                        <div class="middle">
                            <div class="object_data_black data">
                                <p>'.$row['name'].'</p>
                                <p>'.$row['city'].'</p>
                                <p>Stars: '.$row['stars'].'</p>
                                <p>Basic bed: '.$row['basic_bed'].'</p>
                                <p>Extra bed: '.$row['extra_bed'].'</p>
                            </div>
                        </div>
                    </a>
              </div>';
    }
    echo '</div>';
    
}

function fetch_me_beach($row, $pics_res) {
    echo '<div class="container space">';
        //////////////////////////////////////////////TITLE////////////////////////////////////////////////
        echo '<div class="row text-center space_bot">';
            echo '<h2 class="object_title gimme_some_margin_bot">'.$row['name'].', '.$row['city'].' - '.$row['zip'].'</h2>';
        echo '</div>';
        //////////////////////////////////////////////ABOUT////////////////////////////////////////////////
        echo '<div class="col-xs-12 beach_headings lil_space_bot">';
            echo '<div>Something you should know: </div>';
        echo '</div>';
        echo '<div class="col-xs-12 beach_content space_bot">';
            echo '<div>'.$row['descript'].'</div>';
        echo '</div>';
        //////////////////////////////////////////////HOW TO////////////////////////////////////////////////
        echo '<div class="col-xs-12 beach_headings lil_space_bot">';
            echo '<div>But how we\'re gonna get there? </div>';
        echo '</div>';
        echo '<div class="col-xs-12 beach_content space_bot">';
            echo '<div>'.$row['location'].'</div>';
        echo '</div>';
        //////////////////////////////////////////////FACILITIES////////////////////////////////////////////////
        echo '<div class="col-xs-12 beach_headings lil_space_bot">';
            echo '<div>What about some facilities? </div>';
        echo '</div>';
        echo '<div class="col-xs-12 beach_content space_bot">';
            echo '<div>'.$row['equipment'].'</div>';
        echo '</div>';
        ////////////////////////////////////////////CAROUSEL///////////////////////////////////////////////
        echo '<div class="row">';
            echo '<div class="col-md-8 col-xs-12 object_carousel">';
                require_once 'php/object_gallery.php';
                gallery($pics_res);
            echo '</div>';
            //////////////////////////////////////////////MAP//////////////////////////////////////////////
            echo '<div class="col-md-4 col-xs-12 object_map space">';
                echo '<div id="map"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    echo '<div class="container">';
    ////////////////////////////////////////////MODALS///////////////////////////////////////////////
    require 'php/modals.php';
    beach();
    echo '</div>';
    //////////////////////////////////////////////BEACHES////////////////////////////////////////////
    echo '<hr class="my_custom_line">';
    echo '<hr class="my_custom_line space_bot">';
    echo '<div class="container">';
    echo '<h3 class="object_title" style="padding-left: 40px;">Beaches</h3>';
    echo '<div class="space_bot"></div>';
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beach_pics AS p "
            . "JOIN beach AS a ON p.fk_beach = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
        while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space_bot">
                    <a href="object.php?section=beach&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                    . 'alt="'.$row['name'].'">
                        <div class="middle">
                            <div class="object_data_black">
                                <p>'.$row['name'].'</p>
                                <p>'.$row['city'].'</p>
                            </div>
                        </div>
                    </a>
              </div>';
    }
    echo '</div>';
}


function fetch_me_data($row, $pics_res){
    echo '<div class="container space">';
        //////////////////////////////////////////////TITLE////////////////////////////////////////////////
        echo '<div class="row text-center">';
            echo '<h2 class="object_title gimme_some_margin_bot">'.$row['name'].'</h2>';
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