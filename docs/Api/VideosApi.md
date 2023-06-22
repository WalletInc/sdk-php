# OpenAPI\Client\VideosApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveVideo()**](VideosApi.md#archiveVideo) | **DELETE** /v2/video/{id} | Archive video
[**createVideo()**](VideosApi.md#createVideo) | **POST** /v2/video | Create video
[**fetchAllVideo()**](VideosApi.md#fetchAllVideo) | **GET** /v2/video/all | Fetch all video
[**restoreVideo()**](VideosApi.md#restoreVideo) | **PATCH** /v2/video/{id} | Restore video
[**updateVideo()**](VideosApi.md#updateVideo) | **PUT** /v2/video/{id} | Update video


## `archiveVideo()`

```php
archiveVideo($id): \OpenAPI\Client\Model\Video
```

Archive video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveVideo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->archiveVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Video**](../Model/Video.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVideo()`

```php
createVideo($wt_video_create_params): \OpenAPI\Client\Model\Video
```

Create video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_video_create_params = new \OpenAPI\Client\Model\WTVideoCreateParams(); // \OpenAPI\Client\Model\WTVideoCreateParams

try {
    $result = $apiInstance->createVideo($wt_video_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->createVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_video_create_params** | [**\OpenAPI\Client\Model\WTVideoCreateParams**](../Model/WTVideoCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Video**](../Model/Video.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllVideo()`

```php
fetchAllVideo($is_archive_included): mixed
```

Fetch all video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllVideo($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->fetchAllVideo: ', $e->getMessage(), PHP_EOL;
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

## `restoreVideo()`

```php
restoreVideo($id): \OpenAPI\Client\Model\Video
```

Restore video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreVideo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->restoreVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Video**](../Model/Video.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVideo()`

```php
updateVideo($id, $wt_video_update_params): \OpenAPI\Client\Model\Video
```

Update video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_video_update_params = new \OpenAPI\Client\Model\WTVideoUpdateParams(); // \OpenAPI\Client\Model\WTVideoUpdateParams

try {
    $result = $apiInstance->updateVideo($id, $wt_video_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->updateVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_video_update_params** | [**\OpenAPI\Client\Model\WTVideoUpdateParams**](../Model/WTVideoUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Video**](../Model/Video.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
