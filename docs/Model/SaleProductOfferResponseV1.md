# # SaleProductOfferResponseV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**product_set** | [**ProductSetElementQuantity[]**](ProductSetElementQuantity.md) |  | [optional]
**category** | [**\OpenAPI\AllegroSdk\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**attachments** | **object[]** | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\OpenAPI\AllegroSdk\Model\ProductOfferFundraisingCampaignResponse**](ProductOfferFundraisingCampaignResponse.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\ProductOfferAdditionalServicesResponse**](ProductOfferAdditionalServicesResponse.md) |  | [optional]
**delivery** | [**\OpenAPI\AllegroSdk\Model\DeliveryProductOfferResponse**](DeliveryProductOfferResponse.md) |  | [optional]
**publication** | [**\OpenAPI\AllegroSdk\Model\Publication**](Publication.md) |  | [optional]
**b2b** | [**\OpenAPI\AllegroSdk\Model\B2b**](B2b.md) |  | [optional]
**compatibility_list** | [**\OpenAPI\AllegroSdk\Model\CompatibilityListProductOfferResponse**](CompatibilityListProductOfferResponse.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**validation** | [**\OpenAPI\AllegroSdk\Model\Validation**](Validation.md) |  | [optional]
**after_sales_services** | [**\OpenAPI\AllegroSdk\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**discounts** | [**\OpenAPI\AllegroSdk\Model\DiscountsProductOfferResponse**](DiscountsProductOfferResponse.md) |  | [optional]
**parameters** | [**\OpenAPI\AllegroSdk\Model\ParameterProductOfferResponse[]**](ParameterProductOfferResponse.md) | List of offer parameters. | [optional]
**contact** | [**JustId**](JustId.md) | Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\OpenAPI\AllegroSdk\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\OpenAPI\AllegroSdk\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\OpenAPI\AllegroSdk\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\OpenAPI\AllegroSdk\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\OpenAPI\AllegroSdk\Model\ExternalId**](ExternalId.md) |  | [optional]
**stock** | [**\OpenAPI\AllegroSdk\Model\Stock**](Stock.md) |  | [optional]
**size_table** | [**\OpenAPI\AllegroSdk\Model\SizeTable**](SizeTable.md) |  | [optional]
**tax** | [**\OpenAPI\AllegroSdk\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**message_to_seller_settings** | [**\OpenAPI\AllegroSdk\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
