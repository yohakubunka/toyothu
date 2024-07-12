$(function() {
    $(document).on('click', '.career-add', function() {

        let career_count = 1;
        let add_career_count = 0;
        $(this).closest('.add-set').find('.document-set__career').each(function(index) {
            career_count++;
            add_career_count++;
        });
        let set_number = $(this).closest('.add-set').data('set');


        let careerform = '<div class="document-set__career"><p class="documenttitle">経歴-' + career_count + '</p><dl><dt>勤務していた施設<span>※必須</span></dt><dd class="gardenname"><div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="泉の杜保育園" checked><span class="radio_label">泉の杜保育園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="世田谷1丁目ゆたか園"><span class="radio_label">世田谷1丁目ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="多気の杜こども園（旧：多気の杜ゆたか園）"><span class="radio_label">多気の杜こども園（旧：多気の杜ゆたか園）</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="ゆたか認定こども園"><span class="radio_label">ゆたか認定こども園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="認定こども園 こどもの杜ゆたか園"><span class="radio_label">認定こども園 こどもの杜ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="認定こども園 みらいの森ゆたか園"><span class="radio_label">認定こども園 みらいの森ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="認定こども園 杜の街ゆたか園"><span class="radio_label">認定こども園 杜の街ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="認定こども園 明和ゆたか園"><span class="radio_label">認定こども園 明和ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="認定こども園 第2明和ゆたか園"><span class="radio_label">認定こども園 第2明和ゆたか園</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="いつきのみやこども園（旧：斎宮Babyroom）"><span class="radio_label">いつきのみやこども園（旧：斎宮Babyroom）</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="ゆたか学童クラブ"><span class="radio_label">ゆたか学童クラブ</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q2]" value="みらいの森学童クラブ"><span class="radio_label">みらいの森学童クラブ</span></div></dd></dl><dl><dt>雇用区分<span>※必須</span></dt><dd class="employment"><div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q3]" value="正規職員" checked><span class="radio_label">正規職員</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q3]" value="正規以外の常勤職員"><span class="radio_label">正規以外の常勤職員</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q3]" value="非常勤（パート）職員"><span class="radio_label">非常勤（パート）職員</span></div> <div class="check-content"><input type="radio" name="application[' + set_number + '][career][' + add_career_count + '][q3]" value="派遣職員"><span class="radio_label">派遣職員</span></div></dd></dl><dl><dt><span class="label-name">業務内容</span><span>※必須</span></dt><dd class="business"><div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="保育教諭"><span class="radio_label">保育教諭</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="保育士"><span class="radio_label">保育士</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="保育補助"><span class="radio_label">保育補助</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="看護師"><span class="radio_label">看護師</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="管理栄養士"><span class="radio_label">管理栄養士</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="栄養士"><span class="radio_label">栄養士<span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="学童指導員"><span class="radio_label">学童指導員</span></div> <div class="check-content"><input type="checkbox" name="application[' + set_number + '][career][' + add_career_count + '][q4]" value="その他"><span class="radio_label">その他</span></div></dd><dd><span class="business-alart"></span></dd></dl><dl><dt><span class="label-name">在職期間</span><span>※必須</span></dt><dd><div class="workcalendar"><p>勤務開始</p><div class="input-group stryear"><div class="input-group-addon"><span class="jy" aria-hidden="true">元号XX年</span></div><input type="date" value="' + today + '" name="application[' + set_number + '][career][' + add_career_count + '][start]" id="dateOfBirth" class="required_input form-control dateOfBirth year2" max="' + today + '" title="入力してください。"></div></div><div class="workcalendar"><p>勤務終了</p><div class="input-group finyear"><div class="input-group-addon"><span class="jy" aria-hidden="true">元号XX年</span></div><input type="date" value="' + today + '" name="application[' + set_number + '][career][' + add_career_count + '][finish]" id="dateOfBirth" class="required_input form-control dateOfBirth year3" title="入力してください。"></div></div><span class="stryear-alart"></span></dd></dl><div class="delete_career"><p class="label-name">この経歴を削除する</p></div></div>';




        //経歴が追加された時の在職期間の元号
        $(this).siblings('.document-set').find('.creer-set').append(careerform);
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


        // 経歴-1の勤務していた施設入力情報
        var first_facility = $('input[name="application[0][career][0][q2]"]:checked').val();
        $('input[name="application[' + set_number + '][career][' + add_career_count + '][q2]"]').each(function(index, element) {
            if (first_facility == $(this).val()) {
                $(this).prop('checked', true);
            }
        })

        // 経歴-1の雇用区分入力情報
        var first_employment = $('input[name="application[0][career][0][q3]"]:checked').val();
        $('input[name="application[' + set_number + '][career][' + add_career_count + '][q3]"]').each(function(index, element) {
            if (first_employment == $(this).val()) {
                $(this).prop('checked', true);
            }
        })

        // 経歴-1の業務内容入力情報
        $('input[name="application[0][career][0][q4]"]:checked').each(function() {
            var first_business = $(this).val();
            $('input[name="application[' + set_number + '][career][' + add_career_count + '][q4]"]').each(function(index, element) {
                if ($(this).val() == first_business) {
                    $(this).prop('checked', true);
                }
            })
        })

        var first_start = $('input[name="application[0][career][0][start]"]').val();
        var first_finish = $('input[name="application[0][career][0][finish]"]').val();

        $('input[name="application[' + set_number + '][career][' + add_career_count + '][start]"]').val(first_start);
        $('input[name="application[' + set_number + '][career][' + add_career_count + '][finish]"]').val(first_finish);


        var stryear = $('.stryear span.jy').first().text();
        var finyear = $('.finyear span.jy').eq(0).text();
        $('.stryear span.jy').text(stryear);
        $('.finyear span.jy').text(finyear);


        var document_count = $('.document-set__career').length;
        if (document_count == 1) {
            $('.delete_career').hide();
        } else {}
    });

    //「この経歴を削除する」ボタンの処理
    $(document).on('click', '.delete_career', function() {

        if ($(this).closest('.add-set').find('.document-set .creer-set .document-set__career').length == 1) {
            return false;
        }

        let parent_id = $(this).closest('.add-set').attr('id');

        $(this).closest('.document-set__career').remove();

        // 経歴が一件のみの場合、「この経歴を削除する」を非表示する================================
        var document_count = $('.document-set__career').length;
        console.log(document_count);
        if (document_count == 1) {
            $('.delete_career').hide();
        } else {}
        // 経歴が一件のみの場合、「この経歴を削除する」を非表示する================================

        let career_count = 1; //経歴番号
        $('#' + parent_id).find('.document-set .creer-set .document-set__career').each(function(index) {
            $(this).find('.documenttitle').text('経歴-' + career_count);
            career_count++;
        });
    });

});