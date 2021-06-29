# TripartieWebAPI\WebhooksApi

All URIs are relative to https://platform.preprod.tripartie.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**validate()**](WebhooksApi.md#validate) | **GET** /api/web/webhooks/ | Validate


## `validate()`

```php
validate($uuid): \TripartieWebAPI\Model\Webhook
```

Validate

Check a webhook's authenticity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\WebhooksApi;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = '123e4567-e89b-12d3-a456-426614174000'; // string | The Webhook UUID.

try {
    $result = $apiInstance->validate($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The Webhook UUID. | [optional]

### Return type

[**\TripartieWebAPI\Model\Webhook**](../Model/Webhook.md)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)