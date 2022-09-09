<?php
$areaconstruida = get_custom_terms('area_construida');
$areaneta = get_custom_terms('area_neta');
?>
<?php if($areaconstruida != "" && $areaneta != ""):?>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center"><span><strong>Area total construida:</strong></span><?php echo $areaconstruida?></div>
            <div class="col-12 text-center"><span><strong>Area netas:</strong></span><?php echo $areaneta?></div>
        </div>
    </div>
<?php endif;?>
