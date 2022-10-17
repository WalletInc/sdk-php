# OpenAPI\Client\LinkBookSectionApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveLinkBookSection()**](LinkBookSectionApi.md#archiveLinkBookSection) | **DELETE** /v2/linkBookSection/{id} | Archive link book section
[**createLinkBookSection()**](LinkBookSectionApi.md#createLinkBookSection) | **POST** /v2/linkBookSection | Create link book section
[**fetchAllLinkBookSections()**](LinkBookSectionApi.md#fetchAllLinkBookSections) | **GET** /v2/linkBookSection/all | Fetch all link book sections
[**restoreLinkBookSection()**](LinkBookSectionApi.md#restoreLinkBookSection) | **PATCH** /v2/linkBookSection/{id} | Restore link book section
[**updateLinkBookSection()**](LinkBookSectionApi.md#updateLinkBookSection) | **PUT** /v2/linkBookSection/{id} | Update link book section


## `archiveLinkBookSection()`

```php
archiveLinkBookSection($id): \OpenAPI\Client\Model\LinkBookSection
```

Archive link book section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LinkBookSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveLinkBookSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkBookSectionApi->archiveLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkBookSection**](../Model/LinkBookSection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLinkBookSection()`

```php
createLinkBookSection($wt_link_book_section_create_params): \OpenAPI\Client\Model\LinkBookSection
```

Create link book section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LinkBookSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_link_book_section_create_params = new \OpenAPI\Client\Model\WTLinkBookSectionCreateParams(); // \OpenAPI\Client\Model\WTLinkBookSectionCreateParams

try {
    $result = $apiInstance->createLinkBookSection($wt_link_book_section_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkBookSectionApi->createLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_link_book_section_create_params** | [**\OpenAPI\Client\Model\WTLinkBookSectionCreateParams**](../Model/WTLinkBookSectionCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkBookSection**](../Model/LinkBookSection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllLinkBookSections()`

```php
fetchAllLinkBookSections($is_archive_included): mixed
```

Fetch all link book sections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LinkBookSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllLinkBookSections($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkBookSectionApi->fetchAllLinkBookSections: ', $e->getMessage(), PHP_EOL;
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

## `restoreLinkBookSection()`

```php
restoreLinkBookSection($id): \OpenAPI\Client\Model\LinkBookSection
```

Restore link book section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LinkBookSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreLinkBookSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkBookSectionApi->restoreLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkBookSection**](../Model/LinkBookSection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkBookSection()`

```php
updateLinkBookSection($id, $wt_link_book_section_update_params): \OpenAPI\Client\Model\LinkBookSection
```

Update link book section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LinkBookSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_link_book_section_update_params = new \OpenAPI\Client\Model\WTLinkBookSectionUpdateParams(); // \OpenAPI\Client\Model\WTLinkBookSectionUpdateParams

try {
    $result = $apiInstance->updateLinkBookSection($id, $wt_link_book_section_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkBookSectionApi->updateLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_link_book_section_update_params** | [**\OpenAPI\Client\Model\WTLinkBookSectionUpdateParams**](../Model/WTLinkBookSectionUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkBookSection**](../Model/LinkBookSection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
