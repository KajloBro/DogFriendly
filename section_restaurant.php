<section>
    <div class="container">
        <div class="section_container">
            <div class="row">
                <div class="text-center">
                    <h3 class="section_heading">
                        Restaurants
                    </h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php require_once 'php/dumpers.php';?>
                <?php dump_restaurant();?>
            </div>
            <div class="row">
                <div class="row_section_border">
                    <div class="text-center">
                        <span class="see_all_btn"><a href="object.php?section=restaurant">See all</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>