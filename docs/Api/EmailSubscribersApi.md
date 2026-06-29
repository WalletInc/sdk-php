# OpenAPI\Client\EmailSubscribersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveEmailSubscriber()**](EmailSubscribersApi.md#archiveEmailSubscriber) | **DELETE** /v2/emailSubscriber/{id} | Archive Email Subscriber |
| [**createEmailSubscriber()**](EmailSubscribersApi.md#createEmailSubscriber) | **POST** /v2/emailSubscriber | Create Email Subscriber |
| [**fetchAllEmailSubscribers()**](EmailSubscribersApi.md#fetchAllEmailSubscribers) | **GET** /v2/emailSubscriber/all | Get all Email Subscribers |
| [**restoreEmailSubscriber()**](EmailSubscribersApi.md#restoreEmailSubscriber) | **PATCH** /v2/emailSubscriber/{id} | Restore Email Subscriber |
| [**updateEmailSubscriber()**](EmailSubscribersApi.md#updateEmailSubscriber) | **PUT** /v2/emailSubscriber/{id} | Update Email Subscriber |


## `archiveEmailSubscriber()`

```php
archiveEmailSubscriber($id): \OpenAPI\Client\Model\EmailSubscriber
```

Archive Email Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveEmailSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscribersApi->archiveEmailSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmailSubscriber**](../Model/EmailSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSubscriber()`

```php
createEmailSubscriber($wt_email_subscriber_create_params): \OpenAPI\Client\Model\EmailSubscriber
```

Create Email Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_email_subscriber_create_params = new \OpenAPI\Client\Model\WTEmailSubscriberCreateParams(); // \OpenAPI\Client\Model\WTEmailSubscriberCreateParams

try {
    $result = $apiInstance->createEmailSubscriber($wt_email_subscriber_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscribersApi->createEmailSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_email_subscriber_create_params** | [**\OpenAPI\Client\Model\WTEmailSubscriberCreateParams**](../Model/WTEmailSubscriberCreateParams.md)|  | |

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

## `fetchAllEmailSubscribers()`

```php
fetchAllEmailSubscribers($start_date_time, $end_date_time, $is_archive_included): mixed
```

Get all Email Subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllEmailSubscribers($start_date_time, $end_date_time, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscribersApi->fetchAllEmailSubscribers: ', $e->getMessage(), PHP_EOL;
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

## `restoreEmailSubscriber()`

```php
restoreEmailSubscriber($id): \OpenAPI\Client\Model\EmailSubscriber
```

Restore Email Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreEmailSubscriber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscribersApi->restoreEmailSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmailSubscriber**](../Model/EmailSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailSubscriber()`

```php
updateEmailSubscriber($id, $wt_email_subscriber_update_params): \OpenAPI\Client\Model\EmailSubscriber
```

Update Email Subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_email_subscriber_update_params = new \OpenAPI\Client\Model\WTEmailSubscriberUpdateParams(); // \OpenAPI\Client\Model\WTEmailSubscriberUpdateParams

try {
    $result = $apiInstance->updateEmailSubscriber($id, $wt_email_subscriber_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscribersApi->updateEmailSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_email_subscriber_update_params** | [**\OpenAPI\Client\Model\WTEmailSubscriberUpdateParams**](../Model/WTEmailSubscriberUpdateParams.md)|  | |

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
