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
            <div class="row">
                <div class="space">
                    <h2 class="section_heading_at_objects">Contact</h2>
                </div>
                <div class="col-md-3 col-xs-12 space">
                    <p><b>MOLNAR - GABOR d.o.o.</b></p>
                    <p><b>Travel agency</b></p>
                    <p>Address: Brzac 97, 51500 Krk, Croatia</p>
                    <p class="tel">&nbsp;&nbsp;Tel: +385/51 880-186</p>
                    <div class="links_black">
                        <p class="mail"><a href="mailto:info@krktourist.com">E-mail: info@krktourist.com</a></p>
                    </div>
                    <p>Office manager: Endrea Molnar Božić</p>
                </div>
                <div class="col-md-5 col-xs-12 space text-center">
                    <p><b>Opening hours:</b></p>
                    <p><b>MON-FRI 9:00-14:00</b></p>
                </div>
                <div class="col-md-4 col-xs-12 space">
                    <img src="../img/project/business.jpg" style="max-width: 100%" alt="molnar"/>
                </div>
            </div>
            <div class="large-screen">
                <div class="row space_bot space">
                    <div class="col-md-4 col-xs-12 lil_space text-center">
                        <p class="bold_it">Endrea Molnar Božić, manager</p>
                        <p>English and Hungarian language</p>
                        <p>GSM: +385/91 20 30 855</p>
                    </div>
                    <div class="col-md-4 col-xs-12 lil_space text-center">
                        <p class="bold_it">Endre Molnar Gabor, consultant</p>
                        <p>Hungarian and German language</p>
                        <p>GSM: +385 91 20 20 855</p>
                    </div>
                    <div class="col-md-4 col-xs-12 lil_space text-center">
                        <p class="bold_it">Monika Radivoj,</p>
                        <p>English and Spanish language</p>
                        <p>GSM: +385 91 62 11 046</p>
                    </div>
                </div>
                <div class="row space_bot">
                    <div class="col-md-4 col-xs-12 space_bot text-center">
                        <img class="img-circle profiles" src="../img/project/mm_face.jpg" alt="endrea" />
                    </div>
                    <div class="col-md-4 col-xs-12 space_bot text-center">
                        <img class="img-circle profiles" src="../img/project/js_face.jpg" alt="endre" />
                    </div>
                    <div class="col-md-4 col-xs-12 space_bot text-center">
                        <img class="img-circle profiles" src="../img/project/mr_face.jpg" alt="endre" />
                    </div>
                </div>
            </div>
            <div class="small-screen">
                <div class="row space">
                    <div class="col-md-4 col-xs-12 lil_space_bot text-center">
                        <p class="bold_it">Endrea Molnar Božić, manager</p>
                        <p>English and Hungarian language</p>
                        <p>GSM: +385/91 20 30 855</p>
                        <div class="col-md-4 col-xs-12 space_bot text-center">
                            <img class="img-circle profiles" src="../img/project/mm_face.jpg" alt="endrea" />
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 lil_space_bot text-center">
                        <p class="bold_it">Endre Molnar Gabor, consultant</p>
                        <p>Hungarian and German language</p>
                        <p>GSM: +385 91 20 20 855</p>
                        <div class="col-md-4 col-xs-12 space_bot text-center">
                            <img class="img-circle profiles" src="../img/project/js_face.jpg" alt="endre" />
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 lil_space_bot text-center">
                        <p class="bold_it">Monika Radivoj,</p>
                        <p>English and Spanish language</p>
                        <p>GSM: +385 91 62 11 046</p>
                        <div class="col-md-4 col-xs-12 space_bot text-center">
                            <img class="img-circle profiles" src="../img/project/mr_face.jpg" alt="endre" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_bot">
                <form method="post" action="../php/mail_handler.php">
                    <h3 class="section_heading display_on_pc text-center" style="color: #2ea3f2">Contact us</h3>
                    <input type="text" class="form-control custom_form" id="inputName" name="name" placeholder="Enter your full name here">
                    <input type="email" class="form-control custom_form" id="inputEmail" name="mail" placeholder="Enter e-mail here">
                    <textarea class="form-control custom_form" id="inputText" rows="10" name="content" 
                              placeholder="Enter your message here"></textarea>
                    <div class="row text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>


        <?php include 'includes/footer.php';?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
    
</html>
