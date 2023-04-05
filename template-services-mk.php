<?php
/*Template name: Services page MK


@package voovusa
@subpackage voovusa
@since 1.0
*/ 

?>
<?php get_header();?>
<section class="page-services">
    <div class="container">
        <div class="copy-head grid center">
            <h1 class="title center">MARKETING VIRTUAL ASSOCIATE</h1>
            <p class="center">Reach your Business Goals by Developing a Strategic Marketing Plan that meets your needs, budget and timeline </p>
            <a href="#contact-us" class="btn Red">START NOW </a>
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
            <h2 class="title">Maximize Your Business Potential with Our Expert Marketing Solutions</h2>
            <p id="paragraph1">Optimize your marketing plan with PPC campaigns, email systems, SEO strategies, and web development solutions.</p>
            <p id="paragraph2"></p>
            <br>
            <a id="btn-readmore" href="https://voov.io/fractional-marketing-solutions/" class="btn Red btn-read-more">Learn more</a>
        </div>
        <div class="container-img">
            <picture>
                <img id="img-service" width="100%" height="auto" src="<?php echo ImagesPath?>/bussinnes-guys-working.webp" alt="img related to service">
            </picture>
        </div>
    </div>
    <h3 class="center">Explore Our Smart Marketing Solutions</h3>
    <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="fractional" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Fractional <br>Services</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="social-media-management" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Search Engine Optimization (SEO).svg" alt="icon social media posting">
            </picture>
            <h4>Social Media <br>Management</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="mk-cordination" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Pay per click (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Marketing  <br>Coordination</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="copywriting" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Copywriting</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="GraphicDesign" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Graphic<br> Design</h4>
        </div>
    </div>
</section>
<section class="call-to-action-v2">
    <div class="container flex space-around">
        <picture class="container-img">
            <img src="<?php echo ImagesPath?>/img call to action v2.png" alt="profesiontal call to action">
            <div class="circle red"></div>
            <div class="circle BlueSky"></div>
        </picture>
        <div class="container-copy">
        <div class="circle green"></div>
            <h2>Take Your Real Estate<br> Business To The Next Level!</h2>
            <div class="btn-container flex">
                <a href="#contact-us" class="btn Red">Get Started</a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/VOOVTheChoiceAbovetheRest');?>
<section class="contact-us">
    <div class="container flex center">
        <div class="container-copy">
            <h2 class="title white">LET'S CONNECT</h2>
            <p>Elevate your Success with Our marketing Virtual Associate</p>
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