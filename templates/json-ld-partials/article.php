<?php
/**
 *
 * JSON-LD For Articles
 *
 */

$payload["@context"]         = "https://schema.org/";
$payload["@type"]            = "Article";
$payload["@id"]              = "http://matchbankerdk.wpengine.com/#article";
$payload["mainEntityOfPage"] = $post_url;
$payload["url"]              = $post_url;
$payload["image"]            = array("@type" => "imageObject", "url" => $imgdata[0], "width" => $imgdata[1], "height" => $imgdata[2]);
$payload["author"]           = array("@type" => "Person", "name" => $author_data->display_name);
$payload["headline"]         = $post_data->post_title;
$payload["datePublished"]    = $post_data->post_date;
$payload["dateModified"]     = $post_data->post_modified;
$payload["articleBody"]      = $post_data->post_content;
$payload["Publisher"]        = array("@type" => "Organization", "name" => get_option('json-ld-settings')['organization_name'], "logo" => array("@type" => "imageObject", "url" => get_option('json-ld-settings')['organization_logo_url'], "height" => 38, "width" => 178));
