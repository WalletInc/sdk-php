# OpenAPI\Client\LoungeApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLounge()**](LoungeApi.md#archiveLounge) | **DELETE** /v2/lounge/{id} | Archive Lounge |
| [**createLounge()**](LoungeApi.md#createLounge) | **POST** /v2/lounge | Create Lounge |
| [**fetchAllLounge()**](LoungeApi.md#fetchAllLounge) | **GET** /v2/lounge/all | Get all Lounges |
| [**restoreLounge()**](LoungeApi.md#restoreLounge) | **PATCH** /v2/lounge/{id} | Restore Lounge |
| [**updateLounge()**](LoungeApi.md#updateLounge) | **PUT** /v2/lounge/{id} | Update Lounge |


## `archiveLounge()`

```php
archiveLounge($id): \OpenAPI\Client\Model\Lounge
```

Archive Lounge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoungeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveLounge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoungeApi->archiveLounge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Lounge**](../Model/Lounge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLounge()`

```php
createLounge($wt_lounge_create_params): \OpenAPI\Client\Model\Lounge
```

Create Lounge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoungeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_lounge_create_params = new \OpenAPI\Client\Model\WTLoungeCreateParams(); // \OpenAPI\Client\Model\WTLoungeCreateParams

try {
    $result = $apiInstance->createLounge($wt_lounge_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoungeApi->createLounge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_lounge_create_params** | [**\OpenAPI\Client\Model\WTLoungeCreateParams**](../Model/WTLoungeCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Lounge**](../Model/Lounge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllLounge()`

```php
fetchAllLounge($is_archive_included): mixed
```

Get all Lounges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoungeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllLounge($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoungeApi->fetchAllLounge: ', $e->getMessage(), PHP_EOL;
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

## `restoreLounge()`

```php
restoreLounge($id): \OpenAPI\Client\Model\Lounge
```

Restore Lounge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoungeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreLounge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoungeApi->restoreLounge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Lounge**](../Model/Lounge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLounge()`

```php
updateLounge($id, $wt_lounge_update_params): \OpenAPI\Client\Model\Lounge
```

Update Lounge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoungeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_lounge_update_params = new \OpenAPI\Client\Model\WTLoungeUpdateParams(); // \OpenAPI\Client\Model\WTLoungeUpdateParams

try {
    $result = $apiInstance->updateLounge($id, $wt_lounge_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoungeApi->updateLounge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_lounge_update_params** | [**\OpenAPI\Client\Model\WTLoungeUpdateParams**](../Model/WTLoungeUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Lounge**](../Model/Lounge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
