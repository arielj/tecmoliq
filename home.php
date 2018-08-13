<?php $title = 'TecMoLiq.com.ar';
include('header.php');
$now = time();
$origin = strtotime('1977-12-19');
$diff = $now - $origin;
$years = floor($diff / (365*60*60*24));
?>
<body>
  <?php require('top.php'); ?>
      <div id="slide">
        <img id="img1" alt="s1" src="img/slide.jpg" />
      </div>
      <div class='text'>
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          <b>TecMoLiq</b> is a company with more than <?php echo $years; ?> years of personal experience on Pumps for industrial ussage, focused since 1992 on the production of accesories for the Agricultural Aviation. Currently whe count with a variety of models that covers the needs of specific and adapted planes on the market, but constantly introducing proyects to satisfy the user's needs.
        <?php } else { ?>
          <b>TecMoLiq</b> es una empresa argentina con una experiencia personal de <?php echo $years; ?>
          años en el rubro de Bombas de uso industrial, dedicándose desde el año
          1992 a la fabricación de accesorios para equipos de rociado en la
          Aviación Agrícola. Contamos actualmente con una variedad de modelos que
          permiten cubrir las necesidades de los aviones específicos y adaptados
          con que cuenta el mercado, sin dejar de pensar en estar permanentemente
          incorporando proyectos que satisfagan la necesidad de los usuarios.
        <?php } ?>
      </div>
      <div id="div-previa">
        <img id="previa" src="" alt="" />
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
