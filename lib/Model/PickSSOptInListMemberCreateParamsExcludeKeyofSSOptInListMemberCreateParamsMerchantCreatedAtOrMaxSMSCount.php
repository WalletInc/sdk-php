<?php
/**
 * PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount
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
 * The version of the OpenAPI document: 2.1.520
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
 * PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount Class Doc Comment
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
class PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pick_SSOptInListMemberCreateParams.Exclude_keyofSSOptInListMemberCreateParams.merchantCreatedAt-or-maxSMSCount__';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opt_in_list_id' => 'string',
        'opt_in_source_id' => 'string',
        'is_subscribed' => 'bool',
        'is_pending_age21_verification' => 'bool',
        'mobile_phone_number' => 'string',
        'referring_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opt_in_list_id' => null,
        'opt_in_source_id' => null,
        'is_subscribed' => null,
        'is_pending_age21_verification' => null,
        'mobile_phone_number' => null,
        'referring_url' => null
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
        'opt_in_list_id' => 'optInListID',
        'opt_in_source_id' => 'optInSourceID',
        'is_subscribed' => 'isSubscribed',
        'is_pending_age21_verification' => 'isPendingAge21Verification',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'referring_url' => 'referringURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opt_in_list_id' => 'setOptInListId',
        'opt_in_source_id' => 'setOptInSourceId',
        'is_subscribed' => 'setIsSubscribed',
        'is_pending_age21_verification' => 'setIsPendingAge21Verification',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'referring_url' => 'setReferringUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opt_in_list_id' => 'getOptInListId',
        'opt_in_source_id' => 'getOptInSourceId',
        'is_subscribed' => 'getIsSubscribed',
        'is_pending_age21_verification' => 'getIsPendingAge21Verification',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'referring_url' => 'getReferringUrl'
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
        $this->container['opt_in_list_id'] = $data['opt_in_list_id'] ?? null;
        $this->container['opt_in_source_id'] = $data['opt_in_source_id'] ?? null;
        $this->container['is_subscribed'] = $data['is_subscribed'] ?? null;
        $this->container['is_pending_age21_verification'] = $data['is_pending_age21_verification'] ?? null;
        $this->container['mobile_phone_number'] = $data['mobile_phone_number'] ?? null;
        $this->container['referring_url'] = $data['referring_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['opt_in_list_id'] === null) {
            $invalidProperties[] = "'opt_in_list_id' can't be null";
        }
        if ((mb_strlen($this->container['opt_in_list_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'opt_in_list_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['opt_in_list_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'opt_in_list_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['opt_in_list_id'])) {
            $invalidProperties[] = "invalid value for 'opt_in_list_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['opt_in_source_id'] === null) {
            $invalidProperties[] = "'opt_in_source_id' can't be null";
        }
        if ($this->container['is_subscribed'] === null) {
            $invalidProperties[] = "'is_subscribed' can't be null";
        }
        if ($this->container['is_pending_age21_verification'] === null) {
            $invalidProperties[] = "'is_pending_age21_verification' can't be null";
        }
        if ($this->container['mobile_phone_number'] === null) {
            $invalidProperties[] = "'mobile_phone_number' can't be null";
        }
        if ($this->container['referring_url'] === null) {
            $invalidProperties[] = "'referring_url' can't be null";
        }
        if ((mb_strlen($this->container['referring_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'referring_url', the character length must be bigger than or equal to 0.";
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
     * Gets opt_in_list_id
     *
     * @return string
     */
    public function getOptInListId()
    {
        return $this->container['opt_in_list_id'];
    }

    /**
     * Sets opt_in_list_id
     *
     * @param string $opt_in_list_id opt_in_list_id
     *
     * @return self
     */
    public function setOptInListId($opt_in_list_id)
    {
        if ((mb_strlen($opt_in_list_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_list_id when calling PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($opt_in_list_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_list_id when calling PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $opt_in_list_id))) {
            throw new \InvalidArgumentException("invalid value for $opt_in_list_id when calling PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['opt_in_list_id'] = $opt_in_list_id;

        return $this;
    }

    /**
     * Gets opt_in_source_id
     *
     * @return string
     */
    public function getOptInSourceId()
    {
        return $this->container['opt_in_source_id'];
    }

    /**
     * Sets opt_in_source_id
     *
     * @param string $opt_in_source_id opt_in_source_id
     *
     * @return self
     */
    public function setOptInSourceId($opt_in_source_id)
    {
        $this->container['opt_in_source_id'] = $opt_in_source_id;

        return $this;
    }

    /**
     * Gets is_subscribed
     *
     * @return bool
     */
    public function getIsSubscribed()
    {
        return $this->container['is_subscribed'];
    }

    /**
     * Sets is_subscribed
     *
     * @param bool $is_subscribed is_subscribed
     *
     * @return self
     */
    public function setIsSubscribed($is_subscribed)
    {
        $this->container['is_subscribed'] = $is_subscribed;

        return $this;
    }

    /**
     * Gets is_pending_age21_verification
     *
     * @return bool
     */
    public function getIsPendingAge21Verification()
    {
        return $this->container['is_pending_age21_verification'];
    }

    /**
     * Sets is_pending_age21_verification
     *
     * @param bool $is_pending_age21_verification is_pending_age21_verification
     *
     * @return self
     */
    public function setIsPendingAge21Verification($is_pending_age21_verification)
    {
        $this->container['is_pending_age21_verification'] = $is_pending_age21_verification;

        return $this;
    }

    /**
     * Gets mobile_phone_number
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string $mobile_phone_number mobile_phone_number
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets referring_url
     *
     * @return string
     */
    public function getReferringUrl()
    {
        return $this->container['referring_url'];
    }

    /**
     * Sets referring_url
     *
     * @param string $referring_url referring_url
     *
     * @return self
     */
    public function setReferringUrl($referring_url)
    {

        if ((mb_strlen($referring_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $referring_url when calling PickSSOptInListMemberCreateParamsExcludeKeyofSSOptInListMemberCreateParamsMerchantCreatedAtOrMaxSMSCount., must be bigger than or equal to 0.');
        }

        $this->container['referring_url'] = $referring_url;

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


