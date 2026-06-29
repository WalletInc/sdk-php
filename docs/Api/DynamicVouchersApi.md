# OpenAPI\Client\DynamicVouchersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveDynamicVoucherCampaign()**](DynamicVouchersApi.md#archiveDynamicVoucherCampaign) | **DELETE** /v2/payment/dynamicVoucher/{campaignID} | Archive Dynamic Voucher Campaign |
| [**createDynamicVoucher()**](DynamicVouchersApi.md#createDynamicVoucher) | **POST** /v2/payment/dynamicVoucher | Create Dynamic Voucher Campaign |
| [**fetchAllDynamicVouchers()**](DynamicVouchersApi.md#fetchAllDynamicVouchers) | **GET** /v2/payment/dynamicVoucher/all | Get all Dynamic Voucher Campaigns |
| [**fetchDynamicVoucherById()**](DynamicVouchersApi.md#fetchDynamicVoucherById) | **GET** /v2/payment/dynamicVoucher/{id} | Get Dynamic Voucher Campaign |
| [**fetchDynamicVoucherRedemptions()**](DynamicVouchersApi.md#fetchDynamicVoucherRedemptions) | **GET** /v2/payment/dynamicVoucher/redemptions/{id} | Get Dynamic Voucher Campaign Redemptions |
| [**fetchReachStatsOfAllDynamicVouchers()**](DynamicVouchersApi.md#fetchReachStatsOfAllDynamicVouchers) | **GET** /v2/payment/dynamicVoucher/reach/all | Get the reach statistics of all the dynamic vouchers |
| [**fetchReachStatsOfIndividualDynamicVoucher()**](DynamicVouchersApi.md#fetchReachStatsOfIndividualDynamicVoucher) | **GET** /v2/payment/dynamicVoucher/reach/{dynamicVoucherID} | Get the reach statistics of an individual dynamic voucher |
| [**restoreDynamicVoucherCampaign()**](DynamicVouchersApi.md#restoreDynamicVoucherCampaign) | **PATCH** /v2/payment/dynamicVoucher/{campaignID} | Restore Dynamic Voucher Campaign |
| [**saveDynamicVoucher()**](DynamicVouchersApi.md#saveDynamicVoucher) | **PUT** /v2/payment/dynamicVoucher/{id} | Update Dynamic Voucher Campaign |


## `archiveDynamicVoucherCampaign()`

```php
archiveDynamicVoucherCampaign($campaign_id): \OpenAPI\Client\Model\DynamicVoucher
```

Archive Dynamic Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->archiveDynamicVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->archiveDynamicVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucher**](../Model/DynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDynamicVoucher()`

```php
createDynamicVoucher($wt_dynamic_voucher_create_params): \OpenAPI\Client\Model\WTDynamicVoucher
```

Create Dynamic Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_dynamic_voucher_create_params = new \OpenAPI\Client\Model\WTDynamicVoucherCreateParams(); // \OpenAPI\Client\Model\WTDynamicVoucherCreateParams

try {
    $result = $apiInstance->createDynamicVoucher($wt_dynamic_voucher_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->createDynamicVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_dynamic_voucher_create_params** | [**\OpenAPI\Client\Model\WTDynamicVoucherCreateParams**](../Model/WTDynamicVoucherCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTDynamicVoucher**](../Model/WTDynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllDynamicVouchers()`

```php
fetchAllDynamicVouchers($is_archive_included): \OpenAPI\Client\Model\WTDynamicVoucher[]
```

Get all Dynamic Voucher Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllDynamicVouchers($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->fetchAllDynamicVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTDynamicVoucher[]**](../Model/WTDynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDynamicVoucherById()`

```php
fetchDynamicVoucherById($id): \OpenAPI\Client\Model\WTDynamicVoucher
```

Get Dynamic Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchDynamicVoucherById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->fetchDynamicVoucherById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTDynamicVoucher**](../Model/WTDynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDynamicVoucherRedemptions()`

```php
fetchDynamicVoucherRedemptions($id): \OpenAPI\Client\Model\WTDynamicVoucherRedemption[]
```

Get Dynamic Voucher Campaign Redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchDynamicVoucherRedemptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->fetchDynamicVoucherRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTDynamicVoucherRedemption[]**](../Model/WTDynamicVoucherRedemption.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchReachStatsOfAllDynamicVouchers()`

```php
fetchReachStatsOfAllDynamicVouchers($broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of all the dynamic vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfAllDynamicVouchers($broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->fetchReachStatsOfAllDynamicVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_scheduled_start_at** | **\DateTime**|  | [optional] |
| **broadcast_scheduled_end_at** | **\DateTime**|  | [optional] |

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

## `fetchReachStatsOfIndividualDynamicVoucher()`

```php
fetchReachStatsOfIndividualDynamicVoucher($dynamic_voucher_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of an individual dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher_id = 'dynamic_voucher_id_example'; // string
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfIndividualDynamicVoucher($dynamic_voucher_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->fetchReachStatsOfIndividualDynamicVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dynamic_voucher_id** | **string**|  | |
| **broadcast_scheduled_start_at** | **\DateTime**|  | [optional] |
| **broadcast_scheduled_end_at** | **\DateTime**|  | [optional] |

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

## `restoreDynamicVoucherCampaign()`

```php
restoreDynamicVoucherCampaign($campaign_id): \OpenAPI\Client\Model\DynamicVoucher
```

Restore Dynamic Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->restoreDynamicVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->restoreDynamicVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucher**](../Model/DynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveDynamicVoucher()`

```php
saveDynamicVoucher($id, $wt_dynamic_voucher_update_params): \OpenAPI\Client\Model\WTDynamicVoucher
```

Update Dynamic Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DynamicVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_dynamic_voucher_update_params = new \OpenAPI\Client\Model\WTDynamicVoucherUpdateParams(); // \OpenAPI\Client\Model\WTDynamicVoucherUpdateParams

try {
    $result = $apiInstance->saveDynamicVoucher($id, $wt_dynamic_voucher_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicVouchersApi->saveDynamicVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_dynamic_voucher_update_params** | [**\OpenAPI\Client\Model\WTDynamicVoucherUpdateParams**](../Model/WTDynamicVoucherUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTDynamicVoucher**](../Model/WTDynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
