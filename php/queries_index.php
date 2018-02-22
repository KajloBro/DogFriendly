<?php

function dump_accom() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM accommodation_pics AS p "
            . "JOIN accommodation AS a ON p.fk_accomm = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=accomm');
}

function dump_beach() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beach_pics AS p "
            . "JOIN beach AS a ON p.fk_beach = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=beach');
}

function dump_beauty() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM beauty_pics AS p "
            . "JOIN beauty AS a ON p.fk_beauty = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=beauty');
}

function dump_medicine() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM medicine_pics AS p "
            . "JOIN medicine AS a ON p.fk_medicine = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=medicine');
}

function dump_restaurant() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM restaurant_pics AS p "
            . "JOIN restaurant AS a ON p.fk_restaurant = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=restaurant');
}

function dump_shopping() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM shopping_pics AS p "
            . "JOIN shopping AS a ON p.fk_shopping = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=shopping');
}

function dump_transport() {
    global $conn;
    $dump1 = ("SELECT a.id, a.name AS name, p.path, l.fk_city, c.name AS city FROM transport_pics AS p "
            . "JOIN transport AS a ON p.fk_transport = a.id AND p.part = 'main' "
            . "JOIN address as l ON a.fk_address = l.id "
            . "JOIN city AS c ON l.fk_city = c.zip "
            . "ORDER BY rand() LIMIT 3");
    $r = $conn->query($dump1);
    fetch($r, 'objects.php?section=transport');
}

function fetch($r,$link) {
    while ($row = $r->fetch_assoc()) {
        echo '<div class="col-md-4 col-sm-12 col-xs-12 text-center wrap">
                <div class="hover_2_caption object_data text-center">'.$row['name'].' '.$row['city'].'</div>
                <a href="'.$link.'&id='.$row['id'].'"><img class="section_pics index_pics" src="'.$row['path'].'.jpg" alt="'.$row['name'].'.jpg">
                    <div class="middle">
                        <div class="object_data"><p>'.$row['name'].'</p><p>'.$row['city'].'</p></div>
                    </div>
                </a>
              </div>';
    }
}