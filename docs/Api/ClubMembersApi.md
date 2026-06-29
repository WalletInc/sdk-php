# OpenAPI\Client\ClubMembersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMember()**](ClubMembersApi.md#archiveMember) | **DELETE** /v2/membership/member/{id} | Archive Member |
| [**createMember()**](ClubMembersApi.md#createMember) | **POST** /v2/membership/member | Create Member |
| [**fetchMemberById()**](ClubMembersApi.md#fetchMemberById) | **GET** /v2/membership/member/{id} | Get Member |
| [**fetchMemberHistoryLog()**](ClubMembersApi.md#fetchMemberHistoryLog) | **POST** /v2/membership/member/history/log | Get Member history |
| [**fetchMemberRedemptionLog()**](ClubMembersApi.md#fetchMemberRedemptionLog) | **POST** /v2/membership/member/redemption/log | Get Member redemption log |
| [**fetchMembersByPage()**](ClubMembersApi.md#fetchMembersByPage) | **POST** /v2/membership/member/page | Get Members |
| [**fetchMembersCount()**](ClubMembersApi.md#fetchMembersCount) | **GET** /v2/membership/member/count | Count Members |
| [**restoreMember()**](ClubMembersApi.md#restoreMember) | **PATCH** /v2/membership/member/{id} | Restore Member |
| [**searchMembers()**](ClubMembersApi.md#searchMembers) | **POST** /v2/membership/member/search | Search for Members |
| [**updateMember()**](ClubMembersApi.md#updateMember) | **PUT** /v2/membership/member/{id} | Update Member |


## `archiveMember()`

```php
archiveMember($id): \OpenAPI\Client\Model\WTMember
```

Archive Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->archiveMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Create Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_member_creation_params = new \OpenAPI\Client\Model\WTMemberCreationParams(); // \OpenAPI\Client\Model\WTMemberCreationParams

try {
    $result = $apiInstance->createMember($wt_member_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->createMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_member_creation_params** | [**\OpenAPI\Client\Model\WTMemberCreationParams**](../Model/WTMemberCreationParams.md)|  | |

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

Get Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMemberById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->fetchMemberById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Get Member history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMemberHistoryLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->fetchMemberHistoryLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

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

Get Member redemption log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_id_and_without_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions

try {
    $result = $apiInstance->fetchMemberRedemptionLog($pagination_request_with_id_and_without_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->fetchMemberRedemptionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_id_and_without_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithIDAndWithoutSortOptions**](../Model/PaginationRequestWithIDAndWithoutSortOptions.md)|  | |

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

Get Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagination_request_with_sort_options = new \OpenAPI\Client\Model\PaginationRequestWithSortOptions(); // \OpenAPI\Client\Model\PaginationRequestWithSortOptions

try {
    $result = $apiInstance->fetchMembersByPage($pagination_request_with_sort_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->fetchMembersByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_request_with_sort_options** | [**\OpenAPI\Client\Model\PaginationRequestWithSortOptions**](../Model/PaginationRequestWithSortOptions.md)|  | |

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
fetchMembersCount(): \OpenAPI\Client\Model\FetchMembersCount200Response
```

Count Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMembersCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->fetchMembersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FetchMembersCount200Response**](../Model/FetchMembersCount200Response.md)

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

Restore Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->restoreMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

Search for Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member_search = new \OpenAPI\Client\Model\MemberSearch(); // \OpenAPI\Client\Model\MemberSearch

try {
    $result = $apiInstance->searchMembers($member_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->searchMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_search** | [**\OpenAPI\Client\Model\MemberSearch**](../Model/MemberSearch.md)|  | |

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
updateMember($id, $pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number_or_email_or_birthday): \OpenAPI\Client\Model\WTMember
```

Update Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClubMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number_or_email_or_birthday = new \OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday(); // \OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday

try {
    $result = $apiInstance->updateMember($id, $pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number_or_email_or_birthday);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubMembersApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pick_wt_member_member_idor_first_name_or_last_name_or_membership_tier_idor_points_accrued_or_mobile_number_or_email_or_birthday** | [**\OpenAPI\Client\Model\PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday**](../Model/PickWTMemberMemberIDOrFirstNameOrLastNameOrMembershipTierIDOrPointsAccruedOrMobileNumberOrEmailOrBirthday.md)|  | |

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
