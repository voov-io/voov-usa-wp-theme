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
        <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-53HX2LZ');
		</script>
	<!-- End Google Tag Manager -->
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '217068084278854');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=217068084278854&ev=PageView&noscript=1"
    /></noscript>
<!-- End Meta Pixel Code -->
    <?php wp_head(); ?> 
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>

</head>
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
                    <img width="180" height="55"  class="logo" src="<?php echo ImagesPath?>/VOOV_NIC_BRANDBOARD-04.webp" alt="VOOV Logo">
            </picture>
            <?php endif?>
            </a>
            <nav class="menu__container " id="btns__menu">
                <ul class="menu--items flex ">

                    <li class="item withsubitems" <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> >Services<img width="10" height="10" class="tringleicon" src="<?php echo IconsPath?>/triangle-menu.svg" alt="icon triangle">
                        
                        <ul class="subitems-container">
                            <li><a class="subitem" href="<?php echo home_url();?>/fractional-marketing-solutions">Fractional Marketing Solutions</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/marketing-specialist">Marketing Specialists</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/executive-associates">Executive Associates</a></li>
                            <li><a class="subitem" href="<?php echo home_url();?>/inside-sales-service">Inside Sales Services</a></li>
                        </ul>
                    </li>
                    <li class="item"><a  <?php if(!is_front_page()):?> style="color:black!important" <?php endif?> href="<?php echo home_url();?>/blog">Blog</a></li>
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
