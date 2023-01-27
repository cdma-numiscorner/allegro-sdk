# # ParcelCreationParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Delivery service id. |
**receiver** | [**\OpenAPI\AllegroSdk\Model\Receiver**](Receiver.md) |  |
**pickup** | [**\OpenAPI\AllegroSdk\Model\Pickup**](Pickup.md) |  |
**items** | [**\OpenAPI\AllegroSdk\Model\ParcelItemDetails[]**](ParcelItemDetails.md) | Parcel items details. |
**type** | **string** | Value will be applied to type for all items. If item will have type value assigned - validation will check if all types have the same value. | [optional]
**label** | [**\OpenAPI\AllegroSdk\Model\ParcelCreationParametersLabel**](ParcelCreationParametersLabel.md) |  | [optional]
**additional_services** | [**\OpenAPI\AllegroSdk\Model\ParcelAdditionalServices**](ParcelAdditionalServices.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
