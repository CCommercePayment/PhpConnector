# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address** | [**\pachirapay\Model\ShippingAddress**](ShippingAddress.md) |  | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | The customer birth date. | [optional] 
**civility** | **string** | The customer civility. | [optional] 
**country** | **string** | The customer country code. | [optional] 
**customer_ip** | **string** | The customer IP.   Optional, if not set it will be retrieved during the first load of the payment session into the customer browser. | [optional] 
**customer_ref** | **string** | The merchant&#39;s customer reference (external identifier).  This field is mandatory, especially if you want store payment method. If so, stored payment methods will be linked to this customer reference. | 
**delivery_address** | [**\pachirapay\Model\ShippingAddress**](ShippingAddress.md) |  | [optional] 
**email** | **string** | The customer email.  Useful for specifics payment methods like PayPal. | [optional] 
**first_name** | **string** | The customer first name. | [optional] 
**last_name** | **string** | The customer last name. | [optional] 
**mobile_phone** | **string** | The customer mobile phone number. | [optional] 
**phone** | **string** | The customer phone number. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


