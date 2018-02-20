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
    print_data($r, 'beach', 'Beaches','“The only creatures that are evolved enough to convey pure love are dogs and infants.”', '- Johnny Depp');
}

function beauty() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beauty_pics AS p "
            . "JOIN beauty AS a ON p.fk_beauty = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'beauty', 'Beauty', '“There are three faithful friends: an old wife, an old dog, and ready money.”', '- Benjamin Franklin');
}

function medicine() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM medicine_pics AS p "
            . "JOIN medicine AS a ON p.fk_medicine = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'medicine', 'Medicine', '“I care not for a man’s religion whose dog and cat are not the better for it.”', '- Abraham Lincoln');
}

function restaurant() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM restaurant_pics AS p "
            . "JOIN restaurant AS a ON p.fk_restaurant = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'restaurant', 'Restaurants', '“Hounds follow those who feed them.”', '- Otto von Bismarck');
}

function shopping() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM shopping_pics AS p "
            . "JOIN shopping AS a ON p.fk_shopping = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'shopping', 'Shopping', '“Dogs got personality. Personality goes a long way.”', '- Quentin Tarantino');
}

function transport() {
    global $conn;
    $sql = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM transport_pics AS p "
            . "JOIN transport AS a ON p.fk_transport = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip ");
    $r = $conn->query($sql);
    print_data($r, 'transport', 'Transport', '“Heaven goes by favor. If it went by merit, you would stay out and your dog would go in.”', 
            '- Mark Twain');
}

function print_accomm($r, $link) {
    echo '<div class="container space"><div class="row">';
    echo '<div class="row">';
        echo '<div class="col-md-6 col-xs-12 text-left section_title">';
            echo '<h2 class="section_heading_at_objects">Accommodation</h2>';
        echo '</div>';
        echo '<div class="col-md-6 col-xs-12 text-right quote">';
            echo '<p>“Dogs never bite me. Just humans.”</p>';
            echo '<p>- Marilyn Monroe</p>';
        echo '</div>';
    echo '</div>';
    while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space">
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

function print_data($r, $link, $title, $quote, $author) {
    echo '<div class="container space"><div class="row">';
    echo '<div class="row">';
        echo '<div class="col-md-6 col-xs-12 text-left section_title">';
            echo '<h2 class="section_heading_at_objects">'.$title.'</h2>';
        echo '</div>';
        echo '<div class="col-md-6 col-xs-12 text-right quote">';
            echo '<p>'.$quote.'</p>';
            echo '<p>'.$author.'</p>';
        echo '</div>';
    echo '</div>';
    while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space">
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
