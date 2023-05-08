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
            <a href="#contact-us" class="btn Red">LETS CONNECT </a>
                <img class="center" src="<?php echo ImagesPath?>/profesional-marketing-virtual-assiate.webp" alt="Marketing virtaul associate guy">
        </div>
    </div>
        <div class="circle red"></div>
        <div class="circle BlueSky"></div>
        <div class="circle BlueSky big"></div>
</section>
<section class="about-service mk">
    <h3 class="center">Marketing Services</h3>

    <div class="container flex space-evenly">
        <div class="container-img">
        <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="socialMediaManager" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social Media Manager.svg" alt="icon social media posting">
            </picture>
            <h4>Social Media<br> Manager</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="MarketingCoordinator" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Marketing Coordinator.svg" alt="icon social media posting">
            </picture>
            <h4>Marketing  <br>Coordinator</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="GraphicDesigner" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Graphic Designer.svg" alt="icon social media posting">
            </picture>
            <h4>Graphic Designer</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="Copywriter" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Copywriter.svg" alt="icon social media posting">
            </picture>
            <h4>Copywriter</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="SEOSEM" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/SEM.svg" alt="icon social media posting">
            </picture>
            <h4>SEO/SEM</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="WebDevelopment" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Web Development.svg" alt="icon social media posting">
            </picture>
            <h4>Web <br>Developer</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="PPC" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/PPC  (Pay per click).svg" alt="icon social media posting">
            </picture>
            <h4>PPC <br>(Pay per click)</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="VideoEditor" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Video Editor.svg" alt="icon social media posting">
            </picture>
            <h4>Video<br> Editor</h4>
        </div>
    </div>
        </div>
        <div class="container-copy">
            <h2 id="title" class="title">Social Media Manager</h2>
            <p id="paragraph1">Create content marketing strategies for social media to improve your online presence.</p>
            <p id="paragraph2">Keep your social media content consistent, relevant and timely. Boost engagement, increase brand awareness, and drive conversions.</p>
        </div>
        
    </div>
</section>
<section class="call-to-action-v2">
    <div class="container flex space-around">
        <picture class="container-img">
            <img src="<?php echo ImagesPath?>/img call to action v2.webp" alt="profesiontal call to action">
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
            <img src="<?php echo ImagesPath?>/img contact us.webp" alt="Contact us voov women">
            <div class="circle green"></div>
            <div class="circle yellow"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>