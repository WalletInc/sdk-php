# # WTSmsCreditGrant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | The grant&#39;s id. |
**merchant_id** | **string** |  |
**segments** | **mixed** | Segments added (negative only for an adjustment). |
**source** | **mixed** | \&quot;purchase\&quot;, \&quot;bonus\&quot; or \&quot;adjustment\&quot;. |
**note** | **mixed** | Why it was granted (required for a bonus or an adjustment). | [optional]
**reference** | **mixed** | The purchase it came from, e.g. a Stripe payment id, when there is one. | [optional]
**granted_by** | **mixed** | The Wallet staff user, or \&quot;system\&quot;, that made the grant. |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
