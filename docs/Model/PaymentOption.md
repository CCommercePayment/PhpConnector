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
**payment_schedule_rules** | [**\Cpayment.Connector\Model\PaymentScheduleRule[]**](PaymentScheduleRule.md) | All payment schedule rules data | [optional] 
**payment_fees** | [**\Cpayment.Connector\Model\PaymentFee[]**](PaymentFee.md) | All payment fees data | [optional] 
**payment_cards** | [**\Cpayment.Connector\Model\PaymentCard[]**](PaymentCard.md) | All payment cards data | [optional] 
**loan_offers** | [**\Cpayment.Connector\Model\LoanOffer[]**](LoanOffer.md) | All loan offers data | [optional] 
**acquiring_banks** | [**\Cpayment.Connector\Model\AcquiringBank[]**](AcquiringBank.md) | All acquiring banks data | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


