<?php
  function normal($year, $end){
    if( !$end ) return $year >= 1800 ? normal($year - 123) : $year;
    return $year >= 2017 ? normal($year - 123) : $year;
  }
?>

<link href="/compiler.php/page/archive.scss?time=<?php echo (int) microtime(true); ?>" rel="stylesheet" type="text/css" />

<div id="archive">
  <div class="content row">
    <h1 class="title"><span class="text">Архив</span></h1>
  </div>

  <!-- <label class="search-block">
    <input type="text" class="input" placeholder="Поиск" />
    <i class="icon icon-search"></i>
  </label> -->

  <div class="row">
    <div class="filters col-1">
      <div class="block">
        <div class="tabs">
          <a href="/archive/funds" class="tab active">Фонды</a>
          <a href="/archive/registers" class="tab">Описи</a>
          <a href="/archive/cases" class="tab">Дела</a>
        </div>

        <div class="option">
          <label class="label checkbox">
            <span class="text">Только выбранные</span>
            <input type="checkbox" class="input" />
            <span class="box">
              <i class="icon icon-check"></i>
            </span>
          </label>
        </div>

        <div class="option">
          <label class="label range">
            <span class="text">Начало события позднее</span>
            <input type="number" class="input num" min="1700" max="2000" value="1700" onchange="this.parentNode.querySelector('.ran').value=this.value" onkeyup="this.onchange()" />
            <input type="range" class="input ran" min="1700" max="2000" value="1700" onchange="this.parentNode.querySelector('.num').value=this.value" onmousemove="this.onchange()" />
          </label>
        </div>

        <div class="option">
          <label class="label range">
            <span class="text">Конец события не позднее</span>
            <input type="number" class="input num" min="1800" max="2017" value="1800" onchange="this.parentNode.querySelector('.ran').value=this.value" onkeyup="this.onchange()" />
            <input type="range" class="input ran" min="1800" max="2017" value="1800" onchange="this.parentNode.querySelector('.num').value=this.value" onmousemove="this.onchange()" />
          </label>
        </div>

        <div class="option">
          <span class="text top">Результатов на странице:</span>

          <div class="select-box">
            <select class="select">
              <option value="15">15</option>
              <option value="30">30</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="list col-3">
      <label class="search-block">
        <input type="text" class="input" placeholder="Поиск" />
        <i class="icon icon-search"></i>
      </label>

      <table class="table">
        <thead class="head">
          <tr class="tr">
            <th class="th id">ID</th>
            <th class="th name">Название</th>
            <th class="th begin">Начало</th>
            <th class="th end">Конец</th>
            <th class="th detail"></th>
          </tr>
        </thead>
        <tbody class="body">
          <?php for($i = 21; $i; --$i){ ?>
            <tr class="tr">
              <td class="td id"><?php echo 1000 + $i; ?></td>
              <td class="td name">Название <?php echo (int) (1000 / $i); ?></td>
              <td class="td begin"><?php echo normal(1800 + (int) (1000 / $i)); ?> год</td>
              <td class="td end"><?php echo normal(1800 + (int) (1000 / $i), true); ?> год</td>
              <td class="td detail">Детали</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="pagination">
        <button class="first go disabled"><<</button>
        <button class="number go active">1</button>
        <button class="number go">2</button>
        <button class="number go">3</button>
        <button class="number go">4</button>
        <button class="number go disabled">...</button>
        <button class="number go">30</button>
        <button class="last go">>></button>
      </div>
    </div>
  </div>
</div>
