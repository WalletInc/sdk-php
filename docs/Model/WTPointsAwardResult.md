# # WTPointsAwardResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skipped** | [**\OpenAPI\Client\Model\WTPointsSkipReason**](WTPointsSkipReason.md) | Present only when nothing was awarded; the other fields are then absent. | [optional]
**entry_id** | **string** |  | [optional]
**points_awarded** | **float** |  | [optional]
**balance** | **float** |  | [optional]
**lifetime_earned** | **float** |  | [optional]
**earned12_months** | **float** |  | [optional]
**previous_tier_id** | **mixed** |  | [optional]
**new_tier_id** | **mixed** |  | [optional]
**tier_changed** | **bool** |  | [optional]
**new_tier_name** | **mixed** | The new tier&#39;s name, set only when the award moved the member up a tier. | [optional]
**replayed** | **mixed** | True when this answer repeats an earlier award with the same idempotency key. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
