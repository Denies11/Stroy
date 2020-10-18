<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap style-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
  <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
  <script type="text/javascript" src="/js/popup_img.js"></script>

  <title>Радужные заборы и сваи</title>
  <meta name = "description" content = "Радужные заборы и сваи" >
<meta name="yandex-verification" content="6687c5fc89b79c64" />
<link rel="icon" href="images/favicon-32x32.png" type="image/x-icon">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(65800378, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65800378" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  <script>
    $(document).ready(function(){
      $('#btn_submit').click(function(){
        // собираем данные с формы
        var user_name    = $('#user_name').val();
        var user_email   = $('#user_email').val();
        var text_comment = $('#text_comment').val();
        // отправляем данные
        $.ajax({
          url: "action.php", // куда отправляем
          type: "post", // метод передачи
          dataType: "json", // тип передачи данных
          data: { // что отправляем
            "user_name":  user_name,
            "user_email":   user_email,
            "text_comment": text_comment
          },
          // после получения ответа сервера
          success: function(data){
            $('.messages').html(data.result); // выводим ответ сервера
          }
        });
      });
    });
  </script>
</head>
<body>
 
<? include 'header.php'?>




<div class="menu markon">
  <nav class="menu__nav">
    <ul class="menu__list r-list">
      <li class="menu__group">
        <a href="index.php" class="menu__link r-link">Главная</a>
      </li>
      <li class="menu__group">
        <a href="proflist.php" class="menu__link r-link">Профлист</a>
      </li>
      <li class="menu__group">
        <a href="zab-prof.php" class="menu__link r-link">Забор из профлиста</a>
      </li>
      <li class="menu__group">
        <a href="evrosh.php" class="menu__link r-link">Евроштакетник</a>
      </li>
      <li class="menu__group">
        <a href="zab-evro.php" class="menu__link r-link">Забор из евроштакетника</a>
      </li>
      <li class="menu__group">
        <a href="jaluzi.php" class="menu__link r-link">Забор жалюзи</a>
      </li>
      <li class="menu__group">
        <a href="3Dzabor.php" class="menu__link r-link">3D забор </a>
      </li>
      <li class="menu__group">
        <a href="svai.php" class="menu__link r-link">Винтовые сваи</a>
      </li>
      <li class="menu__group">
        <a href="vorotakalit.php" class="menu__link r-link">Ворота и калитки</a>
      </li>
    </ul>
  </nav>
  <button class="menu__toggle r-button" type="button">
    <span class="menu__hamburger m-hamburger">
      <span class="m-hamburger__label">
        <span class="menu__screen-reader screen-reader"> Открыть меню</span>
      </span>
    </span>
  </button>
</div>

<div class="container markof">
       <p class="brig">Скидки оптовикам и строительным бригадам</p>
  <div class="row">
      <div class="col-12 contacts">
          <a href="index.php">    <button type="button" class="btn btn-success contact pz-contacts">Главная</button></a>
          <a href="proflist.php">    <button type="button" class="btn btn-success contact pz-contacts">Профлист</button></a>
            <a href="zab-prof.php">    <button type="button" class="btn btn-success contact pz-contacts">Забор из профлиста</button></a>
              <a href="evrosh.php">    <button type="button" class="btn btn-success contact pz-contacts">Евроштакетник</button></a>
                <a href="zab-evro.php">    <button type="button" class="btn btn-success contact pz-contacts">Забор из евроштакетника</button></a>
                  <a href="jaluzi.php">    <button type="button" class="btn btn-success contact pz-contacts">Забор жалюзи</button></a>
                  <a href="3Dzabor.php">    <button type="button" class="btn btn-success contact pz-contacts">3D забор</button></a>
                  <a href="vorotakalit.php">    <button type="button" class="btn btn-success contact pz-contacts">ворота и калитки</button></a>
                   
                    <a href="svai.php">    <button type="button" class="btn btn-success contact pz-contacts">винтовые сваи</button></a>
        
      </div>

  </div>
  
</div>
<br>
<div class="container">
	<div class="row">

<div class="col-12">
 <div class="form-wrapper">

        <form class="contact-form" action="" id="contact-form_1" method="POST" enctype="multipart/form-data">
            <p class="contact-form__title">Оставьте заявку на расчет стоимости</p>
       
            <div class="contact-form__input-wrapper">
                <input name="name" type="text" class="contact-form__input contact-form__input_name"
                    placeholder="Введите ваше имя">
                <div class="contact-form__error contact-form__error_name"></div>
            </div>

            <div class="contact-form__input-wrapper">
                <input name="tel" type="tel" class="contact-form__input contact-form__input_tel"
                       placeholder="Введите ваш телефон">
                <div class="contact-form__error contact-form__error_tel"></div>
            </div>

            <div class="contact-form__input-wrapper"> 
                <input name="email" type="email" class="contact-form__input contact-form__input_email"
                    placeholder="Введите ваш email">
                <div class="contact-form__error contact-form__error_email"></div>
            </div>

            <div class="contact-form__input-wrapper">
                <textarea name="text" class="contact-form__input contact-form__text" placeholder="Введите ваше сообщение"></textarea>
                <div class="contact-form__error contact-form__error_text"></div>
            </div>
             <p class="contact-form__description"></p>
         
             <button class="contact-form__button ds" type="submit"> Отправить </button>
        </form>
        
    </div>
    </div>
   
</div>
    </div>
   
<div class="container fon-footer">
  
</div>



  

<script src="js/zoom.js" type="text/javascript"></script>

  <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script src="/mail/js/mail.js"></script>

   
<script src="js/menu.js" type="text/javascript"></script>


    <script>
        $(function() {
            $('.contact-form__input_tel').mask('+7(000)000-00-00');
        });
    </script>
    <script>
      $('form').submit(function(e){
    // Блокируем кнопки при отправке формы
    $('button[type=submit]', $(this)).prop( 'disabled', true );
    e.preventDefault();
});
    </script>
</body>
</html>