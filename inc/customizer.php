<?php
/**
 * FLAP Theme Customizer
 *
 * @package FLAP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function flap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'flap_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'flap_customize_partial_blogdescription',
			)
		);
		
	}

	$wp_customize->add_panel('footer_panel', [
		'title' => 'フッター設定',
			'priority' => 30,
	]);	
	$wp_customize->add_section('footer_test_section' ,[
		'title' => 'パートナー',
		'priority' => 1,
	]);
	$wp_customize->add_setting('footer_setting', [
		'transport' => 'refresh',
		'default' => 'test',
	]);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_setting',
			[
				'label' => 'パートナー１',
				'section' => 'footer_test_section',
				'setting' => 'footer_setting',
				'priority' => 1,
			]
		)
	);
}
add_action( 'customize_register', 'flap_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function flap_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function flap_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function flap_customize_preview_js() {
	wp_enqueue_script( 'flap-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'flap_customize_preview_js' );
