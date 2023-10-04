# OpenAPI\Client\ConfigurationApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPublicChatRoom()**](ConfigurationApi.md#createPublicChatRoom) | **POST** /v2/wallet/createPublicChatRoom | 
[**saveMerchantCreditPaymentDesign()**](ConfigurationApi.md#saveMerchantCreditPaymentDesign) | **PUT** /v2/wallet/merchantCredit/paymentDesign | Update wallet record
[**saveWalletRecord()**](ConfigurationApi.md#saveWalletRecord) | **PUT** /v2/wallet | Update wallet record


## `createPublicChatRoom()`

```php
createPublicChatRoom(): string
```



Save wallet record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createPublicChatRoom();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->createPublicChatRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveMerchantCreditPaymentDesign()`

```php
saveMerchantCreditPaymentDesign($inline_object3): mixed
```

Update wallet record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object3 = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $result = $apiInstance->saveMerchantCreditPaymentDesign($inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->saveMerchantCreditPaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

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

## `saveWalletRecord()`

```php
saveWalletRecord($wt_wallet_configuration_save_wallet_record): \OpenAPI\Client\Model\WalletConfiguration
```

Update wallet record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_wallet_configuration_save_wallet_record = new \OpenAPI\Client\Model\WTWalletConfigurationSaveWalletRecord(); // \OpenAPI\Client\Model\WTWalletConfigurationSaveWalletRecord

try {
    $result = $apiInstance->saveWalletRecord($wt_wallet_configuration_save_wallet_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->saveWalletRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_wallet_configuration_save_wallet_record** | [**\OpenAPI\Client\Model\WTWalletConfigurationSaveWalletRecord**](../Model/WTWalletConfigurationSaveWalletRecord.md)|  |

### Return type

[**\OpenAPI\Client\Model\WalletConfiguration**](../Model/WalletConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
