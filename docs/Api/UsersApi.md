# TripartieWebAPI\UsersApi

All URIs are relative to https://platform.preprod.tripartie.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**unregister()**](UsersApi.md#unregister) | **DELETE** /api/web/users/ | Unregister
[**fetch()**](UsersApi.md#fetch) | **GET** /api/web/users/ | Fetch
[**register()**](UsersApi.md#register) | **POST** /api/web/users/ | Register


## `unregister()`

```php
unregister($externalId, $tripartieId)
```

Unregister

Unregister a User using its External ID or Tripartie ID.<br /> You MUST provide either <code>external-id</code> or <code>tripartie-id</code>, but not both.<br /> This wont delete the User's Tripartie account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\UsersApi;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalId = 'user-96'; // string | The User's External ID.

try {
    $apiInstance->unregister($externalId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->unregister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalId** | **string**| The User&#39;s External ID. | [optional]
 **tripartieId** | **int**| The User&#39;s Tripartie ID. | [optional]

### Return type

void (empty response body)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetch()`

```php
fetch($externalId, $tripartieId): \TripartieWebAPI\Model\ModelUser
```

Fetch

Fetch a User by its External ID or Tripartie ID.<br /> You MUST provide either <code>external-id</code> or <code>tripartie-id</code>, but not both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\UsersApi;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalId = 'user-96'; // string | The User's External ID.

try {
    $result = $apiInstance->fetch($externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->fetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalId** | **string**| The User&#39;s External ID. | [optional]
 **tripartieId** | **int**| The User&#39;s Tripartie ID. | [optional]

### Return type

[**\TripartieWebAPI\Model\ModelUser**](../Model/ModelUser.md)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($requestRegisterUser): \TripartieWebAPI\Model\ModelUser
```

Register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TripartieWebAPI\Configuration;
use TripartieWebAPI\UsersApi;
use TripartieWebAPI\Model\RequestRegisterUser;

// Configure API key authorization: ClientIdAuth
$config = Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TripartieWebAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');


$apiInstance = new UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestRegisterUser = new RequestRegisterUser();

try {
    $result = $apiInstance->register($requestRegisterUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestRegisterUser** | [**\TripartieWebAPI\Model\RequestRegisterUser**](../Model/RequestRegisterUser.md)|  |

### Return type

[**\TripartieWebAPI\Model\ModelUser**](../Model/ModelUser.md)

### Authorization

[ClientIdAuth](../../README.md#ClientIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
