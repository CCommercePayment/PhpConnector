# # PaymentSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **int** | MerchantId | [optional] 
**merchant_site_id** | **string** | MerchantSiteId | [optional] 
**customer** | [**\CpaymentConnector\Model\Customer**](Customer.md) |  | [optional] 
**order_data** | [**\CpaymentConnector\Model\OrderData**](OrderData.md) |  | [optional] 
**stored_card_data** | [**\CpaymentConnector\Model\StoredCard[]**](StoredCard.md) | StoredCardData | [optional] 
**allow_card_storage** | **bool** | Gets or sets a value indicating whether [allow card storage]. | [optional] 
**forced_card_option_ref** | **string** | Gets or sets a value indicating whether [forced card option reference]. | [optional] 
**force_card_storage** | **bool** | Gets or sets a value indicating whether [forced card storage]. | [optional] 
**force_immediate_stored_card_payment** | **bool** | Gets or sets a value indicating whether [forced immediate stored card]. | [optional] 
**configuration** | [**\CpaymentConnector\Model\Configuration**](Configuration.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


