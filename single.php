<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/
?>
    <!-- Header -->
    <?php get_header(); ?>

          <?php
            $options = get_theme_mod('code_settings');
            if ( !empty($options['banner']) ) {
              $banner = $options['banner'];
            }else {
              $banner = themepath . 'slide1.jpg';
            }

           ?>
          <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
      <!-- Banner -->
      <section class="container banner-principal">

            <?php if (  has_post_thumbnail() ): ?>

            <?php $banner_article = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

            <div class="banner" style="background-image: url('<?php echo $banner_article[0];?>');"></div>

            <?php else: ?>

            <div class="banner" style="background-image: url('<?php echo $banner ?>');"></div>

            <?php endif; ?>

            <div class="overlay-banner"></div>
            <div class="texto-banner">
              <h1><?php the_title(); ?></h1>
            </div>

      </section> <!-- Banner -->

      <section class="blog">
        <div class="container">
          <div class="listado-articulos">

            <article <?php post_class ('article single'); ?> id="post-<?php the_ID();?>">



              <div class="article-content">
                  <?php the_content(); ?>
              </div> <!-- /.article-content -->

  					</article>	<!-- /.article -->
          <?php endwhile; ?>
          <?php  endif; ?>
          </div>  <!-- /listado-articulos -->

        </div>
      </section> <!-- /Blog -->
    <?php get_footer(); ?>
  </body>
</html>
