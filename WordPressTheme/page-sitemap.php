<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sitemap-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sitemap-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle sub-mv__maintitle--sitemap">site MAP</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    <div class="sub-content sub-content-layout sub-sitemap">
      <div class="sub-sitemap__inner inner">
      <div class="sub-sitemap__lists nav nav--sitemap">
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
<?php get_footer(); ?>