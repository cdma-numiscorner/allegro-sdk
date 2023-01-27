# # CreateAdvanceShipNoticeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An UUID identifier of ASN. | [optional]
**display_number** | **string** | A human friendly identifier of ASN. | [optional]
**status** | [**\OpenAPI\AllegroSdk\Model\AdvanceShipNoticeStatus**](AdvanceShipNoticeStatus.md) |  | [optional]
**content** | [**\OpenAPI\AllegroSdk\Model\Box[]**](Box.md) | A list of boxes. | [optional]
**labels** | **object** | Always null in this endpoint response. | [optional]
**shipping** | **object** | Always null in this endpoint response. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
