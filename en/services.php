<?php require_once '../php/connection.php';?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Dog Friendly</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" 
              rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" type="text/css" href="../fonts/css/font-awesome.min.css"/>
        <link rel="icon" href="../img/project/bone.ico"/>
        
    </head>
    
    <body>

        <?php include 'includes/header.php';?>

        <div class="container">
            <div class="row space">
                <div class="col-xs-12 col-md-4 style_section space_bot">
                    <div class="row">
                        <img src="../img/section/blueprints.jpg" alt="krktourist" class="section_pics"/>
                    </div>
                    <div class="row text-center">
                        <p class="cheese">Beauty</p>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <a class="btn btn-info" role="button" href="objects.php?section=beauty">FILTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 style_section space_bot">
                    <div class="row">
                        <img src="../img/section/yellowprints.jpg" alt="krktourist" class="section_pics"/>
                    </div>
                    <div class="row text-center">
                        <p class="cheese">Medicine</p>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <a class="btn btn-info" role="button" href="objects.php?section=medicine">FILTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 style_section space_bot">
                    <div class="row">
                        <img src="../img/section/redprints.jpg" alt="krktourist" class="section_pics"/>
                    </div>
                    <div class="row text-center">
                        <p class="cheese">Shopping</p>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <a class="btn btn-info" role="button" href="objects.php?section=shopping">FILTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="my_custom_line">
        <hr class="my_custom_line space_bot">
        <div class="container">
            <?php
            //TITLE
            echo '<h3 class="object_title" style="padding-left: 40px;">Services</h3>';
            //BEAUTY QUERIES
            $beauty = ("SELECT a.id, n.en AS name, p.path, l.fk_city, c.name AS city FROM beauty_pics AS p "
                        . "JOIN beauty AS a ON p.fk_beauty= a.id AND p.part = 'main' "
                        . "JOIN address as l ON a.fk_address = l.id "
                        . "JOIN beauty_name AS n ON a.fk_name = n.id "
                        . "JOIN city AS c ON l.fk_city = c.zip ");
            $beauty_res = $conn->query($beauty);
            while ($row = $beauty_res->fetch_assoc()) {
            echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space">
                        <a href="object.php?section=beauty&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                        . 'alt="'.$row['name'].'">
                            <div class="middle">
                                <div class="object_data_black">
                                    <p>'.$row['name'].'</p>
                                    <p>'.$row['city'].'</p>
                                </div>
                            </div>
                        </a>
                  </div>';
            }
            //MEDICINE QUERIES
            $medicine = ("SELECT a.id, n.en AS name, p.path, l.fk_city, c.name AS city FROM medicine_pics AS p "
                        . "JOIN medicine AS a ON p.fk_medicine= a.id AND p.part = 'main' "
                        . "JOIN address as l ON a.fk_address = l.id "
                        . "JOIN medicine_name AS n ON a.fk_name = n.id "
                        . "JOIN city AS c ON l.fk_city = c.zip ");
            $medicine_res = $conn->query($medicine);
            while ($row = $medicine_res->fetch_assoc()) {
            echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space">
                        <a href="object.php?section=medicine&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                        . 'alt="'.$row['name'].'">
                            <div class="middle">
                                <div class="object_data_black">
                                    <p>'.$row['name'].'</p>
                                    <p>'.$row['city'].'</p>
                                </div>
                            </div>
                        </a>
                  </div>';
            }
            //SHOPPING QUERIES
            $shopping = ("SELECT a.id, n.en AS name, p.path, l.fk_city, c.name AS city FROM shopping_pics AS p "
                        . "JOIN shopping AS a ON p.fk_shopping= a.id AND p.part = 'main' "
                        . "JOIN address as l ON a.fk_address = l.id "
                        . "JOIN shopping_name AS n ON a.fk_name = n.id "
                        . "JOIN city AS c ON l.fk_city = c.zip ");
            $shopping_res = $conn->query($shopping);
            while ($row = $shopping_res->fetch_assoc()) {
            echo '<div class="col-md-4 col-sm-6 col-xs-12 text-center wrap space">
                        <a href="object.php?section=shopping&id='.$row['id'].'"><img class="section_pics" src="'.$row['path'].'" '
                        . 'alt="'.$row['name'].'">
                            <div class="middle">
                                <div class="object_data_black">
                                    <p>'.$row['name'].'</p>
                                    <p>'.$row['city'].'</p>
                                </div>
                            </div>
                        </a>
                  </div>';
            }
            
            ?>
        </div>
        <div class="space_bot"></div>
        <div id="map"></div>
        <?php include 'includes/footer.php';?>
            
        <script src="../js/map_services.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTa-Qr0FUtaOo_rfQD9DroegaPZ04s88&callback=myMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
    
</html>