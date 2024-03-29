<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice_mv-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice_mv-pc.jpg" alt="">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle sub-mv__maintitle--sitemap">voice</h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>
<section class="sub-content sub-content-layout sub-voice">
  <div class="sub-voice__inner inner">
    <?php
          $terms = get_terms(['taxonomy' => 'voice_category']);
          if ($terms) :
          ?>
    <div class="sub-voice__menu contents-menu">
      <ul class="contents-menu__items">
        <li class="contents-menu__item"><a class="current"
            href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">all</a></li>
        <?php foreach ($terms as $term) : ?>
        <li class="contents-menu__item"><a
            href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
    <div class="sub-voice__voices voice-cards">
      <?php if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
      <?php
        $group_name = get_field('voice_info');
        if( $group_name ): ?>
      <div class="voice-cards__item voice-card">
        <div class="voice-card__header">
          <div class="voice-card__headerLeft">
            <div class="voice-card__info">
              <p class="voice-card__person">
                <?php echo $group_name['voice_info1']; ?>代(<?php echo $group_name['voice_info2']; ?>)</p>
              <p class="voice-card__person"></p>
              <p class="voice-card__category">
                <?php
                  $terms = get_the_terms($post->ID, 'voice_category');
                  if (!empty($terms)) {
                      foreach ($terms as $term) :
                          echo esc_html($term->name);
                      endforeach;
                  } else {
                      echo '未分類';
                  }
                ?>
              </p>
            </div>
            <h3 class="voice-card__title">
              <?php
                  $title = get_the_title();
                  if (mb_strlen($title) > 20) {
                      $title = esc_html(mb_substr($title, 0, 20));
                      echo $title . '...';
                  } else {
                      echo esc_html($title);
                  }
                ?>
            </h3>
          </div>
          <div class="voice-card__headerRight">
            <figure class="voice-card__img js-inview">
              <?php if (get_the_post_thumbnail()) : ?>
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                alt="<?php echo esc_html(get_the_title()); ?>のアイキャッチ画像">
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/no-img.jpg"
                alt="<?php echo esc_html(get_the_title()); ?>のアイキャッチ画像">
              <?php endif; ?>
            </figure>
          </div>
        </div>
        <div class="voice-card__body">
          <div class="voice-card__info">
            <?php if( get_field('voice_text') ):?>
            <p class="voice-card__text">
              <?php the_field('voice_text'); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endwhile;else : ?>
      <p>お客様の声は現在準備中です。</p>
      <?php endif; ?>
    </div>
    <div class="pagenation-layout">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>