<?php
$correo = get_custom_terms('correo');
$telefono = get_custom_terms('telefono');
$celular = get_custom_terms_list('celular');

?>
<p class="p-title">Información adicional:</p>

        <?php if(!empty($celular)){
            foreach ($celular as $cel){
                echo '
                    <a href="https://wa.me/+57'. str_replace(' ','',$cel).'" target="_blank">
                    <p><img src="/wp-content/uploads/2021/06/whatsapp-2.png">'. trim($cel).'</p></a>';
            }
        }; ?>

        <?php if(isset($telefono) && !empty($telefono) && $telefono != ' ') {
            echo '
            <a href=tel:' . str_replace(' ', '', $telefono) . ' target="_blank">
                <p><img src="/wp-content/uploads/2021/06/phone.png">' . $telefono . '</p>
            </a>';
        }
        ?>

<p><img src="/wp-content/uploads/2021/08/pin-1.png"><?php echo get_post_meta(get_the_ID(), 'fave_property_address', true); ?></p>
<a href='mailto:<?php echo $correo;?>' target="_blank"><p><img src="/wp-content/uploads/2021/06/mail.png"><?php echo $correo;?></p></a>
<?php get_template_part('template-parts/centrosur/proyectos/float_widget'); ?>
<script>
    jQuery('#chatAsesor').click(function (){
      jQuery('#livechat-minified-wrapper').trigger('click');
      console.log('yes');
    })
</script>
