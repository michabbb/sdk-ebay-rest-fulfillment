# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appliedPromotions** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\AppliedPromotion[]**](AppliedPromotion.md) | This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item. | [optional] 
**deliveryCost** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\DeliveryCost**](DeliveryCost.md) |  | [optional] 
**discountedLineItemCost** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**ebayCollectAndRemitTaxes** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\EbayCollectAndRemitTax[]**](EbayCollectAndRemitTax.md) | This container will be returned if the order line item is subject to a &#39;Collect and Remit&#39; tax that eBay will collect and remit to the proper taxing authority on the buyer&#39;s behalf. &#39;Collect and Remit&#39; tax includes US state-mandated sales tax and &#39;Goods and Services&#39; tax (collected in Australia and New Zealand). The amount of this tax is shown in the amount field, and the type of tax is shown in the taxType field. eBay will display the tax type and amount during checkout in accordance with the buyer&#39;s address, and handle collection and remittance of the tax without requiring the seller to take any action. | [optional] 
**giftDetails** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\GiftDetails**](GiftDetails.md) |  | [optional] 
**legacyItemId** | **string** | The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the listingId instead. | [optional] 
**legacyVariationId** | **string** | The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing. | [optional] 
**lineItemCost** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**lineItemFulfillmentInstructions** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\LineItemFulfillmentInstructions**](LineItemFulfillmentInstructions.md) |  | [optional] 
**lineItemFulfillmentStatus** | **string** | This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/LineItemFulfillmentStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**lineItemId** | **string** | This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller. | [optional] 
**listingMarketplaceId** | **string** | The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/MarketplaceIdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**properties** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\LineItemProperties**](LineItemProperties.md) |  | [optional] 
**purchaseMarketplaceId** | **string** | The unique identifier of the eBay marketplace where the line item was listed. Often, the listingMarketplaceId and the purchaseMarketplaceId identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/MarketplaceIdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**quantity** | **int** | The number of units of the line item in the order. These are represented as a group by a single lineItemId. | [optional] 
**refunds** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\LineItemRefund[]**](LineItemRefund.md) | This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund. | [optional] 
**sku** | **string** | Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller&#39;s eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model. | [optional] 
**soldFormat** | **string** | The eBay listing type of the line item. The most common listing types are AUCTION and FIXED_PRICE. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/SoldFormatEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**taxes** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Tax[]**](Tax.md) | Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item, or if only eBay &#39;Collect and Remit&#39; tax is applicable. | [optional] 
**title** | **string** | The title of the listing. | [optional] 
**total** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


