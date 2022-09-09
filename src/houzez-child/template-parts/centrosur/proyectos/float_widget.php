<?php $telefono = get_custom_terms('telefono');
$simcotizacion = get_custom_terms('simulaCotizacion');
$agendaCita  = get_custom_terms('agendaCita');
$celular = get_custom_terms_list('celular');?>
<div class="floatwidget">
    <ul>
        <?php if(!empty($celular)){

            foreach ($celular as $cel){

                echo '<li>
           <a href="https://wa.me/+57'. str_replace(' ','',$cel).'" target="_blank">
            <img src="/wp-content/uploads/2021/07/b-whatsapp.png" alt="WhatsApp" title="WhatsApp"></a>
        </li>';
            }
        }?>
        <?php if((isset($telefono)) && (!empty($telefono)) && ($telefono != '')){
            echo '
        <li>
            <a href="tel:'. str_replace(' ','',$telefono). 'target="_blank">
                <img src="/wp-content/uploads/2021/07/b-call.png" alt="Llamada" title="Llamada">
            </a>
        </li>';
        }; ?>
        <?php if((isset($simcotizacion)) && (!empty($simcotizacion)) && ($simcotizacion != '')){
            echo '
                <li id="simulaCotizacion">
                    <a href="'.$simcotizacion.'" target="_blank"><img src="/wp-content/uploads/2021/07/b-calc.png" alt="Simula tu cotización" title="Simula tu cotización"></a>
                </li>';
        }; ?>
        <?php if((isset($agendaCita)) && (!empty($agendaCita)) && ($agendaCita != '')){
             echo ' <li id="agendaCita">
                        <a href="'.$agendaCita.'" target="_blank"><img src="/wp-content/uploads/2021/07/b-calendar.png" alt="Agenda tu cita" title="Agenda tu cita"></a>
                    </li>';
        }; ?>
    </ul>
</div>
