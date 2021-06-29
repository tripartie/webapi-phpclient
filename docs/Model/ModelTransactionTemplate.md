# # ModelTransactionTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The Transaction template&#39;s Tripartie ID. | [optional]
**permalink** | **string** | The template permalink. &lt;strong&gt;This is what you need for the Secured Payment button.&lt;/strong&gt; | [optional]
**title** | **string** | The title. | [optional]
**description** | **string** | The description. | [optional]
**externalId** | **string** | The Transaction template&#39;s External ID. | [optional]
**sellerExternalId** | **string** | The Seller&#39;s External ID. | [optional]
**sellerTripartieId** | **string** | The Seller&#39;s Tripartie ID. | [optional]
**subTotal** | **int** | The price, in cents. | [optional]
**currency** | **string** | The currency code (ISO 4217). | [optional]
**flow** | **string** | The flow. | [optional]
**buyerFees** | **int** | The buyer&#39;s fees, in cents. | [optional]
**shippingCosts** | **int** | The shipping costs, in cents. | [optional]
**buyerTotal** | **int** | The buyer&#39;s total, in cents. | [optional]
**sellerFees** | **int** | The seller&#39;s fees, in cents. | [optional]
**sellerTotal** | **int** | The seller&#39;s total, in cents. | [optional]
**adUrl** | **string** | The original Ad&#39;s URL. | [optional]
**allowPriceChange** | **bool** | Allow price negociation? | [optional]
**allowInPerson** | **bool** | Allow hand-over? | [optional] [default to true]
**allowDelivery** | **bool** | Allow delivery? | [optional] [default to true]
**hasPicture** | **bool** | Has a picture? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
