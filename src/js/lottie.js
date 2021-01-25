import lottie from 'lottie-web'

let fillBalloon = document.querySelector('.stap1');
let buttonBalloon = document.querySelector('.one');
let buisBevestigen = document.querySelector('.stap2');
let buttonBuis = document.querySelector('.two');
let touwBevestigen = document.querySelector('.stap3');
let buttonTouw = document.querySelector('.three');
let ballonOpwarmen = document.querySelector('.stap4');
let buttonOpwarmen = document.querySelector('.four');
let ballonOpstijgen = document.querySelector('.stap5');
let buttonOpstijgen = document.querySelector('.five');

let fillBalloonAnim = lottie.loadAnimation({
  container: fillBalloon,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap1.json'
});

buttonBalloon.addEventListener('click', function() {
  fillBalloonAnim.playSegments([0,180], true);
});

let buisBevestigenAnim = lottie.loadAnimation({
  container: buisBevestigen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap2.json'
});

buttonBuis.addEventListener('click', function() {
  buisBevestigenAnim.playSegments([0,130], true);
});

let touwBevestigenAnim = lottie.loadAnimation({
  container: touwBevestigen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap3.json'
});

buttonTouw.addEventListener('click', function() {
  touwBevestigenAnim.playSegments([0,146], true);
});

let ballonOpwarmenAnim = lottie.loadAnimation({
  container: ballonOpwarmen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap4.json'
});

buttonOpwarmen.addEventListener('click', function() {
  ballonOpwarmenAnim.playSegments([0,180], true);
});

let ballonOpstijgenAnim = lottie.loadAnimation({
  container: ballonOpstijgen,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: 'assets/lottie/stap5.json'
});

buttonOpstijgen.addEventListener('click', function() {
  ballonOpstijgenAnim.playSegments([0,180], true);
});
