<?php
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Expires: " . date("r"));

  function minify($html){
    $search = array(
      '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
      '/[^\S ]+\</s',     // strip whitespaces before tags, except space
      '/(\s)+/s',         // shorten multiple whitespace sequences
      '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
      '>',
      '<',
      '\\1',
      ''
    );

    return str_replace('> <', '><', preg_replace($search, $replace, $html));
  };

  ob_start('minify');

  require 'inc/url.php';
  require 'inc/session.php';
  require 'inc/connect.php';
  require 'inc/user.php';

  if( !$url->get(1) ) header('Location: /guide');

?>
<!DOCTYPE html>
<html>
  <head>
    <title id="title"><?php echo isset($title) ? $title : 'Путеводитель по архиву'; ?></title>

    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <link href="/compiler.php/ui.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />
    <!-- <link href="//file.myfontastic.com/ABA5yUrw93ntWVEnGgxxn4/icons.css" rel="stylesheet" type="text/css" /> -->

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  </head>
  <body id="body">
    <?php
      require 'view/header.php';
      require 'view/nav.php';

      require 'inc/content.php';

      require 'view/footer.php';
    ?>
  </body>
</html>

<?php ob_end_flush(); ?>
