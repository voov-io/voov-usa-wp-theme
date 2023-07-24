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

<?php get_footer();?>