# BeLenka\SAP\SalesOrder\ItemBillingPlanApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemBillingPlanGet()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanGet) | **GET** /A_SalesOrderItemBillingPlan | Reads the billing plans of all sales order items. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;) | Reads the billing plan of a sales order item. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch) | **PATCH** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;) | Updates the billing plan of a sales order item. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Reads the billing plan items of a sales order item billing plan. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost) | **POST** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Creates a billing plan item for a sales order item billing plan. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_SalesOrder | Reads the sales order header for an item billing plan. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet()**](ItemBillingPlanApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_SalesOrderItem | Reads the sales order item for an item billing plan. |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet()**](ItemBillingPlanApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet) | **GET** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_BillingPlan | Reads the billing plan of a sales order item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()**](ItemBillingPlanApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_BillingPlan | Reads the item billing plan for an item billing plan item. |


## `aSalesOrderItemBillingPlanGet()`

```php
aSalesOrderItemBillingPlanGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper19
```

Reads the billing plans of all sales order items.

Reads the billing plan data from the items of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
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
    $result = $apiInstance->aSalesOrderItemBillingPlanGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper19**](../Model/Wrapper19.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet($sales_order, $sales_order_item, $billing_plan, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType
```

Reads the billing plan of a sales order item.

Reads the billing plan of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet($sales_order, $sales_order_item, $billing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType**](../Model/ASalesOrderItemBillingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch($sales_order, $sales_order_item, $billing_plan, $modified_a_sales_order_item_billing_plan_type)
```

Updates the billing plan of a sales order item.

Updates the billing plan of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$modified_a_sales_order_item_billing_plan_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemBillingPlanType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemBillingPlanType | New property values

try {
    $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch($sales_order, $sales_order_item, $billing_plan, $modified_a_sales_order_item_billing_plan_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **modified_a_sales_order_item_billing_plan_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemBillingPlanType**](../Model/ModifiedASalesOrderItemBillingPlanType.md)| New property values | |

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

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet($sales_order, $sales_order_item, $billing_plan, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper20
```

Reads the billing plan items of a sales order item billing plan.

Reads the billing plan item data for a specific sales order item billing plan. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet($sales_order, $sales_order_item, $billing_plan, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper20**](../Model/Wrapper20.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost($sales_order, $sales_order_item, $billing_plan, $apisalesordersrva_sls_order_item_billing_plan_item_type_create): \BeLenka\SAP\SalesOrder\Model\ASlsOrderItemBillingPlanItemType
```

Creates a billing plan item for a sales order item billing plan.

Creates a billing plan item for a specific sales order item billing plan. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$apisalesordersrva_sls_order_item_billing_plan_item_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost($sales_order, $sales_order_item, $billing_plan, $apisalesordersrva_sls_order_item_billing_plan_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **apisalesordersrva_sls_order_item_billing_plan_item_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate**](../Model/APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASlsOrderItemBillingPlanItemType**](../Model/ASlsOrderItemBillingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet($sales_order, $sales_order_item, $billing_plan, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for an item billing plan.

Reads the sales order header data for a specific item billing plan. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet($sales_order, $sales_order_item, $billing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
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

## `aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet()`

```php
aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet($sales_order, $sales_order_item, $billing_plan, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Reads the sales order item for an item billing plan.

Reads the sales order item data for a specific item billing plan. Consumers must pass the following key fields: sales order ID, item number, and number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet($sales_order, $sales_order_item, $billing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
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

## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet($sales_order, $sales_order_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType
```

Reads the billing plan of a sales order item.

Reads the billing plan data for a specific sales order item. Consumers must pass the following key fields: sales order ID and item number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet($sales_order, $sales_order_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType**](../Model/ASalesOrderItemBillingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType
```

Reads the item billing plan for an item billing plan item.

Reads the item billing plan data for a specific billing plan item of a sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemBillingPlanType**](../Model/ASalesOrderItemBillingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
