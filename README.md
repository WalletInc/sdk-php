# OpenAPIClient-php

API


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AdvertisementCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveAdvertisementCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisementCreditsApi->archiveAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.wall.et*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisementCreditsApi* | [**archiveAdvertisementCredit**](docs/Api/AdvertisementCreditsApi.md#archiveadvertisementcredit) | **DELETE** /v2/payment/advertisementCredit/{id} | Archive ad credit
*AdvertisementCreditsApi* | [**createAdvertisementCredit**](docs/Api/AdvertisementCreditsApi.md#createadvertisementcredit) | **POST** /v2/payment/advertisementCredit | Create ad credit
*AdvertisementCreditsApi* | [**fetchAdvertisementCreditById**](docs/Api/AdvertisementCreditsApi.md#fetchadvertisementcreditbyid) | **GET** /v2/payment/advertisementCredit/{id} | Fetch ad credit
*AdvertisementCreditsApi* | [**fetchAdvertisementCreditScans**](docs/Api/AdvertisementCreditsApi.md#fetchadvertisementcreditscans) | **GET** /v2/payment/advertisementCredit/scans/{id} | Fetch scans
*AdvertisementCreditsApi* | [**fetchAllAdvertisementCredits**](docs/Api/AdvertisementCreditsApi.md#fetchalladvertisementcredits) | **GET** /v2/payment/advertisementCredit/all | Fetch all active ad credits
*AdvertisementCreditsApi* | [**restoreAdvertisementCredit**](docs/Api/AdvertisementCreditsApi.md#restoreadvertisementcredit) | **PATCH** /v2/payment/advertisementCredit/{id} | Restore ad credit
*AdvertisementCreditsApi* | [**updateAdvertisementCredit**](docs/Api/AdvertisementCreditsApi.md#updateadvertisementcredit) | **PUT** /v2/payment/advertisementCredit/{id} | Update ad credit
*AnalyticsApi* | [**countVerifiedWalletPageViews**](docs/Api/AnalyticsApi.md#countverifiedwalletpageviews) | **GET** /v2/analytics/walletPageViews/sessions/verified/distinct/walletObjectsCount | Fetch wallet object counts within a given time frame that have a valid phone verification token
*AnalyticsApi* | [**countWalletPageViews**](docs/Api/AnalyticsApi.md#countwalletpageviews) | **GET** /v2/analytics/walletPageViews/sessions/distinct/walletObjectsCount | Fetch wallet object counts within a given time frame
*AnalyticsApi* | [**fetchAnalyticsAdCreditsCountPartitionedByEmployee**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditscountpartitionedbyemployee) | **GET** /v2/analytics/advertisementCredits/count/employee | Count ad credits by employee
*AnalyticsApi* | [**fetchAnalyticsAdCreditsCountPartitionedByPaymentDesign**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditscountpartitionedbypaymentdesign) | **GET** /v2/analytics/advertisementCredits/count/paymentDesign | Count ad credits by payment design
*AnalyticsApi* | [**fetchAnalyticsAdCreditsCountPartitionedByValueType**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditscountpartitionedbyvaluetype) | **GET** /v2/analytics/advertisementCredits/count/valueType | Count ad credits by value type
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByAdCreditID**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsredemptionsamountpartitionedbyadcreditid) | **GET** /v2/analytics/advertisementCredits/redemptions/amount/adCredit | Fetch redemption amount of ad credits by Ad Credit
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRedemptionsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsredemptionsamountpartitionedbydate) | **GET** /v2/analytics/advertisementCredits/redemptions/amount/date | Fetch redemption amount of ad credits by date
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRedemptionsCountPartitionedByAdCreditID**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsredemptionscountpartitionedbyadcreditid) | **GET** /v2/analytics/advertisementCredits/redemptions/count/adCredit | Count redemptions of ad credits by Ad Credit
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRedemptionsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsredemptionscountpartitionedbydate) | **GET** /v2/analytics/advertisementCredits/redemptions/count/date | Count redemptions of ad credits by date
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRefundsAmountPartitionedByAdCreditID**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsrefundsamountpartitionedbyadcreditid) | **GET** /v2/analytics/advertisementCredits/refunds/amount/adCredit | Fetch refund amount of ad credits by Ad Credit
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRefundsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsrefundsamountpartitionedbydate) | **GET** /v2/analytics/advertisementCredits/refunds/amount/date | Fetch refund amount of ad credits by date
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRefundsCountPartitionedByAdCreditID**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsrefundscountpartitionedbyadcreditid) | **GET** /v2/analytics/advertisementCredits/refunds/count/adCredit | Count refunds of ad credits by Ad Credit
*AnalyticsApi* | [**fetchAnalyticsAdCreditsRefundsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsrefundscountpartitionedbydate) | **GET** /v2/analytics/advertisementCredits/refunds/count/date | Count refunds of ad credits by date
*AnalyticsApi* | [**fetchAnalyticsAdCreditsScansCountPartitionedByAdCreditID**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsscanscountpartitionedbyadcreditid) | **GET** /v2/analytics/advertisementCredits/scans/count/adCredit | Count scans of ad credits by Ad Credit
*AnalyticsApi* | [**fetchAnalyticsAdCreditsScansCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsadcreditsscanscountpartitionedbydate) | **GET** /v2/analytics/advertisementCredits/scans/count/date | Count scans of ad credits by date
*AnalyticsApi* | [**fetchAnalyticsCampaignWalletPageViews**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignwalletpageviews) | **GET** /v2/analytics/walletPageViews/campaign/{campaignID} | Fetch a campaign&#39;s wallet page views
*AnalyticsApi* | [**fetchAnalyticsCampaignsCountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignscountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/count/campaign/created | Count created campaigns by campaign
*AnalyticsApi* | [**fetchAnalyticsCampaignsCountPartitionedByEmployee**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignscountpartitionedbyemployee) | **GET** /v2/analytics/campaigns/count/employee | Count campaigns by employee
*AnalyticsApi* | [**fetchAnalyticsCampaignsCountPartitionedByPaymentDesign**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignscountpartitionedbypaymentdesign) | **GET** /v2/analytics/campaigns/count/paymentDesign | Count campaigns by payment design
*AnalyticsApi* | [**fetchAnalyticsCampaignsCountPartitionedByValueType**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignscountpartitionedbyvaluetype) | **GET** /v2/analytics/campaigns/count/valueType | Count campaigns by value type
*AnalyticsApi* | [**fetchAnalyticsCampaignsRedemptionsAmountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsredemptionsamountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/redemptions/amount/campaign | Fetch redemption amount of campaigns by Campaign
*AnalyticsApi* | [**fetchAnalyticsCampaignsRedemptionsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsredemptionsamountpartitionedbydate) | **GET** /v2/analytics/campaigns/redemptions/amount/date | Fetch redemption amount of campaigns by date
*AnalyticsApi* | [**fetchAnalyticsCampaignsRedemptionsCountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsredemptionscountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/redemptions/count/campaign | Count redemptions of campaigns by Campaign
*AnalyticsApi* | [**fetchAnalyticsCampaignsRedemptionsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsredemptionscountpartitionedbydate) | **GET** /v2/analytics/campaigns/redemptions/count/date | Count redemptions of campaigns by date
*AnalyticsApi* | [**fetchAnalyticsCampaignsRefundsAmountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsrefundsamountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/refunds/amount/campaign | Fetch refund amount of campaigns by Campaign
*AnalyticsApi* | [**fetchAnalyticsCampaignsRefundsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsrefundsamountpartitionedbydate) | **GET** /v2/analytics/campaigns/refunds/amount/date | Fetch refund amount of campaigns by date
*AnalyticsApi* | [**fetchAnalyticsCampaignsRefundsCountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsrefundscountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/refunds/count/campaign | Fetch refund amount of campaigns by Campaign
*AnalyticsApi* | [**fetchAnalyticsCampaignsRefundsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticscampaignsrefundscountpartitionedbydate) | **GET** /v2/analytics/campaigns/refunds/count/date | Fetch refund amount of campaigns by date
*AnalyticsApi* | [**fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsdeliveredoutboundmessagescountpartitionedbydate) | **GET** /v2/analytics/outboundSMS/count/date/delivered | Count delivered outbound messages by date
*AnalyticsApi* | [**fetchAnalyticsDeliveredOutboundMessagesCountPartitionedByPhoneNumber**](docs/Api/AnalyticsApi.md#fetchanalyticsdeliveredoutboundmessagescountpartitionedbyphonenumber) | **GET** /v2/analytics/outboundSMS/count/phoneNumber/delivered | Count delivered outbound messages by phone number
*AnalyticsApi* | [**fetchAnalyticsDistinctWalletSessions**](docs/Api/AnalyticsApi.md#fetchanalyticsdistinctwalletsessions) | **GET** /v2/analytics/walletPageViews/sessions/distinct | Fetch distinct wallet sessions
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersCountPartitionedByEmployee**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvoucherscountpartitionedbyemployee) | **GET** /v2/analytics/dynamicVouchers/count/employee | Count dynamic vouchers by employee
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersCountPartitionedByPaymentDesign**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvoucherscountpartitionedbypaymentdesign) | **GET** /v2/analytics/dynamicVouchers/count/paymentDesign | Count dynamic vouchers by payment design
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersredemptionsamountpartitionedbydate) | **GET** /v2/analytics/dynamicVouchers/redemptions/amount/date | Fetch redemption amount of dynamic vouchers by date
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRedemptionsAmountPartitionedByDynamicVoucherID**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersredemptionsamountpartitionedbydynamicvoucherid) | **GET** /v2/analytics/dynamicVouchers/redemptions/amount/dynamicVoucher | Fetch redemption amount of dynamic vouchers by dynamic voucher
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersredemptionscountpartitionedbydate) | **GET** /v2/analytics/dynamicVouchers/redemptions/count/date | Count redemptions of dynamic vouchers by date
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRedemptionsCountPartitionedByDynamicVoucherID**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersredemptionscountpartitionedbydynamicvoucherid) | **GET** /v2/analytics/dynamicVouchers/redemptions/count/dynamicVoucher | Count redemptions of dynamic vouchers by dynamic voucher
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersrefundsamountpartitionedbydate) | **GET** /v2/analytics/dynamicVouchers/refunds/amount/date | Fetch refund amount of dynamic vouchers by date
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRefundsAmountPartitionedByDynamicVoucherID**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersrefundsamountpartitionedbydynamicvoucherid) | **GET** /v2/analytics/dynamicVouchers/refunds/amount/dynamicVoucher | Fetch refund amount of dynamic vouchers by dynamic voucher
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersrefundscountpartitionedbydate) | **GET** /v2/analytics/dynamicVouchers/refunds/count/date | Count refunds of dynamic vouchers by date
*AnalyticsApi* | [**fetchAnalyticsDynamicVouchersRefundsCountPartitionedByDynamicVoucherID**](docs/Api/AnalyticsApi.md#fetchanalyticsdynamicvouchersrefundscountpartitionedbydynamicvoucherid) | **GET** /v2/analytics/dynamicVouchers/refunds/count/dynamicVoucher | Count refunds of dynamic vouchers by dynamic voucher
*AnalyticsApi* | [**fetchAnalyticsHelpDeskRequestsCreatedCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticshelpdeskrequestscreatedcountpartitionedbydate) | **GET** /v2/analytics/helpdeskrequests/count/date/created | Count help desk requests by date
*AnalyticsApi* | [**fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticshelpdeskrequestsresolvedcountpartitionedbydate) | **GET** /v2/analytics/helpdeskrequests/count/date/resolved | Count resolved help desk requests by date
*AnalyticsApi* | [**fetchAnalyticsHelpDeskRequestsResolvedCountPartitionedByEmployee**](docs/Api/AnalyticsApi.md#fetchanalyticshelpdeskrequestsresolvedcountpartitionedbyemployee) | **GET** /v2/analytics/helpdeskrequests/count/employee/resolved | Count resolved help desk requests by employee
*AnalyticsApi* | [**fetchAnalyticsHelpDeskRequestsUnresolvedCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticshelpdeskrequestsunresolvedcountpartitionedbydate) | **GET** /v2/analytics/helpdeskrequests/count/date/unresolved | Count unresolved help desk requests by date
*AnalyticsApi* | [**fetchAnalyticsItemWalletPageViews**](docs/Api/AnalyticsApi.md#fetchanalyticsitemwalletpageviews) | **GET** /v2/analytics/walletPageViews/item/{itemID} | Fetch wallet page views of item
*AnalyticsApi* | [**fetchAnalyticsMemberCount**](docs/Api/AnalyticsApi.md#fetchanalyticsmembercount) | **GET** /v2/analytics/membership/member/count | Count members
*AnalyticsApi* | [**fetchAnalyticsMerchantCreditCount**](docs/Api/AnalyticsApi.md#fetchanalyticsmerchantcreditcount) | **GET** /v2/analytics/membership/merchantCredit/count | Count merchant credits
*AnalyticsApi* | [**fetchAnalyticsOfferVsRedeemedAmountPartitionedByCampaignID**](docs/Api/AnalyticsApi.md#fetchanalyticsoffervsredeemedamountpartitionedbycampaignid) | **GET** /v2/analytics/campaigns/amount/campaign/offerVsRedeemed | Fetch offer vs redeemed amount by campaign
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsCreatedCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastscreatedcountpartitionedbydate) | **GET** /v2/analytics/paymentObjectBroadcasts/count/date/created | Count created broadcasts by date
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsIndividualExecutionTimeOfCompletedBroadcasts**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastsindividualexecutiontimeofcompletedbroadcasts) | **GET** /v2/analytics/paymentObjectBroadcasts/executionTime/completed | Fetch execution time of completed broadcasts
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastsscheduledcountpartitionedbydate) | **GET** /v2/analytics/paymentObjectBroadcasts/count/date/scheduled | Count scheduled broadcasts by date
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByEmployee**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastsscheduledcountpartitionedbyemployee) | **GET** /v2/analytics/paymentObjectBroadcasts/count/employee/scheduled | Count scheduled broadcasts by employee
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsScheduledCountPartitionedByPhoneNumber**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastsscheduledcountpartitionedbyphonenumber) | **GET** /v2/analytics/paymentObjectBroadcasts/count/phoneNumber/scheduled | Count scheduled broadcasts by phone number
*AnalyticsApi* | [**fetchAnalyticsPaymentObjectBroadcastsScheduledSMSCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticspaymentobjectbroadcastsscheduledsmscountpartitionedbydate) | **GET** /v2/analytics/paymentObjectBroadcasts/sms/count/date/scheduled | Count scheduled SMS broadcasts by date
*AnalyticsApi* | [**fetchAnalyticsSentOutboundMessagesCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticssentoutboundmessagescountpartitionedbydate) | **GET** /v2/analytics/outboundSMS/count/date/sent | Count sent outbound messages by date
*AnalyticsApi* | [**fetchAnalyticsSentOutboundMessagesCountPartitionedByPhoneNumber**](docs/Api/AnalyticsApi.md#fetchanalyticssentoutboundmessagescountpartitionedbyphonenumber) | **GET** /v2/analytics/outboundSMS/count/phoneNumber/sent | Count sent outbound messages by phone number
*AnalyticsApi* | [**fetchAnalyticsStaticVoucherWalletPageViews**](docs/Api/AnalyticsApi.md#fetchanalyticsstaticvoucherwalletpageviews) | **GET** /v2/analytics/walletPageViews/staticVoucher/{voucherID} | Fetch a static voucher&#39;s wallet page views
*AnalyticsApi* | [**fetchAnalyticsTCPAStopCountPartitionedByDate**](docs/Api/AnalyticsApi.md#fetchanalyticstcpastopcountpartitionedbydate) | **GET** /v2/analytics/tcpa/count/date/stop | Count TCPA (STOP) entries by date
*AnalyticsApi* | [**fetchAnalyticsTCPAStopCountPartitionedByPhoneNumber**](docs/Api/AnalyticsApi.md#fetchanalyticstcpastopcountpartitionedbyphonenumber) | **GET** /v2/analytics/tcpa/count/phoneNumber/stop | Count TCPA (STOP) entries by phone number
*AnalyticsApi* | [**fetchAnalyticsTotalAmountRedeemedPerMerchantCredit**](docs/Api/AnalyticsApi.md#fetchanalyticstotalamountredeemedpermerchantcredit) | **GET** /v2/analytics/membership/merchantCredit/amount/redeemed | Fetch redeemed amount of merchant credits
*AnalyticsApi* | [**fetchAnalyticsTotalAmountRedeemedPerTier**](docs/Api/AnalyticsApi.md#fetchanalyticstotalamountredeemedpertier) | **GET** /v2/analytics/membership/tier/amount/redeemed | Fetch redeemed amoun̥t of tiers
*AnalyticsApi* | [**fetchAnalyticsTotalAmountRefundedPerMerchantCredit**](docs/Api/AnalyticsApi.md#fetchanalyticstotalamountrefundedpermerchantcredit) | **GET** /v2/analytics/membership/merchantCredit/amount/refunded | Fetch refunded amount of merchant credits
*AnalyticsApi* | [**fetchAnalyticsTotalAmountRefundedPerTier**](docs/Api/AnalyticsApi.md#fetchanalyticstotalamountrefundedpertier) | **GET** /v2/analytics/membership/tier/amount/refunded | Fetch refunded amount of tiers
*AnalyticsApi* | [**fetchAnalyticsTotalPointsRedeemed**](docs/Api/AnalyticsApi.md#fetchanalyticstotalpointsredeemed) | **GET** /v2/analytics/membership/member/points/redeemed | Count redeemed points
*AnalyticsApi* | [**fetchAnalyticsTotalPointsRefunded**](docs/Api/AnalyticsApi.md#fetchanalyticstotalpointsrefunded) | **GET** /v2/analytics/membership/member/points/refunded | Count refunded points
*AnalyticsApi* | [**fetchAnalyticsWalletSessionActivity**](docs/Api/AnalyticsApi.md#fetchanalyticswalletsessionactivity) | **GET** /v2/analytics/walletPageViews/session/activity/{sessionID} | Fetch session activity
*AnalyticsApi* | [**fetchWalletPageViewByID**](docs/Api/AnalyticsApi.md#fetchwalletpageviewbyid) | **GET** /v2/analytics/walletPageViews/activity/{id} | Fetch session activity by wallet page view ID
*AppleWalletSubscribersApi* | [**fetchAppleWalletSubscriberActivity**](docs/Api/AppleWalletSubscribersApi.md#fetchapplewalletsubscriberactivity) | **GET** /v2/apple/wallet/pass/subscriber/activity/{subscriptionID} | Fetch subscriber activity
*AppleWalletSubscribersApi* | [**fetchAppleWalletSubscribers**](docs/Api/AppleWalletSubscribersApi.md#fetchapplewalletsubscribers) | **GET** /v2/apple/wallet/pass/subscribers/all | Fetch all subscribers
*BillingApi* | [**cancelPlan**](docs/Api/BillingApi.md#cancelplan) | **DELETE** /v2/billing/plan | Cancel billing plan and revert to default
*BillingApi* | [**changePlan**](docs/Api/BillingApi.md#changeplan) | **PUT** /v2/billing/plan | Change billing plan
*BillingApi* | [**fetchIndustry**](docs/Api/BillingApi.md#fetchindustry) | **GET** /v2/billing/industry | Fetch merchant&#39;s industry
*BillingApi* | [**fetchInvoices**](docs/Api/BillingApi.md#fetchinvoices) | **GET** /v2/billing/invoices/all | Fetch all invoices
*BillingApi* | [**fetchSubscription**](docs/Api/BillingApi.md#fetchsubscription) | **GET** /v2/billing/subscription | Fetch subscription
*BillingApi* | [**fetchUsageSummary**](docs/Api/BillingApi.md#fetchusagesummary) | **GET** /v2/billing/summary | Fetch usage summary
*BillingApi* | [**savePaymentMethod**](docs/Api/BillingApi.md#savepaymentmethod) | **PUT** /v2/billing/paymentMethod | Save payment method
*BillingApi* | [**upcomingInvoices**](docs/Api/BillingApi.md#upcominginvoices) | **GET** /v2/billing/invoices/upcoming | Fetch upcoming invoices
*BillingApi* | [**verifyPaymentMethod**](docs/Api/BillingApi.md#verifypaymentmethod) | **GET** /v2/billing/paymentMethod | Verify payment method
*ClubMembersPointsApi* | [**archiveMember**](docs/Api/ClubMembersPointsApi.md#archivemember) | **DELETE** /v2/membership/member/{id} | Archive member
*ClubMembersPointsApi* | [**createMember**](docs/Api/ClubMembersPointsApi.md#createmember) | **POST** /v2/membership/member | Create member
*ClubMembersPointsApi* | [**fetchMemberById**](docs/Api/ClubMembersPointsApi.md#fetchmemberbyid) | **GET** /v2/membership/member/{id} | Fetch member
*ClubMembersPointsApi* | [**fetchMemberHistoryLog**](docs/Api/ClubMembersPointsApi.md#fetchmemberhistorylog) | **POST** /v2/membership/member/history/log | Fetch history
*ClubMembersPointsApi* | [**fetchMemberRedemptionLog**](docs/Api/ClubMembersPointsApi.md#fetchmemberredemptionlog) | **POST** /v2/membership/member/redemption/log | Fetch redemption log
*ClubMembersPointsApi* | [**fetchMembersByPage**](docs/Api/ClubMembersPointsApi.md#fetchmembersbypage) | **POST** /v2/membership/member/page | Fetch members by page
*ClubMembersPointsApi* | [**fetchMembersCount**](docs/Api/ClubMembersPointsApi.md#fetchmemberscount) | **GET** /v2/membership/member/count | Count active members
*ClubMembersPointsApi* | [**restoreMember**](docs/Api/ClubMembersPointsApi.md#restoremember) | **PATCH** /v2/membership/member/{id} | Restore member
*ClubMembersPointsApi* | [**searchMembers**](docs/Api/ClubMembersPointsApi.md#searchmembers) | **POST** /v2/membership/member/search | Search for members
*ClubMembersPointsApi* | [**updateMember**](docs/Api/ClubMembersPointsApi.md#updatemember) | **PUT** /v2/membership/member/{id} | Update member
*ConfigurationApi* | [**createPublicChatRoom**](docs/Api/ConfigurationApi.md#createpublicchatroom) | **POST** /v2/wallet/createPublicChatRoom | 
*ConfigurationApi* | [**saveWalletRecord**](docs/Api/ConfigurationApi.md#savewalletrecord) | **PUT** /v2/wallet | Update wallet record
*CountriesApi* | [**fetchAllCountries**](docs/Api/CountriesApi.md#fetchallcountries) | **GET** /system/countries/all | Fetch all countries
*CustomerApi* | [**fetchActiveVouchers**](docs/Api/CustomerApi.md#fetchactivevouchers) | **GET** /v2/customer/vouchers/active | Fetch active static vouchers
*CustomerApi* | [**fetchAllVouchers**](docs/Api/CustomerApi.md#fetchallvouchers) | **GET** /v2/customer/vouchers/all | Fetch all static vouchers
*CustomerApi* | [**fetchExpiredVouchers**](docs/Api/CustomerApi.md#fetchexpiredvouchers) | **GET** /v2/customer/vouchers/expired | Fetch expired static vouchers
*CustomerApi* | [**fetchRedeemedVouchers**](docs/Api/CustomerApi.md#fetchredeemedvouchers) | **GET** /v2/customer/vouchers/redeemed | Fetch redeemed static vouchers
*CustomerApi* | [**fetchRefundedVouchers**](docs/Api/CustomerApi.md#fetchrefundedvouchers) | **GET** /v2/customer/vouchers/refunded | Fetch refunded static vouchers
*CustomerApi* | [**fetchUpcomingVouchers**](docs/Api/CustomerApi.md#fetchupcomingvouchers) | **GET** /v2/customer/vouchers/upcoming | Fetch upcoming static vouchers
*CustomerApi* | [**fetchWalletViewsForSession**](docs/Api/CustomerApi.md#fetchwalletviewsforsession) | **GET** /v2/customer/walletViews/session/{id} | Fetch Wallet Views for Session
*CustomerApi* | [**searchByMemberID**](docs/Api/CustomerApi.md#searchbymemberid) | **POST** /v2/customer/search/memberID | Find members with memberID
*CustomerApi* | [**searchByPhoneNumber**](docs/Api/CustomerApi.md#searchbyphonenumber) | **POST** /v2/customer/search/phoneNumber | Find members with phone number
*DashboardApi* | [**fetchDashboardActiveStaticVoucherCampaignsCount**](docs/Api/DashboardApi.md#fetchdashboardactivestaticvouchercampaignscount) | **GET** /v2/dashboard/count/staticVoucherCampaigns/active | Count active static voucher campaigns
*DashboardApi* | [**fetchDashboardActiveStaticVouchersCount**](docs/Api/DashboardApi.md#fetchdashboardactivestaticvoucherscount) | **GET** /v2/dashboard/count/staticVouchers/active | Count active static vouchers
*DashboardApi* | [**fetchDashboardAppleWalletSubscribersCount**](docs/Api/DashboardApi.md#fetchdashboardapplewalletsubscriberscount) | **GET** /v2/dashboard/count/appleWallet/subscribers | Count Apple Wallet Subscribers
*DashboardApi* | [**fetchDashboardEmployeesCount**](docs/Api/DashboardApi.md#fetchdashboardemployeescount) | **GET** /v2/dashboard/count/employees | Count employees
*DashboardApi* | [**fetchDashboardMembersCount**](docs/Api/DashboardApi.md#fetchdashboardmemberscount) | **GET** /v2/dashboard/count/members | Count members
*DashboardApi* | [**fetchDashboardMembershipTiersCount**](docs/Api/DashboardApi.md#fetchdashboardmembershiptierscount) | **GET** /v2/dashboard/count/membershipTiers | Count tiers
*DashboardApi* | [**fetchDashboardNewsArticlesCount**](docs/Api/DashboardApi.md#fetchdashboardnewsarticlescount) | **GET** /v2/dashboard/count/newsArticles | Count News Articles
*DashboardApi* | [**fetchDashboardOptInListsCount**](docs/Api/DashboardApi.md#fetchdashboardoptinlistscount) | **GET** /v2/dashboard/count/optInLists | Count opt in lists
*DashboardApi* | [**fetchDashboardOptInSourcesCount**](docs/Api/DashboardApi.md#fetchdashboardoptinsourcescount) | **GET** /v2/dashboard/count/optInSources | Count opt in sources
*DashboardApi* | [**fetchDashboardOutboundSMSCount**](docs/Api/DashboardApi.md#fetchdashboardoutboundsmscount) | **GET** /v2/dashboard/count/sms/outbound | Count Outbound SMS
*DashboardApi* | [**fetchDashboardPOSMachinesCount**](docs/Api/DashboardApi.md#fetchdashboardposmachinescount) | **GET** /v2/dashboard/count/pos/machines | Count POS Machines
*DashboardApi* | [**fetchDashboardPOSTransactionsCount**](docs/Api/DashboardApi.md#fetchdashboardpostransactionscount) | **GET** /v2/dashboard/count/pos/transactions | Count POS Transactions
*DashboardApi* | [**fetchDashboardPerformancesCount**](docs/Api/DashboardApi.md#fetchdashboardperformancescount) | **GET** /v2/dashboard/count/performances | Count Performances
*DashboardApi* | [**fetchDashboardPhoneNumbersCount**](docs/Api/DashboardApi.md#fetchdashboardphonenumberscount) | **GET** /v2/dashboard/count/phoneNumbers | Count phone numbers
*DashboardApi* | [**fetchDashboardRedemptionsCount**](docs/Api/DashboardApi.md#fetchdashboardredemptionscount) | **GET** /v2/dashboard/count/pos/redemptions | Count POS redemptions
*DashboardApi* | [**fetchDashboardRefundsCount**](docs/Api/DashboardApi.md#fetchdashboardrefundscount) | **GET** /v2/dashboard/count/pos/refunds | Count POS refunds
*DashboardApi* | [**fetchDashboardWalletPageViewsCount**](docs/Api/DashboardApi.md#fetchdashboardwalletpageviewscount) | **GET** /v2/dashboard/count/wallet/pageViews | Count Wallet page views
*DashboardApi* | [**fetchDashboardWidgetsCatalog**](docs/Api/DashboardApi.md#fetchdashboardwidgetscatalog) | **GET** /v2/dashboard/widgets | Fetch widgets catalog
*DynamicVouchersApi* | [**createDynamicVoucher**](docs/Api/DynamicVouchersApi.md#createdynamicvoucher) | **POST** /v2/payment/dynamicVoucher | Create dynamic voucher
*DynamicVouchersApi* | [**fetchAllDynamicVouchers**](docs/Api/DynamicVouchersApi.md#fetchalldynamicvouchers) | **GET** /v2/payment/dynamicVoucher/all | Fetch all active dynamic vouchers
*DynamicVouchersApi* | [**fetchDynamicVoucherById**](docs/Api/DynamicVouchersApi.md#fetchdynamicvoucherbyid) | **GET** /v2/payment/dynamicVoucher/{id} | Fetch dynamic voucher
*DynamicVouchersApi* | [**fetchDynamicVoucherRedemptions**](docs/Api/DynamicVouchersApi.md#fetchdynamicvoucherredemptions) | **GET** /v2/payment/dynamicVoucher/redemptions/{id} | Fetch redemptions
*DynamicVouchersApi* | [**fetchReachStatsOfAllDynamicVouchers**](docs/Api/DynamicVouchersApi.md#fetchreachstatsofalldynamicvouchers) | **GET** /v2/payment/dynamicVoucher/reach/all | Get the reach statistics of all the dynamic vouchers
*DynamicVouchersApi* | [**fetchReachStatsOfIndividualDynamicVoucher**](docs/Api/DynamicVouchersApi.md#fetchreachstatsofindividualdynamicvoucher) | **GET** /v2/payment/dynamicVoucher/reach/{dynamicVoucherID} | Get the reach statistics of an individual dynamic voucher
*DynamicVouchersApi* | [**saveDynamicVoucher**](docs/Api/DynamicVouchersApi.md#savedynamicvoucher) | **PUT** /v2/payment/dynamicVoucher/{id} | Update dynamic voucher
*EmployeeAPIKeysApi* | [**archiveEmployeeAPIKeys**](docs/Api/EmployeeAPIKeysApi.md#archiveemployeeapikeys) | **DELETE** /v2/employee/apiKeys/{id} | Archive employee API Key
*EmployeeAPIKeysApi* | [**createEmployeeAPIKeys**](docs/Api/EmployeeAPIKeysApi.md#createemployeeapikeys) | **POST** /v2/employee/apiKeys | Create employee API Key
*EmployeeAPIKeysApi* | [**fetchAllEmployeeAPIKeys**](docs/Api/EmployeeAPIKeysApi.md#fetchallemployeeapikeys) | **GET** /v2/employee/apiKeys/all | Fetch all employee API Keys
*EmployeeAPIKeysApi* | [**fetchEmployeeAPIKeyById**](docs/Api/EmployeeAPIKeysApi.md#fetchemployeeapikeybyid) | **GET** /v2/employee/apiKeys/{id} | Fetch API Key
*EmployeeAPIKeysApi* | [**updateEmployeeAPIKeys**](docs/Api/EmployeeAPIKeysApi.md#updateemployeeapikeys) | **PUT** /v2/employee/apiKeys/{id} | Update employee API Key
*EmployeeAccessApi* | [**register**](docs/Api/EmployeeAccessApi.md#register) | **POST** /authentication/register | Register
*EmployeesApi* | [**addPeerToRoles**](docs/Api/EmployeesApi.md#addpeertoroles) | **POST** /v2/employee/roles/peer/{userID} | Add peer to roles
*EmployeesApi* | [**createAlert**](docs/Api/EmployeesApi.md#createalert) | **POST** /v2/employee/alert | Create employee alert
*EmployeesApi* | [**createDocument**](docs/Api/EmployeesApi.md#createdocument) | **POST** /v2/employee/document | Create document
*EmployeesApi* | [**createEmployeePeer**](docs/Api/EmployeesApi.md#createemployeepeer) | **POST** /v2/employee/peer | Create employee peer
*EmployeesApi* | [**createFile**](docs/Api/EmployeesApi.md#createfile) | **POST** /v2/employee/file/create | Create file
*EmployeesApi* | [**createMediaFile**](docs/Api/EmployeesApi.md#createmediafile) | **POST** /v2/employee/mediaFile | Create media file
*EmployeesApi* | [**createStaticVoucherCampaignsGroup**](docs/Api/EmployeesApi.md#createstaticvouchercampaignsgroup) | **POST** /v2/employee/staticVoucherCampaignsGroup | Create static voucher campaign group
*EmployeesApi* | [**deleteDocument**](docs/Api/EmployeesApi.md#deletedocument) | **DELETE** /v2/employee/document/{documentID} | Delete document
*EmployeesApi* | [**deleteMediaFile**](docs/Api/EmployeesApi.md#deletemediafile) | **DELETE** /v2/employee/mediaFile/{mediaFileID} | Delete media file
*EmployeesApi* | [**downloadFile**](docs/Api/EmployeesApi.md#downloadfile) | **GET** /v2/employee/file/download/{fileID} | Fetch URL for file download
*EmployeesApi* | [**exportClubMembers**](docs/Api/EmployeesApi.md#exportclubmembers) | **PUT** /v2/employee/export/members | Export club members
*EmployeesApi* | [**exportMerchantCredits**](docs/Api/EmployeesApi.md#exportmerchantcredits) | **PUT** /v2/employee/export/merchantCredits | Export merchant credits
*EmployeesApi* | [**exportStaticVoucherCampaign**](docs/Api/EmployeesApi.md#exportstaticvouchercampaign) | **PUT** /v2/employee/export/staticVoucherCampaign/{campaignID} | Export static voucher campaign
*EmployeesApi* | [**failedImport**](docs/Api/EmployeesApi.md#failedimport) | **GET** /v2/employee/file/imports/failed/{fileID} | Fetch URL to download a failed import
*EmployeesApi* | [**fetchDocuments**](docs/Api/EmployeesApi.md#fetchdocuments) | **GET** /v2/employee/documents/all | Fetch all documents
*EmployeesApi* | [**fetchDynamicVouchers**](docs/Api/EmployeesApi.md#fetchdynamicvouchers) | **GET** /v2/employee/dynamicVouchers/all | Fetch all dynamic vouchers
*EmployeesApi* | [**fetchEmployeeStaticVoucherCampaignGroups**](docs/Api/EmployeesApi.md#fetchemployeestaticvouchercampaigngroups) | **GET** /v2/employee/staticVoucherCampaignGroups/all | Fetch static voucher campaign groups
*EmployeesApi* | [**fetchEmployeeStaticVoucherCampaigns**](docs/Api/EmployeesApi.md#fetchemployeestaticvouchercampaigns) | **GET** /v2/employee/staticVoucherCampaigns/all | Fetch static voucher campaigns
*EmployeesApi* | [**fetchMediaFiles**](docs/Api/EmployeesApi.md#fetchmediafiles) | **GET** /v2/employee/mediaFiles/all | Fetch all media files
*EmployeesApi* | [**fetchMerchant**](docs/Api/EmployeesApi.md#fetchmerchant) | **GET** /v2/employee/merchant | Fetch merchant information
*EmployeesApi* | [**fetchMessages**](docs/Api/EmployeesApi.md#fetchmessages) | **GET** /v2/employee/messages/all | Fetch all messages
*EmployeesApi* | [**fetchOptInListSource**](docs/Api/EmployeesApi.md#fetchoptinlistsource) | **GET** /v2/employee/optInListSource/{sourceID} | Fetch opt in list source
*EmployeesApi* | [**fetchOptInListSources**](docs/Api/EmployeesApi.md#fetchoptinlistsources) | **GET** /v2/employee/optInListSources/all | Fetch all opt in list sources
*EmployeesApi* | [**fetchPeerActivity**](docs/Api/EmployeesApi.md#fetchpeeractivity) | **GET** /v2/employee/peer/activity/{employeeID} | Fetch peer activity
*EmployeesApi* | [**fetchPeersPermissions**](docs/Api/EmployeesApi.md#fetchpeerspermissions) | **GET** /v2/employee/peer/permissions/{userID} | Fetch peer permissions
*EmployeesApi* | [**importClubMembers**](docs/Api/EmployeesApi.md#importclubmembers) | **POST** /v2/employee/import/members | Import club members
*EmployeesApi* | [**importMerchantCredits**](docs/Api/EmployeesApi.md#importmerchantcredits) | **POST** /v2/employee/import/merchantCredits | Import merchant credits
*EmployeesApi* | [**loadWebpagesOfEmployee**](docs/Api/EmployeesApi.md#loadwebpagesofemployee) | **GET** /v2/employee/webpages/all | Retrieve employee&#39;s webpages
*EmployeesApi* | [**modifyPeersRoles**](docs/Api/EmployeesApi.md#modifypeersroles) | **PUT** /v2/employee/peer/permissions/{userID} | Modify peer&#39;s roles
*EmployeesApi* | [**presignFile**](docs/Api/EmployeesApi.md#presignfile) | **POST** /v2/employee/file/presign | Presign file for upload
*EmployeesApi* | [**removePeerFromAllRoles**](docs/Api/EmployeesApi.md#removepeerfromallroles) | **DELETE** /v2/employee/peer/permissions/{userID} | Remove peer from all roles
*EmployeesApi* | [**scheduleAdvertisementCredit**](docs/Api/EmployeesApi.md#scheduleadvertisementcredit) | **POST** /v2/employee/sms/schedule/adCredit/{advertisementCreditID} | Schedule Ad Credit
*EmployeesApi* | [**scheduleDynamicVoucher**](docs/Api/EmployeesApi.md#scheduledynamicvoucher) | **POST** /v2/employee/sms/schedule/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to list
*EmployeesApi* | [**scheduleDynamicVoucherToRecipient**](docs/Api/EmployeesApi.md#scheduledynamicvouchertorecipient) | **POST** /v2/employee/sms/schedule/recipient/dynamicVoucher/{dynamicVoucherID} | Schedule Dyanamic Voucher to recipient
*EmployeesApi* | [**scheduleSimpleSMS**](docs/Api/EmployeesApi.md#schedulesimplesms) | **POST** /v2/employee/sms/schedule/simple | Schedule Simple SMS broadcast to list
*EmployeesApi* | [**scheduleSimpleSMSToRecipient**](docs/Api/EmployeesApi.md#schedulesimplesmstorecipient) | **POST** /v2/employee/sms/schedule/recipient/simple | Schedule Simple SMS broadcast to recipient
*EmployeesApi* | [**sendHelpDeskResponse**](docs/Api/EmployeesApi.md#sendhelpdeskresponse) | **POST** /v2/employee/helpDesk/response | Send help desk response
*EmployeesApi* | [**sendSmsCampaignBroadcast**](docs/Api/EmployeesApi.md#sendsmscampaignbroadcast) | **POST** /v2/employee/sms/schedule/campaign/{staticVoucherCampaignID} | Schedule SMS Campaign Broadcast
*EmployeesApi* | [**setAlertsRead**](docs/Api/EmployeesApi.md#setalertsread) | **PATCH** /v2/employee/alerts | Mark alerts as read
*EmployeesApi* | [**setExportDataFilesRead**](docs/Api/EmployeesApi.md#setexportdatafilesread) | **PUT** /v2/employee/export/dataFiles | Mark export data files as read
*EmployeesApi* | [**setHelpDeskRequestResolved**](docs/Api/EmployeesApi.md#sethelpdeskrequestresolved) | **PATCH** /v2/employee/helpDesk/request/{helpDeskRequestID} | Resolve help desk request
*EmployeesApi* | [**setMessagesRead**](docs/Api/EmployeesApi.md#setmessagesread) | **PATCH** /v2/employee/messages | Mark messages as read
*EmployeesApi* | [**setProfilePicture**](docs/Api/EmployeesApi.md#setprofilepicture) | **PUT** /v2/employee/profile/picture | Set profile picture
*EmployeesApi* | [**updateClubMembers**](docs/Api/EmployeesApi.md#updateclubmembers) | **PUT** /v2/employee/update/members | Update club members
*EmployeesApi* | [**updateEmployeePeer**](docs/Api/EmployeesApi.md#updateemployeepeer) | **PUT** /v2/employee/peer/{userID} | Update peer
*ImageGridApi* | [**archiveImageGrid**](docs/Api/ImageGridApi.md#archiveimagegrid) | **DELETE** /v2/imageGrid/{id} | Archive image
*ImageGridApi* | [**createImageGrid**](docs/Api/ImageGridApi.md#createimagegrid) | **POST** /v2/imageGrid | Create image
*ImageGridApi* | [**fetchAllImageGrid**](docs/Api/ImageGridApi.md#fetchallimagegrid) | **GET** /v2/imageGrid/all | Fetch all images
*ImageGridApi* | [**restoreImageGrid**](docs/Api/ImageGridApi.md#restoreimagegrid) | **PATCH** /v2/imageGrid/{id} | Restore image
*ImageGridApi* | [**updateImageGrid**](docs/Api/ImageGridApi.md#updateimagegrid) | **PUT** /v2/imageGrid/{id} | Update image
*IndustriesApi* | [**fetchAllIndustries**](docs/Api/IndustriesApi.md#fetchallindustries) | **GET** /system/industries/all | Fetch all industries
*InfoGenesisReportsApi* | [**countAdCreditsRedemptions**](docs/Api/InfoGenesisReportsApi.md#countadcreditsredemptions) | **POST** /v2/pos/infogenesis/count/adCredits/redemptions | Count redeemed ad credits
*InfoGenesisReportsApi* | [**countAdCreditsRefunds**](docs/Api/InfoGenesisReportsApi.md#countadcreditsrefunds) | **POST** /v2/pos/infogenesis/count/adCredits/refunds | Count refunded ad credits
*InfoGenesisReportsApi* | [**countDynamicVoucherRedemptions**](docs/Api/InfoGenesisReportsApi.md#countdynamicvoucherredemptions) | **POST** /v2/pos/infogenesis/count/dynamicVoucher/redemptions | Count dynamic voucher redemptions
*InfoGenesisReportsApi* | [**countDynamicVoucherRefunds**](docs/Api/InfoGenesisReportsApi.md#countdynamicvoucherrefunds) | **POST** /v2/pos/infogenesis/count/dynamicVoucher/refunds | Count dynamic voucher refunds
*InfoGenesisReportsApi* | [**countMembershipPointsRedemptions**](docs/Api/InfoGenesisReportsApi.md#countmembershippointsredemptions) | **POST** /v2/pos/infogenesis/count/membershipPoints/redemptions | Count redeemed membership points
*InfoGenesisReportsApi* | [**countMembershipPointsRefunds**](docs/Api/InfoGenesisReportsApi.md#countmembershippointsrefunds) | **POST** /v2/pos/infogenesis/count/membershipPoints/refunds | Count refunded membership points
*InfoGenesisReportsApi* | [**countMembershipTierRedemptions**](docs/Api/InfoGenesisReportsApi.md#countmembershiptierredemptions) | **POST** /v2/pos/infogenesis/count/membershipTier/redemptions | Count tier redemptions
*InfoGenesisReportsApi* | [**countMembershipTierRefunds**](docs/Api/InfoGenesisReportsApi.md#countmembershiptierrefunds) | **POST** /v2/pos/infogenesis/count/membershipTier/refunds | Count tier refunds
*InfoGenesisReportsApi* | [**countMerchantCreditRedemptions**](docs/Api/InfoGenesisReportsApi.md#countmerchantcreditredemptions) | **POST** /v2/pos/infogenesis/count/merchantCredit/redemptions | Count redeemed merchant credits
*InfoGenesisReportsApi* | [**countMerchantCreditRefunds**](docs/Api/InfoGenesisReportsApi.md#countmerchantcreditrefunds) | **POST** /v2/pos/infogenesis/count/merchantCredit/refunds | Count refunded merchant credits
*InfoGenesisReportsApi* | [**countStaticVoucherRedemptions**](docs/Api/InfoGenesisReportsApi.md#countstaticvoucherredemptions) | **POST** /v2/pos/infogenesis/count/staticVoucher/redemptions | Count static voucher redemptions
*InfoGenesisReportsApi* | [**countStaticVoucherRefunds**](docs/Api/InfoGenesisReportsApi.md#countstaticvoucherrefunds) | **POST** /v2/pos/infogenesis/count/staticVoucher/refunds | Count static voucher refunds
*InfoGenesisReportsApi* | [**fetchInfoGenesisAuthorizations**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisauthorizations) | **POST** /v2/pos/infogenesis/authorizations | Fetch InfoGenesis authorizations
*InfoGenesisReportsApi* | [**fetchInfoGenesisCampaignData**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesiscampaigndata) | **POST** /v2/pos/infogenesis/campaign | Fetch campaign information
*InfoGenesisReportsApi* | [**fetchInfoGenesisLookupRequests**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesislookuprequests) | **POST** /v2/pos/infogenesis/requests/lookup | Fetch InfoGenesis lookup requests
*InfoGenesisReportsApi* | [**fetchInfoGenesisLookupRequestsErrors**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesislookuprequestserrors) | **POST** /v2/pos/infogenesis/requests/lookup/errors | Fetch InfoGenesis lookup request errors
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedeemedStaticVouchers**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredeemedstaticvouchers) | **POST** /v2/pos/infogenesis/staticVouchers/redeemed | Fetch redeemed static vouchers
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedeemedUniquePostingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredeemeduniquepostingids) | **GET** /v2/pos/infogenesis/postingIDs/redeemed | Fetch redeemed InfoGenesis unique posting IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedemptions**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredemptions) | **POST** /v2/pos/infogenesis/redemptions | Fetch InfoGenesis redemptions
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefundedRoutingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefundedroutingids) | **POST** /v2/pos/infogenesis/routingIDs/refunded | Fetch refunded InfoGenesis unique posting IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefundedStaticVouchers**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefundedstaticvouchers) | **POST** /v2/pos/infogenesis/staticVouchers/refunded | Fetch refunded static vouchers
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefunds**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefunds) | **POST** /v2/pos/infogenesis/refunds | Fetch InfoGenesis refunds
*InfoGenesisReportsApi* | [**fetchInfoGenesisRequest**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrequest) | **GET** /v2/pos/infogenesis/request/{transactionID} | Fetch InfoGenesis request with transaction ID
*InfoGenesisReportsApi* | [**fetchInfoGenesisRequests**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrequests) | **POST** /v2/pos/infogenesis/requests | Fetch InfoGenesis requests with routing IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisResponseErrors**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisresponseerrors) | **GET** /v2/pos/infogenesis/responses/errors | Fetch InfoGenesis response errors
*InfoGenesisReportsApi* | [**fetchInfoGenesisResponses**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisresponses) | **POST** /v2/pos/infogenesis/responses | Fetch InfoGenesis responses with routing IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisTransactionsWithUniquePostingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesistransactionswithuniquepostingids) | **POST** /v2/pos/infogenesis/transactions | Fetch InfoGenesis transactions
*IntegratedTerminalsApi* | [**archivePOSMachine**](docs/Api/IntegratedTerminalsApi.md#archiveposmachine) | **DELETE** /v2/pos/machine/{id} | Archive POS machine
*IntegratedTerminalsApi* | [**createPOSMachine**](docs/Api/IntegratedTerminalsApi.md#createposmachine) | **POST** /v2/pos/machine | Create POS machine
*IntegratedTerminalsApi* | [**fetchAllPOSMachines**](docs/Api/IntegratedTerminalsApi.md#fetchallposmachines) | **GET** /v2/pos/machine/all | Fetch all POS machines
*IntegratedTerminalsApi* | [**restorePOSMachine**](docs/Api/IntegratedTerminalsApi.md#restoreposmachine) | **PATCH** /v2/pos/machine/{id} | Restore POS machine
*IntegratedTerminalsApi* | [**updatePOSMachine**](docs/Api/IntegratedTerminalsApi.md#updateposmachine) | **PUT** /v2/pos/machine/{id} | Update POS machine
*InteractionsApi* | [**createAdvertisementCreditScan**](docs/Api/InteractionsApi.md#createadvertisementcreditscan) | **POST** /wallet/advertisementCredit/scan/{adCreditID} | Create ad credit scan
*InteractionsApi* | [**createEmployeeVCard**](docs/Api/InteractionsApi.md#createemployeevcard) | **GET** /wallet/employee/vcard/{id} | Fetch an employee&#39;s VCard
*InteractionsApi* | [**createIcsFile**](docs/Api/InteractionsApi.md#createicsfile) | **GET** /wallet/liveevent/ics/{id} | Fetch ICS for live event
*InteractionsApi* | [**fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID**](docs/Api/InteractionsApi.md#fetchallstaticvouchersassociatedwithcustomerwithvoucherid) | **GET** /wallet/staticVoucher/all | Fetch a customer&#39;s static vouchers on the basis of a given voucher ID
*InteractionsApi* | [**fetchDynamicVoucherWithVoucherID**](docs/Api/InteractionsApi.md#fetchdynamicvoucherwithvoucherid) | **GET** /wallet/dynamicVoucher/{voucherID} | Fetch dynamic voucher
*InteractionsApi* | [**fetchMemberInformation**](docs/Api/InteractionsApi.md#fetchmemberinformation) | **GET** /wallet/member | Fetch member information
*InteractionsApi* | [**fetchStaticVoucherWithVoucherID**](docs/Api/InteractionsApi.md#fetchstaticvoucherwithvoucherid) | **GET** /wallet/staticVoucher/{voucherID} | Fetch static voucher
*InteractionsApi* | [**fetchWalletPageWithToken**](docs/Api/InteractionsApi.md#fetchwalletpagewithtoken) | **POST** /wallet/page/token | Fetch page with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.
*InteractionsApi* | [**fetchWalletPaymentObjectWithToken**](docs/Api/InteractionsApi.md#fetchwalletpaymentobjectwithtoken) | **POST** /wallet/paymentObject/token | Fetch payment object with token NOTE: This route exists because a token can completely change the dataset returned to the client. A simple fetch just logs the token with the request, but a fetchWithToken request can have a very different object returned to the client.
*InteractionsApi* | [**findByVanityHandle**](docs/Api/InteractionsApi.md#findbyvanityhandle) | **GET** /wallet/vanityHandle/{handle} | Fetch vanity handle
*InteractionsApi* | [**identifyItem**](docs/Api/InteractionsApi.md#identifyitem) | **GET** /wallet/item/identify/{itemID} | Identify item
*LinkBookApi* | [**archiveLinkBook**](docs/Api/LinkBookApi.md#archivelinkbook) | **DELETE** /v2/linkBook/{id} | Archive link
*LinkBookApi* | [**createLinkBook**](docs/Api/LinkBookApi.md#createlinkbook) | **POST** /v2/linkBook | Create link
*LinkBookApi* | [**fetchAllLinkBook**](docs/Api/LinkBookApi.md#fetchalllinkbook) | **GET** /v2/linkBook/all | Fetch all links
*LinkBookApi* | [**restoreLinkBook**](docs/Api/LinkBookApi.md#restorelinkbook) | **PATCH** /v2/linkBook/{id} | Restore link
*LinkBookApi* | [**updateLinkBook**](docs/Api/LinkBookApi.md#updatelinkbook) | **PUT** /v2/linkBook/{id} | Update link
*LinkBookSectionApi* | [**archiveLinkBookSection**](docs/Api/LinkBookSectionApi.md#archivelinkbooksection) | **DELETE** /v2/linkBookSection/{id} | Archive link book section
*LinkBookSectionApi* | [**createLinkBookSection**](docs/Api/LinkBookSectionApi.md#createlinkbooksection) | **POST** /v2/linkBookSection | Create link book section
*LinkBookSectionApi* | [**fetchAllLinkBookSections**](docs/Api/LinkBookSectionApi.md#fetchalllinkbooksections) | **GET** /v2/linkBookSection/all | Fetch all link book sections
*LinkBookSectionApi* | [**restoreLinkBookSection**](docs/Api/LinkBookSectionApi.md#restorelinkbooksection) | **PATCH** /v2/linkBookSection/{id} | Restore link book section
*LinkBookSectionApi* | [**updateLinkBookSection**](docs/Api/LinkBookSectionApi.md#updatelinkbooksection) | **PUT** /v2/linkBookSection/{id} | Update link book section
*LoginAndLogoutApi* | [**login**](docs/Api/LoginAndLogoutApi.md#login) | **POST** /authentication/login | Login
*LoginAndLogoutApi* | [**loginStatus**](docs/Api/LoginAndLogoutApi.md#loginstatus) | **GET** /authentication/status/{token} | Retrieve status of session token
*LoginAndLogoutApi* | [**logout**](docs/Api/LoginAndLogoutApi.md#logout) | **DELETE** /authentication/logout | Logout
*MembershipTiersApi* | [**archiveMembershipTier**](docs/Api/MembershipTiersApi.md#archivemembershiptier) | **DELETE** /v2/membership/tier/{id} | Archive tier
*MembershipTiersApi* | [**createMembershipTier**](docs/Api/MembershipTiersApi.md#createmembershiptier) | **POST** /v2/membership/tier | Create tier
*MembershipTiersApi* | [**fetchAllMembershipTiers**](docs/Api/MembershipTiersApi.md#fetchallmembershiptiers) | **GET** /v2/membership/tier/all | Fetch all tiers
*MembershipTiersApi* | [**fetchAllMembershipTiersWithMemberCount**](docs/Api/MembershipTiersApi.md#fetchallmembershiptierswithmembercount) | **GET** /v2/membership/tier/allWithMemberCount | Fetch all tiers with member count
*MembershipTiersApi* | [**fetchMembershipTierById**](docs/Api/MembershipTiersApi.md#fetchmembershiptierbyid) | **GET** /v2/membership/tier/{id} | Fetch tier
*MembershipTiersApi* | [**fetchMembershipTierHistoryLog**](docs/Api/MembershipTiersApi.md#fetchmembershiptierhistorylog) | **POST** /v2/membership/tier/history/log | Fetch history
*MembershipTiersApi* | [**fetchMembershipTierRedemptionLog**](docs/Api/MembershipTiersApi.md#fetchmembershiptierredemptionlog) | **POST** /v2/membership/tier/redemption/log | Fetch redemption log
*MembershipTiersApi* | [**restoreMembershipTier**](docs/Api/MembershipTiersApi.md#restoremembershiptier) | **PATCH** /v2/membership/tier/{id} | Restore tier
*MembershipTiersApi* | [**updateMembershipTier**](docs/Api/MembershipTiersApi.md#updatemembershiptier) | **PUT** /v2/membership/tier/{id} | Update tier
*MerchantApi* | [**archiveMerchantProfile**](docs/Api/MerchantApi.md#archivemerchantprofile) | **DELETE** /v2/merchant/delete | Archive Merchant
*MerchantApi* | [**archivePaymentObjectBroadcast**](docs/Api/MerchantApi.md#archivepaymentobjectbroadcast) | **DELETE** /v2/merchant/paymentObjectBroadcast/{broadcastID} | Archive payment object broadcast
*MerchantApi* | [**countInboundSMS**](docs/Api/MerchantApi.md#countinboundsms) | **GET** /v2/merchant/sms/inbound/count/{phoneNumberID} | Count inbound SMSes
*MerchantApi* | [**exportInboundMessages**](docs/Api/MerchantApi.md#exportinboundmessages) | **PUT** /v2/merchant/sms/inbound/export/{phoneNumberID} | Export inbound messages
*MerchantApi* | [**exportOutboundMessages**](docs/Api/MerchantApi.md#exportoutboundmessages) | **PUT** /v2/merchant/sms/outbound/export/{phoneNumberID} | Export outbound messages
*MerchantApi* | [**fetchAdvertisementCreditBroadcasts**](docs/Api/MerchantApi.md#fetchadvertisementcreditbroadcasts) | **GET** /v2/merchant/broadcasts/adCredits/all | Fetch all ad credit broadcasts
*MerchantApi* | [**fetchCustomRoles**](docs/Api/MerchantApi.md#fetchcustomroles) | **GET** /v2/merchant/roles/custom | Fetch custom roles
*MerchantApi* | [**fetchDynamicVoucherBroadcasts**](docs/Api/MerchantApi.md#fetchdynamicvoucherbroadcasts) | **GET** /v2/merchant/broadcasts/dynamicVouchers/all | Fetch all dynamic voucher broadcasts
*MerchantApi* | [**fetchEmployees**](docs/Api/MerchantApi.md#fetchemployees) | **GET** /v2/merchant/employees/all | Fetch all employees
*MerchantApi* | [**fetchHelpDeskRequests**](docs/Api/MerchantApi.md#fetchhelpdeskrequests) | **GET** /v2/merchant/helpDeskRequests/{phoneNumberID} | Fetch help desk requests
*MerchantApi* | [**fetchImportedList**](docs/Api/MerchantApi.md#fetchimportedlist) | **GET** /v2/merchant/lists/imported/{listID} | Fetch imported list
*MerchantApi* | [**fetchImportedLists**](docs/Api/MerchantApi.md#fetchimportedlists) | **GET** /v2/merchant/lists/imported/all | Fetch all imported lists
*MerchantApi* | [**fetchInboundSMS**](docs/Api/MerchantApi.md#fetchinboundsms) | **GET** /v2/merchant/sms/inbound/{phoneNumberID} | Fetch inbound SMSes
*MerchantApi* | [**fetchInboundSMSByPage**](docs/Api/MerchantApi.md#fetchinboundsmsbypage) | **GET** /v2/merchant/sms/inbound/page/{phoneNumberID} | Fetch inbound SMSes by page
*MerchantApi* | [**fetchMerchantOutboundSMS**](docs/Api/MerchantApi.md#fetchmerchantoutboundsms) | **GET** /v2/merchant/sms/outbound/{phoneNumberID} | Fetch outbound SMSes
*MerchantApi* | [**fetchMerchantPhoneNumbers**](docs/Api/MerchantApi.md#fetchmerchantphonenumbers) | **GET** /v2/merchant/phoneNumbers/all | Fetch all phone numbers
*MerchantApi* | [**fetchOptInList**](docs/Api/MerchantApi.md#fetchoptinlist) | **GET** /v2/merchant/lists/optIn/{listID} | Fetch opt in list
*MerchantApi* | [**fetchOptInLists**](docs/Api/MerchantApi.md#fetchoptinlists) | **GET** /v2/merchant/lists/optIn/all | Fetch all opt in lists
*MerchantApi* | [**fetchPhoneNumber**](docs/Api/MerchantApi.md#fetchphonenumber) | **GET** /v2/merchant/phoneNumber/{phoneNumberID} | Fetch phone number
*MerchantApi* | [**fetchPublicEmployees**](docs/Api/MerchantApi.md#fetchpublicemployees) | **GET** /v2/merchant/employees/public | Fetch public representative employees of the merchant
*MerchantApi* | [**fetchSimpleSMSBroadcasts**](docs/Api/MerchantApi.md#fetchsimplesmsbroadcasts) | **GET** /v2/merchant/broadcasts/simpleSMS/all | Fetch all simple SMS broadcasts
*MerchantApi* | [**fetchStaticVoucherCampaignBroadcasts**](docs/Api/MerchantApi.md#fetchstaticvouchercampaignbroadcasts) | **GET** /v2/merchant/broadcasts/staticVoucherCampaign/all | Fetch all static voucher campaign broadcasts
*MerchantApi* | [**fetchTCPAFilter**](docs/Api/MerchantApi.md#fetchtcpafilter) | **GET** /v2/merchant/tcpa/filter/all | Fetch all TCPA Filters
*MerchantApi* | [**fetchWalletConfiguration**](docs/Api/MerchantApi.md#fetchwalletconfiguration) | **GET** /v2/merchant/wallet/configuration | Fetch wallet configuration
*MerchantApi* | [**updateBillingContact**](docs/Api/MerchantApi.md#updatebillingcontact) | **PUT** /v2/merchant/billing/contact | Update billing contact
*MerchantApi* | [**updateMerchant**](docs/Api/MerchantApi.md#updatemerchant) | **PUT** /v2/merchant | Update merchant details
*MerchantApi* | [**updatePosIntegration**](docs/Api/MerchantApi.md#updateposintegration) | **PUT** /v2/merchant/pos/integration | Update POS Integration
*MerchantCreditsApi* | [**archiveMerchantCredit**](docs/Api/MerchantCreditsApi.md#archivemerchantcredit) | **DELETE** /v2/payment/merchantcredit/{id} | Archive merchant credit
*MerchantCreditsApi* | [**createMerchantCredit**](docs/Api/MerchantCreditsApi.md#createmerchantcredit) | **POST** /v2/payment/merchantcredit | Create merchant credit
*MerchantCreditsApi* | [**fetchMerchantCreditById**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditbyid) | **GET** /v2/payment/merchantcredit/{id} | Fetch merchant credit
*MerchantCreditsApi* | [**fetchMerchantCreditCount**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditcount) | **GET** /v2/payment/merchantcredit/count | Fetch all active merchant credits
*MerchantCreditsApi* | [**fetchMerchantCreditHistoryLog**](docs/Api/MerchantCreditsApi.md#fetchmerchantcredithistorylog) | **POST** /v2/payment/merchantcredit/history/log | Fetch history
*MerchantCreditsApi* | [**fetchMerchantCreditRedemptionLog**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditredemptionlog) | **POST** /v2/payment/merchantcredit/redemption/log | Fetch redemption log
*MerchantCreditsApi* | [**fetchMerchantCreditsByPage**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditsbypage) | **POST** /v2/payment/merchantcredit/page | Fetch merchant credits by page
*MerchantCreditsApi* | [**restoreMerchantCredit**](docs/Api/MerchantCreditsApi.md#restoremerchantcredit) | **PATCH** /v2/payment/merchantcredit/{id} | Restore merchant credit
*MerchantCreditsApi* | [**searchMerchantCredits**](docs/Api/MerchantCreditsApi.md#searchmerchantcredits) | **POST** /v2/payment/merchantcredit/search | Search for merchant credits
*MerchantCreditsApi* | [**updateMerchantCredit**](docs/Api/MerchantCreditsApi.md#updatemerchantcredit) | **PUT** /v2/payment/merchantcredit/{id} | Update merchant credit
*MerchantURLsApi* | [**archiveMerchantURL**](docs/Api/MerchantURLsApi.md#archivemerchanturl) | **DELETE** /v2/business/merchantUrl/{id} | Archive merchant url
*MerchantURLsApi* | [**createMerchantURL**](docs/Api/MerchantURLsApi.md#createmerchanturl) | **POST** /v2/business/merchantUrl | Create merchant url
*MerchantURLsApi* | [**fetchAllMerchantURLs**](docs/Api/MerchantURLsApi.md#fetchallmerchanturls) | **GET** /v2/business/merchantUrl/all | Fetch all merchant urls
*MerchantURLsApi* | [**fetchMerchantURL**](docs/Api/MerchantURLsApi.md#fetchmerchanturl) | **GET** /v2/business/merchantUrl/{id} | Fetch merchant url
*MerchantURLsApi* | [**fetchMerchantURLRequests**](docs/Api/MerchantURLsApi.md#fetchmerchanturlrequests) | **GET** /v2/business/merchantUrl/requests/{id} | Fetch requests
*MerchantURLsApi* | [**restoreMerchantURL**](docs/Api/MerchantURLsApi.md#restoremerchanturl) | **PATCH** /v2/business/merchantUrl/{id} | Restore merchant url
*MerchantURLsApi* | [**updateMerchantURL**](docs/Api/MerchantURLsApi.md#updatemerchanturl) | **PUT** /v2/business/merchantUrl/{id} | Update merchant url
*MobileTerminalApi* | [**fetchWalletItemFromMobileTerminal**](docs/Api/MobileTerminalApi.md#fetchwalletitemfrommobileterminal) | **GET** /v2/pos/mobile/item/{itemID} | Fetch item
*MobileTerminalApi* | [**findMemberByID**](docs/Api/MobileTerminalApi.md#findmemberbyid) | **GET** /v2/pos/mobile/member/{memberID} | Find member
*MobileTerminalApi* | [**redeemWalletItemFromMobileTerminal**](docs/Api/MobileTerminalApi.md#redeemwalletitemfrommobileterminal) | **POST** /v2/pos/mobile/item/redeem/{itemID} | Redeem item
*NewsApi* | [**archiveNewsArticle**](docs/Api/NewsApi.md#archivenewsarticle) | **DELETE** /v2/news/{id} | Archive news article
*NewsApi* | [**createNewsArticle**](docs/Api/NewsApi.md#createnewsarticle) | **POST** /v2/news | Create news article
*NewsApi* | [**fetchAllNewsArticles**](docs/Api/NewsApi.md#fetchallnewsarticles) | **GET** /v2/news/all | Fetch all news articles
*NewsApi* | [**restoreNewsArticle**](docs/Api/NewsApi.md#restorenewsarticle) | **PATCH** /v2/news/{id} | Restore news article
*NewsApi* | [**updateNewsArticle**](docs/Api/NewsApi.md#updatenewsarticle) | **PUT** /v2/news/{id} | Update news article
*PaymentDesignsApi* | [**archivePaymentDesign**](docs/Api/PaymentDesignsApi.md#archivepaymentdesign) | **DELETE** /v2/payment/design/{id} | Archive payment design
*PaymentDesignsApi* | [**createPaymentDesign**](docs/Api/PaymentDesignsApi.md#createpaymentdesign) | **POST** /v2/payment/design | Create payment design
*PaymentDesignsApi* | [**fetchAllPaymentDesigns**](docs/Api/PaymentDesignsApi.md#fetchallpaymentdesigns) | **GET** /v2/payment/design/all | Fetch all active payment designs
*PaymentDesignsApi* | [**fetchPaymentDesignById**](docs/Api/PaymentDesignsApi.md#fetchpaymentdesignbyid) | **GET** /v2/payment/design/{id} | Fetch payment design
*PaymentDesignsApi* | [**restorePaymentDesign**](docs/Api/PaymentDesignsApi.md#restorepaymentdesign) | **PATCH** /v2/payment/design/{id} | Restore payment design
*PaymentDesignsApi* | [**updatePaymentDesign**](docs/Api/PaymentDesignsApi.md#updatepaymentdesign) | **PUT** /v2/payment/design/{id} | Update payment design
*PerformancesApi* | [**archivePerformance**](docs/Api/PerformancesApi.md#archiveperformance) | **DELETE** /v2/performances/{id} | Archive performance
*PerformancesApi* | [**createPerformance**](docs/Api/PerformancesApi.md#createperformance) | **POST** /v2/performances | Create performance
*PerformancesApi* | [**fetchAllPerformances**](docs/Api/PerformancesApi.md#fetchallperformances) | **GET** /v2/performances/all | Fetch all performances
*PerformancesApi* | [**restorePerformance**](docs/Api/PerformancesApi.md#restoreperformance) | **PATCH** /v2/performances/{id} | Restore performance
*PerformancesApi* | [**updatePerformance**](docs/Api/PerformancesApi.md#updateperformance) | **PUT** /v2/performances/{id} | Update performance
*PromoCodesApi* | [**archivePromoCode**](docs/Api/PromoCodesApi.md#archivepromocode) | **DELETE** /v2/promoCodes/{id} | Archive promo code
*PromoCodesApi* | [**createPromoCode**](docs/Api/PromoCodesApi.md#createpromocode) | **POST** /v2/promoCodes | Create promo code
*PromoCodesApi* | [**fetchAllPromoCodes**](docs/Api/PromoCodesApi.md#fetchallpromocodes) | **GET** /v2/promoCodes/all | Fetch all promo codes
*PromoCodesApi* | [**restorePromoCode**](docs/Api/PromoCodesApi.md#restorepromocode) | **PATCH** /v2/promoCodes/{id} | Restore promo code
*PromoCodesApi* | [**updatePromoCode**](docs/Api/PromoCodesApi.md#updatepromocode) | **PUT** /v2/promoCodes/{id} | Update promo code
*SMSApi* | [**acquirePhoneNumber**](docs/Api/SMSApi.md#acquirephonenumber) | **POST** /v2/sms/phoneNumber/acquire | Acquire phone number
*SMSApi* | [**archivePhoneNumber**](docs/Api/SMSApi.md#archivephonenumber) | **DELETE** /v2/sms/phoneNumber/{phoneNumberID} | Archive phone number
*SMSApi* | [**archiveRecipient**](docs/Api/SMSApi.md#archiverecipient) | **DELETE** /v2/sms/importedList/recipients/{id} | Archive recipient
*SMSApi* | [**countImportedListRecipients**](docs/Api/SMSApi.md#countimportedlistrecipients) | **GET** /v2/sms/importedList/recipients/count/{listID} | Count imported list recipients
*SMSApi* | [**countOptInListSubscribers**](docs/Api/SMSApi.md#countoptinlistsubscribers) | **GET** /v2/sms/optInList/subscribers/count/{listID} | Count opt in list subscribers
*SMSApi* | [**countOptInSourceSubscribers**](docs/Api/SMSApi.md#countoptinsourcesubscribers) | **GET** /v2/sms/optInSource/subscribers/count/{sourceID} | Count opt in source subscribers
*SMSApi* | [**countOutboundSMS**](docs/Api/SMSApi.md#countoutboundsms) | **GET** /v2/sms/outbound/count/{phoneNumberID} | Count outbound SMS
*SMSApi* | [**createImportedList**](docs/Api/SMSApi.md#createimportedlist) | **POST** /v2/sms/importedList | Create imported list
*SMSApi* | [**createOptInList**](docs/Api/SMSApi.md#createoptinlist) | **POST** /v2/sms/optInList | Create opt in list
*SMSApi* | [**createOptInListSource**](docs/Api/SMSApi.md#createoptinlistsource) | **POST** /v2/sms/optInListSource | Send SMS to opt in list
*SMSApi* | [**createRecipientInImportedList**](docs/Api/SMSApi.md#createrecipientinimportedlist) | **POST** /v2/sms/importedList/recipients/create | Add new recipient in an imported list
*SMSApi* | [**createSMSAgreement**](docs/Api/SMSApi.md#createsmsagreement) | **POST** /v2/sms/agreement/create | Accept SMS agreement
*SMSApi* | [**exportImportedListRecipients**](docs/Api/SMSApi.md#exportimportedlistrecipients) | **POST** /v2/sms/importedList/recipients/export/{importedListID} | Export imported list recipients
*SMSApi* | [**exportOptInListSubscribers**](docs/Api/SMSApi.md#exportoptinlistsubscribers) | **POST** /v2/sms/optInList/subscribers/export/{listID} | Export opt in list subscribers
*SMSApi* | [**fetchBlockedTCPAEntries**](docs/Api/SMSApi.md#fetchblockedtcpaentries) | **GET** /v2/sms/phoneNumber/blocked/{phoneNumberID} | Fetch blocked TCPA entries
*SMSApi* | [**fetchImportedListRecipients**](docs/Api/SMSApi.md#fetchimportedlistrecipients) | **GET** /v2/sms/importedList/recipients/{listID} | Fetch imported list recipients
*SMSApi* | [**fetchImportedListRecipientsByPage**](docs/Api/SMSApi.md#fetchimportedlistrecipientsbypage) | **GET** /v2/sms/importedList/recipients/page/{listID} | Fetch imported list recipients by page
*SMSApi* | [**fetchOptInListSubscribers**](docs/Api/SMSApi.md#fetchoptinlistsubscribers) | **GET** /v2/sms/optInList/subscribers/{listID} | Fetch opt in list subscribers
*SMSApi* | [**fetchOptInListSubscribersByPage**](docs/Api/SMSApi.md#fetchoptinlistsubscribersbypage) | **GET** /v2/sms/optInList/subscribers/page/{listID} | Fetch opt in list subscribers by page
*SMSApi* | [**fetchOptInListsAssociatedWithPhoneNumber**](docs/Api/SMSApi.md#fetchoptinlistsassociatedwithphonenumber) | **GET** /v2/sms/phoneNumber/lists/{phoneNumberID} | Fetch opt in lists
*SMSApi* | [**fetchOptInSourceSubscribers**](docs/Api/SMSApi.md#fetchoptinsourcesubscribers) | **GET** /v2/sms/optInSource/subscribers/{sourceID} | Fetch opt in source subscribers
*SMSApi* | [**fetchOptInSourcesAssociatedWithPhoneNumber**](docs/Api/SMSApi.md#fetchoptinsourcesassociatedwithphonenumber) | **GET** /v2/sms/phoneNumber/sources/{phoneNumberID} | Fetch opt in sources
*SMSApi* | [**fetchOutboundSMS**](docs/Api/SMSApi.md#fetchoutboundsms) | **GET** /v2/sms/outbound/{phoneNumberID} | Fetch outbound SMS
*SMSApi* | [**fetchOutboundSMSByPage**](docs/Api/SMSApi.md#fetchoutboundsmsbypage) | **GET** /v2/sms/outbound/page/{phoneNumberID} | Fetch outbound SMSes by page
*SMSApi* | [**fetchPaymentObjectBroadcasts**](docs/Api/SMSApi.md#fetchpaymentobjectbroadcasts) | **GET** /v2/sms/paymentObjectBroadcasts/{phoneNumberID} | Fetch payment object broadcasts
*SMSApi* | [**fetchSMSAgreement**](docs/Api/SMSApi.md#fetchsmsagreement) | **GET** /v2/sms/agreement | Fetch SMS agreement
*SMSApi* | [**importImportedListRecipients**](docs/Api/SMSApi.md#importimportedlistrecipients) | **POST** /v2/sms/importedList/recipients/import/{importedListID} | Import imported list recipients
*SMSApi* | [**importOptInListSubscribers**](docs/Api/SMSApi.md#importoptinlistsubscribers) | **POST** /v2/sms/optInList/subscribers/import/{listID} | Import opt in list subscribers
*SMSApi* | [**restorePhoneNumber**](docs/Api/SMSApi.md#restorephonenumber) | **PATCH** /v2/sms/phoneNumber/{phoneNumberID} | Restore phone number
*SMSApi* | [**restoreRecipient**](docs/Api/SMSApi.md#restorerecipient) | **PATCH** /v2/sms/importedList/recipients/{id} | Restore recipient
*SMSApi* | [**retrieveSentAndMaxCountOfMessages**](docs/Api/SMSApi.md#retrievesentandmaxcountofmessages) | **GET** /v2/sms/sent | Retrieve the number of messages sent by the merchant within the current billing cycle
*SMSApi* | [**saveImportedList**](docs/Api/SMSApi.md#saveimportedlist) | **PUT** /v2/sms/importedList/{listID} | Save imported list
*SMSApi* | [**saveOptInList**](docs/Api/SMSApi.md#saveoptinlist) | **PUT** /v2/sms/optInList/{listID} | Save opt in list
*SMSApi* | [**saveOptInListSource**](docs/Api/SMSApi.md#saveoptinlistsource) | **PUT** /v2/sms/optInListSource/{sourceID} | Save opt in list source
*SMSApi* | [**sendPhoneNumberForVerification**](docs/Api/SMSApi.md#sendphonenumberforverification) | **PUT** /v2/sms/phoneNumber/verification/{phoneNumberID} | Request phone number verification
*SMSApi* | [**updatePhoneNumber**](docs/Api/SMSApi.md#updatephonenumber) | **PUT** /v2/sms/phoneNumber/{phoneNumberID} | Update phone number
*SettingsApi* | [**getActiveCampaigns**](docs/Api/SettingsApi.md#getactivecampaigns) | **GET** /v2/settings/campaigns/active | Get active campaigns
*SettingsApi* | [**getVouchersCount**](docs/Api/SettingsApi.md#getvoucherscount) | **GET** /v2/settings/vouchers/count | Get vouchers count
*ShopifyTerminalApi* | [**fetchWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#fetchwalletitemfromshopifyterminal) | **GET** /v2/pos/shopify/item/{itemID} | Fetch item
*ShopifyTerminalApi* | [**redeemWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#redeemwalletitemfromshopifyterminal) | **POST** /v2/pos/shopify/item/redeem/{itemID} | Redeem item
*ShopifyTerminalApi* | [**refundWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#refundwalletitemfromshopifyterminal) | **POST** /v2/pos/shopify/item/refund/{ledgerEntryID} | Refund transaction
*StaticVoucherCampaignGroupsApi* | [**fetchStaticVoucherCampaignGroups**](docs/Api/StaticVoucherCampaignGroupsApi.md#fetchstaticvouchercampaigngroups) | **GET** /v2/payment/staticVoucherCampaignGroups/campaigns/{campaignsGroupID} | Fetch all campaigns
*StaticVoucherCampaignsApi* | [**countVouchersLoaded**](docs/Api/StaticVoucherCampaignsApi.md#countvouchersloaded) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/loaded/{campaignID} | Count loaded vouchers
*StaticVoucherCampaignsApi* | [**countVouchersRedeemed**](docs/Api/StaticVoucherCampaignsApi.md#countvouchersredeemed) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/redeemed/{campaignID} | Count redeemed vouchers
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaign) | **POST** /v2/payment/staticVoucherCampaign | Create static voucher campaign
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaignFromCSV**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaignfromcsv) | **POST** /v2/payment/staticVoucherCampaign/csv | Import static voucher campaign
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaignWithVoucher**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaignwithvoucher) | **POST** /v2/payment/staticVoucherCampaign/voucher | Create static voucher campaign with voucher
*StaticVoucherCampaignsApi* | [**duplicateStaticVoucherCampaignById**](docs/Api/StaticVoucherCampaignsApi.md#duplicatestaticvouchercampaignbyid) | **POST** /v2/payment/staticVoucherCampaign/duplicate/{campaignID} | Duplicate static voucher campaign
*StaticVoucherCampaignsApi* | [**fetchPerformanceOverview**](docs/Api/StaticVoucherCampaignsApi.md#fetchperformanceoverview) | **GET** /v2/payment/staticVoucherCampaign/overview/performance/{campaignID} | Fetch performance overview
*StaticVoucherCampaignsApi* | [**fetchReachStatsOfAllStaticVoucherCampaigns**](docs/Api/StaticVoucherCampaignsApi.md#fetchreachstatsofallstaticvouchercampaigns) | **GET** /v2/payment/staticVoucherCampaign/reach/all | Get the reach statistics of all the static voucher campaigns
*StaticVoucherCampaignsApi* | [**fetchReachStatsOfIndividualStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#fetchreachstatsofindividualstaticvouchercampaign) | **GET** /v2/payment/staticVoucherCampaign/reach/{staticVoucherCampaignID} | Get the reach statistics of an individual static voucher campaign
*StaticVoucherCampaignsApi* | [**fetchStaticVoucherCampaignById**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchercampaignbyid) | **GET** /v2/payment/staticVoucherCampaign/{id} | Fetch static voucher campaign
*StaticVoucherCampaignsApi* | [**fetchStaticVoucherCampaigns**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchercampaigns) | **GET** /v2/payment/staticVoucherCampaign/all | Fetches all static vouchers campaigns
*StaticVoucherCampaignsApi* | [**fetchStaticVouchers**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchers) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/{campaignID} | Fetch static vouchers
*StaticVoucherCampaignsApi* | [**fetchStaticVouchersPage**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvoucherspage) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/page/{campaignID} | Fetch static vouchers by page
*StaticVoucherCampaignsApi* | [**fetchViews**](docs/Api/StaticVoucherCampaignsApi.md#fetchviews) | **GET** /v2/payment/staticVoucherCampaign/views/{campaignID} | Fetch views
*StaticVoucherCampaignsApi* | [**fetchVouchersRedeemed**](docs/Api/StaticVoucherCampaignsApi.md#fetchvouchersredeemed) | **GET** /v2/payment/staticVoucherCampaign/vouchers/redeemed/{campaignID} | Fetch redeemed vouchers
*StaticVoucherCampaignsApi* | [**previewMessages**](docs/Api/StaticVoucherCampaignsApi.md#previewmessages) | **PUT** /v2/payment/staticVoucherCampaign/preview/{campaignID} | Preview static vouchers. This method has been deprecated. Please use /preview/page/{campaignID} for better performance.
*StaticVoucherCampaignsApi* | [**previewMessagesByPage**](docs/Api/StaticVoucherCampaignsApi.md#previewmessagesbypage) | **PUT** /v2/payment/staticVoucherCampaign/preview/page/{campaignID} | Preview static vouchers by page
*StaticVoucherCampaignsApi* | [**updateStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#updatestaticvouchercampaign) | **PUT** /v2/payment/staticVoucherCampaign/{campaignID} | Update static voucher campaign
*StaticVoucherCampaignsApi* | [**updateStaticVoucherCampaignWithVoucher**](docs/Api/StaticVoucherCampaignsApi.md#updatestaticvouchercampaignwithvoucher) | **PUT** /v2/payment/staticVoucherCampaign/voucher/{campaignID} | Update static voucher campaign with voucher
*StaticVouchersApi* | [**createStaticVoucher**](docs/Api/StaticVouchersApi.md#createstaticvoucher) | **POST** /v2/payment/staticVoucher | Create static voucher
*StaticVouchersApi* | [**deleteStaticVoucher**](docs/Api/StaticVouchersApi.md#deletestaticvoucher) | **DELETE** /v2/payment/staticVoucher/{id} | Delete static voucher
*StaticVouchersApi* | [**fetchReachStatsOfAllStaticVouchers**](docs/Api/StaticVouchersApi.md#fetchreachstatsofallstaticvouchers) | **GET** /v2/payment/staticVoucher/reach/all | Get the reach statistics of all the static vouchers
*StaticVouchersApi* | [**fetchReachStatsOfIndividualStaticVoucher**](docs/Api/StaticVouchersApi.md#fetchreachstatsofindividualstaticvoucher) | **GET** /v2/payment/staticVoucher/reach/{staticVoucherID} | Get the reach statistics of an individual static voucher
*StaticVouchersApi* | [**fetchStaticVoucher**](docs/Api/StaticVouchersApi.md#fetchstaticvoucher) | **GET** /v2/payment/staticVoucher/{id} | Fetch static voucher
*StaticVouchersApi* | [**updateStaticVoucher**](docs/Api/StaticVouchersApi.md#updatestaticvoucher) | **PUT** /v2/payment/staticVoucher/{id} | Update static voucher
*SystemApi* | [**createRole**](docs/Api/SystemApi.md#createrole) | **POST** /v2/system/roles | Create role
*SystemApi* | [**deleteRole**](docs/Api/SystemApi.md#deleterole) | **DELETE** /v2/system/roles/{roleID} | Delete role
*SystemApi* | [**fetchAuditLogOfRoles**](docs/Api/SystemApi.md#fetchauditlogofroles) | **GET** /v2/system/roles/auditLog | Fetch role&#39;s audit log
*SystemApi* | [**fetchEmployeesWithRole**](docs/Api/SystemApi.md#fetchemployeeswithrole) | **GET** /v2/system/roles/employees/{roleID} | Fetch employees with role
*SystemApi* | [**fetchWebpagesForRole**](docs/Api/SystemApi.md#fetchwebpagesforrole) | **GET** /v2/system/roles/webpages/{roleID} | Fetch webpages for role
*SystemApi* | [**loadRole**](docs/Api/SystemApi.md#loadrole) | **GET** /v2/system/roles/{roleID} | Fetch role
*SystemApi* | [**saveRole**](docs/Api/SystemApi.md#saverole) | **PUT** /v2/system/roles/{roleID} | Update role
*TransactionLedgerApi* | [**fetchAllLedgerTransactions**](docs/Api/TransactionLedgerApi.md#fetchallledgertransactions) | **GET** /v2/pos/ledger/transactions/all | Fetch ledger transactions by page
*UtilitiesApi* | [**getPaymentPrefixes**](docs/Api/UtilitiesApi.md#getpaymentprefixes) | **GET** /v2/payment/prefixes | Get payment prefixes
*WebTerminalApi* | [**fetchWalletItemFromWebTerminal**](docs/Api/WebTerminalApi.md#fetchwalletitemfromwebterminal) | **GET** /v2/pos/web/item/{itemID} | Fetch item
*WebTerminalApi* | [**redeemWalletItemFromWebTerminal**](docs/Api/WebTerminalApi.md#redeemwalletitemfromwebterminal) | **POST** /v2/pos/web/item/redeem/{itemID} | Redeem item
*WebTerminalApi* | [**refundWalletItemFromWebTerminal**](docs/Api/WebTerminalApi.md#refundwalletitemfromwebterminal) | **POST** /v2/pos/web/item/refund/{ledgerEntryID} | Refund transaction
*WixTerminalApi* | [**fetchWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#fetchwalletitemfromwixterminal) | **GET** /v2/pos/wix/item/{itemID} | Fetch item
*WixTerminalApi* | [**redeemWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#redeemwalletitemfromwixterminal) | **POST** /v2/pos/wix/item/redeem/{itemID} | Redeem item
*WixTerminalApi* | [**refundWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#refundwalletitemfromwixterminal) | **POST** /v2/pos/wix/item/refund/{ledgerEntryID} | Refund transaction
*WooCommerceTerminalApi* | [**fetchWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#fetchwalletitemfromwoocommerceterminal) | **GET** /v2/pos/woocommerce/item/{itemID} | Fetch item
*WooCommerceTerminalApi* | [**redeemWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#redeemwalletitemfromwoocommerceterminal) | **POST** /v2/pos/woocommerce/item/redeem/{itemID} | Redeem item
*WooCommerceTerminalApi* | [**refundWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#refundwalletitemfromwoocommerceterminal) | **POST** /v2/pos/woocommerce/item/refund/{ledgerEntryID} | Refund transaction

## Models

- [AdvertisementCredit](docs/Model/AdvertisementCredit.md)
- [AdvertisementCreditBroadcast](docs/Model/AdvertisementCreditBroadcast.md)
- [AdvertisementCreditScan](docs/Model/AdvertisementCreditScan.md)
- [Agreement](docs/Model/Agreement.md)
- [Alert](docs/Model/Alert.md)
- [Announcement](docs/Model/Announcement.md)
- [ApplicableTerminals](docs/Model/ApplicableTerminals.md)
- [ApplicableTerminalsAnyOf](docs/Model/ApplicableTerminalsAnyOf.md)
- [ApplicableTerminalsAnyOf1](docs/Model/ApplicableTerminalsAnyOf1.md)
- [ApplicableTerminalsAnyOf2](docs/Model/ApplicableTerminalsAnyOf2.md)
- [ApplicableTerminalsAnyOf3](docs/Model/ApplicableTerminalsAnyOf3.md)
- [ApplicableTerminalsAnyOf4](docs/Model/ApplicableTerminalsAnyOf4.md)
- [ApplicableTerminalsAnyOf5](docs/Model/ApplicableTerminalsAnyOf5.md)
- [ApplicableTerminalsAnyOf6](docs/Model/ApplicableTerminalsAnyOf6.md)
- [AuthError](docs/Model/AuthError.md)
- [AvailablePhoneNumbersRequest](docs/Model/AvailablePhoneNumbersRequest.md)
- [ClickFunnelAmount](docs/Model/ClickFunnelAmount.md)
- [ClickFunnelContact](docs/Model/ClickFunnelContact.md)
- [ClickFunnelContactProfile](docs/Model/ClickFunnelContactProfile.md)
- [ClickFunnelEvent](docs/Model/ClickFunnelEvent.md)
- [ClickFunnelOriginalAmount](docs/Model/ClickFunnelOriginalAmount.md)
- [ClickFunnelProduct](docs/Model/ClickFunnelProduct.md)
- [ClickFunnelPurchase](docs/Model/ClickFunnelPurchase.md)
- [ClickFunnelRegistration](docs/Model/ClickFunnelRegistration.md)
- [CreateStaticVoucherCampaign](docs/Model/CreateStaticVoucherCampaign.md)
- [CreateStaticVoucherCampaignWithVoucher](docs/Model/CreateStaticVoucherCampaignWithVoucher.md)
- [CreateStaticVoucherCampaignWithVoucherWithCSV](docs/Model/CreateStaticVoucherCampaignWithVoucherWithCSV.md)
- [DashboardWidget](docs/Model/DashboardWidget.md)
- [Document](docs/Model/Document.md)
- [DuplicateRowFound](docs/Model/DuplicateRowFound.md)
- [DynamicVoucher](docs/Model/DynamicVoucher.md)
- [DynamicVoucherBroadcast](docs/Model/DynamicVoucherBroadcast.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeAPIKey](docs/Model/EmployeeAPIKey.md)
- [EmployeeActivityLog](docs/Model/EmployeeActivityLog.md)
- [EntityTooLarge](docs/Model/EntityTooLarge.md)
- [ExportDataFile](docs/Model/ExportDataFile.md)
- [FalsumError](docs/Model/FalsumError.md)
- [FalsumField](docs/Model/FalsumField.md)
- [Feature](docs/Model/Feature.md)
- [ForbiddenRequest](docs/Model/ForbiddenRequest.md)
- [ForeignKeyDoesNotExist](docs/Model/ForeignKeyDoesNotExist.md)
- [HelpDeskRequest](docs/Model/HelpDeskRequest.md)
- [ImageGrid](docs/Model/ImageGrid.md)
- [ImportedList](docs/Model/ImportedList.md)
- [ImportedListRecipient](docs/Model/ImportedListRecipient.md)
- [InboundSMS](docs/Model/InboundSMS.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [LedgerEntry](docs/Model/LedgerEntry.md)
- [LinkBook](docs/Model/LinkBook.md)
- [LinkBookSection](docs/Model/LinkBookSection.md)
- [MSAnalyticsMemberCountPartitionedByDate](docs/Model/MSAnalyticsMemberCountPartitionedByDate.md)
- [MSAnalyticsMemberPointsRedeemedPartitionedByDate](docs/Model/MSAnalyticsMemberPointsRedeemedPartitionedByDate.md)
- [MSAnalyticsMemberPointsRefundedPartitionedByDate](docs/Model/MSAnalyticsMemberPointsRefundedPartitionedByDate.md)
- [MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate](docs/Model/MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate.md)
- [MSAnalyticsMembershipTierAmountRefundedPartitionedByDate](docs/Model/MSAnalyticsMembershipTierAmountRefundedPartitionedByDate.md)
- [MSMemberHistory](docs/Model/MSMemberHistory.md)
- [MSMemberHistoryPagination](docs/Model/MSMemberHistoryPagination.md)
- [MSMemberRedemption](docs/Model/MSMemberRedemption.md)
- [MSMemberRedemptionPagination](docs/Model/MSMemberRedemptionPagination.md)
- [MSMembershipTierHistory](docs/Model/MSMembershipTierHistory.md)
- [MSMembershipTierHistoryPagination](docs/Model/MSMembershipTierHistoryPagination.md)
- [MSMembershipTierRedemption](docs/Model/MSMembershipTierRedemption.md)
- [MSMembershipTierRedemptionPagination](docs/Model/MSMembershipTierRedemptionPagination.md)
- [MSMerchantCreditHistory](docs/Model/MSMerchantCreditHistory.md)
- [MSMerchantCreditHistoryPagination](docs/Model/MSMerchantCreditHistoryPagination.md)
- [MSMerchantCreditRedemption](docs/Model/MSMerchantCreditRedemption.md)
- [MSMerchantCreditRedemptionPagination](docs/Model/MSMerchantCreditRedemptionPagination.md)
- [MediaFile](docs/Model/MediaFile.md)
- [Member](docs/Model/Member.md)
- [MemberSearch](docs/Model/MemberSearch.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantCreditSearch](docs/Model/MerchantCreditSearch.md)
- [MerchantNotInitialized](docs/Model/MerchantNotInitialized.md)
- [MerchantURL](docs/Model/MerchantURL.md)
- [Message](docs/Model/Message.md)
- [ModuleError](docs/Model/ModuleError.md)
- [NewsArticle](docs/Model/NewsArticle.md)
- [OptInList](docs/Model/OptInList.md)
- [OptInListSource](docs/Model/OptInListSource.md)
- [OptInListSubscriber](docs/Model/OptInListSubscriber.md)
- [OutboundSMS](docs/Model/OutboundSMS.md)
- [PaginatedWTMembers](docs/Model/PaginatedWTMembers.md)
- [PaginatedWTMerchantCredits](docs/Model/PaginatedWTMerchantCredits.md)
- [PaginationRequestWithIDAndWithoutSortOptions](docs/Model/PaginationRequestWithIDAndWithoutSortOptions.md)
- [PaginationRequestWithSortOptions](docs/Model/PaginationRequestWithSortOptions.md)
- [PaymentDesign](docs/Model/PaymentDesign.md)
- [PaymentPrefixes](docs/Model/PaymentPrefixes.md)
- [Performance](docs/Model/Performance.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID](docs/Model/PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID.md)
- [PickMSEmployeeAPIKeyCreateParamsExcludeKeyofMSEmployeeAPIKeyCreateParamsEmployeeID](docs/Model/PickMSEmployeeAPIKeyCreateParamsExcludeKeyofMSEmployeeAPIKeyCreateParamsEmployeeID.md)
- [PickMSEmployeeAPIKeyUpdateParamsExcludeKeyofMSEmployeeAPIKeyUpdateParamsId](docs/Model/PickMSEmployeeAPIKeyUpdateParamsExcludeKeyofMSEmployeeAPIKeyUpdateParamsId.md)
- [PickMSMemberCreationParamsExcludeKeyofMSMemberCreationParamsMemberIdentifier](docs/Model/PickMSMemberCreationParamsExcludeKeyofMSMemberCreationParamsMemberIdentifier.md)
- [PickMSMemberExcludeKeyofMSMemberMemberIdentifier](docs/Model/PickMSMemberExcludeKeyofMSMemberMemberIdentifier.md)
- [PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier](docs/Model/PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier.md)
- [PickMSMerchantCreditExcludeKeyofMSMerchantCreditMemberIdentifier](docs/Model/PickMSMerchantCreditExcludeKeyofMSMerchantCreditMemberIdentifier.md)
- [PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKey](docs/Model/PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKey.md)
- [PickPaginationRequestWithoutSortOptionsExcludeKeyofPaginationRequestWithoutSortOptionsIsArchiveIncluded](docs/Model/PickPaginationRequestWithoutSortOptionsExcludeKeyofPaginationRequestWithoutSortOptionsIsArchiveIncluded.md)
- [PickSSImportedListUpdateParamsExcludeKeyofSSImportedListUpdateParamsId](docs/Model/PickSSImportedListUpdateParamsExcludeKeyofSSImportedListUpdateParamsId.md)
- [PickSSMobileNumberUpdateParamsExcludeKeyofSSMobileNumberUpdateParamsId](docs/Model/PickSSMobileNumberUpdateParamsExcludeKeyofSSMobileNumberUpdateParamsId.md)
- [PickSSOptInListCreateParamsExcludeKeyofSSOptInListCreateParamsEmployeeID](docs/Model/PickSSOptInListCreateParamsExcludeKeyofSSOptInListCreateParamsEmployeeID.md)
- [PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount](docs/Model/PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount.md)
- [PickSSOptInListUpdateParamsExcludeKeyofSSOptInListUpdateParamsId](docs/Model/PickSSOptInListUpdateParamsExcludeKeyofSSOptInListUpdateParamsId.md)
- [PickSSOptInSourceUpdateParamsExcludeKeyofSSOptInSourceUpdateParamsId](docs/Model/PickSSOptInSourceUpdateParamsExcludeKeyofSSOptInSourceUpdateParamsId.md)
- [PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhone](docs/Model/PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhone.md)
- [PickVSAdvertisementCreditCreateParamsExcludeKeyofVSAdvertisementCreditCreateParamsEmployeeID](docs/Model/PickVSAdvertisementCreditCreateParamsExcludeKeyofVSAdvertisementCreditCreateParamsEmployeeID.md)
- [PickVSAdvertisementCreditScanExcludeKeyofVSAdvertisementCreditScanRedeemedAtOrRefundedAt](docs/Model/PickVSAdvertisementCreditScanExcludeKeyofVSAdvertisementCreditScanRedeemedAtOrRefundedAt.md)
- [PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId](docs/Model/PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId.md)
- [PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDate](docs/Model/PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDate.md)
- [PickVSDynamicVoucherExcludeKeyofVSDynamicVoucherTemporalDecreaseFrequencyType](docs/Model/PickVSDynamicVoucherExcludeKeyofVSDynamicVoucherTemporalDecreaseFrequencyType.md)
- [PickVSPaymentDesignCreateParamsExcludeKeyofVSPaymentDesignCreateParamsBackgroundImageURLOrCompanyLogoURLOrEmployeeID](docs/Model/PickVSPaymentDesignCreateParamsExcludeKeyofVSPaymentDesignCreateParamsBackgroundImageURLOrCompanyLogoURLOrEmployeeID.md)
- [PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsId](docs/Model/PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsId.md)
- [PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAt](docs/Model/PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAt.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmail](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmail.md)
- [PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber](docs/Model/PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber.md)
- [PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber](docs/Model/PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber.md)
- [PickWTMerchantURLUpdateExcludeKeyofWTMerchantURLUpdateUrlID](docs/Model/PickWTMerchantURLUpdateExcludeKeyofWTMerchantURLUpdateUrlID.md)
- [PickWTNewsArticleUpdateParamsExcludeKeyofWTNewsArticleUpdateParamsId](docs/Model/PickWTNewsArticleUpdateParamsExcludeKeyofWTNewsArticleUpdateParamsId.md)
- [PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListID](docs/Model/PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListID.md)
- [PickWTStaticVoucherCampaignCreateParamsExcludeKeyofWTStaticVoucherCampaignCreateParamsStartDateTimeOrExpirationDateTime](docs/Model/PickWTStaticVoucherCampaignCreateParamsExcludeKeyofWTStaticVoucherCampaignCreateParamsStartDateTimeOrExpirationDateTime.md)
- [PickWTStaticVoucherCreateParamsExcludeKeyofWTStaticVoucherCreateParamsCampaignID](docs/Model/PickWTStaticVoucherCreateParamsExcludeKeyofWTStaticVoucherCreateParamsCampaignID.md)
- [Plan](docs/Model/Plan.md)
- [PortalPage](docs/Model/PortalPage.md)
- [PresignedPost](docs/Model/PresignedPost.md)
- [PresignedPostFields](docs/Model/PresignedPostFields.md)
- [Product](docs/Model/Product.md)
- [PromoCode](docs/Model/PromoCode.md)
- [ReachPerformanceStats](docs/Model/ReachPerformanceStats.md)
- [Request](docs/Model/Request.md)
- [Response](docs/Model/Response.md)
- [Role](docs/Model/Role.md)
- [RoleAuditLog](docs/Model/RoleAuditLog.md)
- [SSImportedListRecipientCreateParams](docs/Model/SSImportedListRecipientCreateParams.md)
- [SSOptInSource](docs/Model/SSOptInSource.md)
- [SimpleSMSBroadcast](docs/Model/SimpleSMSBroadcast.md)
- [StaticVoucher](docs/Model/StaticVoucher.md)
- [StaticVoucherCampaign](docs/Model/StaticVoucherCampaign.md)
- [StaticVoucherCampaignBroadcast](docs/Model/StaticVoucherCampaignBroadcast.md)
- [StaticVoucherCampaignGroup](docs/Model/StaticVoucherCampaignGroup.md)
- [StaticVoucherCampaignUpdate](docs/Model/StaticVoucherCampaignUpdate.md)
- [Status](docs/Model/Status.md)
- [StatusAnyOf](docs/Model/StatusAnyOf.md)
- [StatusAnyOf1](docs/Model/StatusAnyOf1.md)
- [StatusAnyOf2](docs/Model/StatusAnyOf2.md)
- [StatusAnyOf3](docs/Model/StatusAnyOf3.md)
- [SubscriptionFeature](docs/Model/SubscriptionFeature.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [SubscriptionProduct](docs/Model/SubscriptionProduct.md)
- [Tcpa](docs/Model/Tcpa.md)
- [UpdateStaticVoucherCampaignWithVoucher](docs/Model/UpdateStaticVoucherCampaignWithVoucher.md)
- [VSCampaignGeneratedMessage](docs/Model/VSCampaignGeneratedMessage.md)
- [VSCampaignGeneratedMessagePagination](docs/Model/VSCampaignGeneratedMessagePagination.md)
- [VSDynamicVoucherStatus](docs/Model/VSDynamicVoucherStatus.md)
- [WTAdvertisementCredit](docs/Model/WTAdvertisementCredit.md)
- [WTAdvertisementCreditCreateParams](docs/Model/WTAdvertisementCreditCreateParams.md)
- [WTAdvertisementCreditScan](docs/Model/WTAdvertisementCreditScan.md)
- [WTAdvertisementCreditUpdateParams](docs/Model/WTAdvertisementCreditUpdateParams.md)
- [WTAuthenticationCheckSessionTokenStatusResponse](docs/Model/WTAuthenticationCheckSessionTokenStatusResponse.md)
- [WTAuthenticationForgotPassword](docs/Model/WTAuthenticationForgotPassword.md)
- [WTAuthenticationLoginRequest](docs/Model/WTAuthenticationLoginRequest.md)
- [WTAuthenticationLoginResponse](docs/Model/WTAuthenticationLoginResponse.md)
- [WTAuthenticationRegister](docs/Model/WTAuthenticationRegister.md)
- [WTAuthenticationRequestResetPassword](docs/Model/WTAuthenticationRequestResetPassword.md)
- [WTAuthenticationResetPassword](docs/Model/WTAuthenticationResetPassword.md)
- [WTAuthenticationSSOLoginForDiscourse](docs/Model/WTAuthenticationSSOLoginForDiscourse.md)
- [WTBillingChangePlan](docs/Model/WTBillingChangePlan.md)
- [WTBillingSavePaymentMethod](docs/Model/WTBillingSavePaymentMethod.md)
- [WTBillingVerifyPaymentMethodResponse](docs/Model/WTBillingVerifyPaymentMethodResponse.md)
- [WTCountResult](docs/Model/WTCountResult.md)
- [WTCustomerSearchByMemberID](docs/Model/WTCustomerSearchByMemberID.md)
- [WTCustomerSearchByPhoneNumber](docs/Model/WTCustomerSearchByPhoneNumber.md)
- [WTDynamicVoucher](docs/Model/WTDynamicVoucher.md)
- [WTDynamicVoucherCreateParams](docs/Model/WTDynamicVoucherCreateParams.md)
- [WTDynamicVoucherRedemption](docs/Model/WTDynamicVoucherRedemption.md)
- [WTDynamicVoucherSummary](docs/Model/WTDynamicVoucherSummary.md)
- [WTDynamicVoucherUpdateParams](docs/Model/WTDynamicVoucherUpdateParams.md)
- [WTEmployee](docs/Model/WTEmployee.md)
- [WTEmployeeAPIKey](docs/Model/WTEmployeeAPIKey.md)
- [WTEmployeeAPIKeyCreateParams](docs/Model/WTEmployeeAPIKeyCreateParams.md)
- [WTEmployeeAPIKeyUpdateParams](docs/Model/WTEmployeeAPIKeyUpdateParams.md)
- [WTEmployeeCreate](docs/Model/WTEmployeeCreate.md)
- [WTEmployeeCreateAlert](docs/Model/WTEmployeeCreateAlert.md)
- [WTEmployeeCreateDocument](docs/Model/WTEmployeeCreateDocument.md)
- [WTEmployeeCreateMediaFile](docs/Model/WTEmployeeCreateMediaFile.md)
- [WTEmployeeCreateStaticVoucherCampaignGroup](docs/Model/WTEmployeeCreateStaticVoucherCampaignGroup.md)
- [WTEmployeeFileCreate](docs/Model/WTEmployeeFileCreate.md)
- [WTEmployeeImportRecords](docs/Model/WTEmployeeImportRecords.md)
- [WTEmployeeNotification](docs/Model/WTEmployeeNotification.md)
- [WTEmployeePeerRoles](docs/Model/WTEmployeePeerRoles.md)
- [WTEmployeeS3FilePresign](docs/Model/WTEmployeeS3FilePresign.md)
- [WTEmployeeScheduleSMSCampaignBroadcast](docs/Model/WTEmployeeScheduleSMSCampaignBroadcast.md)
- [WTEmployeeScheduleSimpleSMS](docs/Model/WTEmployeeScheduleSimpleSMS.md)
- [WTEmployeeScheduleSimpleSMSToRecipient](docs/Model/WTEmployeeScheduleSimpleSMSToRecipient.md)
- [WTEmployeeSendHelpDeskResponse](docs/Model/WTEmployeeSendHelpDeskResponse.md)
- [WTEmployeeUpdate](docs/Model/WTEmployeeUpdate.md)
- [WTEmployeeUpdateRecords](docs/Model/WTEmployeeUpdateRecords.md)
- [WTFetchWalletPaymentObjectWithToken](docs/Model/WTFetchWalletPaymentObjectWithToken.md)
- [WTImageGridCreateParams](docs/Model/WTImageGridCreateParams.md)
- [WTImageGridUpdateParams](docs/Model/WTImageGridUpdateParams.md)
- [WTImportedList](docs/Model/WTImportedList.md)
- [WTInfoGenesisLookupRequestErrors](docs/Model/WTInfoGenesisLookupRequestErrors.md)
- [WTInfoGenesisRecordFilterParameters](docs/Model/WTInfoGenesisRecordFilterParameters.md)
- [WTInfoGenesisRoutingIDs](docs/Model/WTInfoGenesisRoutingIDs.md)
- [WTInfoGenesisUniquePostingIDs](docs/Model/WTInfoGenesisUniquePostingIDs.md)
- [WTLinkBookCreateParams](docs/Model/WTLinkBookCreateParams.md)
- [WTLinkBookSectionCreateParams](docs/Model/WTLinkBookSectionCreateParams.md)
- [WTLinkBookSectionUpdateParams](docs/Model/WTLinkBookSectionUpdateParams.md)
- [WTLinkBookUpdateParams](docs/Model/WTLinkBookUpdateParams.md)
- [WTMember](docs/Model/WTMember.md)
- [WTMemberCreationParams](docs/Model/WTMemberCreationParams.md)
- [WTMembershipTier](docs/Model/WTMembershipTier.md)
- [WTMembershipTierCreationParams](docs/Model/WTMembershipTierCreationParams.md)
- [WTMembershipTierUpdateParams](docs/Model/WTMembershipTierUpdateParams.md)
- [WTMembershipTierWithMemberCount](docs/Model/WTMembershipTierWithMemberCount.md)
- [WTMerchantCredit](docs/Model/WTMerchantCredit.md)
- [WTMerchantCreditCreationParams](docs/Model/WTMerchantCreditCreationParams.md)
- [WTMerchantURLCreate](docs/Model/WTMerchantURLCreate.md)
- [WTMerchantURLUpdate](docs/Model/WTMerchantURLUpdate.md)
- [WTMerchantUpdate](docs/Model/WTMerchantUpdate.md)
- [WTMerchantUpdateBillingContact](docs/Model/WTMerchantUpdateBillingContact.md)
- [WTMerchantUpdatePOSIntegration](docs/Model/WTMerchantUpdatePOSIntegration.md)
- [WTNewsArticleCreateParams](docs/Model/WTNewsArticleCreateParams.md)
- [WTNewsArticleUpdateParams](docs/Model/WTNewsArticleUpdateParams.md)
- [WTOptInList](docs/Model/WTOptInList.md)
- [WTOptInListCreationParams](docs/Model/WTOptInListCreationParams.md)
- [WTPaymentDesign](docs/Model/WTPaymentDesign.md)
- [WTPaymentDesignCreateParams](docs/Model/WTPaymentDesignCreateParams.md)
- [WTPaymentDesignUpdateParams](docs/Model/WTPaymentDesignUpdateParams.md)
- [WTPerformanceCreateParams](docs/Model/WTPerformanceCreateParams.md)
- [WTPerformanceUpdateParams](docs/Model/WTPerformanceUpdateParams.md)
- [WTPosMachine](docs/Model/WTPosMachine.md)
- [WTPosMachineCreateParams](docs/Model/WTPosMachineCreateParams.md)
- [WTPosMachineUpdateParams](docs/Model/WTPosMachineUpdateParams.md)
- [WTPromoCodeCreateParams](docs/Model/WTPromoCodeCreateParams.md)
- [WTPromoCodeUpdateParams](docs/Model/WTPromoCodeUpdateParams.md)
- [WTRole](docs/Model/WTRole.md)
- [WTSMSAcquirePhoneNumber](docs/Model/WTSMSAcquirePhoneNumber.md)
- [WTSMSCreateAgreement](docs/Model/WTSMSCreateAgreement.md)
- [WTSMSImportOptInListSubscribers](docs/Model/WTSMSImportOptInListSubscribers.md)
- [WTSMSImportedListCreate](docs/Model/WTSMSImportedListCreate.md)
- [WTSMSLimits](docs/Model/WTSMSLimits.md)
- [WTSMSOptInListSourceCreate](docs/Model/WTSMSOptInListSourceCreate.md)
- [WTSMSUpdatePhoneNumberConfig](docs/Model/WTSMSUpdatePhoneNumberConfig.md)
- [WTSettingsSetPassword](docs/Model/WTSettingsSetPassword.md)
- [WTStaticVoucher](docs/Model/WTStaticVoucher.md)
- [WTStaticVoucherCampaign](docs/Model/WTStaticVoucherCampaign.md)
- [WTStaticVoucherCampaignPreviewMessages](docs/Model/WTStaticVoucherCampaignPreviewMessages.md)
- [WTStaticVoucherCampaignPreviewMessagesByPage](docs/Model/WTStaticVoucherCampaignPreviewMessagesByPage.md)
- [WTStaticVoucherCreateParams](docs/Model/WTStaticVoucherCreateParams.md)
- [WTStaticVoucherUpdateParams](docs/Model/WTStaticVoucherUpdateParams.md)
- [WTSystemApprovePhoneNumber](docs/Model/WTSystemApprovePhoneNumber.md)
- [WTSystemRoleCreate](docs/Model/WTSystemRoleCreate.md)
- [WTTCPAOpt](docs/Model/WTTCPAOpt.md)
- [WTTwilioRequestAuthyCode](docs/Model/WTTwilioRequestAuthyCode.md)
- [WTTwilioVerifyAuthyCode](docs/Model/WTTwilioVerifyAuthyCode.md)
- [WTWalletConfigurationSaveWalletRecord](docs/Model/WTWalletConfigurationSaveWalletRecord.md)
- [WTWalletItemRedemption](docs/Model/WTWalletItemRedemption.md)
- [WTWalletObjectPrefixCounts](docs/Model/WTWalletObjectPrefixCounts.md)
- [WTWalletPageView](docs/Model/WTWalletPageView.md)
- [WTWalletPageViewCount](docs/Model/WTWalletPageViewCount.md)
- [WTWalletPageViewGeoPoint](docs/Model/WTWalletPageViewGeoPoint.md)
- [WalletConfiguration](docs/Model/WalletConfiguration.md)
- [WalletPageView](docs/Model/WalletPageView.md)
- [Webpage](docs/Model/Webpage.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: access-token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

development@wallet.inc

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1.514`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
