<div id="myCarousel" class="carousel slide hidden-xs hidden-sm hidden-md display-lg" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
        <img src="../img/carousel/monika2.jpg" alt="dog friendly">
        <div class="carousel-caption ccc">
            <div class="wrapper_custom">
                <div class="row">
                    <div class="col-xs-6">
                        <img src="../img/project/logo.png" class="logo_on_carousel"/>
                    </div>
                    <div class="col-xs-6">
                        <p class="ad_txt">
                            We are waiting for you on the friendly island of Krk
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="item">
        <img src="../img/carousel/carousel2.jpg" alt="krktourist">
        <div class="carousel-caption form_position">
            <form method="post" action="../php/mail_handler.php">
                <h3 class="section_heading display_on_pc" style="color: #fff">Contact us</h3>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your full name here">
                <input type="email" class="form-control" id="inputEmail" name="mail" placeholder="Enter e-mail here">
                <textarea class="form-control hide_control_big" id="inputText" rows="10" name="content" 
                          placeholder="Enter your message here"></textarea>
                <textarea class="form-control hide_control_small" id="inputText" rows="3" name="content" 
                          placeholder="Enter your message here"></textarea>
                <input type="submit" name="submit" value="Submit" class="btn btn-info text-center">
            </form>
      </div>
    </div>

    <div class="item">
        <img src="../img/carousel/carousel1.jpg" alt="glavotok">
        <div class="carousel-caption follow">
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-6 text-center">
                        <p class="follow_us_carousel">Follow us</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-3 text-center">
                        <a href="https://www.facebook.com/krktouristofficial">
                            <img class="fbninsta shadows" src="../img/carousel/facebook.png" alt="gabor"/>
                        </a>
                    </div>
                    <div class="col-xs-3 text-center">
                        <a href="http://darksta.com/krktourist/6549245780">
                            <img class="fbninsta shadows" src="../img/carousel/instagram.png" alt="molnar"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/slide_fix.js"></script>