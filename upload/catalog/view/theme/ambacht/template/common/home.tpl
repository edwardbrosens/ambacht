<?php echo $header; ?>
<div class="container home">

    <div class="row">
        <div class="col-sm-7 col-sm-push-1 main-text"><h2>Hoe werkt het<br></h2>
            <p>
                Wij leveren de lekkerste en gezondste bedrijfslunch in de regio Den Bosch-Waalwijk. <br/>
                Je krijgt van ons geen kant en klare broodjes, maar een box met verse lunchproducten van boeren en
                ambachtslieden uit de buurt. <br/>
                Alleen nog de tafel te dekken en de collega’s kunnen aanschuiven voor de gezamenlijke lunch.

            </p>
            <a href="/assortiment" class="text-uppercase zelf-samenstellen"><img class="img-responsive"
                                        src="catalog/view/theme/ambacht/image/samenstellen.png"
                                        alt="" width="350" height="260"/>Gelijk kantoorlunch bestellen.</a>
            <br>
            <br>
            <h2>Ik wil graag verrast worden</h2>
            <p>
                <br>
                Dan stellen wij jullie box met lunchproducten samen. Voor € 3,20 (ex btw) per persoon genieten jullie dan al van een zeer uitgebreide en gezonde lunch.
                <br>
                <br>
            </p>
            <h2>Ik wil zelf bepalen welke producten er in de lunch box komen</h2>
            <p>
                <br>Kies dan bij de bestelfunctie op deze website voor <a href="/assortiment" class="link-in-text">‘zelf samenstellen’</a> en zoek de producten uit die
                jij
                het lekkerste vindt.
                <br>
                <br>
                Bestellen is altijd vrijblijvend, dus geen abonnement en de bezorging* is gratis.
                <br>&nbsp;
                <br>
                <font color="#9C9C94">
                    <i>Momenteel bezorgen wij alleen in de regio Den Bosch-Waalwijk</i>
                </font>
            </p>

            <h2>Kennismaken?</h2>

            Vraag naar onze proeflunch met korting en ontdek de smaken uit de buurt. Samen met lokale ambachtslieden stellen wij de allerlekkerste bedrijfslunch samen. Onze producten komen direct van de warme bakker, slager en zuivelboer en zijn echt vers, zoveel mogelijk van het seizoen en met zorg en aandacht gemaakt!</p>
        </div>
    </div>

    <div class="row"><?php echo $column_left; ?>
        <?php if ($column_left && $column_right) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } elseif ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-9'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-12'; ?>
        <?php } ?>
        <div id="content"
             class="<?php echo $class; ?> home-content"><?php echo $content_top; ?><?php echo $content_bottom; ?></div>
        <?php echo $column_right; ?></div>
</div>

<div class="contact-container">
    <div class="row">
        <div class="col-sm-12 call-to-action">
            <h2>Wil jij en je bedrijf het ware ambacht uitproberen?</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-push-2" id="contact">
            <form action="index.php?route=information/contact" method="post" enctype="multipart/form-data">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control clean-input" type="text" placeholder="Bedrijf" name="company"/>
                        <input class="form-control clean-input" type="text" placeholder="Naam" name="name"/>
                        <input class="form-control clean-input" type="email" placeholder="E-mailadres" name="email"/>
                        <input class="form-control clean-input" type="text" placeholder="Telefoon" name="phone"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <textarea name="enquiry" id="" cols="30" rows="10" placeholder="Beschrijving"></textarea>
                        <button type="submit" class="btn btn-primary pull-right">Verzenden</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php echo $footer; ?>