<?php

  session_name ('Archive Session'); // Установить имя cookie Сессии
  session_cache_expire(10080);      // Установить срок сессии в минутах

  session_start();                  // Запустить сессию
