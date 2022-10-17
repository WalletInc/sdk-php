# OpenAPI\Client\ImageGridApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveImageGrid()**](ImageGridApi.md#archiveImageGrid) | **DELETE** /v2/imageGrid/{id} | Archive image
[**createImageGrid()**](ImageGridApi.md#createImageGrid) | **POST** /v2/imageGrid | Create image
[**fetchAllImageGrid()**](ImageGridApi.md#fetchAllImageGrid) | **GET** /v2/imageGrid/all | Fetch all images
[**restoreImageGrid()**](ImageGridApi.md#restoreImageGrid) | **PATCH** /v2/imageGrid/{id} | Restore image
[**updateImageGrid()**](ImageGridApi.md#updateImageGrid) | **PUT** /v2/imageGrid/{id} | Update image


## `archiveImageGrid()`

```php
archiveImageGrid($id): \OpenAPI\Client\Model\ImageGrid
```

Archive image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageGridApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveImageGrid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageGridApi->archiveImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageGrid**](../Model/ImageGrid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createImageGrid()`

```php
createImageGrid($wt_image_grid_create_params): \OpenAPI\Client\Model\ImageGrid
```

Create image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageGridApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_image_grid_create_params = new \OpenAPI\Client\Model\WTImageGridCreateParams(); // \OpenAPI\Client\Model\WTImageGridCreateParams

try {
    $result = $apiInstance->createImageGrid($wt_image_grid_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageGridApi->createImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_image_grid_create_params** | [**\OpenAPI\Client\Model\WTImageGridCreateParams**](../Model/WTImageGridCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageGrid**](../Model/ImageGrid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllImageGrid()`

```php
fetchAllImageGrid($is_archive_included): mixed
```

Fetch all images

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageGridApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllImageGrid($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageGridApi->fetchAllImageGrid: ', $e->getMessage(), PHP_EOL;
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

## `restoreImageGrid()`

```php
restoreImageGrid($id): \OpenAPI\Client\Model\ImageGrid
```

Restore image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageGridApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreImageGrid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageGridApi->restoreImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageGrid**](../Model/ImageGrid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImageGrid()`

```php
updateImageGrid($id, $wt_image_grid_update_params): \OpenAPI\Client\Model\ImageGrid
```

Update image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageGridApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_image_grid_update_params = new \OpenAPI\Client\Model\WTImageGridUpdateParams(); // \OpenAPI\Client\Model\WTImageGridUpdateParams

try {
    $result = $apiInstance->updateImageGrid($id, $wt_image_grid_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageGridApi->updateImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_image_grid_update_params** | [**\OpenAPI\Client\Model\WTImageGridUpdateParams**](../Model/WTImageGridUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageGrid**](../Model/ImageGrid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
