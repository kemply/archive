<link href="/compiler.php/page/enquiry.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />

<div id="enquiry">


  <?php
    switch ($url->get(2)){
      case 'manual':
        require 'view/enquiry/manual.php';
      break;

      case 'faq':
        require 'view/enquiry/faq.php';
      break;

      case 'feedback':
        require 'view/enquiry/feedback.php';
      break;

      case 'for-owners':
        require 'view/enquiry/for-owners.php';
      break;

      default:
        require 'view/enquiry/default.php';
      break;
    }
  ?>

  <div class="content row">
    <h2 class="title small col-3"><span class="text">Контакты</span></h2>
  </div>

  <div class="row center">
    <div class="col-3">

      <div class="contact col-1">
        <span class="key">Адрес:</span>
        <span class="value">Арай 53, Левый берег, г. Астана</span>
      </div>

      <div class="contact col-1 offset-1">
        <span class="key">Сайт:</span>
        <a href="http://factor.kz" class="value link" target="_blank">factor.kz</a>
      </div>

      <div class="contact col-1">
        <span class="key">Телефон:</span>
        <span class="value">+7 777 123 4567</span>
      </div>

      <div class="contact col-1 offset-1">
        <span class="key">Email:</span>
        <a href="mailto:support@factor.kz" class="value link">support@factor.kz</a>
      </div>

    </div>
  </div>

  <div id="map"></div>

  <script type="text/javascript">
    var map, placemark;
    ymaps.ready(()=>{
      map = new ymaps.Map("map", {
        center: [51.135751, 71.433494],
        zoom: 16,
        controls: ['zoomControl', 'typeSelector',  'fullscreenControl']
      });

      placemark = new ymaps.Placemark(
        [51.135751, 71.433494], {
          hintContent: 'КСИ "Фактор"',
          balloonContent: 'Software Студия'
      });

      map.geoObjects.add(placemark);
      map.behaviors.disable('scrollZoom');
    });
  </script>
</div>
