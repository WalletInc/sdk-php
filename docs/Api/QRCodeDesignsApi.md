# OpenAPI\Client\QRCodeDesignsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveQRCodeDesign()**](QRCodeDesignsApi.md#archiveQRCodeDesign) | **DELETE** /v2/qrcodedesign/{id} | Archive QR Code Design
[**createQRCodeDesign()**](QRCodeDesignsApi.md#createQRCodeDesign) | **POST** /v2/qrcodedesign | Create QR Code design
[**fetchAllQRCodeDesigns()**](QRCodeDesignsApi.md#fetchAllQRCodeDesigns) | **GET** /v2/qrcodedesign/all | Fetch all active QR Code Designs
[**fetchQRCodeDesignById()**](QRCodeDesignsApi.md#fetchQRCodeDesignById) | **GET** /v2/qrcodedesign/{id} | Fetch QR Code Design
[**restoreQRCodeDesign()**](QRCodeDesignsApi.md#restoreQRCodeDesign) | **PATCH** /v2/qrcodedesign/{id} | Restore payment design
[**updateQRCodeDesign()**](QRCodeDesignsApi.md#updateQRCodeDesign) | **PUT** /v2/qrcodedesign/{id} | Update QR Code Design


## `archiveQRCodeDesign()`

```php
archiveQRCodeDesign($id): \OpenAPI\Client\Model\WTQRCodeDesign
```

Archive QR Code Design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveQRCodeDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->archiveQRCodeDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTQRCodeDesign**](../Model/WTQRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createQRCodeDesign()`

```php
createQRCodeDesign($wtqr_code_design_create_params): \OpenAPI\Client\Model\WTQRCodeDesign
```

Create QR Code design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtqr_code_design_create_params = new \OpenAPI\Client\Model\WTQRCodeDesignCreateParams(); // \OpenAPI\Client\Model\WTQRCodeDesignCreateParams

try {
    $result = $apiInstance->createQRCodeDesign($wtqr_code_design_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->createQRCodeDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wtqr_code_design_create_params** | [**\OpenAPI\Client\Model\WTQRCodeDesignCreateParams**](../Model/WTQRCodeDesignCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTQRCodeDesign**](../Model/WTQRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllQRCodeDesigns()`

```php
fetchAllQRCodeDesigns($is_archive_included): \OpenAPI\Client\Model\WTQRCodeDesign[]
```

Fetch all active QR Code Designs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllQRCodeDesigns($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->fetchAllQRCodeDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTQRCodeDesign[]**](../Model/WTQRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchQRCodeDesignById()`

```php
fetchQRCodeDesignById($id): \OpenAPI\Client\Model\WTQRCodeDesign
```

Fetch QR Code Design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchQRCodeDesignById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->fetchQRCodeDesignById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTQRCodeDesign**](../Model/WTQRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreQRCodeDesign()`

```php
restoreQRCodeDesign($id): \OpenAPI\Client\Model\QRCodeDesign
```

Restore payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreQRCodeDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->restoreQRCodeDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\QRCodeDesign**](../Model/QRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateQRCodeDesign()`

```php
updateQRCodeDesign($id, $wtqr_code_design_update_params): \OpenAPI\Client\Model\WTQRCodeDesign
```

Update QR Code Design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QRCodeDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wtqr_code_design_update_params = new \OpenAPI\Client\Model\WTQRCodeDesignUpdateParams(); // \OpenAPI\Client\Model\WTQRCodeDesignUpdateParams

try {
    $result = $apiInstance->updateQRCodeDesign($id, $wtqr_code_design_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodeDesignsApi->updateQRCodeDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wtqr_code_design_update_params** | [**\OpenAPI\Client\Model\WTQRCodeDesignUpdateParams**](../Model/WTQRCodeDesignUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTQRCodeDesign**](../Model/WTQRCodeDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
