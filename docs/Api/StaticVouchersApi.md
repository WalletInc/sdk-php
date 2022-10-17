# OpenAPI\Client\StaticVouchersApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStaticVoucher()**](StaticVouchersApi.md#createStaticVoucher) | **POST** /v2/payment/staticVoucher | Create static voucher
[**deleteStaticVoucher()**](StaticVouchersApi.md#deleteStaticVoucher) | **DELETE** /v2/payment/staticVoucher/{id} | Delete static voucher
[**fetchReachStatsOfAllStaticVouchers()**](StaticVouchersApi.md#fetchReachStatsOfAllStaticVouchers) | **GET** /v2/payment/staticVoucher/reach/all | Get the reach statistics of all the static vouchers
[**fetchReachStatsOfIndividualStaticVoucher()**](StaticVouchersApi.md#fetchReachStatsOfIndividualStaticVoucher) | **GET** /v2/payment/staticVoucher/reach/{staticVoucherID} | Get the reach statistics of an individual static voucher
[**fetchStaticVoucher()**](StaticVouchersApi.md#fetchStaticVoucher) | **GET** /v2/payment/staticVoucher/{id} | Fetch static voucher
[**updateStaticVoucher()**](StaticVouchersApi.md#updateStaticVoucher) | **PUT** /v2/payment/staticVoucher/{id} | Update static voucher


## `createStaticVoucher()`

```php
createStaticVoucher($wt_static_voucher_create_params): \OpenAPI\Client\Model\WTStaticVoucher
```

Create static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_static_voucher_create_params = new \OpenAPI\Client\Model\WTStaticVoucherCreateParams(); // \OpenAPI\Client\Model\WTStaticVoucherCreateParams

try {
    $result = $apiInstance->createStaticVoucher($wt_static_voucher_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->createStaticVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_static_voucher_create_params** | [**\OpenAPI\Client\Model\WTStaticVoucherCreateParams**](../Model/WTStaticVoucherCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucher**](../Model/WTStaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStaticVoucher()`

```php
deleteStaticVoucher($id): bool
```

Delete static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->deleteStaticVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->deleteStaticVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchReachStatsOfAllStaticVouchers()`

```php
fetchReachStatsOfAllStaticVouchers($broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of all the static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfAllStaticVouchers($broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->fetchReachStatsOfAllStaticVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broadcast_scheduled_start_at** | **\DateTime**|  | [optional]
 **broadcast_scheduled_end_at** | **\DateTime**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ReachPerformanceStats**](../Model/ReachPerformanceStats.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchReachStatsOfIndividualStaticVoucher()`

```php
fetchReachStatsOfIndividualStaticVoucher($static_voucher_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of an individual static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher_id = NULL; // mixed
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfIndividualStaticVoucher($static_voucher_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->fetchReachStatsOfIndividualStaticVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **static_voucher_id** | [**mixed**](../Model/.md)|  |
 **broadcast_scheduled_start_at** | **\DateTime**|  | [optional]
 **broadcast_scheduled_end_at** | **\DateTime**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ReachPerformanceStats**](../Model/ReachPerformanceStats.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVoucher()`

```php
fetchStaticVoucher($id): \OpenAPI\Client\Model\WTStaticVoucher
```

Fetch static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchStaticVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->fetchStaticVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucher**](../Model/WTStaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStaticVoucher()`

```php
updateStaticVoucher($id, $wt_static_voucher_update_params): \OpenAPI\Client\Model\WTStaticVoucher
```

Update static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_static_voucher_update_params = new \OpenAPI\Client\Model\WTStaticVoucherUpdateParams(); // \OpenAPI\Client\Model\WTStaticVoucherUpdateParams

try {
    $result = $apiInstance->updateStaticVoucher($id, $wt_static_voucher_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVouchersApi->updateStaticVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_static_voucher_update_params** | [**\OpenAPI\Client\Model\WTStaticVoucherUpdateParams**](../Model/WTStaticVoucherUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucher**](../Model/WTStaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
