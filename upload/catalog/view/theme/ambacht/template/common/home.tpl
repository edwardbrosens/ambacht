<?php echo $header; ?>
<div class="container home">

  <div class="row">
    <div class="col-sm-4"><img style="float: left; vertical-align: top; margin-right: 40px !important; margin-bottom: 10px;" src="catalog/view/theme/ambacht/image/bakker.jpg" alt="" width="250" height="356"></div>
    <div class="col-sm-7 col-sm-push-1 main-text">
      <p>Samen met lokale ambachtslieden stellen wij de allerlekkerste bedrijfslunch samen. Onze producten komen direct van de warme bakker, slager en zuivelboer en zijn echt vers, zoveel mogelijk van het seizoen en met zorg en aandacht gemaakt!</p>
      Samen met lokale ambachtslieden stellen wij de allerlekkerste bedrijfslunch samen. Onze producten komen direct van de warme bakker, slager en zuivelboer en zijn echt vers, zoveel mogelijk van het seizoen en met zorg en aandacht gemaakt!

      <h2>Hoe werkt het?</h2>

      Afhankelijk van jullie specifieke wensen stellen wij de krat met lunchproducten samen. Vervolgens bezorgen wij deze op afgesproken tijden op kantoor. Bestellen is altijd vrijblijvend, dus geen abonnement. Voor € 3,20 per persoon genieten jullie al van een zeer uitgebreide en gezonde lunch. De hoeveelheid en soort producten stellen we wekelijks met elkaar af.

      Natuurlijk is de bezorging gratis.

      <h2>Kennismaken?</h2>

      Vraag naar onze proeflunch met korting en ontdek de smaken uit de buurt.Samen met lokale ambachtslieden stellen wij de allerlekkerste bedrijfslunch samen. Onze producten komen direct van de warme bakker, slager en zuivelboer en zijn echt vers, zoveel mogelijk van het seizoen en met zorg en aandacht gemaakt!</p>
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
    <div id="content" class="<?php echo $class; ?> home-content"><?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<div class="choose-container">
  <div class="container">
    <div class="col-sm-4 col-xs-12"><img class="img-responsive" src="catalog/view/theme/ambacht/image/werkfruit.png" alt="" width="350" height="260" />
      <p style="text-align: center;"><a>WERKFRUIT</a></p>
    </div>
    <div class="col-sm-4 col-xs-12"><img class="img-responsive" src="catalog/view/theme/ambacht/image/bedrijfslunch.jpg" alt="" width="350" height="260" />
      <p style="text-align: center;"><a>BEDRIJFSLUNCH</a></p>
    </div>
    <div class="col-sm-4 col-xs-12"><img class="img-responsive" src="catalog/view/theme/ambacht/image/salades.png" alt="" width="350" height="260" />
      <p style="text-align: center;"><a>SALADES</a></p>
    </div>
  </div>
</div>




<?php echo $footer; ?>