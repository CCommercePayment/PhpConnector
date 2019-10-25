# CpaymentConnector\CardPaymentApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsCardPaymentPost**](CardPaymentApi.md#v1PaymentsCardPaymentPost) | **POST** /v1/payments/card-payment | Achieve a payment with a card without 3DSecure.  To achieve a 3DS payment (CheckEnrollment), see the /payment/card3ds-payment resource.



## v1PaymentsCardPaymentPost

> \CpaymentConnector\Model\CardPaymentResponse v1PaymentsCardPaymentPost($auth_token, $card_payment_request)

Achieve a payment with a card without 3DSecure.  To achieve a 3DS payment (CheckEnrollment), see the /payment/card3ds-payment resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\CardPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$card_payment_request = new \CpaymentConnector\Model\CardPaymentRequest(); // \CpaymentConnector\Model\CardPaymentRequest | All data needed to make card payment

try {
    $result = $apiInstance->v1PaymentsCardPaymentPost($auth_token, $card_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentApi->v1PaymentsCardPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **card_payment_request** | [**\CpaymentConnector\Model\CardPaymentRequest**](../Model/CardPaymentRequest.md)| All data needed to make card payment | [optional]

### Return type

[**\CpaymentConnector\Model\CardPaymentResponse**](../Model/CardPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

