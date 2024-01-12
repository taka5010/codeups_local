<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_contact-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_contact-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">contact</h1>
      </div>
    </div>
    <div class="breadcrumb">
      <div class="breadcrumb__inner inner">
        <span>TOP > お問い合わせ > 送信完了</span>
      </div>
    </div>
    <div class="sub-content sub-content-layout sub-thanks">
      <div class="sub-thanks__inner inner">
        <div class="sub-thanks__contant">
          <p class="sub-thanks__text">お問い合わせ内容を送信完了しました。</p>
          <p class="sub-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br  class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br  class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </div>
  </main>

<?php get_footer('sub'); ?>