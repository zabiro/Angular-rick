<?php global $post, $hide_fields, $top_area, $property_layout, $map_street_view;

$single_top_area = get_post_meta(get_the_ID(), 'fave_single_top_area', true);
$single_content_area = get_post_meta(get_the_ID(), 'fave_single_content_area', true);
$map_street_view = get_post_meta(get_the_ID(), 'fave_property_map_street_view', true);
$loggedin_to_view = get_post_meta(get_the_ID(), 'fave_loggedintoview', true);
$property_live_status = get_post_status();
$hide_fields = houzez_option('hide_detail_prop_fields');
houzez_count_property_views($post->ID);

$enable_disclaimer = houzez_option('enable_disclaimer', 1);
$global_disclaimer = houzez_option('property_disclaimer');
$property_disclaimer = get_post_meta(get_the_ID(), 'fave_property_disclaimer', true);

if (!empty($property_disclaimer)) {
    $global_disclaimer = $property_disclaimer;
}

if (($property_live_status == 'on_hold') && ($post->post_author != get_current_user_id())) {
    wp_redirect(home_url());
}

$is_sticky = '';
$sticky_sidebar = houzez_option('sticky_sidebar');
if ($sticky_sidebar['single_property'] != 0) {
    $is_sticky = 'houzez_sticky';
}

$is_full_width = houzez_option('is_full_width');
$top_area = houzez_option('prop-top-area');
$property_layout = houzez_option('prop-content-layout');

if (isset($_GET['is_full_width'])) {
    $is_full_width = 1;
}

if ($is_full_width == 1) {
    $content_classes = 'col-lg-12 col-md-12 bt-full-width-content-wrap';
} else {
    $content_classes = 'col-lg-8 col-md-12 bt-content-wrap';
}

if (!empty($single_top_area) && $single_top_area != 'global') {
    $top_area = $single_top_area;
}

if (!empty($single_content_area) && $single_content_area != 'global') {
    $property_layout = $single_content_area;
}

/* For demo purpose only */
if (isset($_GET['s_top'])) {
    $top_area = $_GET['s_top'];
}
if (isset($_GET['s_layout'])) {
    $property_layout = $_GET['s_layout'];
} ?>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="p-maintitle">

                    <p> <?php echo get_the_title(); ?></p>
                    <p><?php echo get_post_meta(get_the_ID(), 'fave_property_id', true) ?></p>
                </div>
                <p style="
    text-align: center;
    border-bottom: 2px #dedede solid;
