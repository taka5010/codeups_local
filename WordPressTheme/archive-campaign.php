<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign_mv-sp.jpg"
      media="(max-width: 767px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign_mv-pc.jpg" alt="２匹の魚の画像">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle">campaign</h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>
<div class="sub-content sub-content-layout sub-campaign">
  <div class="sub-campaign__inner inner">
    <?php
              $terms = get_terms([
                'taxonomy' => 'campaign_category',
                'hide_empty' => false,  // 投稿がないタームも表示
            ]);
              if ($terms) :
              ?>

    <div class="sub-voice__menu contents-menu">
      <ul class="contents-menu__items">
        <li class="contents-menu__item"><a class="current"
            href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">all</a></li>
        <?php foreach ($terms as $term) :?>
        <li class="contents-menu__item"><a
            href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
    <div class="sub-campaign__items campaign-cards--campaign">
      <?php if (have_posts()) :
          while (have_posts()) :
          the_post(); ?>

      <div class="sub-campaign__item campaign-card">
        <figure class="campaign-card__img">
          <?php if (get_the_post_thumbnail()) : ?>
          <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
            alt="<?php echo esc_html(get_the_title()); ?>のアイキャッチ画像">
          <?php else : ?>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/no-img.jpg"
            alt="<?php echo esc_html(get_the_title()); ?>のアイキャッチ画像">
          <?php endif; ?>
        </figure>
        <div class="campaign-card__body campaign-card__body--campaign">
          <div class="campaign-card__header campaign-card__header--campaign">
            <span class="campaign-card__category">
              <?php
            $terms = get_the_terms($post->ID, 'campaign_category');
            if (!empty($terms)) {
                foreach ($terms as $term) :
                    echo esc_html($term->name);
                endforeach;
            } else {
                echo '未分類';
            }
          ?>
            </span>
            <h3 class="campaign-card__title campaign-card__title--big ">
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
          <div class="campaign-card__info campaign-card__info--campaign">
            <?php
            $group_name = get_field('price-group');
            if( $group_name ): ?>
            <div class="campaign-card__text"><?php echo $group_name['price-group1']; ?></div>
            <div class="campaign-card__pay">
              <?php if (get_field('price')) : ?>
              <p class="campaign-card__pay-pre">¥<?php echo $group_name['price-group3']; ?></p>
              <?php endif; ?>
              <?php if (get_field('price_down')) : ?>
              <p class="campaign-card__pay-post">¥<?php echo $group_name['price-group2']; ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php if( get_field('campaign_text') ):?>
          <div class="campaign-card__sentence">
            <?php the_field('campaign_text'); ?>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <div class="campaign-card__contact">
            <?php
            $campaign_term = get_field('campaign_term');
            if( $campaign_term ): ?>
            <div class="campaign-card__period">
              <?php echo $campaign_term['start']; ?>-<?php echo $campaign_term['finish']; ?></div>

            <?php endif; ?>
            <p class="campaign-card__inquiry">ご予約・お問い合わせはコチラ</p>
            <div class="campaign-card__btn">
              <a href="https://taka-webdesign.main.jp/newcodeups/contact.html" class="button"><span
                  class="button__text">contact us</span><span class="button__arrow"></span></a>
            </div>
          </div>

        </div>
      </div>
      <?php endwhile;else : ?>
      <p>キャンペーンは現在ございません</p>
      <?php endif; ?>
    </div>
    <div class="pagenation-layout">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>