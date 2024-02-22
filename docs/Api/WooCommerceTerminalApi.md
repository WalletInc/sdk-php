# OpenAPI\Client\WooCommerceTerminalApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchWalletItemFromWooCommerceTerminal()**](WooCommerceTerminalApi.md#fetchWalletItemFromWooCommerceTerminal) | **GET** /v2/pos/woocommerce/item/{itemID} | Fetch item |
| [**redeemWalletItemFromWooCommerceTerminal()**](WooCommerceTerminalApi.md#redeemWalletItemFromWooCommerceTerminal) | **POST** /v2/pos/woocommerce/item/redeem/{itemID} | Redeem item |
| [**refundWalletItemFromWooCommerceTerminal()**](WooCommerceTerminalApi.md#refundWalletItemFromWooCommerceTerminal) | **POST** /v2/pos/woocommerce/item/refund/{ledgerEntryID} | Refund transaction |


## `fetchWalletItemFromWooCommerceTerminal()`

```php
fetchWalletItemFromWooCommerceTerminal($item_id): mixed
```

Fetch item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WooCommerceTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchWalletItemFromWooCommerceTerminal($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WooCommerceTerminalApi->fetchWalletItemFromWooCommerceTerminal: ', $e->getMessage(), PHP_EOL;
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

## `redeemWalletItemFromWooCommerceTerminal()`

```php
redeemWalletItemFromWooCommerceTerminal($item_id, $wt_wallet_item_redemption): mixed
```

Redeem item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WooCommerceTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$wt_wallet_item_redemption = new \OpenAPI\Client\Model\WTWalletItemRedemption(); // \OpenAPI\Client\Model\WTWalletItemRedemption

try {
    $result = $apiInstance->redeemWalletItemFromWooCommerceTerminal($item_id, $wt_wallet_item_redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WooCommerceTerminalApi->redeemWalletItemFromWooCommerceTerminal: ', $e->getMessage(), PHP_EOL;
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

## `refundWalletItemFromWooCommerceTerminal()`

```php
refundWalletItemFromWooCommerceTerminal($ledger_entry_id): mixed
```

Refund transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WooCommerceTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger_entry_id = 'ledger_entry_id_example'; // string

try {
    $result = $apiInstance->refundWalletItemFromWooCommerceTerminal($ledger_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WooCommerceTerminalApi->refundWalletItemFromWooCommerceTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger_entry_id** | **string**|  | |

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
