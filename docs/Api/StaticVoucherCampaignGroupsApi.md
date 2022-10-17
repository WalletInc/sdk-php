# OpenAPI\Client\StaticVoucherCampaignGroupsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchStaticVoucherCampaignGroups()**](StaticVoucherCampaignGroupsApi.md#fetchStaticVoucherCampaignGroups) | **GET** /v2/payment/staticVoucherCampaignGroups/campaigns/{campaignsGroupID} | Fetch all campaigns


## `fetchStaticVoucherCampaignGroups()`

```php
fetchStaticVoucherCampaignGroups($campaigns_group_id): object
```

Fetch all campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaticVoucherCampaignGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaigns_group_id = NULL; // mixed

try {
    $result = $apiInstance->fetchStaticVoucherCampaignGroups($campaigns_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticVoucherCampaignGroupsApi->fetchStaticVoucherCampaignGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaigns_group_id** | [**mixed**](../Model/.md)|  |

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
