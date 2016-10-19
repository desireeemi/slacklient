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
}
add_action( 'wp_enqueue_scripts', 'mes_assets' );