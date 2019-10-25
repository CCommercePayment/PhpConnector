# CpaymentConnector\PaymentsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](PaymentsApi.md#v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet) | **GET** /v1/payments/all/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets ALL the details for a specified OrderRef.
[**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet**](PaymentsApi.md#v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId}/{orderTag} | Gets the details for a specified couple of OrderRef/OrderTag.
[**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](PaymentsApi.md#v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets the details for a specified OrderRef.
[**v1PaymentsByOrderRefOperationsCancelOrRefundPut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsCancelOrRefundPut) | **PUT** /v1/payments/{orderRef}/operations/cancelOrRefund | Executes a cancel or refund operation on the specified OrderRef.
[**v1PaymentsByOrderRefOperationsCapturePut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsCapturePut) | **PUT** /v1/payments/{orderRef}/operations/capture | Executes a capture operation on the specified OrderRef.
[**v1PaymentsByOrderRefOperationsRecomputePut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsRecomputePut) | **PUT** /v1/payments/{orderRef}/operations/recompute | Executes a recompute operation on the specified OrderRef.



## v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token)

Gets ALL the details for a specified OrderRef.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The order reference.
$merchant_id = 56; // int | The merchant identifier.
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The order reference. |
 **merchant_id** | **int**| The merchant identifier. |
 **merchant_site_id** | **string**| The merchant site identifier. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet($order_ref, $merchant_id, $merchant_site_id, $order_tag, $auth_token)

Gets the details for a specified couple of OrderRef/OrderTag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The order reference.
$merchant_id = 56; // int | The merchant identifier.
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier.
$order_tag = 'order_tag_example'; // string | The order Tag
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet($order_ref, $merchant_id, $merchant_site_id, $order_tag, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The order reference. |
 **merchant_id** | **int**| The merchant identifier. |
 **merchant_site_id** | **string**| The merchant site identifier. |
 **order_tag** | **string**| The order Tag |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token)

Gets the details for a specified OrderRef.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The order reference.
$merchant_id = 56; // int | The merchant identifier.
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The order reference. |
 **merchant_id** | **int**| The merchant identifier. |
 **merchant_site_id** | **string**| The merchant site identifier. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsCancelOrRefundPut

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsCancelOrRefundPut($order_ref, $auth_token, $payment_operation_request)

Executes a cancel or refund operation on the specified OrderRef.

This operation allows the merchant to cancel (also referred to as \"void\") or refund a transaction, according to its current state.    You can find below the exhaustive list of cases which may happen.      With a Cancel operation, the customer will not see movement on his bank account, contrary to Refund which gives back the charged amount.    Cancel is only performed when:    1. The transaction is not yet captured (in which case, the fund reservation on the customer payment method is cleared)    2. The operation occurs on the same day as the capture operation.        If you want to cancel or refund less than the original transaction amount, you can specify the amount in the request body.   Alternatively you can specify an amount of 0 (or not specify the amount in the request) if you want to refund the total amount.    * Partial operation: 0 &lt; amount &lt; transaction amount    * Full operation: amount == transaction amount OR amount == 0      ---      ## Cancel Or Refund cases ##     **After the authorization, and before the capture**     Because the refund operation cannot be executed on a non-captured transaction, only the cancel operation is supported    | Partial Operation                                                               | Full Operation                                                                                                                                      |  | ------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |  | No interaction with partners because partial cancel/void is **not supported**. <br /> The only impact is an update of the remaining amount to capture in payment hub. | **Cancel** operation will be executed on the entire transaction. <br /> The fund reservation on the customer payment method will be cleared, and capture will no longer be possible.<br /> Cancelling a non captured transaction is **not worldwide supported**, and depends on the payment partner (PSP), the acquiring bank, and the issuing bank. |    **After the capture**     Because the balance is made at midnight, either the cancel operation or the refund operation will be selected depending on the date.       |                                          | Partial Operation                                                                                                             | Full Operation                                            |  | ---------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------- |  | On the same day as the capture operation | The **cancel** operation will be executed. <br /> Partial cancelling of a captured transaction is supported, but doesn't behave the same depending on the payment partner used. <br /> In some cases, a **refund** will be executed instead. | The **cancel** operation will be executed. <br /> Full cancel of a captured transaction is **fully supported**. |  | D+1 and later                            | The **refund** operation will be executed. <br /> Partial refund is **fully supported**. | The **refund** operation will be executed. <br /> Full refund is **fully supported**. |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \CpaymentConnector\Model\PaymentOperationsRequest(); // \CpaymentConnector\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

try {
    $result = $apiInstance->v1PaymentsByOrderRefOperationsCancelOrRefundPut($order_ref, $auth_token, $payment_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsByOrderRefOperationsCancelOrRefundPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The OrderRef. |
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_operation_request** | [**\CpaymentConnector\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsCapturePut

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsCapturePut($order_ref, $auth_token, $payment_operation_request)

Executes a capture operation on the specified OrderRef.

This operation charges the bank account of the customer, following a valid authorization done before. You need to provide a succeeded authorized OrderRef, and the amount you want to charge.  This is well suited for a \"charge at shipping\" scenario: the merchant makes an authorization when the customer place the order, and the bank account is charged when the merchant actually does the shipping.    - If you want to capture the total amount of the authorization, you can either set the amount to 0 in the request, or simply not specify it.    ### Useful reminders:    * You can capture the authorization multiple times, as long as there is some amount remaining. For instance, with an authorization of 100€, you can capture 20€ and then capture 80€ later, within the limited time.    * Please note that the authorization is only valid for a limited amount of time, and that you cannot capture a greater amount than the authorized one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \CpaymentConnector\Model\PaymentOperationsRequest(); // \CpaymentConnector\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

try {
    $result = $apiInstance->v1PaymentsByOrderRefOperationsCapturePut($order_ref, $auth_token, $payment_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsByOrderRefOperationsCapturePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The OrderRef. |
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_operation_request** | [**\CpaymentConnector\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsRecomputePut

> \CpaymentConnector\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsRecomputePut($order_ref, $auth_token, $payment_operation_request)

Executes a recompute operation on the specified OrderRef.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \CpaymentConnector\Model\PaymentOperationsRequest(); // \CpaymentConnector\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

try {
    $result = $apiInstance->v1PaymentsByOrderRefOperationsRecomputePut($order_ref, $auth_token, $payment_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->v1PaymentsByOrderRefOperationsRecomputePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_ref** | **string**| The OrderRef. |
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_operation_request** | [**\CpaymentConnector\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\CpaymentConnector\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

