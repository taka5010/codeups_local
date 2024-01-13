<?php get_header(); ?>
<div class="mv">
  <div class="mv__inner">
    <div class="mv__swiper swiper js_mv_Swiper">
      <div class="swiper-wrapper">
        <?php
        for ($i = 1; $i <= 4; $i++) {
            $img_SP = get_field("img{$i}_SP");
            $img_PC = get_field("img{$i}_PC");
            if ($img_SP && $img_PC): // img_SPとimg_PCの両方が設定されている場合
            ?>
        <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo esc_url($img_SP); ?>" media="(max-width: 767px)" />
            <img src="<?php echo esc_url($img_PC); ?>" alt="スライドの画像">
          </picture>
        </div>
        <?php
            endif;
        }
        ?>
      </div>
    </div>
  </div>
  <div class="mv__text">
    <p class="mv__maintitle">DIVING</p>
    <p class="mv__subtitle">into the ocean</p>
  </div>
</div>
<?php
$args = array( 'post_type' => 'campaign','posts_per_page' => 10,);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
?>
<section class="campaign top-campaign">
  <div class="campaign__inner inner">
    <div class="section-header">
      <p class="section-header__entitle">Campaign</p>
      <h2 class="section-header__jatitle">キャンペーン</h2>
    </div>
    <div class="campaign__items campaign-cards">
      <div class="campaign__container">
        <div class="campaign__swiper swiper js_mySwiper">
          <div class="swiper-wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="swiper-slide">
              <div class="sub-campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <?php if (get_the_post_thumbnail()): ?>
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                  <?php else: ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpg')); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body campaign-card__body--campaign">
                  <div class="campaign-card__header campaign-card__header--campaign">
                    <span class="campaign-card__category">
                      <?php
                            $terms = get_the_terms($post->ID, 'campaign_category');
                            if (!empty($terms)) {
                              foreach ($terms as $term):
                                echo esc_html($term->name);
                              endforeach;
                            } else {
                              echo esc_html('未分類');
                            }
                          ?>
                    </span>
                    <h3 class="campaign-card__title campaign-card__title--big "><?php echo esc_html(get_the_title()); ?>
                    </h3>
                  </div>
                  <div class="campaign-card__info campaign-card__info--campaign">
                    <div class="campaign-card__text">
                      <?php echo esc_html(get_field('campaign_1')); ?>
                    </div>
                    <div class="campaign-card__pay">
                      <p class="campaign-card__pay-pre">¥<?php echo esc_html(get_field('price')); ?></p>
                      <p class="campaign-card__pay-post">¥<?php echo esc_html(get_field('price_down')); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="swiper-button-next u-desktop"></div>
      <div class="swiper-button-prev u-desktop"></div>
    </div>
    <div class="campaign__btn">
      <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button"><span class="button__text">view
          more</span><span class="button__arrow"></span></a>
    </div>
  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<section class="about top-about">
  <div class="about__inner inner">
    <div class="section-header">
      <p class="section-header__entitle">about us</p>
      <h2 class="section-header__jatitle">私たちについて</h2>
    </div>
    <div class="about__images">
      <picture class="about__left-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/about_img-left-pc.jpg')); ?>"
          alt="シーサーの画像" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/about_img-left-sp.jpg')); ?>"
          alt="シーサーの画像">
      </picture>
      <picture class="about__right-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/about_img-right-pc.jpg')); ?>"
          alt="シーサーの画像" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/about_img-right-sp.jpg')); ?>"
          alt="海中の魚の画像">
      </picture>
    </div>
    <div class="about__text">
      <div class="about__header">
        <p class="about__title">Dive into <br>the Ocean</p>
      </div>
      <div class="about__body">
        <p class="about__detail">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
        <div class="about__btn">
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="button"><span class="button__text">view
              more</span><span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="information top-information">
  <div class="information__inner inner">
    <div class="section-header">
      <p class="section-header__entitle">information</p>
      <h2 class="section-header__jatitle">ダイビング情報</h2>
    </div>
    <div class="information__content">
      <div class="information__img js-inview">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/information_img.jpg')); ?>" alt="魚の画像">
      </div>
      <div class="information__text">
        <div class="information__header">
          <p class="information__title">ライセンス講習</p>
        </div>
        <div class="information__body">
          <p class="information__detail">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
        </div>
        <div class="information__btn">
          <a href="<?php echo esc_url(home_url('/information')); ?>" class="button"><span class="button__text">view
              more</span><span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$args = array( 'post_type' => 'post','posts_per_page' => 3,);
$the_query = new WP_Query($args);
if($the_query->have_posts()): // もし投稿があるなら
?>
<section class="blog top-blog">
  <div class="blog__inner inner">
    <div class="blog__head section-header">
      <p class="section-header__entitle section-header__entitle--blog">blog</p>
      <h2 class="section-header__jatitle section-header__jatitle--blog">ブログ</h2>
    </div>
    <div class="blog__items blog-cards">
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <article class="blog-cards__item blog-card">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <figure class="voice-card__img">
            <?php if (get_the_post_thumbnail()) : ?>
            <img src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>"
              alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
            <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpg')); ?>"
              alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
            <?php endif; ?>
          </figure>
          <div class="blog-card__body">
            <div class="blog-card__header">
              <time class="blog-card__category"
                datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date()); ?></time>
              <h3 class="blog-card__title">
                <?php
                  $title_length = mb_strlen($post->post_title);
                  if ($title_length > 20) {
                    $title = mb_substr($post->post_title, 0, 20);
                    echo esc_html($title) . '...';
                  } else {
                    echo esc_html($post->post_title);
                  }
                  ?>
              </h3>
            </div>
            <div class="blog-card__info">
              <p class="blog-card__text">
                <?php
                  $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                  $content = wp_trim_words(strip_shortcodes(get_the_content()), 66, '…');
                  $content = str_replace($remove_array, '', $content);
                  echo esc_html($content);
                  ?>
              </p>
            </div>
          </div>
        </a>
      </article>
      <?php endwhile; ?>
    </div>
    <div class="blog__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="button"><span
          class="button__text">view more</span><span class="button__arrow"></span></a>
    </div>
  </div>
