# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customersDynamicVoucherRedeemed()**](DefaultApi.md#customersDynamicVoucherRedeemed) | **POST** /Customers.DynamicVoucher.redeemed |  |
| [**customersDynamicVoucherRefunded()**](DefaultApi.md#customersDynamicVoucherRefunded) | **POST** /Customers.DynamicVoucher.refunded |  |
| [**customersMerchantCreditRedeemed()**](DefaultApi.md#customersMerchantCreditRedeemed) | **POST** /Customers.MerchantCredit.redeemed |  |
| [**customersMerchantCreditRefunded()**](DefaultApi.md#customersMerchantCreditRefunded) | **POST** /Customers.MerchantCredit.refunded |  |
| [**customersPrizeRedeemed()**](DefaultApi.md#customersPrizeRedeemed) | **POST** /Customers.Prize.redeemed |  |
| [**customersPrizeRefunded()**](DefaultApi.md#customersPrizeRefunded) | **POST** /Customers.Prize.refunded |  |
| [**customersStaticVoucherRedeemed()**](DefaultApi.md#customersStaticVoucherRedeemed) | **POST** /Customers.StaticVoucher.redeemed |  |
| [**customersStaticVoucherRefunded()**](DefaultApi.md#customersStaticVoucherRefunded) | **POST** /Customers.StaticVoucher.refunded |  |
| [**customersTicketClaimed()**](DefaultApi.md#customersTicketClaimed) | **POST** /Customers.Ticket.claimed |  |
| [**customersTicketRedeemed()**](DefaultApi.md#customersTicketRedeemed) | **POST** /Customers.Ticket.redeemed |  |
| [**customersTicketUnclaimed()**](DefaultApi.md#customersTicketUnclaimed) | **POST** /Customers.Ticket.unclaimed |  |
| [**membersPointsRedeemed()**](DefaultApi.md#membersPointsRedeemed) | **POST** /Members.Points.redeemed |  |
| [**membersPointsRefunded()**](DefaultApi.md#membersPointsRefunded) | **POST** /Members.Points.refunded |  |
| [**membersTierRedeemed()**](DefaultApi.md#membersTierRedeemed) | **POST** /Members.Tier.redeemed |  |
| [**membersTierRefunded()**](DefaultApi.md#membersTierRefunded) | **POST** /Members.Tier.refunded |  |
| [**subscribersEmailOptIn()**](DefaultApi.md#subscribersEmailOptIn) | **POST** /Subscribers.Email.opt_in |  |
| [**subscribersSMSDefaultOptIn()**](DefaultApi.md#subscribersSMSDefaultOptIn) | **POST** /Subscribers.SMS.default_opt_in |  |
| [**subscribersSMSKeywordOptIn()**](DefaultApi.md#subscribersSMSKeywordOptIn) | **POST** /Subscribers.SMS.keyword_opt_in |  |
| [**visitorsAuthentiationSuccess()**](DefaultApi.md#visitorsAuthentiationSuccess) | **POST** /Visitors.Authentiation.success |  |
| [**visitorsBusinessCardDownloaded()**](DefaultApi.md#visitorsBusinessCardDownloaded) | **POST** /Visitors.BusinessCard.downloaded |  |
| [**visitorsCalendarEventDownloaded()**](DefaultApi.md#visitorsCalendarEventDownloaded) | **POST** /Visitors.CalendarEvent.downloaded |  |
| [**walletPlatformAddOnPurchased()**](DefaultApi.md#walletPlatformAddOnPurchased) | **POST** /WalletPlatform.AddOn.purchased |  |
| [**walletPlatformInvoiceCreated()**](DefaultApi.md#walletPlatformInvoiceCreated) | **POST** /WalletPlatform.Invoice.created |  |
| [**walletPlatformInvoicePaid()**](DefaultApi.md#walletPlatformInvoicePaid) | **POST** /WalletPlatform.Invoice.paid |  |
| [**walletPlatformLedgerEntryCreated()**](DefaultApi.md#walletPlatformLedgerEntryCreated) | **POST** /WalletPlatform.LedgerEntry.created |  |
| [**walletPlatformPaymentMethodAdded()**](DefaultApi.md#walletPlatformPaymentMethodAdded) | **POST** /WalletPlatform.PaymentMethod.added |  |
| [**walletPlatformSubscriptionChanged()**](DefaultApi.md#walletPlatformSubscriptionChanged) | **POST** /WalletPlatform.Subscription.changed |  |


## `customersDynamicVoucherRedeemed()`

```php
customersDynamicVoucherRedeemed($dynamic_voucher)
```



A customer just redeemed a Dynamic Voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher = new \OpenAPI\Client\Model\DynamicVoucher(); // \OpenAPI\Client\Model\DynamicVoucher

try {
    $apiInstance->customersDynamicVoucherRedeemed($dynamic_voucher);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersDynamicVoucherRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dynamic_voucher** | [**\OpenAPI\Client\Model\DynamicVoucher**](../Model/DynamicVoucher.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersDynamicVoucherRefunded()`

```php
customersDynamicVoucherRefunded($dynamic_voucher)
```



A Dynamic Voucher was just refunded to the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher = new \OpenAPI\Client\Model\DynamicVoucher(); // \OpenAPI\Client\Model\DynamicVoucher

try {
    $apiInstance->customersDynamicVoucherRefunded($dynamic_voucher);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersDynamicVoucherRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dynamic_voucher** | [**\OpenAPI\Client\Model\DynamicVoucher**](../Model/DynamicVoucher.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersMerchantCreditRedeemed()`

```php
customersMerchantCreditRedeemed($wt_merchant_credit)
```



A customer just redeemed some Merchant Credit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_credit = new \OpenAPI\Client\Model\WTMerchantCredit(); // \OpenAPI\Client\Model\WTMerchantCredit

try {
    $apiInstance->customersMerchantCreditRedeemed($wt_merchant_credit);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersMerchantCreditRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_credit** | [**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersMerchantCreditRefunded()`

```php
customersMerchantCreditRefunded($wt_merchant_credit)
```



Merchant Credit was just refunded to a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_credit = new \OpenAPI\Client\Model\WTMerchantCredit(); // \OpenAPI\Client\Model\WTMerchantCredit

try {
    $apiInstance->customersMerchantCreditRefunded($wt_merchant_credit);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersMerchantCreditRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_credit** | [**\OpenAPI\Client\Model\WTMerchantCredit**](../Model/WTMerchantCredit.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersPrizeRedeemed()`

```php
customersPrizeRedeemed($advertisement_credit_scan)
```



A customer just redeemed a Prize.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertisement_credit_scan = new \OpenAPI\Client\Model\AdvertisementCreditScan(); // \OpenAPI\Client\Model\AdvertisementCreditScan

try {
    $apiInstance->customersPrizeRedeemed($advertisement_credit_scan);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersPrizeRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertisement_credit_scan** | [**\OpenAPI\Client\Model\AdvertisementCreditScan**](../Model/AdvertisementCreditScan.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersPrizeRefunded()`

```php
customersPrizeRefunded($advertisement_credit_scan)
```



A Prize was just refunded to the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertisement_credit_scan = new \OpenAPI\Client\Model\AdvertisementCreditScan(); // \OpenAPI\Client\Model\AdvertisementCreditScan

try {
    $apiInstance->customersPrizeRefunded($advertisement_credit_scan);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersPrizeRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertisement_credit_scan** | [**\OpenAPI\Client\Model\AdvertisementCreditScan**](../Model/AdvertisementCreditScan.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersStaticVoucherRedeemed()`

```php
customersStaticVoucherRedeemed($static_voucher)
```



A customer just redeemed a Static Voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher = new \OpenAPI\Client\Model\StaticVoucher(); // \OpenAPI\Client\Model\StaticVoucher

try {
    $apiInstance->customersStaticVoucherRedeemed($static_voucher);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersStaticVoucherRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **static_voucher** | [**\OpenAPI\Client\Model\StaticVoucher**](../Model/StaticVoucher.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersStaticVoucherRefunded()`

```php
customersStaticVoucherRefunded($static_voucher)
```



A Static Voucher was just refunded to the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher = new \OpenAPI\Client\Model\StaticVoucher(); // \OpenAPI\Client\Model\StaticVoucher

try {
    $apiInstance->customersStaticVoucherRefunded($static_voucher);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersStaticVoucherRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **static_voucher** | [**\OpenAPI\Client\Model\StaticVoucher**](../Model/StaticVoucher.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersTicketClaimed()`

```php
customersTicketClaimed($ticket)
```



A customer just claimed a Ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket = new \OpenAPI\Client\Model\Ticket(); // \OpenAPI\Client\Model\Ticket

try {
    $apiInstance->customersTicketClaimed($ticket);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersTicketClaimed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket** | [**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersTicketRedeemed()`

```php
customersTicketRedeemed($ticket)
```



A customer just redeemed a Ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket = new \OpenAPI\Client\Model\Ticket(); // \OpenAPI\Client\Model\Ticket

try {
    $apiInstance->customersTicketRedeemed($ticket);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersTicketRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket** | [**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersTicketUnclaimed()`

```php
customersTicketUnclaimed($ticket)
```



A customer just unclaimed a Ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket = new \OpenAPI\Client\Model\Ticket(); // \OpenAPI\Client\Model\Ticket

try {
    $apiInstance->customersTicketUnclaimed($ticket);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customersTicketUnclaimed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket** | [**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `membersPointsRedeemed()`

```php
membersPointsRedeemed($member)
```



A member just redeemed some Membership Points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member = new \OpenAPI\Client\Model\Member(); // \OpenAPI\Client\Model\Member

try {
    $apiInstance->membersPointsRedeemed($member);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->membersPointsRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member** | [**\OpenAPI\Client\Model\Member**](../Model/Member.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `membersPointsRefunded()`

```php
membersPointsRefunded($member)
```



Membership Points were just refunded to a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member = new \OpenAPI\Client\Model\Member(); // \OpenAPI\Client\Model\Member

try {
    $apiInstance->membersPointsRefunded($member);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->membersPointsRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member** | [**\OpenAPI\Client\Model\Member**](../Model/Member.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `membersTierRedeemed()`

```php
membersTierRedeemed($wt_membership_tier)
```



A member just redeemed a Membership Tier discount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_membership_tier = new \OpenAPI\Client\Model\WTMembershipTier(); // \OpenAPI\Client\Model\WTMembershipTier

try {
    $apiInstance->membersTierRedeemed($wt_membership_tier);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->membersTierRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_membership_tier** | [**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `membersTierRefunded()`

```php
membersTierRefunded($wt_membership_tier)
```



A Membership Tier discount was just refunded to a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_membership_tier = new \OpenAPI\Client\Model\WTMembershipTier(); // \OpenAPI\Client\Model\WTMembershipTier

try {
    $apiInstance->membersTierRefunded($wt_membership_tier);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->membersTierRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_membership_tier** | [**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribersEmailOptIn()`

```php
subscribersEmailOptIn($email_subscriber)
```



A new subscriber has opted-in to receive your email communications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_subscriber = new \OpenAPI\Client\Model\EmailSubscriber(); // \OpenAPI\Client\Model\EmailSubscriber

try {
    $apiInstance->subscribersEmailOptIn($email_subscriber);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscribersEmailOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_subscriber** | [**\OpenAPI\Client\Model\EmailSubscriber**](../Model/EmailSubscriber.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribersSMSDefaultOptIn()`

```php
subscribersSMSDefaultOptIn($sms_subscriber)
```



A new subscriber has opted-in to your default SMS/MMS subscriber list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_subscriber = new \OpenAPI\Client\Model\SmsSubscriber(); // \OpenAPI\Client\Model\SmsSubscriber

try {
    $apiInstance->subscribersSMSDefaultOptIn($sms_subscriber);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscribersSMSDefaultOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_subscriber** | [**\OpenAPI\Client\Model\SmsSubscriber**](../Model/SmsSubscriber.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribersSMSKeywordOptIn()`

```php
subscribersSMSKeywordOptIn($opt_in_list_subscriber)
```



A new subscriber has opted-in to a specific list / keyword for specialised SMS/MMS communications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$opt_in_list_subscriber = new \OpenAPI\Client\Model\OptInListSubscriber(); // \OpenAPI\Client\Model\OptInListSubscriber

try {
    $apiInstance->subscribersSMSKeywordOptIn($opt_in_list_subscriber);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscribersSMSKeywordOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opt_in_list_subscriber** | [**\OpenAPI\Client\Model\OptInListSubscriber**](../Model/OptInListSubscriber.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `visitorsAuthentiationSuccess()`

```php
visitorsAuthentiationSuccess()
```



A visitor successfully authenticated with their mobile phone number and is now a recognized customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->visitorsAuthentiationSuccess();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->visitorsAuthentiationSuccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `visitorsBusinessCardDownloaded()`

```php
visitorsBusinessCardDownloaded()
```



A visitor downloaded a Virtual Business Card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->visitorsBusinessCardDownloaded();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->visitorsBusinessCardDownloaded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `visitorsCalendarEventDownloaded()`

```php
visitorsCalendarEventDownloaded()
```



A visitor downloaded a calendar reminder for one of your upcoming events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->visitorsCalendarEventDownloaded();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->visitorsCalendarEventDownloaded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformAddOnPurchased()`

```php
walletPlatformAddOnPurchased()
```



An optional add-on product / service was just purchased.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->walletPlatformAddOnPurchased();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformAddOnPurchased: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformInvoiceCreated()`

```php
walletPlatformInvoiceCreated()
```



A new invoice has been generated for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->walletPlatformInvoiceCreated();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformInvoiceCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformInvoicePaid()`

```php
walletPlatformInvoicePaid()
```



An invoice has just been paid for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->walletPlatformInvoicePaid();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformInvoicePaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformLedgerEntryCreated()`

```php
walletPlatformLedgerEntryCreated($ledger_entry)
```



A new ledger entry is created every time a redemption or refund event has occurred.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger_entry = new \OpenAPI\Client\Model\LedgerEntry(); // \OpenAPI\Client\Model\LedgerEntry

try {
    $apiInstance->walletPlatformLedgerEntryCreated($ledger_entry);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformLedgerEntryCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger_entry** | [**\OpenAPI\Client\Model\LedgerEntry**](../Model/LedgerEntry.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformPaymentMethodAdded()`

```php
walletPlatformPaymentMethodAdded()
```



The payment method associated with your account has changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->walletPlatformPaymentMethodAdded();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformPaymentMethodAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPlatformSubscriptionChanged()`

```php
walletPlatformSubscriptionChanged()
```



A change to your billing subscription has been made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->walletPlatformSubscriptionChanged();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletPlatformSubscriptionChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
