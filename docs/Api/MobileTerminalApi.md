# OpenAPI\Client\MobileTerminalApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchWalletItemFromMobileTerminal()**](MobileTerminalApi.md#fetchWalletItemFromMobileTerminal) | **GET** /v2/pos/mobile/item/{itemID} | Fetch item |
| [**findMemberByID()**](MobileTerminalApi.md#findMemberByID) | **GET** /v2/pos/mobile/member/{memberID} | Find member |
| [**redeemWalletItemFromMobileTerminal()**](MobileTerminalApi.md#redeemWalletItemFromMobileTerminal) | **POST** /v2/pos/mobile/item/redeem/{itemID} | Redeem item |


## `fetchWalletItemFromMobileTerminal()`

```php
fetchWalletItemFromMobileTerminal($item_id): mixed
```

Fetch item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MobileTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchWalletItemFromMobileTerminal($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileTerminalApi->fetchWalletItemFromMobileTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |

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

## `findMemberByID()`

```php
findMemberByID($member_id): \OpenAPI\Client\Model\Member
```

Find member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MobileTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_id = 'member_id_example'; // string

try {
    $result = $apiInstance->findMemberByID($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileTerminalApi->findMemberByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Member**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemWalletItemFromMobileTerminal()`

```php
redeemWalletItemFromMobileTerminal($item_id, $wt_wallet_item_redemption): mixed
```

Redeem item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MobileTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$wt_wallet_item_redemption = new \OpenAPI\Client\Model\WTWalletItemRedemption(); // \OpenAPI\Client\Model\WTWalletItemRedemption

try {
    $result = $apiInstance->redeemWalletItemFromMobileTerminal($item_id, $wt_wallet_item_redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileTerminalApi->redeemWalletItemFromMobileTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **wt_wallet_item_redemption** | [**\OpenAPI\Client\Model\WTWalletItemRedemption**](../Model/WTWalletItemRedemption.md)|  | |

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
