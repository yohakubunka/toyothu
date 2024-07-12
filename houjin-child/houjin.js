$(function () {
  $('.hamburger').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.globalMenuSp').addClass('active');
    } else {
      $('.globalMenuSp').removeClass('active');
    }
  });
});

$(function () {
  $('.globalMenuSp .head-link').on('click', function () {
    $('.globalMenuSp').removeClass('active');
    $('.hamburger').removeClass('active');

  });
});
//情報公開外部リンク、内部リンク判定
$(function () {
  $('.disc-flex li a[href^=http]').not('[href*="' + location.hostname + '"]').attr('target', '_blank').addClass("blank");
});
//準備中
$(function () {
  $('.alert-btn').on('click', function () {
    alert('準備中');
  });
});

//セクションタイトルアニメーション
var words = document.getElementsByClassName('houjin-ttl');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }

  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }

  currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
}

function animateLetterOut(cw, i) {
  setTimeout(function () {
    cw[i].className = 'letter out';
  }, i * 80);
}

function animateLetterIn(nw, i) {
  setTimeout(function () {
    nw[i].className = 'letter in';
  }, 340 + (i * 80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }

  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 500);




ScrollReveal().reveal('.box', {
  duration: 2000, // アニメーションの完了にかかる時間
  viewFactor: 0, // 0~1,どれくらい見えたら実行するか
  origin: 'bottom',
  mobile: true,
  distance: '50px',
});

ScrollReveal().reveal('.box-b', {
  duration: 2000, // アニメーションの完了にかかる時間
  viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
  origin: 'bottom',
  mobile: true,
  distance: '50px',
});

ScrollReveal().reveal('.box-b1', {
  duration: 1000, // アニメーションの完了にかかる時間
  viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
  origin: 'bottom',
  mobile: true,
  distance: '50px',
});
ScrollReveal().reveal('.box-b2', {
  duration: 1550, // アニメーションの完了にかかる時間
  viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
  origin: 'bottom',
  mobile: true,
  distance: '50px',
});
ScrollReveal().reveal('.box-b3', {
  duration: 2050, // アニメーションの完了にかかる時間
  viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
  origin: 'bottom',
  mobile: true,
  distance: '50px',
});
ScrollReveal().reveal('.fluffy', {
  duration: 2500,
  viewFactor: 0.2,
  mobile: true,
});


$(function () {
  //すべての読み込みが完了したら実行
  $('#loader-bg').show();
  $(window).on('load', function () {
    $('#loader-bg').delay(2000).fadeOut(1000);
  });

  //10秒たったら強制的にロード画面を非表示
  setTimeout(function () {
    $('#loader-bg').fadeOut(1000);
  }, 10000);
});

$(function () {
  $('#section-houjin-contact .houjin-contact__content--form .agree .wpcf7-list-item .wpcf7-list-item-label').on('click', function () {
    $('.submit').toggleClass('opacity');
  });
});