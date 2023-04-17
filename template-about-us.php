<?php
/*Template name: About us template


@package voovusa
@subpackage voovusa
@since 1.0
*/ 

?>
<?php get_header();?>
<main id="letsconnect">
        <div class="container flex space-between">
            <div  class="copy-container">
                <h1>REAL ESTATE<br>
                    STAFFING SOLUTIONS</h1>
                <p>Elevate your Success with Our Innovative,<br> Industry-Focused Staffing Solutions.</p>
            </div>
            <picture class="img-container">
                <img  width="640" height="360" src="<?php echo ImagesPath?>/Kris Weaver FC NEW 2022 1 (1).webp" alt="Kris Weaver - Chief Visionary Officer- VOOV & President of  Atlantic Sotheby's International, Virginia Beach">
                <div class="circlePulso button" id="button-0"></div>
                <div class="title">
                    <h2>Kris Weaver</h2>
                    <p class="typewrite" data-period="4000" data-type='[ "Chief Visionary Officer - VOOV", "President of Atlantic Sothebys International<br>, Virginia Beach"]'>President of  Atlantic Sotheby's International,<br> Virginia Beach</p>
                </div>
            </picture>
        </div>
        <div class="circle BlueSky"></div>
        <div class="triangle green"></div>
    </main>
<?php get_template_part('template-parts/contact-us'); ?>
<?php get_footer(); ?> 