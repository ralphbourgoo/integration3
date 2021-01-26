import lottie from 'lottie-web';

const fillBalloon = document.querySelector('.stap1');
const buttonBalloon = document.querySelector('.one');
const buisBevestigen = document.querySelector('.stap2');
const buttonBuis = document.querySelector('.two');
const touwBevestigen = document.querySelector('.stap3');
const buttonTouw = document.querySelector('.three');
const ballonOpwarmen = document.querySelector('.stap4');
const buttonOpwarmen = document.querySelector('.four');
const ballonOpstijgen = document.querySelector('.stap5');
const buttonOpstijgen = document.querySelector('.five');

const fillBalloonAnim = lottie.loadAnimation({
  container: fillBalloon,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap1.json'
});

buttonBalloon.addEventListener('click', function() {
  fillBalloonAnim.playSegments([0,180], true);
});

const buisBevestigenAnim = lottie.loadAnimation({
  container: buisBevestigen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap2.json'
});

buttonBuis.addEventListener('click', function() {
  buisBevestigenAnim.playSegments([0,130], true);
});

const touwBevestigenAnim = lottie.loadAnimation({
  container: touwBevestigen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap3.json'
});

buttonTouw.addEventListener('click', function() {
  touwBevestigenAnim.playSegments([0,146], true);
});

const ballonOpwarmenAnim = lottie.loadAnimation({
  container: ballonOpwarmen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap4.json'
});

buttonOpwarmen.addEventListener('click', function() {
  ballonOpwarmenAnim.playSegments([0,180], true);
});

const ballonOpstijgenAnim = lottie.loadAnimation({
  container: ballonOpstijgen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap5.json'
});

buttonOpstijgen.addEventListener('click', function() {
  ballonOpstijgenAnim.playSegments([0,180], true);
});
