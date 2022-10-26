# OpenAPI\Client\SMSApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acquirePhoneNumber()**](SMSApi.md#acquirePhoneNumber) | **POST** /v2/sms/phoneNumber/acquire | Acquire phone number
[**archivePhoneNumber()**](SMSApi.md#archivePhoneNumber) | **DELETE** /v2/sms/phoneNumber/{phoneNumberID} | Archive phone number
[**archiveRecipient()**](SMSApi.md#archiveRecipient) | **DELETE** /v2/sms/importedList/recipients/{id} | Archive recipient
[**countImportedListRecipients()**](SMSApi.md#countImportedListRecipients) | **GET** /v2/sms/importedList/recipients/count/{listID} | Count imported list recipients
[**countOptInListSubscribers()**](SMSApi.md#countOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/count/{listID} | Count opt in list subscribers
[**countOptInSourceSubscribers()**](SMSApi.md#countOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/count/{sourceID} | Count opt in source subscribers
[**countOutboundSMS()**](SMSApi.md#countOutboundSMS) | **GET** /v2/sms/outbound/count/{phoneNumberID} | Count outbound SMS
[**createImportedList()**](SMSApi.md#createImportedList) | **POST** /v2/sms/importedList | Create imported list
[**createOptInList()**](SMSApi.md#createOptInList) | **POST** /v2/sms/optInList | Create opt in list
[**createOptInListSource()**](SMSApi.md#createOptInListSource) | **POST** /v2/sms/optInListSource | Send SMS to opt in list
[**createRecipientInImportedList()**](SMSApi.md#createRecipientInImportedList) | **POST** /v2/sms/importedList/recipients/create | Add new recipient in an imported list
[**createSMSAgreement()**](SMSApi.md#createSMSAgreement) | **POST** /v2/sms/agreement/create | Accept SMS agreement
[**exportImportedListRecipients()**](SMSApi.md#exportImportedListRecipients) | **POST** /v2/sms/importedList/recipients/export/{importedListID} | Export imported list recipients
[**exportOptInListSubscribers()**](SMSApi.md#exportOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/export/{listID} | Export opt in list subscribers
[**fetchBlockedTCPAEntries()**](SMSApi.md#fetchBlockedTCPAEntries) | **GET** /v2/sms/phoneNumber/blocked/{phoneNumberID} | Fetch blocked TCPA entries
[**fetchImportedListRecipients()**](SMSApi.md#fetchImportedListRecipients) | **GET** /v2/sms/importedList/recipients/{listID} | Fetch imported list recipients
[**fetchImportedListRecipientsByPage()**](SMSApi.md#fetchImportedListRecipientsByPage) | **GET** /v2/sms/importedList/recipients/page/{listID} | Fetch imported list recipients by page
[**fetchOptInListSources()**](SMSApi.md#fetchOptInListSources) | **GET** /v2/sms/optInListSources/all | Fetch all opt in list sources
[**fetchOptInListSubscribers()**](SMSApi.md#fetchOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/{listID} | Fetch opt in list subscribers
[**fetchOptInListSubscribersByPage()**](SMSApi.md#fetchOptInListSubscribersByPage) | **GET** /v2/sms/optInList/subscribers/page/{listID} | Fetch opt in list subscribers by page
[**fetchOptInListsAssociatedWithPhoneNumber()**](SMSApi.md#fetchOptInListsAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/lists/{phoneNumberID} | Fetch opt in lists
[**fetchOptInSourceSubscribers()**](SMSApi.md#fetchOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/{sourceID} | Fetch opt in source subscribers
[**fetchOptInSourcesAssociatedWithPhoneNumber()**](SMSApi.md#fetchOptInSourcesAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/sources/{phoneNumberID} | Fetch opt in sources
[**fetchOutboundSMS()**](SMSApi.md#fetchOutboundSMS) | **GET** /v2/sms/outbound/{phoneNumberID} | Fetch outbound SMS
[**fetchOutboundSMSByPage()**](SMSApi.md#fetchOutboundSMSByPage) | **GET** /v2/sms/outbound/page/{phoneNumberID} | Fetch outbound SMSes by page
[**fetchPaymentObjectBroadcasts()**](SMSApi.md#fetchPaymentObjectBroadcasts) | **GET** /v2/sms/paymentObjectBroadcasts/{phoneNumberID} | Fetch payment object broadcasts
[**fetchSMSAgreement()**](SMSApi.md#fetchSMSAgreement) | **GET** /v2/sms/agreement | Fetch SMS agreement
[**importImportedListRecipients()**](SMSApi.md#importImportedListRecipients) | **POST** /v2/sms/importedList/recipients/import/{importedListID} | Import imported list recipients
[**importImportedListRecipientsFromMembershipTier()**](SMSApi.md#importImportedListRecipientsFromMembershipTier) | **POST** /v2/sms/importedList/recipients/import-from-tier | Import imported list recipients from a given membership tier
[**importOptInListSubscribers()**](SMSApi.md#importOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/import/{listID} | Import opt in list subscribers
[**restorePhoneNumber()**](SMSApi.md#restorePhoneNumber) | **PATCH** /v2/sms/phoneNumber/{phoneNumberID} | Restore phone number
[**restoreRecipient()**](SMSApi.md#restoreRecipient) | **PATCH** /v2/sms/importedList/recipients/{id} | Restore recipient
[**retrieveSentAndMaxCountOfMessages()**](SMSApi.md#retrieveSentAndMaxCountOfMessages) | **GET** /v2/sms/sent | Retrieve the number of messages sent by the merchant within the current billing cycle
[**saveImportedList()**](SMSApi.md#saveImportedList) | **PUT** /v2/sms/importedList/{listID} | Save imported list
[**saveOptInList()**](SMSApi.md#saveOptInList) | **PUT** /v2/sms/optInList/{listID} | Save opt in list
[**saveOptInListSource()**](SMSApi.md#saveOptInListSource) | **PUT** /v2/sms/optInListSource/{sourceID} | Save opt in list source
[**sendPhoneNumberForVerification()**](SMSApi.md#sendPhoneNumberForVerification) | **PUT** /v2/sms/phoneNumber/verification/{phoneNumberID} | Request phone number verification
[**updatePhoneNumber()**](SMSApi.md#updatePhoneNumber) | **PUT** /v2/sms/phoneNumber/{phoneNumberID} | Update phone number


## `acquirePhoneNumber()`

```php
acquirePhoneNumber($wtsms_acquire_phone_number): \OpenAPI\Client\Model\PhoneNumber
```

Acquire phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_acquire_phone_number = new \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber(); // \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber

try {
    $result = $apiInstance->acquirePhoneNumber($wtsms_acquire_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->acquirePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wtsms_acquire_phone_number** | [**\OpenAPI\Client\Model\WTSMSAcquirePhoneNumber**](../Model/WTSMSAcquirePhoneNumber.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->archivePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->archivePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->archiveRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->countImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **is_archive_included** | **bool**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->countOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->countOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**|  |
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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
countOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id): \OpenAPI\Client\Model\WTCountResult
```

Count outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string
$status = 'status_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string

try {
    $result = $apiInstance->countOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->countOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |
 **to_phone_number** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **payment_object_broadcast_id** | **string**|  | [optional]

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_imported_list_create = new \OpenAPI\Client\Model\WTSMSImportedListCreate(); // \OpenAPI\Client\Model\WTSMSImportedListCreate

try {
    $result = $apiInstance->createImportedList($wtsms_imported_list_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_opt_in_list_creation_params = new \OpenAPI\Client\Model\WTOptInListCreationParams(); // \OpenAPI\Client\Model\WTOptInListCreationParams

try {
    $result = $apiInstance->createOptInList($wt_opt_in_list_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_opt_in_list_source_create = new \OpenAPI\Client\Model\WTSMSOptInListSourceCreate(); // \OpenAPI\Client\Model\WTSMSOptInListSourceCreate

try {
    $result = $apiInstance->createOptInListSource($wtsms_opt_in_list_source_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ss_imported_list_recipient_create_params = new \OpenAPI\Client\Model\SSImportedListRecipientCreateParams(); // \OpenAPI\Client\Model\SSImportedListRecipientCreateParams

try {
    $result = $apiInstance->createRecipientInImportedList($ss_imported_list_recipient_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createRecipientInImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ss_imported_list_recipient_create_params** | [**\OpenAPI\Client\Model\SSImportedListRecipientCreateParams**](../Model/SSImportedListRecipientCreateParams.md)|  |

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

## `createSMSAgreement()`

```php
createSMSAgreement($wtsms_create_agreement): \OpenAPI\Client\Model\Agreement
```

Accept SMS agreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_create_agreement = new \OpenAPI\Client\Model\WTSMSCreateAgreement(); // \OpenAPI\Client\Model\WTSMSCreateAgreement

try {
    $result = $apiInstance->createSMSAgreement($wtsms_create_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createSMSAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wtsms_create_agreement** | [**\OpenAPI\Client\Model\WTSMSCreateAgreement**](../Model/WTSMSCreateAgreement.md)|  |

### Return type

[**\OpenAPI\Client\Model\Agreement**](../Model/Agreement.md)

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imported_list_id = 'imported_list_id_example'; // string

try {
    $result = $apiInstance->exportImportedListRecipients($imported_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->exportImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imported_list_id** | **string**|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->exportOptInListSubscribers($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->exportOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |

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

Fetch blocked TCPA entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchBlockedTCPAEntries($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchBlockedTCPAEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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

Fetch imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->fetchImportedListRecipients($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |

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
fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included): \OpenAPI\Client\Model\InlineResponse2008
```

Fetch imported list recipients by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // double
$page_num = 3.4; // double
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchImportedListRecipientsByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **page_size** | **double**|  | [optional]
 **page_num** | **double**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

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

Fetch all opt in list sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSources($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchOptInListSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

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

Fetch opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->fetchOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]

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
fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\InlineResponse2007
```

Fetch opt in list subscribers by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // double
$page_num = 3.4; // double
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchOptInListSubscribersByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **page_size** | **double**|  | [optional]
 **page_num** | **double**|  | [optional]
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

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

Fetch opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInListsAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchOptInListsAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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

Fetch opt in source subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->fetchOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**|  |
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]

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

Fetch opt in sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInSourcesAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchOptInSourcesAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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

Fetch outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->fetchOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |
 **to_phone_number** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **payment_object_broadcast_id** | **string**|  | [optional]

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
fetchOutboundSMSByPage($phone_number_id, $to_phone_number, $payment_object_broadcast_id, $page_size, $page_num): \OpenAPI\Client\Model\InlineResponse2006
```

Fetch outbound SMSes by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string
$payment_object_broadcast_id = 'payment_object_broadcast_id_example'; // string
$page_size = 3.4; // double
$page_num = 3.4; // double

try {
    $result = $apiInstance->fetchOutboundSMSByPage($phone_number_id, $to_phone_number, $payment_object_broadcast_id, $page_size, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchOutboundSMSByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |
 **to_phone_number** | **string**|  | [optional]
 **payment_object_broadcast_id** | **string**|  | [optional]
 **page_size** | **double**|  | [optional]
 **page_num** | **double**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

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

Fetch payment object broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchPaymentObjectBroadcasts($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchPaymentObjectBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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

Fetch SMS agreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchSMSAgreement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->fetchSMSAgreement: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->importImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imported_list_id** | **string**|  |
 **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_imported_list_recipient_from_membership_tier_import = new \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport(); // \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport

try {
    $result = $apiInstance->importImportedListRecipientsFromMembershipTier($wt_imported_list_recipient_from_membership_tier_import);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->importImportedListRecipientsFromMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_imported_list_recipient_from_membership_tier_import** | [**\OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport**](../Model/WTImportedListRecipientFromMembershipTierImport.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->importOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **wtsms_import_opt_in_list_subscribers** | [**\OpenAPI\Client\Model\WTSMSImportOptInListSubscribers**](../Model/WTSMSImportOptInListSubscribers.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->restorePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->restorePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->restoreRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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
retrieveSentAndMaxCountOfMessages(): \OpenAPI\Client\Model\WTSMSLimits
```

Retrieve the number of messages sent by the merchant within the current billing cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveSentAndMaxCountOfMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->retrieveSentAndMaxCountOfMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTSMSLimits**](../Model/WTSMSLimits.md)

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->saveImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->saveOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  |
 **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->saveOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**|  |
 **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->sendPhoneNumberForVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |
 **wtsms_update_phone_number_config** | [**\OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig**](../Model/WTSMSUpdatePhoneNumberConfig.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\SMSApi(
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
    echo 'Exception when calling SMSApi->updatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | **string**|  |
 **wtsms_update_phone_number_config** | [**\OpenAPI\Client\Model\WTSMSUpdatePhoneNumberConfig**](../Model/WTSMSUpdatePhoneNumberConfig.md)|  |

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
