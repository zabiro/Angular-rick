<?php
$boton_como_llegar = get_custom_terms('boton_como_llegar')
?>
<?php if($boton_como_llegar != ''):?>
<div>
    <!--<a href="https://www.google.com/maps/dir//Apartamentos+Vivenza,+Cra.+87+%23%23+39+%E2%80%93+03,+Bello,+Copacabana,+Antioquia/@6.3323986,-75.5370984,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e442f3f13ad58f3:0x632847be28a0837a!2m2!1d-75.5349097!2d6.3323933!3e0" target="_blank"><div class="p-button">-->
    <a href="<?php echo $boton_como_llegar; ?>" target="_blank">
        <div class="p-button">
            <img src="/wp-content/uploads/2021/07/waze-1.svg" alt="waze">
            ¿CÓMO LLEGAR?
        </div>
    </a>
</div>
<?php endif; ?>
