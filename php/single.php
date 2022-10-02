  <?php get_header(); ?>

  <div id="contents">
    <div id="conL">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <h2><?php the_title(); ?></h2>
          <p><?php the_time('Y年m月d日'); ?></p>


          <?php the_content(); ?>

      <?php endwhile;
      endif; ?>

      <a href="<?php echo home_url(); ?>/contact"><button class="btn1">お問い合わせ</button></a>

    </div><!-- /#conL -->

    <?php get_sidebar(); ?>

  </div><!-- /#contents -->

  <?php get_footer(); ?>