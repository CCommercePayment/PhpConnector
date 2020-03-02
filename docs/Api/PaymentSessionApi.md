# pachirapay\PaymentSessionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentSessionsByPaymentSessionIdPaymentResultGet**](PaymentSessionApi.md#v1PaymentSessionsByPaymentSessionIdPaymentResultGet) | **GET** /v1/payment-sessions/{paymentSessionId}/paymentResult | Gets the payment result from its session id.
[**v1PaymentSessionsPost**](PaymentSessionApi.md#v1PaymentSessionsPost) | **POST** /v1/payment-sessions | Creates a payment session.



## v1PaymentSessionsByPaymentSessionIdPaymentResultGet

> \pachirapay\Model\GetPaymentSessionResult v1PaymentSessionsByPaymentSessionIdPaymentResultGet($payment_session_id, $auth_token)

Gets the payment result from its session id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_session_id = 'payment_session_id_example'; // string | The payment session id.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1PaymentSessionsByPaymentSessionIdPaymentResultGet($payment_session_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionApi->v1PaymentSessionsByPaymentSessionIdPaymentResultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_session_id** | [**string**](../Model/.md)| The payment session id. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\pachirapay\Model\GetPaymentSessionResult**](../Model/GetPaymentSessionResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentSessionsPost

> \pachirapay\Model\PaymentSessionResponse v1PaymentSessionsPost($auth_token, $payment_session_request)

Creates a payment session.

Initializes a hosted form payment session with all the necessary data (order information, customer information, payment method...).  This API route can be used for classic hosted form. In that case, this operation is an alternative to the \"client redirection POST\" method (with HMAC).  It's also the standard way for initializing a payment session for \"iframe integration\".            You will get an URL pointing to a paymentform, so that the customer is able to complete the payment form with his card details.  You will also get a PaymentSessionId, useful for calling the GetPaymentResult API when the payment is completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_session_request = new \pachirapay\Model\PaymentSessionRequest(); // \pachirapay\Model\PaymentSessionRequest | The payment session request.

try {
    $result = $apiInstance->v1PaymentSessionsPost($auth_token, $payment_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionApi->v1PaymentSessionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_session_request** | [**\pachirapay\Model\PaymentSessionRequest**](../Model/PaymentSessionRequest.md)| The payment session request. | [optional]

### Return type

[**\pachirapay\Model\PaymentSessionResponse**](../Model/PaymentSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

