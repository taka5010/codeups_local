<aside class="sub-2column__sideber sideber">
  <div class="sideber__contents">
    <h2 class="sideber__header">人気記事</h2>
    <div class="sideber__articles articles-cards">
      <?php
        $popular_post_args = array(
          'post_type'        => 'post',
          'posts_per_page'   => 3,
          'ignore_sticky_posts' => true,
          'meta_key'         => 'views',
          'orderby'          => 'meta_value_num',
          'order'            => 'DESC',
        );
        $post_query = new WP_Query( $popular_post_args );
        if ( $post_query->have_posts() ) :
          while ( $post_query->have_posts() ) :
            $post_query->the_post();
      ?>
      <article class="articles-cards__item article-card">
        <a href="<?php the_permalink(); ?>">
          <figure class="article-card__img">
            <?php if ( get_the_post_thumbnail() ) : ?>
            <img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>"
              alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
            <?php else : ?>
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/common/no-img.jpg"
              alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
            <?php endif; ?>
          </figure>
          <div class="article-card__body">
            <date class="article-card__date"><?php echo esc_html( get_the_date() ); ?></date>
            <div class="article-card__text">
              <?php
                $title = ( mb_strlen( $post->post_title ) > 10 ) ? mb_substr( $post->post_title, 0, 10 ) . '...' : $post->post_title;
                echo esc_html( $title );
              ?>
            </div>
          </div>
        </a>
      </article>
      <?php
          endwhile;
          else :
        ?>
      <p>ブログは準備中です。</p>
      <?php endif; ?>
    </div>
    <?php if ( $post_query->have_posts() ) : ?>
    <div class="sideber__btn">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="button"><span
          class="button__text">view more</span><span class="button__arrow"></span></a>
    </div>
    <?php endif; ?>
  </div>

  <div class="sideber__contents">
    <h2 class="sideber__header">口コミ</h2>
    <div class="sideber__reputations reputations-cards">
      <?php
        $popular_post_args = array(
          'post_type'        => 'voice',
          'posts_per_page'   => 1,
          'ignore_sticky_posts' => true,
          'orderby'          => 'date',
          'order'            => 'DESC',
        );
        $post_query = new WP_Query( $popular_post_args );
        if ( $post_query->have_posts() ) :
          while ( $post_query->have_posts() ) :
            $post_query->the_post();
      ?>
      <div class="reputations-cards__item reputation-card">
        <figure class="reputation-card__img">
          <?php if ( get_the_post_thumbnail() ) : ?>
          <img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>"
            alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
          <?php else : ?>
          <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/common/no-img.jpg"
            alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
          <?php endif; ?>
        </figure>
        <div class="reputation-card__body">
          <span class="reputation-card__category"><?php echo esc_html( get_field( 'voice_1' ) ); ?></span>
          <div class="reputation-card__text">
            <?php
              $title = ( mb_strlen( $post->post_title ) > 20 ) ? mb_substr( $post->post_title, 0, 20 ) . '...' : $post->post_title;
              echo esc_html( $title );
            ?>
          </div>
        </div>
      </div>
      <?php
      endwhile;else :
      ?>
      <p>お客様のお声は準備中です。</p>
      <?php endif; ?>
    </div>
    <?php if ( $post_query->have_posts() ) : ?>
    <div class="sideber__btn">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>" class="button"><span
          class="button__text">view more</span><span class="button__arrow"></span></a>
    </div>
    <?php endif; ?>
  </div>


  <div class="sideber__contents">
    <h2 class="sideber__header">キャンペーン</h2>
    <div class="sideber__campaigns">
      <div class="sidebar__items campaign-cards">
        <?php
          $popular_post_args = array(
            'post_type'        => 'campaign',
            'posts_per_page'   => 2,
            'ignore_sticky_posts' => true,
            'orderby'          => 'date',
            'order'            => 'DESC',
          );
          $post_query = new WP_Query( $popular_post_args );
          if ( $post_query->have_posts() ) :
            while ( $post_query->have_posts() ) :
              $post_query->the_post();
        ?>
        <div class="campaign-cards__item campaign-card">
          <figure class="campaign-card__img">
            <?php if ( get_the_post_thumbnail() ) : ?>
            <img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>"
              alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
            <?php else : ?>
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/common/no-img.jpg"
              alt="<?php echo esc_attr( the_title() ); ?>のアイキャッチ画像">
            <?php endif; ?>
          </figure>
          <div class="campaign-card__body campaign-card__body--campaign">
            <div class="campaign-card__header campaign-card__header--campaign">
              <span class="campaign-card__category">
                <?php
                  $terms = get_the_terms( $post->ID, 'campaign_category' );
                  if ( ! empty( $terms ) ) {
                    foreach ( $terms as $term ) :
                      echo esc_html( $term->name );
                    endforeach;
                  } else {
                    echo '未分類';
                  }
                ?>
              </span>
              <h3 class="campaign-card__title campaign-card__title--big">
                <?php
                  $title = ( mb_strlen( $post->post_title ) > 15 ) ? mb_substr( $post->post_title, 0, 15 ) . '...' : $post->post_title;
                  echo esc_html( $title );
                ?>
              </h3>
            </div>
            <div class="campaign-card__info campaign-card__info--campaign">
              <div class="campaign-card__text">全部コミコミ(お一人様)</div>
              <div class="campaign-card__pay">
                <p class="campaign-card__pay-pre">¥<?php echo esc_html( get_field( 'price' ) ); ?></p>
                <p class="campaign-card__pay-post">¥<?php echo esc_html( get_field( 'price_down' ) ); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php
            endwhile;
          else :
        ?>
        <p>現在キャンペーンはございません。</p>
        <?php endif; ?>
      </div>
      <?php if ( $post_query->have_posts() ) : ?>
      <div class="sideber__btn">
        <a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>" class="button"><span class="button__text">view
            more</span><span class="button__arrow"></span></a>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="sideber__contents">
    <h2 class="sideber__header">アーカイブ</h2>
    <div class="sideber__time">
      <div class="sideber__date">
        <?php
      $years = $wpdb->get_col( "SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC" );
      if ( empty( $years ) ) :
        echo '<p>投稿がありません</p>';
      else :
        foreach ( $years as $year ) :
          // その年に公開された投稿があるか確認
          $year_query = new WP_Query( array(
            'year' => $year,
            'post_status' => 'publish',
          ) );
          if ( $year_query->have_posts() ) :
    ?>
        <div class="sideber__year"><?php echo esc_html( $year ); ?></div>
        <ul class="sideber__month">
          <?php
        $months = $wpdb->get_col( "SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND YEAR(post_date) = $year ORDER BY post_date DESC" );
        foreach ( $months as $month ) :
          // その月に公開された投稿があるか確認
          $month_query = new WP_Query( array(
            'year' => $year,
            'monthnum' => $month,
            'post_status' => 'publish',
          ) );
          if ( $month_query->have_posts() ) :
            $dateObj   = DateTime::createFromFormat( '!m', $month );
            $monthName = $dateObj->format( 'n' ); // 12
            $post_count = count( get_posts( array(
              'year'        => $year,
              'monthnum'    => $month,
              'numberposts' => -1,
            ) ) );
            $link = get_month_link( $year, $month );
      ?>
          <li><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $monthName ); ?>月
              (<?php echo esc_html( $post_count ); ?>)</a></li>
          <?php endif; endforeach; ?>
        </ul>
        <?php endif; endforeach; endif; ?>
      </div>
    </div>


  </div>
</aside>