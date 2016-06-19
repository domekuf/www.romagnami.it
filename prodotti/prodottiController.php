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
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-dettagli="">
                    <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Ceramica
                            </div>
                            <div class="project-name">Le migliori ceramiche di Faenza, rigorosamente originali e artigianali</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-dettagli="">
                    <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                frutta fresca
                            </div>
                            <div class="project-name">Granite, Estratti, Frullati. Sempre con Frutta Fresca e di Stagione</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-dettagli="">
                    <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">succhi di frutta e bevande</div>
                            <div class="project-name">Sempre biologici, sempre i migliori</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-dettagli="">
                    <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">stampe romagnole</div>
                            <div class="project-name">Fatte a ruggine come da tradizione, dai migliori artigiani Romagnoli</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box" data-toggle="modal" data-target="#modalDetail" data-dettagli="">
                    <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                frutta secca
                                ed essiccata</div>
                                <div class="project-name">Ottima nel Gusto e per la Salute</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


<!--
	"<p>Il nostro yogurt gelato, arricchito con salse, granelle e frutta fresca è un dessert naturale, gluten free, ipocalorico, ma soprattutto buonissimo per rinfrescarsi nelle giornate estive.
	<br/><br/>
	Creiamo gli yogurt gelato in base ai desideri dei nostri clienti grandi e piccini! La nostra unica richiesta è che usiate la fantasia, noi non ci poniamo limiti!!!
	<br/><br/>
	Per gustare degli yogurt gelato light, vi suggeriamo di arricchirli con frutta fresca di stagione fornita dai coltivatori locali, che viene tagliata al momento e abbinata a frutta disidratata della migliore qualità, ricca di proprietà nutritive.<br/><br/>
	Per completare gli yogurt gelato vi consigliamo di assaggiare le salse naturali (topping) che prepariamo quotidianamente con la frutta fornitaci dai contadini delle vicine campagne. Le nostre salse vengono cotte a 80° per il tempo necessario a una corretta sterilizzazione, ma senza alterare il colore ed il sapore della frutta aggiungendo del succo di limone e pochissimo zucchero di canna.
	<br/><br/>
	Per i più golosi, offriamo una vasta scelta di granelle per tutti i gusti tritate al momento oppure diversi tipi di cioccolato sempre gluten free.
	<br/><br/>
	Per una colazione equilibrata o una merenda leggera, vi proponiamo anche lo yogurt greco o magro abbinabili a frutta fresca e disidrata. 
	<br/><br/>
	Tutti nostri prodotti possono essere consumati al tavolo nel nostro spazio esterno sul viale pedonale o sotto l’ombrellone nella vicina spiaggia.
	</p>"-->