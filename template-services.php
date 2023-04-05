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
            <h1 class="title center">MARKETING FRACTIONAL SERVICES</h1>
            <p class="center">Try our Quick & Cost-Effective Marketing Solutions for Specific Goals.</p>
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
            <h2 class="title">Solve your Marketing Tasks Quickly with Our Specialized Short-term Services</h2>
            <p id="paragraph1">Increase your audience engagement and attract new leads by staying active on Social Media.</p>
            <p id="paragraph2">Social Media Specialists, create valuable digital content and monitor various marketing channels according to your goals.</p>
        </div>
        <div class="container-img">
            <picture>
                <img id="img-service" width="100%" height="auto" src="<?php echo ImagesPath?>/business-woman-talking-about-financial-project-taking-notes-discussing-start-up-ideas-using-laptop-diverse-employees-gathered-co-working-working-process-busy-company-teamwork-help-concept.webp" alt="img related to service">
            </picture>
        </div>
    </div>
    <h3 class="center">Explore Our Smart Marketing Solutions</h3>
    <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="socialMedia" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Social Media<br> Posting</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="seo" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Search Engine Optimization (SEO).svg" alt="icon social media posting">
            </picture>
            <h4>Search Engine<br> Optimization (SEO)</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="ppc" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Pay per click (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>PPC <br>(Pay per click)</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="sem" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Search Engine <br>Marketing (SEM)</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="videoeditor" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Video <br>Editor</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="mkcordinator" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Marketing <br>Coordinator</h4>
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
            <p>Elevate your Success with Our Marketing fractional services</p>
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