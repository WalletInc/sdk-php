# OpenAPI\Client\GiftCardsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimGift()**](GiftCardsApi.md#claimGift) | **POST** /giftcards/{giftID}/claim | Claim a gifted card or certificate Claims a gift into the recipient&#39;s wallet (guest-to-guest). For a certificate with the gift-redemption requirement, the claimer must be someone other than the purchaser. |
| [**createCertificateDeal()**](GiftCardsApi.md#createCertificateDeal) | **POST** /giftcards/deals | Create a gift-certificate deal (draft) Creates the discounted \&quot;deal\&quot; template (product/service entitlement, retail + sale price, quantity, validity) as a DRAFT. It is not purchasable until published. Authoring a draft does not require Stripe Connect. |
| [**fetchCertificateDeal()**](GiftCardsApi.md#fetchCertificateDeal) | **GET** /giftcards/deals/{dealID} | Fetch a certificate deal by id |
| [**fetchGift()**](GiftCardsApi.md#fetchGift) | **GET** /giftcards/{giftID} | Fetch a gift card or certificate by id |
| [**publishCertificateDeal()**](GiftCardsApi.md#publishCertificateDeal) | **POST** /giftcards/deals/{dealID}/publish | Publish a certificate deal (put it on sale) Flips a draft deal live so guests can buy certificates from it. Requires the merchant&#39;s Stripe Connect account to be active (charges enabled), since a purchase is a direct charge to that account. |
| [**purchaseCertificateFromDeal()**](GiftCardsApi.md#purchaseCertificateFromDeal) | **POST** /giftcards/deals/{dealID}/purchase | Purchase a certificate from a deal Runs the (mock) Connect direct charge of the deal&#39;s discounted sale price to the merchant, then mints a single-use certificate from the deal. Optionally gifts it to a recipient. |
| [**purchaseGiftCard()**](GiftCardsApi.md#purchaseGiftCard) | **POST** /giftcards/purchase | Purchase a gift card Runs the (mock) Connect direct charge to the merchant, then issues a funded, reloadable gift card. Optionally gifts it to a recipient. Requires the merchant&#39;s Stripe Connect account to be active (charges enabled). |


## `claimGift()`

```php
claimGift($gift_id, $wt_gift_claim_request): mixed
```

Claim a gifted card or certificate Claims a gift into the recipient's wallet (guest-to-guest). For a certificate with the gift-redemption requirement, the claimer must be someone other than the purchaser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_id = 'gift_id_example'; // string
$wt_gift_claim_request = new \OpenAPI\Client\Model\WTGiftClaimRequest(); // \OpenAPI\Client\Model\WTGiftClaimRequest

try {
    $result = $apiInstance->claimGift($gift_id, $wt_gift_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->claimGift: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gift_id** | **string**|  | |
| **wt_gift_claim_request** | [**\OpenAPI\Client\Model\WTGiftClaimRequest**](../Model/WTGiftClaimRequest.md)|  | |

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

## `createCertificateDeal()`

```php
createCertificateDeal($wt_certificate_deal_create_request): mixed
```

Create a gift-certificate deal (draft) Creates the discounted \"deal\" template (product/service entitlement, retail + sale price, quantity, validity) as a DRAFT. It is not purchasable until published. Authoring a draft does not require Stripe Connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_certificate_deal_create_request = new \OpenAPI\Client\Model\WTCertificateDealCreateRequest(); // \OpenAPI\Client\Model\WTCertificateDealCreateRequest

try {
    $result = $apiInstance->createCertificateDeal($wt_certificate_deal_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->createCertificateDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_certificate_deal_create_request** | [**\OpenAPI\Client\Model\WTCertificateDealCreateRequest**](../Model/WTCertificateDealCreateRequest.md)|  | |

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

## `fetchCertificateDeal()`

```php
fetchCertificateDeal($deal_id): mixed
```

Fetch a certificate deal by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deal_id = 'deal_id_example'; // string

try {
    $result = $apiInstance->fetchCertificateDeal($deal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->fetchCertificateDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deal_id** | **string**|  | |

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

## `fetchGift()`

```php
fetchGift($gift_id): mixed
```

Fetch a gift card or certificate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_id = 'gift_id_example'; // string

try {
    $result = $apiInstance->fetchGift($gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->fetchGift: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gift_id** | **string**|  | |

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

## `publishCertificateDeal()`

```php
publishCertificateDeal($deal_id): mixed
```

Publish a certificate deal (put it on sale) Flips a draft deal live so guests can buy certificates from it. Requires the merchant's Stripe Connect account to be active (charges enabled), since a purchase is a direct charge to that account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deal_id = 'deal_id_example'; // string

try {
    $result = $apiInstance->publishCertificateDeal($deal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->publishCertificateDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deal_id** | **string**|  | |

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

## `purchaseCertificateFromDeal()`

```php
purchaseCertificateFromDeal($deal_id, $wt_certificate_purchase_request): mixed
```

Purchase a certificate from a deal Runs the (mock) Connect direct charge of the deal's discounted sale price to the merchant, then mints a single-use certificate from the deal. Optionally gifts it to a recipient.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deal_id = 'deal_id_example'; // string
$wt_certificate_purchase_request = new \OpenAPI\Client\Model\WTCertificatePurchaseRequest(); // \OpenAPI\Client\Model\WTCertificatePurchaseRequest

try {
    $result = $apiInstance->purchaseCertificateFromDeal($deal_id, $wt_certificate_purchase_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->purchaseCertificateFromDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deal_id** | **string**|  | |
| **wt_certificate_purchase_request** | [**\OpenAPI\Client\Model\WTCertificatePurchaseRequest**](../Model/WTCertificatePurchaseRequest.md)|  | |

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

## `purchaseGiftCard()`

```php
purchaseGiftCard($wt_gift_card_purchase_request): mixed
```

Purchase a gift card Runs the (mock) Connect direct charge to the merchant, then issues a funded, reloadable gift card. Optionally gifts it to a recipient. Requires the merchant's Stripe Connect account to be active (charges enabled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_gift_card_purchase_request = new \OpenAPI\Client\Model\WTGiftCardPurchaseRequest(); // \OpenAPI\Client\Model\WTGiftCardPurchaseRequest

try {
    $result = $apiInstance->purchaseGiftCard($wt_gift_card_purchase_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->purchaseGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_gift_card_purchase_request** | [**\OpenAPI\Client\Model\WTGiftCardPurchaseRequest**](../Model/WTGiftCardPurchaseRequest.md)|  | |

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
