<?php
/**
 * WTAuthenticationRegister
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
 * The version of the OpenAPI document: 2.1.522
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
 * WTAuthenticationRegister Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTAuthenticationRegister implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTAuthenticationRegister';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'hear_about_us' => 'string',
        'hear_about_us_details' => 'string',
        'company_name' => 'string',
        'merchant_type' => 'string',
        'street_address1' => 'string',
        'street_address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone_number' => 'string',
        'ein' => 'string'
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
        'email' => null,
        'password' => null,
        'hear_about_us' => null,
        'hear_about_us_details' => null,
        'company_name' => null,
        'merchant_type' => null,
        'street_address1' => null,
        'street_address2' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'country' => null,
        'phone_number' => null,
        'ein' => null
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
        'email' => 'email',
        'password' => 'password',
        'hear_about_us' => 'hearAboutUs',
        'hear_about_us_details' => 'hearAboutUsDetails',
        'company_name' => 'companyName',
        'merchant_type' => 'merchantType',
        'street_address1' => 'streetAddress1',
        'street_address2' => 'streetAddress2',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone_number' => 'phoneNumber',
        'ein' => 'ein'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'hear_about_us' => 'setHearAboutUs',
        'hear_about_us_details' => 'setHearAboutUsDetails',
        'company_name' => 'setCompanyName',
        'merchant_type' => 'setMerchantType',
        'street_address1' => 'setStreetAddress1',
        'street_address2' => 'setStreetAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone_number' => 'setPhoneNumber',
        'ein' => 'setEin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'hear_about_us' => 'getHearAboutUs',
        'hear_about_us_details' => 'getHearAboutUsDetails',
        'company_name' => 'getCompanyName',
        'merchant_type' => 'getMerchantType',
        'street_address1' => 'getStreetAddress1',
        'street_address2' => 'getStreetAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone_number' => 'getPhoneNumber',
        'ein' => 'getEin'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['hear_about_us'] = $data['hear_about_us'] ?? null;
        $this->container['hear_about_us_details'] = $data['hear_about_us_details'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['merchant_type'] = $data['merchant_type'] ?? null;
        $this->container['street_address1'] = $data['street_address1'] ?? null;
        $this->container['street_address2'] = $data['street_address2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['ein'] = $data['ein'] ?? null;
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
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['hear_about_us'] === null) {
            $invalidProperties[] = "'hear_about_us' can't be null";
        }
        if ($this->container['hear_about_us_details'] === null) {
            $invalidProperties[] = "'hear_about_us_details' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['merchant_type'] === null) {
            $invalidProperties[] = "'merchant_type' can't be null";
        }
        if ($this->container['street_address1'] === null) {
            $invalidProperties[] = "'street_address1' can't be null";
        }
        if ($this->container['street_address2'] === null) {
            $invalidProperties[] = "'street_address2' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
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
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets hear_about_us
     *
     * @return string
     */
    public function getHearAboutUs()
    {
        return $this->container['hear_about_us'];
    }

    /**
     * Sets hear_about_us
     *
     * @param string $hear_about_us hear_about_us
     *
     * @return self
     */
    public function setHearAboutUs($hear_about_us)
    {
        $this->container['hear_about_us'] = $hear_about_us;

        return $this;
    }

    /**
     * Gets hear_about_us_details
     *
     * @return string
     */
    public function getHearAboutUsDetails()
    {
        return $this->container['hear_about_us_details'];
    }

    /**
     * Sets hear_about_us_details
     *
     * @param string $hear_about_us_details hear_about_us_details
     *
     * @return self
     */
    public function setHearAboutUsDetails($hear_about_us_details)
    {
        $this->container['hear_about_us_details'] = $hear_about_us_details;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets merchant_type
     *
     * @return string
     */
    public function getMerchantType()
    {
        return $this->container['merchant_type'];
    }

    /**
     * Sets merchant_type
     *
     * @param string $merchant_type merchant_type
     *
     * @return self
     */
    public function setMerchantType($merchant_type)
    {
        $this->container['merchant_type'] = $merchant_type;

        return $this;
    }

    /**
     * Gets street_address1
     *
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->container['street_address1'];
    }

    /**
     * Sets street_address1
     *
     * @param string $street_address1 street_address1
     *
     * @return self
     */
    public function setStreetAddress1($street_address1)
    {
        $this->container['street_address1'] = $street_address1;

        return $this;
    }

    /**
     * Gets street_address2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->container['street_address2'];
    }

    /**
     * Sets street_address2
     *
     * @param string $street_address2 street_address2
     *
     * @return self
     */
    public function setStreetAddress2($street_address2)
    {
        $this->container['street_address2'] = $street_address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets ein
     *
     * @return string|null
     */
    public function getEin()
    {
        return $this->container['ein'];
    }

    /**
     * Sets ein
     *
     * @param string|null $ein ein
     *
     * @return self
     */
    public function setEin($ein)
    {
        $this->container['ein'] = $ein;

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


