<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_faq-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_faq-pc.jpg" alt="">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle sub-mv__maintitle--faq">FAQ</h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>
<section class="sub-content sub-content-layout sub-faq">
  <div class="sub-faq__inner inner">
    <?php
  $fields = SCF::get_option_meta( 'faq-options', 'faq-items' );
  foreach ( $fields as $field_name => $fields_value ) {
?>
    <?php if ($fields_value['faq-q'] && $fields_value['faq-a']): ?>
    <details class="faq-item  js-faq-item" open>
      <summary class="faq-item__summary js-faq-item__summary">
        <span class="btn"></span> <?php echo $fields_value['faq-q']; ?>
      </summary>
      <div class="faq-item__content js-faq-item__content">
        <p class="faq-item__text"><?php echo $fields_value['faq-a']; ?></p>
      </div>
    </details>
    <?php
  endif;
  } ?>
  </div>
</section>
<?php get_footer(); ?>