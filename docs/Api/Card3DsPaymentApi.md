# CpaymentConnector\Card3DsPaymentApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsCard3dsPaymentPost**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentPost) | **POST** /v1/payments/card3ds-payment | Achieve a 3DS payment (CheckEnrollment)
[**v1PaymentsCard3dsPaymentPut**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentPut) | **PUT** /v1/payments/card3ds-payment | Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).



## v1PaymentsCard3dsPaymentPost

> \CpaymentConnector\Model\Card3DsPaymentResponse v1PaymentsCard3dsPaymentPost($auth_token, $card3_ds_payment_request)

Achieve a 3DS payment (CheckEnrollment)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\Card3DsPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$card3_ds_payment_request = new \CpaymentConnector\Model\Card3DsPaymentRequest(); // \CpaymentConnector\Model\Card3DsPaymentRequest | All data needed to make a 3DS card payment

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentPost($auth_token, $card3_ds_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Card3DsPaymentApi->v1PaymentsCard3dsPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **card3_ds_payment_request** | [**\CpaymentConnector\Model\Card3DsPaymentRequest**](../Model/Card3DsPaymentRequest.md)| All data needed to make a 3DS card payment | [optional]

### Return type

[**\CpaymentConnector\Model\Card3DsPaymentResponse**](../Model/Card3DsPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsCard3dsPaymentPut

> \CpaymentConnector\Model\CardPaymentResponse v1PaymentsCard3dsPaymentPut($auth_token, $card3_ds_payment_put_request)

Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\Card3DsPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$card3_ds_payment_put_request = new \CpaymentConnector\Model\Card3DsPaymentPutRequest(); // \CpaymentConnector\Model\Card3DsPaymentPutRequest | The card payment put request.

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentPut($auth_token, $card3_ds_payment_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Card3DsPaymentApi->v1PaymentsCard3dsPaymentPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **card3_ds_payment_put_request** | [**\CpaymentConnector\Model\Card3DsPaymentPutRequest**](../Model/Card3DsPaymentPutRequest.md)| The card payment put request. | [optional]

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

