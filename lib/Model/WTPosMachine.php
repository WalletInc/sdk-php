<?php
/**
 * WTPosMachine
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
 * The version of the OpenAPI document: 2.1.524
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
 * WTPosMachine Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTPosMachine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTPosMachine';

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
        'profit_center' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'merchant_id' => 'string',
        'is_active' => 'bool'
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
        'profit_center' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'merchant_id' => null,
        'is_active' => null
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
        'profit_center' => 'profitCenter',
        'id' => 'id',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'merchant_id' => 'merchantID',
        'is_active' => 'isActive'
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
        'profit_center' => 'setProfitCenter',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'merchant_id' => 'setMerchantId',
        'is_active' => 'setIsActive'
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
        'profit_center' => 'getProfitCenter',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'merchant_id' => 'getMerchantId',
        'is_active' => 'getIsActive'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ((mb_strlen($this->container['merchant_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['merchant_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['merchant_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $register_id when calling WTPosMachine., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $register_name when calling WTPosMachine., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $outlet_name when calling WTPosMachine., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $profit_center when calling WTPosMachine., must be bigger than or equal to 1.');
        }

        $this->container['profit_center'] = $profit_center;

        return $this;
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
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTPosMachine., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTPosMachine., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling WTPosMachine., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if ((mb_strlen($merchant_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTPosMachine., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTPosMachine., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTPosMachine., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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


