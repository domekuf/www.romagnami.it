<?php

$prodotti_json = carica_file('prodotti/prodotti.json');

$prodotti = json_decode($prodotti_json);



?>
<section class="no-padding" id="portfolio">
    <div class="container-fluid" id="portfolios">
        <div class="row no-gutter">
        <?php
        foreach($prodotti as $p){
        ?>

        <!--template-->
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-title="<?php echo($p->title); ?>">
                    <img src="img/portfolio/<?php echo($p->img); ?>.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?php 
                                	echo($p->title); 
                                ?>
                            </div>
                            <div class="project-name">
                                <?php 
                                	echo($p->subtitle); 
                                ?>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="hidden htmlContent">
                    <!--htmlContent-->
                    <?php 
                        echo($p->htmlContent); 
                    ?>
                </div>
            </div>
            <!--fine tmplate-->
            <?php
			}
            ?>
        </div>
    </div>
</section>







