# # WTSmsCreditSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** |  |
**is_on_ledger** | **mixed** | False until the merchant&#39;s first grant: until then sends use the legacy MaxSMSCount ceiling. |
**credits_granted** | **mixed** | Total segments ever granted (purchases, bonuses and adjustments). |
**credit_overdraft** | **float** |  |
**ledger_epoch** | **mixed** | The first grant&#39;s time; usage before it never counts against the ledger. | [optional]
**grants** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
