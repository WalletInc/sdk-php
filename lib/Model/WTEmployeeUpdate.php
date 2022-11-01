<?php
/**
 * WTEmployeeUpdate
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
 * The version of the OpenAPI document: 2.1.519
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
 * WTEmployeeUpdate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTEmployeeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTEmployeeUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'is_public_representative' => 'bool',
        'wallet_sequence_number' => 'int',
        'job_title' => 'string',
        'department' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => null,
        'first_name' => null,
        'last_name' => null,
        'phone_number' => null,
        'is_public_representative' => null,
        'wallet_sequence_number' => 'int32',
        'job_title' => null,
        'department' => null
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
        'employee_id' => 'employeeID',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'phone_number' => 'phoneNumber',
        'is_public_representative' => 'isPublicRepresentative',
        'wallet_sequence_number' => 'walletSequenceNumber',
        'job_title' => 'jobTitle',
        'department' => 'department'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phone_number' => 'setPhoneNumber',
        'is_public_representative' => 'setIsPublicRepresentative',
        'wallet_sequence_number' => 'setWalletSequenceNumber',
        'job_title' => 'setJobTitle',
        'department' => 'setDepartment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phone_number' => 'getPhoneNumber',
        'is_public_representative' => 'getIsPublicRepresentative',
        'wallet_sequence_number' => 'getWalletSequenceNumber',
        'job_title' => 'getJobTitle',
        'department' => 'getDepartment'
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
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['is_public_representative'] = $data['is_public_representative'] ?? null;
        $this->container['wallet_sequence_number'] = $data['wallet_sequence_number'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 0.";
        }

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

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['is_public_representative'] === null) {
            $invalidProperties[] = "'is_public_representative' can't be null";
        }
        if ($this->container['wallet_sequence_number'] === null) {
            $invalidProperties[] = "'wallet_sequence_number' can't be null";
        }
        if ($this->container['job_title'] === null) {
            $invalidProperties[] = "'job_title' can't be null";
        }
        if ((mb_strlen($this->container['job_title']) < 0)) {
            $invalidProperties[] = "invalid value for 'job_title', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['department'] === null) {
            $invalidProperties[] = "'department' can't be null";
        }
        if ((mb_strlen($this->container['department']) < 0)) {
            $invalidProperties[] = "invalid value for 'department', the character length must be bigger than or equal to 0.";
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

        if ((mb_strlen($employee_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTEmployeeUpdate., must be bigger than or equal to 0.');
        }

        $this->container['employee_id'] = $employee_id;

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

        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling WTEmployeeUpdate., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $last_name when calling WTEmployeeUpdate., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

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
     * Gets is_public_representative
     *
     * @return bool
     */
    public function getIsPublicRepresentative()
    {
        return $this->container['is_public_representative'];
    }

    /**
     * Sets is_public_representative
     *
     * @param bool $is_public_representative is_public_representative
     *
     * @return self
     */
    public function setIsPublicRepresentative($is_public_representative)
    {
        $this->container['is_public_representative'] = $is_public_representative;

        return $this;
    }

    /**
     * Gets wallet_sequence_number
     *
     * @return int
     */
    public function getWalletSequenceNumber()
    {
        return $this->container['wallet_sequence_number'];
    }

    /**
     * Sets wallet_sequence_number
     *
     * @param int $wallet_sequence_number wallet_sequence_number
     *
     * @return self
     */
    public function setWalletSequenceNumber($wallet_sequence_number)
    {
        $this->container['wallet_sequence_number'] = $wallet_sequence_number;

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

        if ((mb_strlen($job_title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $job_title when calling WTEmployeeUpdate., must be bigger than or equal to 0.');
        }

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

        if ((mb_strlen($department) < 0)) {
            throw new \InvalidArgumentException('invalid length for $department when calling WTEmployeeUpdate., must be bigger than or equal to 0.');
        }

        $this->container['department'] = $department;

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


