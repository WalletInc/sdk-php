# # WTDynamicVoucherRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_key** | **string** |  |
**redeemed_amount** | **int** |  |
**dynamic_voucher_id** | **string** |  |
**redeemed_source** | **string** |  |
**redeemed_transaction_id** | **string** |  |
**transaction_type** | [**AnyOfStringString**](AnyOfStringString.md) | The type of the transaction - only redemption at the moment |
**register_id** | [**AnyOfStringDouble**](AnyOfStringDouble.md) | The ID of the register where the transaction occurred |
**id** | [**AnyOfStringString**](AnyOfStringString.md) |  |
**merchant_id** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**is_active** | **bool** |  |
**redeemed_at** | **\DateTime** |  | [optional]
**refunded_at** | **\DateTime** |  | [optional]
**refunded_transaction_id** | **string** |  |
**refunded_amount** | **int** |  |
**status** | [**\OpenAPI\Client\Model\VSDynamicVoucherStatus**](VSDynamicVoucherStatus.md) |  |
**redeemed_amount_decimal** | **string** |  |
**redeemed_amount_string** | **string** |  |
**discount_received** | **string** |  |
**meta_value** | **string** |  |
**parent_object_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
