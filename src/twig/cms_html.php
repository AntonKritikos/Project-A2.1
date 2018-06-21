<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="assets/css/layout.css">
</head>

<body>
  <div class="side-nav__logo">
    <img src="assets/img/hu-logo.svg" alt="HU-Logo">
  </div>
  <container class="side-nav">
    <div class="side-nav__container">
      <a href="?page=header" class="side-nav__header">Header</a>
      <a href="?page=about" class="side-nav__about">About</a>
      <div class="side-nav__dropdown side-nav__dropdown--closed" style="height:48px;">
        <button onclick="dropdown()" class="side-nav__dropdown__button">Content</button>
        <div>
          <a href="?page=content-1" class="side-nav__content-1">Link 1</a>
          <a href="?page=content-2" class="side-nav__content-2">Link 2</a>
          <a href="?page=content-3" class="side-nav__content-3">Link 3</a>
          <a href="#" class="side-nav__add-page">+ Make page</a>
        </div>
      </div>
      <a href="?page=footer" class="side-nav__footer">Footer</a>
    </div>
  </container>
  <form method="" target="" class="content-body">
    <div class="content-body__title">
      <h1>Bewerk de About</h1>
      <p>Klik op de teksten om deze aan te passen.</p>
    </div>
    <div class="content-body__container content-body__container--header">
      <input type="text" name="title" value="Leid de toekomst op" class="transparent title">
      <input type="text" name="subtitle" value="Zie hoe jij de toekomst gaat beïnvloeden als leraar Techniek" class="transparent subtitle">
      <input type="text" name="button" value="ontdek de toekomst" class="button">
    </div>
    <div class="content-body__container content-body__container--about">
      <div class="about-wrapper">
        <input type="text" name="title" value="Leid de toekomst op" class="transparent title--red title">
        <textarea name="content" value="" class="transparent content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
        <input type="text" name="button" value="naar de innovaties" class="button">
      </div>
    </div>
    <div class="content-body__container content-body__container--content-1 layout-1">
      <input type="text" name="head" value="Leid de toekomst op" class="title--bg-red title">
      <div class="content-box">
        <textarea name="title" class="subtitle">Studeren leraar techniek</textarea>
        <textarea name="content" value="" class="transparent content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
        <input type="text" name="button-1" value="bekijk video" class="button button--blue">
        <input type="text" name="button-2" value="volgende innovatie" class="button">
      </div>
    </div>
    <div class="content-body__container content-body__container--footer">
      <div class="footer-top">
        <input type="text" name="title" value="De toekomst opleiden, start vandaag nog" class="transparent title--red title">
        <textarea name="content" value="" class="transparent content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
        <input type="text" name="button-1" value="schrijf in" class="button button--blue">
        <input type="text" name="button-2" value="meer over leraar techniek" class="button button--blue">
      </div>
      <div class="footer-bottom">
        <img src="assets/img/hu-logo.svg" alt="HU-Logo">
          <div class="footericons">
            <a href="https://www.facebook.com/HogeschoolUtrecht/" class="footerlink" target="_blank">
                <i class="icon--footer icon fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/HU_Utrecht" class="footerlink" target="_blank">
                <i class="icon--footer icon fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/hogeschoolutrecht/" class="footerlink" target="_blank">
                <i class="icon--footer icon fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/school/hogeschool-utrecht/" class="footer__link" target="_blank">
                <i class="icon--footer icon fab fa-linkedin-in"></i>
            </a>
        </div>
      </div>
    </div>
    <div class="content-body__settings">
      <label for="menu-label">Menu label:</label>
      <input type="text" name="menu-label" value="Leid de toekomst op" class="menu-label" id="menu-label">
      <label for="layout">Layout:</label>
      <select class="layout" name="layout" id="layout">
        <option value="innovation-1">Innovation 1</option>
      </select>
      <input type="submit" name="submit" value="Pagina Updaten" class="button">
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  function dropdown(){
    var target = $('.side-nav__dropdown');
    var max_height = ($('.side-nav__dropdown>div').children().length + 1) * 31 + 27 + "px";
    if (target.hasClass('side-nav__dropdown--closed')) {
      target.removeClass('side-nav__dropdown--closed').addClass('side-nav__dropdown--open');
      target.css('height', max_height );
    }
    else if (target.hasClass('side-nav__dropdown--open')) {
      target.removeClass('side-nav__dropdown--open').addClass('side-nav__dropdown--closed');
      target.css('height','48px');
    }
  }
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
  };
  var page = getUrlParameter('page');
  if (page) {
    $(".side-nav__"+page).addClass('side-nav__item--active');
    $(".content-body__container--"+page).addClass('content-body__container--active')
    if (page.includes("content-")) {
      $('.side-nav__dropdown__button').click();
    }
  }
  </script>
</body>

</html>