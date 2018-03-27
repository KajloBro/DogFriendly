<?php

require '../php/connection.php';
$sql = ("SELECT p.path, n.en AS name, a.id, l.lat, l.lng FROM restaurant_pics AS p "
        . "JOIN restaurant AS a ON p.fk_restaurant = a.id "
        . "JOIN restaurant_name AS n ON a.fk_name = n.id "
        . "JOIN address AS l WHERE a.fk_address = l.id");
$r = $conn->query($sql);
$markers = array();

while ($row = $r->fetch_assoc()) {
    $markers[] = $row;
}

echo json_encode($markers);