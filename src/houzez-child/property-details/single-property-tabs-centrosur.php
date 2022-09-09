<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 21/01/16
 * Time: 7:26 PM
 */
global $post, $top_area, $map_street_view;
$layout = houzez_option('property_blocks_tabs');
$schedule = houzez_option('houzez_tabs_schedule');
$energy_class = houzez_option('houzez_energy_class');
$availability_calendar = houzez_option('houzez_availability_calendar');
$show_similer = houzez_option( 'houzez_similer_properties' );
$property_reviews = houzez_option( 'property_reviews' );
$houzez_mortgage = houzez_option( 'houzez_mortgage' );
$houzez_sublisting = houzez_option( 'houzez_sublisting' );
$layout = $layout['enabled'];
$floor_plans = get_post_meta( $post->ID, 'floor_plans', true );
$video_url = get_post_meta( $post->ID, 'fave_video_url', true );
$virtual_tour = get_post_meta( $post->ID, 'fave_virtual_tour', true );
$gallery_apto_model = get_custom_terms('galeria_apto_modelo');
$gallery_apto_orion1 = get_custom_terms('galeria_apto_modelo_orion1');
$gallery_apto_orion2 = get_custom_terms('galeria_apto_modelo_orion2');
$gallery_imagenes = get_custom_terms('galeria_imagenes');
$gallery_vistas_reales= get_custom_terms('galeria_vistas_reales');

$tab_end = '</div>';
$li_start = '<li class="nav-item">';
$li_end = '</li>';
?>

<!--start detail content tabber-->
<div class="listing-tabs horizontal-listing-tabs">
    <ul class="nav nav-tabs nav-justified">
        <?php
        $i = 0;
        $arrayOptions = [];
        if(!empty($gallery_apto_model)){
           $arrayOptions['apartamento-modelo'] ='Apartamento modelo';
        }
        if(!empty($gallery_apto_orion1)){
           $arrayOptions['apartamento-modelo-orion1'] ='Apto. modelo 61.42 m2';
        }
        if(!empty($gallery_apto_orion2)){
           $arrayOptions['apartamento-modelo-orion2'] ='Apto. modelo 78.74 m2';
        }
        if(!empty($gallery_imagenes)){
           $arrayOptions['imagenes']='Imágenes';
        }
        if(!empty($gallery_vistas_reales)){
            $arrayOptions['vistas-reales'] = 'Vistas reales';
        }
        /*print_r($layout);*/
        $layout = array_merge($arrayOptions,$layout);
        /*print_r($layout);*/
        if ($layout): foreach ($layout as $key => $value) {

            if( $i == 0 ) { $a_active = 'active'; } else { $a_active = ''; }
            /*echo $key;*/
            switch($key) {

                case 'imagenes':
                    echo $li_start;
                    echo '<a class="nav-link '.$a_active.'" href="#property-images" data-toggle="tab">'.houzez_option('sps_images', 'Imágenes').'</a>';
                    echo $li_end;
                    $i++;
                    break;

                case 'apartamento-modelo':
                    echo $li_start;
                    echo '<a class="nav-link '.$a_active.'" href="#property-model-images" data-toggle="tab">'.houzez_option('sps_images', 'Apartamento modelo').'</a>';
                    echo $li_end;
                    $i++;
                    break;

                case 'apartamento-modelo-orion1':
                        echo $li_start;
                        echo '<a class="nav-link '.$a_active.'" href="#property-model-images-orion1" data-toggle="tab">'.houzez_option('sps_images', 'Apto. modelo 61.42 m²').'</a>';
                        echo $li_end;
                        $i++;
                        break;

                case 'apartamento-modelo-orion2':
                            echo $li_start;
                            echo '<a class="nav-link '.$a_active.'" href="#property-model-images-orion2" data-toggle="tab">'.houzez_option('sps_images', 'Apto. modelo 78.74 m²').'</a>';
                            echo $li_end;
                            $i++;
                            break;

                case 'vistas-reales':
                    echo $li_start;
                    echo '<a class="nav-link '.$a_active.'" href="#property-real-images" data-toggle="tab">'.houzez_option('sps_images', 'Vistas reales').'</a>';
                    echo $li_end;
                    $i++;
                    break;
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

                case 'imagenes':
                    echo '<div class="tab-pane fade '.$tab_active.'" id="property-images" role="tabpanel">';
                   // get_template_part('property-details/single-property-gallery-tab-centrosur');
                    echo do_shortcode("$gallery_imagenes");
                    echo '</div>';
                    $j++;
                    break;


                case 'apartamento-modelo':
                    echo '<div class="tab-pane fade '.$tab_active.'" id="property-model-images" role="tabpanel">';
                    echo do_shortcode("$gallery_apto_model");
                    echo '</div>';
                    $j++;
                    break;

                case 'apartamento-modelo-orion1':
                    echo '<div class="tab-pane fade '.$tab_active.'" id="property-model-images-orion1" role="tabpanel">';
                    echo do_shortcode("$gallery_apto_orion1");
                    echo '</div>';
                    $j++;
                    break;

                case 'apartamento-modelo-orion2':
                    echo '<div class="tab-pane fade '.$tab_active.'" id="property-model-images-orion2" role="tabpanel">';
                    echo do_shortcode("$gallery_apto_orion2");
                    echo '</div>';
                    $j++;
                    break;

                case 'vistas-reales':
                    echo '<div class="tab-pane fade '.$tab_active.'" id="property-real-images" role="tabpanel">';
                    echo do_shortcode("$gallery_vistas_reales");
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

<?php
    /*if($top_area != 'v6') {
        get_template_part('property-details/overview');
    }*/

    if( $houzez_mortgage != 0 && houzez_hide_calculator() ) {
        get_template_part('property-details/mortgage-calculator');
    }

    if($houzez_sublisting != 0) {
        get_template_part('property-details/sub-listing-main');
    }

    if($energy_class != 0) {
        get_template_part('property-details/energy');
    }

    get_template_part('property-details/walkscore');

    get_template_part('property-details/yelp-nearby');

    if($schedule != 0) {
        get_template_part('property-details/schedule-a-tour');
    }

    if($availability_calendar != 0) {
        get_template_part('property-details/availability-calendar');
    }

    if( houzez_option('tabs_agent_bottom', 1) ) {
        get_template_part('property-details/agent-form-bottom');
    }

    /*if($property_reviews != 0) {
        get_template_part('property-details/reviews');
    }*/

    /*get_template_part('property-details/similar-properties');*/
    ?>