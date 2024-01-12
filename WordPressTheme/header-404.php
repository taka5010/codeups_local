<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LWF4DFW6R9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LWF4DFW6R9');
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>
<body class="nf-body">
  <header class="header">
    <div class="header__inner">
      <h1 class="hader__logo">
        <a href="<?php echo home_url(); ?>/" class="header__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ヘッダーロゴ">
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__sp-nav sp-nav js-drawer-menu u-mobile">
        <div class="sp-nav__scroll">
          <div class="sp-nav__lists">
            <ul class="sp-nav__items right">
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/campaign'); ?>"><span>キャンペーン</span></a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term2'); ?>">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term1'); ?>">ライセンス取得</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term3'); ?>">体験ダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/about'); ?>"><span>私たちについて</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/information'); ?>"><span>ダイビング情報</span></a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-1#infomenu">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-2#infomenu">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-3#infomenu">体験ダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>"><span>ブログ</span></a></li>
            </ul>
            <ul class="sp-nav__items left">
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>"><span>お客様の声</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/price'); ?>">料金一覧</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/price'); ?>#price1">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/price'); ?>#price2">体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/price'); ?>#price3">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo home_url('/price'); ?>#price4">スペシャルダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/faq'); ?>"><span>よくある質問</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/privacypolicy'); ?>"><span >プライバシー<br class="u-mobile">
                ポリシー</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo home_url('/terms-of-service'); ?>"><span>利用規約</span></a></li>
              <li class="sp-nav__item sp-nav__item--title sp-nav__item--white"><a href="<?php echo home_url('/contact'); ?>"><span>お問い合わせ</span></a></li>
            </ul>
          </div>
        </div><!-- /.sp-nab__scroll -->
      </div>
      <div class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="<?php echo home_url('/campaign'); ?>"><div class="pc-nav__text">campaign<br><span>キャンペーン</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo home_url('/about'); ?>"><div class="pc-nav__text">about us<br><span>私たちについて</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo home_url('/information'); ?>"><div class="pc-nav__text">information<br><span>ダイビング情報</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>"><div class="pc-nav__text">blog<br><span>ブログ</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>"><div class="pc-nav__text">voice<br><span>お客様の声</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo home_url('/price'); ?>"><div class="pc-nav__text">price<br><span>料金一覧</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo home_url('/faq'); ?>"><div class="pc-nav__text">FAQ<br><span>よくある質問</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo home_url('/contact'); ?>"><div class="pc-nav__text">contact<br><span>お問い合わせ</span></div></a></li>
        </ul>
      </div>
    </div>
  </header>