<?php get_header(); ?>
<div id="slide">
  <ul class="slideInner">
    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icatch01.jpg" alt="" width="940" height="300" /></li>
    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icatch02.jpg" alt="" width="940" height="300" /></li>
    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icatch03.jpg" alt="" width="940" height="300" /></li>
  </ul>
  <div class="slidePrev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
  <div class="slideNext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
  <div class="controlNav"></div>
</div><!-- /#slide -->
<div id="contents">
  <div class="topNavi">
    <div class="topNaviColumn">
      <h2>社長メッセージ</h2>
      <div class="topNaviPhoto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo01.jpg" alt="" /></div>
      <p>ホームページを御覧いただきありがとうございます。弊社はお客様満足度を最優先いたします。</p>

    </div><!-- /.topNaviColumn -->
    <div class="topNaviColumn">
      <h2>事業内容</h2>
      <div class="topNaviPhoto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo02.jpg" alt="" /></div>
      <p>事業内容です。あいうえおかきくけこさしすせそたちつてとなにぬねの。</p>
      <p class="topNaviDetail"><a href="<?php echo home_url(); ?>/service">詳しくはこちら</a></p>
    </div><!-- /.topNaviColumn -->
    <div class="topNaviColumn">
      <h2>会社概要</h2>
      <div class="topNaviPhoto"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo03.jpg" alt="" /></div>
      <p>会社概要です。左右のコンテンツでテキスト量が異なっても、下の｢詳しくはこちら｣が揃うようになっています。</p>
      <p class="topNaviDetail"><a href="<?php echo home_url(); ?>/company">詳しくはこちら</a></p>
    </div><!-- /.topNaviColumn -->
  </div><!-- /.topNavi -->
  <div id="conL">
    <div class="information">
      <h2>INFORMATION</h2>
      <dl>
        <?php
        $infoPosts = get_posts('numberposts=3&category=4');
        foreach ($infoPosts as $post) :
        ?>
          <dt><?php the_time('Y-m-d'); ?></dt>
          <dd>
            <span class="tab tag_<?php $cat = get_the_category();
                                  $cat = $cat[0]; {
                                    echo $cat->slug;
                                  } ?>"><?php $cat = get_the_category();
                                        $cat = $cat[0]; {
                                          echo $cat->cat_name;
                                        } ?></span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
          </dd>
        <?php endforeach; ?>

        <?php
        $infoPosts = get_posts('numberposts=3&category=5');
        foreach ($infoPosts as $post) :
        ?>
          <dt><?php the_time('Y-m-d'); ?></dt>
          <dd>
            <span class="tab tag_<?php $cat = get_the_category();
                                  $cat = $cat[0]; {
                                    echo $cat->slug;
                                  } ?>"><?php $cat = get_the_category();
                                        $cat = $cat[0]; {
                                          echo $cat->cat_name;
                                        } ?></span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
          </dd>
        <?php endforeach; ?>
      </dl>
    </div><!-- /.information -->


    <div class="information">
      <h2>Blog</h2>
      <dl>
        <?php
        $infoPosts = get_posts('numberposts=3&category=6');
        foreach ($infoPosts as $post) :
        ?>
          <dt><?php the_time('Y-m-d'); ?></dt>
          <dd>
            <div class="b_img">
              <?php the_post_thumbnail('thumbside'); ?>
            </div>
            <div class="b_right">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </dd>
        <?php endforeach; ?>
      </dl>
    </div><!-- /.information -->

    <div class="submenu">
      <h3>サービス内容</h3>
      <p>ネット事業です。あいうえおかきくけこさしすせそたちつてとなにぬねのあいうえおかきくけこさしすせそたちつてとなにぬねのあいうえおかきくけこさしすせそたちつてとなにぬねの。</p>
      <ul>
        <li><a href="<?php echo home_url(); ?>/service#s1">ホームページ制作</a></li>
        <li><a href="<?php echo home_url(); ?>/service#s2">広告代理</a></li>
      </ul>
    </div><!-- /.submenu -->
    <div class="bnrL">
      <ul>
        <li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bnr_l.jpg" alt="" /></a></li>
        <li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bnr_l.jpg" alt="" /></a></li>
        <li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bnr_l.jpg" alt="" /></a></li>
      </ul>
    </div><!-- /.bnrL -->
  </div><!-- /.conL -->

  <?php get_sidebar(); ?>

</div><!-- /#contents -->

<?php get_footer(); ?>