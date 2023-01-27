# # RefundDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The payment refund identifier. |
**payment** | [**\OpenAPI\AllegroSdk\Model\RefundPayment**](RefundPayment.md) |  |
**reason** | **string** | Reason for a payment refund. |
**status** | **string** | Current status of payment refund. |
**created_at** | [**\DateTime**](\DateTime.md) | Date and time when the refund was created provided in ISO 8601 format. |
**total_value** | [**\OpenAPI\AllegroSdk\Model\RefundTotalValue**](RefundTotalValue.md) |  |
**line_items** | [**\OpenAPI\AllegroSdk\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#39;s line items which can be refunded. | [optional]
**delivery** | [**\OpenAPI\AllegroSdk\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional]
**overpaid** | [**\OpenAPI\AllegroSdk\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional]
**surcharges** | [**\OpenAPI\AllegroSdk\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional]
**seller_comment** | **string** | Sellers optional justification for refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
