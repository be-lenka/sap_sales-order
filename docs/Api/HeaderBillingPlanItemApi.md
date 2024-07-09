# BeLenka\SAP\SalesOrder\HeaderBillingPlanItemApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderBillingPlanItemGet()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemGet) | **GET** /A_SalesOrderBillingPlanItem | Reads the billing plan items of all sales orders. |
| [**aSalesOrderBillingPlanItemPost()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemPost) | **POST** /A_SalesOrderBillingPlanItem | Creates a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete) | **DELETE** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Deletes a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet) | **GET** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Reads a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch) | **PATCH** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;) | Updates a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet) | **GET** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_BillingPlan | Reads the billing plan of a billing plan item of a sales order header. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet) | **GET** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet) | **GET** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Reads the billing plan items of a sales order billing plan. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost()**](HeaderBillingPlanItemApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost) | **POST** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Creates a billing plan item for a sales order billing plan. |


## `aSalesOrderBillingPlanItemGet()`

```php
aSalesOrderBillingPlanItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper10
```

Reads the billing plan items of all sales orders.

Reads the billing plan item data from the headers of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
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
    $result = $apiInstance->aSalesOrderBillingPlanItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderBillingPlanItemPost()`

```php
aSalesOrderBillingPlanItemPost($apisalesordersrva_sales_order_billing_plan_item_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType
```

Creates a billing plan item of a sales order.

Creates a specific billing plan item for a specific sales order. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sales_order_billing_plan_item_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderBillingPlanItemPost($apisalesordersrva_sales_order_billing_plan_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sales_order_billing_plan_item_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate**](../Model/APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType**](../Model/ASalesOrderBillingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete()`

```php
aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete($sales_order, $billing_plan, $billing_plan_item)
```

Deletes a billing plan item of a sales order.

Deletes a specific billing plan item for a specific sales order. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards

try {
    $apiInstance->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete($sales_order, $billing_plan, $billing_plan_item);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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

## `aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet()`

```php
aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType
```

Reads a billing plan item of a sales order.

Reads a specific billing plan item for a specific sales order. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType**](../Model/ASalesOrderBillingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch()`

```php
aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch($sales_order, $billing_plan, $billing_plan_item, $modified_a_sales_order_billing_plan_item_type)
```

Updates a billing plan item of a sales order.

Updates a specific billing plan item for a specific sales order. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$modified_a_sales_order_billing_plan_item_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanItemType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanItemType | New property values

try {
    $apiInstance->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch($sales_order, $billing_plan, $billing_plan_item, $modified_a_sales_order_billing_plan_item_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **modified_a_sales_order_billing_plan_item_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanItemType**](../Model/ModifiedASalesOrderBillingPlanItemType.md)| New property values | |

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

## `aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()`

```php
aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanType
```

Reads the billing plan of a billing plan item of a sales order header.

Reads the billing plan data for a specific billing plan item of a specific sales order header. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **billing_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanType**](../Model/ASalesOrderBillingPlanType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()`

```php
aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a billing plan item of a sales order.

Reads the sales order header data for a specific billing plan item of a specific sales order. Consumers must pass the following key fields: sales order ID, number of the header billing plan, and item number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$billing_plan_item = 'billing_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet($sales_order, $billing_plan, $billing_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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

## `aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet()`

```php
aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet($sales_order, $billing_plan, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper10
```

Reads the billing plan items of a sales order billing plan.

Reads the billing plan item data for a specific sales order billing plan. Consumers must pass the following key fields: sales order ID and number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet($sales_order, $billing_plan, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost()`

```php
aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost($sales_order, $billing_plan, $apisalesordersrva_sales_order_billing_plan_item_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType
```

Creates a billing plan item for a sales order billing plan.

Creates a billing plan item for a specific sales order billing plan. Consumers must pass the following key fields: sales order ID and number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$apisalesordersrva_sales_order_billing_plan_item_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost($sales_order, $billing_plan, $apisalesordersrva_sales_order_billing_plan_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanItemApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **apisalesordersrva_sales_order_billing_plan_item_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate**](../Model/APISALESORDERSRVASalesOrderBillingPlanItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanItemType**](../Model/ASalesOrderBillingPlanItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
