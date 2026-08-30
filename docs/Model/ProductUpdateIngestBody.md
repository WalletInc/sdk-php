# # ProductUpdateIngestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**\OpenAPI\Client\Model\ProductKey**](ProductKey.md) | Which product shipped: \&quot;admin_portal\&quot; (shown in the merchant widget) or \&quot;api\&quot;. |
**version** | **mixed** | The release version, e.g. \&quot;2.4.0\&quot;. Metadata; the widget renders title + items. |
**type** | [**\OpenAPI\Client\Model\ProductUpdateType**](ProductUpdateType.md) | \&quot;added\&quot; for a feature release, \&quot;fixed\&quot; for a patch. |
**title** | **mixed** | Merchant-facing headline for the release. |
**items** | **mixed** | The release-note bullets, already split by the caller. |
**published_at** | **mixed** | ISO 8601. Optional; defaults to the ingest time. | [optional]
**story** | **mixed** | KAN-874: optional merchant-facing story/narrative for this release (\&quot;what this means for you\&quot;), so What&#39;s New can arrive curated at write time. Optional and content-only: it does NOT affect the hold/ready publish gate (entries still default to hold until Marketing curates them). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
