<?php $term_list = wp_get_object_terms(get_the_ID(), 'property_status', array('fields' => 'names'));
 ?>
<?php  if (in_array('Proyectos Nuevos', $term_list)): ?>
<div class="container px-5" id="asesor_info">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="p-title text-center">
                TU NUEVA INVERSIÓN ESPERA POR TI
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row p-infoform pb-4">
                <div class="col-12 col-md">
                    <?php get_template_part('template-parts/centrosur/proyectos/formulario-contacto-arriba');?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>