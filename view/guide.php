<link href="/compiler.php/page/guide.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />

<div id="guide">
  <div id="banner" class="banner">
    <img class="img" src="/img/banner.jpg" />
    <h2 class="name">Архив чего-то там им. кого-то</h2>
    <span class="description">Документы про КазССР, текущую политику, экономику социальное положение и НЛО</span>
  </div>

  <div class="content row">
    <h1 class="title"><span class="text">Путеводитель по архиву</span></h1>

    <div class="document">
      <div id="guide-nav" class="pages absolute col-1">
        <h4 class="h4">Содержание:</h4>
        <?php
          // require 'list.html';
        ?>
      </div>

      <div id="guide-document" class="page col-3 offset-1"></div>
    </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
<script src="/js/guide.js?time=<?php echo (int) microtime(true); ?>"></script>
