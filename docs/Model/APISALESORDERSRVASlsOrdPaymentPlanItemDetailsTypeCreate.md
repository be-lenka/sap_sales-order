# # APISALESORDERSRVASlsOrdPaymentPlanItemDetailsTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_plan_item** | **string** | Item for billing plan/invoice plan/payment cards |
**electronic_payment_type** | **string** | Electronic Payment: Payment Type | [optional]
**electronic_payment** | **string** | Electronic Payment: Account Number | [optional]
**e_payt_validity_start_date** | **string** | Electronic Payment: Valid from | [optional]
**e_payt_validity_end_date** | **string** | Electronic Payment: Valid to | [optional]
**electronic_payment_holder_name** | **string** | Electronic Payment: Name of Account Holder | [optional]
**authorized_amount_in_authzn_crcy** | **float** | Electronic Payment: Authorized Amount | [optional]
**authorization_by_digital_payt_srvc** | **string** | Electronic Payment: Authorization Number | [optional]
**e_payt_by_digital_payment_srvc** | **string** | Token for Digital Payment Integration in SD | [optional]
**payment_service_provider** | **string** | Payment Service Provider for Digital Payments | [optional]
**payment_by_payment_service_prvdr** | **string** | Digital Payments: Payment ID from Payment Service Provider | [optional]
**transaction_by_payt_srvc_prvdr** | **string** | SAP Digital Payments: Transaction ID of PSP | [optional]
**merchant_by_clearing_house** | **string** | Electronic Payment: Merchant ID at Clearing House | [optional]
**payment_card_authzn_relation_id** | **string** | Unique identifier of a previous successful authorization | [optional]
**maximum_to_be_authorized_amount** | **float** | Value to be billed/calc. on date in billing/invoice plan | [optional]
**to_sales_order** | [**\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderTypeCreate**](APISALESORDERSRVASalesOrderTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
