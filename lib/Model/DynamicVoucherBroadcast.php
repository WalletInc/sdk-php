<?php
/**
 * DynamicVoucherBroadcast
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
 * DynamicVoucherBroadcast Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DynamicVoucherBroadcast implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DynamicVoucherBroadcast';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_number_id' => 'string',
        'payment_object_prefix' => '\OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDPaymentObjectPrefix',
        'payment_object_id' => 'string',
        'message_template' => 'string',
        'media_urls' => 'string[]',
        'employee_id' => 'string',
        'broadcast_scheduled_at' => '\DateTime',
        'id' => '\OpenAPI\Client\Model\WTWalletPageViewId',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'broadcast_status' => '\OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDBroadcastStatus',
        'broadcast_queued_at' => '\DateTime',
        'broadcast_started_at' => '\DateTime',
        'broadcast_completed_at' => '\DateTime',
        'list_type' => '\OpenAPI\Client\Model\DynamicVoucherBroadcastListType',
        'list_id' => 'string',
        'opt_in_list' => '\OpenAPI\Client\Model\WTOptInList',
        'imported_list' => '\OpenAPI\Client\Model\WTImportedList',
        'dynamic_voucher' => '\OpenAPI\Client\Model\DynamicVoucher'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_number_id' => null,
        'payment_object_prefix' => null,
        'payment_object_id' => null,
        'message_template' => null,
        'media_urls' => null,
        'employee_id' => null,
        'broadcast_scheduled_at' => 'date-time',
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'broadcast_status' => null,
        'broadcast_queued_at' => 'date-time',
        'broadcast_started_at' => 'date-time',
        'broadcast_completed_at' => 'date-time',
        'list_type' => null,
        'list_id' => null,
        'opt_in_list' => null,
        'imported_list' => null,
        'dynamic_voucher' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone_number_id' => false,
        'payment_object_prefix' => false,
        'payment_object_id' => false,
        'message_template' => false,
        'media_urls' => false,
        'employee_id' => false,
        'broadcast_scheduled_at' => false,
        'id' => false,
        'merchant_id' => false,
        'created_at' => false,
        'updated_at' => false,
        'is_active' => false,
        'broadcast_status' => false,
        'broadcast_queued_at' => true,
        'broadcast_started_at' => true,
        'broadcast_completed_at' => true,
        'list_type' => false,
        'list_id' => false,
        'opt_in_list' => false,
        'imported_list' => false,
        'dynamic_voucher' => false
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
        'phone_number_id' => 'phoneNumberID',
        'payment_object_prefix' => 'paymentObjectPrefix',
        'payment_object_id' => 'paymentObjectID',
        'message_template' => 'messageTemplate',
        'media_urls' => 'mediaURLs',
        'employee_id' => 'employeeID',
        'broadcast_scheduled_at' => 'broadcastScheduledAt',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'broadcast_status' => 'broadcastStatus',
        'broadcast_queued_at' => 'broadcastQueuedAt',
        'broadcast_started_at' => 'broadcastStartedAt',
        'broadcast_completed_at' => 'broadcastCompletedAt',
        'list_type' => 'listType',
        'list_id' => 'listID',
        'opt_in_list' => 'OptInList',
        'imported_list' => 'ImportedList',
        'dynamic_voucher' => 'DynamicVoucher'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number_id' => 'setPhoneNumberId',
        'payment_object_prefix' => 'setPaymentObjectPrefix',
        'payment_object_id' => 'setPaymentObjectId',
        'message_template' => 'setMessageTemplate',
        'media_urls' => 'setMediaUrls',
        'employee_id' => 'setEmployeeId',
        'broadcast_scheduled_at' => 'setBroadcastScheduledAt',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'broadcast_status' => 'setBroadcastStatus',
        'broadcast_queued_at' => 'setBroadcastQueuedAt',
        'broadcast_started_at' => 'setBroadcastStartedAt',
        'broadcast_completed_at' => 'setBroadcastCompletedAt',
        'list_type' => 'setListType',
        'list_id' => 'setListId',
        'opt_in_list' => 'setOptInList',
        'imported_list' => 'setImportedList',
        'dynamic_voucher' => 'setDynamicVoucher'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number_id' => 'getPhoneNumberId',
        'payment_object_prefix' => 'getPaymentObjectPrefix',
        'payment_object_id' => 'getPaymentObjectId',
        'message_template' => 'getMessageTemplate',
        'media_urls' => 'getMediaUrls',
        'employee_id' => 'getEmployeeId',
        'broadcast_scheduled_at' => 'getBroadcastScheduledAt',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'broadcast_status' => 'getBroadcastStatus',
        'broadcast_queued_at' => 'getBroadcastQueuedAt',
        'broadcast_started_at' => 'getBroadcastStartedAt',
        'broadcast_completed_at' => 'getBroadcastCompletedAt',
        'list_type' => 'getListType',
        'list_id' => 'getListId',
        'opt_in_list' => 'getOptInList',
        'imported_list' => 'getImportedList',
        'dynamic_voucher' => 'getDynamicVoucher'
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
        $this->setIfExists('phone_number_id', $data ?? [], null);
        $this->setIfExists('payment_object_prefix', $data ?? [], null);
        $this->setIfExists('payment_object_id', $data ?? [], null);
        $this->setIfExists('message_template', $data ?? [], null);
        $this->setIfExists('media_urls', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('broadcast_scheduled_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('broadcast_status', $data ?? [], null);
        $this->setIfExists('broadcast_queued_at', $data ?? [], null);
        $this->setIfExists('broadcast_started_at', $data ?? [], null);
        $this->setIfExists('broadcast_completed_at', $data ?? [], null);
        $this->setIfExists('list_type', $data ?? [], null);
        $this->setIfExists('list_id', $data ?? [], null);
        $this->setIfExists('opt_in_list', $data ?? [], null);
        $this->setIfExists('imported_list', $data ?? [], null);
        $this->setIfExists('dynamic_voucher', $data ?? [], null);
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

        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ((mb_strlen($this->container['phone_number_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['phone_number_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['phone_number_id'])) {
            $invalidProperties[] = "invalid value for 'phone_number_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['payment_object_prefix'] === null) {
            $invalidProperties[] = "'payment_object_prefix' can't be null";
        }
        if ($this->container['payment_object_id'] === null) {
            $invalidProperties[] = "'payment_object_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_object_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'payment_object_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['payment_object_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'payment_object_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['payment_object_id'])) {
            $invalidProperties[] = "invalid value for 'payment_object_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['message_template'] === null) {
            $invalidProperties[] = "'message_template' can't be null";
        }
        if ($this->container['media_urls'] === null) {
            $invalidProperties[] = "'media_urls' can't be null";
        }
        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['employee_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['employee_id'])) {
            $invalidProperties[] = "invalid value for 'employee_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['broadcast_scheduled_at'] === null) {
            $invalidProperties[] = "'broadcast_scheduled_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
        if ($this->container['broadcast_status'] === null) {
            $invalidProperties[] = "'broadcast_status' can't be null";
        }
        if ($this->container['broadcast_queued_at'] === null) {
            $invalidProperties[] = "'broadcast_queued_at' can't be null";
        }
        if ($this->container['broadcast_started_at'] === null) {
            $invalidProperties[] = "'broadcast_started_at' can't be null";
        }
        if ($this->container['broadcast_completed_at'] === null) {
            $invalidProperties[] = "'broadcast_completed_at' can't be null";
        }
        if ($this->container['list_type'] === null) {
            $invalidProperties[] = "'list_type' can't be null";
        }
        if ($this->container['list_id'] === null) {
            $invalidProperties[] = "'list_id' can't be null";
        }
        if ((mb_strlen($this->container['list_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'list_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['list_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'list_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['list_id'])) {
            $invalidProperties[] = "invalid value for 'list_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['dynamic_voucher'] === null) {
            $invalidProperties[] = "'dynamic_voucher' can't be null";
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
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id phone_number_id
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        if (is_null($phone_number_id)) {
            throw new \InvalidArgumentException('non-nullable phone_number_id cannot be null');
        }
        if ((mb_strlen($phone_number_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling DynamicVoucherBroadcast., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($phone_number_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling DynamicVoucherBroadcast., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($phone_number_id)))) {
            throw new \InvalidArgumentException("invalid value for \$phone_number_id when calling DynamicVoucherBroadcast., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets payment_object_prefix
     *
     * @return \OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDPaymentObjectPrefix
     */
    public function getPaymentObjectPrefix()
    {
        return $this->container['payment_object_prefix'];
    }

    /**
     * Sets payment_object_prefix
     *
     * @param \OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDPaymentObjectPrefix $payment_object_prefix payment_object_prefix
     *
     * @return self
     */
    public function setPaymentObjectPrefix($payment_object_prefix)
    {
        if (is_null($payment_object_prefix)) {
            throw new \InvalidArgumentException('non-nullable payment_object_prefix cannot be null');
        }
        $this->container['payment_object_prefix'] = $payment_object_prefix;

        return $this;
    }

    /**
     * Gets payment_object_id
     *
     * @return string
     */
    public function getPaymentObjectId()
    {
        return $this->container['payment_object_id'];
    }

    /**
     * Sets payment_object_id
     *
     * @param string $payment_object_id payment_object_id
     *
     * @return self
     */
    public function setPaymentObjectId($payment_object_id)
    {
        if (is_null($payment_object_id)) {
            throw new \InvalidArgumentException('non-nullable payment_object_id cannot be null');
        }
        if ((mb_strlen($payment_object_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_object_id when calling DynamicVoucherBroadcast., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_object_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_object_id when calling DynamicVoucherBroadcast., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($payment_object_id)))) {
            throw new \InvalidArgumentException("invalid value for \$payment_object_id when calling DynamicVoucherBroadcast., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_object_id'] = $payment_object_id;

        return $this;
    }

    /**
     * Gets message_template
     *
     * @return string
     */
    public function getMessageTemplate()
    {
        return $this->container['message_template'];
    }

    /**
     * Sets message_template
     *
     * @param string $message_template message_template
     *
     * @return self
     */
    public function setMessageTemplate($message_template)
    {
        if (is_null($message_template)) {
            throw new \InvalidArgumentException('non-nullable message_template cannot be null');
        }
        $this->container['message_template'] = $message_template;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[] $media_urls media_urls
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        if (is_null($media_urls)) {
            throw new \InvalidArgumentException('non-nullable media_urls cannot be null');
        }
        $this->container['media_urls'] = $media_urls;

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
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling DynamicVoucherBroadcast., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling DynamicVoucherBroadcast., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($employee_id)))) {
            throw new \InvalidArgumentException("invalid value for \$employee_id when calling DynamicVoucherBroadcast., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets broadcast_scheduled_at
     *
     * @return \DateTime
     */
    public function getBroadcastScheduledAt()
    {
        return $this->container['broadcast_scheduled_at'];
    }

    /**
     * Sets broadcast_scheduled_at
     *
     * @param \DateTime $broadcast_scheduled_at broadcast_scheduled_at
     *
     * @return self
     */
    public function setBroadcastScheduledAt($broadcast_scheduled_at)
    {
        if (is_null($broadcast_scheduled_at)) {
            throw new \InvalidArgumentException('non-nullable broadcast_scheduled_at cannot be null');
        }
        $this->container['broadcast_scheduled_at'] = $broadcast_scheduled_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \OpenAPI\Client\Model\WTWalletPageViewId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \OpenAPI\Client\Model\WTWalletPageViewId $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling DynamicVoucherBroadcast., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling DynamicVoucherBroadcast., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($merchant_id)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_id when calling DynamicVoucherBroadcast., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * @param \DateTime $created_at created_at
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
     * @param \DateTime $updated_at updated_at
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
     * @param bool $is_active is_active
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
     * Gets broadcast_status
     *
     * @return \OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDBroadcastStatus
     */
    public function getBroadcastStatus()
    {
        return $this->container['broadcast_status'];
    }

    /**
     * Sets broadcast_status
     *
     * @param \OpenAPI\Client\Model\PickWTPaymentObjectBroadcastExcludeKeyofWTPaymentObjectBroadcastListTypeOrListIDBroadcastStatus $broadcast_status broadcast_status
     *
     * @return self
     */
    public function setBroadcastStatus($broadcast_status)
    {
        if (is_null($broadcast_status)) {
            throw new \InvalidArgumentException('non-nullable broadcast_status cannot be null');
        }
        $this->container['broadcast_status'] = $broadcast_status;

        return $this;
    }

    /**
     * Gets broadcast_queued_at
     *
     * @return \DateTime
     */
    public function getBroadcastQueuedAt()
    {
        return $this->container['broadcast_queued_at'];
    }

    /**
     * Sets broadcast_queued_at
     *
     * @param \DateTime $broadcast_queued_at broadcast_queued_at
     *
     * @return self
     */
    public function setBroadcastQueuedAt($broadcast_queued_at)
    {
        if (is_null($broadcast_queued_at)) {
            array_push($this->openAPINullablesSetToNull, 'broadcast_queued_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('broadcast_queued_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['broadcast_queued_at'] = $broadcast_queued_at;

        return $this;
    }

    /**
     * Gets broadcast_started_at
     *
     * @return \DateTime
     */
    public function getBroadcastStartedAt()
    {
        return $this->container['broadcast_started_at'];
    }

    /**
     * Sets broadcast_started_at
     *
     * @param \DateTime $broadcast_started_at broadcast_started_at
     *
     * @return self
     */
    public function setBroadcastStartedAt($broadcast_started_at)
    {
        if (is_null($broadcast_started_at)) {
            array_push($this->openAPINullablesSetToNull, 'broadcast_started_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('broadcast_started_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['broadcast_started_at'] = $broadcast_started_at;

        return $this;
    }

    /**
     * Gets broadcast_completed_at
     *
     * @return \DateTime
     */
    public function getBroadcastCompletedAt()
    {
        return $this->container['broadcast_completed_at'];
    }

    /**
     * Sets broadcast_completed_at
     *
     * @param \DateTime $broadcast_completed_at broadcast_completed_at
     *
     * @return self
     */
    public function setBroadcastCompletedAt($broadcast_completed_at)
    {
        if (is_null($broadcast_completed_at)) {
            array_push($this->openAPINullablesSetToNull, 'broadcast_completed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('broadcast_completed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['broadcast_completed_at'] = $broadcast_completed_at;

        return $this;
    }

    /**
     * Gets list_type
     *
     * @return \OpenAPI\Client\Model\DynamicVoucherBroadcastListType
     */
    public function getListType()
    {
        return $this->container['list_type'];
    }

    /**
     * Sets list_type
     *
     * @param \OpenAPI\Client\Model\DynamicVoucherBroadcastListType $list_type list_type
     *
     * @return self
     */
    public function setListType($list_type)
    {
        if (is_null($list_type)) {
            throw new \InvalidArgumentException('non-nullable list_type cannot be null');
        }
        $this->container['list_type'] = $list_type;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return string
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param string $list_id list_id
     *
     * @return self
     */
    public function setListId($list_id)
    {
        if (is_null($list_id)) {
            throw new \InvalidArgumentException('non-nullable list_id cannot be null');
        }
        if ((mb_strlen($list_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $list_id when calling DynamicVoucherBroadcast., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($list_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $list_id when calling DynamicVoucherBroadcast., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($list_id)))) {
            throw new \InvalidArgumentException("invalid value for \$list_id when calling DynamicVoucherBroadcast., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets opt_in_list
     *
     * @return \OpenAPI\Client\Model\WTOptInList|null
     */
    public function getOptInList()
    {
        return $this->container['opt_in_list'];
    }

    /**
     * Sets opt_in_list
     *
     * @param \OpenAPI\Client\Model\WTOptInList|null $opt_in_list opt_in_list
     *
     * @return self
     */
    public function setOptInList($opt_in_list)
    {
        if (is_null($opt_in_list)) {
            throw new \InvalidArgumentException('non-nullable opt_in_list cannot be null');
        }
        $this->container['opt_in_list'] = $opt_in_list;

        return $this;
    }

    /**
     * Gets imported_list
     *
     * @return \OpenAPI\Client\Model\WTImportedList|null
     */
    public function getImportedList()
    {
        return $this->container['imported_list'];
    }

    /**
     * Sets imported_list
     *
     * @param \OpenAPI\Client\Model\WTImportedList|null $imported_list imported_list
     *
     * @return self
     */
    public function setImportedList($imported_list)
    {
        if (is_null($imported_list)) {
            throw new \InvalidArgumentException('non-nullable imported_list cannot be null');
        }
        $this->container['imported_list'] = $imported_list;

        return $this;
    }

    /**
     * Gets dynamic_voucher
     *
     * @return \OpenAPI\Client\Model\DynamicVoucher
     */
    public function getDynamicVoucher()
    {
        return $this->container['dynamic_voucher'];
    }

    /**
     * Sets dynamic_voucher
     *
     * @param \OpenAPI\Client\Model\DynamicVoucher $dynamic_voucher dynamic_voucher
     *
     * @return self
     */
    public function setDynamicVoucher($dynamic_voucher)
    {
        if (is_null($dynamic_voucher)) {
            throw new \InvalidArgumentException('non-nullable dynamic_voucher cannot be null');
        }
        $this->container['dynamic_voucher'] = $dynamic_voucher;

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


