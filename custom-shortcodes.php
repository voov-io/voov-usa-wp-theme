<?php 
    function VOOVTheChoiceAbovetheRest_part(){
        ob_start();
        get_template_part('template-parts/VOOVTheChoiceAbovetheRest');
        return ob_get_clean();
    }
    add_shortcode('VOOVTheChoiceAbovetheRest', 'VOOVTheChoiceAbovetheRest_part');

    function CostsComparisonChart_part(){
        ob_start();
        get_template_part('template-parts/CostsComparisonChart');
        return ob_get_clean();
    }
    add_shortcode('CostsComparisonChart', 'CostsComparisonChart_part');

    function calltoactionpart1($atts){
        ob_start();
        $default = array(
            'copytext' => 'Take Your Real Estate Business To The Next Level!',
        );
        $a = shortcode_atts($default, $atts);
        
        get_template_part('template-parts/call-to-action-1',null, $args = $a );
        return ob_get_clean();
    }
    add_shortcode('calltoactionpa1', 'calltoactionpart1');
    
?>
