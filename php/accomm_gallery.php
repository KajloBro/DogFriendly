<?php
function carousel($id){
    global $conn;
    $main = ("SELECT path FROM accommodation_pics WHERE part='main' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $street = ("SELECT path FROM accommodation_pics WHERE part='street' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $garden = ("SELECT path FROM accommodation_pics WHERE part='garden' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $balcony = ("SELECT path FROM accommodation_pics WHERE part='balcony' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $livingroom = ("SELECT path FROM accommodation_pics WHERE part='livingroom' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $kitchen = ("SELECT path FROM accommodation_pics WHERE part='kitchen' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $bedroom = ("SELECT path FROM accommodation_pics WHERE part='bedroom' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $bathroom = ("SELECT path FROM accommodation_pics WHERE part='bathroom' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $diningroom = ("SELECT path FROM accommodation_pics WHERE part='diningroom' AND fk_accomm = $id ORDER BY rand() LIMIT 1");
    $r_main = $conn->query($main);
    $row_main = $r_main->fetch_assoc();
    $r_street = $conn->query($street);
    $row_street = $r_street->fetch_assoc();
    $r_garden = $conn->query($garden);
    $row_garden = $r_garden->fetch_assoc();
    $r_balcony = $conn->query($balcony);
    $row_balcony = $r_balcony->fetch_assoc();
    $r_livingroom = $conn->query($livingroom);
    $row_livingroom = $r_livingroom->fetch_assoc();
    $r_kitchen = $conn->query($kitchen);
    $row_kitchen = $r_kitchen->fetch_assoc();
    $r_bedroom = $conn->query($bedroom);
    $row_bedroom = $r_bedroom->fetch_assoc();
    $r_bathroom = $conn->query($bathroom);
    $row_bathroom = $r_bathroom->fetch_assoc();
    $r_diningroom = $conn->query($diningroom);
    $row_diningroom = $r_diningroom->fetch_assoc();
    
    function item($path, $string) {
        ?>
        <div class="item">
            <?php
            echo '<img src="'.$path.'.jpg" alt="side_pic" class="carousel_pic"/>';
            ?>
            <div class="carousel-caption">
                <h3 class="carousel_caption"><?php echo $string; ?></h3>
            </div>
        </div>
        <?php
    }
?>
    <div class="accomm_carousel">
        <div id="myCarousel" class="carousel slide space" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">
                    <?php
                    echo '<img src="'.$row_main['path'].'.jpg" alt="apartment_main_pic" class="carousel_pic"/>';
                    ?>
                    <div class="carousel-caption">
                        <h3 class="carousel_caption">Visit Us</h3>
                    </div>
                </div>      
            <?php
                if ($row_balcony['path'] != '') {item($row_balcony['path'], "Balcony");}
                if ($row_garden['path'] != '') {item($row_garden['path'], "Garden");}
                if ($row_street['path'] != '') {item($row_street['path'], "Street");}
                if ($row_livingroom['path'] != '') {item($row_livingroom['path'], "Living Room");}
                if ($row_kitchen['path'] != '') {item($row_kitchen['path'], "Kitchen");}
                if ($row_bedroom['path'] != '') {item($row_bedroom['path'], "Bedroom");}
                if ($row_bathroom['path'] != '') {item($row_bathroom['path'], "Bathroom");}
                if ($row_diningroom['path'] != '') {item($row_diningroom['path'], "Dining Room");}
            ?>

            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
<?php
}