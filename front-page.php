<?php /*
@package voovusa
@subpackage voovusa
@since 1.0
*/
?>
<?php get_header();?>
<main id="letsconnect">
        <div class="container flex space-between">
            <div  class="copy-container">
                <h1>VOOV VIRTUAL <br>
                BUSINESS SOLUTIONS</h1>
                <p>Elevate your success with our innovative, cost-efficient, customer-focused virtual staffing solutions.</p>
                    <?php if(is_active_sidebar('contact-widget'))
                    
                        dynamic_sidebar('contact-widget');
                    ?>
            </div>
            <picture class="img-container">
                <img class="img" width="640" height="360" src="<?php echo ImagesPath?>/voov group - team members.webp" alt="Kris Weaver - Chief Visionary Officer- VOOV & President of  Atlantic Sotheby's International, Virginia Beach">
            </picture>
        </div>
</main>
<section id="services" class="services">
    <div class="container grid center">
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/real-estate-virtual-staffing">
                <img class="img" src="<?php echo ImagesPath?>/VOOV Real Estate Staffing Logo.webp" alt="icon service">
                <h2>In-office<br>Real Estate<br> Staffing Solutions</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/marketing-agency">
                <img class="" src="<?php echo ImagesPath?>/VOOV marketing Agency-logo.webp" alt="icon service">
                <h2>Marketing <br>Services to elevate<br> your business</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/skill-cloud-staffing">
                <img class="" src="<?php echo ImagesPath?>/SkillCloud Staffing-logo.webp" alt="icon service">
                <h2>From-home<br>Virtual Staffing<br> Solutions</h2>
            </a>
        </article>
    </div>
</section>
<section id="WeAreYourTrusted" class="section-3-WeAreYourTrusted">
        <div class="container flex space-between">
        <div class="copy-container">
            <h2 class="title">What is VOOV?</h2>
            <p>VOOV is a virtual business solutions company founded in 2020 by Kris Weaver (CVO), Sergio Tiffer (CEO), and Ahmed Martinez (HR Director) with Headquarters in Virginia Beach, VA, and Operations in Nicaragua, Central America.<br><br>
                We bring 20+ years of virtual staffing experience and top notch solutions to clients from USA and Latin America.</strong></p>
          
        </div>
        <picture class="img-container-sect-3">
            <source media="(min-width:650px)" srcset="" sizes="">
            <img class="img" width="500" height="600" loading="lazy" src="<?php echo ImagesPath?>/What is VOOV Group.webp" alt="young profesional women ">
        </picture>
    </div>
</section>
<section class="our-lines">
    <div class="container">
        <h2 class="title">Our Lines of Businesses</h2>
        <div class="lines-container grid">
            <article class="line">
                <img src="<?php echo ImagesPath?>/REAL ESTATE VIRTUAL STAFFING SOLUTIONSnew.webp" alt="voov - VIRTUAL MARKETING AGENCY">
                <div class="copy-services colorGreen">
                    <h3 class="title colorGreen">REAL ESTATE VIRTUAL STAFFING SOLUTIONS</h3>
                    <p class="white">Find new ways to grow middle-size to large real estate companies through upscale, virtual staffing in marketing, administrative and inside sales services.<br>
                    <a href="<?php echo home_url();?>/real-estate-virtual-staffing/" class="backgroundwhite colortextGreen"><strong>More info</strong></a>
                </p> 
                </div>
            </article>
            <article class="line">
            <img src="<?php echo ImagesPath?>/voov - VIRTUAL MARKETING AGENCY-new.webp" alt="voov - VIRTUAL MARKETING AGENCY">
               
                <div class="copy-services colorYellow">
                    <h3 class="title colorYellow">VIRTUAL MARKETING AGENCY</h3>
                    <p class="white">Get Marketing services to increase your brand awareness, drive web traffic, enhance engagement and improve sales. Plus we offer great Content Syndication services (Subscription Marketing).<br>
                    <a href="<?php echo home_url();?>/marketing-agency/" class="backgroundwhite colortextYellow"><strong>More info</strong></a>
                </p>
                </div>
            </article>
            <article class="line">
            <img src="<?php echo ImagesPath?>/SKILLCLOUD - VIRTUAL STAFFING-new.webp" alt="voov - VIRTUAL MARKETING AGENCY">
                
                <div class="copy-services colorBluesky">
                <h3 class="title colorBluesky">SKILLCLOUD VIRTUAL STAFFING</h3>
                    <p class="white">Discover the most affordable way to grow your business through work-from-home staffing services. This service is ideal for smaller companies in real estate or other service industries that need a scalable remote workforce.
<br>
                    <a href="<?php echo home_url();?>/skill-cloud-staffing" class="backgroundwhite colortextSkyblue"><strong>More info</strong></a>
                </p>
                </div>
            </article>
        </div>
    </div>
    </div>
</section>
<section class="call-to-action">
        <div class="container flex space-between">
            <div class="copy-container">
                <h2>Don’t forget to subscribe to <br>our Newsletter. It’s Free!</h2>
            </div>
            <div class="img-container">
            <?php if(is_active_sidebar('newsletter-widget'))
                    
                    dynamic_sidebar('newsletter-widget');
                ?>
            </div>
        </div>
</section>
<section id="WeAreYourTrusted" class="section-3-WeAreYourTrusted lineargradiend">
    <div class="container flex space-between">
       <div class="copy-container">
           <h2 class="title">We Are Your Business Virtual<br> Services Partner</h2>
           <p>More than virtual assistants, we are professionals with a modern twist. Our expertise as virtual associates gives us the unique ability to grow with you and have no limits when it comes to adding value to your business.</strong></p>
           <a href="<?php echo home_url();?>/contact" class="btn yellow">LETS CONNECT</a>
       </div>
       <picture class="img-container-sect-3">
           <source media="(min-width:650px)" srcset="" sizes="">
           <img width="500" height="600" loading="lazy" src="<?php echo ImagesPath?>/img- we are your trusted.webp" alt="young profesional women ">
       </picture>
   </div>
</section> 
<section class="Our-Clients">
    <div class="container">
        <h2 class="title">Sample of Brands & Clients</h2>
        <p>Our clients are middle-size and large companies in different industries or niche markets, such as technology, real estate agencies, title companies, insurance firms, escrow financial services, mortgage firms, construction, and more.  We serve clients across the United States and Latin America.</p>
        <picture class="grid">
            <img src="<?php echo ImagesPath?>/Rocket-title-logo.webp" alt="Rocket title logo">
            <img src="<?php echo ImagesPath?>/805s-escrow-logo.webp" alt="805 escrow logo">
            <img src="<?php echo ImagesPath?>/Atlantic-sothebys.webp" alt="Atlantic sothebys logo">
            <img src="<?php echo ImagesPath?>/Units-logo.webp" alt="Units logo">
        </picture>
    </div>
</section>
<?php get_footer();?>