# OpenAPI\Client\EmployeesApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPeerToRoles()**](EmployeesApi.md#addPeerToRoles) | **POST** /v2/employee/roles/peer/{userID} | Add peer to roles |
| [**createEmployeePeer()**](EmployeesApi.md#createEmployeePeer) | **POST** /v2/employee/peer | Create employee peer |
| [**fetchMerchant()**](EmployeesApi.md#fetchMerchant) | **GET** /v2/employee/merchant | Create employee alert |
| [**fetchMessages()**](EmployeesApi.md#fetchMessages) | **GET** /v2/employee/messages/all | Get all messages |
| [**fetchPeerActivity()**](EmployeesApi.md#fetchPeerActivity) | **GET** /v2/employee/peer/activity/{employeeID} | Get peer activity |
| [**fetchPeersPermissions()**](EmployeesApi.md#fetchPeersPermissions) | **GET** /v2/employee/peer/permissions/{userID} | Get peer permissions |
| [**fetchProfileInfo()**](EmployeesApi.md#fetchProfileInfo) | **GET** /v2/employee | Get employee info |
| [**loadWebpagesOfEmployee()**](EmployeesApi.md#loadWebpagesOfEmployee) | **GET** /v2/employee/webpages/all | Get employee&#39;s permissions |
| [**modifyPeersRoles()**](EmployeesApi.md#modifyPeersRoles) | **PUT** /v2/employee/peer/permissions/{userID} | Modify peer&#39;s roles |
| [**removePeerFromAllRoles()**](EmployeesApi.md#removePeerFromAllRoles) | **DELETE** /v2/employee/peer/permissions/{userID} | Remove peer from all roles |
| [**setAlertsRead()**](EmployeesApi.md#setAlertsRead) | **PATCH** /v2/employee/alerts | Mark alerts as read |
| [**setMessagesRead()**](EmployeesApi.md#setMessagesRead) | **PATCH** /v2/employee/messages | Mark messages as read |
| [**setProfilePicture()**](EmployeesApi.md#setProfilePicture) | **PUT** /v2/employee/profile/picture | Set profile picture |
| [**updateEmailNotificationPreference()**](EmployeesApi.md#updateEmailNotificationPreference) | **PUT** /v2/employee/emailNotificationPreference | Changes the employee&#39;s email notification preference to enabled or disabled |
| [**updateEmployeePeer()**](EmployeesApi.md#updateEmployeePeer) | **PUT** /v2/employee/peer/{userID} | Update peer |


## `addPeerToRoles()`

```php
addPeerToRoles($user_id, $wt_employee_peer_roles): string
```

Add peer to roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$wt_employee_peer_roles = new \OpenAPI\Client\Model\WTEmployeePeerRoles(); // \OpenAPI\Client\Model\WTEmployeePeerRoles

try {
    $result = $apiInstance->addPeerToRoles($user_id, $wt_employee_peer_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->addPeerToRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **wt_employee_peer_roles** | [**\OpenAPI\Client\Model\WTEmployeePeerRoles**](../Model/WTEmployeePeerRoles.md)|  | |

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

## `createEmployeePeer()`

```php
createEmployeePeer($wt_employee_create): \OpenAPI\Client\Model\Employee
```

Create employee peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create = new \OpenAPI\Client\Model\WTEmployeeCreate(); // \OpenAPI\Client\Model\WTEmployeeCreate

try {
    $result = $apiInstance->createEmployeePeer($wt_employee_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createEmployeePeer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_create** | [**\OpenAPI\Client\Model\WTEmployeeCreate**](../Model/WTEmployeeCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMerchant()`

```php
fetchMerchant(): mixed
```

Create employee alert

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMerchant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchMessages()`

```php
fetchMessages(): \OpenAPI\Client\Model\Message[]
```

Get all messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Message[]**](../Model/Message.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPeerActivity()`

```php
fetchPeerActivity($employee_id): \OpenAPI\Client\Model\EmployeeActivityLog[]
```

Get peer activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string

try {
    $result = $apiInstance->fetchPeerActivity($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchPeerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmployeeActivityLog[]**](../Model/EmployeeActivityLog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPeersPermissions()`

```php
fetchPeersPermissions($user_id): mixed[]
```

Get peer permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->fetchPeersPermissions($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchPeersPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

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

## `fetchProfileInfo()`

```php
fetchProfileInfo(): \OpenAPI\Client\Model\Employee
```

Get employee info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchProfileInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchProfileInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadWebpagesOfEmployee()`

```php
loadWebpagesOfEmployee(): \OpenAPI\Client\Model\Webpage[]
```

Get employee's permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loadWebpagesOfEmployee();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->loadWebpagesOfEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `modifyPeersRoles()`

```php
modifyPeersRoles($user_id, $wt_employee_peer_roles): mixed[]
```

Modify peer's roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$wt_employee_peer_roles = new \OpenAPI\Client\Model\WTEmployeePeerRoles(); // \OpenAPI\Client\Model\WTEmployeePeerRoles

try {
    $result = $apiInstance->modifyPeersRoles($user_id, $wt_employee_peer_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->modifyPeersRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **wt_employee_peer_roles** | [**\OpenAPI\Client\Model\WTEmployeePeerRoles**](../Model/WTEmployeePeerRoles.md)|  | |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePeerFromAllRoles()`

```php
removePeerFromAllRoles($user_id): bool
```

Remove peer from all roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->removePeerFromAllRoles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->removePeerFromAllRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

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

## `setAlertsRead()`

```php
setAlertsRead(): bool
```

Mark alerts as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setAlertsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setAlertsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `setMessagesRead()`

```php
setMessagesRead(): bool
```

Mark messages as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setMessagesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setMessagesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `setProfilePicture()`

```php
setProfilePicture($wt_employee_create_media_file): string
```

Set profile picture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_media_file = new \OpenAPI\Client\Model\WTEmployeeCreateMediaFile(); // \OpenAPI\Client\Model\WTEmployeeCreateMediaFile

try {
    $result = $apiInstance->setProfilePicture($wt_employee_create_media_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setProfilePicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_create_media_file** | [**\OpenAPI\Client\Model\WTEmployeeCreateMediaFile**](../Model/WTEmployeeCreateMediaFile.md)|  | |

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

## `updateEmailNotificationPreference()`

```php
updateEmailNotificationPreference($update_email_notification_preference_request): \OpenAPI\Client\Model\Employee
```

Changes the employee's email notification preference to enabled or disabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_email_notification_preference_request = new \OpenAPI\Client\Model\UpdateEmailNotificationPreferenceRequest(); // \OpenAPI\Client\Model\UpdateEmailNotificationPreferenceRequest

try {
    $result = $apiInstance->updateEmailNotificationPreference($update_email_notification_preference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateEmailNotificationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_email_notification_preference_request** | [**\OpenAPI\Client\Model\UpdateEmailNotificationPreferenceRequest**](../Model/UpdateEmailNotificationPreferenceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeePeer()`

```php
updateEmployeePeer($user_id, $wt_employee_update): \OpenAPI\Client\Model\Employee
```

Update peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$wt_employee_update = new \OpenAPI\Client\Model\WTEmployeeUpdate(); // \OpenAPI\Client\Model\WTEmployeeUpdate

try {
    $result = $apiInstance->updateEmployeePeer($user_id, $wt_employee_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateEmployeePeer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **wt_employee_update** | [**\OpenAPI\Client\Model\WTEmployeeUpdate**](../Model/WTEmployeeUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
