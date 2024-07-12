<link rel="stylesheet" href="https://use.typekit.net/avg5yzb.css">

<div id="debug-toolbar">
  <div class="toolbar">

    <div class="toolbar--content status">
      <div class="toolbar--content__status">
        <?php get_template_part('debug/status'); ?>
      </div>
    </div>

    <div class="toolbar--content check">
      <div class="toolbar--content__check">
        <?php get_template_part('debug/check'); ?>
      </div>
    </div>

    <div class="toolbar--content log">
      <div class="toolbar--content__log">
        <?php get_template_part('debug/log'); ?>
      </div>
    </div>

    <div class="toolbar--content variables">
      <div class="toolbar--content__variables">
        <?php
        global $debug_var;
        $debug_var->showVariables();
        ?>
      </div>
    </div>

    <div class="toolbar--content readme">
      <div class="toolbar--content__readme markdown-body">
        <?php get_template_part('debug/readme'); ?>
      </div>
    </div>

    <div class="toolbar--content help">
      <div class="toolbar--content__help">
        <?php get_template_part('debug/help'); ?>
      </div>
    </div>

    <div class="toolbar--menu">
      <div class="toolbar--menu__items">
        <a data-content="status">Status</a>
        <a data-content="check">Check</a>
        <a data-content="log">Log</a>
        <a data-content="variables">Variables</a>
        <a data-content="readme">README.md</a>
        <a data-content="help">Hlep</a>
      </div>
      <div class="tool-name"><a id="debug-logo-btn">DEBUG</a></div>
    </div>
  </div>
</div>

<div id="debug-modal-window">
  <div class="wrapper"></div>
  <div class="inner">
    <p class="close"><span><i class="far fa-times-circle"></i></span></p>
    <p class="logo">DEBUG</p>

    <div class="flex">

      <div class="item">
        <p class="link"><a target="_blank" href="https://bitbucket.org/yohaku_shimizu/yohaku-theme/branch/feature/debug_mode"><i class="fab fa-bitbucket"></i></a></p>
        <p class="title">Bitbucket</p>
        <p class="text">デバッグバーの開発はBitbucketで管理しています。<br>最新の開発状況が確認したい場合はBitbucketにアクセスして確認してください。</p>
      </div>

      <div class="item">
        <p class="link"><a target="_blank" href="mailto:shimizu.s@yohaku-bunka.com"><i class="fas fa-bug"></i></a></p>
        <p class="title">Bugs</p>
        <p class="text">バグ報告や追加してほしい機能などがありましたら<br><a target="_blank" href="mailto:shimizu.s@yohaku-bunka.com">shimizu.s@yohaku-bunka.com</a>に連絡してください。</p>
      </div>

    </div>

    <p class="copy">Copyright © yohakubunka All Right Reserved.</p>
  </div>
</div>