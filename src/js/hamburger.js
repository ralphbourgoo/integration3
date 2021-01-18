{
  const handleClickEvent = e => {
    e.preventDefault();
    const body = document.querySelector('body');
    const html = document.querySelector('html');
    const $navigation = document.querySelector(`.navigation`);
    $navigation.classList.add('animationHamburgerFadeIn');
    $navigation.classList.remove('animationHamburgerFadeOut');
    body.classList.add('stop-scrolling');
    html.classList.add('stop-scrolling');
  };

  const handleClickCloseEvent = e => {
    e.preventDefault();
    const body = document.querySelector('body');
    const html = document.querySelector('html');
    const $navigation = document.querySelector(`.navigation`);
    $navigation.classList.add('animationHamburgerFadeOut');
    $navigation.classList.remove('animationHamburgerFadeIn');
    body.classList.remove('stop-scrolling');
    html.classList.remove('stop-scrolling');
  };

  const hamburgerMenu = () => {
    const $hamburgerElement = document.querySelector('.hamburger__menu');
    const $hamburgerCross = document.querySelector(`.navigation__cross`);
    if ($hamburgerCross) {
      $hamburgerCross.addEventListener('click', handleClickCloseEvent);
      $hamburgerElement.addEventListener('click', handleClickEvent);
    }
  };

  const init = () => {
    hamburgerMenu();
  };

  init();
}
