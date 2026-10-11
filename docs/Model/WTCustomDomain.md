# # WTCustomDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hostname** | **mixed** | The custom domain, or empty when none is set up. |
**state** | [**\OpenAPI\Client\Model\WTCustomDomainState**](WTCustomDomainState.md) | Where the domain is in its setup. Absent when &#x60;hostname&#x60; is empty. | [optional]
**managed** | **mixed** | False when Wallet set the domain up by hand. Such a domain is shown read-only and cannot be changed here. |
**dns_target** | **mixed** | The CNAME target the merchant points their domain at. |
**txt** | [**\OpenAPI\Client\Model\WTCustomDomainTXT**](WTCustomDomainTXT.md) | Present when the merchant must also add a TXT record. | [optional]
**error** | [**\OpenAPI\Client\Model\WTCustomDomainError**](WTCustomDomainError.md) | Present when &#x60;state&#x60; is &#x60;error&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
