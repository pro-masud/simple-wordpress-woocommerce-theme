<?php

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki')){
	new \Kirki\Panel(
		'panel_id',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'My Panel', 'kirki' ),
			'description' => esc_html__( 'My Panel Description.', 'kirki' ),
		]
	);

	new \Kirki\Section(
		'section_id',
		[
			'title'       => esc_html__( 'My Section', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'panel_id',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Background(
		[
			'settings'    => 'background_setting',
			'label'       => esc_html__( 'Background Control', 'kirki' ),
			'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
			'section'     => 'section_id',
			'default'     => [
				'background-color'      => 'rgba(20,20,20,.8)',
				'background-image'      => '',
				'background-repeat'     => 'repeat',
				'background-position'   => 'center center',
				'background-size'       => 'cover',
				'background-attachment' => 'scroll',
			],
			'transport'   => 'auto',
			'output'      => [
				[
					'element' => 'body',
				],
			],
		]
	);
}