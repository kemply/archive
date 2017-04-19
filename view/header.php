<header id="header">

  <div class="row">
    <div class="logo line col-1">
      <a href="" class="text">logotype</a>
    </div>

    <nav class="nav line col-1">
      <a href="/guide" class="link <?php echo $url->get(1) == 'guide' ? 'active' : false; ?>">Путеводитель</a>
      <a href="/archive" class="link <?php echo $url->get(1) == 'archive' ? 'active' : false; ?>">Архив</a>
      <a href="/faq" class="link <?php echo $url->get(1) == 'faq' ? 'active' : false; ?>">F.A.Q.</a>
    </nav>

    <div class="navigation line col-2">
      <div class="login-link">
        <a href="/sign-up" class="text sign-up">Регистрация</a>
        <a href="/sign-in" class="text sign-in">Войти</a>
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
