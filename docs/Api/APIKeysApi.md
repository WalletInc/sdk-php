# OpenAPI\Client\APIKeysApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveEmployeeAPIKeys()**](APIKeysApi.md#archiveEmployeeAPIKeys) | **DELETE** /v2/employee/apiKeys/{id} | Archive API Key |
| [**createEmployeeAPIKeys()**](APIKeysApi.md#createEmployeeAPIKeys) | **POST** /v2/employee/apiKeys | Create API Key |
| [**fetchAllEmployeeAPIKeys()**](APIKeysApi.md#fetchAllEmployeeAPIKeys) | **GET** /v2/employee/apiKeys/all | Get API Keys |
| [**fetchEmployeeAPIKeyById()**](APIKeysApi.md#fetchEmployeeAPIKeyById) | **GET** /v2/employee/apiKeys/{id} | Get API Key |
| [**updateEmployeeAPIKeys()**](APIKeysApi.md#updateEmployeeAPIKeys) | **PUT** /v2/employee/apiKeys/{id} | Update API Key |


## `archiveEmployeeAPIKeys()`

```php
archiveEmployeeAPIKeys($id): \OpenAPI\Client\Model\EmployeeAPIKey
```

Archive API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveEmployeeAPIKeys($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->archiveEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Create API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_api_key_create_params = new \OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams(); // \OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams

try {
    $result = $apiInstance->createEmployeeAPIKeys($wt_employee_api_key_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_api_key_create_params** | [**\OpenAPI\Client\Model\WTEmployeeAPIKeyCreateParams**](../Model/WTEmployeeAPIKeyCreateParams.md)|  | |

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

Get API Keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllEmployeeAPIKeys($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->fetchAllEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

Get API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchEmployeeAPIKeyById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->fetchEmployeeAPIKeyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Update API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_employee_api_key_update_params = new \OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams(); // \OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams

try {
    $result = $apiInstance->updateEmployeeAPIKeys($id, $wt_employee_api_key_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->updateEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_employee_api_key_update_params** | [**\OpenAPI\Client\Model\WTEmployeeAPIKeyUpdateParams**](../Model/WTEmployeeAPIKeyUpdateParams.md)|  | |

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
