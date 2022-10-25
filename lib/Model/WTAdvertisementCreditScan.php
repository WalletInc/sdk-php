<?php
/**
 * WTAdvertisementCreditScan
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
 * The version of the OpenAPI document: 2.1.518
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
 * WTAdvertisementCreditScan Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTAdvertisementCreditScan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTAdvertisementCreditScan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'is_active' => 'bool',
        'transaction_type' => 'string',
        'register_id' => 'string',
        'redeemed_source' => 'string',
        'redeemed_transaction_id' => 'string',
        'redeemed_amount' => 'int',
        'is_redeemed' => 'bool',
        'refunded_transaction_id' => 'string',
        'refunded_amount' => 'int',
        'status' => '\OpenAPI\Client\Model\Status',
        'authorized_against_check_number' => 'string',
        'authorized_amount' => 'int',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'advertisement_credit_id' => 'string',
        'redeemed_amount_decimal' => 'string',
        'redeemed_amount_string' => 'string',
        'authorized_amount_decimal' => 'string',
        'authorized_amount_string' => 'string',
        'date_time_redeemed' => '\DateTime',
        'date_time_refunded' => '\DateTime'
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
        'is_active' => null,
        'transaction_type' => null,
        'register_id' => null,
        'redeemed_source' => null,
        'redeemed_transaction_id' => null,
        'redeemed_amount' => 'int32',
        'is_redeemed' => null,
        'refunded_transaction_id' => null,
        'refunded_amount' => 'int32',
        'status' => null,
        'authorized_against_check_number' => null,
        'authorized_amount' => 'int32',
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'advertisement_credit_id' => null,
        'redeemed_amount_decimal' => null,
        'redeemed_amount_string' => null,
        'authorized_amount_decimal' => null,
        'authorized_amount_string' => null,
        'date_time_redeemed' => 'date-time',
        'date_time_refunded' => 'date-time'
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
        'is_active' => 'isActive',
        'transaction_type' => 'transactionType',
        'register_id' => 'registerID',
        'redeemed_source' => 'redeemedSource',
        'redeemed_transaction_id' => 'redeemedTransactionID',
        'redeemed_amount' => 'redeemedAmount',
        'is_redeemed' => 'isRedeemed',
        'refunded_transaction_id' => 'refundedTransactionID',
        'refunded_amount' => 'refundedAmount',
        'status' => 'status',
        'authorized_against_check_number' => 'authorizedAgainstCheckNumber',
        'authorized_amount' => 'authorizedAmount',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'advertisement_credit_id' => 'advertisementCreditID',
        'redeemed_amount_decimal' => 'redeemedAmount_decimal',
        'redeemed_amount_string' => 'redeemedAmount_string',
        'authorized_amount_decimal' => 'authorizedAmount_decimal',
        'authorized_amount_string' => 'authorizedAmount_string',
        'date_time_redeemed' => 'dateTimeRedeemed',
        'date_time_refunded' => 'dateTimeRefunded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'transaction_type' => 'setTransactionType',
        'register_id' => 'setRegisterId',
        'redeemed_source' => 'setRedeemedSource',
        'redeemed_transaction_id' => 'setRedeemedTransactionId',
        'redeemed_amount' => 'setRedeemedAmount',
        'is_redeemed' => 'setIsRedeemed',
        'refunded_transaction_id' => 'setRefundedTransactionId',
        'refunded_amount' => 'setRefundedAmount',
        'status' => 'setStatus',
        'authorized_against_check_number' => 'setAuthorizedAgainstCheckNumber',
        'authorized_amount' => 'setAuthorizedAmount',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'advertisement_credit_id' => 'setAdvertisementCreditId',
        'redeemed_amount_decimal' => 'setRedeemedAmountDecimal',
        'redeemed_amount_string' => 'setRedeemedAmountString',
        'authorized_amount_decimal' => 'setAuthorizedAmountDecimal',
        'authorized_amount_string' => 'setAuthorizedAmountString',
        'date_time_redeemed' => 'setDateTimeRedeemed',
        'date_time_refunded' => 'setDateTimeRefunded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'transaction_type' => 'getTransactionType',
        'register_id' => 'getRegisterId',
        'redeemed_source' => 'getRedeemedSource',
        'redeemed_transaction_id' => 'getRedeemedTransactionId',
        'redeemed_amount' => 'getRedeemedAmount',
        'is_redeemed' => 'getIsRedeemed',
        'refunded_transaction_id' => 'getRefundedTransactionId',
        'refunded_amount' => 'getRefundedAmount',
        'status' => 'getStatus',
        'authorized_against_check_number' => 'getAuthorizedAgainstCheckNumber',
        'authorized_amount' => 'getAuthorizedAmount',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'advertisement_credit_id' => 'getAdvertisementCreditId',
        'redeemed_amount_decimal' => 'getRedeemedAmountDecimal',
        'redeemed_amount_string' => 'getRedeemedAmountString',
        'authorized_amount_decimal' => 'getAuthorizedAmountDecimal',
        'authorized_amount_string' => 'getAuthorizedAmountString',
        'date_time_redeemed' => 'getDateTimeRedeemed',
        'date_time_refunded' => 'getDateTimeRefunded'
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
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['register_id'] = $data['register_id'] ?? null;
        $this->container['redeemed_source'] = $data['redeemed_source'] ?? null;
        $this->container['redeemed_transaction_id'] = $data['redeemed_transaction_id'] ?? null;
        $this->container['redeemed_amount'] = $data['redeemed_amount'] ?? null;
        $this->container['is_redeemed'] = $data['is_redeemed'] ?? null;
        $this->container['refunded_transaction_id'] = $data['refunded_transaction_id'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['authorized_against_check_number'] = $data['authorized_against_check_number'] ?? null;
        $this->container['authorized_amount'] = $data['authorized_amount'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['advertisement_credit_id'] = $data['advertisement_credit_id'] ?? null;
        $this->container['redeemed_amount_decimal'] = $data['redeemed_amount_decimal'] ?? null;
        $this->container['redeemed_amount_string'] = $data['redeemed_amount_string'] ?? null;
        $this->container['authorized_amount_decimal'] = $data['authorized_amount_decimal'] ?? null;
        $this->container['authorized_amount_string'] = $data['authorized_amount_string'] ?? null;
        $this->container['date_time_redeemed'] = $data['date_time_redeemed'] ?? null;
        $this->container['date_time_refunded'] = $data['date_time_refunded'] ?? null;
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

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['register_id'] === null) {
            $invalidProperties[] = "'register_id' can't be null";
        }
        if ($this->container['redeemed_source'] === null) {
            $invalidProperties[] = "'redeemed_source' can't be null";
        }
        if ($this->container['redeemed_transaction_id'] === null) {
            $invalidProperties[] = "'redeemed_transaction_id' can't be null";
        }
        if ($this->container['redeemed_amount'] === null) {
            $invalidProperties[] = "'redeemed_amount' can't be null";
        }
        if (($this->container['redeemed_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'redeemed_amount', must be bigger than or equal to 0.";
        }

        if ($this->container['is_redeemed'] === null) {
            $invalidProperties[] = "'is_redeemed' can't be null";
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
        if ($this->container['authorized_against_check_number'] === null) {
            $invalidProperties[] = "'authorized_against_check_number' can't be null";
        }
        if ($this->container['authorized_amount'] === null) {
            $invalidProperties[] = "'authorized_amount' can't be null";
        }
        if (($this->container['authorized_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'authorized_amount', must be bigger than or equal to 0.";
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
        if ($this->container['advertisement_credit_id'] === null) {
            $invalidProperties[] = "'advertisement_credit_id' can't be null";
        }
        if ((mb_strlen($this->container['advertisement_credit_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'advertisement_credit_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['advertisement_credit_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'advertisement_credit_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['advertisement_credit_id'])) {
            $invalidProperties[] = "invalid value for 'advertisement_credit_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['redeemed_amount_decimal'] === null) {
            $invalidProperties[] = "'redeemed_amount_decimal' can't be null";
        }
        if ($this->container['redeemed_amount_string'] === null) {
            $invalidProperties[] = "'redeemed_amount_string' can't be null";
        }
        if ($this->container['authorized_amount_decimal'] === null) {
            $invalidProperties[] = "'authorized_amount_decimal' can't be null";
        }
        if ($this->container['authorized_amount_string'] === null) {
            $invalidProperties[] = "'authorized_amount_string' can't be null";
        }
        if ($this->container['date_time_redeemed'] === null) {
            $invalidProperties[] = "'date_time_redeemed' can't be null";
        }
        if ($this->container['date_time_refunded'] === null) {
            $invalidProperties[] = "'date_time_refunded' can't be null";
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
        if ((mb_strlen($id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTAdvertisementCreditScan., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTAdvertisementCreditScan., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid value for $redeemed_amount when calling WTAdvertisementCreditScan., must be bigger than or equal to 0.');
        }

        $this->container['redeemed_amount'] = $redeemed_amount;

        return $this;
    }

    /**
     * Gets is_redeemed
     *
     * @return bool
     */
    public function getIsRedeemed()
    {
        return $this->container['is_redeemed'];
    }

    /**
     * Sets is_redeemed
     *
     * @param bool $is_redeemed is_redeemed
     *
     * @return self
     */
    public function setIsRedeemed($is_redeemed)
    {
        $this->container['is_redeemed'] = $is_redeemed;

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
            throw new \InvalidArgumentException('invalid value for $refunded_amount when calling WTAdvertisementCreditScan., must be bigger than or equal to 0.');
        }

        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\Status $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets authorized_against_check_number
     *
     * @return string
     */
    public function getAuthorizedAgainstCheckNumber()
    {
        return $this->container['authorized_against_check_number'];
    }

    /**
     * Sets authorized_against_check_number
     *
     * @param string $authorized_against_check_number authorized_against_check_number
     *
     * @return self
     */
    public function setAuthorizedAgainstCheckNumber($authorized_against_check_number)
    {
        $this->container['authorized_against_check_number'] = $authorized_against_check_number;

        return $this;
    }

    /**
     * Gets authorized_amount
     *
     * @return int
     */
    public function getAuthorizedAmount()
    {
        return $this->container['authorized_amount'];
    }

    /**
     * Sets authorized_amount
     *
     * @param int $authorized_amount authorized_amount
     *
     * @return self
     */
    public function setAuthorizedAmount($authorized_amount)
    {

        if (($authorized_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $authorized_amount when calling WTAdvertisementCreditScan., must be bigger than or equal to 0.');
        }

        $this->container['authorized_amount'] = $authorized_amount;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTAdvertisementCreditScan., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTAdvertisementCreditScan., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTAdvertisementCreditScan., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets advertisement_credit_id
     *
     * @return string
     */
    public function getAdvertisementCreditId()
    {
        return $this->container['advertisement_credit_id'];
    }

    /**
     * Sets advertisement_credit_id
     *
     * @param string $advertisement_credit_id advertisement_credit_id
     *
     * @return self
     */
    public function setAdvertisementCreditId($advertisement_credit_id)
    {
        if ((mb_strlen($advertisement_credit_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $advertisement_credit_id when calling WTAdvertisementCreditScan., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($advertisement_credit_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $advertisement_credit_id when calling WTAdvertisementCreditScan., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $advertisement_credit_id))) {
            throw new \InvalidArgumentException("invalid value for $advertisement_credit_id when calling WTAdvertisementCreditScan., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['advertisement_credit_id'] = $advertisement_credit_id;

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
     * Gets authorized_amount_decimal
     *
     * @return string
     */
    public function getAuthorizedAmountDecimal()
    {
        return $this->container['authorized_amount_decimal'];
    }

    /**
     * Sets authorized_amount_decimal
     *
     * @param string $authorized_amount_decimal authorized_amount_decimal
     *
     * @return self
     */
    public function setAuthorizedAmountDecimal($authorized_amount_decimal)
    {
        $this->container['authorized_amount_decimal'] = $authorized_amount_decimal;

        return $this;
    }

    /**
     * Gets authorized_amount_string
     *
     * @return string
     */
    public function getAuthorizedAmountString()
    {
        return $this->container['authorized_amount_string'];
    }

    /**
     * Sets authorized_amount_string
     *
     * @param string $authorized_amount_string authorized_amount_string
     *
     * @return self
     */
    public function setAuthorizedAmountString($authorized_amount_string)
    {
        $this->container['authorized_amount_string'] = $authorized_amount_string;

        return $this;
    }

    /**
     * Gets date_time_redeemed
     *
     * @return \DateTime
     */
    public function getDateTimeRedeemed()
    {
        return $this->container['date_time_redeemed'];
    }

    /**
     * Sets date_time_redeemed
     *
     * @param \DateTime $date_time_redeemed date_time_redeemed
     *
     * @return self
     */
    public function setDateTimeRedeemed($date_time_redeemed)
    {
        $this->container['date_time_redeemed'] = $date_time_redeemed;

        return $this;
    }

    /**
     * Gets date_time_refunded
     *
     * @return \DateTime
     */
    public function getDateTimeRefunded()
    {
        return $this->container['date_time_refunded'];
    }

    /**
     * Sets date_time_refunded
     *
     * @param \DateTime $date_time_refunded date_time_refunded
     *
     * @return self
     */
    public function setDateTimeRefunded($date_time_refunded)
    {
        $this->container['date_time_refunded'] = $date_time_refunded;

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


