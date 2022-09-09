<?php
if(get_custom_terms('pagar_cuota') != ''){
    $pagar = get_custom_terms('pagar_cuota');
}elseif (get_custom_terms('url_cuota_pagar')){
    $pagar = get_custom_terms('url_cuota_pagar');
}

?>
<?php if(isset($pagar) && !empty($pagar) && $pagar != ''): ?>
    <a href="<?php echo $pagar;?>" target="_blank">
<div class="green-button">
    <img src="/wp-content/uploads/2021/07/ico-paga-cuota2.svg" alt=""> PAGA TU CUOTA</div>
</a>
<?php endif;?>
