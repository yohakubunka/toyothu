<?php get_template_part('template/retired-header') ?>
<script>
  let today = '<?= date('Y-m-d'); ?>';
</script>
<main id="retired">
  <?php get_template_part('template/mv') ?>
  <div class="page-width">
    <?php get_template_part('template/breadcrumb') ?>
  </div>
  <section class="houjin-guidance">
    <div class="page-width">
      <div class="speech-mark">
        <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
        <h2 class="houjin-ttl">ご案内</h2>
        <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
      </div>
      <p class="center">このページは豊津児童福祉会で発行可能な証明書当の申請用ページです。</p>
      <?php
      $field1 = get_field_object('houjin_guidance_targetperson');
      $field2 = get_field_object('houjin_guidance_document');
      $field3 = get_field_object('houjin_guidance_commission');
      $field4 = get_field_object('houjin_guidance_mailingfee');
      $field5 = get_field_object('houjin_guidance_precautions');
      ?>
      <div class="houjin-guidance__content">
        <ul class="guide">
          <li class="guide__pic">
            <p class="guide__pic--label"><?= $field1["label"] ?></p>
            <p class="guide__pic--box"><?= get_field('houjin_guidance_targetperson') ?></p>
          </li>
          <li class="guide__pic">
            <p class="guide__pic--label"><?= $field2["label"] ?></p>
            <p class="guide__pic--box">
              <span><?= get_field('houjin_guidance_document_01') ?> <a class="document_detail" href="<?= get_stylesheet_directory_uri() ?>/pdf/sample01.pdf" target="_blank">【書式はこちら】</a></span><br>
              <span><?= get_field('houjin_guidance_document_02') ?> <a class="document_detail" href="<?= get_stylesheet_directory_uri() ?>/pdf/sample01.pdf" target="_blank">【書式はこちら】</a></span><br>
              <span><?= get_field('houjin_guidance_document_03') ?> <a class="document_detail" href="<?= get_stylesheet_directory_uri() ?>/pdf/sample02.pdf" target="_blank">【書式はこちら】</a></span><br>
              <span><?= get_field('houjin_guidance_document_04') ?></span><br>
              <span><?= get_field('houjin_guidance_document_05') ?></span>
            </p>
          </li>
          <li class="guide__pic">
            <p class="guide__pic--label"><?= $field3["label"] ?></p>
            <p class="guide__pic--box"><?= get_field('houjin_guidance_commission') ?></p>
          </li>
          <li class="guide__pic">
            <p class="guide__pic--label"><?= $field4["label"] ?></p>
            <p class="guide__pic--box"><?= get_field('houjin_guidance_mailingfee') ?></p>
          </li>
          <li class="guide__pic">
            <p class="guide__pic--label"><?= $field5["label"] ?></p>
            <p class="guide__pic--box"><?= get_field('houjin_guidance_precautions') ?></p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="houjin-applicationprocedure">
    <div class="page-width">
      <div class="speech-mark">
        <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
        <h2 class="houjin-ttl">申請手順</h2>
        <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
      </div>
      <div class="houjin-applicationprocedure__content">
        <ul class="request">
          <?php
          $procedure_count = 1;
          $applicationprocedure_group = SCF::get('houjin_applicationprocedure');
          foreach ($applicationprocedure_group as $fields) :
          ?>
            <li class="bg-radius request__pic">
              <p class="request__pic--title"><span class="number">0<?= $procedure_count++ ?></span><?= $fields['houjin_applicationprocedure_title']; ?></p>
              <p class="request__pic--box"><?= nl2br($fields['houjin_applicationprocedure_text']); ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="houjin-form" id="basic-1">
    <div class="page-width">
      <div class="speech-mark">
        <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
        <h2 class="houjin-ttl">申請フォーム</h2>
        <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
      </div>
      <div class="houjin-form__basic">
        <p class="left-title">申請者の基本情報</p>
        <?= do_shortcode('[contact-form-7 id="3883" title="退職者確認フォーム"]') ?>
      </div>
      <form action="" method="post" id="careerform">
        <div class="houjin-form__documentset">
          <div class="houjin-form__documentset--inner add-set" id="set-0" data-set="0">
            <div class="app-count_wrap">
              <p class="addset_header">申請-1</p>
              <p class="content_delete">この内容を削除する</p>
            </div>
            <div class="document-set">

              <div class="document-set__application">
                <p class="documenttitle">申請する書類</p>
                <dl>
                  <dt>申請する書類<span>※必須</span></dt>
                  <dd class="document">
                    <div class="check-content">
                      <input type="radio" name="application[0][q1]" value="在職証明書" checked>
                      <span class="radio_label">在職証明書</span>
                    </div>
                    <div class="check-content">
                      <input type="radio" name="application[0][q1]" value="前歴証明書">
                      <span class="radio_label">前歴証明書</span>
                    </div>
                    <div class="check-content">
                      <input type="radio" name="application[0][q1]" value="職歴申立書">
                      <span class="radio_label">職歴申立書</span>
                    </div>
                    <div class="check-content">
                      <input type="radio" name="application[0][q1]" value="源泉徴収票">
                      <span class="radio_label">源泉徴収票</span>
                    </div>
                    <div class="check-content">
                      <input type="radio" name="application[0][q1]" value="その他の書類">
                      <span class="radio_label">その他の書類</span>
                    </div>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    源泉徴収票の対象期間
                    <div class="period-pin" style="display: block;"><p>源泉徴収票を選択した方は、年を選択してください。</p></div>
                  </dt>
                <?php 
                    $year = date('Y');
                    $before_year = $year - 1;
                    $this_wareki = get_wareki($year);
                    $before_wareki = get_wareki($before_year);
                  ?>
                  <dd class="year">
                    <select id="year" name="application[0][year]">
                      <option value="選択してください">選択してください</option>
                      <option value="<?= $before_wareki ?>分"><?= $before_wareki ?>分</option>
                      <option value="<?= $this_wareki ?>分"><?= $this_wareki ?>分</option>
                    </select>
                  </dd>
                </dl>
                <dl>
                <dt>
                    書類の添付
                    <div class="documentfirst-pin" style="display: block;"><p>指定フォーマット・様式がある場合や、その他の書類を選択した場合は書類を添付してください。源泉徴収票の申請の場合は不要です。</p></div>
                  </dt>
                  <dd class="tenpu">
                  <div class="file-wrap">
                    <div onclick="" class="dummy-tenpu tenpu-num" data-file="1">ファイル選択<span class="file-name"></span></div>
                    <div onclick="" class="clear">削除</div>
                    </div>
                    <div class="tenpu_error_msg"></div>
                  </dd>
                </dl>
                <dl>
                <dt>
                    書類の記入例の添付
                    <div class="documentsecond-pin" style="display: block;"><p>上記の書類の記入例がある場合は添付してください。</p></div>
                  </dt>
                  <dd class="exampletenpu">
                  <div class="file-wrap">

                    <div onclick="" class="dummy-exmpletenpu tenpu-num" data-file="2">ファイル選択<span class="file-name"></span></div>
                    <div onclick="" class="clear">削除</div>
                    </div>
                    <div class="tenpu_error_msg"></div>
                  </dd>
                </dl>
                <dl>
                  <dt>書類の用途</dt>
                  <dd class="use">
                    <input type="text" id="use" name="application[0][use]" placeholder="就職先に提出するため">
                  </dd>
                </dl>
                <dl>
                  <dt>コメント</dt>
                  <dd class="comment">
                    <textarea name="application[0][comment]" rows="4" cols="40" placeholder="その他の書類を選択し、書類や書類の記入例を添付していない場合は、書類の内容を詳しく記載してください。"></textarea>
                  </dd>
                </dl>
              </div>

              <div class="creer-set">
                <div class="document-set__career">
                  <p class="documenttitle">経歴-1</p>
                  <dl>
                    <dt>勤務していた施設<span>※必須</span></dt>
                    <dd class="gardenname">
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="泉の杜保育園" checked>
                        <span class="radio_label">泉の杜保育園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="世田谷1丁目ゆたか園">
                        <span class="radio_label">世田谷1丁目ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="多気の杜こども園（旧：多気の杜ゆたか園）">
                        <span class="radio_label">多気の杜こども園（旧：多気の杜ゆたか園）</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="ゆたか認定こども園">
                        <span class="radio_label">ゆたか認定こども園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="認定こども園 こどもの杜ゆたか園">
                        <span class="radio_label">認定こども園 こどもの杜ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="認定こども園 みらいの森ゆたか園">
                        <span class="radio_label">認定こども園 みらいの森ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="認定こども園 杜の街ゆたか園">
                        <span class="radio_label">認定こども園 杜の街ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="認定こども園 明和ゆたか園">
                        <span class="radio_label">認定こども園 明和ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="認定こども園 第2明和ゆたか園">
                        <span class="radio_label">認定こども園 第2明和ゆたか園</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="いつきのみやこども園（旧：斎宮Babyroom）">
                        <span class="radio_label">いつきのみやこども園（旧：斎宮Babyroom）</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="ゆたか学童クラブ">
                        <span class="radio_label">ゆたか学童クラブ</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="みらいの森学童クラブ">
                        <span class="radio_label">みらいの森学童クラブ</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q2]" value="オリーブの木TOYOTSU">
                        <span class="radio_label">オリーブの木TOYOTSU</span>
                      </div>
                    </dd>
                  </dl>
                  <dl>
                    <dt>雇用区分<span>※必須</span></dt>
                    <dd class="employment">
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q3]" value="正規職員" checked>
                        <span class="radio_label">正規職員</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q3]" value="正規以外の常勤職員">
                        <span class="radio_label">正規以外の常勤職員</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q3]" value="非常勤（パート）職員">
                        <span class="radio_label">非常勤（パート）職員</span>
                      </div>
                      <div class="check-content">
                        <input type="radio" name="application[0][career][0][q3]" value="派遣職員">
                        <span class="radio_label">派遣職員</span>
                      </div>
                    </dd>
                  </dl>
                  <dl>
                    <dt><span class="label-name">業務内容</span><span>※必須</span></dt>
                    <dd class="business">
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="保育教諭">
                        <span class="checkbox_label">保育教諭</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="保育士">
                        <span class="checkbox_label">保育士</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="保育補助">
                        <span class="checkbox_label">保育補助</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="看護師">
                        <span class="checkbox_label">看護師</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="管理栄養士">
                        <span class="checkbox_label">管理栄養士</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="栄養士">
                        <span class="checkbox_label">栄養士</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="学童指導員">
                        <span class="checkbox_label">学童指導員</span>
                      </div>
                      <div class="check-content">
                        <input type="checkbox" name="application[0][career][0][q4]" value="その他">
                        <span class="checkbox_label">その他</span>
                      </div>
                    </dd>
                    <dd><span class="business-alart"></span></dd>
                  </dl>
                  <dl>
                    <dt><span class="label-name">在職期間</span><span>※必須</span></dt>
                    <dd>
                      <div class="workcalendar">
                        <p>勤務開始</p>
                        <div class="input-group stryear">
                          <div class="input-group-addon">
                            <span class="jy" aria-hidden="true">元号XX年</span>
                          </div>
                          <input type="date" value="<?= date('Y-m-d'); ?>" name="application[0][career][0][start]" id="dateOfBirth" class="required_input form-control dateOfBirth year2" max="<?= date('Y-m-d'); ?>" title="入力してください。">
                        </div>
                      </div>

                      <div class="workcalendar">
                        <p>勤務終了</p>
                        <div class="input-group finyear">
                          <div class="input-group-addon">
                            <span class="jy" aria-hidden="true">元号XX年</span>
                          </div>
                          <input type="date" value="<?= date('Y-m-d'); ?>" name="application[0][career][0][finish]" id="dateOfBirth" class="required_input form-control dateOfBirth year3" title="入力してください。">
                        </div>
                      </div>
                      <span class="stryear-alart"></span>
                    </dd>
                  </dl>
                  <div class="delete_career">
                    <p class="label-name">この経歴を削除する</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="career-add">経歴を追加する</div>
          </div>
        </div>
        <div class="document-add">申請を追加する</div>

        <div class="precautions">
          <p class="left-title"><?= $field5["label"] ?></p>
          <div class="precautions__content">
            <div class="precautions__content--inner">
              <p><?= get_field('houjin_guidance_precautions') ?></p>
            </div>
            <div id="precautions-agree">
              <input type="checkbox" id="precautions_check" name="precautions_check">
              <span class="precautions_label">注意事項を確認</span>
            </div>
            <div class="precautions-alart"></div>
          </div>
        </div>
        <div class="privacy">
          <p class="left-title">プライバシーポリシー</p>
          <div class="privacy__content">
            <div class="privacy__content--inner">
              <div class="inner">
                <div class="privacy-box">
                  <p>プライバシーポリシー</p>
                  <p>社会福祉法人 豊津児童福祉会（以下「 当法人」といいます）では、園児及び保護者、取引先業者のいずれにもかかわらず、当法人に対して個人情報を提供されるすべての方の個人情報を個人情報取扱事業者として適切に保護する責務を負い、その取り扱い方針を次のとおり定め、個人情報の保護に努めます。</p>
                </div>
                <div class="privacy-box">
                  <p>1）個人情報の収集</p>
                  <p>当サイト上では個人情報を意図的に収集することはございませんが、当サイトを通したお問い合わせやご相談などに際して、 ご依頼者からのお電話やメールの内容から個人情報を伺い知る場合がございます。</p>
                </div>
                <div class="privacy-box">
                  <p>2）個人情報の紛失、破壊、改ざん、および漏えい等を防止する対策</p>
                  <p>個人情報の紛失、破壊、改ざん、および漏えい等を防止するため、不正アクセス対策、ウイルス対策等の情報セキュリティ対策を行います。</p>
                </div>
                <div class="privacy-box">
                  <p>3）個人情報の管理</p>
                  <p>個人情報の取り扱いと認識について、教職員に対して継続的に教育をおこない、適切な管理に努めると共に、紛失や漏えい等の防止に努めます。</p>
                </div>
                <div class="privacy-box">
                  <p>4）個人情報の利用</p>
                  <p>当サイトを通してお預かりしたご依頼者の個人情報の利用範囲は、ご本人の確認やご依頼内容から発生するやりとりの範囲を除いて、 ご依頼者の了解無くこれを第三者に公開・提供することはございません。 但し、法令に基づく場合や、緊急時（人命・財産の保護など）に本人の同意を得ることが困難である場合は、この限りではありません。</p>
                </div>
                <div class="privacy-box">
                  <p>5）個人情報の開示・訂正等について</p>
                  <p>個人情報保護法に基づく本学園が所有する個人情報に関する開示、訂正等または利用停止等の請求及び個人情報の取扱いに関する苦情等については、後述する電話番号の問合せ窓口に、次の事項をご確認の上、ご本人からご連絡ください。<br>
                    （1）お名前<br>
                    （2）ご住所<br>
                    （3）ご連絡先電話番号<br>
                    （4）ご要請内容</p>
                </div>
                <div class="privacy-box">
                  ＜個人情報お問い合わせ窓口＞<br>
                  社会福祉法人 豊津児童福祉会　電話：059-261-6994
                </div>
              </div>
            </div>
            <div id="privacy_agree">
              <input type="checkbox" id="privacy_check" name="privacy_check">
              <span class="privacy_label">プライバシーポリシーに同意する</span>
            </div>
            <div class="privacy-alart"></div>
          </div>
        </div>
        <p class="confilm-btn">確認する</p>

      </form>
      <div class="mail_check_alart"></div>
    </div>
  </section>

  <!-- 確認画面 -->
  <section id="confimation">
    <div class="page-width">
      <div class="speech-mark">
        <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
        <h2 class="houjin-ttl">内容を確認する</h2>
        <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
      </div>
      <div class="confirm-flex">
        <div class="confirm-box">

          <div class="basic-confirm">
            <p class="left-title">申請者の基本情報</p>
            <div class="basic-confirm__content">
              <div class="confirm-pic">
                <p class="confirm-pic__label">申請者名</p>
                <p id="input_namae"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">フリガナ</p>
                <p id="input_hurigana"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">旧姓</p>
                <p id="input_maidenname"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">旧姓フリガナ</p>
                <p id="input_maidenname_hurigana"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">生年月日</p>
                <p id="input_birthday"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">メールアドレス</p>
                <p id="input_email"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">お電話番号</p>
                <p id="input_tel"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">郵便番号</p>
                <p id="input_yubin"></p>
              </div>
              <div class="confirm-pic">
                <p class="confirm-pic__label">ご住所</p>
                <p id="input_jusyo"></p>
              </div>
            </div>
            <div class="app-edit">
              <!-- <a href="<?= home_url() ?>/retired/#basic-1">基本情報を編集する</a> -->
              <!-- <a href="<?= home_url(); ?>/retired/#basic-1">基本情報を編集する</a> -->

            </div>
          </div>

          <div class="confilm-wrap"></div>
        </div>

        <div class="price">
          <p class="left-title">料金</p>
          <div class="price__content">
            <div class="confirm-pic">
              <p class="confirm-pic__label">発行枚数</p>
              <p><span id="input_sheetcount"></span>枚</p>
            </div>
            <div class="confirm-pic">
              <p class="confirm-pic__label">発行手数料</p>
              <p>￥<span id="input_commission"></span></p>
            </div>
            <div class="confirm-pic">
              <p class="confirm-pic__label">郵送費用</p>
              <p>一律￥<span id="input_coast"></span></p>
            </div>
            <div class="confirm-pic">
              <p class="confirm-pic__label">合計</p>
              <p class="total">￥<span id="input_total"></span></p>
            </div>
          </div>
        </div>

      </div>
      <div class="confilmbtn-flex">
        <div class="fix_btn">
          <!-- <a href="<?= home_url() ?>/retired/#basic-1"> -->
          <a style="width: 100%; text-align:center;" href="<?= home_url() ?>/retired/#basic-1">
            修正する
          </a>
        </div>
        <div class="submit_btn">
          <p class="dummy-submit">送信する</p>
        </div>
      </div>
      <div class="send-alart"></div>
    </div>
  </section>
</main>
<div class="confilm-alart">
  <div class="delete-btn"></div>
  <P></P>
  <!-- <span class="mail_check_alart"></span> -->
</div>

<?php get_template_part('template/retired-footer') ?>