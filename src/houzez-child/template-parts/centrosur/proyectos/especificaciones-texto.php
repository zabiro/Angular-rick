<?php
    $hasespecification = get_custom_terms('tiene_especificaciones');
    $texto = get_custom_terms('especificaciones_texto');
    $gimnasiosemi = get_custom_terms('esp_gimnasio_semidotado');
    $gimnasioadultos = get_custom_terms('esp_gimnasio_adultos');
    $placadeportiva = get_custom_terms('esp_placa_deportiva');
    $salontematico = get_custom_terms('esp_salon_tematico');
    $salonsocial = get_custom_terms('esp_salon_social');
    $salontv = get_custom_terms('esp_salon_tv');
    $piscina_adultos_ninos = get_custom_terms('esp_piscinas_adultos_ninos');
    $piscina_adultos = get_custom_terms('esp_piscinas_adultos');
    $piscina_ninos = get_custom_terms('esp_piscinas_ninos');
    $juegosacuaticos = get_custom_terms('esp_juegos_acuaticos');
    $estacionsaludable = get_custom_terms('esp_estacion_saludable');
    $estacionamigable= get_custom_terms('esp_estacion_amigable');
    $ampliaszonasverdes= get_custom_terms('esp_zonas_verdes');
    $plazoleta_central = get_custom_terms('esp_plazoleta_central');
    $coworking = get_custom_terms('esp_coworking');
    $coworking_terraza = get_custom_terms('esp_coworking_terraza');
    $solarium = get_custom_terms('esp_solarium');
    $turco = get_custom_terms('esp_turco');
    $zonabbq = get_custom_terms('esp_zona_bbq');
    $sendero = get_custom_terms('esp_sendero_ecologico');
    $senderoverde = get_custom_terms('esp_sendero_verde');
    $juegosinfantiles = get_custom_terms('esp_juegos_infantiles');
    $parqueinfantil = get_custom_terms('esp_parque_infantil');
    $casamunecas = get_custom_terms('esp_casa_munecas');
    $brinquitos = get_custom_terms('esp_brinquitos');
    $parquemascotas = get_custom_terms('esp_zona_mascotas');
    $zonapets = get_custom_terms('esp_zona_pets');
    $salonrecreacion = get_custom_terms('esp_salon_recreacion');
    $salonjuegos = get_custom_terms('esp_salon_juegos');
    $localescomerciales = get_custom_terms('esp_locales_comerciales');
    $salareuniones = get_custom_terms('esp_sala_reuniones');
    $canchamultiple = get_custom_terms('esp_cancha_multiple');
    $salontematiconinos = get_custom_terms('esp_salon_tematico_ninos');
    $salonbienestaryoga = get_custom_terms('esp_salon_bienestar_yoga');
    $zonapicnic = get_custom_terms('esp_zona_picnic');
    $canchagramasintetica = get_custom_terms('cancha_grama_sintetica');
    $zonajuegosaguaninos = get_custom_terms('esp_zona_juego_agua_ninos');
    $acabadosimagen = get_custom_terms('imagen_acabados');
    $acabadosgris = get_custom_terms_list('acabado_gris');
    $acabadosbasicos = get_custom_terms_list('acabado_basico');
    $acabadosplus = get_custom_terms_list('acabado_plus');
    $acabadosultra = get_custom_terms_list('acabado_ultra');
    $acabadosultraplus = get_custom_terms_list('acabado_ultra_plus');
    ?>
