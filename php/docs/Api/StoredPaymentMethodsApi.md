# pachirapay\StoredPaymentMethodsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet**](StoredPaymentMethodsApi.md#v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/customerRef/{customerRef} | Gets stored payment methods by CustomerRef
[**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete**](StoredPaymentMethodsApi.md#v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete) | **DELETE** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Deletes a stored payment method
[**v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet**](StoredPaymentMethodsApi.md#v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet) | **GET** /v1/stored-payment-methods/merchants/{merchantId}/sites/{merchantSiteId}/storedPaymentMethodId/{storedPaymentMethodId} | Gets a stored payment method
[**v1StoredPaymentMethodsPost**](StoredPaymentMethodsApi.md#v1StoredPaymentMethodsPost) | **POST** /v1/stored-payment-methods | Stores a new payment method.



## v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet

> \pachirapay\Model\StoredPaymentMethodResponse v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet($merchant_id, $merchant_site_id, $customer_ref, $auth_token)

Gets stored payment methods by CustomerRef

Gets the stored payment methods by customer reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\StoredPaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 56; // int | The merchant identifier.
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier.
$customer_ref = 'customer_ref_example'; // string | The customer reference.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet($merchant_id, $merchant_site_id, $customer_ref, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredPaymentMethodsApi->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdCustomerRefByCustomerRefGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| The merchant identifier. |
 **merchant_site_id** | **string**| The merchant site identifier. |
 **customer_ref** | **string**| The customer reference. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\pachirapay\Model\StoredPaymentMethodResponse**](../Model/StoredPaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete

> string v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete($merchant_id, $merchant_site_id, $stored_payment_method_id, $auth_token)

Deletes a stored payment method

Deletes the specified stored payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\StoredPaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 56; // int | The merchant identifier
$merchant_site_id = 'merchant_site_id_example'; // string | The merchant site identifier
$stored_payment_method_id = 'stored_payment_method_id_example'; // string | The stored payment method identifier
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete($merchant_id, $merchant_site_id, $stored_payment_method_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredPaymentMethodsApi->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| The merchant identifier |
 **merchant_site_id** | **string**| The merchant site identifier |
 **stored_payment_method_id** | **string**| The stored payment method identifier |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet

> \pachirapay\Model\StoredPaymentMethodResponse v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet($merchant_id, $merchant_site_id, $stored_payment_method_id, $auth_token)

Gets a stored payment method

Gets the stored payment method by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\StoredPaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 56; // int | 
$merchant_site_id = 'merchant_site_id_example'; // string | 
$stored_payment_method_id = 'stored_payment_method_id_example'; // string | The stored payment method identifier.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.

try {
    $result = $apiInstance->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet($merchant_id, $merchant_site_id, $stored_payment_method_id, $auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredPaymentMethodsApi->v1StoredPaymentMethodsMerchantsByMerchantIdSitesByMerchantSiteIdStoredPaymentMethodIdByStoredPaymentMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**|  |
 **merchant_site_id** | **string**|  |
 **stored_payment_method_id** | **string**| The stored payment method identifier. |
 **auth_token** | **string**| Gets or sets the authentication token. |

### Return type

[**\pachirapay\Model\StoredPaymentMethodResponse**](../Model/StoredPaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1StoredPaymentMethodsPost

> string v1StoredPaymentMethodsPost($auth_token, $stored_payment_method_request)

Stores a new payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\StoredPaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$stored_payment_method_request = new \pachirapay\Model\StoredPaymentMethodRequest(); // \pachirapay\Model\StoredPaymentMethodRequest | The payment method to store.

try {
    $result = $apiInstance->v1StoredPaymentMethodsPost($auth_token, $stored_payment_method_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredPaymentMethodsApi->v1StoredPaymentMethodsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_token** | **string**| Gets or sets the authentication token. |
 **stored_payment_method_request** | [**\pachirapay\Model\StoredPaymentMethodRequest**](../Model/StoredPaymentMethodRequest.md)| The payment method to store. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

