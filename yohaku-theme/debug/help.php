<div class="help-wrapper">

    <div class="nav">
        <ul>
            <li><a href="#help-status">Status</a></li>
            <li><a href="#help-check">Check</a></li>
            <li><a href="#help-log">Log</a></li>
            <li><a href="#help-variables">Variables</a></li>
        </ul>
    </div>

    <div class="texts-wrapper">
        <div class="text-wrap" id="help-status">
            <h2>WordPress info</h2>
            <div class="content">
                <p>
                    WordPressのバージョン、グローバル変数が確認できます。<br>
                    デバッグツールがグローバル変数を読み込むタイミングはbodyの閉じタグ付近です。
                </p>
                <pre class="prettyprint lang-php border">
&lt;?php

// fotter.php

if (WP_DEBUG &amp;&amp; current_user_can(&#039;manage_options&#039;)) {
    get_template_part(&#039;debug/config-data&#039;);
}
                
wp_footer();

?&gt;
            </pre>
                <p>
                    なので、WordPress infoに記載されているグローバル変数はテンプレートファイル内で書き換えが行われた場合その内容に従った内容になっています。WP_Queryなどを使用した場合書き換えられます。
                </p>
            </div>
        </div>

        <div class="text-wrap" id="help-check">
            <h2>Link check</h2>
            <div class="content">
                <p>
                    リンクチェックは開いているページのbody内のaタグのみ検出しています。検出項目は『リンク先』、『aタグのHTML』、『リンク先のホスト』です。<br>
                    『Status』は以下の仕様です。
                </p>
                <table class="w-initial">
                    <tbody>
                        <tr>
                            <td class="success">設定済み</td>
                            <td>外部リンク、内部リンクを問わずhrefの中にURLが設定されている場合設定済みのステータスになります。</td>
                        </tr>
                        <tr>
                            <td class="warning">仮設定状態</td>
                            <td>hrefが『##』の状態だと仮設定状態のステータスになります。</td>
                        </tr>
                        <tr>
                            <td class="error">未設定</td>
                            <td>href属性はあるが、中身がない状態『href=""』だと未設定のステータスになります。</td>
                        </tr>
                        <tr>
                            <td class="error">no href</td>
                            <td>aタグにhref属性が設定されていないとno hrefのステータスになります。</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    『Link to』は以下の仕様です。
                </p>
                <table class="w-initial">
                    <tbody>
                        <tr>
                            <td class="success">内部リンク</td>
                            <td>リンク先のホストが一致する場合</td>
                        </tr>
                        <tr>
                            <td class="warning">外部リンク</td>
                            <td>リンク先のホストが一致しない場合</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>href属性が設定されていない場合</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-wrap">
            <h2>Element over width from body</h2>
            <div class="content">
                <p>
                    body要素からはみ出た要素を検出します。<br>
                    『検出』ボタンを押すと、bodyの横幅とbody内の全ての要素の横幅を比較します。<br>
                    bodyと比較した要素の横幅がbodyより大きい場合表を作成し、要素の横幅と要素のHTMLを書き出します。<br>
                    この機能は単純にbodyの横幅と比較するものなのでSlickなどoverfolowを指定してかくしてある要素や内部スクロールにしてある要素が検出される場合があります。<br>
                    検出された要素は背景色が『rgba(230, 0, 0, 0.4)』に変更されます。<br>
                    検出した要素のスタイルを別のものに指定したい場合『yohaku-theme > debug > js > debug.js』の以下の部分を修正してください。
                </p>
                <pre class="prettyprint lang-js border">
$(&#039;#e-o-w-f-b button&#039;).click(function () {

$(&#039;#e-o-w-f-b table&#039;).show();
$(&#039;#e-o-w-f-b button&#039;).hide();

var body_width = $(&#039;body&#039;).width();
$(&#039;#e-o-w-f-b-tbody&#039;).append(
  &#039;&lt;tr&gt;&lt;td&gt;&#039; + body_width + &#039;&lt;/td&gt;&lt;td&gt;body&lt;/td&gt;&lt;/tr&gt;&#039;
);

$(&#039;body *&#039;).each(function (index) {
  if ($(this).width() &gt; body_width) {
    $(&#039;#e-o-w-f-b-tbody&#039;).append(
      &#039;&lt;tr&gt;&lt;td class=&quot;error&quot;&gt;&#039; + $(this).width() + &#039;&lt;/td&gt;&lt;td&gt;&#039; + java_escape($(this)[0][&#039;outerHTML&#039;]) + &#039;&lt;/td&gt;&lt;/tr&gt;&#039;
    );

    // この部分に追記
    // $(this).css(&#039;プロパティ&#039;, &#039;値&#039;);
    $(this).css(&#039;background-color&#039;, &#039;rgba(230, 0, 0, 0.4)&#039;);
  }
});

});
                </pre>
            </div>
        </div>

        <div class="text-wrap" id="help-log">
            <h2>Log</h2>
            <pre class="prettyprint lang-php border">
define(&#039;WP_DEBUG&#039;, true);
if (WP_DEBUG) {
	define(&#039;WP_DEBUG_LOG&#039;, true);
}
            </pre>
            <p>
                WordPressのデバッグモードをTrueにした状態で『WP_DEBUG_LOG』をTrueにするとログファイルが生成されます。<br>
                Logでは生成されたLogデータを確認することができます。内部的にエラーがでるとLogが残ります。<br>
                本番運用中でPHPのエラーメッセージを表示させずエラーメッセージを取得したい場合以下の設定に変更してください。
            </p>
            <pre class="prettyprint lang-php border">
define(&#039;WP_DEBUG&#039;, true); // デバッグモードを有効化

// ログファイルに保存する場合は、以下を書き足します。
if ( WP_DEBUG ) {
    // debug.log ファイルに記録
    define( &#039;WP_DEBUG_LOG&#039;, true );
    // ブラウザ上に表示しない
    define( &#039;WP_DEBUG_DISPLAY&#039;, false );
    // ブラウザ上に表示しない
    @ini_set( &#039;display_errors&#039;,0 );
}
            </pre>
            <p>
                エラーメッセージではないものをLogに表示させたい場合以下のようにPHPを記述してください。
            </p>
            <pre class="prettyprint lang-php border">
error_log(&#039;テキストや変数&#039;);
            </pre>
        </div>

        <div class="text-wrap" id="help-variables">
            <h2>Variables</h2>
            <div class="content">
                <p>
                    中身を確認したい変数を指定関数でセットすることでデバッグツール内で確認できます。<br>
                    使用方法は以下を参考にして下さい。
                </p>
                <pre class="prettyprint lang-php border">
//グローバル変数$postの中身を確認したい場合

global $post;
$debug_var-&gt;save(&#039;post&#039;, $post);
// $debug_var-&gt;save(&#039;ラベル名&#039;, 変数); 
                </pre>
                <p>
                    上記のコードを入れた場合の表は以下になります。
                </p>
                <table class="w-initial">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>type</th>
                            <th>value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ラベル名</td>
                            <td>変数タイプ</td>
                            <td>値</td>
                        </tr>
                        <?php global $post; ?>
                        <tr>
                            <td>post</td>
                            <td>object</td>
                            <td><?php debug($post) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>