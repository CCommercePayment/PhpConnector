# # PaymentSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **int** | Your merchant identifier. | 
**merchant_site_id** | **string** | Your merchant site identifier. It can very if you have separate website for phone and desktop for example. | 
**customer** | [**\pachirapay\Model\Customer**](Customer.md) |  | 
**order_data** | [**\pachirapay\Model\OrderData**](OrderData.md) |  | 
**stored_card_data** | [**\pachirapay\Model\StoredCard[]**](StoredCard.md) | The stored payment methods that you want to display to the customer. | [optional] 
**allow_card_storage** | **bool** | Specify if you allow the customer to save his payment method.   By default, the customer will have the choice (save my card : yes/no).   If you want to force the storage (without asking the customer), you can specify the field *forceCardStorage* to *TRUE* | [optional] 
**forced_card_option_ref** | **string** | This field should only be used in case of an immediate stored payment card payment (available only for non-3DS flow).   And it is only needed for specifics payment methods (credit cards like Cofinoga, or Cetelem), which allows a card option (debit, credit, 3x, 4x, 5x, ...).  For most of card types (VISA, MasterCard, CB), you don&#39;t have to specify anything. | [optional] 
**force_card_storage** | **bool** | In a card storage scenario (*allowCardStorage* set to *TRUE*), setting this field to *TRUE* will disable the customer choice (card will always be stored) | [optional] 
**force_immediate_stored_card_payment** | **bool** | If set to *TRUE*, the payment form will be skipped and the payment will start immediately using the first stored payment method from *storedCardData* field.   This is available only for non-3DS flow, and need at least one valid stored payment method. | [optional] 
**configuration** | [**\pachirapay\Model\Configuration**](Configuration.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


