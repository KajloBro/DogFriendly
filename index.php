<?php require_once 'php/connection.php';?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Dog Friendly</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css"/>
        <link rel="icon" href="img/project/bone.ico"/>
        
    </head>
    
    <body>
        <?php include 'header.php';?>
        <?php include 'carousel.php';?>
        <?php include 'map.php';?>
        
        <?php 
        require 'section.php';
        require 'php/queries_index.php';
        dump_section('Accommodation', 'dump_accom', 'accomm');
        dump_section('Beaches', 'dump_beach', 'beach');
        dump_section('Beauty', 'dump_beauty', 'beauty');
        dump_section('Medicine', 'dump_medicine', 'medicine');
        dump_section('Restaurants', 'dump_restaurant', 'restaurant');
        dump_section('Shopping', 'dump_shopping', 'shopping');
        dump_section('Transport', 'dump_transport', 'transport');
        ?>
        
        <?php include 'footer.php';?>
        
        
        <script src="js/map_all.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTa-Qr0FUtaOo_rfQD9DroegaPZ04s88&callback=myMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
    
</html>