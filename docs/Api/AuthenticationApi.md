# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](AuthenticationApi.md#login) | **POST** /authentication/login | Login |
| [**loginStatus()**](AuthenticationApi.md#loginStatus) | **GET** /authentication/status/{token} | Retrieve session token status |
| [**logout()**](AuthenticationApi.md#logout) | **DELETE** /authentication/logout | Logout |
| [**register()**](AuthenticationApi.md#register) | **POST** /authentication/register | Register |


## `login()`

```php
login($wt_authentication_login_request): \OpenAPI\Client\Model\WTAuthenticationLoginResponse
```

Login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_authentication_login_request = new \OpenAPI\Client\Model\WTAuthenticationLoginRequest(); // \OpenAPI\Client\Model\WTAuthenticationLoginRequest

try {
    $result = $apiInstance->login($wt_authentication_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_authentication_login_request** | [**\OpenAPI\Client\Model\WTAuthenticationLoginRequest**](../Model/WTAuthenticationLoginRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTAuthenticationLoginResponse**](../Model/WTAuthenticationLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginStatus()`

```php
loginStatus($token): \OpenAPI\Client\Model\LoginStatus200Response
```

Retrieve session token status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->loginStatus($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LoginStatus200Response**](../Model/LoginStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout(): string
```

Logout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($wt_authentication_register): \OpenAPI\Client\Model\Employee
```

Register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_authentication_register = new \OpenAPI\Client\Model\WTAuthenticationRegister(); // \OpenAPI\Client\Model\WTAuthenticationRegister

try {
    $result = $apiInstance->register($wt_authentication_register);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->register: ', $e->getMessage(), PHP_EOL;
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
