<?php
/**
 * WTPromoCodeUpdateParams
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
 * WTPromoCodeUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTPromoCodeUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTPromoCodeUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'promo_code' => 'string',
        'display_value' => 'string',
        'order_number' => 'int',
        'media_url' => 'string',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime'
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
        'description' => null,
        'promo_code' => null,
        'display_value' => null,
        'order_number' => 'int32',
        'media_url' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time'
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
        'description' => 'description',
        'promo_code' => 'promoCode',
        'display_value' => 'displayValue',
        'order_number' => 'orderNumber',
        'media_url' => 'mediaURL',
        'start_date' => 'startDate',
        'expiration_date' => 'expirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'promo_code' => 'setPromoCode',
        'display_value' => 'setDisplayValue',
        'order_number' => 'setOrderNumber',
        'media_url' => 'setMediaUrl',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'promo_code' => 'getPromoCode',
        'display_value' => 'getDisplayValue',
        'order_number' => 'getOrderNumber',
        'media_url' => 'getMediaUrl',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['promo_code'] = $data['promo_code'] ?? null;
        $this->container['display_value'] = $data['display_value'] ?? null;
        $this->container['order_number'] = $data['order_number'] ?? null;
        $this->container['media_url'] = $data['media_url'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['promo_code'] === null) {
            $invalidProperties[] = "'promo_code' can't be null";
        }
        if ((mb_strlen($this->container['promo_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'promo_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['display_value'] === null) {
            $invalidProperties[] = "'display_value' can't be null";
        }
        if ((mb_strlen($this->container['display_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_value', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if (($this->container['order_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'order_number', must be bigger than or equal to 1.";
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $title when calling WTPromoCodeUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling WTPromoCodeUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return string
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param string $promo_code promo_code
     *
     * @return self
     */
    public function setPromoCode($promo_code)
    {

        if ((mb_strlen($promo_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $promo_code when calling WTPromoCodeUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets display_value
     *
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->container['display_value'];
    }

    /**
     * Sets display_value
     *
     * @param string $display_value display_value
     *
     * @return self
     */
    public function setDisplayValue($display_value)
    {

        if ((mb_strlen($display_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_value when calling WTPromoCodeUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['display_value'] = $display_value;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number order_number
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {

        if (($order_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $order_number when calling WTPromoCodeUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets media_url
     *
     * @return string|null
     */
    public function getMediaUrl()
    {
        return $this->container['media_url'];
    }

    /**
     * Sets media_url
     *
     * @param string|null $media_url media_url
     *
     * @return self
     */
    public function setMediaUrl($media_url)
    {
        $this->container['media_url'] = $media_url;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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


