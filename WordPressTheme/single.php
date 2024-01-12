<?php get_header(); ?>

<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_campaign-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_campaign-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">blog</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    <section class="sub-content sub-content-layout">
      <div class="sub-content__inner inner sub-2column">
        <div class="sub-2column__wrapper">

           <!-- 記事部分 -->
           <div class="sub-2column__article blog-article">
            <time datetime="<?php the_date(); ?>"><?php the_date(); ?></time>
            <h1><?php the_title(); ?></h1>
            <figure class="voice-card__img">
              <?php if (get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php endif; ?>
            </figure>
            <?php
            if(is_single()) {
              $post_id = get_the_ID();
              $views = get_post_meta($post_id, 'views', true);
              if($views === '') {
                add_post_meta($post_id, 'views', '1');
              } else {
                $views = intval($views);
                update_post_meta($post_id, 'views', $views + 1);
              }
            }
            ?>
            <?php if (have_posts()):
              while (have_posts()) :
                the_post(); ?>

                <?php the_content() ?>
            <?php endwhile;endif; ?>
            <!-- 記事部分終わり -->


          </div>
          <div class="pagenation-layout pagnation wp-pagenavi">
                  <?php 
                  $prev = get_previous_post();
                  if ($prev): ?>
                  <a class="previouspostslink" rel="prev" href="<?php echo esc_url(get_permalink($prev->ID)); ?>"></a>
                  <?php endif; ?>

                  <?php 
                  $next = get_next_post();
                  if ($next): ?>
                  <a class="nextpostslink" rel="next" href="<?php echo esc_url(get_permalink($next->ID)); ?>"></a>
                  <?php endif; ?>
              </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </section>
<?php get_footer(); ?>