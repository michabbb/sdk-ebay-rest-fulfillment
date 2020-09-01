# # LineItemRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**refundDate** | **string** | The date and time that the refund was issued for the line item. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**refundId** | **string** | Unique identifier of a refund that was initiated for an order&#39;s line item through the issueRefund method. If the issueRefund method was used to issue a refund at the order level, this identifier is returned at the order level instead (paymentSummary.refunds.refundId field). A refundId value is returned in the response of the issueRefund method, and this same value will be returned in the getOrder and getOrders responses for pending and completed refunds. The issueRefund method can only be used for eBay managed payment orders. | [optional] 
**refundReferenceId** | **string** | This field is reserved for internal or future use. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


