# OpenAPI\Client\SystemApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRole()**](SystemApi.md#createRole) | **POST** /v2/system/roles | Create role |
| [**deleteRole()**](SystemApi.md#deleteRole) | **DELETE** /v2/system/roles/{roleID} | Delete role |
| [**fetchAuditLogOfRoles()**](SystemApi.md#fetchAuditLogOfRoles) | **GET** /v2/system/roles/auditLog | Fetch role&#39;s audit log |
| [**fetchEmployeesWithRole()**](SystemApi.md#fetchEmployeesWithRole) | **GET** /v2/system/roles/employees/{roleID} | Fetch employees with role |
| [**fetchWebpagesForRole()**](SystemApi.md#fetchWebpagesForRole) | **GET** /v2/system/roles/webpages/{roleID} | Fetch webpages for role |
| [**getPaymentPrefixes()**](SystemApi.md#getPaymentPrefixes) | **GET** /v2/system/prefixes | Get payment prefixes |
| [**loadRole()**](SystemApi.md#loadRole) | **GET** /v2/system/roles/{roleID} | Fetch role |
| [**saveRole()**](SystemApi.md#saveRole) | **PUT** /v2/system/roles/{roleID} | Update role |


## `createRole()`

```php
createRole($wt_system_role_create): \OpenAPI\Client\Model\Role
```

Create role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_system_role_create = new \OpenAPI\Client\Model\WTSystemRoleCreate(); // \OpenAPI\Client\Model\WTSystemRoleCreate

try {
    $result = $apiInstance->createRole($wt_system_role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_system_role_create** | [**\OpenAPI\Client\Model\WTSystemRoleCreate**](../Model/WTSystemRoleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRole()`

```php
deleteRole($role_id): bool
```

Delete role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->deleteRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

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

## `fetchAuditLogOfRoles()`

```php
fetchAuditLogOfRoles($start_date_time, $end_date_time): \OpenAPI\Client\Model\RoleAuditLog[]
```

Fetch role's audit log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->fetchAuditLogOfRoles($start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->fetchAuditLogOfRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\RoleAuditLog[]**](../Model/RoleAuditLog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEmployeesWithRole()`

```php
fetchEmployeesWithRole($role_id): \OpenAPI\Client\Model\Employee[]
```

Fetch employees with role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->fetchEmployeesWithRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->fetchEmployeesWithRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Employee[]**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWebpagesForRole()`

```php
fetchWebpagesForRole($role_id): \OpenAPI\Client\Model\Webpage[]
```

Fetch webpages for role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->fetchWebpagesForRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->fetchWebpagesForRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Webpage[]**](../Model/Webpage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentPrefixes()`

```php
getPaymentPrefixes(): mixed[]
```

Get payment prefixes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPaymentPrefixes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getPaymentPrefixes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `loadRole()`

```php
loadRole($role_id): \OpenAPI\Client\Model\WTRole
```

Fetch role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->loadRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->loadRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTRole**](../Model/WTRole.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveRole()`

```php
saveRole($role_id, $wt_system_role_create): \OpenAPI\Client\Model\Role
```

Update role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 'role_id_example'; // string
$wt_system_role_create = new \OpenAPI\Client\Model\WTSystemRoleCreate(); // \OpenAPI\Client\Model\WTSystemRoleCreate

try {
    $result = $apiInstance->saveRole($role_id, $wt_system_role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->saveRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |
| **wt_system_role_create** | [**\OpenAPI\Client\Model\WTSystemRoleCreate**](../Model/WTSystemRoleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
