<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48" type="image/x-icon" href="assets/img/favicon.svg" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.svg">
  <title><?php echo $title ?></title>
  <?php echo $css;?>
</head>
<body>
  <?php if ($title === 'Home' || $title === 'Winkel' || $title === 'Winkelwagen' || $title === 'Formulier' || $title === 'Tutorial' || $title === 'Bevestiging' || $title === 'Contact') {
  ?>
  <header class="header">
  <h1 class="hidden">Maker Faire Ghent 2021</h1>
    <div class="menu">
      <a href="?page=index"><img class="logo" src="assets/img/logo.svg" alt="logo"></a>
      <nav class="navigation">
        <img class="navigation__cross" src="assets/img/cross.svg" alt="cross">
        <ul class="menu__items">
          <li class="menu__item firstmenu__item"><a class="menu__link" href="index.php">home</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=about">winkel</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=skills">tutorial</a></li>
          <li class="menu__item"><a class="menu__link" href="index.php?page=work">work</a></li>
        </ul>
      </nav>
      <a class="hamburger__menu" href=""><img class="hamburger__menu--item" src="assets/img/hamburger.svg" alt="menu"></a>
    </div>
  </header>
  <?php };?>
<?php echo $content; ?>
<?php echo $js; ?>
  <footer class="footer">
  </footer>
</body>
</html>
