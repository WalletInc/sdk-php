# OpenAPI\Client\OpenAIApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveAssistant()**](OpenAIApi.md#archiveAssistant) | **DELETE** /v2/interop/openai/assistant/{id} | Archive Assistant |
| [**archiveThread()**](OpenAIApi.md#archiveThread) | **DELETE** /v2/interop/openai/thread/{id} | Archive Thread |
| [**archiveVectorStore()**](OpenAIApi.md#archiveVectorStore) | **DELETE** /v2/interop/openai/vectorStore/{id} | Archive VectorStore |
| [**createAssistant()**](OpenAIApi.md#createAssistant) | **POST** /v2/interop/openai/assistant | Create Assistant |
| [**createRunOnThread()**](OpenAIApi.md#createRunOnThread) | **POST** /v2/interop/openai/thread/{id}/run/create | Create Run on Thread |
| [**createThread()**](OpenAIApi.md#createThread) | **POST** /v2/interop/openai/thread | Create Thread |
| [**createThreadMessage()**](OpenAIApi.md#createThreadMessage) | **POST** /v2/interop/openai/thread/{id}/message/create | Add Message to Thread |
| [**createVectorStore()**](OpenAIApi.md#createVectorStore) | **POST** /v2/interop/openai/vectorStore | Create VectorStore |
| [**fetchAllAssistants()**](OpenAIApi.md#fetchAllAssistants) | **GET** /v2/interop/openai/assistant/all | Get all Assistants |
| [**fetchAllThreads()**](OpenAIApi.md#fetchAllThreads) | **GET** /v2/interop/openai/thread/all | Get all Threads |
| [**fetchAllVectorStores()**](OpenAIApi.md#fetchAllVectorStores) | **GET** /v2/interop/openai/vectorStore/all | Get all VectorStores |
| [**fetchAssistant()**](OpenAIApi.md#fetchAssistant) | **GET** /v2/interop/openai/assistant/{id} | Get Assistant |
| [**fetchThreadMessages()**](OpenAIApi.md#fetchThreadMessages) | **GET** /v2/interop/openai/thread/{id}/messages | Get Thread&#39;s Messages |
| [**restoreAssistant()**](OpenAIApi.md#restoreAssistant) | **PATCH** /v2/interop/openai/assistant/{id} | Restore Assistant |
| [**restoreThread()**](OpenAIApi.md#restoreThread) | **PATCH** /v2/interop/openai/thread/{id} | Restore Thread |
| [**restoreVectorStore()**](OpenAIApi.md#restoreVectorStore) | **PATCH** /v2/interop/openai/vectorStore/{id} | Restore VectorStore |
| [**updateAssistant()**](OpenAIApi.md#updateAssistant) | **PUT** /v2/interop/openai/assistant/{id} | Update Assistant |
| [**updateThread()**](OpenAIApi.md#updateThread) | **PUT** /v2/interop/openai/thread/{id} | Update Thread |
| [**updateVectorStore()**](OpenAIApi.md#updateVectorStore) | **PUT** /v2/interop/openai/vectorStore/{id} | Update VectorStore |


## `archiveAssistant()`

```php
archiveAssistant($id): \OpenAPI\Client\Model\Assistant
```

Archive Assistant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveAssistant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->archiveAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Assistant**](../Model/Assistant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveThread()`

```php
archiveThread($id): \OpenAPI\Client\Model\Thread
```

Archive Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveThread($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->archiveThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Thread**](../Model/Thread.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveVectorStore()`

```php
archiveVectorStore($id): \OpenAPI\Client\Model\VectorStore
```

Archive VectorStore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveVectorStore($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->archiveVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VectorStore**](../Model/VectorStore.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssistant()`

```php
createAssistant($oai_assistant_update_params_create_params): \OpenAPI\Client\Model\Assistant
```

Create Assistant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oai_assistant_update_params_create_params = new \OpenAPI\Client\Model\OAIAssistantUpdateParamsCreateParams(); // \OpenAPI\Client\Model\OAIAssistantUpdateParamsCreateParams

try {
    $result = $apiInstance->createAssistant($oai_assistant_update_params_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->createAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oai_assistant_update_params_create_params** | [**\OpenAPI\Client\Model\OAIAssistantUpdateParamsCreateParams**](../Model/OAIAssistantUpdateParamsCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Assistant**](../Model/Assistant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRunOnThread()`

```php
createRunOnThread($id, $create_run_on_thread_request)
```

Create Run on Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$create_run_on_thread_request = new \OpenAPI\Client\Model\CreateRunOnThreadRequest(); // \OpenAPI\Client\Model\CreateRunOnThreadRequest

try {
    $apiInstance->createRunOnThread($id, $create_run_on_thread_request);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->createRunOnThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **create_run_on_thread_request** | [**\OpenAPI\Client\Model\CreateRunOnThreadRequest**](../Model/CreateRunOnThreadRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createThread()`

```php
createThread($request_body): \OpenAPI\Client\Model\Thread
```

Create Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createThread($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->createThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Thread**](../Model/Thread.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createThreadMessage()`

```php
createThreadMessage($id, $create_run_on_thread_request)
```

Add Message to Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$create_run_on_thread_request = new \OpenAPI\Client\Model\CreateRunOnThreadRequest(); // \OpenAPI\Client\Model\CreateRunOnThreadRequest

try {
    $apiInstance->createThreadMessage($id, $create_run_on_thread_request);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->createThreadMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **create_run_on_thread_request** | [**\OpenAPI\Client\Model\CreateRunOnThreadRequest**](../Model/CreateRunOnThreadRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVectorStore()`

```php
createVectorStore($request_body): \OpenAPI\Client\Model\VectorStore
```

Create VectorStore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createVectorStore($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->createVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VectorStore**](../Model/VectorStore.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllAssistants()`

```php
fetchAllAssistants($is_archive_included): mixed
```

Get all Assistants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllAssistants($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->fetchAllAssistants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

## `fetchAllThreads()`

```php
fetchAllThreads($is_archive_included): mixed
```

Get all Threads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllThreads($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->fetchAllThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

## `fetchAllVectorStores()`

```php
fetchAllVectorStores($is_archive_included): mixed
```

Get all VectorStores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllVectorStores($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->fetchAllVectorStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

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

## `fetchAssistant()`

```php
fetchAssistant($id): \OpenAPI\Client\Model\Assistant
```

Get Assistant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchAssistant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->fetchAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Assistant**](../Model/Assistant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchThreadMessages()`

```php
fetchThreadMessages($id): \OpenAPI\Client\Model\Message[]
```

Get Thread's Messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchThreadMessages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->fetchThreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `restoreAssistant()`

```php
restoreAssistant($id): \OpenAPI\Client\Model\Assistant
```

Restore Assistant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreAssistant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->restoreAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Assistant**](../Model/Assistant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreThread()`

```php
restoreThread($id): \OpenAPI\Client\Model\Thread
```

Restore Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreThread($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->restoreThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Thread**](../Model/Thread.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreVectorStore()`

```php
restoreVectorStore($id): \OpenAPI\Client\Model\VectorStore
```

Restore VectorStore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreVectorStore($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->restoreVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VectorStore**](../Model/VectorStore.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssistant()`

```php
updateAssistant($id, $oai_assistant_update_params): \OpenAPI\Client\Model\Assistant
```

Update Assistant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$oai_assistant_update_params = new \OpenAPI\Client\Model\OAIAssistantUpdateParams(); // \OpenAPI\Client\Model\OAIAssistantUpdateParams

try {
    $result = $apiInstance->updateAssistant($id, $oai_assistant_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->updateAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **oai_assistant_update_params** | [**\OpenAPI\Client\Model\OAIAssistantUpdateParams**](../Model/OAIAssistantUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Assistant**](../Model/Assistant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateThread()`

```php
updateThread($id, $request_body): \OpenAPI\Client\Model\Thread
```

Update Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->updateThread($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->updateThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Thread**](../Model/Thread.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVectorStore()`

```php
updateVectorStore($id, $request_body): \OpenAPI\Client\Model\VectorStore
```

Update VectorStore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->updateVectorStore($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAIApi->updateVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VectorStore**](../Model/VectorStore.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
