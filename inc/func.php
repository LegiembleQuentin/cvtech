<?php
function debug($var, $height = 200, $fixed = false)
{
    $backt = debug_backtrace()[0];
    if ($fixed) {
        echo '<pre style="position: fixed;top:0;left:0;right:0;height:' . $height . 'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 220px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    } else {
        echo '<pre style="height:' . $height . 'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    }
    echo '<p style="font-size:.85rem;">' . $backt['file'] . ' - ' . $backt['line'] . '</p>';
    print_r($var);
    echo '</pre>';
}

function path($slug)
{
    return esc_url(home_url($slug));
}

function asset($link)
{
    return get_template_directory_uri() . '/asset/' . $link;
}

function getImgSrc($format = '')
{
    if (has_post_thumbnail()) {
        $src = get_the_post_thumbnail_url(get_the_ID(), $format);
        return $src;
    }
}

function web_r($meta, $key, $escHtml = true)
{
    if (!empty($meta[$key][0])) {
        if ($escHtml) {
            $value = nl2br(esc_html($meta[$key][0]));
        } else {
            $value = nl2br($meta[$key][0]);
        }
        return $value;
    }
    return '';
}

function getPostTitle()
{
    if (!empty(get_the_title())) {
        return get_the_title();
    }
    return '';
}

function getPostContent()
{
    if (!empty(get_the_content())) {
        return get_the_content();
    }
    return '';
}

function get_meta_image_src($meta, $key, $format = '')
{
    if (!empty($meta[$key][0])) {
        $image_id = $meta[$key][0];
        $image_src = wp_get_attachment_image_src($image_id, $format);
        if ($image_src) {
            return $image_src[0];
        }
    }
}

function showJson($data)
{
    header('Content-type: application/json');
    $json = json_encode($data);
    if($json){
        die($json);
    }
    else {
        die('Error in json encoding');
    }
}

function isEmptyArray($array) {
    foreach ($array as $value) {
        if (is_array($value)) {
            if (!isEmptyArray($value)) {
                return false;
            }
        } else if (!empty($value)) {
            return false;
        }
    }
    return true;
}



