<?php
/**
 * CompatibilityListSupportedCategoriesDtoSupportedCategories
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
 * CompatibilityListSupportedCategoriesDtoSupportedCategories Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompatibilityListSupportedCategoriesDtoSupportedCategories implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompatibilityListSupportedCategoriesDto_supportedCategories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_id' => 'string',
        'name' => 'string',
        'items_type' => 'string',
        'input_type' => 'string',
        'validation_rules' => '\OpenAPI\AllegroSdk\Model\CompatibilityListSupportedCategoriesDtoValidationRules'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category_id' => null,
        'name' => null,
        'items_type' => null,
        'input_type' => null,
        'validation_rules' => null
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
        'category_id' => 'categoryId',
        'name' => 'name',
        'items_type' => 'itemsType',
        'input_type' => 'inputType',
        'validation_rules' => 'validationRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'name' => 'setName',
        'items_type' => 'setItemsType',
        'input_type' => 'setInputType',
        'validation_rules' => 'setValidationRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'name' => 'getName',
        'items_type' => 'getItemsType',
        'input_type' => 'getInputType',
        'validation_rules' => 'getValidationRules'
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

    const INPUT_TYPE_TEXT = 'TEXT';
    const INPUT_TYPE_ID = 'ID';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputTypeAllowableValues()
    {
        return [
            self::INPUT_TYPE_TEXT,
            self::INPUT_TYPE_ID,
        ];
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
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['items_type'] = $data['items_type'] ?? null;
        $this->container['input_type'] = $data['input_type'] ?? null;
        $this->container['validation_rules'] = $data['validation_rules'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInputTypeAllowableValues();
        if (!is_null($this->container['input_type']) && !in_array($this->container['input_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_type', must be one of '%s'",
                $this->container['input_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of supported category.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets items_type
     *
     * @return string|null
     */
    public function getItemsType()
    {
        return $this->container['items_type'];
    }

    /**
     * Sets items_type
     *
     * @param string|null $items_type Type of the compatible item.
     *
     * @return self
     */
    public function setItemsType($items_type)
    {
        $this->container['items_type'] = $items_type;

        return $this;
    }

    /**
     * Gets input_type
     *
     * @return string|null
     */
    public function getInputType()
    {
        return $this->container['input_type'];
    }

    /**
     * Sets input_type
     *
     * @param string|null $input_type Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href=\"/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get\">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul>
     *
     * @return self
     */
    public function setInputType($input_type)
    {
        $allowedValues = $this->getInputTypeAllowableValues();
        if (!is_null($input_type) && !in_array($input_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input_type', must be one of '%s'",
                    $input_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets validation_rules
     *
     * @return \OpenAPI\AllegroSdk\Model\CompatibilityListSupportedCategoriesDtoValidationRules|null
     */
    public function getValidationRules()
    {
        return $this->container['validation_rules'];
    }

    /**
     * Sets validation_rules
     *
     * @param \OpenAPI\AllegroSdk\Model\CompatibilityListSupportedCategoriesDtoValidationRules|null $validation_rules validation_rules
     *
     * @return self
     */
    public function setValidationRules($validation_rules)
    {
        $this->container['validation_rules'] = $validation_rules;

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


