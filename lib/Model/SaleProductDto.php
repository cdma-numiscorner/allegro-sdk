<?php
/**
 * SaleProductDto
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
 * SaleProductDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SaleProductDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => 'ProductCategory',
        'images' => '\OpenAPI\AllegroSdk\Model\ImageUrl[]',
        'parameters' => '\OpenAPI\AllegroSdk\Model\ProductParameterDto[]',
        'offer_requirements' => '\OpenAPI\AllegroSdk\Model\OfferRequirements',
        'compatibility_list' => '\OpenAPI\AllegroSdk\Model\SaleProductCompatibilityList',
        'tecdoc_specification' => '\OpenAPI\AllegroSdk\Model\TecdocSpecification',
        'description' => '\OpenAPI\AllegroSdk\Model\StandardizedDescription',
        'is_draft' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'category' => null,
        'images' => null,
        'parameters' => null,
        'offer_requirements' => null,
        'compatibility_list' => null,
        'tecdoc_specification' => null,
        'description' => null,
        'is_draft' => null
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
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'images' => 'images',
        'parameters' => 'parameters',
        'offer_requirements' => 'offerRequirements',
        'compatibility_list' => 'compatibilityList',
        'tecdoc_specification' => 'tecdocSpecification',
        'description' => 'description',
        'is_draft' => 'isDraft'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'images' => 'setImages',
        'parameters' => 'setParameters',
        'offer_requirements' => 'setOfferRequirements',
        'compatibility_list' => 'setCompatibilityList',
        'tecdoc_specification' => 'setTecdocSpecification',
        'description' => 'setDescription',
        'is_draft' => 'setIsDraft'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'images' => 'getImages',
        'parameters' => 'getParameters',
        'offer_requirements' => 'getOfferRequirements',
        'compatibility_list' => 'getCompatibilityList',
        'tecdoc_specification' => 'getTecdocSpecification',
        'description' => 'getDescription',
        'is_draft' => 'getIsDraft'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['offer_requirements'] = $data['offer_requirements'] ?? null;
        $this->container['compatibility_list'] = $data['compatibility_list'] ?? null;
        $this->container['tecdoc_specification'] = $data['tecdoc_specification'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['is_draft'] = $data['is_draft'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Product id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Product name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return ProductCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param ProductCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param \OpenAPI\AllegroSdk\Model\ImageUrl[]|null $images List of product images.
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \OpenAPI\AllegroSdk\Model\ProductParameterDto[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \OpenAPI\AllegroSdk\Model\ProductParameterDto[]|null $parameters List of product parameters.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets offer_requirements
     *
     * @return \OpenAPI\AllegroSdk\Model\OfferRequirements|null
     */
    public function getOfferRequirements()
    {
        return $this->container['offer_requirements'];
    }

    /**
     * Sets offer_requirements
     *
     * @param \OpenAPI\AllegroSdk\Model\OfferRequirements|null $offer_requirements offer_requirements
     *
     * @return self
     */
    public function setOfferRequirements($offer_requirements)
    {
        $this->container['offer_requirements'] = $offer_requirements;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \OpenAPI\AllegroSdk\Model\SaleProductCompatibilityList|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \OpenAPI\AllegroSdk\Model\SaleProductCompatibilityList|null $compatibility_list compatibility_list
     *
     * @return self
     */
    public function setCompatibilityList($compatibility_list)
    {
        $this->container['compatibility_list'] = $compatibility_list;

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
     * Gets is_draft
     *
     * @return bool|null
     */
    public function getIsDraft()
    {
        return $this->container['is_draft'];
    }

    /**
     * Sets is_draft
     *
     * @param bool|null $is_draft Flag that informs if product is waiting for resolution of basic parameters change proposal.
     *
     * @return self
     */
    public function setIsDraft($is_draft)
    {
        $this->container['is_draft'] = $is_draft;

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


