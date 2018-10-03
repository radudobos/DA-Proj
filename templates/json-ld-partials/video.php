<?php
/**
 *
 * JSON-LD For Videos
 *
 */
$videos = array();
$ids = getVideoIdsFromShortcodesInContent();

foreach ( $ids as $id ) {

	$data = getDataFromYoutube( $id );

	array_push($videos, array(
		"type"         => "VideoObject",
		"@id"          => "http://matchbankerdk.wpengine.com/#videoObject",
		"name"         => $data['title'],
		"description"  => $data['description'],
		"thumbnailUrl" => "http://i.ytimg.com/vi/$id/hqdefault.jpg",
		"uploadDate"   => $data['publishedAt'],
		"contentUrl"   => "https://www.youtube.com/embed/$id",
		"embedUrl"     =>"https://www.youtube.com/embed/$id"
	));
}

$payload["@context"] = "https://schema.org/";
$payload['@graph']   = $videos;

/**
 *
 * Retrieves id's from videos inserted with shortcode: [ls_youtube-shortcode]
 *
 * @return array
 */
function getVideoIdsFromShortcodesInContent() {

	$videoIds = array();

	if( get_option('ls_basics')['language'] ) {
		switch (get_option('ls_basics')['language']) {
			case 'dk' :
				array_push($videoIds, get_option('youtube-settings')['youtube_id_dk']);
				break;
			case 'se' :
				array_push($videoIds, get_option('youtube-settings')['youtube_id_se']);
				break;
			case 'no' :
				array_push($videoIds, get_option('youtube-settings')['youtube_id_no']);
				break;
			case 'es' :
				echo '';
				break;
			case 'fr' :
				echo '';
				break;
			default :
				echo '';
		}
	}

	preg_match_all ("/\[sage_youtube_shortcode (.+?)\]/", get_post_data()->post_content, $regex_matches);

	$arr_length = count($regex_matches);

	if($arr_length > 0) {
		for ($i = 0; $i < $arr_length; $i++) {
			if( substr($regex_matches[1][$i], 3) != null  )  {
				array_push($videoIds, trim(substr($regex_matches[1][$i], 3),'"'));
			}
		}
	}
	return $videoIds;
}

/**
 *
 * Get data for a youtube video
 *
 * @param $id
 * @return mixed
 */
function getDataFromYoutube($id) {

	$ytApiKey = "AIzaSyB6CgX1vbr6rsjK0HzKEeISIE1_Nz8rbaU";

	$url      = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id=' . $id . '&key=' . $ytApiKey . '';

	$data     = getCurlJSon($url);

	return $data['items'][0]['snippet'];
}

/**
 *
 * Retrieves JSON Data
 *
 * @param $url
 * @return mixed
 */
function getCurlJSon($url) {

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Retrieve the data:
	$json = curl_exec($ch);

	// Close CURL
	curl_close($ch);

	// Store
	$result = json_decode($json, true);

	return $result;
}