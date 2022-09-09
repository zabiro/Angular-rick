function switchStyle() {
    if (document.getElementById('styleSwitch').checked) {
        document.getElementById('gallery').classList.add("custom");
        document.getElementById('exampleModal').classList.add("custom");
    } else {
        document.getElementById('gallery').classList.remove("custom");
        document.getElementById('exampleModal').classList.remove("custom");
    }
}

var hideselect = function hideselect() {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    (function($) {
        switch (window.location.pathname) {
            case '/resultados/':
                var namelocation = 0
                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');
                    //console.log(sParameterName[0]);
                    if (sParameterName[0] === 'currency') {
                        namelocation = 1
                    }
                }
                console.log(namelocation)
                if (namelocation == 1) {
                    $('#bs-select-2-1').hide()
                    $('#bs-select-2-2').hide()
                    $('#bs-select-2-3').hide()
                    $('#bs-select-2-4').hide()
                    $('#bs-select-2-5').hide()
                    $('#bs-select-2-6').hide()
                    $('#bs-select-2-7').hide()
                    $('#bs-select-2-8').hide()
                    $('#bs-select-2-9').hide()
                    $('#bs-select-2-10').hide()
                    $('#bs-select-2-11').hide()
                    $('#bs-select-2-12').hide()
                    $('#bs-select-2-13').hide()
                    $('#bs-select-2-14').hide()
                    $('#bs-select-2-15').hide()
                    $('#bs-select-2-16').hide()
                    $('#bs-select-2-17').hide()
                    $('#bs-select-2-18').hide()
                    $('#bs-select-2-19').hide()
                    $('#bs-select-2-20').hide()
                    $('#bs-select-2-21').hide()
                    $('#bs-select-2-22').hide()
                    $('#bs-select-2-23').hide()
                    $('#bs-select-2-24').hide()
                    $('#bs-select-2-29').hide()
                    $('#bs-select-3-1').hide()
                    $('#bs-select-3-2').hide()
                    $('#bs-select-3-3').hide()
                    $('#bs-select-3-4').hide()
                    $('#bs-select-3-10').hide()
                    $('#bs-select-3-11').hide()
                    $('#form-field-field-status').val('proyectos-nuevos')
                    $('#form-field-2ede86c').val('COP')
                    $('#form-field-3994991').val('venta')
                } else {
                    $('#bs-select-2-1').hide();
                    $('#bs-select-2-4').hide()
                    $('#bs-select-2-5').hide()
                    $('#bs-select-2-6').hide()
                    $('#bs-select-2-7').hide()
                    $('#bs-select-2-8').hide()
                    $('#bs-select-2-9').hide()
                    $('#bs-select-2-11').hide()
                    $('#bs-select-2-12').hide()
                    $('#bs-select-2-13').hide()
                    $('#bs-select-2-14').hide()
                    $('#bs-select-2-15').hide()
                    $('#bs-select-2-16').hide()
                    $('#bs-select-2-17').hide()
                    $('#bs-select-2-18').hide()
                    $('#bs-select-2-22').hide()
                    $('#bs-select-2-23').hide()
                    $('#bs-select-2-24').hide()
                    $('#bs-select-2-25').hide()
                    $('#bs-select-2-26').hide()
                    $('#bs-select-2-27').hide()
                    $('#bs-select-2-28').hide()
                    $('#bs-select-2-29').hide()
                    $('.elementor-field-group-1bd2f03').hide()
                        // $('#form-field-3994991').val('arriendo')

                }

                break;
            case '/arrendamientos/':
                $('#bs-select-2-1').hide();
                $('#bs-select-2-4').hide()
                $('#bs-select-2-5').hide()
                $('#bs-select-2-6').hide()
                $('#bs-select-2-7').hide()
                $('#bs-select-2-8').hide()
                $('#bs-select-2-9').hide()
                $('#bs-select-2-11').hide()
                $('#bs-select-2-12').hide()
                $('#bs-select-2-13').hide()
                $('#bs-select-2-14').hide()
                $('#bs-select-2-15').hide()
                $('#bs-select-2-16').hide()
                $('#bs-select-2-17').hide()
                $('#bs-select-2-18').hide()
                $('#bs-select-2-22').hide()
                $('#bs-select-2-23').hide()
                $('#bs-select-2-24').hide()
                $('#bs-select-2-25').hide()
                $('#bs-select-2-26').hide()
                $('#bs-select-2-27').hide()
                $('#bs-select-2-28').hide()
                $('#bs-select-2-29').hide()
                    // $('#form-field-3994991').val('arriendo')
                break;
            case '/compra-usado/':
                $('#bs-select-2-1').hide();
                $('#bs-select-2-4').hide()
                $('#bs-select-2-5').hide()
                $('#bs-select-2-6').hide()
                $('#bs-select-2-7').hide()
                $('#bs-select-2-8').hide()
                $('#bs-select-2-9').hide()
                $('#bs-select-2-11').hide()
                $('#bs-select-2-12').hide()
                $('#bs-select-2-13').hide()
                $('#bs-select-2-14').hide()
                $('#bs-select-2-15').hide()
                $('#bs-select-2-16').hide()
                $('#bs-select-2-17').hide()
                $('#bs-select-2-18').hide()
                $('#bs-select-2-22').hide()
                $('#bs-select-2-23').hide()
                $('#bs-select-2-24').hide()
                $('#bs-select-2-25').hide()
                $('#bs-select-2-26').hide()
                $('#bs-select-2-27').hide()
                $('#bs-select-2-28').hide()
                $('#bs-select-2-29').hide()
                $('#form-field-c6a487e').val('venta')
                $('.max-price-range-hidden').val(1500000000)
                $('.max-price-range').text("$1,500,000,000")

                break;
            case '/proyectos/':
                $('#bs-select-2-1').hide()
                $('#bs-select-2-2').hide()
                $('#bs-select-2-3').hide()
                $('#bs-select-2-4').hide()
                $('#bs-select-2-5').hide()
                $('#bs-select-2-6').hide()
                $('#bs-select-2-7').hide()
                $('#bs-select-2-8').hide()
                $('#bs-select-2-9').hide()
                $('#bs-select-2-10').hide()
                $('#bs-select-2-11').hide()
                $('#bs-select-2-12').hide()
                $('#bs-select-2-13').hide()
                $('#bs-select-2-14').hide()
                $('#bs-select-2-15').hide()
                $('#bs-select-2-16').hide()
                $('#bs-select-2-17').hide()
                $('#bs-select-2-18').hide()
                $('#bs-select-2-19').hide()
                $('#bs-select-2-20').hide()
                $('#bs-select-2-21').hide()
                $('#bs-select-2-22').hide()
                $('#bs-select-2-23').hide()
                $('#bs-select-2-24').hide()
                $('#bs-select-2-29').hide()
                $('#bs-select-3-1').hide()
                $('#bs-select-3-2').hide()
                $('#bs-select-3-3').hide()
                $('#bs-select-3-4').hide()
                $('#bs-select-3-10').hide()
                $('#bs-select-3-11').hide()
                $('#form-field-field-status').val('proyectos-nuevos')
                $('#form-field-2ede86c').val('COP')
                $('#form-field-3994991').val('venta')
                break;
            case '/proyectos-construidos/':
                $('#bs-select-2-1').hide()
                $('#bs-select-2-2').hide()
                $('#bs-select-2-3').hide()
                $('#bs-select-2-4').hide()
                $('#bs-select-2-5').hide()
                $('#bs-select-2-6').hide()
                $('#bs-select-2-7').hide()
                $('#bs-select-2-8').hide()
                $('#bs-select-2-9').hide()
                $('#bs-select-2-10').hide()
                $('#bs-select-2-11').hide()
                $('#bs-select-2-12').hide()
                $('#bs-select-2-13').hide()
                $('#bs-select-2-14').hide()
                $('#bs-select-2-15').hide()
                $('#bs-select-2-16').hide()
                $('#bs-select-2-17').hide()
                $('#bs-select-2-18').hide()
                $('#bs-select-2-19').hide()
                $('#bs-select-2-20').hide()
                $('#bs-select-2-21').hide()
                $('#bs-select-2-22').hide()
                $('#bs-select-2-23').hide()
                $('#bs-select-2-24').hide()
                $('#bs-select-2-29').hide()
                $('#form-field-3994991').val('venta')
                break;
            default:
                break;
        }
    })(jQuery);
}
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    var action = hideselect()

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        //console.log(sParameterName[0]);
        if (sParameterName[0] === 'currency') {
            var result = typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            if (result === 'COP') {
                (function($) {
                    $('.elementor-field-group-field-beds').hide()
                    $('.elementor-field-group-field-baths').hide()
                    $('.elementor-field-group-4fbe0dd').hide()
                    $('.elementor-field-group-field-max-area').hide()
                    $('.elementor-field-group-1bd2f03').show()
                    $('#form-field-0666e4d').val('COP')

                    $('#sldarrendar').hide()
                    $('#comprausados').hide()
                    $('#proyectosbnr').show()
                    $('#hideall').hide()

                    $('#altprotectos').text("ENCONTREMOS TU PROYECTO IDEAL")

                })(jQuery);
            }

        } else {
            if (sParameterName[0] === 'status%5B%5D') {
                var result = typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                if (result == 'arriendo') {


                    (function($) {
                        $('#sldarrendar').show()
                        $('#comprausados').hide()
                        $('#proyectosbnr').hide()
                        $('#altnamevariable').text("ARRENDAR")
                    })(jQuery);

                } else {
                    (function($) {
                        $('#sldarrendar').hide()
                        $('#comprausados').show()
                        $('#proyectosbnr').hide()
                        $('#altnamevariable').text("COMPRAR")
                    })(jQuery);
                }
            }
        }
        if (sParameterName[0] === sParam) {
            var result = typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            (function($) {
                if (result) {
                    $('#namevariable').text(result.toUpperCase())
                } else {
                    $('#namevariable').text("PROPIEDAD")
                }
                switch (result) {
                    case 'bodegas':
                        $('#form-field-field-beds').val('Alcobas')
                        $('.elementor-field-group-field-beds').hide()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'apartaestudios':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'apartamentos':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'cabinas (casa Recreo)':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'casa - Apartamento(s)':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'casa Campestre':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'casa Condominio':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'casa-local':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'casalote':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'casas':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'comercial (casa Para Comercio)':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'consultorios':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'edificio De Oficinas':

                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'edificios':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'fincas':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'habitacion':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()

                        break;
                    case 'hacienda':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'hotel':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'locales':
                        $('#form-field-field-beds').val('0')
                        $('.elementor-field-group-field-beds').hide()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'lotes':
                        $('#form-field-field-beds').val('0')
                        $('.elementor-field-group-field-beds').hide()
                        $('.elementor-field-group-field-baths').hide()
                        $('.elementor-field-group-4fbe0dd').hide()
                        break;
                    case 'oficinas':
                        $('#form-field-field-beds').val('0')
                        $('.elementor-field-group-field-beds').hide()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'parqueaderos':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'predio':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;
                    case 'terreno':
                        $('.elementor-field-group-field-beds').show()
                        $('.elementor-field-group-field-baths').show()
                        $('.elementor-field-group-4fbe0dd').show()
                        break;

                    default:
                        break;
                }


            })(jQuery);
            // return result
        }
    }
    //  return false;
};
var tech = getUrlParameter('type%5B%5D');
(function($) {
    $('.elementor-field-group-field-types').on('click', function() {
        var action = hideselect()
    })
    $('.elementor-field-group-field-status').on('click', function() {
        var action = hideselect()
    })
    $('.elementor-field-group-1bd2f03').on('click', function() {
        var action = hideselect()
    })


    $('#form-field-field-types').on('change', function() {
        console.log(this.value)
            //$('select[name*="type[]"] > option[value="apartaestudios"]').hide();
            //https://site2021.centrosur.co/wp-content/uploads/2021/07/banner-arrendamiento.png
            //https://site2021.centrosur.co/wp-content/uploads/2021/07/banner-compra-usado.png
            // #comprausados
            // #sldarrendar
        if (this.value) {
            $('#namevariable').text(this.value.toUpperCase())
        } else {
            $('#namevariable').text("PROPIEDAD")
        }

        switch (this.value) {
            case 'bodegas':
                $('#form-field-field-beds').val('Alcobas')
                $('.elementor-field-group-field-beds').hide()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'apartaestudios':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'apartamentos':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'cabinas (casa Recreo)':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'casa - Apartamento(s)':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'casa Campestre':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'casa Condominio':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'casa-local':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'casalote':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'casas':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'comercial (casa Para Comercio)':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'consultorios':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'edificio De Oficinas':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'edificios':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'fincas':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'habitacion':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()

                break;
            case 'hacienda':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'hotel':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'locales':
                $('#form-field-field-beds').val('0')
                $('.elementor-field-group-field-beds').hide()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'lotes':
                $('#form-field-field-beds').val('0')
                $('.elementor-field-group-field-beds').hide()
                $('.elementor-field-group-field-baths').hide()
                $('.elementor-field-group-4fbe0dd').hide()
                break;
            case 'oficinas':
                $('#form-field-field-beds').val('0')
                $('.elementor-field-group-field-beds').hide()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'parqueaderos':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'predio':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;
            case 'terreno':
                $('.elementor-field-group-field-beds').show()
                $('.elementor-field-group-field-baths').show()
                $('.elementor-field-group-4fbe0dd').show()
                break;

            default:
                break;
        }

    });
})(jQuery);