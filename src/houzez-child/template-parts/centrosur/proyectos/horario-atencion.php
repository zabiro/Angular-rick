<?php
 $horariolunesviernes = get_custom_terms('horario_lunes_viernes');
 $horariolunessabado = get_custom_terms('horario_lunes_sabado');
 $horariosabadodomingofestivo = get_custom_terms('horario_sabado_domingo_festivo');
 $custommessage = get_custom_terms('mensaje_horario');
?>

    <?php if($custommessage != ''):?>
        <p class="p-title"><?php echo $custommessage; ?></p>
        <?php else:?>
        <p class="p-title">Horario sala de negocios <br>y apartamento modelo:</p>
    <?php endif;?>

    <?php if(isset($horariolunesviernes)): ?>
        <p><span>Lunes a Viernes:</span><br><?php echo $horariolunesviernes?></p>
    <?php endif;?>
    <?php if (isset($horariolunessabado)):?>
        <p><span>Lunes a Sábados:</span><br><?php echo $horariolunessabado?></p>
    <?php endif;?>
    <?php if (isset($horariosabadodomingofestivo)):?>
        <p><span>Sábados, domingos y festivos:</span><br><?php echo $horariosabadodomingofestivo?></p>
    <?php endif;?>
