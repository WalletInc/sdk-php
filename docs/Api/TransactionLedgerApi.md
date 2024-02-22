# OpenAPI\Client\TransactionLedgerApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchAllLedgerTransactions()**](TransactionLedgerApi.md#fetchAllLedgerTransactions) | **GET** /v2/pos/ledger/transactions/all | Fetch ledger transactions by page |


## `fetchAllLedgerTransactions()`

```php
fetchAllLedgerTransactions($start_date_time, $end_date_time, $page_num, $page_size, $register_type): \OpenAPI\Client\Model\FetchAllLedgerTransactions200Response
```

Fetch ledger transactions by page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionLedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_num = 3.4; // float
$page_size = 3.4; // float
$register_type = new \OpenAPI\Client\Model\ApplicableTerminals(); // ApplicableTerminals

try {
    $result = $apiInstance->fetchAllLedgerTransactions($start_date_time, $end_date_time, $page_num, $page_size, $register_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionLedgerApi->fetchAllLedgerTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date_time** | **\DateTime**|  | |
| **end_date_time** | **\DateTime**|  | |
| **page_num** | **float**|  | |
| **page_size** | **float**|  | |
| **register_type** | [**ApplicableTerminals**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchAllLedgerTransactions200Response**](../Model/FetchAllLedgerTransactions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
