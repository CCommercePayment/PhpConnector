# CpaymentConnector\PaymentOptionsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet**](PaymentOptionsApi.md#v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet) | **GET** /v1/payment-options/merchants/{merchantId}/sites/{merchantSiteId} | Gets the payment options for a specified site.
[**v1PaymentOptionsPost**](PaymentOptionsApi.md#v1PaymentOptionsPost) | **POST** /v1/payment-options | Gets the payment options for a specified context.
[**v1PaymentOptionsValidateEligibilityPost**](PaymentOptionsApi.md#v1PaymentOptionsValidateEligibilityPost) | **POST** /v1/payment-options/validateEligibility | Validates the eligibility of the given payment option, according to context.



## v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet

> \CpaymentConnector\Model\PaymentOptionsResponse v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet($merchant_id, $merchant_site_id, $auth_token)

Gets the payment options for a specified site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 56; // int | The merchant identifier.
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet($merchant_id, $merchant_site_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentOptionsApi->v1PaymentOptionsMerchantsByMerchantIdSitesByMerchantSiteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| The merchant identifier. |
 **merchant_site_id** | **string**| The merchant site identifier. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\CpaymentConnector\Model\PaymentOptionsResponse**](../Model/PaymentOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentOptionsPost

> \CpaymentConnector\Model\PaymentOptionsResponse v1PaymentOptionsPost($auth_token, $payment_options_request)

Gets the payment options for a specified context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_options_request = new \CpaymentConnector\Model\PaymentOptionsRequest(); // \CpaymentConnector\Model\PaymentOptionsRequest | The payment options request.

try {
    $result = $apiInstance->v1PaymentOptionsPost($auth_token, $payment_options_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentOptionsApi->v1PaymentOptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_options_request** | [**\CpaymentConnector\Model\PaymentOptionsRequest**](../Model/PaymentOptionsRequest.md)| The payment options request. | [optional]

### Return type

[**\CpaymentConnector\Model\PaymentOptionsResponse**](../Model/PaymentOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentOptionsValidateEligibilityPost

> v1PaymentOptionsValidateEligibilityPost($auth_token, $payment_option_eligibility_request)

Validates the eligibility of the given payment option, according to context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\PaymentOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_option_eligibility_request = new \stdClass; // object | The payment option eligibility request.

try {
    $apiInstance->v1PaymentOptionsValidateEligibilityPost($auth_token, $payment_option_eligibility_request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentOptionsApi->v1PaymentOptionsValidateEligibilityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **payment_option_eligibility_request** | **object**| The payment option eligibility request. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

