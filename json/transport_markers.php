<?php

require '../php/connection.php';
$sql = ("SELECT p.path, n.en AS name, a.id, l.lat, l.lng FROM transport_pics AS p "
        . "JOIN transport AS a ON p.fk_transport = a.id "
        . "JOIN transport_name AS n ON a.fk_name = n.id "
        . "JOIN address AS l WHERE a.fk_address = l.id");
$r = $conn->query($sql);
$markers = array();

while ($row = $r->fetch_assoc()) {
    $markers[] = $row;
}

echo json_encode($markers);