<?php

require '../php/connection.php';

$sql = ("SELECT p.path, a.id, l.lat, l.lng, n.en AS name FROM accommodation_pics AS p "
        . "JOIN accommodation AS a ON p.fk_accomm = a.id AND p.part = 'main' "
        . "JOIN accommodation_name AS n ON a.fk_name = n.id "
        . "JOIN address AS l WHERE a.fk_address = l.id");
$r = $conn->query($sql);
$markers = array();

while ($row = $r->fetch_assoc()) {
    $markers[] = $row;
}

echo json_encode($markers);