<?php
/*Template name: Services page Inside Sales Associates


@package voovusa
@subpackage voovusa
@since 1.0
*/ 

?>
<?php get_header();?>

<section class="page-services">
    <div class="container">
        <div class="copy-head grid center">
            <h1 class="title center">INSIDE SALES ASSOCIATE</h1>
            <p class="center">Take your leads to the Closing Table with our Sales Experts </p>
            <a href="#contact-us" class="btn Red">GET STARTED</a>
                <img class="center" src="<?php echo ImagesPath?>/profesional-marketing-virtual-assiate.webp" alt="Marketing virtaul associate guy">
        </div>
    </div>
        <div class="circle red"></div>
        <div class="circle BlueSky"></div>
        <div class="circle BlueSky big"></div>
</section>
<section class="about-service">
    <div class="container flex space-between">
        <div class="container-copy">
            <h2 class="title">Maximize your Revenue by Partnering with our Sales Specialists</h2>
            <p id="paragraph1">Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships.</p>
            <p id="paragraph2">Sales are the most vital aspect of running a successful business. Partner with a full-time Inside Sales Associate and drive cost-effective investment.</p>
        </div>
        <div class="container-img">
            <picture>
                <img id="img-service" width="100%" height="auto" src="<?php echo ImagesPath?>/bussinnes-guys-working.webp" alt="img related to service">
            </picture>
        </div>
    </div>
    <h3 class="center">Guarantee Your Productivity With Our Specialized Inside Sales Associates</h3>
    <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="InsideSalesAssociate" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Inside Sales<br> Associate</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="SalesCoordinator" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Search Engine Optimization (SEO).svg" alt="icon social media posting">
            </picture>
            <h4>Sales <br>Coordinator</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="Recruiters" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Pay per click (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Recruiters for <br>Real Estate Agents</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="ZillowLeadsProspector" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Zillow Leads Prospector</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="LeadsProspector" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Leads<br> Prospector</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="AppointmentSetter" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Appointment<br> Setter</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="TitleCompanies" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Title <br>Companies</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="CircleProspectors" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Circle<br>Prospectors</h4>
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
            <p>Elevate your Success with Our Inside Sales Associates</p>
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