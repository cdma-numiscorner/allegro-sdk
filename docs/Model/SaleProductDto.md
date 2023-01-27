# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. |
**name** | **string** | Product name. |
**category** | [**ProductCategory**](ProductCategory.md) |  |
**images** | [**\OpenAPI\AllegroSdk\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional]
**parameters** | [**\OpenAPI\AllegroSdk\Model\ProductParameterDto[]**](ProductParameterDto.md) | List of product parameters. | [optional]
**offer_requirements** | [**\OpenAPI\AllegroSdk\Model\OfferRequirements**](OfferRequirements.md) |  | [optional]
**compatibility_list** | [**\OpenAPI\AllegroSdk\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional]
**tecdoc_specification** | [**\OpenAPI\AllegroSdk\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**description** | [**\OpenAPI\AllegroSdk\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
