<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_privacy-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_privacy-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle sub-mv__maintitle--privacy">privacy policy</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    <div class="sub-content sub-content-layout sub-privacy">
      <div class="sub-privacy__inner inner">
        <div class="sub-privacy__content sub-sentence">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else: ?>
            本文がありません
        <?php endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>