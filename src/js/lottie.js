import lottie from 'lottie-web'

let iconSkipForward = document.querySelector('.lottie_tutorial');

let animationSkipForward = lottie.loadAnimation({
  container: iconSkipForward,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap1.json'
});

iconSkipForward.addEventListener('click', function() {
  animationSkipForward.playSegments([0,180], true);
});

const $lottieStap2 = document.getElementById('lottie-stap2');
if ($lottieStap2) {
  lottie.loadAnimation({
    container: $lottieStap2, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/stap2.json' // the path to the animation json
  });
}

const $lottieStap3 = document.getElementById('lottie-stap3');
if ($lottieStap3) {
  lottie.loadAnimation({
    container: $lottieStap3, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/stap3.json' // the path to the animation json
  });
}

const $lottieStap4 = document.getElementById('lottie-stap4');
if ($lottieStap4) {
  lottie.loadAnimation({
    container: $lottieStap4, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/stap4.json' // the path to the animation json
  });
}

const $lottieStap5 = document.getElementById('lottie-stap5');
if ($lottieStap5) {
  lottie.loadAnimation({
    container: $lottieStap5, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/stap5.json' // the path to the animation json
  });
}
