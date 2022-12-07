<?php
/**
 * PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId
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
 * The version of the OpenAPI document: 2.1.527
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
 * PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId Class Doc Comment
 *
 * @category Class
 * @description From T, pick a set of properties whose keys are in the union K
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pick_VSAdvertisementCreditUpdateParams.Exclude_keyofVSAdvertisementCreditUpdateParams.id__';

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
        'discount_value' => 'int'
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
        'discount_value' => 'int32'
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
        'discount_value' => 'discountValue'
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
        'discount_value' => 'setDiscountValue'
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
        'discount_value' => 'getDiscountValue'
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
            throw new \InvalidArgumentException('invalid length for $title when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
            throw new \InvalidArgumentException('invalid value for $max_uses when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $discount_value when calling PickVSAdvertisementCreditUpdateParamsExcludeKeyofVSAdvertisementCreditUpdateParamsId., must be bigger than or equal to 0.');
        }

        $this->container['discount_value'] = $discount_value;

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


