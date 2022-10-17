# OpenAPI\Client\IndustriesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAllIndustries()**](IndustriesApi.md#fetchAllIndustries) | **GET** /system/industries/all | Fetch all industries


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
