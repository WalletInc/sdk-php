# OpenAPI\Client\AmenitiesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveAmenity()**](AmenitiesApi.md#archiveAmenity) | **DELETE** /v2/amenities/{id} | Archive amenity |
| [**createAmenity()**](AmenitiesApi.md#createAmenity) | **POST** /v2/amenities | Create amenity |
| [**fetchAllAmenities()**](AmenitiesApi.md#fetchAllAmenities) | **GET** /v2/amenities/all | Fetch all amenities |
| [**restoreAmenity()**](AmenitiesApi.md#restoreAmenity) | **PATCH** /v2/amenities/{id} | Restore amenity |
| [**updateAmenity()**](AmenitiesApi.md#updateAmenity) | **PUT** /v2/amenities/{id} | Update amenity |


## `archiveAmenity()`

```php
archiveAmenity($id): \OpenAPI\Client\Model\Amenity
```

Archive amenity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmenitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveAmenity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmenitiesApi->archiveAmenity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Amenity**](../Model/Amenity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAmenity()`

```php
createAmenity($wt_amenity_create_params): \OpenAPI\Client\Model\Amenity
```

Create amenity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmenitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_amenity_create_params = new \OpenAPI\Client\Model\WTAmenityCreateParams(); // \OpenAPI\Client\Model\WTAmenityCreateParams

try {
    $result = $apiInstance->createAmenity($wt_amenity_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmenitiesApi->createAmenity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_amenity_create_params** | [**\OpenAPI\Client\Model\WTAmenityCreateParams**](../Model/WTAmenityCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Amenity**](../Model/Amenity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllAmenities()`

```php
fetchAllAmenities($is_archive_included): mixed
```

Fetch all amenities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmenitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllAmenities($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmenitiesApi->fetchAllAmenities: ', $e->getMessage(), PHP_EOL;
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

## `restoreAmenity()`

```php
restoreAmenity($id): \OpenAPI\Client\Model\Amenity
```

Restore amenity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmenitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreAmenity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmenitiesApi->restoreAmenity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Amenity**](../Model/Amenity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAmenity()`

```php
updateAmenity($id, $wt_amenity_update_params): \OpenAPI\Client\Model\Amenity
```

Update amenity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AmenitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_amenity_update_params = new \OpenAPI\Client\Model\WTAmenityUpdateParams(); // \OpenAPI\Client\Model\WTAmenityUpdateParams

try {
    $result = $apiInstance->updateAmenity($id, $wt_amenity_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmenitiesApi->updateAmenity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |
| **wt_amenity_update_params** | [**\OpenAPI\Client\Model\WTAmenityUpdateParams**](../Model/WTAmenityUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Amenity**](../Model/Amenity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
