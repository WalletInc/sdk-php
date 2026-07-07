# OpenAPI\Client\PrizesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveAdvertisementCredit()**](PrizesApi.md#archiveAdvertisementCredit) | **DELETE** /v2/payment/advertisementCredit/{id} | Archive Prize |
| [**createAdvertisementCredit()**](PrizesApi.md#createAdvertisementCredit) | **POST** /v2/payment/advertisementCredit | Create Prize |
| [**createPrizePromotion()**](PrizesApi.md#createPrizePromotion) | **POST** /v2/prizePromotions | Create a prize-game promotion Creates one instant-win promotion for the authenticated merchant. Guardrails enforced: purchase-independent trigger only, odds within (0,1], currency-valued prizes belonging to the merchant, total prize-pool value above $500 requires registration attestation, minimum age 18, and only one live promotion per game type. |
| [**fetchAdvertisementCreditById()**](PrizesApi.md#fetchAdvertisementCreditById) | **GET** /v2/payment/advertisementCredit/{id} | Get Prize |
| [**fetchAdvertisementCreditScans()**](PrizesApi.md#fetchAdvertisementCreditScans) | **GET** /v2/payment/advertisementCredit/scans/{id} | Get Prizes awarded |
| [**fetchAllAdvertisementCredits()**](PrizesApi.md#fetchAllAdvertisementCredits) | **GET** /v2/payment/advertisementCredit/all | Get all Prizes |
| [**fetchPrizePromotions()**](PrizesApi.md#fetchPrizePromotions) | **GET** /v2/prizePromotions/all | List the merchant&#39;s prize-game promotions |
| [**restoreAdvertisementCredit()**](PrizesApi.md#restoreAdvertisementCredit) | **PATCH** /v2/payment/advertisementCredit/{id} | Restore Prize |
| [**updateAdvertisementCredit()**](PrizesApi.md#updateAdvertisementCredit) | **PUT** /v2/payment/advertisementCredit/{id} | Update Prize |
| [**updatePrizePromotion()**](PrizesApi.md#updatePrizePromotion) | **PUT** /v2/prizePromotions/{promotionID} | Update a prize-game promotion Deactivate a promotion or bring its end date forward. |


## `archiveAdvertisementCredit()`

```php
archiveAdvertisementCredit($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Archive Prize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveAdvertisementCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->archiveAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdvertisementCredit()`

```php
createAdvertisementCredit($wt_advertisement_credit_create_params): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Create Prize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_advertisement_credit_create_params = new \OpenAPI\Client\Model\WTAdvertisementCreditCreateParams(); // \OpenAPI\Client\Model\WTAdvertisementCreditCreateParams

try {
    $result = $apiInstance->createAdvertisementCredit($wt_advertisement_credit_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->createAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_advertisement_credit_create_params** | [**\OpenAPI\Client\Model\WTAdvertisementCreditCreateParams**](../Model/WTAdvertisementCreditCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrizePromotion()`

```php
createPrizePromotion($wt_prize_promotion_create_params): \OpenAPI\Client\Model\WTPrizePromotion
```

Create a prize-game promotion Creates one instant-win promotion for the authenticated merchant. Guardrails enforced: purchase-independent trigger only, odds within (0,1], currency-valued prizes belonging to the merchant, total prize-pool value above $500 requires registration attestation, minimum age 18, and only one live promotion per game type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_prize_promotion_create_params = new \OpenAPI\Client\Model\WTPrizePromotionCreateParams(); // \OpenAPI\Client\Model\WTPrizePromotionCreateParams

try {
    $result = $apiInstance->createPrizePromotion($wt_prize_promotion_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->createPrizePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_prize_promotion_create_params** | [**\OpenAPI\Client\Model\WTPrizePromotionCreateParams**](../Model/WTPrizePromotionCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTPrizePromotion**](../Model/WTPrizePromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAdvertisementCreditById()`

```php
fetchAdvertisementCreditById($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Get Prize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchAdvertisementCreditById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->fetchAdvertisementCreditById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAdvertisementCreditScans()`

```php
fetchAdvertisementCreditScans($id): \OpenAPI\Client\Model\WTAdvertisementCreditScan[]
```

Get Prizes awarded

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchAdvertisementCreditScans($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->fetchAdvertisementCreditScans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCreditScan[]**](../Model/WTAdvertisementCreditScan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllAdvertisementCredits()`

```php
fetchAllAdvertisementCredits($is_archive_included): \OpenAPI\Client\Model\WTAdvertisementCredit[]
```

Get all Prizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllAdvertisementCredits($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->fetchAllAdvertisementCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit[]**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPrizePromotions()`

```php
fetchPrizePromotions(): \OpenAPI\Client\Model\WTPrizePromotion[]
```

List the merchant's prize-game promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchPrizePromotions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->fetchPrizePromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTPrizePromotion[]**](../Model/WTPrizePromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreAdvertisementCredit()`

```php
restoreAdvertisementCredit($id): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Restore Prize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreAdvertisementCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->restoreAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdvertisementCredit()`

```php
updateAdvertisementCredit($id, $wt_advertisement_credit_update_params): \OpenAPI\Client\Model\WTAdvertisementCredit
```

Update Prize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_advertisement_credit_update_params = new \OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams(); // \OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams

try {
    $result = $apiInstance->updateAdvertisementCredit($id, $wt_advertisement_credit_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->updateAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_advertisement_credit_update_params** | [**\OpenAPI\Client\Model\WTAdvertisementCreditUpdateParams**](../Model/WTAdvertisementCreditUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTAdvertisementCredit**](../Model/WTAdvertisementCredit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrizePromotion()`

```php
updatePrizePromotion($promotion_id, $wt_prize_promotion_update_params): \OpenAPI\Client\Model\WTPrizePromotion
```

Update a prize-game promotion Deactivate a promotion or bring its end date forward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string
$wt_prize_promotion_update_params = new \OpenAPI\Client\Model\WTPrizePromotionUpdateParams(); // \OpenAPI\Client\Model\WTPrizePromotionUpdateParams

try {
    $result = $apiInstance->updatePrizePromotion($promotion_id, $wt_prize_promotion_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrizesApi->updatePrizePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**|  | |
| **wt_prize_promotion_update_params** | [**\OpenAPI\Client\Model\WTPrizePromotionUpdateParams**](../Model/WTPrizePromotionUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTPrizePromotion**](../Model/WTPrizePromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
