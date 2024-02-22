# OpenAPI\Client\DiningApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveDining()**](DiningApi.md#archiveDining) | **DELETE** /v2/dining/{id} | Archive dining |
| [**createDining()**](DiningApi.md#createDining) | **POST** /v2/dining | Create dining |
| [**fetchAllDining()**](DiningApi.md#fetchAllDining) | **GET** /v2/dining/all | Fetch all dining |
| [**restoreDining()**](DiningApi.md#restoreDining) | **PATCH** /v2/dining/{id} | Restore dining |
| [**updateDining()**](DiningApi.md#updateDining) | **PUT** /v2/dining/{id} | Update dining |


## `archiveDining()`

```php
archiveDining($id): \OpenAPI\Client\Model\Dining
```

Archive dining

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveDining($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiningApi->archiveDining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dining**](../Model/Dining.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDining()`

```php
createDining($wt_dining_create_params): \OpenAPI\Client\Model\Dining
```

Create dining

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_dining_create_params = new \OpenAPI\Client\Model\WTDiningCreateParams(); // \OpenAPI\Client\Model\WTDiningCreateParams

try {
    $result = $apiInstance->createDining($wt_dining_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiningApi->createDining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_dining_create_params** | [**\OpenAPI\Client\Model\WTDiningCreateParams**](../Model/WTDiningCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dining**](../Model/Dining.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllDining()`

```php
fetchAllDining($is_archive_included): mixed
```

Fetch all dining

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllDining($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiningApi->fetchAllDining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

## `restoreDining()`

```php
restoreDining($id): \OpenAPI\Client\Model\Dining
```

Restore dining

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreDining($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiningApi->restoreDining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dining**](../Model/Dining.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDining()`

```php
updateDining($id, $wt_dining_update_params): \OpenAPI\Client\Model\Dining
```

Update dining

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_dining_update_params = new \OpenAPI\Client\Model\WTDiningUpdateParams(); // \OpenAPI\Client\Model\WTDiningUpdateParams

try {
    $result = $apiInstance->updateDining($id, $wt_dining_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiningApi->updateDining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |
| **wt_dining_update_params** | [**\OpenAPI\Client\Model\WTDiningUpdateParams**](../Model/WTDiningUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dining**](../Model/Dining.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
