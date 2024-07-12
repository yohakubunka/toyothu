$(function() {
      //ハンバーガーメニュー
      $('.menubutton').click(function(){
        //クリックされた要素がclickedクラスだったら
        if($(this).hasClass("clicked")){
          //clickedクラスを外す
          $(this).removeClass("clicked");
          $('.hamburger').removeClass("clicked");
        }else{
          //clickedクラスを追加する
          $(this).addClass("clicked");
          $('.hamburger').addClass("clicked");
        }
      });
});

//アラート
$(function(){
  $(".preparation").on("click", function(){
    //listBの高さを取得
    alert("ただいま準備中です");
    return false;
  });
});

// ローディング
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

//フェードインアニメーション
$(function () {
  ScrollReveal().reveal('.title', {
    duration: 2000, // アニメーションの完了にかかる時間
    viewFactor: 0, // 0~1,どれくらい見えたら実行するか
    origin: 'bottom',
    mobile: true,
    distance: '50px',
  });
  ScrollReveal().reveal('.first-box', {
    duration: 2500, // アニメーションの完了にかかる時間
    viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
    origin: 'bottom',
    mobile: true,
    distance: '75px',
  });
  ScrollReveal().reveal('.second-box', {
    duration: 3000, // アニメーションの完了にかかる時間
    viewFactor: 0.4, // 0~1,どれくらい見えたら実行するか
    origin: 'bottom',
    mobile: true,
    distance: '100px',
  });
});