</section>
<?php endif; // 投稿がない場合、section全体を表示しない ?>
<?php wp_reset_postdata(); ?>

<?php
$args = array( 'post_type' => 'voice','posts_per_page' => 2,);
$the_query = new WP_Query($args);
if($the_query->have_posts()): // もし投稿があるなら
?>
<section class="voice top-voice">
  <div class="voice__inner inner">
    <div class="voice__head section-header">
      <p class="section-header__entitle">voice</p>
      <h2 class="section-header__jatitle">お客様の声</h2>
    </div>
    <div class="voice__items voice-cards">
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="voice-cards__item voice-card">
        <div class="voice-card__header">
          <div class="voice-card__headerLeft">
            <div class="voice-card__info">
              <p class="voice-card__person"><?php echo esc_html(get_field('voice_1')); ?></p>
              <p class="voice-card__category">
                <?php
                    $terms = get_the_terms($post->ID, 'voice_category');
                    if (!empty($terms)) {
                      foreach ($terms as $term):
                        echo esc_html($term->name);
                      endforeach;
                    } else {
                      echo '未分類';
                    }
                    ?>
              </p>
            </div>
            <h3 class="voice-card__title"><?php the_title(); ?></h3>
          </div>
          <div class="voice-card__headerRight">
            <figure class="voice-card__img js-inview">
              <?php if (get_the_post_thumbnail()): ?>
              <img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>"
                alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.jpg')); ?>"
                alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php endif; ?>
            </figure>
          </div>
        </div>
        <div class="voice-card__body">
          <div class="voice-card__info">
            <p class="voice-card__text">
              <?php echo esc_html(get_field('voice_2')); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="voice__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button"><span
          class="button__text">view more</span><span class="button__arrow"></span></a>
    </div>
  </div>
</section>
<?php endif; // 投稿がない場合、section全体を表示しない ?>
<?php wp_reset_postdata(); ?>



<section class="price top-price">
  <div class="price__inner inner">
    <div class="price__head section-header">
      <p class="section-header__entitle">price</p>
      <h2 class="section-header__jatitle">料金一覧</h2>
    </div>
    <div class="price__content">
      <div class="price__img js-inview">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/price_img-sp.jpg')); ?>"
            media="(max-width: 769px)" alt="ウミガメの画像" />
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/price_img-pc.jpg')); ?>" alt="サンゴの画像">
        </picture>
      </div>
      <div class="price__info">
        <div class="price__lecture lecture">
          <div class="lecture__name">ライセンス講習</div>
          <div class="lecture__menus">
            <?php
            $faq = SCF::get('price-group1', 35 );
            foreach ($faq as $fields ) {
            ?>
            <div class="lecture__menu">
              <p class="lecture__course">
                <?php
                $allowed_html = array(
                    'br' => array()
                );
                echo wp_kses($fields['group1-1'], $allowed_html);
                ?>
              </p>
              <span class="lecture__pay"><?php echo esc_html($fields['group1-2']); ?></span>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="price__lecture lecture">
          <div class="lecture__name">体験ダイビング</div>
          <div class="lecture__menus">
            <?php
            $faq = SCF::get('price-group2', 35 );
            foreach ($faq as $fields ) {
            ?>
            <div class="lecture__menu">
              <p class="lecture__course">
                <?php
                  echo wp_kses($fields['group2-1'], $allowed_html);
                  ?>
              </p>
              <span class="lecture__pay"><?php echo esc_html($fields['group2-2']); ?></span>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="price__lecture lecture">
          <div class="lecture__name">ファンダイビング</div>
          <div class="lecture__menus">
            <?php
            $faq = SCF::get('price-group3', 35 );
            foreach ($faq as $fields ) {
            ?>
            <div class="lecture__menu">
              <p class="lecture__course">
                <?php
                  echo wp_kses($fields['group3-1'], $allowed_html);
                  ?>
              </p>
              <span class="lecture__pay"><?php echo esc_html($fields['group3-2']); ?></span>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="price__lecture lecture">
          <div class="lecture__name">スペシャルダイビング</div>
          <div class="lecture__menus">
            <?php
            $faq = SCF::get('price-group4', 35 );
            foreach ($faq as $fields ) {
            ?>
            <div class="lecture__menu">
              <p class="lecture__course">
                <?php
                  echo wp_kses($fields['group4-1'], $allowed_html);
                  ?>
              </p>
              <span class="lecture__pay"><?php echo esc_html($fields['group4-2']); ?></span>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="price__btn">
      <a href="<?php echo esc_url(home_url('/price')); ?>" class="button"><span class="button__text">view
          more</span><span class="button__arrow"></span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>