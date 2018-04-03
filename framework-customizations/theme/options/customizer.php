<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_contacts' => array(
		'title'   => __( 'Contacts', '{domain}' ),
		'options' => array(
		    'address' => array(
                'type'  => 'textarea',
                'label' => __( 'Post address', '{domain}' ),
                'value' => 'Média o nás',
            ),
            'phone_first' => array(
                'type' => 'text',
                'label' => __( 'phone number', '{domain}' ),
                'value' => '+420 222 232 061-2',
            ),
            'phone_second' => array(
                'type' => 'text',
                'label' => __( 'phone number', '{domain}' ),
                'value' => '+420 222 232 661',
            ),
            'phone_third' => array(
                'type' => 'text',
                'label' => __( 'phone number', '{domain}' ),
                'value' => '+420 222 232 276',
            ),
			'email' => array(
				'type'  => 'text',
				'label' => __( 'general email', '{domain}' ),
                'value' => 'van83horn@gmail.com',
			),
            'bank_requisites' => array(
                'type'  => 'textarea',
                'label' => __( 'bank requisites', '{domain}' ),
                'value' => 'GE Money Bank, a.s. <br> 4124438504/0600',
            ),
            'fax' => array(
                'type' => 'text',
                'label' => __( 'fax number', '{domain}' ),
                'value' => '+420 222 230 052',
            ),
		),
	)
);