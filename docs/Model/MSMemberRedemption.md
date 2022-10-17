# # MSMemberRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | The transaction ID at the POS |
**transaction_type** | [**AnyOfStringString**](AnyOfStringString.md) | The type of the transaction - either redemption or refund |
**points** | **int** | The number of points involved in this transaction |
**register_id** | [**AnyOfStringDouble**](AnyOfStringDouble.md) | The ID of the register where the transaction occurred | [optional]
**terminal_type** | **string** | The type of the terminal |
**id** | **string** | The UUID of this record |
**member_id** | **string** |  |
**merchant_id** | **string** |  |
**created_at** | **\DateTime** | The timestamp of when this resource was created |
**is_active** | **bool** | Denotes if this resource is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
