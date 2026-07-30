# OpenAPI\Client\GoogleWalletSubscribersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchGoogleWalletSubscriberActivity()**](GoogleWalletSubscribersApi.md#fetchGoogleWalletSubscriberActivity) | **GET** /google/wallet/pass/subscriber/activity/{subscriptionID} | Get subscriber activity Scoped to the caller&#39;s merchant: the subscription must belong to them (tightening the Apple sibling, which does not re-check ownership on this route). |
| [**fetchGoogleWalletSubscribers()**](GoogleWalletSubscribersApi.md#fetchGoogleWalletSubscribers) | **GET** /google/wallet/pass/subscribers/all | Get all subscribers |


## `fetchGoogleWalletSubscriberActivity()`

```php
fetchGoogleWalletSubscriberActivity($subscription_id): mixed[]
```

Get subscriber activity Scoped to the caller's merchant: the subscription must belong to them (tightening the Apple sibling, which does not re-check ownership on this route).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GoogleWalletSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->fetchGoogleWalletSubscriberActivity($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleWalletSubscribersApi->fetchGoogleWalletSubscriberActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |

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

## `fetchGoogleWalletSubscribers()`

```php
fetchGoogleWalletSubscribers($start_date_time, $end_date_time): mixed[]
```

Get all subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GoogleWalletSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchGoogleWalletSubscribers($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleWalletSubscribersApi->fetchGoogleWalletSubscribers: ', $e->getMessage(), PHP_EOL;
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
