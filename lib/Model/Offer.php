<?php
/**
 * Offer
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\AllegroSdk\Model;

use \ArrayAccess;
use \OpenAPI\AllegroSdk\ObjectSerializer;

/**
 * Offer Class Doc Comment
 *
 * @category Class
 * @description Single offer data.
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Offer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Offer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_services' => '\OpenAPI\AllegroSdk\Model\JustId',
        'after_sales_services' => '\OpenAPI\AllegroSdk\Model\AfterSalesServices',
        'attachments' => '\OpenAPI\AllegroSdk\Model\Attachment[]',
        'compatibility_list' => '\OpenAPI\AllegroSdk\Model\CompatibilityList',
        'contact' => '\OpenAPI\AllegroSdk\Model\JustId',
        'created_at' => '\DateTime',
        'custom_parameters' => '\OpenAPI\AllegroSdk\Model\CustomParameter[]',
        'delivery' => '\OpenAPI\AllegroSdk\Model\DeliveryFull',
        'description' => '\OpenAPI\AllegroSdk\Model\StandardizedDescription',
        'discounts' => '\OpenAPI\AllegroSdk\Model\Discounts',
        'external' => '\OpenAPI\AllegroSdk\Model\ExternalId',
        'fundraising_campaign' => '\OpenAPI\AllegroSdk\Model\JustId',
        'id' => 'string',
        'images' => '\OpenAPI\AllegroSdk\Model\ImageUrl[]',
        'location' => '\OpenAPI\AllegroSdk\Model\Location',
        'name' => 'string',
        'parameters' => '\OpenAPI\AllegroSdk\Model\Parameter[]',
        'payments' => '\OpenAPI\AllegroSdk\Model\Payments',
        'product' => '\OpenAPI\AllegroSdk\Model\JustId',
        'promotion' => '\OpenAPI\AllegroSdk\Model\Promotion',
        'publication' => '\OpenAPI\AllegroSdk\Model\Publication',
        'selling_mode' => '\OpenAPI\AllegroSdk\Model\SellingModeWithNetPrice',
        'tax' => '\OpenAPI\AllegroSdk\Model\ExtendedTax',
        'size_table' => '\OpenAPI\AllegroSdk\Model\JustId',
        'stock' => '\OpenAPI\AllegroSdk\Model\Stock',
        'tecdoc_specification' => '\OpenAPI\AllegroSdk\Model\TecdocSpecification',
        'b2b' => '\OpenAPI\AllegroSdk\Model\B2b',
        'message_to_seller_settings' => '\OpenAPI\AllegroSdk\Model\MessageToSellerSettings',
        'updated_at' => '\DateTime',
        'validation' => '\OpenAPI\AllegroSdk\Model\Validation',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_services' => null,
        'after_sales_services' => null,
        'attachments' => null,
        'compatibility_list' => null,
        'contact' => null,
        'created_at' => 'date-time',
        'custom_parameters' => null,
        'delivery' => null,
        'description' => null,
        'discounts' => null,
        'external' => null,
        'fundraising_campaign' => null,
        'id' => null,
        'images' => null,
        'location' => null,
        'name' => null,
        'parameters' => null,
        'payments' => null,
        'product' => null,
        'promotion' => null,
        'publication' => null,
        'selling_mode' => null,
        'tax' => null,
        'size_table' => null,
        'stock' => null,
        'tecdoc_specification' => null,
        'b2b' => null,
        'message_to_seller_settings' => null,
        'updated_at' => 'date-time',
        'validation' => null,
        'language' => 'BCP-47 language code'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_services' => 'additionalServices',
        'after_sales_services' => 'afterSalesServices',
        'attachments' => 'attachments',
        'compatibility_list' => 'compatibilityList',
        'contact' => 'contact',
        'created_at' => 'createdAt',
        'custom_parameters' => 'customParameters',
        'delivery' => 'delivery',
        'description' => 'description',
        'discounts' => 'discounts',
        'external' => 'external',
        'fundraising_campaign' => 'fundraisingCampaign',
        'id' => 'id',
        'images' => 'images',
        'location' => 'location',
        'name' => 'name',
        'parameters' => 'parameters',
        'payments' => 'payments',
        'product' => 'product',
        'promotion' => 'promotion',
        'publication' => 'publication',
        'selling_mode' => 'sellingMode',
        'tax' => 'tax',
        'size_table' => 'sizeTable',
        'stock' => 'stock',
        'tecdoc_specification' => 'tecdocSpecification',
        'b2b' => 'b2b',
        'message_to_seller_settings' => 'messageToSellerSettings',
        'updated_at' => 'updatedAt',
        'validation' => 'validation',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_services' => 'setAdditionalServices',
        'after_sales_services' => 'setAfterSalesServices',
        'attachments' => 'setAttachments',
        'compatibility_list' => 'setCompatibilityList',
        'contact' => 'setContact',
        'created_at' => 'setCreatedAt',
        'custom_parameters' => 'setCustomParameters',
        'delivery' => 'setDelivery',
        'description' => 'setDescription',
        'discounts' => 'setDiscounts',
        'external' => 'setExternal',
        'fundraising_campaign' => 'setFundraisingCampaign',
        'id' => 'setId',
        'images' => 'setImages',
        'location' => 'setLocation',
        'name' => 'setName',
        'parameters' => 'setParameters',
        'payments' => 'setPayments',
        'product' => 'setProduct',
        'promotion' => 'setPromotion',
        'publication' => 'setPublication',
        'selling_mode' => 'setSellingMode',
        'tax' => 'setTax',
        'size_table' => 'setSizeTable',
        'stock' => 'setStock',
        'tecdoc_specification' => 'setTecdocSpecification',
        'b2b' => 'setB2b',
        'message_to_seller_settings' => 'setMessageToSellerSettings',
        'updated_at' => 'setUpdatedAt',
        'validation' => 'setValidation',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_services' => 'getAdditionalServices',
        'after_sales_services' => 'getAfterSalesServices',
        'attachments' => 'getAttachments',
        'compatibility_list' => 'getCompatibilityList',
        'contact' => 'getContact',
        'created_at' => 'getCreatedAt',
        'custom_parameters' => 'getCustomParameters',
        'delivery' => 'getDelivery',
        'description' => 'getDescription',
        'discounts' => 'getDiscounts',
        'external' => 'getExternal',
        'fundraising_campaign' => 'getFundraisingCampaign',
        'id' => 'getId',
        'images' => 'getImages',
        'location' => 'getLocation',
        'name' => 'getName',
        'parameters' => 'getParameters',
        'payments' => 'getPayments',
        'product' => 'getProduct',
        'promotion' => 'getPromotion',
        'publication' => 'getPublication',
        'selling_mode' => 'getSellingMode',
        'tax' => 'getTax',
        'size_table' => 'getSizeTable',
        'stock' => 'getStock',
        'tecdoc_specification' => 'getTecdocSpecification',
        'b2b' => 'getB2b',
        'message_to_seller_settings' => 'getMessageToSellerSettings',
        'updated_at' => 'getUpdatedAt',
        'validation' => 'getValidation',
        'language' => 'getLanguage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_services'] = $data['additional_services'] ?? null;
        $this->container['after_sales_services'] = $data['after_sales_services'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['compatibility_list'] = $data['compatibility_list'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['custom_parameters'] = $data['custom_parameters'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['external'] = $data['external'] ?? null;
        $this->container['fundraising_campaign'] = $data['fundraising_campaign'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['promotion'] = $data['promotion'] ?? null;
        $this->container['publication'] = $data['publication'] ?? null;
        $this->container['selling_mode'] = $data['selling_mode'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['size_table'] = $data['size_table'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['tecdoc_specification'] = $data['tecdoc_specification'] ?? null;
        $this->container['b2b'] = $data['b2b'] ?? null;
        $this->container['message_to_seller_settings'] = $data['message_to_seller_settings'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['validation'] = $data['validation'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets additional_services
     *
     * @return \OpenAPI\AllegroSdk\Model\JustId|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \OpenAPI\AllegroSdk\Model\JustId|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets after_sales_services
     *
     * @return \OpenAPI\AllegroSdk\Model\AfterSalesServices|null
     */
    public function getAfterSalesServices()
    {
        return $this->container['after_sales_services'];
    }

    /**
     * Sets after_sales_services
     *
     * @param \OpenAPI\AllegroSdk\Model\AfterSalesServices|null $after_sales_services after_sales_services
     *
     * @return self
     */
    public function setAfterSalesServices($after_sales_services)
    {
        $this->container['after_sales_services'] = $after_sales_services;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \OpenAPI\AllegroSdk\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\AllegroSdk\Model\Attachment[]|null $attachments List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in <a href=\"/documentation/#operation/createOfferAttachmentUsingPOST\" target=\"_blank\">uploading offer attachments flow</a>.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \OpenAPI\AllegroSdk\Model\CompatibilityList|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \OpenAPI\AllegroSdk\Model\CompatibilityList|null $compatibility_list compatibility_list
     *
     * @return self
     */
    public function setCompatibilityList($compatibility_list)
    {
        $this->container['compatibility_list'] = $compatibility_list;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \OpenAPI\AllegroSdk\Model\JustId|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \OpenAPI\AllegroSdk\Model\JustId|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets custom_parameters
     *
     * @return \OpenAPI\AllegroSdk\Model\CustomParameter[]|null
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * Sets custom_parameters
     *
     * @param \OpenAPI\AllegroSdk\Model\CustomParameter[]|null $custom_parameters List of custom parameters. You can add up to 4 custom parameters, each containing exactly one value.
     *
     * @return self
     */
    public function setCustomParameters($custom_parameters)
    {
        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \OpenAPI\AllegroSdk\Model\DeliveryFull|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\AllegroSdk\Model\DeliveryFull|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\AllegroSdk\Model\StandardizedDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\AllegroSdk\Model\StandardizedDescription|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\AllegroSdk\Model\Discounts|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\AllegroSdk\Model\Discounts|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets external
     *
     * @return \OpenAPI\AllegroSdk\Model\ExternalId|null
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param \OpenAPI\AllegroSdk\Model\ExternalId|null $external external
     *
     * @return self
     */
    public function setExternal($external)
    {
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets fundraising_campaign
     *
     * @return \OpenAPI\AllegroSdk\Model\JustId|null
     */
    public function getFundraisingCampaign()
    {
        return $this->container['fundraising_campaign'];
    }

    /**
     * Sets fundraising_campaign
     *
     * @param \OpenAPI\AllegroSdk\Model\JustId|null $fundraising_campaign fundraising_campaign
     *
     * @return self
     */
    public function setFundraisingCampaign($fundraising_campaign)
    {
        $this->container['fundraising_campaign'] = $fundraising_campaign;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\AllegroSdk\Model\ImageUrl[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\AllegroSdk\Model\ImageUrl[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\AllegroSdk\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\AllegroSdk\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name (title) of an offer. Length cannot be more than 50 characters. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\" target=\"_blank\">PL</a>  / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\" target=\"_blank\">EN</a> .
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Offer., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \OpenAPI\AllegroSdk\Model\Parameter[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \OpenAPI\AllegroSdk\Model\Parameter[]|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\AllegroSdk\Model\Payments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\AllegroSdk\Model\Payments|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\AllegroSdk\Model\JustId|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\AllegroSdk\Model\JustId|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return \OpenAPI\AllegroSdk\Model\Promotion|null
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \OpenAPI\AllegroSdk\Model\Promotion|null $promotion promotion
     *
     * @return self
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \OpenAPI\AllegroSdk\Model\Publication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \OpenAPI\AllegroSdk\Model\Publication|null $publication publication
     *
     * @return self
     */
    public function setPublication($publication)
    {
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets selling_mode
     *
     * @return \OpenAPI\AllegroSdk\Model\SellingModeWithNetPrice|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param \OpenAPI\AllegroSdk\Model\SellingModeWithNetPrice|null $selling_mode selling_mode
     *
     * @return self
     */
    public function setSellingMode($selling_mode)
    {
        $this->container['selling_mode'] = $selling_mode;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\AllegroSdk\Model\ExtendedTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\AllegroSdk\Model\ExtendedTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets size_table
     *
     * @return \OpenAPI\AllegroSdk\Model\JustId|null
     */
    public function getSizeTable()
    {
        return $this->container['size_table'];
    }

    /**
     * Sets size_table
     *
     * @param \OpenAPI\AllegroSdk\Model\JustId|null $size_table size_table
     *
     * @return self
     */
    public function setSizeTable($size_table)
    {
        $this->container['size_table'] = $size_table;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \OpenAPI\AllegroSdk\Model\Stock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \OpenAPI\AllegroSdk\Model\Stock|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets tecdoc_specification
     *
     * @return \OpenAPI\AllegroSdk\Model\TecdocSpecification|null
     */
    public function getTecdocSpecification()
    {
        return $this->container['tecdoc_specification'];
    }

    /**
     * Sets tecdoc_specification
     *
     * @param \OpenAPI\AllegroSdk\Model\TecdocSpecification|null $tecdoc_specification tecdoc_specification
     *
     * @return self
     */
    public function setTecdocSpecification($tecdoc_specification)
    {
        $this->container['tecdoc_specification'] = $tecdoc_specification;

        return $this;
    }

    /**
     * Gets b2b
     *
     * @return \OpenAPI\AllegroSdk\Model\B2b|null
     */
    public function getB2b()
    {
        return $this->container['b2b'];
    }

    /**
     * Sets b2b
     *
     * @param \OpenAPI\AllegroSdk\Model\B2b|null $b2b b2b
     *
     * @return self
     */
    public function setB2b($b2b)
    {
        $this->container['b2b'] = $b2b;

        return $this;
    }

    /**
     * Gets message_to_seller_settings
     *
     * @return \OpenAPI\AllegroSdk\Model\MessageToSellerSettings|null
     */
    public function getMessageToSellerSettings()
    {
        return $this->container['message_to_seller_settings'];
    }

    /**
     * Sets message_to_seller_settings
     *
     * @param \OpenAPI\AllegroSdk\Model\MessageToSellerSettings|null $message_to_seller_settings message_to_seller_settings
     *
     * @return self
     */
    public function setMessageToSellerSettings($message_to_seller_settings)
    {
        $this->container['message_to_seller_settings'] = $message_to_seller_settings;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \OpenAPI\AllegroSdk\Model\Validation|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \OpenAPI\AllegroSdk\Model\Validation|null $validation validation
     *
     * @return self
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Declared base language of the offer.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

