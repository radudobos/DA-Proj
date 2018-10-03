<?php
/**
 *
 * JSON-LD Setup
 *
 */

function get_post_data()
{
	global $post;
	return $post;
}

// this has all the data of the post/page etc
$post_data = get_post_data();
// this has all author data
$author_data = get_userdata($post_data->post_author);
// this is the post url
$post_url = get_permalink();
// category for any page, if it exists
$category = get_the_category();
// post thumbnail
$imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-size' );
// URL of page
$website_url = home_url();

if (is_author()) {

	// this gets the data for the user who wrote that particular item
	$author_data = get_userdata($post_data->post_author);

	$payload["@type"] = "Person";
	$payload["name"]  = $author_data->display_name;
}