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
    <?php get_template_part('parts/breadcrumb') ?>

    <div class="sub-content sub-content-layout sub-contact">
      <div class="sub-contact__inner inner">
        <div class="sub-contact__form form">
        <?php echo do_shortcode('[contact-form-7 id="324ba7e" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </main>

<?php get_footer('sub'); ?>