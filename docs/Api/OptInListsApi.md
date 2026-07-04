# OpenAPI\Client\OptInListsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countOptInListSubscribers()**](OptInListsApi.md#countOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/count/{listID} | Count opt in list subscribers |
| [**countOptInSourceSubscribers()**](OptInListsApi.md#countOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/count/{sourceID} | Count opt in source subscribers |
| [**createOptInList()**](OptInListsApi.md#createOptInList) | **POST** /v2/sms/optInList | Create opt in list |
| [**createOptInListSource()**](OptInListsApi.md#createOptInListSource) | **POST** /v2/sms/optInListSource | Send SMS to opt in list |
| [**exportOptInListSubscribers()**](OptInListsApi.md#exportOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/export/{listID} | Export opt in list subscribers |
| [**fetchOptInList()**](OptInListsApi.md#fetchOptInList) | **GET** /v2/merchant/lists/optIn/{listID} | Get opt in list |
| [**fetchOptInListSource()**](OptInListsApi.md#fetchOptInListSource) | **GET** /v2/employee/optInListSource/{sourceID} | Get opt in list source |
| [**fetchOptInListSources()**](OptInListsApi.md#fetchOptInListSources) | **GET** /v2/sms/optInListSources/all | Get all opt in list sources |
| [**fetchOptInListSourcesCreatedByEmployee()**](OptInListsApi.md#fetchOptInListSourcesCreatedByEmployee) | **GET** /v2/employee/optInListSources/all | Get all opt in list sources |
| [**fetchOptInListSubscribers()**](OptInListsApi.md#fetchOptInListSubscribers) | **GET** /v2/sms/optInList/subscribers/{listID} | Get opt in list subscribers |
| [**fetchOptInListSubscribersByPage()**](OptInListsApi.md#fetchOptInListSubscribersByPage) | **GET** /v2/sms/optInList/subscribers/page/{listID} | Get opt in list subscribers by page |
| [**fetchOptInLists()**](OptInListsApi.md#fetchOptInLists) | **GET** /v2/merchant/lists/optIn/all | Get all opt in lists |
| [**fetchOptInListsAssociatedWithPhoneNumber()**](OptInListsApi.md#fetchOptInListsAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/lists/{phoneNumberID} | Get opt in lists |
| [**fetchOptInSourceSubscribers()**](OptInListsApi.md#fetchOptInSourceSubscribers) | **GET** /v2/sms/optInSource/subscribers/{sourceID} | Get opt in source subscribers |
| [**fetchOptInSourcesAssociatedWithPhoneNumber()**](OptInListsApi.md#fetchOptInSourcesAssociatedWithPhoneNumber) | **GET** /v2/sms/phoneNumber/sources/{phoneNumberID} | Get opt in sources |
| [**importOptInListSubscribers()**](OptInListsApi.md#importOptInListSubscribers) | **POST** /v2/sms/optInList/subscribers/import/{listID} | Import opt in list subscribers |
| [**saveOptInList()**](OptInListsApi.md#saveOptInList) | **PUT** /v2/sms/optInList/{listID} | Save opt in list |
| [**saveOptInListSource()**](OptInListsApi.md#saveOptInListSource) | **PUT** /v2/sms/optInListSource/{sourceID} | Save opt in list source |


## `countOptInListSubscribers()`

```php
countOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->countOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
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

## `countOptInSourceSubscribers()`

```php
countOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date): \OpenAPI\Client\Model\WTCountResult
```

Count opt in source subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->countOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->countOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
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

## `createOptInList()`

```php
createOptInList($wt_opt_in_list_creation_params): \OpenAPI\Client\Model\OptInList
```

Create opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_opt_in_list_creation_params = new \OpenAPI\Client\Model\WTOptInListCreationParams(); // \OpenAPI\Client\Model\WTOptInListCreationParams

try {
    $result = $apiInstance->createOptInList($wt_opt_in_list_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->createOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOptInListSource()`

```php
createOptInListSource($wtsms_opt_in_list_source_create): \OpenAPI\Client\Model\OptInListSource
```

Send SMS to opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wtsms_opt_in_list_source_create = new \OpenAPI\Client\Model\WTSMSOptInListSourceCreate(); // \OpenAPI\Client\Model\WTSMSOptInListSourceCreate

try {
    $result = $apiInstance->createOptInListSource($wtsms_opt_in_list_source_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->createOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportOptInListSubscribers()`

```php
exportOptInListSubscribers($list_id): string
```

Export opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->exportOptInListSubscribers($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->exportOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

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

## `fetchOptInList()`

```php
fetchOptInList($list_id): \OpenAPI\Client\Model\OptInList
```

Get opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string

try {
    $result = $apiInstance->fetchOptInList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSource()`

```php
fetchOptInListSource($source_id): \OpenAPI\Client\Model\OptInListSource
```

Get opt in list source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string

try {
    $result = $apiInstance->fetchOptInListSource($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSources()`

```php
fetchOptInListSources($is_archive_included): mixed
```

Get all opt in list sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSources($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListSources: ', $e->getMessage(), PHP_EOL;
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

## `fetchOptInListSourcesCreatedByEmployee()`

```php
fetchOptInListSourcesCreatedByEmployee(): \OpenAPI\Client\Model\OptInListSource[]
```

Get all opt in list sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchOptInListSourcesCreatedByEmployee();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListSourcesCreatedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OptInListSource[]**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSubscribers()`

```php
fetchOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\OptInListSubscriber[]
```

Get opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSubscribers($list_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptInListSubscriber[]**](../Model/OptInListSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSubscribersByPage()`

```php
fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\FetchOptInListSubscribersByPage200Response
```

Get opt in list subscribers by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$page_size = 3.4; // float
$page_num = 3.4; // float
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInListSubscribersByPage($list_id, $page_size, $page_num, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListSubscribersByPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **page_num** | **float**|  | [optional] |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchOptInListSubscribersByPage200Response**](../Model/FetchOptInListSubscribersByPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInLists()`

```php
fetchOptInLists($is_archive_included): mixed
```

Get all opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInLists($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInLists: ', $e->getMessage(), PHP_EOL;
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

## `fetchOptInListsAssociatedWithPhoneNumber()`

```php
fetchOptInListsAssociatedWithPhoneNumber($phone_number_id): \OpenAPI\Client\Model\OptInList[]
```

Get opt in lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInListsAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInListsAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList[]**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInSourceSubscribers()`

```php
fetchOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included): \OpenAPI\Client\Model\OptInListSubscriber[]
```

Get opt in source subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$is_subscribed = True; // bool
$is_pending_age21_verification = True; // bool
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchOptInSourceSubscribers($source_id, $is_subscribed, $is_pending_age21_verification, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInSourceSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **is_subscribed** | **bool**|  | [optional] |
| **is_pending_age21_verification** | **bool**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptInListSubscriber[]**](../Model/OptInListSubscriber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInSourcesAssociatedWithPhoneNumber()`

```php
fetchOptInSourcesAssociatedWithPhoneNumber($phone_number_id): \OpenAPI\Client\Model\OptInListSource[]
```

Get opt in sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string

try {
    $result = $apiInstance->fetchOptInSourcesAssociatedWithPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->fetchOptInSourcesAssociatedWithPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource[]**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOptInListSubscribers()`

```php
importOptInListSubscribers($list_id, $wtsms_import_opt_in_list_subscribers): string
```

Import opt in list subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wtsms_import_opt_in_list_subscribers = new \OpenAPI\Client\Model\WTSMSImportOptInListSubscribers(); // \OpenAPI\Client\Model\WTSMSImportOptInListSubscribers

try {
    $result = $apiInstance->importOptInListSubscribers($list_id, $wtsms_import_opt_in_list_subscribers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->importOptInListSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wtsms_import_opt_in_list_subscribers** | [**\OpenAPI\Client\Model\WTSMSImportOptInListSubscribers**](../Model/WTSMSImportOptInListSubscribers.md)|  | |

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

## `saveOptInList()`

```php
saveOptInList($list_id, $wt_opt_in_list_creation_params): \OpenAPI\Client\Model\OptInList
```

Save opt in list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 'list_id_example'; // string
$wt_opt_in_list_creation_params = new \OpenAPI\Client\Model\WTOptInListCreationParams(); // \OpenAPI\Client\Model\WTOptInListCreationParams

try {
    $result = $apiInstance->saveOptInList($list_id, $wt_opt_in_list_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->saveOptInList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **wt_opt_in_list_creation_params** | [**\OpenAPI\Client\Model\WTOptInListCreationParams**](../Model/WTOptInListCreationParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInList**](../Model/OptInList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveOptInListSource()`

```php
saveOptInListSource($source_id, $wtsms_opt_in_list_source_create): \OpenAPI\Client\Model\OptInListSource
```

Save opt in list source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptInListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = 'source_id_example'; // string
$wtsms_opt_in_list_source_create = new \OpenAPI\Client\Model\WTSMSOptInListSourceCreate(); // \OpenAPI\Client\Model\WTSMSOptInListSourceCreate

try {
    $result = $apiInstance->saveOptInListSource($source_id, $wtsms_opt_in_list_source_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInListsApi->saveOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_id** | **string**|  | |
| **wtsms_opt_in_list_source_create** | [**\OpenAPI\Client\Model\WTSMSOptInListSourceCreate**](../Model/WTSMSOptInListSourceCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
