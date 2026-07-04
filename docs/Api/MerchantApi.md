# OpenAPI\Client\MerchantApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMerchantProfile()**](MerchantApi.md#archiveMerchantProfile) | **DELETE** /v2/merchant/delete | Archive Merchant |
| [**fetchCustomRoles()**](MerchantApi.md#fetchCustomRoles) | **GET** /v2/merchant/roles/custom | Get custom roles |
| [**fetchEmployees()**](MerchantApi.md#fetchEmployees) | **GET** /v2/merchant/employees/all | Get all employees |
| [**fetchPublicEmployees()**](MerchantApi.md#fetchPublicEmployees) | **GET** /v2/merchant/employees/public | Get public representative employees of the merchant |
| [**fetchWalletConfiguration()**](MerchantApi.md#fetchWalletConfiguration) | **GET** /v2/merchant/wallet/configuration | Get wallet configuration |
| [**updateMerchant()**](MerchantApi.md#updateMerchant) | **PUT** /v2/merchant | Update merchant details |
| [**updatePointsOfContact()**](MerchantApi.md#updatePointsOfContact) | **PUT** /v2/merchant/pointsOfContact | Update points of contact |
| [**updatePosIntegration()**](MerchantApi.md#updatePosIntegration) | **PUT** /v2/merchant/pos/integration | Update POS Integration |


## `archiveMerchantProfile()`

```php
archiveMerchantProfile(): mixed
```

Archive Merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->archiveMerchantProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->archiveMerchantProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchCustomRoles()`

```php
fetchCustomRoles(): mixed
```

Get custom roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchCustomRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchCustomRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchEmployees()`

```php
fetchEmployees(): mixed
```

Get all employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchEmployees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchEmployees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchPublicEmployees()`

```php
fetchPublicEmployees(): mixed
```

Get public representative employees of the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchPublicEmployees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchPublicEmployees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchWalletConfiguration()`

```php
fetchWalletConfiguration(): mixed
```

Get wallet configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchWalletConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->fetchWalletConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateMerchant()`

```php
updateMerchant($wt_merchant_update): mixed
```

Update merchant details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update = new \OpenAPI\Client\Model\WTMerchantUpdate(); // \OpenAPI\Client\Model\WTMerchantUpdate

try {
    $result = $apiInstance->updateMerchant($wt_merchant_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update** | [**\OpenAPI\Client\Model\WTMerchantUpdate**](../Model/WTMerchantUpdate.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePointsOfContact()`

```php
updatePointsOfContact($wt_merchant_update_points_of_contact): mixed
```

Update points of contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update_points_of_contact = new \OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact(); // \OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact

try {
    $result = $apiInstance->updatePointsOfContact($wt_merchant_update_points_of_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updatePointsOfContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update_points_of_contact** | [**\OpenAPI\Client\Model\WTMerchantUpdatePointsOfContact**](../Model/WTMerchantUpdatePointsOfContact.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePosIntegration()`

```php
updatePosIntegration($wt_merchant_update_pos_integration): mixed
```

Update POS Integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_merchant_update_pos_integration = new \OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration(); // \OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration

try {
    $result = $apiInstance->updatePosIntegration($wt_merchant_update_pos_integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updatePosIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_merchant_update_pos_integration** | [**\OpenAPI\Client\Model\WTMerchantUpdatePOSIntegration**](../Model/WTMerchantUpdatePOSIntegration.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
