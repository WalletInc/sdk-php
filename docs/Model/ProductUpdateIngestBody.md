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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
