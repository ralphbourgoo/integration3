<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48" type="image/x-icon" href="assets/img/checklist/robot.svg" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/checklist/robot.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/checklist/robot.svg">
  <title><?php echo $title ?></title>
  <?php echo $css;?>
</head>
<body>
  <?php if ($title === 'Home' || $title === 'Winkel' || $title === 'Winkelwagen' || $title === 'Formulier' || $title === 'Tutorial' || $title === 'Bevestiging' || $title === 'Contact' || $title === 'Start' || $title === 'Checklist') {
  ?>
  <header class="header">
  <h1 class="hidden">Maker Faire Ghent 2021</h1>
    <div class="menu">
      <a href="?page=index"><img class="logo" src="assets/img/logo/logo.svg" alt="logo"></a>
      <nav class="navigation">
        <img class="navigation__cross" src="assets/img/logo/cross.svg" alt="cross">
        <ul class="menu__items">
          <li class="menu__item firstmenu__item"><a class="menu__link" href="index.php">home</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=winkel">winkel</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=startpage">tutorial</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=winkelwagen">winkelwagen (<?php echo $numItems;?>)</a></li>
        </ul>
      </nav>
      <a class="hamburger__menu" href=""><img class="hamburger__menu--item" src="assets/img/logo/hamburger.svg" alt="menu"></a>
    </div>
  </header>
  <?php };?>
<?php echo $content; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"
  integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw=="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<?php echo $js; ?>
  <footer class="footer">
    <ul class="footer__items">
      <li class="footer__item"><a class="footer__link" href="?page=index">Home</a></li>
      <li class="footer__item"><a class="footer__link" href="index.php?page=winkel">Winkel</a></li>
      <li class="footer__item"><a class="footer__link" href="index.php?page=startpage">Tutorial</a></li>
      <li class="footer__item"><a class="footer__link" href="index.php?page=winkelwagen">Winkelwagen (<?php echo $numItems;?>)</a></li>
    </ul>
    <div>
      <p class="footer_text white">© MAKERS FAIRE GHENT</p>
      <a href="https://ralphbourgoo.be/" class="footer_text white">website by Ralph Bourgoo</a>
    </div>
  </footer>
</body>
</html>
