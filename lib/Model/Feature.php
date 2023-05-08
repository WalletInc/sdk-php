<?php
/**
 * Feature
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * wallet-api
 *
 * API
 *
 * The version of the OpenAPI document: 2.1.533
 * Contact: development@wallet.inc
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Feature Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Feature implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'feature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sort_num' => 'double',
        'name' => 'string',
        'max_volume' => 'string',
        'measurement' => 'string',
        'description' => 'string',
        'current_volume' => 'string',
        'is_exceeded' => 'bool',
        'is_in_use' => 'bool',
        'is_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sort_num' => 'double',
        'name' => null,
        'max_volume' => null,
        'measurement' => null,
        'description' => null,
        'current_volume' => null,
        'is_exceeded' => null,
        'is_in_use' => null,
        'is_enabled' => null
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
        'sort_num' => 'sortNum',
        'name' => 'name',
        'max_volume' => 'maxVolume',
        'measurement' => 'measurement',
        'description' => 'description',
        'current_volume' => 'currentVolume',
        'is_exceeded' => 'isExceeded',
        'is_in_use' => 'isInUse',
        'is_enabled' => 'isEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sort_num' => 'setSortNum',
        'name' => 'setName',
        'max_volume' => 'setMaxVolume',
        'measurement' => 'setMeasurement',
        'description' => 'setDescription',
        'current_volume' => 'setCurrentVolume',
        'is_exceeded' => 'setIsExceeded',
        'is_in_use' => 'setIsInUse',
        'is_enabled' => 'setIsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sort_num' => 'getSortNum',
        'name' => 'getName',
        'max_volume' => 'getMaxVolume',
        'measurement' => 'getMeasurement',
        'description' => 'getDescription',
        'current_volume' => 'getCurrentVolume',
        'is_exceeded' => 'getIsExceeded',
        'is_in_use' => 'getIsInUse',
        'is_enabled' => 'getIsEnabled'
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
        $this->container['sort_num'] = $data['sort_num'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['max_volume'] = $data['max_volume'] ?? null;
        $this->container['measurement'] = $data['measurement'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['current_volume'] = $data['current_volume'] ?? null;
        $this->container['is_exceeded'] = $data['is_exceeded'] ?? null;
        $this->container['is_in_use'] = $data['is_in_use'] ?? null;
        $this->container['is_enabled'] = $data['is_enabled'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sort_num'] === null) {
            $invalidProperties[] = "'sort_num' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['measurement'] === null) {
            $invalidProperties[] = "'measurement' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets sort_num
     *
     * @return double
     */
    public function getSortNum()
    {
        return $this->container['sort_num'];
    }

    /**
     * Sets sort_num
     *
     * @param double $sort_num sort_num
     *
     * @return self
     */
    public function setSortNum($sort_num)
    {
        $this->container['sort_num'] = $sort_num;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets max_volume
     *
     * @return string|null
     */
    public function getMaxVolume()
    {
        return $this->container['max_volume'];
    }

    /**
     * Sets max_volume
     *
     * @param string|null $max_volume max_volume
     *
     * @return self
     */
    public function setMaxVolume($max_volume)
    {
        $this->container['max_volume'] = $max_volume;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return string
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param string $measurement measurement
     *
     * @return self
     */
    public function setMeasurement($measurement)
    {
        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets current_volume
     *
     * @return string|null
     */
    public function getCurrentVolume()
    {
        return $this->container['current_volume'];
    }

    /**
     * Sets current_volume
     *
     * @param string|null $current_volume current_volume
     *
     * @return self
     */
    public function setCurrentVolume($current_volume)
    {
        $this->container['current_volume'] = $current_volume;

        return $this;
    }

    /**
     * Gets is_exceeded
     *
     * @return bool|null
     */
    public function getIsExceeded()
    {
        return $this->container['is_exceeded'];
    }

    /**
     * Sets is_exceeded
     *
     * @param bool|null $is_exceeded is_exceeded
     *
     * @return self
     */
    public function setIsExceeded($is_exceeded)
    {
        $this->container['is_exceeded'] = $is_exceeded;

        return $this;
    }

    /**
     * Gets is_in_use
     *
     * @return bool|null
     */
    public function getIsInUse()
    {
        return $this->container['is_in_use'];
    }

    /**
     * Sets is_in_use
     *
     * @param bool|null $is_in_use is_in_use
     *
     * @return self
     */
    public function setIsInUse($is_in_use)
    {
        $this->container['is_in_use'] = $is_in_use;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool|null $is_enabled is_enabled
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

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


