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
    <!-- Proudly developed by Jehaann Manzanares - email me jehaann07carlos@gmail.com-->
    <?php wp_head(); ?> 
</head>
<?php if(!is_front_page()):?>
<style>
    :root{
        --white:#009FEF
    }
</style>
<?php endif?>
<body  <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HX2LZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
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
                    <img width="180" height="55"  class="logo" src="<?php echo ImagesPath?>/VOOVLogo.webp" alt="VOOV Logo">
            </picture>
            <?php endif?>
            </a>
            <nav class="menu__container " id="btns__menu">
                <ul class="menu--items flex ">
                    <li class="item withsubitems"><a  <?php if(!is_front_page()):?> style="color:black!important;" <?php endif?> href="<?php echo home_url();?>/about-us">About Us <img width="10" height="10" class="tringleicon" src="<?php echo IconsPath?>/triangle-menu.svg" alt="icon triangle"></a>
                        <ul class="subitems-container about">
                            <li><a class="subitem" href="<?php echo home_url();?>/about-us#story">Our story</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/about-us#team">Our team</a></li>
                        </ul>
                    </li>
                    <li class="item withsubitems" <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> >Services<img width="10" height="10" class="tringleicon" src="<?php echo IconsPath?>/triangle-menu.svg" alt="icon triangle">
                        
                        <ul class="subitems-container">
                            <li><a class="subitem" href="<?php echo home_url();?>/fractional-marketing-solutions">Real Estate Staffing Solutions</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/marketing-specialist">MarketingAgency</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/executive-associates">Skill Cloud Staffing</a></li>
                        </ul>
                    </li>
                    <li class="item"><a  <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> href="<?php echo home_url();?>/blog">Company Resources</a></li>
                    <li class="item"><a href="<?php echo home_url();?>/contact" class="btn yellow">Contact Us</a></li>
                </ul>
                <button class="McButton" id="McButton"  aria-label="hambuerguer menu">
                            <b id="McBar1"></b>
                            <b id="McBar2"></b>
                            <b id="McBar3"></b>
                </button>
            </nav>
        </div>
     </header>
