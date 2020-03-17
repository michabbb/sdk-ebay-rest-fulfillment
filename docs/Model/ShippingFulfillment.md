# ShippingFulfillment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillmentId** | **string** | The unique identifier of the fulfillment; for example, 9405509699937003457459. This eBay-generated value is created with a successful createShippingFulfillment call. | [optional] 
**lineItems** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\LineItemReference[]**](LineItemReference.md) | This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies. | [optional] 
**shipmentTrackingNumber** | **string** | The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available. | [optional] 
**shippedDate** | **string** | The date and time that the fulfillment package was shipped. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been shipped. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**shippingCarrierCode** | **string** | The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. Note: The Trading API&#39;s ShippingCarrierCodeType enumeration type contains the most current list of eBay shipping carrier codes and the countries served by each carrier. See ShippingCarrierCodeType. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


