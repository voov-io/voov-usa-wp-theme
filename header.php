<!DOCTYPE html>
<?php /*
@package voovusa
@subpackage voovusa
@since 1.0
*/

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOOV</title>
    <link rel="shortcut icon" href="<?php echo themepath?>/favicon.png" type="image/x-icon">
    <?php wp_head(); ?> 
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
</head>
<body  <?php body_class();?>>
     <header   <?php if(!is_front_page()):?> style="background-color:white;color:black!important;position:initial" <?php endif?>>
        <div class="container flex space-between">
            <a href="<?php echo home_url();?>">
            <?php if(!is_front_page()):?>
                <picture class="logo__container">
                    <img width="180" height="55" class="logo" src="<?php echo ImagesPath?>/VOOVLogo.webp" alt="VOOV Logo">
                </picture>
            <?php endif?>
            <?php if(is_front_page()):?>
            <picture class="logo__container">
                    <source media="(min-width:575px)" srcset="<?php echo ImagesPath?>/VOOVLogo.webp">
                    <img width="180" height="55"  class="logo" src="<?php echo ImagesPath?>/VOOV_NIC_BRANDBOARD-04.webp" alt="VOOV Logo">
            </picture>
            <?php endif?>
            </a>
            <nav class="menu__container " id="btns__menu">
                <ul class="menu--items flex ">

                    <li class="item"><a  <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> href="<?php echo home_url();?>/services">Services</a></li>
                    <li class="item"><a  <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> href="<?php echo home_url();?>/blog">Blog</a></li>
                    <li><a href="<?php echo home_url();?>/contact" class="btn yellow">Contact Us</a></li>
                </ul>
                <button class="McButton" id="McButton"  aria-label="hambuerguer menu">
                            <b id="McBar1"></b>
                            <b id="McBar2"></b>
                            <b id="McBar3"></b>
                </button>
            </nav>
        </div>
     </header>
