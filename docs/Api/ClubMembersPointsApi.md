# OpenAPI\Client\ClubMembersPointsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveMember()**](ClubMembersPointsApi.md#archiveMember) | **DELETE** /v2/membership/member/{id} | Archive member
[**createMember()**](ClubMembersPointsApi.md#createMember) | **POST** /v2/membership/member | Create member
[**fetchMemberById()**](ClubMembersPointsApi.md#fetchMemberById) | **GET** /v2/membership/member/{id} | Fetch member
[**fetchMemberHistoryLog()**](ClubMembersPointsApi.md#fetchMemberHistoryLog) | **POST** /v2/membership/member/history/log | Fetch history
[**fetchMemberRedemptionLog()**](ClubMembersPointsApi.md#fetchMemberRedemptionLog) | **POST** /v2/membership/member/redemption/log | Fetch redemption log
[**fetchMembersByPage()**](ClubMembersPointsApi.md#fetchMembersByPage) | **POST** /v2/membership/member/page | Fetch members by page
[**fetchMembersCount()**](ClubMembersPointsApi.md#fetchMembersCount) | **GET** /v2/membership/member/count | Count active members
[**restoreMember()**](ClubMembersPointsApi.md#restoreMember) | **PATCH** /v2/membership/member/{id} | Restore member
[**searchMembers()**](ClubMembersPointsApi.md#searchMembers) | **POST** /v2/membership/member/search | Search for members
[**updateMember()**](ClubMembersPointsApi.md#updateMember) | **PUT** /v2/membership/member/{id} | Update member


## `archiveMember()`

```php
archiveMember($id): \OpenAPI\Client\Model\WTMember
```

Archive member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->archiveMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMember()`

```php
createMember($wt_member_creation_params): \OpenAPI\Client\Model\WTMember
```

Create member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_member_creation_params = new \OpenAPI\Client\Model\WTMemberCreationParams(); // \OpenAPI\Client\Model\WTMemberCreationParams

try {
    $result = $apiInstance->createMember($wt_member_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->createMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_member_creation_params** | [**\OpenAPI\Client\Model\WTMemberCreationParams**](../Model/WTMemberCreationParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMemberById()`

```php
fetchMemberById($id): \OpenAPI\Client\Model\WTMember
```

Fetch member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchMemberById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->fetchMemberById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMemberHistoryLog()`

```php
fetchMemberHistoryLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMemberHistoryPagination
```

Fetch history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMemberHistoryLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->fetchMemberHistoryLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  |

### Return type

[**\OpenAPI\Client\Model\MSMemberHistoryPagination**](../Model/MSMemberHistoryPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMemberRedemptionLog()`

```php
fetchMemberRedemptionLog($pagination_request_with_id_and_without_sort_options): \OpenAPI\Client\Model\MSMemberRedemptionPagination
```

Fetch redemption log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMemberRedemptionLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->fetchMemberRedemptionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  |

### Return type

[**\OpenAPI\Client\Model\MSMemberRedemptionPagination**](../Model/MSMemberRedemptionPagination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMembersByPage()`

```php
fetchMembersByPage($pagination_request_with_sort_options): \OpenAPI\Client\Model\WTMember[]
```

Fetch members by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithSortOptions

try {
    $result = $apiInstance->fetchMembersByPage($pagination_request_with_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->fetchMembersByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination_request_with_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithSortOptions**](../Model/PaginationRequestWithSortOptions.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember[]**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMembersCount()`

```php
fetchMembersCount(): \OpenAPI\Client\Model\InlineResponse2002
```

Count active members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMembersCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->fetchMembersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMember()`

```php
restoreMember($id): \OpenAPI\Client\Model\WTMember
```

Restore member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->restoreMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMembers()`

```php
searchMembers($member_search): \OpenAPI\Client\Model\PaginatedWTMembers
```

Search for members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_search = new \OpenAPI\Client\Model\MemberSearch(); // \OpenAPI\Client\Model\MemberSearch

try {
    $result = $apiInstance->searchMembers($member_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->searchMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_search** | [**\OpenAPI\Client\Model\MemberSearch**](../Model/MemberSearch.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaginatedWTMembers**](../Model/PaginatedWTMembers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMember()`

```php
updateMember($id, $pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number): \OpenAPI\Client\Model\WTMember
```

Update member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number = new \OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber(); // \OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber

try {
    $result = $apiInstance->updateMember($id, $pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersPointsApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number** | [**\OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber**](../Model/PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumber.md)|  |

### Return type

[**\OpenAPI\Client\Model\WTMember**](../Model/WTMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
