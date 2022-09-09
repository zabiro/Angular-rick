<?php
$property_id = get_the_ID();
$form = get_custom_terms('formulario_contacto');
$term_list = wp_get_object_terms($property_id, 'property_status', array('fields' => 'names'));

$output = '<div class="modal-project asesorModal-'.$property_id.' ">

    <div class="formmodal">
        <div class="closeasesor" onclick="formVisible('.$property_id.')">
            <img src="/wp-content/uploads/2021/07/close.png" alt="close button" width="16" height="16" id="closeasesor">
            <p>Cerrar</p>
        </div>
        <h3 class="diana">Hola, soy Diana</h3>
        <h3>Te brindaré toda la información de tu próxima inversión. ¡Contáctanos!</h3>
        <img src="/wp-content/uploads/2021/06/foto-asesora-1.png" alt="">

        ';
if(in_array('Arriendo', $term_list)){
    $output .= do_shortcode('[contact-form-7 id="19057" title="Contacto arriendos"]');
}elseif (in_array('Proyectos Nuevos', $term_list)){
    $output .= do_shortcode($form);
}

$output .= '
    </div>
</div>
';

echo $output;
