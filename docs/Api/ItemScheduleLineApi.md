# BeLenka\SAP\SalesOrder\ItemScheduleLineApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet()**](ItemScheduleLineApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet) | **GET** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_ScheduleLine | Reads the schedule lines of a sales order item. |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost()**](ItemScheduleLineApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost) | **POST** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_ScheduleLine | Creates schedule lines for a sales order item. |
| [**aSalesOrderScheduleLineGet()**](ItemScheduleLineApi.md#aSalesOrderScheduleLineGet) | **GET** /A_SalesOrderScheduleLine | Reads the schedule lines of all sales orders. |
| [**aSalesOrderScheduleLinePost()**](ItemScheduleLineApi.md#aSalesOrderScheduleLinePost) | **POST** /A_SalesOrderScheduleLine | Creates a schedule line. |
| [**aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete()**](ItemScheduleLineApi.md#aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete) | **DELETE** /A_SalesOrderScheduleLine(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,ScheduleLine&#x3D;&#39;{ScheduleLine}&#39;) | Deletes a schedule line. |
| [**aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet()**](ItemScheduleLineApi.md#aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet) | **GET** /A_SalesOrderScheduleLine(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,ScheduleLine&#x3D;&#39;{ScheduleLine}&#39;) | Reads a schedule line. |
| [**aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch()**](ItemScheduleLineApi.md#aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch) | **PATCH** /A_SalesOrderScheduleLine(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,ScheduleLine&#x3D;&#39;{ScheduleLine}&#39;) | Updates a schedule line. |


## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\SalesOrder\Model\Wrapper16
```

Reads the schedule lines of a sales order item.

Reads the schedule line data for a specific item. Consumers must pass the following key fields: sales order ID and item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper16**](../Model/Wrapper16.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost($sales_order, $sales_order_item, $apisalesordersrva_sales_order_schedule_line_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType
```

Creates schedule lines for a sales order item.

Creates the schedule line data for a specific item. Consumers must pass the following key fields: sales order ID and item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$apisalesordersrva_sales_order_schedule_line_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost($sales_order, $sales_order_item, $apisalesordersrva_sales_order_schedule_line_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToScheduleLinePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **apisalesordersrva_sales_order_schedule_line_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate**](../Model/APISALESORDERSRVASalesOrderScheduleLineTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType**](../Model/ASalesOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderScheduleLineGet()`

```php
aSalesOrderScheduleLineGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\SalesOrder\Model\Wrapper16
```

Reads the schedule lines of all sales orders.

Reads the schedule line data from the items of all sales orders in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSalesOrderScheduleLineGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderScheduleLineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper16**](../Model/Wrapper16.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderScheduleLinePost()`

```php
aSalesOrderScheduleLinePost($apisalesordersrva_sales_order_schedule_line_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType
```

Creates a schedule line.

Creates the schedule line data for a specific item of a specific sales order. Consumers must pass the following key fields: sales order ID, sales order item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sales_order_schedule_line_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderScheduleLinePost($apisalesordersrva_sales_order_schedule_line_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderScheduleLinePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sales_order_schedule_line_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderScheduleLineTypeCreate**](../Model/APISALESORDERSRVASalesOrderScheduleLineTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType**](../Model/ASalesOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete()`

```php
aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete($sales_order, $sales_order_item, $schedule_line)
```

Deletes a schedule line.

Deletes the schedule line data from a specific item of a specific sales order. Consumers must pass the following key fields: sales order ID, sales order item, and schedule line number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Document
$sales_order_item = 'sales_order_item_example'; // string | Sales Document Item
$schedule_line = 'schedule_line_example'; // string | Schedule Line Number

try {
    $apiInstance->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete($sales_order, $sales_order_item, $schedule_line);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Document | |
| **sales_order_item** | **string**| Sales Document Item | |
| **schedule_line** | **string**| Schedule Line Number | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet()`

```php
aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet($sales_order, $sales_order_item, $schedule_line, $select): \BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType
```

Reads a schedule line.

Reads the schedule line data from a specific item of a specific sales order. Consumers must pass the following key fields: sales order ID, sales order item, and schedule line number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Document
$sales_order_item = 'sales_order_item_example'; // string | Sales Document Item
$schedule_line = 'schedule_line_example'; // string | Schedule Line Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet($sales_order, $sales_order_item, $schedule_line, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Document | |
| **sales_order_item** | **string**| Sales Document Item | |
| **schedule_line** | **string**| Schedule Line Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderScheduleLineType**](../Model/ASalesOrderScheduleLineType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch()`

```php
aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch($sales_order, $sales_order_item, $schedule_line, $modified_a_sales_order_schedule_line_type)
```

Updates a schedule line.

Updates the schedule line data from a specific item of a specific sales order. Consumers must pass the following key fields: sales order ID, sales order item, and schedule line number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\SalesOrder\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemScheduleLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Document
$sales_order_item = 'sales_order_item_example'; // string | Sales Document Item
$schedule_line = 'schedule_line_example'; // string | Schedule Line Number
$modified_a_sales_order_schedule_line_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderScheduleLineType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderScheduleLineType | New property values

try {
    $apiInstance->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch($sales_order, $sales_order_item, $schedule_line, $modified_a_sales_order_schedule_line_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemScheduleLineApi->aSalesOrderScheduleLineSalesOrderSalesOrderSalesOrderItemSalesOrderItemScheduleLineScheduleLinePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Document | |
| **sales_order_item** | **string**| Sales Document Item | |
| **schedule_line** | **string**| Schedule Line Number | |
| **modified_a_sales_order_schedule_line_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderScheduleLineType**](../Model/ModifiedASalesOrderScheduleLineType.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
