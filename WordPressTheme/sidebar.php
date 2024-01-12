<aside class="sub-2column__sideber sideber">
          <div class="sideber__contents">
            <h2 class="sideber__header">人気記事</h2>
            <div class="sideber__articles articles-cards">
            <?php
              $popular_post_args = array(
                'post_type'		=> 'post',	// 投稿タイプ
                'posts_per_page' => 3,			// ページ内投稿数
                'ignore_sticky_posts '=> true,	// 先頭固定表示を無視する
                'meta_key'		=> 'views',		// カスタムフィールド名
                'orderby'		=> 'meta_value_num',	// カスタムフィールドの値で並べ替え
                'order'			=> 'DESC',		// 降順
              );
                  $post_query = new WP_Query( $popular_post_args );
                  if( $post_query->have_posts() ):
                    while( $post_query->have_posts() ):
                      $post_query->the_post();
                ?>
                <!-- ループ開始 -->

                <article class="articles-cards__item article-card">
                <a href="<?php the_permalink(); ?>">
                <figure class="article-card__img">
                    <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php endif; ?>
                  </figure>
                  <div class="article-card__body">
                    <date class="article-card__date"><?php the_date(); ?></date>
                    <div class="article-card__text">
                      <?php
                        if(mb_strlen($post->post_title)>10) {
                          $title= mb_substr($post->post_title,0,10) ;
                            echo $title . '...';
                          } else {
                            echo $post->post_title;
                          }
                        ?>                      
                    </div>
                  </div>
                </a>
              </article>
                
							<!-- ループ終了 -->
                <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                ?>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">口コミ</h2>
            <div class="sideber__reputations reputations-cards">
            <?php
                  $popular_post_args = array(
                    'post_type'		=> 'voice',	// 投稿タイプ
                    'posts_per_page' => 1,							// ページ内投稿数
                    'ignore_sticky_posts '=> true,					// 先頭固定表示を無視する
                    'orderby'		=> 'date',						// 日付順
                    'order'			=> 'DESC',						// 降順
                  );
                  $post_query = new WP_Query( $popular_post_args );
                  if( $post_query->have_posts() ):
                    while( $post_query->have_posts() ):
                      $post_query->the_post();
                ?>
                <!-- ループ開始 -->
                <div class="reputations-cards__item reputation-card">
                <figure class="reputation-card__img">
                    <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php endif; ?>
                  </figure>
                <div class="reputation-card__body">
                  <span class="reputation-card__category"><?php the_field('voice_1'); ?></span>
                  <div class="reputation-card__text"><?php
if(mb_strlen($post->post_title)>20) {
  $title= mb_substr($post->post_title,0,20) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></div>
                </div>
              </div>
							<!-- ループ終了 -->
                <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                ?>
            </div>
            <div class="sideber__btn">
              <a href="<?php echo get_post_type_archive_link( 'voice' ); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">キャンペーン</h2>
            <div class="sideber__campaigns">
              <div class="sidebar__items campaign-cards">
                <!-- 投稿 -->
                <?php
                  $popular_post_args = array(
                    'post_type'		=> 'campaign',	// 投稿タイプ
                    'posts_per_page' => 2,							// ページ内投稿数
                    'ignore_sticky_posts '=> true,					// 先頭固定表示を無視する
                    'orderby'		=> 'date',						// 日付順
                    'order'			=> 'DESC',						// 降順
                  );
                  $post_query = new WP_Query( $popular_post_args );
                  if( $post_query->have_posts() ):
                    while( $post_query->have_posts() ):
                      $post_query->the_post();
                ?>
                <div class="campaign-cards__item campaign-card">
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
                    <h3 class="campaign-card__title campaign-card__title--big "><?php
if(mb_strlen($post->post_title)>15) {
  $title= mb_substr($post->post_title,0,15) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
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
                </div>
                </div>
                <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                ?>
              </div>
              <div class="sideber__btn">
                <a href="<?php echo home_url('/campaign'); ?>" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
              </div>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">アーカイブ</h2>
            <div class="sideber__time">
              <div class="sideber__date">
               <?php
$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC");
foreach($years as $year) :
?>
    <div class="sideber__year"><?php echo $year; ?></div>
    <ul class="sideber__month">
    <?php
    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND YEAR(post_date) = $year ORDER BY post_date DESC");

    foreach($months as $month) :
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('n'); // 12
        $post_count = count(get_posts(array(
            'year' => $year,
            'monthnum' => $month,
            'numberposts' => -1
        )));
        $link = get_month_link($year, $month);
    ?>
        <li><a href="<?php echo $link; ?>"><?php echo $monthName; ?>月 (<?php echo $post_count; ?>)</a></li>
    <?php endforeach; ?>
    </ul>
<?php endforeach; ?>

              </div>
            </div>
          </div>

          <!-- test -->


          <!-- test-fin -->



        </aside>