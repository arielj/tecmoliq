<?php $title = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "TecMoLiq.com.ar - Accesories" : "TecMoLiq.com.ar - Accesorios";
   include('header.php'); ?>
<body>
  <?php require('top.php'); ?>
      <div class='right'>
        <img src="/img/helice.jpg" alt="Hélice de paso variable" />
      </div>
      <div class='title'><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? "Variable pitch propeller" : "Hélice de paso variable"; ?></div>
      <div class='text text-accesorios'>
        <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          This propeller can be mounted on any <b>TecMoLiq</b> pump model, notablly enhancing it's performance, or adjusting it so the pump does not do more work than the required. There are two models where the pitch can be set different on each palete or all paletes moves synchronized.
        <?php } else { ?>
          Esta hélice puede ser montada en cualquier modelo de bomba <b>TecMoLiq</b>,
          mejorando notablemente el rendimiento de las mismas, o regulándolas
          para que estas no trabajen exijidas si el trabajo no lo requiere. Se
          fabrican dos modelos donde el paso se varía en forma independiente en
          cada paleta o donde el paso se varía en forma sincronizada a través de
          un mando en el cono de la misma.
        <?php } ?>
      </div>
  <?php require('bottom.php'); ?>
</body>
</html>
