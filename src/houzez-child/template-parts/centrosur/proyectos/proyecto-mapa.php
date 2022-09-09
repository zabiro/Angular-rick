<?php
$mapa = get_custom_terms('mapa');
?>
<?php  if($mapa != ""):?>
    <div class="row">
        <div class="col">
            <div class="p-title text-center">
                VISÍTANOS Y CONOCE TU PRÓXIMA INVERSIÓN
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8">
            <?php echo $mapa; ?>
        </div>
        <?php get_template_part('template-parts/centrosur/proyectos/lugares-cercanos');?>
    </div>

<?php endif; ?>
