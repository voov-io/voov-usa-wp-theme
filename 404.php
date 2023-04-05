<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/

?>
<?php get_header();?>
    <h1 style="padding-top:4em;margin-top:0" class="title center">Something went wrong </h1>
    <p class="flex center">We are working hard to fix it</p>
    <div class="flex center">
        <a style="margin-bottom:4em;" href="<?php echo home_url();?>" class="btn green">Please go back homepage</a>
    </div>
    <picture class="flex center">
        <img style="width:50%" src="<?php echo ImagesPath?>/animation_voov-guys-working.gif" alt="404 img">
    </picture>
<?php get_footer();?>