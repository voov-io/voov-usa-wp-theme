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
                <h1>We Highlight Your Business To The World Market</h1>
                <p>Elevate your success with our innovative, cost-efficient, customer-focused virtual staffing solutions.</p>
                    <?php if(is_active_sidebar('contact-widget'))
                    
                        dynamic_sidebar('contacst-widget');
                    ?>
                <div>
                    <a class="btn red">LETS CONNECT</a>
                    <a class="btn red-outline">KNOW MORE</a>
                </div>
            </div>
            <picture class="img-container">
<<<<<<< HEAD
                <img  width="640" height="360" src="<?php echo ImagesPath?>/main image hero.webp" alt="main images - colaborator">
            </picture>
        </div>
    </main>
   <section id="services" class="services">
    <div class="container grid center">
        <article class="service-container">
            <a  class="flex center center" href="<?php echo home_url();?>/fractional-marketing-solutions/" >
            <img class="icon" src="<?php echo IconsPath?>/Marketing Services.webp" alt="Marketing Services ">    
            <h2>Marketing <br>Services</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/marketing-specialist/">
                <img class="icon" src="<?php echo IconsPath?>/Telemarketing Services.webp" alt="Marketing Services "> 
                <h2>Telemarketing <br>Services</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/executive-associates/">
                <img class="icon" src="<?php echo IconsPath?>/Fractional Services.webp" alt="Marketing Services "> 
                <h2>Fractional <br> Services</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/inside-sales-services/">
                <img class="icon" src="<?php echo IconsPath?>/Service 4.webp" alt="Marketing Services "> 
                <h2>Hybrid <br>Services</h2>
            </a>
        </article>
    </div>
   </section>
   <section class="contact-us know-us">
    <div class="container center">
        <span class="btn yellow">Know Us</span>
        <h2 class="center subtitles">VOOV Marketing Agency</h2>
    </div>
    <div class="container flex center">             
        <div class="container-copy">
            <p class="align-left">VOOV is a leading technology-driven company that understands the advantages of combining top-notch human customer service with inbound marketing. We offer advanced digital tools, professional talent, and proven marketing strategies to promote, sell, and distribute goods and services online and offline. <br><br>Our marketing services increase brand awareness, drive website traffic, enhance customer engagement and improve sales at excellent best-value prices. You can choose full-time or part-time (fractional) virtual marketers to join your organization.<br><br>   We offer our marketing services to companies located all over the USA and Latin America with marketing associates proficient in English and Spanish.<br><br> In Latin America, our services are well suited for markets such as Central America, Dominican Republic, Mexico, Colombia, Bolivia, Ecuador, Peru, Uruguay, Paraguay, Argentina and Brazil.</p>
        </div>
        <div class="container-img">
            <img width="532.800" height="626.250" src="<?php echo ImagesPath?>/img contact us.webp" alt="Contact us voov women">
            <div class="circle green"></div>
            <div class="circle yellow"></div>
        </div>
    </div>
    </section>
   <section class="features">
        <div class="container center">
                <span class="btn yellow">Our Features</span>
                <h2 class="center subtitles">VOOV solves your needs and fosters growth</h2>
                <div class="container-features grid">
                    <article class="feature flex">
                        <img class="icon" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                        <div class="copy">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                        </div>
                    </article>
                    <article class="feature flex">
                        <img class="icon" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                        <div class="copy">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                        </div>
                    </article>
                    <article class="feature flex">
                        <img class="icon" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                        <div class="copy">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                        </div>
                    </article>
                    <article class="feature flex">
                        <img class="icon" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                        <div class="copy">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                        </div>
                    </article>
                </div>
        </div>
   </section>
   <section class="features greyColor">
        <div class="container center">
                <span class="btn red">Our Services</span>
                <h2 class="center subtitles">Reach your Business Goals by Developing a Strategic Marketing Plan that meets your needs, budget and timeline.</h2>
                <div class="container-features grid threeColumns">
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Group 193.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Marketing Coordinator</h3>
                            <p>Handles many tasks, from social media to event planning. Build a strong brand identity on multiple channels with creative strategies to attract new clients and support your growth efficiently.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Group 194.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Graphic Designer</h3>
                            <p>Creates material, such as illustrations, logos, layouts, and photos for online and offline marketing. Our Graphic Designer collaborates with other administrative, or marketing professionals to develop effective marketing projects.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Group.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>PPC & Social Ads</h3>
                            <p>Boost your sales with PPC advertising campaigns using platforms like Google Ads or Bing. The Associate will precisely target the audience to meet your campaign’s goals, your budget, and track your lead metrics.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Vector.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Video Editor</h3>
                            <p>Capture your audience with high-quality videos. Our Video Editors create exceptional videos on different formats and for various marketing channels to accomplish business goals using different multimedia elements.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Vector-1.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Copywriter</h3>
                            <p>To create compelling copies for your website, social media, and other marketing materials. Our specialists provide Search Engine Optimization (SEO) research-based copy that resonates with your audience and inspires them to engage with your brand.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Group 195.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Web Developer</h3>
                            <p>Develop the full potential of your website with efficient optimization, customization, and traffic control. Web Developers specialize in providing efficient and functional services to elevate your business so you can easily showcase your services/products and attract more potential clients.</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Group 196.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Social Media Associate</h3>
                            <p>Developing content marketing strategies for social media to improve your online presence. Keep your social media content consistent, and relevant. Boost engagement, increase brand awareness, and drive conversions</p>
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <picture class="container-icons">
                            <img class="icon-back" src="<?php echo IconsPath?>/Group 183.webp" alt="icon check"></img>
                            <img class="icon" src="<?php echo IconsPath?>/Vector-2.webp" alt="icon check">
                        </picture>
                        <div class="copy">
                            <h3>Digital Photos & 3D Models</h3>
                            <p>Offer specialized services in photo editions, renderings, site plans, and 3-D models. Ideal for clients that need to showcase luxury products, buildings, or urban development with great visual details and high quality.</p>
                        </div>
                    </article>
                </div>
        </div>
   </section>
    <aside class="call-to-action-new">
        <div class="container align-center">
            <span class="btn red z-index-2">Our Services</span>
            <h2 class="title-call ">Take Your Business To The Next Level!</h2>
        </div>
        <img class="back-icon" src="<?php echo IconsPath?>/Group 182.svg" alt="icon circle">
    </aside>
    <section class="features greyColor Testimonial">
        <div class="container align-left">
                <span class="btn yellow">Testimonial</span>
                <h2 class="subtitles">Lorem ipsum dolor sit amet<br> consectetur hendrerit.</h2>
                <div class="container-features grid threeColumns">
                    <article class="feature flex colum">
                        <div class="copy-head flex center">
                            <img class="icon-user" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                            <div class="copy-name">
                                <h3>Jackson Rhodes</h3>
                                <p>Fancy company name</p>
                            </div>
                        </div>
                        <div class="copy">
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                            <span class="start-review">★ ★ ★ ★ ★</span>                       
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <div class="copy-head flex center">
                            <img class="icon-user" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                            <div class="copy-name">
                                <h3>Jackson Rhodes</h3>
                                <p>Fancy company name</p>
                            </div>
                        </div>
                        <div class="copy">
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                            <span class="start-review">★ ★ ★ ★ ★</span>                       
                        </div>
                    </article>
                    <article class="feature flex colum">
                        <div class="copy-head flex center">
                            <img class="icon-user" src="<?php echo IconsPath?>/icon-check.svg" alt="icon check">
                            <div class="copy-name">
                                <h3>Jackson Rhodes</h3>
                                <p>Fancy company name</p>
                            </div>
                        </div>
                        <div class="copy">
                            <p>Lorem ipsum dolor sit amet consectetur. Nec praesent est commodo sagittis elit suspendisse velit laoreet.</p>
                            <span class="start-review">★ ★ ★ ★ ★</span>                       
                        </div>
                    </article>
                </div>
        </div>
   </section>
   <section class="contact-us">
    <div class="container flex">
        <div class="container-copy">

            <span class="btn yellow">Testimonial</span>
            <h2 class="title">Still have questions?<br>Let us help you!</h2>
            <div id="contact-us">
            <?php if(is_active_sidebar('contact-lead-home-widget'))
                    
                    dynamic_sidebar('contact-lead-home-widget');
                ?>
            </div>
        </div>
        <div class="container-img">
            <img width="532.800" height="626.250" src="<?php echo ImagesPath?>/img contact us.webp" alt="Contact us voov women">
            <div class="circle green"></div>
            <div class="circle yellow"></div>
        </div>
    </div>
    </section>

