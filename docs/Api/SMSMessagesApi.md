# OpenAPI\Client\SMSMessagesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countInboundSMS()**](SMSMessagesApi.md#countInboundSMS) | **GET** /v2/merchant/sms/inbound/count/{phoneNumberID} | Count inbound SMSes |
| [**countOutboundSMS()**](SMSMessagesApi.md#countOutboundSMS) | **GET** /v2/sms/outbound/count/{phoneNumberID} | Count outbound SMS |
| [**estimateSMSSegments()**](SMSMessagesApi.md#estimateSMSSegments) | **POST** /sms/segment-estimate | Estimate SMS/MMS segments for a message |
| [**exportInboundMessages()**](SMSMessagesApi.md#exportInboundMessages) | **PUT** /v2/merchant/sms/inbound/export/{phoneNumberID} | Export inbound messages |
| [**exportOutboundMessages()**](SMSMessagesApi.md#exportOutboundMessages) | **PUT** /v2/merchant/sms/outbound/export/{phoneNumberID} | Export outbound messages |
| [**fetchInboundSMS()**](SMSMessagesApi.md#fetchInboundSMS) | **GET** /v2/merchant/sms/inbound/{phoneNumberID} | Get inbound SMSes |
| [**fetchInboundSMSByPage()**](SMSMessagesApi.md#fetchInboundSMSByPage) | **GET** /v2/merchant/sms/inbound/page/{phoneNumberID} | Get inbound SMSes by page |
| [**fetchMerchantOutboundSMS()**](SMSMessagesApi.md#fetchMerchantOutboundSMS) | **GET** /v2/merchant/sms/outbound/{phoneNumberID} | Get outbound SMSes |
| [**fetchOutboundSMS()**](SMSMessagesApi.md#fetchOutboundSMS) | **GET** /v2/sms/outbound/{phoneNumberID} | Get outbound SMS |
| [**fetchOutboundSMSByPage()**](SMSMessagesApi.md#fetchOutboundSMSByPage) | **GET** /v2/sms/outbound/page/{phoneNumberID} | Get outbound SMSes by page |
| [**retrieveSentAndMaxCountOfMessages()**](SMSMessagesApi.md#retrieveSentAndMaxCountOfMessages) | **GET** /v2/sms/sent | Retrieve the message segments used by the merchant within the current billing cycle |


## `countInboundSMS()`

```php
countInboundSMS($phone_number_id, $from_phone_number, $body, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count inbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$from_phone_number = 'from_phone_number_example'; // string
$body = 'body_example'; // string
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countInboundSMS($phone_number_id, $from_phone_number, $body, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->countInboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
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

## `countOutboundSMS()`

```php
countOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
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
    echo 'Exception when calling SMSMessagesApi->countOutboundSMS: ', $e->getMessage(), PHP_EOL;
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

## `estimateSMSSegments()`

```php
estimateSMSSegments($wt_segment_estimate_request): \OpenAPI\Client\Model\WTSegmentEstimate
```

Estimate SMS/MMS segments for a message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_segment_estimate_request = new \OpenAPI\Client\Model\WTSegmentEstimateRequest(); // \OpenAPI\Client\Model\WTSegmentEstimateRequest

try {
    $result = $apiInstance->estimateSMSSegments($wt_segment_estimate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->estimateSMSSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_segment_estimate_request** | [**\OpenAPI\Client\Model\WTSegmentEstimateRequest**](../Model/WTSegmentEstimateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTSegmentEstimate**](../Model/WTSegmentEstimate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
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
    echo 'Exception when calling SMSMessagesApi->exportInboundMessages: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
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
    echo 'Exception when calling SMSMessagesApi->exportOutboundMessages: ', $e->getMessage(), PHP_EOL;
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

## `fetchInboundSMS()`

```php
fetchInboundSMS($phone_number_id, $from_phone_number): \OpenAPI\Client\Model\InboundSMS[]
```

Get inbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$from_phone_number = 'from_phone_number_example'; // string

try {
    $result = $apiInstance->fetchInboundSMS($phone_number_id, $from_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->fetchInboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
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

Get inbound SMSes by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$from_phone_number = 'from_phone_number_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchInboundSMSByPage($phone_number_id, $from_phone_number, $page_size, $page_num, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->fetchInboundSMSByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
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

Get outbound SMSes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$to_phone_number = 'to_phone_number_example'; // string

try {
    $result = $apiInstance->fetchMerchantOutboundSMS($phone_number_id, $to_phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->fetchMerchantOutboundSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
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

## `fetchOutboundSMS()`

```php
fetchOutboundSMS($phone_number_id, $to_phone_number, $status, $payment_object_broadcast_id): \OpenAPI\Client\Model\OutboundSMS[]
```

Get outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
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
    echo 'Exception when calling SMSMessagesApi->fetchOutboundSMS: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
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
    echo 'Exception when calling SMSMessagesApi->fetchOutboundSMSByPage: ', $e->getMessage(), PHP_EOL;
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

## `retrieveSentAndMaxCountOfMessages()`

```php
retrieveSentAndMaxCountOfMessages(): mixed
```

Retrieve the message segments used by the merchant within the current billing cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveSentAndMaxCountOfMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSMessagesApi->retrieveSentAndMaxCountOfMessages: ', $e->getMessage(), PHP_EOL;
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
