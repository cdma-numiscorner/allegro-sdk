<?php
/**
 * MultiPackBenefitSpecificationAllOfTrigger
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
 * MultiPackBenefitSpecificationAllOfTrigger Class Doc Comment
 *
 * @category Class
 * @description Describes what will cause the rebate.
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class MultiPackBenefitSpecificationAllOfTrigger implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MultiPackBenefitSpecification_allOf_trigger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'for_each_quantity' => 'float',
        'discounted_number' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'for_each_quantity' => null,
        'discounted_number' => null
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
        'for_each_quantity' => 'forEachQuantity',
        'discounted_number' => 'discountedNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'for_each_quantity' => 'setForEachQuantity',
        'discounted_number' => 'setDiscountedNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'for_each_quantity' => 'getForEachQuantity',
        'discounted_number' => 'getDiscountedNumber'
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
        $this->container['for_each_quantity'] = $data['for_each_quantity'] ?? null;
        $this->container['discounted_number'] = $data['discounted_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['for_each_quantity'] === null) {
            $invalidProperties[] = "'for_each_quantity' can't be null";
        }
        if (($this->container['for_each_quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'for_each_quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['discounted_number'] === null) {
            $invalidProperties[] = "'discounted_number' can't be null";
        }
        if (($this->container['discounted_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'discounted_number', must be bigger than or equal to 1.";
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
     * Gets for_each_quantity
     *
     * @return float
     */
    public function getForEachQuantity()
    {
        return $this->container['for_each_quantity'];
    }

    /**
     * Sets for_each_quantity
     *
     * @param float $for_each_quantity For every pack of this quantity new rebate will be given.
     *
     * @return self
     */
    public function setForEachQuantity($for_each_quantity)
    {

        if (($for_each_quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $for_each_quantity when calling MultiPackBenefitSpecificationAllOfTrigger., must be bigger than or equal to 1.');
        }

        $this->container['for_each_quantity'] = $for_each_quantity;

        return $this;
    }

    /**
     * Gets discounted_number
     *
     * @return float
     */
    public function getDiscountedNumber()
    {
        return $this->container['discounted_number'];
    }

    /**
     * Sets discounted_number
     *
     * @param float $discounted_number Describes how many offers in pack should be discounted by discount percentage.
     *
     * @return self
     */
    public function setDiscountedNumber($discounted_number)
    {

        if (($discounted_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $discounted_number when calling MultiPackBenefitSpecificationAllOfTrigger., must be bigger than or equal to 1.');
        }

        $this->container['discounted_number'] = $discounted_number;

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

