<?php
function dump_section($title, $func, $url){
?>
    <section>
        <div class="container">
            <div class="section_container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="section_heading">
                            <?php echo $title;?>
                        </h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <?php require_once 'php/queries_index.php';?>
                    <?php $func();?>
                </div>
                <div class="row">
                    <div class="row_section_border">
                        <div class="text-center">
                            <?php
                                echo '<span class="see_all_btn"><a href="objects.php?section='.$url.'">See all</a></span>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}