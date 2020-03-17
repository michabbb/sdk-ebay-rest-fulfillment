<?php

require 'vendor/autoload.php';

use macropage\SDKs\ebay\rest\fulfillment\Configuration;
use macropage\SDKs\ebay\rest\fulfillment\Model\IssueRefundRequest;
use macropage\SDKs\ebay\rest\fulfillment\Api\OrderApi;

$Configuration = new Configuration();
$Configuration->setAccessToken('v^1.1..........');
$Configuration->setDebug(true);
$Configuration->setDebugFile('/app/debug.txt');

$apiInstance = new OrderApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
	new GuzzleHttp\Client(),
	$Configuration
);

try {
	$result = $apiInstance->getOrder($argv[1]);
	/** @noinspection ForgottenDebugOutputInspection */
	print_r($result);
} catch (Exception $e) {
	echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}

try {
	$issueRefundRequest = new IssueRefundRequest();
	$issueRefundRequest->setComment('this is a comment');
	$issueRefundRequest->setReasonForRefund('BUYER_CANCEL');
	$result = $apiInstance->issueRefund($argv[1], $issueRefundRequest);
	/** @noinspection ForgottenDebugOutputInspection */
	print_r($result);
} catch (Exception $e) {
	echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}

