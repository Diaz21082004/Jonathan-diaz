<?php
function healthyfitnessgym_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'healthyfitnessgym_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'healthyfitnessgym_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'healthyfitnessgym_custom_header_setup' );

if ( ! function_exists( 'healthyfitnessgym_header_style' ) ) :

function healthyfitnessgym_header_style() {
	$header_text_color = get_header_textcolor();

  	$service_disable_section = esc_attr(get_theme_mod('service_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		



		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_menuiconcolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?>;
		}

		header .hbtn a {
			color: <?php echo esc_attr(get_theme_mod('header_btntextcolor')); ?> !important;
		}

		header .hbtn a {
			background: transparent linear-gradient(180deg, <?php echo esc_attr(get_theme_mod('header_btnbgcolor1')); ?> 0%, <?php echo esc_attr(get_theme_mod('header_btnbgcolor2')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		header .hbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('header_btntxthovercolor')); ?> !important;
		}

		header .hbtn a:hover {
			background: <?php echo esc_attr(get_theme_mod('header_btnbghovercolor')); ?> !important;
		}
	
	



		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}

		.slider-area .sliderheading h4 {
			color: <?php echo esc_attr(get_theme_mod('slider_headingcolor')); ?> !important;
		}

		.slider-area .sliderheading h3 {
			-webkit-text-stroke: 2px <?php echo esc_attr(get_theme_mod('slider_headingcolor')); ?> !important;
		}

		.slider-area .socialicons i {
			color: <?php echo esc_attr(get_theme_mod('slider_socialiconcolor')); ?> !important;
		}

		.slider-area .vbox {
			border-color: <?php echo esc_attr(get_theme_mod('slider_videobrdcolor')); ?> !important;
		}


		
	


	

		#aboutus-section .abt-dbx h2 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_headingcolor')); ?>;
		}

		#aboutus-section .abt-dbx p {
			color: <?php echo esc_attr(get_theme_mod('aboutus_descriptioncolor')); ?>;
		}

		#aboutus-section .abt-btn a {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btntextcolor')); ?>;
		}

		#aboutus-section .abt-btn a {
			background: transparent linear-gradient(180deg, <?php echo esc_attr(get_theme_mod('aboutus_btnbgcolor1')); ?> 0%, <?php echo esc_attr(get_theme_mod('aboutus_btnbgcolor2')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		#aboutus-section .abt-btn a:hover {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btntexthovercolor')); ?>;
		}







		#service-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('service_headingcolor')); ?>;
		}

		#service-section .single-service .icon i {
			color: <?php echo esc_attr(get_theme_mod('service_boxiconcolorcolor')); ?>;
		}

		#service-section .single-service .icon {
			background: <?php echo esc_attr(get_theme_mod('service_boxiconbgcolor')); ?>;
		}

		#service-section .single-service:hover .icon {
			background: <?php echo esc_attr(get_theme_mod('service_boxiconbghovercolor')); ?>;
		}

		#service-section .single-service h3 {
			color: <?php echo esc_attr(get_theme_mod('service_boxtitlecolorcolor')); ?>;
		}

		#service-section .single-service .description p, #service-section .single-service .description {
			color: <?php echo esc_attr(get_theme_mod('service_boxdescriptioncolorcolor')); ?> !important;
		}


		#service-section {
			padding-top: <?php echo esc_attr(get_theme_mod('healthy_fitness_gym_service_top_padding')); ?>em !important;
		}

		#service-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('healthy_fitness_gym_service_bottom_padding')); ?>em !important;
		}


		

		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			border-top-color: <?php echo esc_attr(get_theme_mod('footer_bordercolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a,
		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?> !important;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top i{
			color: <?php echo esc_attr(get_theme_mod('footer_backtotopiconcolor')); ?>;
		}

		.scroll-top{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbgcolor')); ?>;
		}

		.scroll-top:hover, .scroll-top:focus{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
