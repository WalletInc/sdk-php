# OpenAPI\Client\MenusApi

All URIs are relative to https://api.wall.et, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveMenu()**](MenusApi.md#archiveMenu) | **DELETE** /menus/{id} | Archive a menu |
| [**archiveMenuItem()**](MenusApi.md#archiveMenuItem) | **DELETE** /menuItems/{id} | Archive a menu item |
| [**archiveMenuOptionGroup()**](MenusApi.md#archiveMenuOptionGroup) | **DELETE** /menuOptionGroups/{id} | Archive an option group |
| [**createMenu()**](MenusApi.md#createMenu) | **POST** /menus | Create a menu |
| [**createMenuItem()**](MenusApi.md#createMenuItem) | **POST** /menuItems | Create a menu item |
| [**createMenuOptionGroup()**](MenusApi.md#createMenuOptionGroup) | **POST** /menuOptionGroups | Create an option group |
| [**fetchMenu()**](MenusApi.md#fetchMenu) | **GET** /menus/{id} | Get a menu |
| [**fetchMenuItem()**](MenusApi.md#fetchMenuItem) | **GET** /menuItems/{id} | Get a menu item |
| [**fetchMenuItems()**](MenusApi.md#fetchMenuItems) | **GET** /menuItems | List menu items |
| [**fetchMenuOptionGroup()**](MenusApi.md#fetchMenuOptionGroup) | **GET** /menuOptionGroups/{id} | Get an option group |
| [**fetchMenuOptionGroups()**](MenusApi.md#fetchMenuOptionGroups) | **GET** /menuOptionGroups | List option groups |
| [**fetchMenus()**](MenusApi.md#fetchMenus) | **GET** /menus | List menus |
| [**restoreMenu()**](MenusApi.md#restoreMenu) | **PATCH** /menus/{id} | Restore a menu |
| [**restoreMenuItem()**](MenusApi.md#restoreMenuItem) | **PATCH** /menuItems/{id} | Restore a menu item |
| [**restoreMenuOptionGroup()**](MenusApi.md#restoreMenuOptionGroup) | **PATCH** /menuOptionGroups/{id} | Restore an option group |
| [**updateMenu()**](MenusApi.md#updateMenu) | **PUT** /menus/{id} | Update a menu |
| [**updateMenuItem()**](MenusApi.md#updateMenuItem) | **PUT** /menuItems/{id} | Update a menu item |
| [**updateMenuOptionGroup()**](MenusApi.md#updateMenuOptionGroup) | **PUT** /menuOptionGroups/{id} | Update an option group |


## `archiveMenu()`

```php
archiveMenu($id): \OpenAPI\Client\Model\WTMenu
```

Archive a menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMenu($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->archiveMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenu**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveMenuItem()`

```php
archiveMenuItem($id): \OpenAPI\Client\Model\WTMenuItem
```

Archive a menu item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMenuItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->archiveMenuItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveMenuOptionGroup()`

```php
archiveMenuOptionGroup($id): \OpenAPI\Client\Model\WTMenuOptionGroup
```

Archive an option group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->archiveMenuOptionGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->archiveMenuOptionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMenu()`

```php
createMenu($wt_menu_create_params): \OpenAPI\Client\Model\WTMenu
```

Create a menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_menu_create_params = new \OpenAPI\Client\Model\WTMenuCreateParams(); // \OpenAPI\Client\Model\WTMenuCreateParams

try {
    $result = $apiInstance->createMenu($wt_menu_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_menu_create_params** | [**\OpenAPI\Client\Model\WTMenuCreateParams**](../Model/WTMenuCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenu**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMenuItem()`

```php
createMenuItem($wt_menu_item_create_params): \OpenAPI\Client\Model\WTMenuItem
```

Create a menu item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_menu_item_create_params = new \OpenAPI\Client\Model\WTMenuItemCreateParams(); // \OpenAPI\Client\Model\WTMenuItemCreateParams

try {
    $result = $apiInstance->createMenuItem($wt_menu_item_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createMenuItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_menu_item_create_params** | [**\OpenAPI\Client\Model\WTMenuItemCreateParams**](../Model/WTMenuItemCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMenuOptionGroup()`

```php
createMenuOptionGroup($wt_menu_option_group_create_params): \OpenAPI\Client\Model\WTMenuOptionGroup
```

Create an option group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wt_menu_option_group_create_params = new \OpenAPI\Client\Model\WTMenuOptionGroupCreateParams(); // \OpenAPI\Client\Model\WTMenuOptionGroupCreateParams

try {
    $result = $apiInstance->createMenuOptionGroup($wt_menu_option_group_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createMenuOptionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wt_menu_option_group_create_params** | [**\OpenAPI\Client\Model\WTMenuOptionGroupCreateParams**](../Model/WTMenuOptionGroupCreateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenu()`

```php
fetchMenu($id): \OpenAPI\Client\Model\WTMenu
```

Get a menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMenu($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenu**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenuItem()`

```php
fetchMenuItem($id): \OpenAPI\Client\Model\WTMenuItem
```

Get a menu item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMenuItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenuItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenuItems()`

```php
fetchMenuItems($is_archive_included): \OpenAPI\Client\Model\WTMenuItem[]
```

List menu items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchMenuItems($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenuItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem[]**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenuOptionGroup()`

```php
fetchMenuOptionGroup($id): \OpenAPI\Client\Model\WTMenuOptionGroup
```

Get an option group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fetchMenuOptionGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenuOptionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenuOptionGroups()`

```php
fetchMenuOptionGroups($is_archive_included): \OpenAPI\Client\Model\WTMenuOptionGroup[]
```

List option groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchMenuOptionGroups($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenuOptionGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup[]**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchMenus()`

```php
fetchMenus($is_archive_included): \OpenAPI\Client\Model\WTMenu[]
```

List menus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_archive_included = True; // bool

try {
    $result = $apiInstance->fetchMenus($is_archive_included);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->fetchMenus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_archive_included** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WTMenu[]**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMenu()`

```php
restoreMenu($id): \OpenAPI\Client\Model\WTMenu
```

Restore a menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMenu($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->restoreMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenu**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMenuItem()`

```php
restoreMenuItem($id): \OpenAPI\Client\Model\WTMenuItem
```

Restore a menu item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMenuItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->restoreMenuItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreMenuOptionGroup()`

```php
restoreMenuOptionGroup($id): \OpenAPI\Client\Model\WTMenuOptionGroup
```

Restore an option group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restoreMenuOptionGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->restoreMenuOptionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMenu()`

```php
updateMenu($id, $wt_menu_update_params): \OpenAPI\Client\Model\WTMenu
```

Update a menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_menu_update_params = new \OpenAPI\Client\Model\WTMenuUpdateParams(); // \OpenAPI\Client\Model\WTMenuUpdateParams

try {
    $result = $apiInstance->updateMenu($id, $wt_menu_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->updateMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_menu_update_params** | [**\OpenAPI\Client\Model\WTMenuUpdateParams**](../Model/WTMenuUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenu**](../Model/WTMenu.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMenuItem()`

```php
updateMenuItem($id, $wt_menu_item_update_params): \OpenAPI\Client\Model\WTMenuItem
```

Update a menu item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_menu_item_update_params = new \OpenAPI\Client\Model\WTMenuItemUpdateParams(); // \OpenAPI\Client\Model\WTMenuItemUpdateParams

try {
    $result = $apiInstance->updateMenuItem($id, $wt_menu_item_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->updateMenuItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_menu_item_update_params** | [**\OpenAPI\Client\Model\WTMenuItemUpdateParams**](../Model/WTMenuItemUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuItem**](../Model/WTMenuItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMenuOptionGroup()`

```php
updateMenuOptionGroup($id, $wt_menu_option_group_update_params): \OpenAPI\Client\Model\WTMenuOptionGroup
```

Update an option group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$wt_menu_option_group_update_params = new \OpenAPI\Client\Model\WTMenuOptionGroupUpdateParams(); // \OpenAPI\Client\Model\WTMenuOptionGroupUpdateParams

try {
    $result = $apiInstance->updateMenuOptionGroup($id, $wt_menu_option_group_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->updateMenuOptionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **wt_menu_option_group_update_params** | [**\OpenAPI\Client\Model\WTMenuOptionGroupUpdateParams**](../Model/WTMenuOptionGroupUpdateParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WTMenuOptionGroup**](../Model/WTMenuOptionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
