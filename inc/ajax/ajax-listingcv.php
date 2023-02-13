<?php
add_action('wp_ajax_get_Cv_data', 'getCvAjax');
add_action('wp_ajax_nopriv_get_Cv_data', 'getCvAjax');


function getCvAjax()
{
    global $wpdb;
    $cvs['main'] = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cv ORDER BY created_at DESC");
    $cvs['skills'] = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}skill");
    $cvs['formations'] = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}formation");
    $cvs['exp'] = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}experiences");
    $cvs['hobbies'] = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}hobbies");

    showJson($cvs);
}