<!--Features-->
<?php  if($hasespecification != "" && strtolower($hasespecification) == 'si'):?>
<div class="container-fluid py-5 gray-200">
    <div class="row">
        <div class="col-12">
            <div class="p-title text-center">
                ESPECIFICACIONES
            </div>
            <p class="text-center p-half">
                <?php echo $texto; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row p-specs">
                <div class="col-12 col-md">
                    <ul>
                        <?php if (strtolower($gimnasiosemi) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-5.svg">
                            <span>Gimnasio semidotado</span>
                        </li>
                        <?php endif;?>
                        <?php if (strtolower($gimnasioadultos) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-5.svg">
                            <span>Gimnasio adultos</span>
                        </li>
                        <?php endif;?>
                        <?php if (strtolower($salontematico )== 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-4.svg">
                            <span>Salón temático para niños</span>
                        </li>
                        <?php endif;?>
                        <?php if (strtolower($salonsocial )== 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-3.svg">
                            <span>Salón social</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($piscina_adultos_ninos ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-2.svg">
                            <span>Piscina adultos y niños</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($piscina_adultos ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-2.svg">
                            <span>Piscina adultos</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($piscina_ninos ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-2.svg">
                            <span>Piscina niños</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($coworking ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-1.svg">
                            <span>Co-working</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($coworking_terraza ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/11/coworking-con-terraza.png">
                            <span>Co-working con terraza</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($plazoleta_central ) == 'si'):?>
                        <li>

                            <img src="/wp-content/uploads/2021/10/plazoleta-central.png">
                            <span>Plazoleta Central</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($juegosacuaticos ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/10/juegos-acuaticos.png">
                            <span>Juegos Acuaticos</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($salareuniones ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/10/sala_reuniones-1.png">
                            <span>Sala Reuniones</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($zonapicnic ) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-10.svg">
                            <span>Zona picnic</span>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="col-12 col-md">
                    <ul>
                        <?php if (strtolower($solarium) == 'si'):?>
                       <li>
                            <img src="/wp-content/uploads/2021/08/diamond-7.svg">
                            <span>Solárium</span>
                        </li>
                        <?php endif;?>
                        <?php if (strtolower($turco) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-8.svg">
                            <span>Turco</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($placadeportiva) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-9.svg">
                            <span>Placa polideportiva</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($zonabbq) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-10.svg">
                            <span>Zona de Bbq</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($sendero) == 'si' || strtolower($senderoverde) == 'si'  ):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-11.svg">
                            <?php if (strtolower($sendero) == 'si'  ):?>
                                <span>Sendero ecológico</span>
                            <?php elseif ( strtolower($senderoverde) == 'si'): ?>
                                <span>Sendero verde</span>
                            <?php endif;?>
                        </li>
                        <?php endif;?>
                        <?php if (strtolower($localescomerciales ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/08/diamond-1.svg">
                                <span>Locales comerciales</span>
                            </li>
                        <?php endif; ?>
                        <?php if (strtolower($estacionsaludable ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/20/estacion-saludable.png">
                                <span>Estacion Saludable</span>
                            </li>
                        <?php endif; ?>
                        <?php if (strtolower($ampliaszonasverdes ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/10/amplias-zonas-verdes.png">
                                <span>Amplias Zonas Verdes</span>
                            </li>
                        <?php endif; ?>
                        <?php if (strtolower($canchagramasintetica ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/11/cancha-sintetica.png">
                                <span>Cancha sintetica</span>
                            </li>
                        <?php endif; ?>
                        <?php if (strtolower($zonajuegosaguaninos ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/11/cancha-sintetica.png">
                                <span>Zona juegos de agua para ninos</span>
                            </li>
                        <?php endif; ?>
                        <?php if (strtolower($salonbienestaryoga ) == 'si'):?>
                            <li>
                                <img src="/wp-content/uploads/2021/11/cancha-sintetica.png">
                                <span>Salón de bienestar (yoga) </span>
                            </li>
                        <?php endif; ?>


                    </ul>
                </div>
                <div class="col-12 col-md">
                    <ul>
                        <?php if (strtolower($juegosinfantiles) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-12.svg">
                            <span>Juegos infantiles</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($parqueinfantil) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-12.svg">
                            <span>Parque infantil</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($salonjuegos) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-12.svg">
                            <span>Salon de juegos para niños</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($casamunecas) == 'si'):?>
                        <li>
                             <img src="/wp-content/uploads/2021/08/diamond-13.svg">
                             <span>Casa de muñecas</span>
                         </li>
                        <?php endif; ?>
                        <?php if (strtolower($brinquitos) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-14.svg">
                            <span>Brinquitos</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($parquemascotas) == 'si' || strtolower($zonapets) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-15.svg">
                             <?php if (strtolower($parquemascotas) == 'si' ):?>
                                <span>Parque de mascotas</span>
                            <?php elseif(strtolower($zonapets) == 'si'):?>
                                 <span>Zona pets</span>
                            <?php endif;?>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($salonrecreacion) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/08/diamond-16.svg">
                            <span>Salón de recreación</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($salontv) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/10/salon-tv.png">
                            <span>Salón de TV</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($estacionamigable) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/10/estacion-amigable.png">
                            <span>Estacion amigable/span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($canchamultiple) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/11/cancha-multiple.png">
                            <span>Cancha multiple</span>
                        </li>
                        <?php endif; ?>
                        <?php if (strtolower($salontematiconinos) == 'si'):?>
                        <li>
                            <img src="/wp-content/uploads/2021/11/salo-tematico-para-niños.png">
                            <span>Salón tematico para niños</span>
                        </li>
                        <?php endif; ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!--End Features-->


<!--Especificaciones-->
<?php if($acabadosimagen != ""):?>
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <img src="<?php echo $acabadosimagen; ?>" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md">
            <div class="p-title">
                ESPECIFICACIONES DE ACABADOS
            </div>
            <div class="accord py-4">
                <?php if(!empty($acabadosgris) && count($acabadosgris) > 0): ?>
                   <?php if($acabadosgris[0] != ""):?>
                        <input type="checkbox" id="acc1" />
                        <label for="acc1">Acabado Gris </label>
                        <div class="content">
                            <ul>
                                <?php foreach ($acabadosgris as $ac):?>
                                    <li><?php echo $ac; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                   <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($acabadosbasicos) && count($acabadosbasicos) > 0): ?>
                    <?php if($acabadosbasicos[0] != ""):?>
                    <input type="checkbox" id="acc2" />
                    <label for="acc2">Acabado Básico </label>
                    <div class="content">
                        <ul>
                            <?php foreach ($acabadosbasicos as $ac):?>
                                <li><?php echo $ac; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($acabadosplus) && count($acabadosplus) > 0): ?>
                    <?php if($acabadosplus[0] != ""):?>
                        <input type="checkbox" id="acc3" />
                        <label for="acc3">Acabado Plus </label>
                        <div class="content">
                            <ul>
                                <?php foreach ($acabadosplus as $ac):?>
                                    <li><?php echo $ac; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($acabadosultra) && count($acabadosultra) > 0): ?>
                    <?php if($acabadosultra[0] != ""):?>
                        <input type="checkbox" id="acc4" />
                        <label for="acc4">Acabados Ultra</label>
                        <div class="content">
                            <ul>
                                <?php foreach ($acabadosultra as $ac):?>
                                    <li><?php echo $ac; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($acabadosultraplus) && count($acabadosultraplus) > 0): ?>
                    <?php if($acabadosultraplus[0] != ""):?>
                        <input type="checkbox" id="acc5" />
                        <label for="acc5">Acabados Ultra Plus</label>
                        <div class="content">
                            <ul>
                                <?php foreach ($acabadosultraplus as $ac):?>
                                    <li><?php echo $ac; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!--End Especificaciones-->

