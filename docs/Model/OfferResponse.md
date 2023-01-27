# # OfferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\OpenAPI\AllegroSdk\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\JustId**](JustId.md) |  | [optional]
**after_sales_services** | [**\OpenAPI\AllegroSdk\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**attachments** | [**\OpenAPI\AllegroSdk\Model\Attachment[]**](Attachment.md) | List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in &lt;a href&#x3D;\&quot;/documentation/#operation/createOfferAttachmentUsingPOST\&quot; target&#x3D;\&quot;_blank\&quot;&gt;uploading offer attachments flow&lt;/a&gt;. | [optional]
**compatibility_list** | [**\OpenAPI\AllegroSdk\Model\CompatibilityList**](CompatibilityList.md) |  | [optional]
**contact** | [**\OpenAPI\AllegroSdk\Model\JustId**](JustId.md) |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**custom_parameters** | [**\OpenAPI\AllegroSdk\Model\CustomParameter[]**](CustomParameter.md) | List of custom parameters. You can add up to 4 custom parameters, each containing exactly one value. | [optional]
**delivery** | [**\OpenAPI\AllegroSdk\Model\DeliveryFull**](DeliveryFull.md) |  | [optional]
**description** | [**\OpenAPI\AllegroSdk\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**discounts** | [**\OpenAPI\AllegroSdk\Model\Discounts**](Discounts.md) |  | [optional]
**external** | [**\OpenAPI\AllegroSdk\Model\ExternalId**](ExternalId.md) |  | [optional]
**fundraising_campaign** | [**\OpenAPI\AllegroSdk\Model\JustId**](JustId.md) |  | [optional]
**id** | **string** |  | [optional]
**images** | [**\OpenAPI\AllegroSdk\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**location** | [**\OpenAPI\AllegroSdk\Model\Location**](Location.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . |
**parameters** | [**\OpenAPI\AllegroSdk\Model\Parameter[]**](Parameter.md) |  | [optional]
**payments** | [**\OpenAPI\AllegroSdk\Model\Payments**](Payments.md) |  | [optional]
**product** | [**\OpenAPI\AllegroSdk\Model\JustId**](JustId.md) |  | [optional]
**promotion** | [**\OpenAPI\AllegroSdk\Model\Promotion**](Promotion.md) |  | [optional]
**publication** | [**\OpenAPI\AllegroSdk\Model\Publication**](Publication.md) |  | [optional]
**selling_mode** | [**\OpenAPI\AllegroSdk\Model\SellingModeWithNetPrice**](SellingModeWithNetPrice.md) |  | [optional]
**tax** | [**\OpenAPI\AllegroSdk\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**size_table** | [**\OpenAPI\AllegroSdk\Model\JustId**](JustId.md) |  | [optional]
**stock** | [**\OpenAPI\AllegroSdk\Model\Stock**](Stock.md) |  | [optional]
**tecdoc_specification** | [**\OpenAPI\AllegroSdk\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**b2b** | [**\OpenAPI\AllegroSdk\Model\B2b**](B2b.md) |  | [optional]
**message_to_seller_settings** | [**\OpenAPI\AllegroSdk\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified | [optional]
**validation** | [**\OpenAPI\AllegroSdk\Model\Validation**](Validation.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
