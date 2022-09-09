   <?php
   $torres = get_custom_terms('cantidad_torres');
   $ascensores = get_custom_terms('ascensores_torre');
   $parqueadero = get_custom_terms('parqueadero_cubierto');
   $parqueaderocomun = get_custom_terms('parqueaderos_comunes');
   $zonahumeda = get_custom_terms('zona_humeda');
   $gimnasiosemi = get_custom_terms('gimnasio_semidotado');
   $gimnasiourbano = get_custom_terms('gimnasio_urbano');
   $placadeportiva = get_custom_terms('placa_deportiva');
   $casasdosniveles = get_custom_terms('casas_dos_niveles');
   $canchamultiple = get_custom_terms('placa_deportiva');
   $canchasintetica = get_custom_terms('cancha_grama_sintetica');
   $salontematico = get_custom_terms('salon_tematico');
   $salonsocial = get_custom_terms('salon_social');
   $piscina_adultos_ninos = get_custom_terms('piscinas_adultos_ninos');
   $piscina_adultos = get_custom_terms('piscinas_adultos');
   $coworking = get_custom_terms('coworking');
   $coworkingconterraza = get_custom_terms('coworking_con_terraza');
   $solarium = get_custom_terms('solarium');
   $turco = get_custom_terms('turco');
   $zonabbq = get_custom_terms('zona_bbq');
   $sendero = get_custom_terms('sendero_ecologico');
   $sendero_verde = get_custom_terms('sendero_verde');
   $juegosinfantiles = get_custom_terms('juegos_infantiles');
   $casamunecas = get_custom_terms('casa_munecas');
   $brinquitos = get_custom_terms('brinquitos');
   $parquemascotas = get_custom_terms('zona_mascotas');
   $zonapets = get_custom_terms('zona_pets');
   $salonrecreacion = get_custom_terms('salon_recreacion');
   $localescomerciales = get_custom_terms('locales_comerciales');
   $procesocertificacionedge = get_custom_terms('proceso_edge');
   $certificacionedge = get_custom_terms('edge');
   $parqueoelectrico = get_custom_terms('parqueo_electrico');
   $panelessolares = get_custom_terms('paneles_solares');
   $muros_naturales = get_custom_terms('muros_verdes');
   $lobby = get_custom_terms('lobby');
   $excelenteubicacion = get_custom_terms('excelente_ubicacion');
   $granvista = get_custom_terms('gran_visibilidad');
   $accesoparqueaderos = get_custom_terms('acceso_parqueaderos');
   $lobbydoblealtura = get_custom_terms('lobby_doblealtura');
   $placapolideportiva = get_custom_terms('placa_polideportiva');
   ?>
    <div class="container pt-2 pb-5">
        <div class="row p-property-items">

            <?php if ($torres > 0): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">

                        <?php if($torres > 1) {
                            echo '<img src="/wp-content/uploads/2021/08/torre.svg" alt="building">

                        <div>
                            <p>' . $torres . '<br>
                                Torres</p>
                        </div>';
                        }else{
                            echo '<img src="/wp-content/uploads/2021/08/torre.svg" alt="building">

                        <div>
                            <p>' . $torres . '<br>
                                Torre</p>
                        </div>';
                        }

                   ?>
                </div>
            </div>
            <?php endif;?>

            <?php if($ascensores > 0): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <?php echo '<img src="/wp-content/uploads/2021/08/ascensor.svg" alt="Ascensor">
                    <div>
                        <p>'.$ascensores.' Ascensores
                            por torre</p>
                    </div>';?>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($parqueadero == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/parqueadero.svg" alt="Parqueadero">
                    <div>
                        <p>Parqueadero
                            cubierto</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($parqueaderocomun > 0 ): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/parqueadero.svg" alt="Parqueadero">
                    <div>
                        <p> <?php echo $parqueaderocomun;?> Parqueaderos
                            comunes</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($zonahumeda == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/zona-humeda.svg" alt="Zona humeda">
                    <div>
                        <p>Zona
                            húmeda</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($gimnasiosemi == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/gym-big.svg" alt="Placa deportiva">
                    <div>
                        <p>Gimnasio semidotado</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ( $placadeportiva == 'si' || $placapolideportiva == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/cancha-sintetica-1.png" alt="building">
                    <div>
                        <?php if ($placapolideportiva == 'si'): ?>
                        <p>Placa
                            polideportiva</p>
                        <?php elseif ($placadeportiva == 'si '):?>
                            <p>Placa
                                deportiva</p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endif;?>


            <?php if ($canchasintetica == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/cancha-sintetica.png">
                    <div>
                        <p>Cancha grama sintetica
                        </p>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($salonsocial == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-3.svg" alt="building">
                    <div>
                        <p>Salon Social</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($coworking == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-1.svg" alt="building">
                    <div>
                        <p>Co-Working</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($sendero == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-11.svg" alt="building">
                    <div>
                        <p>Sendero</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($sendero_verde == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-11.svg" alt="building">
                    <div>
                        <p>Sendero verde</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($juegosinfantiles == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-12.svg" alt="building">
                    <div>
                        <p>Juegos Infantiles</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($parquemascotas == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-15.svg" alt="building">
                    <div>
                        <p>Parque mascotas</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($zonapets == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-15.svg" alt="building">
                    <div>
                        <p>Zona pet</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($salonrecreacion == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-16.svg" alt="building">
                    <div>
                        <p>Salon recreación</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($localescomerciales == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/08/diamond-1.svg" alt="building">
                    <div>
                        <p>locales comerciales</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($procesocertificacionedge == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/edge.png" alt="building">
                    <div>
                        <p>Proceso de certificación</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($certificacionedge == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/edge.png" alt="building">
                    <div>
                        <p>Certificación sostenible</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($parqueoelectrico == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/parqueadero_electronico.png" alt="building">
                    <div>
                        <p>Parqueo Eléctrico</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($panelessolares == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/paneles_solares.png" alt="building">
                    <div>
                        <p>Paneles Solares</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($muros_naturales == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/muros_verdes_naturales.png" alt="building">
                    <div>
                        <p>Muros verdes naturales</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($lobby == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/10/paneles_solares.png" alt="building">
                    <div>
                        <p>lobby</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($lobbydoblealtura == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/lobby-doble-altura.png" alt="building">
                    <div>
                        <p>Lobby doble altura</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($zonabbq == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/zona-bbq.png" alt="building">
                    <div>
                        <p>Zona BBQ</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($excelenteubicacion == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/excelente-ubicacion.png" alt="building">
                    <div>
                        <p>Excelente ubicación</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($granvista == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/gran-visibilidad.png" alt="building">
                    <div>
                        <p>Gran visibilidad</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($accesoparqueaderos == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/accesos-a-parqueaderos.png" alt="building">
                    <div>
                        <p>Acceso a parqueaderos</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($coworkingconterraza == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/coworking-con-terraza.png" alt="building">
                    <div>
                        <p>Coworking con terraza</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($casasdosniveles == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/casadedosniveles-1.png" alt="building">
                    <div>
                        <p>Casas 2 niveles</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if ($gimnasiourbano == 'si'): ?>
            <div class="col-6 col-md">
                <div class="d-inline-flex p-composition-2">
                    <img src="/wp-content/uploads/2021/11/gimnasio-urbano.png" alt="building">
                    <div>
                        <p>Gimnasio urbano</p>
                    </div>
                </div>
            </div>
            <?php endif;?>

        </div>
    </div>
