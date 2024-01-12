<?php get_header('404'); ?>
<main>
    <div class="nf">
      <div class="breadcrumb">
        <div class="breadcrumb__inner inner">
          <span>TOP > 404</span>
        </div>
    </div>
      <div class="nf__inner inner">
        <div class="nf__box">
          <h1 class="nf__title">404</h1>
          <p class="nf__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
          <div class="nf__btn">
            <a href="<?php echo home_url(); ?>/" class="button button--404"><span class="button__text button__text--404">page TOP</span><span class="button__arrow button__arrow--404"></span></a>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer('sub'); ?>