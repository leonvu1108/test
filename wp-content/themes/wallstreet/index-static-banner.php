<!-- wallstreet Main Slider --->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<!-- /Slider Section -->

<div class="homepage_mycarousel">
	<div class="static-banner">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
	</div>
</div>
<!-- /wallstreet Main Slider --->