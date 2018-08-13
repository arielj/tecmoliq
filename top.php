<div id='wrapper'>
  <div id='languages'>
    <?php
      if (strpos($_SERVER['QUERY_STRING'],"lang=en") !== false) {
        $url_eng = $_SERVER["REQUEST_URI"];
        $url_esp = str_replace("lang=en","lang=es",$_SERVER["REQUEST_URI"]);
      } else {
        $url_esp = $_SERVER["REQUEST_URI"];
        if (strpos($_SERVER['QUERY_STRING'],"lang=es") !== false) {
          $url_eng = str_replace("lang=es","lang=en",$_SERVER["REQUEST_URI"]);
        } else if (strpos($_SERVER['REQUEST_URI'],"?")){
          $url_eng = $_SERVER["REQUEST_URI"]."&lang=en";
        } else {
          $url_eng = $_SERVER["REQUEST_URI"]."?lang=en";
        }
      } ?>
    <a href='<?php echo $url_esp; ?>'><img src='/img/arg.jpg' alt='español' /></a> |
    <a href='<?php echo $url_eng; ?>'><img src='/img/eeuu.jpg' alt='inglés' /></a>
  </div>
  <div id='div-atom'><a href="http://www.atomizadoresarg.com.ar" id='atom' target='_blank'><img alt="" src="/img/atomizadores.jpg" /></a></div>
  <div id="logo"><a href='/home.php<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '?lang=en': ''; ?>'>TecMoLiq</a></div>
  <div id='barra'><?php include('barra.php') ?></div>
  <div class='separator'><img src='/img/separador.jpg' alt='' /></div>
  <div id='content'>