=======
                <img  width="640" height="360" src="<?php echo ImagesPath?>/voov group - team members.webp" alt="Kris Weaver - Chief Visionary Officer- VOOV & President of  Atlantic Sotheby's International, Virginia Beach">
            </picture>
        </div>
</main>
<section id="services" class="services">
    <div class="container grid center">
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/real-estate-virtual-staffing">
                <img class="icon x2" src="<?php echo IconsPath?>/Telemarketing Services.svg" alt="icon service">
                <h2>Real Estate<br> Staffing Solutions</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/marketing-agency">
                <img class="icon x2" src="<?php echo IconsPath?>/Marketing Services.svg" alt="icon service">
                <h2>Marketing<br>Agency</h2>
            </a>
        </article>
        <article class="service-container">
            <a class="flex center center" href="<?php echo home_url();?>/skill-cloud-staffing">
                <img class="icon x2" src="<?php echo IconsPath?>/Cloud_1_.svg" alt="icon service">
                <h2>Skill Cloud<br> Staffing</h2>
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
            <img width="500" height="600" loading="lazy" src="<?php echo ImagesPath?>/What is VOOV Group.webp" alt="young profesional women ">
        </picture>
    </div>
</section>
<section class="our-lines">
    <div class="container">
        <h2 class="title">Our Lines of Businesses</h2>
        <div class="lines-container grid">
            <article class="line">
                <img src="<?php echo ImagesPath?>/REAL ESTATE VIRTUAL STAFFING SOLUTIONS.webp" alt="voov - VIRTUAL MARKETING AGENCY">
                <div class="copy-services colorGreen">
                    <h3 class="title colorGreen">REAL ESTATE VIRTUAL STAFFING SOLUTIONS</h3>
                    <p class="white">Find new ways to grow middle-size to large real estate companies through upscale, virtual staffing in marketing, administrative and inside sales services.<br>
                    <a href="http://" class="backgroundwhite colortextGreen"><strong>More info</strong></a>
                </p> 
                </div>
            </article>
            <article class="line">
            <img src="<?php echo ImagesPath?>/voov - VIRTUAL MARKETING AGENCY (1).webp" alt="voov - VIRTUAL MARKETING AGENCY">
               
                <div class="copy-services colorYellow">
                    <h3 class="title colorYellow">VIRTUAL MARKETING AGENCY</h3>
                    <p class="white">Get Marketing services to increase your brand awareness, drive web traffic, enhance engagement and improve sales. Plus we offer great Content Syndication services (Subscription Marketing).<br>
                    <a href="http://" class="backgroundwhite colortextYellow"><strong>More info</strong></a>
                </p>
                </div>
            </article>
            <article class="line">
            <img src="<?php echo ImagesPath?>/SKILLCLOUD - VIRTUAL STAFFING (1).webp" alt="voov - VIRTUAL MARKETING AGENCY">
                
                <div class="copy-services colorBluesky">
                <h3 class="title colorBluesky">SKILLCLOUD VIRTUAL STAFFING</h3>
                    <p class="white">Discover the most affordable way to grow your business through work-from-home staffing services. This service is ideal for smaller companies in real estate or other service industries that need a scalable remote workforce.
