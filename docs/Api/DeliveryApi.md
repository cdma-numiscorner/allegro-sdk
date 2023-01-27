# OpenAPI\AllegroSdk\DeliveryApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingRatesSetUsingPOST()**](DeliveryApi.md#createShippingRatesSetUsingPOST) | **POST** /sale/shipping-rates | Create a new shipping rates set
[**getListOfDeliveryMethodsUsingGET()**](DeliveryApi.md#getListOfDeliveryMethodsUsingGET) | **GET** /sale/delivery-methods | Get the list of delivery methods
[**getListOfShippingRatestUsingGET()**](DeliveryApi.md#getListOfShippingRatestUsingGET) | **GET** /sale/shipping-rates | Get the user&#39;s shipping rates
[**getSaleDeliverySettings()**](DeliveryApi.md#getSaleDeliverySettings) | **GET** /sale/delivery-settings | Get the user&#39;s delivery settings
[**getShippingRatesSetUsingGET()**](DeliveryApi.md#getShippingRatesSetUsingGET) | **GET** /sale/shipping-rates/{id} | Get the details of a shipping rates set
[**modifyShippingRatesSetUsingPUT()**](DeliveryApi.md#modifyShippingRatesSetUsingPUT) | **PUT** /sale/shipping-rates/{id} | Edit a user&#39;s shipping rates set
[**putSaleDeliverySettings()**](DeliveryApi.md#putSaleDeliverySettings) | **PUT** /sale/delivery-settings | Modify the user&#39;s delivery settings


## `createShippingRatesSetUsingPOST()`

```php
createShippingRatesSetUsingPOST($shipping_rates_set): \OpenAPI\AllegroSdk\Model\ShippingRatesSet
```

Create a new shipping rates set

Use this resource to create a new seller's shipping rates set. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-cennikami-dostawy-aMDnG7zamSX\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-shipping-price-lists-0A2lDe6jGSB\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_rates_set = new \OpenAPI\AllegroSdk\Model\ShippingRatesSet(); // \OpenAPI\AllegroSdk\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->createShippingRatesSetUsingPOST($shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->createShippingRatesSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_rates_set** | [**\OpenAPI\AllegroSdk\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\AllegroSdk\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfDeliveryMethodsUsingGET()`

```php
getListOfDeliveryMethodsUsingGET(): \OpenAPI\AllegroSdk\Model\InlineResponse2001
```

Get the list of delivery methods

Use this resource to get a list of all delivery methods currently available on the platform, as well as those that have already been discontinued. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-cennikami-dostawy-aMDnG7zamSX\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-shipping-price-lists-0A2lDe6jGSB\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfDeliveryMethodsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfDeliveryMethodsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\AllegroSdk\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfShippingRatestUsingGET()`

```php
getListOfShippingRatestUsingGET(): \OpenAPI\AllegroSdk\Model\InlineResponse200
```

Get the user's shipping rates

Use this resource to get a list of seller's shipping rates. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-cennikami-dostawy-aMDnG7zamSX\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-shipping-price-lists-0A2lDe6jGSB\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfShippingRatestUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfShippingRatestUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\AllegroSdk\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleDeliverySettings()`

```php
getSaleDeliverySettings(): \OpenAPI\AllegroSdk\Model\DeliverySettingsResponse
```

Get the user's delivery settings

Use this resource to get the delivery settings declared by the seller. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-ustawienia-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-get-delivery-settings\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSaleDeliverySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\AllegroSdk\Model\DeliverySettingsResponse**](../Model/DeliverySettingsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingRatesSetUsingGET()`

```php
getShippingRatesSetUsingGET($id): \OpenAPI\AllegroSdk\Model\ShippingRatesSet
```

Get the details of a shipping rates set

Use this resource to get details of the given shipping rates set. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-cennikami-dostawy-aMDnG7zamSX\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-shipping-price-lists-0A2lDe6jGSB\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Shipping rates set identifier.

try {
    $result = $apiInstance->getShippingRatesSetUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getShippingRatesSetUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Shipping rates set identifier. |

### Return type

[**\OpenAPI\AllegroSdk\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyShippingRatesSetUsingPUT()`

```php
modifyShippingRatesSetUsingPUT($id, $shipping_rates_set): \OpenAPI\AllegroSdk\Model\ShippingRatesSet
```

Edit a user's shipping rates set

Use this resource to edit a new seller's shipping rates set. Read more: <a href=\"../../news/nowe-zasoby-zarzadzaj-cennikami-dostawy-aMDnG7zamSX\" target=\"_blank\">PL</a> / <a href=\"../../news/new-resources-manage-shipping-price-lists-0A2lDe6jGSB\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Shipping rates set identifier.
$shipping_rates_set = new \OpenAPI\AllegroSdk\Model\ShippingRatesSet(); // \OpenAPI\AllegroSdk\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->modifyShippingRatesSetUsingPUT($id, $shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->modifyShippingRatesSetUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Shipping rates set identifier. |
 **shipping_rates_set** | [**\OpenAPI\AllegroSdk\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\AllegroSdk\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSaleDeliverySettings()`

```php
putSaleDeliverySettings($delivery_settings_request): \OpenAPI\AllegroSdk\Model\DeliverySettingsResponse
```

Modify the user's delivery settings

Use this resource to modify the delivery settings declared by the seller. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-edytowac-ustawienia-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-edit-delivery-settings\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\AllegroSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\AllegroSdk\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_settings_request = new \OpenAPI\AllegroSdk\Model\DeliverySettingsRequest(); // \OpenAPI\AllegroSdk\Model\DeliverySettingsRequest | Delivery settings set

try {
    $result = $apiInstance->putSaleDeliverySettings($delivery_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->putSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_settings_request** | [**\OpenAPI\AllegroSdk\Model\DeliverySettingsRequest**](../Model/DeliverySettingsRequest.md)| Delivery settings set |

### Return type

[**\OpenAPI\AllegroSdk\Model\DeliverySettingsResponse**](../Model/DeliverySettingsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
