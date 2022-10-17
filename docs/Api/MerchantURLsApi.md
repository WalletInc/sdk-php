# OpenAPI\Client\MerchantURLsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveMerchantURL()**](MerchantURLsApi.md#archiveMerchantURL) | **DELETE** /v2/business/merchantUrl/{id} | Archive merchant url
[**createMerchantURL()**](MerchantURLsApi.md#createMerchantURL) | **POST** /v2/business/merchantUrl | Create merchant url
[**fetchAllMerchantURLs()**](MerchantURLsApi.md#fetchAllMerchantURLs) | **GET** /v2/business/merchantUrl/all | Fetch all merchant urls
[**fetchMerchantURL()**](MerchantURLsApi.md#fetchMerchantURL) | **GET** /v2/business/merchantUrl/{id} | Fetch merchant url
[**fetchMerchantURLRequests()**](MerchantURLsApi.md#fetchMerchantURLRequests) | **GET** /v2/business/merchantUrl/requests/{id} | Fetch requests
[**restoreMerchantURL()**](MerchantURLsApi.md#restoreMerchantURL) | **PATCH** /v2/business/merchantUrl/{id} | Restore merchant url
[**updateMerchantURL()**](MerchantURLsApi.md#updateMerchantURL) | **PUT** /v2/business/merchantUrl/{id} | Update merchant url


## `archiveMerchantURL()`

```php
archiveMerchantURL($id): \OpenAPI\Client\Model\MerchantURL
```

Archive merchant url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->archiveMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Create merchant url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_url_create = new \OpenAPI\Client\Model\WTMerchantURLCreate(); // \OpenAPI\Client\Model\WTMerchantURLCreate

try {
    $result = $apiInstance->createMerchantURL($wt_merchant_url_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->createMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_merchant_url_create** | [**\OpenAPI\Client\Model\WTMerchantURLCreate**](../Model/WTMerchantURLCreate.md)|  |

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

Fetch all merchant urls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllMerchantURLs($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->fetchAllMerchantURLs: ', $e->getMessage(), PHP_EOL;
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

## `fetchMerchantURL()`

```php
fetchMerchantURL($id): \OpenAPI\Client\Model\MerchantURL
```

Fetch merchant url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->fetchMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Fetch requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchMerchantURLRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->fetchMerchantURLRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Restore merchant url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreMerchantURL($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->restoreMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Update merchant url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantURLsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_merchant_url_update = new \OpenAPI\Client\Model\WTMerchantURLUpdate(); // \OpenAPI\Client\Model\WTMerchantURLUpdate

try {
    $result = $apiInstance->updateMerchantURL($id, $wt_merchant_url_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantURLsApi->updateMerchantURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_merchant_url_update** | [**\OpenAPI\Client\Model\WTMerchantURLUpdate**](../Model/WTMerchantURLUpdate.md)|  |

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
