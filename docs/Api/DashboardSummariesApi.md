# OpenAPI\Client\DashboardSummariesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countTotalWalletSessions()**](DashboardSummariesApi.md#countTotalWalletSessions) | **GET** /v2/dashboard/count/visitors | Count new sessions |
| [**fetchDashboardActiveStaticVouchersCount()**](DashboardSummariesApi.md#fetchDashboardActiveStaticVouchersCount) | **GET** /v2/dashboard/count/staticVouchers/active | Count active static vouchers |
| [**fetchDashboardAppleWalletSubscribersCount()**](DashboardSummariesApi.md#fetchDashboardAppleWalletSubscribersCount) | **GET** /v2/dashboard/count/appleWallet/subscribers | Count Apple Wallet Subscribers |
| [**fetchDashboardEmployeesCount()**](DashboardSummariesApi.md#fetchDashboardEmployeesCount) | **GET** /v2/dashboard/count/employees | Count employees |
| [**fetchDashboardMembersCount()**](DashboardSummariesApi.md#fetchDashboardMembersCount) | **GET** /v2/dashboard/count/members | Count members |
| [**fetchDashboardMembershipTiersCount()**](DashboardSummariesApi.md#fetchDashboardMembershipTiersCount) | **GET** /v2/dashboard/count/membershipTiers | Count tiers |
| [**fetchDashboardNewsArticlesCount()**](DashboardSummariesApi.md#fetchDashboardNewsArticlesCount) | **GET** /v2/dashboard/count/newsArticles | Count News Articles |
| [**fetchDashboardOptInListsCount()**](DashboardSummariesApi.md#fetchDashboardOptInListsCount) | **GET** /v2/dashboard/count/optInLists | Count opt in lists |
| [**fetchDashboardOptInSourcesCount()**](DashboardSummariesApi.md#fetchDashboardOptInSourcesCount) | **GET** /v2/dashboard/count/optInSources | Count opt in sources |
| [**fetchDashboardOutboundSMSCount()**](DashboardSummariesApi.md#fetchDashboardOutboundSMSCount) | **GET** /v2/dashboard/count/sms/outbound | Count Outbound SMS |
| [**fetchDashboardPOSMachinesCount()**](DashboardSummariesApi.md#fetchDashboardPOSMachinesCount) | **GET** /v2/dashboard/count/pos/machines | Count POS Machines |
| [**fetchDashboardPOSTransactionsCount()**](DashboardSummariesApi.md#fetchDashboardPOSTransactionsCount) | **GET** /v2/dashboard/count/pos/transactions | Count POS Transactions |
| [**fetchDashboardPerformancesCount()**](DashboardSummariesApi.md#fetchDashboardPerformancesCount) | **GET** /v2/dashboard/count/performances | Count Performances |
| [**fetchDashboardPhoneNumbersCount()**](DashboardSummariesApi.md#fetchDashboardPhoneNumbersCount) | **GET** /v2/dashboard/count/phoneNumbers | Count phone numbers |
| [**fetchDashboardRedemptionsCount()**](DashboardSummariesApi.md#fetchDashboardRedemptionsCount) | **GET** /v2/dashboard/count/pos/redemptions | Count POS redemptions |
| [**fetchDashboardRefundsCount()**](DashboardSummariesApi.md#fetchDashboardRefundsCount) | **GET** /v2/dashboard/count/pos/refunds | Count POS refunds |
| [**fetchDashboardWalletPageViewsCount()**](DashboardSummariesApi.md#fetchDashboardWalletPageViewsCount) | **GET** /v2/dashboard/count/wallet/pageViews | Count Wallet page views |
| [**fetchSubscriberCount()**](DashboardSummariesApi.md#fetchSubscriberCount) | **GET** /v2/dashboard/count/subscribers | Count Performances |


## `countTotalWalletSessions()`

```php
countTotalWalletSessions($start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count new sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countTotalWalletSessions($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardSummariesApi->countTotalWalletSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardActiveStaticVouchersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardAppleWalletSubscribersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardEmployeesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardMembersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardMembershipTiersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardNewsArticlesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardOptInListsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardOptInSourcesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardOutboundSMSCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardPOSMachinesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardPOSTransactionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardPerformancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardPhoneNumbersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardRedemptionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardRefundsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
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
    echo 'Exception when calling DashboardSummariesApi->fetchDashboardWalletPageViewsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |
| **wallet_object_prefix** | **string**|  | [optional] |

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

## `fetchSubscriberCount()`

```php
fetchSubscriberCount($start_date_time, $end_date_time): \OpenAPI\Client\Model\WTCountResult
```

Count Performances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchSubscriberCount($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardSummariesApi->fetchSubscriberCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

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
