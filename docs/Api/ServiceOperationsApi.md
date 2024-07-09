# BeLenka\SAP\SalesOrder\ServiceOperationsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_SALES_ORDER_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rejectApprovalRequestPost()**](ServiceOperationsApi.md#rejectApprovalRequestPost) | **POST** /rejectApprovalRequest | Invoke action rejectApprovalRequest |
| [**releaseApprovalRequestPost()**](ServiceOperationsApi.md#releaseApprovalRequestPost) | **POST** /releaseApprovalRequest | Invoke action releaseApprovalRequest |


## `rejectApprovalRequestPost()`

```php
rejectApprovalRequestPost($sales_order): \BeLenka\SAP\SalesOrder\Model\FunctionResult
```

Invoke action rejectApprovalRequest

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ServiceOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Value needs to be enclosed in single quotes

try {
    $result = $apiInstance->rejectApprovalRequestPost($sales_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOperationsApi->rejectApprovalRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Value needs to be enclosed in single quotes | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\FunctionResult**](../Model/FunctionResult.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseApprovalRequestPost()`

```php
releaseApprovalRequestPost($sales_order): \BeLenka\SAP\SalesOrder\Model\FunctionResult1
```

Invoke action releaseApprovalRequest

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


$apiInstance = new BeLenka\SAP\SalesOrder\Api\ServiceOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = 'sales_order_example'; // string | Value needs to be enclosed in single quotes

try {
    $result = $apiInstance->releaseApprovalRequestPost($sales_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOperationsApi->releaseApprovalRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | **string**| Value needs to be enclosed in single quotes | |

### Return type

[**\BeLenka\SAP\SalesOrder\Model\FunctionResult1**](../Model/FunctionResult1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
