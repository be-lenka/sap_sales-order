# BeLenka\SAP\SalesOrder\HeaderPaymentPlanApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderSalesOrderToPaymentPlanItemDetailsGet()**](HeaderPaymentPlanApi.md#aSalesOrderSalesOrderToPaymentPlanItemDetailsGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PaymentPlanItemDetails | Reads the header payment plan of a specific sales order. |
| [**aSalesOrderSalesOrderToPaymentPlanItemDetailsPost()**](HeaderPaymentPlanApi.md#aSalesOrderSalesOrderToPaymentPlanItemDetailsPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PaymentPlanItemDetails | Creates a header payment plan for a specific sales order. |
| [**aSlsOrdPaymentPlanItemDetailsGet()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsGet) | **GET** /A_SlsOrdPaymentPlanItemDetails | Reads the payment plans of all sales orders. |
| [**aSlsOrdPaymentPlanItemDetailsPost()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsPost) | **POST** /A_SlsOrdPaymentPlanItemDetails | Creates a payment plan for a sales order. |
| [**aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete) | **DELETE** /A_SlsOrdPaymentPlanItemDetails(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PaymentPlanItem&#x3D;&#39;{PaymentPlanItem}&#39;) | Deletes a payment plan item of a specific sales order. |
| [**aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet) | **GET** /A_SlsOrdPaymentPlanItemDetails(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PaymentPlanItem&#x3D;&#39;{PaymentPlanItem}&#39;) | Reads a payment plan item of a sales order. |
| [**aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch) | **PATCH** /A_SlsOrdPaymentPlanItemDetails(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PaymentPlanItem&#x3D;&#39;{PaymentPlanItem}&#39;) | Updates a payment plan item of a sales order. |
| [**aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet()**](HeaderPaymentPlanApi.md#aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet) | **GET** /A_SlsOrdPaymentPlanItemDetails(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PaymentPlanItem&#x3D;&#39;{PaymentPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for a payment plan item. |


## `aSalesOrderSalesOrderToPaymentPlanItemDetailsGet()`

```php
aSalesOrderSalesOrderToPaymentPlanItemDetailsGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper3
```

Reads the header payment plan of a specific sales order.

Reads the payment plan data from the header of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToPaymentPlanItemDetailsGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSalesOrderSalesOrderToPaymentPlanItemDetailsGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToPaymentPlanItemDetailsPost()`

```php
aSalesOrderSalesOrderToPaymentPlanItemDetailsPost($sales_order, $apisalesordersrva_sls_ord_payment_plan_item_details_type_create): \BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType
```

Creates a header payment plan for a specific sales order.

Creates the payment plan data for a specific sales order header. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sls_ord_payment_plan_item_details_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToPaymentPlanItemDetailsPost($sales_order, $apisalesordersrva_sls_ord_payment_plan_item_details_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSalesOrderSalesOrderToPaymentPlanItemDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sls_ord_payment_plan_item_details_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate**](../Model/APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType**](../Model/ASlsOrdPaymentPlanItemDetailsType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrdPaymentPlanItemDetailsGet()`

```php
aSlsOrdPaymentPlanItemDetailsGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper3
```

Reads the payment plans of all sales orders.

Reads the payment plan data from the header of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
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
    $result = $apiInstance->aSlsOrdPaymentPlanItemDetailsGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrdPaymentPlanItemDetailsPost()`

```php
aSlsOrdPaymentPlanItemDetailsPost($apisalesordersrva_sls_ord_payment_plan_item_details_type_create): \BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType
```

Creates a payment plan for a sales order.

Creates the payment plan data for the header of a specific sales order.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sls_ord_payment_plan_item_details_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate | New entity

try {
    $result = $apiInstance->aSlsOrdPaymentPlanItemDetailsPost($apisalesordersrva_sls_ord_payment_plan_item_details_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sls_ord_payment_plan_item_details_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate**](../Model/APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType**](../Model/ASlsOrdPaymentPlanItemDetailsType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete()`

```php
aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete($sales_order, $payment_plan_item)
```

Deletes a payment plan item of a specific sales order.

Deletes the payment plan data from the header of a specific sales order.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$payment_plan_item = 'payment_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards

try {
    $apiInstance->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete($sales_order, $payment_plan_item);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **payment_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |

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

## `aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet()`

```php
aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet($sales_order, $payment_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType
```

Reads a payment plan item of a sales order.

Reads the payment plan data from the header of a specific sales order.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$payment_plan_item = 'payment_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet($sales_order, $payment_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **payment_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASlsOrdPaymentPlanItemDetailsType**](../Model/ASlsOrdPaymentPlanItemDetailsType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch()`

```php
aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch($sales_order, $payment_plan_item, $modified_a_sls_ord_payment_plan_item_details_type)
```

Updates a payment plan item of a sales order.

Updates the payment plan data of the header of a specific sales order.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$payment_plan_item = 'payment_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$modified_a_sls_ord_payment_plan_item_details_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrdPaymentPlanItemDetailsType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrdPaymentPlanItemDetailsType | New property values

try {
    $apiInstance->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch($sales_order, $payment_plan_item, $modified_a_sls_ord_payment_plan_item_details_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **payment_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
| **modified_a_sls_ord_payment_plan_item_details_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASlsOrdPaymentPlanItemDetailsType**](../Model/ModifiedASlsOrdPaymentPlanItemDetailsType.md)| New property values | |

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

## `aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet()`

```php
aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet($sales_order, $payment_plan_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a payment plan item.

Reads the sales order header data for a specific payment plan item. Consumers must pass the following key fields: sales order ID and payment plan item ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPaymentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$payment_plan_item = 'payment_plan_item_example'; // string | Item for billing plan/invoice plan/payment cards
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet($sales_order, $payment_plan_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPaymentPlanApi->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **payment_plan_item** | **string**| Item for billing plan/invoice plan/payment cards | |
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
