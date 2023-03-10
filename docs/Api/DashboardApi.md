# OpenAPI\Client\DashboardApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchDashboardActiveStaticVoucherCampaignsCount()**](DashboardApi.md#fetchDashboardActiveStaticVoucherCampaignsCount) | **GET** /v2/dashboard/count/staticVoucherCampaigns/active | Count active static voucher campaigns
[**fetchDashboardActiveStaticVouchersCount()**](DashboardApi.md#fetchDashboardActiveStaticVouchersCount) | **GET** /v2/dashboard/count/staticVouchers/active | Count active static vouchers
[**fetchDashboardAppleWalletSubscribersCount()**](DashboardApi.md#fetchDashboardAppleWalletSubscribersCount) | **GET** /v2/dashboard/count/appleWallet/subscribers | Count Apple Wallet Subscribers
[**fetchDashboardEmployeesCount()**](DashboardApi.md#fetchDashboardEmployeesCount) | **GET** /v2/dashboard/count/employees | Count employees
[**fetchDashboardMembersCount()**](DashboardApi.md#fetchDashboardMembersCount) | **GET** /v2/dashboard/count/members | Count members
[**fetchDashboardMembershipTiersCount()**](DashboardApi.md#fetchDashboardMembershipTiersCount) | **GET** /v2/dashboard/count/membershipTiers | Count tiers
[**fetchDashboardNewsArticlesCount()**](DashboardApi.md#fetchDashboardNewsArticlesCount) | **GET** /v2/dashboard/count/newsArticles | Count News Articles
[**fetchDashboardOptInListsCount()**](DashboardApi.md#fetchDashboardOptInListsCount) | **GET** /v2/dashboard/count/optInLists | Count opt in lists
[**fetchDashboardOptInSourcesCount()**](DashboardApi.md#fetchDashboardOptInSourcesCount) | **GET** /v2/dashboard/count/optInSources | Count opt in sources
[**fetchDashboardOutboundSMSCount()**](DashboardApi.md#fetchDashboardOutboundSMSCount) | **GET** /v2/dashboard/count/sms/outbound | Count Outbound SMS
[**fetchDashboardPOSMachinesCount()**](DashboardApi.md#fetchDashboardPOSMachinesCount) | **GET** /v2/dashboard/count/pos/machines | Count POS Machines
[**fetchDashboardPOSTransactionsCount()**](DashboardApi.md#fetchDashboardPOSTransactionsCount) | **GET** /v2/dashboard/count/pos/transactions | Count POS Transactions
[**fetchDashboardPerformancesCount()**](DashboardApi.md#fetchDashboardPerformancesCount) | **GET** /v2/dashboard/count/performances | Count Performances
[**fetchDashboardPhoneNumbersCount()**](DashboardApi.md#fetchDashboardPhoneNumbersCount) | **GET** /v2/dashboard/count/phoneNumbers | Count phone numbers
[**fetchDashboardRedemptionsCount()**](DashboardApi.md#fetchDashboardRedemptionsCount) | **GET** /v2/dashboard/count/pos/redemptions | Count POS redemptions
[**fetchDashboardRefundsCount()**](DashboardApi.md#fetchDashboardRefundsCount) | **GET** /v2/dashboard/count/pos/refunds | Count POS refunds
[**fetchDashboardWalletPageViewsCount()**](DashboardApi.md#fetchDashboardWalletPageViewsCount) | **GET** /v2/dashboard/count/wallet/pageViews | Count Wallet page views
[**fetchDashboardWidgetsCatalog()**](DashboardApi.md#fetchDashboardWidgetsCatalog) | **GET** /v2/dashboard/widgets | Fetch widgets catalog


## `fetchDashboardActiveStaticVoucherCampaignsCount()`

```php
fetchDashboardActiveStaticVoucherCampaignsCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count active static voucher campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardActiveStaticVoucherCampaignsCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardActiveStaticVoucherCampaignsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardActiveStaticVouchersCount()`

```php
fetchDashboardActiveStaticVouchersCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count active static vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardActiveStaticVouchersCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardActiveStaticVouchersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardAppleWalletSubscribersCount()`

```php
fetchDashboardAppleWalletSubscribersCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count Apple Wallet Subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardAppleWalletSubscribersCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardAppleWalletSubscribersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardEmployeesCount()`

```php
fetchDashboardEmployeesCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardEmployeesCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardEmployeesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardMembersCount()`

```php
fetchDashboardMembersCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardMembersCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardMembersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardMembershipTiersCount()`

```php
fetchDashboardMembershipTiersCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardMembershipTiersCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardMembershipTiersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardNewsArticlesCount()`

```php
fetchDashboardNewsArticlesCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count News Articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardNewsArticlesCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardNewsArticlesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardOptInListsCount()`

```php
fetchDashboardOptInListsCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardOptInListsCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardOptInListsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardOptInSourcesCount()`

```php
fetchDashboardOptInSourcesCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count opt in sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardOptInSourcesCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardOptInSourcesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardOutboundSMSCount()`

```php
fetchDashboardOutboundSMSCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count Outbound SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardOutboundSMSCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardOutboundSMSCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardPOSMachinesCount()`

```php
fetchDashboardPOSMachinesCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count POS Machines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardPOSMachinesCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardPOSMachinesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardPOSTransactionsCount()`

```php
fetchDashboardPOSTransactionsCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count POS Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardPOSTransactionsCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardPOSTransactionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardPerformancesCount()`

```php
fetchDashboardPerformancesCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count Performances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardPerformancesCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardPerformancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardPhoneNumbersCount()`

```php
fetchDashboardPhoneNumbersCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count phone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardPhoneNumbersCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardPhoneNumbersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardRedemptionsCount()`

```php
fetchDashboardRedemptionsCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count POS redemptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardRedemptionsCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardRedemptionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardRefundsCount()`

```php
fetchDashboardRefundsCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count POS refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchDashboardRefundsCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardRefundsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |

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

## `fetchDashboardWalletPageViewsCount()`

```php
fetchDashboardWalletPageViewsCount($start_date_time, $end_date_time, $wallet_object_prefix): \OpenAPI\Client\Model\WTCountResult
```

Count Wallet page views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$wallet_object_prefix = 'wallet_object_prefix_example'; // string

try {
    $result = $apiInstance->fetchDashboardWalletPageViewsCount($start_date_time, $end_date_time, $wallet_object_prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardWalletPageViewsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **\DateTime**|  |
 **end_date_time** | **\DateTime**|  |
 **wallet_object_prefix** | **string**|  | [optional]

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

## `fetchDashboardWidgetsCatalog()`

```php
fetchDashboardWidgetsCatalog(): \OpenAPI\Client\Model\DashboardWidget[]
```

Fetch widgets catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchDashboardWidgetsCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->fetchDashboardWidgetsCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DashboardWidget[]**](../Model/DashboardWidget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
