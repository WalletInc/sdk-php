# OpenAPI\Client\A2PApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createA2PApplication()**](A2PApi.md#createA2PApplication) | **POST** /v2/a2p/application | Create A2P Application
[**createA2PRegistration()**](A2PApi.md#createA2PRegistration) | **POST** /v2/a2p/registration | Create A2P Registration
[**fetchA2PApplication()**](A2PApi.md#fetchA2PApplication) | **GET** /v2/a2p/application | Fetch A2P Application
[**fetchA2PRegistration()**](A2PApi.md#fetchA2PRegistration) | **GET** /v2/a2p/registration | Fetch A2P Registration


## `createA2PApplication()`

```php
createA2PApplication($wta2_p_application_create_params): mixed
```

Create A2P Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\A2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wta2_p_application_create_params = new \OpenAPI\Client\Model\WTA2PApplicationCreateParams(); // \OpenAPI\Client\Model\WTA2PApplicationCreateParams

try {
    $result = $apiInstance->createA2PApplication($wta2_p_application_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->createA2PApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wta2_p_application_create_params** | [**\OpenAPI\Client\Model\WTA2PApplicationCreateParams**](../Model/WTA2PApplicationCreateParams.md)|  |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createA2PRegistration()`

```php
createA2PRegistration(): mixed
```

Create A2P Registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\A2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createA2PRegistration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->createA2PRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchA2PApplication()`

```php
fetchA2PApplication(): mixed
```

Fetch A2P Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\A2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchA2PApplication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->fetchA2PApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchA2PRegistration()`

```php
fetchA2PRegistration(): mixed
```

Fetch A2P Registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\A2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchA2PRegistration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->fetchA2PRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
