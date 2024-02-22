# OpenAPI\Client\CustomerApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchActiveVouchers()**](CustomerApi.md#fetchActiveVouchers) | **GET** /v2/customer/vouchers/active | Fetch active static vouchers |
| [**fetchAllVouchers()**](CustomerApi.md#fetchAllVouchers) | **GET** /v2/customer/vouchers/all | Fetch all static vouchers |
| [**fetchExpiredVouchers()**](CustomerApi.md#fetchExpiredVouchers) | **GET** /v2/customer/vouchers/expired | Fetch expired static vouchers |
| [**fetchRedeemedVouchers()**](CustomerApi.md#fetchRedeemedVouchers) | **GET** /v2/customer/vouchers/redeemed | Fetch redeemed static vouchers |
| [**fetchRefundedVouchers()**](CustomerApi.md#fetchRefundedVouchers) | **GET** /v2/customer/vouchers/refunded | Fetch refunded static vouchers |
| [**fetchUpcomingVouchers()**](CustomerApi.md#fetchUpcomingVouchers) | **GET** /v2/customer/vouchers/upcoming | Fetch upcoming static vouchers |
| [**fetchWalletViewsForSession()**](CustomerApi.md#fetchWalletViewsForSession) | **GET** /v2/customer/walletViews/session/{id} | Fetch Wallet Views for Session |
| [**searchByMemberID()**](CustomerApi.md#searchByMemberID) | **POST** /v2/customer/search/memberID | Find members with memberID |
| [**searchByPhoneNumber()**](CustomerApi.md#searchByPhoneNumber) | **POST** /v2/customer/search/phoneNumber | Find members with phone number |


## `fetchActiveVouchers()`

```php
fetchActiveVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch active static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchActiveVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchActiveVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllVouchers()`

```php
fetchAllVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch all static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchAllVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchAllVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchExpiredVouchers()`

```php
fetchExpiredVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch expired static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchExpiredVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchExpiredVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchRedeemedVouchers()`

```php
fetchRedeemedVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch redeemed static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchRedeemedVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchRedeemedVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchRefundedVouchers()`

```php
fetchRefundedVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch refunded static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchRefundedVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchRefundedVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchUpcomingVouchers()`

```php
fetchUpcomingVouchers($member_id, $cell_phone_number): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch upcoming static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$cell_phone_number = 'cell_phone_number_example'; // string

try {
    $result = $apiInstance->fetchUpcomingVouchers($member_id, $cell_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchUpcomingVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | [optional] |
| **cell_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWalletViewsForSession()`

```php
fetchWalletViewsForSession($id): \OpenAPI\Client\Model\WalletPageView[]
```

Fetch Wallet Views for Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchWalletViewsForSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->fetchWalletViewsForSession: ', $e->getMessage(), PHP_EOL;
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

## `searchByMemberID()`

```php
searchByMemberID($wt_customer_search_by_member_id): mixed
```

Find members with memberID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_customer_search_by_member_id = new \OpenAPI\Client\Model\WTCustomerSearchByMemberID(); // \OpenAPI\Client\Model\WTCustomerSearchByMemberID

try {
    $result = $apiInstance->searchByMemberID($wt_customer_search_by_member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->searchByMemberID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_customer_search_by_member_id** | [**\OpenAPI\Client\Model\WTCustomerSearchByMemberID**](../Model/WTCustomerSearchByMemberID.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchByPhoneNumber()`

```php
searchByPhoneNumber($wt_customer_search_by_phone_number): mixed
```

Find members with phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_customer_search_by_phone_number = new \OpenAPI\Client\Model\WTCustomerSearchByPhoneNumber(); // \OpenAPI\Client\Model\WTCustomerSearchByPhoneNumber

try {
    $result = $apiInstance->searchByPhoneNumber($wt_customer_search_by_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->searchByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_customer_search_by_phone_number** | [**\OpenAPI\Client\Model\WTCustomerSearchByPhoneNumber**](../Model/WTCustomerSearchByPhoneNumber.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
