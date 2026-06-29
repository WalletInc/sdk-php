# OpenAPI\Client\SMSOperationsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acquirePhoneNumber()**](SMSOperationsApi.md#acquirePhoneNumber) | **POST** /v2/sms/phoneNumber/acquire | Acquire phone number |
| [**archivePhoneNumber()**](SMSOperationsApi.md#archivePhoneNumber) | **DELETE** /v2/sms/phoneNumber/{phoneNumberID} | Archive phone number |
| [**archiveRecipient()**](SMSOperationsApi.md#archiveRecipient) | **DELETE** /v2/sms/importedList/recipients/{id} | Archive recipient |
| [**countImportedListRecipients()**](SMSOperationsApi.md#countImportedListRecipients) | **GET** /v2/sms/importedList/recipients/count/{listID} | Count imported list recipients |
| [**countOptInListSubscribers()**](SMSOperationsApi.md#countOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/count/{listID} | Count opt in list subscribers |
| [**countOptInSourceSubscribers()**](SMSOperationsApi.md#countOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/count/{sourceID} | Count opt in source subscribers |
| [**countOutboundSMS()**](SMSOperationsApi.md#countOutboundSMS) | **GET** /v2/sms/outbound/count/{phoneNumberID} | Count outbound SMS |
| [**createImportedList()**](SMSOperationsApi.md#createImportedList) | **POST** /v2/sms/importedList | Create imported list |
| [**createOptInList()**](SMSOperationsApi.md#createOptInList) | **POST** /v2/sms/optInList | Create opt in list |
| [**createOptInListSource()**](SMSOperationsApi.md#createOptInListSource) | **POST** /v2/sms/optInListSource | Send SMS to opt in list |
| [**createRecipientInImportedList()**](SMSOperationsApi.md#createRecipientInImportedList) | **POST** /v2/sms/importedList/recipients/create | Add new recipient in an imported list |
| [**exportImportedListRecipients()**](SMSOperationsApi.md#exportImportedListRecipients) | **POST** /v2/sms/importedList/recipients/export/{importedListID} | Export imported list recipients |
| [**exportOptInListSubscribers()**](SMSOperationsApi.md#exportOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/export/{listID} | Export opt in list subscribers |
| [**fetchBlockedTCPAEntries()**](SMSOperationsApi.md#fetchBlockedTCPAEntries) | **GET** /v2/sms/phoneNumber/blocked/{phoneNumberID} | Get blocked TCPA entries |
| [**fetchImportedListRecipients()**](SMSOperationsApi.md#fetchImportedListRecipients) | **GET** /v2/sms/importedList/recipients/{listID} | Get imported list recipients |
| [**fetchImportedListRecipientsByPage()**](SMSOperationsApi.md#fetchImportedListRecipientsByPage) | **GET** /v2/sms/importedList/recipients/page/{listID} | Get imported list recipients by page |
| [**fetchOptInListSources()**](SMSOperationsApi.md#fetchOptInListSources) | **GET** /v2/sms/optInListSources/all | Get all opt in list sources |
| [**fetchOptInListSubscribers()**](SMSOperationsApi.md#fetchOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/{listID} | Get opt in list subscribers |
| [**fetchOptInListSubscribersByPage()**](SMSOperationsApi.md#fetchOptInListSubscribersByPage) | **GET** /v2/sms/optInList/subscribers/page/{listID} | Get opt in list subscribers by page |
| [**fetchOptInListsAssociatedWithPhoneNumber()**](SMSOperationsApi.md#fetchOptInListsAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/lists/{phoneNumberID} | Get opt in lists |
| [**fetchOptInSourceSubscribers()**](SMSOperationsApi.md#fetchOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/{sourceID} | Get opt in source subscribers |
| [**fetchOptInSourcesAssociatedWithPhoneNumber()**](SMSOperationsApi.md#fetchOptInSourcesAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/sources/{phoneNumberID} | Get opt in sources |
| [**fetchOutboundSMS()**](SMSOperationsApi.md#fetchOutboundSMS) | **GET** /v2/sms/outbound/{phoneNumberID} | Get outbound SMS |
| [**fetchOutboundSMSByPage()**](SMSOperationsApi.md#fetchOutboundSMSByPage) | **GET** /v2/sms/outbound/page/{phoneNumberID} | Get outbound SMSes by page |
| [**fetchPaymentObjectBroadcasts()**](SMSOperationsApi.md#fetchPaymentObjectBroadcasts) | **GET** /v2/sms/paymentObjectBroadcasts/{phoneNumberID} | Get payment object broadcasts |
| [**fetchSMSAgreement()**](SMSOperationsApi.md#fetchSMSAgreement) | **GET** /v2/sms/agreement | Get SMS Agreement |
| [**importImportedListRecipients()**](SMSOperationsApi.md#importImportedListRecipients) | **POST** /v2/sms/importedList/recipients/import/{importedListID} | Import imported list recipients |
| [**importImportedListRecipientsFromMembershipTier()**](SMSOperationsApi.md#importImportedListRecipientsFromMembershipTier) | **POST** /v2/sms/importedList/recipients/import-from-tier | Import imported list recipients from a given membership tier |
| [**importOptInListSubscribers()**](SMSOperationsApi.md#importOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/import/{listID} | Import opt in list subscribers |
| [**restorePhoneNumber()**](SMSOperationsApi.md#restorePhoneNumber) | **PATCH** /v2/sms/phoneNumber/{phoneNumberID} | Restore phone number |
| [**restoreRecipient()**](SMSOperationsApi.md#restoreRecipient) | **PATCH** /v2/sms/importedList/recipients/{id} | Restore recipient |
| [**retrieveSentAndMaxCountOfMessages()**](SMSOperationsApi.md#retrieveSentAndMaxCountOfMessages) | **GET** /v2/sms/sent | Retrieve the number of messages sent by the merchant within the current billing cycle |
| [**saveImportedList()**](SMSOperationsApi.md#saveImportedList) | **PUT** /v2/sms/importedList/{listID} | Save imported list |
| [**saveOptInList()**](SMSOperationsApi.md#saveOptInList) | **PUT** /v2/sms/optInList/{listID} | Save opt in list |
| [**saveOptInListSource()**](SMSOperationsApi.md#saveOptInListSource) | **PUT** /v2/sms/optInListSource/{sourceID} | Save opt in list source |
| [**sendPhoneNumberForVerification()**](SMSOperationsApi.md#sendPhoneNumberForVerification) | **PUT** /v2/sms/phoneNumber/verification/{phoneNumberID} | Request phone number verification |
| [**updatePhoneNumber()**](SMSOperationsApi.md#updatePhoneNumber) | **PUT** /v2/sms/phoneNumber/{phoneNumberID} | Update phone number |


## `acquirePhoneNumber()`

```php
acquirePhoneNumber($wtsms_acquire_phone_number): \OpenAPI\Client\Model\PhoneNumber
```

Acquire phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_acquire_phone_number = new \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber(); // \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber

try {
    $result = $apiInstance->acquirePhoneNumber($wtsms_acquire_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->acquirePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wtsms_acquire_phone_number** | [**\OpenAPI\Client\Model\WTSMSAcquirePhoneNumber**](../Model/WTSMSAcquirePhoneNumber.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PhoneNumber**](../Model/PhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archivePhoneNumber()`

```php
archivePhoneNumber($phone_number_id): \OpenAPI\Client\Model\PhoneNumber
```

Archive phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->archivePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->archivePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

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

## `archiveRecipient()`

```php
archiveRecipient($id): \OpenAPI\Client\Model\ImportedListRecipient
```

Archive recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->archiveRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countImportedListRecipients()`

```php
countImportedListRecipients($list_id, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countImportedListRecipients($list_id, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->countImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_archive_included** | **bool**|  | [optional] |
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

## `countOptInListSubscribers()`

```php
countOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->countOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |
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

## `countOptInSourceSubscribers()`

```php
countOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in source subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->countOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |
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

## `countOutboundSMS()`

```php
countOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string
$status = 'status_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->countOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **to_phone_number** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **payment_object_broadcast_id** | **string**|  | [optional] |
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

## `createImportedList()`

```php
createImportedList($wtsms_imported_list_create): \OpenAPI\Client\Model\ImportedList
```

Create imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_imported_list_create = new \OpenAPI\Client\Model\WTSMSImportedListCreate(); // \OpenAPI\Client\Model\WTSMSImportedListCreate

try {
    $result = $apiInstance->createImportedList($wtsms_imported_list_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->createImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOptInList()`

```php
createOptInList($wt_opt_in_list_creation_params): \OpenAPI\Client\Model\OptInList
```

Create opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_opt_in_list_creation_params = new \OpenAPI\Client\Model\WTOptInListCreationParams(); // \OpenAPI\Client\Model\WTOptInListCreationParams

try {
    $result = $apiInstance->createOptInList($wt_opt_in_list_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->createOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOptInListSource()`

```php
createOptInListSource($wtsms_opt_in_list_source_create): \OpenAPI\Client\Model\OptInListSource
```

Send SMS to opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_opt_in_list_source_create = new \OpenAPI\Client\Model\WTSMSOptInListSourceCreate(); // \OpenAPI\Client\Model\WTSMSOptInListSourceCreate

try {
    $result = $apiInstance->createOptInListSource($wtsms_opt_in_list_source_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->createOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRecipientInImportedList()`

```php
createRecipientInImportedList($ss_imported_list_recipient_create_params): \OpenAPI\Client\Model\ImportedListRecipient
```

Add new recipient in an imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ss_imported_list_recipient_create_params = new \OpenAPI\Client\Model\SSImportedListRecipientCreateParams(); // \OpenAPI\Client\Model\SSImportedListRecipientCreateParams

try {
    $result = $apiInstance->createRecipientInImportedList($ss_imported_list_recipient_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->createRecipientInImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ss_imported_list_recipient_create_params** | [**\OpenAPI\Client\Model\SSImportedListRecipientCreateParams**](../Model/SSImportedListRecipientCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportImportedListRecipients()`

```php
exportImportedListRecipients($imported_list_id): string
```

Export imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imported_list_id = 'imported_list_id_example'; // string

try {
    $result = $apiInstance->exportImportedListRecipients($imported_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->exportImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **imported_list_id** | **string**|  | |

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

## `exportOptInListSubscribers()`

```php
exportOptInListSubscribers($list_id): string
```

Export opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->exportOptInListSubscribers($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->exportOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

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

## `fetchBlockedTCPAEntries()`

```php
fetchBlockedTCPAEntries($phone_number_id): \OpenAPI\Client\Model\Tcpa[]
```

Get blocked TCPA entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchBlockedTCPAEntries($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchBlockedTCPAEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

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

## `fetchImportedListRecipients()`

```php
fetchImportedListRecipients($list_id): \OpenAPI\Client\Model\ImportedListRecipient[]
```

Get imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->fetchImportedListRecipients($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient[]**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedListRecipientsByPage()`

```php
fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included): \OpenAPI\Client\Model\FetchImportedListRecipientsByPage200Response
```

Get imported list recipients by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchImportedListRecipientsByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchImportedListRecipientsByPage200Response**](../Model/FetchImportedListRecipientsByPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSources()`

```php
fetchOptInListSources($is_archive_included): mixed
```

Get all opt in list sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSources($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInListSources: ', $e->getMessage(), PHP_EOL;
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

## `fetchOptInListSubscribers()`

```php
fetchOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\OptInListSubscriber[]
```

Get opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptInListSubscriber[]**](../Model/OptInListSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSubscribersByPage()`

```php
fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\FetchOptInListSubscribersByPage200Response
```

Get opt in list subscribers by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInListSubscribersByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchOptInListSubscribersByPage200Response**](../Model/FetchOptInListSubscribersByPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListsAssociatedWithPhoneNumber()`

```php
fetchOptInListsAssociatedWithPhoneNumber($phone_number_id): \OpenAPI\Client\Model\OptInList[]
```

Get opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInListsAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInListsAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList[]**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInSourceSubscribers()`

```php
fetchOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\OptInListSubscriber[]
```

Get opt in source subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptInListSubscriber[]**](../Model/OptInListSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInSourcesAssociatedWithPhoneNumber()`

```php
fetchOptInSourcesAssociatedWithPhoneNumber($phone_number_id): \OpenAPI\Client\Model\OptInListSource[]
```

Get opt in sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInSourcesAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOptInSourcesAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource[]**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOutboundSMS()`

```php
fetchOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id): \OpenAPI\Client\Model\OutboundSMS[]
```

Get outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string
$status = 'status_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string

try {
    $result = $apiInstance->fetchOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **to_phone_number** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **payment_object_broadcast_id** | **string**|  | [optional] |

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

## `fetchOutboundSMSByPage()`

```php
fetchOutboundSMSByPage($phone_number_id, $to_phone_number, $payment_object_broadcast_id, $page_size, $page_num, $status, $start_date, $end_date): \OpenAPI\Client\Model\FetchOutboundSMSByPage200Response
```

Get outbound SMSes by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$status = new \OpenAPI\Client\Model\SSOutboundStatuses(); // SSOutboundStatuses
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchOutboundSMSByPage($phone_number_id, $to_phone_number, $payment_object_broadcast_id, $page_size, $page_num, $status, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchOutboundSMSByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **to_phone_number** | **string**|  | [optional] |
| **payment_object_broadcast_id** | **string**|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **status** | [**SSOutboundStatuses**](../Model/.md)|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchOutboundSMSByPage200Response**](../Model/FetchOutboundSMSByPage200Response.md)

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



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchPaymentObjectBroadcasts($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchPaymentObjectBroadcasts: ', $e->getMessage(), PHP_EOL;
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

## `fetchSMSAgreement()`

```php
fetchSMSAgreement(): mixed
```

Get SMS Agreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchSMSAgreement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->fetchSMSAgreement: ', $e->getMessage(), PHP_EOL;
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

## `importImportedListRecipients()`

```php
importImportedListRecipients($imported_list_id, $wt_employee_import_records): string
```

Import imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imported_list_id = 'imported_list_id_example'; // string
$wt_employee_import_records = new \OpenAPI\Client\Model\WTEmployeeImportRecords(); // \OpenAPI\Client\Model\WTEmployeeImportRecords

try {
    $result = $apiInstance->importImportedListRecipients($imported_list_id, $wt_employee_import_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->importImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **imported_list_id** | **string**|  | |
| **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importImportedListRecipientsFromMembershipTier()`

```php
importImportedListRecipientsFromMembershipTier($wt_imported_list_recipient_from_membership_tier_import): string
```

Import imported list recipients from a given membership tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_imported_list_recipient_from_membership_tier_import = new \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport(); // \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport

try {
    $result = $apiInstance->importImportedListRecipientsFromMembershipTier($wt_imported_list_recipient_from_membership_tier_import);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->importImportedListRecipientsFromMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_imported_list_recipient_from_membership_tier_import** | [**\OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport**](../Model/WTImportedListRecipientFromMembershipTierImport.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOptInListSubscribers()`

```php
importOptInListSubscribers($list_id, $wtsms_import_opt_in_list_subscribers): string
```

Import opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wtsms_import_opt_in_list_subscribers = new \OpenAPI\Client\Model\WTSMSImportOptInListSubscribers(); // \OpenAPI\Client\Model\WTSMSImportOptInListSubscribers

try {
    $result = $apiInstance->importOptInListSubscribers($list_id, $wtsms_import_opt_in_list_subscribers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->importOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wtsms_import_opt_in_list_subscribers** | [**\OpenAPI\Client\Model\WTSMSImportOptInListSubscribers**](../Model/WTSMSImportOptInListSubscribers.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restorePhoneNumber()`

```php
restorePhoneNumber($phone_number_id): \OpenAPI\Client\Model\PhoneNumber
```

Restore phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->restorePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->restorePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

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

## `restoreRecipient()`

```php
restoreRecipient($id): \OpenAPI\Client\Model\ImportedListRecipient
```

Restore recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->restoreRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSentAndMaxCountOfMessages()`

```php
retrieveSentAndMaxCountOfMessages(): mixed
```

Retrieve the number of messages sent by the merchant within the current billing cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveSentAndMaxCountOfMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->retrieveSentAndMaxCountOfMessages: ', $e->getMessage(), PHP_EOL;
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

## `saveImportedList()`

```php
saveImportedList($list_id, $wtsms_imported_list_create): \OpenAPI\Client\Model\ImportedList
```

Save imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wtsms_imported_list_create = new \OpenAPI\Client\Model\WTSMSImportedListCreate(); // \OpenAPI\Client\Model\WTSMSImportedListCreate

try {
    $result = $apiInstance->saveImportedList($list_id, $wtsms_imported_list_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->saveImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveOptInList()`

```php
saveOptInList($list_id, $wt_opt_in_list_creation_params): \OpenAPI\Client\Model\OptInList
```

Save opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wt_opt_in_list_creation_params = new \OpenAPI\Client\Model\WTOptInListCreationParams(); // \OpenAPI\Client\Model\WTOptInListCreationParams

try {
    $result = $apiInstance->saveOptInList($list_id, $wt_opt_in_list_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->saveOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveOptInListSource()`

```php
saveOptInListSource($source_id, $wtsms_opt_in_list_source_create): \OpenAPI\Client\Model\OptInListSource
```

Save opt in list source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$wtsms_opt_in_list_source_create = new \OpenAPI\Client\Model\WTSMSOptInListSourceCreate(); // \OpenAPI\Client\Model\WTSMSOptInListSourceCreate

try {
    $result = $apiInstance->saveOptInListSource($source_id, $wtsms_opt_in_list_source_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->saveOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPhoneNumberForVerification()`

```php
sendPhoneNumberForVerification($phone_number_id, $wtsms_update_phone_number_config): string
```

Request phone number verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$wtsms_update_phone_number_config = new \OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig(); // \OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig

try {
    $result = $apiInstance->sendPhoneNumberForVerification($phone_number_id, $wtsms_update_phone_number_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->sendPhoneNumberForVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **wtsms_update_phone_number_config** | [**\OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig**](../Model/WTSMSUpdatePhoneNumberConfig.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePhoneNumber()`

```php
updatePhoneNumber($phone_number_id, $wtsms_update_phone_number_config): \OpenAPI\Client\Model\PhoneNumber
```

Update phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$wtsms_update_phone_number_config = new \OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig(); // \OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig

try {
    $result = $apiInstance->updatePhoneNumber($phone_number_id, $wtsms_update_phone_number_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSOperationsApi->updatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **wtsms_update_phone_number_config** | [**\OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig**](../Model/WTSMSUpdatePhoneNumberConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PhoneNumber**](../Model/PhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
