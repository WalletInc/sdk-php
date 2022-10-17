# OpenAPI\Client\SettingsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActiveCampaigns()**](SettingsApi.md#getActiveCampaigns) | **GET** /v2/settings/campaigns/active | Get active campaigns
[**getVouchersCount()**](SettingsApi.md#getVouchersCount) | **GET** /v2/settings/vouchers/count | Get vouchers count


## `getActiveCampaigns()`

```php
getActiveCampaigns(): \OpenAPI\Client\Model\StaticVoucherCampaign[]
```

Get active campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getActiveCampaigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getActiveCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaign[]**](../Model/StaticVoucherCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchersCount()`

```php
getVouchersCount(): \OpenAPI\Client\Model\WTCountResult
```

Get vouchers count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getVouchersCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getVouchersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
