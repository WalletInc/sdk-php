<?php
/**
 * MSMerchantCreditHistory
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
 * MSMerchantCreditHistory Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MSMerchantCreditHistory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MSMerchantCreditHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'member_identifier' => 'string',
        'mobile_number' => 'string',
        'credit_amount' => 'int',
        'id' => 'string',
        'merchant_credit_id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
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
        'member_identifier' => null,
        'mobile_number' => null,
        'credit_amount' => 'int32',
        'id' => null,
        'merchant_credit_id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
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
        'member_identifier' => 'memberIdentifier',
        'mobile_number' => 'mobileNumber',
        'credit_amount' => 'creditAmount',
        'id' => 'id',
        'merchant_credit_id' => 'merchantCreditID',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_identifier' => 'setMemberIdentifier',
        'mobile_number' => 'setMobileNumber',
        'credit_amount' => 'setCreditAmount',
        'id' => 'setId',
        'merchant_credit_id' => 'setMerchantCreditId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_identifier' => 'getMemberIdentifier',
        'mobile_number' => 'getMobileNumber',
        'credit_amount' => 'getCreditAmount',
        'id' => 'getId',
        'merchant_credit_id' => 'getMerchantCreditId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
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
        $this->container['member_identifier'] = $data['member_identifier'] ?? null;
        $this->container['mobile_number'] = $data['mobile_number'] ?? null;
        $this->container['credit_amount'] = $data['credit_amount'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_credit_id'] = $data['merchant_credit_id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
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

        if (!is_null($this->container['member_identifier']) && (mb_strlen($this->container['member_identifier']) < 0)) {
            $invalidProperties[] = "invalid value for 'member_identifier', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['member_identifier']) && !preg_match("/^[a-zA-Z0-9]*$/", $this->container['member_identifier'])) {
            $invalidProperties[] = "invalid value for 'member_identifier', must be conform to the pattern /^[a-zA-Z0-9]*$/.";
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['id']) < 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['merchant_credit_id'] === null) {
            $invalidProperties[] = "'merchant_credit_id' can't be null";
        }
        if ((mb_strlen($this->container['merchant_credit_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'merchant_credit_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['merchant_credit_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'merchant_credit_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['merchant_credit_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_credit_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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
     * Gets member_identifier
     *
     * @return string|null
     */
    public function getMemberIdentifier()
    {
        return $this->container['member_identifier'];
    }

    /**
     * Sets member_identifier
     *
     * @param string|null $member_identifier Optional Member ID as represented by the merchant
     *
     * @return self
     */
    public function setMemberIdentifier($member_identifier)
    {

        if (!is_null($member_identifier) && (mb_strlen($member_identifier) < 0)) {
            throw new \InvalidArgumentException('invalid length for $member_identifier when calling MSMerchantCreditHistory., must be bigger than or equal to 0.');
        }
        if (!is_null($member_identifier) && (!preg_match("/^[a-zA-Z0-9]*$/", $member_identifier))) {
            throw new \InvalidArgumentException("invalid value for $member_identifier when calling MSMerchantCreditHistory., must conform to the pattern /^[a-zA-Z0-9]*$/.");
        }

        $this->container['member_identifier'] = $member_identifier;

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

        if ((mb_strlen($mobile_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mobile_number when calling MSMerchantCreditHistory., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $credit_amount when calling MSMerchantCreditHistory., must be bigger than or equal to 0.');
        }

        $this->container['credit_amount'] = $credit_amount;

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
     * @param string $id The UUID of this record
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling MSMerchantCreditHistory., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling MSMerchantCreditHistory., must be bigger than or equal to 36.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant_credit_id
     *
     * @return string
     */
    public function getMerchantCreditId()
    {
        return $this->container['merchant_credit_id'];
    }

    /**
     * Sets merchant_credit_id
     *
     * @param string $merchant_credit_id merchant_credit_id
     *
     * @return self
     */
    public function setMerchantCreditId($merchant_credit_id)
    {
        if ((mb_strlen($merchant_credit_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_credit_id when calling MSMerchantCreditHistory., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_credit_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_credit_id when calling MSMerchantCreditHistory., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_credit_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_credit_id when calling MSMerchantCreditHistory., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_credit_id'] = $merchant_credit_id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling MSMerchantCreditHistory., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling MSMerchantCreditHistory., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling MSMerchantCreditHistory., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * @param \DateTime $created_at The timestamp of when this resource was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param bool $is_active Denotes if this resource is active
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


