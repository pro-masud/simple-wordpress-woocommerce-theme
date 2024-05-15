<?php

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki')){
	new \Kirki\Panel(
		'SIMPLESHOP_CUSTOMIZER_PANEL_ID',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Simple Page', 'kirki' ),
			'description' => esc_html__( 'My Panel Description.', 'kirki' ),
		]
	);

	new \Kirki\Section(
		'SIMPLESHOP_CUSTOMIZER_CONFIG_ID',
		[
			'title'       => esc_html__( 'Home Page', 'kirki' ),
			'panel'       => 'SIMPLESHOP_CUSTOMIZER_PANEL_ID',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'display_hero_section_heading',
			'label'       => esc_html__( 'Display Hero Section', 'kirki' ),
			'description' => esc_html__( 'Simple switch control', 'kirki' ),
			'section'     => 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Show', 'kirki' ),
				'off' => esc_html__( 'Hide', 'kirki' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'display_hero_section_title',
			'label'    => esc_html__( 'Title', 'kirki' ),
			'section'  => 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID',
			'default'  => esc_html__( 'Olive color winter jacket for ladies ', 'kirki' ),
			'priority' => 10,
			'active_callback' => [
				[
					'setting' => 'display_hero_section_heading',
					'operator' => '==',
					'value' 	=> true
				]
			]
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'display_hero_section_btn_text',
			'label'    => esc_html__( 'Button Text', 'kirki' ),
			'section'  => 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID',
			'default'  => esc_html__( 'Winter Fashion', 'kirki' ),
			'priority' => 10,
			'active_callback' => [
				[
					'setting' => 'display_hero_section_heading',
					'operator' => '==',
					'value' 	=> true
				]
			]
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'display_hero_section_btn_url',
			'label'    => esc_html__( 'Button URL', 'kirki' ),
			'section'  => 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID',
			'default'  => '#',
			'priority' => 10,
			'active_callback' => [
				[
					'setting' => 'display_hero_section_heading',
					'operator' => '==',
					'value' 	=> true
				]
			]
		]
	);
}