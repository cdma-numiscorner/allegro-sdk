# # CheckoutForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id |
**message_to_seller** | **string** | Message from buyer to seller | [optional]
**buyer** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  |
**payment** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional]
**status** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  |
**fulfillment** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional]
**delivery** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional]
**invoice** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional]
**line_items** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  |
**surcharges** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  |
**discounts** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  |
**summary** | [**\OpenAPI\AllegroSdk\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  |
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**revision** | **string** | Checkout form revision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