<br>
                    <a href="http://" class="backgroundwhite colortextSkyblue"><strong>More info</strong></a>
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
           <a href="#cont1" class="btn yellow">LETS CONNECT</a>
       </div>
       <picture class="img-container-sect-3">
           <source media="(min-width:650px)" srcset="" sizes="">
           <img width="500" height="600" loading="lazy" src="<?php echo ImagesPath?>/img- we are your trusted.webp" alt="young profesional women ">
       </picture>
   </div>
</section> 
<section class="Our-Clients">
    <div class="container">
        <h2 class="title">Our Clients</h2>
        <p>Our clients are middle-size and large companies in different industries or niche markets, such as technology, real estate agencies, title companies, insurance firms, escrow financial services, mortgage firms, construction, and more.  We serve clients across the United States and Latin America.</p>
        <picture class="grid">
            <img src="<?php echo ImagesPath?>/Rocket-title-logo.webp" alt="Rocket title logo">
            <img src="<?php echo ImagesPath?>/805s-escrow-logo.webp" alt="805 escrow logo">
            <img src="<?php echo ImagesPath?>/Atlantic-sothebys.webp" alt="Atlantic sothebys logo">
            <img src="<?php echo ImagesPath?>/Units-logo.webp" alt="Units logo">
        </picture>
    </div>
</section>
>>>>>>> d989a2a5e37685f9be05ebe2d73760bbe9608f36
<?php get_footer();?>