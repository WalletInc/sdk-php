# OpenAPI\Client\IndustriesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAllIndustries()**](IndustriesApi.md#fetchAllIndustries) | **GET** /system/industries/all | Fetch all industries
[**fetchDomainsByIndustry()**](IndustriesApi.md#fetchDomainsByIndustry) | **GET** /system/industries/domains | Fetch all industries
[**fetchIndustriesIDs()**](IndustriesApi.md#fetchIndustriesIDs) | **GET** /system/industries/trimmed | Fetch all industries


## `fetchAllIndustries()`

```php
fetchAllIndustries(): \OpenAPI\Client\Model\InlineResponse200[]
```

Fetch all industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchAllIndustries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->fetchAllIndustries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDomainsByIndustry()`

```php
fetchDomainsByIndustry(): \OpenAPI\Client\Model\InlineResponse20011
```

Fetch all industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchDomainsByIndustry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->fetchDomainsByIndustry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchIndustriesIDs()`

```php
fetchIndustriesIDs(): mixed
```

Fetch all industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchIndustriesIDs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->fetchIndustriesIDs: ', $e->getMessage(), PHP_EOL;
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
