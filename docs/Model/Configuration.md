# # Configuration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**culture** | **string** | Specify the culture to use on the payment form (ex: \&quot;fr-FR\&quot;, \&quot;en-GB\&quot;, \&quot;en-US\&quot;, \&quot;es-CO\&quot;) | [optional] 
**form_type** | **string** | Specify the payment form type.  - Default is a full page payment form and should be used is you plan to redirect the customer to the payment page.  - Iframe should be used if you plan to integrate the payment form into your checkout (without external redirection). | [optional] 
**merchant_back_url** | **string** | Defines the URL to use if we need to redirect the customer back to your website. | [optional] 
**merchant_home_url** | **string** | Defines the URL to use if we need to redirect the customer to the homepage of your website. | [optional] 
**merchant_notify_url** | **string** | Defines the URL to use to notify you at the end of the payment process.  The notification is a POST request, which includes the payment result code.  NOTE: this URL is optional, if not specified, no notification will be posted. | [optional] 
**merchant_return_url** | **string** | Defines the URL to use to redirect the customer at the end of the payment process.  The redirection is a POST request, using the customer browser, which includes the payment result code. | [optional] 
**payment_option_ref** | **string** | Defines the payment option to use (1 for card payment, 21 for card payment with 3DS, 17 for paypal, ...).  Please refer to the full documentation for the exhaustive list. | 
**report_delay_in_days** | **int** | The report delay in days. Can be used to postpone a payment. | [optional] 
**user_agent** | **string** | The user agent.  Optional, if not set it will be retrieved during the first load of the payment session into the customer browser. | [optional] 
**template** | **string** | The template to use for the payment form.  Optional, it should be set only if a specific UI has been implemented (custom UI style).  By default, it will defaulting to the \&quot;Generic\&quot; template. | [optional] 
**authentication_only** | **bool** | If set to *true*, no authorization will be done. The process ends after the holder authentication. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


