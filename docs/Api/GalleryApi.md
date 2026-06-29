# OpenAPI\Client\GalleryApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveImageGrid()**](GalleryApi.md#archiveImageGrid) | **DELETE** /v2/imageGrid/{id} | Archive Gallery Image |
| [**createImageGrid()**](GalleryApi.md#createImageGrid) | **POST** /v2/imageGrid | Create Gallery Image |
| [**fetchAllImageGrid()**](GalleryApi.md#fetchAllImageGrid) | **GET** /v2/imageGrid/all | Get all Gallery Images |
| [**restoreImageGrid()**](GalleryApi.md#restoreImageGrid) | **PATCH** /v2/imageGrid/{id} | Restore Gallery Image |
| [**updateImageGrid()**](GalleryApi.md#updateImageGrid) | **PUT** /v2/imageGrid/{id} | Update Gallery Image |


## `archiveImageGrid()`

```php
archiveImageGrid($id): \OpenAPI\Client\Model\ImageGrid
```

Archive Gallery Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveImageGrid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->archiveImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Create Gallery Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_image_grid_create_params = new \OpenAPI\Client\Model\WTImageGridCreateParams(); // \OpenAPI\Client\Model\WTImageGridCreateParams

try {
    $result = $apiInstance->createImageGrid($wt_image_grid_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->createImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_image_grid_create_params** | [**\OpenAPI\Client\Model\WTImageGridCreateParams**](../Model/WTImageGridCreateParams.md)|  | |

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

Get all Gallery Images

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllImageGrid($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->fetchAllImageGrid: ', $e->getMessage(), PHP_EOL;
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

## `restoreImageGrid()`

```php
restoreImageGrid($id): \OpenAPI\Client\Model\ImageGrid
```

Restore Gallery Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreImageGrid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->restoreImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Update Gallery Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GalleryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_image_grid_update_params = new \OpenAPI\Client\Model\WTImageGridUpdateParams(); // \OpenAPI\Client\Model\WTImageGridUpdateParams

try {
    $result = $apiInstance->updateImageGrid($id, $wt_image_grid_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GalleryApi->updateImageGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_image_grid_update_params** | [**\OpenAPI\Client\Model\WTImageGridUpdateParams**](../Model/WTImageGridUpdateParams.md)|  | |

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
