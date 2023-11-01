# OpenAPI\Client\A2PApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**beginA2PApplication()**](A2PApi.md#beginA2PApplication) | **POST** /v2/a2p/application | Create A2P Application
[**fetchA2PApplication()**](A2PApi.md#fetchA2PApplication) | **GET** /v2/a2p/application | Fetch A2P Application
[**fetchA2PRegistration()**](A2PApi.md#fetchA2PRegistration) | **GET** /v2/a2p/registration | Fetch A2P Registration
[**updateA2PApplication()**](A2PApi.md#updateA2PApplication) | **PUT** /v2/a2p/application/{applicationID} | Update A2P Application


## `beginA2PApplication()`

```php
beginA2PApplication($a2_p_application_submission): bool
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
$a2_p_application_submission = new \OpenAPI\Client\Model\A2PApplicationSubmission(); // \OpenAPI\Client\Model\A2PApplicationSubmission

try {
    $result = $apiInstance->beginA2PApplication($a2_p_application_submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->beginA2PApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a2_p_application_submission** | [**\OpenAPI\Client\Model\A2PApplicationSubmission**](../Model/A2PApplicationSubmission.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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

## `updateA2PApplication()`

```php
updateA2PApplication($application_id, $wta2_p_application_update_params): bool
```

Update A2P Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\A2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string
$wta2_p_application_update_params = new \OpenAPI\Client\Model\WTA2PApplicationUpdateParams(); // \OpenAPI\Client\Model\WTA2PApplicationUpdateParams

try {
    $result = $apiInstance->updateA2PApplication($application_id, $wta2_p_application_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling A2PApi->updateA2PApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  |
 **wta2_p_application_update_params** | [**\OpenAPI\Client\Model\WTA2PApplicationUpdateParams**](../Model/WTA2PApplicationUpdateParams.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
