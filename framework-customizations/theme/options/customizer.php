<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_contacts' => array(
		'title'   => __( 'Contacts', '{domain}' ),
		'options' => array(
			'email' => array(
				'type'  => 'text',
				'label' => __( 'email', '{domain}' ),
                'value' => 'Média o nás',
			),
            'phone_primary' => array(
                'type' => 'text',
                'label' => __( 'email', '{domain}' ),
                'value' => 'Média o nás',
            )
		),
	)
);