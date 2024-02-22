# OpenAPI\Client\EmployeeAccessApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**register()**](EmployeeAccessApi.md#register) | **POST** /authentication/register | Register |


## `register()`

```php
register($wt_authentication_register): \OpenAPI\Client\Model\Employee
```

Register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_authentication_register = new \OpenAPI\Client\Model\WTAuthenticationRegister(); // \OpenAPI\Client\Model\WTAuthenticationRegister

try {
    $result = $apiInstance->register($wt_authentication_register);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAccessApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_authentication_register** | [**\OpenAPI\Client\Model\WTAuthenticationRegister**](../Model/WTAuthenticationRegister.md)|  | |

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
