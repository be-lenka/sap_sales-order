# # APISALESORDERSRVASalesOrderItmSubsqntProcFlowTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_order** | **string** | Preceding sales and distribution document |
**sales_order_item** | **string** | Preceding Item of an SD Document |
**doc_relationship_uuid** | **string** | SD Unique Document Relationship Identification |
**subsequent_document** | **string** | Subsequent Sales and Distribution Document | [optional]
**subsequent_document_item** | **string** | Subsequent Item of an SD Document | [optional]
**subsequent_document_category** | **string** | Document Category of Subsequent Document | [optional]
**process_flow_level** | **string** | Level of the document flow record | [optional]
**related_proc_flow_doc_sts_field_name** | **string** |  | [optional]
**sd_process_status** | **string** | Overall Processing Status (Item) | [optional]
**accounting_transfer_status** | **string** | Status for Transfer to Accounting | [optional]
**prelim_billing_document_status** | **string** | Preliminary Billing Document Status | [optional]
**subsqnt_doc_itm_precdg_document** | **string** | Preceding sales and distribution document | [optional]
**subsqnt_doc_itm_precdg_doc_item** | **string** | Preceding Item of an SD Document | [optional]
**subsqnt_doc_itm_precdg_doc_category** | **string** | Document Category of Preceding SD Document | [optional]
**creation_date** | **string** | Record Creation Date | [optional]
**creation_time** | **string** | Entry time | [optional]
**last_change_date** | **string** | Last Changed On | [optional]
**to_sales_order** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTypeCreate**](APISALESORDERSRVASalesOrderTypeCreate.md) |  | [optional]
**to_sales_order_item** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemTypeCreate**](APISALESORDERSRVASalesOrderItemTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
