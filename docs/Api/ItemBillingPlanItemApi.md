# BeLenka\SAP\SalesOrder\ItemBillingPlanItemApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet()**](ItemBillingPlanItemApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Reads the billing plan items of a sales order item billing plan. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost()**](ItemBillingPlanItemApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost) | **POST** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Creates a billing plan item for a sales order item billing plan. |
| [**aSlsOrderItemBillingPlanItemGet()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemGet) | **GET** /A_SlsOrderItemBillingPlanItem | Reads the billing plan items of all sales order items. |
| [**aSlsOrderItemBillingPlanItemPost()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemPost) | **POST** /A_SlsOrderItemBillingPlanItem | Creates a billing plan item for a sales order item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete) | **DELETE** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Deletes a billing plan item of a sales order item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Reads a billing plan item of a sales order item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch) | **PATCH** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Updates a billing plan item of a sales order item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_BillingPlan | Reads the item billing plan for an item billing plan item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for an item billing plan item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet()**](ItemBillingPlanItemApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_SalesOrderItem | Reads the sales order item for a billing plan item of this sales order item. |


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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    echo 'Exception when calling ItemBillingPlanItemApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    echo 'Exception when calling ItemBillingPlanItemApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
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

## `aSlsOrderItemBillingPlanItemGet()`

```php
aSlsOrderItemBillingPlanItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper20
```

Reads the billing plan items of all sales order items.

Reads the billing plan item data from the items of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    $result = $apiInstance->aSlsOrderItemBillingPlanItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper20**](../Model/Wrapper20.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrderItemBillingPlanItemPost()`

```php
aSlsOrderItemBillingPlanItemPost($apisalesordersrva_sls_order_item_billing_plan_item_type_create): \BeLenka\SAP\SalesOrder\Model\ASlsOrderItemBillingPlanItemType
```

Creates a billing plan item for a sales order item.

Creates a billing plan item of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sls_order_item_billing_plan_item_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrderItemBillingPlanItemTypeCreate | New entity

try {
    $result = $apiInstance->aSlsOrderItemBillingPlanItemPost($apisalesordersrva_sls_order_item_billing_plan_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete($sales_order, $sales_order_item, $billing_plan, $billing_plan_item)
```

Deletes a billing plan item of a sales order item.

Deletes a specific billing plan item of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards

try {
    $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete($sales_order, $sales_order_item, $billing_plan, $billing_plan_item);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |

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

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASlsOrderItemBillingPlanItemType
```

Reads a billing plan item of a sales order item.

Reads a specific billing plan item of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    $result = $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\ASlsOrderItemBillingPlanItemType**](../Model/ASlsOrderItemBillingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $modified_a_sls_order_item_billing_plan_item_type)
```

Updates a billing plan item of a sales order item.

Updates a specific billing plan item of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$modified_a_sls_order_item_billing_plan_item_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrderItemBillingPlanItemType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrderItemBillingPlanItemType | New property values

try {
    $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $modified_a_sls_order_item_billing_plan_item_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **modified_a_sls_order_item_billing_plan_item_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrderItemBillingPlanItemType**](../Model/ModifiedASlsOrderItemBillingPlanItemType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
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

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for an item billing plan item.

Reads the sales order header data for a specific billing plan item of a sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    $result = $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderType**](../Model/ASalesOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet()`

```php
aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Reads the sales order item for a billing plan item of this sales order item.

Reads the sales order item data for a specific billing plan item of this sales order item. Consumers must pass the following key fields: sales order ID, item number, number of the item billing plan, and item number of the item billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemBillingPlanItemApi(
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
    $result = $apiInstance->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet($sales_order, $sales_order_item, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBillingPlanItemApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType**](../Model/ASalesOrderItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
