<footer id="footer">
  <div class="row">

    <div class="col-1">
      <nav class="nav line col-1">
        <a href="/guide" class="link <?php echo $url->get(1) == 'guide' ? 'active' : false; ?>">Путеводитель</a>
        <a href="/archive" class="link <?php echo $url->get(1) == 'archive' ? 'active' : false; ?>">Архив</a>
        <a href="/enquiry" class="link <?php echo $url->get(1) == 'enquiry' && !$url->get(2) ? 'active' : false; ?>">Справка</a>
      </nav>
    </div>

    <div class="col-2">
      <p class="copy">&copy; Архивный фонд 2004-2017 | Все права защищены</p>
    </div>

    <div class="autor col-1">
      разработка <a href="http://factor.kz" class="link">КСИ "Фактор"</a>
    </div>
  </div>
</footer>
