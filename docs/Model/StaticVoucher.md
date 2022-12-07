# # StaticVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**AnyOfStringString**](AnyOfStringString.md) |  |
**campaign_id** | **string** |  |
**member_id** | **string** |  | [optional]
**cell_phone_number** | **string** |  | [optional]
**offer_amount_cents** | **int** |  |
**order_number** | **int** |  |
**transaction_type** | [**AnyOfStringStringString**](AnyOfStringStringString.md) | The type of the transaction - only redemption at the moment |
**register_id** | [**AnyOfStringDouble**](AnyOfStringDouble.md) | The ID of the register where the transaction occurred |
**redeemed_source** | **string** |  |
**redeemed_transaction_id** | **string** |  |
**redeemed_amount** | **int** |  |
**is_redeemed** | **bool** |  |
**refunded_transaction_id** | **string** |  |
**refunded_amount** | **int** |  |
**status** | [**\OpenAPI\Client\Model\Status**](Status.md) |  |
**customer_id** | **string** |  | [optional]
**authorized_against_check_number** | **string** |  |
**authorized_amount** | **int** |  |
**merchant_id** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**is_active** | **bool** |  |
**authorized_amount_decimal** | **string** |  |
**authorized_amount_string** | **string** |  |
**offer_amount_cents_decimal** | **string** |  |
**offer_amount_cents_string** | **string** |  |
**redeemed_amount_decimal** | **string** |  |
**redeemed_amount_string** | **string** |  |
**date_time_redeemed** | **\DateTime** |  | [optional]
**date_time_refunded** | **\DateTime** |  | [optional]
**date_time_last_viewed** | **\DateTime** |  | [optional]
**reason_invalid** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
