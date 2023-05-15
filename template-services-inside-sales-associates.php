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
<section class="about-service sales">
    <h3 class="center">Sales Services</h3>

    <div class="container flex space-evenly">
        <div class="container-img">
        <div class="container grid center">
        <div class="sub-container-services ">
            <div  id="ISA" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Inside Sales Associate.svg" alt="icon social media posting">
            </picture>
            <h4>Inside Sales <br> Associate</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="AppointmentSetter" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Appointment Setter.svg" alt="icon social media posting">
            </picture>
            <h4>Appointment  <br>Setter</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="SalesCoordinator" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Sales Coordinator.svg" alt="icon social media posting">
            </picture>
            <h4>Sales Coordinator</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="Recruiters" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Recruiters for RE Agents.svg" alt="icon social media posting">
            </picture>
            <h4>Recruiters <br>for RE Agents</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="LeadsProspectors" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Leads Prospectors.svg" alt="icon social media posting">
            </picture>
            <h4>Leads <br> Prospectors</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="CircleProspecting" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Circle Prospecting.svg" alt="icon social media posting">
            </picture>
            <h4>Circle  <br> Prospectors</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="ZillowLeadsProspectors" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Zillow Leads Prospector.svg" alt="icon social media posting">
            </picture>
            <h4>Zillow <br> Leads Prospector</h4>
        </div>
        <div class="sub-container-services ">
            <div  id="TitleCompanies" class="overlay"></div>
            <picture class="container-icon">
                <img src="<?php echo IconsPath?>/Title Companies.svg" alt="icon social media posting">
            </picture>
            <h4>Title  <br> Companies</h4>
        </div>
    </div>
        </div>
        <div class="container-copy">
            <h2 id="title" class="title">Inside Sales Associate</h2>
            <p id="paragraph1">Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships.</p>
            <p id="paragraph2">Ensure potential customers make informed decisions, find the right home or property, and handle all negotiations with prospects.<br><br>Partner with our Inside Sales Associates and drive cost-effective investment in your business!</p>
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