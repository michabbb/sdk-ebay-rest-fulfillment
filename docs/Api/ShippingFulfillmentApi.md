# macropage\SDKs\ebay\rest\fulfillment\ShippingFulfillmentApi

All URIs are relative to *https://api.ebay.com/sell/fulfillment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingFulfillment**](ShippingFulfillmentApi.md#createShippingFulfillment) | **POST** /order/{orderId}/shipping_fulfillment | Create a Shipping Fulfillment
[**getShippingFulfillment**](ShippingFulfillmentApi.md#getShippingFulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} | Get a Shipping Fulfillment
[**getShippingFulfillments**](ShippingFulfillmentApi.md#getShippingFulfillments) | **GET** /order/{orderId}/shipping_fulfillment | Get Shipping Fulfillments



## createShippingFulfillment

> object createShippingFulfillment($orderId, $shippingFulfillmentDetails)

Create a Shipping Fulfillment

When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a shipping fulfillment. For each package, execute this call once to generate a shipping fulfillment associated with that package. Note: A single line item in an order can consist of multiple units of a purchased item, and one unit can consist of multiple parts or components. Although these components might be provided by the manufacturer in separate packaging, the seller must include all components of a given line item in the same package. Before using this call for a given package, you must determine which line items are in the package. If the package has been shipped, you should provide the date of shipment in the request. If not provided, it will default to the current date and time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the createShippingFulfillment method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
$shippingFulfillmentDetails = new \macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillmentDetails(); // \macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillmentDetails | fulfillment payload

try {
    $result = $apiInstance->createShippingFulfillment($orderId, $shippingFulfillmentDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->createShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the createShippingFulfillment method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. |
 **shippingFulfillmentDetails** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillmentDetails**](../Model/ShippingFulfillmentDetails.md)| fulfillment payload |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShippingFulfillment

> \macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillment getShippingFulfillment($fulfillmentId, $orderId)

Get a Shipping Fulfillment

Use this call to retrieve the contents of a fulfillment based on its unique identifier, fulfillmentId (combined with the associated order's orderId). The fulfillmentId value was originally generated by the createShippingFulfillment call, and is returned by the getShippingFulfillments call in the members.fulfillmentId field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillmentId = 'fulfillmentId_example'; // string | The unique identifier of the fulfillment. This eBay-generated value was created by the Create Shipping Fulfillment call, and returned by the getShippingFulfillments call in the fulfillments.fulfillmentId field; for example, 9405509699937003457459.
$orderId = 'orderId_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getShippingFulfillment method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.

try {
    $result = $apiInstance->getShippingFulfillment($fulfillmentId, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillmentId** | **string**| The unique identifier of the fulfillment. This eBay-generated value was created by the Create Shipping Fulfillment call, and returned by the getShippingFulfillments call in the fulfillments.fulfillmentId field; for example, 9405509699937003457459. |
 **orderId** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getShippingFulfillment method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. |

### Return type

[**\macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillment**](../Model/ShippingFulfillment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShippingFulfillments

> \macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillmentPagedCollection getShippingFulfillments($orderId)

Get Shipping Fulfillments

Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, orderId. This value is returned in the getOrders call's members.orderId field when you search for orders by creation date or shipment status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getShippingFulfillments method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.

try {
    $result = $apiInstance->getShippingFulfillments($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getShippingFulfillments method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. |

### Return type

[**\macropage\SDKs\ebay\rest\fulfillment\Model\ShippingFulfillmentPagedCollection**](../Model/ShippingFulfillmentPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

