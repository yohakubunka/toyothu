$(function() {
    $('.document-add').on('click', function() {

        let application_count = 1; //申請番号
        let add_set_count = 0; //要素のidとdataのカウント数
        let add_file_count = 1;

        $('.add-set').each(function(index) {
            application_count++;
            add_set_count++;
            add_file_count++;
        });

        //制限
        if (application_count >= 7) {
            return false;
        }

        let documentform = '<div class="houjin-form__documentset--inner add-set" id="set-' + add_set_count + '" data-set="' + add_set_count + '"><div class="app-count_wrap"><p class="addset_header">申請-' + application_count + '</p><p class="content_delete">この内容を削除する</p></div><div class="document-set"><div class="document-set__application"><p class="documenttitle">申請する書類</p><dl><dt>申請する書類<span>※必須</span></dt><dd class="document"><div class="check-content"><input type="radio" name="application[' + add_set_count + '][q1]" value="在職証明書" checked><span class="radio_label">在職証明書</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][q1]" value="源泉徴収票"><span class="radio_label">源泉徴収票</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][q1]" value="前歴証明書"><span class="radio_label">前歴証明書</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][q1]" value="職歴申立書"><span class="radio_label">職歴申立書</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][q1]" value="その他の書類"><span class="radio_label">その他の書類</span></div></dd></dl><dl><dt>源泉徴収票の対象期間<div class="period-pin"></div><div class="question-fourth">?</div></dt><dd class="year"><select id="year" name="application[' + add_set_count + '][year]"><option value="選択してください">選択してください</option><option value="令和4年分">令和4年分</option><option value="令和3年分">令和3年分</option></select></dd></dl><dl><dt>書類の添付<div class="documentfirst-pin"></div><div class="question-fifth" onclick="">?</div></dt><dd class="tenpu"><div class="dummy-tenpu onclick="" tenpu-num" data-file="' + (add_file_count * 2 - 1) + '">ファイル選択<span class="file-name"></span></div><div class="clear" onclick="">削除</div><div class="tenpu_error_msg"></div></dd></dl><dl><dt>書類の記入例の添付<div class="documentsecond-pin"></div><div onclick="" class="question-six">?</div></dt><dd class="exampletenpu"><div onclick="" class="dummy-exmpletenpu tenpu-num" data-file="' + (add_file_count * 2) + '">ファイル選択<span class="file-name"></span></div><div class="clear" onclick="">削除</div><div class="tenpu_error_msg"></div></dd></dl><dl><dt>書類の用途</dt><dd class="use"><input type="text" id="use" name="application[' + add_set_count + '][use]" placeholder="就職先に提出するため"></dd></dl><dl><dt>コメント</dt><dd class="comment"><textarea name="application[' + add_set_count + '][comment]" rows="4" cols="40" placeholder="その他の書類を選択し、書類や書類の記入例を添付していない場合は、書類の内容を詳しく記載してください。"></textarea></dd></dl></div><div class="creer-set"><div class="document-set__career"><p class="documenttitle">経歴-1</p><dl><dt>勤務していた施設<span>※必須</span></dt><dd class="gardenname"><div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="泉の杜保育園" checked><span class="radio_label">泉の杜保育園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="世田谷1丁目ゆたか園"><span class="radio_label">世田谷1丁目ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="多気の杜こども園（旧：多気の杜ゆたか園）"><span class="radio_label">多気の杜こども園（旧：多気の杜ゆたか園）</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="ゆたか認定こども園"><span class="radio_label">ゆたか認定こども園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="認定こども園 こどもの杜ゆたか園"><span class="radio_label">認定こども園 こどもの杜ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="認定こども園 みらいの森ゆたか園"><span class="radio_label">認定こども園 みらいの森ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="認定こども園 杜の街ゆたか園"><span class="radio_label">認定こども園 杜の街ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="認定こども園 明和ゆたか園"><span class="radio_label">認定こども園 明和ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="認定こども園 第2明和ゆたか園"><span class="radio_label">認定こども園 第2明和ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="いつきのみやこども園（旧：斎宮Babyroom）"><span class="radio_label">いつきのみやこども園（旧：斎宮Babyroom）</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="ゆたか学童クラブ"><span class="radio_label">ゆたか学童クラブ</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q2]" value="みらいの森学童クラブ"><span class="radio_label">みらいの森学童クラブ</span></div></dd></dl><dl><dt>雇用区分<span>※必須</span></dt><dd class="employment"><div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q3]" value="正規職員" checked><span class="radio_label">正規職員</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q3]" value="正規以外の常勤職員"><span class="radio_label">正規以外の常勤職員</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q3]" value="非常勤（パート）職員"><span class="radio_label">非常勤（パート）職員</span></div> <div class="check-content"><input type="radio" name="application[' + add_set_count + '][career][0][q3]" value="派遣職員"><span class="radio_label">派遣職員</span></div></dd></dl><dl><dt><span class="label-name">業務内容</span><span>※必須</span></dt><dd class="business"><div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="保育教諭"><span class="radio_label">保育教諭</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="保育士"><span class="radio_label">保育士</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="保育補助"><span class="radio_label">保育補助</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="看護師"><span class="radio_label">看護師</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="管理栄養士"><span class="radio_label">管理栄養士</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="栄養士"><span class="radio_label">栄養士</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="学童指導員"><span class="radio_label">学童指導員</span></div> <div class="check-content"><input type="checkbox" name="application[' + add_set_count + '][career][0][q4]" value="その他"><span class="radio_label">その他</span></div></dd><dd><span class="business-alart"></span></dd></dl><dl><dt><span class="label-name">在職期間</span><span>※必須</span></dt><dd><div class="workcalendar"><p>勤務開始</p><div class="input-group stryear"><div class="input-group-addon"><span class="jy" aria-hidden="true">元号XX年</span></div><input type="date" value="' + today + '" name="application[' + add_set_count + '][career][0][start]" id="dateOfBirth" class="required_input form-control dateOfBirth year2" max="' + today + '" title="入力してください。"></div></div><div class="workcalendar"><p>勤務終了</p><div class="input-group finyear"><div class="input-group-addon"><span class="jy" aria-hidden="true">元号XX年</span></div><input type="date" value="' + today + '" name="application[' + add_set_count + '][career][0][finish]" id="dateOfBirth" class="required_input form-control dateOfBirth year3" title="入力してください。"></div></div><span class="stryear-alart"></span></dd></dl><div class="delete_career"></div></div></div></div><div class="career-add">経歴を追加する</div></div>';

        $('.houjin-form__documentset').append(documentform);


        // 経歴-1の勤務していた施設入力情報
        var first_facility = $('input[name="application[0][career][0][q2]"]:checked').val();
        $('input[name="application[' + add_set_count + '][career][' + 0 + '][q2]"]').each(function(index, element) {
            if (first_facility == $(this).val()) {
                $(this).prop('checked', true);
            }
        })

        // 経歴-1の雇用区分入力情報
        var first_employment = $('input[name="application[0][career][0][q3]"]:checked').val();
        $('input[name="application[' + add_set_count + '][career][' + 0 + '][q3]"]').each(function(index, element) {
            if (first_employment == $(this).val()) {
                $(this).prop('checked', true);
            }
        })

        // 経歴-1の業務内容入力情報
        $('input[name="application[0][career][0][q4]"]:checked').each(function() {
            var first_business = $(this).val();
            $('input[name="application[' + add_set_count + '][career][' + 0 + '][q4]"]').each(function(index, element) {
                if ($(this).val() == first_business) {
                    $(this).prop('checked', true);
                }
            })
        })

        // 経歴-1の在職期間入力情報
        var first_start = $('input[name="application[0][career][0][start]"]').val();
        var first_finish = $('input[name="application[0][career][0][finish]"]').val();

        $('input[name="application[' + add_set_count + '][career][' + 0 + '][start]"]').val(first_start);
        $('input[name="application[' + add_set_count + '][career][' + 0 + '][finish]"]').val(first_finish);

        // 申請が一件のみの場合、「この内容を削除する」を非表示する================================
        var test = $('.houjin-form__documentset--inner').length;
        if (test == 1) {
            $('.content_delete').hide();
        } else {}
        // 申請が一件のみの場合、「この内容を削除する」を非表示する================================



        //申請が追加された時の在職期間の元号
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
            $dob.prev().find('span.jy').text(jy);
        });

        var stryear = $('.stryear span.jy').first().text();
        var finyear = $('.finyear span.jy').eq(0).text();
        $('.stryear span.jy').text(stryear);
        $('.finyear span.jy').text(finyear);
    });


    //「この内容を削除する」ボタンの処理
    $('body').on('click', '.content_delete', function() {

        if ($('.houjin-form__documentset .add-set').length == 1) {
            return false;
        }

        // 追加して編集するを押すと下に確認画面が表示されたままで、削除をしたときに下も消す処理==================
        $(this).closest('.add-set').remove();
        var parent_id = "";
        parent_id = $(this).closest('.add-set').attr('id');
        $('.' + parent_id).remove();
        // 追加して編集するを押すと下に確認画面が表示されたままで、削除をしたときに下も消す処理==================


        // 追加した情報を消すと、編集へのリンクが機能しなくなる問題の修正 ============================
        $('.houjin-form__documentset--inner').each(function(index) {
            $('.houjin-form__documentset--inner').removeAttr();
            $(this).attr('id', 'set-' + index);
        });
        // 追加した情報を消すと、編集へのリンクが機能しなくなる問題の修正 ============================

        $('.set-confirm .app-edit a').removeAttr('href');
        $('.set-confirm').each(function(index) {
            var sinsei = index + 1;
            $(this).find('.left-title').text('申請-' + sinsei);
            $(this).find('.app-edit a').attr('href', '#set-' + index);
        })

        // 申請が一件のみの場合、「この内容を削除する」を非表示する================================
        var test = $('.houjin-form__documentset--inner').length;
        if (test == 1) {
            $('.content_delete').hide();
        } else {}
        // 申請が一件のみの場合、「この内容を削除する」を非表示する================================

        let application_count = 1; //申請番号
        $('.add-set').each(function(index) {
            $(this).find('.addset_header').text('申請-' + application_count);
            application_count++;
        });
    });

});