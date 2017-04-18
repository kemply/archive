<?php
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Expires: " . date("r"));

  require 'inc/session.php';
  require 'inc/connect.php';
  require 'inc/user.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title id="title"><?php echo isset($title) ? $title : 'Путеводитель по архиву'; ?></title>

    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <link href="/compiler.php/ui.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body id="body">
    <?php
      require 'view/header.php';
      require 'view/nav.php';
    ?>
  </body>
</html>
