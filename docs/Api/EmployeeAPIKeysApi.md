# OpenAPI\Client\EmployeeAPIKeysApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveEmployeeAPIKeys()**](EmployeeAPIKeysApi.md#archiveEmployeeAPIKeys) | **DELETE** /v2/employee/apiKeys/{id} | Archive employee API Key
[**createEmployeeAPIKeys()**](EmployeeAPIKeysApi.md#createEmployeeAPIKeys) | **POST** /v2/employee/apiKeys | Create employee API Key
[**fetchAllEmployeeAPIKeys()**](EmployeeAPIKeysApi.md#fetchAllEmployeeAPIKeys) | **GET** /v2/employee/apiKeys/all | Fetch all employee API Keys
[**fetchEmployeeAPIKeyById()**](EmployeeAPIKeysApi.md#fetchEmployeeAPIKeyById) | **GET** /v2/employee/apiKeys/{id} | Fetch API Key
[**updateEmployeeAPIKeys()**](EmployeeAPIKeysApi.md#updateEmployeeAPIKeys) | **PUT** /v2/employee/apiKeys/{id} | Update employee API Key


## `archiveEmployeeAPIKeys()`

```php
archiveEmployeeAPIKeys($id): \OpenAPI\Client\Model\EmployeeAPIKey
```

Archive employee API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAPIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveEmployeeAPIKeys($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAPIKeysApi->archiveEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployeeAPIKey**](../Model/EmployeeAPIKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmployeeAPIKeys()`

```php
createEmployeeAPIKeys($wt_employee_api_key_create_params): \OpenAPI\Client\Model\EmployeeAPIKey
```

Create employee API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAPIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_api_key_create_params = new \OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams(); // \OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams

try {
    $result = $apiInstance->createEmployeeAPIKeys($wt_employee_api_key_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAPIKeysApi->createEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_api_key_create_params** | [**\OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams**](../Model/WTEmployeeAPIKeyCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployeeAPIKey**](../Model/EmployeeAPIKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllEmployeeAPIKeys()`

```php
fetchAllEmployeeAPIKeys($is_archive_included): \OpenAPI\Client\Model\EmployeeAPIKey[]
```

Fetch all employee API Keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAPIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllEmployeeAPIKeys($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAPIKeysApi->fetchAllEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\EmployeeAPIKey[]**](../Model/EmployeeAPIKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEmployeeAPIKeyById()`

```php
fetchEmployeeAPIKeyById($id): \OpenAPI\Client\Model\WTEmployeeAPIKey
```

Fetch API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAPIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchEmployeeAPIKeyById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAPIKeysApi->fetchEmployeeAPIKeyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTEmployeeAPIKey**](../Model/WTEmployeeAPIKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeAPIKeys()`

```php
updateEmployeeAPIKeys($id, $wt_employee_api_key_update_params): \OpenAPI\Client\Model\EmployeeAPIKey
```

Update employee API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAPIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_employee_api_key_update_params = new \OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams(); // \OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams

try {
    $result = $apiInstance->updateEmployeeAPIKeys($id, $wt_employee_api_key_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAPIKeysApi->updateEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_employee_api_key_update_params** | [**\OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams**](../Model/WTEmployeeAPIKeyUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployeeAPIKey**](../Model/EmployeeAPIKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
