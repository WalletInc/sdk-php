# OpenAPI\Client\QuickLinksApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLinkBook()**](QuickLinksApi.md#archiveLinkBook) | **DELETE** /v2/linkBook/{id} | Archive Quick Link |
| [**createLinkBook()**](QuickLinksApi.md#createLinkBook) | **POST** /v2/linkBook | Create Quick Link |
| [**fetchAllLinkBook()**](QuickLinksApi.md#fetchAllLinkBook) | **GET** /v2/linkBook/all | Get all Quick Links |
| [**fetchLinkBookById()**](QuickLinksApi.md#fetchLinkBookById) | **GET** /v2/linkBook/{id} | Get Quick Link |
| [**restoreLinkBook()**](QuickLinksApi.md#restoreLinkBook) | **PATCH** /v2/linkBook/{id} | Restore Quick Link |
| [**updateLinkBook()**](QuickLinksApi.md#updateLinkBook) | **PUT** /v2/linkBook/{id} | Update Quick Link |


## `archiveLinkBook()`

```php
archiveLinkBook($id): \OpenAPI\Client\Model\LinkBook
```

Archive Quick Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveLinkBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->archiveLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LinkBook**](../Model/LinkBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLinkBook()`

```php
createLinkBook($wt_quick_link_create_params): \OpenAPI\Client\Model\LinkBook
```

Create Quick Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_quick_link_create_params = new \OpenAPI\Client\Model\WTQuickLinkCreateParams(); // \OpenAPI\Client\Model\WTQuickLinkCreateParams

try {
    $result = $apiInstance->createLinkBook($wt_quick_link_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->createLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_quick_link_create_params** | [**\OpenAPI\Client\Model\WTQuickLinkCreateParams**](../Model/WTQuickLinkCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LinkBook**](../Model/LinkBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllLinkBook()`

```php
fetchAllLinkBook($is_archive_included): mixed
```

Get all Quick Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllLinkBook($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->fetchAllLinkBook: ', $e->getMessage(), PHP_EOL;
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

## `fetchLinkBookById()`

```php
fetchLinkBookById($id): \OpenAPI\Client\Model\WTQuickLink
```

Get Quick Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchLinkBookById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->fetchLinkBookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTQuickLink**](../Model/WTQuickLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreLinkBook()`

```php
restoreLinkBook($id): \OpenAPI\Client\Model\LinkBook
```

Restore Quick Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreLinkBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->restoreLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LinkBook**](../Model/LinkBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkBook()`

```php
updateLinkBook($id, $wt_quick_link_update_params): \OpenAPI\Client\Model\LinkBook
```

Update Quick Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_quick_link_update_params = new \OpenAPI\Client\Model\WTQuickLinkUpdateParams(); // \OpenAPI\Client\Model\WTQuickLinkUpdateParams

try {
    $result = $apiInstance->updateLinkBook($id, $wt_quick_link_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->updateLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_quick_link_update_params** | [**\OpenAPI\Client\Model\WTQuickLinkUpdateParams**](../Model/WTQuickLinkUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LinkBook**](../Model/LinkBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
