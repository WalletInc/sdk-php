# OpenAPI\Client\PerformancesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archivePerformance()**](PerformancesApi.md#archivePerformance) | **DELETE** /v2/performances/{id} | Archive performance
[**createPerformance()**](PerformancesApi.md#createPerformance) | **POST** /v2/performances | Create performance
[**fetchAllPerformanceTickets()**](PerformancesApi.md#fetchAllPerformanceTickets) | **GET** /v2/performances/tickets/all/{id} | Fetch all tickets
[**fetchAllPerformances()**](PerformancesApi.md#fetchAllPerformances) | **GET** /v2/performances/all | Fetch all performances
[**fetchPerformance()**](PerformancesApi.md#fetchPerformance) | **GET** /v2/performances/{id} | Fetch a single performance
[**fetchPerformanceTicketsPage()**](PerformancesApi.md#fetchPerformanceTicketsPage) | **GET** /v2/performances/tickets/page/{performanceID} | Fetch tickets by page
[**restorePerformance()**](PerformancesApi.md#restorePerformance) | **PATCH** /v2/performances/{id} | Restore performance
[**saveTicketDesign()**](PerformancesApi.md#saveTicketDesign) | **PUT** /v2/performances/{id}/saveTicketDesign/{paymentDesignID} | Update performance
[**updatePerformance()**](PerformancesApi.md#updatePerformance) | **PUT** /v2/performances/{id} | Update performance


## `archivePerformance()`

```php
archivePerformance($id): \OpenAPI\Client\Model\Performance
```

Archive performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archivePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->archivePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPerformance()`

```php
createPerformance($wt_performance_create_params): \OpenAPI\Client\Model\Performance
```

Create performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_performance_create_params = new \OpenAPI\Client\Model\WTPerformanceCreateParams(); // \OpenAPI\Client\Model\WTPerformanceCreateParams

try {
    $result = $apiInstance->createPerformance($wt_performance_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->createPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_performance_create_params** | [**\OpenAPI\Client\Model\WTPerformanceCreateParams**](../Model/WTPerformanceCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPerformanceTickets()`

```php
fetchAllPerformanceTickets($id, $is_archive_included): \OpenAPI\Client\Model\Ticket[]
```

Fetch all tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPerformanceTickets($id, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchAllPerformanceTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPerformances()`

```php
fetchAllPerformances($is_archive_included): mixed
```

Fetch all performances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPerformances($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchAllPerformances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

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

## `fetchPerformance()`

```php
fetchPerformance($id): \OpenAPI\Client\Model\Performance
```

Fetch a single performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchPerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPerformanceTicketsPage()`

```php
fetchPerformanceTicketsPage($performance_id, $page_num, $page_size, $is_archive_included): \OpenAPI\Client\Model\InlineResponse2005
```

Fetch tickets by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$performance_id = NULL; // mixed
$page_num = 3.4; // double
$page_size = 3.4; // double
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchPerformanceTicketsPage($performance_id, $page_num, $page_size, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchPerformanceTicketsPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **performance_id** | [**mixed**](../Model/.md)|  |
 **page_num** | **double**|  |
 **page_size** | **double**|  |
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restorePerformance()`

```php
restorePerformance($id): \OpenAPI\Client\Model\Performance
```

Restore performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restorePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->restorePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveTicketDesign()`

```php
saveTicketDesign($id, $payment_design_id): \OpenAPI\Client\Model\Performance
```

Update performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$payment_design_id = NULL; // mixed

try {
    $result = $apiInstance->saveTicketDesign($id, $payment_design_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->saveTicketDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **payment_design_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePerformance()`

```php
updatePerformance($id, $wt_performance_update_params): \OpenAPI\Client\Model\Performance
```

Update performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_performance_update_params = new \OpenAPI\Client\Model\WTPerformanceUpdateParams(); // \OpenAPI\Client\Model\WTPerformanceUpdateParams

try {
    $result = $apiInstance->updatePerformance($id, $wt_performance_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->updatePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_performance_update_params** | [**\OpenAPI\Client\Model\WTPerformanceUpdateParams**](../Model/WTPerformanceUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Performance**](../Model/Performance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
