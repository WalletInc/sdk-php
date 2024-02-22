# OpenAPI\Client\AppleWalletSubscribersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchAppleWalletSubscriberActivity()**](AppleWalletSubscribersApi.md#fetchAppleWalletSubscriberActivity) | **GET** /v2/apple/wallet/pass/subscriber/activity/{subscriptionID} | Fetch subscriber activity |
| [**fetchAppleWalletSubscribers()**](AppleWalletSubscribersApi.md#fetchAppleWalletSubscribers) | **GET** /v2/apple/wallet/pass/subscribers/all | Fetch all subscribers |


## `fetchAppleWalletSubscriberActivity()`

```php
fetchAppleWalletSubscriberActivity($subscription_id): mixed[]
```

Fetch subscriber activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppleWalletSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = NULL; // mixed

try {
    $result = $apiInstance->fetchAppleWalletSubscriberActivity($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleWalletSubscribersApi->fetchAppleWalletSubscriberActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | [**mixed**](../Model/.md)|  | |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAppleWalletSubscribers()`

```php
fetchAppleWalletSubscribers($start_date_time, $end_date_time): mixed[]
```

Fetch all subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppleWalletSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAppleWalletSubscribers($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleWalletSubscribersApi->fetchAppleWalletSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | [optional] |
| **end_date_time** | **\DateTime**|  | [optional] |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
