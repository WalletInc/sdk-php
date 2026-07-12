# OpenAPI\Client\OrdersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchOrder()**](OrdersApi.md#fetchOrder) | **GET** /orders/{orderId} | Fetch one of the authenticated merchant&#39;s orders by id Returns the order with its line items. 403-family error if the order belongs to another merchant (ownership is asserted server-side). |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /orders | List the authenticated merchant&#39;s orders Newest first, each hydrated with its line items. Read-only receipts/status for Flow B. |


## `fetchOrder()`

```php
fetchOrder($order_id): \OpenAPI\Client\Model\WTOrder
```

Fetch one of the authenticated merchant's orders by id Returns the order with its line items. 403-family error if the order belongs to another merchant (ownership is asserted server-side).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->fetchOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->fetchOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTOrder**](../Model/WTOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders(): \OpenAPI\Client\Model\WTOrder[]
```

List the authenticated merchant's orders Newest first, each hydrated with its line items. Read-only receipts/status for Flow B.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WTOrder[]**](../Model/WTOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
