# OpenAPI\Client\ShopifyTerminalApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchWalletItemFromShopifyTerminal()**](ShopifyTerminalApi.md#fetchWalletItemFromShopifyTerminal) | **GET** /v2/pos/shopify/item/{itemID} | Fetch item
[**redeemWalletItemFromShopifyTerminal()**](ShopifyTerminalApi.md#redeemWalletItemFromShopifyTerminal) | **POST** /v2/pos/shopify/item/redeem/{itemID} | Redeem item
[**refundWalletItemFromShopifyTerminal()**](ShopifyTerminalApi.md#refundWalletItemFromShopifyTerminal) | **POST** /v2/pos/shopify/item/refund/{ledgerEntryID} | Refund transaction


## `fetchWalletItemFromShopifyTerminal()`

```php
fetchWalletItemFromShopifyTerminal($item_id): mixed
```

Fetch item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShopifyTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchWalletItemFromShopifyTerminal($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyTerminalApi->fetchWalletItemFromShopifyTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |

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

## `redeemWalletItemFromShopifyTerminal()`

```php
redeemWalletItemFromShopifyTerminal($item_id, $wt_wallet_item_redemption): mixed
```

Redeem item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShopifyTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$wt_wallet_item_redemption = new \OpenAPI\Client\Model\WTWalletItemRedemption(); // \OpenAPI\Client\Model\WTWalletItemRedemption

try {
    $result = $apiInstance->redeemWalletItemFromShopifyTerminal($item_id, $wt_wallet_item_redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyTerminalApi->redeemWalletItemFromShopifyTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **wt_wallet_item_redemption** | [**\OpenAPI\Client\Model\WTWalletItemRedemption**](../Model/WTWalletItemRedemption.md)|  |

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

## `refundWalletItemFromShopifyTerminal()`

```php
refundWalletItemFromShopifyTerminal($ledger_entry_id): mixed
```

Refund transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShopifyTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger_entry_id = 'ledger_entry_id_example'; // string

try {
    $result = $apiInstance->refundWalletItemFromShopifyTerminal($ledger_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyTerminalApi->refundWalletItemFromShopifyTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger_entry_id** | **string**|  |

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
