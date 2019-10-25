# # PaymentOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_option_ref** | **string** | The payment option reference | [optional] 
**name** | **string** | The payment option name | [optional] 
**active** | **bool** | Indicates if the payment option is active or not | [optional] 
**min_amount** | **int** | The minimum amount allowed | [optional] 
**max_amount** | **int** | The maximum amount allowed | [optional] 
**stored_cards_enabled** | **bool** | Indicates if stored cards are enabled or not | [optional] 
**payment_schedule_rules** | [**\OpenAPI\Client\Model\PaymentScheduleRule[]**](PaymentScheduleRule.md) | All payment schedule rules data | [optional] 
**payment_fees** | [**\OpenAPI\Client\Model\PaymentFee[]**](PaymentFee.md) | All payment fees data | [optional] 
**payment_cards** | [**\OpenAPI\Client\Model\PaymentCard[]**](PaymentCard.md) | All payment cards data | [optional] 
**loan_offers** | [**\OpenAPI\Client\Model\LoanOffer[]**](LoanOffer.md) | All loan offers data | [optional] 
**acquiring_banks** | [**\OpenAPI\Client\Model\AcquiringBank[]**](AcquiringBank.md) | All acquiring banks data | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


