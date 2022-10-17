# OpenAPI\Client\WixTerminalApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchWalletItemFromWixTerminal()**](WixTerminalApi.md#fetchWalletItemFromWixTerminal) | **GET** /v2/pos/wix/item/{itemID} | Fetch item
[**redeemWalletItemFromWixTerminal()**](WixTerminalApi.md#redeemWalletItemFromWixTerminal) | **POST** /v2/pos/wix/item/redeem/{itemID} | Redeem item
[**refundWalletItemFromWixTerminal()**](WixTerminalApi.md#refundWalletItemFromWixTerminal) | **POST** /v2/pos/wix/item/refund/{ledgerEntryID} | Refund transaction


## `fetchWalletItemFromWixTerminal()`

```php
fetchWalletItemFromWixTerminal($item_id): mixed
```

Fetch item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WixTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchWalletItemFromWixTerminal($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WixTerminalApi->fetchWalletItemFromWixTerminal: ', $e->getMessage(), PHP_EOL;
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

## `redeemWalletItemFromWixTerminal()`

```php
redeemWalletItemFromWixTerminal($item_id, $wt_wallet_item_redemption): mixed
```

Redeem item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WixTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$wt_wallet_item_redemption = new \OpenAPI\Client\Model\WTWalletItemRedemption(); // \OpenAPI\Client\Model\WTWalletItemRedemption

try {
    $result = $apiInstance->redeemWalletItemFromWixTerminal($item_id, $wt_wallet_item_redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WixTerminalApi->redeemWalletItemFromWixTerminal: ', $e->getMessage(), PHP_EOL;
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

## `refundWalletItemFromWixTerminal()`

```php
refundWalletItemFromWixTerminal($ledger_entry_id): mixed
```

Refund transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WixTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger_entry_id = 'ledger_entry_id_example'; // string

try {
    $result = $apiInstance->refundWalletItemFromWixTerminal($ledger_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WixTerminalApi->refundWalletItemFromWixTerminal: ', $e->getMessage(), PHP_EOL;
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
