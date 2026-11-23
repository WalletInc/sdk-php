# OpenAPI\Client\HelpDeskApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchHelpDeskRequests()**](HelpDeskApi.md#fetchHelpDeskRequests) | **GET** /v2/merchant/helpDeskRequests/{phoneNumberID} | Get help desk requests |
| [**sendHelpDeskResponse()**](HelpDeskApi.md#sendHelpDeskResponse) | **POST** /v2/employee/helpDesk/response | Send help desk response |
| [**setHelpDeskRequestResolved()**](HelpDeskApi.md#setHelpDeskRequestResolved) | **PATCH** /v2/employee/helpDesk/request/{helpDeskRequestID} | Resolve help desk request |


## `fetchHelpDeskRequests()`

```php
fetchHelpDeskRequests($phone_number_id, $is_resolved): \OpenAPI\Client\Model\HelpDeskRequest[]
```

Get help desk requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HelpDeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string
$is_resolved = True; // bool

try {
    $result = $apiInstance->fetchHelpDeskRequests($phone_number_id, $is_resolved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpDeskApi->fetchHelpDeskRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | |
| **is_resolved** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelpDeskRequest[]**](../Model/HelpDeskRequest.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendHelpDeskResponse()`

```php
sendHelpDeskResponse($wt_employee_send_help_desk_response): \OpenAPI\Client\Model\OutboundSMS
```

Send help desk response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HelpDeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wt_employee_send_help_desk_response = new \OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse(); // \OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse

try {
    $result = $apiInstance->sendHelpDeskResponse($wt_employee_send_help_desk_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpDeskApi->sendHelpDeskResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_send_help_desk_response** | [**\OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse**](../Model/WTEmployeeSendHelpDeskResponse.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OutboundSMS**](../Model/OutboundSMS.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setHelpDeskRequestResolved()`

```php
setHelpDeskRequestResolved($help_desk_request_id): \OpenAPI\Client\Model\HelpDeskRequest
```

Resolve help desk request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HelpDeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$help_desk_request_id = 'help_desk_request_id_example'; // string

try {
    $result = $apiInstance->setHelpDeskRequestResolved($help_desk_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpDeskApi->setHelpDeskRequestResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **help_desk_request_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelpDeskRequest**](../Model/HelpDeskRequest.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
