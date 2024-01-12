<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-info-sp.jpg" media="(max-width: 769px)"  />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-info-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">information</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>

    <section id="infomenu" class="sub-content sub-content-layout sub-information">
      <div class="sub-information__inner inner">
        <div  class="sub-information__menu">
          <div class="sub-information__items">
            <div class="sub-information__item sub-information__item-1 js-tab-switch is-active" data-tab="tab-1"><span>ライセンス<br>情報</span></div>
            <div class="sub-information__item sub-information__item-2 js-tab-switch" data-tab="tab-2">ファン<br>ダイビング</div>
            <div class="sub-information__item sub-information__item-3 js-tab-switch" data-tab="tab-3">体験<br>ダイビング</div>
          </div>
          <div class="sub-information__contents">
            <div id="info1" class="sub-information__content js-tab-cts is-active" data-tab="tab-1">
              <div class="sub-information__text ">
                <div class="sub-information__header">
                  <p class="sub-information__title">ライセンス講習</p>
                </div>
                <div class="sub-information__body">
                  <p class="sub-information__detail">
                    泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                  </p>
                </div>
              </div>
              <div class="sub-information__img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu1-sp.jpg" media="(max-width: 769px)" alt="ダイバーたちの画像" />
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu1-pc.jpg" alt="サンゴの画像">
                </picture>
              </div>
            </div>
            <div id="info2" class="sub-information__content js-tab-cts" data-tab="tab-2">
              <div class="sub-information__text ">
                <div class="sub-information__header">
                  <p class="sub-information__title">ファンダイビング</p>
                </div>
                <div class="sub-information__body">
                  <p class="sub-information__detail">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p>
                </div>
              </div>
              <div class="sub-information__img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu2-sp.jpg" media="(max-width: 769px)" alt="魚群の画像" />
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu2-pc.jpg" alt="サンゴの画像">
                </picture>
              </div>
            </div>
            <div id="info3" class="sub-information__content js-tab-cts" data-tab="tab-3">
              <div class="sub-information__text ">
                <div class="sub-information__header">
                  <p class="sub-information__title">体験ダイビング</p>
                </div>
                <div class="sub-information__body">
                  <p class="sub-information__detail">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p>
                </div>
              </div>
              <div class="sub-information__img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu3-sp.jpg" media="(max-width: 769px)" alt="魚の画像" />
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_menu3-pc.jpg" alt="サンゴの画像">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>