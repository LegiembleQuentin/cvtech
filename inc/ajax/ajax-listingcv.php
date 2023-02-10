<?php
add_action('wp_ajax_get_Cv_data', 'getCvAjax');
add_action('wp_ajax_nopriv_get_Cv_data', 'getCvAjax');


function getCvAjax()
{
// $cv
    global $wpdb;
    $cvs = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cv ORDER BY created_at ASC");
    showJson($cvs);
    showJson('ok good');
}
