<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_mv-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_mv-pc.jpg" alt="２匹の魚の画像">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">campaign</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    <div class="sub-content sub-content-layout sub-campaign">
      <div class="sub-campaign__inner inner">
        <!-- コンテンツメニュー -->
        <div class="sub-voice__menu contents-menu">
          <ul class="contents-menu__items">
              <li class="contents-menu__item"><a class="current" href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">all</a></li>
              <?php
              $terms = get_terms( ['campaign_category'] ); //任意のタクソノミーを指定
              if ( $terms ) :
              ?>
              <?php foreach ( $terms as $term ) :
			        ?>
            <li class="contents-menu__item"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
<!-- test -->

        <!-- <div class="sub-campaign__menu contents-menu">
          <ul class="contents-menu__items">
              <li class="contents-menu__item"><a href="#">all</a></li>
              <li class="contents-menu__item"><a href="#">ライセンス講習</a></li>
              <li class="contents-menu__item"><a href="#">ファンダイビング</a></li>
              <li class="contents-menu__item"><a href="#">体験ダイビング</a></li>
          </ul>
        </div> -->
        <div class="sub-campaign__items campaign-cards--campaign">
          <?php if (have_posts()):
          while (have_posts()) :
          the_post(); ?>
          <!-- 記事のかいし -->
          <div class="sub-campaign__item campaign-card">
            <figure class="campaign-card__img">
              <?php if (get_the_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php endif; ?>
            </figure>
            <div class="campaign-card__body campaign-card__body--campaign">
              <div class="campaign-card__header campaign-card__header--campaign">
                <span class="campaign-card__category">
                <?php
                  $terms = get_the_terms($post->ID, 'campaign_category');
                  if(!empty($terms)) {
                    foreach($terms as $term):
                    echo $term->name;
                    endforeach;
                  } else {
                    echo '未分類';
                  }
                ?>
                </span>
                <h3 class="campaign-card__title campaign-card__title--big ">
					<?php
    $title = get_the_title();
    if(mb_strlen($title)>20) {
        $title= mb_substr($title,0,20);
        echo $title . '...';
    } else {
        echo $title;
    }
    ?></h3>
              </div>
              <div class="campaign-card__info campaign-card__info--campaign">
                <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                <div class="campaign-card__pay">
                  <p class="campaign-card__pay-pre">¥<?php the_field('price'); ?></p>
                  <p class="campaign-card__pay-post">¥<?php the_field('price_down'); ?></p>
                </div>
              </div>
<div class="campaign-card__sentence">
    <?php 
    $campaign_text = get_field('campaign_text');
    $remove_array = ["\r\n", "\r", "\n", " ", "　"];
    $content = wp_trim_words(strip_shortcodes($campaign_text), 66, '…' );
    $content = str_replace($remove_array, '', $content);
    echo $content;
    ?>
</div>
              <div class="campaign-card__contact">
                <div class="campaign-card__period"><?php the_field('start'); ?>-<?php the_field('finish'); ?></div>
                <p class="campaign-card__inquiry">ご予約・お問い合わせはコチラ</p>
                <div class="campaign-card__btn">
                  <a href="https://taka-webdesign.main.jp/newcodeups/contact.html" class="button"><span class="button__text">contact us</span><span class="button__arrow"></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- 記事の終わり -->
          <?php endwhile;endif; ?>
        </div>
        <div class="pagenation-layout pagnation wp-pagenavi">
        <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>


<?php get_footer(); ?>