# OpenAPI\Client\TicketsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveTicket()**](TicketsApi.md#archiveTicket) | **DELETE** /v2/ticket/{id} | Archive Ticket |
| [**createTicket()**](TicketsApi.md#createTicket) | **POST** /v2/ticket | Create Ticket |
| [**fetchTicket()**](TicketsApi.md#fetchTicket) | **GET** /v2/ticket/{id} | Get Ticket |
| [**restoreTicket()**](TicketsApi.md#restoreTicket) | **PATCH** /v2/ticket/{id} | Restore Ticket |
| [**updateTicket()**](TicketsApi.md#updateTicket) | **PUT** /v2/ticket/{id} | Update Ticket |


## `archiveTicket()`

```php
archiveTicket($id): \OpenAPI\Client\Model\Ticket
```

Archive Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->archiveTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTicket()`

```php
createTicket($wt_ticket_create_params): \OpenAPI\Client\Model\Ticket
```

Create Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_ticket_create_params = new \OpenAPI\Client\Model\WTTicketCreateParams(); // \OpenAPI\Client\Model\WTTicketCreateParams

try {
    $result = $apiInstance->createTicket($wt_ticket_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_ticket_create_params** | [**\OpenAPI\Client\Model\WTTicketCreateParams**](../Model/WTTicketCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTicket()`

```php
fetchTicket($id): \OpenAPI\Client\Model\WTTicket
```

Get Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->fetchTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTTicket**](../Model/WTTicket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreTicket()`

```php
restoreTicket($id): \OpenAPI\Client\Model\Ticket
```

Restore Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->restoreTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTicket()`

```php
updateTicket($id, $wt_ticket_update_params): \OpenAPI\Client\Model\Ticket
```

Update Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_ticket_update_params = new \OpenAPI\Client\Model\WTTicketUpdateParams(); // \OpenAPI\Client\Model\WTTicketUpdateParams

try {
    $result = $apiInstance->updateTicket($id, $wt_ticket_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->updateTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_ticket_update_params** | [**\OpenAPI\Client\Model\WTTicketUpdateParams**](../Model/WTTicketUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
