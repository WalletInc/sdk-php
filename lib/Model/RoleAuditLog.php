<?php
/**
 * RoleAuditLog
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
 * The version of the OpenAPI document: 2.1.527
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
 * RoleAuditLog Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RoleAuditLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RoleAuditLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'role_name' => 'string',
        'action' => 'string',
        'merchant_id' => 'string',
        'action_by_employee_id' => 'string',
        'action_by_employee_name' => 'string',
        'action_on_employee_id' => 'string',
        'action_on_employee_name' => 'string',
        'display_name' => 'string',
        'is_system' => 'bool'
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
        'role_name' => null,
        'action' => null,
        'merchant_id' => null,
        'action_by_employee_id' => null,
        'action_by_employee_name' => null,
        'action_on_employee_id' => null,
        'action_on_employee_name' => null,
        'display_name' => null,
        'is_system' => null
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
        'role_name' => 'roleName',
        'action' => 'action',
        'merchant_id' => 'merchantID',
        'action_by_employee_id' => 'actionByEmployeeID',
        'action_by_employee_name' => 'actionByEmployeeName',
        'action_on_employee_id' => 'actionOnEmployeeID',
        'action_on_employee_name' => 'actionOnEmployeeName',
        'display_name' => 'displayName',
        'is_system' => 'isSystem'
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
        'role_name' => 'setRoleName',
        'action' => 'setAction',
        'merchant_id' => 'setMerchantId',
        'action_by_employee_id' => 'setActionByEmployeeId',
        'action_by_employee_name' => 'setActionByEmployeeName',
        'action_on_employee_id' => 'setActionOnEmployeeId',
        'action_on_employee_name' => 'setActionOnEmployeeName',
        'display_name' => 'setDisplayName',
        'is_system' => 'setIsSystem'
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
        'role_name' => 'getRoleName',
        'action' => 'getAction',
        'merchant_id' => 'getMerchantId',
        'action_by_employee_id' => 'getActionByEmployeeId',
        'action_by_employee_name' => 'getActionByEmployeeName',
        'action_on_employee_id' => 'getActionOnEmployeeId',
        'action_on_employee_name' => 'getActionOnEmployeeName',
        'display_name' => 'getDisplayName',
        'is_system' => 'getIsSystem'
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
        $this->container['role_name'] = $data['role_name'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['action_by_employee_id'] = $data['action_by_employee_id'] ?? null;
        $this->container['action_by_employee_name'] = $data['action_by_employee_name'] ?? null;
        $this->container['action_on_employee_id'] = $data['action_on_employee_id'] ?? null;
        $this->container['action_on_employee_name'] = $data['action_on_employee_name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['is_system'] = $data['is_system'] ?? null;
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
        if ((mb_strlen($this->container['id']) > 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['role_name'] === null) {
            $invalidProperties[] = "'role_name' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ((mb_strlen($this->container['merchant_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['merchant_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['merchant_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['action_by_employee_id'] === null) {
            $invalidProperties[] = "'action_by_employee_id' can't be null";
        }
        if ((mb_strlen($this->container['action_by_employee_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'action_by_employee_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['action_by_employee_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'action_by_employee_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['action_by_employee_id'])) {
            $invalidProperties[] = "invalid value for 'action_by_employee_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['action_by_employee_name'] === null) {
            $invalidProperties[] = "'action_by_employee_name' can't be null";
        }
        if ($this->container['action_on_employee_id'] === null) {
            $invalidProperties[] = "'action_on_employee_id' can't be null";
        }
        if ((mb_strlen($this->container['action_on_employee_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'action_on_employee_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['action_on_employee_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'action_on_employee_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['action_on_employee_id'])) {
            $invalidProperties[] = "invalid value for 'action_on_employee_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['action_on_employee_name'] === null) {
            $invalidProperties[] = "'action_on_employee_name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['is_system'] === null) {
            $invalidProperties[] = "'is_system' can't be null";
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
        if ((mb_strlen($id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling RoleAuditLog., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling RoleAuditLog., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling RoleAuditLog., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

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
     * Gets role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string $role_name role_name
     *
     * @return self
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

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
        if ((mb_strlen($merchant_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling RoleAuditLog., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling RoleAuditLog., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling RoleAuditLog., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets action_by_employee_id
     *
     * @return string
     */
    public function getActionByEmployeeId()
    {
        return $this->container['action_by_employee_id'];
    }

    /**
     * Sets action_by_employee_id
     *
     * @param string $action_by_employee_id action_by_employee_id
     *
     * @return self
     */
    public function setActionByEmployeeId($action_by_employee_id)
    {
        if ((mb_strlen($action_by_employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $action_by_employee_id when calling RoleAuditLog., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($action_by_employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $action_by_employee_id when calling RoleAuditLog., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $action_by_employee_id))) {
            throw new \InvalidArgumentException("invalid value for $action_by_employee_id when calling RoleAuditLog., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['action_by_employee_id'] = $action_by_employee_id;

        return $this;
    }

    /**
     * Gets action_by_employee_name
     *
     * @return string
     */
    public function getActionByEmployeeName()
    {
        return $this->container['action_by_employee_name'];
    }

    /**
     * Sets action_by_employee_name
     *
     * @param string $action_by_employee_name action_by_employee_name
     *
     * @return self
     */
    public function setActionByEmployeeName($action_by_employee_name)
    {
        $this->container['action_by_employee_name'] = $action_by_employee_name;

        return $this;
    }

    /**
     * Gets action_on_employee_id
     *
     * @return string
     */
    public function getActionOnEmployeeId()
    {
        return $this->container['action_on_employee_id'];
    }

    /**
     * Sets action_on_employee_id
     *
     * @param string $action_on_employee_id action_on_employee_id
     *
     * @return self
     */
    public function setActionOnEmployeeId($action_on_employee_id)
    {
        if ((mb_strlen($action_on_employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $action_on_employee_id when calling RoleAuditLog., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($action_on_employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $action_on_employee_id when calling RoleAuditLog., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $action_on_employee_id))) {
            throw new \InvalidArgumentException("invalid value for $action_on_employee_id when calling RoleAuditLog., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['action_on_employee_id'] = $action_on_employee_id;

        return $this;
    }

    /**
     * Gets action_on_employee_name
     *
     * @return string
     */
    public function getActionOnEmployeeName()
    {
        return $this->container['action_on_employee_name'];
    }

    /**
     * Sets action_on_employee_name
     *
     * @param string $action_on_employee_name action_on_employee_name
     *
     * @return self
     */
    public function setActionOnEmployeeName($action_on_employee_name)
    {
        $this->container['action_on_employee_name'] = $action_on_employee_name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool $is_system is_system
     *
     * @return self
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

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


