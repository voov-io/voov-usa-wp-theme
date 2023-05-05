<?php /*
@package voovusa
@subpackage voovusa
@since 1.0
*/

?>
   <footer>
    <div class="container flex space-between">
        <picture class="logos-container">
            <a href="<?php echo home_url();?>">
                <img loading="lazy" width="200" height="80" class="logo" src="<?php echo ImagesPath?>/VOOV-Logo-with-tag-line.webp" alt="VOOV Logo">
            </a>
            <a  href="https://www.google.com/partners/agency?id=7817578565" target="_blank" aria-label="Google partner badge" >
                <img loading="lazy" width="108" height="103" class="stiker-partner" src="<?php echo IconsPath?>/Google-Partner-VOOV-io.webp"  alt="Google partner badge"/>
            </a>
        </picture>
        <div class="info-container">
            <div class="info grid">
               <div class="sub-footer-container">
                   <h2>About</h2>
                   <ul>
                       <li><a href="<?php echo home_url();?>/about-us">About us</a></li>
                       <li><a href="<?php echo home_url();?>/our-team">Our team</a></li>
                   </ul>
               </div>
               <div class="sub-footer-container">
                   <h2>Resources</h2>
                   <ul>
                       <li><a href="<?php echo home_url();?>/blog">Blog</a></li>
                       <li><a href="<?php echo home_url();?>/faqs">FAQs</a></li>
                   </ul>
               </div>
               <div class="sub-footer-container">
                   <h2>Services</h2>
                   <ul>
                       <li><a href="<?php echo home_url();?>/fractional-marketing-solutions">Fractional Marketing</a></li>
                       <li><a href="<?php echo home_url();?>/marketing-specialist">Marketing</a></li>
                       <li><a href="<?php echo home_url();?>/executive-associates">Executive Associates</a></li>
                       <li><a href="<?php echo home_url();?>/inside-sales-service">Inside Sales</a></li>
                   </ul>
               </div>
               <div class="sub-footer-container">
                   <a href="<?php echo home_url();?>/contact" class="btn green">Get Started</a>
               </div>
            </div >
        </div>
    </div>
    <div class="sub-footer container">
        <div class="social-container">
           <a href="https://www.facebook.com/GotVoov/"><img loading="lazy" width="35" height="35"  class="icon" src="<?php echo IconsPath?>/Facebook icon.svg" alt="Facebook VOOV"></a>
           <a href="https://www.instagram.com/voov_io/"><img loading="lazy" width="35" height="35" class="icon" src="<?php echo IconsPath?>/Instagram icon.svg" alt="Facebook VOOV"></a>
           <a href="https://www.youtube.com/@VOOV_io"><img loading="lazy" width="35" height="35"  class="icon"src="<?php echo IconsPath?>/Youtube icon.svg" alt="Facebook VOOV"></a>
        </div>
        <hr>
        <div class="copyright">
           <p>© Copyright VOOV <?php echo get_the_date('Y'); ?></p>
        </div>
    </div>
   </footer>
   <?php wp_footer(); ?>
</body>
</html>