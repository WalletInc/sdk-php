# OpenAPI\Client\CountriesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchAllCountries()**](CountriesApi.md#fetchAllCountries) | **GET** /system/countries/all | Fetch all countries |


## `fetchAllCountries()`

```php
fetchAllCountries(): \OpenAPI\Client\Model\FetchAllCountries200ResponseInner[]
```

Fetch all countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchAllCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->fetchAllCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FetchAllCountries200ResponseInner[]**](../Model/FetchAllCountries200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
