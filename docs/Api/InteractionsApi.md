# OpenAPI\Client\InteractionsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdvertisementCreditScan()**](InteractionsApi.md#createAdvertisementCreditScan) | **POST** /wallet/advertisementCredit/scan/{adCreditID} | Create ad credit scan
[**createEmployeeVCard()**](InteractionsApi.md#createEmployeeVCard) | **GET** /wallet/employee/vcard/{id} | Fetch an employee&#39;s VCard
[**createIcsFile()**](InteractionsApi.md#createIcsFile) | **GET** /wallet/liveevent/ics/{id} | Fetch ICS for live event
[**fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID()**](InteractionsApi.md#fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID) | **GET** /wallet/staticVoucher/all | Fetch a customer&#39;s static vouchers on the basis of a given voucher ID
[**fetchDynamicVoucherWithVoucherID()**](InteractionsApi.md#fetchDynamicVoucherWithVoucherID) | **GET** /wallet/dynamicVoucher/{voucherID} | Fetch dynamic voucher
[**fetchMemberInformation()**](InteractionsApi.md#fetchMemberInformation) | **GET** /wallet/member | Fetch member information
[**fetchStaticVoucherWithVoucherID()**](InteractionsApi.md#fetchStaticVoucherWithVoucherID) | **GET** /wallet/staticVoucher/{voucherID} | Fetch static voucher
[**fetchWalletPageWithToken()**](InteractionsApi.md#fetchWalletPageWithToken) | **POST** /wallet/page/token | Fetch page with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.
[**fetchWalletPaymentObjectWithToken()**](InteractionsApi.md#fetchWalletPaymentObjectWithToken) | **POST** /wallet/paymentObject/token | Fetch payment object with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.
[**findByVanityHandle()**](InteractionsApi.md#findByVanityHandle) | **GET** /wallet/vanityHandle/{handle} | Fetch vanity handle
[**identifyItem()**](InteractionsApi.md#identifyItem) | **GET** /wallet/item/identify/{itemID} | Identify item


## `createAdvertisementCreditScan()`

```php
createAdvertisementCreditScan($ad_credit_id): \OpenAPI\Client\Model\AdvertisementCreditScan
```

Create ad credit scan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ad_credit_id = NULL; // mixed

try {
    $result = $apiInstance->createAdvertisementCreditScan($ad_credit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createAdvertisementCreditScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_credit_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\AdvertisementCreditScan**](../Model/AdvertisementCreditScan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmployeeVCard()`

```php
createEmployeeVCard($id): string
```

Fetch an employee's VCard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->createEmployeeVCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createEmployeeVCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIcsFile()`

```php
createIcsFile($id): mixed
```

Fetch ICS for live event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->createIcsFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createIcsFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

## `fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID()`

```php
fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID($voucher_id): \OpenAPI\Client\Model\InlineResponse2009[]
```

Fetch a customer's static vouchers on the basis of a given voucher ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = NULL; // mixed

try {
    $result = $apiInstance->fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDynamicVoucherWithVoucherID()`

```php
fetchDynamicVoucherWithVoucherID($voucher_id): \OpenAPI\Client\Model\DynamicVoucher
```

Fetch dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = NULL; // mixed

try {
    $result = $apiInstance->fetchDynamicVoucherWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchDynamicVoucherWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**mixed**](../Model/.md)|  |

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

## `fetchMemberInformation()`

```php
fetchMemberInformation($member_id, $merchant_id): \OpenAPI\Client\Model\Member
```

Fetch member information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string
$merchant_id = 'merchant_id_example'; // string

try {
    $result = $apiInstance->fetchMemberInformation($member_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchMemberInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**|  |
 **merchant_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Member**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVoucherWithVoucherID()`

```php
fetchStaticVoucherWithVoucherID($voucher_id): \OpenAPI\Client\Model\StaticVoucher
```

Fetch static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = NULL; // mixed

try {
    $result = $apiInstance->fetchStaticVoucherWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchStaticVoucherWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWalletPageWithToken()`

```php
fetchWalletPageWithToken($wt_fetch_wallet_payment_object_with_token): mixed
```

Fetch page with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_fetch_wallet_payment_object_with_token = new \OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken(); // \OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken

try {
    $result = $apiInstance->fetchWalletPageWithToken($wt_fetch_wallet_payment_object_with_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchWalletPageWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_fetch_wallet_payment_object_with_token** | [**\OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken**](../Model/WTFetchWalletPaymentObjectWithToken.md)|  |

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

## `fetchWalletPaymentObjectWithToken()`

```php
fetchWalletPaymentObjectWithToken($wt_fetch_wallet_payment_object_with_token): mixed
```

Fetch payment object with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_fetch_wallet_payment_object_with_token = new \OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken(); // \OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken

try {
    $result = $apiInstance->fetchWalletPaymentObjectWithToken($wt_fetch_wallet_payment_object_with_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchWalletPaymentObjectWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_fetch_wallet_payment_object_with_token** | [**\OpenAPI\Client\Model\WTFetchWalletPaymentObjectWithToken**](../Model/WTFetchWalletPaymentObjectWithToken.md)|  |

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

## `findByVanityHandle()`

```php
findByVanityHandle($handle): \OpenAPI\Client\Model\WalletConfiguration
```

Fetch vanity handle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->findByVanityHandle($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->findByVanityHandle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\WalletConfiguration**](../Model/WalletConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identifyItem()`

```php
identifyItem($item_id, $is_refresh, $phone_verification_token): mixed
```

Identify item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$is_refresh = True; // bool
$phone_verification_token = 'phone_verification_token_example'; // string

try {
    $result = $apiInstance->identifyItem($item_id, $is_refresh, $phone_verification_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->identifyItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **is_refresh** | **bool**|  | [optional]
 **phone_verification_token** | **string**|  | [optional]

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
