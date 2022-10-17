# # MSMembershipTierRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | A 10 character alphanumeric unique value that represents each member |
**transaction_id** | **string** | The transaction ID at the POS |
**transaction_type** | [**AnyOfStringString**](AnyOfStringString.md) | The type of the transaction - either redemption or refund |
**amount** | **int** | The amount that has been redeemed, in cents |
**register_id** | [**AnyOfStringDouble**](AnyOfStringDouble.md) | The ID of the register where the transaction occurred | [optional]
**terminal_type** | **string** | The type of the terminal |
**id** | **string** | The UUID of this record |
**tier_id** | **string** | A 10 character alphanumeric unique value that represents each membership tier |
**merchant_id** | **string** |  |
**created_at** | **\DateTime** | The timestamp of when this resource was created |
**is_active** | **bool** | Denotes if this resource is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
