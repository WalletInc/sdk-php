# OpenAPI\Client\ShortLinksApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMerchantURL()**](ShortLinksApi.md#archiveMerchantURL) | **DELETE** /v2/business/merchantUrl/{id} | Archive Short Link |
| [**createMerchantURL()**](ShortLinksApi.md#createMerchantURL) | **POST** /v2/business/merchantUrl | Create Short Link |
| [**fetchAllMerchantURLs()**](ShortLinksApi.md#fetchAllMerchantURLs) | **GET** /v2/business/merchantUrl/all | Get all Short Links |
| [**fetchMerchantURL()**](ShortLinksApi.md#fetchMerchantURL) | **GET** /v2/business/merchantUrl/{id} | Get Short Link |
| [**fetchMerchantURLRequests()**](ShortLinksApi.md#fetchMerchantURLRequests) | **GET** /v2/business/merchantUrl/requests/{id} | Get Short Link traffic |
| [**restoreMerchantURL()**](ShortLinksApi.md#restoreMerchantURL) | **PATCH** /v2/business/merchantUrl/{id} | Restore Short Link |
| [**updateMerchantURL()**](ShortLinksApi.md#updateMerchantURL) | **PUT** /v2/business/merchantUrl/{id} | Update Short Link |


## `archiveMerchantURL()`

```php
archiveMerchantURL($id): \OpenAPI\Client\Model\MerchantURL
```

Archive Short Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->archiveMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MerchantURL**](../Model/MerchantURL.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMerchantURL()`

```php
createMerchantURL($wt_merchant_url_create): \OpenAPI\Client\Model\MerchantURL
```

Create Short Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_url_create = new \OpenAPI\Client\Model\WTMerchantURLCreate(); // \OpenAPI\Client\Model\WTMerchantURLCreate

try {
    $result = $apiInstance->createMerchantURL($wt_merchant_url_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->createMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_url_create** | [**\OpenAPI\Client\Model\WTMerchantURLCreate**](../Model/WTMerchantURLCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MerchantURL**](../Model/MerchantURL.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllMerchantURLs()`

```php
fetchAllMerchantURLs($is_archive_included): mixed
```

Get all Short Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllMerchantURLs($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->fetchAllMerchantURLs: ', $e->getMessage(), PHP_EOL;
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

## `fetchMerchantURL()`

```php
fetchMerchantURL($id): \OpenAPI\Client\Model\MerchantURL
```

Get Short Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->fetchMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MerchantURL**](../Model/MerchantURL.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantURLRequests()`

```php
fetchMerchantURLRequests($id): \OpenAPI\Client\Model\WalletPageView[]
```

Get Short Link traffic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMerchantURLRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->fetchMerchantURLRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WalletPageView[]**](../Model/WalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMerchantURL()`

```php
restoreMerchantURL($id): \OpenAPI\Client\Model\MerchantURL
```

Restore Short Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->restoreMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MerchantURL**](../Model/MerchantURL.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchantURL()`

```php
updateMerchantURL($id, $wt_merchant_url_update): \OpenAPI\Client\Model\MerchantURL
```

Update Short Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShortLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_merchant_url_update = new \OpenAPI\Client\Model\WTMerchantURLUpdate(); // \OpenAPI\Client\Model\WTMerchantURLUpdate

try {
    $result = $apiInstance->updateMerchantURL($id, $wt_merchant_url_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortLinksApi->updateMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_merchant_url_update** | [**\OpenAPI\Client\Model\WTMerchantURLUpdate**](../Model/WTMerchantURLUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MerchantURL**](../Model/MerchantURL.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
