<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="images/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <title>UltraBrand</title>
</head>

<body>
  <?php
  session_start();
  include 'header.php';
  ?>
  <main>
    <div class="intro">
      <div class="intro-iner">
        <div class="txt-intro">
          <h1>Удаленная команда специалистов по маркетингу</h1>
          <p>
            Предоставим специалистов по инфлюенс-маркетингу, анализу рынка и
            лидогенерации, которые отвечают за результат
          </p>
          <div class="buttn">
            <div class="brif1">
              <li><a href="#poup__brif">Заполните бриф</a></li>
            </div>
            <div class="consule">
              <li><a href="#">Забронировать консультацию</a></li>
            </div>
          </div>

        </div>
        <div id="poup__brif" class="poup">
          <a href="#header" class="poup__area"></a>
          <div class="poup__body">
            <div class="poup__content">
              <a class="poup__close" href="#header">X</a>
              <div class="poup__title">
                <h1>Заполните Бриф</h1>
                <p>В ближайшее время с вами свяжется наш менеджер и ответит на все вопросы.</p>
              </div>
              <div class="poup__form">
                <form class="brif" method="post" enctype="multipart/form-data">
                  <label for="">Telegram или номер телефона</label>
                  <input type="text">
                  <label for="">Email</label>
                  <input type="email">
                  <label for="">Имя и Отчество</label>
                  <input type="text">
                  <label for="">Компания</label>
                  <input type="text">
                  <label for="">Должность</label>
                  <input type="text">
                  <label for="">Стадия бизнеса</label>
                  <input type="text">
                  <label for=""> Краткое описание задачи (опционально)</label>
                  <input type="text">
                  <button type="submit">Отправить</button>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="introhuman">

          <div class="rectangle">
            <img src="/images/Group1.svg" alt="">
          </div>
          <div class="rectangle">
            <img src="/images/Group2.svg" alt="">
          </div>

          <div class="rectangle">
            <img src="/images/Group3.svg" alt="">
          </div>

          <div class="rectangle">
            <img src="/images/Group4.svg" alt="">
          </div>

          <div class="rectangle">
            <img src="/images/Group5.svg" alt="">
          </div>
          <div class="rectangle">
            <img src="/images/Group6.svg" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="options">
      <div class="options-iner">


        <img class="icon" src="images/check-svgrepo-com.svg" alt="" />
        <p>Начнем работу в течении 2 часов</p>


        <img class="icon" src="images/check-svgrepo-com.svg" alt="" />
        <p>Возьмем оплаты только за часы</p>

        <img class="icon" src="images/check-svgrepo-com.svg" alt="" />
        <p>Подпишим NDA</p>

      </div>
    </div>
    </div>
    <div class="company">
      <p>Нам доверяют</p>
      <div class="company__iner">
        <div class="company__content1">
          <div class="bg">

          </div>
          <div class="bg1">

          </div>
          <div class="bg2">

          </div>
          <div class=" bg3">

          </div>
          <div class="bg4">

          </div>
        </div>
        <div class="company__content2">
          <div class="bg">

          </div>
          <div class="bg">

          </div>
          <div class="bg">

          </div>
          <div class="bg">

          </div>
          <div class="bg">

          </div>
        </div>
      </div>
  </main>
</body>

</html>