<header id="header">

  <div class="row">
    <div class="logo line col-1">
      <a href="/" class="text">logotype</a>
    </div>

    <nav class="nav line col-1">
      <a href="/guide" class="link <?php echo $url->get(1) == 'guide' ? 'active' : false; ?>">Путеводитель</a>
      <a href="/archive" class="link <?php echo $url->get(1) == 'archive' ? 'active' : false; ?>">Архив</a>
      <a href="/enquiry" class="link <?php echo $url->get(1) == 'enquiry' && !$url->get(2) ? 'active' : false; ?>">Справка</a>
    </nav>

    <div class="navigation line col-2">
      <div class="login-link">
        <span class="text sign-up" onclick="modal.open('sign-up')">Регистрация</span>
        <span class="text sign-in" onclick="modal.open('sign-in')">Войти</span>
      </div>

      <div class="lang-dropdown">
        <div class="options">
          <i class="icon icon-translate"></i>
          <span class="lang">Русский</span>
          <a href="/en" class="lang">English</a>
          <a href="/kz" class="lang">Қазақша</a>
        </div>

      </div>
    </div>
  </div>
</header>
