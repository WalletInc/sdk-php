# OpenAPI\Client\PerformancesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archivePerformance()**](PerformancesApi.md#archivePerformance) | **DELETE** /v2/performances/{id} | Archive performance
[**createPerformance()**](PerformancesApi.md#createPerformance) | **POST** /v2/performances | Create performance
[**fetchAllPerformances()**](PerformancesApi.md#fetchAllPerformances) | **GET** /v2/performances/all | Fetch all performances
[**restorePerformance()**](PerformancesApi.md#restorePerformance) | **PATCH** /v2/performances/{id} | Restore performance
[**updatePerformance()**](PerformancesApi.md#updatePerformance) | **PUT** /v2/performances/{id} | Update performance


## `archivePerformance()`

```php
archivePerformance($id): \OpenAPI\Client\Model\Performance
```

Archive performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archivePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->archivePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPerformance()`

```php
createPerformance($wt_performance_create_params): \OpenAPI\Client\Model\Performance
```

Create performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_performance_create_params = new \OpenAPI\Client\Model\WTPerformanceCreateParams(); // \OpenAPI\Client\Model\WTPerformanceCreateParams

try {
    $result = $apiInstance->createPerformance($wt_performance_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->createPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_performance_create_params** | [**\OpenAPI\Client\Model\WTPerformanceCreateParams**](../Model/WTPerformanceCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPerformances()`

```php
fetchAllPerformances($is_archive_included): mixed
```

Fetch all performances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPerformances($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchAllPerformances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

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

## `restorePerformance()`

```php
restorePerformance($id): \OpenAPI\Client\Model\Performance
```

Restore performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restorePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->restorePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePerformance()`

```php
updatePerformance($id, $wt_performance_update_params): \OpenAPI\Client\Model\Performance
```

Update performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_performance_update_params = new \OpenAPI\Client\Model\WTPerformanceUpdateParams(); // \OpenAPI\Client\Model\WTPerformanceUpdateParams

try {
    $result = $apiInstance->updatePerformance($id, $wt_performance_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->updatePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_performance_update_params** | [**\OpenAPI\Client\Model\WTPerformanceUpdateParams**](../Model/WTPerformanceUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
