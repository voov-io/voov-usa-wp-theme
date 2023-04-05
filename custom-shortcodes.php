<?php 
    function VOOVTheChoiceAbovetheRest_part(){
        ob_start();
        get_template_part('template-parts/VOOVTheChoiceAbovetheRest');
        return ob_get_clean();
    }
    add_shortcode('VOOVTheChoiceAbovetheRest', 'VOOVTheChoiceAbovetheRest_part');
    
?>