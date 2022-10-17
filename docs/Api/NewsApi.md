# OpenAPI\Client\NewsApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveNewsArticle()**](NewsApi.md#archiveNewsArticle) | **DELETE** /v2/news/{id} | Archive news article
[**createNewsArticle()**](NewsApi.md#createNewsArticle) | **POST** /v2/news | Create news article
[**fetchAllNewsArticles()**](NewsApi.md#fetchAllNewsArticles) | **GET** /v2/news/all | Fetch all news articles
[**restoreNewsArticle()**](NewsApi.md#restoreNewsArticle) | **PATCH** /v2/news/{id} | Restore news article
[**updateNewsArticle()**](NewsApi.md#updateNewsArticle) | **PUT** /v2/news/{id} | Update news article


## `archiveNewsArticle()`

```php
archiveNewsArticle($id): \OpenAPI\Client\Model\NewsArticle
```

Archive news article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->archiveNewsArticle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->archiveNewsArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewsArticle**](../Model/NewsArticle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewsArticle()`

```php
createNewsArticle($wt_news_article_create_params): \OpenAPI\Client\Model\NewsArticle
```

Create news article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_news_article_create_params = new \OpenAPI\Client\Model\WTNewsArticleCreateParams(); // \OpenAPI\Client\Model\WTNewsArticleCreateParams

try {
    $result = $apiInstance->createNewsArticle($wt_news_article_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->createNewsArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_news_article_create_params** | [**\OpenAPI\Client\Model\WTNewsArticleCreateParams**](../Model/WTNewsArticleCreateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewsArticle**](../Model/NewsArticle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllNewsArticles()`

```php
fetchAllNewsArticles($is_archive_included): mixed
```

Fetch all news articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchAllNewsArticles($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->fetchAllNewsArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

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

## `restoreNewsArticle()`

```php
restoreNewsArticle($id): \OpenAPI\Client\Model\NewsArticle
```

Restore news article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed

try {
    $result = $apiInstance->restoreNewsArticle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->restoreNewsArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewsArticle**](../Model/NewsArticle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNewsArticle()`

```php
updateNewsArticle($id, $wt_news_article_update_params): \OpenAPI\Client\Model\NewsArticle
```

Update news article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$wt_news_article_update_params = new \OpenAPI\Client\Model\WTNewsArticleUpdateParams(); // \OpenAPI\Client\Model\WTNewsArticleUpdateParams

try {
    $result = $apiInstance->updateNewsArticle($id, $wt_news_article_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->updateNewsArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**mixed**](../Model/.md)|  |
 **wt_news_article_update_params** | [**\OpenAPI\Client\Model\WTNewsArticleUpdateParams**](../Model/WTNewsArticleUpdateParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewsArticle**](../Model/NewsArticle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
