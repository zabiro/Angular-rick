<?php
$formaspago = get_custom_terms_list('forma_pago');

?>
<?php if($formaspago != ""): ?>
    <div class="col-12 col-md py-3">
        <p>Forma de pago</p>
            <?php foreach ($formaspago as $fp):?>
                 <p><?php echo $fp?></p>
            <?php endforeach;?>
    </div>
<?php endif; ?>
