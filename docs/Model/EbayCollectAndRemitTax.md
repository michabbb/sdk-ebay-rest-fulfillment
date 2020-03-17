# EbayCollectAndRemitTax

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**taxType** | **string** | The type of tax that eBay will collect and remit to the taxing authority. See the TaxTypeEnum type definition for more information about each tax type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/TaxTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**collectionMethod** | **string** | This field indicates the collection method used to collect the &#39;Collect and Remit&#39; tax for the order. This field is always returned for orders subject to &#39;Collect and Remit&#39; tax, and its value is always NET. Note: Although the collectionMethod field is returned for all orders subject to &#39;Collect and Remit&#39; tax, the collectionMethod field and the CollectionMethodEnum type are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/CollectionMethodEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


