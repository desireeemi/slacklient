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

//    $ch = curl_init();
//
//    curl_setopt($ch, CURLOPT_URL, "https://www.example.com/");
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS,
//        "postvar1=value1&postvar2=value2&postvar3=value3");
//
//
//
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//    $curl = curl_exec ($ch);
//
//    if(!curl_exec($ch)){
//        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
//    }
//
//    var_dump($curl);
//
//    // Close request to clear up some resources
//    curl_close ($ch);




//    var_dump($curl);
    var_dump($_POST);
    json_encode($_POST);
    var_dump($_POST);
    die();
}

add_action( 'wp_ajax_post_slack', 'mon_action' );
add_action( 'wp_ajax_nopriv_post_slack', 'mon_action' );