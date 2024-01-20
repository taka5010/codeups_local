<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_price-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_price-pc.jpg" alt="">
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
        <h2 class="price-item__header"><?php echo SCF::get_option_meta('price-options','price1'); ?></h2>
        <dl class="price-item__body">
          <?php
            $fields = SCF::get_option_meta( 'price-options', 'price-group1' );
            foreach ( $fields as $field_name => $fields_value ) {
          ?>
          <dt class="price-item__left"><?php echo $fields_value['price-group1-1']; ?></dt>
          <dd class="price-item__right">￥<?php echo $fields_value['price-group1-2']; ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div id="price2" class="price-menu_item price-item">
        <h2 class="price-item__header"><?php echo SCF::get_option_meta('price-options','price2'); ?></h2>
        <dl class="price-item__body">
          <?php
            $fields = SCF::get_option_meta( 'price-options', 'price-group2' );
            foreach ( $fields as $field_name => $fields_value ) {
          ?>
          <dt class="price-item__left"><?php echo $fields_value['price-group2-1']; ?></dt>
          <dd class="price-item__right">￥<?php echo $fields_value['price-group2-2']; ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div id="price3" class="price-menu_item price-item">
        <h2 class="price-item__header"><?php echo SCF::get_option_meta('price-options','price3'); ?></h2>
        <dl class="price-item__body">
          <?php
            $fields = SCF::get_option_meta( 'price-options', 'price-group3' );
            foreach ( $fields as $field_name => $fields_value ) {
          ?>
          <dt class="price-item__left"><?php echo $fields_value['price-group3-1']; ?></dt>
          <dd class="price-item__right">￥<?php echo $fields_value['price-group3-2']; ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div id="price4" class="price-menu_item price-item">
        <h2 class="price-item__header"><?php echo SCF::get_option_meta('price-options','price4'); ?></h2>
        <dl class="price-item__body">
          <?php
            $fields = SCF::get_option_meta( 'price-options', 'price-group4' );
            foreach ( $fields as $field_name => $fields_value ) {
          ?>
          <dt class="price-item__left"><?php echo $fields_value['price-group4-1']; ?></dt>
          <dd class="price-item__right">￥<?php echo $fields_value['price-group4-2']; ?></dd>
          <?php } ?>
        </dl>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>