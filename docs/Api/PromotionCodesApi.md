# OpenAPI\Client\PromotionCodesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archivePromoCode()**](PromotionCodesApi.md#archivePromoCode) | **DELETE** /v2/promoCodes/{id} | Archive promo code
[**createPromoCode()**](PromotionCodesApi.md#createPromoCode) | **POST** /v2/promoCodes | Create promo code
[**fetchAllPromoCodes()**](PromotionCodesApi.md#fetchAllPromoCodes) | **GET** /v2/promoCodes/all | Fetch all promo codes
[**restorePromoCode()**](PromotionCodesApi.md#restorePromoCode) | **PATCH** /v2/promoCodes/{id} | Restore promo code
[**updatePromoCode()**](PromotionCodesApi.md#updatePromoCode) | **PUT** /v2/promoCodes/{id} | Update promo code


## `archivePromoCode()`

```php
archivePromoCode($id): \OpenAPI\Client\Model\PromoCode
```

Archive promo code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archivePromoCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodesApi->archivePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\PromoCode**](../Model/PromoCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromoCode()`

```php
createPromoCode($wt_promo_code_create_params): \OpenAPI\Client\Model\PromoCode
```

Create promo code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_promo_code_create_params = new \OpenAPI\Client\Model\WTPromoCodeCreateParams(); // \OpenAPI\Client\Model\WTPromoCodeCreateParams

try {
    $result = $apiInstance->createPromoCode($wt_promo_code_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodesApi->createPromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_promo_code_create_params** | [**\OpenAPI\Client\Model\WTPromoCodeCreateParams**](../Model/WTPromoCodeCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\PromoCode**](../Model/PromoCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPromoCodes()`

```php
fetchAllPromoCodes($is_archive_included): mixed
```

Fetch all promo codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPromoCodes($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodesApi->fetchAllPromoCodes: ', $e->getMessage(), PHP_EOL;
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

## `restorePromoCode()`

```php
restorePromoCode($id): \OpenAPI\Client\Model\PromoCode
```

Restore promo code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restorePromoCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodesApi->restorePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\PromoCode**](../Model/PromoCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromoCode()`

```php
updatePromoCode($id, $wt_promo_code_update_params): \OpenAPI\Client\Model\PromoCode
```

Update promo code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_promo_code_update_params = new \OpenAPI\Client\Model\WTPromoCodeUpdateParams(); // \OpenAPI\Client\Model\WTPromoCodeUpdateParams

try {
    $result = $apiInstance->updatePromoCode($id, $wt_promo_code_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodesApi->updatePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_promo_code_update_params** | [**\OpenAPI\Client\Model\WTPromoCodeUpdateParams**](../Model/WTPromoCodeUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\PromoCode**](../Model/PromoCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
