<?php
/**
 * LedgerEntry
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
 * The version of the OpenAPI document: 2.1.520
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
 * LedgerEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LedgerEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LedgerEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'register_id' => 'string',
        'register_type' => '\OpenAPI\Client\Model\ApplicableTerminals',
        'transaction_id' => 'string',
        'transaction_type' => 'string',
        'check_amount' => 'double',
        'transaction_amount' => 'double',
        'check_balance' => 'double',
        'discount_received' => 'string',
        'payment_object_prefix' => 'string',
        'payment_object_id' => 'string',
        'parent_object_prefix' => 'string',
        'parent_object_id' => 'string',
        'meta_value' => 'string',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'refunded_ledger_entry_id' => 'string',
        'transaction_amount_decimal' => 'string',
        'transaction_amount_string' => 'string',
        'check_amount_decimal' => 'string',
        'check_amount_string' => 'string',
        'check_balance_decimal' => 'string',
        'check_balance_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'register_id' => null,
        'register_type' => null,
        'transaction_id' => null,
        'transaction_type' => null,
        'check_amount' => 'double',
        'transaction_amount' => 'double',
        'check_balance' => 'double',
        'discount_received' => null,
        'payment_object_prefix' => null,
        'payment_object_id' => null,
        'parent_object_prefix' => null,
        'parent_object_id' => null,
        'meta_value' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'refunded_ledger_entry_id' => null,
        'transaction_amount_decimal' => null,
        'transaction_amount_string' => null,
        'check_amount_decimal' => null,
        'check_amount_string' => null,
        'check_balance_decimal' => null,
        'check_balance_string' => null
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
        'register_id' => 'registerID',
        'register_type' => 'registerType',
        'transaction_id' => 'transactionID',
        'transaction_type' => 'transactionType',
        'check_amount' => 'checkAmount',
        'transaction_amount' => 'transactionAmount',
        'check_balance' => 'checkBalance',
        'discount_received' => 'discountReceived',
        'payment_object_prefix' => 'paymentObjectPrefix',
        'payment_object_id' => 'paymentObjectID',
        'parent_object_prefix' => 'parentObjectPrefix',
        'parent_object_id' => 'parentObjectID',
        'meta_value' => 'metaValue',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'refunded_ledger_entry_id' => 'refundedLedgerEntryID',
        'transaction_amount_decimal' => 'transactionAmount_decimal',
        'transaction_amount_string' => 'transactionAmount_string',
        'check_amount_decimal' => 'checkAmount_decimal',
        'check_amount_string' => 'checkAmount_string',
        'check_balance_decimal' => 'checkBalance_decimal',
        'check_balance_string' => 'checkBalance_string'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'register_id' => 'setRegisterId',
        'register_type' => 'setRegisterType',
        'transaction_id' => 'setTransactionId',
        'transaction_type' => 'setTransactionType',
        'check_amount' => 'setCheckAmount',
        'transaction_amount' => 'setTransactionAmount',
        'check_balance' => 'setCheckBalance',
        'discount_received' => 'setDiscountReceived',
        'payment_object_prefix' => 'setPaymentObjectPrefix',
        'payment_object_id' => 'setPaymentObjectId',
        'parent_object_prefix' => 'setParentObjectPrefix',
        'parent_object_id' => 'setParentObjectId',
        'meta_value' => 'setMetaValue',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'refunded_ledger_entry_id' => 'setRefundedLedgerEntryId',
        'transaction_amount_decimal' => 'setTransactionAmountDecimal',
        'transaction_amount_string' => 'setTransactionAmountString',
        'check_amount_decimal' => 'setCheckAmountDecimal',
        'check_amount_string' => 'setCheckAmountString',
        'check_balance_decimal' => 'setCheckBalanceDecimal',
        'check_balance_string' => 'setCheckBalanceString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'register_id' => 'getRegisterId',
        'register_type' => 'getRegisterType',
        'transaction_id' => 'getTransactionId',
        'transaction_type' => 'getTransactionType',
        'check_amount' => 'getCheckAmount',
        'transaction_amount' => 'getTransactionAmount',
        'check_balance' => 'getCheckBalance',
        'discount_received' => 'getDiscountReceived',
        'payment_object_prefix' => 'getPaymentObjectPrefix',
        'payment_object_id' => 'getPaymentObjectId',
        'parent_object_prefix' => 'getParentObjectPrefix',
        'parent_object_id' => 'getParentObjectId',
        'meta_value' => 'getMetaValue',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'refunded_ledger_entry_id' => 'getRefundedLedgerEntryId',
        'transaction_amount_decimal' => 'getTransactionAmountDecimal',
        'transaction_amount_string' => 'getTransactionAmountString',
        'check_amount_decimal' => 'getCheckAmountDecimal',
        'check_amount_string' => 'getCheckAmountString',
        'check_balance_decimal' => 'getCheckBalanceDecimal',
        'check_balance_string' => 'getCheckBalanceString'
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
        $this->container['register_id'] = $data['register_id'] ?? null;
        $this->container['register_type'] = $data['register_type'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['check_amount'] = $data['check_amount'] ?? null;
        $this->container['transaction_amount'] = $data['transaction_amount'] ?? null;
        $this->container['check_balance'] = $data['check_balance'] ?? null;
        $this->container['discount_received'] = $data['discount_received'] ?? null;
        $this->container['payment_object_prefix'] = $data['payment_object_prefix'] ?? null;
        $this->container['payment_object_id'] = $data['payment_object_id'] ?? null;
        $this->container['parent_object_prefix'] = $data['parent_object_prefix'] ?? null;
        $this->container['parent_object_id'] = $data['parent_object_id'] ?? null;
        $this->container['meta_value'] = $data['meta_value'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['refunded_ledger_entry_id'] = $data['refunded_ledger_entry_id'] ?? null;
        $this->container['transaction_amount_decimal'] = $data['transaction_amount_decimal'] ?? null;
        $this->container['transaction_amount_string'] = $data['transaction_amount_string'] ?? null;
        $this->container['check_amount_decimal'] = $data['check_amount_decimal'] ?? null;
        $this->container['check_amount_string'] = $data['check_amount_string'] ?? null;
        $this->container['check_balance_decimal'] = $data['check_balance_decimal'] ?? null;
        $this->container['check_balance_string'] = $data['check_balance_string'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['register_id'] === null) {
            $invalidProperties[] = "'register_id' can't be null";
        }
        if ($this->container['register_type'] === null) {
            $invalidProperties[] = "'register_type' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['check_amount'] === null) {
            $invalidProperties[] = "'check_amount' can't be null";
        }
        if ($this->container['transaction_amount'] === null) {
            $invalidProperties[] = "'transaction_amount' can't be null";
        }
        if ($this->container['check_balance'] === null) {
            $invalidProperties[] = "'check_balance' can't be null";
        }
        if ($this->container['discount_received'] === null) {
            $invalidProperties[] = "'discount_received' can't be null";
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

        if ($this->container['parent_object_prefix'] === null) {
            $invalidProperties[] = "'parent_object_prefix' can't be null";
        }
        if ($this->container['parent_object_id'] === null) {
            $invalidProperties[] = "'parent_object_id' can't be null";
        }
        if ($this->container['meta_value'] === null) {
            $invalidProperties[] = "'meta_value' can't be null";
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
        if (!is_null($this->container['refunded_ledger_entry_id']) && (mb_strlen($this->container['refunded_ledger_entry_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'refunded_ledger_entry_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['refunded_ledger_entry_id']) && (mb_strlen($this->container['refunded_ledger_entry_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'refunded_ledger_entry_id', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['refunded_ledger_entry_id']) && !preg_match("/^[a-zA-Z0-9]+$/", $this->container['refunded_ledger_entry_id'])) {
            $invalidProperties[] = "invalid value for 'refunded_ledger_entry_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['transaction_amount_decimal'] === null) {
            $invalidProperties[] = "'transaction_amount_decimal' can't be null";
        }
        if ($this->container['transaction_amount_string'] === null) {
            $invalidProperties[] = "'transaction_amount_string' can't be null";
        }
        if ($this->container['check_amount_decimal'] === null) {
            $invalidProperties[] = "'check_amount_decimal' can't be null";
        }
        if ($this->container['check_amount_string'] === null) {
            $invalidProperties[] = "'check_amount_string' can't be null";
        }
        if ($this->container['check_balance_decimal'] === null) {
            $invalidProperties[] = "'check_balance_decimal' can't be null";
        }
        if ($this->container['check_balance_string'] === null) {
            $invalidProperties[] = "'check_balance_string' can't be null";
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
     * @param string $register_id register_id
     *
     * @return self
     */
    public function setRegisterId($register_id)
    {
        $this->container['register_id'] = $register_id;

        return $this;
    }

    /**
     * Gets register_type
     *
     * @return \OpenAPI\Client\Model\ApplicableTerminals
     */
    public function getRegisterType()
    {
        return $this->container['register_type'];
    }

    /**
     * Sets register_type
     *
     * @param \OpenAPI\Client\Model\ApplicableTerminals $register_type register_type
     *
     * @return self
     */
    public function setRegisterType($register_type)
    {
        $this->container['register_type'] = $register_type;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * @param string $transaction_type transaction_type
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets check_amount
     *
     * @return double
     */
    public function getCheckAmount()
    {
        return $this->container['check_amount'];
    }

    /**
     * Sets check_amount
     *
     * @param double $check_amount check_amount
     *
     * @return self
     */
    public function setCheckAmount($check_amount)
    {
        $this->container['check_amount'] = $check_amount;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return double
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param double $transaction_amount transaction_amount
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets check_balance
     *
     * @return double
     */
    public function getCheckBalance()
    {
        return $this->container['check_balance'];
    }

    /**
     * Sets check_balance
     *
     * @param double $check_balance check_balance
     *
     * @return self
     */
    public function setCheckBalance($check_balance)
    {
        $this->container['check_balance'] = $check_balance;

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
     * Gets payment_object_prefix
     *
     * @return string
     */
    public function getPaymentObjectPrefix()
    {
        return $this->container['payment_object_prefix'];
    }

    /**
     * Sets payment_object_prefix
     *
     * @param string $payment_object_prefix payment_object_prefix
     *
     * @return self
     */
    public function setPaymentObjectPrefix($payment_object_prefix)
    {
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
        if ((mb_strlen($payment_object_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_object_id when calling LedgerEntry., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_object_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_object_id when calling LedgerEntry., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_object_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_object_id when calling LedgerEntry., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_object_id'] = $payment_object_id;

        return $this;
    }

    /**
     * Gets parent_object_prefix
     *
     * @return string
     */
    public function getParentObjectPrefix()
    {
        return $this->container['parent_object_prefix'];
    }

    /**
     * Sets parent_object_prefix
     *
     * @param string $parent_object_prefix parent_object_prefix
     *
     * @return self
     */
    public function setParentObjectPrefix($parent_object_prefix)
    {
        $this->container['parent_object_prefix'] = $parent_object_prefix;

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
        $this->container['parent_object_id'] = $parent_object_id;

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
            throw new \InvalidArgumentException('invalid length for $id when calling LedgerEntry., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling LedgerEntry., must be bigger than or equal to 10.');
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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling LedgerEntry., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling LedgerEntry., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling LedgerEntry., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets refunded_ledger_entry_id
     *
     * @return string|null
     */
    public function getRefundedLedgerEntryId()
    {
        return $this->container['refunded_ledger_entry_id'];
    }

    /**
     * Sets refunded_ledger_entry_id
     *
     * @param string|null $refunded_ledger_entry_id refunded_ledger_entry_id
     *
     * @return self
     */
    public function setRefundedLedgerEntryId($refunded_ledger_entry_id)
    {
        if (!is_null($refunded_ledger_entry_id) && (mb_strlen($refunded_ledger_entry_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $refunded_ledger_entry_id when calling LedgerEntry., must be smaller than or equal to 10.');
        }
        if (!is_null($refunded_ledger_entry_id) && (mb_strlen($refunded_ledger_entry_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $refunded_ledger_entry_id when calling LedgerEntry., must be bigger than or equal to 10.');
        }
        if (!is_null($refunded_ledger_entry_id) && (!preg_match("/^[a-zA-Z0-9]+$/", $refunded_ledger_entry_id))) {
            throw new \InvalidArgumentException("invalid value for $refunded_ledger_entry_id when calling LedgerEntry., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['refunded_ledger_entry_id'] = $refunded_ledger_entry_id;

        return $this;
    }

    /**
     * Gets transaction_amount_decimal
     *
     * @return string
     */
    public function getTransactionAmountDecimal()
    {
        return $this->container['transaction_amount_decimal'];
    }

    /**
     * Sets transaction_amount_decimal
     *
     * @param string $transaction_amount_decimal transaction_amount_decimal
     *
     * @return self
     */
    public function setTransactionAmountDecimal($transaction_amount_decimal)
    {
        $this->container['transaction_amount_decimal'] = $transaction_amount_decimal;

        return $this;
    }

    /**
     * Gets transaction_amount_string
     *
     * @return string
     */
    public function getTransactionAmountString()
    {
        return $this->container['transaction_amount_string'];
    }

    /**
     * Sets transaction_amount_string
     *
     * @param string $transaction_amount_string transaction_amount_string
     *
     * @return self
     */
    public function setTransactionAmountString($transaction_amount_string)
    {
        $this->container['transaction_amount_string'] = $transaction_amount_string;

        return $this;
    }

    /**
     * Gets check_amount_decimal
     *
     * @return string
     */
    public function getCheckAmountDecimal()
    {
        return $this->container['check_amount_decimal'];
    }

    /**
     * Sets check_amount_decimal
     *
     * @param string $check_amount_decimal check_amount_decimal
     *
     * @return self
     */
    public function setCheckAmountDecimal($check_amount_decimal)
    {
        $this->container['check_amount_decimal'] = $check_amount_decimal;

        return $this;
    }

    /**
     * Gets check_amount_string
     *
     * @return string
     */
    public function getCheckAmountString()
    {
        return $this->container['check_amount_string'];
    }

    /**
     * Sets check_amount_string
     *
     * @param string $check_amount_string check_amount_string
     *
     * @return self
     */
    public function setCheckAmountString($check_amount_string)
    {
        $this->container['check_amount_string'] = $check_amount_string;

        return $this;
    }

    /**
     * Gets check_balance_decimal
     *
     * @return string
     */
    public function getCheckBalanceDecimal()
    {
        return $this->container['check_balance_decimal'];
    }

    /**
     * Sets check_balance_decimal
     *
     * @param string $check_balance_decimal check_balance_decimal
     *
     * @return self
     */
    public function setCheckBalanceDecimal($check_balance_decimal)
    {
        $this->container['check_balance_decimal'] = $check_balance_decimal;

        return $this;
    }

    /**
     * Gets check_balance_string
     *
     * @return string
     */
    public function getCheckBalanceString()
    {
        return $this->container['check_balance_string'];
    }

    /**
     * Sets check_balance_string
     *
     * @param string $check_balance_string check_balance_string
     *
     * @return self
     */
    public function setCheckBalanceString($check_balance_string)
    {
        $this->container['check_balance_string'] = $check_balance_string;

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


