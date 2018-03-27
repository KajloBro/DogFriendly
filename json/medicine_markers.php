<?php

require '../php/connection.php';
$sql = ("SELECT p.path, n.en AS name, a.id, l.lat, l.lng FROM medicine_pics AS p "
        . "JOIN medicine AS a ON p.fk_medicine = a.id AND p.part = 'main' "
        . "JOIN medicine_name AS n ON a.fk_name = n.id "
        . "JOIN address AS l WHERE a.fk_address = l.id");
$r = $conn->query($sql);
$markers = array();

while ($row = $r->fetch_assoc()) {
    $markers[] = $row;
}

echo json_encode($markers);