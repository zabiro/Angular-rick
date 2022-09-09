<?php
/*define( 'HOUZEZ_THEME_NAME', 'Houzez' );
define( 'HOUZEZ_THEME_SLUG', 'houzez' );
define( 'HOUZEZ_THEME_VERSION', '2.3.7' );
define( 'HOUZEZ_FRAMEWORK', get_template_directory() . '/framework/' );
define( 'HOUZEZ_WIDGETS', get_template_directory() . '/inc/widgets/' );
define( 'HOUZEZ_INC', get_template_directory() . '/inc/' );
define( 'HOUZEZ_TEMPLATE_PARTS', get_template_directory() . '/template-parts/' );
define( 'HOUZEZ_IMAGE', get_template_directory_uri() . '/img/' );
define( 'HOUZEZ_CSS_DIR_URI', get_template_directory_uri() . '/css/' );
define( 'HOUZEZ_JS_DIR_URI', get_template_directory_uri() . '/js/' );*/

function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
/*-----------------------------------------------------------------------------------*/
// Listing price version 1
/*-----------------------------------------------------------------------------------*/
if( !function_exists('houzez_listing_price_v1') ) {
    function houzez_listing_price_v1($listing_id = '') {

        if(empty($listing_id)) {
            $listing_id = get_the_ID();
        }

        $output = '';
        $sale_price     = get_post_meta( $listing_id, 'fave_property_price', true );
        $second_price   = get_post_meta( $listing_id, 'fave_property_sec_price', true );
        $price_postfix  = get_post_meta( $listing_id, 'fave_property_price_postfix', true );
        $price_prefix   = get_post_meta( $listing_id, 'fave_property_price_prefix', true );
        $price_separator = houzez_option('currency_separator');
        $term_list = wp_get_object_terms($listing_id, 'property_status', array('fields' => 'names'));

        $price_as_text = doubleval( $sale_price );
        if( !$price_as_text ) {
            if( is_singular( 'property' ) ) {


                $output .= '<li class="item-price item-price-text price-single-listing-text"> '.$sale_price.'</li>';
                return $output;

            }
            $output .= '<li class="item-price item-price-text">'.$sale_price. '</li>';
            return $output;
        }

        if( !empty( $price_prefix ) ) {
            $price_prefix = '<span class="price-prefix">'.$price_prefix.' </span>';
        }

        if (!empty( $sale_price ) ) {

            if (!empty( $price_postfix )) {
                $price_postfix = $price_separator . $price_postfix;
            }

            if (!empty( $sale_price ) && !empty( $second_price ) ) {

                if( is_singular( 'property' ) ) {
                    $output .= '<li class="item-price"> '.$price_prefix. houzez_get_property_price($sale_price) . '</li>';
                    if (!empty($second_price)) {
                        $output .= '<li class="item-sub-price">';
                        $output .= houzez_get_property_price($second_price) . $price_postfix;
                        $output .= '</li>';
                    }
                } else {
                    $output .= '<li class="item-price"> '.$price_prefix.' '.houzez_get_property_price($sale_price) . '</li>';
                    if (!empty($second_price)) {
                        $output .= '<li class="item-sub-price">';
                        $output .= houzez_get_property_price($second_price) . $price_postfix;
                        $output .= '</li>';
                    }
                }
            } else {
                if (!empty( $sale_price )) {
                    if( is_singular( 'property' ) ) {
                        $output .= '<li class="item-price">';
                        $output .= $price_prefix. houzez_get_property_price($sale_price) . $price_postfix;
                        $output .= '</li>';
                    } else {
                        $output .= '<li class="item-price">';
                        if (in_array('Proyectos Nuevos', $term_list)) {
                            $output .= 'Desde: ';
                        }else if(in_array('Arriendo', $term_list)){
                            $output .= 'Canon: ';
                        }else if(in_array('Venta', $term_list)){
                            $output .= 'Precio: ';
                        }
                        $output .= $price_prefix;
                        $output .= houzez_get_property_price($sale_price) . $price_postfix;
                        $output .= '</li>';

                    }
                }
            }

        }

        return $output;
    }
}

if( !function_exists('atrib_imagen_destacada')){
    function atrib_imagen_destacada() {
        global $post;
        $thumbID = get_post_thumbnail_id( $post->ID );
        $imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
        return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
    }
}

