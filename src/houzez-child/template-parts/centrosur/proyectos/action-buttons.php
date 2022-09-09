<?php
    $video360 = get_custom_terms('video_360');
    $presentacion = get_custom_terms('presentacion_virtual');
    $brochure = get_custom_terms('brochure_proyecto');
?>
<div class="container container-small py-4">
    <div class="row d-flex ">
        <?php if(!empty($video360)): ?>
        <div class="col-6 col-md">
            <a href='<?php echo $video360 ?>'target="_blank">
                <img src="/wp-content/uploads/2021/08/apto-modelo.png" alt="" class=" img-fluid d-block m-auto py-3">
            </a>
        </div>
        <?php endif;?>
<!--        <div class="col-6 col-md">
            <a href="#" target="_blank">
                <img src="/wp-content/uploads/2021/08/video.png" alt="" class="img-fluid d-block m-auto py-3">
            </a>
        </div>-->
        <?php if(!empty($presentacion)): ?>
        <div class="col-6 col-md">
            <a href='<?php echo $presentacion; ?>' target="_blank">
                <img src="/wp-content/uploads/2021/08/presentacion.png" alt="" class="img-fluid d-block m-auto py-3">
            </a>
        </div>
        <?php endif;?>
        <?php if(!empty($brochure)): ?>
        <div class="col-6 col-md">
            <a href='<?php echo $brochure; ?>' target="_blank">
                <img src="/wp-content/uploads/2021/08/brochure.png" alt="" class="img-fluid d-block m-auto py-3">
            </a>
        </div>
        <?php endif;?>
    </div>
</div>
