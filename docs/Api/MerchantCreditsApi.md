# OpenAPI\Client\MerchantCreditsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMerchantCredit()**](MerchantCreditsApi.md#archiveMerchantCredit) | **DELETE** /v2/payment/merchantcredit/{id} | Archive Merchant Credit |
| [**createMerchantCredit()**](MerchantCreditsApi.md#createMerchantCredit) | **POST** /v2/payment/merchantcredit | Create Merchant Credit |
| [**fetchMerchantCreditById()**](MerchantCreditsApi.md#fetchMerchantCreditById) | **GET** /v2/payment/merchantcredit/{id} | Get Merchant Credit |
| [**fetchMerchantCreditCount()**](MerchantCreditsApi.md#fetchMerchantCreditCount) | **GET** /v2/payment/merchantcredit/count | Count all Merchant Credits |
| [**fetchMerchantCreditHistoryLog()**](MerchantCreditsApi.md#fetchMerchantCreditHistoryLog) | **POST** /v2/payment/merchantcredit/history/log | Get history |
| [**fetchMerchantCreditRedemptionLog()**](MerchantCreditsApi.md#fetchMerchantCreditRedemptionLog) | **POST** /v2/payment/merchantcredit/redemption/log | Get redemption log |
| [**fetchMerchantCreditsByPage()**](MerchantCreditsApi.md#fetchMerchantCreditsByPage) | **POST** /v2/payment/merchantcredit/page | Get Merchant Credits |
| [**restoreMerchantCredit()**](MerchantCreditsApi.md#restoreMerchantCredit) | **PATCH** /v2/payment/merchantcredit/{id} | Restore Merchant Credit |
| [**searchMerchantCredits()**](MerchantCreditsApi.md#searchMerchantCredits) | **POST** /v2/payment/merchantcredit/search | Search for Merchant Credits with Member ID |
| [**updateMerchantCredit()**](MerchantCreditsApi.md#updateMerchantCredit) | **PUT** /v2/payment/merchantcredit/{id} | Update Merchant Credit |


## `archiveMerchantCredit()`

```php
archiveMerchantCredit($id): \OpenAPI\Client\Model\WTMerchantCredit
```

Archive Merchant Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMerchantCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->archiveMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMerchantCredit()`

```php
createMerchantCredit($wt_merchant_credit_creation_params): \OpenAPI\Client\Model\WTMerchantCredit
```

Create Merchant Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_credit_creation_params = new \OpenAPI\Client\Model\WTMerchantCreditCreationParams(); // \OpenAPI\Client\Model\WTMerchantCreditCreationParams

try {
    $result = $apiInstance->createMerchantCredit($wt_merchant_credit_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->createMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_credit_creation_params** | [**\OpenAPI\Client\Model\WTMerchantCreditCreationParams**](../Model/WTMerchantCreditCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantCreditById()`

```php
fetchMerchantCreditById($id): \OpenAPI\Client\Model\WTMerchantCredit
```

Get Merchant Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMerchantCreditById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->fetchMerchantCreditById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantCreditCount()`

```php
fetchMerchantCreditCount(): \OpenAPI\Client\Model\FetchMembersCount200Response
```

Count all Merchant Credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMerchantCreditCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->fetchMerchantCreditCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FetchMembersCount200Response**](../Model/FetchMembersCount200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantCreditHistoryLog()`

```php
fetchMerchantCreditHistoryLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMerchantCreditHistoryPagination
```

Get history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMerchantCreditHistoryLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->fetchMerchantCreditHistoryLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MSMerchantCreditHistoryPagination**](../Model/MSMerchantCreditHistoryPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantCreditRedemptionLog()`

```php
fetchMerchantCreditRedemptionLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMerchantCreditRedemptionPagination
```

Get redemption log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMerchantCreditRedemptionLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->fetchMerchantCreditRedemptionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MSMerchantCreditRedemptionPagination**](../Model/MSMerchantCreditRedemptionPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchantCreditsByPage()`

```php
fetchMerchantCreditsByPage($pagination_request_with_sort_options): \OpenAPI\Client\Model\WTMerchantCredit[]
```

Get Merchant Credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithSortOptions

try {
    $result = $apiInstance->fetchMerchantCreditsByPage($pagination_request_with_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->fetchMerchantCreditsByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithSortOptions**](../Model/PaginationRequestWithSortOptions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit[]**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMerchantCredit()`

```php
restoreMerchantCredit($id): \OpenAPI\Client\Model\WTMerchantCredit
```

Restore Merchant Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMerchantCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->restoreMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMerchantCredits()`

```php
searchMerchantCredits($merchant_credit_search): \OpenAPI\Client\Model\PaginatedWTMerchantCredits
```

Search for Merchant Credits with Member ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_credit_search = new \OpenAPI\Client\Model\MerchantCreditSearch(); // \OpenAPI\Client\Model\MerchantCreditSearch

try {
    $result = $apiInstance->searchMerchantCredits($merchant_credit_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->searchMerchantCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_credit_search** | [**\OpenAPI\Client\Model\MerchantCreditSearch**](../Model/MerchantCreditSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PaginatedWTMerchantCredits**](../Model/PaginatedWTMerchantCredits.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchantCredit()`

```php
updateMerchantCredit($id, $pick_wt_merchant_credit_member_idor_credit_amount_or_mobile_number): \OpenAPI\Client\Model\WTMerchantCredit
```

Update Merchant Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$pick_wt_merchant_credit_member_idor_credit_amount_or_mobile_number = new \OpenAPI\Client\Model\PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber(); // \OpenAPI\Client\Model\PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber

try {
    $result = $apiInstance->updateMerchantCredit($id, $pick_wt_merchant_credit_member_idor_credit_amount_or_mobile_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCreditsApi->updateMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pick_wt_merchant_credit_member_idor_credit_amount_or_mobile_number** | [**\OpenAPI\Client\Model\PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber**](../Model/PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
