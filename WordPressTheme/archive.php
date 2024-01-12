<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_campaign-sp.jpg" media="(max-width: 769px)"/>
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
          <div class="sub-2column__items blog-cards blog-cards--sub">
          <?php if (have_posts()):
            while (have_posts()) :
              the_post(); ?>
            <article class="blog-cards__item blog-card">
              <a href="<?php the_permalink(); ?>">
              <figure class="voice-card__img">
                <?php if (get_the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </figure>
                <div class="blog-card__body">
                  <div class="blog-card__header">
                    <time class="blog-card__category" datetime="<?php the_date(); ?>"><?php the_date(); ?></time>
                    <h3 class="blog-card__title">
                    <?php
                      if(mb_strlen($post->post_title)>20) {
                        $title= mb_substr($post->post_title,0,20) ;
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                      ?>
                    </h3>
                  </div>
                  <div class="blog-card__info">
                    <p class="blog-card__text">
                    <?php 
                    $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                    $content = wp_trim_words(strip_shortcodes(get_the_content()), 66, '…' );
                    $content = str_replace($remove_array, '', $content);
                    echo $content;
                    ?>
                    </p>
                  </div>
                </div>             
              </a>
            </article>              
          <?php endwhile;endif; ?>

          </div>
          <div class="pagenation-layout pagnation wp-pagenavi">
          <?php wp_pagenavi(); ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </section>

<?php get_footer(); ?>