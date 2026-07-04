# OpenAPI\Client\PhoneNumbersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acquirePhoneNumber()**](PhoneNumbersApi.md#acquirePhoneNumber) | **POST** /v2/sms/phoneNumber/acquire | Acquire phone number |
| [**archivePhoneNumber()**](PhoneNumbersApi.md#archivePhoneNumber) | **DELETE** /v2/sms/phoneNumber/{phoneNumberID} | Archive phone number |
| [**fetchBlockedTCPAEntries()**](PhoneNumbersApi.md#fetchBlockedTCPAEntries) | **GET** /v2/sms/phoneNumber/blocked/{phoneNumberID} | Get blocked TCPA entries |
| [**fetchMerchantPhoneNumbers()**](PhoneNumbersApi.md#fetchMerchantPhoneNumbers) | **GET** /v2/merchant/phoneNumbers/all | Get all phone numbers |
| [**fetchPhoneNumber()**](PhoneNumbersApi.md#fetchPhoneNumber) | **GET** /v2/merchant/phoneNumber/{phoneNumberID} | Get phone number |
| [**fetchSMSAgreement()**](PhoneNumbersApi.md#fetchSMSAgreement) | **GET** /v2/sms/agreement | Get SMS Agreement |
| [**fetchTCPAFilter()**](PhoneNumbersApi.md#fetchTCPAFilter) | **GET** /v2/merchant/tcpa/filter/all | Get all TCPA Filters |
| [**restorePhoneNumber()**](PhoneNumbersApi.md#restorePhoneNumber) | **PATCH** /v2/sms/phoneNumber/{phoneNumberID} | Restore phone number |
| [**sendPhoneNumberForVerification()**](PhoneNumbersApi.md#sendPhoneNumberForVerification) | **PUT** /v2/sms/phoneNumber/verification/{phoneNumberID} | Request phone number verification |
| [**updatePhoneNumber()**](PhoneNumbersApi.md#updatePhoneNumber) | **PUT** /v2/sms/phoneNumber/{phoneNumberID} | Update phone number |


## `acquirePhoneNumber()`

```php
acquirePhoneNumber($wtsms_acquire_phone_number): \OpenAPI\Client\Model\PhoneNumber
```

Acquire phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_acquire_phone_number = new \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber(); // \OpenAPI\Client\Model\WTSMSAcquirePhoneNumber

try {
    $result = $apiInstance->acquirePhoneNumber($wtsms_acquire_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->acquirePhoneNumber: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->archivePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->archivePhoneNumber: ', $e->getMessage(), PHP_EOL;
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

## `fetchBlockedTCPAEntries()`

```php
fetchBlockedTCPAEntries($phone_number_id): \OpenAPI\Client\Model\Tcpa[]
```

Get blocked TCPA entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchBlockedTCPAEntries($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->fetchBlockedTCPAEntries: ', $e->getMessage(), PHP_EOL;
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

## `fetchMerchantPhoneNumbers()`

```php
fetchMerchantPhoneNumbers($is_archive_included, $is_approved): mixed
```

Get all phone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
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
    echo 'Exception when calling PhoneNumbersApi->fetchMerchantPhoneNumbers: ', $e->getMessage(), PHP_EOL;
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

## `fetchPhoneNumber()`

```php
fetchPhoneNumber($phone_number_id): \OpenAPI\Client\Model\PhoneNumber
```

Get phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->fetchPhoneNumber: ', $e->getMessage(), PHP_EOL;
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

## `fetchSMSAgreement()`

```php
fetchSMSAgreement(): mixed
```

Get SMS Agreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchSMSAgreement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->fetchSMSAgreement: ', $e->getMessage(), PHP_EOL;
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

## `fetchTCPAFilter()`

```php
fetchTCPAFilter(): \OpenAPI\Client\Model\Tcpa[]
```

Get all TCPA Filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchTCPAFilter();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->fetchTCPAFilter: ', $e->getMessage(), PHP_EOL;
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

## `restorePhoneNumber()`

```php
restorePhoneNumber($phone_number_id): \OpenAPI\Client\Model\PhoneNumber
```

Restore phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->restorePhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->restorePhoneNumber: ', $e->getMessage(), PHP_EOL;
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

## `sendPhoneNumberForVerification()`

```php
sendPhoneNumberForVerification($phone_number_id, $wtsms_update_phone_number_config): string
```

Request phone number verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
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
    echo 'Exception when calling PhoneNumbersApi->sendPhoneNumberForVerification: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\PhoneNumbersApi(
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
    echo 'Exception when calling PhoneNumbersApi->updatePhoneNumber: ', $e->getMessage(), PHP_EOL;
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