">Imágenes</p>
            </div>
        </div>
    </div>

    <!--Galeria-->
    <?php get_template_part('property-details/luxury-homes/gallery-inmobiliaria'); ?>
    <!--     <?php foreach (get_post_meta(get_the_ID(), 'fotos', true) as $val) {
                            echo "<img src='" . $val['foto'] . "' alt=''";
                        } ?> -->
    <!--  <div class="container-fluid py-5">

       <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>  -->
    <!--End Galeria-->

    <!--Description-->
    <div class="container-fluid py-5 gray-200">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row cont-description">
                        <div class="col-6 col-md my-auto">
                            <?php  if (in_array('Venta', $args['category'])): ?>
                            <div class="p-price">
                                <p>Precio:</p>
                                <p> <?php echo "$".number_format( get_post_meta(get_the_ID(), 'fave_property_price', true), 0) ?>
                                </p>
                                <p></p>
                            </div>
                            <?php else: ?>
                            <div class="p-price">
                                <p>Canon:</p>
                                <p> <?php echo "$".number_format( get_post_meta(get_the_ID(), 'fave_property_price', true), 0) ?>
                                </p>
                                <p>*Mensual</p>
                            </div>
                            <?php endif ?>
                        </div>
                        <?php if (get_post_meta(get_the_ID(), 'fave_property_size', true) > 0): ?>
                        <div class="col-6 col-md my-auto">
                            <div class="d-inline-flex p-composition">
                                <img src="/wp-content/uploads/2021/08/size.png" alt="size">
                                <div>
                                    <p>Área:</p>
                                    <p><?php echo  get_post_meta(get_the_ID(), 'fave_property_size', true) . ' ' . get_post_meta(get_the_ID(), 'fave_property_size_prefix', true) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php endif ?>
                        <?php if (get_post_meta(get_the_ID(), 'fave_property_bedrooms', true) > 0): ?>
                        <div class="col-6 col-md my-auto">
                            <div class="d-inline-flex p-composition">
                                <img src="/wp-content/uploads/2021/08/rooms.png" alt="rooms">
                                <div>
                                    <p>Habitaciones</p>
                                    <p><?php echo  get_post_meta(get_the_ID(), 'fave_property_bedrooms', true) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php endif ?>
                        <?php if (get_post_meta(get_the_ID(), 'fave_property_bathrooms', true) > 0): ?>
                        <div class="col-6 col-md my-auto">
                            <div class="d-inline-flex p-composition">
                                <img src="/wp-content/uploads/2021/08/bathroom.png" alt="bathrooms">
                                <div>
                                    <p>Baños</p>
                                    <p><?php echo  get_post_meta(get_the_ID(), 'fave_property_bathrooms', true) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php endif ?>
                        <?php if (get_post_meta(get_the_ID(), 'fave_property_garage', true) > 0): ?>
                        <div class="col-6 col-md my-auto">
                            <div class="d-inline-flex p-composition">
                                <img src="/wp-content/uploads/2021/08/parking.png" alt="parking">
                                <div>
                                    <p>Parqueadero</p>
                                    <p><?php echo  get_post_meta(get_the_ID(), 'fave_property_garage', true) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php endif ?>

                        <div class="col-6 col-md my-auto">
                            <div class="d-inline-flex p-composition">
                                <img src="/wp-content/uploads/2021/08/useful-room.png" alt="useful room">
                                <div>
                                    <p>Cuarto útil</p>
                                    <p>No</p>
                                    <!--  <p><?php echo  get_post_meta(get_the_ID(), 'fave_property_util', true) ?></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md my-auto">
                            <div class="p-button"><a target="_blank"
                                    href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=<?php echo  get_post_meta(get_the_ID(), 'fave_property_id', true) ?>">
                                    Ver ficha</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Description-->
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="p-subtitle">Descripción del inmueble</p>
                <p> <?php echo  get_the_content() ?> </p>

                <p class="p-description pt-4">UBICACIÓN:
                    <span><?php echo  get_post_meta(get_the_ID(), 'fave_property_map_address', true) ?></span> | ESTADO
                    DEL INMUEBLE: <span><?php echo get_post_meta(get_the_ID(), 'id_estado_inmueble', true) ?></span> |
                    ESTRATO: <span><?php echo  get_post_meta(get_the_ID(), 'estrato', true) ?></span></p>
            </div>
        </div>
    </div>


    <!--Formulario-->
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="p-subtitle">¿Estás interesado en un inmueble? Completa el formulario y te contactaremos.</p>
                <?php echo do_shortcode('[contact-form-7 id="19057" title="Contacto arriendos"]'); ?>
            </div>
        </div>
    </div>
    <!--End Formulario-->


    <!--Features-->
    <div class="container-fluid py-5 gray-200">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="p-title">
                            <img src="/wp-content/uploads/2021/08/sofa-1.png" alt="sofa"> ESPECIFICACIONES INTERNAS
                        </div>
                        <ul>
                            <?php
                            foreach (get_post_meta(get_the_ID(), 'caracteristicas_internas', true) as $val) {
                                echo "<li>" . $val['Descripcion'] . "</li>";
                            } ?>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="p-title">
                            <img src="/wp-content/uploads/2021/08/building.png" alt="building"> ESPECIFICACIONES
                            EXTERNAS
                        </div>
                        <ul>
                            <?php foreach (get_post_meta(get_the_ID(), 'caracteristicas_externas', true) as $val) {
                                echo "<li>" . $val['Descripcion'] . "</li>";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Features-->

    <!--Googlemaps-->
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="p-subtitle">Ubicación del inmueble</p>
                <iframe
                    src="https://maps.google.com/maps?q=<?php echo  get_post_meta(get_the_ID(), 'fave_property_location', true) ?>&hl=es;z=14&amp;output=embed"
                    width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy"
                    class="m-auto"></iframe>
            </div>
        </div>
    </div>
    <!--End Googlemaps-->


    <!--Propiedades similares-->
    <div class="container py-5">
        <div class="row">
            <b></b>
            <div class="col">
                <p class="p-subtitle">Inmuebles similares</p>
                <?php get_template_part('property-details/similar-properties-inmobiliaria'); ?>

            </div>
        </div>
    </div>
    <!--End Propiedades similares-->


</section>
