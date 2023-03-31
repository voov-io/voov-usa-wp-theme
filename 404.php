<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/

?>
<?php get_header();?>
    <h1 style="padding-top:4em;margin-top:0" class="title center">Page no found</h1>
    <div class="flex center">
        <a style="margin-bottom:4em;" href="<?php echo home_url();?>" class="btn green">Go back homepage</a>

    </div>
    <img src="<?php echo ImagesPath?>/404 page.webp" alt="404 img">
<?php get_footer();?>