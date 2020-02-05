# pachirapay\PaymentsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](PaymentsApi.md#v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet) | **GET** /v1/payments/all/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets all payment schedules
[**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet**](PaymentsApi.md#v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId}/{orderTag} | Gets payment schedule by tag.
[**v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet**](PaymentsApi.md#v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet) | **GET** /v1/payments/{orderRef}/merchants/{merchantId}/sites/{merchantSiteId} | Gets payment schedule
[**v1PaymentsByOrderRefOperationsCancelOrRefundPut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsCancelOrRefundPut) | **PUT** /v1/payments/{orderRef}/operations/cancelOrRefund | Cancel or refund
[**v1PaymentsByOrderRefOperationsCapturePut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsCapturePut) | **PUT** /v1/payments/{orderRef}/operations/capture | Capture
[**v1PaymentsByOrderRefOperationsRecomputePut**](PaymentsApi.md#v1PaymentsByOrderRefOperationsRecomputePut) | **PUT** /v1/payments/{orderRef}/operations/recompute | Recompute schedule



## v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsAllByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token)

Gets all payment schedules

This operation allows the merchant to retrieve some details about a payment giving an order reference.  When calling this operation, Payment SAAS returns all the schedules associated with the order reference (whatever the order tag) (and so does the amount, the state, the date...), and useful informations for making other operations, such as the captured, remaining, cancelled and refunded amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
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

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdByOrderTagGet($order_ref, $merchant_id, $merchant_site_id, $order_tag, $auth_token)

Gets payment schedule by tag.

This operation allows the merchant to retrieve some details about a payment giving an order reference and an order tag.  When calling this operation, Payment SAAS returns the schedule associated with the order referenceand the specified the order tag (and so does the amount, the state, the date...), and useful informations for making other operations, such as the captured, remaining, cancelled and refunded amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
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

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsByOrderRefMerchantsByMerchantIdSitesByMerchantSiteIdGet($order_ref, $merchant_id, $merchant_site_id, $auth_token)

Gets payment schedule

This operation allows the merchant to retrieve some details about a payment giving an order reference.  When calling this operation, Payment SAAS returns the schedule associated with the order reference(and so does the amount, the state, the date...), and useful informations for making other operations, such as the captured, remaining, cancelled and refunded amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
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

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsCancelOrRefundPut

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsCancelOrRefundPut($order_ref, $auth_token, $payment_operation_request)

Cancel or refund

<div id=\"doc\">  <link href=\"/redoc/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />  <link href=\"/redoc/style.css\" rel=\"stylesheet\" />  <p>This operation allows the merchant to cancel (also refered to as \"void\") or refund a transaction, according to its current state.</p>  <p>You can find below the exhaustive list of cases which may happen.</p>  <div class=\"quote info\">  With a <strong>Cancel</strong> operation, the customer will not see movement on his bank account, contrary to <strong>Refund</strong> which gives back the <span>charged </span>amount.<br /><br />  Cancel is <span>only </span>performed when :  <ul><li>the transaction is not yet captured (in which case, the fund reservation on the customer payment method is cleared)</li><li>the operation occurs the same day as the capture operation.</li></ul></div>  <div class=\"quote success\">  If you want to cancel or refund less than the original transaction amount, you can specify the amount in the request body. Alternatively you can specify an amount of 0 if you want to refund the total amount.  <p><strong><u>Partial operation</u></strong> :  <em>  0 <strong>&lt;</strong><span style=\"color: rgb(0, 0, 128);\">amount </span><strong>&lt;</strong> transaction's amount<br /></em><u><strong>Full operation</strong></u> :  <em><em><span style=\"color: rgb(0, 0, 128);\">  amount  <strong><span style=\"color: rgb(0, 0, 0);\">==</span></strong></span> transaction's amount <strong>OR</strong><span style=\"color: rgb(0, 0, 128);\">amount</span><strong>==</strong> 0                      </em></em></p></div>  <h3>Cancel Or Refund cases</h3>  <h4>              After the authorization, and before the capture          </h4>  <p class=\"quote info\">  <em>  <em>Because the refund operation cannot be executed on a non-captured transaction</em>, only the cancel operation is supported              </em>    </p>  <table class=\"relative-table wrapped\" style=\"width: 91.7576%;\">  <colgroup>  <col style=\"width: 51.1326%;\" />  <col style=\"width: 48.7893%;\" />      </colgroup>  <tbody>  <tr>  <th>  <strong> Partial operation</strong>          </th>  <th>  <em>  <strong>Full operation</strong>            </em>          </th>        </tr>  <tr>  <td>  <p>No interaction with partners because partial cancel/void is not supported.</p>  <p>The only impact is an update of the remaining amount to capture in payment hub.</p>          </td>  <td>  <p>  <strong>Cancel</strong> operation will be executed on the entire transaction.                          </p>  <p>The fund reservation on the customer payment method will be cleared, and capture will no longer be possible.</p>  <p class=\"quote warning\">                              Cancelling a non captured transaction is not worldwide supported. Depending on the payment partner (PSP), the acquiring bank, and the issuing bank.                          </p>          </td>        </tr>      </tbody>    </table>  <h4>After the capture</h4>  <p class=\"quote info\">              Because the balance is made at midnight, either the cancel operation or the refund operation will be selected depending on the date.          </p>  <table class=\"wrapped\">  <colgroup>  <col />  <col />  <col />      </colgroup>  <tbody>  <tr>  <th>  <br />          </th>  <th>  <em>  <strong>Partial operation</strong>            </em>          </th>  <th>  <em>  <em>  <strong>Full operation</strong>              </em>            </em>          </th>        </tr>  <tr>  <td class=\"highlight-grey\" data-highlight-colour=\"grey\">  <strong>On the same day as the capture operation</strong>          </td>  <td>  <div class=\"content-wrapper\">  <p>The <strong>cancel</strong> operation will be executed.</p>  <p class=\"quote warning\">  <span>Partial cancelling of a captured transaction is supported, but doesn't behave the same depending on the payment partner used.</span>              </p>            </div>          </td>  <td>  <p>The <strong>cancel</strong> operation will be executed.</p>  <p>Full cancel of a captured transaction is fully supported.</p>          </td>        </tr>  <tr>  <td class=\"highlight-grey\" data-highlight-colour=\"grey\">  <strong>D+1 and later</strong>          </td>  <td>The <strong>refund</strong> operation will be executed.<br /><br />Partial refund is fully supported.</td>  <td>The <strong>refund</strong> operation will be executed.<br /><br />Full refund is fully supported.</td>        </tr>      </tbody>    </table>  </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \pachirapay\Model\PaymentOperationsRequest(); // \pachirapay\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

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
 **payment_operation_request** | [**\pachirapay\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsCapturePut

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsCapturePut($order_ref, $auth_token, $payment_operation_request)

Capture

This operation charges the bank account of the customer, following a valid authorization done before. You need to provide a succeeded authorized OrderRef, and the amount you want to charge.  This is well suited for a \"charge at shipping\" scenario: the merchant makes an authorization when the customer place the order, and the bank account is charged when the merchant actually does the shipping.    - If you want to capture the total amount of the authorization, you can either set the amount to 0 in the request, or simply not specify it.    ### Useful reminders:    * You can capture the authorization multiple times, as long as there is some amount remaining. For instance, with an authorization of 100€, you can capture 20€ and then capture 80€ later, within the limited time.    * Please note that the authorization is only valid for a limited amount of time, and that you cannot capture a greater amount than the authorized one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \pachirapay\Model\PaymentOperationsRequest(); // \pachirapay\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

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
 **payment_operation_request** | [**\pachirapay\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## v1PaymentsByOrderRefOperationsRecomputePut

> \pachirapay\Model\PaymentOperationsResponse v1PaymentsByOrderRefOperationsRecomputePut($order_ref, $auth_token, $payment_operation_request)

Recompute schedule

This operation forces the recomputation of the payment schedule, using the default payment schedule rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new pachirapay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_ref = 'order_ref_example'; // string | The OrderRef.
$auth_token = 'auth_token_example'; // string | Gets or sets the authentication token.
$payment_operation_request = new \pachirapay\Model\PaymentOperationsRequest(); // \pachirapay\Model\PaymentOperationsRequest | The payment operation request. Materialized by the Body of the PUT request

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
 **payment_operation_request** | [**\pachirapay\Model\PaymentOperationsRequest**](../Model/PaymentOperationsRequest.md)| The payment operation request. Materialized by the Body of the PUT request | [optional]

### Return type

[**\pachirapay\Model\PaymentOperationsResponse**](../Model/PaymentOperationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

