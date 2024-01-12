<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_mv-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_mv-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle sub-mv__maintitle--sitemap">voice</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    <section class="sub-content sub-content-layout sub-voice">
      <div class="sub-voice__inner inner">
      <div class="sub-voice__menu contents-menu">
          <ul class="contents-menu__items">
              <li class="contents-menu__item"><a class="current" href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">all</a></li>
              <?php
              $terms = get_terms( ['voice_category'] ); //任意のタクソノミーを指定
              if ( $terms ) :
              ?>
              <?php foreach ( $terms as $term ) :
			        ?>
            <li class="contents-menu__item"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="sub-voice__voices voice-cards">
          <!-- 記事のかいし -->
          <?php if (have_posts()):
            while (have_posts()) :
              the_post(); ?>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__header">
                <div class="voice-card__headerLeft">
                  <div class="voice-card__info">
                    <p class="voice-card__person"><?php the_field('voice_1'); ?></p>
                    <p class="voice-card__category">
                    <?php
                      $terms = get_the_terms($post->ID, 'voice_category');
                      if(!empty($terms)) {
                        foreach($terms as $term):
                        echo $term->name;
                        endforeach;
                      } else {
                        echo '未分類';
                      }
                    ?>
                    </p>
                  </div>
                  <h3 class="voice-card__title"><?php
    $title = get_the_title();
    if(mb_strlen($title)>20) {
        $title= mb_substr($title,0,20);
        echo $title . '...';
    } else {
        echo $title;
    }
    ?></h3>
                </div>
                <div class="voice-card__headerRight">
                  <figure class="voice-card__img js-inview">
                    <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php endif; ?>
                  </figure>
                </div>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__info">
                  <p class="voice-card__text">
					      <?php 
    $campaign_text = get_field('voice_2');
    $remove_array = ["\r\n", "\r", "\n", " ", "　"];
    $content = wp_trim_words(strip_shortcodes($campaign_text), 66, '…' );
    $content = str_replace($remove_array, '', $content);
    echo $content;
    ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endwhile;endif; ?>
            <!-- 記事の終わり -->
        </div>
        <div class="pagenation-layout pagnation wp-pagenavi">
        <?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>