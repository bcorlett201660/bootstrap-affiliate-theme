<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_page_design_header() {
	
	acf_add_local_field_group(array(
		'key' => 'page_design_header',
		'title' => 'Page Design - Header',
		'fields' => array (
			array (
				'key' => 'header_image',
				'label' => 'Header Image',
				'name' => 'header_image',
				'type' => 'image',
			),
			array(
				'key' => 'full_width_header',
				'label' => 'Full Width Header',
				'name' => 'full_width_header',
				'type' => 'true_false',
				'default_value' => TRUE,
				'message' => 'Enable',
			),
			array(
					'key' => 'header_image_height',
				'label' => 'Image Height',
				'name' => 'header_image_height',
				'type' => 'number',
				'default_value' => 50,

			),
			array(
				'key' => 'header_image_hieght_units',
				'label' => 'Image Height Units',
				'name' => 'header_image_hieght_units',
				'type' => 'select',
				'choices' => array(
					'vh'	=> 'Vertical Hight',
					'rem'	=> 'Rem',
					'px'	=> 'Pixels',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,				
				'placeholder' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'show_in_rest' => false,
		'menu_order' => 9,
	));	
}

add_action('acf/init', 'my_acf_add_local_field_groups_page_design_header');

?>