<?php
/*contacts page form*/
add_action( 'wp_ajax_contact', 'contact' );
add_action( 'wp_ajax_nopriv_contact', 'contact' );

function contact() {

    $to = fw_get_db_customizer_option('email');
    $subject = 'You have a message';
    $message = 'User: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . ' Phone - ' . $_POST['phone'] . ' <br /> Text - ' . $_POST['message'];
    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();
}