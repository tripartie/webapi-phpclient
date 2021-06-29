# # RequestCreateTransactionTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The title. |
**description** | **string** | The description. | [optional]
**externalId** | **string** | The Transaction template&#39;s External ID. | [optional]
**sellerExternalId** | **string** | The Seller&#39;s External ID. | [optional]
**sellerTripartieId** | **string** | The Seller&#39;s Tripartie ID. | [optional]
**subTotal** | **int** | The price, in cents. |
**shippingCosts** | **int** | The shipping costs, in cents.&lt;br /&gt;If provided, the Seller will have to handle shipping by himself. &lt;code&gt;packageFormat&lt;/code&gt; and &lt;code&gt;shippingProviders&lt;/code&gt; will be ignored, and automatic shipping costs calculation and shipping label generation will be disabled. | [optional]
**packageFormat** | [**\TripartieWebAPI\Model\RequestCreateTransactionTemplatePackageFormat**](RequestCreateTransactionTemplatePackageFormat.md) |  | [optional]
**shippingProviders** | **string[]** | Allowed shipping providers.&lt;br /&gt;&lt;strong&gt;Required for automatic shipping costs and shipping label generation.&lt;/strong&gt; | [optional]
**currency** | **string** | The currency code (ISO 4217). |
**flow** | **string** | The desired flow (see &lt;a href&#x3D;\&quot;#tag/Flows\&quot;&gt;Flows&lt;/a&gt;). |
**productCategory** | **string** | The product category (required for improved anti-fraud protection). | [optional] [default to 'other']
**adUrl** | **string** | The original Ad&#39;s URL. | [optional]
**allowPriceChange** | **bool** | Allow price negociation? | [optional] [default to true]
**allowInPerson** | **bool** | Allow hand-over? | [optional] [default to true]
**allowDelivery** | **bool** | Allow delivery? | [optional] [default to true]
**picture** | **string** | Ad picture, in &lt;strong&gt;base64 format&lt;/strong&gt;.&lt;br /&gt; Max initial file size: 2Mo.&lt;br /&gt; &lt;strong&gt;You MUST send only the binary code.&lt;/strong&gt; Do not send the first part that some converters add into the binary code which is &lt;code&gt;data:image/png;base64,&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
