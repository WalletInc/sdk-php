# OpenAPI\Client\WebTerminalApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchWalletItemFromWebTerminal()**](WebTerminalApi.md#fetchWalletItemFromWebTerminal) | **GET** /v2/pos/web/item/{itemID} | Fetch item |
| [**redeemWalletItemFromWebTerminal()**](WebTerminalApi.md#redeemWalletItemFromWebTerminal) | **POST** /v2/pos/web/item/redeem/{itemID} | Redeem item |
| [**refundWalletItemFromWebTerminal()**](WebTerminalApi.md#refundWalletItemFromWebTerminal) | **POST** /v2/pos/web/item/refund/{ledgerEntryID} | Refund transaction |


## `fetchWalletItemFromWebTerminal()`

```php
fetchWalletItemFromWebTerminal($item_id): mixed
```

Fetch item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchWalletItemFromWebTerminal($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTerminalApi->fetchWalletItemFromWebTerminal: ', $e->getMessage(), PHP_EOL;
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

## `redeemWalletItemFromWebTerminal()`

```php
redeemWalletItemFromWebTerminal($item_id, $wt_wallet_item_redemption): mixed
```

Redeem item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$wt_wallet_item_redemption = new \OpenAPI\Client\Model\WTWalletItemRedemption(); // \OpenAPI\Client\Model\WTWalletItemRedemption

try {
    $result = $apiInstance->redeemWalletItemFromWebTerminal($item_id, $wt_wallet_item_redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTerminalApi->redeemWalletItemFromWebTerminal: ', $e->getMessage(), PHP_EOL;
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

## `refundWalletItemFromWebTerminal()`

```php
refundWalletItemFromWebTerminal($ledger_entry_id): mixed
```

Refund transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger_entry_id = 'ledger_entry_id_example'; // string

try {
    $result = $apiInstance->refundWalletItemFromWebTerminal($ledger_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebTerminalApi->refundWalletItemFromWebTerminal: ', $e->getMessage(), PHP_EOL;
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
