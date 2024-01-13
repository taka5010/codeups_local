<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_contact-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_contact-pc.jpg" alt="">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle"><?php echo esc_html('contact'); ?></h1>
  </div>
</div>
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
    <span><?php echo esc_html('TOP > お問い合わせ > 送信完了'); ?></span>
  </div>
</div>
<div class="sub-content sub-content-layout sub-thanks">
  <div class="sub-thanks__inner inner">
    <div class="sub-thanks__contant">
      <p class="sub-thanks__text"><?php echo esc_html('お問い合わせ内容を送信完了しました。'); ?></p>
      <p class="sub-thanks__text">
        <?php echo esc_html('このたびは、お問い合わせ頂き誠にありがとうございます。お送り頂きました内容を確認の上、3営業日以内に折り返しご連絡させて頂きます。また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。'); ?>
      </p>
    </div>
  </div>
</div>
<?php get_footer(); ?>