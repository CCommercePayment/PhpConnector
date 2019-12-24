# CpaymentConnector\Card3DsPaymentApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsCard3dsPaymentAuthenticationPost**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentAuthenticationPost) | **POST** /v1/payments/card3ds-payment/authentication | Validate authentication.
[**v1PaymentsCard3dsPaymentPost**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentPost) | **POST** /v1/payments/card3ds-payment | Check enrollment
[**v1PaymentsCard3dsPaymentPut**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentPut) | **PUT** /v1/payments/card3ds-payment | Validate authentication AND authorize / payment
[**v1PaymentsCard3dsPaymentWithAuthenticationDataPost**](Card3DsPaymentApi.md#v1PaymentsCard3dsPaymentWithAuthenticationDataPost) | **POST** /v1/payments/card3ds-payment/with-authentication-data | Authorization / payment -with- authentication data



## v1PaymentsCard3dsPaymentAuthenticationPost

> \CpaymentConnector\Model\Card3DsValidateAuthenticationResponse v1PaymentsCard3dsPaymentAuthenticationPost($auth_token, $card3_ds_validate_authentication_request)

Validate authentication.

To process a payment authorization linked to this authentication, you should pass all authentication data.

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
$card3_ds_validate_authentication_request = new \CpaymentConnector\Model\Card3DsValidateAuthenticationRequest(); // \CpaymentConnector\Model\Card3DsValidateAuthenticationRequest | The validate authentication request.

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentAuthenticationPost($auth_token, $card3_ds_validate_authentication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Card3DsPaymentApi->v1PaymentsCard3dsPaymentAuthenticationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **card3_ds_validate_authentication_request** | [**\CpaymentConnector\Model\Card3DsValidateAuthenticationRequest**](../Model/Card3DsValidateAuthenticationRequest.md)| The validate authentication request. | [optional]

### Return type

[**\CpaymentConnector\Model\Card3DsValidateAuthenticationResponse**](../Model/Card3DsValidateAuthenticationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsCard3dsPaymentPost

> \CpaymentConnector\Model\Card3DsCheckEnrollmentResponse v1PaymentsCard3dsPaymentPost($auth_token, $card3_ds_check_enrollment_request)

Check enrollment

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
$card3_ds_check_enrollment_request = new \CpaymentConnector\Model\Card3DsCheckEnrollmentRequest(); // \CpaymentConnector\Model\Card3DsCheckEnrollmentRequest | All data needed to make a 3DS card payment

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentPost($auth_token, $card3_ds_check_enrollment_request);
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
 **card3_ds_check_enrollment_request** | [**\CpaymentConnector\Model\Card3DsCheckEnrollmentRequest**](../Model/Card3DsCheckEnrollmentRequest.md)| All data needed to make a 3DS card payment | [optional]

### Return type

[**\CpaymentConnector\Model\Card3DsCheckEnrollmentResponse**](../Model/Card3DsCheckEnrollmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsCard3dsPaymentPut

> \CpaymentConnector\Model\CardPaymentResponse v1PaymentsCard3dsPaymentPut($auth_token, $card3_ds_validate_and_authorize_request)

Validate authentication AND authorize / payment

The payment3DSecure is done in three steps.    <para>  **Step 1**  Using the POST Method available, you can check the enrollment of the card that will be used.  Remember to take note of the merchantId, merchantSiteId and orderRef you are sending, as well as the paymentRequestId you receive. You will need them again in step 3.  Also please take note of the parameter values you receive in the response, as you will need them in step 2.  </para><para>  **Step 2**  Then, you need to create and send a form for the user to validate the 3DS part of the card validation. We have provided you an example for the form (see below).  Simply replace the placeholder values for the parameters you received.    <pre> &lt;html lang=\"en\"&gt; &lt;body&gt; &lt;form id = \"formulaire\" method=\"post\" action=\"https://fakeRoute.payment3DS.com\"&gt; &lt;input type = \"hidden\" id=\"param1\" name=\"param1\" value=\"value1\"/&gt; &lt;input type = \"hidden\" id=\"param2\" name=\"param2\" value=\"value2\"/&gt; &lt;input type = \"hidden\" id=\"param3\" name=\"param3\" value=\"value3\"/&gt; &lt;input type = \"hidden\" id=\"param4\" name=\"param4\" value=\"value4\"/&gt; &lt;/form&gt; &lt;script&gt; &lt;document.forms[0].submit(); &lt;/script&gt; &lt;/body&gt; &lt;/html&gt; </pre></para><para>  **Step 3**  Finally, you can proceed with this PUT method to finish the payment.  Replace the placeholder values of the merchantId, merchantSiteId and orderRef with the values you sent in the POST method, and the paymentRequestId with the value you received from said POST method.  </para>

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
$card3_ds_validate_and_authorize_request = new \CpaymentConnector\Model\Card3DsValidateAuthenticationAndAuthorizeRequest(); // \CpaymentConnector\Model\Card3DsValidateAuthenticationAndAuthorizeRequest | The card payment put request.

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentPut($auth_token, $card3_ds_validate_and_authorize_request);
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
 **card3_ds_validate_and_authorize_request** | [**\CpaymentConnector\Model\Card3DsValidateAuthenticationAndAuthorizeRequest**](../Model/Card3DsValidateAuthenticationAndAuthorizeRequest.md)| The card payment put request. | [optional]

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


## v1PaymentsCard3dsPaymentWithAuthenticationDataPost

> \CpaymentConnector\Model\CardPaymentResponse v1PaymentsCard3dsPaymentWithAuthenticationDataPost($auth_token, $card3_ds_authorize_with_auth_data_request)

Authorization / payment -with- authentication data

To reuse the previously stored authenticationData in order to trigger a 3DS authorization, you must call the dedicated Authorize with authentication-data API, and pass all authentication data.    For this first version of the API, you must pass the same orderRef and orderTag as the authentication. In future versions, the authorization will be completely decorrelated of the authentication.

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
$card3_ds_authorize_with_auth_data_request = new \CpaymentConnector\Model\Card3DsAuthorizeWithAuthDataRequest(); // \CpaymentConnector\Model\Card3DsAuthorizeWithAuthDataRequest | The authorize with authentication data request.

try {
    $result = $apiInstance->v1PaymentsCard3dsPaymentWithAuthenticationDataPost($auth_token, $card3_ds_authorize_with_auth_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Card3DsPaymentApi->v1PaymentsCard3dsPaymentWithAuthenticationDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **card3_ds_authorize_with_auth_data_request** | [**\CpaymentConnector\Model\Card3DsAuthorizeWithAuthDataRequest**](../Model/Card3DsAuthorizeWithAuthDataRequest.md)| The authorize with authentication data request. | [optional]

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

