<?php
/**
 * WTAuthenticationLoginResponse
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
 * WTAuthenticationLoginResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTAuthenticationLoginResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTAuthenticationLoginResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'first_name' => 'string',
        'last_name' => 'string',
        'username' => 'string',
        'email' => 'string',
        'merchant_id' => 'string',
        'employee_id' => 'string',
        'profile_picture_url' => 'string',
        'job_title' => 'string',
        'department' => 'string',
        'merchant_name' => 'string',
        'merchant_currency_abbreviation' => 'string',
        'merchant_industry' => 'string',
        'custom_domain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'first_name' => null,
        'last_name' => null,
        'username' => null,
        'email' => null,
        'merchant_id' => null,
        'employee_id' => null,
        'profile_picture_url' => null,
        'job_title' => null,
        'department' => null,
        'merchant_name' => null,
        'merchant_currency_abbreviation' => null,
        'merchant_industry' => null,
        'custom_domain' => null
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
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'username' => 'username',
        'email' => 'email',
        'merchant_id' => 'merchantID',
        'employee_id' => 'employeeID',
        'profile_picture_url' => 'profilePictureURL',
        'job_title' => 'jobTitle',
        'department' => 'department',
        'merchant_name' => 'merchantName',
        'merchant_currency_abbreviation' => 'merchantCurrencyAbbreviation',
        'merchant_industry' => 'merchantIndustry',
        'custom_domain' => 'customDomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'merchant_id' => 'setMerchantId',
        'employee_id' => 'setEmployeeId',
        'profile_picture_url' => 'setProfilePictureUrl',
        'job_title' => 'setJobTitle',
        'department' => 'setDepartment',
        'merchant_name' => 'setMerchantName',
        'merchant_currency_abbreviation' => 'setMerchantCurrencyAbbreviation',
        'merchant_industry' => 'setMerchantIndustry',
        'custom_domain' => 'setCustomDomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'merchant_id' => 'getMerchantId',
        'employee_id' => 'getEmployeeId',
        'profile_picture_url' => 'getProfilePictureUrl',
        'job_title' => 'getJobTitle',
        'department' => 'getDepartment',
        'merchant_name' => 'getMerchantName',
        'merchant_currency_abbreviation' => 'getMerchantCurrencyAbbreviation',
        'merchant_industry' => 'getMerchantIndustry',
        'custom_domain' => 'getCustomDomain'
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['profile_picture_url'] = $data['profile_picture_url'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['merchant_currency_abbreviation'] = $data['merchant_currency_abbreviation'] ?? null;
        $this->container['merchant_industry'] = $data['merchant_industry'] ?? null;
        $this->container['custom_domain'] = $data['custom_domain'] ?? null;
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ($this->container['profile_picture_url'] === null) {
            $invalidProperties[] = "'profile_picture_url' can't be null";
        }
        if ($this->container['job_title'] === null) {
            $invalidProperties[] = "'job_title' can't be null";
        }
        if ($this->container['department'] === null) {
            $invalidProperties[] = "'department' can't be null";
        }
        if ($this->container['merchant_name'] === null) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if ($this->container['merchant_industry'] === null) {
            $invalidProperties[] = "'merchant_industry' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id employee_id
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets profile_picture_url
     *
     * @return string
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     *
     * @param string $profile_picture_url profile_picture_url
     *
     * @return self
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title job_title
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets merchant_name
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string $merchant_name merchant_name
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets merchant_currency_abbreviation
     *
     * @return string|null
     */
    public function getMerchantCurrencyAbbreviation()
    {
        return $this->container['merchant_currency_abbreviation'];
    }

    /**
     * Sets merchant_currency_abbreviation
     *
     * @param string|null $merchant_currency_abbreviation merchant_currency_abbreviation
     *
     * @return self
     */
    public function setMerchantCurrencyAbbreviation($merchant_currency_abbreviation)
    {
        $this->container['merchant_currency_abbreviation'] = $merchant_currency_abbreviation;

        return $this;
    }

    /**
     * Gets merchant_industry
     *
     * @return string
     */
    public function getMerchantIndustry()
    {
        return $this->container['merchant_industry'];
    }

    /**
     * Sets merchant_industry
     *
     * @param string $merchant_industry merchant_industry
     *
     * @return self
     */
    public function setMerchantIndustry($merchant_industry)
    {
        $this->container['merchant_industry'] = $merchant_industry;

        return $this;
    }

    /**
     * Gets custom_domain
     *
     * @return string|null
     */
    public function getCustomDomain()
    {
        return $this->container['custom_domain'];
    }

    /**
     * Sets custom_domain
     *
     * @param string|null $custom_domain custom_domain
     *
     * @return self
     */
    public function setCustomDomain($custom_domain)
    {
        $this->container['custom_domain'] = $custom_domain;

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


