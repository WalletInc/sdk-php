# OpenAPI\Client\RelatedItemsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchRelatedItemUsage()**](RelatedItemsApi.md#fetchRelatedItemUsage) | **GET** /relatedItems/usedBy/{type}/{id} | List where an item is attached |
| [**fetchRelatedItems()**](RelatedItemsApi.md#fetchRelatedItems) | **GET** /relatedItems/{type}/{id} | Get an item&#39;s related items |
| [**saveRelatedItems()**](RelatedItemsApi.md#saveRelatedItems) | **PUT** /relatedItems/{type}/{id} | Set an item&#39;s related items |
| [**searchRelatedItems()**](RelatedItemsApi.md#searchRelatedItems) | **GET** /relatedItems/search | Search items to attach |


## `fetchRelatedItemUsage()`

```php
fetchRelatedItemUsage($type, $id): \OpenAPI\Client\Model\WTRelatedItemUsage[]
```

List where an item is attached

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RelatedItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \OpenAPI\Client\Model\WTRelatedItemType(); // WTRelatedItemType
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchRelatedItemUsage($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelatedItemsApi->fetchRelatedItemUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**WTRelatedItemType**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTRelatedItemUsage[]**](../Model/WTRelatedItemUsage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchRelatedItems()`

```php
fetchRelatedItems($type, $id): \OpenAPI\Client\Model\WTRelatedItems
```

Get an item's related items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RelatedItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \OpenAPI\Client\Model\WTRelatedItemSourceType(); // WTRelatedItemSourceType
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchRelatedItems($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelatedItemsApi->fetchRelatedItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**WTRelatedItemSourceType**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTRelatedItems**](../Model/WTRelatedItems.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveRelatedItems()`

```php
saveRelatedItems($type, $id, $wt_related_items_update): \OpenAPI\Client\Model\WTRelatedItems
```

Set an item's related items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RelatedItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \OpenAPI\Client\Model\WTRelatedItemSourceType(); // WTRelatedItemSourceType
$id = 'id_example'; // string
$wt_related_items_update = new \OpenAPI\Client\Model\WTRelatedItemsUpdate(); // \OpenAPI\Client\Model\WTRelatedItemsUpdate

try {
    $result = $apiInstance->saveRelatedItems($type, $id, $wt_related_items_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelatedItemsApi->saveRelatedItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**WTRelatedItemSourceType**](../Model/.md)|  | |
| **id** | **string**|  | |
| **wt_related_items_update** | [**\OpenAPI\Client\Model\WTRelatedItemsUpdate**](../Model/WTRelatedItemsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTRelatedItems**](../Model/WTRelatedItems.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRelatedItems()`

```php
searchRelatedItems($q, $type, $page): \OpenAPI\Client\Model\WTRelatedItemSearchResults
```

Search items to attach

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RelatedItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string
$type = new \OpenAPI\Client\Model\WTRelatedItemType(); // WTRelatedItemType
$page = 3.4; // float

try {
    $result = $apiInstance->searchRelatedItems($q, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelatedItemsApi->searchRelatedItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **type** | [**WTRelatedItemType**](../Model/.md)|  | [optional] |
| **page** | **float**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTRelatedItemSearchResults**](../Model/WTRelatedItemSearchResults.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
