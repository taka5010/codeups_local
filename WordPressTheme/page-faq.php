<?php get_header(); ?>

<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_faq-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_faq-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle sub-mv__maintitle--faq">FAQ</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>

    <section class="sub-content sub-content-layout sub-faq">
      <div class="sub-faq__inner inner">
      <?php
      $faq = SCF::get('faq-items');
      foreach ($faq as $fields ) {
      ?>
        <details class="faq-item  js-faq-item" open>
          <summary class="faq-item__summary js-faq-item__summary">
            <span class="btn"></span><?php echo $fields['faq-q']; ?>
          </summary>
          <div class="faq-item__content js-faq-item__content">
            <p class="faq-item__text"><?php echo $fields['faq-a']; ?></p>
          </div>
        </details>
      <?php } ?>
      </div>

    </section>
<?php get_footer(); ?>