<?php
/**
 *
 * JSON-LD For Loan (Product)
 *
 */

$loan = new ls_loan( $post_data->ID );
$products = array();

foreach ( $products as $product ) {

	array_push($products, array(
		"type"        => "Product",
		"@id"         => "http://matchbankerdk.wpengine.com/#product",
		"name"        => $loan->getProviderName(),
		"description" => $loan->getDescription(),
		"image"       => $loan->getLogoUrl()
	));
}

$payload["@context"] = "https://schema.org/";
$payload["graph"]    = $products;