<section class="contact-us">
    <div class="container flex center">
        <div class="container-copy">
            <h2 class="title white">LET'S CONNECT</h2>
            <p>Elevate your Success with Our smart services</p>
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