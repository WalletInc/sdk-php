# OpenAPI\Client\StripeConnectApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConnectOnboardingLink()**](StripeConnectApi.md#createConnectOnboardingLink) | **POST** /v2/connect/account/onboarding-link | Create a Stripe Connect onboarding link Creates the merchant&#39;s STANDARD connected account on first call (pass-through model; the merchant owns their Stripe relationship) and returns a hosted onboarding link (single-use, expiring). returnUrl/refreshUrl are validated against the origin allowlist. Not a fund-moving write; 403 when the merchant&#39;s plan does not include Connect ecommerce. |
| [**fetchConnectAccountStatus()**](StripeConnectApi.md#fetchConnectAccountStatus) | **GET** /v2/connect/account | Get Stripe Connect account status Observability for Flow B ecommerce: the connected-account id and capability flags for the authenticated merchant, plus the derived onboarding status and the server-side ecommerce eligibility flag. Returns the defined not-started shape (accountId null) rather than 404 when onboarding has not begun. |
| [**fetchConnectPaymentsSummary()**](StripeConnectApi.md#fetchConnectPaymentsSummary) | **GET** /v2/connect/payments-summary | Get a read-only Connect payments summary Balances, recent payouts, and recent charges (up to 10 each) for the merchant&#39;s connected account, in Stripe minor units with currency codes. Read-only observability; Wallet is not in the Flow B money path. |


## `createConnectOnboardingLink()`

```php
createConnectOnboardingLink($wt_connect_onboarding_link_request): \OpenAPI\Client\Model\WTConnectOnboardingLinkResponse
```

Create a Stripe Connect onboarding link Creates the merchant's STANDARD connected account on first call (pass-through model; the merchant owns their Stripe relationship) and returns a hosted onboarding link (single-use, expiring). returnUrl/refreshUrl are validated against the origin allowlist. Not a fund-moving write; 403 when the merchant's plan does not include Connect ecommerce.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_connect_onboarding_link_request = new \OpenAPI\Client\Model\WTConnectOnboardingLinkRequest(); // \OpenAPI\Client\Model\WTConnectOnboardingLinkRequest

try {
    $result = $apiInstance->createConnectOnboardingLink($wt_connect_onboarding_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeConnectApi->createConnectOnboardingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_connect_onboarding_link_request** | [**\OpenAPI\Client\Model\WTConnectOnboardingLinkRequest**](../Model/WTConnectOnboardingLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTConnectOnboardingLinkResponse**](../Model/WTConnectOnboardingLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchConnectAccountStatus()`

```php
fetchConnectAccountStatus(): \OpenAPI\Client\Model\WTConnectAccountStatus
```

Get Stripe Connect account status Observability for Flow B ecommerce: the connected-account id and capability flags for the authenticated merchant, plus the derived onboarding status and the server-side ecommerce eligibility flag. Returns the defined not-started shape (accountId null) rather than 404 when onboarding has not begun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchConnectAccountStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeConnectApi->fetchConnectAccountStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTConnectAccountStatus**](../Model/WTConnectAccountStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchConnectPaymentsSummary()`

```php
fetchConnectPaymentsSummary(): \OpenAPI\Client\Model\WTConnectPaymentsSummary
```

Get a read-only Connect payments summary Balances, recent payouts, and recent charges (up to 10 each) for the merchant's connected account, in Stripe minor units with currency codes. Read-only observability; Wallet is not in the Flow B money path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchConnectPaymentsSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeConnectApi->fetchConnectPaymentsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTConnectPaymentsSummary**](../Model/WTConnectPaymentsSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
