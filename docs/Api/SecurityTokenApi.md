# CpaymentConnector\SecurityTokenApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AuthTokenGet**](SecurityTokenApi.md#v1AuthTokenGet) | **GET** /v1/auth/token | Get the token provided by the Security Token Service (STS).  The authentication token is mandatory for the others api calls.  It&#39;s expire after 48h by default.



## v1AuthTokenGet

> string v1AuthTokenGet($authorization)

Get the token provided by the Security Token Service (STS).  The authentication token is mandatory for the others api calls.  It's expire after 48h by default.

See the following lines for example :  GET /v1/auth/token  {  \"authorization\": \"Y2Rpc2NvdW50OmNkaXNjb3VudDEyMzQv\"  }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CpaymentConnector\Api\SecurityTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | The credentials (login:password in base64)

try {
    $result = $apiInstance->v1AuthTokenGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityTokenApi->v1AuthTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The credentials (login:password in base64) | [optional]

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

