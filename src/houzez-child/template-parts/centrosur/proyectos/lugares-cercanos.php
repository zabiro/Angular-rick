<?php
$metros = get_custom_terms_list('cercano_metro');
$canchas = get_custom_terms_list('cercano_cancha');
$iglesias = get_custom_terms_list('cercano_iglesia');
$ccs = get_custom_terms_list('cercano_cc');
$colegios = get_custom_terms_list('cercano_colegio');
$mercados = get_custom_terms_list('cercano_mercado');
$corregimientos = get_custom_terms_list('cercano_corregimiento');
$restaurantes = get_custom_terms_list('cercano_restaurante');
$ciudadelas = get_custom_terms_list('cercano_ciudadelas');
$hospitales = get_custom_terms_list('cercano_hospital');
$vias = get_custom_terms_list('cercano_vias');

?>
<?php if($metros != "" || $canchas != "" || $iglesias != "" || $ccs != "" || $colegios != "" || $mercados != "" || $corregimientos != "" || $restaurantes != "" || $ciudadelas != "" || $hospitales != "" || $vias != ""): ?>
<div class="col-12 col-md p-listicons">
    <div class="container-fluid">
        <div class="row p-near">
            <div class="col-12 py-3">
                <h3>
                    Lugares cercanos:
                </h3>
            </div>
                <?php if(!empty($metros)): foreach ($metros as $metro):?>

                <div class="col-6 col-sm-12 py-3">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/07/ico-metro.svg" alt="Estación del metro cercanas">
                        <div>
                            <p><?php echo $metro;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($ccs) && count($ccs) > 0): foreach ($ccs as $cc): ?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/07/ico-centro-comercial.svg">
                        <div>
                            <p><?php echo $cc; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
                <?php if(!empty($canchas)): foreach ($canchas as $cancha):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/07/ico-hospital.svg">
                        <div>
                            <p><?php echo $cancha;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
                <?php if(!empty($iglesias)): foreach ($iglesias as $iglesia):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/07/ico-parque.svg">
                        <div>
                            <p><?php echo $iglesia;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($ciudadelas)): foreach ($ciudadelas as $ciudadela):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/ciudadelas.png">
                        <div>
                            <p><?php echo $iglesia;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($corregimientos)): foreach ($corregimientos as $corregimiento):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/07/ico-parque.svg">
                        <div>
                            <p><?php echo $corregimiento;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($colegios)): foreach ($colegios as $colegio):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/colegios.png">
                        <div>
                            <p><?php echo $colegio;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($mercados)): foreach ($mercados as $mercado):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/tiendas_supermercados.png">
                        <div>
                            <p><?php echo $mercado;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($restaurantes)): foreach ($restaurantes as $restaurante):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/restaurantes.png">
                        <div>
                            <p><?php echo $restaurante;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($hospitales)): foreach ($hospitales as $hospital):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/hospital_cercano.png">
                        <div>
                            <p><?php echo $hospital;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>

                <?php if(!empty($vias)): foreach ($vias as $via):?>
                <div class="col-6 col-sm-12 py-2">
                    <div class="d-inline-flex align-items-center">
                        <img src="/wp-content/uploads/2021/10/vias_cercanas.png">
                        <div>
                            <p><?php echo $via;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif;?>
        </div>
    </div>
</div>
<?php endif;?>
