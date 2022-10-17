# OpenAPI\Client\UtilitiesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentPrefixes()**](UtilitiesApi.md#getPaymentPrefixes) | **GET** /v2/payment/prefixes | Get payment prefixes


## `getPaymentPrefixes()`

```php
getPaymentPrefixes(): \OpenAPI\Client\Model\PaymentPrefixes
```

Get payment prefixes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPaymentPrefixes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->getPaymentPrefixes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PaymentPrefixes**](../Model/PaymentPrefixes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
