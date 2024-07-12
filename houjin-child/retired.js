//?ボタンの処理
$(function() {
    $('.name-pin').prepend('<p>申請はご本人がおこなってください。</p>');
    $('.maidenname-pin').prepend('<p>採用・在職当時から改姓されている方はご記入ください。</p>');
    $('.jusyo-pin').prepend('<p>個人情報保護のため、宛先は証明を受けようとする本人のみとします。</p>');
    // 申請者名
    $('body').on('click', '.question-first', function() {
        $('.name-pin').toggle();
    });
    // 旧姓
    $('.question-second').on('click', function() {
        $('.maidenname-pin').toggle();
    });
    // 住所
    $('.question-third').on('click', function() {
        $('.jusyo-pin').toggle();
    });

    // 源泉徴収票の対象期間
    $('body').on('click', '.question-fourth', function() {
        $('.period-pin').empty();
        $(this).siblings('.period-pin').prepend('<p>源泉徴収票を選択した方は、年を選択してください。</p>');
        $(this).siblings('.period-pin').toggle();
    });

    // 書類の添付
    $('body').on('click', '.question-fifth', function() {
        $('.documentfirst-pin').empty();
        $(this).siblings('.documentfirst-pin').prepend('<p>指定フォーマット・様式がある場合や、その他の書類を選択した場合は書類を添付してください。源泉徴収票の申請の場合は不要です。</p>');
        $(this).siblings('.documentfirst-pin').toggle();
    });

    // 書類の記入例の添付
    $('body').on('click', '.question-six', function() {
        $('.documentsecond-pin').empty();
        $(this).siblings('.documentsecond-pin').prepend('<p>上記の書類の記入例がある場合は添付してください。</p>');
        $(this).siblings('.documentsecond-pin').toggle();
    });
});



//申請者の基本情報生年月日元号(経歴の在職期間元号と変数が被らないようにするため別で処理)
$(function() {
    $('.jcalender_data').change(function() {
        var $doc = $(this);
        var e = moment($doc.val()).toDate();
        var jc = '元号XX年';
        if (e.toString() !== "Invalid Date") {
            jc = e.toLocaleDateString('ja-JP-u-ca-japanese', {
                year: 'numeric'
            });
        }
        //元号表示
        $('.input-group-addon').find('span.jc').text(jc);
    });
});


//経歴の在職期間元号
$(function() {
    $('.dateOfBirth').change(function() {
        var $dob = $(this);
        var d = moment($dob.val()).toDate();
        var jy = '元号XX年';
        if (d.toString() !== "Invalid Date") {
            jy = d.toLocaleDateString('ja-JP-u-ca-japanese', {
                year: 'numeric'
            });
        }
        //元号表示
        $($dob).prev().find('span.jy').text(jy);
    });
});

//必須項目の処理　-------------------------------------------------------------
$(function() {
    $('.confilm-btn').on('click', function() {
        let labels = [];

        let email = $('input[name="email"]').val();
        let email_check = $('input[name="email_check"]').val();

        $('.basic-box dl').each(function(index) {
            if ($(this).find('dd span input').hasClass('required_input')) {
                if ($(this).find('dd span input').val() == "" || $(this).find('dd span input').val() == false) {
                    labels.push($(this).find('dt .label-name').text());
                }
                // if (email != email_check || email_check == "" || email_check == false) {
                //   $('.emailcheck-alart').text('確認用のメールアドレスが一致していません');
                //   $('.confilm-alart .mail_check_alart').text("確認用のメールアドレスが一致していません。");
                // } else {
                //   $('.confilm-alart .mail_check_alart').text('');
                // }
            }
        });


        // サイズ超過ファイルのチェック ===================================================
        $('.document-file').each(function(index, element) {
            index_num = index + 1;
            const maxFileSize = 1024 * 1024 * 2;
            if ($('input[name="document' + index_num).prop('files')[0]) {
                let file_size = $('input[name="document' + index_num).prop('files')[0].size;
                if (maxFileSize <= file_size) {
                    labels.push('ファイルのサイズ');
                    return false;
                } else {
                    upload_file_flg = true;
                }
            }
        });
        // サイズ超過ファイルのチェック ===================================================

        //each（申請）
        $('.add-set').each(function(index_each) {

            //each（経歴）
            $(this).find('.document-set__career dl').each(function(index_set) {
                let title = $(this).siblings('.documenttitle').text();

                // 業務内容判定
                if ($(this).find('dd').hasClass('business')) {
                    let business_checked = false;
                    $(this).find('dd .check-content input').each(function(index_business) {
                        if ($(this).prop('checked')) {
                            business_checked = true;
                        }
                    });
                    if (business_checked == false) {
                        labels.push(title + 'の' + $(this).find('dt .label-name').text());
                    }
                }

                // 在職期間判定
                if ($(this).find('dd .workcalendar .input-group input').hasClass('required_input')) {
                    if ($(this).find('dd .workcalendar .stryear input').val() == "" || $(this).find('dd .workcalendar .stryear input').val() == false) {
                        labels.push(title + 'の' + $(this).find('dt .label-name').text());
                    }
                }
            });

        });


        if (email != email_check || email_check == "" || email_check == false) {
            $('.emailcheck-alart').text('確認用のメールアドレスが一致していません');
            $('.mail_check_alart').text("確認用のメールアドレスが一致していません。");
        } else {
            $('.emailcheck-alart').text('');
            $('.mail_check_alart').text('');
        }

        if (labels.length !== 0) {
            $('.confilm-alart').addClass('open');
            let labels_str = labels.join('/') + 'を確認してください';
            $('.confilm-alart p').text(labels_str);
            // if (email != email_check || email_check == "" || email_check == false) {
            //   $('.emailcheck-alart').text('確認用のメールアドレスが一致していません');
            //   $('.confilm-alart .mail_check_alart').text("確認用のメールアドレスが一致していません。");
            // }
        } else {
            $('.confilm-alart').removeClass('open');
            $('.confilm-alart .mail_check_alart').text('');
        }


        //　注意事項を確認ボタンの判定
        let precautions_checked = false;
        if ($('.precautions__content #precautions-agree input').prop('checked')) {
            precautions_checked = true;
            $('.precautions-alart').text('')
        }
        if (precautions_checked == false) {
            $('.precautions-alart').text('注意事項を確認ボタンをチェックしてください')
        }

        //プライバシーポリシーに同意するボタンの判定
        let privacy_checked = false;
        if ($('.privacy__content #privacy_agree input').prop('checked')) {
            privacy_checked = true;
            $('.privacy-alart').text('')
        }
        if (privacy_checked == false) {
            $('.privacy-alart').text('プライバシーポリシーに同意するボタンをチェックしてください')
        }

    });

    $('.delete-btn').on('click', function() {
        $('.confilm-alart').removeClass('open');
    })

});
//　ここまで　------------------------------------------------------------------------

// 編集するをクリックしたら消してある要素をもう一度表示する
$(function() {
    $('body').on('click', '.app-edit', function() {
        $('.houjin-guidance').fadeIn();
        $('.houjin-applicationprocedure').fadeIn();
        $('.houjin-form').fadeIn();
    })
});

$(function() {
    $('.fix_btn').on('click', function() {
        $('.houjin-guidance').fadeIn();
        $('.houjin-applicationprocedure').fadeIn();
        $('.houjin-form').fadeIn();
        $('#confimation').removeClass('open');
    })
});