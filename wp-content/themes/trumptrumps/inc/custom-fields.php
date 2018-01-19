<?php
/**
 * Register custom fields
 */
if (function_exists("register_field_group")) {

    register_field_group(array(
		'key' => 'group_1',
		'title' => 'Top Trumps Card',
		'fields' => array(
			array(
				'key' => 'field_1',
				'label' => 'Strength Value',
				'name' => 'strength_value',
				'type' => 'number',
				'min' => '0',
				'max' => '100',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input a value for Strength between 0 and 100',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => '0',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'field_2',
				'label' => 'Dexterity Value',
				'name' => 'dexterity_value',
				'type' => 'number',
				'min' => '0',
				'max' => '100',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input a value for Dexterity between 0 and 100',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => '0',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'field_3',
				'label' => 'Constitution Value',
				'name' => 'constitution_value',
				'type' => 'number',
				'min' => '0',
				'max' => '100',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input a value for Constitution between 0 and 100',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => '0',
				'readonly' => 0,
				'disabled' => 0,
			)
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'trump_card',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));
}