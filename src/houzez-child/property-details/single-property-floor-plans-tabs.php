<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 21/01/16
 * Time: 7:26 PM
 */
global $post, $top_area, $map_street_view;
$layout = houzez_option('property_blocks_tabs');
$layout = $layout['enabled'];
$floor_plans = get_post_meta( $post->ID, 'floor_plans', true );


$tab_end = '</div>';
$li_start = '<li class="nav-item">';
$li_end = '</li>';
?>

<!--start detail content tabber-->
<div class="listing-tabs horizontal-listing-tabs">
    <ul class="nav nav-tabs nav-justified">
        <?php
        $i = 0;
        print_r($layout);
        if ($layout): foreach ($layout as $key => $value) {

            if( $i == 0 ) { $a_active = 'active'; } else { $a_active = ''; }
            /*echo $key;*/
            switch($key) {

                case 'floor_plans':
                    if( isset($floor_plans[0]['fave_plan_title']) && !empty( $floor_plans[0]['fave_plan_title'] ) ) {
                        echo $li_start;
                        echo '<a class="nav-link '.$a_active.'" href="#property-floor-plans" data-toggle="tab">'.houzez_option('sps_floor_plans', 'Floor Plans').'</a>';
                        echo $li_end;
                        $i++;
                    }
                default:
            }
        }

        endif;
        ?>

    </ul>
</div>

<!--start tab-content-->
<div class="tab-content horizontal-tab-content" id="property-tab-content">
    <?php
    $j = 0;
    if ($layout): foreach ($layout as $key=>$value) {

        if( $j == 0 ) { $tab_active = 'show active'; } else { $tab_active = ''; }

        switch($key) {

            case 'floor_plans':
                echo '<div class="tab-pane fade '.$tab_active.'" id="property-floor-plans" role="tabpanel">';
                get_template_part('property-details/floor-plans');
                echo '</div>';
                $j++;
                break;

            default:
        }
    }

    endif;
    ?>

</div>
<!--end tab-content-->

