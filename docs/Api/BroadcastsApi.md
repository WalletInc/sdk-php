# OpenAPI\Client\BroadcastsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivePaymentObjectBroadcast()**](BroadcastsApi.md#archivePaymentObjectBroadcast) | **DELETE** /v2/merchant/paymentObjectBroadcast/{broadcastID} | Archive payment object broadcast |
| [**fetchAdvertisementCreditBroadcasts()**](BroadcastsApi.md#fetchAdvertisementCreditBroadcasts) | **GET** /v2/merchant/broadcasts/adCredits/all | Get all ad credit broadcasts |
| [**fetchDynamicVoucherBroadcasts()**](BroadcastsApi.md#fetchDynamicVoucherBroadcasts) | **GET** /v2/merchant/broadcasts/dynamicVouchers/all | Get all dynamic voucher broadcasts |
| [**fetchPaymentObjectBroadcasts()**](BroadcastsApi.md#fetchPaymentObjectBroadcasts) | **GET** /v2/sms/paymentObjectBroadcasts/{phoneNumberID} | Get payment object broadcasts |
| [**fetchSimpleSMSBroadcasts()**](BroadcastsApi.md#fetchSimpleSMSBroadcasts) | **GET** /v2/merchant/broadcasts/simpleSMS/all | Get all simple SMS broadcasts |
| [**fetchStaticVoucherCampaignBroadcasts()**](BroadcastsApi.md#fetchStaticVoucherCampaignBroadcasts) | **GET** /v2/merchant/broadcasts/staticVoucherCampaign/all | Get all static voucher campaign broadcasts |
| [**scheduleAdvertisementCredit()**](BroadcastsApi.md#scheduleAdvertisementCredit) | **POST** /v2/employee/sms/schedule/adCredit/{advertisementCreditID} | Schedule Ad Credit |
| [**scheduleDynamicVoucher()**](BroadcastsApi.md#scheduleDynamicVoucher) | **POST** /v2/employee/sms/schedule/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to list |
| [**scheduleDynamicVoucherToRecipient()**](BroadcastsApi.md#scheduleDynamicVoucherToRecipient) | **POST** /v2/employee/sms/schedule/recipient/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to recipient |
| [**scheduleSimpleSMS()**](BroadcastsApi.md#scheduleSimpleSMS) | **POST** /v2/employee/sms/schedule/simple | Schedule Simple SMS broadcast to list |
| [**scheduleSimpleSMSToRecipient()**](BroadcastsApi.md#scheduleSimpleSMSToRecipient) | **POST** /v2/employee/sms/schedule/recipient/simple | Schedule Simple SMS broadcast to recipient |
| [**sendSmsCampaignBroadcast()**](BroadcastsApi.md#sendSmsCampaignBroadcast) | **POST** /v2/employee/sms/schedule/campaign/{staticVoucherCampaignID} | Schedule SMS Campaign Broadcast |


## `archivePaymentObjectBroadcast()`

```php
archivePaymentObjectBroadcast($broadcast_id): mixed
```

Archive payment object broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $result = $apiInstance->archivePaymentObjectBroadcast($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->archivePaymentObjectBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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

## `fetchAdvertisementCreditBroadcasts()`

```php
fetchAdvertisementCreditBroadcasts($is_archive_included): \OpenAPI\Client\Model\AdvertisementCreditBroadcast[]
```

Get all ad credit broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAdvertisementCreditBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->fetchAdvertisementCreditBroadcasts: ', $e->getMessage(), PHP_EOL;
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

## `fetchDynamicVoucherBroadcasts()`

```php
fetchDynamicVoucherBroadcasts($is_archive_included): \OpenAPI\Client\Model\DynamicVoucherBroadcast[]
```

Get all dynamic voucher broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchDynamicVoucherBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->fetchDynamicVoucherBroadcasts: ', $e->getMessage(), PHP_EOL;
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

## `fetchPaymentObjectBroadcasts()`

```php
fetchPaymentObjectBroadcasts($phone_number_id): \OpenAPI\Client\Model\StaticVoucherCampaignBroadcast[]
```

Get payment object broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchPaymentObjectBroadcasts($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->fetchPaymentObjectBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

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

## `fetchSimpleSMSBroadcasts()`

```php
fetchSimpleSMSBroadcasts($is_archive_included): \OpenAPI\Client\Model\SimpleSMSBroadcast[]
```

Get all simple SMS broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchSimpleSMSBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->fetchSimpleSMSBroadcasts: ', $e->getMessage(), PHP_EOL;
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

Get all static voucher campaign broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchStaticVoucherCampaignBroadcasts($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->fetchStaticVoucherCampaignBroadcasts: ', $e->getMessage(), PHP_EOL;
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

## `scheduleAdvertisementCredit()`

```php
scheduleAdvertisementCredit($advertisement_credit_id, $wt_employee_schedule_simple_sms): \OpenAPI\Client\Model\AdvertisementCreditBroadcast
```

Schedule Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertisement_credit_id = 'advertisement_credit_id_example'; // string
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleAdvertisementCredit($advertisement_credit_id, $wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertisement_credit_id** | **string**|  | |
| **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdvertisementCreditBroadcast**](../Model/AdvertisementCreditBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleDynamicVoucher()`

```php
scheduleDynamicVoucher($dynamic_voucher_id, $wt_employee_schedule_simple_sms): \OpenAPI\Client\Model\DynamicVoucherBroadcast
```

Schedule Dynamic Voucher to list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher_id = 'dynamic_voucher_id_example'; // string
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleDynamicVoucher($dynamic_voucher_id, $wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleDynamicVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dynamic_voucher_id** | **string**|  | |
| **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucherBroadcast**](../Model/DynamicVoucherBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleDynamicVoucherToRecipient()`

```php
scheduleDynamicVoucherToRecipient($dynamic_voucher_id, $wt_employee_schedule_simple_smsto_recipient): \OpenAPI\Client\Model\DynamicVoucherBroadcast
```

Schedule Dynamic Voucher to recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher_id = 'dynamic_voucher_id_example'; // string
$wt_employee_schedule_simple_smsto_recipient = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient

try {
    $result = $apiInstance->scheduleDynamicVoucherToRecipient($dynamic_voucher_id, $wt_employee_schedule_simple_smsto_recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleDynamicVoucherToRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dynamic_voucher_id** | **string**|  | |
| **wt_employee_schedule_simple_smsto_recipient** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient**](../Model/WTEmployeeScheduleSimpleSMSToRecipient.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucherBroadcast**](../Model/DynamicVoucherBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimpleSMS()`

```php
scheduleSimpleSMS($wt_employee_schedule_simple_sms): bool
```

Schedule Simple SMS broadcast to list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleSimpleSMS($wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleSimpleSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimpleSMSToRecipient()`

```php
scheduleSimpleSMSToRecipient($wt_employee_schedule_simple_smsto_recipient): bool
```

Schedule Simple SMS broadcast to recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_schedule_simple_smsto_recipient = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient

try {
    $result = $apiInstance->scheduleSimpleSMSToRecipient($wt_employee_schedule_simple_smsto_recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleSimpleSMSToRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_schedule_simple_smsto_recipient** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient**](../Model/WTEmployeeScheduleSimpleSMSToRecipient.md)|  | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsCampaignBroadcast()`

```php
sendSmsCampaignBroadcast($static_voucher_campaign_id, $wt_employee_schedule_sms_campaign_broadcast): \OpenAPI\Client\Model\StaticVoucherCampaignBroadcast
```

Schedule SMS Campaign Broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher_campaign_id = 'static_voucher_campaign_id_example'; // string
$wt_employee_schedule_sms_campaign_broadcast = new \OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast(); // \OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast

try {
    $result = $apiInstance->sendSmsCampaignBroadcast($static_voucher_campaign_id, $wt_employee_schedule_sms_campaign_broadcast);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->sendSmsCampaignBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **static_voucher_campaign_id** | **string**|  | |
| **wt_employee_schedule_sms_campaign_broadcast** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast**](../Model/WTEmployeeScheduleSMSCampaignBroadcast.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaignBroadcast**](../Model/StaticVoucherCampaignBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
