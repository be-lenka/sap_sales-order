# BeLenka\SAP\SalesOrder\SalesOrderHeaderApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet) | **GET** /A_SalesOrderBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for a billing plan item of a sales order. |
| [**aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet) | **GET** /A_SalesOrderBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_SalesOrder | Reads the sales order header for a billing plan. |
| [**aSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderGet) | **GET** /A_SalesOrder | Reads all sales order headers. |
| [**aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet) | **GET** /A_SalesOrderHeaderPartner(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_SalesOrder | Reads the sales order header for a header partner. |
| [**aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet) | **GET** /A_SalesOrderHeaderPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_SalesOrder | Reads the sales order header for a pricing element. |
| [**aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet) | **GET** /A_SalesOrderItemBillingPlan(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;)/to_SalesOrder | Reads the sales order header for an item billing plan. |
| [**aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet) | **GET** /A_SalesOrderItemPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_SalesOrder | Get related to_SalesOrder |
| [**aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet) | **GET** /A_SalesOrderItemPartner(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_SalesOrder | Reads the sales order header of a partner function of a sales order item. |
| [**aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet) | **GET** /A_SalesOrderItemPrElement(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_SalesOrder | Reads the sales order header for a pricing element. |
| [**aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet) | **GET** /A_SalesOrderItemRelatedObject(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_SalesOrder | Reads the sales order header for a related object of a sales order item. |
| [**aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet) | **GET** /A_SalesOrderItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;)/to_SalesOrder | Reads the sales order header of a sales order item. |
| [**aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet) | **GET** /A_SalesOrderItemText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_SalesOrder | Reads the sales order header for a text of a sales order item. |
| [**aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet) | **GET** /A_SalesOrderItmPrecdgProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrder | Reads the sales order header data of a preceding item of a sales order. |
| [**aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet) | **GET** /A_SalesOrderItmSubsqntProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrder | Reads the sales order header data for a subsequent item of a sales order. |
| [**aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet) | **GET** /A_SalesOrderPartnerAddress(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;)/to_SalesOrder | Reads the sales order for a header partner address. |
| [**aSalesOrderPost()**](SalesOrderHeaderApi.md#aSalesOrderPost) | **POST** /A_SalesOrder | Creates a sales order. |
| [**aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet) | **GET** /A_SalesOrderPrecdgProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrder | Reads the sales order header data for a preceding document of a sales order. |
| [**aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet) | **GET** /A_SalesOrderRelatedObject(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_SalesOrder | Reads the sales order header for a related object. |
| [**aSalesOrderSalesOrderDelete()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderDelete) | **DELETE** /A_SalesOrder(&#39;{SalesOrder}&#39;) | Deletes a sales order. |
| [**aSalesOrderSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;) | Reads the header of a sales order. |
| [**aSalesOrderSalesOrderPatch()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderPatch) | **PATCH** /A_SalesOrder(&#39;{SalesOrder}&#39;) | Updates a sales order. |
| [**aSalesOrderSalesOrderToBillingPlanGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToBillingPlanGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_BillingPlan | Reads the billing plan of a sales order. |
| [**aSalesOrderSalesOrderToItemGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToItemGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Item | Reads all items of a sales order. |
| [**aSalesOrderSalesOrderToItemPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToItemPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Item | Creates a sales order item for a sales order. |
| [**aSalesOrderSalesOrderToPartnerGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPartnerGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Partner | Reads the header partners of a sales order. |
| [**aSalesOrderSalesOrderToPartnerPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPartnerPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Partner | Creates a header partner for a sales order. |
| [**aSalesOrderSalesOrderToPaymentPlanItemDetailsGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPaymentPlanItemDetailsGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PaymentPlanItemDetails | Reads the header payment plan of a specific sales order. |
| [**aSalesOrderSalesOrderToPaymentPlanItemDetailsPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPaymentPlanItemDetailsPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PaymentPlanItemDetails | Creates a header payment plan for a specific sales order. |
| [**aSalesOrderSalesOrderToPrecedingProcFlowDocGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPrecedingProcFlowDocGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PrecedingProcFlowDoc | Get entities from related to_PrecedingProcFlowDoc |
| [**aSalesOrderSalesOrderToPricingElementGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPricingElementGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PricingElement | Reads the pricing element of a sales order. |
| [**aSalesOrderSalesOrderToPricingElementPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToPricingElementPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_PricingElement | Creates a header pricing element for a specific sales order. |
| [**aSalesOrderSalesOrderToRelatedObjectGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToRelatedObjectGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_RelatedObject | Reads the related objects of a sales order header. |
| [**aSalesOrderSalesOrderToRelatedObjectPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToRelatedObjectPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_RelatedObject | Creates a related object for a sales order header. |
| [**aSalesOrderSalesOrderToSubsequentProcFlowDocGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToSubsequentProcFlowDocGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_SubsequentProcFlowDoc | Get entities from related to_SubsequentProcFlowDoc |
| [**aSalesOrderSalesOrderToTextGet()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToTextGet) | **GET** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Text | Reads the header texts of a sales order. |
| [**aSalesOrderSalesOrderToTextPost()**](SalesOrderHeaderApi.md#aSalesOrderSalesOrderToTextPost) | **POST** /A_SalesOrder(&#39;{SalesOrder}&#39;)/to_Text | Creates a header text for a sales order. |
| [**aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet) | **GET** /A_SalesOrderSubsqntProcFlow(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,DocRelationshipUUID&#x3D;guid&#39;{DocRelationshipUUID}&#39;)/to_SalesOrder | Reads the sales order header data for a subsequent document of a sales order. |
| [**aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet()**](SalesOrderHeaderApi.md#aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet) | **GET** /A_SalesOrderText(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_SalesOrder | Reads the sales order header for a header text. |
| [**aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet()**](SalesOrderHeaderApi.md#aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet) | **GET** /A_SlsOrdPaymentPlanItemDetails(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,PaymentPlanItem&#x3D;&#39;{PaymentPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for a payment plan item. |
| [**aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet()**](SalesOrderHeaderApi.md#aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet) | **GET** /A_SlsOrderItemBillingPlanItem(SalesOrder&#x3D;&#39;{SalesOrder}&#39;,SalesOrderItem&#x3D;&#39;{SalesOrderItem}&#39;,BillingPlan&#x3D;&#39;{BillingPlan}&#39;,BillingPlanItem&#x3D;&#39;{BillingPlanItem}&#39;)/to_SalesOrder | Reads the sales order header for an item billing plan item. |


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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderBillingPlanItemSalesOrderSalesOrderBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderBillingPlanSalesOrderSalesOrderBillingPlanBillingPlanToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderGet()`

```php
aSalesOrderGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper
```

Reads all sales order headers.

Reads the header data of all sales orders in the system.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet()`

```php
aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet($sales_order, $partner_function, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a header partner.

Reads the sales order header data for a specific header partner function. Consumers must pass the following key fields: partner function and the sales order ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$partner_function = 'partner_function_example'; // string | Partner Function
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet($sales_order, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderHeaderPartnerSalesOrderSalesOrderPartnerFunctionPartnerFunctionToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **partner_function** | **string**| Partner Function | |
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderHeaderPrElementSalesOrderSalesOrderPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemBillingPlanSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemPartnerAddressSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet()`

```php
aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet($sales_order, $sales_order_item, $partner_function, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header of a partner function of a sales order item.

Reads the sales order header data for a specific item partner function. Consumers must pass the following key fields: sales order ID, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$partner_function = 'partner_function_example'; // string | Partner Function
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet($sales_order, $sales_order_item, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemPartnerSalesOrderSalesOrderSalesOrderItemSalesOrderItemPartnerFunctionPartnerFunctionToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **partner_function** | **string**| Partner Function | |
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

## `aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet()`

```php
aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet($sales_order, $sales_order_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a pricing element.

Reads the sales order header data for a specific pricing element of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet($sales_order, $sales_order_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemPrElementSalesOrderSalesOrderSalesOrderItemSalesOrderItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
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

## `aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet()`

```php
aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet($sales_order, $sales_order_item, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a related object of a sales order item.

Reads the sales order header data for a specific related object of a specific sales order item. Consumers must pass the following key fields: sales order ID, item number, and sequence number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sales_order_item = 'sales_order_item_example'; // string | Sales Order Item
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet($sales_order, $sales_order_item, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sales_order_item** | **string**| Sales Order Item | |
| **sd_doc_related_object_sequence_nmbr** | **string**| Sequence Number of the Related Object of an SD Document | |
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

## `aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet()`

```php
aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet($sales_order, $sales_order_item, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header of a sales order item.

Reads the sales order header data for a specific item. Consumers must pass the following key fields: sales order ID and item number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet($sales_order, $sales_order_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderType**](../Model/ASalesOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItemTextSalesOrderSalesOrderSalesOrderItemSalesOrderItemLanguageLanguageLongTextIDLongTextIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()`

```php
aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header data of a preceding item of a sales order.

Reads the sales order header data for specific preceding item of a sales order item. Consumers must pass the following key fields: sales order ID, sales order item number, and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Subsequent Sales and Distribution Document
$sales_order_item = 'sales_order_item_example'; // string | Subsequent Item of an SD Document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $sales_order_item, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItmPrecdgProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Subsequent Sales and Distribution Document | |
| **sales_order_item** | **string**| Subsequent Item of an SD Document | |
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderItmSubsqntProcFlowSalesOrderSalesOrderSalesOrderItemSalesOrderItemDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderPartnerAddressSalesOrderSalesOrderPartnerFunctionPartnerFunctionAddressRepresentationCodeAddressRepresentationCodeToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderPost()`

```php
aSalesOrderPost($apisalesordersrva_sales_order_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Creates a sales order.

Creates a sales order header. Consumers can create a sales order with all possible sub-entities (for example, header partners or items) using deep insert requests or create a single sales order header.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apisalesordersrva_sales_order_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderPost($apisalesordersrva_sales_order_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apisalesordersrva_sales_order_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTypeCreate**](../Model/APISALESORDERSRVASalesOrderTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderType**](../Model/ASalesOrderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()`

```php
aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header data for a preceding document of a sales order.

Read the sales order header data for a preceding document of a specific sales order. Consumers must pass the following key fields: sales order ID and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Subsequent Sales and Distribution Document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderPrecdgProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Subsequent Sales and Distribution Document | |
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

## `aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet()`

```php
aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet($sales_order, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a related object.

Reads the sales order header data for a specific related object. Consumers must pass the following key fields: sales order ID and sequence number.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet($sales_order, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderRelatedObjectSalesOrderSalesOrderSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **sd_doc_related_object_sequence_nmbr** | **string**| Sequence Number of the Related Object of an SD Document | |
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

## `aSalesOrderSalesOrderDelete()`

```php
aSalesOrderSalesOrderDelete($sales_order)
```

Deletes a sales order.

Deletes the header data of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order

try {
    $apiInstance->aSalesOrderSalesOrderDelete($sales_order);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |

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

## `aSalesOrderSalesOrderGet()`

```php
aSalesOrderSalesOrderGet($sales_order, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the header of a sales order.

Reads the header data of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderSalesOrderGet($sales_order, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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

## `aSalesOrderSalesOrderPatch()`

```php
aSalesOrderSalesOrderPatch($sales_order, $modified_a_sales_order_type)
```

Updates a sales order.

Updates the header data of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$modified_a_sales_order_type = new \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderType(); // \BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderType | New property values

try {
    $apiInstance->aSalesOrderSalesOrderPatch($sales_order, $modified_a_sales_order_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **modified_a_sales_order_type** | [**\BeLenka\SAP\SalesOrder\Model\ModifiedASalesOrderType**](../Model/ModifiedASalesOrderType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToBillingPlanGet: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderSalesOrderToItemGet()`

```php
aSalesOrderSalesOrderToItemGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper1
```

Reads all items of a sales order.

Reads all item data of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToItemGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToItemPost()`

```php
aSalesOrderSalesOrderToItemPost($sales_order, $apisalesordersrva_sales_order_item_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType
```

Creates a sales order item for a sales order.

Creates a sales order item for a specific sales order. Consumers can create an item with all possible sub-entities (for example, item partners or item texts) using deep insert requests or create a single item. Consumers must pass the sales order ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sales_order_item_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToItemPost($sales_order, $apisalesordersrva_sales_order_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sales_order_item_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTypeCreate**](../Model/APISALESORDERSRVASalesOrderItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderItemType**](../Model/ASalesOrderItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToPartnerGet()`

```php
aSalesOrderSalesOrderToPartnerGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper2
```

Reads the header partners of a sales order.

Reads the partner data from the header of a specific sales order. Consumers must pass the sales order ID (key field). The data is relevant for all items for which no item-specific partners are maintained.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToPartnerGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPartnerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper2**](../Model/Wrapper2.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToPartnerPost()`

```php
aSalesOrderSalesOrderToPartnerPost($sales_order, $apisalesordersrva_sales_order_header_partner_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPartnerType
```

Creates a header partner for a sales order.

Creates the partner data for a specific sales order header. Consumers must pass the sales order ID (key field). The data is relevant for all items for which no item-specific partners are maintained.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sales_order_header_partner_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPartnerTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPartnerTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToPartnerPost($sales_order, $apisalesordersrva_sales_order_header_partner_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPartnerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sales_order_header_partner_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderHeaderPartnerTypeCreate**](../Model/APISALESORDERSRVASalesOrderHeaderPartnerTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderHeaderPartnerType**](../Model/ASalesOrderHeaderPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPaymentPlanItemDetailsGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPaymentPlanItemDetailsPost: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderSalesOrderToPrecedingProcFlowDocGet()`

```php
aSalesOrderSalesOrderToPrecedingProcFlowDocGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper4
```

Get entities from related to_PrecedingProcFlowDoc

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToPrecedingProcFlowDocGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPrecedingProcFlowDocGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper4**](../Model/Wrapper4.md)

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPricingElementGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToPricingElementPost: ', $e->getMessage(), PHP_EOL;
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

## `aSalesOrderSalesOrderToRelatedObjectGet()`

```php
aSalesOrderSalesOrderToRelatedObjectGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper6
```

Reads the related objects of a sales order header.

Reads the data for related objects from the header of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToRelatedObjectGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToRelatedObjectPost()`

```php
aSalesOrderSalesOrderToRelatedObjectPost($sales_order, $apisalesordersrva_sales_order_related_object_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderRelatedObjectType
```

Creates a related object for a sales order header.

Creates the data for a related object for the header of a specific sales order. Consumers must pass the sales order ID (key field), the related object type, and the related object reference 1.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sales_order_related_object_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderRelatedObjectTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderRelatedObjectTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToRelatedObjectPost($sales_order, $apisalesordersrva_sales_order_related_object_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sales_order_related_object_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderRelatedObjectTypeCreate**](../Model/APISALESORDERSRVASalesOrderRelatedObjectTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderRelatedObjectType**](../Model/ASalesOrderRelatedObjectType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToSubsequentProcFlowDocGet()`

```php
aSalesOrderSalesOrderToSubsequentProcFlowDocGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper7
```

Get entities from related to_SubsequentProcFlowDoc

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToSubsequentProcFlowDocGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToSubsequentProcFlowDocGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToTextGet()`

```php
aSalesOrderSalesOrderToTextGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\SalesOrder\Model\Wrapper8
```

Reads the header texts of a sales order.

Reads the text data from the header of a specific sales order. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    $result = $apiInstance->aSalesOrderSalesOrderToTextGet($sales_order, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\SalesOrder\Model\Wrapper8**](../Model/Wrapper8.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSalesOrderToTextPost()`

```php
aSalesOrderSalesOrderToTextPost($sales_order, $apisalesordersrva_sales_order_text_type_create): \BeLenka\SAP\SalesOrder\Model\ASalesOrderTextType
```

Creates a header text for a sales order.

Creates the text data for a specific sales order header. Consumers must pass the sales order ID (key field).

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$apisalesordersrva_sales_order_text_type_create = new \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTextTypeCreate(); // \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTextTypeCreate | New entity

try {
    $result = $apiInstance->aSalesOrderSalesOrderToTextPost($sales_order, $apisalesordersrva_sales_order_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSalesOrderToTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
| **apisalesordersrva_sales_order_text_type_create** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTextTypeCreate**](../Model/APISALESORDERSRVASalesOrderTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\ASalesOrderTextType**](../Model/ASalesOrderTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet()`

```php
aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $doc_relationship_uuid, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header data for a subsequent document of a sales order.

Read the sales order header data for a subsequent document of a specific sales order. Consumers must pass the following key fields: sales order ID and document relationship UUID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Preceding sales and distribution document
$doc_relationship_uuid = 01234567-89ab-cdef-0123-456789abcdef; // string | SD Unique Document Relationship Identification
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet($sales_order, $doc_relationship_uuid, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderSubsqntProcFlowSalesOrderSalesOrderDocRelationshipUUIDguidDocRelationshipUUIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Preceding sales and distribution document | |
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

## `aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet()`

```php
aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet($sales_order, $language, $long_text_id, $select, $expand): \BeLenka\SAP\SalesOrder\Model\ASalesOrderType
```

Reads the sales order header for a header text.

Reads the sales order header data for a specific header text. Consumers must pass the following key fields: sales order ID, language, and text ID.

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Sales Order
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet($sales_order, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderHeaderApi->aSalesOrderTextSalesOrderSalesOrderLanguageLanguageLongTextIDLongTextIDToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Sales Order | |
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSlsOrdPaymentPlanItemDetailsSalesOrderSalesOrderPaymentPlanItemPaymentPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\SalesOrderHeaderApi(
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
    echo 'Exception when calling SalesOrderHeaderApi->aSlsOrderItemBillingPlanItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemBillingPlanBillingPlanBillingPlanItemBillingPlanItemToSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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
