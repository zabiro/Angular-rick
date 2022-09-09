<?php
$size = 'houzez-item-image-1';
$properties_images = get_post_meta($post->ID, 'fotos', true);
//$properties_images = rwmb_meta( 'fotos', 'type=plupload_image&size='.$size, $post->ID );

if( !empty($properties_images) ) {?>

<div class="fw-property-gallery-wrap fw-property-section-wrap" id="property-gallery-wrap">
	<div class="row row-no-padding" id="gallery"  data-toggle="modal" data-target="#exampleModal">

		<?php 
		$i = 0;
		foreach( $properties_images as $prop_image_id => $prop_image_meta ) { $i++;
			if(++$i > 16) break;  
            $full_image = houzez_get_image_by_id( $prop_image_id, 'full' ); ?>

	        <div class="col-md-3 col-sm-6" >
				<a href="#" data-slider-no="<?php echo esc_attr($i); ?>" class="houzez-trigger-popup-slider-js swipebox hover-effect" data-target="#carouselExample" data-slide-to="<?php echo $prop_image_meta['posi'] -1 ; ?>">
					<img   class="img-fluid" src="<?php echo esc_url( $prop_image_meta['foto'] ); ?>"  width="<?php echo esc_attr( $prop_image_meta['width'] ); ?>" height="<?php echo esc_attr( $prop_image_meta['height'] ); ?>" alt="<?php echo esc_attr( $prop_image_meta['title'] ); ?>">
				</a>
			</div>
		

	    <?php } ?>
      </div>
      </div>
	<!-- Modal -->
<!-- 
This part is straight out of Bootstrap docs. Just a carousel inside a modal.
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 60%;padding-top: 20px">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0px;">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
		  <?php 
		foreach( $properties_images as $prop_image_id => $prop_image_meta ) { 
            $full_image = houzez_get_image_by_id( $prop_image_id, 'full' ); ?>
			<li data-target="#carouselExample" data-slide-to="<?php echo $prop_image_meta['posi'] - 1  ?>" class="<?php if( $prop_image_meta['posi'] === 1) { echo 'active'; } ?>"></li>
			<?php } ?>
          </ol>
          <div class="carousel-inner">
		  <?php 
		foreach( $properties_images as $prop_image_id => $prop_image_meta ) { ?>
            <div class="carousel-item <?php if( $prop_image_meta['posi'] === 1) { echo 'active'; } ?>">
              <img class="d-block w-100" src="<?php echo esc_url( $prop_image_meta['foto'] ); ?>" alt="First slide">
            </div>
			<?php } ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>