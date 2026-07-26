# OpenAPI\Client\ImportedListsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveRecipient()**](ImportedListsApi.md#archiveRecipient) | **DELETE** /v2/sms/importedList/recipients/{id} | Archive recipient |
| [**countImportedListRecipients()**](ImportedListsApi.md#countImportedListRecipients) | **GET** /v2/sms/importedList/recipients/count/{listID} | Count imported list recipients |
| [**createImportedList()**](ImportedListsApi.md#createImportedList) | **POST** /v2/sms/importedList | Create imported list |
| [**createRecipientInImportedList()**](ImportedListsApi.md#createRecipientInImportedList) | **POST** /v2/sms/importedList/recipients/create | Add new recipient in an imported list |
| [**exportImportedListRecipients()**](ImportedListsApi.md#exportImportedListRecipients) | **POST** /v2/sms/importedList/recipients/export/{importedListID} | Export imported list recipients |
| [**fetchImportedList()**](ImportedListsApi.md#fetchImportedList) | **GET** /v2/merchant/lists/imported/{listID} | Get imported list |
| [**fetchImportedListRecipients()**](ImportedListsApi.md#fetchImportedListRecipients) | **GET** /v2/sms/importedList/recipients/{listID} | Get imported list recipients |
| [**fetchImportedListRecipientsByPage()**](ImportedListsApi.md#fetchImportedListRecipientsByPage) | **GET** /v2/sms/importedList/recipients/page/{listID} | Get imported list recipients by page |
| [**fetchImportedLists()**](ImportedListsApi.md#fetchImportedLists) | **GET** /v2/merchant/lists/imported/all | Get all imported lists |
| [**importImportedListRecipients()**](ImportedListsApi.md#importImportedListRecipients) | **POST** /v2/sms/importedList/recipients/import/{importedListID} | Import imported list recipients |
| [**importImportedListRecipientsFromMembershipTier()**](ImportedListsApi.md#importImportedListRecipientsFromMembershipTier) | **POST** /v2/sms/importedList/recipients/import-from-tier | Import imported list recipients from a given membership tier |
| [**restoreRecipient()**](ImportedListsApi.md#restoreRecipient) | **PATCH** /v2/sms/importedList/recipients/{id} | Restore recipient |
| [**saveImportedList()**](ImportedListsApi.md#saveImportedList) | **PUT** /v2/sms/importedList/{listID} | Save imported list |


## `archiveRecipient()`

```php
archiveRecipient($id): \OpenAPI\Client\Model\ImportedListRecipient
```

Archive recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->archiveRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countImportedListRecipients()`

```php
countImportedListRecipients($list_id, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countImportedListRecipients($list_id, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->countImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_archive_included** | **bool**|  | [optional] |
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

## `createImportedList()`

```php
createImportedList($wtsms_imported_list_create): \OpenAPI\Client\Model\ImportedList
```

Create imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_imported_list_create = new \OpenAPI\Client\Model\WTSMSImportedListCreate(); // \OpenAPI\Client\Model\WTSMSImportedListCreate

try {
    $result = $apiInstance->createImportedList($wtsms_imported_list_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->createImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRecipientInImportedList()`

```php
createRecipientInImportedList($ss_imported_list_recipient_create_params): \OpenAPI\Client\Model\ImportedListRecipient
```

Add new recipient in an imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ss_imported_list_recipient_create_params = new \OpenAPI\Client\Model\SSImportedListRecipientCreateParams(); // \OpenAPI\Client\Model\SSImportedListRecipientCreateParams

try {
    $result = $apiInstance->createRecipientInImportedList($ss_imported_list_recipient_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->createRecipientInImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ss_imported_list_recipient_create_params** | [**\OpenAPI\Client\Model\SSImportedListRecipientCreateParams**](../Model/SSImportedListRecipientCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportImportedListRecipients()`

```php
exportImportedListRecipients($imported_list_id): string
```

Export imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imported_list_id = 'imported_list_id_example'; // string

try {
    $result = $apiInstance->exportImportedListRecipients($imported_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->exportImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **imported_list_id** | **string**|  | |

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

## `fetchImportedList()`

```php
fetchImportedList($list_id): \OpenAPI\Client\Model\ImportedList
```

Get imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->fetchImportedList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->fetchImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedListRecipients()`

```php
fetchImportedListRecipients($list_id): \OpenAPI\Client\Model\ImportedListRecipient[]
```

Get imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->fetchImportedListRecipients($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->fetchImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient[]**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedListRecipientsByPage()`

```php
fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included): \OpenAPI\Client\Model\FetchImportedListRecipientsByPage200Response
```

Get imported list recipients by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchImportedListRecipientsByPage($list_id, $page_size, $page_num, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->fetchImportedListRecipientsByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchImportedListRecipientsByPage200Response**](../Model/FetchImportedListRecipientsByPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchImportedLists()`

```php
fetchImportedLists($is_archive_included): mixed
```

Get all imported lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchImportedLists($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->fetchImportedLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

## `importImportedListRecipients()`

```php
importImportedListRecipients($imported_list_id, $wt_imported_list_recipient_import): string
```

Import imported list recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imported_list_id = 'imported_list_id_example'; // string
$wt_imported_list_recipient_import = new \OpenAPI\Client\Model\WTImportedListRecipientImport(); // \OpenAPI\Client\Model\WTImportedListRecipientImport

try {
    $result = $apiInstance->importImportedListRecipients($imported_list_id, $wt_imported_list_recipient_import);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->importImportedListRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **imported_list_id** | **string**|  | |
| **wt_imported_list_recipient_import** | [**\OpenAPI\Client\Model\WTImportedListRecipientImport**](../Model/WTImportedListRecipientImport.md)|  | |

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

## `importImportedListRecipientsFromMembershipTier()`

```php
importImportedListRecipientsFromMembershipTier($wt_imported_list_recipient_from_membership_tier_import): string
```

Import imported list recipients from a given membership tier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_imported_list_recipient_from_membership_tier_import = new \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport(); // \OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport

try {
    $result = $apiInstance->importImportedListRecipientsFromMembershipTier($wt_imported_list_recipient_from_membership_tier_import);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->importImportedListRecipientsFromMembershipTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_imported_list_recipient_from_membership_tier_import** | [**\OpenAPI\Client\Model\WTImportedListRecipientFromMembershipTierImport**](../Model/WTImportedListRecipientFromMembershipTierImport.md)|  | |

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

## `restoreRecipient()`

```php
restoreRecipient($id): \OpenAPI\Client\Model\ImportedListRecipient
```

Restore recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->restoreRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedListRecipient**](../Model/ImportedListRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveImportedList()`

```php
saveImportedList($list_id, $wtsms_imported_list_create): \OpenAPI\Client\Model\ImportedList
```

Save imported list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportedListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wtsms_imported_list_create = new \OpenAPI\Client\Model\WTSMSImportedListCreate(); // \OpenAPI\Client\Model\WTSMSImportedListCreate

try {
    $result = $apiInstance->saveImportedList($list_id, $wtsms_imported_list_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportedListsApi->saveImportedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wtsms_imported_list_create** | [**\OpenAPI\Client\Model\WTSMSImportedListCreate**](../Model/WTSMSImportedListCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImportedList**](../Model/ImportedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
