<?php get_header(); ?>

  <main>
    <section class="mv">
      <div class="mv__wrapper">
        <div class="mv__img-title">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mv_text_pc.svg" alt="">
        </div>
        <div class="swiper">
          <div class="mv__img swiper-wrapper">
            <picture class="js-mv swiper-slide">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/top_mv_1.jpg" media="(min-width:768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_mv_1_sp.jpg" alt="">
            </picture>
            <picture class="js-mv swiper-slide">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/top_mv_2.jpg" media="(min-width:768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_mv_2_sp.jpg" alt="">
            </picture>
            <picture class="js-mv swiper-slide">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/top_mv_3.jpg" media="(min-width:768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_mv_3_sp.jpg" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="news__inner">
        <div class="section__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/title_icon.png" alt="">
        </div>
        <h2 class="section__title">
          お知らせ
        </h2>
        <h3 class="section__sub-title">
          News
        </h3>
        <div class="news__wrapper">
        <?php
          $args = array(
              'post_type' => 'post', // 投稿タイプ
              'posts_per_page' => 3, // 記事取得数
              );
          ?>
          <?php $news_query = new WP_Query($args) ?>
          
          <?php if ( $news_query->have_posts() ) : ?>
          <?php while ( $news_query->have_posts() ) :  $news_query->the_post();?>  
            <div id="accordion" class="news-main-container">
              <a href="<?php the_permalink(); ?>" class="news-text">
              <div class="news-main-item-meta">
                <h4 class="news-title js-news-title">
                  <time class="date" datetime="2022-03-31">
                    <?php the_time('Y/n/j'); ?>
                  </time>
                  <div class="news-sub-title">
                  <?php $this_categories = get_the_category();
                    if ( $this_categories ) {
                        $this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );
                        $this_category_name  = $this_categories[0]->name;
                        echo '<span class="orange" style="' . esc_attr( 'color:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';
                    } ?>
                  </div>
                </h4>
                <div class="news-main-content">
                  <p><?php the_title(); ?></p>
                </div>
              </div>
            </a>
            </div>
          <!-- <div id="accordion" class="news-container">
            <a href="<?php the_permalink(); ?>" class="news-text">
            <div class="news-item-meta">
              <h4 class="news-title js-news-title">
                <time class="date" datetime="2022-03-31">
                  2022.03.31
                </time>
                <span class="news-sub-title red">営業時間について</span>
              </h4>
              <div class="news-content">
                <p>コロナウイルス拡大に伴う営業時間短縮のお知らせ</p>
              </div>
            </div>
            </a>
          </div>
          <div id="accordion" class="news-container">
            <a href="<?php the_permalink(); ?>" class="news-text">
            <div class="news-item-meta">
              <h4 class="news-title js-news-title">
                <time class="date" datetime="2022-03-31">
                  2022.03.31
                </time>
                <span class="news-sub-title blue">営業時間について</span>
              </h4>
              <div class="news-content">
                <p>コロナウイルス拡大に伴う営業時間短縮のお知らせ</p>
              </div>
            </div>
          </a>
          </div> -->
                        <!--この中に処理を入れる-->
          <?php endwhile; ?>
          </div>
          <?php else: ?>
          <!-- ここに記事がなかった場合の処理を書く -->
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div>
        <a href="<?php echo esc_url( home_url( 'archive' ) ); ?>"><span class="btn bgleft"><span>もっと見る</span></a>
      </div>
    </section>

    <section class="introduction">
      <div class="introduction__inner">
        <div class="introduction-inner-in">
          <div class="introduction__wrop">
            <div class="introduction__img img-one">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_about_2.jpg" alt="">
            </div>
            <div class="introduction__img img-two">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_about_1.jpg" alt="">
            </div>
          </div>
          <div class="introduction__wrapper">
            <div class="section__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/title_icon.png" alt="">
            </div>
            <h2 class="section__title">
              クリニックのご紹介
            </h2>
            <h3 class="section__sub-title">
              About
            </h3>
            <div class="introduction__title">
              安心して相談できるかかりつけ医
            </div>
            <div class="introduction__text">
              地域の皆様の第一の相談相手になりたい<br> 頭のことなら”渡邉脳神経外科クリニック”<br> そんなニーズにお応えできるクリニックを目指しています。
            </div>
            <a href="<?php echo esc_url( home_url( 'about' ) ); ?>" class="btn bgleft introduction-btn"><span>クリニックのご紹介</span></a>
          </div>
        </div>
      </div>
    </section>

    <section class="Treatment">
      <div class="Treatment__inner">
        <div class="Treatment-inner-in">
          <div class="Treatment__wrop">
            <div class="Treatment__img img-three">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_treatment_2.jpg" alt="">
            </div>
            <div class="Treatment__img img-four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_treatment_1.jpg" alt="">
            </div>
          </div>
          <div class="Treatment__wrapper">
            <div class="section__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/title_icon.png" alt="">
            </div>
            <h2 class="section__title">
              診療科目
            </h2>
            <h3 class="section__sub-title">
              Treatment
            </h3>
            <div class="Treatment__title">
              早期発見・早期治療が<br> 大事な脳の病気。
            </div>
            <div class="Treatment__text">
              頭の専門医として、脳卒中や認知症だけではなく、<br>頭痛やめまい、しびれなどの<br> 日常的な症状まで幅広く治療を行っております。<br> どんなに小さな悩みでもお気軽にご相談ください。
            </div>
            <a href="<?php echo esc_url( home_url( 'Treatment' ) ); ?>" class="btn bgleft Treatment-btn"><span>もっと見る</span></a>
          </div>
        </div>
      </div>
    </section>


    <section class="Contact">
      <div class="Contact__inner">
        <div class="Contact-inner-in">
          <div class="Contact__wrop">
            <div class="Contact__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_contact.jpg" alt="">
            </div>
          </div>
          <div class="Contact__wrapper">
            <div class="section__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/title_icon.png" alt="">
            </div>
            <h2 class="section__title">
              お問い合わせ
            </h2>
            <h3 class="section__sub-title">
              Contact
            </h3>
            <div class="Contact__text">
              当クリニックは地域の皆様の第一の相談相手を 目指しております。<br> 何でもお気軽にお問合せください。
            </div>
            <a href="<?php echo esc_url( home_url( 'Contact' ) ); ?>" class="btn bgleft Contact-btn"><span>お問い合わせへ</span></a>
          </div>
        </div>
      </div>
    </section>

    <section class="Access">
      <div class="Access__inner">
        <div class="Access__wrapper">
          <div class="section__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/title_icon.png" alt="">
          </div>
          <h2 class="section__title">
            アクセス
          </h2>
          <h3 class="section__sub-title">
            Access
          </h3>
          <div class="Access__in">
            <div class="Access__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747798841974!2d139.74285797627078!3d35.658584831216885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1690689610412!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="Access__text">
              病院の敷地内に6台の駐車スペースを ご用意しております。<br> ※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。
            </div>
            <div class="Access__schedule">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top.time.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
