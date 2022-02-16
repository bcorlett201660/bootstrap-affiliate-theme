<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_page_design() {
	
	acf_add_local_field_group(array(
		'key' => 'page_design',
		'title' => 'Page Design',
		'fields' => array (
			array (
				'key' => 'header_image',
				'label' => 'Header Image',
				'name' => 'header_image',
				'type' => 'image',
			),
			array(
	
				/* ... Insert generic settings here ... */
				'key' => 'full_width_header',
				'label' => 'Full Width Header',
				'name' => 'full_width_header',
				'type' => 'true_false',
				'default' => 1,
				/* (string) Text shown along side the checkbox */
				'message' => 'Enable',
				
			),
			array(
	
				/* ... Insert generic settings here ... */
				'key' => 'full_width_content',
				'label' => 'Full Width Content',
				'name' => 'full_width_content',
				'type' => 'true_false',
				/* (string) Text shown along side the checkbox */
				'message' => 'Enable',
				
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

add_action('acf/init', 'my_acf_add_local_field_groups_page_design');

?>