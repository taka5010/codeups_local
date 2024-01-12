<?php get_header(); ?>

<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_price-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_price-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">price</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>
    
    <section class="sub-content sub-content-layout sub-price">
      <div class="sub-price__inner inner">
        <div class="sub-price__menu price-menu">
          <div id="price1" class="price-menu_item price-item">
            <h2 class="price-item__header">ライセンス講習</h2>
            <dl class="price-item__body">
            <?php
              $faq = SCF::get('price-group1');
              foreach ($faq as $fields ) {
              ?>
              <dt class="price-item__left"><?php echo $fields['group1-1']; ?></dt>
              <dd class="price-item__right"><?php echo $fields['group1-2']; ?></dd>
              <?php } ?>
            </dl>
          </div>

          <div id="price2" class="price-menu_item price-item">
            <h2 class="price-item__header">体験ダイビング</h2>
            <dl class="price-item__body">
            <?php
              $faq = SCF::get('price-group2');
              foreach ($faq as $fields ) {
              ?>
              <dt class="price-item__left"><?php echo $fields['group2-1']; ?></dt>
              <dd class="price-item__right"><?php echo $fields['group2-2']; ?></dd>
              <?php } ?>
            </dl>
          </div>
          <div id="price3" class="price-menu_item price-item">
            <h2 class="price-item__header">ファンダイビング</h2>
            <dl class="price-item__body">
            <?php
              $faq = SCF::get('price-group3');
              foreach ($faq as $fields ) {
              ?>
              <dt class="price-item__left"><?php echo $fields['group3-1']; ?></dt>
              <dd class="price-item__right"><?php echo $fields['group3-2']; ?></dd>
              <?php } ?>
            </dl>
          </div>
          <div id="price4" class="price-menu_item price-item">
            <h2 class="price-item__header">スペシャルダイビング</h2>
            <dl class="price-item__body">
            <?php
              $faq = SCF::get('price-group4');
              foreach ($faq as $fields ) {
              ?>
              <dt class="price-item__left"><?php echo $fields['group4-1']; ?></dt>
              <dd class="price-item__right"><?php echo $fields['group4-2']; ?></dd>
              <?php } ?>
            </dl>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>