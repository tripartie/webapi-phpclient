# TripartieWebAPI\TransactionTemplatesApi

All URIs are relative to https://platform.preprod.tripartie.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetch()**](TransactionTemplatesApi.md#fetch) | **GET** /api/web/transaction-templates/ | Fetch
[**create()**](TransactionTemplatesApi.md#create) | **POST** /api/web/transaction-templates/ | Create


## `fetch()`

```php
fetch($externalId, $tripartieId): \TripartieWebAPI\Model\ModelTransactionTemplate
```

Fetch

Fetch a Transaction template by its External ID or Tripartie ID.<br /> You MUST provide either <code>external-id</code> or <code>tripartie-id</code>, but not both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\TransactionTemplatesApi;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new TransactionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalId = 'template-87'; // string | The Transaction template's External ID.

try {
    $result = $apiInstance->fetch($externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionTemplatesApi->fetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalId** | **string**| The Transaction template&#39;s External ID. | [optional]
 **tripartieId** | **int**| The Transaction template&#39;s Tripartie ID. | [optional]

### Return type

[**\TripartieWebAPI\Model\ModelTransactionTemplate**](../Model/ModelTransactionTemplate.md)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($requestCreateTransactionTemplate): \TripartieWebAPI\Model\ModelTransactionTemplate
```

Create

Create a Transaction template.<br /> You MUST provide either sellerExternalId or sellerTripartieId but not both

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\TransactionTemplatesApi;
use TripartieWebAPI\Model\RequestCreateTransactionTemplate;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new TransactionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestCreateTransactionTemplate = new RequestCreateTransactionTemplate();

try {
    $result = $apiInstance->create($requestCreateTransactionTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionTemplatesApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestCreateTransactionTemplate** | [**\TripartieWebAPI\Model\RequestCreateTransactionTemplate**](../Model/RequestCreateTransactionTemplate.md)|  |
 **dryRun** | **bool**| Do a dry-run? | [optional]

### Return type

[**\TripartieWebAPI\Model\ModelTransactionTemplate**](../Model/ModelTransactionTemplate.md)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
