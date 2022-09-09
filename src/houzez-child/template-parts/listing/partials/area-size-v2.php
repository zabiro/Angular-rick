<?php
$propID = get_the_ID();
$prop_size = houzez_get_listing_data('property_size');
$listing_area_size = houzez_get_listing_area_size( $propID );
$listing_size_unit = houzez_get_listing_size_unit( $propID );
$term_list = wp_get_object_terms($propID, 'property_status', array('fields' => 'names'));

$output = '';
if( !empty( $listing_area_size ) ) {
	$output .= '<li class="h-area">';
    $output .= '<span class="hz-figure"><div id="desdeArea">';
    if(houzez_option('icons_type') == 'font-awesome') {
        $output .= '<i class="'.houzez_option('fa_area-size').' ml-1"></i>';

    } elseif (houzez_option('icons_type') == 'custom') {
        $cus_icon = houzez_option('area-size');
        if(!empty($cus_icon['url'])) {

            $alt = isset($cus_icon['title']) ? $cus_icon['title'] : '';
            $output .= '<img class="img-fluid ml-1" src="'.esc_url($cus_icon['url']).'" width="16" height="16" alt="'.esc_attr($alt).'">';
        }
    } else {
        $output .= '<img src="/wp-content/uploads/2021/08/size.png" alt="size">';
    }
    if (in_array('Proyectos Nuevos', $term_list)) {

		$output .= '<div><p>Desde</p>';
        $output .= '<p>' . $listing_area_size. ' ' . $listing_size_unit . '</p></div>';
    }else{
        $output .= '<p>' . $listing_area_size. ' ' . $listing_size_unit . '</p>';

    }
        $output .= '</span></div>';
		//$output .= '<p>'.$listing_area_size.' '.$listing_size_unit.'</p> </span>';
		//$output .= '<div class="area_postfix">'.$listing_size_unit.'</div>';
	$output .= '</li>';
}
echo $output;
