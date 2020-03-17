# IssueRefundRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reasonForRefund** | **string** | The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the ReasonForRefundEnum type must be used. This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or &#39;buyer remorse&#39; return to indicate that there was nothing wrong with the item(s) or with the shipment of the order. Note: If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate issueRefund calls, one for each refund reason. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ReasonForRefundEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**comment** | **string** | This free-text field allows the seller to clarify why the refund is being issued to the buyer. Max Length: 1000 | [optional] 
**refundItems** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\RefundItem[]**](RefundItem.md) | The refundItems array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the orderLevelRefundAmount container to specify the amount of the refund for the entire order. | [optional] 
**orderLevelRefundAmount** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\SimpleAmount**](SimpleAmount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


