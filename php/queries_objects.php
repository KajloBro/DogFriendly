<?php

require 'connection.php';

function accomm() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, a.stars, a.basic_bed, a.extra_bed, p.path, l.fk_city, c.name AS city FROM accommodation_pics AS p "
            . "JOIN accommodation AS a ON p.fk_accomm = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_accomm($r, 'accomm');
}

function beach() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beach_pics AS p "
            . "JOIN beach AS a ON p.fk_beach = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'beach');
}

function beauty() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beauty_pics AS p "
            . "JOIN beauty AS a ON p.fk_beauty = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'beauty');
}

function medicine() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM medicine_pics AS p "
            . "JOIN medicine AS a ON p.fk_medicine = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'medicine');
}

function restaurant() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM restaurant_pics AS p "
            . "JOIN restaurant AS a ON p.fk_restaurant = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'restaurant');
}

function shopping() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM shopping_pics AS p "
            . "JOIN shopping AS a ON p.fk_shopping = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'shopping');
}

function transport() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM transport_pics AS p "
            . "JOIN transport AS a ON p.fk_transport = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'transport');
}

function print_accomm($r, $link) {
    echo '<div class="container space"><div class="row">';
    while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap">
                    <a href="object.php?section='.$link.'&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                    . 'alt="'.$row['name'].'">
                        <div class="middle">
                            <div class="object_data_white data">
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
    echo '<div class="row"><div class="col-xs-12"><div id="map"></div></div></div></div>';
    echo '<script src="js/map_'.$link.'.js"></script>';
}

function print_data($r, $link) {
    echo '<div class="container space"><div class="row">';
    while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap">
                    <a href="object.php?section='.$link.'&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                    . 'alt="'.$row['name'].'">
                        <div class="middle">
                            <div class="object_data_white">
                                <p>'.$row['name'].'</p>
                                <p>'.$row['city'].'</p>
                            </div>
                        </div>
                    </a>
              </div>';
    }
    echo '</div>';
    echo '<div class="row"><div class="col-xs-12"><div id="map"></div></div></div></div>';
    echo '<script src="js/map_'.$link.'.js"></script>';
}
