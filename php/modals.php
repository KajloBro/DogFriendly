<?php

function accomm() {
    $id = $_GET['id'];
    global $conn;
    $small = ("SELECT p.id, p.path, p.path_big, p.part, a.name FROM accommodation_pics AS p JOIN "
            . "accommodation AS a ON p.fk_accomm = a.id WHERE p.fk_accomm = $id");
    $small_res = $conn->query($small);
    dump_modals($small_res);
}

function beach() {
    $id = $_GET['id'];
    global $conn;
    $small = ("SELECT p.id, p.path, p.path_big, p.part, a.name FROM beach_pics AS p "
            . "JOIN beach AS a ON p.fk_beach = a.id WHERE p.fk_beach = $id");
    $small_res = $conn->query($small);
    dump_modals($small_res);
}

function beauty() {
    $id = $_GET['id'];
    global $conn;
    $small = ("SELECT p.id, p.path, p.path_big, p.part, a.name FROM beauty_pics AS p "
            . "JOIN beauty AS a ON p.fk_beauty = a.id WHERE p.fk_beauty = $id");
    $small_res = $conn->query($small);
    dump_modals($small_res);
}

    function dump_modals ($small_res) {
    while ($row_s = $small_res->fetch_assoc()) {
    echo '<div class="col-md-3 col-sm-6 col-xs-12 space_limit">';
    $pic_id = $row_s['id'];
        echo '<button type="button" class="btn btn-info btn_but_modal btn-lg btn_padding" data-toggle="modal" data-target="#myModal'.$pic_id.'">'
                . '<img src="'.$row_s['path'].'" alt="'.$row_s['path'].'" class="modal_small"/></button>';
        echo '<div class="modal fade" id="myModal'.$row_s['id'].'" role="dialog">';
            echo '<div class="modal-dialog modal-lg">';
                echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                        echo '<div class="col-xs-10">';
                            echo '<p class="modal_title">'.$row_s['name'].'</p>';
                        echo '</div>';
                        echo '<div class="col-xs-2">';
                            echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                        echo '<img src="'.$row_s['path_big'].'" alt="'.$row_s['path'].'" class="modal_big"/>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
        }
    }?>
    