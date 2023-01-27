# # ProductChangeProposalDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product change proposal id | [optional]
**name** | [**\OpenAPI\AllegroSdk\Model\ProductNameProposal**](ProductNameProposal.md) |  | [optional]
**category** | [**\OpenAPI\AllegroSdk\Model\ProductCategoryProposal**](ProductCategoryProposal.md) |  | [optional]
**note** | **string** | Note about product changes proposal. | [optional]
**images** | [**\OpenAPI\AllegroSdk\Model\ProductImageProposal[]**](ProductImageProposal.md) | List of proposed image change statuses. | [optional]
**parameters** | [**\OpenAPI\AllegroSdk\Model\ProductParameterProposal[]**](ProductParameterProposal.md) | List of proposed product parameter change statuses. | [optional]
**notify_via_email_after_verification** | **bool** | Receive an email notification after product changes proposal resolution. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
