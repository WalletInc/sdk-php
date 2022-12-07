# OpenAPI\Client\BillingApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyAddOn()**](BillingApi.md#buyAddOn) | **POST** /v2/billing/products/addOns/{productID} | Fetch add-on products, or 1-time purchase products (non-subscription products)
[**buySpecialOffer()**](BillingApi.md#buySpecialOffer) | **POST** /v2/billing/products/specialOffers/{productID} | Buy special offer
[**cancelPlan()**](BillingApi.md#cancelPlan) | **DELETE** /v2/billing/plan | Cancel billing plan and revert to default
[**changePlan()**](BillingApi.md#changePlan) | **PUT** /v2/billing/plan | Change billing plan
[**fetchAddOns()**](BillingApi.md#fetchAddOns) | **GET** /v2/billing/products/addOns | Fetch add-on products, or 1-time purchase products (non-subscription products)
[**fetchIndustry()**](BillingApi.md#fetchIndustry) | **GET** /v2/billing/industry | Fetch merchant&#39;s industry
[**fetchInvoices()**](BillingApi.md#fetchInvoices) | **GET** /v2/billing/invoices/all | Fetch all invoices
[**fetchSpecialOffers()**](BillingApi.md#fetchSpecialOffers) | **GET** /v2/billing/products/specialOffers | Fetch special offer products
[**fetchSubscription()**](BillingApi.md#fetchSubscription) | **GET** /v2/billing/subscription | Fetch subscription
[**fetchUsageSummary()**](BillingApi.md#fetchUsageSummary) | **GET** /v2/billing/summary | Fetch usage summary
[**savePaymentMethod()**](BillingApi.md#savePaymentMethod) | **PUT** /v2/billing/paymentMethod | Save payment method
[**upcomingInvoices()**](BillingApi.md#upcomingInvoices) | **GET** /v2/billing/invoices/upcoming | Fetch upcoming invoices
[**verifyPaymentMethod()**](BillingApi.md#verifyPaymentMethod) | **GET** /v2/billing/paymentMethod | Verify payment method


## `buyAddOn()`

```php
buyAddOn($product_id): mixed
```

Fetch add-on products, or 1-time purchase products (non-subscription products)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string

try {
    $result = $apiInstance->buyAddOn($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->buyAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**|  |

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

## `buySpecialOffer()`

```php
buySpecialOffer($product_id): mixed
```

Buy special offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string

try {
    $result = $apiInstance->buySpecialOffer($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->buySpecialOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**|  |

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

## `cancelPlan()`

```php
cancelPlan(): mixed
```

Cancel billing plan and revert to default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->cancelPlan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->cancelPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `changePlan()`

```php
changePlan($wt_billing_change_plan): mixed
```

Change billing plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_billing_change_plan = new \OpenAPI\Client\Model\WTBillingChangePlan(); // \OpenAPI\Client\Model\WTBillingChangePlan

try {
    $result = $apiInstance->changePlan($wt_billing_change_plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->changePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_billing_change_plan** | [**\OpenAPI\Client\Model\WTBillingChangePlan**](../Model/WTBillingChangePlan.md)|  |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAddOns()`

```php
fetchAddOns(): mixed[]
```

Fetch add-on products, or 1-time purchase products (non-subscription products)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchAddOns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchAddOns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchIndustry()`

```php
fetchIndustry(): \OpenAPI\Client\Model\InlineResponse200
```

Fetch merchant's industry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchIndustry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchIndustry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInvoices()`

```php
fetchInvoices(): mixed
```

Fetch all invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchSpecialOffers()`

```php
fetchSpecialOffers(): mixed[]
```

Fetch special offer products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchSpecialOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchSpecialOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchSubscription()`

```php
fetchSubscription(): mixed
```

Fetch subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchSubscription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchUsageSummary()`

```php
fetchUsageSummary($start_date_time, $end_date_time): object
```

Fetch usage summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchUsageSummary($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->fetchUsageSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  | [optional]
 **end_date_time** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `savePaymentMethod()`

```php
savePaymentMethod($wt_billing_save_payment_method): mixed
```

Save payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_billing_save_payment_method = new \OpenAPI\Client\Model\WTBillingSavePaymentMethod(); // \OpenAPI\Client\Model\WTBillingSavePaymentMethod

try {
    $result = $apiInstance->savePaymentMethod($wt_billing_save_payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->savePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_billing_save_payment_method** | [**\OpenAPI\Client\Model\WTBillingSavePaymentMethod**](../Model/WTBillingSavePaymentMethod.md)|  |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upcomingInvoices()`

```php
upcomingInvoices(): mixed
```

Fetch upcoming invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->upcomingInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->upcomingInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `verifyPaymentMethod()`

```php
verifyPaymentMethod(): \OpenAPI\Client\Model\WTBillingVerifyPaymentMethodResponse
```

Verify payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->verifyPaymentMethod();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->verifyPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTBillingVerifyPaymentMethodResponse**](../Model/WTBillingVerifyPaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
