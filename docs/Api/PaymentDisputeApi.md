# macropage\SDKs\ebay\rest\fulfillment\PaymentDisputeApi

All URIs are relative to *https://api.ebay.com/sell/fulfillment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchEvidenceContent**](PaymentDisputeApi.md#fetchEvidenceContent) | **GET** /payment_dispute/{payment_dispute_id}/fetch_evidence_content | Get Payment Dispute Evidence File
[**getActivities**](PaymentDisputeApi.md#getActivities) | **GET** /payment_dispute/{payment_dispute_id}/activity | Get Payment Dispute Activity
[**getPaymentDispute**](PaymentDisputeApi.md#getPaymentDispute) | **GET** /payment_dispute/{payment_dispute_id} | Get Payment Dispute Details
[**getPaymentDisputeSummaries**](PaymentDisputeApi.md#getPaymentDisputeSummaries) | **GET** /payment_dispute_summary | Search Payment Dispute by Filters


# **fetchEvidenceContent**
> string[] fetchEvidenceContent($paymentDisputeId, $evidenceId, $fileId)

Get Payment Dispute Evidence File

This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI: payment_dispute_id: the identifier of the payment dispute. The identifier of each payment dispute is returned in the getPaymentDisputeSummaries response. evidence_id: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the evidence array in the getPaymentDispute response. file_id: the identifier of an evidential file. This file must belong to the evidential file set identified through the evidence_id query parameter. The identifier of each evidential file is returned under the evidence.files array in the getPaymentDispute response. An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = 'paymentDisputeId_example'; // string | The identifier of the payment dispute. The identifier of each payment dispute is returned in the getPaymentDisputeSummaries response. This identifier is passed in as a path parameter at the end of the call URI.
$evidenceId = 'evidenceId_example'; // string | The identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the evidence array in the getPaymentDispute response. Below is an example of the syntax to use for this query parameter: evidence_id=12345678
$fileId = 'fileId_example'; // string | The identifier of an evidential file. This file must belong to the evidential file set identified through the evidence_id query parameter. The identifier of each evidential file is returned under the evidence.files array in the getPaymentDispute response. Below is an example of the syntax to use for this query parameter: file_id=12345678

try {
    $result = $apiInstance->fetchEvidenceContent($paymentDisputeId, $evidenceId, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->fetchEvidenceContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| The identifier of the payment dispute. The identifier of each payment dispute is returned in the getPaymentDisputeSummaries response. This identifier is passed in as a path parameter at the end of the call URI. |
 **evidenceId** | **string**| The identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the evidence array in the getPaymentDispute response. Below is an example of the syntax to use for this query parameter: evidence_id&#x3D;12345678 |
 **fileId** | **string**| The identifier of an evidential file. This file must belong to the evidential file set identified through the evidence_id query parameter. The identifier of each evidential file is returned under the evidence.files array in the getPaymentDispute response. Below is an example of the syntax to use for this query parameter: file_id&#x3D;12345678 |

### Return type

**string[]**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivities**
> \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDisputeActivityHistory getActivities($paymentDisputeId)

Get Payment Dispute Activity

This method retrieve a log of activity for a payment dispute. The identifier of the payment dispute is passed in as a path parameter. The output includes a timestamp for each action of the payment dispute, from creation to resolution, and all steps in between.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = 'paymentDisputeId_example'; // string | This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute for which the user wishes to see all activity. This identifier is automatically created by eBay once the payment dispute comes into the eBay managed payments system. The unique identifier for payment disputes is returned in the paymentDisputeId field in the getPaymentDisputeSummaries response. This path parameter is required, and the actual identifier value is passed in right after the payment_dispute resource. See the Resource URI above.

try {
    $result = $apiInstance->getActivities($paymentDisputeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute for which the user wishes to see all activity. This identifier is automatically created by eBay once the payment dispute comes into the eBay managed payments system. The unique identifier for payment disputes is returned in the paymentDisputeId field in the getPaymentDisputeSummaries response. This path parameter is required, and the actual identifier value is passed in right after the payment_dispute resource. See the Resource URI above. |

### Return type

[**\macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDisputeActivityHistory**](../Model/PaymentDisputeActivityHistory.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentDispute**
> \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDispute getPaymentDispute($paymentDisputeId)

Get Payment Dispute Details

This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI. Below is a summary of the information that is retrieved: Current status of payment dispute Amount of the payment dispute Reason the payment dispute was opened Order and line items associated with the payment dispute Seller response options if an action is currently required on the payment dispute Details on the results of the payment dispute if it has been closed Details on any evidence that was provided by the seller to fight the payment dispute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = 'paymentDisputeId_example'; // string | This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute to retrieve. This identifier is automatically created by eBay once the payment dispute comes into the eBay managed payments system. The unique identifier for payment disputes is returned in the paymentDisputeId field in the getPaymentDisputeSummaries response.

try {
    $result = $apiInstance->getPaymentDispute($paymentDisputeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute to retrieve. This identifier is automatically created by eBay once the payment dispute comes into the eBay managed payments system. The unique identifier for payment disputes is returned in the paymentDisputeId field in the getPaymentDisputeSummaries response. |

### Return type

[**\macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDispute**](../Model/PaymentDispute.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentDisputeSummaries**
> \macropage\SDKs\ebay\rest\fulfillment\Model\DisputeSummaryResponse getPaymentDisputeSummaries($orderId, $buyerUsername, $openDateFrom, $openDateTo, $paymentDisputeStatus, $limit, $offset)

Search Payment Dispute by Filters

This method is used retrieve one or more payment disputes filed against the seller. These payment disputes can be open or recently closed. The following filter types are available in the request payload to control the payment disputes that are returned: Dispute filed against a specific order (order_id parameter is used) Dispute(s) filed by a specific buyer (buyer_username parameter is used) Dispute(s) filed within a specific date range (open_date_from and/or open_date_to parameters are used) Disputes in a specific state (payment_dispute_status parameter is used)More than one of these filter types can be used together. See the request payload request fields for more information about how each filter is used. If none of the filters are used, all open and recently closed payment disputes are returned. Pagination is also available. See the limit and offset fields for more information on how pagination is used for this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored. Note: The order identifier passed into this field must be an Order ID in the new format. The legacy APIs still support the old and new order ID format to identify orders, but only the new order ID format is supported in REST-based APIs. eBay rolled out a new Order ID format in June 2019.
$buyerUsername = 'buyerUsername_example'; // string | This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific seller. The string that is passed in to this query parameter is the eBay user ID of the buyer.
$openDateFrom = 'openDateFrom_example'; // string | The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the open_date_from and/or open_date_to filters is three months. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The open_date_from field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a open_date_from field is used, but a open_date_to field is not used, the open_date_to value will default to three months after the date specified in the open_date_from field, or to the present time if less than three months in the past. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
$openDateTo = 'openDateTo_example'; // string | The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the open_date_from and/or open_date_to filters is three months. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The open_date_to field sets the ending date of the date range, and can be set up to three months from the date set in the open_date_from field. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
$paymentDisputeStatus = 'paymentDisputeStatus_example'; // string | This filter is used if the seller wishes to only retrieve payment disputes in a specific state. More than one value can be specified. If no payment_dispute_status filter is used, payment disputes in all states are returned in the response. See DisputeStateEnum type for supported values.
$limit = 'limit_example'; // string | The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results. Min: 1; Max: 200; Default: 100
$offset = 'offset_example'; // string | This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the offset value to 0 (default value), the first payment dispute in the result set appears at the top of the response. Combine offset with the limit parameter to control the payment disputes returned in the response. For example, if you supply an offset value of 0 and a limit value of 10, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an offset value of 10 and a limit value of 20, the response will contain payment disputes 11-30 from the result set that matches the input criteria. Min: 0; Max: total number of payment disputes - 1; Default: 0

try {
    $result = $apiInstance->getPaymentDisputeSummaries($orderId, $buyerUsername, $openDateFrom, $openDateTo, $paymentDisputeStatus, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDisputeSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored. Note: The order identifier passed into this field must be an Order ID in the new format. The legacy APIs still support the old and new order ID format to identify orders, but only the new order ID format is supported in REST-based APIs. eBay rolled out a new Order ID format in June 2019. | [optional]
 **buyerUsername** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific seller. The string that is passed in to this query parameter is the eBay user ID of the buyer. | [optional]
 **openDateFrom** | **string**| The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the open_date_from and/or open_date_to filters is three months. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The open_date_from field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a open_date_from field is used, but a open_date_to field is not used, the open_date_to value will default to three months after the date specified in the open_date_from field, or to the present time if less than three months in the past. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z. | [optional]
 **openDateTo** | **string**| The open_date_from and/or open_date_to date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the open_date_from and/or open_date_to filters is three months. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The open_date_to field sets the ending date of the date range, and can be set up to three months from the date set in the open_date_from field. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z. | [optional]
 **paymentDisputeStatus** | **string**| This filter is used if the seller wishes to only retrieve payment disputes in a specific state. More than one value can be specified. If no payment_dispute_status filter is used, payment disputes in all states are returned in the response. See DisputeStateEnum type for supported values. | [optional]
 **limit** | **string**| The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results. Min: 1; Max: 200; Default: 100 | [optional]
 **offset** | **string**| This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the offset value to 0 (default value), the first payment dispute in the result set appears at the top of the response. Combine offset with the limit parameter to control the payment disputes returned in the response. For example, if you supply an offset value of 0 and a limit value of 10, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an offset value of 10 and a limit value of 20, the response will contain payment disputes 11-30 from the result set that matches the input criteria. Min: 0; Max: total number of payment disputes - 1; Default: 0 | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\fulfillment\Model\DisputeSummaryResponse**](../Model/DisputeSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

