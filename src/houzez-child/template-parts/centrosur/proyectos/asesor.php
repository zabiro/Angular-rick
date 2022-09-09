<?php
$asesornombre   =   get_custom_terms('nombre asesor');
$asesorimagen    =  get_custom_terms('imagen asesor');

?>

<div class="col-12 col-md">
    <h3 class="diana">Hola, soy <?php echo $asesornombre; ?></h3>
    <h3>Te brindaré toda la información de tu próxima inversión. ¡Contáctanos!</h3>
    <img src="<?php echo $asesorimagen;?>" alt="">
</div>
