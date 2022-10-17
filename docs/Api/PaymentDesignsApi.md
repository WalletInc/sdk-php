# OpenAPI\Client\PaymentDesignsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archivePaymentDesign()**](PaymentDesignsApi.md#archivePaymentDesign) | **DELETE** /v2/payment/design/{id} | Archive payment design
[**createPaymentDesign()**](PaymentDesignsApi.md#createPaymentDesign) | **POST** /v2/payment/design | Create payment design
[**fetchAllPaymentDesigns()**](PaymentDesignsApi.md#fetchAllPaymentDesigns) | **GET** /v2/payment/design/all | Fetch all active payment designs
[**fetchPaymentDesignById()**](PaymentDesignsApi.md#fetchPaymentDesignById) | **GET** /v2/payment/design/{id} | Fetch payment design
[**restorePaymentDesign()**](PaymentDesignsApi.md#restorePaymentDesign) | **PATCH** /v2/payment/design/{id} | Restore payment design
[**updatePaymentDesign()**](PaymentDesignsApi.md#updatePaymentDesign) | **PUT** /v2/payment/design/{id} | Update payment design


## `archivePaymentDesign()`

```php
archivePaymentDesign($id): \OpenAPI\Client\Model\WTPaymentDesign
```

Archive payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archivePaymentDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->archivePaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentDesign()`

```php
createPaymentDesign($wt_payment_design_create_params): \OpenAPI\Client\Model\WTPaymentDesign
```

Create payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_payment_design_create_params = new \OpenAPI\Client\Model\WTPaymentDesignCreateParams(); // \OpenAPI\Client\Model\WTPaymentDesignCreateParams

try {
    $result = $apiInstance->createPaymentDesign($wt_payment_design_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->createPaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_payment_design_create_params** | [**\OpenAPI\Client\Model\WTPaymentDesignCreateParams**](../Model/WTPaymentDesignCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPaymentDesigns()`

```php
fetchAllPaymentDesigns($is_archive_included): \OpenAPI\Client\Model\WTPaymentDesign[]
```

Fetch all active payment designs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPaymentDesigns($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->fetchAllPaymentDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign[]**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPaymentDesignById()`

```php
fetchPaymentDesignById($id): \OpenAPI\Client\Model\WTPaymentDesign
```

Fetch payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchPaymentDesignById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->fetchPaymentDesignById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restorePaymentDesign()`

```php
restorePaymentDesign($id): \OpenAPI\Client\Model\WTPaymentDesign
```

Restore payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restorePaymentDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->restorePaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentDesign()`

```php
updatePaymentDesign($id, $wt_payment_design_update_params): \OpenAPI\Client\Model\WTPaymentDesign
```

Update payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_payment_design_update_params = new \OpenAPI\Client\Model\WTPaymentDesignUpdateParams(); // \OpenAPI\Client\Model\WTPaymentDesignUpdateParams

try {
    $result = $apiInstance->updatePaymentDesign($id, $wt_payment_design_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDesignsApi->updatePaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_payment_design_update_params** | [**\OpenAPI\Client\Model\WTPaymentDesignUpdateParams**](../Model/WTPaymentDesignUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTPaymentDesign**](../Model/WTPaymentDesign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
