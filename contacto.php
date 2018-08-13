<?php
  $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Contact Us" : "TecMoLiq.com.ar - Contáctenos";
  $scripts = 'https://maps.google.com/maps/api/js?sensor=false';
  include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div class='right'>
        <div id='mapa'></div>
      </div>
      <div class='title'><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Contact Us" : "Contáctenos"; ?></div>
      <div class='text text-contacto'>
        E-mail: <a href="mailto:tecmoliq@gmail.com">tecmoliq@gmail.com</a><br />
        <br />
        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Phone" : "Tel"; ?> (0054-011) 4252-6208<br />
        <br />
        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Address" : "Dirección"; ?>
        Comandante Franco 1133<br />
        Bernal Oeste (CP: 1876)<br />
        Buenos Aires - Argentina
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
