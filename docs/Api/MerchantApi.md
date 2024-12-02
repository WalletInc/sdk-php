# OpenAPI\Client\MerchantApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMerchantProfile()**](MerchantApi.md#archiveMerchantProfile) | **DELETE** /v2/merchant/delete | Archive Merchant |
| [**archivePaymentObjectBroadcast()**](MerchantApi.md#archivePaymentObjectBroadcast) | **DELETE** /v2/merchant/paymentObjectBroadcast/{broadcastID} | Archive payment object broadcast |
| [**countInboundSMS()**](MerchantApi.md#countInboundSMS) | **GET** /v2/merchant/sms/inbound/count/{phoneNumberID} | Count inbound SMSes |
| [**exportInboundMessages()**](MerchantApi.md#exportInboundMessages) | **PUT** /v2/merchant/sms/inbound/export/{phoneNumberID} | Export inbound messages |
| [**exportOutboundMessages()**](MerchantApi.md#exportOutboundMessages) | **PUT** /v2/merchant/sms/outbound/export/{phoneNumberID} | Export outbound messages |
| [**fetchAdvertisementCreditBroadcasts()**](MerchantApi.md#fetchAdvertisementCreditBroadcasts) | **GET** /v2/merchant/broadcasts/adCredits/all | Fetch all ad credit broadcasts |
| [**fetchCustomRoles()**](MerchantApi.md#fetchCustomRoles) | **GET** /v2/merchant/roles/custom | Fetch custom roles |
| [**fetchDynamicVoucherBroadcasts()**](MerchantApi.md#fetchDynamicVoucherBroadcasts) | **GET** /v2/merchant/broadcasts/dynamicVouchers/all | Fetch all dynamic voucher broadcasts |
| [**fetchEmployees()**](MerchantApi.md#fetchEmployees) | **GET** /v2/merchant/employees/all | Fetch all employees |
| [**fetchHelpDeskRequests()**](MerchantApi.md#fetchHelpDeskRequests) | **GET** /v2/merchant/helpDeskRequests/{phoneNumberID} | Fetch help desk requests |
| [**fetchImportedList()**](MerchantApi.md#fetchImportedList) | **GET** /v2/merchant/lists/imported/{listID} | Fetch imported list |
| [**fetchImportedLists()**](MerchantApi.md#fetchImportedLists) | **GET** /v2/merchant/lists/imported/all | Fetch all imported lists |
| [**fetchInboundSMS()**](MerchantApi.md#fetchInboundSMS) | **GET** /v2/merchant/sms/inbound/{phoneNumberID} | Fetch inbound SMSes |
| [**fetchInboundSMSByPage()**](MerchantApi.md#fetchInboundSMSByPage) | **GET** /v2/merchant/sms/inbound/page/{phoneNumberID} | Fetch inbound SMSes by page |
| [**fetchMerchantOutboundSMS()**](MerchantApi.md#fetchMerchantOutboundSMS) | **GET** /v2/merchant/sms/outbound/{phoneNumberID} | Fetch outbound SMSes |
| [**fetchMerchantPhoneNumbers()**](MerchantApi.md#fetchMerchantPhoneNumbers) | **GET** /v2/merchant/phoneNumbers/all | Fetch all phone numbers |
| [**fetchOptInList()**](MerchantApi.md#fetchOptInList) | **GET** /v2/merchant/lists/optIn/{listID} | Fetch opt in list |
| [**fetchOptInLists()**](MerchantApi.md#fetchOptInLists) | **GET** /v2/merchant/lists/optIn/all | Fetch all opt in lists |
| [**fetchPhoneNumber()**](MerchantApi.md#fetchPhoneNumber) | **GET** /v2/merchant/phoneNumber/{phoneNumberID} | Fetch phone number |
| [**fetchPublicEmployees()**](MerchantApi.md#fetchPublicEmployees) | **GET** /v2/merchant/employees/public | Fetch public representative employees of the merchant |
| [**fetchSimpleSMSBroadcasts()**](MerchantApi.md#fetchSimpleSMSBroadcasts) | **GET** /v2/merchant/broadcasts/simpleSMS/all | Fetch all simple SMS broadcasts |
| [**fetchStaticVoucherCampaignBroadcasts()**](MerchantApi.md#fetchStaticVoucherCampaignBroadcasts) | **GET** /v2/merchant/broadcasts/staticVoucherCampaign/all | Fetch all static voucher campaign broadcasts |
| [**fetchTCPAFilter()**](MerchantApi.md#fetchTCPAFilter) | **GET** /v2/merchant/tcpa/filter/all | Fetch all TCPA Filters |
| [**fetchWalletConfiguration()**](MerchantApi.md#fetchWalletConfiguration) | **GET** /v2/merchant/wallet/configuration | Fetch wallet configuration |
| [**updateMerchant()**](MerchantApi.md#updateMerchant) | **PUT** /v2/merchant | Update merchant details |
| [**updatePointsOfContact()**](MerchantApi.md#updatePointsOfContact) | **PUT** /v2/merchant/pointsOfContact | Update billing contact |
| [**updatePosIntegration()**](MerchantApi.md#updatePosIntegration) | **PUT** /v2/merchant/pos/integration | Update POS Integration |


## `archiveMerchantProfile()`

```php
archiveMerchantProfile(): mixed
```

Archive Merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->archiveMerchantProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->archiveMerchantProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `archivePaymentObjectBroadcast()`

```php
archivePaymentObjectBroadcast($broadcast_id): mixed
```

Archive payment object broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_id = NULL; // mixed

try {
    $result = $apiInstance->archivePaymentObjectBroadcast($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->archivePaymentObjectBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | [**mixed**](../Model/.md)|  | |

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

## `countInboundSMS()`

```php
countInboundSMS($phone_number_id, $from_phone_number, $body, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count inbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed
$from_phone_number = 'from_phone_number_example'; // string
$body = 'body_example'; // string
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countInboundSMS($phone_number_id, $from_phone_number, $body, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->countInboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |
| **from_phone_number** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportInboundMessages()`

```php
exportInboundMessages($phone_number_id, $locale): string
```

Export inbound messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$locale = 'locale_example'; // string

try {
    $result = $apiInstance->exportInboundMessages($phone_number_id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->exportInboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **locale** | **string**|  | |

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

## `exportOutboundMessages()`

```php
exportOutboundMessages($phone_number_id, $locale, $payment_object_broadcast_id): string
```

Export outbound messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$locale = 'locale_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string

try {
    $result = $apiInstance->exportOutboundMessages($phone_number_id, $locale, $payment_object_broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->exportOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **locale** | **string**|  | |
| **payment_object_broadcast_id** | **string**|  | [optional] |

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

## `fetchAdvertisementCreditBroadcasts()`

```php
fetchAdvertisementCreditBroadcasts($is_archive_included): \OpenAPI\Client\Model\AdvertisementCreditBroadcast[]
```

Fetch all ad credit broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAdvertisementCreditBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchAdvertisementCreditBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvertisementCreditBroadcast[]**](../Model/AdvertisementCreditBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchCustomRoles()`

```php
fetchCustomRoles(): mixed
```

Fetch custom roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchCustomRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchCustomRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchDynamicVoucherBroadcasts()`

```php
fetchDynamicVoucherBroadcasts($is_archive_included): \OpenAPI\Client\Model\DynamicVoucherBroadcast[]
```

Fetch all dynamic voucher broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchDynamicVoucherBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchDynamicVoucherBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucherBroadcast[]**](../Model/DynamicVoucherBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEmployees()`

```php
fetchEmployees(): mixed
```

Fetch all employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchEmployees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchEmployees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchHelpDeskRequests()`

```php
fetchHelpDeskRequests($phone_number_id, $is_resolved): \OpenAPI\Client\Model\HelpDeskRequest[]
```

Fetch help desk requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed
$is_resolved = True; // bool

try {
    $result = $apiInstance->fetchHelpDeskRequests($phone_number_id, $is_resolved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchHelpDeskRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |
| **is_resolved** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelpDeskRequest[]**](../Model/HelpDeskRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedList()`

```php
fetchImportedList($list_id): \OpenAPI\Client\Model\ImportedList
```

Fetch imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = NULL; // mixed

try {
    $result = $apiInstance->fetchImportedList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedLists()`

```php
fetchImportedLists($is_archive_included): mixed
```

Fetch all imported lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchImportedLists($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchImportedLists: ', $e->getMessage(), PHP_EOL;
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

## `fetchInboundSMS()`

```php
fetchInboundSMS($phone_number_id, $from_phone_number): \OpenAPI\Client\Model\InboundSMS[]
```

Fetch inbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed
$from_phone_number = 'from_phone_number_example'; // string

try {
    $result = $apiInstance->fetchInboundSMS($phone_number_id, $from_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchInboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |
| **from_phone_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboundSMS[]**](../Model/InboundSMS.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInboundSMSByPage()`

```php
fetchInboundSMSByPage($phone_number_id, $from_phone_number, $page_size, $page_num, $start_date, $end_date): \OpenAPI\Client\Model\FetchInboundSMSByPage200Response
```

Fetch inbound SMSes by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed
$from_phone_number = 'from_phone_number_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchInboundSMSByPage($phone_number_id, $from_phone_number, $page_size, $page_num, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchInboundSMSByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |
| **from_phone_number** | **string**|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchInboundSMSByPage200Response**](../Model/FetchInboundSMSByPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantOutboundSMS()`

```php
fetchMerchantOutboundSMS($phone_number_id, $to_phone_number): \OpenAPI\Client\Model\OutboundSMS[]
```

Fetch outbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed
$to_phone_number = 'to_phone_number_example'; // string

try {
    $result = $apiInstance->fetchMerchantOutboundSMS($phone_number_id, $to_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchMerchantOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |
| **to_phone_number** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OutboundSMS[]**](../Model/OutboundSMS.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantPhoneNumbers()`

```php
fetchMerchantPhoneNumbers($is_archive_included, $is_approved): mixed
```

Fetch all phone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool
$is_approved = True; // bool

try {
    $result = $apiInstance->fetchMerchantPhoneNumbers($is_archive_included, $is_approved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchMerchantPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |
| **is_approved** | **bool**|  | [optional] |

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

## `fetchOptInList()`

```php
fetchOptInList($list_id): \OpenAPI\Client\Model\OptInList
```

Fetch opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = NULL; // mixed

try {
    $result = $apiInstance->fetchOptInList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInLists()`

```php
fetchOptInLists($is_archive_included): mixed
```

Fetch all opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInLists($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchOptInLists: ', $e->getMessage(), PHP_EOL;
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

## `fetchPhoneNumber()`

```php
fetchPhoneNumber($phone_number_id): \OpenAPI\Client\Model\PhoneNumber
```

Fetch phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = NULL; // mixed

try {
    $result = $apiInstance->fetchPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PhoneNumber**](../Model/PhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPublicEmployees()`

```php
fetchPublicEmployees(): mixed
```

Fetch public representative employees of the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchPublicEmployees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchPublicEmployees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchSimpleSMSBroadcasts()`

```php
fetchSimpleSMSBroadcasts($is_archive_included): \OpenAPI\Client\Model\SimpleSMSBroadcast[]
```

Fetch all simple SMS broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchSimpleSMSBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchSimpleSMSBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SimpleSMSBroadcast[]**](../Model/SimpleSMSBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStaticVoucherCampaignBroadcasts()`

```php
fetchStaticVoucherCampaignBroadcasts($is_archive_included): \OpenAPI\Client\Model\StaticVoucherCampaignBroadcast[]
```

Fetch all static voucher campaign broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchStaticVoucherCampaignBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchStaticVoucherCampaignBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaignBroadcast[]**](../Model/StaticVoucherCampaignBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTCPAFilter()`

```php
fetchTCPAFilter(): \OpenAPI\Client\Model\Tcpa[]
```

Fetch all TCPA Filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchTCPAFilter();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchTCPAFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Tcpa[]**](../Model/Tcpa.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWalletConfiguration()`

```php
fetchWalletConfiguration(): mixed
```

Fetch wallet configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchWalletConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchWalletConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateMerchant()`

```php
updateMerchant($wt_merchant_update): mixed
```

Update merchant details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update = new \OpenAPI\Client\Model\WTMerchantUpdate(); // \OpenAPI\Client\Model\WTMerchantUpdate

try {
    $result = $apiInstance->updateMerchant($wt_merchant_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update** | [**\OpenAPI\Client\Model\WTMerchantUpdate**](../Model/WTMerchantUpdate.md)|  | |

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

## `updatePointsOfContact()`

```php
updatePointsOfContact($wt_merchant_update_points_of_contact): mixed
```

Update billing contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update_points_of_contact = new \OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact(); // \OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact

try {
    $result = $apiInstance->updatePointsOfContact($wt_merchant_update_points_of_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updatePointsOfContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update_points_of_contact** | [**\OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact**](../Model/WTMerchantUpdatePointsOfContact.md)|  | |

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

## `updatePosIntegration()`

```php
updatePosIntegration($wt_merchant_update_pos_integration): mixed
```

Update POS Integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update_pos_integration = new \OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration(); // \OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration

try {
    $result = $apiInstance->updatePosIntegration($wt_merchant_update_pos_integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updatePosIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update_pos_integration** | [**\OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration**](../Model/WTMerchantUpdatePOSIntegration.md)|  | |

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
