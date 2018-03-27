<header>
    <div class="bg_upper_header"> 
        <div class="container" style="background-color: transparent;">
            <div class="row text_upper_header">
                <div class="col-md-2 col-xs-1 text-center">
                    <div class="tel">
                        <span>+385 51/880-186</span>
                    </div>
                </div>
                <div class="links">
                    <div class="col-md-2 col-xs-1 text-center">
                        <div class="mail">
                            <a href="mailto:info@krktourist.com"><span>info@krktourist.com</span></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-1 text-center">
                        <div class="web">
                            <a href="http://www.krktourist.com"><span>www.krktourist.com</span></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-1 text-center">
                        <div class="contact">
                            <a href="contact.php"><span>Contact Info</span></a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-xs-0">
                        <div class="col-xs-1 text-left">
                            <div class="fb">
                                <a href="https://www.facebook.com/krktouristofficial"><span></span></a>
                            </div>  
                        </div>
                        <div class="col-xs-1 text-left">
                            <div class="insta">
                                <a href="http://darksta.com/krktourist/6549245780"><span></span></a>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-2 text-center">
                    <?php
                        $langs = array("/hr/", "/en/", "/de/", "/hu/");
                        $URL = $_SERVER['PHP_SELF'];
                        if (isset($section)) {$URL = $URL . "?section=" . $_GET['section'];}
                        if (isset($id)) {$URL = $URL . "&id=" . $_GET['id'];}
                    ?>
                    <div class="col-md-3 col-xs-3 xs_padding text-center">
                        <?php
                            $hr = str_replace($langs, "/hr/", $URL);
                            echo '<a href="'.$hr.'">';
                                echo '<img src="../img/flags/hr.svg" alt="hr" class="flags">';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="col-md-3 col-xs-3 xs_padding text-center">
                        <?php
                            $en = str_replace($langs, "/en/", $URL);
                            echo '<a href="'.$en.'">';
                                echo '<img src="../img/flags/gb.svg" alt="hr" class="flags">';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="col-md-3 col-xs-3 xs_padding text-center">
                        <?php
                            $hu = str_replace($langs, "/hu/", $URL);
                            echo '<a href="'.$hu.'">';
                                echo '<img src="../img/flags/hu.svg" alt="hr" class="flags">';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="col-md-3 col-xs-3 xs_padding text-center">
                        <?php
                            $de = str_replace($langs, "/de/", $URL);
                            echo '<a href="'.$de.'">';
                                echo '<img src="../img/flags/de.svg" alt="hr" class="flags">';
                            echo '</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_lower_header">
        <div class="container" style="background-color: transparent;">
            <div class="row">
                <div class="col-md-2 col-md-push-0 col-xs-4 col-xs-push-4">
                    <a href="index.php">
                        <img class="logo" src="../img/project/logo.png" alt="dog friendly"
                                             onmouseover="this.src='../img/project/logo_hover.png'" 
                                             onmouseout="this.src='../img/project/logo.png'"/>
                    </a>
                </div>
                <div class="col-md-10 col-md-pull-0 col-xs-5 col-xs-pull-4 my_auto_align">
                    <div class="navbar navbar-custom">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="objects.php?section=accomm">Accommodation</a></li>
                                <li><a href="objects.php?section=beach">Beaches</a></li>
                                <li><a href="objects.php?section=restaurant">Restaurants</a></li>
                                <li><a href="objects.php?section=transport">Transport</a></li>
                                <li class="dropdown" id="myServices">
                                    <a href="services.php" style="display:inline-block;padding-right:0px;">Services</a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#myServices" style="display:inline-block;padding-left:0px;">
                                      <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="objects.php?section=beauty">Beauty</a></li>
                                        <li><a href="objects.php?section=medicine">Medicine</a></li>
                                        <li><a href="objects.php?section=shopping">Shopping</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Molnar-Gabor
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="useful_info.php">Useful info</a></li>
                                        <li><a href="general_terms.php">Terms</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
