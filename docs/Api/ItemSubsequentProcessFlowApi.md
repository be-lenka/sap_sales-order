# BeLenka\SAP\SalesOrder\ItemSubsequentProcessFlowApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet()**](ItemSubsequentProcessFlowApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet) | **GET** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_SubsequentProcFlowDocItem | Get entities from related to_SubsequentProcFlowDocItem |
| [**aSalesOrderItmSubsqntProcFlowGet()**](ItemSubsequentProcessFlowApi.md#aSalesOrderItmSubsqntProcFlowGet) | **GET** /A_SalesOrderItmSubsqntProcFlow | Reads the subsequent items of all sales orders items. |
| [**aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet()**](ItemSubsequentProcessFlowApi.md#aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet) | **GET** /A_SalesOrderItmSubsqntProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;) | Reads a subsequent item for a sales order item. |
| [**aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()**](ItemSubsequentProcessFlowApi.md#aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet) | **GET** /A_SalesOrderItmSubsqntProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrder | Reads the sales order header data for a subsequent item of a sales order. |
| [**aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet()**](ItemSubsequentProcessFlowApi.md#aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet) | **GET** /A_SalesOrderItmSubsqntProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrderItem | Reads the sales order item data for a subsequent item of a sales order. |


## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper17
```

Get entities from related to_SubsequentProcFlowDocItem

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemSubsequentProcessFlowApi(
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
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubsequentProcessFlowApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSubsequentProcFlowDocItemGet: ', $e->getMessage(), PHP_EOL;
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
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper17**](../Model/Wrapper17.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItmSubsqntProcFlowGet()`

```php
aSalesOrderItmSubsqntProcFlowGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper17
```

Reads the subsequent items of all sales orders items.

Reads the process flow data for all sales order items and their subsequent items in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemSubsequentProcessFlowApi(
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
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItmSubsqntProcFlowGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubsequentProcessFlowApi->aSalesOrderItmSubsqntProcFlowGet: ', $e->getMessage(), PHP_EOL;
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
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper17**](../Model/Wrapper17.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet()`

```php
aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItmSubsqntProcFlowType
```

Reads a subsequent item for a sales order item.

Reads the process flow data of a specific subsequent item of a specific sales order item. Consumers must pass the following key fields: sales order ID, sales order item ID, and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemSubsequentProcessFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Preceding sales and distribution document
$sales_order_item = 'sales_order_item_example'; // string | Preceding Item of an SD Document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubsequentProcessFlowApi->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Preceding sales and distribution document | |
| **sales_order_item** | **string**| Preceding Item of an SD Document | |
| **doc_relationship_uuid** | **string**| SD Unique Document Relationship Identification | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItmSubsqntProcFlowType**](../Model/ASalesOrderItmSubsqntProcFlowType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()`

```php
aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header data for a subsequent item of a sales order.

Reads the sales order header data for a specific subsequent item of a sales order item. Consumers must pass the following key fields: sales order ID, sales order item number, and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemSubsequentProcessFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Preceding sales and distribution document
$sales_order_item = 'sales_order_item_example'; // string | Preceding Item of an SD Document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubsequentProcessFlowApi->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Preceding sales and distribution document | |
| **sales_order_item** | **string**| Preceding Item of an SD Document | |
| **doc_relationship_uuid** | **string**| SD Unique Document Relationship Identification | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderType**](../Model/ASalesOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet()`

```php
aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Reads the sales order item data for a subsequent item of a sales order.

Reads the item data for a specific subsequent item of a sales order item. Consumers must pass the following key fields: sales order ID, sales order item number, and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemSubsequentProcessFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Preceding sales and distribution document
$sales_order_item = 'sales_order_item_example'; // string | Preceding Item of an SD Document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubsequentProcessFlowApi->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Preceding sales and distribution document | |
| **sales_order_item** | **string**| Preceding Item of an SD Document | |
| **doc_relationship_uuid** | **string**| SD Unique Document Relationship Identification | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType**](../Model/ASalesOrderItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
