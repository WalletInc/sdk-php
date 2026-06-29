# OpenAPI\Client\VirtualBusinessCardApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveVirtualBusinessCard()**](VirtualBusinessCardApi.md#archiveVirtualBusinessCard) | **DELETE** /v2/virtualBusinessCard/{id} | Archive Virtual Business Card |
| [**createVirtualBusinessCard()**](VirtualBusinessCardApi.md#createVirtualBusinessCard) | **POST** /v2/virtualBusinessCard | Create Virtual Business Card |
| [**fetchAllVirtualBusinessCards()**](VirtualBusinessCardApi.md#fetchAllVirtualBusinessCards) | **GET** /v2/virtualBusinessCard/all | Get all Virtual Business Cards |
| [**fetchVirtualBusinessCard()**](VirtualBusinessCardApi.md#fetchVirtualBusinessCard) | **GET** /v2/virtualBusinessCard/{id} | Get Virtual Business Card |
| [**fetchVirtualBusinessCardRequests()**](VirtualBusinessCardApi.md#fetchVirtualBusinessCardRequests) | **GET** /v2/virtualBusinessCard/requests/{id} | Get Virtual Business Card traffic |
| [**restoreVirtualBusinessCard()**](VirtualBusinessCardApi.md#restoreVirtualBusinessCard) | **PATCH** /v2/virtualBusinessCard/{id} | Restore Virtual Business Card |
| [**updateVirtualBusinessCard()**](VirtualBusinessCardApi.md#updateVirtualBusinessCard) | **PUT** /v2/virtualBusinessCard/{id} | Update Virtual Business Card |


## `archiveVirtualBusinessCard()`

```php
archiveVirtualBusinessCard($id): \OpenAPI\Client\Model\VirtualBusinessCard
```

Archive Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveVirtualBusinessCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->archiveVirtualBusinessCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualBusinessCard**](../Model/VirtualBusinessCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVirtualBusinessCard()`

```php
createVirtualBusinessCard($wt_virtual_business_card_create_params): \OpenAPI\Client\Model\VirtualBusinessCard
```

Create Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_virtual_business_card_create_params = new \OpenAPI\Client\Model\WTVirtualBusinessCardCreateParams(); // \OpenAPI\Client\Model\WTVirtualBusinessCardCreateParams

try {
    $result = $apiInstance->createVirtualBusinessCard($wt_virtual_business_card_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->createVirtualBusinessCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_virtual_business_card_create_params** | [**\OpenAPI\Client\Model\WTVirtualBusinessCardCreateParams**](../Model/WTVirtualBusinessCardCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualBusinessCard**](../Model/VirtualBusinessCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllVirtualBusinessCards()`

```php
fetchAllVirtualBusinessCards($is_archive_included): mixed
```

Get all Virtual Business Cards

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllVirtualBusinessCards($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->fetchAllVirtualBusinessCards: ', $e->getMessage(), PHP_EOL;
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

## `fetchVirtualBusinessCard()`

```php
fetchVirtualBusinessCard($id): \OpenAPI\Client\Model\VirtualBusinessCard
```

Get Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchVirtualBusinessCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->fetchVirtualBusinessCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualBusinessCard**](../Model/VirtualBusinessCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchVirtualBusinessCardRequests()`

```php
fetchVirtualBusinessCardRequests($id): \OpenAPI\Client\Model\WalletPageView[]
```

Get Virtual Business Card traffic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchVirtualBusinessCardRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->fetchVirtualBusinessCardRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WalletPageView[]**](../Model/WalletPageView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreVirtualBusinessCard()`

```php
restoreVirtualBusinessCard($id): \OpenAPI\Client\Model\VirtualBusinessCard
```

Restore Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreVirtualBusinessCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->restoreVirtualBusinessCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualBusinessCard**](../Model/VirtualBusinessCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVirtualBusinessCard()`

```php
updateVirtualBusinessCard($id, $wt_virtual_business_card_update_params): \OpenAPI\Client\Model\VirtualBusinessCard
```

Update Virtual Business Card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualBusinessCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_virtual_business_card_update_params = new \OpenAPI\Client\Model\WTVirtualBusinessCardUpdateParams(); // \OpenAPI\Client\Model\WTVirtualBusinessCardUpdateParams

try {
    $result = $apiInstance->updateVirtualBusinessCard($id, $wt_virtual_business_card_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBusinessCardApi->updateVirtualBusinessCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_virtual_business_card_update_params** | [**\OpenAPI\Client\Model\WTVirtualBusinessCardUpdateParams**](../Model/WTVirtualBusinessCardUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualBusinessCard**](../Model/VirtualBusinessCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
