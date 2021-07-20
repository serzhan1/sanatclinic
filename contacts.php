<?php
  $title = "Контакты";
  $test = '<link href="https://fonts.googleapis.com/css?family=Rubik:300,400&display=swap&subset=cyrillic" rel="stylesheet">';
  require 'vendor/tpl/header.php'
?>

<section id="about-sanat">
  <div class="container">
    <div class="row">
      <div class="h2-titles">
        <h2>Контактная информация</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 contact-info">
        <p>ТОО Медицинский центр "SANAT CLINIC"</p>
        <p><b>Адрес:</b> 160000, г. Шымкент, улица Туркестанская 2/4 Б</p>
        <p><b>Время работы:</b> пн-пт. 9:00 - 18:00, сб-вс. 9:00 - 13:00</p>
        <p><b>Электронная почта:</b> seniorserzhan@gmail.com</p>
        <p><b>Контактный телефон:</b> +7(778)788-90-70</p>
        <p class="p-big">Как проехать</p>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Пешком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">На машине</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
            <p>
              <b>Остановка Кинотеатр им. Сейфуллина</b> можно добраться автобусами 43, 111, 135, 138, 152 или маршрутным такси 53, 54, 68, 102, 145. Выйдя из транспорта идите к ул.Байтурсынова не доходя до пересечение вы увидите здание с вывеской "SANAT CLINIC".  
            </p>
            <p>
            <p>
              <b>Остановка Туркестанская баня</b> можно добраться автобусами 43, 111, 138, 191 или маршрутным такси 53, 68, 91, 102, 121, 145. Выйди из транспорта идите вверх по улице Туркестанская. Немного левее вы увидите здание с вывеской "SANAT CLINIC".
            </p>
            </p>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>Едьте к перекрестку Тауке-хана проспект, Байтурсынова, дальше поверните к улице Туркестанская. В пересечений улиц Туркестанская и Байтурсынова впереди вы увидите здание с вывеской "SANAT CLINIC".</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 sec-map">
        <div class="map-frame">
       <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8ea0ac3e7bfb758c45ba6104fc6c9f1e0d3fc33cdd081e8462bf45543d06314f&amp;source=constructor" width="635" height="410" frameborder="0"></iframe>
        </div>
      </div>
    </div>
 
</section>

 
<?php require 'vendor/tpl/footer.php' ?>