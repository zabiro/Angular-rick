<?php
$logo = get_custom_terms('logo_gdcv')
?>
<?php if($logo != ""): ?>
<img src='<?php echo $logo;?>' alt="Centrosur">
<?php else:?>
<img src='/wp-content/uploads/2021/08/logo-centro.png' alt="Centrosur">
<?php endif;?>
