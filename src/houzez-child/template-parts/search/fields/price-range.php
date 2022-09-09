<?php
$min_price = isset($_GET['min-price']) && $_GET['min-price'] != '';
$max_price = isset($_GET['max-price']) && $_GET['max-price'] != '';
echo $min_price;
echo $max_price;
?>
<div class="range-text">

	<input type="hidden" name="min-price" class="min-price-range-hidden range-input" value="<?php echo esc_attr($min_price); ?>">
    <input type="hidden" name="max-price" class="max-price-range-hidden range-input" value="<?php echo esc_attr($max_price); ?>">
	<span class="range-title"><?php echo houzez_option('srh_price_range', 'Price Range:'); ?></span>
    <?php echo houzez_option('srh_from', 'from'); ?>
    <span class="min-price-range"></span> <?php echo houzez_option('srh_to', 'to'); ?>
    <span class="max-price-range"></span>
</div><!-- range-text -->
<div class="price-range-wrap">
    <input type="range">
	<div class="price-range"></div><!-- price-range -->
    <div class="price-label">
        <p>$70.000.000</p>
        <p>$3.000.000.000</p>
    </div>
</div><!-- price-range-wrap -->
