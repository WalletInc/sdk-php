<?php
/**
 * PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 2.1.600
 * Contact: development@wallet.inc
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
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
 * PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber Class Doc Comment
 *
 * @category Class
 * @description From T, pick a set of properties whose keys are in the union K
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pick_WTMerchantCredit.memberID-or-creditAmount-or-mobileNumber_';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'member_id' => 'string',
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
        'member_id' => null,
        'mobile_number' => null,
        'credit_amount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'member_id' => false,
        'mobile_number' => false,
        'credit_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'member_id' => 'memberID',
        'mobile_number' => 'mobileNumber',
        'credit_amount' => 'creditAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_id' => 'setMemberId',
        'mobile_number' => 'setMobileNumber',
        'credit_amount' => 'setCreditAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_id' => 'getMemberId',
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
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('credit_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['member_id']) && (mb_strlen($this->container['member_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'member_id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['member_id']) && !preg_match("/^[a-zA-Z0-9]*$/", $this->container['member_id'])) {
            $invalidProperties[] = "invalid value for 'member_id', must be conform to the pattern /^[a-zA-Z0-9]*$/.";
        }

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
     * Gets member_id
     *
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string|null $member_id MerchantCredit ID as represented by the merchant
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }

        if ((mb_strlen($member_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $member_id when calling PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]*$/", ObjectSerializer::toString($member_id)))) {
            throw new \InvalidArgumentException("invalid value for \$member_id when calling PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber., must conform to the pattern /^[a-zA-Z0-9]*$/.");
        }

        $this->container['member_id'] = $member_id;

        return $this;
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
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }

        if ((mb_strlen($mobile_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mobile_number when calling PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber., must be bigger than or equal to 1.');
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
        if (is_null($credit_amount)) {
            throw new \InvalidArgumentException('non-nullable credit_amount cannot be null');
        }

        if (($credit_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $credit_amount when calling PickWTMerchantCreditMemberIDOrCreditAmountOrMobileNumber., must be bigger than or equal to 0.');
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


