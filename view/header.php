<header id="header">
  <div class="row">
    <div class="logo line col-1">
      <a href="" class="text">logotype</a>
    </div>

    <nav class="nav line col-2">
      <a href="/guide" class="link <?php echo $url->get(1) == 'guide' ? 'active' : false; ?>">Путеводитель</a>
      <a href="/archive" class="link <?php echo $url->get(1) == 'archive' ? 'active' : false; ?>">Архив</a>
      <a href="/faq" class="link <?php echo $url->get(1) == 'faq' ? 'active' : false; ?>">F.A.Q.</a>
    </nav>

    <div class="navigation line col-1">
      <div class="login-link">
        <a href="/sign-up" class="text sign-up">Регистрация</a>
        <a href="/sign-in" class="text sign-in">Войти</a>
      </div>

      <div class="lang-dropdown">
        <span class="lang">Рус</span>
        <a href="/en" class="lang">Eng</a>
        <a href="/kz" class="lang">Қаз</a>
      </div>
    </div>
  </div>
</header>
