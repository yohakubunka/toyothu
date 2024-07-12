// 使用可能な変数の出力
if (myValues.debug_mode) {
  console.info('\u001b[33m' + 'Use browser: ' + GetBrowserName() + '\u001b[0m');
  myValues.jquery_version = $.fn.jquery;
  console.table(myValues);

  if (GetQueryString()) {
    console.table(GetQueryString());
  }
}

// エスケープ処理
function java_escape(str) {
  return String(str).replace(/&/g, "&amp;")
    .replace(/"/g, "&quot;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
}

// ctrl + q キー入力でログインバーとデバッグツールの表示切替
document.body.addEventListener('keydown',
  event => {
    if (event.key === 'q' && event.ctrlKey) {
      $('#wpadminbar, #debug-toolbar').fadeToggle();
    }
  });

// ツールバーの開閉
$('.toolbar--menu__items a').click(function () {
  var target = $(this).data('content');
  $('.toolbar--content').not('.' + target).slideUp();
  $('.toolbar--content.' + target).slideToggle();
});

// ツールバーのコンテンツの開閉
$('#debug-toolbar .toggle-trigger').click(function () {
  $(this).next('.toggle,.this-content').slideToggle();
  $(this).toggleClass('hide');
});

// モーダルウィンドウを表示
$('#debug-logo-btn').click(function () {
  $('#debug-modal-window').slideToggle(function () {
    $('#debug-modal-window .wrapper').fadeToggle(function () {
      $('#debug-modal-window .inner').fadeToggle();
    });
  });
});
$('#debug-modal-window .wrapper,#debug-modal-window .inner .close span').click(function () {
  $('#debug-modal-window .inner').fadeToggle(function () {
    $('#debug-modal-window .wrapper').fadeToggle(function () {
      $('#debug-modal-window').slideToggle();
    });
  });
});


// リンクチェック
$('body a').not('#debug-toolbar a').each(function (index) {
  var $status = '';
  switch ($(this).attr('href')) {
    case '##':
      $status = '<td class="warning">仮設定状態</td>';
      break;
    case '':
      $status = '<td class="error">未設定</td>';
      break;

    case undefined:
      $status = '<td class="error">no href</td>';
      break;

    default:
      $status = '<td class="success">設定済</td>';
      break;
  }

  var link_to = '';
  if ($(this)[0]['host'] == myValues.site_host) {
    link_to = '<td class="success">内部</td>';
  } else {
    link_to = '<td class="warning">外部</td>';
    if ($(this).attr('href') == undefined) {
      link_to = '<td></td>';
    }
  }

  $('#link_check_wrapper').append(
    '<tr>' + $status + link_to + '<td>' + $(this).attr('href') + '</td><td>' + java_escape($(this)[0]['outerHTML']) + '</td></tr>'
  );
});

// google検索結果
$(function () {
  var site_title = document.title;
  var site_description = $("meta[name=description]").attr("content");


  if (site_title.length > 32) {
    site_title = site_title.substr(0, 32) + '...'
  }

  if (site_description.length > 120) {
    site_description = site_description.substr(0, 120) + '...'
  }

  $('#google-search-results h2').text(site_title);
  $('#google-search-results p').text(site_description);

});

// bodyからはみ出た要素の検出
$('#e-o-w-f-b button').click(function () {

  $('#e-o-w-f-b table').show();
  $('#e-o-w-f-b button').hide();

  var body_width = $('body').width();
  $('#e-o-w-f-b-tbody').append(
    '<tr><td>' + body_width + '</td><td>body</td></tr>'
  );

  $('body *').each(function (index) {
    if ($(this).width() > body_width) {
      $('#e-o-w-f-b-tbody').append(
        '<tr><td class="error">' + $(this).width() + '</td><td>' + java_escape($(this)[0]['outerHTML']) + '</td></tr>'
      );
      $(this).css('background-color', 'rgba(230, 0, 0, 0.4)');
    }
  });

});