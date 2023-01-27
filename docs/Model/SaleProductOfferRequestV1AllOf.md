# # SaleProductOfferRequestV1AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_set** | [**ProductSetElement[]**](ProductSetElement.md) |  | [optional]
**b2b** | [**\OpenAPI\AllegroSdk\Model\B2b**](B2b.md) |  | [optional]
**attachments** | **object[]** | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\OpenAPI\AllegroSdk\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**delivery** | [**DeliveryProductOfferRequest**](DeliveryProductOfferRequest.md) |  | [optional]
**publication** | [**\OpenAPI\AllegroSdk\Model\SaleProductOfferRequestV1AllOfPublication**](SaleProductOfferRequestV1AllOfPublication.md) |  | [optional]
**compatibility_list** | [**CompatibilityListManualType**](CompatibilityListManualType.md) | For the &#x60;/sale/product-offers&#x60; resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
