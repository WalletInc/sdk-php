# OpenAPI\Client\StaticVoucherCampaignsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveStaticVoucherCampaign()**](StaticVoucherCampaignsApi.md#archiveStaticVoucherCampaign) | **DELETE** /v2/payment/staticVoucherCampaign/{campaignID} | Archive Static Voucher Campaign |
| [**countVouchersLoaded()**](StaticVoucherCampaignsApi.md#countVouchersLoaded) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/loaded/{campaignID} | Count vouchers in Static Vouchers Campaign |
| [**countVouchersRedeemed()**](StaticVoucherCampaignsApi.md#countVouchersRedeemed) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/redeemed/{campaignID} | Count redeemed vouchers in Static Vouchers Campaign |
| [**createStaticVoucherCampaign()**](StaticVoucherCampaignsApi.md#createStaticVoucherCampaign) | **POST** /v2/payment/staticVoucherCampaign | Create Static Voucher Campaign |
| [**createStaticVoucherCampaignFromCSV()**](StaticVoucherCampaignsApi.md#createStaticVoucherCampaignFromCSV) | **POST** /v2/payment/staticVoucherCampaign/csv | Import Static Voucher Campaign |
| [**createStaticVoucherCampaignWithVoucher()**](StaticVoucherCampaignsApi.md#createStaticVoucherCampaignWithVoucher) | **POST** /v2/payment/staticVoucherCampaign/voucher | Create Static Voucher Campaign with single voucher |
| [**duplicateStaticVoucherCampaignById()**](StaticVoucherCampaignsApi.md#duplicateStaticVoucherCampaignById) | **POST** /v2/payment/staticVoucherCampaign/duplicate/{campaignID} | Duplicate Static Vouchers Campaign |
| [**fetchPerformanceOverview()**](StaticVoucherCampaignsApi.md#fetchPerformanceOverview) | **GET** /v2/payment/staticVoucherCampaign/overview/performance/{campaignID} | Get Static Voucher Campaign performance overview |
| [**fetchReachStatsOfAllStaticVoucherCampaigns()**](StaticVoucherCampaignsApi.md#fetchReachStatsOfAllStaticVoucherCampaigns) | **GET** /v2/payment/staticVoucherCampaign/reach/all | Get the reach statistics of all Static Voucher Campaigns |
| [**fetchReachStatsOfIndividualStaticVoucherCampaign()**](StaticVoucherCampaignsApi.md#fetchReachStatsOfIndividualStaticVoucherCampaign) | **GET** /v2/payment/staticVoucherCampaign/reach/{staticVoucherCampaignID} | Get the reach statistics of a single Static Voucher Campaign |
| [**fetchStaticVoucherCampaignById()**](StaticVoucherCampaignsApi.md#fetchStaticVoucherCampaignById) | **GET** /v2/payment/staticVoucherCampaign/{id} | Get Static Vouchers Campaign |
| [**fetchStaticVoucherCampaigns()**](StaticVoucherCampaignsApi.md#fetchStaticVoucherCampaigns) | **GET** /v2/payment/staticVoucherCampaign/all | Get all Static Vouchers Campaigns |
| [**fetchStaticVouchers()**](StaticVoucherCampaignsApi.md#fetchStaticVouchers) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/{campaignID} | Get vouchers in Static Vouchers Campaign |
| [**fetchStaticVouchersPage()**](StaticVoucherCampaignsApi.md#fetchStaticVouchersPage) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/page/{campaignID} | Get a page of vouchers in a Static Voucher Campaign |
| [**fetchViews()**](StaticVoucherCampaignsApi.md#fetchViews) | **GET** /v2/payment/staticVoucherCampaign/views/{campaignID} | Get Static Vouchers Campaign traffic |
| [**fetchVouchersRedeemed()**](StaticVoucherCampaignsApi.md#fetchVouchersRedeemed) | **GET** /v2/payment/staticVoucherCampaign/vouchers/redeemed/{campaignID} | Get redeemed vouchers in Static Vouchers Campaign |
| [**previewMessagesByPage()**](StaticVoucherCampaignsApi.md#previewMessagesByPage) | **PUT** /v2/payment/staticVoucherCampaign/preview/page/{campaignID} | Preview generated broadcast messages by page |
| [**restoreStaticVoucherCampaign()**](StaticVoucherCampaignsApi.md#restoreStaticVoucherCampaign) | **PATCH** /v2/payment/staticVoucherCampaign/{campaignID} | Restore Static Voucher Campaign |
| [**updateStaticVoucherCampaign()**](StaticVoucherCampaignsApi.md#updateStaticVoucherCampaign) | **PUT** /v2/payment/staticVoucherCampaign/{campaignID} | Update Static Voucher Campaign |
| [**updateStaticVoucherCampaignWithVoucher()**](StaticVoucherCampaignsApi.md#updateStaticVoucherCampaignWithVoucher) | **PUT** /v2/payment/staticVoucherCampaign/voucher/{campaignID} | Update Static Voucher Campaign with single voucher |


## `archiveStaticVoucherCampaign()`

```php
archiveStaticVoucherCampaign($campaign_id): \OpenAPI\Client\Model\StaticVoucherCampaign
```

Archive Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->archiveStaticVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->archiveStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaign**](../Model/StaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countVouchersLoaded()`

```php
countVouchersLoaded($campaign_id): \OpenAPI\Client\Model\FetchMembersCount200Response
```

Count vouchers in Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->countVouchersLoaded($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->countVouchersLoaded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FetchMembersCount200Response**](../Model/FetchMembersCount200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countVouchersRedeemed()`

```php
countVouchersRedeemed($campaign_id): \OpenAPI\Client\Model\FetchMembersCount200Response
```

Count redeemed vouchers in Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->countVouchersRedeemed($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->countVouchersRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FetchMembersCount200Response**](../Model/FetchMembersCount200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStaticVoucherCampaign()`

```php
createStaticVoucherCampaign($create_static_voucher_campaign): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Create Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_static_voucher_campaign = new \OpenAPI\Client\Model\CreateStaticVoucherCampaign(); // \OpenAPI\Client\Model\CreateStaticVoucherCampaign

try {
    $result = $apiInstance->createStaticVoucherCampaign($create_static_voucher_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->createStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_static_voucher_campaign** | [**\OpenAPI\Client\Model\CreateStaticVoucherCampaign**](../Model/CreateStaticVoucherCampaign.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStaticVoucherCampaignFromCSV()`

```php
createStaticVoucherCampaignFromCSV($create_static_voucher_campaign_with_voucher_with_csv): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Import Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_static_voucher_campaign_with_voucher_with_csv = new \OpenAPI\Client\Model\CreateStaticVoucherCampaignWithVoucherWithCSV(); // \OpenAPI\Client\Model\CreateStaticVoucherCampaignWithVoucherWithCSV

try {
    $result = $apiInstance->createStaticVoucherCampaignFromCSV($create_static_voucher_campaign_with_voucher_with_csv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->createStaticVoucherCampaignFromCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_static_voucher_campaign_with_voucher_with_csv** | [**\OpenAPI\Client\Model\CreateStaticVoucherCampaignWithVoucherWithCSV**](../Model/CreateStaticVoucherCampaignWithVoucherWithCSV.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStaticVoucherCampaignWithVoucher()`

```php
createStaticVoucherCampaignWithVoucher($body): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Create Static Voucher Campaign with single voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherIsActive(); // \OpenAPI\Client\Model\PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherIsActive

try {
    $result = $apiInstance->createStaticVoucherCampaignWithVoucher($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->createStaticVoucherCampaignWithVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\OpenAPI\Client\Model\PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherIsActive**|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateStaticVoucherCampaignById()`

```php
duplicateStaticVoucherCampaignById($campaign_id): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Duplicate Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->duplicateStaticVoucherCampaignById($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->duplicateStaticVoucherCampaignById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPerformanceOverview()`

```php
fetchPerformanceOverview($campaign_id): object
```

Get Static Voucher Campaign performance overview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->fetchPerformanceOverview($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchPerformanceOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchReachStatsOfAllStaticVoucherCampaigns()`

```php
fetchReachStatsOfAllStaticVoucherCampaigns($broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of all Static Voucher Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfAllStaticVoucherCampaigns($broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchReachStatsOfAllStaticVoucherCampaigns: ', $e->getMessage(), PHP_EOL;
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

## `fetchReachStatsOfIndividualStaticVoucherCampaign()`

```php
fetchReachStatsOfIndividualStaticVoucherCampaign($static_voucher_campaign_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at): \OpenAPI\Client\Model\ReachPerformanceStats
```

Get the reach statistics of a single Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher_campaign_id = 'static_voucher_campaign_id_example'; // string
$broadcast_scheduled_start_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$broadcast_scheduled_end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchReachStatsOfIndividualStaticVoucherCampaign($static_voucher_campaign_id, $broadcast_scheduled_start_at, $broadcast_scheduled_end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchReachStatsOfIndividualStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **static_voucher_campaign_id** | **string**|  | |
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

## `fetchStaticVoucherCampaignById()`

```php
fetchStaticVoucherCampaignById($id): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Get Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchStaticVoucherCampaignById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchStaticVoucherCampaignById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVoucherCampaigns()`

```php
fetchStaticVoucherCampaigns($is_archive_included, $source_id): \OpenAPI\Client\Model\WTStaticVoucherCampaign[]
```

Get all Static Vouchers Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool
$source_id = 3.4; // float

try {
    $result = $apiInstance->fetchStaticVoucherCampaigns($is_archive_included, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchStaticVoucherCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |
| **source_id** | **float**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign[]**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVouchers()`

```php
fetchStaticVouchers($campaign_id): \OpenAPI\Client\Model\WTStaticVoucher[]
```

Get vouchers in Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->fetchStaticVouchers($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchStaticVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucher[]**](../Model/WTStaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVouchersPage()`

```php
fetchStaticVouchersPage($campaign_id, $pagenum, $pagesize): \OpenAPI\Client\Model\FetchStaticVouchersPage200Response
```

Get a page of vouchers in a Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string
$pagenum = 3.4; // float
$pagesize = 3.4; // float

try {
    $result = $apiInstance->fetchStaticVouchersPage($campaign_id, $pagenum, $pagesize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchStaticVouchersPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **pagenum** | **float**|  | |
| **pagesize** | **float**|  | |

### Return type

[**\OpenAPI\Client\Model\FetchStaticVouchersPage200Response**](../Model/FetchStaticVouchersPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchViews()`

```php
fetchViews($campaign_id): \OpenAPI\Client\Model\WTWalletPageView[]
```

Get Static Vouchers Campaign traffic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->fetchViews($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTWalletPageView[]**](../Model/WTWalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchVouchersRedeemed()`

```php
fetchVouchersRedeemed($campaign_id): \OpenAPI\Client\Model\WTStaticVoucher[]
```

Get redeemed vouchers in Static Vouchers Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->fetchVouchersRedeemed($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->fetchVouchersRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucher[]**](../Model/WTStaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewMessagesByPage()`

```php
previewMessagesByPage($campaign_id, $wt_static_voucher_campaign_preview_messages_by_page): \OpenAPI\Client\Model\VSCampaignGeneratedMessagePagination
```

Preview generated broadcast messages by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string
$wt_static_voucher_campaign_preview_messages_by_page = new \OpenAPI\Client\Model\WTStaticVoucherCampaignPreviewMessagesByPage(); // \OpenAPI\Client\Model\WTStaticVoucherCampaignPreviewMessagesByPage

try {
    $result = $apiInstance->previewMessagesByPage($campaign_id, $wt_static_voucher_campaign_preview_messages_by_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->previewMessagesByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **wt_static_voucher_campaign_preview_messages_by_page** | [**\OpenAPI\Client\Model\WTStaticVoucherCampaignPreviewMessagesByPage**](../Model/WTStaticVoucherCampaignPreviewMessagesByPage.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VSCampaignGeneratedMessagePagination**](../Model/VSCampaignGeneratedMessagePagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreStaticVoucherCampaign()`

```php
restoreStaticVoucherCampaign($campaign_id): \OpenAPI\Client\Model\StaticVoucherCampaign
```

Restore Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->restoreStaticVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->restoreStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaign**](../Model/StaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStaticVoucherCampaign()`

```php
updateStaticVoucherCampaign($campaign_id, $static_voucher_campaign_update): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Update Static Voucher Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string
$static_voucher_campaign_update = new \OpenAPI\Client\Model\StaticVoucherCampaignUpdate(); // \OpenAPI\Client\Model\StaticVoucherCampaignUpdate

try {
    $result = $apiInstance->updateStaticVoucherCampaign($campaign_id, $static_voucher_campaign_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->updateStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **static_voucher_campaign_update** | [**\OpenAPI\Client\Model\StaticVoucherCampaignUpdate**](../Model/StaticVoucherCampaignUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStaticVoucherCampaignWithVoucher()`

```php
updateStaticVoucherCampaignWithVoucher($campaign_id, $update_static_voucher_campaign_with_voucher): \OpenAPI\Client\Model\WTStaticVoucherCampaign
```

Update Static Voucher Campaign with single voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string
$update_static_voucher_campaign_with_voucher = new \OpenAPI\Client\Model\UpdateStaticVoucherCampaignWithVoucher(); // \OpenAPI\Client\Model\UpdateStaticVoucherCampaignWithVoucher

try {
    $result = $apiInstance->updateStaticVoucherCampaignWithVoucher($campaign_id, $update_static_voucher_campaign_with_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignsApi->updateStaticVoucherCampaignWithVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **update_static_voucher_campaign_with_voucher** | [**\OpenAPI\Client\Model\UpdateStaticVoucherCampaignWithVoucher**](../Model/UpdateStaticVoucherCampaignWithVoucher.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTStaticVoucherCampaign**](../Model/WTStaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
