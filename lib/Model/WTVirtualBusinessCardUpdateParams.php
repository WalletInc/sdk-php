<?php
/**
 * WTVirtualBusinessCardUpdateParams
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
 * WTVirtualBusinessCardUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTVirtualBusinessCardUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTVirtualBusinessCardUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email_address' => 'string',
        'designation' => 'string',
        'phone_number' => 'string',
        'introduction' => 'string',
        'instagram' => 'string',
        'facebook' => 'string',
        'you_tube' => 'string',
        'twitter' => 'string',
        'linked_in' => 'string',
        'whats_app' => 'string',
        'avatar_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'email_address' => null,
        'designation' => null,
        'phone_number' => null,
        'introduction' => null,
        'instagram' => null,
        'facebook' => null,
        'you_tube' => null,
        'twitter' => null,
        'linked_in' => null,
        'whats_app' => null,
        'avatar_url' => null
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email_address' => 'emailAddress',
        'designation' => 'designation',
        'phone_number' => 'phoneNumber',
        'introduction' => 'introduction',
        'instagram' => 'instagram',
        'facebook' => 'facebook',
        'you_tube' => 'youTube',
        'twitter' => 'twitter',
        'linked_in' => 'linkedIn',
        'whats_app' => 'whatsApp',
        'avatar_url' => 'avatarURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email_address' => 'setEmailAddress',
        'designation' => 'setDesignation',
        'phone_number' => 'setPhoneNumber',
        'introduction' => 'setIntroduction',
        'instagram' => 'setInstagram',
        'facebook' => 'setFacebook',
        'you_tube' => 'setYouTube',
        'twitter' => 'setTwitter',
        'linked_in' => 'setLinkedIn',
        'whats_app' => 'setWhatsApp',
        'avatar_url' => 'setAvatarUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email_address' => 'getEmailAddress',
        'designation' => 'getDesignation',
        'phone_number' => 'getPhoneNumber',
        'introduction' => 'getIntroduction',
        'instagram' => 'getInstagram',
        'facebook' => 'getFacebook',
        'you_tube' => 'getYouTube',
        'twitter' => 'getTwitter',
        'linked_in' => 'getLinkedIn',
        'whats_app' => 'getWhatsApp',
        'avatar_url' => 'getAvatarUrl'
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
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['designation'] = $data['designation'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['introduction'] = $data['introduction'] ?? null;
        $this->container['instagram'] = $data['instagram'] ?? null;
        $this->container['facebook'] = $data['facebook'] ?? null;
        $this->container['you_tube'] = $data['you_tube'] ?? null;
        $this->container['twitter'] = $data['twitter'] ?? null;
        $this->container['linked_in'] = $data['linked_in'] ?? null;
        $this->container['whats_app'] = $data['whats_app'] ?? null;
        $this->container['avatar_url'] = $data['avatar_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if ((mb_strlen($this->container['email_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['designation'] === null) {
            $invalidProperties[] = "'designation' can't be null";
        }
        if ((mb_strlen($this->container['designation']) < 1)) {
            $invalidProperties[] = "invalid value for 'designation', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ((mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['introduction']) && (mb_strlen($this->container['introduction']) < 0)) {
            $invalidProperties[] = "invalid value for 'introduction', the character length must be bigger than or equal to 0.";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if ((mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {

        if ((mb_strlen($email_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->container['designation'];
    }

    /**
     * Sets designation
     *
     * @param string $designation designation
     *
     * @return self
     */
    public function setDesignation($designation)
    {

        if ((mb_strlen($designation) < 1)) {
            throw new \InvalidArgumentException('invalid length for $designation when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['designation'] = $designation;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {

        if ((mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets introduction
     *
     * @return string|null
     */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
     * Sets introduction
     *
     * @param string|null $introduction introduction
     *
     * @return self
     */
    public function setIntroduction($introduction)
    {

        if (!is_null($introduction) && (mb_strlen($introduction) < 0)) {
            throw new \InvalidArgumentException('invalid length for $introduction when calling WTVirtualBusinessCardUpdateParams., must be bigger than or equal to 0.');
        }

        $this->container['introduction'] = $introduction;

        return $this;
    }

    /**
     * Gets instagram
     *
     * @return string|null
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     *
     * @param string|null $instagram instagram
     *
     * @return self
     */
    public function setInstagram($instagram)
    {


        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets facebook
     *
     * @return string|null
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param string|null $facebook facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {


        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets you_tube
     *
     * @return string|null
     */
    public function getYouTube()
    {
        return $this->container['you_tube'];
    }

    /**
     * Sets you_tube
     *
     * @param string|null $you_tube you_tube
     *
     * @return self
     */
    public function setYouTube($you_tube)
    {


        $this->container['you_tube'] = $you_tube;

        return $this;
    }

    /**
     * Gets twitter
     *
     * @return string|null
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param string|null $twitter twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {


        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets linked_in
     *
     * @return string|null
     */
    public function getLinkedIn()
    {
        return $this->container['linked_in'];
    }

    /**
     * Sets linked_in
     *
     * @param string|null $linked_in linked_in
     *
     * @return self
     */
    public function setLinkedIn($linked_in)
    {


        $this->container['linked_in'] = $linked_in;

        return $this;
    }

    /**
     * Gets whats_app
     *
     * @return string|null
     */
    public function getWhatsApp()
    {
        return $this->container['whats_app'];
    }

    /**
     * Sets whats_app
     *
     * @param string|null $whats_app whats_app
     *
     * @return self
     */
    public function setWhatsApp($whats_app)
    {


        $this->container['whats_app'] = $whats_app;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url avatar_url
     *
     * @return self
     */
    public function setAvatarUrl($avatar_url)
    {


        $this->container['avatar_url'] = $avatar_url;

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


