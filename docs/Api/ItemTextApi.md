# BeLenka\SAP\SalesOrder\ItemTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet()**](ItemTextApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet) | **GET** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_Text | Reads the text of a sales order item. |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost()**](ItemTextApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost) | **POST** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_Text | Creates a text for a specific sales order item. |
| [**aSalesOrderItemTextGet()**](ItemTextApi.md#aSalesOrderItemTextGet) | **GET** /A_SalesOrderItemText | Reads item texts of all sales orders. |
| [**aSalesOrderItemTextPost()**](ItemTextApi.md#aSalesOrderItemTextPost) | **POST** /A_SalesOrderItemText | Creates an item text. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete()**](ItemTextApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes an item text. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet()**](ItemTextApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Reads an item text. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch()**](ItemTextApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates an item text. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet()**](ItemTextApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet) | **GET** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_SalesOrder | Reads the sales order header for a text of a sales order item. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet()**](ItemTextApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet) | **GET** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_SalesOrderItem | Reads the sales order item for an item text. |


## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper18
```

Reads the text of a sales order item.

Reads the text data for a specific item. Consumers must pass the following key fields: sales order ID and item number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
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
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet($sales_order, $sales_order_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper18**](../Model/Wrapper18.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost($sales_order, $sales_order_item, $apisalesordersrva_sales_order_item_text_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType
```

Creates a text for a specific sales order item.

Creates the text data for a specific item. Consumers must pass the following key fields: sales order ID and item number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$apisalesordersrva_sales_order_item_text_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost($sales_order, $sales_order_item, $apisalesordersrva_sales_order_item_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **apisalesordersrva_sales_order_item_text_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate**](../Model/APISALESORDERSRVASalesOrderItemTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType**](../Model/ASalesOrderItemTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemTextGet()`

```php
aSalesOrderItemTextGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper18
```

Reads item texts of all sales orders.

Reads the text data from the items of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
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
    $result = $apiInstance->aSalesOrderItemTextGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper18**](../Model/Wrapper18.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemTextPost()`

```php
aSalesOrderItemTextPost($apisalesordersrva_sales_order_item_text_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType
```

Creates an item text.

Creates a specific item text in a specific language. Consumers must pass the following key fields: sales order ID, item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sales_order_item_text_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderItemTextPost($apisalesordersrva_sales_order_item_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sales_order_item_text_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTextTypeCreate**](../Model/APISALESORDERSRVASalesOrderItemTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType**](../Model/ASalesOrderItemTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete($sales_order, $sales_order_item, $language, $long_text_id)
```

Deletes an item text.

Deletes a specific item text in a specific language. Consumers must pass the following key fields: sales order ID, item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete($sales_order, $sales_order_item, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |

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

## `aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet()`

```php
aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType
```

Reads an item text.

Reads a specific item text in a specific language. Consumers must pass the following key fields: sales order ID, item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemTextType**](../Model/ASalesOrderItemTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch($sales_order, $sales_order_item, $language, $long_text_id, $modified_a_sales_order_item_text_type)
```

Updates an item text.

Updates a specific item text in a specific language. Consumers must pass the following key fields: sales order ID, sales order item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_sales_order_item_text_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemTextType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemTextType | New property values

try {
    $apiInstance->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch($sales_order, $sales_order_item, $language, $long_text_id, $modified_a_sales_order_item_text_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_sales_order_item_text_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderItemTextType**](../Model/ModifiedASalesOrderItemTextType.md)| New property values | |

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

## `aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet()`

```php
aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a text of a sales order item.

Reads the sales order header data for a specific text of a specific sales order item in a specific language. Consumers must pass the following key fields: sales order ID, item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
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

## `aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet()`

```php
aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Reads the sales order item for an item text.

Reads the sales order item data for a specific text in a specific language. Consumers must pass the following key fields: sales order ID, item number, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet($sales_order, $sales_order_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
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
