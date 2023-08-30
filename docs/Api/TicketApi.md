# OpenAPI\Client\TicketApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveTicket()**](TicketApi.md#archiveTicket) | **DELETE** /v2/ticket/{id} | Archive ticket
[**createTicket()**](TicketApi.md#createTicket) | **POST** /v2/ticket | Create ticket
[**fetchTicket()**](TicketApi.md#fetchTicket) | **GET** /v2/ticket/{id} | Fetch ticket
[**restoreTicket()**](TicketApi.md#restoreTicket) | **PATCH** /v2/ticket/{id} | Restore ticket
[**updateTicket()**](TicketApi.md#updateTicket) | **PUT** /v2/ticket/{id} | Update ticket


## `archiveTicket()`

```php
archiveTicket($id): \OpenAPI\Client\Model\Ticket
```

Archive ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->archiveTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Create ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_ticket_create_params = new \OpenAPI\Client\Model\WTTicketCreateParams(); // \OpenAPI\Client\Model\WTTicketCreateParams

try {
    $result = $apiInstance->createTicket($wt_ticket_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->createTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_ticket_create_params** | [**\OpenAPI\Client\Model\WTTicketCreateParams**](../Model/WTTicketCreateParams.md)|  |

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

Fetch ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->fetchTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->fetchTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Restore ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restoreTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

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

Update ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_ticket_update_params = new \OpenAPI\Client\Model\WTTicketUpdateParams(); // \OpenAPI\Client\Model\WTTicketUpdateParams

try {
    $result = $apiInstance->updateTicket($id, $wt_ticket_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->updateTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_ticket_update_params** | [**\OpenAPI\Client\Model\WTTicketUpdateParams**](../Model/WTTicketUpdateParams.md)|  |

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
