<section>
    <!--Banner-->
    <?php //print_r(get_post_meta(get_the_ID()))?>
    <div class="p-banner">

        <?php get_template_part('template-parts/centrosur/proyectos/banner-slider');?>
    </div>
    <div class="p-banner-mobile">

        <?php get_template_part('template-parts/centrosur/proyectos/banner-slider-mobile');?>
    </div>
    <!--End Banner-->

    <!--Description-->
    <div class="container-fluid py-3 gray-200">
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <?php //print_r(get_post_meta(get_the_ID()));?>
                    <div class="row cont-description">
                        <?php if(get_post_meta(get_the_ID(), 'fave_property_price', true) > 0 && get_post_meta(get_the_ID(), 'fave_property_price', true) != "") { ?>
                        <div class="col-6 col-md my-auto">
                            <div class="p-price">
                                <p>Precio desde:</p>
                                <p>$<?php echo  number_format(get_post_meta(get_the_ID(), 'fave_property_price', true),0,'.','.');?>*
                                </p>
                                <p><?php echo get_custom_terms('subtitulo_precio');?></p>
                            </div>
                        </div>
                        <?php };?>
                        <?php if( project_discount() > 0):?>
                        <div class="col-6 col-md my-auto">
                            <div class="p-price green">
                                <p><span>Descuento</span> hasta:</p>
                                <p>$<?php
                                        echo project_discount();
                                    ;?>
                                    *</p>
                                <p>*Aplican términos y condiciones</p>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="col-6 col-md-2 my-auto p-address">
                            <p><?php echo get_post_meta(get_the_ID(), 'fave_property_address', true); ?></p>
                            <p><?php echo get_post_meta(get_the_ID(),'fave_property_map_address', true);?></p>
                        </div>

                        <div class="col-6 col-md-2 my-auto p-area">
                            <p><strong>Áreas desde:
                                </strong><?php echo  get_post_meta(get_the_ID(), 'fave_property_size', true) . ' ' . get_post_meta(get_the_ID(), 'fave_property_size_prefix', true) ?>
                            </p>
                            <p><strong>Áreas hasta:
                                </strong><?php echo  get_post_meta(get_the_ID(), 'fave_property_land', true) . ' ' . get_post_meta(get_the_ID(), 'fave_property_land_postfix', true) ?>
                            </p>
                        </div>

                        <div class="col-6 col-md-2 my-auto">
                            <?php get_template_part('template-parts/centrosur/proyectos/boton-paga-cuota'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Description-->

    <!--Formulario arriba-->
    <?php
    get_template_part("template-parts/centrosur/proyectos/informacion_contacto_arriba");
    ?>
    <!--End Formulario arriba-->

    <!--action buttons-->
    <?php get_template_part('template-parts/centrosur/proyectos/action-buttons'); ?>

    <!--End action buttons-->

    <!--Videos Tabs-->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">

                <?php
            get_template_part('property-details/tabs-projects-videos-centrosur');
            ?>
            </div>
        </div>
    </div>
    <!--End videos Tabs-->

    <!--Titulo-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-maintitle-2">
                    <p> <?php echo get_the_title(); ?></p>
                    <p> <?php echo  get_custom_terms('tipo_construccion'); ?></p>
                </div>
                <?php echo '<div class="container">';
                //get_template_part('property-details/top-area-v3-4');
                echo '</div>'; ?>
            </div>
        </div>
    </div>
    <!--End titulo-->

    <!--Gallery Tabs filter-->
    <div class="container py-5">
        <div class="arrowmobile">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </div>
        <div class="row">
            <div class="col-12">
                <?php
                get_template_part("property-details/single-property-tabs-centrosur");
                ?>
            </div>
        </div>
    </div>

    <!--End Gallery Tabs filter-->

    <!--Gallery Tabs filter-->
    <!--    <div class="container-fluid pt-1 pb-4">
        <div class="row">
            <div class="col-12">
                <?php
/*                get_template_part("property-details/luxury-homes/gallery")
                */?>
            </div>
        </div>
    </div>-->
    <!--End Gallery Tabs filter-->
    <div class="container py-3" id="logo-project">
        <?php get_template_part('template-parts/centrosur/proyectos/logo-proyecto');?>
    </div>
    <!--Descripcion proyecto-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<img src="/wp-content/uploads/2021/07/nido.png" alt="" class="img-fluid d-block m-auto">-->
                <!--<p class="p-subtitle">Escucha el llamado de la naturaleza en este nuevo proyecto inmobiliario amigable con el medio ambiente en Sabaneta.</p>-->
                <!--<p>Vivenza está ubicado en el sector Machado, una zona privilegiada en el norte del Valle de Aburrá, se encuentra a tan solo 900 metros del Centro Comercial Puerta del Norte y es cercano a la estación Niquía del Metro.<br><br>En este <strong>proyecto de apartamentos nuevos en venta No VIS</strong> tendrás la oportunidad de saborear el privilegio del buen gusto, sentir la comodidad y la tranquilidad, observar los colores de la vida, respirar la pureza del aire y escuchar los sonidos de la naturaleza. Este es el lugar ideal para disfrutar con todos los sentidos.<br><br>Vivenza es un <strong>proyecto inmobiliario</strong> en construcción tradicional conformado por dos torres de 22 pisos para un total de 352 apartamentos de dos y tres alcobas, con áreas desde 50 m² hasta 70 m². Cuenta con dos ascensores por torre, parqueaderos cubiertos y amplias zonas comunes para que disfrutes en familia.<br><br>Somos Centro Sur <strong>constructora en Medellín</strong>, construimos sueños en el norte del Valle de Aburrá, sector Machado.<br><strong>Apartamentos No VIS</strong> al norte del Valle de Aburrá, en el sector Machado.</p>-->

                <?php get_template_part('property-details/description');?>
            </div>
        </div>
    </div>
    <!--End Descripcion proyecto-->
    <!--Areas construidas-->
    <?php get_template_part('template-parts/centrosur/proyectos/areas-proyecto'); ?>
    <!--End Areas construidas-->

    <!--Descripcion features-->
    <?php get_template_part('template-parts/centrosur/proyectos/detalles-proyecto');?>
    <!--End Descripcion features-->


    <!--Features-->
    <?php get_template_part('template-parts/centrosur/proyectos/especificaciones-texto');?>
    <!--Tower Tabs-->

    <?php
               get_template_part("property-details/tabs-floor-plans-centrosur");
                ?>

    <!--End Tower Tabs-->

    <!--Googlemaps-->
    <?php
                get_template_part("template-parts/centrosur/proyectos/proyecto-mapa");
                ?>

    </div>
    <!--End Googlemaps-->

    <!--Formulario-->
    <?php
    get_template_part("template-parts/centrosur/proyectos/informacion_contacto");
    ?>
    <!--End Formulario-->




    <!--Sponsor-->
    <div class="container py-5">
        <div class="row p-grouppay">
            <?php get_template_part('template-parts/centrosur/proyectos/formas-pago');?>
            <div class="col-12 col-md py-3">
                <p>Gerencia - Diseña - Construye - Vende</p>
                <!--<img src="/wp-content/uploads/2021/08/davivienda.png" alt="Davivienda">-->
                <?php get_template_part('template-parts/centrosur/proyectos/logo-centrosur-small');?>
            </div>
            <!-- <div class="col-12 col-md py-3">
                <p>Fiduciaria</p>-->
            <?php get_template_part('template-parts/centrosur/proyectos/logo-fiduciaria');?>
            <!--</div>-->
            <!-- <div class="col-12 col-md py-3">
                <p>Financia</p>-->
            <?php get_template_part('template-parts/centrosur/proyectos/logo-financia');?>
            <!--</div>-->
        </div>
    </div>
    <!--End Sponsor-->




    <!--Videos obras-->
    <!--<div class="container-fluid pb-5 pt-0">
        <div class="row pb-4">
            <div class="col-12">
                <p class="p-subtitle mt-0">Videos avances de obra</p>
                <img src="/wp-content/uploads/2021/08/bar.png" alt="" class="mx-auto d-block">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/K4TOrB7at0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/K4TOrB7at0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/K4TOrB7at0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>-->
    <!--End videos obras-->

    <!--Propiedades similares-->
    <?php $similar_projects = get_custom_terms_list('proyectos_similares');

    if(isset($similar_projects) && !empty($similar_projects) && $similar_projects != '' || (count($similar_projects) > 0)){?>
    <div class="container pb-5 pt-0">
        <div class="row">
            <div class="col">
                <div class="p-title text-center">
                    PROYECTOS SIMILARES
                </div>
                <?php
                get_template_part("property-details/similar-properties")
                ?>
            </div>
        </div>
    </div>
    <?php };?>
    <!--End Propiedades similares-->


</section>