<?php
$financia = strtolower(get_custom_terms('financia'));
switch ($financia){
    case 'davivienda';
        echo '  <div class="col-12 col-md py-3">
                <p>Financia</p><img src="/wp-content/uploads/2021/10/davivienda.png" alt="Financia Banco Davivienda"></div>';
        break;
    case 'colpatria';
        echo '  <div class="col-12 col-md py-3">
                <p>Financia</p><img src="/wp-content/uploads/2021/10/colpatria.png" alt="Financia Banco Colpatria"></div>';
        break;
    case 'caja social';
        echo '  <div class="col-12 col-md py-3">
                <p>Financia</p><img src="/wp-content/uploads/2021/10/caja-social.png" alt="Financia Banco Caja Social"></div>';
        break;
    case 'banco bogota';
        echo '  <div class="col-12 col-md py-3">
                <p>Financia</p><img src="/wp-content/uploads/2019/02/banco_de_bogota.jpg" alt="Financia Banco Bogotá"></div>';
        break;

}
?>


