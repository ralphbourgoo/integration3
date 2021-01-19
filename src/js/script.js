import lottie from 'lottie-web'

const $lottieContainer = document.getElementById('lottie-container');
if ($lottieContainer) {
  lottie.loadAnimation({
    container: $lottieContainer, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/bump.json' // the path to the animation json
  });
}
