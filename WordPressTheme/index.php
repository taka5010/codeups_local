<?php get_header(); ?>
  <main>
    <div class="mv">
      <div class="mv__inner">
        <div class="mv__swiper swiper js_mv_Swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-sp.jpg" media="(max-width: 769px)"  />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-pc.jpg" alt="横視点のウミガメ画像">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-sp-2.jpg" media="(max-width: 769px)"  />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-pc-2.jpg" alt="下視点のウミガメ画像">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-sp-3.jpg" media="(max-width: 769px)"  />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-pc-3.jpg" alt="海上の画像">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-sp-4.jpg" media="(max-width: 769px)"  />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img-pc-4.jpg" alt="浜辺の画像">
              </picture>
            </div>
          </div>
        </div>
      </div>
      <div class="mv__text">
        <p class="mv__maintitle">DIVING</p>
        <p class="mv__subtitle">into the ocean</p>
      </div>
    </div>

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
                <?php
                  $args = [
                    'post_type' => 'campaign', // カスタム投稿名が「gourmet」の場合
                    'posts_per_page' => 10, // 表示する数
                  ];
                  $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <!-- ▽ ループ開始 ▽ -->
                    <div class="swiper-slide">
                      <!-- <div class="swiper-slide__item campaign-card">
                        <figure class="campaign-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_1.jpg" alt="魚群の画像">
                        </figure>
                        <div class="campaign-card__body">
                          <div class="campaign-card__header">
                            <span class="campaign-card__category">ライセンス講習</span>
                            <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                          </div>
                          <div class="campaign-card__info">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__pay">
                              <p class="campaign-card__pay-pre">¥56,000</p>
                              <p class="campaign-card__pay-post">¥46,000</p>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- test -->
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
                            <h3 class="campaign-card__title campaign-card__title--big "><?php the_title(); ?></h3>
                          </div>
                          <div class="campaign-card__info campaign-card__info--campaign">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__pay">
                              <p class="campaign-card__pay-pre">¥<?php the_field('price'); ?></p>
                              <p class="campaign-card__pay-post">¥<?php the_field('price_down'); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- test-fin -->
                    </div>
                  <!-- △ ループ終了 △ -->
                  <?php endwhile; ?>
              <?php else: // 投稿がない場合?>
                <p>まだ投稿がありません。</p>
              <?php endif; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
          <div class="swiper-button-next u-desktop">
          </div>
          <div class="swiper-button-prev u-desktop"></div>
        </div>
      </div>
      <div class="campaign__btn">
        <a href="<?php echo home_url('/campaign'); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
      </div>
    </section>
    <section class="about top-about">
      <div class="about__inner inner">
        <div class="section-header">
          <p class="section-header__entitle">about us</p>
          <h2 class="section-header__jatitle">私たちについて</h2>
        </div>
        <div class="about__images">
          <picture class="about__left-image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-left-pc.jpg" alt="シーサーの画像" media="(min-width: 768px)" type="image/png">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-left-sp.jpg" alt="シーサーの画像">
          </picture>
          <picture class="about__right-image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-right-pc.jpg" alt="シーサーの画像" media="(min-width: 768px)" type="image/png">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-right-sp.jpg" alt="海中の魚の画像">
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
              <a href="<?php echo home_url('/about'); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_img.jpg" alt="魚の画像">
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
              <a href="<?php echo home_url('/information'); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog top-blog">
      <div class="blog__inner inner">
        <div class="blog__head section-header">
          <p class="section-header__entitle section-header__entitle--blog">blog</p>
          <h2 class="section-header__jatitle section-header__jatitle--blog">ブログ</h2>
        </div>
        <div class="blog__items blog-cards">
        <?php
          $args = array(
          'posts_per_page' => 3 // 表示件数
          );
          $posts = get_posts( $args );
          foreach ( $posts as $post ): // ループの開始
          setup_postdata( $post ); // 記事データの取得
          ?>
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
                    <time class="blog-card__category" datetime="2023-11-17"><?php the_date(); ?></time>
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
          <?php
          endforeach; // ループの終了
          ?>
        </div>
        <div class="blog__btn">
          <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
        </div>
      </div>
    </section>
    <section class="voice top-voice">
      <div class="voice__inner inner">
        <div class="voice__head section-header">
          <p class="section-header__entitle">voice</p>
          <h2 class="section-header__jatitle">お客様の声</h2>
        </div>
        <div class="voice__items voice-cards">
        <?php
          $args = [
            'post_type' => 'voice', // カスタム投稿名が「gourmet」の場合
            'posts_per_page' => 2, // 表示する数
          ];
          $my_query = new WP_Query($args); ?>

        <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <!-- ▽ ループ開始 ▽ -->
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
                  <h3 class="voice-card__title"><?php the_title(); ?></h3>
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
                    <?php the_field('voice_2'); ?>
                  </p>
                </div>
              </div>
            </div>
          <!-- △ ループ終了 △ -->
          <?php endwhile; ?>
        <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
        <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="voice__btn">
          <a href="<?php echo get_post_type_archive_link( 'voice' ); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
        </div>
      </div>
    </section>
    <section class="price top-price">
      <div class="price__inner inner">
        <div class="price__head section-header">
          <p class="section-header__entitle">price</p>
          <h2 class="section-header__jatitle">料金一覧</h2>
        </div>
        <div class="price__content">
          <div class="price__img js-inview">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img-sp.jpg" media="(max-width: 769px)" alt="ウミガメの画像" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img-pc.jpg" alt="サンゴの画像">
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
                  <p class="lecture__course"><?php echo $fields['group1-1']; ?></p>
                  <span class="lecture__pay"><?php echo $fields['group1-2']; ?></span>
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
                  <p class="lecture__course"><?php echo $fields['group2-1']; ?></p>
                  <span class="lecture__pay"><?php echo $fields['group2-2']; ?></span>
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
                  <p class="lecture__course"><?php echo $fields['group3-1']; ?></p>
                  <span class="lecture__pay"><?php echo $fields['group3-2']; ?></span>
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
                  <p class="lecture__course"><?php echo $fields['group4-1']; ?></p>
                  <span class="lecture__pay"><?php echo $fields['group4-2']; ?></span>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="<?php echo home_url('/price'); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>