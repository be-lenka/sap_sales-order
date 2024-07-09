# BeLenka\SAP\SalesOrder\HeaderPricingElementApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderHeaderPrElementGet()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementGet) | **GET** /A_SalesOrderHeaderPrElement | Reads the header pricing elements of all sales orders. |
| [**aSalesOrderHeaderPrElementPost()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementPost) | **POST** /A_SalesOrderHeaderPrElement | Creates a header pricing element for a sales order. |
| [**aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete) | **DELETE** /A_SalesOrderHeaderPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Deletes a header pricing element for a sales order. |
| [**aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet) | **GET** /A_SalesOrderHeaderPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Reads the header pricing element for a sales order. |
| [**aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch) | **PATCH** /A_SalesOrderHeaderPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Updates a header pricing element for a sales order. |
| [**aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet()**](HeaderPricingElementApi.md#aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet) | **GET** /A_SalesOrderHeaderPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_SalesOrder | Reads the sales order header for a pricing element. |
| [**aSalesOrderSalesOrderToPricingElementGet()**](HeaderPricingElementApi.md#aSalesOrderSalesOrderToPricingElementGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PricingElement | Reads the pricing element of a sales order. |
| [**aSalesOrderSalesOrderToPricingElementPost()**](HeaderPricingElementApi.md#aSalesOrderSalesOrderToPricingElementPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PricingElement | Creates a header pricing element for a specific sales order. |


## `aSalesOrderHeaderPrElementGet()`

```php
aSalesOrderHeaderPrElementGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper5
```

Reads the header pricing elements of all sales orders.

Reads the pricing element data from the headers of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
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
    $result = $apiInstance->aSalesOrderHeaderPrElementGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderHeaderPrElementPost()`

```php
aSalesOrderHeaderPrElementPost($apisalesordersrva_sales_order_header_pr_element_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType
```

Creates a header pricing element for a sales order.

Creates the pricing element data for the header of a specific sales order. Consumers must pass the following key fields: sales order ID, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sales_order_header_pr_element_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderHeaderPrElementPost($apisalesordersrva_sales_order_header_pr_element_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sales_order_header_pr_element_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate**](../Model/APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType**](../Model/ASalesOrderHeaderPrElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()`

```php
aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($sales_order, $pricing_procedure_step, $pricing_procedure_counter)
```

Deletes a header pricing element for a sales order.

Deletes the pricing element data from the header of a specific sales order. Consumers must pass the following key fields: sales order ID, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter

try {
    $apiInstance->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($sales_order, $pricing_procedure_step, $pricing_procedure_counter);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |

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

## `aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()`

```php
aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType
```

Reads the header pricing element for a sales order.

Reads the pricing element data from the header of a specific sales order. Consumers must pass the following key fields: sales order ID, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType**](../Model/ASalesOrderHeaderPrElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()`

```php
aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_sales_order_header_pr_element_type)
```

Updates a header pricing element for a sales order.

Updates the pricing element data from the header of a specific sales order. Consumers must pass the following key fields: sales order ID, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$modified_a_sales_order_header_pr_element_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderHeaderPrElementType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderHeaderPrElementType | New property values

try {
    $apiInstance->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_sales_order_header_pr_element_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **modified_a_sales_order_header_pr_element_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderHeaderPrElementType**](../Model/ModifiedASalesOrderHeaderPrElementType.md)| New property values | |

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

## `aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet()`

```php
aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a pricing element.

Reads the sales order header data for a specific pricing element. Consumers must pass the following key fields: sales order ID, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet($sales_order, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
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

## `aSalesOrderSalesOrderToPricingElementGet()`

```php
aSalesOrderSalesOrderToPricingElementGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper5
```

Reads the pricing element of a sales order.

Reads the pricing element data from the header of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderSalesOrderToPricingElementGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderSalesOrderToPricingElementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToPricingElementPost()`

```php
aSalesOrderSalesOrderToPricingElementPost($sales_order, $apisalesordersrva_sales_order_header_pr_element_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType
```

Creates a header pricing element for a specific sales order.

Creates the pricing element data for a specific sales order header. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sales_order_header_pr_element_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToPricingElementPost($sales_order, $apisalesordersrva_sales_order_header_pr_element_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aSalesOrderSalesOrderToPricingElementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sales_order_header_pr_element_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate**](../Model/APISALESORDERSRVASalesOrderHeaderPrElementTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPrElementType**](../Model/ASalesOrderHeaderPrElementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
