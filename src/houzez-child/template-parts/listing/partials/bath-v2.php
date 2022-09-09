<?php
$prop_bath  = houzez_get_listing_data('property_bathrooms');
$prop_bath_label = ($prop_bath > 1 ) ? houzez_option('glc_bathrooms', 'Bathrooms') : houzez_option('glc_bathroom', 'Bathroom');

$output = '';
if( $prop_bath != '' ) {
	$output .= '<li class="h-baths">';
		$output .= '<span class="hz-figure">';

		if(houzez_option('icons_type') == 'font-awesome') {
			$output .= '<i class="'.houzez_option('fa_bath').' ml-1"></i>';

		} elseif (houzez_option('icons_type') == 'custom') {
			$cus_icon = houzez_option('bath');
			if(!empty($cus_icon['url'])) {

				$alt = isset($cus_icon['title']) ? $cus_icon['title'] : '';
				$output .= '<img class="img-fluid ml-1" src="'.esc_url($cus_icon['url']).'" width="16" height="16" alt="'.esc_attr($alt).'">';
			}
		} else {
			$output .= '<img src="/wp-content/uploads/2021/08/bathroom.png" alt="bathrooms">';
			//$output .= '<i class="houzez-icon icon-bathroom-shower-1 mr-1"></i>';
		}

		$output .=  $prop_bath.' </span>';
		//$output .= $prop_bath_label;
	$output .= '</li>';
}
echo $output;
