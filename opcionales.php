<?php $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Optionals" : "TecMoLiq.com.ar - Opcionales";
   include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div class='title'><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Special constructions" : "Construcciones especiales"; ?></div>
      <div class="text text-opcionales">
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          Even though the offered products are compatible with the dimensions of the original equipment, they can be modified to be adapted to any particular case, or, they can be built with stainless steel or bronce.
        <?php } else { ?>
          Si bien los productos ofrecidos son compatibles con las dimensiones de los
          equipos originales, a los mismos se les puede realizar modificaciones
          para ser adaptados a cada caso particular, o bien, la construcción de
          estos en acero inoxidable o bronce.
        <?php } ?>
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
