<?php
/**
 * Member
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 2.1.600
 * Contact: development@wallet.inc
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
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
 * Member Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Member implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Member';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'membership_tier_id' => 'string',
        'mobile_number' => 'string',
        'email' => 'string',
        'birthday' => 'string',
        'points_accrued' => 'int',
        'member_id' => 'string',
        'membership_tier_redeemable_id' => 'string'
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
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'first_name' => null,
        'last_name' => null,
        'membership_tier_id' => null,
        'mobile_number' => null,
        'email' => null,
        'birthday' => null,
        'points_accrued' => 'int32',
        'member_id' => null,
        'membership_tier_redeemable_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'merchant_id' => false,
        'created_at' => false,
        'updated_at' => false,
        'is_active' => false,
        'first_name' => false,
        'last_name' => false,
        'membership_tier_id' => false,
        'mobile_number' => false,
        'email' => false,
        'birthday' => false,
        'points_accrued' => false,
        'member_id' => false,
        'membership_tier_redeemable_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'membership_tier_id' => 'membershipTierID',
        'mobile_number' => 'mobileNumber',
        'email' => 'email',
        'birthday' => 'birthday',
        'points_accrued' => 'pointsAccrued',
        'member_id' => 'memberID',
        'membership_tier_redeemable_id' => 'membershipTierRedeemableID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'membership_tier_id' => 'setMembershipTierId',
        'mobile_number' => 'setMobileNumber',
        'email' => 'setEmail',
        'birthday' => 'setBirthday',
        'points_accrued' => 'setPointsAccrued',
        'member_id' => 'setMemberId',
        'membership_tier_redeemable_id' => 'setMembershipTierRedeemableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'membership_tier_id' => 'getMembershipTierId',
        'mobile_number' => 'getMobileNumber',
        'email' => 'getEmail',
        'birthday' => 'getBirthday',
        'points_accrued' => 'getPointsAccrued',
        'member_id' => 'getMemberId',
        'membership_tier_redeemable_id' => 'getMembershipTierRedeemableId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('membership_tier_id', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('birthday', $data ?? [], null);
        $this->setIfExists('points_accrued', $data ?? [], null);
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('membership_tier_redeemable_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ((mb_strlen($this->container['id']) > 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['id']) < 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 12.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['membership_tier_id'] === null) {
            $invalidProperties[] = "'membership_tier_id' can't be null";
        }
        if ((mb_strlen($this->container['membership_tier_id']) > 12)) {
            $invalidProperties[] = "invalid value for 'membership_tier_id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['membership_tier_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'membership_tier_id', the character length must be bigger than or equal to 12.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['membership_tier_id'])) {
            $invalidProperties[] = "invalid value for 'membership_tier_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['mobile_number'] === null) {
            $invalidProperties[] = "'mobile_number' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['birthday'] === null) {
            $invalidProperties[] = "'birthday' can't be null";
        }
        if ($this->container['points_accrued'] === null) {
            $invalidProperties[] = "'points_accrued' can't be null";
        }
        if (($this->container['points_accrued'] < 0)) {
            $invalidProperties[] = "invalid value for 'points_accrued', must be bigger than or equal to 0.";
        }

        if ($this->container['member_id'] === null) {
            $invalidProperties[] = "'member_id' can't be null";
        }
        if ((mb_strlen($this->container['member_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'member_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['member_id'])) {
            $invalidProperties[] = "invalid value for 'member_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['membership_tier_redeemable_id'] === null) {
            $invalidProperties[] = "'membership_tier_redeemable_id' can't be null";
        }
        if ((mb_strlen($this->container['membership_tier_redeemable_id']) > 12)) {
            $invalidProperties[] = "invalid value for 'membership_tier_redeemable_id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['membership_tier_redeemable_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'membership_tier_redeemable_id', the character length must be bigger than or equal to 12.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['membership_tier_redeemable_id'])) {
            $invalidProperties[] = "invalid value for 'membership_tier_redeemable_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if ((mb_strlen($id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Member., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Member., must be bigger than or equal to 12.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($id)))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling Member., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

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
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        if ((mb_strlen($merchant_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling Member., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling Member., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($merchant_id)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_id when calling Member., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

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
     * @param \DateTime $created_at The timestamp of when this resource was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
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
     * @param \DateTime $updated_at The timestamp of when this resource was updated
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Denotes if this resource is active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name An optional first name of the member
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name An optional last name of the member
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets membership_tier_id
     *
     * @return string
     */
    public function getMembershipTierId()
    {
        return $this->container['membership_tier_id'];
    }

    /**
     * Sets membership_tier_id
     *
     * @param string $membership_tier_id membership_tier_id
     *
     * @return self
     */
    public function setMembershipTierId($membership_tier_id)
    {
        if (is_null($membership_tier_id)) {
            throw new \InvalidArgumentException('non-nullable membership_tier_id cannot be null');
        }
        if ((mb_strlen($membership_tier_id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $membership_tier_id when calling Member., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($membership_tier_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $membership_tier_id when calling Member., must be bigger than or equal to 12.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($membership_tier_id)))) {
            throw new \InvalidArgumentException("invalid value for \$membership_tier_id when calling Member., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['membership_tier_id'] = $membership_tier_id;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string $mobile_number mobile_number
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }
        $this->container['mobile_number'] = $mobile_number;

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
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string $birthday Represents the date of birth of the member. Defaults to 0000-00-00, which represents that the date of birth has not been configured
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        if (is_null($birthday)) {
            throw new \InvalidArgumentException('non-nullable birthday cannot be null');
        }
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets points_accrued
     *
     * @return int
     */
    public function getPointsAccrued()
    {
        return $this->container['points_accrued'];
    }

    /**
     * Sets points_accrued
     *
     * @param int $points_accrued The number of points that the member has accrued
     *
     * @return self
     */
    public function setPointsAccrued($points_accrued)
    {
        if (is_null($points_accrued)) {
            throw new \InvalidArgumentException('non-nullable points_accrued cannot be null');
        }

        if (($points_accrued < 0)) {
            throw new \InvalidArgumentException('invalid value for $points_accrued when calling Member., must be bigger than or equal to 0.');
        }

        $this->container['points_accrued'] = $points_accrued;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id Member ID as represented by the merchant
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }

        if ((mb_strlen($member_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $member_id when calling Member., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($member_id)))) {
            throw new \InvalidArgumentException("invalid value for \$member_id when calling Member., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets membership_tier_redeemable_id
     *
     * @return string
     */
    public function getMembershipTierRedeemableId()
    {
        return $this->container['membership_tier_redeemable_id'];
    }

    /**
     * Sets membership_tier_redeemable_id
     *
     * @param string $membership_tier_redeemable_id membership_tier_redeemable_id
     *
     * @return self
     */
    public function setMembershipTierRedeemableId($membership_tier_redeemable_id)
    {
        if (is_null($membership_tier_redeemable_id)) {
            throw new \InvalidArgumentException('non-nullable membership_tier_redeemable_id cannot be null');
        }
        if ((mb_strlen($membership_tier_redeemable_id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $membership_tier_redeemable_id when calling Member., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($membership_tier_redeemable_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $membership_tier_redeemable_id when calling Member., must be bigger than or equal to 12.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($membership_tier_redeemable_id)))) {
            throw new \InvalidArgumentException("invalid value for \$membership_tier_redeemable_id when calling Member., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['membership_tier_redeemable_id'] = $membership_tier_redeemable_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


