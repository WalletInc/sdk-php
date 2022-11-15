<?php
/**
 * WTDynamicVoucherCreateParams
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
 * The version of the OpenAPI document: 2.1.522
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
 * WTDynamicVoucherCreateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTDynamicVoucherCreateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTDynamicVoucherCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'notes' => 'string',
        'payment_design_id' => 'string',
        'date_time_start' => '\DateTime',
        'date_time_expiration' => '\DateTime',
        'starting_value' => 'int',
        'max_budget' => 'int',
        'decrease_amount' => 'int',
        'frequency' => 'int',
        'frequency_type' => 'string',
        'decrease_by' => 'double',
        'decrease_every' => 'double',
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
        'title' => null,
        'notes' => null,
        'payment_design_id' => null,
        'date_time_start' => 'date-time',
        'date_time_expiration' => 'date-time',
        'starting_value' => 'int32',
        'max_budget' => 'int32',
        'decrease_amount' => 'int32',
        'frequency' => 'int32',
        'frequency_type' => null,
        'decrease_by' => 'double',
        'decrease_every' => 'double',
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
        'title' => 'title',
        'notes' => 'notes',
        'payment_design_id' => 'paymentDesignID',
        'date_time_start' => 'dateTimeStart',
        'date_time_expiration' => 'dateTimeExpiration',
        'starting_value' => 'startingValue',
        'max_budget' => 'maxBudget',
        'decrease_amount' => 'decreaseAmount',
        'frequency' => 'frequency',
        'frequency_type' => 'frequencyType',
        'decrease_by' => 'decreaseBy',
        'decrease_every' => 'decreaseEvery',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'notes' => 'setNotes',
        'payment_design_id' => 'setPaymentDesignId',
        'date_time_start' => 'setDateTimeStart',
        'date_time_expiration' => 'setDateTimeExpiration',
        'starting_value' => 'setStartingValue',
        'max_budget' => 'setMaxBudget',
        'decrease_amount' => 'setDecreaseAmount',
        'frequency' => 'setFrequency',
        'frequency_type' => 'setFrequencyType',
        'decrease_by' => 'setDecreaseBy',
        'decrease_every' => 'setDecreaseEvery',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'notes' => 'getNotes',
        'payment_design_id' => 'getPaymentDesignId',
        'date_time_start' => 'getDateTimeStart',
        'date_time_expiration' => 'getDateTimeExpiration',
        'starting_value' => 'getStartingValue',
        'max_budget' => 'getMaxBudget',
        'decrease_amount' => 'getDecreaseAmount',
        'frequency' => 'getFrequency',
        'frequency_type' => 'getFrequencyType',
        'decrease_by' => 'getDecreaseBy',
        'decrease_every' => 'getDecreaseEvery',
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['payment_design_id'] = $data['payment_design_id'] ?? null;
        $this->container['date_time_start'] = $data['date_time_start'] ?? null;
        $this->container['date_time_expiration'] = $data['date_time_expiration'] ?? null;
        $this->container['starting_value'] = $data['starting_value'] ?? null;
        $this->container['max_budget'] = $data['max_budget'] ?? null;
        $this->container['decrease_amount'] = $data['decrease_amount'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['frequency_type'] = $data['frequency_type'] ?? null;
        $this->container['decrease_by'] = $data['decrease_by'] ?? null;
        $this->container['decrease_every'] = $data['decrease_every'] ?? null;
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
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

        if ($this->container['date_time_start'] === null) {
            $invalidProperties[] = "'date_time_start' can't be null";
        }
        if ($this->container['date_time_expiration'] === null) {
            $invalidProperties[] = "'date_time_expiration' can't be null";
        }
        if ($this->container['starting_value'] === null) {
            $invalidProperties[] = "'starting_value' can't be null";
        }
        if (($this->container['starting_value'] < 0)) {
            $invalidProperties[] = "invalid value for 'starting_value', must be bigger than or equal to 0.";
        }

        if ($this->container['max_budget'] === null) {
            $invalidProperties[] = "'max_budget' can't be null";
        }
        if (($this->container['max_budget'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_budget', must be bigger than or equal to 0.";
        }

        if ($this->container['decrease_amount'] === null) {
            $invalidProperties[] = "'decrease_amount' can't be null";
        }
        if (($this->container['decrease_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'decrease_amount', must be bigger than or equal to 0.";
        }

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if (($this->container['frequency'] < 0)) {
            $invalidProperties[] = "invalid value for 'frequency', must be bigger than or equal to 0.";
        }

        if ($this->container['frequency_type'] === null) {
            $invalidProperties[] = "'frequency_type' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $title when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling WTDynamicVoucherCreateParams., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling WTDynamicVoucherCreateParams., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_design_id'] = $payment_design_id;

        return $this;
    }

    /**
     * Gets date_time_start
     *
     * @return \DateTime
     */
    public function getDateTimeStart()
    {
        return $this->container['date_time_start'];
    }

    /**
     * Sets date_time_start
     *
     * @param \DateTime $date_time_start date_time_start
     *
     * @return self
     */
    public function setDateTimeStart($date_time_start)
    {
        $this->container['date_time_start'] = $date_time_start;

        return $this;
    }

    /**
     * Gets date_time_expiration
     *
     * @return \DateTime
     */
    public function getDateTimeExpiration()
    {
        return $this->container['date_time_expiration'];
    }

    /**
     * Sets date_time_expiration
     *
     * @param \DateTime $date_time_expiration date_time_expiration
     *
     * @return self
     */
    public function setDateTimeExpiration($date_time_expiration)
    {
        $this->container['date_time_expiration'] = $date_time_expiration;

        return $this;
    }

    /**
     * Gets starting_value
     *
     * @return int
     */
    public function getStartingValue()
    {
        return $this->container['starting_value'];
    }

    /**
     * Sets starting_value
     *
     * @param int $starting_value starting_value
     *
     * @return self
     */
    public function setStartingValue($starting_value)
    {

        if (($starting_value < 0)) {
            throw new \InvalidArgumentException('invalid value for $starting_value when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['starting_value'] = $starting_value;

        return $this;
    }

    /**
     * Gets max_budget
     *
     * @return int
     */
    public function getMaxBudget()
    {
        return $this->container['max_budget'];
    }

    /**
     * Sets max_budget
     *
     * @param int $max_budget max_budget
     *
     * @return self
     */
    public function setMaxBudget($max_budget)
    {

        if (($max_budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_budget when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['max_budget'] = $max_budget;

        return $this;
    }

    /**
     * Gets decrease_amount
     *
     * @return int
     */
    public function getDecreaseAmount()
    {
        return $this->container['decrease_amount'];
    }

    /**
     * Sets decrease_amount
     *
     * @param int $decrease_amount decrease_amount
     *
     * @return self
     */
    public function setDecreaseAmount($decrease_amount)
    {

        if (($decrease_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $decrease_amount when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['decrease_amount'] = $decrease_amount;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {

        if (($frequency < 0)) {
            throw new \InvalidArgumentException('invalid value for $frequency when calling WTDynamicVoucherCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_type
     *
     * @return string
     */
    public function getFrequencyType()
    {
        return $this->container['frequency_type'];
    }

    /**
     * Sets frequency_type
     *
     * @param string $frequency_type frequency_type
     *
     * @return self
     */
    public function setFrequencyType($frequency_type)
    {
        $this->container['frequency_type'] = $frequency_type;

        return $this;
    }

    /**
     * Gets decrease_by
     *
     * @return double|null
     */
    public function getDecreaseBy()
    {
        return $this->container['decrease_by'];
    }

    /**
     * Sets decrease_by
     *
     * @param double|null $decrease_by decrease_by
     *
     * @return self
     */
    public function setDecreaseBy($decrease_by)
    {
        $this->container['decrease_by'] = $decrease_by;

        return $this;
    }

    /**
     * Gets decrease_every
     *
     * @return double|null
     */
    public function getDecreaseEvery()
    {
        return $this->container['decrease_every'];
    }

    /**
     * Sets decrease_every
     *
     * @param double|null $decrease_every decrease_every
     *
     * @return self
     */
    public function setDecreaseEvery($decrease_every)
    {
        $this->container['decrease_every'] = $decrease_every;

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


