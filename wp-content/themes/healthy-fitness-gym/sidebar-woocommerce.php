<?php
/**
 * side bar template
 *
 * @package Healthy Fitness Gym
 */
?>
<?php if ( ! is_active_sidebar( 'healthy-fitness-gym-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('healthy-fitness-gym-woocommerce-sidebar'); ?>
	</div>
</div>