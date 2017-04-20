<link href="/compiler.php/page/enquiry.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />

<div id="enquiry">
  <div class="content row">
    <h1 class="title"><span class="text">Справка</span></h1>
  </div>

  <div class="blocks row center">
    <div class="card col-1 row-1">
      <a href="/help/faq" class="block">
        <i class="icon icon-help"></i>
        <span class="name">Часто задаваемые вопросы</span>
      </a>
    </div>

    <div class="card col-1 row-1">
      <a href="/help/faq" class="block">
        <i class="icon icon-book"></i>
        <span class="name">Руководство пользователя</span>
      </a>
    </div>

    <div class="card col-1 row-1">
      <a href="/help/faq" class="block">
        <i class="icon icon-feedback"></i>
        <span class="name">Обратная связь</span>
      </a>
    </div>

    <div class="card col-1 row-1">
      <a href="/help/faq" class="block">
        <i class="icon icon-winrar"></i>
        <span class="name">Информация для владельцев фондов</span>
      </a>
    </div>
  </div>

  <div class="content row">
    <h2 class="title small col-3"><span class="text">Конакты</span></h2>
  </div>

  <div class="content row">
    <div class="col-3">
      <div class="col-1">
        <span class="key">Адрес:</span>
        <span class="value">Арай 53, Левый берег, г. Астана</span>
      </div>
    </div>
  </div>

  <div id="map"></div>

  <script type="text/javascript">
    var map, placemark;
    ymaps.ready(()=>{
      map = new ymaps.Map("map", {
        center: [51.135751, 71.433494],
        zoom: 16
      });

      placemark = new ymaps.Placemark(
        [51.135751, 71.433494], {
          hintContent: 'КСИ "Фактор"',
          balloonContent: 'Software Студия'
      });

      map.geoObjects.add(placemark);
    });
  </script>
</div>
