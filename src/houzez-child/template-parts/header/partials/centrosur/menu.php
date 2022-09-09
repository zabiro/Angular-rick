<?php
//$logo = strval(get_template_part('template-parts/header/partials/logo'));
$output = '
<div class="preheader"><a href="/"><img src="/wp-content/uploads/2021/07/logo.png" alt="" class="logo"></a>
<div class="sub">
        <div class="services noborderleft">
            <img src="/wp-content/uploads/2021/07//ico-call.png">
            <a href="/linea-transparencia/"><p>LÍNEA DE TRANSPARENCIA</p></a>
        </div>
        <div class="services borderLeft">
            <img src="/wp-content/uploads/2021/07//ico-job.png">
            <p><a href="/trabaja-con-nosotros/" style="color:#1C3D71">TRABAJA CON NOSOTROS</a></p>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/centrosurconstructora/" target="_blank"><img src="/wp-content/uploads/2021/07//face.png"></a>
            <a href="https://www.instagram.com/centrosurconstructora/" target="_blank"><img src="/wp-content/uploads/2021/07//insta.png"></a>
            <a href="https://www.youtube.com/channel/UCVus1im_hQjwNQsD8jQmIhg" target="_blank"><img src="/wp-content/uploads/2021/07//you.png" style="margin-left: 5px;"></a>
        </div>
        <div class="services border-left borderright padright" id="calculator">
            <img src="/wp-content/uploads/2021/07//ico-calc.png">
            <p class="extrabold">CALCULADORA<br>FINANCIERA</p>
        </div>
        <div class="payment-button noborderleft ">
            <button id="paybutton-menu">PAGAR</button>
            <div class="submenu" id="submenuPay">
            <ul>
                <li>
                    <a href="/el-inicio-de-un-gran-sueno/">Tu cuota</a>
                </li>
                <li>
                    <a href="/facil-comodo-y-seguro/">Separación de tu inmueble</a>
                </li>
                <li>
                    <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=9983" target="_blank">Otros pagos</a>
                </li>
            </ul>
        </div>
        
        </div>
        
    </div>
</div>';
echo $output;

/*<div id="asesorModal">
    <div id="formmodal">
        <div id="closeasesor">
            <img src="/wp-content/uploads/2021/07/close.png" alt="close button" width="16" height="16" id="closeasesor">
            <p>Cerrar</p>
        </div>
        ';
$output .= do_shortcode('[contact-form-7 id="23127" title="Contacto asesor proyecto modal"]');
$output .= '
    </div>
</div>

';
//$output .= $logo ;

