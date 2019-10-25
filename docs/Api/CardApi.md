# CpaymentConnector\CardApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CardCreditHolderPost**](CardApi.md#v1CardCreditHolderPost) | **POST** /v1/card/creditHolder | Credit a card payment



## v1CardCreditHolderPost

> \CpaymentConnector\Model\CardPaymentCreditHolderResponse v1CardCreditHolderPost($auth_token, $request)

Credit a card payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\CardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$request = new \CpaymentConnector\Model\CardPaymentCreditHolderRequest(); // \CpaymentConnector\Model\CardPaymentCreditHolderRequest | 

try {
    $result = $apiInstance->v1CardCreditHolderPost($auth_token, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardApi->v1CardCreditHolderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **request** | [**\CpaymentConnector\Model\CardPaymentCreditHolderRequest**](../Model/CardPaymentCreditHolderRequest.md)|  | [optional]

### Return type

[**\CpaymentConnector\Model\CardPaymentCreditHolderResponse**](../Model/CardPaymentCreditHolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

