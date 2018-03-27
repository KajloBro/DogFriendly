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
        <?php include 'includes/carousel.php';?>
        <?php include 'includes/section.php';?>
        <div id="map"></div>
        <?php include 'includes/footer.php';?>
        
        
        <script src="../js/map_all.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTa-Qr0FUtaOo_rfQD9DroegaPZ04s88&callback=myMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
    
</html>

