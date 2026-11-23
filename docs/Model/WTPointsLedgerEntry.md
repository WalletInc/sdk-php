# # WTPointsLedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**entry_type** | [**\OpenAPI\Client\Model\WTPointsLedgerEntryType**](WTPointsLedgerEntryType.md) |  |
**points** | **mixed** | Signed: positive adds to the balance, negative takes from it. |
**source** | **string** |  |
**source_label** | **mixed** | A plain-words label for &#x60;source&#x60;, ready to show. |
**created_at** | **\DateTime** |  |
**employee_name** | **mixed** |  |
**reason** | **mixed** |  |
**eligible_amount_cents** | **mixed** |  |
**balance_after** | **mixed** | The balance after this entry. Present only when the membership service supplies it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
