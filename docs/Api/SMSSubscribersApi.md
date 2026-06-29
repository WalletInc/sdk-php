# OpenAPI\Client\SMSSubscribersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveSmsSubscriber()**](SMSSubscribersApi.md#archiveSmsSubscriber) | **DELETE** /v2/SmsSubscriber/{id} | Archive SMS Subscriber |
| [**createSmsSubscriber()**](SMSSubscribersApi.md#createSmsSubscriber) | **POST** /v2/SmsSubscriber | Create SMS Subscriber |
| [**fetchAllSmsSubscribers()**](SMSSubscribersApi.md#fetchAllSmsSubscribers) | **GET** /v2/SmsSubscriber/all | Get all SMS Subscribers |
| [**restoreSmsSubscriber()**](SMSSubscribersApi.md#restoreSmsSubscriber) | **PATCH** /v2/SmsSubscriber/{id} | Restore SMS Subscriber |
| [**updateSmsSubscriber()**](SMSSubscribersApi.md#updateSmsSubscriber) | **PUT** /v2/SmsSubscriber/{id} | Update SMS Subscriber |


## `archiveSmsSubscriber()`

```php
archiveSmsSubscriber($id): \OpenAPI\Client\Model\SmsSubscriber
```

Archive SMS Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveSmsSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSSubscribersApi->archiveSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SmsSubscriber**](../Model/SmsSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSmsSubscriber()`

```php
createSmsSubscriber($wt_sms_subscriber_create_params): \OpenAPI\Client\Model\SmsSubscriber
```

Create SMS Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_sms_subscriber_create_params = new \OpenAPI\Client\Model\WTSmsSubscriberCreateParams(); // \OpenAPI\Client\Model\WTSmsSubscriberCreateParams

try {
    $result = $apiInstance->createSmsSubscriber($wt_sms_subscriber_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSSubscribersApi->createSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_sms_subscriber_create_params** | [**\OpenAPI\Client\Model\WTSmsSubscriberCreateParams**](../Model/WTSmsSubscriberCreateParams.md)|  | |

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

## `fetchAllSmsSubscribers()`

```php
fetchAllSmsSubscribers($start_date_time, $end_date_time, $is_archive_included): mixed
```

Get all SMS Subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllSmsSubscribers($start_date_time, $end_date_time, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSSubscribersApi->fetchAllSmsSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | [optional] |
| **end_date_time** | **\DateTime**|  | [optional] |
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

## `restoreSmsSubscriber()`

```php
restoreSmsSubscriber($id): \OpenAPI\Client\Model\SmsSubscriber
```

Restore SMS Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreSmsSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSSubscribersApi->restoreSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SmsSubscriber**](../Model/SmsSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsSubscriber()`

```php
updateSmsSubscriber($id, $wt_sms_subscriber_update_params): \OpenAPI\Client\Model\SmsSubscriber
```

Update SMS Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_sms_subscriber_update_params = new \OpenAPI\Client\Model\WTSmsSubscriberUpdateParams(); // \OpenAPI\Client\Model\WTSmsSubscriberUpdateParams

try {
    $result = $apiInstance->updateSmsSubscriber($id, $wt_sms_subscriber_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSSubscribersApi->updateSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_sms_subscriber_update_params** | [**\OpenAPI\Client\Model\WTSmsSubscriberUpdateParams**](../Model/WTSmsSubscriberUpdateParams.md)|  | |

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
