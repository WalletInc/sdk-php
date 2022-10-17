# # PickVSStaticVoucherExcludeKeyofVSStaticVoucherRedeemedAtOrRefundedAtOrLastViewedAt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**is_active** | **bool** |  |
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
