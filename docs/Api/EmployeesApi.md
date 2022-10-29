# OpenAPI\Client\EmployeesApi

All URIs are relative to https://api.wall.et.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPeerToRoles()**](EmployeesApi.md#addPeerToRoles) | **POST** /v2/employee/roles/peer/{userID} | Add peer to roles
[**createAlert()**](EmployeesApi.md#createAlert) | **POST** /v2/employee/alert | Create employee alert
[**createDocument()**](EmployeesApi.md#createDocument) | **POST** /v2/employee/document | Create document
[**createEmployeePeer()**](EmployeesApi.md#createEmployeePeer) | **POST** /v2/employee/peer | Create employee peer
[**createFile()**](EmployeesApi.md#createFile) | **POST** /v2/employee/file/create | Create file
[**createMediaFile()**](EmployeesApi.md#createMediaFile) | **POST** /v2/employee/mediaFile | Create media file
[**createStaticVoucherCampaignsGroup()**](EmployeesApi.md#createStaticVoucherCampaignsGroup) | **POST** /v2/employee/staticVoucherCampaignsGroup | Create static voucher campaign group
[**deleteDocument()**](EmployeesApi.md#deleteDocument) | **DELETE** /v2/employee/document/{documentID} | Delete document
[**deleteMediaFile()**](EmployeesApi.md#deleteMediaFile) | **DELETE** /v2/employee/mediaFile/{mediaFileID} | Delete media file
[**downloadFile()**](EmployeesApi.md#downloadFile) | **GET** /v2/employee/file/download/{fileID} | Fetch URL for file download
[**exportClubMembers()**](EmployeesApi.md#exportClubMembers) | **PUT** /v2/employee/export/members | Export club members
[**exportMerchantCredits()**](EmployeesApi.md#exportMerchantCredits) | **PUT** /v2/employee/export/merchantCredits | Export merchant credits
[**exportStaticVoucherCampaign()**](EmployeesApi.md#exportStaticVoucherCampaign) | **PUT** /v2/employee/export/staticVoucherCampaign/{campaignID} | Export static voucher campaign
[**failedImport()**](EmployeesApi.md#failedImport) | **GET** /v2/employee/file/imports/failed/{fileID} | Fetch URL to download a failed import
[**fetchDocuments()**](EmployeesApi.md#fetchDocuments) | **GET** /v2/employee/documents/all | Fetch all documents
[**fetchDynamicVouchers()**](EmployeesApi.md#fetchDynamicVouchers) | **GET** /v2/employee/dynamicVouchers/all | Fetch all dynamic vouchers
[**fetchEmployeeStaticVoucherCampaignGroups()**](EmployeesApi.md#fetchEmployeeStaticVoucherCampaignGroups) | **GET** /v2/employee/staticVoucherCampaignGroups/all | Fetch static voucher campaign groups
[**fetchEmployeeStaticVoucherCampaigns()**](EmployeesApi.md#fetchEmployeeStaticVoucherCampaigns) | **GET** /v2/employee/staticVoucherCampaigns/all | Fetch static voucher campaigns
[**fetchMediaFiles()**](EmployeesApi.md#fetchMediaFiles) | **GET** /v2/employee/mediaFiles/all | Fetch all media files
[**fetchMerchant()**](EmployeesApi.md#fetchMerchant) | **GET** /v2/employee/merchant | Fetch merchant information
[**fetchMessages()**](EmployeesApi.md#fetchMessages) | **GET** /v2/employee/messages/all | Fetch all messages
[**fetchOptInListSource()**](EmployeesApi.md#fetchOptInListSource) | **GET** /v2/employee/optInListSource/{sourceID} | Fetch opt in list source
[**fetchOptInListSourcesCreatedByEmployee()**](EmployeesApi.md#fetchOptInListSourcesCreatedByEmployee) | **GET** /v2/employee/optInListSources/all | Fetch all opt in list sources
[**fetchPeerActivity()**](EmployeesApi.md#fetchPeerActivity) | **GET** /v2/employee/peer/activity/{employeeID} | Fetch peer activity
[**fetchPeersPermissions()**](EmployeesApi.md#fetchPeersPermissions) | **GET** /v2/employee/peer/permissions/{userID} | Fetch peer permissions
[**importClubMembers()**](EmployeesApi.md#importClubMembers) | **POST** /v2/employee/import/members | Import club members
[**importMerchantCredits()**](EmployeesApi.md#importMerchantCredits) | **POST** /v2/employee/import/merchantCredits | Import merchant credits
[**loadWebpagesOfEmployee()**](EmployeesApi.md#loadWebpagesOfEmployee) | **GET** /v2/employee/webpages/all | Retrieve employee&#39;s webpages
[**modifyPeersRoles()**](EmployeesApi.md#modifyPeersRoles) | **PUT** /v2/employee/peer/permissions/{userID} | Modify peer&#39;s roles
[**presignFile()**](EmployeesApi.md#presignFile) | **POST** /v2/employee/file/presign | Presign file for upload
[**removePeerFromAllRoles()**](EmployeesApi.md#removePeerFromAllRoles) | **DELETE** /v2/employee/peer/permissions/{userID} | Remove peer from all roles
[**scheduleAdvertisementCredit()**](EmployeesApi.md#scheduleAdvertisementCredit) | **POST** /v2/employee/sms/schedule/adCredit/{advertisementCreditID} | Schedule Ad Credit
[**scheduleDynamicVoucher()**](EmployeesApi.md#scheduleDynamicVoucher) | **POST** /v2/employee/sms/schedule/dynamicVoucher/{dynamicVoucherID} | Schedule Dynamic Voucher to list
[**scheduleDynamicVoucherToRecipient()**](EmployeesApi.md#scheduleDynamicVoucherToRecipient) | **POST** /v2/employee/sms/schedule/recipient/dynamicVoucher/{dynamicVoucherID} | Schedule Dyanamic Voucher to recipient
[**scheduleSimpleSMS()**](EmployeesApi.md#scheduleSimpleSMS) | **POST** /v2/employee/sms/schedule/simple | Schedule Simple SMS broadcast to list
[**scheduleSimpleSMSToRecipient()**](EmployeesApi.md#scheduleSimpleSMSToRecipient) | **POST** /v2/employee/sms/schedule/recipient/simple | Schedule Simple SMS broadcast to recipient
[**sendHelpDeskResponse()**](EmployeesApi.md#sendHelpDeskResponse) | **POST** /v2/employee/helpDesk/response | Send help desk response
[**sendSmsCampaignBroadcast()**](EmployeesApi.md#sendSmsCampaignBroadcast) | **POST** /v2/employee/sms/schedule/campaign/{staticVoucherCampaignID} | Schedule SMS Campaign Broadcast
[**setAlertsRead()**](EmployeesApi.md#setAlertsRead) | **PATCH** /v2/employee/alerts | Mark alerts as read
[**setExportDataFilesRead()**](EmployeesApi.md#setExportDataFilesRead) | **PUT** /v2/employee/export/dataFiles | Mark export data files as read
[**setHelpDeskRequestResolved()**](EmployeesApi.md#setHelpDeskRequestResolved) | **PATCH** /v2/employee/helpDesk/request/{helpDeskRequestID} | Resolve help desk request
[**setMessagesRead()**](EmployeesApi.md#setMessagesRead) | **PATCH** /v2/employee/messages | Mark messages as read
[**setProfilePicture()**](EmployeesApi.md#setProfilePicture) | **PUT** /v2/employee/profile/picture | Set profile picture
[**updateClubMembers()**](EmployeesApi.md#updateClubMembers) | **PUT** /v2/employee/update/members | Update club members
[**updateEmployeePeer()**](EmployeesApi.md#updateEmployeePeer) | **PUT** /v2/employee/peer/{userID} | Update peer


## `addPeerToRoles()`

```php
addPeerToRoles($user_id, $wt_employee_peer_roles): string
```

Add peer to roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = NULL; // mixed
$wt_employee_peer_roles = new \OpenAPI\Client\Model\WTEmployeePeerRoles(); // \OpenAPI\Client\Model\WTEmployeePeerRoles

try {
    $result = $apiInstance->addPeerToRoles($user_id, $wt_employee_peer_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->addPeerToRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_peer_roles** | [**\OpenAPI\Client\Model\WTEmployeePeerRoles**](../Model/WTEmployeePeerRoles.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAlert()`

```php
createAlert($wt_employee_create_alert): \OpenAPI\Client\Model\Alert
```

Create employee alert

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_alert = new \OpenAPI\Client\Model\WTEmployeeCreateAlert(); // \OpenAPI\Client\Model\WTEmployeeCreateAlert

try {
    $result = $apiInstance->createAlert($wt_employee_create_alert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create_alert** | [**\OpenAPI\Client\Model\WTEmployeeCreateAlert**](../Model/WTEmployeeCreateAlert.md)|  |

### Return type

[**\OpenAPI\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($wt_employee_create_document): \OpenAPI\Client\Model\Document
```

Create document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_document = new \OpenAPI\Client\Model\WTEmployeeCreateDocument(); // \OpenAPI\Client\Model\WTEmployeeCreateDocument

try {
    $result = $apiInstance->createDocument($wt_employee_create_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create_document** | [**\OpenAPI\Client\Model\WTEmployeeCreateDocument**](../Model/WTEmployeeCreateDocument.md)|  |

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

## `createEmployeePeer()`

```php
createEmployeePeer($wt_employee_create): \OpenAPI\Client\Model\Employee
```

Create employee peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create = new \OpenAPI\Client\Model\WTEmployeeCreate(); // \OpenAPI\Client\Model\WTEmployeeCreate

try {
    $result = $apiInstance->createEmployeePeer($wt_employee_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createEmployeePeer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create** | [**\OpenAPI\Client\Model\WTEmployeeCreate**](../Model/WTEmployeeCreate.md)|  |

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

## `createFile()`

```php
createFile($wt_employee_file_create): \OpenAPI\Client\Model\InlineResponse2001
```

Create file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_file_create = new \OpenAPI\Client\Model\WTEmployeeFileCreate(); // \OpenAPI\Client\Model\WTEmployeeFileCreate

try {
    $result = $apiInstance->createFile($wt_employee_file_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_file_create** | [**\OpenAPI\Client\Model\WTEmployeeFileCreate**](../Model/WTEmployeeFileCreate.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_media_file = new \OpenAPI\Client\Model\WTEmployeeCreateMediaFile(); // \OpenAPI\Client\Model\WTEmployeeCreateMediaFile

try {
    $result = $apiInstance->createMediaFile($wt_employee_create_media_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create_media_file** | [**\OpenAPI\Client\Model\WTEmployeeCreateMediaFile**](../Model/WTEmployeeCreateMediaFile.md)|  |

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

## `createStaticVoucherCampaignsGroup()`

```php
createStaticVoucherCampaignsGroup($wt_employee_create_static_voucher_campaign_group): \OpenAPI\Client\Model\StaticVoucherCampaignGroup
```

Create static voucher campaign group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_static_voucher_campaign_group = new \OpenAPI\Client\Model\WTEmployeeCreateStaticVoucherCampaignGroup(); // \OpenAPI\Client\Model\WTEmployeeCreateStaticVoucherCampaignGroup

try {
    $result = $apiInstance->createStaticVoucherCampaignsGroup($wt_employee_create_static_voucher_campaign_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->createStaticVoucherCampaignsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create_static_voucher_campaign_group** | [**\OpenAPI\Client\Model\WTEmployeeCreateStaticVoucherCampaignGroup**](../Model/WTEmployeeCreateStaticVoucherCampaignGroup.md)|  |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaignGroup**](../Model/StaticVoucherCampaignGroup.md)

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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = NULL; // mixed

try {
    $result = $apiInstance->deleteDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | [**mixed**](../Model/.md)|  |

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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$media_file_id = NULL; // mixed

try {
    $result = $apiInstance->deleteMediaFile($media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->deleteMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_file_id** | [**mixed**](../Model/.md)|  |

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

Fetch URL for file download

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->downloadFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**|  |

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

## `exportClubMembers()`

```php
exportClubMembers(): string
```

Export club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exportClubMembers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->exportClubMembers: ', $e->getMessage(), PHP_EOL;
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

## `exportMerchantCredits()`

```php
exportMerchantCredits(): string
```

Export merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exportMerchantCredits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->exportMerchantCredits: ', $e->getMessage(), PHP_EOL;
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

## `exportStaticVoucherCampaign()`

```php
exportStaticVoucherCampaign($campaign_id): string
```

Export static voucher campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = NULL; // mixed

try {
    $result = $apiInstance->exportStaticVoucherCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->exportStaticVoucherCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | [**mixed**](../Model/.md)|  |

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

Fetch URL to download a failed import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->failedImport($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->failedImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**|  |

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

Fetch all documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = 'folder_example'; // string

try {
    $result = $apiInstance->fetchDocuments($folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**|  | [optional]

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

## `fetchDynamicVouchers()`

```php
fetchDynamicVouchers($is_archive_included): \OpenAPI\Client\Model\DynamicVoucher[]
```

Fetch all dynamic vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchDynamicVouchers($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchDynamicVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DynamicVoucher[]**](../Model/DynamicVoucher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEmployeeStaticVoucherCampaignGroups()`

```php
fetchEmployeeStaticVoucherCampaignGroups(): \OpenAPI\Client\Model\StaticVoucherCampaignGroup[]
```

Fetch static voucher campaign groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchEmployeeStaticVoucherCampaignGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchEmployeeStaticVoucherCampaignGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaignGroup[]**](../Model/StaticVoucherCampaignGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEmployeeStaticVoucherCampaigns()`

```php
fetchEmployeeStaticVoucherCampaigns($is_archive_included, $source_id): \OpenAPI\Client\Model\StaticVoucherCampaign[]
```

Fetch static voucher campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool
$source_id = 3.4; // double

try {
    $result = $apiInstance->fetchEmployeeStaticVoucherCampaigns($is_archive_included, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchEmployeeStaticVoucherCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_archive_included** | **bool**|  | [optional]
 **source_id** | **double**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaign[]**](../Model/StaticVoucherCampaign.md)

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

Fetch all media files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = 'folder_example'; // string

try {
    $result = $apiInstance->fetchMediaFiles($folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**|  | [optional]

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

## `fetchMerchant()`

```php
fetchMerchant(): mixed
```

Fetch merchant information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMerchant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchMessages()`

```php
fetchMessages(): \OpenAPI\Client\Model\Message[]
```

Fetch all messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fetchOptInListSource()`

```php
fetchOptInListSource($source_id): \OpenAPI\Client\Model\OptInListSource
```

Fetch opt in list source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source_id = NULL; // mixed

try {
    $result = $apiInstance->fetchOptInListSource($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchOptInListSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OptInListSource**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchOptInListSourcesCreatedByEmployee()`

```php
fetchOptInListSourcesCreatedByEmployee(): \OpenAPI\Client\Model\OptInListSource[]
```

Fetch all opt in list sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchOptInListSourcesCreatedByEmployee();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchOptInListSourcesCreatedByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OptInListSource[]**](../Model/OptInListSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPeerActivity()`

```php
fetchPeerActivity($employee_id): \OpenAPI\Client\Model\EmployeeActivityLog[]
```

Fetch peer activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = NULL; // mixed

try {
    $result = $apiInstance->fetchPeerActivity($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchPeerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployeeActivityLog[]**](../Model/EmployeeActivityLog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchPeersPermissions()`

```php
fetchPeersPermissions($user_id): mixed[]
```

Fetch peer permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = NULL; // mixed

try {
    $result = $apiInstance->fetchPeersPermissions($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->fetchPeersPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**mixed**](../Model/.md)|  |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importClubMembers()`

```php
importClubMembers($wt_employee_import_records): string
```

Import club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_import_records = new \OpenAPI\Client\Model\WTEmployeeImportRecords(); // \OpenAPI\Client\Model\WTEmployeeImportRecords

try {
    $result = $apiInstance->importClubMembers($wt_employee_import_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->importClubMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importMerchantCredits()`

```php
importMerchantCredits($wt_employee_import_records): string
```

Import merchant credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_import_records = new \OpenAPI\Client\Model\WTEmployeeImportRecords(); // \OpenAPI\Client\Model\WTEmployeeImportRecords

try {
    $result = $apiInstance->importMerchantCredits($wt_employee_import_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->importMerchantCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_import_records** | [**\OpenAPI\Client\Model\WTEmployeeImportRecords**](../Model/WTEmployeeImportRecords.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadWebpagesOfEmployee()`

```php
loadWebpagesOfEmployee(): \OpenAPI\Client\Model\Webpage[]
```

Retrieve employee's webpages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loadWebpagesOfEmployee();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->loadWebpagesOfEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Webpage[]**](../Model/Webpage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyPeersRoles()`

```php
modifyPeersRoles($user_id, $wt_employee_peer_roles): mixed[]
```

Modify peer's roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = NULL; // mixed
$wt_employee_peer_roles = new \OpenAPI\Client\Model\WTEmployeePeerRoles(); // \OpenAPI\Client\Model\WTEmployeePeerRoles

try {
    $result = $apiInstance->modifyPeersRoles($user_id, $wt_employee_peer_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->modifyPeersRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_peer_roles** | [**\OpenAPI\Client\Model\WTEmployeePeerRoles**](../Model/WTEmployeePeerRoles.md)|  |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_s3_file_presign = new \OpenAPI\Client\Model\WTEmployeeS3FilePresign(); // \OpenAPI\Client\Model\WTEmployeeS3FilePresign

try {
    $result = $apiInstance->presignFile($wt_employee_s3_file_presign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->presignFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_s3_file_presign** | [**\OpenAPI\Client\Model\WTEmployeeS3FilePresign**](../Model/WTEmployeeS3FilePresign.md)|  |

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

## `removePeerFromAllRoles()`

```php
removePeerFromAllRoles($user_id): bool
```

Remove peer from all roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = NULL; // mixed

try {
    $result = $apiInstance->removePeerFromAllRoles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->removePeerFromAllRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**mixed**](../Model/.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleAdvertisementCredit()`

```php
scheduleAdvertisementCredit($advertisement_credit_id, $wt_employee_schedule_simple_sms): \OpenAPI\Client\Model\AdvertisementCreditBroadcast
```

Schedule Ad Credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertisement_credit_id = NULL; // mixed
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleAdvertisementCredit($advertisement_credit_id, $wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->scheduleAdvertisementCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertisement_credit_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  |

### Return type

[**\OpenAPI\Client\Model\AdvertisementCreditBroadcast**](../Model/AdvertisementCreditBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleDynamicVoucher()`

```php
scheduleDynamicVoucher($dynamic_voucher_id, $wt_employee_schedule_simple_sms): \OpenAPI\Client\Model\DynamicVoucherBroadcast
```

Schedule Dynamic Voucher to list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher_id = NULL; // mixed
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleDynamicVoucher($dynamic_voucher_id, $wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->scheduleDynamicVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_voucher_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucherBroadcast**](../Model/DynamicVoucherBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleDynamicVoucherToRecipient()`

```php
scheduleDynamicVoucherToRecipient($dynamic_voucher_id, $wt_employee_schedule_simple_smsto_recipient): \OpenAPI\Client\Model\DynamicVoucherBroadcast
```

Schedule Dyanamic Voucher to recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_voucher_id = NULL; // mixed
$wt_employee_schedule_simple_smsto_recipient = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient

try {
    $result = $apiInstance->scheduleDynamicVoucherToRecipient($dynamic_voucher_id, $wt_employee_schedule_simple_smsto_recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->scheduleDynamicVoucherToRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_voucher_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_schedule_simple_smsto_recipient** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient**](../Model/WTEmployeeScheduleSimpleSMSToRecipient.md)|  |

### Return type

[**\OpenAPI\Client\Model\DynamicVoucherBroadcast**](../Model/DynamicVoucherBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimpleSMS()`

```php
scheduleSimpleSMS($wt_employee_schedule_simple_sms): \OpenAPI\Client\Model\SimpleSMSBroadcast
```

Schedule Simple SMS broadcast to list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_schedule_simple_sms = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS

try {
    $result = $apiInstance->scheduleSimpleSMS($wt_employee_schedule_simple_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->scheduleSimpleSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_schedule_simple_sms** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMS**](../Model/WTEmployeeScheduleSimpleSMS.md)|  |

### Return type

[**\OpenAPI\Client\Model\SimpleSMSBroadcast**](../Model/SimpleSMSBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimpleSMSToRecipient()`

```php
scheduleSimpleSMSToRecipient($wt_employee_schedule_simple_smsto_recipient): \OpenAPI\Client\Model\SimpleSMSBroadcast
```

Schedule Simple SMS broadcast to recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_schedule_simple_smsto_recipient = new \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient(); // \OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient

try {
    $result = $apiInstance->scheduleSimpleSMSToRecipient($wt_employee_schedule_simple_smsto_recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->scheduleSimpleSMSToRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_schedule_simple_smsto_recipient** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSimpleSMSToRecipient**](../Model/WTEmployeeScheduleSimpleSMSToRecipient.md)|  |

### Return type

[**\OpenAPI\Client\Model\SimpleSMSBroadcast**](../Model/SimpleSMSBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_send_help_desk_response = new \OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse(); // \OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse

try {
    $result = $apiInstance->sendHelpDeskResponse($wt_employee_send_help_desk_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->sendHelpDeskResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_send_help_desk_response** | [**\OpenAPI\Client\Model\WTEmployeeSendHelpDeskResponse**](../Model/WTEmployeeSendHelpDeskResponse.md)|  |

### Return type

[**\OpenAPI\Client\Model\OutboundSMS**](../Model/OutboundSMS.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsCampaignBroadcast()`

```php
sendSmsCampaignBroadcast($static_voucher_campaign_id, $wt_employee_schedule_sms_campaign_broadcast): \OpenAPI\Client\Model\StaticVoucherCampaignBroadcast
```

Schedule SMS Campaign Broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$static_voucher_campaign_id = NULL; // mixed
$wt_employee_schedule_sms_campaign_broadcast = new \OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast(); // \OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast

try {
    $result = $apiInstance->sendSmsCampaignBroadcast($static_voucher_campaign_id, $wt_employee_schedule_sms_campaign_broadcast);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->sendSmsCampaignBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **static_voucher_campaign_id** | [**mixed**](../Model/.md)|  |
 **wt_employee_schedule_sms_campaign_broadcast** | [**\OpenAPI\Client\Model\WTEmployeeScheduleSMSCampaignBroadcast**](../Model/WTEmployeeScheduleSMSCampaignBroadcast.md)|  |

### Return type

[**\OpenAPI\Client\Model\StaticVoucherCampaignBroadcast**](../Model/StaticVoucherCampaignBroadcast.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAlertsRead()`

```php
setAlertsRead(): bool
```

Mark alerts as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setAlertsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setAlertsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setExportDataFilesRead()`

```php
setExportDataFilesRead(): bool
```

Mark export data files as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setExportDataFilesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setExportDataFilesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
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



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$help_desk_request_id = NULL; // mixed

try {
    $result = $apiInstance->setHelpDeskRequestResolved($help_desk_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setHelpDeskRequestResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **help_desk_request_id** | [**mixed**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\HelpDeskRequest**](../Model/HelpDeskRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setMessagesRead()`

```php
setMessagesRead(): bool
```

Mark messages as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setMessagesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setMessagesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setProfilePicture()`

```php
setProfilePicture($wt_employee_create_media_file): string
```

Set profile picture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_create_media_file = new \OpenAPI\Client\Model\WTEmployeeCreateMediaFile(); // \OpenAPI\Client\Model\WTEmployeeCreateMediaFile

try {
    $result = $apiInstance->setProfilePicture($wt_employee_create_media_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->setProfilePicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_create_media_file** | [**\OpenAPI\Client\Model\WTEmployeeCreateMediaFile**](../Model/WTEmployeeCreateMediaFile.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClubMembers()`

```php
updateClubMembers($wt_employee_update_records): string
```

Update club members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_employee_update_records = new \OpenAPI\Client\Model\WTEmployeeUpdateRecords(); // \OpenAPI\Client\Model\WTEmployeeUpdateRecords

try {
    $result = $apiInstance->updateClubMembers($wt_employee_update_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateClubMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wt_employee_update_records** | [**\OpenAPI\Client\Model\WTEmployeeUpdateRecords**](../Model/WTEmployeeUpdateRecords.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeePeer()`

```php
updateEmployeePeer($user_id, $wt_employee_update): \OpenAPI\Client\Model\Employee
```

Update peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$wt_employee_update = new \OpenAPI\Client\Model\WTEmployeeUpdate(); // \OpenAPI\Client\Model\WTEmployeeUpdate

try {
    $result = $apiInstance->updateEmployeePeer($user_id, $wt_employee_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateEmployeePeer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **wt_employee_update** | [**\OpenAPI\Client\Model\WTEmployeeUpdate**](../Model/WTEmployeeUpdate.md)|  |

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
