# BeLenka\SAP\SalesOrder\ItemPartnerAddressApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemPartnerAddressGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressGet) | **GET** /A_SalesOrderItemPartnerAddress | Reads all addresses for item partners of sales orders. |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet) | **GET** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Reads the address of an item partner of a sales order. |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch) | **PATCH** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Updates the address of an item partner of a sales order. |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet) | **GET** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_Partner | Reads the sales order item partner for an item partner address. |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet) | **GET** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_SalesOrder | Get related to_SalesOrder |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet) | **GET** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_SalesOrderItem | Reads the sales order item for an item partner address. |
| [**aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet()**](ItemPartnerAddressApi.md#aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet) | **GET** /A_SalesOrderItemPartner(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_Address | Reads the item address of a sales order item partner. |


## `aSalesOrderItemPartnerAddressGet()`

```php
aSalesOrderItemPartnerAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper21
```

Reads all addresses for item partners of sales orders.

Reads the address data of all item partners of sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
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
    $result = $apiInstance->aSalesOrderItemPartnerAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper21**](../Model/Wrapper21.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet()`

```php
aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemPartnerAddressType
```

Reads the address of an item partner of a sales order.

Reads the item address data of a specific item partner of a sales order. Consumers must pass the following key fields: sales order ID, item number, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$sales_order_item = 'sales_order_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **sales_order_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemPartnerAddressType**](../Model/ASalesOrderItemPartnerAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch()`

```php
aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch($sales_order, $sales_order_item, $partner_function, $address_representation_code, $modified_a_sales_order_item_partner_address_type)
```

Updates the address of an item partner of a sales order.

Updates the item address data of a specific item partner of a sales order. Consumers must pass the following key fields: sales order ID, item number, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$sales_order_item = 'sales_order_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$modified_a_sales_order_item_partner_address_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemPartnerAddressType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemPartnerAddressType | New property values

try {
    $apiInstance->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch($sales_order, $sales_order_item, $partner_function, $address_representation_code, $modified_a_sales_order_item_partner_address_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **sales_order_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **modified_a_sales_order_item_partner_address_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemPartnerAddressType**](../Model/ModifiedASalesOrderItemPartnerAddressType.md)| New property values | |

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

## `aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet()`

```php
aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemPartnerType
```

Reads the sales order item partner for an item partner address.

Reads the sales order item partner data for a specific item partner address. Consumers must pass the following key fields: sales order ID, item number, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$sales_order_item = 'sales_order_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **sales_order_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemPartnerType**](../Model/ASalesOrderItemPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()`

```php
aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Get related to_SalesOrder

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$sales_order_item = 'sales_order_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **sales_order_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
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

## `aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet()`

```php
aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Reads the sales order item for an item partner address.

Reads the sales order item data for a specific item partner address. Consumers must pass the following key fields: sales order ID, item number, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$sales_order_item = 'sales_order_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet($sales_order, $sales_order_item, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **sales_order_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
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

## `aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet()`

```php
aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet($sales_order, $sales_order_item, $partner_function, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper21
```

Reads the item address of a sales order item partner.

Reads the item address data for a specific sales order item partner. Consumers must pass the following key fields: sales order ID, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$partner_function = 'partner_function_example'; // string | Partner Function
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet($sales_order, $sales_order_item, $partner_function, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerAddressApi->aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **partner_function** | **string**| Partner Function | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper21**](../Model/Wrapper21.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
