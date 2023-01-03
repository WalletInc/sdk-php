<?php
/**
 * WTAdvertisementCredit
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
 * The version of the OpenAPI document: 2.1.528
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
 * WTAdvertisementCredit Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTAdvertisementCredit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTAdvertisementCredit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'value_type' => 'string',
        'payment_design_id' => 'string',
        'max_uses' => 'int',
        'discount_value' => 'int',
        'employee_id' => 'string',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'discount_value_decimal' => 'string',
        'discount_value_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'value_type' => null,
        'payment_design_id' => null,
        'max_uses' => 'int32',
        'discount_value' => 'int32',
        'employee_id' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'discount_value_decimal' => null,
        'discount_value_string' => null
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
        'title' => 'title',
        'value_type' => 'valueType',
        'payment_design_id' => 'paymentDesignID',
        'max_uses' => 'maxUses',
        'discount_value' => 'discountValue',
        'employee_id' => 'employeeID',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'discount_value_decimal' => 'discountValue_decimal',
        'discount_value_string' => 'discountValue_string'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'value_type' => 'setValueType',
        'payment_design_id' => 'setPaymentDesignId',
        'max_uses' => 'setMaxUses',
        'discount_value' => 'setDiscountValue',
        'employee_id' => 'setEmployeeId',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'discount_value_decimal' => 'setDiscountValueDecimal',
        'discount_value_string' => 'setDiscountValueString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'value_type' => 'getValueType',
        'payment_design_id' => 'getPaymentDesignId',
        'max_uses' => 'getMaxUses',
        'discount_value' => 'getDiscountValue',
        'employee_id' => 'getEmployeeId',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'discount_value_decimal' => 'getDiscountValueDecimal',
        'discount_value_string' => 'getDiscountValueString'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['value_type'] = $data['value_type'] ?? null;
        $this->container['payment_design_id'] = $data['payment_design_id'] ?? null;
        $this->container['max_uses'] = $data['max_uses'] ?? null;
        $this->container['discount_value'] = $data['discount_value'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['discount_value_decimal'] = $data['discount_value_decimal'] ?? null;
        $this->container['discount_value_string'] = $data['discount_value_string'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['value_type'] === null) {
            $invalidProperties[] = "'value_type' can't be null";
        }
        if ($this->container['payment_design_id'] === null) {
            $invalidProperties[] = "'payment_design_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_design_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'payment_design_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['payment_design_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'payment_design_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['payment_design_id'])) {
            $invalidProperties[] = "invalid value for 'payment_design_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['max_uses'] === null) {
            $invalidProperties[] = "'max_uses' can't be null";
        }
        if (($this->container['max_uses'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_uses', must be bigger than or equal to 0.";
        }

        if ($this->container['discount_value'] === null) {
            $invalidProperties[] = "'discount_value' can't be null";
        }
        if (($this->container['discount_value'] < 0)) {
            $invalidProperties[] = "invalid value for 'discount_value', must be bigger than or equal to 0.";
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
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
        if ($this->container['discount_value_decimal'] === null) {
            $invalidProperties[] = "'discount_value_decimal' can't be null";
        }
        if ($this->container['discount_value_string'] === null) {
            $invalidProperties[] = "'discount_value_string' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling WTAdvertisementCredit., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param string $value_type value_type
     *
     * @return self
     */
    public function setValueType($value_type)
    {
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets payment_design_id
     *
     * @return string
     */
    public function getPaymentDesignId()
    {
        return $this->container['payment_design_id'];
    }

    /**
     * Sets payment_design_id
     *
     * @param string $payment_design_id payment_design_id
     *
     * @return self
     */
    public function setPaymentDesignId($payment_design_id)
    {
        if ((mb_strlen($payment_design_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling WTAdvertisementCredit., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling WTAdvertisementCredit., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling WTAdvertisementCredit., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_design_id'] = $payment_design_id;

        return $this;
    }

    /**
     * Gets max_uses
     *
     * @return int
     */
    public function getMaxUses()
    {
        return $this->container['max_uses'];
    }

    /**
     * Sets max_uses
     *
     * @param int $max_uses max_uses
     *
     * @return self
     */
    public function setMaxUses($max_uses)
    {

        if (($max_uses < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_uses when calling WTAdvertisementCredit., must be bigger than or equal to 0.');
        }

        $this->container['max_uses'] = $max_uses;

        return $this;
    }

    /**
     * Gets discount_value
     *
     * @return int
     */
    public function getDiscountValue()
    {
        return $this->container['discount_value'];
    }

    /**
     * Sets discount_value
     *
     * @param int $discount_value discount_value
     *
     * @return self
     */
    public function setDiscountValue($discount_value)
    {

        if (($discount_value < 0)) {
            throw new \InvalidArgumentException('invalid value for $discount_value when calling WTAdvertisementCredit., must be bigger than or equal to 0.');
        }

        $this->container['discount_value'] = $discount_value;

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
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTAdvertisementCredit., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTAdvertisementCredit., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $employee_id))) {
            throw new \InvalidArgumentException("invalid value for $employee_id when calling WTAdvertisementCredit., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

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
        if ((mb_strlen($id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTAdvertisementCredit., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTAdvertisementCredit., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTAdvertisementCredit., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTAdvertisementCredit., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTAdvertisementCredit., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets discount_value_decimal
     *
     * @return string
     */
    public function getDiscountValueDecimal()
    {
        return $this->container['discount_value_decimal'];
    }

    /**
     * Sets discount_value_decimal
     *
     * @param string $discount_value_decimal discount_value_decimal
     *
     * @return self
     */
    public function setDiscountValueDecimal($discount_value_decimal)
    {
        $this->container['discount_value_decimal'] = $discount_value_decimal;

        return $this;
    }

    /**
     * Gets discount_value_string
     *
     * @return string
     */
    public function getDiscountValueString()
    {
        return $this->container['discount_value_string'];
    }

    /**
     * Sets discount_value_string
     *
     * @param string $discount_value_string discount_value_string
     *
     * @return self
     */
    public function setDiscountValueString($discount_value_string)
    {
        $this->container['discount_value_string'] = $discount_value_string;

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


