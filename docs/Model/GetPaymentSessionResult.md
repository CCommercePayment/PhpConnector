# # GetPaymentSessionResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_ref** | **string** | The orderRef | [optional] 
**payment_result_code** | **int** | The response code of the service | [optional] 
**payment_result_code_message** | **string** | The response code message of the service | [optional] 
**payment_result_complementary_code** | **int** | The complementary response code of the service | [optional] 
**payment_result_complementary_code_message** | **string** | The complementary response code message of the service | [optional] 
**stored_payment_method_id** | **string** | Stored Payment Method Id | [optional] 
**stored_payment_method_label** | **string** | Stored Payment Label | [optional] 
**authentication_status** | **string** | The authentication status | [optional] 
**liability_shift_status** | **string** | The liability shift status | [optional] 
**authentication_data** | **map[string,string]** | All authentication data, as a dictionary of multiple key/value pairs. | [optional] 
**sub_orders** | [**\pachirapay\Model\PaymentSessionSubOrderResult[]**](PaymentSessionSubOrderResult.md) | Gets or sets the subOrder result. | [optional] 
**payment_method_type** | **string** | Gets or sets the type of the payment method. | [optional] 
**response_message** | **string** | The global response message | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


