<?php
/**
 * WTDynamicVoucherRedemption
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
 * The version of the OpenAPI document: 2.1.524
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
 * WTDynamicVoucherRedemption Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTDynamicVoucherRedemption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTDynamicVoucherRedemption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'session_key' => 'string',
        'redeemed_amount' => 'int',
        'dynamic_voucher_id' => 'string',
        'redeemed_source' => 'string',
        'redeemed_transaction_id' => 'string',
        'transaction_type' => 'string',
        'register_id' => 'string',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'redeemed_at' => '\DateTime',
        'refunded_at' => '\DateTime',
        'refunded_transaction_id' => 'string',
        'refunded_amount' => 'int',
        'status' => '\OpenAPI\Client\Model\VSDynamicVoucherStatus',
        'redeemed_amount_decimal' => 'string',
        'redeemed_amount_string' => 'string',
        'discount_received' => 'string',
        'meta_value' => 'string',
        'parent_object_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'session_key' => null,
        'redeemed_amount' => 'int32',
        'dynamic_voucher_id' => null,
        'redeemed_source' => null,
        'redeemed_transaction_id' => null,
        'transaction_type' => null,
        'register_id' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'redeemed_at' => 'date-time',
        'refunded_at' => 'date-time',
        'refunded_transaction_id' => null,
        'refunded_amount' => 'int32',
        'status' => null,
        'redeemed_amount_decimal' => null,
        'redeemed_amount_string' => null,
        'discount_received' => null,
        'meta_value' => null,
        'parent_object_id' => null
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
        'session_key' => 'sessionKey',
        'redeemed_amount' => 'redeemedAmount',
        'dynamic_voucher_id' => 'dynamicVoucherID',
        'redeemed_source' => 'redeemedSource',
        'redeemed_transaction_id' => 'redeemedTransactionID',
        'transaction_type' => 'transactionType',
        'register_id' => 'registerID',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'redeemed_at' => 'redeemedAt',
        'refunded_at' => 'refundedAt',
        'refunded_transaction_id' => 'refundedTransactionID',
        'refunded_amount' => 'refundedAmount',
        'status' => 'status',
        'redeemed_amount_decimal' => 'redeemedAmount_decimal',
        'redeemed_amount_string' => 'redeemedAmount_string',
        'discount_received' => 'discountReceived',
        'meta_value' => 'metaValue',
        'parent_object_id' => 'parentObjectID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'session_key' => 'setSessionKey',
        'redeemed_amount' => 'setRedeemedAmount',
        'dynamic_voucher_id' => 'setDynamicVoucherId',
        'redeemed_source' => 'setRedeemedSource',
        'redeemed_transaction_id' => 'setRedeemedTransactionId',
        'transaction_type' => 'setTransactionType',
        'register_id' => 'setRegisterId',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'redeemed_at' => 'setRedeemedAt',
        'refunded_at' => 'setRefundedAt',
        'refunded_transaction_id' => 'setRefundedTransactionId',
        'refunded_amount' => 'setRefundedAmount',
        'status' => 'setStatus',
        'redeemed_amount_decimal' => 'setRedeemedAmountDecimal',
        'redeemed_amount_string' => 'setRedeemedAmountString',
        'discount_received' => 'setDiscountReceived',
        'meta_value' => 'setMetaValue',
        'parent_object_id' => 'setParentObjectId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'session_key' => 'getSessionKey',
        'redeemed_amount' => 'getRedeemedAmount',
        'dynamic_voucher_id' => 'getDynamicVoucherId',
        'redeemed_source' => 'getRedeemedSource',
        'redeemed_transaction_id' => 'getRedeemedTransactionId',
        'transaction_type' => 'getTransactionType',
        'register_id' => 'getRegisterId',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'redeemed_at' => 'getRedeemedAt',
        'refunded_at' => 'getRefundedAt',
        'refunded_transaction_id' => 'getRefundedTransactionId',
        'refunded_amount' => 'getRefundedAmount',
        'status' => 'getStatus',
        'redeemed_amount_decimal' => 'getRedeemedAmountDecimal',
        'redeemed_amount_string' => 'getRedeemedAmountString',
        'discount_received' => 'getDiscountReceived',
        'meta_value' => 'getMetaValue',
        'parent_object_id' => 'getParentObjectId'
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
        $this->container['session_key'] = $data['session_key'] ?? null;
        $this->container['redeemed_amount'] = $data['redeemed_amount'] ?? null;
        $this->container['dynamic_voucher_id'] = $data['dynamic_voucher_id'] ?? null;
        $this->container['redeemed_source'] = $data['redeemed_source'] ?? null;
        $this->container['redeemed_transaction_id'] = $data['redeemed_transaction_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['register_id'] = $data['register_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['redeemed_at'] = $data['redeemed_at'] ?? null;
        $this->container['refunded_at'] = $data['refunded_at'] ?? null;
        $this->container['refunded_transaction_id'] = $data['refunded_transaction_id'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['redeemed_amount_decimal'] = $data['redeemed_amount_decimal'] ?? null;
        $this->container['redeemed_amount_string'] = $data['redeemed_amount_string'] ?? null;
        $this->container['discount_received'] = $data['discount_received'] ?? null;
        $this->container['meta_value'] = $data['meta_value'] ?? null;
        $this->container['parent_object_id'] = $data['parent_object_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['session_key'] === null) {
            $invalidProperties[] = "'session_key' can't be null";
        }
        if ($this->container['redeemed_amount'] === null) {
            $invalidProperties[] = "'redeemed_amount' can't be null";
        }
        if (($this->container['redeemed_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'redeemed_amount', must be bigger than or equal to 0.";
        }

        if ($this->container['dynamic_voucher_id'] === null) {
            $invalidProperties[] = "'dynamic_voucher_id' can't be null";
        }
        if ((mb_strlen($this->container['dynamic_voucher_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'dynamic_voucher_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['dynamic_voucher_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'dynamic_voucher_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['dynamic_voucher_id'])) {
            $invalidProperties[] = "invalid value for 'dynamic_voucher_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['redeemed_source'] === null) {
            $invalidProperties[] = "'redeemed_source' can't be null";
        }
        if ($this->container['redeemed_transaction_id'] === null) {
            $invalidProperties[] = "'redeemed_transaction_id' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['register_id'] === null) {
            $invalidProperties[] = "'register_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
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
        if ($this->container['refunded_transaction_id'] === null) {
            $invalidProperties[] = "'refunded_transaction_id' can't be null";
        }
        if ($this->container['refunded_amount'] === null) {
            $invalidProperties[] = "'refunded_amount' can't be null";
        }
        if (($this->container['refunded_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'refunded_amount', must be bigger than or equal to 0.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['redeemed_amount_decimal'] === null) {
            $invalidProperties[] = "'redeemed_amount_decimal' can't be null";
        }
        if ($this->container['redeemed_amount_string'] === null) {
            $invalidProperties[] = "'redeemed_amount_string' can't be null";
        }
        if ($this->container['discount_received'] === null) {
            $invalidProperties[] = "'discount_received' can't be null";
        }
        if ($this->container['meta_value'] === null) {
            $invalidProperties[] = "'meta_value' can't be null";
        }
        if ($this->container['parent_object_id'] === null) {
            $invalidProperties[] = "'parent_object_id' can't be null";
        }
        if ((mb_strlen($this->container['parent_object_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'parent_object_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['parent_object_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'parent_object_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['parent_object_id'])) {
            $invalidProperties[] = "invalid value for 'parent_object_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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
     * Gets session_key
     *
     * @return string
     */
    public function getSessionKey()
    {
        return $this->container['session_key'];
    }

    /**
     * Sets session_key
     *
     * @param string $session_key session_key
     *
     * @return self
     */
    public function setSessionKey($session_key)
    {


        $this->container['session_key'] = $session_key;

        return $this;
    }

    /**
     * Gets redeemed_amount
     *
     * @return int
     */
    public function getRedeemedAmount()
    {
        return $this->container['redeemed_amount'];
    }

    /**
     * Sets redeemed_amount
     *
     * @param int $redeemed_amount redeemed_amount
     *
     * @return self
     */
    public function setRedeemedAmount($redeemed_amount)
    {

        if (($redeemed_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $redeemed_amount when calling WTDynamicVoucherRedemption., must be bigger than or equal to 0.');
        }

        $this->container['redeemed_amount'] = $redeemed_amount;

        return $this;
    }

    /**
     * Gets dynamic_voucher_id
     *
     * @return string
     */
    public function getDynamicVoucherId()
    {
        return $this->container['dynamic_voucher_id'];
    }

    /**
     * Sets dynamic_voucher_id
     *
     * @param string $dynamic_voucher_id dynamic_voucher_id
     *
     * @return self
     */
    public function setDynamicVoucherId($dynamic_voucher_id)
    {
        if ((mb_strlen($dynamic_voucher_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $dynamic_voucher_id when calling WTDynamicVoucherRedemption., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($dynamic_voucher_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $dynamic_voucher_id when calling WTDynamicVoucherRedemption., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $dynamic_voucher_id))) {
            throw new \InvalidArgumentException("invalid value for $dynamic_voucher_id when calling WTDynamicVoucherRedemption., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['dynamic_voucher_id'] = $dynamic_voucher_id;

        return $this;
    }

    /**
     * Gets redeemed_source
     *
     * @return string
     */
    public function getRedeemedSource()
    {
        return $this->container['redeemed_source'];
    }

    /**
     * Sets redeemed_source
     *
     * @param string $redeemed_source redeemed_source
     *
     * @return self
     */
    public function setRedeemedSource($redeemed_source)
    {
        $this->container['redeemed_source'] = $redeemed_source;

        return $this;
    }

    /**
     * Gets redeemed_transaction_id
     *
     * @return string
     */
    public function getRedeemedTransactionId()
    {
        return $this->container['redeemed_transaction_id'];
    }

    /**
     * Sets redeemed_transaction_id
     *
     * @param string $redeemed_transaction_id redeemed_transaction_id
     *
     * @return self
     */
    public function setRedeemedTransactionId($redeemed_transaction_id)
    {
        $this->container['redeemed_transaction_id'] = $redeemed_transaction_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type The type of the transaction - only redemption at the moment
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets register_id
     *
     * @return string
     */
    public function getRegisterId()
    {
        return $this->container['register_id'];
    }

    /**
     * Sets register_id
     *
     * @param string $register_id The ID of the register where the transaction occurred
     *
     * @return self
     */
    public function setRegisterId($register_id)
    {
        $this->container['register_id'] = $register_id;

        return $this;
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
        if ((mb_strlen($id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTDynamicVoucherRedemption., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTDynamicVoucherRedemption., must be bigger than or equal to 10.');
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
        if ((mb_strlen($merchant_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTDynamicVoucherRedemption., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTDynamicVoucherRedemption., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTDynamicVoucherRedemption., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets redeemed_at
     *
     * @return \DateTime|null
     */
    public function getRedeemedAt()
    {
        return $this->container['redeemed_at'];
    }

    /**
     * Sets redeemed_at
     *
     * @param \DateTime|null $redeemed_at redeemed_at
     *
     * @return self
     */
    public function setRedeemedAt($redeemed_at)
    {
        $this->container['redeemed_at'] = $redeemed_at;

        return $this;
    }

    /**
     * Gets refunded_at
     *
     * @return \DateTime|null
     */
    public function getRefundedAt()
    {
        return $this->container['refunded_at'];
    }

    /**
     * Sets refunded_at
     *
     * @param \DateTime|null $refunded_at refunded_at
     *
     * @return self
     */
    public function setRefundedAt($refunded_at)
    {
        $this->container['refunded_at'] = $refunded_at;

        return $this;
    }

    /**
     * Gets refunded_transaction_id
     *
     * @return string
     */
    public function getRefundedTransactionId()
    {
        return $this->container['refunded_transaction_id'];
    }

    /**
     * Sets refunded_transaction_id
     *
     * @param string $refunded_transaction_id refunded_transaction_id
     *
     * @return self
     */
    public function setRefundedTransactionId($refunded_transaction_id)
    {
        $this->container['refunded_transaction_id'] = $refunded_transaction_id;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int $refunded_amount refunded_amount
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {

        if (($refunded_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $refunded_amount when calling WTDynamicVoucherRedemption., must be bigger than or equal to 0.');
        }

        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\VSDynamicVoucherStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\VSDynamicVoucherStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets redeemed_amount_decimal
     *
     * @return string
     */
    public function getRedeemedAmountDecimal()
    {
        return $this->container['redeemed_amount_decimal'];
    }

    /**
     * Sets redeemed_amount_decimal
     *
     * @param string $redeemed_amount_decimal redeemed_amount_decimal
     *
     * @return self
     */
    public function setRedeemedAmountDecimal($redeemed_amount_decimal)
    {
        $this->container['redeemed_amount_decimal'] = $redeemed_amount_decimal;

        return $this;
    }

    /**
     * Gets redeemed_amount_string
     *
     * @return string
     */
    public function getRedeemedAmountString()
    {
        return $this->container['redeemed_amount_string'];
    }

    /**
     * Sets redeemed_amount_string
     *
     * @param string $redeemed_amount_string redeemed_amount_string
     *
     * @return self
     */
    public function setRedeemedAmountString($redeemed_amount_string)
    {
        $this->container['redeemed_amount_string'] = $redeemed_amount_string;

        return $this;
    }

    /**
     * Gets discount_received
     *
     * @return string
     */
    public function getDiscountReceived()
    {
        return $this->container['discount_received'];
    }

    /**
     * Sets discount_received
     *
     * @param string $discount_received discount_received
     *
     * @return self
     */
    public function setDiscountReceived($discount_received)
    {
        $this->container['discount_received'] = $discount_received;

        return $this;
    }

    /**
     * Gets meta_value
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->container['meta_value'];
    }

    /**
     * Sets meta_value
     *
     * @param string $meta_value meta_value
     *
     * @return self
     */
    public function setMetaValue($meta_value)
    {
        $this->container['meta_value'] = $meta_value;

        return $this;
    }

    /**
     * Gets parent_object_id
     *
     * @return string
     */
    public function getParentObjectId()
    {
        return $this->container['parent_object_id'];
    }

    /**
     * Sets parent_object_id
     *
     * @param string $parent_object_id parent_object_id
     *
     * @return self
     */
    public function setParentObjectId($parent_object_id)
    {
        if ((mb_strlen($parent_object_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $parent_object_id when calling WTDynamicVoucherRedemption., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($parent_object_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $parent_object_id when calling WTDynamicVoucherRedemption., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $parent_object_id))) {
            throw new \InvalidArgumentException("invalid value for $parent_object_id when calling WTDynamicVoucherRedemption., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['parent_object_id'] = $parent_object_id;

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


