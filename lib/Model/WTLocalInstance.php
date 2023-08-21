<?php
/**
 * WTLocalInstance
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
 * WTLocalInstance Class Doc Comment
 *
 * @category Class
 * @description tsoaModel
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTLocalInstance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTLocalInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capabilities' => '\OpenAPI\Client\Model\PhoneNumberCapabilities',
        'beta' => 'bool',
        'address_requirements' => 'string',
        'iso_country' => 'string',
        'postal_code' => 'string',
        'region' => 'string',
        'longitude' => 'double',
        'latitude' => 'double',
        'rate_center' => 'string',
        'locality' => 'string',
        'lata' => 'string',
        'phone_number' => 'string',
        'friendly_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capabilities' => null,
        'beta' => null,
        'address_requirements' => null,
        'iso_country' => null,
        'postal_code' => null,
        'region' => null,
        'longitude' => 'double',
        'latitude' => 'double',
        'rate_center' => null,
        'locality' => null,
        'lata' => null,
        'phone_number' => null,
        'friendly_name' => null
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
        'capabilities' => 'capabilities',
        'beta' => 'beta',
        'address_requirements' => 'addressRequirements',
        'iso_country' => 'isoCountry',
        'postal_code' => 'postalCode',
        'region' => 'region',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
        'rate_center' => 'rateCenter',
        'locality' => 'locality',
        'lata' => 'lata',
        'phone_number' => 'phoneNumber',
        'friendly_name' => 'friendlyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capabilities' => 'setCapabilities',
        'beta' => 'setBeta',
        'address_requirements' => 'setAddressRequirements',
        'iso_country' => 'setIsoCountry',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion',
        'longitude' => 'setLongitude',
        'latitude' => 'setLatitude',
        'rate_center' => 'setRateCenter',
        'locality' => 'setLocality',
        'lata' => 'setLata',
        'phone_number' => 'setPhoneNumber',
        'friendly_name' => 'setFriendlyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capabilities' => 'getCapabilities',
        'beta' => 'getBeta',
        'address_requirements' => 'getAddressRequirements',
        'iso_country' => 'getIsoCountry',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion',
        'longitude' => 'getLongitude',
        'latitude' => 'getLatitude',
        'rate_center' => 'getRateCenter',
        'locality' => 'getLocality',
        'lata' => 'getLata',
        'phone_number' => 'getPhoneNumber',
        'friendly_name' => 'getFriendlyName'
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
        $this->container['capabilities'] = $data['capabilities'] ?? null;
        $this->container['beta'] = $data['beta'] ?? null;
        $this->container['address_requirements'] = $data['address_requirements'] ?? null;
        $this->container['iso_country'] = $data['iso_country'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['rate_center'] = $data['rate_center'] ?? null;
        $this->container['locality'] = $data['locality'] ?? null;
        $this->container['lata'] = $data['lata'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['friendly_name'] = $data['friendly_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['capabilities'] === null) {
            $invalidProperties[] = "'capabilities' can't be null";
        }
        if ($this->container['beta'] === null) {
            $invalidProperties[] = "'beta' can't be null";
        }
        if ($this->container['address_requirements'] === null) {
            $invalidProperties[] = "'address_requirements' can't be null";
        }
        if ($this->container['iso_country'] === null) {
            $invalidProperties[] = "'iso_country' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['rate_center'] === null) {
            $invalidProperties[] = "'rate_center' can't be null";
        }
        if ($this->container['locality'] === null) {
            $invalidProperties[] = "'locality' can't be null";
        }
        if ($this->container['lata'] === null) {
            $invalidProperties[] = "'lata' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['friendly_name'] === null) {
            $invalidProperties[] = "'friendly_name' can't be null";
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
     * Gets capabilities
     *
     * @return \OpenAPI\Client\Model\PhoneNumberCapabilities
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \OpenAPI\Client\Model\PhoneNumberCapabilities $capabilities capabilities
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets beta
     *
     * @return bool
     */
    public function getBeta()
    {
        return $this->container['beta'];
    }

    /**
     * Sets beta
     *
     * @param bool $beta beta
     *
     * @return self
     */
    public function setBeta($beta)
    {
        $this->container['beta'] = $beta;

        return $this;
    }

    /**
     * Gets address_requirements
     *
     * @return string
     */
    public function getAddressRequirements()
    {
        return $this->container['address_requirements'];
    }

    /**
     * Sets address_requirements
     *
     * @param string $address_requirements address_requirements
     *
     * @return self
     */
    public function setAddressRequirements($address_requirements)
    {
        $this->container['address_requirements'] = $address_requirements;

        return $this;
    }

    /**
     * Gets iso_country
     *
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     *
     * @param string $iso_country iso_country
     *
     * @return self
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets rate_center
     *
     * @return string
     */
    public function getRateCenter()
    {
        return $this->container['rate_center'];
    }

    /**
     * Sets rate_center
     *
     * @param string $rate_center rate_center
     *
     * @return self
     */
    public function setRateCenter($rate_center)
    {
        $this->container['rate_center'] = $rate_center;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets lata
     *
     * @return string
     */
    public function getLata()
    {
        return $this->container['lata'];
    }

    /**
     * Sets lata
     *
     * @param string $lata lata
     *
     * @return self
     */
    public function setLata($lata)
    {
        $this->container['lata'] = $lata;

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
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets friendly_name
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param string $friendly_name friendly_name
     *
     * @return self
     */
    public function setFriendlyName($friendly_name)
    {
        $this->container['friendly_name'] = $friendly_name;

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

