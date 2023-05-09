<?php
/**
 * WTEmployeeSendHelpDeskResponse
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
 * The version of the OpenAPI document: 2.1.535
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
 * WTEmployeeSendHelpDeskResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTEmployeeSendHelpDeskResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTEmployeeSendHelpDeskResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'help_desk_request_id' => 'string',
        'message' => 'string',
        'media_urls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'help_desk_request_id' => null,
        'message' => null,
        'media_urls' => null
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
        'help_desk_request_id' => 'helpDeskRequestID',
        'message' => 'message',
        'media_urls' => 'mediaURLs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'help_desk_request_id' => 'setHelpDeskRequestId',
        'message' => 'setMessage',
        'media_urls' => 'setMediaUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'help_desk_request_id' => 'getHelpDeskRequestId',
        'message' => 'getMessage',
        'media_urls' => 'getMediaUrls'
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
        $this->container['help_desk_request_id'] = $data['help_desk_request_id'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['media_urls'] = $data['media_urls'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['help_desk_request_id'] === null) {
            $invalidProperties[] = "'help_desk_request_id' can't be null";
        }
        if ((mb_strlen($this->container['help_desk_request_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'help_desk_request_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['help_desk_request_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'help_desk_request_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['help_desk_request_id'])) {
            $invalidProperties[] = "invalid value for 'help_desk_request_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ((mb_strlen($this->container['message']) < 1)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
     * Gets help_desk_request_id
     *
     * @return string
     */
    public function getHelpDeskRequestId()
    {
        return $this->container['help_desk_request_id'];
    }

    /**
     * Sets help_desk_request_id
     *
     * @param string $help_desk_request_id help_desk_request_id
     *
     * @return self
     */
    public function setHelpDeskRequestId($help_desk_request_id)
    {
        if ((mb_strlen($help_desk_request_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $help_desk_request_id when calling WTEmployeeSendHelpDeskResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($help_desk_request_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $help_desk_request_id when calling WTEmployeeSendHelpDeskResponse., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $help_desk_request_id))) {
            throw new \InvalidArgumentException("invalid value for $help_desk_request_id when calling WTEmployeeSendHelpDeskResponse., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['help_desk_request_id'] = $help_desk_request_id;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return self
     */
    public function setMessage($message)
    {

        if ((mb_strlen($message) < 1)) {
            throw new \InvalidArgumentException('invalid length for $message when calling WTEmployeeSendHelpDeskResponse., must be bigger than or equal to 1.');
        }

        $this->container['message'] = $message;

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


