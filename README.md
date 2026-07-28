# OpenAPIClient-php

## About Wallet

Wallet is a guest-engagement platform: a personalized mobile wallet for every guest, with no app
and no login, unlocked by one SMS code. This is the official PHP SDK for the Wallet API.

- Website: https://wallet.inc
- Developer docs: https://wallet.dev
- API status: https://uptime.wallet.inc
- All SDKs: https://github.com/walletinc


Wallet Inc. API reference.

**Spec version 2.20.2**, built 2026-07-28T00:19:47.898Z


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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




$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveEmployeeAPIKeys($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->archiveEmployeeAPIKeys: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.wall.et*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**archiveEmployeeAPIKeys**](docs/Api/APIKeysApi.md#archiveemployeeapikeys) | **DELETE** /v2/employee/apiKeys/{id} | Archive API Key
*APIKeysApi* | [**createEmployeeAPIKeys**](docs/Api/APIKeysApi.md#createemployeeapikeys) | **POST** /v2/employee/apiKeys | Create API Key
*APIKeysApi* | [**fetchAllEmployeeAPIKeys**](docs/Api/APIKeysApi.md#fetchallemployeeapikeys) | **GET** /v2/employee/apiKeys/all | Get API Keys
*APIKeysApi* | [**fetchEmployeeAPIKeyById**](docs/Api/APIKeysApi.md#fetchemployeeapikeybyid) | **GET** /v2/employee/apiKeys/{id} | Get API Key
*APIKeysApi* | [**updateEmployeeAPIKeys**](docs/Api/APIKeysApi.md#updateemployeeapikeys) | **PUT** /v2/employee/apiKeys/{id} | Update API Key
*AmenitiesApi* | [**archiveAmenity**](docs/Api/AmenitiesApi.md#archiveamenity) | **DELETE** /v2/amenities/{id} | Archive Amenity
*AmenitiesApi* | [**createAmenity**](docs/Api/AmenitiesApi.md#createamenity) | **POST** /v2/amenities | Create Amenity
*AmenitiesApi* | [**fetchAllAmenities**](docs/Api/AmenitiesApi.md#fetchallamenities) | **GET** /v2/amenities/all | Get all Amenities
*AmenitiesApi* | [**restoreAmenity**](docs/Api/AmenitiesApi.md#restoreamenity) | **PATCH** /v2/amenities/{id} | Restore Amenity
*AmenitiesApi* | [**updateAmenity**](docs/Api/AmenitiesApi.md#updateamenity) | **PUT** /v2/amenities/{id} | Update Amenity
*AppToPersonA2PRegistrationApi* | [**beginA2PApplication**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplication) | **POST** /v2/a2p/application | Create A2P Application
*AppToPersonA2PRegistrationApi* | [**beginA2PApplicationGovernment**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplicationgovernment) | **POST** /a2p/application/government | Begin A2P Application (Government)
*AppToPersonA2PRegistrationApi* | [**beginA2PApplicationNonProfit**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplicationnonprofit) | **POST** /a2p/application/nonprofit | Begin A2P Application (Non-profit)
*AppToPersonA2PRegistrationApi* | [**beginA2PApplicationPublic**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplicationpublic) | **POST** /a2p/application/public | Begin A2P Application (Public: a publicly-traded company; requires stock exchange, ticker, and brand contact email)
*AppToPersonA2PRegistrationApi* | [**beginA2PApplicationSoleProprietor**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplicationsoleproprietor) | **POST** /a2p/application/sole-proprietor | Begin A2P Application (Sole Proprietor: no EIN; requires a mobile number for OTP verification)
*AppToPersonA2PRegistrationApi* | [**beginA2PApplicationStandard**](docs/Api/AppToPersonA2PRegistrationApi.md#begina2papplicationstandard) | **POST** /a2p/application/standard | Begin A2P Application (Standard: a private, for-profit business with an EIN)
*AppToPersonA2PRegistrationApi* | [**fetchA2PApplication**](docs/Api/AppToPersonA2PRegistrationApi.md#fetcha2papplication) | **GET** /v2/a2p/application | Get A2P Application
*AppToPersonA2PRegistrationApi* | [**fetchA2PRegistration**](docs/Api/AppToPersonA2PRegistrationApi.md#fetcha2pregistration) | **GET** /v2/a2p/registration | Get A2P Registration
*AppToPersonA2PRegistrationApi* | [**updateA2PApplication**](docs/Api/AppToPersonA2PRegistrationApi.md#updatea2papplication) | **PUT** /v2/a2p/application/{applicationID} | Update A2P Application
*AppleWalletSubscribersApi* | [**fetchAppleWalletSubscriberActivity**](docs/Api/AppleWalletSubscribersApi.md#fetchapplewalletsubscriberactivity) | **GET** /v2/apple/wallet/pass/subscriber/activity/{subscriptionID} | Get subscriber activity
*AppleWalletSubscribersApi* | [**fetchAppleWalletSubscribers**](docs/Api/AppleWalletSubscribersApi.md#fetchapplewalletsubscribers) | **GET** /v2/apple/wallet/pass/subscribers/all | Get all subscribers
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /authentication/login | Login
*AuthenticationApi* | [**loginStatus**](docs/Api/AuthenticationApi.md#loginstatus) | **GET** /authentication/status/{token} | Retrieve session token status
*AuthenticationApi* | [**logout**](docs/Api/AuthenticationApi.md#logout) | **DELETE** /authentication/logout | Logout
*AuthenticationApi* | [**register**](docs/Api/AuthenticationApi.md#register) | **POST** /authentication/register | Register
*BillingPaymentsApi* | [**buyAddOn**](docs/Api/BillingPaymentsApi.md#buyaddon) | **POST** /v2/billing/products/addOns/{productID} | Buy add-on product
*BillingPaymentsApi* | [**buySpecialOffer**](docs/Api/BillingPaymentsApi.md#buyspecialoffer) | **POST** /v2/billing/products/specialOffers/{productID} | Buy special offer
*BillingPaymentsApi* | [**cancelPlan**](docs/Api/BillingPaymentsApi.md#cancelplan) | **DELETE** /v2/billing/plan | Cancel billing plan
*BillingPaymentsApi* | [**changePlan**](docs/Api/BillingPaymentsApi.md#changeplan) | **PUT** /v2/billing/plan | Change billing plan
*BillingPaymentsApi* | [**createBillingPortalSession**](docs/Api/BillingPaymentsApi.md#createbillingportalsession) | **POST** /v2/billing/portal/session | Create a Stripe Billing Portal session
*BillingPaymentsApi* | [**fetchAddOns**](docs/Api/BillingPaymentsApi.md#fetchaddons) | **GET** /v2/billing/products/addOns | Get add-on products
*BillingPaymentsApi* | [**fetchCustomerPaymentMethods**](docs/Api/BillingPaymentsApi.md#fetchcustomerpaymentmethods) | **GET** /v2/billing/paymentMethods/all | Get payment methods
*BillingPaymentsApi* | [**fetchIndustry**](docs/Api/BillingPaymentsApi.md#fetchindustry) | **GET** /v2/billing/industry | Get merchant&#39;s industry
*BillingPaymentsApi* | [**fetchInvoices**](docs/Api/BillingPaymentsApi.md#fetchinvoices) | **GET** /v2/billing/invoices/all | Get invoices
*BillingPaymentsApi* | [**fetchSpecialOffers**](docs/Api/BillingPaymentsApi.md#fetchspecialoffers) | **GET** /v2/billing/products/specialOffers | Get special offers
*BillingPaymentsApi* | [**fetchSubscription**](docs/Api/BillingPaymentsApi.md#fetchsubscription) | **GET** /v2/billing/subscription | Get subscription
*BillingPaymentsApi* | [**fetchUsageSummary**](docs/Api/BillingPaymentsApi.md#fetchusagesummary) | **GET** /v2/billing/summary | Get usage summary
*BillingPaymentsApi* | [**runFinancingSoftPull**](docs/Api/BillingPaymentsApi.md#runfinancingsoftpull) | **POST** /v2/billing/financing/soft-pull | Run a consumer-authorized financing soft credit inquiry (LeadFi, tri-bureau) Consumer-initiated FCRA permissible purpose: the authenticated user explicitly authorizes the check (disclosure text is submitted verbatim and persisted as evidence). The consent IP is captured server-side from the request; the inquiry is refused when it cannot be captured. Fails fast until LeadFi credentials are provisioned (go-live gated on counsel sign-off).
*BillingPaymentsApi* | [**savePaymentMethod**](docs/Api/BillingPaymentsApi.md#savepaymentmethod) | **PUT** /v2/billing/paymentMethod | Save payment method
*BillingPaymentsApi* | [**setDefaultPaymentMethod**](docs/Api/BillingPaymentsApi.md#setdefaultpaymentmethod) | **POST** /v2/billing/paymentMethod/default | Set payment method as default
*BillingPaymentsApi* | [**upcomingInvoices**](docs/Api/BillingPaymentsApi.md#upcominginvoices) | **GET** /v2/billing/invoices/upcoming | Get upcoming invoices
*BillingPaymentsApi* | [**verifyPaymentMethod**](docs/Api/BillingPaymentsApi.md#verifypaymentmethod) | **GET** /v2/billing/paymentMethod | Verify payment method
*BroadcastsApi* | [**archivePaymentObjectBroadcast**](docs/Api/BroadcastsApi.md#archivepaymentobjectbroadcast) | **DELETE** /v2/merchant/paymentObjectBroadcast/{broadcastID} | Archive payment object broadcast
*BroadcastsApi* | [**fetchAdvertisementCreditBroadcasts**](docs/Api/BroadcastsApi.md#fetchadvertisementcreditbroadcasts) | **GET** /v2/merchant/broadcasts/adCredits/all | Get all ad credit broadcasts
*BroadcastsApi* | [**fetchDynamicVoucherBroadcasts**](docs/Api/BroadcastsApi.md#fetchdynamicvoucherbroadcasts) | **GET** /v2/merchant/broadcasts/dynamicVouchers/all | Get all dynamic voucher broadcasts
*BroadcastsApi* | [**fetchPaymentObjectBroadcasts**](docs/Api/BroadcastsApi.md#fetchpaymentobjectbroadcasts) | **GET** /v2/sms/paymentObjectBroadcasts/{phoneNumberID} | Get payment object broadcasts
*BroadcastsApi* | [**fetchSimpleSMSBroadcasts**](docs/Api/BroadcastsApi.md#fetchsimplesmsbroadcasts) | **GET** /v2/merchant/broadcasts/simpleSMS/all | Get all simple SMS broadcasts
*BroadcastsApi* | [**fetchStaticVoucherCampaignBroadcasts**](docs/Api/BroadcastsApi.md#fetchstaticvouchercampaignbroadcasts) | **GET** /v2/merchant/broadcasts/staticVoucherCampaign/all | Get all static voucher campaign broadcasts
*BroadcastsApi* | [**scheduleAdvertisementCredit**](docs/Api/BroadcastsApi.md#scheduleadvertisementcredit) | **POST** /v2/employee/sms/schedule/adCredit/{advertisementCreditID} | Schedule Ad Credit
*BroadcastsApi* | [**scheduleDynamicVoucher**](docs/Api/BroadcastsApi.md#scheduledynamicvoucher) | **POST** /v2/employee/sms/schedule/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to list
*BroadcastsApi* | [**scheduleDynamicVoucherToRecipient**](docs/Api/BroadcastsApi.md#scheduledynamicvouchertorecipient) | **POST** /v2/employee/sms/schedule/recipient/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to recipient
*BroadcastsApi* | [**scheduleSimpleSMS**](docs/Api/BroadcastsApi.md#schedulesimplesms) | **POST** /v2/employee/sms/schedule/simple | Schedule Simple SMS broadcast to list
*BroadcastsApi* | [**scheduleSimpleSMSToRecipient**](docs/Api/BroadcastsApi.md#schedulesimplesmstorecipient) | **POST** /v2/employee/sms/schedule/recipient/simple | Schedule Simple SMS broadcast to recipient
*BroadcastsApi* | [**sendSmsCampaignBroadcast**](docs/Api/BroadcastsApi.md#sendsmscampaignbroadcast) | **POST** /v2/employee/sms/schedule/campaign/{staticVoucherCampaignID} | Schedule SMS Campaign Broadcast
*ClubMembersApi* | [**archiveMember**](docs/Api/ClubMembersApi.md#archivemember) | **DELETE** /v2/membership/member/{id} | Archive Member
*ClubMembersApi* | [**createMember**](docs/Api/ClubMembersApi.md#createmember) | **POST** /v2/membership/member | Create Member
*ClubMembersApi* | [**fetchMemberById**](docs/Api/ClubMembersApi.md#fetchmemberbyid) | **GET** /v2/membership/member/{id} | Get Member
*ClubMembersApi* | [**fetchMemberHistoryLog**](docs/Api/ClubMembersApi.md#fetchmemberhistorylog) | **POST** /v2/membership/member/history/log | Get Member history
*ClubMembersApi* | [**fetchMemberRedemptionLog**](docs/Api/ClubMembersApi.md#fetchmemberredemptionlog) | **POST** /v2/membership/member/redemption/log | Get Member redemption log
*ClubMembersApi* | [**fetchMembersByPage**](docs/Api/ClubMembersApi.md#fetchmembersbypage) | **POST** /v2/membership/member/page | Get Members
*ClubMembersApi* | [**fetchMembersCount**](docs/Api/ClubMembersApi.md#fetchmemberscount) | **GET** /v2/membership/member/count | Count Members
*ClubMembersApi* | [**restoreMember**](docs/Api/ClubMembersApi.md#restoremember) | **PATCH** /v2/membership/member/{id} | Restore Member
*ClubMembersApi* | [**searchMembers**](docs/Api/ClubMembersApi.md#searchmembers) | **POST** /v2/membership/member/search | Search for Members
*ClubMembersApi* | [**updateMember**](docs/Api/ClubMembersApi.md#updatemember) | **PUT** /v2/membership/member/{id} | Update Member
*CountriesApi* | [**fetchAllCountries**](docs/Api/CountriesApi.md#fetchallcountries) | **GET** /system/countries/all | Get all Countries with ISO abbreviations &amp; Telephone country code prefixes
*CustomerApi* | [**fetchActiveVouchers**](docs/Api/CustomerApi.md#fetchactivevouchers) | **GET** /v2/customer/vouchers/active | Get active static vouchers
*CustomerApi* | [**fetchAllVouchers**](docs/Api/CustomerApi.md#fetchallvouchers) | **GET** /v2/customer/vouchers/all | Get all static vouchers
*CustomerApi* | [**fetchExpiredVouchers**](docs/Api/CustomerApi.md#fetchexpiredvouchers) | **GET** /v2/customer/vouchers/expired | Get expired static vouchers
*CustomerApi* | [**fetchRedeemedVouchers**](docs/Api/CustomerApi.md#fetchredeemedvouchers) | **GET** /v2/customer/vouchers/redeemed | Get redeemed static vouchers
*CustomerApi* | [**fetchRefundedVouchers**](docs/Api/CustomerApi.md#fetchrefundedvouchers) | **GET** /v2/customer/vouchers/refunded | Get refunded static vouchers
*CustomerApi* | [**fetchUpcomingVouchers**](docs/Api/CustomerApi.md#fetchupcomingvouchers) | **GET** /v2/customer/vouchers/upcoming | Get upcoming static vouchers
*CustomerApi* | [**fetchWalletViewsForSession**](docs/Api/CustomerApi.md#fetchwalletviewsforsession) | **GET** /v2/customer/walletViews/session/{id} | Get Wallet Views for Session
*CustomerApi* | [**searchByMemberID**](docs/Api/CustomerApi.md#searchbymemberid) | **POST** /v2/customer/search/memberID | Find members with memberID
*CustomerApi* | [**searchByPhoneNumber**](docs/Api/CustomerApi.md#searchbyphonenumber) | **POST** /v2/customer/search/phoneNumber | Find members with phone number
*DiningApi* | [**archiveDining**](docs/Api/DiningApi.md#archivedining) | **DELETE** /v2/dining/{id} | Archive Dining info
*DiningApi* | [**createDining**](docs/Api/DiningApi.md#createdining) | **POST** /v2/dining | Create Dining info
*DiningApi* | [**fetchAllDining**](docs/Api/DiningApi.md#fetchalldining) | **GET** /v2/dining/all | Get all Dining info
*DiningApi* | [**restoreDining**](docs/Api/DiningApi.md#restoredining) | **PATCH** /v2/dining/{id} | Restore Dining info
*DiningApi* | [**updateDining**](docs/Api/DiningApi.md#updatedining) | **PUT** /v2/dining/{id} | Update Dining info
*DynamicVouchersApi* | [**archiveDynamicVoucherCampaign**](docs/Api/DynamicVouchersApi.md#archivedynamicvouchercampaign) | **DELETE** /v2/payment/dynamicVoucher/{campaignID} | Archive Dynamic Voucher Campaign
*DynamicVouchersApi* | [**createDynamicVoucher**](docs/Api/DynamicVouchersApi.md#createdynamicvoucher) | **POST** /v2/payment/dynamicVoucher | Create Dynamic Voucher Campaign
*DynamicVouchersApi* | [**fetchAllDynamicVouchers**](docs/Api/DynamicVouchersApi.md#fetchalldynamicvouchers) | **GET** /v2/payment/dynamicVoucher/all | Get all Dynamic Voucher Campaigns
*DynamicVouchersApi* | [**fetchDynamicVoucherById**](docs/Api/DynamicVouchersApi.md#fetchdynamicvoucherbyid) | **GET** /v2/payment/dynamicVoucher/{id} | Get Dynamic Voucher Campaign
*DynamicVouchersApi* | [**fetchDynamicVoucherRedemptions**](docs/Api/DynamicVouchersApi.md#fetchdynamicvoucherredemptions) | **GET** /v2/payment/dynamicVoucher/redemptions/{id} | Get Dynamic Voucher Campaign Redemptions
*DynamicVouchersApi* | [**fetchDynamicVouchers**](docs/Api/DynamicVouchersApi.md#fetchdynamicvouchers) | **GET** /v2/employee/dynamicVouchers/all | Get all dynamic vouchers
*DynamicVouchersApi* | [**fetchReachStatsOfAllDynamicVouchers**](docs/Api/DynamicVouchersApi.md#fetchreachstatsofalldynamicvouchers) | **GET** /v2/payment/dynamicVoucher/reach/all | Get the reach statistics of all the dynamic vouchers
*DynamicVouchersApi* | [**fetchReachStatsOfIndividualDynamicVoucher**](docs/Api/DynamicVouchersApi.md#fetchreachstatsofindividualdynamicvoucher) | **GET** /v2/payment/dynamicVoucher/reach/{dynamicVoucherID} | Get the reach statistics of an individual dynamic voucher
*DynamicVouchersApi* | [**restoreDynamicVoucherCampaign**](docs/Api/DynamicVouchersApi.md#restoredynamicvouchercampaign) | **PATCH** /v2/payment/dynamicVoucher/{campaignID} | Restore Dynamic Voucher Campaign
*DynamicVouchersApi* | [**saveDynamicVoucher**](docs/Api/DynamicVouchersApi.md#savedynamicvoucher) | **PUT** /v2/payment/dynamicVoucher/{id} | Update Dynamic Voucher Campaign
*EmailSubscribersApi* | [**archiveEmailSubscriber**](docs/Api/EmailSubscribersApi.md#archiveemailsubscriber) | **DELETE** /v2/emailSubscriber/{id} | Archive Email Subscriber
*EmailSubscribersApi* | [**createEmailSubscriber**](docs/Api/EmailSubscribersApi.md#createemailsubscriber) | **POST** /v2/emailSubscriber | Create Email Subscriber
*EmailSubscribersApi* | [**fetchAllEmailSubscribers**](docs/Api/EmailSubscribersApi.md#fetchallemailsubscribers) | **GET** /v2/emailSubscriber/all | Get all Email Subscribers
*EmailSubscribersApi* | [**restoreEmailSubscriber**](docs/Api/EmailSubscribersApi.md#restoreemailsubscriber) | **PATCH** /v2/emailSubscriber/{id} | Restore Email Subscriber
*EmailSubscribersApi* | [**updateEmailSubscriber**](docs/Api/EmailSubscribersApi.md#updateemailsubscriber) | **PUT** /v2/emailSubscriber/{id} | Update Email Subscriber
*EmployeesApi* | [**addPeerToRoles**](docs/Api/EmployeesApi.md#addpeertoroles) | **POST** /v2/employee/roles/peer/{userID} | Add peer to roles
*EmployeesApi* | [**createEmployeePeer**](docs/Api/EmployeesApi.md#createemployeepeer) | **POST** /v2/employee/peer | Create employee peer
*EmployeesApi* | [**fetchMerchant**](docs/Api/EmployeesApi.md#fetchmerchant) | **GET** /v2/employee/merchant | Create employee alert
*EmployeesApi* | [**fetchMessages**](docs/Api/EmployeesApi.md#fetchmessages) | **GET** /v2/employee/messages/all | Get all messages
*EmployeesApi* | [**fetchPeerActivity**](docs/Api/EmployeesApi.md#fetchpeeractivity) | **GET** /v2/employee/peer/activity/{employeeID} | Get peer activity
*EmployeesApi* | [**fetchPeersPermissions**](docs/Api/EmployeesApi.md#fetchpeerspermissions) | **GET** /v2/employee/peer/permissions/{userID} | Get peer permissions
*EmployeesApi* | [**fetchProfileInfo**](docs/Api/EmployeesApi.md#fetchprofileinfo) | **GET** /v2/employee | Get employee info
*EmployeesApi* | [**loadWebpagesOfEmployee**](docs/Api/EmployeesApi.md#loadwebpagesofemployee) | **GET** /v2/employee/webpages/all | Get employee&#39;s permissions
*EmployeesApi* | [**modifyPeersRoles**](docs/Api/EmployeesApi.md#modifypeersroles) | **PUT** /v2/employee/peer/permissions/{userID} | Modify peer&#39;s roles
*EmployeesApi* | [**removePeerFromAllRoles**](docs/Api/EmployeesApi.md#removepeerfromallroles) | **DELETE** /v2/employee/peer/permissions/{userID} | Remove peer from all roles
*EmployeesApi* | [**setAlertsRead**](docs/Api/EmployeesApi.md#setalertsread) | **PATCH** /v2/employee/alerts | Mark alerts as read
*EmployeesApi* | [**setMessagesRead**](docs/Api/EmployeesApi.md#setmessagesread) | **PATCH** /v2/employee/messages | Mark messages as read
*EmployeesApi* | [**setProfilePicture**](docs/Api/EmployeesApi.md#setprofilepicture) | **PUT** /v2/employee/profile/picture | Set profile picture
*EmployeesApi* | [**updateEmailNotificationPreference**](docs/Api/EmployeesApi.md#updateemailnotificationpreference) | **PUT** /v2/employee/emailNotificationPreference | Changes the employee&#39;s email notification preference to enabled or disabled
*EmployeesApi* | [**updateEmployeePeer**](docs/Api/EmployeesApi.md#updateemployeepeer) | **PUT** /v2/employee/peer/{userID} | Update peer
*FilesDocumentsApi* | [**createDocument**](docs/Api/FilesDocumentsApi.md#createdocument) | **POST** /v2/employee/document | Create document
*FilesDocumentsApi* | [**createFile**](docs/Api/FilesDocumentsApi.md#createfile) | **POST** /v2/employee/file/create | Create file
*FilesDocumentsApi* | [**createMediaFile**](docs/Api/FilesDocumentsApi.md#createmediafile) | **POST** /v2/employee/mediaFile | Create media file
*FilesDocumentsApi* | [**deleteDocument**](docs/Api/FilesDocumentsApi.md#deletedocument) | **DELETE** /v2/employee/document/{documentID} | Delete document
*FilesDocumentsApi* | [**deleteMediaFile**](docs/Api/FilesDocumentsApi.md#deletemediafile) | **DELETE** /v2/employee/mediaFile/{mediaFileID} | Delete media file
*FilesDocumentsApi* | [**downloadFile**](docs/Api/FilesDocumentsApi.md#downloadfile) | **GET** /v2/employee/file/download/{fileID} | Get URL for file download
*FilesDocumentsApi* | [**failedImport**](docs/Api/FilesDocumentsApi.md#failedimport) | **GET** /v2/employee/file/imports/failed/{fileID} | Get URL to download a failed import
*FilesDocumentsApi* | [**fetchDocuments**](docs/Api/FilesDocumentsApi.md#fetchdocuments) | **GET** /v2/employee/documents/all | Get all documents
*FilesDocumentsApi* | [**fetchMediaFiles**](docs/Api/FilesDocumentsApi.md#fetchmediafiles) | **GET** /v2/employee/mediaFiles/all | Get all media files
*FilesDocumentsApi* | [**presignFile**](docs/Api/FilesDocumentsApi.md#presignfile) | **POST** /v2/employee/file/presign | Presign file for upload
*GalleryApi* | [**archiveImageGrid**](docs/Api/GalleryApi.md#archiveimagegrid) | **DELETE** /v2/imageGrid/{id} | Archive Gallery Image
*GalleryApi* | [**createImageGrid**](docs/Api/GalleryApi.md#createimagegrid) | **POST** /v2/imageGrid | Create Gallery Image
*GalleryApi* | [**fetchAllImageGrid**](docs/Api/GalleryApi.md#fetchallimagegrid) | **GET** /v2/imageGrid/all | Get all Gallery Images
*GalleryApi* | [**restoreImageGrid**](docs/Api/GalleryApi.md#restoreimagegrid) | **PATCH** /v2/imageGrid/{id} | Restore Gallery Image
*GalleryApi* | [**updateImageGrid**](docs/Api/GalleryApi.md#updateimagegrid) | **PUT** /v2/imageGrid/{id} | Update Gallery Image
*GamingApi* | [**archiveGaming**](docs/Api/GamingApi.md#archivegaming) | **DELETE** /v2/gaming/{id} | Archive Gaming info
*GamingApi* | [**createGaming**](docs/Api/GamingApi.md#creategaming) | **POST** /v2/gaming | Create Gaming info
*GamingApi* | [**fetchAllGaming**](docs/Api/GamingApi.md#fetchallgaming) | **GET** /v2/gaming/all | Get all Gaming details
*GamingApi* | [**restoreGaming**](docs/Api/GamingApi.md#restoregaming) | **PATCH** /v2/gaming/{id} | Restore Gaming info
*GamingApi* | [**updateGaming**](docs/Api/GamingApi.md#updategaming) | **PUT** /v2/gaming/{id} | Update Gaming info
*GiftCardsApi* | [**claimGift**](docs/Api/GiftCardsApi.md#claimgift) | **POST** /giftcards/{giftID}/claim | Claim a gifted card or certificate Claims a gift into the recipient&#39;s wallet (guest-to-guest). For a certificate with the gift-redemption requirement, the claimer must be someone other than the purchaser.
*GiftCardsApi* | [**createCertificateDeal**](docs/Api/GiftCardsApi.md#createcertificatedeal) | **POST** /giftcards/deals | Create a gift-certificate deal (draft) Creates the discounted \&quot;deal\&quot; template (product/service entitlement, retail + sale price, quantity, validity) as a DRAFT. It is not purchasable until published. Authoring a draft does not require Stripe Connect.
*GiftCardsApi* | [**fetchCertificateDeal**](docs/Api/GiftCardsApi.md#fetchcertificatedeal) | **GET** /giftcards/deals/{dealID} | Fetch a certificate deal by id
*GiftCardsApi* | [**fetchGift**](docs/Api/GiftCardsApi.md#fetchgift) | **GET** /giftcards/{giftID} | Fetch a gift card or certificate by id
*GiftCardsApi* | [**publishCertificateDeal**](docs/Api/GiftCardsApi.md#publishcertificatedeal) | **POST** /giftcards/deals/{dealID}/publish | Publish a certificate deal (put it on sale) Flips a draft deal live so guests can buy certificates from it. Requires the merchant&#39;s Stripe Connect account to be active (charges enabled), since a purchase is a direct charge to that account.
*GiftCardsApi* | [**purchaseCertificateFromDeal**](docs/Api/GiftCardsApi.md#purchasecertificatefromdeal) | **POST** /giftcards/deals/{dealID}/purchase | Purchase a certificate from a deal Runs the (mock) Connect direct charge of the deal&#39;s discounted sale price to the merchant, then mints a single-use certificate from the deal. Optionally gifts it to a recipient.
*GiftCardsApi* | [**purchaseGiftCard**](docs/Api/GiftCardsApi.md#purchasegiftcard) | **POST** /giftcards/purchase | Purchase a gift card Runs the (mock) Connect direct charge to the merchant, then issues a funded, reloadable gift card. Optionally gifts it to a recipient. Requires the merchant&#39;s Stripe Connect account to be active (charges enabled).
*HelpDeskApi* | [**fetchHelpDeskRequests**](docs/Api/HelpDeskApi.md#fetchhelpdeskrequests) | **GET** /v2/merchant/helpDeskRequests/{phoneNumberID} | Get help desk requests
*HelpDeskApi* | [**sendHelpDeskResponse**](docs/Api/HelpDeskApi.md#sendhelpdeskresponse) | **POST** /v2/employee/helpDesk/response | Send help desk response
*HelpDeskApi* | [**setHelpDeskRequestResolved**](docs/Api/HelpDeskApi.md#sethelpdeskrequestresolved) | **PATCH** /v2/employee/helpDesk/request/{helpDeskRequestID} | Resolve help desk request
*ImportExportApi* | [**exportClubMembers**](docs/Api/ImportExportApi.md#exportclubmembers) | **PUT** /v2/employee/export/members | Export club members
*ImportExportApi* | [**exportMerchantCredits**](docs/Api/ImportExportApi.md#exportmerchantcredits) | **PUT** /v2/employee/export/merchantCredits | Export merchant credits
*ImportExportApi* | [**exportStaticVoucherCampaign**](docs/Api/ImportExportApi.md#exportstaticvouchercampaign) | **PUT** /v2/employee/export/staticVoucherCampaign/{campaignID} | Export static voucher campaign
*ImportExportApi* | [**importClubMembers**](docs/Api/ImportExportApi.md#importclubmembers) | **POST** /v2/employee/import/members | Import club members
*ImportExportApi* | [**importMerchantCredits**](docs/Api/ImportExportApi.md#importmerchantcredits) | **POST** /v2/employee/import/merchantCredits | Import merchant credits
*ImportExportApi* | [**setExportDataFilesRead**](docs/Api/ImportExportApi.md#setexportdatafilesread) | **PUT** /v2/employee/export/dataFiles | Mark export data files as read
*ImportExportApi* | [**updateClubMembers**](docs/Api/ImportExportApi.md#updateclubmembers) | **PUT** /v2/employee/update/members | Update club members
*ImportedListsApi* | [**archiveRecipient**](docs/Api/ImportedListsApi.md#archiverecipient) | **DELETE** /v2/sms/importedList/recipients/{id} | Archive recipient
*ImportedListsApi* | [**countImportedListRecipients**](docs/Api/ImportedListsApi.md#countimportedlistrecipients) | **GET** /v2/sms/importedList/recipients/count/{listID} | Count imported list recipients
*ImportedListsApi* | [**createImportedList**](docs/Api/ImportedListsApi.md#createimportedlist) | **POST** /v2/sms/importedList | Create imported list
*ImportedListsApi* | [**createRecipientInImportedList**](docs/Api/ImportedListsApi.md#createrecipientinimportedlist) | **POST** /v2/sms/importedList/recipients/create | Add new recipient in an imported list
*ImportedListsApi* | [**exportImportedListRecipients**](docs/Api/ImportedListsApi.md#exportimportedlistrecipients) | **POST** /v2/sms/importedList/recipients/export/{importedListID} | Export imported list recipients
*ImportedListsApi* | [**fetchImportedList**](docs/Api/ImportedListsApi.md#fetchimportedlist) | **GET** /v2/merchant/lists/imported/{listID} | Get imported list
*ImportedListsApi* | [**fetchImportedListRecipients**](docs/Api/ImportedListsApi.md#fetchimportedlistrecipients) | **GET** /v2/sms/importedList/recipients/{listID} | Get imported list recipients
*ImportedListsApi* | [**fetchImportedListRecipientsByPage**](docs/Api/ImportedListsApi.md#fetchimportedlistrecipientsbypage) | **GET** /v2/sms/importedList/recipients/page/{listID} | Get imported list recipients by page
*ImportedListsApi* | [**fetchImportedLists**](docs/Api/ImportedListsApi.md#fetchimportedlists) | **GET** /v2/merchant/lists/imported/all | Get all imported lists
*ImportedListsApi* | [**importImportedListRecipients**](docs/Api/ImportedListsApi.md#importimportedlistrecipients) | **POST** /v2/sms/importedList/recipients/import/{importedListID} | Import imported list recipients
*ImportedListsApi* | [**importImportedListRecipientsFromMembershipTier**](docs/Api/ImportedListsApi.md#importimportedlistrecipientsfrommembershiptier) | **POST** /v2/sms/importedList/recipients/import-from-tier | Import imported list recipients from a given membership tier
*ImportedListsApi* | [**restoreRecipient**](docs/Api/ImportedListsApi.md#restorerecipient) | **PATCH** /v2/sms/importedList/recipients/{id} | Restore recipient
*ImportedListsApi* | [**saveImportedList**](docs/Api/ImportedListsApi.md#saveimportedlist) | **PUT** /v2/sms/importedList/{listID} | Save imported list
*IndustriesApi* | [**fetchAllIndustries**](docs/Api/IndustriesApi.md#fetchallindustries) | **GET** /system/industries/all | Get all Industries &amp; Pricing Plans
*IndustriesApi* | [**fetchIndustriesIDs**](docs/Api/IndustriesApi.md#fetchindustriesids) | **GET** /system/industries/trimmed | Get all Industries &amp; Pricing Plans with trimmed metadata
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
*InfoGenesisReportsApi* | [**fetchInfoGenesisAuthorizations**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisauthorizations) | **POST** /v2/pos/infogenesis/authorizations | Get authorizations
*InfoGenesisReportsApi* | [**fetchInfoGenesisCampaignData**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesiscampaigndata) | **POST** /v2/pos/infogenesis/campaign | Get campaign information
*InfoGenesisReportsApi* | [**fetchInfoGenesisLookupRequests**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesislookuprequests) | **POST** /v2/pos/infogenesis/requests/lookup | Get lookup requests
*InfoGenesisReportsApi* | [**fetchInfoGenesisLookupRequestsErrors**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesislookuprequestserrors) | **POST** /v2/pos/infogenesis/requests/lookup/errors | Get lookup request errors
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedeemedStaticVouchers**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredeemedstaticvouchers) | **POST** /v2/pos/infogenesis/staticVouchers/redeemed | Get redeemed static vouchers
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedeemedUniquePostingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredeemeduniquepostingids) | **GET** /v2/pos/infogenesis/postingIDs/redeemed | Get redeemed unique posting IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisRedemptions**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisredemptions) | **POST** /v2/pos/infogenesis/redemptions | Get redemptions
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefundedRoutingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefundedroutingids) | **POST** /v2/pos/infogenesis/routingIDs/refunded | Get refunded unique posting IDs
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefundedStaticVouchers**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefundedstaticvouchers) | **POST** /v2/pos/infogenesis/staticVouchers/refunded | Get refunded static vouchers
*InfoGenesisReportsApi* | [**fetchInfoGenesisRefunds**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrefunds) | **POST** /v2/pos/infogenesis/refunds | Get refunds
*InfoGenesisReportsApi* | [**fetchInfoGenesisRequest**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrequest) | **GET** /v2/pos/infogenesis/request/{transactionID} | Get request
*InfoGenesisReportsApi* | [**fetchInfoGenesisRequests**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisrequests) | **POST** /v2/pos/infogenesis/requests | Get requests
*InfoGenesisReportsApi* | [**fetchInfoGenesisResponseErrors**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisresponseerrors) | **GET** /v2/pos/infogenesis/responses/errors | Get response errors
*InfoGenesisReportsApi* | [**fetchInfoGenesisResponses**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesisresponses) | **POST** /v2/pos/infogenesis/responses | Get responses
*InfoGenesisReportsApi* | [**fetchInfoGenesisTransactionsWithUniquePostingIDs**](docs/Api/InfoGenesisReportsApi.md#fetchinfogenesistransactionswithuniquepostingids) | **POST** /v2/pos/infogenesis/transactions | Get transactions
*InteractionsApi* | [**claimTicket**](docs/Api/InteractionsApi.md#claimticket) | **PUT** /wallet/ticket/claim/{id} | Claim a ticket by ID
*InteractionsApi* | [**createAdvertisementCreditScan**](docs/Api/InteractionsApi.md#createadvertisementcreditscan) | **POST** /wallet/advertisementCredit/scan/{adCreditID} | Create ad credit scan
*InteractionsApi* | [**createEmployeeVCard**](docs/Api/InteractionsApi.md#createemployeevcard) | **GET** /wallet/employee/vcard/{id} | Download a representative&#39;s Virtual Business Card
*InteractionsApi* | [**createIcsFile**](docs/Api/InteractionsApi.md#createicsfile) | **GET** /wallet/liveevent/ics/{id} | Get ICS for live event
*InteractionsApi* | [**createVirtualBusinessCardVCard**](docs/Api/InteractionsApi.md#createvirtualbusinesscardvcard) | **GET** /wallet/virtualBusinessCard/vCard/{id} | Download a non-representative&#39;s Virtual Business Card
*InteractionsApi* | [**fetchActiveDynamicVouchers**](docs/Api/InteractionsApi.md#fetchactivedynamicvouchers) | **GET** /wallet/dyanmicVoucher/fetchActive | Get a merchant&#39;s active dynamic vouchers
*InteractionsApi* | [**fetchAdvertisementCreditScansFromList**](docs/Api/InteractionsApi.md#fetchadvertisementcreditscansfromlist) | **POST** /wallet/advertisementCredit/fetchScans/{merchantID} | Get multiple credit scans w/ array of IDs
*InteractionsApi* | [**fetchAllStaticVouchersAssociatedWithCustomerWithVoucherID**](docs/Api/InteractionsApi.md#fetchallstaticvouchersassociatedwithcustomerwithvoucherid) | **GET** /wallet/staticVoucher/all | Get a customer&#39;s static vouchers on the basis of a given voucher ID
*InteractionsApi* | [**fetchCustomerTicketsWithToken**](docs/Api/InteractionsApi.md#fetchcustomerticketswithtoken) | **POST** /wallet/tickets/fetchCustomerTicketsWithToken | Get a customer&#39;s upcoming tickets via phone verification token
*InteractionsApi* | [**fetchDynamicVoucherWithVoucherID**](docs/Api/InteractionsApi.md#fetchdynamicvoucherwithvoucherid) | **GET** /wallet/dynamicVoucher/{voucherID} | Get dynamic voucher
*InteractionsApi* | [**fetchMemberInformation**](docs/Api/InteractionsApi.md#fetchmemberinformation) | **GET** /wallet/member | Get member information
*InteractionsApi* | [**fetchStaticVoucherWithVoucherID**](docs/Api/InteractionsApi.md#fetchstaticvoucherwithvoucherid) | **GET** /wallet/staticVoucher/{voucherID} | Get static voucher
*InteractionsApi* | [**fetchWalletPageWithToken**](docs/Api/InteractionsApi.md#fetchwalletpagewithtoken) | **POST** /wallet/page/token | Get page (token-scoped)
*InteractionsApi* | [**fetchWalletPaymentObjectsWithToken**](docs/Api/InteractionsApi.md#fetchwalletpaymentobjectswithtoken) | **POST** /wallet/paymentObject/token | Get payment objects (token-scoped)
*InteractionsApi* | [**findByVanityHandle**](docs/Api/InteractionsApi.md#findbyvanityhandle) | **GET** /wallet/vanityHandle/{handle} | Get vanity handle
*InteractionsApi* | [**identifyItem**](docs/Api/InteractionsApi.md#identifyitem) | **GET** /wallet/item/identify/{itemID} | Identify item
*InteractionsApi* | [**requestMerchantURLRedirect**](docs/Api/InteractionsApi.md#requestmerchanturlredirect) | **POST** /wallet/merchantURL/{itemID} | Request Merchant URL
*InteractionsApi* | [**subscribeEmail**](docs/Api/InteractionsApi.md#subscribeemail) | **POST** /wallet/subscribeEmail | Create email subscriber
*InteractionsApi* | [**subscribeSms**](docs/Api/InteractionsApi.md#subscribesms) | **POST** /wallet/subscribeSms | Create sms subscriber
*LoungeApi* | [**archiveLounge**](docs/Api/LoungeApi.md#archivelounge) | **DELETE** /v2/lounge/{id} | Archive Lounge
*LoungeApi* | [**createLounge**](docs/Api/LoungeApi.md#createlounge) | **POST** /v2/lounge | Create Lounge
*LoungeApi* | [**fetchAllLounge**](docs/Api/LoungeApi.md#fetchalllounge) | **GET** /v2/lounge/all | Get all Lounges
*LoungeApi* | [**restoreLounge**](docs/Api/LoungeApi.md#restorelounge) | **PATCH** /v2/lounge/{id} | Restore Lounge
*LoungeApi* | [**updateLounge**](docs/Api/LoungeApi.md#updatelounge) | **PUT** /v2/lounge/{id} | Update Lounge
*MembershipTiersApi* | [**archiveMembershipTier**](docs/Api/MembershipTiersApi.md#archivemembershiptier) | **DELETE** /v2/membership/tier/{id} | Archive Membership Tier
*MembershipTiersApi* | [**createMembershipTier**](docs/Api/MembershipTiersApi.md#createmembershiptier) | **POST** /v2/membership/tier | Create Membership Tier
*MembershipTiersApi* | [**fetchAllMembershipTiers**](docs/Api/MembershipTiersApi.md#fetchallmembershiptiers) | **GET** /v2/membership/tier/all | Get all Membership Tiers
*MembershipTiersApi* | [**fetchAllMembershipTiersWithMemberCount**](docs/Api/MembershipTiersApi.md#fetchallmembershiptierswithmembercount) | **GET** /v2/membership/tier/allWithMemberCount | Get all Membership Tiers with member count
*MembershipTiersApi* | [**fetchMembershipTierById**](docs/Api/MembershipTiersApi.md#fetchmembershiptierbyid) | **GET** /v2/membership/tier/{id} | Get Membership Tier
*MembershipTiersApi* | [**fetchMembershipTierHistoryLog**](docs/Api/MembershipTiersApi.md#fetchmembershiptierhistorylog) | **POST** /v2/membership/tier/history/log | Get Membership Tier history
*MembershipTiersApi* | [**fetchMembershipTierRedemptionLog**](docs/Api/MembershipTiersApi.md#fetchmembershiptierredemptionlog) | **POST** /v2/membership/tier/redemption/log | Get Membership Tier redemption log
*MembershipTiersApi* | [**restoreMembershipTier**](docs/Api/MembershipTiersApi.md#restoremembershiptier) | **PATCH** /v2/membership/tier/{id} | Restore Membership Tier
*MembershipTiersApi* | [**updateMembershipTier**](docs/Api/MembershipTiersApi.md#updatemembershiptier) | **PUT** /v2/membership/tier/{id} | Update Membership Tier
*MerchantApi* | [**archiveMerchantProfile**](docs/Api/MerchantApi.md#archivemerchantprofile) | **DELETE** /v2/merchant/delete | Archive Merchant
*MerchantApi* | [**fetchCustomRoles**](docs/Api/MerchantApi.md#fetchcustomroles) | **GET** /v2/merchant/roles/custom | Get custom roles
*MerchantApi* | [**fetchEmployees**](docs/Api/MerchantApi.md#fetchemployees) | **GET** /v2/merchant/employees/all | Get all employees
*MerchantApi* | [**fetchPublicEmployees**](docs/Api/MerchantApi.md#fetchpublicemployees) | **GET** /v2/merchant/employees/public | Get public representative employees of the merchant
*MerchantApi* | [**fetchWalletConfiguration**](docs/Api/MerchantApi.md#fetchwalletconfiguration) | **GET** /v2/merchant/wallet/configuration | Get wallet configuration
*MerchantApi* | [**updateMerchant**](docs/Api/MerchantApi.md#updatemerchant) | **PUT** /v2/merchant | Update merchant details
*MerchantApi* | [**updatePointsOfContact**](docs/Api/MerchantApi.md#updatepointsofcontact) | **PUT** /v2/merchant/pointsOfContact | Update points of contact
*MerchantApi* | [**updatePosIntegration**](docs/Api/MerchantApi.md#updateposintegration) | **PUT** /v2/merchant/pos/integration | Update POS Integration
*MerchantCreditsApi* | [**archiveMerchantCredit**](docs/Api/MerchantCreditsApi.md#archivemerchantcredit) | **DELETE** /v2/payment/merchantcredit/{id} | Archive Merchant Credit
*MerchantCreditsApi* | [**createMerchantCredit**](docs/Api/MerchantCreditsApi.md#createmerchantcredit) | **POST** /v2/payment/merchantcredit | Create Merchant Credit
*MerchantCreditsApi* | [**fetchMerchantCreditById**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditbyid) | **GET** /v2/payment/merchantcredit/{id} | Get Merchant Credit
*MerchantCreditsApi* | [**fetchMerchantCreditCount**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditcount) | **GET** /v2/payment/merchantcredit/count | Count all Merchant Credits
*MerchantCreditsApi* | [**fetchMerchantCreditHistoryLog**](docs/Api/MerchantCreditsApi.md#fetchmerchantcredithistorylog) | **POST** /v2/payment/merchantcredit/history/log | Get history
*MerchantCreditsApi* | [**fetchMerchantCreditRedemptionLog**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditredemptionlog) | **POST** /v2/payment/merchantcredit/redemption/log | Get redemption log
*MerchantCreditsApi* | [**fetchMerchantCreditsByPage**](docs/Api/MerchantCreditsApi.md#fetchmerchantcreditsbypage) | **POST** /v2/payment/merchantcredit/page | Get Merchant Credits
*MerchantCreditsApi* | [**restoreMerchantCredit**](docs/Api/MerchantCreditsApi.md#restoremerchantcredit) | **PATCH** /v2/payment/merchantcredit/{id} | Restore Merchant Credit
*MerchantCreditsApi* | [**searchMerchantCredits**](docs/Api/MerchantCreditsApi.md#searchmerchantcredits) | **POST** /v2/payment/merchantcredit/search | Search for Merchant Credits with Member ID
*MerchantCreditsApi* | [**updateMerchantCredit**](docs/Api/MerchantCreditsApi.md#updatemerchantcredit) | **PUT** /v2/payment/merchantcredit/{id} | Update Merchant Credit
*NewsApi* | [**archiveNewsArticle**](docs/Api/NewsApi.md#archivenewsarticle) | **DELETE** /v2/news/{id} | Archive News &amp; Blog post
*NewsApi* | [**createNewsArticle**](docs/Api/NewsApi.md#createnewsarticle) | **POST** /v2/news | Create News &amp; Blog post
*NewsApi* | [**fetchAllNewsArticles**](docs/Api/NewsApi.md#fetchallnewsarticles) | **GET** /v2/news/all | Get all News &amp; Blog posts
*NewsApi* | [**restoreNewsArticle**](docs/Api/NewsApi.md#restorenewsarticle) | **PATCH** /v2/news/{id} | Restore News &amp; Blog post
*NewsApi* | [**updateNewsArticle**](docs/Api/NewsApi.md#updatenewsarticle) | **PUT** /v2/news/{id} | Update News &amp; Blog post
*OpenAIApi* | [**archiveAssistant**](docs/Api/OpenAIApi.md#archiveassistant) | **DELETE** /v2/interop/openai/assistant/{id} | Archive Assistant
*OpenAIApi* | [**archiveThread**](docs/Api/OpenAIApi.md#archivethread) | **DELETE** /v2/interop/openai/thread/{id} | Archive Thread
*OpenAIApi* | [**archiveVectorStore**](docs/Api/OpenAIApi.md#archivevectorstore) | **DELETE** /v2/interop/openai/vectorStore/{id} | Archive VectorStore
*OpenAIApi* | [**createAssistant**](docs/Api/OpenAIApi.md#createassistant) | **POST** /v2/interop/openai/assistant | Create Assistant
*OpenAIApi* | [**createRunOnThread**](docs/Api/OpenAIApi.md#createrunonthread) | **POST** /v2/interop/openai/thread/{id}/run/create | Create Run on Thread
*OpenAIApi* | [**createThread**](docs/Api/OpenAIApi.md#createthread) | **POST** /v2/interop/openai/thread | Create Thread
*OpenAIApi* | [**createThreadMessage**](docs/Api/OpenAIApi.md#createthreadmessage) | **POST** /v2/interop/openai/thread/{id}/message/create | Add Message to Thread
*OpenAIApi* | [**createVectorStore**](docs/Api/OpenAIApi.md#createvectorstore) | **POST** /v2/interop/openai/vectorStore | Create VectorStore
*OpenAIApi* | [**fetchAllAssistants**](docs/Api/OpenAIApi.md#fetchallassistants) | **GET** /v2/interop/openai/assistant/all | Get all Assistants
*OpenAIApi* | [**fetchAllThreads**](docs/Api/OpenAIApi.md#fetchallthreads) | **GET** /v2/interop/openai/thread/all | Get all Threads
*OpenAIApi* | [**fetchAllVectorStores**](docs/Api/OpenAIApi.md#fetchallvectorstores) | **GET** /v2/interop/openai/vectorStore/all | Get all VectorStores
*OpenAIApi* | [**fetchAssistant**](docs/Api/OpenAIApi.md#fetchassistant) | **GET** /v2/interop/openai/assistant/{id} | Get Assistant
*OpenAIApi* | [**fetchThreadMessages**](docs/Api/OpenAIApi.md#fetchthreadmessages) | **GET** /v2/interop/openai/thread/{id}/messages | Get Thread&#39;s Messages
*OpenAIApi* | [**restoreAssistant**](docs/Api/OpenAIApi.md#restoreassistant) | **PATCH** /v2/interop/openai/assistant/{id} | Restore Assistant
*OpenAIApi* | [**restoreThread**](docs/Api/OpenAIApi.md#restorethread) | **PATCH** /v2/interop/openai/thread/{id} | Restore Thread
*OpenAIApi* | [**restoreVectorStore**](docs/Api/OpenAIApi.md#restorevectorstore) | **PATCH** /v2/interop/openai/vectorStore/{id} | Restore VectorStore
*OpenAIApi* | [**updateAssistant**](docs/Api/OpenAIApi.md#updateassistant) | **PUT** /v2/interop/openai/assistant/{id} | Update Assistant
*OpenAIApi* | [**updateThread**](docs/Api/OpenAIApi.md#updatethread) | **PUT** /v2/interop/openai/thread/{id} | Update Thread
*OpenAIApi* | [**updateVectorStore**](docs/Api/OpenAIApi.md#updatevectorstore) | **PUT** /v2/interop/openai/vectorStore/{id} | Update VectorStore
*OptInListsApi* | [**countOptInListSubscribers**](docs/Api/OptInListsApi.md#countoptinlistsubscribers) | **GET** /v2/sms/optInList/subscribers/count/{listID} | Count opt in list subscribers
*OptInListsApi* | [**countOptInSourceSubscribers**](docs/Api/OptInListsApi.md#countoptinsourcesubscribers) | **GET** /v2/sms/optInSource/subscribers/count/{sourceID} | Count opt in source subscribers
*OptInListsApi* | [**createOptInList**](docs/Api/OptInListsApi.md#createoptinlist) | **POST** /v2/sms/optInList | Create opt in list
*OptInListsApi* | [**createOptInListSource**](docs/Api/OptInListsApi.md#createoptinlistsource) | **POST** /v2/sms/optInListSource | Send SMS to opt in list
*OptInListsApi* | [**exportOptInListSubscribers**](docs/Api/OptInListsApi.md#exportoptinlistsubscribers) | **POST** /v2/sms/optInList/subscribers/export/{listID} | Export opt in list subscribers
*OptInListsApi* | [**fetchOptInList**](docs/Api/OptInListsApi.md#fetchoptinlist) | **GET** /v2/merchant/lists/optIn/{listID} | Get opt in list
*OptInListsApi* | [**fetchOptInListSource**](docs/Api/OptInListsApi.md#fetchoptinlistsource) | **GET** /v2/employee/optInListSource/{sourceID} | Get opt in list source
*OptInListsApi* | [**fetchOptInListSources**](docs/Api/OptInListsApi.md#fetchoptinlistsources) | **GET** /v2/sms/optInListSources/all | Get all opt in list sources
*OptInListsApi* | [**fetchOptInListSourcesCreatedByEmployee**](docs/Api/OptInListsApi.md#fetchoptinlistsourcescreatedbyemployee) | **GET** /v2/employee/optInListSources/all | Get all opt in list sources
*OptInListsApi* | [**fetchOptInListSubscribers**](docs/Api/OptInListsApi.md#fetchoptinlistsubscribers) | **GET** /v2/sms/optInList/subscribers/{listID} | Get opt in list subscribers
*OptInListsApi* | [**fetchOptInListSubscribersByPage**](docs/Api/OptInListsApi.md#fetchoptinlistsubscribersbypage) | **GET** /v2/sms/optInList/subscribers/page/{listID} | Get opt in list subscribers by page
*OptInListsApi* | [**fetchOptInLists**](docs/Api/OptInListsApi.md#fetchoptinlists) | **GET** /v2/merchant/lists/optIn/all | Get all opt in lists
*OptInListsApi* | [**fetchOptInListsAssociatedWithPhoneNumber**](docs/Api/OptInListsApi.md#fetchoptinlistsassociatedwithphonenumber) | **GET** /v2/sms/phoneNumber/lists/{phoneNumberID} | Get opt in lists
*OptInListsApi* | [**fetchOptInSourceSubscribers**](docs/Api/OptInListsApi.md#fetchoptinsourcesubscribers) | **GET** /v2/sms/optInSource/subscribers/{sourceID} | Get opt in source subscribers
*OptInListsApi* | [**fetchOptInSourcesAssociatedWithPhoneNumber**](docs/Api/OptInListsApi.md#fetchoptinsourcesassociatedwithphonenumber) | **GET** /v2/sms/phoneNumber/sources/{phoneNumberID} | Get opt in sources
*OptInListsApi* | [**importOptInListSubscribers**](docs/Api/OptInListsApi.md#importoptinlistsubscribers) | **POST** /v2/sms/optInList/subscribers/import/{listID} | Import opt in list subscribers
*OptInListsApi* | [**saveOptInList**](docs/Api/OptInListsApi.md#saveoptinlist) | **PUT** /v2/sms/optInList/{listID} | Save opt in list
*OptInListsApi* | [**saveOptInListSource**](docs/Api/OptInListsApi.md#saveoptinlistsource) | **PUT** /v2/sms/optInListSource/{sourceID} | Save opt in list source
*OrdersApi* | [**fetchOrder**](docs/Api/OrdersApi.md#fetchorder) | **GET** /orders/{orderId} | Fetch one of the authenticated merchant&#39;s orders by id Returns the order with its line items. 403-family error if the order belongs to another merchant (ownership is asserted server-side).
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /orders | List the authenticated merchant&#39;s orders Newest first, each hydrated with its line items. Read-only receipts/status for Flow B.
*PaymentDesignsApi* | [**archivePaymentDesign**](docs/Api/PaymentDesignsApi.md#archivepaymentdesign) | **DELETE** /v2/payment/design/{id} | Archive payment design
*PaymentDesignsApi* | [**createPaymentDesign**](docs/Api/PaymentDesignsApi.md#createpaymentdesign) | **POST** /v2/payment/design | Create payment design
*PaymentDesignsApi* | [**fetchAllPaymentDesigns**](docs/Api/PaymentDesignsApi.md#fetchallpaymentdesigns) | **GET** /v2/payment/design/all | Get all payment designs
*PaymentDesignsApi* | [**fetchPaymentDesignById**](docs/Api/PaymentDesignsApi.md#fetchpaymentdesignbyid) | **GET** /v2/payment/design/{id} | Get payment design
*PaymentDesignsApi* | [**restorePaymentDesign**](docs/Api/PaymentDesignsApi.md#restorepaymentdesign) | **PATCH** /v2/payment/design/{id} | Restore payment design
*PaymentDesignsApi* | [**updatePaymentDesign**](docs/Api/PaymentDesignsApi.md#updatepaymentdesign) | **PUT** /v2/payment/design/{id} | Update payment design
*PerformancesApi* | [**archivePerformance**](docs/Api/PerformancesApi.md#archiveperformance) | **DELETE** /v2/performances/{id} | Archive Performance
*PerformancesApi* | [**countClaimedComps**](docs/Api/PerformancesApi.md#countclaimedcomps) | **GET** /v2/performances/{id}/claimed/count | Count Performance&#39;s claimed Tickets
*PerformancesApi* | [**countRedeemedComps**](docs/Api/PerformancesApi.md#countredeemedcomps) | **GET** /v2/performances/{id}/redeemed/count | Count Performance&#39;s redeemed Tickets
*PerformancesApi* | [**createPerformance**](docs/Api/PerformancesApi.md#createperformance) | **POST** /v2/performances | Create performance
*PerformancesApi* | [**exportTickets**](docs/Api/PerformancesApi.md#exporttickets) | **POST** /v2/performances/{id}/tickets/export | Export Performance&#39;s Tickets
*PerformancesApi* | [**fetchAllPerformanceTickets**](docs/Api/PerformancesApi.md#fetchallperformancetickets) | **GET** /v2/performances/tickets/all/{id} | Get Performance&#39;s Tickets
*PerformancesApi* | [**fetchAllPerformances**](docs/Api/PerformancesApi.md#fetchallperformances) | **GET** /v2/performances/all | Get all Performances
*PerformancesApi* | [**fetchPerformance**](docs/Api/PerformancesApi.md#fetchperformance) | **GET** /v2/performances/{id} | Get Performance
*PerformancesApi* | [**fetchPerformanceTicketsPage**](docs/Api/PerformancesApi.md#fetchperformanceticketspage) | **GET** /v2/performances/tickets/page/{performanceID} | Get Performance&#39;s Tickets
*PerformancesApi* | [**fetchTicketReachStatsAll**](docs/Api/PerformancesApi.md#fetchticketreachstatsall) | **GET** /v2/performances/reach/all | Ticket reach funnel across all of the merchant&#39;s performances Merchant-wide ticket lifecycle funnel (Issued -&gt; Claimed -&gt; Redeemed) with seats and comp/paid splits, for the Dashboard Customer tab and the View Analytics &gt; Customers &gt; Tickets page. Cohort is keyed on issue date: the optional startDate/endDate filter tickets by when they were issued (createdAt), and the later stages count how far those tickets got, regardless of when.
*PerformancesApi* | [**fetchTicketReachStatsForPerformance**](docs/Api/PerformancesApi.md#fetchticketreachstatsforperformance) | **GET** /v2/performances/{id}/reach | Ticket reach funnel for a single performance Per-performance ticket lifecycle funnel (Issued -&gt; Claimed -&gt; Redeemed) with seats and comp/paid splits, for the /tickets \&quot;Show Analytics\&quot; slide-open. Optional startDate/endDate key the cohort on issue date (createdAt); omit them for the performance&#39;s all-time funnel.
*PerformancesApi* | [**importTickets**](docs/Api/PerformancesApi.md#importtickets) | **POST** /v2/performances/{id}/tickets/import | Import Performance&#39;s Tickets
*PerformancesApi* | [**restorePerformance**](docs/Api/PerformancesApi.md#restoreperformance) | **PATCH** /v2/performances/{id} | Restore Performance
*PerformancesApi* | [**saveTicketSettings**](docs/Api/PerformancesApi.md#saveticketsettings) | **POST** /v2/performances/{id} | Update performance&#39;s Ticket Settings
*PerformancesApi* | [**updatePerformance**](docs/Api/PerformancesApi.md#updateperformance) | **PUT** /v2/performances/{id} | Update Performance
*PhoneNumbersApi* | [**acquirePhoneNumber**](docs/Api/PhoneNumbersApi.md#acquirephonenumber) | **POST** /v2/sms/phoneNumber/acquire | Acquire phone number
*PhoneNumbersApi* | [**archivePhoneNumber**](docs/Api/PhoneNumbersApi.md#archivephonenumber) | **DELETE** /v2/sms/phoneNumber/{phoneNumberID} | Archive phone number
*PhoneNumbersApi* | [**fetchBlockedTCPAEntries**](docs/Api/PhoneNumbersApi.md#fetchblockedtcpaentries) | **GET** /v2/sms/phoneNumber/blocked/{phoneNumberID} | Get blocked TCPA entries
*PhoneNumbersApi* | [**fetchMerchantPhoneNumbers**](docs/Api/PhoneNumbersApi.md#fetchmerchantphonenumbers) | **GET** /v2/merchant/phoneNumbers/all | Get all phone numbers
*PhoneNumbersApi* | [**fetchPhoneNumber**](docs/Api/PhoneNumbersApi.md#fetchphonenumber) | **GET** /v2/merchant/phoneNumber/{phoneNumberID} | Get phone number
*PhoneNumbersApi* | [**fetchSMSAgreement**](docs/Api/PhoneNumbersApi.md#fetchsmsagreement) | **GET** /v2/sms/agreement | Get SMS Agreement
*PhoneNumbersApi* | [**fetchTCPAFilter**](docs/Api/PhoneNumbersApi.md#fetchtcpafilter) | **GET** /v2/merchant/tcpa/filter/all | Get all TCPA Filters
*PhoneNumbersApi* | [**restorePhoneNumber**](docs/Api/PhoneNumbersApi.md#restorephonenumber) | **PATCH** /v2/sms/phoneNumber/{phoneNumberID} | Restore phone number
*PhoneNumbersApi* | [**sendPhoneNumberForVerification**](docs/Api/PhoneNumbersApi.md#sendphonenumberforverification) | **PUT** /v2/sms/phoneNumber/verification/{phoneNumberID} | Request phone number verification
*PhoneNumbersApi* | [**updatePhoneNumber**](docs/Api/PhoneNumbersApi.md#updatephonenumber) | **PUT** /v2/sms/phoneNumber/{phoneNumberID} | Update phone number
*PointOfSaleConfigurationApi* | [**archivePOSMachine**](docs/Api/PointOfSaleConfigurationApi.md#archiveposmachine) | **DELETE** /v2/pos/machine/{id} | Archive PoS machine
*PointOfSaleConfigurationApi* | [**createPOSMachine**](docs/Api/PointOfSaleConfigurationApi.md#createposmachine) | **POST** /v2/pos/machine | Create PoS machine
*PointOfSaleConfigurationApi* | [**fetchAllPOSMachines**](docs/Api/PointOfSaleConfigurationApi.md#fetchallposmachines) | **GET** /v2/pos/machine/all | Get all PoS machines
*PointOfSaleConfigurationApi* | [**restorePOSMachine**](docs/Api/PointOfSaleConfigurationApi.md#restoreposmachine) | **PATCH** /v2/pos/machine/{id} | Restore PoS machine
*PointOfSaleConfigurationApi* | [**updatePOSMachine**](docs/Api/PointOfSaleConfigurationApi.md#updateposmachine) | **PUT** /v2/pos/machine/{id} | Update PoS machine
*PrizesApi* | [**archiveAdvertisementCredit**](docs/Api/PrizesApi.md#archiveadvertisementcredit) | **DELETE** /v2/payment/advertisementCredit/{id} | Archive Prize
*PrizesApi* | [**createAdvertisementCredit**](docs/Api/PrizesApi.md#createadvertisementcredit) | **POST** /v2/payment/advertisementCredit | Create Prize
*PrizesApi* | [**fetchAdvertisementCreditById**](docs/Api/PrizesApi.md#fetchadvertisementcreditbyid) | **GET** /v2/payment/advertisementCredit/{id} | Get Prize
*PrizesApi* | [**fetchAdvertisementCreditScans**](docs/Api/PrizesApi.md#fetchadvertisementcreditscans) | **GET** /v2/payment/advertisementCredit/scans/{id} | Get Prizes awarded
*PrizesApi* | [**fetchAllAdvertisementCredits**](docs/Api/PrizesApi.md#fetchalladvertisementcredits) | **GET** /v2/payment/advertisementCredit/all | Get all Prizes
*PrizesApi* | [**restoreAdvertisementCredit**](docs/Api/PrizesApi.md#restoreadvertisementcredit) | **PATCH** /v2/payment/advertisementCredit/{id} | Restore Prize
*PrizesApi* | [**updateAdvertisementCredit**](docs/Api/PrizesApi.md#updateadvertisementcredit) | **PUT** /v2/payment/advertisementCredit/{id} | Update Prize
*ProductsApi* | [**archiveProduct**](docs/Api/ProductsApi.md#archiveproduct) | **DELETE** /v2/products/{id} | Archive Product
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /v2/products | Create Product
*ProductsApi* | [**fetchAllProducts**](docs/Api/ProductsApi.md#fetchallproducts) | **GET** /v2/products/all | Get all Products
*ProductsApi* | [**restoreProduct**](docs/Api/ProductsApi.md#restoreproduct) | **PATCH** /v2/products/{id} | Restore Product
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /v2/products/{id} | Update Product
*PromotionCodesApi* | [**archivePromoCode**](docs/Api/PromotionCodesApi.md#archivepromocode) | **DELETE** /v2/promoCodes/{id} | Archive Promotion Code
*PromotionCodesApi* | [**createPromoCode**](docs/Api/PromotionCodesApi.md#createpromocode) | **POST** /v2/promoCodes | Create Promotion Code
*PromotionCodesApi* | [**fetchAllPromoCodes**](docs/Api/PromotionCodesApi.md#fetchallpromocodes) | **GET** /v2/promoCodes/all | Get all Promotion Codes
*PromotionCodesApi* | [**restorePromoCode**](docs/Api/PromotionCodesApi.md#restorepromocode) | **PATCH** /v2/promoCodes/{id} | Restore Promotion Code
*PromotionCodesApi* | [**updatePromoCode**](docs/Api/PromotionCodesApi.md#updatepromocode) | **PUT** /v2/promoCodes/{id} | Update Promotion Code
*QRCodeDesignsApi* | [**archiveQRCodeDesign**](docs/Api/QRCodeDesignsApi.md#archiveqrcodedesign) | **DELETE** /v2/qrcodedesign/{id} | Archive QR Code Design
*QRCodeDesignsApi* | [**createQRCodeDesign**](docs/Api/QRCodeDesignsApi.md#createqrcodedesign) | **POST** /v2/qrcodedesign | Create QR Code design
*QRCodeDesignsApi* | [**fetchAllQRCodeDesigns**](docs/Api/QRCodeDesignsApi.md#fetchallqrcodedesigns) | **GET** /v2/qrcodedesign/all | Get all QR Code Designs
*QRCodeDesignsApi* | [**fetchQRCodeDesignById**](docs/Api/QRCodeDesignsApi.md#fetchqrcodedesignbyid) | **GET** /v2/qrcodedesign/{id} | Get QR Code Design
*QRCodeDesignsApi* | [**restoreQRCodeDesign**](docs/Api/QRCodeDesignsApi.md#restoreqrcodedesign) | **PATCH** /v2/qrcodedesign/{id} | Restore QR Code Design
*QRCodeDesignsApi* | [**updateQRCodeDesign**](docs/Api/QRCodeDesignsApi.md#updateqrcodedesign) | **PUT** /v2/qrcodedesign/{id} | Update QR Code Design
*QuickLinksApi* | [**archiveLinkBook**](docs/Api/QuickLinksApi.md#archivelinkbook) | **DELETE** /v2/linkBook/{id} | Archive Quick Link
*QuickLinksApi* | [**createLinkBook**](docs/Api/QuickLinksApi.md#createlinkbook) | **POST** /v2/linkBook | Create Quick Link
*QuickLinksApi* | [**fetchAllLinkBook**](docs/Api/QuickLinksApi.md#fetchalllinkbook) | **GET** /v2/linkBook/all | Get all Quick Links
*QuickLinksApi* | [**fetchLinkBookById**](docs/Api/QuickLinksApi.md#fetchlinkbookbyid) | **GET** /v2/linkBook/{id} | Get Quick Link
*QuickLinksApi* | [**restoreLinkBook**](docs/Api/QuickLinksApi.md#restorelinkbook) | **PATCH** /v2/linkBook/{id} | Restore Quick Link
*QuickLinksApi* | [**updateLinkBook**](docs/Api/QuickLinksApi.md#updatelinkbook) | **PUT** /v2/linkBook/{id} | Update Quick Link
*QuickLinksSectionApi* | [**archiveLinkBookSection**](docs/Api/QuickLinksSectionApi.md#archivelinkbooksection) | **DELETE** /v2/linkBookSection/{id} | Archive quick link section
*QuickLinksSectionApi* | [**createLinkBookSection**](docs/Api/QuickLinksSectionApi.md#createlinkbooksection) | **POST** /v2/linkBookSection | Create quick link section
*QuickLinksSectionApi* | [**fetchAllLinkBookSections**](docs/Api/QuickLinksSectionApi.md#fetchalllinkbooksections) | **GET** /v2/linkBookSection/all | Get all quick link sections
*QuickLinksSectionApi* | [**restoreLinkBookSection**](docs/Api/QuickLinksSectionApi.md#restorelinkbooksection) | **PATCH** /v2/linkBookSection/{id} | Restore quick link section
*QuickLinksSectionApi* | [**updateLinkBookSection**](docs/Api/QuickLinksSectionApi.md#updatelinkbooksection) | **PUT** /v2/linkBookSection/{id} | Update quick link section
*RoomRatesApi* | [**archiveRoomRate**](docs/Api/RoomRatesApi.md#archiveroomrate) | **DELETE** /v2/roomRates/{id} | Archive Room &amp; Rate
*RoomRatesApi* | [**createRoomRate**](docs/Api/RoomRatesApi.md#createroomrate) | **POST** /v2/roomRates | Create Room &amp; Rate
*RoomRatesApi* | [**fetchAllRoomRates**](docs/Api/RoomRatesApi.md#fetchallroomrates) | **GET** /v2/roomRates/all | Get all Rooms &amp; Rates
*RoomRatesApi* | [**restoreRoomRate**](docs/Api/RoomRatesApi.md#restoreroomrate) | **PATCH** /v2/roomRates/{id} | Restore Room &amp; Rate
*RoomRatesApi* | [**updateRoomRate**](docs/Api/RoomRatesApi.md#updateroomrate) | **PUT** /v2/roomRates/{id} | Update Room &amp; Rate
*SMSMessagesApi* | [**countInboundSMS**](docs/Api/SMSMessagesApi.md#countinboundsms) | **GET** /v2/merchant/sms/inbound/count/{phoneNumberID} | Count inbound SMSes
*SMSMessagesApi* | [**countOutboundSMS**](docs/Api/SMSMessagesApi.md#countoutboundsms) | **GET** /v2/sms/outbound/count/{phoneNumberID} | Count outbound SMS
*SMSMessagesApi* | [**estimateSMSSegments**](docs/Api/SMSMessagesApi.md#estimatesmssegments) | **POST** /sms/segment-estimate | Estimate SMS/MMS segments for a message
*SMSMessagesApi* | [**exportInboundMessages**](docs/Api/SMSMessagesApi.md#exportinboundmessages) | **PUT** /v2/merchant/sms/inbound/export/{phoneNumberID} | Export inbound messages
*SMSMessagesApi* | [**exportOutboundMessages**](docs/Api/SMSMessagesApi.md#exportoutboundmessages) | **PUT** /v2/merchant/sms/outbound/export/{phoneNumberID} | Export outbound messages
*SMSMessagesApi* | [**fetchInboundSMS**](docs/Api/SMSMessagesApi.md#fetchinboundsms) | **GET** /v2/merchant/sms/inbound/{phoneNumberID} | Get inbound SMSes
*SMSMessagesApi* | [**fetchInboundSMSByPage**](docs/Api/SMSMessagesApi.md#fetchinboundsmsbypage) | **GET** /v2/merchant/sms/inbound/page/{phoneNumberID} | Get inbound SMSes by page
*SMSMessagesApi* | [**fetchMerchantOutboundSMS**](docs/Api/SMSMessagesApi.md#fetchmerchantoutboundsms) | **GET** /v2/merchant/sms/outbound/{phoneNumberID} | Get outbound SMSes
*SMSMessagesApi* | [**fetchOutboundSMS**](docs/Api/SMSMessagesApi.md#fetchoutboundsms) | **GET** /v2/sms/outbound/{phoneNumberID} | Get outbound SMS
*SMSMessagesApi* | [**fetchOutboundSMSByPage**](docs/Api/SMSMessagesApi.md#fetchoutboundsmsbypage) | **GET** /v2/sms/outbound/page/{phoneNumberID} | Get outbound SMSes by page
*SMSMessagesApi* | [**retrieveSentAndMaxCountOfMessages**](docs/Api/SMSMessagesApi.md#retrievesentandmaxcountofmessages) | **GET** /v2/sms/sent | Retrieve the message segments used by the merchant within the current billing cycle
*SMSSubscribersApi* | [**archiveSmsSubscriber**](docs/Api/SMSSubscribersApi.md#archivesmssubscriber) | **DELETE** /v2/SmsSubscriber/{id} | Archive SMS Subscriber
*SMSSubscribersApi* | [**createSmsSubscriber**](docs/Api/SMSSubscribersApi.md#createsmssubscriber) | **POST** /v2/SmsSubscriber | Create SMS Subscriber
*SMSSubscribersApi* | [**fetchAllSmsSubscribers**](docs/Api/SMSSubscribersApi.md#fetchallsmssubscribers) | **GET** /v2/SmsSubscriber/all | Get all SMS Subscribers
*SMSSubscribersApi* | [**restoreSmsSubscriber**](docs/Api/SMSSubscribersApi.md#restoresmssubscriber) | **PATCH** /v2/SmsSubscriber/{id} | Restore SMS Subscriber
*SMSSubscribersApi* | [**updateSmsSubscriber**](docs/Api/SMSSubscribersApi.md#updatesmssubscriber) | **PUT** /v2/SmsSubscriber/{id} | Update SMS Subscriber
*ServicesApi* | [**archiveService**](docs/Api/ServicesApi.md#archiveservice) | **DELETE** /v2/services/{id} | Archive Service
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /v2/services | Create Service
*ServicesApi* | [**fetchAllServices**](docs/Api/ServicesApi.md#fetchallservices) | **GET** /v2/services/all | Get all Services
*ServicesApi* | [**restoreService**](docs/Api/ServicesApi.md#restoreservice) | **PATCH** /v2/services/{id} | Restore Service
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /v2/services/{id} | Update Service
*ShopifyTerminalApi* | [**fetchWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#fetchwalletitemfromshopifyterminal) | **GET** /v2/pos/shopify/item/{itemID} | Get item
*ShopifyTerminalApi* | [**redeemWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#redeemwalletitemfromshopifyterminal) | **POST** /v2/pos/shopify/item/redeem/{itemID} | Redeem item
*ShopifyTerminalApi* | [**refundWalletItemFromShopifyTerminal**](docs/Api/ShopifyTerminalApi.md#refundwalletitemfromshopifyterminal) | **POST** /v2/pos/shopify/item/refund/{ledgerEntryID} | Refund transaction
*ShortLinksApi* | [**archiveMerchantURL**](docs/Api/ShortLinksApi.md#archivemerchanturl) | **DELETE** /v2/business/merchantUrl/{id} | Archive Short Link
*ShortLinksApi* | [**createMerchantURL**](docs/Api/ShortLinksApi.md#createmerchanturl) | **POST** /v2/business/merchantUrl | Create Short Link
*ShortLinksApi* | [**fetchAllMerchantURLs**](docs/Api/ShortLinksApi.md#fetchallmerchanturls) | **GET** /v2/business/merchantUrl/all | Get all Short Links
*ShortLinksApi* | [**fetchMerchantURL**](docs/Api/ShortLinksApi.md#fetchmerchanturl) | **GET** /v2/business/merchantUrl/{id} | Get Short Link
*ShortLinksApi* | [**fetchMerchantURLRequests**](docs/Api/ShortLinksApi.md#fetchmerchanturlrequests) | **GET** /v2/business/merchantUrl/requests/{id} | Get Short Link traffic
*ShortLinksApi* | [**restoreMerchantURL**](docs/Api/ShortLinksApi.md#restoremerchanturl) | **PATCH** /v2/business/merchantUrl/{id} | Restore Short Link
*ShortLinksApi* | [**updateMerchantURL**](docs/Api/ShortLinksApi.md#updatemerchanturl) | **PUT** /v2/business/merchantUrl/{id} | Update Short Link
*StaticVoucherCampaignsApi* | [**archiveStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#archivestaticvouchercampaign) | **DELETE** /v2/payment/staticVoucherCampaign/{campaignID} | Archive Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**countVouchersLoaded**](docs/Api/StaticVoucherCampaignsApi.md#countvouchersloaded) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/loaded/{campaignID} | Count vouchers in Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**countVouchersRedeemed**](docs/Api/StaticVoucherCampaignsApi.md#countvouchersredeemed) | **GET** /v2/payment/staticVoucherCampaign/count/vouchers/redeemed/{campaignID} | Count redeemed vouchers in Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaign) | **POST** /v2/payment/staticVoucherCampaign | Create Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaignFromCSV**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaignfromcsv) | **POST** /v2/payment/staticVoucherCampaign/csv | Import Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**createStaticVoucherCampaignWithVoucher**](docs/Api/StaticVoucherCampaignsApi.md#createstaticvouchercampaignwithvoucher) | **POST** /v2/payment/staticVoucherCampaign/voucher | Create Static Voucher Campaign with single voucher
*StaticVoucherCampaignsApi* | [**duplicateStaticVoucherCampaignById**](docs/Api/StaticVoucherCampaignsApi.md#duplicatestaticvouchercampaignbyid) | **POST** /v2/payment/staticVoucherCampaign/duplicate/{campaignID} | Duplicate Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**fetchPerformanceOverview**](docs/Api/StaticVoucherCampaignsApi.md#fetchperformanceoverview) | **GET** /v2/payment/staticVoucherCampaign/overview/performance/{campaignID} | Get Static Voucher Campaign performance overview
*StaticVoucherCampaignsApi* | [**fetchReachStatsOfAllStaticVoucherCampaigns**](docs/Api/StaticVoucherCampaignsApi.md#fetchreachstatsofallstaticvouchercampaigns) | **GET** /v2/payment/staticVoucherCampaign/reach/all | Get the reach statistics of all Static Voucher Campaigns
*StaticVoucherCampaignsApi* | [**fetchReachStatsOfIndividualStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#fetchreachstatsofindividualstaticvouchercampaign) | **GET** /v2/payment/staticVoucherCampaign/reach/{staticVoucherCampaignID} | Get the reach statistics of a single Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**fetchStaticVoucherCampaignById**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchercampaignbyid) | **GET** /v2/payment/staticVoucherCampaign/{id} | Get Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**fetchStaticVoucherCampaigns**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchercampaigns) | **GET** /v2/payment/staticVoucherCampaign/all | Get all Static Vouchers Campaigns
*StaticVoucherCampaignsApi* | [**fetchStaticVouchers**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvouchers) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/{campaignID} | Get vouchers in Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**fetchStaticVouchersPage**](docs/Api/StaticVoucherCampaignsApi.md#fetchstaticvoucherspage) | **GET** /v2/payment/staticVoucherCampaign/staticVouchers/page/{campaignID} | Get a page of vouchers in a Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**fetchViews**](docs/Api/StaticVoucherCampaignsApi.md#fetchviews) | **GET** /v2/payment/staticVoucherCampaign/views/{campaignID} | Get Static Vouchers Campaign traffic
*StaticVoucherCampaignsApi* | [**fetchVouchersRedeemed**](docs/Api/StaticVoucherCampaignsApi.md#fetchvouchersredeemed) | **GET** /v2/payment/staticVoucherCampaign/vouchers/redeemed/{campaignID} | Get redeemed vouchers in Static Vouchers Campaign
*StaticVoucherCampaignsApi* | [**previewMessagesByPage**](docs/Api/StaticVoucherCampaignsApi.md#previewmessagesbypage) | **PUT** /v2/payment/staticVoucherCampaign/preview/page/{campaignID} | Preview generated broadcast messages by page
*StaticVoucherCampaignsApi* | [**restoreStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#restorestaticvouchercampaign) | **PATCH** /v2/payment/staticVoucherCampaign/{campaignID} | Restore Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**updateStaticVoucherCampaign**](docs/Api/StaticVoucherCampaignsApi.md#updatestaticvouchercampaign) | **PUT** /v2/payment/staticVoucherCampaign/{campaignID} | Update Static Voucher Campaign
*StaticVoucherCampaignsApi* | [**updateStaticVoucherCampaignWithVoucher**](docs/Api/StaticVoucherCampaignsApi.md#updatestaticvouchercampaignwithvoucher) | **PUT** /v2/payment/staticVoucherCampaign/voucher/{campaignID} | Update Static Voucher Campaign with single voucher
*StaticVouchersApi* | [**createStaticVoucher**](docs/Api/StaticVouchersApi.md#createstaticvoucher) | **POST** /v2/payment/staticVoucher | Create Static Voucher
*StaticVouchersApi* | [**deleteStaticVoucher**](docs/Api/StaticVouchersApi.md#deletestaticvoucher) | **DELETE** /v2/payment/staticVoucher/{id} | Delete Static Voucher
*StaticVouchersApi* | [**fetchReachStatsOfAllStaticVouchers**](docs/Api/StaticVouchersApi.md#fetchreachstatsofallstaticvouchers) | **GET** /v2/payment/staticVoucher/reach/all | Get reach statistics of all Static Vouchers
*StaticVouchersApi* | [**fetchReachStatsOfIndividualStaticVoucher**](docs/Api/StaticVouchersApi.md#fetchreachstatsofindividualstaticvoucher) | **GET** /v2/payment/staticVoucher/reach/{staticVoucherID} | Get reach statistics of a single Static Voucher
*StaticVouchersApi* | [**fetchStaticVoucher**](docs/Api/StaticVouchersApi.md#fetchstaticvoucher) | **GET** /v2/payment/staticVoucher/{id} | Get Static Voucher
*StaticVouchersApi* | [**updateStaticVoucher**](docs/Api/StaticVouchersApi.md#updatestaticvoucher) | **PUT** /v2/payment/staticVoucher/{id} | Update Static Voucher
*StripeConnectApi* | [**createConnectOnboardingLink**](docs/Api/StripeConnectApi.md#createconnectonboardinglink) | **POST** /v2/connect/account/onboarding-link | Create a Stripe Connect onboarding link Creates the merchant&#39;s STANDARD connected account on first call (pass-through model; the merchant owns their Stripe relationship) and returns a hosted onboarding link (single-use, expiring). returnUrl/refreshUrl are validated against the origin allowlist. Not a fund-moving write; 403 when the merchant&#39;s plan does not include Connect ecommerce.
*StripeConnectApi* | [**fetchConnectAccountStatus**](docs/Api/StripeConnectApi.md#fetchconnectaccountstatus) | **GET** /v2/connect/account | Get Stripe Connect account status Observability for Flow B ecommerce: the connected-account id and capability flags for the authenticated merchant, plus the derived onboarding status and the server-side ecommerce eligibility flag. Returns the defined not-started shape (accountId null) rather than 404 when onboarding has not begun.
*StripeConnectApi* | [**fetchConnectPaymentsSummary**](docs/Api/StripeConnectApi.md#fetchconnectpaymentssummary) | **GET** /v2/connect/payments-summary | Get a read-only Connect payments summary Balances, recent payouts, and recent charges (up to 10 each) for the merchant&#39;s connected account, in Stripe minor units with currency codes. Read-only observability; Wallet is not in the Flow B money path.
*SystemApi* | [**createRole**](docs/Api/SystemApi.md#createrole) | **POST** /v2/system/roles | Create role
*SystemApi* | [**deleteRole**](docs/Api/SystemApi.md#deleterole) | **DELETE** /v2/system/roles/{roleID} | Delete role
*SystemApi* | [**fetchAuditLogOfRoles**](docs/Api/SystemApi.md#fetchauditlogofroles) | **GET** /v2/system/roles/auditLog | Get role&#39;s audit log
*SystemApi* | [**fetchEmployeesWithRole**](docs/Api/SystemApi.md#fetchemployeeswithrole) | **GET** /v2/system/roles/employees/{roleID} | Get employees with role
*SystemApi* | [**fetchWebpagesForRole**](docs/Api/SystemApi.md#fetchwebpagesforrole) | **GET** /v2/system/roles/webpages/{roleID} | Get webpages for role
*SystemApi* | [**loadRole**](docs/Api/SystemApi.md#loadrole) | **GET** /v2/system/roles/{roleID} | Get role
*SystemApi* | [**saveRole**](docs/Api/SystemApi.md#saverole) | **PUT** /v2/system/roles/{roleID} | Update role
*TicketsApi* | [**archiveTicket**](docs/Api/TicketsApi.md#archiveticket) | **DELETE** /v2/ticket/{id} | Archive Ticket
*TicketsApi* | [**createTicket**](docs/Api/TicketsApi.md#createticket) | **POST** /v2/ticket | Create Ticket
*TicketsApi* | [**fetchTicket**](docs/Api/TicketsApi.md#fetchticket) | **GET** /v2/ticket/{id} | Get Ticket
*TicketsApi* | [**restoreTicket**](docs/Api/TicketsApi.md#restoreticket) | **PATCH** /v2/ticket/{id} | Restore Ticket
*TicketsApi* | [**updateTicket**](docs/Api/TicketsApi.md#updateticket) | **PUT** /v2/ticket/{id} | Update Ticket
*VideosApi* | [**archiveVideo**](docs/Api/VideosApi.md#archivevideo) | **DELETE** /v2/video/{id} | Archive Video
*VideosApi* | [**createVideo**](docs/Api/VideosApi.md#createvideo) | **POST** /v2/video | Create Video
*VideosApi* | [**fetchAllVideo**](docs/Api/VideosApi.md#fetchallvideo) | **GET** /v2/video/all | Get all Videos
*VideosApi* | [**provisionVideoUpload**](docs/Api/VideosApi.md#provisionvideoupload) | **POST** /v2/video/upload/provision | Provision a direct video upload
*VideosApi* | [**restoreVideo**](docs/Api/VideosApi.md#restorevideo) | **PATCH** /v2/video/{id} | Restore Video
*VideosApi* | [**updateVideo**](docs/Api/VideosApi.md#updatevideo) | **PUT** /v2/video/{id} | Update Video
*VirtualBusinessCardApi* | [**archiveVirtualBusinessCard**](docs/Api/VirtualBusinessCardApi.md#archivevirtualbusinesscard) | **DELETE** /v2/virtualBusinessCard/{id} | Archive Virtual Business Card
*VirtualBusinessCardApi* | [**createVirtualBusinessCard**](docs/Api/VirtualBusinessCardApi.md#createvirtualbusinesscard) | **POST** /v2/virtualBusinessCard | Create Virtual Business Card
*VirtualBusinessCardApi* | [**fetchAllVirtualBusinessCards**](docs/Api/VirtualBusinessCardApi.md#fetchallvirtualbusinesscards) | **GET** /v2/virtualBusinessCard/all | Get all Virtual Business Cards
*VirtualBusinessCardApi* | [**fetchVirtualBusinessCard**](docs/Api/VirtualBusinessCardApi.md#fetchvirtualbusinesscard) | **GET** /v2/virtualBusinessCard/{id} | Get Virtual Business Card
*VirtualBusinessCardApi* | [**fetchVirtualBusinessCardRequests**](docs/Api/VirtualBusinessCardApi.md#fetchvirtualbusinesscardrequests) | **GET** /v2/virtualBusinessCard/requests/{id} | Get Virtual Business Card traffic
*VirtualBusinessCardApi* | [**restoreVirtualBusinessCard**](docs/Api/VirtualBusinessCardApi.md#restorevirtualbusinesscard) | **PATCH** /v2/virtualBusinessCard/{id} | Restore Virtual Business Card
*VirtualBusinessCardApi* | [**updateVirtualBusinessCard**](docs/Api/VirtualBusinessCardApi.md#updatevirtualbusinesscard) | **PUT** /v2/virtualBusinessCard/{id} | Update Virtual Business Card
*WalletConfigurationApi* | [**generateAndroidKeystore**](docs/Api/WalletConfigurationApi.md#generateandroidkeystore) | **POST** /v2/wallet/android/keystore | Generate Android TWA signing keystore
*WalletConfigurationApi* | [**saveMerchantCreditPaymentDesign**](docs/Api/WalletConfigurationApi.md#savemerchantcreditpaymentdesign) | **PUT** /v2/wallet/merchantCredit/paymentDesign | Update payment design for merchant credits
*WalletConfigurationApi* | [**saveWalletRecord**](docs/Api/WalletConfigurationApi.md#savewalletrecord) | **PUT** /v2/wallet | Update wallet record
*WalletMobileTerminalApi* | [**fetchWalletItemFromMobileTerminal**](docs/Api/WalletMobileTerminalApi.md#fetchwalletitemfrommobileterminal) | **GET** /v2/pos/mobile/item/{itemID} | Get item
*WalletMobileTerminalApi* | [**findMemberByID**](docs/Api/WalletMobileTerminalApi.md#findmemberbyid) | **GET** /v2/pos/mobile/member/{memberID} | Search for Member&#39;s rewards
*WalletMobileTerminalApi* | [**redeemWalletItemFromMobileTerminal**](docs/Api/WalletMobileTerminalApi.md#redeemwalletitemfrommobileterminal) | **POST** /v2/pos/mobile/item/redeem/{itemID} | Redeem item
*WalletTransactionLedgerApi* | [**fetchAllLedgerTransactions**](docs/Api/WalletTransactionLedgerApi.md#fetchallledgertransactions) | **GET** /v2/pos/ledger/transactions/all | Get ledger entries
*WalletWebTerminalApi* | [**fetchWalletItemFromWebTerminal**](docs/Api/WalletWebTerminalApi.md#fetchwalletitemfromwebterminal) | **GET** /v2/pos/web/item/{itemID} | Get item
*WalletWebTerminalApi* | [**redeemWalletItemFromWebTerminal**](docs/Api/WalletWebTerminalApi.md#redeemwalletitemfromwebterminal) | **POST** /v2/pos/web/item/redeem/{itemID} | Redeem item
*WalletWebTerminalApi* | [**refundWalletItemFromWebTerminal**](docs/Api/WalletWebTerminalApi.md#refundwalletitemfromwebterminal) | **POST** /v2/pos/web/item/refund/{ledgerEntryID} | Refund transaction
*WixTerminalApi* | [**fetchWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#fetchwalletitemfromwixterminal) | **GET** /v2/pos/wix/item/{itemID} | Get item
*WixTerminalApi* | [**redeemWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#redeemwalletitemfromwixterminal) | **POST** /v2/pos/wix/item/redeem/{itemID} | Redeem item
*WixTerminalApi* | [**refundWalletItemFromWixTerminal**](docs/Api/WixTerminalApi.md#refundwalletitemfromwixterminal) | **POST** /v2/pos/wix/item/refund/{ledgerEntryID} | Refund transaction
*WooCommerceTerminalApi* | [**fetchWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#fetchwalletitemfromwoocommerceterminal) | **GET** /v2/pos/woocommerce/item/{itemID} | Get item
*WooCommerceTerminalApi* | [**redeemWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#redeemwalletitemfromwoocommerceterminal) | **POST** /v2/pos/woocommerce/item/redeem/{itemID} | Redeem item
*WooCommerceTerminalApi* | [**refundWalletItemFromWooCommerceTerminal**](docs/Api/WooCommerceTerminalApi.md#refundwalletitemfromwoocommerceterminal) | **POST** /v2/pos/woocommerce/item/refund/{ledgerEntryID} | Refund transaction

## Models

- [A2PApplicationSubmission](docs/Model/A2PApplicationSubmission.md)
- [A2PGovernmentSubmission](docs/Model/A2PGovernmentSubmission.md)
- [A2PNonProfitSubmission](docs/Model/A2PNonProfitSubmission.md)
- [A2PPublicSubmission](docs/Model/A2PPublicSubmission.md)
- [A2PSoleProprietorSubmission](docs/Model/A2PSoleProprietorSubmission.md)
- [A2PStandardSubmission](docs/Model/A2PStandardSubmission.md)
- [AdvertisementCredit](docs/Model/AdvertisementCredit.md)
- [AdvertisementCreditBroadcast](docs/Model/AdvertisementCreditBroadcast.md)
- [AdvertisementCreditScan](docs/Model/AdvertisementCreditScan.md)
- [Amenity](docs/Model/Amenity.md)
- [AmenityId](docs/Model/AmenityId.md)
- [Announcement](docs/Model/Announcement.md)
- [ApplicableTerminals](docs/Model/ApplicableTerminals.md)
- [Assistant](docs/Model/Assistant.md)
- [AuthError](docs/Model/AuthError.md)
- [AvailablePhoneNumbersRequest](docs/Model/AvailablePhoneNumbersRequest.md)
- [BrowserDetails](docs/Model/BrowserDetails.md)
- [BusinessClassification](docs/Model/BusinessClassification.md)
- [BusinessClassificationGovernment](docs/Model/BusinessClassificationGovernment.md)
- [BusinessClassificationNonProfit](docs/Model/BusinessClassificationNonProfit.md)
- [BusinessClassificationPrivate](docs/Model/BusinessClassificationPrivate.md)
- [BusinessClassificationPublic](docs/Model/BusinessClassificationPublic.md)
- [BusinessIndustry](docs/Model/BusinessIndustry.md)
- [BusinessIndustryGOVERNMENT](docs/Model/BusinessIndustryGOVERNMENT.md)
- [BusinessIndustryNOTFORPROFIT](docs/Model/BusinessIndustryNOTFORPROFIT.md)
- [BusinessRegionsOfOperation](docs/Model/BusinessRegionsOfOperation.md)
- [BusinessRegistrationIdentifier](docs/Model/BusinessRegistrationIdentifier.md)
- [BusinessStockExchanges](docs/Model/BusinessStockExchanges.md)
- [BusinessType](docs/Model/BusinessType.md)
- [BusinessTypeNonProfit](docs/Model/BusinessTypeNonProfit.md)
- [BusinessTypeSoleProprietorship](docs/Model/BusinessTypeSoleProprietorship.md)
- [ChatCompletionAudio](docs/Model/ChatCompletionAudio.md)
- [ChatCompletionMessage](docs/Model/ChatCompletionMessage.md)
- [ChatCompletionMessageAudio](docs/Model/ChatCompletionMessageAudio.md)
- [ChatCompletionMessageFunctionCall](docs/Model/ChatCompletionMessageFunctionCall.md)
- [ChatCompletionMessageToolCall](docs/Model/ChatCompletionMessageToolCall.md)
- [ChatCompletionMessageToolCallFunction](docs/Model/ChatCompletionMessageToolCallFunction.md)
- [ClaimTicketRequest](docs/Model/ClaimTicketRequest.md)
- [ContentStatus](docs/Model/ContentStatus.md)
- [CountClaimedComps200Response](docs/Model/CountClaimedComps200Response.md)
- [CreateFile200Response](docs/Model/CreateFile200Response.md)
- [CreateRunOnThreadRequest](docs/Model/CreateRunOnThreadRequest.md)
- [CreateStaticVoucherCampaign](docs/Model/CreateStaticVoucherCampaign.md)
- [CreateStaticVoucherCampaignWithVoucherWithCSV](docs/Model/CreateStaticVoucherCampaignWithVoucherWithCSV.md)
- [DashboardWidget](docs/Model/DashboardWidget.md)
- [Dining](docs/Model/Dining.md)
- [Document](docs/Model/Document.md)
- [DuplicateRowFound](docs/Model/DuplicateRowFound.md)
- [DynamicVoucher](docs/Model/DynamicVoucher.md)
- [DynamicVoucherBroadcast](docs/Model/DynamicVoucherBroadcast.md)
- [DynamicVoucherBroadcastListType](docs/Model/DynamicVoucherBroadcastListType.md)
- [DynamicVoucherTemporalDecreaseFrequencyType](docs/Model/DynamicVoucherTemporalDecreaseFrequencyType.md)
- [EmailSubscriber](docs/Model/EmailSubscriber.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeAPIKey](docs/Model/EmployeeAPIKey.md)
- [EmployeeActivityLog](docs/Model/EmployeeActivityLog.md)
- [EmployeeAlert](docs/Model/EmployeeAlert.md)
- [EmployeeScheduleStartDay](docs/Model/EmployeeScheduleStartDay.md)
- [EmployeeScheduleStartHour](docs/Model/EmployeeScheduleStartHour.md)
- [EmployeeScheduleStartMeridiem](docs/Model/EmployeeScheduleStartMeridiem.md)
- [EmployeeScheduleStartMinute](docs/Model/EmployeeScheduleStartMinute.md)
- [EntityTooLarge](docs/Model/EntityTooLarge.md)
- [ExportDataFile](docs/Model/ExportDataFile.md)
- [FalsumError](docs/Model/FalsumError.md)
- [FalsumField](docs/Model/FalsumField.md)
- [Feature](docs/Model/Feature.md)
- [FetchAdvertisementCreditScansFromListRequest](docs/Model/FetchAdvertisementCreditScansFromListRequest.md)
- [FetchAllCountries200ResponseInner](docs/Model/FetchAllCountries200ResponseInner.md)
- [FetchAllLedgerTransactions200Response](docs/Model/FetchAllLedgerTransactions200Response.md)
- [FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInner](docs/Model/FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInner.md)
- [FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInnerValueType](docs/Model/FetchAllStaticVouchersAssociatedWithCustomerWithVoucherID200ResponseInnerValueType.md)
- [FetchCustomerTicketsWithTokenRequest](docs/Model/FetchCustomerTicketsWithTokenRequest.md)
- [FetchImportedListRecipientsByPage200Response](docs/Model/FetchImportedListRecipientsByPage200Response.md)
- [FetchInboundSMSByPage200Response](docs/Model/FetchInboundSMSByPage200Response.md)
- [FetchIndustry200Response](docs/Model/FetchIndustry200Response.md)
- [FetchMembersCount200Response](docs/Model/FetchMembersCount200Response.md)
- [FetchOptInListSubscribersByPage200Response](docs/Model/FetchOptInListSubscribersByPage200Response.md)
- [FetchOutboundSMSByPage200Response](docs/Model/FetchOutboundSMSByPage200Response.md)
- [FetchPerformanceTicketsPage200Response](docs/Model/FetchPerformanceTicketsPage200Response.md)
- [FetchStaticVouchersPage200Response](docs/Model/FetchStaticVouchersPage200Response.md)
- [ForbiddenRequest](docs/Model/ForbiddenRequest.md)
- [ForeignKeyDoesNotExist](docs/Model/ForeignKeyDoesNotExist.md)
- [Gaming](docs/Model/Gaming.md)
- [HelpDeskRequest](docs/Model/HelpDeskRequest.md)
- [ImageGrid](docs/Model/ImageGrid.md)
- [ImportTicketsRequest](docs/Model/ImportTicketsRequest.md)
- [ImportedList](docs/Model/ImportedList.md)
- [ImportedListRecipient](docs/Model/ImportedListRecipient.md)
- [InboundSMS](docs/Model/InboundSMS.md)
- [InternalServerError500](docs/Model/InternalServerError500.md)
- [JobPosition](docs/Model/JobPosition.md)
- [LedgerEntry](docs/Model/LedgerEntry.md)
- [LedgerEntryParentObjectID](docs/Model/LedgerEntryParentObjectID.md)
- [LedgerEntryTransactionType](docs/Model/LedgerEntryTransactionType.md)
- [LinkBook](docs/Model/LinkBook.md)
- [LinkBookSection](docs/Model/LinkBookSection.md)
- [LoginStatus200Response](docs/Model/LoginStatus200Response.md)
- [LoginStatus200ResponseAnyOf](docs/Model/LoginStatus200ResponseAnyOf.md)
- [Lounge](docs/Model/Lounge.md)
- [MSAnalyticsMemberCountPartitionedByDate](docs/Model/MSAnalyticsMemberCountPartitionedByDate.md)
- [MSAnalyticsMemberPointsRedeemedPartitionedByDate](docs/Model/MSAnalyticsMemberPointsRedeemedPartitionedByDate.md)
- [MSAnalyticsMemberPointsRefundedPartitionedByDate](docs/Model/MSAnalyticsMemberPointsRefundedPartitionedByDate.md)
- [MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate](docs/Model/MSAnalyticsMembershipTierAmountRedeemedPartitionedByDate.md)
- [MSAnalyticsMembershipTierAmountRefundedPartitionedByDate](docs/Model/MSAnalyticsMembershipTierAmountRefundedPartitionedByDate.md)
- [MSMemberHistory](docs/Model/MSMemberHistory.md)
- [MSMemberHistoryPagination](docs/Model/MSMemberHistoryPagination.md)
- [MSMemberRedemption](docs/Model/MSMemberRedemption.md)
- [MSMemberRedemptionPagination](docs/Model/MSMemberRedemptionPagination.md)
- [MSMemberRedemptionRegisterID](docs/Model/MSMemberRedemptionRegisterID.md)
- [MSMemberRedemptionTransactionType](docs/Model/MSMemberRedemptionTransactionType.md)
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
- [MemberSearchSearchKey](docs/Model/MemberSearchSearchKey.md)
- [MemberSearchSortKey](docs/Model/MemberSearchSortKey.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantCreditSearch](docs/Model/MerchantCreditSearch.md)
- [MerchantNotInitialized](docs/Model/MerchantNotInitialized.md)
- [MerchantURL](docs/Model/MerchantURL.md)
- [Message](docs/Model/Message.md)
- [ModuleError](docs/Model/ModuleError.md)
- [NewsArticle](docs/Model/NewsArticle.md)
- [OAIAssistantUpdateParams](docs/Model/OAIAssistantUpdateParams.md)
- [OAIAssistantUpdateParamsCreateParams](docs/Model/OAIAssistantUpdateParamsCreateParams.md)
- [OptInList](docs/Model/OptInList.md)
- [OptInListSource](docs/Model/OptInListSource.md)
- [OptInListSubscriber](docs/Model/OptInListSubscriber.md)
- [OptInListSubscriberOptInSourceID](docs/Model/OptInListSubscriberOptInSourceID.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OutboundSMS](docs/Model/OutboundSMS.md)
- [OutboundSMSPaymentObjectBroadcastID](docs/Model/OutboundSMSPaymentObjectBroadcastID.md)
- [OutboundSMSStatus](docs/Model/OutboundSMSStatus.md)
- [PaginatedWTMembers](docs/Model/PaginatedWTMembers.md)
- [PaginatedWTMerchantCredits](docs/Model/PaginatedWTMerchantCredits.md)
- [PaginationRequestWithIDAndWithoutSortOptions](docs/Model/PaginationRequestWithIDAndWithoutSortOptions.md)
- [PaginationRequestWithSortOptions](docs/Model/PaginationRequestWithSortOptions.md)
- [PaginationRequestWithSortOptionsSortOrder](docs/Model/PaginationRequestWithSortOptionsSortOrder.md)
- [PaymentDesign](docs/Model/PaymentDesign.md)
- [Performance](docs/Model/Performance.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberCapabilities](docs/Model/PhoneNumberCapabilities.md)
- [PickA2PApplicationSubmissionExcludeKeyofA2PApplicationSubmissionStockExchangeOrStockTickerOrBrandContactEmailOrVerificationMobile](docs/Model/PickA2PApplicationSubmissionExcludeKeyofA2PApplicationSubmissionStockExchangeOrStockTickerOrBrandContactEmailOrVerificationMobile.md)
- [PickA2PBaseIntakeExcludeKeyofA2PBaseIntakeBusinessClassificationOrBusinessIndustryOrTaxIDTypeOrTaxIDOrWebsiteURLOrSocialMediaURLOrRegionsOfOperationOrMessagingVolumeHighOrJobTitleOrJobPosition](docs/Model/PickA2PBaseIntakeExcludeKeyofA2PBaseIntakeBusinessClassificationOrBusinessIndustryOrTaxIDTypeOrTaxIDOrWebsiteURLOrSocialMediaURLOrRegionsOfOperationOrMessagingVolumeHighOrJobTitleOrJobPosition.md)
- [PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherIsActive](docs/Model/PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherIsActive.md)
- [PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID](docs/Model/PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID.md)
- [PickMSEmployeeAPIKeyCreateParamsExcludeKeyofMSEmployeeAPIKeyCreateParamsEmployeeID](docs/Model/PickMSEmployeeAPIKeyCreateParamsExcludeKeyofMSEmployeeAPIKeyCreateParamsEmployeeID.md)
- [PickMSEmployeeAPIKeyUpdateParamsExcludeKeyofMSEmployeeAPIKeyUpdateParamsId](docs/Model/PickMSEmployeeAPIKeyUpdateParamsExcludeKeyofMSEmployeeAPIKeyUpdateParamsId.md)
- [PickMSMemberCreationParamsExcludeKeyofMSMemberCreationParamsMemberIdentifier](docs/Model/PickMSMemberCreationParamsExcludeKeyofMSMemberCreationParamsMemberIdentifier.md)
- [PickMSMemberExcludeKeyofMSMemberMemberIdentifier](docs/Model/PickMSMemberExcludeKeyofMSMemberMemberIdentifier.md)
- [PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier](docs/Model/PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier.md)
- [PickMSMerchantCreditExcludeKeyofMSMerchantCreditMemberIdentifier](docs/Model/PickMSMerchantCreditExcludeKeyofMSMerchantCreditMemberIdentifier.md)
- [PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKey](docs/Model/PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKey.md)
- [PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKeySortOrder](docs/Model/PickPaginationRequestWithSortOptionsExcludeKeyofPaginationRequestWithSortOptionsSortKeySortOrder.md)
- [PickPaginationRequestWithoutSortOptionsExcludeKeyofPaginationRequestWithoutSortOptionsIsArchiveIncluded](docs/Model/PickPaginationRequestWithoutSortOptionsExcludeKeyofPaginationRequestWithoutSortOptionsIsArchiveIncluded.md)
- [PickSSImportedListRecipientFromMembershipTierImportExcludeKeyofSSImportedListRecipientFromMembershipTierImportEmployeeIDOrTierID](docs/Model/PickSSImportedListRecipientFromMembershipTierImportExcludeKeyofSSImportedListRecipientFromMembershipTierImportEmployeeIDOrTierID.md)
- [PickSSImportedListUpdateParamsExcludeKeyofSSImportedListUpdateParamsId](docs/Model/PickSSImportedListUpdateParamsExcludeKeyofSSImportedListUpdateParamsId.md)
- [PickSSMobileNumberUpdateParamsExcludeKeyofSSMobileNumberUpdateParamsId](docs/Model/PickSSMobileNumberUpdateParamsExcludeKeyofSSMobileNumberUpdateParamsId.md)
- [PickSSOptInListCreateParamsExcludeKeyofSSOptInListCreateParamsEmployeeIDOrOptInConfirmedMediaURLsOrOptOutConfirmedMediaURLs](docs/Model/PickSSOptInListCreateParamsExcludeKeyofSSOptInListCreateParamsEmployeeIDOrOptInConfirmedMediaURLsOrOptOutConfirmedMediaURLs.md)
- [PickSSOptInListMemberUpdateParamsExcludeKeyofSSOptInListMemberUpdateParamsMerchantCreatedAtOrMaxSMSCount](docs/Model/PickSSOptInListMemberUpdateParamsExcludeKeyofSSOptInListMemberUpdateParamsMerchantCreatedAtOrMaxSMSCount.md)
- [PickSSOptInListMemberUpdateParamsExcludeKeyofSSOptInListMemberUpdateParamsMerchantCreatedAtOrMaxSMSCountOptInSourceID](docs/Model/PickSSOptInListMemberUpdateParamsExcludeKeyofSSOptInListMemberUpdateParamsMerchantCreatedAtOrMaxSMSCountOptInSourceID.md)
- [PickSSOptInListUpdateParamsExcludeKeyofSSOptInListUpdateParamsId](docs/Model/PickSSOptInListUpdateParamsExcludeKeyofSSOptInListUpdateParamsId.md)
- [PickSSOptInSourceUpdateParamsExcludeKeyofSSOptInSourceUpdateParamsId](docs/Model/PickSSOptInSourceUpdateParamsExcludeKeyofSSOptInSourceUpdateParamsId.md)
- [PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhone](docs/Model/PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhone.md)
- [PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhonePaymentObjectBroadcastID](docs/Model/PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhonePaymentObjectBroadcastID.md)
- [PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhoneStatus](docs/Model/PickSSOutboundMessageLogExcludeKeyofSSOutboundMessageLogToCellPhoneStatus.md)
- [PickVSAdvertisementCreditCreateParamsExcludeKeyofVSAdvertisementCreditCreateParamsEmployeeID](docs/Model/PickVSAdvertisementCreditCreateParamsExcludeKeyofVSAdvertisementCreditCreateParamsEmployeeID.md)
- [PickVSAdvertisementCreditScanExcludeKeyofVSAdvertisementCreditScanRedeemedAtOrRefundedAt](docs/Model/PickVSAdvertisementCreditScanExcludeKeyofVSAdvertisementCreditScanRedeemedAtOrRefundedAt.md)
- [PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId](docs/Model/PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId.md)
- [PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDate](docs/Model/PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDate.md)
- [PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDateValueType](docs/Model/PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDateValueType.md)
- [PickVSDynamicVoucherExcludeKeyofVSDynamicVoucherTemporalDecreaseFrequencyType](docs/Model/PickVSDynamicVoucherExcludeKeyofVSDynamicVoucherTemporalDecreaseFrequencyType.md)
- [PickVSPaymentDesignCreateParamsExcludeKeyofVSPaymentDesignCreateParamsEmployeeIDOrAbbreviationOrAcronym](docs/Model/PickVSPaymentDesignCreateParamsExcludeKeyofVSPaymentDesignCreateParamsEmployeeIDOrAbbreviationOrAcronym.md)
- [PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsId](docs/Model/PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsId.md)
- [PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsIdBorderStyleType](docs/Model/PickVSPaymentDesignUpdateParamsExcludeKeyofVSPaymentDesignUpdateParamsIdBorderStyleType.md)
- [PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAt](docs/Model/PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAt.md)
- [PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAtRegisterID](docs/Model/PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAtRegisterID.md)
- [PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAtTransactionType](docs/Model/PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAtTransactionType.md)
- [PickWTEmailSubscriberUpdateParamsExcludeKeyofWTEmailSubscriberUpdateParamsId](docs/Model/PickWTEmailSubscriberUpdateParamsExcludeKeyofWTEmailSubscriberUpdateParamsId.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmail](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmail.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartDay](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartDay.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartHour](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartHour.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartMeridiem](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartMeridiem.md)
- [PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartMinute](docs/Model/PickWTEmployeeCreateExcludeKeyofWTEmployeeCreateEmailScheduleStartMinute.md)
- [PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday](docs/Model/PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday.md)
- [PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber](docs/Model/PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber.md)
- [PickWTMerchantURLUpdateExcludeKeyofWTMerchantURLUpdateUrlID](docs/Model/PickWTMerchantURLUpdateExcludeKeyofWTMerchantURLUpdateUrlID.md)
- [PickWTNewsArticleUpdateParamsExcludeKeyofWTNewsArticleUpdateParamsId](docs/Model/PickWTNewsArticleUpdateParamsExcludeKeyofWTNewsArticleUpdateParamsId.md)
- [PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListID](docs/Model/PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListID.md)
- [PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDBroadcastStatus](docs/Model/PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDBroadcastStatus.md)
- [PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDPaymentObjectPrefix](docs/Model/PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDPaymentObjectPrefix.md)
- [PickWTSmsSubscriberUpdateParamsExcludeKeyofWTSmsSubscriberUpdateParamsId](docs/Model/PickWTSmsSubscriberUpdateParamsExcludeKeyofWTSmsSubscriberUpdateParamsId.md)
- [PickWTStaticVoucherCampaignCreateParamsExcludeKeyofWTStaticVoucherCampaignCreateParamsStartDateTimeOrExpirationDateTime](docs/Model/PickWTStaticVoucherCampaignCreateParamsExcludeKeyofWTStaticVoucherCampaignCreateParamsStartDateTimeOrExpirationDateTime.md)
- [PickWTStaticVoucherCreateParamsExcludeKeyofWTStaticVoucherCreateParamsCampaignID](docs/Model/PickWTStaticVoucherCreateParamsExcludeKeyofWTStaticVoucherCreateParamsCampaignID.md)
- [Plan](docs/Model/Plan.md)
- [PortalPage](docs/Model/PortalPage.md)
- [PresignedPost](docs/Model/PresignedPost.md)
- [PresignedPostFields](docs/Model/PresignedPostFields.md)
- [Product](docs/Model/Product.md)
- [ProductKey](docs/Model/ProductKey.md)
- [ProductTaxBehavior](docs/Model/ProductTaxBehavior.md)
- [ProductUpdateEntry](docs/Model/ProductUpdateEntry.md)
- [ProductUpdateIngestAck](docs/Model/ProductUpdateIngestAck.md)
- [ProductUpdateIngestBody](docs/Model/ProductUpdateIngestBody.md)
- [ProductUpdateType](docs/Model/ProductUpdateType.md)
- [ProfileStatuses](docs/Model/ProfileStatuses.md)
- [PromoCode](docs/Model/PromoCode.md)
- [QRCodeDesign](docs/Model/QRCodeDesign.md)
- [ReachPerformanceStats](docs/Model/ReachPerformanceStats.md)
- [Request](docs/Model/Request.md)
- [Response](docs/Model/Response.md)
- [Role](docs/Model/Role.md)
- [RoleAuditLog](docs/Model/RoleAuditLog.md)
- [RoomRate](docs/Model/RoomRate.md)
- [SSImportedListRecipientCreateParams](docs/Model/SSImportedListRecipientCreateParams.md)
- [SSOptInSource](docs/Model/SSOptInSource.md)
- [SSOutboundStatuses](docs/Model/SSOutboundStatuses.md)
- [SaveMerchantCreditPaymentDesignRequest](docs/Model/SaveMerchantCreditPaymentDesignRequest.md)
- [SaveTicketSettingsRequest](docs/Model/SaveTicketSettingsRequest.md)
- [Service](docs/Model/Service.md)
- [SetDefaultPaymentMethodRequest](docs/Model/SetDefaultPaymentMethodRequest.md)
- [SimpleSMSBroadcast](docs/Model/SimpleSMSBroadcast.md)
- [SmsSubscriber](docs/Model/SmsSubscriber.md)
- [SortDirection](docs/Model/SortDirection.md)
- [StaticVoucher](docs/Model/StaticVoucher.md)
- [StaticVoucherCampaign](docs/Model/StaticVoucherCampaign.md)
- [StaticVoucherCampaignBroadcast](docs/Model/StaticVoucherCampaignBroadcast.md)
- [StaticVoucherCampaignBroadcastBroadcastStatus](docs/Model/StaticVoucherCampaignBroadcastBroadcastStatus.md)
- [StaticVoucherCampaignBroadcastPaymentObjectPrefix](docs/Model/StaticVoucherCampaignBroadcastPaymentObjectPrefix.md)
- [StaticVoucherCampaignUpdate](docs/Model/StaticVoucherCampaignUpdate.md)
- [StaticVoucherCampaignValueType](docs/Model/StaticVoucherCampaignValueType.md)
- [StaticVoucherId](docs/Model/StaticVoucherId.md)
- [Status](docs/Model/Status.md)
- [SubscriptionFeature](docs/Model/SubscriptionFeature.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [SubscriptionPlanAnnual](docs/Model/SubscriptionPlanAnnual.md)
- [SubscriptionProduct](docs/Model/SubscriptionProduct.md)
- [Tcpa](docs/Model/Tcpa.md)
- [Thread](docs/Model/Thread.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketSortKeys](docs/Model/TicketSortKeys.md)
- [TrustBundleStatuses](docs/Model/TrustBundleStatuses.md)
- [UpdateEmailNotificationPreferenceRequest](docs/Model/UpdateEmailNotificationPreferenceRequest.md)
- [UpdateStaticVoucherCampaignWithVoucher](docs/Model/UpdateStaticVoucherCampaignWithVoucher.md)
- [VSCampaignGeneratedMessage](docs/Model/VSCampaignGeneratedMessage.md)
- [VSCampaignGeneratedMessagePagination](docs/Model/VSCampaignGeneratedMessagePagination.md)
- [VSDynamicVoucherStatus](docs/Model/VSDynamicVoucherStatus.md)
- [VectorStore](docs/Model/VectorStore.md)
- [Video](docs/Model/Video.md)
- [VideoProvider](docs/Model/VideoProvider.md)
- [VirtualBusinessCard](docs/Model/VirtualBusinessCard.md)
- [WTA2PApplicationUpdateParams](docs/Model/WTA2PApplicationUpdateParams.md)
- [WTAdvertisementCredit](docs/Model/WTAdvertisementCredit.md)
- [WTAdvertisementCreditCreateParams](docs/Model/WTAdvertisementCreditCreateParams.md)
- [WTAdvertisementCreditScan](docs/Model/WTAdvertisementCreditScan.md)
- [WTAdvertisementCreditUpdateParams](docs/Model/WTAdvertisementCreditUpdateParams.md)
- [WTAmenityCreateParams](docs/Model/WTAmenityCreateParams.md)
- [WTAmenityUpdateParams](docs/Model/WTAmenityUpdateParams.md)
- [WTAndroidKeystoreResponse](docs/Model/WTAndroidKeystoreResponse.md)
- [WTAuthenticationCheckSessionTokenStatusResponse](docs/Model/WTAuthenticationCheckSessionTokenStatusResponse.md)
- [WTAuthenticationForgotPassword](docs/Model/WTAuthenticationForgotPassword.md)
- [WTAuthenticationLoginRequest](docs/Model/WTAuthenticationLoginRequest.md)
- [WTAuthenticationLoginResponse](docs/Model/WTAuthenticationLoginResponse.md)
- [WTAuthenticationRegister](docs/Model/WTAuthenticationRegister.md)
- [WTAuthenticationRequestResetPassword](docs/Model/WTAuthenticationRequestResetPassword.md)
- [WTAuthenticationResetPassword](docs/Model/WTAuthenticationResetPassword.md)
- [WTAuthenticationSSOLoginForDiscourse](docs/Model/WTAuthenticationSSOLoginForDiscourse.md)
- [WTBillingChangePlan](docs/Model/WTBillingChangePlan.md)
- [WTBillingChangePlanBillingCadence](docs/Model/WTBillingChangePlanBillingCadence.md)
- [WTBillingSavePaymentMethod](docs/Model/WTBillingSavePaymentMethod.md)
- [WTBillingVerifyPaymentMethodResponse](docs/Model/WTBillingVerifyPaymentMethodResponse.md)
- [WTBillingVerifyPaymentMethodResponseBillingCadence](docs/Model/WTBillingVerifyPaymentMethodResponseBillingCadence.md)
- [WTCertificateDealCreateRequest](docs/Model/WTCertificateDealCreateRequest.md)
- [WTCertificateDealCreateRequestEntitlementType](docs/Model/WTCertificateDealCreateRequestEntitlementType.md)
- [WTCertificateEntitlementSnapshot](docs/Model/WTCertificateEntitlementSnapshot.md)
- [WTCertificatePurchaseRequest](docs/Model/WTCertificatePurchaseRequest.md)
- [WTConnectAccountStatus](docs/Model/WTConnectAccountStatus.md)
- [WTConnectMoney](docs/Model/WTConnectMoney.md)
- [WTConnectOnboardingLinkRequest](docs/Model/WTConnectOnboardingLinkRequest.md)
- [WTConnectOnboardingLinkResponse](docs/Model/WTConnectOnboardingLinkResponse.md)
- [WTConnectOnboardingStatus](docs/Model/WTConnectOnboardingStatus.md)
- [WTConnectPaymentsSummary](docs/Model/WTConnectPaymentsSummary.md)
- [WTConnectPaymentsSummaryBalance](docs/Model/WTConnectPaymentsSummaryBalance.md)
- [WTConnectRequirements](docs/Model/WTConnectRequirements.md)
- [WTCountResult](docs/Model/WTCountResult.md)
- [WTCustomerSearchByMemberID](docs/Model/WTCustomerSearchByMemberID.md)
- [WTCustomerSearchByPhoneNumber](docs/Model/WTCustomerSearchByPhoneNumber.md)
- [WTDiningCreateParams](docs/Model/WTDiningCreateParams.md)
- [WTDiningUpdateParams](docs/Model/WTDiningUpdateParams.md)
- [WTDynamicVoucher](docs/Model/WTDynamicVoucher.md)
- [WTDynamicVoucherCreateParams](docs/Model/WTDynamicVoucherCreateParams.md)
- [WTDynamicVoucherRedemption](docs/Model/WTDynamicVoucherRedemption.md)
- [WTDynamicVoucherRedemptionTransactionType](docs/Model/WTDynamicVoucherRedemptionTransactionType.md)
- [WTDynamicVoucherSummary](docs/Model/WTDynamicVoucherSummary.md)
- [WTDynamicVoucherSummaryStatus](docs/Model/WTDynamicVoucherSummaryStatus.md)
- [WTDynamicVoucherUpdateParams](docs/Model/WTDynamicVoucherUpdateParams.md)
- [WTEmailSubscriberCreateParams](docs/Model/WTEmailSubscriberCreateParams.md)
- [WTEmailSubscriberCreateParamsWalletUI](docs/Model/WTEmailSubscriberCreateParamsWalletUI.md)
- [WTEmailSubscriberUpdateParams](docs/Model/WTEmailSubscriberUpdateParams.md)
- [WTEmployee](docs/Model/WTEmployee.md)
- [WTEmployeeAPIKey](docs/Model/WTEmployeeAPIKey.md)
- [WTEmployeeAPIKeyCreateParams](docs/Model/WTEmployeeAPIKeyCreateParams.md)
- [WTEmployeeAPIKeyUpdateParams](docs/Model/WTEmployeeAPIKeyUpdateParams.md)
- [WTEmployeeCreate](docs/Model/WTEmployeeCreate.md)
- [WTEmployeeCreateDocument](docs/Model/WTEmployeeCreateDocument.md)
- [WTEmployeeCreateMediaFile](docs/Model/WTEmployeeCreateMediaFile.md)
- [WTEmployeeFileCreate](docs/Model/WTEmployeeFileCreate.md)
- [WTEmployeeImportRecords](docs/Model/WTEmployeeImportRecords.md)
- [WTEmployeeNotification](docs/Model/WTEmployeeNotification.md)
- [WTEmployeeNotificationType](docs/Model/WTEmployeeNotificationType.md)
- [WTEmployeePeerRoles](docs/Model/WTEmployeePeerRoles.md)
- [WTEmployeeS3FilePresign](docs/Model/WTEmployeeS3FilePresign.md)
- [WTEmployeeS3FilePresignContext](docs/Model/WTEmployeeS3FilePresignContext.md)
- [WTEmployeeScheduleSMSCampaignBroadcast](docs/Model/WTEmployeeScheduleSMSCampaignBroadcast.md)
- [WTEmployeeScheduleSimpleSMS](docs/Model/WTEmployeeScheduleSimpleSMS.md)
- [WTEmployeeScheduleSimpleSMSListType](docs/Model/WTEmployeeScheduleSimpleSMSListType.md)
- [WTEmployeeScheduleSimpleSMSToRecipient](docs/Model/WTEmployeeScheduleSimpleSMSToRecipient.md)
- [WTEmployeeSendHelpDeskResponse](docs/Model/WTEmployeeSendHelpDeskResponse.md)
- [WTEmployeeUpdate](docs/Model/WTEmployeeUpdate.md)
- [WTEmployeeUpdateRecords](docs/Model/WTEmployeeUpdateRecords.md)
- [WTFetchWalletPaymentObjectsWithToken](docs/Model/WTFetchWalletPaymentObjectsWithToken.md)
- [WTFinancingSoftPullRequest](docs/Model/WTFinancingSoftPullRequest.md)
- [WTFinancingSoftPullResponse](docs/Model/WTFinancingSoftPullResponse.md)
- [WTGamingCreateParams](docs/Model/WTGamingCreateParams.md)
- [WTGamingUpdateParams](docs/Model/WTGamingUpdateParams.md)
- [WTGiftCardPurchaseRequest](docs/Model/WTGiftCardPurchaseRequest.md)
- [WTGiftClaimRequest](docs/Model/WTGiftClaimRequest.md)
- [WTImageGridCreateParams](docs/Model/WTImageGridCreateParams.md)
- [WTImageGridUpdateParams](docs/Model/WTImageGridUpdateParams.md)
- [WTImportConsentBasis](docs/Model/WTImportConsentBasis.md)
- [WTImportedList](docs/Model/WTImportedList.md)
- [WTImportedListRecipientFromMembershipTierImport](docs/Model/WTImportedListRecipientFromMembershipTierImport.md)
- [WTImportedListRecipientFromMembershipTierImportTierID](docs/Model/WTImportedListRecipientFromMembershipTierImportTierID.md)
- [WTImportedListRecipientImport](docs/Model/WTImportedListRecipientImport.md)
- [WTInfoGenesisLookupRequestErrors](docs/Model/WTInfoGenesisLookupRequestErrors.md)
- [WTInfoGenesisRecordFilterParameters](docs/Model/WTInfoGenesisRecordFilterParameters.md)
- [WTInfoGenesisRoutingIDs](docs/Model/WTInfoGenesisRoutingIDs.md)
- [WTInfoGenesisUniquePostingIDs](docs/Model/WTInfoGenesisUniquePostingIDs.md)
- [WTLeadFiConsumerProfile](docs/Model/WTLeadFiConsumerProfile.md)
- [WTLeadFiConsumerProfileAddress](docs/Model/WTLeadFiConsumerProfileAddress.md)
- [WTLeadFiConsumerProfileAssets](docs/Model/WTLeadFiConsumerProfileAssets.md)
- [WTLeadFiConsumerProfileIncome](docs/Model/WTLeadFiConsumerProfileIncome.md)
- [WTLeadFiCreditOffer](docs/Model/WTLeadFiCreditOffer.md)
- [WTLeadFiInquiryResult](docs/Model/WTLeadFiInquiryResult.md)
- [WTLocalInstance](docs/Model/WTLocalInstance.md)
- [WTLoungeCreateParams](docs/Model/WTLoungeCreateParams.md)
- [WTLoungeUpdateParams](docs/Model/WTLoungeUpdateParams.md)
- [WTMember](docs/Model/WTMember.md)
- [WTMemberCreationParams](docs/Model/WTMemberCreationParams.md)
- [WTMembershipTier](docs/Model/WTMembershipTier.md)
- [WTMembershipTierCreationParams](docs/Model/WTMembershipTierCreationParams.md)
- [WTMembershipTierId](docs/Model/WTMembershipTierId.md)
- [WTMembershipTierUpdateParams](docs/Model/WTMembershipTierUpdateParams.md)
- [WTMembershipTierWithMemberCount](docs/Model/WTMembershipTierWithMemberCount.md)
- [WTMerchantCredit](docs/Model/WTMerchantCredit.md)
- [WTMerchantCreditCreationParams](docs/Model/WTMerchantCreditCreationParams.md)
- [WTMerchantURLCreate](docs/Model/WTMerchantURLCreate.md)
- [WTMerchantURLUpdate](docs/Model/WTMerchantURLUpdate.md)
- [WTMerchantUpdate](docs/Model/WTMerchantUpdate.md)
- [WTMerchantUpdatePOSIntegration](docs/Model/WTMerchantUpdatePOSIntegration.md)
- [WTMerchantUpdatePointsOfContact](docs/Model/WTMerchantUpdatePointsOfContact.md)
- [WTMessageInstance](docs/Model/WTMessageInstance.md)
- [WTMessageType](docs/Model/WTMessageType.md)
- [WTNewsArticleCreateParams](docs/Model/WTNewsArticleCreateParams.md)
- [WTNewsArticleUpdateParams](docs/Model/WTNewsArticleUpdateParams.md)
- [WTOptInList](docs/Model/WTOptInList.md)
- [WTOptInListCreationParams](docs/Model/WTOptInListCreationParams.md)
- [WTOrder](docs/Model/WTOrder.md)
- [WTOrderLineItem](docs/Model/WTOrderLineItem.md)
- [WTPassBrandKit](docs/Model/WTPassBrandKit.md)
- [WTPaymentDesign](docs/Model/WTPaymentDesign.md)
- [WTPaymentDesignCreateParams](docs/Model/WTPaymentDesignCreateParams.md)
- [WTPaymentDesignUpdateParams](docs/Model/WTPaymentDesignUpdateParams.md)
- [WTPerformanceCreateParams](docs/Model/WTPerformanceCreateParams.md)
- [WTPerformanceUpdateParams](docs/Model/WTPerformanceUpdateParams.md)
- [WTPosMachine](docs/Model/WTPosMachine.md)
- [WTPosMachineCreateParams](docs/Model/WTPosMachineCreateParams.md)
- [WTPosMachineUpdateParams](docs/Model/WTPosMachineUpdateParams.md)
- [WTProductCreateParams](docs/Model/WTProductCreateParams.md)
- [WTProductUpdateParams](docs/Model/WTProductUpdateParams.md)
- [WTPromoCodeCreateParams](docs/Model/WTPromoCodeCreateParams.md)
- [WTPromoCodeUpdateParams](docs/Model/WTPromoCodeUpdateParams.md)
- [WTQRCodeDesign](docs/Model/WTQRCodeDesign.md)
- [WTQRCodeDesignCreateParams](docs/Model/WTQRCodeDesignCreateParams.md)
- [WTQRCodeDesignUpdateParams](docs/Model/WTQRCodeDesignUpdateParams.md)
- [WTQuickLink](docs/Model/WTQuickLink.md)
- [WTQuickLinkCreateParams](docs/Model/WTQuickLinkCreateParams.md)
- [WTQuickLinkLinkBookSectionID](docs/Model/WTQuickLinkLinkBookSectionID.md)
- [WTQuickLinkSectionCreateParams](docs/Model/WTQuickLinkSectionCreateParams.md)
- [WTQuickLinkSectionUpdateParams](docs/Model/WTQuickLinkSectionUpdateParams.md)
- [WTQuickLinkUpdateParams](docs/Model/WTQuickLinkUpdateParams.md)
- [WTRole](docs/Model/WTRole.md)
- [WTRoomRateCreateParams](docs/Model/WTRoomRateCreateParams.md)
- [WTRoomRateUpdateParams](docs/Model/WTRoomRateUpdateParams.md)
- [WTSMSAcquirePhoneNumber](docs/Model/WTSMSAcquirePhoneNumber.md)
- [WTSMSImportOptInListSubscribers](docs/Model/WTSMSImportOptInListSubscribers.md)
- [WTSMSImportedListCreate](docs/Model/WTSMSImportedListCreate.md)
- [WTSMSOptInListSourceCreate](docs/Model/WTSMSOptInListSourceCreate.md)
- [WTSMSUpdatePhoneNumberConfig](docs/Model/WTSMSUpdatePhoneNumberConfig.md)
- [WTSegmentAdvisory](docs/Model/WTSegmentAdvisory.md)
- [WTSegmentAdvisoryRecommend](docs/Model/WTSegmentAdvisoryRecommend.md)
- [WTSegmentEstimate](docs/Model/WTSegmentEstimate.md)
- [WTSegmentEstimateEncoding](docs/Model/WTSegmentEstimateEncoding.md)
- [WTSegmentEstimateRequest](docs/Model/WTSegmentEstimateRequest.md)
- [WTServiceCreateParams](docs/Model/WTServiceCreateParams.md)
- [WTServiceUpdateParams](docs/Model/WTServiceUpdateParams.md)
- [WTSettingsSetPassword](docs/Model/WTSettingsSetPassword.md)
- [WTSmsSubscriberCreateParams](docs/Model/WTSmsSubscriberCreateParams.md)
- [WTSmsSubscriberCreateParamsWalletUI](docs/Model/WTSmsSubscriberCreateParamsWalletUI.md)
- [WTSmsSubscriberUpdateParams](docs/Model/WTSmsSubscriberUpdateParams.md)
- [WTStaticVoucher](docs/Model/WTStaticVoucher.md)
- [WTStaticVoucherCampaign](docs/Model/WTStaticVoucherCampaign.md)
- [WTStaticVoucherCampaignPreviewMessagesByPage](docs/Model/WTStaticVoucherCampaignPreviewMessagesByPage.md)
- [WTStaticVoucherCreateParams](docs/Model/WTStaticVoucherCreateParams.md)
- [WTStaticVoucherUpdateParams](docs/Model/WTStaticVoucherUpdateParams.md)
- [WTSystemApprovePhoneNumber](docs/Model/WTSystemApprovePhoneNumber.md)
- [WTSystemRoleCreate](docs/Model/WTSystemRoleCreate.md)
- [WTTCPAOpt](docs/Model/WTTCPAOpt.md)
- [WTTCPAOptListID](docs/Model/WTTCPAOptListID.md)
- [WTTCPAOptSourceID](docs/Model/WTTCPAOptSourceID.md)
- [WTTicket](docs/Model/WTTicket.md)
- [WTTicketCreateParams](docs/Model/WTTicketCreateParams.md)
- [WTTicketReachStats](docs/Model/WTTicketReachStats.md)
- [WTTicketUpdateParams](docs/Model/WTTicketUpdateParams.md)
- [WTTwilioRequestAuthyCode](docs/Model/WTTwilioRequestAuthyCode.md)
- [WTTwilioVerifyAuthyCode](docs/Model/WTTwilioVerifyAuthyCode.md)
- [WTTwilioVerifyAuthyCodeResponse](docs/Model/WTTwilioVerifyAuthyCodeResponse.md)
- [WTVideoCreateParams](docs/Model/WTVideoCreateParams.md)
- [WTVideoPlaybackSource](docs/Model/WTVideoPlaybackSource.md)
- [WTVideoPlaybackSourceType](docs/Model/WTVideoPlaybackSourceType.md)
- [WTVideoUpdateParams](docs/Model/WTVideoUpdateParams.md)
- [WTVideoUploadProvision](docs/Model/WTVideoUploadProvision.md)
- [WTVideoUploadProvisionParams](docs/Model/WTVideoUploadProvisionParams.md)
- [WTVideoUploadProvisionProvider](docs/Model/WTVideoUploadProvisionProvider.md)
- [WTVirtualBusinessCardCreateParams](docs/Model/WTVirtualBusinessCardCreateParams.md)
- [WTVirtualBusinessCardUpdateParams](docs/Model/WTVirtualBusinessCardUpdateParams.md)
- [WTWalletConfigurationSaveWalletRecord](docs/Model/WTWalletConfigurationSaveWalletRecord.md)
- [WTWalletConfigurationSaveWalletRecordPassBrandKit](docs/Model/WTWalletConfigurationSaveWalletRecordPassBrandKit.md)
- [WTWalletConfigurationSaveWalletRecordSmsOptInSourceID](docs/Model/WTWalletConfigurationSaveWalletRecordSmsOptInSourceID.md)
- [WTWalletItemRedemption](docs/Model/WTWalletItemRedemption.md)
- [WTWalletObjectPrefixCounts](docs/Model/WTWalletObjectPrefixCounts.md)
- [WTWalletPageView](docs/Model/WTWalletPageView.md)
- [WTWalletPageViewCount](docs/Model/WTWalletPageViewCount.md)
- [WTWalletPageViewGeoPoint](docs/Model/WTWalletPageViewGeoPoint.md)
- [WTWhatsAppInboundWebhook](docs/Model/WTWhatsAppInboundWebhook.md)
- [WTWhatsAppStatusCallback](docs/Model/WTWhatsAppStatusCallback.md)
- [WalletConfiguration](docs/Model/WalletConfiguration.md)
- [WalletPageView](docs/Model/WalletPageView.md)
- [Webpage](docs/Model/Webpage.md)

## Authorization

Authentication schemes defined for the API:
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

- API version: `2.20.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`


## License

Copyright 2026 Wallet Inc.

This SDK is licensed under the Apache License, Version 2.0. See the `LICENSE` and
`NOTICE` files for the full text. You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0.

This SDK is auto-generated from the Wallet OpenAPI specification. Please file
issues rather than submitting code pull requests: the generated sources are
overwritten on each API release, so code PRs cannot be merged.

Your use of the Wallet platform and API is governed by the Wallet Terms of
Service, not by this license. The Apache-2.0 license covers this SDK's code only;
it does not grant any right to use the Wallet platform or service.

"Wallet", the Wallet logo, and "WALLET-IN-BIO" are trademarks of Wallet Inc.
The Apache-2.0 license grants rights to the code, not to the Wallet names, logos,
or trademarks (see Section 6 of the License).
