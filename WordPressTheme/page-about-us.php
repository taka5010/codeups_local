<?php get_header(); ?>
<div class="sub-mv">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_aboutus-sp.jpg"
      media="(max-width: 769px)" />
    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mv_aboutus-pc.jpg" alt="シーサー画像">
  </picture>
  <div class="sub-mv__text">
    <h1 class="sub-mv__maintitle">about us</h1>
  </div>
</div>
<?php get_template_part('parts/breadcrumb') ?>

<div class="sub-content sub-content-layout sub-about">
  <div class="sub-about__inner inner">
    <div class="sub-about__wrapper">
      <div class="sub-about__images">
        <picture class="sub-about__left-image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about_img-left-pc.jpg"
            alt="シーサーの画像" media="(min-width: 768px)" type="image/png">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about_img-left-sp.jpg"
            alt="シーサーの画像">
        </picture>
        <picture class="sub-about__right-image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about_img-right-pc.jpg"
            alt="海中の魚の画像" media="(min-width: 768px)" type="image/png">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about_img-right-sp.jpg"
            alt="海中の魚の画像">
        </picture>
      </div>
      <div class="sub-about__text">
        <div class="sub-about__header">
          <p class="sub-about__title">Dive into <br>the Ocean</p>
        </div>
        <div class="sub-about__body">
          <p class="sub-about__detail">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $fields = SCF::get('gallery-imgs'); ?>
<?php if($fields[0]['img']): ?>
<section class="about-gallery about-gallery-layout">
  <div class="about-gallery__inner inner">
    <div class="about-gallery__header section-header">
      <p class="section-header__entitle">gallery</p>
      <h2 class="section-header__jatitle">フォト</h2>
    </div>
    <div class="about-gallery__items gallery">
      <?php foreach($fields as $field): ?>
      <div class="gallery__item js-modal">
        <img src="<?php echo esc_url(wp_get_attachment_url($field['img'])); ?>" alt="">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="about-gallery__grayDisplay"></div>
</section>
<?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>