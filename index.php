<?php
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Expires: " . date("r"));

  require 'inc/session.php';
  require 'inc/user.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title id="title"><?php echo isset($title) ? $title : 'Путеводитель по архиву'; ?></title>

    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <link href="/compiler.php/ui.scss" rel="stylesheet" type="text/css" />
  </head>
  <body id="body">
    <my-app>Загрузка...</my-app>
    <?php
      require 'view/header.php';
      require 'view/nav.php';
    ?>

    <script src="js/app/core-js/client/shim.min.js"></script>
    <script src="js/app/zone.js/dist/zone.js"></script>
    <script src="js/app/systemjs/dist/system.src.js"></script>
    <script src="systemjs.config.js"></script>
    <script>
      System.import('app').catch(function(err){ console.error(err); });
    </script>
  </body>
</html>
