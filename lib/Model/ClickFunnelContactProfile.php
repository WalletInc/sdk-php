<?php
/**
 * ClickFunnelContactProfile
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
 * The version of the OpenAPI document: 2.1.515
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
 * ClickFunnelContactProfile Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClickFunnelContactProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClickFunnelContactProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'double',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'country' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'unsubscribed_at' => 'mixed',
        'cf_uvid' => 'string',
        'shipping_address' => 'string',
        'shipping_country' => 'mixed',
        'shipping_city' => 'mixed',
        'shipping_state' => 'mixed',
        'shipping_zip' => 'mixed',
        'vat_number' => 'mixed',
        'middle_name' => 'mixed',
        'websites' => 'mixed',
        'location_general' => 'mixed',
        'normalized_location' => 'mixed',
        'deduced_location' => 'mixed',
        'age' => 'mixed',
        'gender' => 'mixed',
        'age_range_lower' => 'mixed',
        'age_range_upper' => 'mixed',
        'action_score' => 'mixed',
        'known_ltv' => 'string',
        'tags' => 'mixed[]',
        'time_zone' => 'string',
        'lists_names' => 'string',
        'globally_unsubscribed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'double',
        'first_name' => null,
        'last_name' => null,
        'address' => null,
        'city' => null,
        'country' => null,
        'state' => null,
        'zip' => null,
        'email' => null,
        'phone' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'unsubscribed_at' => null,
        'cf_uvid' => null,
        'shipping_address' => null,
        'shipping_country' => null,
        'shipping_city' => null,
        'shipping_state' => null,
        'shipping_zip' => null,
        'vat_number' => null,
        'middle_name' => null,
        'websites' => null,
        'location_general' => null,
        'normalized_location' => null,
        'deduced_location' => null,
        'age' => null,
        'gender' => null,
        'age_range_lower' => null,
        'age_range_upper' => null,
        'action_score' => null,
        'known_ltv' => null,
        'tags' => null,
        'time_zone' => null,
        'lists_names' => null,
        'globally_unsubscribed' => null
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
        'id' => 'id',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'address' => 'address',
        'city' => 'city',
        'country' => 'country',
        'state' => 'state',
        'zip' => 'zip',
        'email' => 'email',
        'phone' => 'phone',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'unsubscribed_at' => 'unsubscribed_at',
        'cf_uvid' => 'cf_uvid',
        'shipping_address' => 'shipping_address',
        'shipping_country' => 'shipping_country',
        'shipping_city' => 'shipping_city',
        'shipping_state' => 'shipping_state',
        'shipping_zip' => 'shipping_zip',
        'vat_number' => 'vat_number',
        'middle_name' => 'middle_name',
        'websites' => 'websites',
        'location_general' => 'location_general',
        'normalized_location' => 'normalized_location',
        'deduced_location' => 'deduced_location',
        'age' => 'age',
        'gender' => 'gender',
        'age_range_lower' => 'age_range_lower',
        'age_range_upper' => 'age_range_upper',
        'action_score' => 'action_score',
        'known_ltv' => 'known_ltv',
        'tags' => 'tags',
        'time_zone' => 'time_zone',
        'lists_names' => 'lists_names',
        'globally_unsubscribed' => 'globally_unsubscribed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'address' => 'setAddress',
        'city' => 'setCity',
        'country' => 'setCountry',
        'state' => 'setState',
        'zip' => 'setZip',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'unsubscribed_at' => 'setUnsubscribedAt',
        'cf_uvid' => 'setCfUvid',
        'shipping_address' => 'setShippingAddress',
        'shipping_country' => 'setShippingCountry',
        'shipping_city' => 'setShippingCity',
        'shipping_state' => 'setShippingState',
        'shipping_zip' => 'setShippingZip',
        'vat_number' => 'setVatNumber',
        'middle_name' => 'setMiddleName',
        'websites' => 'setWebsites',
        'location_general' => 'setLocationGeneral',
        'normalized_location' => 'setNormalizedLocation',
        'deduced_location' => 'setDeducedLocation',
        'age' => 'setAge',
        'gender' => 'setGender',
        'age_range_lower' => 'setAgeRangeLower',
        'age_range_upper' => 'setAgeRangeUpper',
        'action_score' => 'setActionScore',
        'known_ltv' => 'setKnownLtv',
        'tags' => 'setTags',
        'time_zone' => 'setTimeZone',
        'lists_names' => 'setListsNames',
        'globally_unsubscribed' => 'setGloballyUnsubscribed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'address' => 'getAddress',
        'city' => 'getCity',
        'country' => 'getCountry',
        'state' => 'getState',
        'zip' => 'getZip',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'unsubscribed_at' => 'getUnsubscribedAt',
        'cf_uvid' => 'getCfUvid',
        'shipping_address' => 'getShippingAddress',
        'shipping_country' => 'getShippingCountry',
        'shipping_city' => 'getShippingCity',
        'shipping_state' => 'getShippingState',
        'shipping_zip' => 'getShippingZip',
        'vat_number' => 'getVatNumber',
        'middle_name' => 'getMiddleName',
        'websites' => 'getWebsites',
        'location_general' => 'getLocationGeneral',
        'normalized_location' => 'getNormalizedLocation',
        'deduced_location' => 'getDeducedLocation',
        'age' => 'getAge',
        'gender' => 'getGender',
        'age_range_lower' => 'getAgeRangeLower',
        'age_range_upper' => 'getAgeRangeUpper',
        'action_score' => 'getActionScore',
        'known_ltv' => 'getKnownLtv',
        'tags' => 'getTags',
        'time_zone' => 'getTimeZone',
        'lists_names' => 'getListsNames',
        'globally_unsubscribed' => 'getGloballyUnsubscribed'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['unsubscribed_at'] = $data['unsubscribed_at'] ?? null;
        $this->container['cf_uvid'] = $data['cf_uvid'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['shipping_country'] = $data['shipping_country'] ?? null;
        $this->container['shipping_city'] = $data['shipping_city'] ?? null;
        $this->container['shipping_state'] = $data['shipping_state'] ?? null;
        $this->container['shipping_zip'] = $data['shipping_zip'] ?? null;
        $this->container['vat_number'] = $data['vat_number'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['location_general'] = $data['location_general'] ?? null;
        $this->container['normalized_location'] = $data['normalized_location'] ?? null;
        $this->container['deduced_location'] = $data['deduced_location'] ?? null;
        $this->container['age'] = $data['age'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['age_range_lower'] = $data['age_range_lower'] ?? null;
        $this->container['age_range_upper'] = $data['age_range_upper'] ?? null;
        $this->container['action_score'] = $data['action_score'] ?? null;
        $this->container['known_ltv'] = $data['known_ltv'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
        $this->container['lists_names'] = $data['lists_names'] ?? null;
        $this->container['globally_unsubscribed'] = $data['globally_unsubscribed'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['cf_uvid'] === null) {
            $invalidProperties[] = "'cf_uvid' can't be null";
        }
        if ($this->container['known_ltv'] === null) {
            $invalidProperties[] = "'known_ltv' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['globally_unsubscribed'] === null) {
            $invalidProperties[] = "'globally_unsubscribed' can't be null";
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
     * Gets id
     *
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param double $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
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
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets unsubscribed_at
     *
     * @return mixed|null
     */
    public function getUnsubscribedAt()
    {
        return $this->container['unsubscribed_at'];
    }

    /**
     * Sets unsubscribed_at
     *
     * @param mixed|null $unsubscribed_at unsubscribed_at
     *
     * @return self
     */
    public function setUnsubscribedAt($unsubscribed_at)
    {
        $this->container['unsubscribed_at'] = $unsubscribed_at;

        return $this;
    }

    /**
     * Gets cf_uvid
     *
     * @return string
     */
    public function getCfUvid()
    {
        return $this->container['cf_uvid'];
    }

    /**
     * Sets cf_uvid
     *
     * @param string $cf_uvid cf_uvid
     *
     * @return self
     */
    public function setCfUvid($cf_uvid)
    {
        $this->container['cf_uvid'] = $cf_uvid;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return string|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param string|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets shipping_country
     *
     * @return mixed|null
     */
    public function getShippingCountry()
    {
        return $this->container['shipping_country'];
    }

    /**
     * Sets shipping_country
     *
     * @param mixed|null $shipping_country shipping_country
     *
     * @return self
     */
    public function setShippingCountry($shipping_country)
    {
        $this->container['shipping_country'] = $shipping_country;

        return $this;
    }

    /**
     * Gets shipping_city
     *
     * @return mixed|null
     */
    public function getShippingCity()
    {
        return $this->container['shipping_city'];
    }

    /**
     * Sets shipping_city
     *
     * @param mixed|null $shipping_city shipping_city
     *
     * @return self
     */
    public function setShippingCity($shipping_city)
    {
        $this->container['shipping_city'] = $shipping_city;

        return $this;
    }

    /**
     * Gets shipping_state
     *
     * @return mixed|null
     */
    public function getShippingState()
    {
        return $this->container['shipping_state'];
    }

    /**
     * Sets shipping_state
     *
     * @param mixed|null $shipping_state shipping_state
     *
     * @return self
     */
    public function setShippingState($shipping_state)
    {
        $this->container['shipping_state'] = $shipping_state;

        return $this;
    }

    /**
     * Gets shipping_zip
     *
     * @return mixed|null
     */
    public function getShippingZip()
    {
        return $this->container['shipping_zip'];
    }

    /**
     * Sets shipping_zip
     *
     * @param mixed|null $shipping_zip shipping_zip
     *
     * @return self
     */
    public function setShippingZip($shipping_zip)
    {
        $this->container['shipping_zip'] = $shipping_zip;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return mixed|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param mixed|null $vat_number vat_number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return mixed|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param mixed|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets websites
     *
     * @return mixed|null
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param mixed|null $websites websites
     *
     * @return self
     */
    public function setWebsites($websites)
    {
        $this->container['websites'] = $websites;

        return $this;
    }

    /**
     * Gets location_general
     *
     * @return mixed|null
     */
    public function getLocationGeneral()
    {
        return $this->container['location_general'];
    }

    /**
     * Sets location_general
     *
     * @param mixed|null $location_general location_general
     *
     * @return self
     */
    public function setLocationGeneral($location_general)
    {
        $this->container['location_general'] = $location_general;

        return $this;
    }

    /**
     * Gets normalized_location
     *
     * @return mixed|null
     */
    public function getNormalizedLocation()
    {
        return $this->container['normalized_location'];
    }

    /**
     * Sets normalized_location
     *
     * @param mixed|null $normalized_location normalized_location
     *
     * @return self
     */
    public function setNormalizedLocation($normalized_location)
    {
        $this->container['normalized_location'] = $normalized_location;

        return $this;
    }

    /**
     * Gets deduced_location
     *
     * @return mixed|null
     */
    public function getDeducedLocation()
    {
        return $this->container['deduced_location'];
    }

    /**
     * Sets deduced_location
     *
     * @param mixed|null $deduced_location deduced_location
     *
     * @return self
     */
    public function setDeducedLocation($deduced_location)
    {
        $this->container['deduced_location'] = $deduced_location;

        return $this;
    }

    /**
     * Gets age
     *
     * @return mixed|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param mixed|null $age age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return mixed|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param mixed|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets age_range_lower
     *
     * @return mixed|null
     */
    public function getAgeRangeLower()
    {
        return $this->container['age_range_lower'];
    }

    /**
     * Sets age_range_lower
     *
     * @param mixed|null $age_range_lower age_range_lower
     *
     * @return self
     */
    public function setAgeRangeLower($age_range_lower)
    {
        $this->container['age_range_lower'] = $age_range_lower;

        return $this;
    }

    /**
     * Gets age_range_upper
     *
     * @return mixed|null
     */
    public function getAgeRangeUpper()
    {
        return $this->container['age_range_upper'];
    }

    /**
     * Sets age_range_upper
     *
     * @param mixed|null $age_range_upper age_range_upper
     *
     * @return self
     */
    public function setAgeRangeUpper($age_range_upper)
    {
        $this->container['age_range_upper'] = $age_range_upper;

        return $this;
    }

    /**
     * Gets action_score
     *
     * @return mixed|null
     */
    public function getActionScore()
    {
        return $this->container['action_score'];
    }

    /**
     * Sets action_score
     *
     * @param mixed|null $action_score action_score
     *
     * @return self
     */
    public function setActionScore($action_score)
    {
        $this->container['action_score'] = $action_score;

        return $this;
    }

    /**
     * Gets known_ltv
     *
     * @return string
     */
    public function getKnownLtv()
    {
        return $this->container['known_ltv'];
    }

    /**
     * Sets known_ltv
     *
     * @param string $known_ltv known_ltv
     *
     * @return self
     */
    public function setKnownLtv($known_ltv)
    {
        $this->container['known_ltv'] = $known_ltv;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return mixed[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param mixed[] $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone time_zone
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets lists_names
     *
     * @return string|null
     */
    public function getListsNames()
    {
        return $this->container['lists_names'];
    }

    /**
     * Sets lists_names
     *
     * @param string|null $lists_names lists_names
     *
     * @return self
     */
    public function setListsNames($lists_names)
    {
        $this->container['lists_names'] = $lists_names;

        return $this;
    }

    /**
     * Gets globally_unsubscribed
     *
     * @return bool
     */
    public function getGloballyUnsubscribed()
    {
        return $this->container['globally_unsubscribed'];
    }

    /**
     * Sets globally_unsubscribed
     *
     * @param bool $globally_unsubscribed globally_unsubscribed
     *
     * @return self
     */
    public function setGloballyUnsubscribed($globally_unsubscribed)
    {
        $this->container['globally_unsubscribed'] = $globally_unsubscribed;

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


