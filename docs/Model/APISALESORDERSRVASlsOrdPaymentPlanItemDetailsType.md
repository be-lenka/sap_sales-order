# # APISALESORDERSRVASlsOrdPaymentPlanItemDetailsType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_order** | **string** |  | [optional]
**payment_plan_item** | **string** | Item for billing plan/invoice plan/payment cards | [optional]
**payment_plan** | **string** | Billing Plan Number / Invoicing Plan Number | [optional]
**electronic_payment_type** | **string** | Electronic Payment: Payment Type | [optional]
**electronic_payment** | **string** | Electronic Payment: Account Number | [optional]
**e_payt_validity_start_date** | **string** | Electronic Payment: Valid from | [optional]
**e_payt_validity_end_date** | **string** | Electronic Payment: Valid to | [optional]
**electronic_payment_holder_name** | **string** | Electronic Payment: Name of Account Holder | [optional]
**authorized_amount_in_authzn_crcy** | **float** | Electronic Payment: Authorized Amount | [optional]
**authorization_currency** | **string** | Currency Key | [optional]
**authorization_by_digital_payt_srvc** | **string** | Electronic Payment: Authorization Number | [optional]
**authorization_by_acquirer** | **string** | Electronic Payment: Authorization Reference Code | [optional]
**authorization_date** | **string** | Electronic Payment: Authorization Date | [optional]
**authorization_time** | **string** | Electronic Payment: Authorization Time | [optional]
**authorization_status_name** | **string** | Payment cards: Result text | [optional]
**e_payt_by_digital_payment_srvc** | **string** | Token for Digital Payment Integration in SD | [optional]
**electronic_payment_call_status** | **string** | Electronic Payment: Call Status | [optional]
**e_payt_authorization_result** | **string** | Electronic Payment: Response to Authorization Checks | [optional]
**e_payt_to_be_authorized_amount** | **float** | Electronic Payment: Amount to Be Authorized | [optional]
**e_payt_authorization_is_expired** | **bool** | Electronic Payment: Authorization Expired | [optional]
**e_payt_amount_is_changed** | **bool** | Electronic Payment: Amount Changed | [optional]
**preauthorization_is_requested** | **bool** | Electronic Payment: Preauthorization | [optional]
**payment_service_provider** | **string** | Payment Service Provider for Digital Payments | [optional]
**payment_by_payment_service_prvdr** | **string** | Digital Payments: Payment ID from Payment Service Provider | [optional]
**transaction_by_payt_srvc_prvdr** | **string** | SAP Digital Payments: Transaction ID of PSP | [optional]
**merchant_by_clearing_house** | **string** | Electronic Payment: Merchant ID at Clearing House | [optional]
**payment_card_authzn_relation_id** | **string** | Unique identifier of a previous successful authorization | [optional]
**maximum_to_be_authorized_amount** | **float** | Value to be billed/calc. on date in billing/invoice plan | [optional]
**payt_pln_for_authorization_item** | **string** | Higher-level payment card plan number for billing | [optional]
**payt_pln_itm_for_authorization_item** | **string** | Higher-level item in billing plan | [optional]
**to_sales_order** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderType**](APISALESORDERSRVASalesOrderType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
