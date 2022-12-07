<?php
/**
 * WTMembershipTierUpdateParams
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
 * WTMembershipTierUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTMembershipTierUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTMembershipTierUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tier_number' => 'string',
        'tier_name' => 'string',
        'tier_discount' => 'float',
        'tier_design_id' => 'string',
        'points_design_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tier_number' => null,
        'tier_name' => null,
        'tier_discount' => 'float',
        'tier_design_id' => null,
        'points_design_id' => null
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
        'tier_number' => 'tierNumber',
        'tier_name' => 'tierName',
        'tier_discount' => 'tierDiscount',
        'tier_design_id' => 'tierDesignID',
        'points_design_id' => 'pointsDesignID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tier_number' => 'setTierNumber',
        'tier_name' => 'setTierName',
        'tier_discount' => 'setTierDiscount',
        'tier_design_id' => 'setTierDesignId',
        'points_design_id' => 'setPointsDesignId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tier_number' => 'getTierNumber',
        'tier_name' => 'getTierName',
        'tier_discount' => 'getTierDiscount',
        'tier_design_id' => 'getTierDesignId',
        'points_design_id' => 'getPointsDesignId'
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
        $this->container['tier_number'] = $data['tier_number'] ?? null;
        $this->container['tier_name'] = $data['tier_name'] ?? null;
        $this->container['tier_discount'] = $data['tier_discount'] ?? null;
        $this->container['tier_design_id'] = $data['tier_design_id'] ?? null;
        $this->container['points_design_id'] = $data['points_design_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tier_number'] === null) {
            $invalidProperties[] = "'tier_number' can't be null";
        }
        if ((mb_strlen($this->container['tier_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'tier_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tier_name'] === null) {
            $invalidProperties[] = "'tier_name' can't be null";
        }
        if ((mb_strlen($this->container['tier_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'tier_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tier_discount'] === null) {
            $invalidProperties[] = "'tier_discount' can't be null";
        }
        if (($this->container['tier_discount'] > 100)) {
            $invalidProperties[] = "invalid value for 'tier_discount', must be smaller than or equal to 100.";
        }

        if (($this->container['tier_discount'] < 0)) {
            $invalidProperties[] = "invalid value for 'tier_discount', must be bigger than or equal to 0.";
        }

        if ($this->container['tier_design_id'] === null) {
            $invalidProperties[] = "'tier_design_id' can't be null";
        }
        if ((mb_strlen($this->container['tier_design_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'tier_design_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['tier_design_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'tier_design_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['tier_design_id'])) {
            $invalidProperties[] = "invalid value for 'tier_design_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['points_design_id'] === null) {
            $invalidProperties[] = "'points_design_id' can't be null";
        }
        if ((mb_strlen($this->container['points_design_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'points_design_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['points_design_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'points_design_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['points_design_id'])) {
            $invalidProperties[] = "invalid value for 'points_design_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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
     * Gets tier_number
     *
     * @return string
     */
    public function getTierNumber()
    {
        return $this->container['tier_number'];
    }

    /**
     * Sets tier_number
     *
     * @param string $tier_number The tier number as defined by the merchant
     *
     * @return self
     */
    public function setTierNumber($tier_number)
    {

        if ((mb_strlen($tier_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tier_number when calling WTMembershipTierUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['tier_number'] = $tier_number;

        return $this;
    }

    /**
     * Gets tier_name
     *
     * @return string
     */
    public function getTierName()
    {
        return $this->container['tier_name'];
    }

    /**
     * Sets tier_name
     *
     * @param string $tier_name The tier name as defined by the merchant
     *
     * @return self
     */
    public function setTierName($tier_name)
    {

        if ((mb_strlen($tier_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tier_name when calling WTMembershipTierUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['tier_name'] = $tier_name;

        return $this;
    }

    /**
     * Gets tier_discount
     *
     * @return float
     */
    public function getTierDiscount()
    {
        return $this->container['tier_discount'];
    }

    /**
     * Sets tier_discount
     *
     * @param float $tier_discount The provided discount as percentage
     *
     * @return self
     */
    public function setTierDiscount($tier_discount)
    {

        if (($tier_discount > 100)) {
            throw new \InvalidArgumentException('invalid value for $tier_discount when calling WTMembershipTierUpdateParams., must be smaller than or equal to 100.');
        }
        if (($tier_discount < 0)) {
            throw new \InvalidArgumentException('invalid value for $tier_discount when calling WTMembershipTierUpdateParams., must be bigger than or equal to 0.');
        }

        $this->container['tier_discount'] = $tier_discount;

        return $this;
    }

    /**
     * Gets tier_design_id
     *
     * @return string
     */
    public function getTierDesignId()
    {
        return $this->container['tier_design_id'];
    }

    /**
     * Sets tier_design_id
     *
     * @param string $tier_design_id tier_design_id
     *
     * @return self
     */
    public function setTierDesignId($tier_design_id)
    {
        if ((mb_strlen($tier_design_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $tier_design_id when calling WTMembershipTierUpdateParams., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($tier_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $tier_design_id when calling WTMembershipTierUpdateParams., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $tier_design_id))) {
            throw new \InvalidArgumentException("invalid value for $tier_design_id when calling WTMembershipTierUpdateParams., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['tier_design_id'] = $tier_design_id;

        return $this;
    }

    /**
     * Gets points_design_id
     *
     * @return string
     */
    public function getPointsDesignId()
    {
        return $this->container['points_design_id'];
    }

    /**
     * Sets points_design_id
     *
     * @param string $points_design_id points_design_id
     *
     * @return self
     */
    public function setPointsDesignId($points_design_id)
    {
        if ((mb_strlen($points_design_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $points_design_id when calling WTMembershipTierUpdateParams., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($points_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $points_design_id when calling WTMembershipTierUpdateParams., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $points_design_id))) {
            throw new \InvalidArgumentException("invalid value for $points_design_id when calling WTMembershipTierUpdateParams., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['points_design_id'] = $points_design_id;

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


