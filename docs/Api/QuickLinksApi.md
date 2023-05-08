# OpenAPI\Client\QuickLinksApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveLinkBook()**](QuickLinksApi.md#archiveLinkBook) | **DELETE** /v2/linkBook/{id} | Archive link
[**createLinkBook()**](QuickLinksApi.md#createLinkBook) | **POST** /v2/linkBook | Create link
[**fetchAllLinkBook()**](QuickLinksApi.md#fetchAllLinkBook) | **GET** /v2/linkBook/all | Fetch all links
[**fetchLinkBookById()**](QuickLinksApi.md#fetchLinkBookById) | **GET** /v2/linkBook/{id} | Fetch link book by id
[**restoreLinkBook()**](QuickLinksApi.md#restoreLinkBook) | **PATCH** /v2/linkBook/{id} | Restore link
[**updateLinkBook()**](QuickLinksApi.md#updateLinkBook) | **PUT** /v2/linkBook/{id} | Update link


## `archiveLinkBook()`

```php
archiveLinkBook($id): \OpenAPI\Client\Model\LinkBook
```

Archive link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveLinkBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->archiveLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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
createLinkBook($wt_link_book_create_params): \OpenAPI\Client\Model\LinkBook
```

Create link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_link_book_create_params = new \OpenAPI\Client\Model\WTLinkBookCreateParams(); // \OpenAPI\Client\Model\WTLinkBookCreateParams

try {
    $result = $apiInstance->createLinkBook($wt_link_book_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->createLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_link_book_create_params** | [**\OpenAPI\Client\Model\WTLinkBookCreateParams**](../Model/WTLinkBookCreateParams.md)|  |

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

Fetch all links

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

## `fetchLinkBookById()`

```php
fetchLinkBookById($id): \OpenAPI\Client\Model\WTLinkBook
```

Fetch link book by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchLinkBookById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->fetchLinkBookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTLinkBook**](../Model/WTLinkBook.md)

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

Restore link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreLinkBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->restoreLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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
updateLinkBook($id, $wt_link_book_update_params): \OpenAPI\Client\Model\LinkBook
```

Update link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_link_book_update_params = new \OpenAPI\Client\Model\WTLinkBookUpdateParams(); // \OpenAPI\Client\Model\WTLinkBookUpdateParams

try {
    $result = $apiInstance->updateLinkBook($id, $wt_link_book_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksApi->updateLinkBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_link_book_update_params** | [**\OpenAPI\Client\Model\WTLinkBookUpdateParams**](../Model/WTLinkBookUpdateParams.md)|  |

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
