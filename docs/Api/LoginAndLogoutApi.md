# OpenAPI\Client\LoginAndLogoutApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](LoginAndLogoutApi.md#login) | **POST** /authentication/login | Login |
| [**loginStatus()**](LoginAndLogoutApi.md#loginStatus) | **GET** /authentication/status/{token} | Retrieve status of session token |
| [**logout()**](LoginAndLogoutApi.md#logout) | **DELETE** /authentication/logout | Logout |


## `login()`

```php
login($wt_authentication_login_request): \OpenAPI\Client\Model\WTAuthenticationLoginResponse
```

Login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoginAndLogoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_authentication_login_request = new \OpenAPI\Client\Model\WTAuthenticationLoginRequest(); // \OpenAPI\Client\Model\WTAuthenticationLoginRequest

try {
    $result = $apiInstance->login($wt_authentication_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginAndLogoutApi->login: ', $e->getMessage(), PHP_EOL;
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

Retrieve status of session token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoginAndLogoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->loginStatus($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginAndLogoutApi->loginStatus: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\LoginAndLogoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginAndLogoutApi->logout: ', $e->getMessage(), PHP_EOL;
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
