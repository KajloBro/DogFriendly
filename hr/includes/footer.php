<footer>
    
    <div class="container" style="background-color: transparent;">
        <div class="row">
        </div>
        <div class="row display_on_pc space_bot">
            <div class="col-md-3">
                <a href="index.php"><img class="logo" src="../img/project/logo.png" alt="dog friendly"
                                             onmouseover="this.src='../img/project/logo_hover.png'" 
                                             onmouseout="this.src='../img/project/logo.png'"/></a>
            </div>
            <div class="col-md-3 data">
<!--                <p class="contact_in_footer">Contact</p>-->
                <p class="info_in_footer">ID CODE: HR-AB-51-040227918</p>
                <p class="info_in_footer">Milohnići BB, 51 500 Krk, HR</p>
                <p class="info_in_footer">Tel: +385/51 880-186</p>
                <p class="info_in_footer">GSM Mob: +385/91 203-0555</p>
                <p class="info_in_footer">Web: http://www.krktourist.com</p>
                <p class="info_in_footer">E-mail: info@krktourist.com</p>
            </div>
            <div class="col-md-2 text-center data_links">
                <p class=""><a href="objects.php?section=accomm">Accommodation</a></p>
                <p class=""><a href="objects.php?section=beach">Beaches</a></p>
                <p class=""><a href="objects.php?section=restaurant">Restaurants</a></p>
                <p class=""><a href="objects.php?section=transport">Transport</a></p>
            </div>
            <div class="col-md-2 text-center data_links">
                <p class=""><a href="services.php">Services</a></p>
                <p class=""><a href="objects.php?section=beauty">Beauty</a></p>
                <p class=""><a href="objects.php?section=medicine">Medicine</a></p>
                <p class=""><a href="objects.php?section=shopping">Shopping</a></p>
            </div>
            <div class="col-md-2 text-center data_links">
                <p class=""><a href="contact.php">Contact</a></p>
                <p class=""><a href="about.php">About us</a></p>
                <p class=""><a href="useful_info.php">Useful information</a></p>
                <p class=""><a href="general_terms.php">General Terms</a></p>
            </div>
        </div>
    </div>
    <div class="row_footer_line">
        <div class="container">
            <div class="">
                <div class="terms col-md-2 col-xs-12 text-center">
                        <a href="general_terms.php">General Terms</a>
                </div>
                <div class="col-md-6"></div>
                <div class="display_on_pc">
                    <?php
                        $langs = array("/hr/", "/en/", "/de/", "/hu/");
                        $URL = $_SERVER['PHP_SELF'];
                        if (isset($section)) {$URL = $URL . "?section=" . $_GET['section'];}
                        if (isset($id)) {$URL = $URL . "&id=" . $_GET['id'];}
                    ?>
                    <div class="lang_footer col-md-1 col-xs-2 text-center">
                        <?php
                            $hr = str_replace($langs, "/hr/", $URL);
                            echo '<a href="'.$hr.'">';
                                echo 'Hrvatski';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="lang_footer col-md-1 col-xs-2 text-center">
                        <?php
                            $en = str_replace($langs, "/en/", $URL);
                            echo '<a href="'.$en.'">';
                                echo 'English';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="lang_footer col-md-1 col-xs-2 text-center">
                        <?php
                            $hu = str_replace($langs, "/hu/", $URL);
                            echo '<a href="'.$hu.'">';
                                echo 'Magyar';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="lang_footer last_lang col-md-1 col-xs-2 text-center">
                        <?php
                            $de = str_replace($langs, "/de/", $URL);
                            echo '<a href="'.$de.'">';
                                echo 'Deutsch';
                            echo '</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center copyright">
                Copyright &copy; 2018 Travel agency Molnar-Gabor d.o.o.
            </div>
        </div>
    </div>
    
    
</footer>

