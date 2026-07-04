# OpenAPI\Client\FilesDocumentsApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDocument()**](FilesDocumentsApi.md#createDocument) | **POST** /v2/employee/document | Create document |
| [**createFile()**](FilesDocumentsApi.md#createFile) | **POST** /v2/employee/file/create | Create file |
| [**createMediaFile()**](FilesDocumentsApi.md#createMediaFile) | **POST** /v2/employee/mediaFile | Create media file |
| [**deleteDocument()**](FilesDocumentsApi.md#deleteDocument) | **DELETE** /v2/employee/document/{documentID} | Delete document |
| [**deleteMediaFile()**](FilesDocumentsApi.md#deleteMediaFile) | **DELETE** /v2/employee/mediaFile/{mediaFileID} | Delete media file |
| [**downloadFile()**](FilesDocumentsApi.md#downloadFile) | **GET** /v2/employee/file/download/{fileID} | Get URL for file download |
| [**failedImport()**](FilesDocumentsApi.md#failedImport) | **GET** /v2/employee/file/imports/failed/{fileID} | Get URL to download a failed import |
| [**fetchDocuments()**](FilesDocumentsApi.md#fetchDocuments) | **GET** /v2/employee/documents/all | Get all documents |
| [**fetchMediaFiles()**](FilesDocumentsApi.md#fetchMediaFiles) | **GET** /v2/employee/mediaFiles/all | Get all media files |
| [**presignFile()**](FilesDocumentsApi.md#presignFile) | **POST** /v2/employee/file/presign | Presign file for upload |


## `createDocument()`

```php
createDocument($wt_employee_create_document): \OpenAPI\Client\Model\Document
```

Create document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_document = new \OpenAPI\Client\Model\WTEmployeeCreateDocument(); // \OpenAPI\Client\Model\WTEmployeeCreateDocument

try {
    $result = $apiInstance->createDocument($wt_employee_create_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_create_document** | [**\OpenAPI\Client\Model\WTEmployeeCreateDocument**](../Model/WTEmployeeCreateDocument.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFile()`

```php
createFile($wt_employee_file_create): \OpenAPI\Client\Model\CreateFile200Response
```

Create file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_file_create = new \OpenAPI\Client\Model\WTEmployeeFileCreate(); // \OpenAPI\Client\Model\WTEmployeeFileCreate

try {
    $result = $apiInstance->createFile($wt_employee_file_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_file_create** | [**\OpenAPI\Client\Model\WTEmployeeFileCreate**](../Model/WTEmployeeFileCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateFile200Response**](../Model/CreateFile200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMediaFile()`

```php
createMediaFile($wt_employee_create_media_file): \OpenAPI\Client\Model\MediaFile
```

Create media file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_media_file = new \OpenAPI\Client\Model\WTEmployeeCreateMediaFile(); // \OpenAPI\Client\Model\WTEmployeeCreateMediaFile

try {
    $result = $apiInstance->createMediaFile($wt_employee_create_media_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->createMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_create_media_file** | [**\OpenAPI\Client\Model\WTEmployeeCreateMediaFile**](../Model/WTEmployeeCreateMediaFile.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MediaFile**](../Model/MediaFile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($document_id): \OpenAPI\Client\Model\Document
```

Delete document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->deleteDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMediaFile()`

```php
deleteMediaFile($media_file_id): \OpenAPI\Client\Model\MediaFile
```

Delete media file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$media_file_id = 'media_file_id_example'; // string

try {
    $result = $apiInstance->deleteMediaFile($media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->deleteMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_file_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MediaFile**](../Model/MediaFile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFile()`

```php
downloadFile($file_id): string
```

Get URL for file download

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->downloadFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

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

## `failedImport()`

```php
failedImport($file_id): string
```

Get URL to download a failed import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->failedImport($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->failedImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

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

## `fetchDocuments()`

```php
fetchDocuments($folder): \OpenAPI\Client\Model\Document[]
```

Get all documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = 'folder_example'; // string

try {
    $result = $apiInstance->fetchDocuments($folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->fetchDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMediaFiles()`

```php
fetchMediaFiles($folder): \OpenAPI\Client\Model\MediaFile[]
```

Get all media files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = 'folder_example'; // string

try {
    $result = $apiInstance->fetchMediaFiles($folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->fetchMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MediaFile[]**](../Model/MediaFile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `presignFile()`

```php
presignFile($wt_employee_s3_file_presign): \OpenAPI\Client\Model\PresignedPost
```

Presign file for upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilesDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_s3_file_presign = new \OpenAPI\Client\Model\WTEmployeeS3FilePresign(); // \OpenAPI\Client\Model\WTEmployeeS3FilePresign

try {
    $result = $apiInstance->presignFile($wt_employee_s3_file_presign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesDocumentsApi->presignFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_employee_s3_file_presign** | [**\OpenAPI\Client\Model\WTEmployeeS3FilePresign**](../Model/WTEmployeeS3FilePresign.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PresignedPost**](../Model/PresignedPost.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
