# OpenAPI\Client\InteractionsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimTicket()**](InteractionsApi.md#claimTicket) | **PUT** /wallet/ticket/claim/{id} | Claim a ticket by ID |
| [**createAdvertisementCreditScan()**](InteractionsApi.md#createAdvertisementCreditScan) | **POST** /wallet/advertisementCredit/scan/{adCreditID} | Create ad credit scan |
| [**createEmployeeVCard()**](InteractionsApi.md#createEmployeeVCard) | **GET** /wallet/employee/vcard/{id} | Download a representative&#39;s Virtual Business Card |
| [**createIcsFile()**](InteractionsApi.md#createIcsFile) | **GET** /wallet/liveevent/ics/{id} | Get ICS for live event |
| [**createVirtualBusinessCardVCard()**](InteractionsApi.md#createVirtualBusinessCardVCard) | **GET** /wallet/virtualBusinessCard/vCard/{id} | Download a non-representative&#39;s Virtual Business Card |
| [**fetchActiveDynamicVouchers()**](InteractionsApi.md#fetchActiveDynamicVouchers) | **GET** /wallet/dyanmicVoucher/fetchActive | Get a merchant&#39;s active dynamic vouchers |
| [**fetchAdvertisementCreditScansFromList()**](InteractionsApi.md#fetchAdvertisementCreditScansFromList) | **POST** /wallet/advertisementCredit/fetchScans/{merchantID} | Get multiple credit scans w/ array of IDs |
| [**fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID()**](InteractionsApi.md#fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID) | **GET** /wallet/staticVoucher/all | Get a customer&#39;s static vouchers on the basis of a given voucher ID |
| [**fetchCustomerTicketsWithToken()**](InteractionsApi.md#fetchCustomerTicketsWithToken) | **POST** /wallet/tickets/fetchCustomerTicketsWithToken | Get a customer&#39;s upcoming tickets via phone verification token |
| [**fetchDynamicVoucherWithVoucherID()**](InteractionsApi.md#fetchDynamicVoucherWithVoucherID) | **GET** /wallet/dynamicVoucher/{voucherID} | Get dynamic voucher |
| [**fetchMemberInformation()**](InteractionsApi.md#fetchMemberInformation) | **GET** /wallet/member | Get member information |
| [**fetchStaticVoucherWithVoucherID()**](InteractionsApi.md#fetchStaticVoucherWithVoucherID) | **GET** /wallet/staticVoucher/{voucherID} | Get static voucher |
| [**fetchWalletPageWithToken()**](InteractionsApi.md#fetchWalletPageWithToken) | **POST** /wallet/page/token | Get page with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client. |
| [**fetchWalletPaymentObjectsWithToken()**](InteractionsApi.md#fetchWalletPaymentObjectsWithToken) | **POST** /wallet/paymentObject/token | Get payment objects with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client. |
| [**findByVanityHandle()**](InteractionsApi.md#findByVanityHandle) | **GET** /wallet/vanityHandle/{handle} | Get vanity handle |
| [**identifyItem()**](InteractionsApi.md#identifyItem) | **GET** /wallet/item/identify/{itemID} | Identify item |
| [**requestMerchantURLRedirect()**](InteractionsApi.md#requestMerchantURLRedirect) | **POST** /wallet/merchantURL/{itemID} | Request Merchant URL |
| [**subscribeEmail()**](InteractionsApi.md#subscribeEmail) | **POST** /wallet/subscribeEmail | Create email subscriber |
| [**subscribeSms()**](InteractionsApi.md#subscribeSms) | **POST** /wallet/subscribeSms | Create sms subscriber |


## `claimTicket()`

```php
claimTicket($id, $claim_ticket_request): \OpenAPI\Client\Model\Ticket
```

Claim a ticket by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$claim_ticket_request = new \OpenAPI\Client\Model\ClaimTicketRequest(); // \OpenAPI\Client\Model\ClaimTicketRequest

try {
    $result = $apiInstance->claimTicket($id, $claim_ticket_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->claimTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **claim_ticket_request** | [**\OpenAPI\Client\Model\ClaimTicketRequest**](../Model/ClaimTicketRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
$ad_credit_id = 'ad_credit_id_example'; // string

try {
    $result = $apiInstance->createAdvertisementCreditScan($ad_credit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createAdvertisementCreditScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_credit_id** | **string**|  | |

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

Download a representative's Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createEmployeeVCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createEmployeeVCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Get ICS for live event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createIcsFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createIcsFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `createVirtualBusinessCardVCard()`

```php
createVirtualBusinessCardVCard($id): string
```

Download a non-representative's Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVirtualBusinessCardVCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->createVirtualBusinessCardVCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `fetchActiveDynamicVouchers()`

```php
fetchActiveDynamicVouchers($merchant_id): \OpenAPI\Client\Model\DynamicVoucher[]
```

Get a merchant's active dynamic vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string

try {
    $result = $apiInstance->fetchActiveDynamicVouchers($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchActiveDynamicVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucher[]**](../Model/DynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAdvertisementCreditScansFromList()`

```php
fetchAdvertisementCreditScansFromList($merchant_id, $fetch_advertisement_credit_scans_from_list_request): mixed[]
```

Get multiple credit scans w/ array of IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string
$fetch_advertisement_credit_scans_from_list_request = new \OpenAPI\Client\Model\FetchAdvertisementCreditScansFromListRequest(); // \OpenAPI\Client\Model\FetchAdvertisementCreditScansFromListRequest

try {
    $result = $apiInstance->fetchAdvertisementCreditScansFromList($merchant_id, $fetch_advertisement_credit_scans_from_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchAdvertisementCreditScansFromList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**|  | |
| **fetch_advertisement_credit_scans_from_list_request** | [**\OpenAPI\Client\Model\FetchAdvertisementCreditScansFromListRequest**](../Model/FetchAdvertisementCreditScansFromListRequest.md)|  | |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID()`

```php
fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID($voucher_id): \OpenAPI\Client\Model\FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInner[]
```

Get a customer's static vouchers on the basis of a given voucher ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = 'voucher_id_example'; // string

try {
    $result = $apiInstance->fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInner[]**](../Model/FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchCustomerTicketsWithToken()`

```php
fetchCustomerTicketsWithToken($fetch_customer_tickets_with_token_request): \OpenAPI\Client\Model\Ticket[]
```

Get a customer's upcoming tickets via phone verification token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fetch_customer_tickets_with_token_request = new \OpenAPI\Client\Model\FetchCustomerTicketsWithTokenRequest(); // \OpenAPI\Client\Model\FetchCustomerTicketsWithTokenRequest

try {
    $result = $apiInstance->fetchCustomerTicketsWithToken($fetch_customer_tickets_with_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchCustomerTicketsWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fetch_customer_tickets_with_token_request** | [**\OpenAPI\Client\Model\FetchCustomerTicketsWithTokenRequest**](../Model/FetchCustomerTicketsWithTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDynamicVoucherWithVoucherID()`

```php
fetchDynamicVoucherWithVoucherID($voucher_id): \OpenAPI\Client\Model\DynamicVoucher
```

Get dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = 'voucher_id_example'; // string

try {
    $result = $apiInstance->fetchDynamicVoucherWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchDynamicVoucherWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **string**|  | |

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

Get member information

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | |
| **merchant_id** | **string**|  | |

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

Get static voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = 'voucher_id_example'; // string

try {
    $result = $apiInstance->fetchStaticVoucherWithVoucherID($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchStaticVoucherWithVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **string**|  | |

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
fetchWalletPageWithToken($wt_fetch_wallet_payment_objects_with_token): mixed
```

Get page with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_fetch_wallet_payment_objects_with_token = new \OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken(); // \OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken

try {
    $result = $apiInstance->fetchWalletPageWithToken($wt_fetch_wallet_payment_objects_with_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchWalletPageWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_fetch_wallet_payment_objects_with_token** | [**\OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken**](../Model/WTFetchWalletPaymentObjectsWithToken.md)|  | |

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

## `fetchWalletPaymentObjectsWithToken()`

```php
fetchWalletPaymentObjectsWithToken($wt_fetch_wallet_payment_objects_with_token): mixed
```

Get payment objects with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_fetch_wallet_payment_objects_with_token = new \OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken(); // \OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken

try {
    $result = $apiInstance->fetchWalletPaymentObjectsWithToken($wt_fetch_wallet_payment_objects_with_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->fetchWalletPaymentObjectsWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_fetch_wallet_payment_objects_with_token** | [**\OpenAPI\Client\Model\WTFetchWalletPaymentObjectsWithToken**](../Model/WTFetchWalletPaymentObjectsWithToken.md)|  | |

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

Get vanity handle

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handle** | **string**|  | |

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
identifyItem($item_id, $is_refresh, $phone_verification_token, $referrer): mixed
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
$referrer = 'referrer_example'; // string

try {
    $result = $apiInstance->identifyItem($item_id, $is_refresh, $phone_verification_token, $referrer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->identifyItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **is_refresh** | **bool**|  | [optional] |
| **phone_verification_token** | **string**|  | [optional] |
| **referrer** | **string**|  | [optional] |

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

## `requestMerchantURLRedirect()`

```php
requestMerchantURLRedirect($item_id, $browser_details): mixed
```

Request Merchant URL

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
$browser_details = new \OpenAPI\Client\Model\BrowserDetails(); // \OpenAPI\Client\Model\BrowserDetails

try {
    $result = $apiInstance->requestMerchantURLRedirect($item_id, $browser_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->requestMerchantURLRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **browser_details** | [**\OpenAPI\Client\Model\BrowserDetails**](../Model/BrowserDetails.md)|  | |

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

## `subscribeEmail()`

```php
subscribeEmail($wt_email_subscriber_create_params_wallet_ui): \OpenAPI\Client\Model\EmailSubscriber
```

Create email subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_email_subscriber_create_params_wallet_ui = new \OpenAPI\Client\Model\WTEmailSubscriberCreateParamsWalletUI(); // \OpenAPI\Client\Model\WTEmailSubscriberCreateParamsWalletUI

try {
    $result = $apiInstance->subscribeEmail($wt_email_subscriber_create_params_wallet_ui);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->subscribeEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_email_subscriber_create_params_wallet_ui** | [**\OpenAPI\Client\Model\WTEmailSubscriberCreateParamsWalletUI**](../Model/WTEmailSubscriberCreateParamsWalletUI.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailSubscriber**](../Model/EmailSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeSms()`

```php
subscribeSms($wt_sms_subscriber_create_params_wallet_ui): \OpenAPI\Client\Model\SmsSubscriber
```

Create sms subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_sms_subscriber_create_params_wallet_ui = new \OpenAPI\Client\Model\WTSmsSubscriberCreateParamsWalletUI(); // \OpenAPI\Client\Model\WTSmsSubscriberCreateParamsWalletUI

try {
    $result = $apiInstance->subscribeSms($wt_sms_subscriber_create_params_wallet_ui);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->subscribeSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_sms_subscriber_create_params_wallet_ui** | [**\OpenAPI\Client\Model\WTSmsSubscriberCreateParamsWalletUI**](../Model/WTSmsSubscriberCreateParamsWalletUI.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsSubscriber**](../Model/SmsSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
