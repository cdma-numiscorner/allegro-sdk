# # CheckoutFormLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Line item identifier |
**offer** | [**\OpenAPI\AllegroSdk\Model\OfferReference**](OfferReference.md) |  |
**quantity** | **float** | quantity |
**original_price** | [**\OpenAPI\AllegroSdk\Model\Price**](Price.md) |  |
**price** | [**\OpenAPI\AllegroSdk\Model\Price**](Price.md) |  |
**reconciliation** | [**\OpenAPI\AllegroSdk\Model\LineItemReconciliation**](LineItemReconciliation.md) |  | [optional]
**selected_additional_services** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormAdditionalService[]**](CheckoutFormAdditionalService.md) |  | [optional]
**bought_at** | [**\DateTime**](\DateTime.md) | ISO date when offer was bought | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
