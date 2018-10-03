<?php
/**
 *
 * JSON-LD For The Organization
 *
 */

$org["@context"]  = "http://schema.org/";
$org["@id"]       = "http://matchbankerdk.wpengine.com/#organization";
$org["@type"]     = "Organization";
$org["name"]      = get_option('json-ld-settings')['organization_name'];
$org["legalName"] = get_option('json-ld-settings')['organization_legal_name'];
$org["url"]       = $website_url;
$org["logo"]      = get_option('json-ld-settings')['organization_logo_url'];
$org["sameAs"]    = get_option('json-ld-settings')['organization_facebook'];

