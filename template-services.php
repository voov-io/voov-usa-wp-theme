<?php
/*Template name: Services page


@package voovusa
@subpackage voovusa
@since 1.0
*/ 

?>
<?php get_header();?>
<section class="page-services">
    <div class="container">
        <div class="copy-head grid center">
            <h1 class="title center">LOREM IPSUM DOLOR</h1>
            <p class="center">Lorem ipsum dolor sit amet consectetur. Sagittis vestibulum malesuada dictum ultrices arcu fermentum quis sit.</p>
            <a href="#contact-us" class="btn Red">LETS CONNECT</a>
                <img class="center" src="<?php echo ImagesPath?>/profesional-marketing-virtual-assiate.png" alt="Marketing virtaul associate guy">
        </div>
    </div>
        <div class="circle red"></div>
        <div class="circle BlueSky"></div>
        <div class="circle BlueSky big"></div>
</section>
<section class="about-service">
    <div class="container flex space-between">
        <div class="container-copy">
            <h2 class="title">Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Nisl tortor tristique eu enim sapien. Risus convallis mattis diam proin ante nibh ut quis mauris.

                Nulla magna sed vitae sit dui. Neque ut id in arcu felis facilisi. Tristique at quis in enim tincidunt. Cras turpis ut volutpat in sodales nec.</p>
        </div>
        <div class="container-img">
            <picture>
                <img width="100%" height="auto" src="<?php echo ImagesPath?>/Rectangle 90.png" alt="img related to service">
            </picture>
        </div>
    </div>
    <h3 class="center">Lorem ipsum dolor sit amet</h3>
    <div class="container grid center">
        <div class="sub-container-services ">
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Social Media Posting</h4>
        </div>
        <div class="sub-container-services ">
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Social Media Posting</h4>
        </div>
    </div>
</section>
<section class="call-to-action-v2">
    <div class="container flex space-around">
        <picture class="container-img">
            <img src="<?php echo ImagesPath?>/img call to action v2.png" alt="">
        </picture>
        <div class="container-copy">
            <h2>Take Your Real Estate<br> Business To The Next Level!</h2>
            <div class="btn-container flex">
                <a href="#contact-us" class="btn Red">Get Started</a>
            </div>
        </div>
    </div>
</section>
<section class="contact-us">
    <div class="container flex center">
        <div class="container-copy">
            <h2 class="title white">LOREM IPSUM DOLOR</h2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <div id="contact-us">
            <?php if(is_active_sidebar('contact-lead-widget'))
                    
                    dynamic_sidebar('contact-lead-widget');
                ?>
            </div>
        </div>
        <div class="container-img">
            <img src="<?php echo ImagesPath?>/img contact us.png" alt="Contact us voov women">
            <div class="circle green"></div>
            <div class="circle yellow"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>