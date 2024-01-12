  </main>
  <footer class="footer top-footer">
  <div class="footer__inner">
      <div class="footer__pageTop">
        <a href="#"><span class="top-btn"></span></a>   
      </div>
      <div class="footer__content">
        <div class="footer__images">
          <h2 class="footer__logo">
            <a href="<?php echo home_url(); ?>" class="footer__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="codeupsロゴ">
            </a>
          </h2>
          <div class="footer__icons">
            <a href="https://www.facebook.com/" target=”_blank” class="footer__icon footer__icon--facebook">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebooklogo.svg" alt="フェイスブックアイコン">
            </a>
            <a href="https://www.instagram.com/" target=”_blank” class="footer__icon footer__icon--instagram">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagramlogo.svg" alt="インスタグラムアイコン">
            </a>
          </div>
        </div>
        <div class="footer__lists nav">
          <div class="nav__columns--left">
            <div class="nav__column">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/campaign'); ?>">キャンペーン</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term2'); ?>">ファンダイビング</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term1'); ?>">ライセンス取得</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/campaign_category/campaign_term3'); ?>">体験ダイビング</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/about'); ?>">私たちについて</a></li>
              </ul>
            </div>
            <div class="nav__column">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/information'); ?>">ダイビング情報</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-1#infomenu">ライセンス講習</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-2#infomenu">ファンダイビング</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/information'); ?>?active-tab=tab-3#infomenu">体験ダイビング</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">ブログ</a></li>
              </ul>
            </div>
          </div>
          <div class="nav__columns--right">
            <div class="nav__column">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo get_post_type_archive_link( 'voice' ); ?>">お客様の声</a></li>         
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/price'); ?>">料金一覧</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/price'); ?>#price1">ライセンス講習</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/price'); ?>#price2">体験ダイビング</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/price'); ?>#price3">ファンダイビング</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/price'); ?>#price4">スペシャルダイビング</a></li>
              </ul>
            </div>
            <div class="nav__column">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/faq'); ?>">よくある質問</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/privacypolicy'); ?>">プライバシー<br class="u-mobile">
                  ポリシー</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/terms-of-service'); ?>">利用規約</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo home_url('/sitemap'); ?>">サイトマップ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__text">
      <p class="footer__copy">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>