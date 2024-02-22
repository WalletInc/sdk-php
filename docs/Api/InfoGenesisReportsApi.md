# OpenAPI\Client\InfoGenesisReportsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countAdCreditsRedemptions()**](InfoGenesisReportsApi.md#countAdCreditsRedemptions) | **POST** /v2/pos/infogenesis/count/adCredits/redemptions | Count redeemed ad credits |
| [**countAdCreditsRefunds()**](InfoGenesisReportsApi.md#countAdCreditsRefunds) | **POST** /v2/pos/infogenesis/count/adCredits/refunds | Count refunded ad credits |
| [**countDynamicVoucherRedemptions()**](InfoGenesisReportsApi.md#countDynamicVoucherRedemptions) | **POST** /v2/pos/infogenesis/count/dynamicVoucher/redemptions | Count dynamic voucher redemptions |
| [**countDynamicVoucherRefunds()**](InfoGenesisReportsApi.md#countDynamicVoucherRefunds) | **POST** /v2/pos/infogenesis/count/dynamicVoucher/refunds | Count dynamic voucher refunds |
| [**countMembershipPointsRedemptions()**](InfoGenesisReportsApi.md#countMembershipPointsRedemptions) | **POST** /v2/pos/infogenesis/count/membershipPoints/redemptions | Count redeemed membership points |
| [**countMembershipPointsRefunds()**](InfoGenesisReportsApi.md#countMembershipPointsRefunds) | **POST** /v2/pos/infogenesis/count/membershipPoints/refunds | Count refunded membership points |
| [**countMembershipTierRedemptions()**](InfoGenesisReportsApi.md#countMembershipTierRedemptions) | **POST** /v2/pos/infogenesis/count/membershipTier/redemptions | Count tier redemptions |
| [**countMembershipTierRefunds()**](InfoGenesisReportsApi.md#countMembershipTierRefunds) | **POST** /v2/pos/infogenesis/count/membershipTier/refunds | Count tier refunds |
| [**countMerchantCreditRedemptions()**](InfoGenesisReportsApi.md#countMerchantCreditRedemptions) | **POST** /v2/pos/infogenesis/count/merchantCredit/redemptions | Count redeemed merchant credits |
| [**countMerchantCreditRefunds()**](InfoGenesisReportsApi.md#countMerchantCreditRefunds) | **POST** /v2/pos/infogenesis/count/merchantCredit/refunds | Count refunded merchant credits |
| [**countStaticVoucherRedemptions()**](InfoGenesisReportsApi.md#countStaticVoucherRedemptions) | **POST** /v2/pos/infogenesis/count/staticVoucher/redemptions | Count static voucher redemptions |
| [**countStaticVoucherRefunds()**](InfoGenesisReportsApi.md#countStaticVoucherRefunds) | **POST** /v2/pos/infogenesis/count/staticVoucher/refunds | Count static voucher refunds |
| [**fetchInfoGenesisAuthorizations()**](InfoGenesisReportsApi.md#fetchInfoGenesisAuthorizations) | **POST** /v2/pos/infogenesis/authorizations | Fetch InfoGenesis authorizations |
| [**fetchInfoGenesisCampaignData()**](InfoGenesisReportsApi.md#fetchInfoGenesisCampaignData) | **POST** /v2/pos/infogenesis/campaign | Fetch campaign information |
| [**fetchInfoGenesisLookupRequests()**](InfoGenesisReportsApi.md#fetchInfoGenesisLookupRequests) | **POST** /v2/pos/infogenesis/requests/lookup | Fetch InfoGenesis lookup requests |
| [**fetchInfoGenesisLookupRequestsErrors()**](InfoGenesisReportsApi.md#fetchInfoGenesisLookupRequestsErrors) | **POST** /v2/pos/infogenesis/requests/lookup/errors | Fetch InfoGenesis lookup request errors |
| [**fetchInfoGenesisRedeemedStaticVouchers()**](InfoGenesisReportsApi.md#fetchInfoGenesisRedeemedStaticVouchers) | **POST** /v2/pos/infogenesis/staticVouchers/redeemed | Fetch redeemed static vouchers |
| [**fetchInfoGenesisRedeemedUniquePostingIDs()**](InfoGenesisReportsApi.md#fetchInfoGenesisRedeemedUniquePostingIDs) | **GET** /v2/pos/infogenesis/postingIDs/redeemed | Fetch redeemed InfoGenesis unique posting IDs |
| [**fetchInfoGenesisRedemptions()**](InfoGenesisReportsApi.md#fetchInfoGenesisRedemptions) | **POST** /v2/pos/infogenesis/redemptions | Fetch InfoGenesis redemptions |
| [**fetchInfoGenesisRefundedRoutingIDs()**](InfoGenesisReportsApi.md#fetchInfoGenesisRefundedRoutingIDs) | **POST** /v2/pos/infogenesis/routingIDs/refunded | Fetch refunded InfoGenesis unique posting IDs |
| [**fetchInfoGenesisRefundedStaticVouchers()**](InfoGenesisReportsApi.md#fetchInfoGenesisRefundedStaticVouchers) | **POST** /v2/pos/infogenesis/staticVouchers/refunded | Fetch refunded static vouchers |
| [**fetchInfoGenesisRefunds()**](InfoGenesisReportsApi.md#fetchInfoGenesisRefunds) | **POST** /v2/pos/infogenesis/refunds | Fetch InfoGenesis refunds |
| [**fetchInfoGenesisRequest()**](InfoGenesisReportsApi.md#fetchInfoGenesisRequest) | **GET** /v2/pos/infogenesis/request/{transactionID} | Fetch InfoGenesis request with transaction ID |
| [**fetchInfoGenesisRequests()**](InfoGenesisReportsApi.md#fetchInfoGenesisRequests) | **POST** /v2/pos/infogenesis/requests | Fetch InfoGenesis requests with routing IDs |
| [**fetchInfoGenesisResponseErrors()**](InfoGenesisReportsApi.md#fetchInfoGenesisResponseErrors) | **GET** /v2/pos/infogenesis/responses/errors | Fetch InfoGenesis response errors |
| [**fetchInfoGenesisResponses()**](InfoGenesisReportsApi.md#fetchInfoGenesisResponses) | **POST** /v2/pos/infogenesis/responses | Fetch InfoGenesis responses with routing IDs |
| [**fetchInfoGenesisTransactionsWithUniquePostingIDs()**](InfoGenesisReportsApi.md#fetchInfoGenesisTransactionsWithUniquePostingIDs) | **POST** /v2/pos/infogenesis/transactions | Fetch InfoGenesis transactions |


## `countAdCreditsRedemptions()`

```php
countAdCreditsRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count redeemed ad credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countAdCreditsRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countAdCreditsRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAdCreditsRefunds()`

```php
countAdCreditsRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count refunded ad credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countAdCreditsRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countAdCreditsRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countDynamicVoucherRedemptions()`

```php
countDynamicVoucherRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count dynamic voucher redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countDynamicVoucherRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countDynamicVoucherRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countDynamicVoucherRefunds()`

```php
countDynamicVoucherRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count dynamic voucher refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countDynamicVoucherRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countDynamicVoucherRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMembershipPointsRedemptions()`

```php
countMembershipPointsRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count redeemed membership points

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMembershipPointsRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMembershipPointsRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMembershipPointsRefunds()`

```php
countMembershipPointsRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count refunded membership points

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMembershipPointsRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMembershipPointsRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMembershipTierRedemptions()`

```php
countMembershipTierRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count tier redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMembershipTierRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMembershipTierRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMembershipTierRefunds()`

```php
countMembershipTierRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count tier refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMembershipTierRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMembershipTierRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMerchantCreditRedemptions()`

```php
countMerchantCreditRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count redeemed merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMerchantCreditRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMerchantCreditRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMerchantCreditRefunds()`

```php
countMerchantCreditRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count refunded merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countMerchantCreditRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countMerchantCreditRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countStaticVoucherRedemptions()`

```php
countStaticVoucherRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count static voucher redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countStaticVoucherRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countStaticVoucherRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countStaticVoucherRefunds()`

```php
countStaticVoucherRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\WTCountResult
```

Count static voucher refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->countStaticVoucherRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->countStaticVoucherRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisAuthorizations()`

```php
fetchInfoGenesisAuthorizations($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis authorizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->fetchInfoGenesisAuthorizations($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisAuthorizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisCampaignData()`

```php
fetchInfoGenesisCampaignData($wt_info_genesis_record_filter_parameters): bool
```

Fetch campaign information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->fetchInfoGenesisCampaignData($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisCampaignData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisLookupRequests()`

```php
fetchInfoGenesisLookupRequests($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis lookup requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->fetchInfoGenesisLookupRequests($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisLookupRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisLookupRequestsErrors()`

```php
fetchInfoGenesisLookupRequestsErrors($wt_info_genesis_lookup_request_errors): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis lookup request errors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_lookup_request_errors = new \OpenAPI\Client\Model\WTInfoGenesisLookupRequestErrors(); // \OpenAPI\Client\Model\WTInfoGenesisLookupRequestErrors

try {
    $result = $apiInstance->fetchInfoGenesisLookupRequestsErrors($wt_info_genesis_lookup_request_errors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisLookupRequestsErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_lookup_request_errors** | [**\OpenAPI\Client\Model\WTInfoGenesisLookupRequestErrors**](../Model/WTInfoGenesisLookupRequestErrors.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRedeemedStaticVouchers()`

```php
fetchInfoGenesisRedeemedStaticVouchers($wt_info_genesis_unique_posting_ids): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch redeemed static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_unique_posting_ids = new \OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs(); // \OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs

try {
    $result = $apiInstance->fetchInfoGenesisRedeemedStaticVouchers($wt_info_genesis_unique_posting_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRedeemedStaticVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_unique_posting_ids** | [**\OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs**](../Model/WTInfoGenesisUniquePostingIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRedeemedUniquePostingIDs()`

```php
fetchInfoGenesisRedeemedUniquePostingIDs($start_date_time, $end_date_time): mixed[]
```

Fetch redeemed InfoGenesis unique posting IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchInfoGenesisRedeemedUniquePostingIDs($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRedeemedUniquePostingIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRedemptions()`

```php
fetchInfoGenesisRedemptions($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->fetchInfoGenesisRedemptions($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRefundedRoutingIDs()`

```php
fetchInfoGenesisRefundedRoutingIDs($start_date_time, $end_date_time): mixed[]
```

Fetch refunded InfoGenesis unique posting IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchInfoGenesisRefundedRoutingIDs($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRefundedRoutingIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRefundedStaticVouchers()`

```php
fetchInfoGenesisRefundedStaticVouchers($wt_info_genesis_routing_ids): \OpenAPI\Client\Model\StaticVoucher[]
```

Fetch refunded static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_routing_ids = new \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs(); // \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs

try {
    $result = $apiInstance->fetchInfoGenesisRefundedStaticVouchers($wt_info_genesis_routing_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRefundedStaticVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_routing_ids** | [**\OpenAPI\Client\Model\WTInfoGenesisRoutingIDs**](../Model/WTInfoGenesisRoutingIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StaticVoucher[]**](../Model/StaticVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRefunds()`

```php
fetchInfoGenesisRefunds($wt_info_genesis_record_filter_parameters): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_record_filter_parameters = new \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters(); // \OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters

try {
    $result = $apiInstance->fetchInfoGenesisRefunds($wt_info_genesis_record_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_record_filter_parameters** | [**\OpenAPI\Client\Model\WTInfoGenesisRecordFilterParameters**](../Model/WTInfoGenesisRecordFilterParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRequest()`

```php
fetchInfoGenesisRequest($transaction_id): \OpenAPI\Client\Model\Request
```

Fetch InfoGenesis request with transaction ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->fetchInfoGenesisRequest($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Request**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisRequests()`

```php
fetchInfoGenesisRequests($wt_info_genesis_routing_ids): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis requests with routing IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_routing_ids = new \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs(); // \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs

try {
    $result = $apiInstance->fetchInfoGenesisRequests($wt_info_genesis_routing_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_routing_ids** | [**\OpenAPI\Client\Model\WTInfoGenesisRoutingIDs**](../Model/WTInfoGenesisRoutingIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisResponseErrors()`

```php
fetchInfoGenesisResponseErrors($start_date_time, $end_date_time): \OpenAPI\Client\Model\Response[]
```

Fetch InfoGenesis response errors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchInfoGenesisResponseErrors($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisResponseErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\Response[]**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisResponses()`

```php
fetchInfoGenesisResponses($wt_info_genesis_routing_ids): \OpenAPI\Client\Model\Response[]
```

Fetch InfoGenesis responses with routing IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_routing_ids = new \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs(); // \OpenAPI\Client\Model\WTInfoGenesisRoutingIDs

try {
    $result = $apiInstance->fetchInfoGenesisResponses($wt_info_genesis_routing_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisResponses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_routing_ids** | [**\OpenAPI\Client\Model\WTInfoGenesisRoutingIDs**](../Model/WTInfoGenesisRoutingIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Response[]**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInfoGenesisTransactionsWithUniquePostingIDs()`

```php
fetchInfoGenesisTransactionsWithUniquePostingIDs($wt_info_genesis_unique_posting_ids): \OpenAPI\Client\Model\Request[]
```

Fetch InfoGenesis transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoGenesisReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_info_genesis_unique_posting_ids = new \OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs(); // \OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs

try {
    $result = $apiInstance->fetchInfoGenesisTransactionsWithUniquePostingIDs($wt_info_genesis_unique_posting_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoGenesisReportsApi->fetchInfoGenesisTransactionsWithUniquePostingIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_info_genesis_unique_posting_ids** | [**\OpenAPI\Client\Model\WTInfoGenesisUniquePostingIDs**](../Model/WTInfoGenesisUniquePostingIDs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Request[]**](../Model/Request.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
