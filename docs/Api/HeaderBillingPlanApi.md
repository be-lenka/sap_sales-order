# BeLenka\SAP\SalesOrder\HeaderBillingPlanApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderBillingPlanGet()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanGet) | **GET** /A_SalesOrderBillingPlan | Reads the billing plans of all sales orders. |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet) | **GET** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_BillingPlan | Reads the billing plan of a billing plan item of a sales order header. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet) | **GET** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;) | Reads the billing plan of a sales order. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch) | **PATCH** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;) | Updates the billing plan of a sales order. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet) | **GET** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Reads the billing plan items of a sales order billing plan. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost) | **POST** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_BillingPlanItem | Creates a billing plan item for a sales order billing plan. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet()**](HeaderBillingPlanApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet) | **GET** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_SalesOrder | Reads the sales order header for a billing plan. |
| [**aSalesOrderSalesOrderToBillingPlanGet()**](HeaderBillingPlanApi.md#aSalesOrderSalesOrderToBillingPlanGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_BillingPlan | Reads the billing plan of a sales order. |


## `aSalesOrderBillingPlanGet()`

```php
aSalesOrderBillingPlanGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper9
```

Reads the billing plans of all sales orders.

Reads the billing plan data from the headers of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
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
    $result = $apiInstance->aSalesOrderBillingPlanGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
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
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet()`

```php
aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet($sales_order, $billing_plan, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanType
```

Reads the billing plan of a sales order.

Reads the billing plan data from the header of a specific sales order. Consumers must pass the following key fields: sales order ID and number of the billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet($sales_order, $billing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
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

## `aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch()`

```php
aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch($sales_order, $billing_plan, $modified_a_sales_order_billing_plan_type)
```

Updates the billing plan of a sales order.

Updates the billing plan data for the header of a specific sales order. Consumers must pass the following key fields: sales order ID and number of the billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$modified_a_sales_order_billing_plan_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanType | New property values

try {
    $apiInstance->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch($sales_order, $billing_plan, $modified_a_sales_order_billing_plan_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **billing_plan** | **string**| Billing/Invoicing Plan Number | |
| **modified_a_sales_order_billing_plan_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderBillingPlanType**](../Model/ModifiedASalesOrderBillingPlanType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
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
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
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
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToBillingPlanItemPost: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet()`

```php
aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet($sales_order, $billing_plan, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a billing plan.

Reads the sales order header data for a specific header billing plan. Consumers must pass the following key fields: sales order ID and number of the header billing plan.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$billing_plan = 'billing_plan_example'; // string | Billing/Invoicing Plan Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet($sales_order, $billing_plan, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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

## `aSalesOrderSalesOrderToBillingPlanGet()`

```php
aSalesOrderSalesOrderToBillingPlanGet($sales_order, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderBillingPlanType
```

Reads the billing plan of a sales order.

Reads the billing plan data for a specific sales order. Consumers must pass the following key field: sales order ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderBillingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderSalesOrderToBillingPlanGet($sales_order, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderBillingPlanApi->aSalesOrderSalesOrderToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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
