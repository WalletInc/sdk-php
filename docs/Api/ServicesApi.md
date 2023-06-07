# OpenAPI\Client\ServicesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveService()**](ServicesApi.md#archiveService) | **DELETE** /v2/services/{id} | Archive service
[**createService()**](ServicesApi.md#createService) | **POST** /v2/services | Create service
[**fetchAllServices()**](ServicesApi.md#fetchAllServices) | **GET** /v2/services/all | Fetch all services
[**restoreService()**](ServicesApi.md#restoreService) | **PATCH** /v2/services/{id} | Restore service
[**updateService()**](ServicesApi.md#updateService) | **PUT** /v2/services/{id} | Update service


## `archiveService()`

```php
archiveService($id): \OpenAPI\Client\Model\Service
```

Archive service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->archiveService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createService()`

```php
createService($wt_service_create_params): \OpenAPI\Client\Model\Service
```

Create service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_service_create_params = new \OpenAPI\Client\Model\WTServiceCreateParams(); // \OpenAPI\Client\Model\WTServiceCreateParams

try {
    $result = $apiInstance->createService($wt_service_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->createService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_service_create_params** | [**\OpenAPI\Client\Model\WTServiceCreateParams**](../Model/WTServiceCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllServices()`

```php
fetchAllServices($is_archive_included): mixed
```

Fetch all services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllServices($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->fetchAllServices: ', $e->getMessage(), PHP_EOL;
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

## `restoreService()`

```php
restoreService($id): \OpenAPI\Client\Model\Service
```

Restore service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->restoreService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateService()`

```php
updateService($id, $wt_service_update_params): \OpenAPI\Client\Model\Service
```

Update service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_service_update_params = new \OpenAPI\Client\Model\WTServiceUpdateParams(); // \OpenAPI\Client\Model\WTServiceUpdateParams

try {
    $result = $apiInstance->updateService($id, $wt_service_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_service_update_params** | [**\OpenAPI\Client\Model\WTServiceUpdateParams**](../Model/WTServiceUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
