# OpenAPI\Client\ImportExportApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportClubMembers()**](ImportExportApi.md#exportClubMembers) | **PUT** /v2/employee/export/members | Export club members |
| [**exportMerchantCredits()**](ImportExportApi.md#exportMerchantCredits) | **PUT** /v2/employee/export/merchantCredits | Export merchant credits |
| [**exportStaticVoucherCampaign()**](ImportExportApi.md#exportStaticVoucherCampaign) | **PUT** /v2/employee/export/staticVoucherCampaign/{campaignID} | Export static voucher campaign |
| [**importClubMembers()**](ImportExportApi.md#importClubMembers) | **POST** /v2/employee/import/members | Import club members |
| [**importMerchantCredits()**](ImportExportApi.md#importMerchantCredits) | **POST** /v2/employee/import/merchantCredits | Import merchant credits |
| [**setExportDataFilesRead()**](ImportExportApi.md#setExportDataFilesRead) | **PUT** /v2/employee/export/dataFiles | Mark export data files as read |
| [**updateClubMembers()**](ImportExportApi.md#updateClubMembers) | **PUT** /v2/employee/update/members | Update club members |


## `exportClubMembers()`

```php
exportClubMembers(): string
```

Export club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exportClubMembers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->exportClubMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportMerchantCredits()`

```php
exportMerchantCredits(): string
```

Export merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exportMerchantCredits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->exportMerchantCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportStaticVoucherCampaign()`

```php
exportStaticVoucherCampaign($campaign_id): string
```

Export static voucher campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->exportStaticVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->exportStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importClubMembers()`

```php
importClubMembers($wt_employee_import_records): string
```

Import club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_import_records = new \OpenAPI\Client\Model\WTEmployeeImportRecords(); // \OpenAPI\Client\Model\WTEmployeeImportRecords

try {
    $result = $apiInstance->importClubMembers($wt_employee_import_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->importClubMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importMerchantCredits()`

```php
importMerchantCredits($wt_employee_import_records): string
```

Import merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_import_records = new \OpenAPI\Client\Model\WTEmployeeImportRecords(); // \OpenAPI\Client\Model\WTEmployeeImportRecords

try {
    $result = $apiInstance->importMerchantCredits($wt_employee_import_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->importMerchantCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setExportDataFilesRead()`

```php
setExportDataFilesRead(): bool
```

Mark export data files as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setExportDataFilesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->setExportDataFilesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClubMembers()`

```php
updateClubMembers($wt_employee_update_records): string
```

Update club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_update_records = new \OpenAPI\Client\Model\WTEmployeeUpdateRecords(); // \OpenAPI\Client\Model\WTEmployeeUpdateRecords

try {
    $result = $apiInstance->updateClubMembers($wt_employee_update_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->updateClubMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_update_records** | [**\OpenAPI\Client\Model\WTEmployeeUpdateRecords**](../Model/WTEmployeeUpdateRecords.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
