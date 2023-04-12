<?php
/*Template name: Services page Excecute VA


@package voovusa
@subpackage voovusa
@since 1.0
*/ 

?>
<?php get_header();?>

<section class="page-services">
    <div class="container">
        <div class="copy-head grid center">
            <h1 class="title center">EXECUTIVE VIRTUAL ASSOCIATE</h1>
            <p class="center">Delegate Essential Executive & Financial Tasks to Maximize your Productivity</p>
            <a href="#contact-us" class="btn Red">START NOW </a>
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
            <h2 class="title">Optimize your Administrative Duties With Our Specialized Associates</h2>
            <p id="paragraph1">Solve regular duties like scheduling, reviewing, prioritizing, and answering emails, placing follow-up calls, and organizing documents.</p>
            <p id="paragraph2">Get a full-time Executive Associate to maximize your time and attend to your daily tasks efficiently. </p>
        </div>
        <div class="container-img">
            <picture>
                <img id="img-service" width="100%" height="auto" src="<?php echo ImagesPath?>/bussinnes-guys-working.webp" alt="img related to service">
            </picture>
        </div>
    </div>
    <h3 class="center">Guarantee Your Productivity With Our Specialized Executives Services</h3>
    <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="ExecutiveAssociate" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Executive<br> Associate</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="DataAnalyst" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Search Engine Optimization (SEO).svg" alt="icon social media posting">
            </picture>
            <h4>Data<br>Analyst</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="TransactionCoordinator" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Pay per click (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Transaction<br>Coordinator</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="ProjectManager" class="overlay"></div>
            <picture class="container-icon">

                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Project Manager</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="Bookkeeper" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Bookkeeper</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="OperationsManager" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Operations<br> Manager</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="PropertyManagementAssociate" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Property Management <br>Associate</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="LeasingSpecialist" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Leasing <br>Specialist</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="MaintenanceCoordinator" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Maintenance <br>Coordinator</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="LeadManager" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Social media (Traced).svg" alt="icon social media posting">
            </picture>
            <h4>Lead <br>Manager</h4>
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