<?php
/**
 * PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier
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
 * The version of the OpenAPI document: 2.1.519
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
 * PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier Class Doc Comment
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
class PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pick_MSMerchantCreditCreationParams.Exclude_keyofMSMerchantCreditCreationParams.memberIdentifier__';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mobile_number' => 'string',
        'credit_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mobile_number' => null,
        'credit_amount' => 'int32'
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
        'mobile_number' => 'mobileNumber',
        'credit_amount' => 'creditAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_number' => 'setMobileNumber',
        'credit_amount' => 'setCreditAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_number' => 'getMobileNumber',
        'credit_amount' => 'getCreditAmount'
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
        $this->container['mobile_number'] = $data['mobile_number'] ?? null;
        $this->container['credit_amount'] = $data['credit_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mobile_number'] === null) {
            $invalidProperties[] = "'mobile_number' can't be null";
        }
        if ((mb_strlen($this->container['mobile_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'mobile_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['credit_amount'] === null) {
            $invalidProperties[] = "'credit_amount' can't be null";
        }
        if (($this->container['credit_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'credit_amount', must be bigger than or equal to 0.";
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
     * Gets mobile_number
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string $mobile_number mobile_number
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {

        if ((mb_strlen($mobile_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mobile_number when calling PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier., must be bigger than or equal to 1.');
        }

        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets credit_amount
     *
     * @return int
     */
    public function getCreditAmount()
    {
        return $this->container['credit_amount'];
    }

    /**
     * Sets credit_amount
     *
     * @param int $credit_amount The amount that needs to be credited to the member
     *
     * @return self
     */
    public function setCreditAmount($credit_amount)
    {

        if (($credit_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $credit_amount when calling PickMSMerchantCreditCreationParamsExcludeKeyofMSMerchantCreditCreationParamsMemberIdentifier., must be bigger than or equal to 0.');
        }

        $this->container['credit_amount'] = $credit_amount;

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


