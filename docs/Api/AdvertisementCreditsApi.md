# OpenAPI\Client\AdvertisementCreditsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveAdvertisementCredit()**](AdvertisementCreditsApi.md#archiveAdvertisementCredit) | **DELETE** /v2/payment/advertisementCredit/{id} | Archive ad credit
[**createAdvertisementCredit()**](AdvertisementCreditsApi.md#createAdvertisementCredit) | **POST** /v2/payment/advertisementCredit | Create ad credit
[**fetchAdvertisementCreditById()**](AdvertisementCreditsApi.md#fetchAdvertisementCreditById) | **GET** /v2/payment/advertisementCredit/{id} | Fetch ad credit
[**fetchAdvertisementCreditScans()**](AdvertisementCreditsApi.md#fetchAdvertisementCreditScans) | **GET** /v2/payment/advertisementCredit/scans/{id} | Fetch scans
[**fetchAllAdvertisementCredits()**](AdvertisementCreditsApi.md#fetchAllAdvertisementCredits) | **GET** /v2/payment/advertisementCredit/all | Fetch all active ad credits
[**restoreAdvertisementCredit()**](AdvertisementCreditsApi.md#restoreAdvertisementCredit) | **PATCH** /v2/payment/advertisementCredit/{id} | Restore ad credit
[**updateAdvertisementCredit()**](AdvertisementCreditsApi.md#updateAdvertisementCredit) | **PUT** /v2/payment/advertisementCredit/{id} | Update ad credit


## `archiveAdvertisementCredit()`

```php
archiveAdvertisementCredit($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Archive ad credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveAdvertisementCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->archiveAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdvertisementCredit()`

```php
createAdvertisementCredit($wt_advertisement_credit_create_params): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Create ad credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_advertisement_credit_create_params = new \OpenAPI\Client\Model\WTAdvertisementCreditCreateParams(); // \OpenAPI\Client\Model\WTAdvertisementCreditCreateParams

try {
    $result = $apiInstance->createAdvertisementCredit($wt_advertisement_credit_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->createAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_advertisement_credit_create_params** | [**\OpenAPI\Client\Model\WTAdvertisementCreditCreateParams**](../Model/WTAdvertisementCreditCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAdvertisementCreditById()`

```php
fetchAdvertisementCreditById($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Fetch ad credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchAdvertisementCreditById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->fetchAdvertisementCreditById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAdvertisementCreditScans()`

```php
fetchAdvertisementCreditScans($id): \OpenAPI\Client\Model\WTAdvertisementCreditScan[]
```

Fetch scans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchAdvertisementCreditScans($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->fetchAdvertisementCreditScans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCreditScan[]**](../Model/WTAdvertisementCreditScan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllAdvertisementCredits()`

```php
fetchAllAdvertisementCredits($is_archive_included): \OpenAPI\Client\Model\WTAdvertisementCredit[]
```

Fetch all active ad credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllAdvertisementCredits($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->fetchAllAdvertisementCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit[]**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreAdvertisementCredit()`

```php
restoreAdvertisementCredit($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Restore ad credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreAdvertisementCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->restoreAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdvertisementCredit()`

```php
updateAdvertisementCredit($id, $wt_advertisement_credit_update_params): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Update ad credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_advertisement_credit_update_params = new \OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams(); // \OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams

try {
    $result = $apiInstance->updateAdvertisementCredit($id, $wt_advertisement_credit_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->updateAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_advertisement_credit_update_params** | [**\OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams**](../Model/WTAdvertisementCreditUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
