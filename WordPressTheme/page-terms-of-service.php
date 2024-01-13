<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_terms-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_terms-pc.jpg" alt="">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle sub-mv__maintitle--sitemap"><?php echo esc_html('Terms of Service'); ?></h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>
<div class="sub-content sub-content-layout sub-terms">
  <div class="sub-terms__inner inner">
    <div class="sub-terms__content sub-sentence">
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>

      <?php echo esc_html(the_content()); ?>
      <?php endwhile; ?>

      <?php else: ?>
      <?php echo esc_html('本文がありません'); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>