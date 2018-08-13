<div id="menu">
  <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
    <a href="inibombas.php?lang=en" id='bomba'>pumps</a> -
    <a href="llavelateral.php?lang=en" id='carga'>lateral load valve</a> -
    <a href="llavecorte.php?lang=en" id='corte'>cut valve</a> -
    <a href="accesorios.php?lang=en" id='ac'>accesories</a> -
    <a href="opcionales.php?lang=en">optionals</a> -
    <a href="contacto.php?lang=en">contact us</a>
  <?php } else { ?>
    <a href="inibombas.php" id='bomba'>bombas</a> -
    <a href="llavelateral.php" id='carga'>llaves de carga lateral</a> -
    <a href="llavecorte.php" id='corte'>llave de corte</a> -
    <a href="accesorios.php" id='ac'>accesorios</a> -
    <a href="opcionales.php">opcionales</a> -
    <a href="contacto.php">contactanos</a>
  <?php } ?>
</div>
