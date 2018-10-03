<?php
/**
 *
 * JSON-LD For Creditcard (Product)
 *
 */

$creditcard = new ls_creditcard( $post_data->ID );
$products = array();

foreach ( $products as $product ) {

	array_push($products, array(
		"type"        => "Product",
		"@id"         => "http://matchbankerdk.wpengine.com/#product",
		"name"        => $creditcard->getProviderName(),
		"description" => $creditcard->getDescription(),
		"image"       => $creditcard->getLogoUrl()
	));
}

$payload["@context"] = "https://schema.org/";
$payload["graph"]    = $products;