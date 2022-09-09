<?php
global $post, $ele_settings;

$section_title = isset($ele_settings['section_title']) && !empty($ele_settings['section_title']) ? $ele_settings['section_title'] : houzez_option('sps_floor_plans', 'Floor Plans');

$show_header = isset($ele_settings['section_header']) ? $ele_settings['section_header'] : true;
$default_open = isset($ele_settings['show_open']) && $ele_settings['show_open'] == 'true' ? 'show' : '';


$floor_plans = get_post_meta( get_the_ID(), 'floor_plans', true );
$tab_end = '</div>';
$li_start = '<li class="nav-item">';
$li_end = '</li>';
if( isset($floor_plans[0]['fave_plan_title']) && !empty( $floor_plans[0]['fave_plan_title'] ) ) {
?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="p-title text-center">
                PLANTAS ARQUITECTÓNICAS Y URBANISMO
            </div>

            <div class="listing-tabs horizontal-listing-tabs">
        <ul class="nav nav-tabs nav-justified">
				<?php
				$i = 0;

                foreach( $floor_plans as $plan ):
                    if( $i == 0 ) { $a_active = 'active'; } else { $a_active = ''; }

                    $price_postfix = '';
		            if( !empty( $plan['fave_plan_price_postfix'] ) ) {
		                $price_postfix = ' / '.$plan['fave_plan_price_postfix'];
		            }

		            $plan_image = isset($plan['fave_plan_image']) ? $plan['fave_plan_image'] : '';
		            $filetype = wp_check_filetype($plan_image);

		            $plan_title = isset($plan['fave_plan_title']) ? esc_attr($plan['fave_plan_title']) : '';
                    $title_slug = preg_replace('/\s+/', '_', $plan_title);

                    echo $li_start;
                    echo '<a class="nav-link '.$a_active.'" href="#property-'.$title_slug.'" data-toggle="tab">'.$plan_title.'</a>';
                    echo $li_end;
                    $i++;
		            ?>



				<?php endforeach; ?>
        </ul>
</div><!-- property-floor-plans-wrap -->
<div class="tab-content horizontal-tab-content" id="property-tab-content">
    <?php
    $j = 0;

    foreach( $floor_plans as $plan ):
        if( $j == 0 ) { $tab_active = 'show active'; } else { $tab_active = ''; }

        $price_postfix = '';
        if( !empty( $plan['fave_plan_price_postfix'] ) ) {
            $price_postfix = ' / '.$plan['fave_plan_price_postfix'];
        }

        $plan_image = isset($plan['fave_plan_image']) ? $plan['fave_plan_image'] : '';
        $filetype = wp_check_filetype($plan_image);

        $plan_title = isset($plan['fave_plan_title']) ? esc_attr($plan['fave_plan_title']) : '';
        $title_slug = preg_replace('/\s+/', '_', $plan_title);
        echo '<div class="tab-pane fade '.$tab_active.'" id="property-'.$title_slug.'" role="tabpanel">';
        echo "<img src='$plan_image' class='img-fluid'>";
        echo '</div>';
        $j++;
        ?>



    <?php endforeach; ?>
</div>
        </div>
    </div>
</div>
<?php } ?>
