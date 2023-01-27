<?php
/**
 * BillingEntry
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
 * BillingEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BillingEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'occurred_at' => '\DateTime',
        'type' => '\OpenAPI\AllegroSdk\Model\BillingEntryType',
        'offer' => '\OpenAPI\AllegroSdk\Model\BillingEntryOffer',
        'value' => '\OpenAPI\AllegroSdk\Model\BillingEntryValue',
        'tax' => '\OpenAPI\AllegroSdk\Model\BillingEntryTax',
        'balance' => '\OpenAPI\AllegroSdk\Model\BillingEntryBalance',
        'order' => '\OpenAPI\AllegroSdk\Model\BillingEntryOrder'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'occurred_at' => 'date-time',
        'type' => null,
        'offer' => null,
        'value' => null,
        'tax' => null,
        'balance' => null,
        'order' => null
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
        'occurred_at' => 'occurredAt',
        'type' => 'type',
        'offer' => 'offer',
        'value' => 'value',
        'tax' => 'tax',
        'balance' => 'balance',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'occurred_at' => 'setOccurredAt',
        'type' => 'setType',
        'offer' => 'setOffer',
        'value' => 'setValue',
        'tax' => 'setTax',
        'balance' => 'setBalance',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'occurred_at' => 'getOccurredAt',
        'type' => 'getType',
        'offer' => 'getOffer',
        'value' => 'getValue',
        'tax' => 'getTax',
        'balance' => 'getBalance',
        'order' => 'getOrder'
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
        $this->container['occurred_at'] = $data['occurred_at'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['offer'] = $data['offer'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the returned billing entry.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets occurred_at
     *
     * @return \DateTime|null
     */
    public function getOccurredAt()
    {
        return $this->container['occurred_at'];
    }

    /**
     * Sets occurred_at
     *
     * @param \DateTime|null $occurred_at Date of billing entry.
     *
     * @return self
     */
    public function setOccurredAt($occurred_at)
    {
        $this->container['occurred_at'] = $occurred_at;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryOffer|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryOffer|null $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryValue|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryValue|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryBalance|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryBalance|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\AllegroSdk\Model\BillingEntryOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\AllegroSdk\Model\BillingEntryOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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


