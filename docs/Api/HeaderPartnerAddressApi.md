# BeLenka\SAP\SalesOrder\HeaderPartnerAddressApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet()**](HeaderPartnerAddressApi.md#aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet) | **GET** /A_SalesOrderHeaderPartner(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_Address | Reads the address of a sales order header partner. |
| [**aSalesOrderPartnerAddressGet()**](HeaderPartnerAddressApi.md#aSalesOrderPartnerAddressGet) | **GET** /A_SalesOrderPartnerAddress | Reads all addresses for header partners of sales orders. |
| [**aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet()**](HeaderPartnerAddressApi.md#aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet) | **GET** /A_SalesOrderPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Reads the address of a header partner of a sales order. |
| [**aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch()**](HeaderPartnerAddressApi.md#aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch) | **PATCH** /A_SalesOrderPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Updates the address of a header partner of a sales order. |
| [**aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet()**](HeaderPartnerAddressApi.md#aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet) | **GET** /A_SalesOrderPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_Partner | Reads the sales order header partner for a header partner address. |
| [**aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()**](HeaderPartnerAddressApi.md#aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet) | **GET** /A_SalesOrderPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_SalesOrder | Reads the sales order for a header partner address. |


## `aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet()`

```php
aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet($sales_order, $partner_function, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper11
```

Reads the address of a sales order header partner.

Reads the header address data for a specific sales order header partner. Consumers must pass the following key fields: sales order ID and partner function.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$partner_function = 'partner_function_example'; // string | Partner Function
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet($sales_order, $partner_function, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **partner_function** | **string**| Partner Function | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\Wrapper11**](../Model/Wrapper11.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderPartnerAddressGet()`

```php
aSalesOrderPartnerAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper11
```

Reads all addresses for header partners of sales orders.

Reads the address data of all header partners of sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
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
    $result = $apiInstance->aSalesOrderPartnerAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderPartnerAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper11**](../Model/Wrapper11.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet()`

```php
aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet($sales_order, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderPartnerAddressType
```

Reads the address of a header partner of a sales order.

Reads the header address data of a specific header partner of a sales order. Consumers must pass the following key fields: sales order ID, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet($sales_order, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderPartnerAddressType**](../Model/ASalesOrderPartnerAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch()`

```php
aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch($sales_order, $partner_function, $address_representation_code, $modified_a_sales_order_partner_address_type)
```

Updates the address of a header partner of a sales order.

Updates the header address data of a specific header partner of a sales order. Consumers must pass the following key fields: sales order ID, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$modified_a_sales_order_partner_address_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderPartnerAddressType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderPartnerAddressType | New property values

try {
    $apiInstance->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch($sales_order, $partner_function, $address_representation_code, $modified_a_sales_order_partner_address_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **modified_a_sales_order_partner_address_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderPartnerAddressType**](../Model/ModifiedASalesOrderPartnerAddressType.md)| New property values | |

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

## `aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet()`

```php
aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet($sales_order, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPartnerType
```

Reads the sales order header partner for a header partner address.

Reads the sales order header partner data for a specific header partner address. Consumers must pass the following key fields: sales order ID, partner function, and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet($sales_order, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToPartnerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
| **partner_function** | **string**| Partner Function | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPartnerType**](../Model/ASalesOrderHeaderPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()`

```php
aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet($sales_order, $partner_function, $address_representation_code, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order for a header partner address.

Reads the sales order data for a specific partner address. Consumers must pass the following key fields: sales order ID and the address representation code.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\HeaderPartnerAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales and Distribution Document Number
$partner_function = 'partner_function_example'; // string | Partner Function
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet($sales_order, $partner_function, $address_representation_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPartnerAddressApi->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales and Distribution Document Number | |
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
