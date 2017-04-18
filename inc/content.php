<div id="content">
  <?php

    if( !$user->login ):
      switch ($url->get(1)){
        case 'guide':
          require 'view/guide.php';
        break;
      }
    else:

    endif;
  ?>
</div>
