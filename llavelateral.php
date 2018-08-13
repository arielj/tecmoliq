<?php $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Lateral load valve" : "TecMoLiq.com.ar - Llave de carga lateral";
   include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div class='right'>
        <img src="/img/llaves-de-cargaA.jpg" alt="cargaA" /><br /><br />
        <img src="/img/llaves-de-cargaB.jpg" alt="cargaB" />
      </div>
      <div class='title'><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Lateral load valve" : "Llave de carga lateral"; ?></div>
      <div class='text text-llavelateral'>
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          <b>TecMoLiq</b>'s lateral load valves have the mount dimensions of specific planes for agricultural aeroapplication.<br />
          Standard production is built on 2" with 1/2" male coupling, aluminium body and stainless steel sphere.
        <?php } else { ?>
          Las llaves de carga lateral <b>TecMoLiq</b> tienen las dimensiones de
          montaje de todos los aviones específicos de aeroaplicación agrícola.<br />
          La construcción standard se fabrica en 2" con 1/2 acople macho y el
          cuerpo de aliminio con la esfera de acero inoxidable.
        <?php } ?>
      </div>
  <?php include('bottom.php'); ?>
</body>
</html>
