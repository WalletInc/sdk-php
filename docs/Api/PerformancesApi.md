# OpenAPI\Client\PerformancesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivePerformance()**](PerformancesApi.md#archivePerformance) | **DELETE** /v2/performances/{id} | Archive Performance |
| [**countClaimedComps()**](PerformancesApi.md#countClaimedComps) | **GET** /v2/performances/{id}/claimed/count | Count Performance&#39;s claimed Tickets |
| [**countRedeemedComps()**](PerformancesApi.md#countRedeemedComps) | **GET** /v2/performances/{id}/redeemed/count | Count Performance&#39;s redeemed Tickets |
| [**createPerformance()**](PerformancesApi.md#createPerformance) | **POST** /v2/performances | Create performance |
| [**exportTickets()**](PerformancesApi.md#exportTickets) | **POST** /v2/performances/{id}/tickets/export | Export Performance&#39;s Tickets |
| [**fetchAllPerformanceTickets()**](PerformancesApi.md#fetchAllPerformanceTickets) | **GET** /v2/performances/tickets/all/{id} | Get Performance&#39;s Tickets |
| [**fetchAllPerformances()**](PerformancesApi.md#fetchAllPerformances) | **GET** /v2/performances/all | Get all Performances |
| [**fetchPerformance()**](PerformancesApi.md#fetchPerformance) | **GET** /v2/performances/{id} | Get Performance |
| [**fetchPerformanceTicketsPage()**](PerformancesApi.md#fetchPerformanceTicketsPage) | **GET** /v2/performances/tickets/page/{performanceID} | Get Performance&#39;s Tickets |
| [**fetchTicketReachStatsAll()**](PerformancesApi.md#fetchTicketReachStatsAll) | **GET** /v2/performances/reach/all | Ticket reach funnel across all of the merchant&#39;s performances Merchant-wide ticket lifecycle funnel (Issued -&gt; Claimed -&gt; Redeemed) with seats and comp/paid splits, for the Dashboard Customer tab and the View Analytics &gt; Customers &gt; Tickets page. Cohort is keyed on issue date: the optional startDate/endDate filter tickets by when they were issued (createdAt), and the later stages count how far those tickets got, regardless of when. |
| [**fetchTicketReachStatsForPerformance()**](PerformancesApi.md#fetchTicketReachStatsForPerformance) | **GET** /v2/performances/{id}/reach | Ticket reach funnel for a single performance Per-performance ticket lifecycle funnel (Issued -&gt; Claimed -&gt; Redeemed) with seats and comp/paid splits, for the /tickets \&quot;Show Analytics\&quot; slide-open. Optional startDate/endDate key the cohort on issue date (createdAt); omit them for the performance&#39;s all-time funnel. |
| [**importTickets()**](PerformancesApi.md#importTickets) | **POST** /v2/performances/{id}/tickets/import | Import Performance&#39;s Tickets |
| [**restorePerformance()**](PerformancesApi.md#restorePerformance) | **PATCH** /v2/performances/{id} | Restore Performance |
| [**saveTicketSettings()**](PerformancesApi.md#saveTicketSettings) | **POST** /v2/performances/{id} | Update performance&#39;s Ticket Settings |
| [**updatePerformance()**](PerformancesApi.md#updatePerformance) | **PUT** /v2/performances/{id} | Update Performance |


## `archivePerformance()`

```php
archivePerformance($id): \OpenAPI\Client\Model\Performance
```

Archive Performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archivePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->archivePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `countClaimedComps()`

```php
countClaimedComps($id): \OpenAPI\Client\Model\CountClaimedComps200Response
```

Count Performance's claimed Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->countClaimedComps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->countClaimedComps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CountClaimedComps200Response**](../Model/CountClaimedComps200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countRedeemedComps()`

```php
countRedeemedComps($id): \OpenAPI\Client\Model\CountClaimedComps200Response
```

Count Performance's redeemed Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->countRedeemedComps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->countRedeemedComps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CountClaimedComps200Response**](../Model/CountClaimedComps200Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_performance_create_params** | [**\OpenAPI\Client\Model\WTPerformanceCreateParams**](../Model/WTPerformanceCreateParams.md)|  | |

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

## `exportTickets()`

```php
exportTickets($id): \OpenAPI\Client\Model\Ticket[]
```

Export Performance's Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->exportTickets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->exportTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `fetchAllPerformanceTickets()`

```php
fetchAllPerformanceTickets($id, $is_archive_included): \OpenAPI\Client\Model\Ticket[]
```

Get Performance's Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPerformanceTickets($id, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchAllPerformanceTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **is_archive_included** | **bool**|  | [optional] |

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

Get all Performances

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

## `fetchPerformance()`

```php
fetchPerformance($id): \OpenAPI\Client\Model\Performance
```

Get Performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchPerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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
fetchPerformanceTicketsPage($performance_id, $page_num, $page_size, $filter_comps, $filter_claimed, $sort_by, $sort_direction, $is_archive_included): \OpenAPI\Client\Model\FetchPerformanceTicketsPage200Response
```

Get Performance's Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$performance_id = 'performance_id_example'; // string
$page_num = 3.4; // float
$page_size = 3.4; // float
$filter_comps = True; // bool
$filter_claimed = True; // bool
$sort_by = new \OpenAPI\Client\Model\TicketSortKeys(); // TicketSortKeys
$sort_direction = new \OpenAPI\Client\Model\SortDirection(); // SortDirection
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchPerformanceTicketsPage($performance_id, $page_num, $page_size, $filter_comps, $filter_claimed, $sort_by, $sort_direction, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchPerformanceTicketsPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **performance_id** | **string**|  | |
| **page_num** | **float**|  | |
| **page_size** | **float**|  | |
| **filter_comps** | **bool**|  | [optional] |
| **filter_claimed** | **bool**|  | [optional] |
| **sort_by** | [**TicketSortKeys**](../Model/.md)|  | [optional] |
| **sort_direction** | [**SortDirection**](../Model/.md)|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchPerformanceTicketsPage200Response**](../Model/FetchPerformanceTicketsPage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTicketReachStatsAll()`

```php
fetchTicketReachStatsAll($start_date, $end_date): \OpenAPI\Client\Model\WTTicketReachStats
```

Ticket reach funnel across all of the merchant's performances Merchant-wide ticket lifecycle funnel (Issued -> Claimed -> Redeemed) with seats and comp/paid splits, for the Dashboard Customer tab and the View Analytics > Customers > Tickets page. Cohort is keyed on issue date: the optional startDate/endDate filter tickets by when they were issued (createdAt), and the later stages count how far those tickets got, regardless of when.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchTicketReachStatsAll($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchTicketReachStatsAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTTicketReachStats**](../Model/WTTicketReachStats.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTicketReachStatsForPerformance()`

```php
fetchTicketReachStatsForPerformance($id, $start_date, $end_date): \OpenAPI\Client\Model\WTTicketReachStats
```

Ticket reach funnel for a single performance Per-performance ticket lifecycle funnel (Issued -> Claimed -> Redeemed) with seats and comp/paid splits, for the /tickets \"Show Analytics\" slide-open. Optional startDate/endDate key the cohort on issue date (createdAt); omit them for the performance's all-time funnel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchTicketReachStatsForPerformance($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->fetchTicketReachStatsForPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTTicketReachStats**](../Model/WTTicketReachStats.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importTickets()`

```php
importTickets($id, $import_tickets_request): string
```

Import Performance's Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$import_tickets_request = new \OpenAPI\Client\Model\ImportTicketsRequest(); // \OpenAPI\Client\Model\ImportTicketsRequest

try {
    $result = $apiInstance->importTickets($id, $import_tickets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->importTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **import_tickets_request** | [**\OpenAPI\Client\Model\ImportTicketsRequest**](../Model/ImportTicketsRequest.md)|  | |

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

## `restorePerformance()`

```php
restorePerformance($id): \OpenAPI\Client\Model\Performance
```

Restore Performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restorePerformance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->restorePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `saveTicketSettings()`

```php
saveTicketSettings($id, $save_ticket_settings_request): \OpenAPI\Client\Model\Performance
```

Update performance's Ticket Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$save_ticket_settings_request = new \OpenAPI\Client\Model\SaveTicketSettingsRequest(); // \OpenAPI\Client\Model\SaveTicketSettingsRequest

try {
    $result = $apiInstance->saveTicketSettings($id, $save_ticket_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->saveTicketSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **save_ticket_settings_request** | [**\OpenAPI\Client\Model\SaveTicketSettingsRequest**](../Model/SaveTicketSettingsRequest.md)|  | |

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

## `updatePerformance()`

```php
updatePerformance($id, $wt_performance_update_params): \OpenAPI\Client\Model\Performance
```

Update Performance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PerformancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_performance_update_params = new \OpenAPI\Client\Model\WTPerformanceUpdateParams(); // \OpenAPI\Client\Model\WTPerformanceUpdateParams

try {
    $result = $apiInstance->updatePerformance($id, $wt_performance_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformancesApi->updatePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_performance_update_params** | [**\OpenAPI\Client\Model\WTPerformanceUpdateParams**](../Model/WTPerformanceUpdateParams.md)|  | |

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
