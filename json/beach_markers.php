<?php

require '../php/connection.php';
$sql = ("SELECT p.path, a.id, l.lat, l.lng, n.en AS name FROM beach_pics AS p "
        . "JOIN beach AS a ON p.fk_beach = a.id AND p.part = 'main' "
        . "JOIN beach_name AS n ON a.fk_name = n.id "
        . "JOIN address AS l WHERE a.fk_address = l.id");
$r = $conn->query($sql);
$markers = array();

while ($row = $r->fetch_assoc()) {
    $markers[] = $row;
}

echo json_encode($markers);