<?php $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Pumps" : "TecMoLiq.com.ar - Bombas";
   include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div id="barraBombas">
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          <a href="inibombas.php?b=aero100&lang=en">Aero-100</a> -
          <a href="inibombas.php?b=aero160&lang=en">Aero-160</a> -
          <a href="inibombas.php?b=aero160mh&lang=en">Aero-160MH</a> -
          <a href="inibombas.php?b=aero165&lang=en">Aero-165</a> -
          <a href="inibombas.php?b=geo160&lang=en">Geo-160</a>
        <?php } else { ?>
          <a href="inibombas.php?b=aero100">Aero-100</a> -
          <a href="inibombas.php?b=aero160">Aero-160</a> -
          <a href="inibombas.php?b=aero160mh">Aero-160MH</a> -
          <a href="inibombas.php?b=aero165">Aero-165</a> -
          <a href="inibombas.php?b=geo160">Geo-160</a>
        <?php } ?>
      </div>
      <div id="bomba">
        <?php
          $bomba = isset($_GET["b"]) ? $_GET['b'] : 'aero100';
          include($bomba.'.php');
        ?>
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
