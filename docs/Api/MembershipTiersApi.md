# OpenAPI\Client\MembershipTiersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMembershipTier()**](MembershipTiersApi.md#archiveMembershipTier) | **DELETE** /v2/membership/tier/{id} | Archive Membership Tier |
| [**createMembershipTier()**](MembershipTiersApi.md#createMembershipTier) | **POST** /v2/membership/tier | Create Membership Tier |
| [**fetchAllMembershipTiers()**](MembershipTiersApi.md#fetchAllMembershipTiers) | **GET** /v2/membership/tier/all | Get all Membership Tiers |
| [**fetchAllMembershipTiersWithMemberCount()**](MembershipTiersApi.md#fetchAllMembershipTiersWithMemberCount) | **GET** /v2/membership/tier/allWithMemberCount | Get all Membership Tiers with member count |
| [**fetchMembershipTierById()**](MembershipTiersApi.md#fetchMembershipTierById) | **GET** /v2/membership/tier/{id} | Get Membership Tier |
| [**fetchMembershipTierHistoryLog()**](MembershipTiersApi.md#fetchMembershipTierHistoryLog) | **POST** /v2/membership/tier/history/log | Get Membership Tier history |
| [**fetchMembershipTierRedemptionLog()**](MembershipTiersApi.md#fetchMembershipTierRedemptionLog) | **POST** /v2/membership/tier/redemption/log | Get Membership Tier redemption log |
| [**restoreMembershipTier()**](MembershipTiersApi.md#restoreMembershipTier) | **PATCH** /v2/membership/tier/{id} | Restore Membership Tier |
| [**updateMembershipTier()**](MembershipTiersApi.md#updateMembershipTier) | **PUT** /v2/membership/tier/{id} | Update Membership Tier |


## `archiveMembershipTier()`

```php
archiveMembershipTier($id): \OpenAPI\Client\Model\WTMembershipTier
```

Archive Membership Tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMembershipTier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->archiveMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMembershipTier()`

```php
createMembershipTier($wt_membership_tier_creation_params): \OpenAPI\Client\Model\WTMembershipTier
```

Create Membership Tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_membership_tier_creation_params = new \OpenAPI\Client\Model\WTMembershipTierCreationParams(); // \OpenAPI\Client\Model\WTMembershipTierCreationParams

try {
    $result = $apiInstance->createMembershipTier($wt_membership_tier_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->createMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_membership_tier_creation_params** | [**\OpenAPI\Client\Model\WTMembershipTierCreationParams**](../Model/WTMembershipTierCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllMembershipTiers()`

```php
fetchAllMembershipTiers($is_archive_included): \OpenAPI\Client\Model\WTMembershipTier[]
```

Get all Membership Tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllMembershipTiers($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->fetchAllMembershipTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier[]**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllMembershipTiersWithMemberCount()`

```php
fetchAllMembershipTiersWithMemberCount($is_archive_included): \OpenAPI\Client\Model\WTMembershipTierWithMemberCount[]
```

Get all Membership Tiers with member count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllMembershipTiersWithMemberCount($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->fetchAllMembershipTiersWithMemberCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTierWithMemberCount[]**](../Model/WTMembershipTierWithMemberCount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMembershipTierById()`

```php
fetchMembershipTierById($id): \OpenAPI\Client\Model\WTMembershipTier
```

Get Membership Tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMembershipTierById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->fetchMembershipTierById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMembershipTierHistoryLog()`

```php
fetchMembershipTierHistoryLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMembershipTierHistoryPagination
```

Get Membership Tier history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMembershipTierHistoryLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->fetchMembershipTierHistoryLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MSMembershipTierHistoryPagination**](../Model/MSMembershipTierHistoryPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMembershipTierRedemptionLog()`

```php
fetchMembershipTierRedemptionLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMembershipTierRedemptionPagination
```

Get Membership Tier redemption log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMembershipTierRedemptionLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->fetchMembershipTierRedemptionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MSMembershipTierRedemptionPagination**](../Model/MSMembershipTierRedemptionPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMembershipTier()`

```php
restoreMembershipTier($id): \OpenAPI\Client\Model\WTMembershipTier
```

Restore Membership Tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMembershipTier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->restoreMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipTier()`

```php
updateMembershipTier($id, $wt_membership_tier_update_params): \OpenAPI\Client\Model\WTMembershipTier
```

Update Membership Tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MembershipTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_membership_tier_update_params = new \OpenAPI\Client\Model\WTMembershipTierUpdateParams(); // \OpenAPI\Client\Model\WTMembershipTierUpdateParams

try {
    $result = $apiInstance->updateMembershipTier($id, $wt_membership_tier_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTiersApi->updateMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_membership_tier_update_params** | [**\OpenAPI\Client\Model\WTMembershipTierUpdateParams**](../Model/WTMembershipTierUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMembershipTier**](../Model/WTMembershipTier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
