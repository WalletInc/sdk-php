# OpenAPI\Client\AnalyticsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**countAllSubscribers()**](AnalyticsApi.md#countAllSubscribers) | **GET** /v2/analytics/sms/all/subscribers/count | Count opt in list subscribers
[**countAuthenticatedSessions()**](AnalyticsApi.md#countAuthenticatedSessions) | **GET** /v2/analytics/walletPageViews/sessions/count/distinct/authenticated | Count authenticated sessions
[**countDistinctRedemptions()**](AnalyticsApi.md#countDistinctRedemptions) | **GET** /v2/analytics/ledger/paymentObject/distinct/count | Fetch refund amount of campaigns by Campaign
[**countHelpDeskRequests()**](AnalyticsApi.md#countHelpDeskRequests) | **GET** /v2/analytics/helpdeskrequests/count | Count help desk requests by date
[**countInboundMessages()**](AnalyticsApi.md#countInboundMessages) | **GET** /v2/analytics/sms/inbound/count | Count opt in list subscribers
[**countNewSessions()**](AnalyticsApi.md#countNewSessions) | **GET** /v2/analytics/walletPageViews/sessions/count/distinct/first | Count new sessions
[**countOptInListSubscribersPartitionedByDate()**](AnalyticsApi.md#countOptInListSubscribersPartitionedByDate) | **GET** /v2/analytics/sms/all/subscribers/count/date | Count opt in list subscribers by date
[**countOutboundMessages()**](AnalyticsApi.md#countOutboundMessages) | **GET** /v2/analytics/sms/outbound/count | Count opt in list subscribers
[**countTotalSessions()**](AnalyticsApi.md#countTotalSessions) | **GET** /v2/analytics/walletPageViews/sessions/count/distinct | Count total sessions
[**countTransactions()**](AnalyticsApi.md#countTransactions) | **GET** /v2/analytics/ledger/transactions/count | Fetch refund amount of campaigns by Campaign
[**countVerifiedWalletPageViews()**](AnalyticsApi.md#countVerifiedWalletPageViews) | **GET** /v2/analytics/walletPageViews/sessions/verified/distinct/walletObjectsCount | Fetch wallet object counts within a given time frame that have a valid phone verification token
[**countWalletPageViews()**](AnalyticsApi.md#countWalletPageViews) | **GET** /v2/analytics/walletPageViews/sessions/distinct/walletObjectsCount | Fetch wallet object counts within a given time frame
[**exitLinkSummary()**](AnalyticsApi.md#exitLinkSummary) | **GET** /v2/analytics/walletPageViews/exitLinkSummary | Count exit clicks
[**fetchAnalyticsAdCreditsCountPartitionedByEmployee()**](AnalyticsApi.md#fetchAnalyticsAdCreditsCountPartitionedByEmployee) | **GET** /v2/analytics/advertisementCredits/count/employee | Count ad credits by employee
[**fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign()**](AnalyticsApi.md#fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign) | **GET** /v2/analytics/advertisementCredits/count/paymentDesign | Count ad credits by payment design
[**fetchAnalyticsAdCreditsCountPartitionedByValueType()**](AnalyticsApi.md#fetchAnalyticsAdCreditsCountPartitionedByValueType) | **GET** /v2/analytics/advertisementCredits/count/valueType | Count ad credits by value type
[**fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID) | **GET** /v2/analytics/advertisementCredits/redemptions/amount/adCredit | Fetch redemption amount of ad credits by Ad Credit
[**fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate) | **GET** /v2/analytics/advertisementCredits/redemptions/amount/date | Fetch redemption amount of ad credits by date
[**fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID) | **GET** /v2/analytics/advertisementCredits/redemptions/count/adCredit | Count redemptions of ad credits by Ad Credit
[**fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate) | **GET** /v2/analytics/advertisementCredits/redemptions/count/date | Count redemptions of ad credits by date
[**fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID) | **GET** /v2/analytics/advertisementCredits/refunds/amount/adCredit | Fetch refund amount of ad credits by Ad Credit
[**fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate) | **GET** /v2/analytics/advertisementCredits/refunds/amount/date | Fetch refund amount of ad credits by date
[**fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID) | **GET** /v2/analytics/advertisementCredits/refunds/count/adCredit | Count refunds of ad credits by Ad Credit
[**fetchAnalyticsAdCreditsRefundsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsAdCreditsRefundsCountPartitionedByDate) | **GET** /v2/analytics/advertisementCredits/refunds/count/date | Count refunds of ad credits by date
[**fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID()**](AnalyticsApi.md#fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID) | **GET** /v2/analytics/advertisementCredits/scans/count/adCredit | Count scans of ad credits by Ad Credit
[**fetchAnalyticsAdCreditsScansCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsAdCreditsScansCountPartitionedByDate) | **GET** /v2/analytics/advertisementCredits/scans/count/date | Count scans of ad credits by date
[**fetchAnalyticsCampaignWalletPageViews()**](AnalyticsApi.md#fetchAnalyticsCampaignWalletPageViews) | **GET** /v2/analytics/walletPageViews/campaign/{campaignID} | Fetch a campaign&#39;s wallet page views
[**fetchAnalyticsCampaignsCountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsCampaignsCountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/count/campaign/created | Count created campaigns by campaign
[**fetchAnalyticsCampaignsCountPartitionedByEmployee()**](AnalyticsApi.md#fetchAnalyticsCampaignsCountPartitionedByEmployee) | **GET** /v2/analytics/campaigns/count/employee | Count campaigns by employee
[**fetchAnalyticsCampaignsCountPartitionedByPaymentDesign()**](AnalyticsApi.md#fetchAnalyticsCampaignsCountPartitionedByPaymentDesign) | **GET** /v2/analytics/campaigns/count/paymentDesign | Count campaigns by payment design
[**fetchAnalyticsCampaignsCountPartitionedByValueType()**](AnalyticsApi.md#fetchAnalyticsCampaignsCountPartitionedByValueType) | **GET** /v2/analytics/campaigns/count/valueType | Count campaigns by value type
[**fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/redemptions/amount/campaign | Fetch redemption amount of campaigns by Campaign
[**fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate) | **GET** /v2/analytics/campaigns/redemptions/amount/date | Fetch redemption amount of campaigns by date
[**fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/redemptions/count/campaign | Count redemptions of campaigns by Campaign
[**fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate) | **GET** /v2/analytics/campaigns/redemptions/count/date | Count redemptions of campaigns by date
[**fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/refunds/amount/campaign | Fetch refund amount of campaigns by Campaign
[**fetchAnalyticsCampaignsRefundsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsCampaignsRefundsAmountPartitionedByDate) | **GET** /v2/analytics/campaigns/refunds/amount/date | Fetch refund amount of campaigns by date
[**fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/refunds/count/campaign | Fetch refund amount of campaigns by Campaign
[**fetchAnalyticsCampaignsRefundsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsCampaignsRefundsCountPartitionedByDate) | **GET** /v2/analytics/campaigns/refunds/count/date | Fetch refund amount of campaigns by date
[**fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate) | **GET** /v2/analytics/outboundSMS/count/date/delivered | Count delivered outbound messages by date
[**fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber()**](AnalyticsApi.md#fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber) | **GET** /v2/analytics/outboundSMS/count/phoneNumber/delivered | Count delivered outbound messages by phone number
[**fetchAnalyticsDistinctWalletSessions()**](AnalyticsApi.md#fetchAnalyticsDistinctWalletSessions) | **GET** /v2/analytics/walletPageViews/sessions/distinct | Fetch distinct wallet sessions
[**fetchAnalyticsDynamicVouchersCountPartitionedByEmployee()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersCountPartitionedByEmployee) | **GET** /v2/analytics/dynamicVouchers/count/employee | Count dynamic vouchers by employee
[**fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign) | **GET** /v2/analytics/dynamicVouchers/count/paymentDesign | Count dynamic vouchers by payment design
[**fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate) | **GET** /v2/analytics/dynamicVouchers/redemptions/amount/date | Fetch redemption amount of dynamic vouchers by date
[**fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID) | **GET** /v2/analytics/dynamicVouchers/redemptions/amount/dynamicVoucher | Fetch redemption amount of dynamic vouchers by dynamic voucher
[**fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate) | **GET** /v2/analytics/dynamicVouchers/redemptions/count/date | Count redemptions of dynamic vouchers by date
[**fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID) | **GET** /v2/analytics/dynamicVouchers/redemptions/count/dynamicVoucher | Count redemptions of dynamic vouchers by dynamic voucher
[**fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate) | **GET** /v2/analytics/dynamicVouchers/refunds/amount/date | Fetch refund amount of dynamic vouchers by date
[**fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID) | **GET** /v2/analytics/dynamicVouchers/refunds/amount/dynamicVoucher | Fetch refund amount of dynamic vouchers by dynamic voucher
[**fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate) | **GET** /v2/analytics/dynamicVouchers/refunds/count/date | Count refunds of dynamic vouchers by date
[**fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID()**](AnalyticsApi.md#fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID) | **GET** /v2/analytics/dynamicVouchers/refunds/count/dynamicVoucher | Count refunds of dynamic vouchers by dynamic voucher
[**fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate) | **GET** /v2/analytics/helpdeskrequests/count/date/created | Count help desk requests by date
[**fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate) | **GET** /v2/analytics/helpdeskrequests/count/date/resolved | Count resolved help desk requests by date
[**fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee()**](AnalyticsApi.md#fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee) | **GET** /v2/analytics/helpdeskrequests/count/employee/resolved | Count resolved help desk requests by employee
[**fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate) | **GET** /v2/analytics/helpdeskrequests/count/date/unresolved | Count unresolved help desk requests by date
[**fetchAnalyticsItemWalletPageViews()**](AnalyticsApi.md#fetchAnalyticsItemWalletPageViews) | **GET** /v2/analytics/walletPageViews/item/{itemID} | Fetch wallet page views of item
[**fetchAnalyticsMemberCount()**](AnalyticsApi.md#fetchAnalyticsMemberCount) | **GET** /v2/analytics/membership/member/count | Count members
[**fetchAnalyticsMerchantCreditCount()**](AnalyticsApi.md#fetchAnalyticsMerchantCreditCount) | **GET** /v2/analytics/membership/merchantCredit/count | Count merchant credits
[**fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID()**](AnalyticsApi.md#fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID) | **GET** /v2/analytics/campaigns/amount/campaign/offerVsRedeemed | Fetch offer vs redeemed amount by campaign
[**fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate) | **GET** /v2/analytics/paymentObjectBroadcasts/count/date/created | Count created broadcasts by date
[**fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts) | **GET** /v2/analytics/paymentObjectBroadcasts/executionTime/completed | Fetch execution time of completed broadcasts
[**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate) | **GET** /v2/analytics/paymentObjectBroadcasts/count/date/scheduled | Count scheduled broadcasts by date
[**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee) | **GET** /v2/analytics/paymentObjectBroadcasts/count/employee/scheduled | Count scheduled broadcasts by employee
[**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber) | **GET** /v2/analytics/paymentObjectBroadcasts/count/phoneNumber/scheduled | Count scheduled broadcasts by phone number
[**fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate) | **GET** /v2/analytics/paymentObjectBroadcasts/sms/count/date/scheduled | Count scheduled SMS broadcasts by date
[**fetchAnalyticsSentOutboundMessagesCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsSentOutboundMessagesCountPartitionedByDate) | **GET** /v2/analytics/outboundSMS/count/date/sent | Count sent outbound messages by date
[**fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber()**](AnalyticsApi.md#fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber) | **GET** /v2/analytics/outboundSMS/count/phoneNumber/sent | Count sent outbound messages by phone number
[**fetchAnalyticsStaticVoucherWalletPageViews()**](AnalyticsApi.md#fetchAnalyticsStaticVoucherWalletPageViews) | **GET** /v2/analytics/walletPageViews/staticVoucher/{voucherID} | Fetch a static voucher&#39;s wallet page views
[**fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate) | **GET** /v2/analytics/tcpafilters/count/date/create | Count created TCPA Filter entries by date
[**fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate) | **GET** /v2/analytics/tcpafilters/count/date/delete | Count deleted TCPA Filter entries by date
[**fetchAnalyticsTCPAStopCountPartitionedByDate()**](AnalyticsApi.md#fetchAnalyticsTCPAStopCountPartitionedByDate) | **GET** /v2/analytics/tcpa/count/date/stop | Count TCPA (STOP) entries by date
[**fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber()**](AnalyticsApi.md#fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber) | **GET** /v2/analytics/tcpa/count/phoneNumber/stop | Count TCPA (STOP) entries by phone number
[**fetchAnalyticsTotalAmountRedeemedPerMerchantCredit()**](AnalyticsApi.md#fetchAnalyticsTotalAmountRedeemedPerMerchantCredit) | **GET** /v2/analytics/membership/merchantCredit/amount/redeemed | Fetch redeemed amount of merchant credits
[**fetchAnalyticsTotalAmountRedeemedPerTier()**](AnalyticsApi.md#fetchAnalyticsTotalAmountRedeemedPerTier) | **GET** /v2/analytics/membership/tier/amount/redeemed | Fetch redeemed amoun̥t of tiers
[**fetchAnalyticsTotalAmountRefundedPerMerchantCredit()**](AnalyticsApi.md#fetchAnalyticsTotalAmountRefundedPerMerchantCredit) | **GET** /v2/analytics/membership/merchantCredit/amount/refunded | Fetch refunded amount of merchant credits
[**fetchAnalyticsTotalAmountRefundedPerTier()**](AnalyticsApi.md#fetchAnalyticsTotalAmountRefundedPerTier) | **GET** /v2/analytics/membership/tier/amount/refunded | Fetch refunded amount of tiers
[**fetchAnalyticsTotalPointsRedeemed()**](AnalyticsApi.md#fetchAnalyticsTotalPointsRedeemed) | **GET** /v2/analytics/membership/member/points/redeemed | Count redeemed points
[**fetchAnalyticsTotalPointsRefunded()**](AnalyticsApi.md#fetchAnalyticsTotalPointsRefunded) | **GET** /v2/analytics/membership/member/points/refunded | Count refunded points
[**fetchAnalyticsWalletSessionActivity()**](AnalyticsApi.md#fetchAnalyticsWalletSessionActivity) | **GET** /v2/analytics/walletPageViews/session/activity/{sessionID} | Fetch session activity
[**fetchWalletPageViewByID()**](AnalyticsApi.md#fetchWalletPageViewByID) | **GET** /v2/analytics/walletPageViews/activity/{id} | Fetch session activity by wallet page view ID
[**referringSitesSummary()**](AnalyticsApi.md#referringSitesSummary) | **GET** /v2/analytics/walletPageViews/referringSitesSummary | Count referring sites
[**sumRevenue()**](AnalyticsApi.md#sumRevenue) | **GET** /v2/analytics/ledger/revenue/sum | Fetch refund amount of campaigns by Campaign
[**sumTransactions()**](AnalyticsApi.md#sumTransactions) | **GET** /v2/analytics/ledger/transactions/sum | Fetch refund amount of campaigns by Campaign


## `countAllSubscribers()`

```php
countAllSubscribers($is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countAllSubscribers($is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countAllSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_subscribed** | **bool**|  | [optional]
 **is_pending_age21_verification** | **bool**|  | [optional]
 **is_archive_included** | **bool**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAuthenticatedSessions()`

```php
countAuthenticatedSessions($start_date, $end_date): mixed
```

Count authenticated sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countAuthenticatedSessions($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countAuthenticatedSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `countDistinctRedemptions()`

```php
countDistinctRedemptions($start_date, $end_date, $transaction_type, $segment_type): mixed
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$transaction_type = 'transaction_type_example'; // string
$segment_type = 'segment_type_example'; // string

try {
    $result = $apiInstance->countDistinctRedemptions($start_date, $end_date, $transaction_type, $segment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countDistinctRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **transaction_type** | **string**|  | [optional]
 **segment_type** | **string**|  | [optional]

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

## `countHelpDeskRequests()`

```php
countHelpDeskRequests($start_date, $end_date, $locale, $timezone, $is_resolved): mixed
```

Count help desk requests by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string
$is_resolved = True; // bool

try {
    $result = $apiInstance->countHelpDeskRequests($start_date, $end_date, $locale, $timezone, $is_resolved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countHelpDeskRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |
 **is_resolved** | **bool**|  | [optional]

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

## `countInboundMessages()`

```php
countInboundMessages($start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countInboundMessages($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countInboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countNewSessions()`

```php
countNewSessions($start_date, $end_date): mixed
```

Count new sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countNewSessions($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countNewSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `countOptInListSubscribersPartitionedByDate()`

```php
countOptInListSubscribersPartitionedByDate($start_date, $end_date): mixed
```

Count opt in list subscribers by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOptInListSubscribersPartitionedByDate($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countOptInListSubscribersPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `countOutboundMessages()`

```php
countOutboundMessages($start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOutboundMessages($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WTCountResult**](../Model/WTCountResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countTotalSessions()`

```php
countTotalSessions($start_date, $end_date): mixed
```

Count total sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countTotalSessions($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countTotalSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `countTransactions()`

```php
countTransactions($start_date, $end_date, $transaction_type, $segment_type): mixed
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$transaction_type = 'transaction_type_example'; // string
$segment_type = 'segment_type_example'; // string

try {
    $result = $apiInstance->countTransactions($start_date, $end_date, $transaction_type, $segment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **transaction_type** | **string**|  | [optional]
 **segment_type** | **string**|  | [optional]

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

## `countVerifiedWalletPageViews()`

```php
countVerifiedWalletPageViews($start_date, $end_date): \OpenAPI\Client\Model\WTWalletObjectPrefixCounts[]
```

Fetch wallet object counts within a given time frame that have a valid phone verification token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countVerifiedWalletPageViews($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countVerifiedWalletPageViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

### Return type

[**\OpenAPI\Client\Model\WTWalletObjectPrefixCounts[]**](../Model/WTWalletObjectPrefixCounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countWalletPageViews()`

```php
countWalletPageViews($start_date, $end_date): \OpenAPI\Client\Model\WTWalletObjectPrefixCounts[]
```

Fetch wallet object counts within a given time frame

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countWalletPageViews($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->countWalletPageViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

### Return type

[**\OpenAPI\Client\Model\WTWalletObjectPrefixCounts[]**](../Model/WTWalletObjectPrefixCounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exitLinkSummary()`

```php
exitLinkSummary($start_date, $end_date): mixed
```

Count exit clicks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->exitLinkSummary($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->exitLinkSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `fetchAnalyticsAdCreditsCountPartitionedByEmployee()`

```php
fetchAnalyticsAdCreditsCountPartitionedByEmployee($start_date, $end_date): mixed[]
```

Count ad credits by employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsCountPartitionedByEmployee($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsCountPartitionedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign()`

```php
fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign($start_date, $end_date): mixed[]
```

Count ad credits by payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsCountPartitionedByValueType()`

```php
fetchAnalyticsAdCreditsCountPartitionedByValueType($start_date, $end_date): mixed
```

Count ad credits by value type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsCountPartitionedByValueType($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsCountPartitionedByValueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID()`

```php
fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID($start_date, $end_date): mixed[]
```

Fetch redemption amount of ad credits by Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate()`

```php
fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch redemption amount of ad credits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID()`

```php
fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID($start_date, $end_date): mixed[]
```

Count redemptions of ad credits by Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate()`

```php
fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count redemptions of ad credits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID()`

```php
fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID($start_date, $end_date): mixed[]
```

Fetch refund amount of ad credits by Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate()`

```php
fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch refund amount of ad credits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID()`

```php
fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID($start_date, $end_date): mixed[]
```

Count refunds of ad credits by Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsRefundsCountPartitionedByDate()`

```php
fetchAnalyticsAdCreditsRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count refunds of ad credits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsRefundsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID()`

```php
fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID($start_date, $end_date): mixed[]
```

Count scans of ad credits by Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsAdCreditsScansCountPartitionedByDate()`

```php
fetchAnalyticsAdCreditsScansCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count scans of ad credits by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsAdCreditsScansCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsAdCreditsScansCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsCampaignWalletPageViews()`

```php
fetchAnalyticsCampaignWalletPageViews($campaign_id): \OpenAPI\Client\Model\WTWalletPageView[]
```

Fetch a campaign's wallet page views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = NULL; // mixed

try {
    $result = $apiInstance->fetchAnalyticsCampaignWalletPageViews($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignWalletPageViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTWalletPageView[]**](../Model/WTWalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsCampaignsCountPartitionedByCampaignID()`

```php
fetchAnalyticsCampaignsCountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Count created campaigns by campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsCountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsCountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsCountPartitionedByEmployee()`

```php
fetchAnalyticsCampaignsCountPartitionedByEmployee($start_date, $end_date): mixed[]
```

Count campaigns by employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsCountPartitionedByEmployee($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsCountPartitionedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsCountPartitionedByPaymentDesign()`

```php
fetchAnalyticsCampaignsCountPartitionedByPaymentDesign($start_date, $end_date): mixed[]
```

Count campaigns by payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsCountPartitionedByPaymentDesign($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsCountPartitionedByPaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsCountPartitionedByValueType()`

```php
fetchAnalyticsCampaignsCountPartitionedByValueType($start_date, $end_date): mixed
```

Count campaigns by value type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsCountPartitionedByValueType($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsCountPartitionedByValueType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID()`

```php
fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Fetch redemption amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate()`

```php
fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch redemption amount of campaigns by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID()`

```php
fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Count redemptions of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate()`

```php
fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count redemptions of campaigns by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID()`

```php
fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsRefundsAmountPartitionedByDate()`

```php
fetchAnalyticsCampaignsRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch refund amount of campaigns by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRefundsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID()`

```php
fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsCampaignsRefundsCountPartitionedByDate()`

```php
fetchAnalyticsCampaignsRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch refund amount of campaigns by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsCampaignsRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsCampaignsRefundsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate()`

```php
fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count delivered outbound messages by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber()`

```php
fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber($start_date, $end_date): mixed[]
```

Count delivered outbound messages by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDistinctWalletSessions()`

```php
fetchAnalyticsDistinctWalletSessions($start_date, $end_date): mixed
```

Fetch distinct wallet sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDistinctWalletSessions($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDistinctWalletSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `fetchAnalyticsDynamicVouchersCountPartitionedByEmployee()`

```php
fetchAnalyticsDynamicVouchersCountPartitionedByEmployee($start_date, $end_date): mixed[]
```

Count dynamic vouchers by employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersCountPartitionedByEmployee($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersCountPartitionedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign()`

```php
fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign($start_date, $end_date): mixed[]
```

Count dynamic vouchers by payment design

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate()`

```php
fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch redemption amount of dynamic vouchers by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID()`

```php
fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID($start_date, $end_date): mixed[]
```

Fetch redemption amount of dynamic vouchers by dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate()`

```php
fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed[]
```

Count redemptions of dynamic vouchers by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID()`

```php
fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID($start_date, $end_date): mixed[]
```

Count redemptions of dynamic vouchers by dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate()`

```php
fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Fetch refund amount of dynamic vouchers by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID()`

```php
fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID($start_date, $end_date): mixed[]
```

Fetch refund amount of dynamic vouchers by dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate()`

```php
fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count refunds of dynamic vouchers by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID()`

```php
fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID($start_date, $end_date): mixed[]
```

Count refunds of dynamic vouchers by dynamic voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate()`

```php
fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count help desk requests by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate()`

```php
fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count resolved help desk requests by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee()`

```php
fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee($start_date, $end_date): mixed[]
```

Count resolved help desk requests by employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate()`

```php
fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count unresolved help desk requests by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsItemWalletPageViews()`

```php
fetchAnalyticsItemWalletPageViews($item_id): mixed
```

Fetch wallet page views of item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsItemWalletPageViews($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsItemWalletPageViews: ', $e->getMessage(), PHP_EOL;
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

## `fetchAnalyticsMemberCount()`

```php
fetchAnalyticsMemberCount($start_date, $end_date, $locale, $timezone): \OpenAPI\Client\Model\MSAnalyticsMemberCountPartitionedByDate[]
```

Count members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsMemberCount($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsMemberCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\MSAnalyticsMemberCountPartitionedByDate[]**](../Model/MSAnalyticsMemberCountPartitionedByDate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsMerchantCreditCount()`

```php
fetchAnalyticsMerchantCreditCount($start_date, $end_date, $locale, $timezone): mixed
```

Count merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsMerchantCreditCount($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsMerchantCreditCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID()`

```php
fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID($start_date, $end_date): mixed[]
```

Fetch offer vs redeemed amount by campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate()`

```php
fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count created broadcasts by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts()`

```php
fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts($start_date, $end_date): mixed
```

Fetch execution time of completed broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate()`

```php
fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count scheduled broadcasts by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee()`

```php
fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee($start_date, $end_date): mixed[]
```

Count scheduled broadcasts by employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber()`

```php
fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber($start_date, $end_date): mixed[]
```

Count scheduled broadcasts by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate()`

```php
fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count scheduled SMS broadcasts by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsSentOutboundMessagesCountPartitionedByDate()`

```php
fetchAnalyticsSentOutboundMessagesCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count sent outbound messages by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsSentOutboundMessagesCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsSentOutboundMessagesCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber()`

```php
fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber($start_date, $end_date): mixed[]
```

Count sent outbound messages by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsStaticVoucherWalletPageViews()`

```php
fetchAnalyticsStaticVoucherWalletPageViews($voucher_id): \OpenAPI\Client\Model\WTWalletPageView[]
```

Fetch a static voucher's wallet page views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = NULL; // mixed

try {
    $result = $apiInstance->fetchAnalyticsStaticVoucherWalletPageViews($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsStaticVoucherWalletPageViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTWalletPageView[]**](../Model/WTWalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate()`

```php
fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate($start_date, $end_date): mixed
```

Count created TCPA Filter entries by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTCPAFiltersCreateCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate()`

```php
fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate($start_date, $end_date): mixed
```

Count deleted TCPA Filter entries by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTCPAFiltersDeleteCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsTCPAStopCountPartitionedByDate()`

```php
fetchAnalyticsTCPAStopCountPartitionedByDate($start_date, $end_date, $locale, $timezone): mixed
```

Count TCPA (STOP) entries by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTCPAStopCountPartitionedByDate($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTCPAStopCountPartitionedByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber()`

```php
fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber($start_date, $end_date): mixed[]
```

Count TCPA (STOP) entries by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

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

## `fetchAnalyticsTotalAmountRedeemedPerMerchantCredit()`

```php
fetchAnalyticsTotalAmountRedeemedPerMerchantCredit($start_date, $end_date, $locale, $timezone): mixed
```

Fetch redeemed amount of merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalAmountRedeemedPerMerchantCredit($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalAmountRedeemedPerMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsTotalAmountRedeemedPerTier()`

```php
fetchAnalyticsTotalAmountRedeemedPerTier($start_date, $end_date, $locale, $timezone): \OpenAPI\Client\Model\MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate[]
```

Fetch redeemed amoun̥t of tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalAmountRedeemedPerTier($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalAmountRedeemedPerTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate[]**](../Model/MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsTotalAmountRefundedPerMerchantCredit()`

```php
fetchAnalyticsTotalAmountRefundedPerMerchantCredit($start_date, $end_date, $locale, $timezone): mixed
```

Fetch refunded amount of merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalAmountRefundedPerMerchantCredit($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalAmountRefundedPerMerchantCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

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

## `fetchAnalyticsTotalAmountRefundedPerTier()`

```php
fetchAnalyticsTotalAmountRefundedPerTier($start_date, $end_date, $locale, $timezone): \OpenAPI\Client\Model\MSAnalyticsMembershipTierAmountRefundedPartitionedByDate[]
```

Fetch refunded amount of tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalAmountRefundedPerTier($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalAmountRefundedPerTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\MSAnalyticsMembershipTierAmountRefundedPartitionedByDate[]**](../Model/MSAnalyticsMembershipTierAmountRefundedPartitionedByDate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsTotalPointsRedeemed()`

```php
fetchAnalyticsTotalPointsRedeemed($start_date, $end_date, $locale, $timezone): \OpenAPI\Client\Model\MSAnalyticsMemberPointsRedeemedPartitionedByDate[]
```

Count redeemed points

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalPointsRedeemed($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalPointsRedeemed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\MSAnalyticsMemberPointsRedeemedPartitionedByDate[]**](../Model/MSAnalyticsMemberPointsRedeemedPartitionedByDate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsTotalPointsRefunded()`

```php
fetchAnalyticsTotalPointsRefunded($start_date, $end_date, $locale, $timezone): \OpenAPI\Client\Model\MSAnalyticsMemberPointsRefundedPartitionedByDate[]
```

Count refunded points

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$locale = 'locale_example'; // string
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsTotalPointsRefunded($start_date, $end_date, $locale, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsTotalPointsRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **locale** | **string**|  |
 **timezone** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\MSAnalyticsMemberPointsRefundedPartitionedByDate[]**](../Model/MSAnalyticsMemberPointsRefundedPartitionedByDate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAnalyticsWalletSessionActivity()`

```php
fetchAnalyticsWalletSessionActivity($session_id): \OpenAPI\Client\Model\WTWalletPageView[]
```

Fetch session activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->fetchAnalyticsWalletSessionActivity($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchAnalyticsWalletSessionActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\WTWalletPageView[]**](../Model/WTWalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWalletPageViewByID()`

```php
fetchWalletPageViewByID($id): \OpenAPI\Client\Model\WalletPageView
```

Fetch session activity by wallet page view ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchWalletPageViewByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->fetchWalletPageViewByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\WalletPageView**](../Model/WalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referringSitesSummary()`

```php
referringSitesSummary($start_date, $end_date): mixed
```

Count referring sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->referringSitesSummary($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->referringSitesSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

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

## `sumRevenue()`

```php
sumRevenue($start_date, $end_date, $transaction_type, $segment_type): mixed
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$transaction_type = 'transaction_type_example'; // string
$segment_type = 'segment_type_example'; // string

try {
    $result = $apiInstance->sumRevenue($start_date, $end_date, $transaction_type, $segment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->sumRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **transaction_type** | **string**|  | [optional]
 **segment_type** | **string**|  | [optional]

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

## `sumTransactions()`

```php
sumTransactions($start_date, $end_date, $transaction_type, $segment_type): mixed
```

Fetch refund amount of campaigns by Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$transaction_type = 'transaction_type_example'; // string
$segment_type = 'segment_type_example'; // string

try {
    $result = $apiInstance->sumTransactions($start_date, $end_date, $transaction_type, $segment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->sumTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **transaction_type** | **string**|  | [optional]
 **segment_type** | **string**|  | [optional]

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
