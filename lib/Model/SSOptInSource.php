<?php
/**
 * SSOptInSource
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
 * The version of the OpenAPI document: 2.1.518
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
 * SSOptInSource Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SSOptInSource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SSOptInSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'list_id' => 'string',
        'source_name' => 'string',
        'employee_id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
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
        'id' => null,
        'list_id' => null,
        'source_name' => null,
        'employee_id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
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
        'id' => 'id',
        'list_id' => 'listID',
        'source_name' => 'sourceName',
        'employee_id' => 'employeeID',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'list_id' => 'setListId',
        'source_name' => 'setSourceName',
        'employee_id' => 'setEmployeeId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'list_id' => 'getListId',
        'source_name' => 'getSourceName',
        'employee_id' => 'getEmployeeId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['list_id'] = $data['list_id'] ?? null;
        $this->container['source_name'] = $data['source_name'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['list_id'] === null) {
            $invalidProperties[] = "'list_id' can't be null";
        }
        if ((mb_strlen($this->container['list_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'list_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['list_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'list_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['list_id'])) {
            $invalidProperties[] = "invalid value for 'list_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['source_name'] === null) {
            $invalidProperties[] = "'source_name' can't be null";
        }
        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['employee_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['employee_id'])) {
            $invalidProperties[] = "invalid value for 'employee_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $id when calling SSOptInSource., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SSOptInSource., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return string
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param string $list_id list_id
     *
     * @return self
     */
    public function setListId($list_id)
    {
        if ((mb_strlen($list_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $list_id when calling SSOptInSource., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($list_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $list_id when calling SSOptInSource., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $list_id))) {
            throw new \InvalidArgumentException("invalid value for $list_id when calling SSOptInSource., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets source_name
     *
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     *
     * @param string $source_name source_name
     *
     * @return self
     */
    public function setSourceName($source_name)
    {
        $this->container['source_name'] = $source_name;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id employee_id
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if ((mb_strlen($employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling SSOptInSource., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling SSOptInSource., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $employee_id))) {
            throw new \InvalidArgumentException("invalid value for $employee_id when calling SSOptInSource., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling SSOptInSource., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling SSOptInSource., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling SSOptInSource., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

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


