$(function() {

    // 申請が一件のみの場合、「この内容を削除する」を非表示する================================
    var test = $('.houjin-form__documentset--inner').length;
    if (test == 1) {
        $('.content_delete').hide();
    } else {
        $('.content_delete').show();
    }
    // 申請が一件のみの場合、「この内容を削除する」を非表示する================================

    // 経歴が一件のみの場合、「この経歴を削除する」を非表示する================================
    var document_count = $('.document-set__career').length;
    if (document_count == 1) {
        $('.delete_career').hide();
    } else {
        $('.delete_career').show();
    }
    // 経歴が一件のみの場合、「この経歴を削除する」を非表示する================================

    var upload_file_flg = true; // 最大サイズ超過判定フラグ ================================================

    //書類の添付
    $('body').on('click touchstart', '.dummy-tenpu', function() {
        $('input[name="document' + $(this).data('file') + '"]').trigger("click");
    });

    $('.document-file').on('change', function() {
        let index = $(this).index('.document-file');
        let index_num = index + 1;
        let file_name = $('input[name="document' + index_num).prop('files')[0].name;
        let file_size = $('input[name="document' + index_num).prop('files')[0].size;
        let file = $('input[name="document' + index_num).val();


        // console.log(index_num);
        //書類の添付にファイル名表示
        $('.dummy-tenpu[data-file="' + index_num + '"] .file-name').text(file_name);
        //書類の記入例にファイル名表示
        $('.dummy-exmpletenpu[data-file="' + index_num + '"] .file-name').text(file_name);


        // アップロードされたファイルサイズが「maxFileSize」より大きかったらエラーを出す
        //ファイルサイズ　2MB
        const maxFileSize = 1024 * 1024 * 2;

        if (maxFileSize <= file_size) {
            $(file).val('');
            $('.tenpu_error_msg').eq(index).text("アップロードできる画像の最大サイズは2MBです");
        } else {
            $('.tenpu_error_msg').eq(index).text("");
        }
    });

    // .tenpu-numをクリックしたら「削除」ボタンを表示させる
    $('body').on('click', '.tenpu-num', function() {
        $(this).siblings('.clear').show();
    });

    //ファイル削除の処理
    $('body').on('click', '.clear', function() {
        let delet_num = $(this).siblings('.tenpu-num').data('file');
        // console.log(delet_num);
        $('input[name="document' + delet_num + '"]').val('');
        $('.tenpu-num[data-file="' + delet_num + '"] .file-name').text('');
        // console.log($(this));

        // 「削除」ボタンを非表示にする
        $(this).hide();
    });

    $('.confilm-btn').on('click', function() {


        //申請者の基本情報
        let input_success = true;

        // サイズ超過ファイルのチェック ===================================================
        $('.document-file').each(function(index, element) {
            index_num = index + 1;
            const maxFileSize = 1024 * 1024 * 2;
            if ($('input[name="document' + index_num).prop('files')[0]) {
                let file_size = $('input[name="document' + index_num).prop('files')[0].size;
                if (maxFileSize <= file_size) {
                    upload_file_flg = false;
                    input_success = false;
                    return false;
                } else {
                    upload_file_flg = true;
                }
            }
        });
        // サイズ超過ファイルのチェック ===================================================


        let namae = $('input[name="namae"]').val();
        let hurigana = $('input[name="hurigana"]').val();
        let maidenname = $('input[name="maidenname"]').val();
        let maidenname_hurigana = $('input[name="maidenname_hurigana"]').val();

        let birth_date = new Date($('input[name="birthday"]').val());
        let birth_options = { era: 'long' };
        birthday = new Intl.DateTimeFormat('ja-JP-u-ca-japanese', birth_options).format(birth_date);

        let email = $('input[name="email"]').val();
        let email_check = $('input[name="email_check"]').val();
        let tel = $('input[name="tel"]').val();
        let yubin = $('input[name="yubin"]').val();
        let jusyo = $('input[name="jusyo"]').val();


        if (!namae || namae == "") {
            input_success = false;
            $('.name-alart').text('必須項目に入力してください。');
        } else {
            $('.name-alart').text('');
        }
        if (!hurigana || hurigana == "") {
            input_success = false;
            $('.hurigana-alart').text('必須項目に入力してください。');
        } else {
            $('.hurigana-alart').text('');
        }
        if (!birth_date || birth_date == "") {
            input_success = false;
            $('.birth-alart').text('必須項目に入力してください。');
        } else {
            $('.birth-alart').text('');
        }
        if (!email || email == "") {
            input_success = false;
            $('.email-alart').text('必須項目に入力してください。');
        } else {
            $('.email-alart').text('');
        }

        if (email != email_check) {
            input_success = false;
            // $('.confilm-alart .mail_check_alart').text("確認用のメールアドレスが一致していません。");
        } else {
            // $('.confilm-alart .mail_check_alart').text('');
        }



        if (!tel || tel == "") {
            input_success = false;
            $('.tel-alart').text('必須項目に入力してください。');
        } else {
            $('.tel-alart').text('');
        }
        if (!yubin || yubin == "") {
            input_success = false;
            $('.yubin-alart').text('必須項目に入力してください。');
        } else {
            $('.yubin-alart').text('');
        }
        if (!jusyo || jusyo == "") {
            input_success = false;
            $('.jusyo-alart').text('必須項目に入力してください。');
        } else {
            $('.jusyo-alart').text('');
        }


        //申請者の基本情報出力
        $('#input_namae').text(namae);
        $('#input_hurigana').text(hurigana);
        $('#input_maidenname').text(maidenname);
        $('#input_maidenname_hurigana').text(maidenname_hurigana);
        $('#input_birthday').text(birthday);
        $('#input_email').text(email);
        $('#input_tel').text(tel);
        $('#input_yubin').text(yubin);
        $('#input_jusyo').text(jusyo);


        let result = [];
        let cnt = 0;
        let input_file_count = 1;

        //申請書類のループ
        $('.add-set').each(function(index) {
            let result_once = {};

            // 申請する書類の取得
            result_once.document = $(this).find('dd.document').find('input[type="radio"]:checked').val();

            // 源泉徴収票の対象期間の取得
            result_once.year = $(this).find('dd.year').find('option:selected').val();

            // 書類の添付の取得
            result_once.tenpu = $('.dummy-file-content').find('span.document' + (input_file_count * 2 - 1) + '').find('input[name="document' + (input_file_count * 2 - 1) + '"]').val();


            // 書類記入例の添付の取得
            result_once.exampletenpu = $('.dummy-file-content').find('span.document' + (input_file_count * 2) + '').find('input[name="document' + (input_file_count * 2) + '"]').val();;


            // 書類の用途の取得
            result_once.use = $(this).find('dd.use').find('input[type="text"]').val();

            // コメントの取得
            result_once.comment = $(this).find('dd.comment').find('textarea').val();


            //経歴のループ
            let career = [];
            $(this).find('.document-set__career').each(function(index, value) {
                //業務内容の配列初期化
                let check_business = [];
                let career_once = {};

                // 勤務していた施設の取得
                career_once.gardenname = $(this).find('dd.gardenname').find('input[type="radio"]:checked').val();

                // 雇用区分の取得
                career_once.employment = $(this).find('dd.employment').find('input[type="radio"]:checked').val();

                //業務内容の取得
                $(this).find('dd.business').find('input[type="checkbox"]').each(function(index, elm) {
                    if ($(elm).prop('checked')) {
                        check_business.push($(elm).val());
                    }
                });
                career_once.business = check_business.join(',');

                //勤務開始日の取得
                let str_date = new Date($(this).find('div.stryear').find('input[type="date"]').val());
                let str_options = { era: 'long' };
                career_once.stryear = new Intl.DateTimeFormat('ja-JP-u-ca-japanese', str_options).format(str_date);

                //勤務終了日の取得
                let fin_date = new Date($(this).find('div.finyear').find('input[type="date"]').val());
                let fin_options = { era: 'long' };
                career_once.finyear = new Intl.DateTimeFormat('ja-JP-u-ca-japanese', fin_options).format(fin_date);

                career.push(career_once);
            });

            result_once.career = career;
            cnt++;
            input_file_count++;
            result.push(result_once);
        });

        $('.confilm-wrap').empty();
        let app_acount = 1;

        $.each(result, function(index, value) {
            let carrer_count = 1;
            $('.confilm-wrap').append('<div class="set-confirm set-' + index + '"><p class="left-title">申請-' + app_acount + '</p></div>');
            $('.confilm-wrap .set-' + index).append('<div class="application-confirm"></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="application-confirm__title"><p class="documenttitle">申請する書類</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">申請する書類</p><p id="input_q1">' + value.document + '</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">源泉徴収票の対象期間</p><p id="input_year">' + value.year + '</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">書類の添付</p><p id="input_tenpu">' + value.tenpu + '</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">書類記入例の添付</p><p id="input_exampletenpu">' + value.exampletenpu + '</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">書類の用途</p><p id="input_use">' + value.use + '</p></div>');
            $('.confilm-wrap .set-' + index + ' .application-confirm').append('<div class="confirm-pic"><p class="confirm-pic__label">コメント</p><p id="input_comment">' + value.comment + '</p></div>');

            $.each(value.career, function(carrer_index, carrer_value) {

                // 必須項目アラート（業務内容）
                if (!carrer_value.business || carrer_value.business == "") {
                    input_success = false;
                    $('.business-alart').text('必須項目に入力してください。');
                } else {
                    $('.business-alart').text('');
                }

                $('.confilm-wrap .set-' + index).append('<div class="career-confirm careerset-' + carrer_index + '"><div class="career-confirm__title"><p class="documenttitle">経歴-' + carrer_count + '</p></div></div>');
                $('.set-' + index + ' .careerset-' + carrer_index).append('<div class="confirm-pic"><p class="confirm-pic__label">勤務していた施設</p><p id="input_q2">' + carrer_value.gardenname + '</p></div>');
                $('.set-' + index + ' .careerset-' + carrer_index).append('<div class="confirm-pic"><p class="confirm-pic__label">雇用区分</p><p id="input_q3">' + carrer_value.employment + '</p></div>');

                $('.set-' + index + ' .careerset-' + carrer_index).append('<div class="confirm-pic"><p class="confirm-pic__label">業務内容</p><p id="input_q4">' + carrer_value.business + '</p></div>');

                $('.set-' + index + ' .careerset-' + carrer_index).append('<div class="term-of-office"><p class="confirm-pic__label">在職期間</p><div class="calendar-confirm"><p>勤務開始</p><p id="input_start">' + carrer_value.stryear + '</p></div><div class="calendar-confirm"><p>勤務終了</p><p id="input_finish">' + carrer_value.finyear + '</p></div></div>');
                carrer_count++;
            })

            app_acount++;


            // console.log(result);

            let url = $(location).attr('search');
            // $('.confilm-wrap .set-' + index).append('<div class="app-edit"><a href="' + url + '#set-' + index + '">この申請を編集する</a></div>');
        })

        //料金の計算
        // 3桁区切り
        const numberWithComma = new Intl.NumberFormat();
        // 申請書類の枚数
        let sheet_count = cnt;
        // 発行手数料（発行枚数 * 1000）
        let commission = cnt * 1000;
        // 発行手数料を3桁ずつ区切ったものを「commision_price」に代入
        let commision_price = numberWithComma.format(commission);
        // 郵送費用
        let coast = 500;
        // 発行手数料 + 郵送費用
        let total = commission + coast;
        // 合計金額を3桁ずつ区切ったものを「total_price」に代入
        let total_price = numberWithComma.format(total);

        $('#input_sheetcount').text(sheet_count);
        $('#input_commission').text(commision_price);
        $('#input_coast').text(coast);
        $('#input_total').text(total_price);


        // cf7 「hidden」のvalueに表示させる
        // cf7の[birthday]にすると、自動返信の表示が「2022/03/09」になり和暦が表示されない為input hiddenで和暦も表示させるための設定
        $('input[name="birth_day"]').val(birthday);


        let mail_content = "";
        $.each(result, function(index, value) {
            let top_line = '＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋\n\n\n'
            let header = '【申請-' + (index + 1) + '】\n';
            let output_document = '申請する書類 ： ' + value.document + '\n\n';
            let output_year = '源泉徴収票の対象期間 ： ' + value.year + '\n\n';
            let output_tenpu = '書類の添付 ： ' + value.tenpu + '\n\n';
            let output_exampletenpu = '書類の記入例の添付 ： ' + value.exampletenpu + '\n\n';
            let output_use = '書類の用途 ： ' + value.use + '\n\n';
            let output_comment = 'コメント ： ' + value.comment + '\n\n\n';

            mail_content += top_line;
            mail_content += header;
            mail_content += output_document;
            mail_content += output_year;
            mail_content += output_tenpu;
            mail_content += output_exampletenpu;
            mail_content += output_use;
            mail_content += output_comment;

            $.each(value.career, function(carrer_index, carrer_value) {
                let career_header = '【経歴-' + (carrer_index + 1) + '】\n';
                let output_gardenname = '勤務していた施設 ： ' + carrer_value.gardenname + '\n\n';
                let output_employment = '雇用区分 ： ' + carrer_value.employment + '\n\n';
                let output_business = '業務内容 ： ' + carrer_value.business + '\n\n';
                let output_stryear = '在職期間\n勤務開始 ： ' + carrer_value.stryear + '\n\n';
                let output_finyear = '勤務終了 ： ' + carrer_value.finyear + '\n\n\n';

                mail_content += career_header;
                mail_content += output_gardenname;
                mail_content += output_employment;
                mail_content += output_business;
                mail_content += output_stryear;
                mail_content += output_finyear;
            });
        });

        // console.log(mail_content);
        $('input[name="document"]').val(mail_content);


        $('input[name="document_sheet"]').val(sheet_count + '枚');
        $('input[name="document_price-commission"]').val('￥' + commision_price);
        $('input[name="document_price-shipping"]').val('一律￥' + coast);
        $('input[name="document_price-total"]').val('￥' + total_price);


        // 注意事項とプライバシーポリシーにチェックがついていたら確認画面のセクションにクラスを付けて、確認画面を表示させる。チェックがなかったら確認画面はひょうじされない
        if (input_success && $('div#privacy_agree #privacy_check').prop('checked') == true && $('div#precautions-agree #precautions_check').prop('checked') == true && upload_file_flg) {
            $('#confimation').addClass('open');

            if (window.matchMedia("(max-width: 769px)").matches) {
                $('body,html').animate({
                    scrollTop: 200
                }, 500);
            } else {
                $('body,html').animate({
                    scrollTop: 600
                }, 500);
            }

        } else {
            $('#confimation').removeClass('open');
        }

        //確認画面のセクションに「open」のクラスがついていたら、「ご案内」「申請手順」「申請フォーム」をfadeoutさせる
        if ($('#confimation').hasClass('open')) {
            $('.houjin-guidance').fadeOut();
            $('.houjin-applicationprocedure').fadeOut();
            $('.houjin-form').fadeOut();
        }
    });





    //書類の記入例の添付
    $('body').on('click', '.dummy-exmpletenpu', function() {
        $('input[name="document' + $(this).data('file') + '"]').trigger("click");
    });


    // 確認画面の送信するをクリックしたらsubmitボタンを疑似的に押してajaxの処理をする
    $('.confilmbtn-flex .submit_btn').on('click', function() {
        if ($('div#privacy_agree #privacy_check').prop('checked') == true && $('div#precautions-agree #precautions_check').prop('checked') == true) {
            $('form.wpcf7-form input[type="submit"]').trigger("click");
            $('.send-alart').text('送信されました。');
        } else {
            return false;
        };
    });

    $('.test').on('click', function() {
        $('#name').val('名前');
        $('#hurigana').val('フリガナ');
        $('#email').val('suzuki.i@yohaku-bunka.com');
        $('#email_check').val('suzuki.i@yohaku-bunka.com');
        $('#tel').val('0522659585');
        $('#yubin').val('4560071');
        $('#jusyo').val('愛知県名古屋市熱田区');

    });
});