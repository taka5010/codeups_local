<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/mv_campaign-sp.jpg')); ?>"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/mv_campaign-pc.jpg')); ?>" alt="">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle">blog</h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>
<section class="sub-content sub-content-layout">
  <div class="sub-content__inner inner sub-2column">
    <div class="sub-2column__wrapper">
      <div class="sub-2column__items blog-cards blog-cards--sub">
        <?php if (have_posts()):
            while (have_posts()) :
              the_post(); ?>
        <article class="blog-cards__item blog-card">
          <a href="<?php the_permalink(); ?>">
            <figure class="voice-card__img">
              <?php if (get_the_post_thumbnail()): ?>
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpg')); ?>"
                alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
              <?php endif; ?>
            </figure>
            <div class="blog-card__body">
              <div class="blog-card__header">
                <time class="blog-card__category"
                  datetime="<?php echo esc_attr(get_the_time('c')); ?>"><?php echo esc_html(get_the_time('Y.m.d')); ?></time>
                <h3 class="blog-card__title">
                  <?php
                      $title = mb_strlen(get_the_title()) > 20 ? mb_substr(get_the_title(), 0, 20) . '...' : get_the_title();
                      echo esc_html($title);
                    ?>
                </h3>
              </div>
              <div class="blog-card__info">
                <p class="blog-card__text">
                  <?php
                    $content = get_the_content();
                    $trimmed_content = wp_trim_words( $content, 66, '...' );
                    echo esc_html( $trimmed_content );
                  ?>
                </p>
              </div>
            </div>
          </a>
        </article>
        <?php endwhile;else : ?>
        <p>ブログは準備中です。</p>
        <?php endif; ?>
      </div>
      <div class="pagenation-layout pagnation wp-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</section>
<?php get_footer(); ?>