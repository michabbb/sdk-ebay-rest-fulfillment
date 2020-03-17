# sdk-ebay-rest-fulfillment
Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.11.1
- Package version: 2.3.2
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/macropage/sdk-ebay-rest-fulfillment.git"
    }
  ],
  "require": {
    "macropage/sdk-ebay-rest-fulfillment": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/sdk-ebay-rest-fulfillment/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getOrder method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.

try {
    $result = $apiInstance->getOrder($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.ebay.com/sell/fulfillment/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{orderId} | Get an Order
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /order | Get Orders
*OrderApi* | [**issueRefund**](docs/Api/OrderApi.md#issuerefund) | **POST** /order/{order_id}/issue_refund | Issue Refund
*PaymentDisputeApi* | [**fetchEvidenceContent**](docs/Api/PaymentDisputeApi.md#fetchevidencecontent) | **GET** /payment_dispute/{payment_dispute_id}/fetch_evidence_content | Get Payment Dispute Evidence File
*PaymentDisputeApi* | [**getActivities**](docs/Api/PaymentDisputeApi.md#getactivities) | **GET** /payment_dispute/{payment_dispute_id}/activity | Get Payment Dispute Activity
*PaymentDisputeApi* | [**getPaymentDispute**](docs/Api/PaymentDisputeApi.md#getpaymentdispute) | **GET** /payment_dispute/{payment_dispute_id} | Get Payment Dispute Details
*PaymentDisputeApi* | [**getPaymentDisputeSummaries**](docs/Api/PaymentDisputeApi.md#getpaymentdisputesummaries) | **GET** /payment_dispute_summary | Search Payment Dispute by Filters
*ShippingFulfillmentApi* | [**createShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#createshippingfulfillment) | **POST** /order/{orderId}/shipping_fulfillment | Create a Shipping Fulfillment
*ShippingFulfillmentApi* | [**getShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} | Get a Shipping Fulfillment
*ShippingFulfillmentApi* | [**getShippingFulfillments**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillments) | **GET** /order/{orderId}/shipping_fulfillment | Get Shipping Fulfillments


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Amount](docs/Model/Amount.md)
 - [AppliedPromotion](docs/Model/AppliedPromotion.md)
 - [Buyer](docs/Model/Buyer.md)
 - [CancelRequest](docs/Model/CancelRequest.md)
 - [CancelStatus](docs/Model/CancelStatus.md)
 - [DeliveryCost](docs/Model/DeliveryCost.md)
 - [DisputeEvidence](docs/Model/DisputeEvidence.md)
 - [DisputeSummaryResponse](docs/Model/DisputeSummaryResponse.md)
 - [EbayCollectAndRemitTax](docs/Model/EbayCollectAndRemitTax.md)
 - [Error](docs/Model/Error.md)
 - [ErrorParameter](docs/Model/ErrorParameter.md)
 - [EvidenceRequest](docs/Model/EvidenceRequest.md)
 - [ExtendedContact](docs/Model/ExtendedContact.md)
 - [FileInfo](docs/Model/FileInfo.md)
 - [FulfillmentStartInstruction](docs/Model/FulfillmentStartInstruction.md)
 - [GiftDetails](docs/Model/GiftDetails.md)
 - [InfoFromBuyer](docs/Model/InfoFromBuyer.md)
 - [IssueRefundRequest](docs/Model/IssueRefundRequest.md)
 - [LegacyReference](docs/Model/LegacyReference.md)
 - [LineItem](docs/Model/LineItem.md)
 - [LineItemFulfillmentInstructions](docs/Model/LineItemFulfillmentInstructions.md)
 - [LineItemProperties](docs/Model/LineItemProperties.md)
 - [LineItemReference](docs/Model/LineItemReference.md)
 - [LineItemRefund](docs/Model/LineItemRefund.md)
 - [Order](docs/Model/Order.md)
 - [OrderLineItems](docs/Model/OrderLineItems.md)
 - [OrderRefund](docs/Model/OrderRefund.md)
 - [OrderSearchPagedCollection](docs/Model/OrderSearchPagedCollection.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentDispute](docs/Model/PaymentDispute.md)
 - [PaymentDisputeActivity](docs/Model/PaymentDisputeActivity.md)
 - [PaymentDisputeActivityHistory](docs/Model/PaymentDisputeActivityHistory.md)
 - [PaymentDisputeOutcomeDetail](docs/Model/PaymentDisputeOutcomeDetail.md)
 - [PaymentDisputeSummary](docs/Model/PaymentDisputeSummary.md)
 - [PaymentHold](docs/Model/PaymentHold.md)
 - [PaymentSummary](docs/Model/PaymentSummary.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [PickupStep](docs/Model/PickupStep.md)
 - [PricingSummary](docs/Model/PricingSummary.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundItem](docs/Model/RefundItem.md)
 - [SellerActionsToRelease](docs/Model/SellerActionsToRelease.md)
 - [ShippingFulfillment](docs/Model/ShippingFulfillment.md)
 - [ShippingFulfillmentDetails](docs/Model/ShippingFulfillmentDetails.md)
 - [ShippingFulfillmentPagedCollection](docs/Model/ShippingFulfillmentPagedCollection.md)
 - [ShippingStep](docs/Model/ShippingStep.md)
 - [SimpleAmount](docs/Model/SimpleAmount.md)
 - [Tax](docs/Model/Tax.md)
 - [TrackingInfo](docs/Model/TrackingInfo.md)


## Documentation For Authorization


## api_auth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://auth.ebay.com/oauth2/authorize
- **Scopes**: 
 - **https://api.ebay.com/oauth/api_scope/sell.fulfillment**: View and manage your order fulfillments
 - **https://api.ebay.com/oauth/api_scope/sell.finances**: View and manage your payment and order information to display this information to you and allow you to initiate refunds using the third party application
 - **https://api.ebay.com/oauth/api_scope/sell.payment.dispute**: View and manage disputes and related details (including payment and order information).
 - **https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly**: View your order fulfillments


## Author




