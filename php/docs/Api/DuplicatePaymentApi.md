# pachirapay\DuplicatePaymentApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsDuplicatePaymentBatchPost**](DuplicatePaymentApi.md#v1PaymentsDuplicatePaymentBatchPost) | **POST** /v1/payments/duplicate-payment/batch | Duplicate payment batch
[**v1PaymentsDuplicatePaymentPost**](DuplicatePaymentApi.md#v1PaymentsDuplicatePaymentPost) | **POST** /v1/payments/duplicate-payment | Duplicate payment



## v1PaymentsDuplicatePaymentBatchPost

> \pachirapay\Model\CardPaymentResponse v1PaymentsDuplicatePaymentBatchPost($auth_token, $duplicate_payment_batch_request)

Duplicate payment batch

Achieve a batch of payments by copy of previously processed payments, with the same payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\DuplicatePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$duplicate_payment_batch_request = new \pachirapay\Model\DuplicatePaymentBatchRequest(); // \pachirapay\Model\DuplicatePaymentBatchRequest | All data needed to make process the payment, with the reference to the previously payment.

try {
    $result = $apiInstance->v1PaymentsDuplicatePaymentBatchPost($auth_token, $duplicate_payment_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DuplicatePaymentApi->v1PaymentsDuplicatePaymentBatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **duplicate_payment_batch_request** | [**\pachirapay\Model\DuplicatePaymentBatchRequest**](../Model/DuplicatePaymentBatchRequest.md)| All data needed to make process the payment, with the reference to the previously payment. | [optional]

### Return type

[**\pachirapay\Model\CardPaymentResponse**](../Model/CardPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsDuplicatePaymentPost

> \pachirapay\Model\CardPaymentResponse v1PaymentsDuplicatePaymentPost($auth_token, $duplicate_payment_request)

Duplicate payment

Achieve a payment by copy of a previously processed payment, with the same payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\DuplicatePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$duplicate_payment_request = new \pachirapay\Model\DuplicatePaymentRequest(); // \pachirapay\Model\DuplicatePaymentRequest | All data needed to make process the payment, with the reference to the previously payment.

try {
    $result = $apiInstance->v1PaymentsDuplicatePaymentPost($auth_token, $duplicate_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DuplicatePaymentApi->v1PaymentsDuplicatePaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **duplicate_payment_request** | [**\pachirapay\Model\DuplicatePaymentRequest**](../Model/DuplicatePaymentRequest.md)| All data needed to make process the payment, with the reference to the previously payment. | [optional]

### Return type

[**\pachirapay\Model\CardPaymentResponse**](../Model/CardPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

