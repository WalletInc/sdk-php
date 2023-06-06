# OpenAPI\Client\RoomRatesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveRoomRate()**](RoomRatesApi.md#archiveRoomRate) | **DELETE** /v2/roomRates/{id} | Archive room rate
[**createRoomRate()**](RoomRatesApi.md#createRoomRate) | **POST** /v2/roomRates | Create room rate
[**fetchAllRoomRates()**](RoomRatesApi.md#fetchAllRoomRates) | **GET** /v2/roomRates/all | Fetch all room rates
[**restoreRoomRate()**](RoomRatesApi.md#restoreRoomRate) | **PATCH** /v2/roomRates/{id} | Restore room rate
[**updateRoomRate()**](RoomRatesApi.md#updateRoomRate) | **PUT** /v2/roomRates/{id} | Update room rate


## `archiveRoomRate()`

```php
archiveRoomRate($id): \OpenAPI\Client\Model\RoomRate
```

Archive room rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveRoomRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->archiveRoomRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoomRate**](../Model/RoomRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoomRate()`

```php
createRoomRate($wt_room_rate_create_params): \OpenAPI\Client\Model\RoomRate
```

Create room rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_room_rate_create_params = new \OpenAPI\Client\Model\WTRoomRateCreateParams(); // \OpenAPI\Client\Model\WTRoomRateCreateParams

try {
    $result = $apiInstance->createRoomRate($wt_room_rate_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->createRoomRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_room_rate_create_params** | [**\OpenAPI\Client\Model\WTRoomRateCreateParams**](../Model/WTRoomRateCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoomRate**](../Model/RoomRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllRoomRates()`

```php
fetchAllRoomRates($is_archive_included): mixed
```

Fetch all room rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllRoomRates($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->fetchAllRoomRates: ', $e->getMessage(), PHP_EOL;
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

## `restoreRoomRate()`

```php
restoreRoomRate($id): \OpenAPI\Client\Model\RoomRate
```

Restore room rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreRoomRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->restoreRoomRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoomRate**](../Model/RoomRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoomRate()`

```php
updateRoomRate($id, $wt_room_rate_update_params): \OpenAPI\Client\Model\RoomRate
```

Update room rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_room_rate_update_params = new \OpenAPI\Client\Model\WTRoomRateUpdateParams(); // \OpenAPI\Client\Model\WTRoomRateUpdateParams

try {
    $result = $apiInstance->updateRoomRate($id, $wt_room_rate_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->updateRoomRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_room_rate_update_params** | [**\OpenAPI\Client\Model\WTRoomRateUpdateParams**](../Model/WTRoomRateUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoomRate**](../Model/RoomRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
