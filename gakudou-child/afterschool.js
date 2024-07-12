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


/**
 * itemフィルター動作処理  -----------------------------------------------
 */


// フィルター使用時処理

/**
 * itemフィルター動作処理  -----------------------------------------------
 */


// 日時カレンダー
$(function () {
    $('#datetime01').on('change', function () {
        var date = moment($(this).val());
        $('input[name="text-573"]').val(date.format("YYYY-MM-DD HH:mm"));
        $(this).css('color', '#26333b');
    });
});
$(function () {
    $('#datetime02').on('change', function () {
        var date = moment($(this).val());
        $('input[name="text-574"]').val(date.format("YYYY-MM-DD HH:mm"));
        $(this).css('color', '#26333b');
    });
});
$(function () {
    $('#datetime03').on('change', function () {
        var date = moment($(this).val());
        $('input[name="text-575"]').val(date.format("YYYY-MM-DD HH:mm"));
        $(this).css('color', '#26333b');
    });
});


// アコーディオン
$(function () {
    $('.ac-parent').on('click', function () {
        $(this).next().slideToggle();
        $(this).toggleClass("open");
    });
});


// ページトップボタン
$(function () {
    var pagetop = $('#page-top');
    pagetop.click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 1);
        return false;
    });
});



$(function () {
    $('.category__box li').on('click', function () {

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.category__box').find('li').removeClass('active');
            $(this).addClass('active');
        }


        $('.recruit-desc-item').removeClass('show');

        let category = false;
        let area = false;
        let job = false;
        let undefind_flag = true;

        $('.recruit-desc-item').each(function (inde, value) {
            var show_flag = true;

            if ($('#filter_category .active').length) {
                category = $('#filter_category .active').data('filter');
                if ($(this).data('category') != category) {
                    show_flag = false;
                }
            }
            if ($('#filter_area .active').length) {
                area = $('#filter_area .active').data('filter');
                if ($(this).data('area') != area) {
                    show_flag = false;
                }
            }
            if ($('#filter_job .active').length) {
                job = $('#filter_job .active').data('filter');
                if ($(this).data('job') != job) {
                    show_flag = false;
                }
            }

            if (show_flag) {
                undefind_flag = false;
                $(this).addClass('show');
            }
        });

        if (undefind_flag) {
            $('.undefind').css('display', 'block');
        } else {
            $('.undefind').css('display', 'none');

        }
    })
})

$(function () {
    $('.recruit-status .recruit-status__item').on('click', function () {
        let top_cat = $(this).find('p.title').text();
        $('.category__box .cat-button').each(function (index, value) {
            if ($(this).text() == top_cat) {
                $(this).closest('.category__box').find('li').removeClass('active');
                $(this).addClass('active');
            }
        })

        $('.recruit-desc-item').removeClass('show');

        let category = false;
        let area = false;
        let job = false;
        let undefind_flag = true;

        $('.recruit-desc-item').each(function (inde, value) {
            var show_flag = true;

            if ($('#filter_category .active').length) {
                category = $('#filter_category .active').data('filter');
                if ($(this).data('category') != category) {
                    show_flag = false;
                }
            }
            if ($('#filter_area .active').length) {
                area = $('#filter_area .active').data('filter');
                if ($(this).data('area') != area) {
                    show_flag = false;
                }
            }
            if ($('#filter_job .active').length) {
                job = $('#filter_job .active').data('filter');
                if ($(this).data('job') != job) {
                    show_flag = false;
                }
            }

            if (show_flag) {
                undefind_flag = false;
                $(this).addClass('show');
            }
        });

        if (undefind_flag) {
            $('.undefind').css('display', 'block');
        } else {
            $('.undefind').css('display', 'none');

        }
    })
})

$(function () {
    var h = $(window).height();

    $('#loader-bg').height(h).css('display', 'block');
});

window.onload = () => { //全ての読み込みが完了したら実行
    $('#loader-bg').delay(900).fadeOut(800);
};

//10秒たったら強制的にロード画面を非表示
$(function () {
    setTimeout('stopload()', 10000);
});

function stopload() {
    $('#wrap').css('display', 'block');
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
}


$(function () {
    ScrollReveal().reveal('.box', {
        duration: 2000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        mobile: false,
    });

    ScrollReveal().reveal('.nomal', {
        duration: 2000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        mobile: false,
    });


    ScrollReveal().reveal('.status0', {
        duration: 2000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });

    ScrollReveal().reveal('.status1', {
        duration: 3000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });

    ScrollReveal().reveal('.status2', {
        duration: 4000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });

    ScrollReveal().reveal('.status3', {
        duration: 5000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });

    ScrollReveal().reveal('.strong', {
        mobile: false,
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        duration: 1600,
        scale: 0.1,
    });

    ScrollReveal().reveal('.left-slide', {
        duration: 3000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });

    ScrollReveal().reveal('.right-slide', {
        duration: 3000, // アニメーションの完了にかかる時間
        viewFactor: 0.5, // 0~1,どれくらい見えたら実行するか
        origin: 'bottom',
        mobile: false,
        distance: '100px',
    });
});

// iOS safariでアドレスバー分の高さ対策
const setFillHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);

// 初期化
setFillHeight();

$(function () {
    $('.coming-soon').on('click', function () {
        alert('Coming Soon...');
        return false;
    });
});