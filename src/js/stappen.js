const $stappen = document.querySelectorAll(`.stap`);
$stappen.forEach($stap => {
  $stap.style.display = `none`;
});

const $next = document.querySelector(`#nextBtn`);
$next.addEventListener(`click`, () => {
  nextPrev(1);
});

const $prev = document.querySelector(`#prevBtn`);
$prev.addEventListener(`click`, () => {
  nextPrev(- 1);
});

let currentTab = 0;
showTab(currentTab);

function showTab(n) {
  const x = document.getElementsByClassName('stap');
  x[n].style.display = 'block';
  if (n == 0) {
    document.getElementById('prevBtn').style.display = 'none';
  } else {
    document.getElementById('prevBtn').style.display = 'inline';
  }
  if (n == (x.length - 1)) {
    document.getElementById('nextBtn').style.display = 'none';
  } else {
    document.getElementById('nextBtn').innerHTML = 'Next >>';
  }
}

function nextPrev(n) {
  const x = document.getElementsByClassName('stap');
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = 'none';
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById('regForm').submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  let x, y, i, valid = true;
  x = document.getElementsByClassName('stap');
  y = x[currentTab].getElementsByTagName('input');
  for (i = 0;i < y.length;i ++) {
    if (y[i].value == '') {
      y[i].className += ' invalid';
      valid = false;
    }
  }

  return valid;
}
