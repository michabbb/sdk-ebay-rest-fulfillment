# EvidenceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evidenceId** | **string** | Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set. | [optional] 
**requestDate** | **string** | The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z. | [optional] 
**respondByDate** | **string** | The timestamp in this field shows the date/time when the seller is expected to provide a requested evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z. | [optional] 
**lineItems** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]**](OrderLineItems.md) | This array shows one or more order line items associated with the evidential document has been provided. | [optional] 
**evidenceType** | **string** | This enumeration value shows the type of evidential document provided. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/EvidenceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


