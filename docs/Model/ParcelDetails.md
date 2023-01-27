# # ParcelDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parcel_id** | **string** | Id of parcel. | [optional]
**service_id** | **string** | Delivery service id. | [optional]
**receiver** | [**\OpenAPI\AllegroSdk\Model\Receiver**](Receiver.md) |  | [optional]
**pickup** | [**\OpenAPI\AllegroSdk\Model\Pickup**](Pickup.md) |  | [optional]
**items** | [**\OpenAPI\AllegroSdk\Model\ParcelItemDetailsWithWaybill[]**](ParcelItemDetailsWithWaybill.md) | Parcel items details. | [optional]
**type** | **string** | Value will be returned if all items will have the same type. | [optional]
**label** | [**\OpenAPI\AllegroSdk\Model\ParcelDetailsLabel**](ParcelDetailsLabel.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\ParcelAdditionalServices**](ParcelAdditionalServices.md) |  | [optional]
**state** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
