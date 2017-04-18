<div id="content">
  <?php

    if( !$user->login ):
      switch ($url->get(1)){
        case 'guide':
          require 'view/guide.php';
        break;

        case 'archive':
          require 'view/archive.php';
        break;

        case 'faq':
          require 'view/faq.php';
        break;
      }
    else:

    endif;
  ?>
</div>
