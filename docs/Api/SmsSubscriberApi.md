# OpenAPI\Client\SmsSubscriberApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveSmsSubscriber()**](SmsSubscriberApi.md#archiveSmsSubscriber) | **DELETE** /v2/SmsSubscriber/{id} | Archive email subscriber |
| [**createSmsSubscriber()**](SmsSubscriberApi.md#createSmsSubscriber) | **POST** /v2/SmsSubscriber | Create email subscriber |
| [**fetchAllSmsSubscribers()**](SmsSubscriberApi.md#fetchAllSmsSubscribers) | **GET** /v2/SmsSubscriber/all | Fetch all email subscribers |
| [**restoreSmsSubscriber()**](SmsSubscriberApi.md#restoreSmsSubscriber) | **PATCH** /v2/SmsSubscriber/{id} | Restore email subscriber |
| [**updateSmsSubscriber()**](SmsSubscriberApi.md#updateSmsSubscriber) | **PUT** /v2/SmsSubscriber/{id} | Update email subscriber |


## `archiveSmsSubscriber()`

```php
archiveSmsSubscriber($id): \OpenAPI\Client\Model\SmsSubscriber
```

Archive email subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SmsSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveSmsSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsSubscriberApi->archiveSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

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

Create email subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SmsSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_sms_subscriber_create_params = new \OpenAPI\Client\Model\WTSmsSubscriberCreateParams(); // \OpenAPI\Client\Model\WTSmsSubscriberCreateParams

try {
    $result = $apiInstance->createSmsSubscriber($wt_sms_subscriber_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsSubscriberApi->createSmsSubscriber: ', $e->getMessage(), PHP_EOL;
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

Fetch all email subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SmsSubscriberApi(
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
    echo 'Exception when calling SmsSubscriberApi->fetchAllSmsSubscribers: ', $e->getMessage(), PHP_EOL;
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

Restore email subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SmsSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreSmsSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsSubscriberApi->restoreSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

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

Update email subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SmsSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_sms_subscriber_update_params = new \OpenAPI\Client\Model\WTSmsSubscriberUpdateParams(); // \OpenAPI\Client\Model\WTSmsSubscriberUpdateParams

try {
    $result = $apiInstance->updateSmsSubscriber($id, $wt_sms_subscriber_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsSubscriberApi->updateSmsSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |
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
