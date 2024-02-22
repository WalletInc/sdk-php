# OpenAPI\Client\IntegratedTerminalsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivePOSMachine()**](IntegratedTerminalsApi.md#archivePOSMachine) | **DELETE** /v2/pos/machine/{id} | Archive POS machine |
| [**createPOSMachine()**](IntegratedTerminalsApi.md#createPOSMachine) | **POST** /v2/pos/machine | Create POS machine |
| [**fetchAllPOSMachines()**](IntegratedTerminalsApi.md#fetchAllPOSMachines) | **GET** /v2/pos/machine/all | Fetch all POS machines |
| [**restorePOSMachine()**](IntegratedTerminalsApi.md#restorePOSMachine) | **PATCH** /v2/pos/machine/{id} | Restore POS machine |
| [**updatePOSMachine()**](IntegratedTerminalsApi.md#updatePOSMachine) | **PUT** /v2/pos/machine/{id} | Update POS machine |


## `archivePOSMachine()`

```php
archivePOSMachine($id): \OpenAPI\Client\Model\WTPosMachine
```

Archive POS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegratedTerminalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archivePOSMachine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratedTerminalsApi->archivePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

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

Create POS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegratedTerminalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_pos_machine_create_params = new \OpenAPI\Client\Model\WTPosMachineCreateParams(); // \OpenAPI\Client\Model\WTPosMachineCreateParams

try {
    $result = $apiInstance->createPOSMachine($wt_pos_machine_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratedTerminalsApi->createPOSMachine: ', $e->getMessage(), PHP_EOL;
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

Fetch all POS machines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegratedTerminalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllPOSMachines($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratedTerminalsApi->fetchAllPOSMachines: ', $e->getMessage(), PHP_EOL;
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

Restore POS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegratedTerminalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restorePOSMachine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratedTerminalsApi->restorePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |

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

Update POS machine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegratedTerminalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_pos_machine_update_params = new \OpenAPI\Client\Model\WTPosMachineUpdateParams(); // \OpenAPI\Client\Model\WTPosMachineUpdateParams

try {
    $result = $apiInstance->updatePOSMachine($id, $wt_pos_machine_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratedTerminalsApi->updatePOSMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |
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
