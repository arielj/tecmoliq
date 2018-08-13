<?php $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Cut valve" : "TecMoLiq.com.ar - Llave de corte";
   include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div class='right'>
        <img src="/img/ll-de-corte1.jpg" alt="corteA" /><br /><br />
        <img src="/img/ll-de-corte2.jpg" alt="corteB" />
      </div>
      <div class='title'><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Cut valve" : "Llave de corte"; ?></div>
      <div class='text text-llavecorte'>
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          <b>TecMoLiq</b>'s cut valves are built in 1 1/2" y 2" versions, with exterior mount dimensions compatible with the different specific planes for agricultural aviation.<br />
          The standard build is made in aluminium, but can also be built in bronce o stainless steel.<br />
          Independantly of the valve's material, the sphere is made in polished stainless steel, teflon saels and viton o'rings. The axis if the command is made in stainless steel and works on a bronze bushing with grease lubricated through an Alemite.
        <?php } else { ?>
          Las Llaves de corte <b>TecMoLiq</b> se construyen en versiones de 1 1/2" y 2", con dimensiones exteriores de montaje compatibles con las distintas aeronaves específicas de aplicación agrícola.<br />
          La construcción estandard se realiza en aluminio, pudiéndose construir en bronce o en acero inoxidable.<br />
          Independientemente del material de la válvula, la esfera es de acero inoxidable pulido, guarniciones de teflón y o'rings de vitón. El eje del comando es de acero inoxidable y trabaja sobre un buje de bronce lubricado con grasa por medio de un alemite.
        <?php } ?>
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
