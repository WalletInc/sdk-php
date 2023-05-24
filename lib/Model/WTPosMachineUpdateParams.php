<?php
/**
 * WTPosMachineUpdateParams
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
 * The version of the OpenAPI document: 2.1.535
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
 * WTPosMachineUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTPosMachineUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTPosMachineUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'register_id' => 'string',
        'register_name' => 'string',
        'outlet_name' => 'string',
        'outlet_number' => 'int',
        'profit_center' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'register_id' => null,
        'register_name' => null,
        'outlet_name' => null,
        'outlet_number' => 'int32',
        'profit_center' => null
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
        'register_id' => 'registerID',
        'register_name' => 'registerName',
        'outlet_name' => 'outletName',
        'outlet_number' => 'outletNumber',
        'profit_center' => 'profitCenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'register_id' => 'setRegisterId',
        'register_name' => 'setRegisterName',
        'outlet_name' => 'setOutletName',
        'outlet_number' => 'setOutletNumber',
        'profit_center' => 'setProfitCenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'register_id' => 'getRegisterId',
        'register_name' => 'getRegisterName',
        'outlet_name' => 'getOutletName',
        'outlet_number' => 'getOutletNumber',
        'profit_center' => 'getProfitCenter'
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
        $this->container['register_id'] = $data['register_id'] ?? null;
        $this->container['register_name'] = $data['register_name'] ?? null;
        $this->container['outlet_name'] = $data['outlet_name'] ?? null;
        $this->container['outlet_number'] = $data['outlet_number'] ?? null;
        $this->container['profit_center'] = $data['profit_center'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['register_id'] === null) {
            $invalidProperties[] = "'register_id' can't be null";
        }
        if ((mb_strlen($this->container['register_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'register_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['register_name'] === null) {
            $invalidProperties[] = "'register_name' can't be null";
        }
        if ((mb_strlen($this->container['register_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'register_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['outlet_name'] === null) {
            $invalidProperties[] = "'outlet_name' can't be null";
        }
        if ((mb_strlen($this->container['outlet_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'outlet_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['outlet_number'] === null) {
            $invalidProperties[] = "'outlet_number' can't be null";
        }
        if ($this->container['profit_center'] === null) {
            $invalidProperties[] = "'profit_center' can't be null";
        }
        if ((mb_strlen($this->container['profit_center']) < 1)) {
            $invalidProperties[] = "invalid value for 'profit_center', the character length must be bigger than or equal to 1.";
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
     * Gets register_id
     *
     * @return string
     */
    public function getRegisterId()
    {
        return $this->container['register_id'];
    }

    /**
     * Sets register_id
     *
     * @param string $register_id register_id
     *
     * @return self
     */
    public function setRegisterId($register_id)
    {

        if ((mb_strlen($register_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $register_id when calling WTPosMachineUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['register_id'] = $register_id;

        return $this;
    }

    /**
     * Gets register_name
     *
     * @return string
     */
    public function getRegisterName()
    {
        return $this->container['register_name'];
    }

    /**
     * Sets register_name
     *
     * @param string $register_name register_name
     *
     * @return self
     */
    public function setRegisterName($register_name)
    {

        if ((mb_strlen($register_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $register_name when calling WTPosMachineUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['register_name'] = $register_name;

        return $this;
    }

    /**
     * Gets outlet_name
     *
     * @return string
     */
    public function getOutletName()
    {
        return $this->container['outlet_name'];
    }

    /**
     * Sets outlet_name
     *
     * @param string $outlet_name outlet_name
     *
     * @return self
     */
    public function setOutletName($outlet_name)
    {

        if ((mb_strlen($outlet_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $outlet_name when calling WTPosMachineUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['outlet_name'] = $outlet_name;

        return $this;
    }

    /**
     * Gets outlet_number
     *
     * @return int
     */
    public function getOutletNumber()
    {
        return $this->container['outlet_number'];
    }

    /**
     * Sets outlet_number
     *
     * @param int $outlet_number Stores the outlet number
     *
     * @return self
     */
    public function setOutletNumber($outlet_number)
    {
        $this->container['outlet_number'] = $outlet_number;

        return $this;
    }

    /**
     * Gets profit_center
     *
     * @return string
     */
    public function getProfitCenter()
    {
        return $this->container['profit_center'];
    }

    /**
     * Sets profit_center
     *
     * @param string $profit_center profit_center
     *
     * @return self
     */
    public function setProfitCenter($profit_center)
    {

        if ((mb_strlen($profit_center) < 1)) {
            throw new \InvalidArgumentException('invalid length for $profit_center when calling WTPosMachineUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['profit_center'] = $profit_center;

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


