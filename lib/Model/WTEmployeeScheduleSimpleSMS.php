<?php
/**
 * WTEmployeeScheduleSimpleSMS
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
 * WTEmployeeScheduleSimpleSMS Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTEmployeeScheduleSimpleSMS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTEmployeeScheduleSimpleSMS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_number_id' => 'string',
        'message_template' => 'string',
        'media_urls' => 'string[]',
        'broadcast_scheduled_at' => '\DateTime',
        'list_type' => 'string',
        'list_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_number_id' => null,
        'message_template' => null,
        'media_urls' => null,
        'broadcast_scheduled_at' => 'date-time',
        'list_type' => null,
        'list_id' => null
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
        'phone_number_id' => 'phoneNumberID',
        'message_template' => 'messageTemplate',
        'media_urls' => 'mediaURLs',
        'broadcast_scheduled_at' => 'broadcastScheduledAt',
        'list_type' => 'listType',
        'list_id' => 'listID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number_id' => 'setPhoneNumberId',
        'message_template' => 'setMessageTemplate',
        'media_urls' => 'setMediaUrls',
        'broadcast_scheduled_at' => 'setBroadcastScheduledAt',
        'list_type' => 'setListType',
        'list_id' => 'setListId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number_id' => 'getPhoneNumberId',
        'message_template' => 'getMessageTemplate',
        'media_urls' => 'getMediaUrls',
        'broadcast_scheduled_at' => 'getBroadcastScheduledAt',
        'list_type' => 'getListType',
        'list_id' => 'getListId'
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
        $this->container['phone_number_id'] = $data['phone_number_id'] ?? null;
        $this->container['message_template'] = $data['message_template'] ?? null;
        $this->container['media_urls'] = $data['media_urls'] ?? null;
        $this->container['broadcast_scheduled_at'] = $data['broadcast_scheduled_at'] ?? null;
        $this->container['list_type'] = $data['list_type'] ?? null;
        $this->container['list_id'] = $data['list_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ((mb_strlen($this->container['phone_number_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['phone_number_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['phone_number_id'])) {
            $invalidProperties[] = "invalid value for 'phone_number_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['message_template'] === null) {
            $invalidProperties[] = "'message_template' can't be null";
        }
        if ($this->container['broadcast_scheduled_at'] === null) {
            $invalidProperties[] = "'broadcast_scheduled_at' can't be null";
        }
        if ($this->container['list_type'] === null) {
            $invalidProperties[] = "'list_type' can't be null";
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
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id phone_number_id
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        if ((mb_strlen($phone_number_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling WTEmployeeScheduleSimpleSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($phone_number_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling WTEmployeeScheduleSimpleSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $phone_number_id))) {
            throw new \InvalidArgumentException("invalid value for $phone_number_id when calling WTEmployeeScheduleSimpleSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets message_template
     *
     * @return string
     */
    public function getMessageTemplate()
    {
        return $this->container['message_template'];
    }

    /**
     * Sets message_template
     *
     * @param string $message_template message_template
     *
     * @return self
     */
    public function setMessageTemplate($message_template)
    {
        $this->container['message_template'] = $message_template;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]|null
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[]|null $media_urls media_urls
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        $this->container['media_urls'] = $media_urls;

        return $this;
    }

    /**
     * Gets broadcast_scheduled_at
     *
     * @return \DateTime
     */
    public function getBroadcastScheduledAt()
    {
        return $this->container['broadcast_scheduled_at'];
    }

    /**
     * Sets broadcast_scheduled_at
     *
     * @param \DateTime $broadcast_scheduled_at broadcast_scheduled_at
     *
     * @return self
     */
    public function setBroadcastScheduledAt($broadcast_scheduled_at)
    {
        $this->container['broadcast_scheduled_at'] = $broadcast_scheduled_at;

        return $this;
    }

    /**
     * Gets list_type
     *
     * @return string
     */
    public function getListType()
    {
        return $this->container['list_type'];
    }

    /**
     * Sets list_type
     *
     * @param string $list_type list_type
     *
     * @return self
     */
    public function setListType($list_type)
    {
        $this->container['list_type'] = $list_type;

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
            throw new \InvalidArgumentException('invalid length for $list_id when calling WTEmployeeScheduleSimpleSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($list_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $list_id when calling WTEmployeeScheduleSimpleSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $list_id))) {
            throw new \InvalidArgumentException("invalid value for $list_id when calling WTEmployeeScheduleSimpleSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['list_id'] = $list_id;

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


