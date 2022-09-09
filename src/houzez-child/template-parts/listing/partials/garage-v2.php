<?php
$term_list = wp_get_post_terms(get_the_ID(), 'property_type', array('fields' => 'names'));
if (in_array('Oficinas', $term_list) || in_array('Locales', $term_list)) {

    $prop_garage = houzez_get_listing_data('property_garage');

    $prop_garage_label = ($prop_garage > 1) ? houzez_option('glc_garages', 'Garages') : houzez_option('glc_garage', 'Garage');


    $output = '';
    if ($prop_garage != '') {
        $output .= '<li class="h-cars">';
        $output .= '<span class="hz-figure">';

        if (houzez_option('icons_type') == 'font-awesome') {
            $output .= '<i class="' . houzez_option('fa_garage') . ' ml-1"></i>';

        } elseif (houzez_option('icons_type') == 'custom') {
            $cus_icon = houzez_option('garage');
            if (!empty($cus_icon['url'])) {

                $alt = isset($cus_icon['title']) ? $cus_icon['title'] : '';
                $output .= '<img class="img-fluid ml-1" src="' . esc_url($cus_icon['url']) . '" width="16" height="16" alt="' . esc_attr($alt) . '">';
            }
        } else {
            $output .= '<img src="/wp-content/uploads/2021/08/parking.png" alt="parking">';
        }

        $output .= ' '.$prop_garage . ' </span>';
        //$output .= $prop_garage_label;
        $output .= '</li>';
    }
    echo $output;
}
