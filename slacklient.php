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

function mon_action() {

    $post = [
        'username' => 'user1',
        'password' => 'passuser1',
        'gender'   => 1,
    ];
//
//    $test = json_encode($post);

    $ch = curl_init('https://hooks.slack.com/services/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');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    

// execute!
    $response = curl_exec($ch);

    if(!curl_exec($ch)){
        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }
// close the connection, release resources used
    curl_close($ch);

// do anything you want with your response
    var_dump($response);




//    var_dump($test);
    var_dump($_POST);
//    json_encode($_POST);
//    var_dump($_POST);
    die();
}

add_action( 'wp_ajax_post_slack', 'mon_action' );
add_action( 'wp_ajax_nopriv_post_slack', 'mon_action' );