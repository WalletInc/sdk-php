# OpenAPI\Client\GamingApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveGaming()**](GamingApi.md#archiveGaming) | **DELETE** /v2/gaming/{id} | Archive gaming
[**createGaming()**](GamingApi.md#createGaming) | **POST** /v2/gaming | Create gaming
[**fetchAllGaming()**](GamingApi.md#fetchAllGaming) | **GET** /v2/gaming/all | Fetch all gaming
[**restoreGaming()**](GamingApi.md#restoreGaming) | **PATCH** /v2/gaming/{id} | Restore gaming
[**updateGaming()**](GamingApi.md#updateGaming) | **PUT** /v2/gaming/{id} | Update gaming


## `archiveGaming()`

```php
archiveGaming($id): \OpenAPI\Client\Model\Gaming
```

Archive gaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveGaming($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamingApi->archiveGaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Gaming**](../Model/Gaming.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGaming()`

```php
createGaming($wt_gaming_create_params): \OpenAPI\Client\Model\Gaming
```

Create gaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_gaming_create_params = new \OpenAPI\Client\Model\WTGamingCreateParams(); // \OpenAPI\Client\Model\WTGamingCreateParams

try {
    $result = $apiInstance->createGaming($wt_gaming_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamingApi->createGaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_gaming_create_params** | [**\OpenAPI\Client\Model\WTGamingCreateParams**](../Model/WTGamingCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Gaming**](../Model/Gaming.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllGaming()`

```php
fetchAllGaming($is_archive_included): mixed
```

Fetch all gaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllGaming($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamingApi->fetchAllGaming: ', $e->getMessage(), PHP_EOL;
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

## `restoreGaming()`

```php
restoreGaming($id): \OpenAPI\Client\Model\Gaming
```

Restore gaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreGaming($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamingApi->restoreGaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Gaming**](../Model/Gaming.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGaming()`

```php
updateGaming($id, $wt_gaming_update_params): \OpenAPI\Client\Model\Gaming
```

Update gaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_gaming_update_params = new \OpenAPI\Client\Model\WTGamingUpdateParams(); // \OpenAPI\Client\Model\WTGamingUpdateParams

try {
    $result = $apiInstance->updateGaming($id, $wt_gaming_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamingApi->updateGaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_gaming_update_params** | [**\OpenAPI\Client\Model\WTGamingUpdateParams**](../Model/WTGamingUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Gaming**](../Model/Gaming.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
