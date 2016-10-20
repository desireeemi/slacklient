<?php

/*
Plugin Name: Slacklient plugin
Description:  This plugin helps you to connect with your clients through a livechat using Slack.
Author: Désiré N'dri
Version: 0.1
License: GPL
*/

function mes_assets() {

    wp_enqueue_script( 'slacklient-js', plugins_url( '/js/slacklient.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );

    wp_localize_script('slacklient-js', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'mes_assets' );


add_action( 'wp_ajax_post_slack', 'mon_action' );
add_action( 'wp_ajax_nopriv_post_slack', 'mon_action' );

function mon_action() {

    $curl = curl_init();



//    $_POST['messageContent'];
//    $_POST['userName'];

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => '"https://hooks.slack.com/services/T2R8ZMBQX/B2RS12C9K/EnQzYsuQQajCjnVaUJ',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
            item1 => $_POST['userName'],
            item2 => $_POST['messageContent']
        )
    ));
// Send the request & save response to $resp
    $resp = curl_exec($curl);
// Close request to clear up some resources
    curl_close($curl);

    var_dump($resp);
    die();
}