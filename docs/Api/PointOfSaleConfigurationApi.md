# OpenAPI\Client\PointOfSaleConfigurationApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivePOSMachine()**](PointOfSaleConfigurationApi.md#archivePOSMachine) | **DELETE** /v2/pos/machine/{id} | Archive PoS machine |
| [**createPOSMachine()**](PointOfSaleConfigurationApi.md#createPOSMachine) | **POST** /v2/pos/machine | Create PoS machine |
| [**fetchAllPOSMachines()**](PointOfSaleConfigurationApi.md#fetchAllPOSMachines) | **GET** /v2/pos/machine/all | Get all PoS machines |
| [**restorePOSMachine()**](PointOfSaleConfigurationApi.md#restorePOSMachine) | **PATCH** /v2/pos/machine/{id} | Restore PoS machine |
| [**updatePOSMachine()**](PointOfSaleConfigurationApi.md#updatePOSMachine) | **PUT** /v2/pos/machine/{id} | Update PoS machine |


## `archivePOSMachine()`

```php
archivePOSMachine($id): \OpenAPI\Client\Model\WTPosMachine
```

Archive PoS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSaleConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archivePOSMachine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSaleConfigurationApi->archivePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTPosMachine**](../Model/WTPosMachine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPOSMachine()`

```php
createPOSMachine($wt_pos_machine_create_params): \OpenAPI\Client\Model\WTPosMachine
```

Create PoS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSaleConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_pos_machine_create_params = new \OpenAPI\Client\Model\WTPosMachineCreateParams(); // \OpenAPI\Client\Model\WTPosMachineCreateParams

try {
    $result = $apiInstance->createPOSMachine($wt_pos_machine_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSaleConfigurationApi->createPOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_pos_machine_create_params** | [**\OpenAPI\Client\Model\WTPosMachineCreateParams**](../Model/WTPosMachineCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTPosMachine**](../Model/WTPosMachine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllPOSMachines()`

```php
fetchAllPOSMachines($is_archive_included): mixed[]
```

Get all PoS machines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSaleConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPOSMachines($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSaleConfigurationApi->fetchAllPOSMachines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restorePOSMachine()`

```php
restorePOSMachine($id): \OpenAPI\Client\Model\WTPosMachine
```

Restore PoS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSaleConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restorePOSMachine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSaleConfigurationApi->restorePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTPosMachine**](../Model/WTPosMachine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePOSMachine()`

```php
updatePOSMachine($id, $wt_pos_machine_update_params): \OpenAPI\Client\Model\WTPosMachine
```

Update PoS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSaleConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_pos_machine_update_params = new \OpenAPI\Client\Model\WTPosMachineUpdateParams(); // \OpenAPI\Client\Model\WTPosMachineUpdateParams

try {
    $result = $apiInstance->updatePOSMachine($id, $wt_pos_machine_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSaleConfigurationApi->updatePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_pos_machine_update_params** | [**\OpenAPI\Client\Model\WTPosMachineUpdateParams**](../Model/WTPosMachineUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTPosMachine**](../Model/WTPosMachine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
