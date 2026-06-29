# OpenAPI\Client\QuickLinksSectionApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLinkBookSection()**](QuickLinksSectionApi.md#archiveLinkBookSection) | **DELETE** /v2/linkBookSection/{id} | Archive quick link section |
| [**createLinkBookSection()**](QuickLinksSectionApi.md#createLinkBookSection) | **POST** /v2/linkBookSection | Create quick link section |
| [**fetchAllLinkBookSections()**](QuickLinksSectionApi.md#fetchAllLinkBookSections) | **GET** /v2/linkBookSection/all | Get all quick link sections |
| [**restoreLinkBookSection()**](QuickLinksSectionApi.md#restoreLinkBookSection) | **PATCH** /v2/linkBookSection/{id} | Restore quick link section |
| [**updateLinkBookSection()**](QuickLinksSectionApi.md#updateLinkBookSection) | **PUT** /v2/linkBookSection/{id} | Update quick link section |


## `archiveLinkBookSection()`

```php
archiveLinkBookSection($id): \OpenAPI\Client\Model\LinkBookSection
```

Archive quick link section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveLinkBookSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksSectionApi->archiveLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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
createLinkBookSection($wt_quick_link_section_create_params): \OpenAPI\Client\Model\LinkBookSection
```

Create quick link section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_quick_link_section_create_params = new \OpenAPI\Client\Model\WTQuickLinkSectionCreateParams(); // \OpenAPI\Client\Model\WTQuickLinkSectionCreateParams

try {
    $result = $apiInstance->createLinkBookSection($wt_quick_link_section_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksSectionApi->createLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_quick_link_section_create_params** | [**\OpenAPI\Client\Model\WTQuickLinkSectionCreateParams**](../Model/WTQuickLinkSectionCreateParams.md)|  | |

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

Get all quick link sections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllLinkBookSections($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksSectionApi->fetchAllLinkBookSections: ', $e->getMessage(), PHP_EOL;
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

## `restoreLinkBookSection()`

```php
restoreLinkBookSection($id): \OpenAPI\Client\Model\LinkBookSection
```

Restore quick link section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreLinkBookSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksSectionApi->restoreLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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
updateLinkBookSection($id, $wt_quick_link_section_update_params): \OpenAPI\Client\Model\LinkBookSection
```

Update quick link section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickLinksSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_quick_link_section_update_params = new \OpenAPI\Client\Model\WTQuickLinkSectionUpdateParams(); // \OpenAPI\Client\Model\WTQuickLinkSectionUpdateParams

try {
    $result = $apiInstance->updateLinkBookSection($id, $wt_quick_link_section_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickLinksSectionApi->updateLinkBookSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_quick_link_section_update_params** | [**\OpenAPI\Client\Model\WTQuickLinkSectionUpdateParams**](../Model/WTQuickLinkSectionUpdateParams.md)|  | |

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