function project_discount(){
    $additional_features = get_post_meta( get_the_ID(), 'additional_features', true );
    foreach ($additional_features as $adf ){
        if(isset($adf['fave_additional_feature_title']) && !empty($adf['fave_additional_feature_title'])){
            if($adf['fave_additional_feature_title'] == 'descuento'){
                return number_format($adf['fave_additional_feature_value']);

            }
        }
    }

}
function get_custom_terms($term){
    $additional_features = get_post_meta( get_the_ID(), 'additional_features', true );
    foreach ($additional_features as $adf ){
        if(isset($adf['fave_additional_feature_title']) && !empty($adf['fave_additional_feature_title'])){
            if($adf['fave_additional_feature_title'] == $term){
                return $adf['fave_additional_feature_value'];
            }
        }
    }

}
function get_custom_terms_list($term){
    $additional_features = get_post_meta( get_the_ID(), 'additional_features', true );
    foreach ($additional_features as $adf ){
        if(isset($adf['fave_additional_feature_title']) && !empty($adf['fave_additional_feature_title'])){
            if($adf['fave_additional_feature_title'] == $term){
                if($adf['fave_additional_feature_value'] != "" ){
                    return explode(';',$adf['fave_additional_feature_value'] );
                }

            }
        }
    }

}
if( !function_exists('houzez_get_listing_area_size') ) {
    function houzez_get_listing_area_size( $propID ) {
        $prop_area_size = '';
        $prop_size     = get_post_meta( $propID, 'fave_property_size', true );
        $houzez_base_area = houzez_option('houzez_base_area');

        if( !empty( $prop_size ) ) {

            if( isset( $_COOKIE[ "houzez_current_area" ] ) ) {
                if( $_COOKIE[ "houzez_current_area" ] == 'sq_meter' && $houzez_base_area != 'sq_meter'  ) {
                    $prop_size = $prop_size * 0.09290304; //m2 = ft2 x 0.09290304

                } elseif( $_COOKIE[ "houzez_current_area" ] == 'sqft' && $houzez_base_area != 'sqft' ) {
                    $prop_size = $prop_size / 0.09290304; //ft2 = m2 ÷ 0.09290304
                }
            }

            /* $prop_area_size = esc_attr( round($prop_size, 2) );*/
            $prop_area_size = esc_attr( $prop_size );

        }
        return $prop_area_size;

    }
}
register_taxonomy( 'property_state', 'post', array() );



add_filter( 'the_content', 'dcms_list_data' );

function dcms_list_data( $content ) {
$slug_page = 'consulta-de-usuarios'; //slug page where show data
$table_name = 'wp_participants_database'; // custom table name
$items_per_page = 1; // quantity per page

if ( is_page($slug_page) ){
global $wpdb;

$search_condition = '';
$search = $_REQUEST['search']??'';
if ( $search ) $search_condition = "WHERE `cedula` like '%$search%'";

$start_number = $_REQUEST['start']??0;
if ( $start_number < 0 || ! is_numeric( $start_number ) ) $start_number=0; // Count items
    $sql="SELECT COUNT(*) FROM `$table_name` $search_condition" ; $count=$wpdb->get_var($sql);

    // Items
    $sql = "SELECT * FROM `$table_name` $search_condition LIMIT $start_number, $items_per_page";

    $items = $wpdb->get_results($sql);

    $content .= dcms_print_search($search);
    $content .= dcms_print_table($items);
    $content .= dcms_print_pagination($start_number, $items_per_page, $count, $search);
    }

    return $content;
    }

    function dcms_print_search($search){
    return '
<div class="contenedor-tabla">
<form method="get" class="container" style="
    padding: 60px 0 32px;
">
        <input type="search" minlength="2" placeholder="Ingresa el empleado" name="search" value="'.$search.'">
        <input type="submit" value="Buscar">
    </form>';
    }

    function dcms_print_table($items){
    $result = '';

    // field names
    foreach ($items as $item) {
   	$img = '/wp-content/uploads/participants-database/'.$item->foto;
    $result .= '
  <div >
    <div >
    <img src="'.$img.'" alt="sin imagén">
</div>

<div >
    <div>
        <label>Nombre</label>
        <p>'.$item->first_name.'</p>
    </div>
    <div>
        <label>Apellido</label>
        <p>'.$item->last_name.'</p>
    </div>
</div>
<div >
    <div>
        <label>Cédula</label>
        <p>'.$item->cedula.'</p>
    </div>
    <div>
        <label>Empresa</label>
        <p>'.$item->empresa.'</p>
    </div>
</div>
<div >
    <div>
        <label>Rh</label>
        <p>'.$item->rh.'</p>
    </div>
    <div>
        <label>Estado</label>
        <p>'.$item->estado.'</p>
    </div>
</div>
</div>
'

;
    }

    $template = '<div class="table-data container" style="margin: auto!important;     margin: auto!important;
    margin-bottom: 60px!important;
">
    
        {data}
    </div>
</div>
';

    return $content.str_replace('{data}', $result, $template);
    }


    function dcms_print_pagination($start_number, $items_per_page, $count, $search){
    $navbar = '';

    if ( $count > $items_per_page ){
    $nav_count = 0;
    $page_count = 1;
    $str_search = '';
    $current_page = $start_number/$items_per_page + 1;

    if ( $search ) $str_search = "&search=$search";

    while ( $nav_count < $count ) { if ( $page_count===$current_page ){ $navbar .="<span>{$page_count}</span> " ; } else
        { $navbar .="<a href='?start={$nav_count}{$str_search}'>{$page_count}</a> " ; } $nav_count +=$items_per_page;
        $page_count++; } $navbar="<section>$navbar</section>" ; } return $navbar; }