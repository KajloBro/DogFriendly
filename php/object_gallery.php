<?php
    
function gallery($r) {
    ?>
    <div class="accomm_carousel">
        <div id="myCarousel" class="carousel slide space" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">
                    <?php
                    while ($row = $r->fetch_assoc()){
                        if ($row['part'] == 'main'){
                            echo '<img src="'.$row['path'].'.jpg" alt="main_pic" class="carousel_pic"/>';
                        }
                    }
                    ?>
                </div>      
            <?php
                    mysqli_data_seek($r, 0);
                while ($row = $r->fetch_assoc()) {
                    if ($row['part'] == 'side') {
                        item($row['path']);
                    }
                }
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

function item($path) {
    ?>
    <div class="item">
        <?php
        echo '<img src="'.$path.'.jpg" alt="side_pic" class="carousel_pic"/>';
        ?>
    </div>
    <?php
}