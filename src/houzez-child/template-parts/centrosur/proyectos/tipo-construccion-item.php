<?php
$tipo_construccion = get_custom_terms('t_construccion');
$area_hasta = get_custom_terms('area_hasta');

?>
<?php if(isset($area_hasta) && $area_hasta != ''):?>
<li class='h-area-hasta'>
    <span > <?php echo '<p>Hasta</p><p>'.$area_hasta.' m²</p>'; ?>  </span>
</li>
<?php endif;?>
<?php if(isset($tipo_construccion) && $tipo_construccion != ''):?>
<li class='h-tipo-construccion'>
    <span> <?php echo '<p>CONSTRUCCIÓN</p><p>'.$tipo_construccion.'</p>'; ?>  </span>
</li>
<?php endif;?>
