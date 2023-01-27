# # CustomerReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**reference_number** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**items** | [**\OpenAPI\AllegroSdk\Model\CustomerReturnItem[]**](CustomerReturnItem.md) | List of returned items. | [optional]
**refund** | [**\OpenAPI\AllegroSdk\Model\CustomerReturnRefund**](CustomerReturnRefund.md) |  | [optional]
**parcels** | [**\OpenAPI\AllegroSdk\Model\CustomerReturnReturnParcel[]**](CustomerReturnReturnParcel.md) | List of returned parcels. | [optional]
**rejection** | [**\OpenAPI\AllegroSdk\Model\CustomerReturnRejection**](CustomerReturnRejection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
