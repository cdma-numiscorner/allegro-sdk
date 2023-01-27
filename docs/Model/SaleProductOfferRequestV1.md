# # SaleProductOfferRequestV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_set** | [**ProductSetElement[]**](ProductSetElement.md) |  | [optional]
**b2b** | [**\OpenAPI\AllegroSdk\Model\B2b**](B2b.md) |  | [optional]
**attachments** | **object[]** | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\OpenAPI\AllegroSdk\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**delivery** | [**DeliveryProductOfferRequest**](DeliveryProductOfferRequest.md) |  | [optional]
**publication** | [**\OpenAPI\AllegroSdk\Model\SaleProductOfferRequestBaseAllOfPublication**](SaleProductOfferRequestBaseAllOfPublication.md) |  | [optional]
**compatibility_list** | [**CompatibilityListManualType**](CompatibilityListManualType.md) | For the &#x60;/sale/product-offers&#x60; resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**category** | [**OfferCategoryRequest**](OfferCategoryRequest.md) |  | [optional]
**parameters** | [**\OpenAPI\AllegroSdk\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**after_sales_services** | [**\OpenAPI\AllegroSdk\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\OpenAPI\AllegroSdk\Model\SizeTable**](SizeTable.md) |  | [optional]
**discounts** | [**\OpenAPI\AllegroSdk\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\OpenAPI\AllegroSdk\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\OpenAPI\AllegroSdk\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\OpenAPI\AllegroSdk\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\OpenAPI\AllegroSdk\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\OpenAPI\AllegroSdk\Model\ExternalId**](ExternalId.md) |  | [optional]
**stock** | [**\OpenAPI\AllegroSdk\Model\Stock**](Stock.md) |  |
**tax** | [**\OpenAPI\AllegroSdk\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**message_to_seller_settings** | [**\OpenAPI\AllegroSdk\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
