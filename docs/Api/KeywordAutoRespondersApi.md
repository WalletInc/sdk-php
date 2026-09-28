# OpenAPI\Client\KeywordAutoRespondersApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveAutoResponder()**](KeywordAutoRespondersApi.md#archiveAutoResponder) | **POST** /autoresponders/archive/{autoResponderID} | Archive a keyword auto-responder |
| [**createAutoResponder()**](KeywordAutoRespondersApi.md#createAutoResponder) | **POST** /autoresponders/create | Create a keyword auto-responder |
| [**fetchAllAutoResponders()**](KeywordAutoRespondersApi.md#fetchAllAutoResponders) | **GET** /autoresponders/fetchAll | List keyword auto-responders |
| [**fetchAutoResponderHits()**](KeywordAutoRespondersApi.md#fetchAutoResponderHits) | **GET** /autoresponders/hits | List keyword auto-responder activity |
| [**restoreAutoResponder()**](KeywordAutoRespondersApi.md#restoreAutoResponder) | **POST** /autoresponders/restore/{autoResponderID} | Restore a keyword auto-responder |
| [**updateAutoResponder()**](KeywordAutoRespondersApi.md#updateAutoResponder) | **POST** /autoresponders/update | Update a keyword auto-responder |


## `archiveAutoResponder()`

```php
archiveAutoResponder($auto_responder_id): \OpenAPI\Client\Model\WTAutoResponder
```

Archive a keyword auto-responder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_responder_id = 'auto_responder_id_example'; // string

try {
    $result = $apiInstance->archiveAutoResponder($auto_responder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->archiveAutoResponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_responder_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponder**](../Model/WTAutoResponder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutoResponder()`

```php
createAutoResponder($wt_auto_responder_create_params): \OpenAPI\Client\Model\WTAutoResponder
```

Create a keyword auto-responder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_auto_responder_create_params = new \OpenAPI\Client\Model\WTAutoResponderCreateParams(); // \OpenAPI\Client\Model\WTAutoResponderCreateParams

try {
    $result = $apiInstance->createAutoResponder($wt_auto_responder_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->createAutoResponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_auto_responder_create_params** | [**\OpenAPI\Client\Model\WTAutoResponderCreateParams**](../Model/WTAutoResponderCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponder**](../Model/WTAutoResponder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllAutoResponders()`

```php
fetchAllAutoResponders($phone_number_id, $is_archive_included): \OpenAPI\Client\Model\WTAutoResponder[]
```

List keyword auto-responders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number_id = 'phone_number_id_example'; // string
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllAutoResponders($phone_number_id, $is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->fetchAllAutoResponders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**|  | [optional] |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponder[]**](../Model/WTAutoResponder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAutoResponderHits()`

```php
fetchAutoResponderHits($auto_responder_id, $limit, $offset): \OpenAPI\Client\Model\WTAutoResponderHit[]
```

List keyword auto-responder activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_responder_id = 'auto_responder_id_example'; // string
$limit = 56; // int | Maximum number of records to return
$offset = 56; // int | Number of records to skip

try {
    $result = $apiInstance->fetchAutoResponderHits($auto_responder_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->fetchAutoResponderHits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_responder_id** | **string**|  | [optional] |
| **limit** | **int**| Maximum number of records to return | [optional] |
| **offset** | **int**| Number of records to skip | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponderHit[]**](../Model/WTAutoResponderHit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreAutoResponder()`

```php
restoreAutoResponder($auto_responder_id): \OpenAPI\Client\Model\WTAutoResponder
```

Restore a keyword auto-responder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_responder_id = 'auto_responder_id_example'; // string

try {
    $result = $apiInstance->restoreAutoResponder($auto_responder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->restoreAutoResponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_responder_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponder**](../Model/WTAutoResponder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoResponder()`

```php
updateAutoResponder($wt_auto_responder_update_params): \OpenAPI\Client\Model\WTAutoResponder
```

Update a keyword auto-responder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\KeywordAutoRespondersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_auto_responder_update_params = new \OpenAPI\Client\Model\WTAutoResponderUpdateParams(); // \OpenAPI\Client\Model\WTAutoResponderUpdateParams

try {
    $result = $apiInstance->updateAutoResponder($wt_auto_responder_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordAutoRespondersApi->updateAutoResponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_auto_responder_update_params** | [**\OpenAPI\Client\Model\WTAutoResponderUpdateParams**](../Model/WTAutoResponderUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTAutoResponder**](../Model/WTAutoResponder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
