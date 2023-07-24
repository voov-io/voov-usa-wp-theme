<section class="call-to-action">
        <div class="container flex space-between">
            <div class="copy-container">
                <?php 
                foreach ($args as $value) {    
                    
                }?>
                <h2><?php  echo $value ?></h2>
                <a href="<?php echo home_url();?>/contact"  class="btn White">
                    <p>Get Started </p>
                    <img width="50" height="50" loading="lazy" src="<?php echo IconsPath?>/Arrow 3.svg" alt="icon arrow"></a>
            </div>
            <picture class="img-container">
                <img width="370" height="450" loading="lazy" src="<?php echo ImagesPath?>/IMG_20230216_103636898_BURST000_COVER 2.webp" alt="call to action images ">
            </picture>
        </div>
   </section>