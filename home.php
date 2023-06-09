<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/
?>
<?php get_header(); ?>
<section class="indexpages">
  <h1 style="color:black" class="title  center">Blog</h1>
  <div class="container grid">
        <?php if (have_posts() ): while (have_posts()): the_post();?>
          <article <?php post_class ('article'); ?> id="post-<?php the_ID();?>">
            <?php if (! has_post_format('video') && ! has_post_format('audio')) : ?>
                <?php if (has_post_thumbnail()):?>
                  <a class="container-postimg" href="<?php the_permalink(); ?>">
                      <?php  the_post_thumbnail('blog-size-image');?>
                  </a>
        <?php endif; ?>

        <?php endif; ?>
        <div class="article-content">
            <p class="article-category"><?php the_category(','); ?></p>
            <p class="article-date"><?php the_time(get_option('date_format')); ?></p>
            <h2 class="title-home"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?>   </a></h2>
            <p><?php the_excerpt(); ?></p>
         </div>
    </article>	<!-- /.article -->
    <?php endwhile; ?>
    <?php else:?>

    <?php get_template_part('template-parts/content','nopost'); ?>
    <?php endif; ?>


    </div>
    </section>
    <?php get_template_part('template-parts/contact-us'); ?>
<?php get_footer()?>