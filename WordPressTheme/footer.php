<section class="contact-layout contact">
      <div class="contact__inner inner">
        <div class="contact__content">
          <div class="contact__company">
            <div class="contact__title">
              <div class="contact__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_logo.png" alt="codeupsロゴ">
              </div>
            </div>
            <div class="contact__info">
              <ul class="contact__access">
                <li>沖縄県那覇市1-1</li>
                <li>TEL:0120-000-0000</li>
                <li>営業時間:8:30-19:00</li>
                <li>定休日:毎週火曜日</li>
              </ul>
              <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1847939799914!2d127.69622957604201!3d26.22318447706502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bdf13102165%3A0x68b9bdf87a868a63!2zTGVxdWlvcywg77yR5LiB55uuLe-8kSDnnJ_lmInmr5Qg6YKj6KaH5biCIOaylue4hOecjCA5MDItMDA2OA!5e0!3m2!1sja!2sjp!4v1699297920443!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__form">
            <div class="contact__head section-header">
              <p class="section-header__entitle section-header__entitle--contact">contact</p>
              <h2 class="section-header__jatitle section-header__jatitle--contact">お問い合わせ</h2>
            </div>
            <div class="contact__text">
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="contact__btn">
              <a href="<?php echo home_url('/contact'); ?>" class="button"><span class="button__text">contact us</span><span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
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