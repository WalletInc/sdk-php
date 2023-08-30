<?php
/**
 * Ticket
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
 * Ticket Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Ticket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ticket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient_phone_number' => 'string',
        'recipient_email_address' => 'string',
        'recipient_member_id' => 'string',
        'is_comp' => 'bool',
        'performance_id' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'merchant_id' => 'string',
        'is_claimed' => 'bool',
        'date_time_claimed' => '\DateTime',
        'claimed_by_phone_number' => 'string',
        'redeemed_source' => 'string',
        'redeemed_transaction_id' => 'string',
        'transaction_type' => 'string',
        'register_id' => 'string',
        'is_redeemed' => 'bool',
        'date_time_redeemed' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient_phone_number' => null,
        'recipient_email_address' => null,
        'recipient_member_id' => null,
        'is_comp' => null,
        'performance_id' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'merchant_id' => null,
        'is_claimed' => null,
        'date_time_claimed' => 'date-time',
        'claimed_by_phone_number' => null,
        'redeemed_source' => null,
        'redeemed_transaction_id' => null,
        'transaction_type' => null,
        'register_id' => null,
        'is_redeemed' => null,
        'date_time_redeemed' => 'date-time'
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
        'recipient_phone_number' => 'recipientPhoneNumber',
        'recipient_email_address' => 'recipientEmailAddress',
        'recipient_member_id' => 'recipientMemberID',
        'is_comp' => 'isComp',
        'performance_id' => 'performanceID',
        'id' => 'id',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'merchant_id' => 'merchantID',
        'is_claimed' => 'isClaimed',
        'date_time_claimed' => 'dateTimeClaimed',
        'claimed_by_phone_number' => 'claimedByPhoneNumber',
        'redeemed_source' => 'redeemedSource',
        'redeemed_transaction_id' => 'redeemedTransactionID',
        'transaction_type' => 'transactionType',
        'register_id' => 'registerID',
        'is_redeemed' => 'isRedeemed',
        'date_time_redeemed' => 'dateTimeRedeemed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_phone_number' => 'setRecipientPhoneNumber',
        'recipient_email_address' => 'setRecipientEmailAddress',
        'recipient_member_id' => 'setRecipientMemberId',
        'is_comp' => 'setIsComp',
        'performance_id' => 'setPerformanceId',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'merchant_id' => 'setMerchantId',
        'is_claimed' => 'setIsClaimed',
        'date_time_claimed' => 'setDateTimeClaimed',
        'claimed_by_phone_number' => 'setClaimedByPhoneNumber',
        'redeemed_source' => 'setRedeemedSource',
        'redeemed_transaction_id' => 'setRedeemedTransactionId',
        'transaction_type' => 'setTransactionType',
        'register_id' => 'setRegisterId',
        'is_redeemed' => 'setIsRedeemed',
        'date_time_redeemed' => 'setDateTimeRedeemed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_phone_number' => 'getRecipientPhoneNumber',
        'recipient_email_address' => 'getRecipientEmailAddress',
        'recipient_member_id' => 'getRecipientMemberId',
        'is_comp' => 'getIsComp',
        'performance_id' => 'getPerformanceId',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'merchant_id' => 'getMerchantId',
        'is_claimed' => 'getIsClaimed',
        'date_time_claimed' => 'getDateTimeClaimed',
        'claimed_by_phone_number' => 'getClaimedByPhoneNumber',
        'redeemed_source' => 'getRedeemedSource',
        'redeemed_transaction_id' => 'getRedeemedTransactionId',
        'transaction_type' => 'getTransactionType',
        'register_id' => 'getRegisterId',
        'is_redeemed' => 'getIsRedeemed',
        'date_time_redeemed' => 'getDateTimeRedeemed'
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
        $this->container['recipient_phone_number'] = $data['recipient_phone_number'] ?? null;
        $this->container['recipient_email_address'] = $data['recipient_email_address'] ?? null;
        $this->container['recipient_member_id'] = $data['recipient_member_id'] ?? null;
        $this->container['is_comp'] = $data['is_comp'] ?? null;
        $this->container['performance_id'] = $data['performance_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['is_claimed'] = $data['is_claimed'] ?? null;
        $this->container['date_time_claimed'] = $data['date_time_claimed'] ?? null;
        $this->container['claimed_by_phone_number'] = $data['claimed_by_phone_number'] ?? null;
        $this->container['redeemed_source'] = $data['redeemed_source'] ?? null;
        $this->container['redeemed_transaction_id'] = $data['redeemed_transaction_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['register_id'] = $data['register_id'] ?? null;
        $this->container['is_redeemed'] = $data['is_redeemed'] ?? null;
        $this->container['date_time_redeemed'] = $data['date_time_redeemed'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['performance_id'] === null) {
            $invalidProperties[] = "'performance_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets recipient_phone_number
     *
     * @return string|null
     */
    public function getRecipientPhoneNumber()
    {
        return $this->container['recipient_phone_number'];
    }

    /**
     * Sets recipient_phone_number
     *
     * @param string|null $recipient_phone_number recipient_phone_number
     *
     * @return self
     */
    public function setRecipientPhoneNumber($recipient_phone_number)
    {
        $this->container['recipient_phone_number'] = $recipient_phone_number;

        return $this;
    }

    /**
     * Gets recipient_email_address
     *
     * @return string|null
     */
    public function getRecipientEmailAddress()
    {
        return $this->container['recipient_email_address'];
    }

    /**
     * Sets recipient_email_address
     *
     * @param string|null $recipient_email_address recipient_email_address
     *
     * @return self
     */
    public function setRecipientEmailAddress($recipient_email_address)
    {
        $this->container['recipient_email_address'] = $recipient_email_address;

        return $this;
    }

    /**
     * Gets recipient_member_id
     *
     * @return string|null
     */
    public function getRecipientMemberId()
    {
        return $this->container['recipient_member_id'];
    }

    /**
     * Sets recipient_member_id
     *
     * @param string|null $recipient_member_id recipient_member_id
     *
     * @return self
     */
    public function setRecipientMemberId($recipient_member_id)
    {
        $this->container['recipient_member_id'] = $recipient_member_id;

        return $this;
    }

    /**
     * Gets is_comp
     *
     * @return bool|null
     */
    public function getIsComp()
    {
        return $this->container['is_comp'];
    }

    /**
     * Sets is_comp
     *
     * @param bool|null $is_comp is_comp
     *
     * @return self
     */
    public function setIsComp($is_comp)
    {
        $this->container['is_comp'] = $is_comp;

        return $this;
    }

    /**
     * Gets performance_id
     *
     * @return string
     */
    public function getPerformanceId()
    {
        return $this->container['performance_id'];
    }

    /**
     * Sets performance_id
     *
     * @param string $performance_id performance_id
     *
     * @return self
     */
    public function setPerformanceId($performance_id)
    {
        $this->container['performance_id'] = $performance_id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling Ticket., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling Ticket., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling Ticket., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets is_claimed
     *
     * @return bool|null
     */
    public function getIsClaimed()
    {
        return $this->container['is_claimed'];
    }

    /**
     * Sets is_claimed
     *
     * @param bool|null $is_claimed is_claimed
     *
     * @return self
     */
    public function setIsClaimed($is_claimed)
    {
        $this->container['is_claimed'] = $is_claimed;

        return $this;
    }

    /**
     * Gets date_time_claimed
     *
     * @return \DateTime|null
     */
    public function getDateTimeClaimed()
    {
        return $this->container['date_time_claimed'];
    }

    /**
     * Sets date_time_claimed
     *
     * @param \DateTime|null $date_time_claimed date_time_claimed
     *
     * @return self
     */
    public function setDateTimeClaimed($date_time_claimed)
    {
        $this->container['date_time_claimed'] = $date_time_claimed;

        return $this;
    }

    /**
     * Gets claimed_by_phone_number
     *
     * @return string|null
     */
    public function getClaimedByPhoneNumber()
    {
        return $this->container['claimed_by_phone_number'];
    }

    /**
     * Sets claimed_by_phone_number
     *
     * @param string|null $claimed_by_phone_number claimed_by_phone_number
     *
     * @return self
     */
    public function setClaimedByPhoneNumber($claimed_by_phone_number)
    {
        $this->container['claimed_by_phone_number'] = $claimed_by_phone_number;

        return $this;
    }

    /**
     * Gets redeemed_source
     *
     * @return string|null
     */
    public function getRedeemedSource()
    {
        return $this->container['redeemed_source'];
    }

    /**
     * Sets redeemed_source
     *
     * @param string|null $redeemed_source redeemed_source
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
     * @return string|null
     */
    public function getRedeemedTransactionId()
    {
        return $this->container['redeemed_transaction_id'];
    }

    /**
     * Sets redeemed_transaction_id
     *
     * @param string|null $redeemed_transaction_id redeemed_transaction_id
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
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type transaction_type
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
     * @return string|null
     */
    public function getRegisterId()
    {
        return $this->container['register_id'];
    }

    /**
     * Sets register_id
     *
     * @param string|null $register_id register_id
     *
     * @return self
     */
    public function setRegisterId($register_id)
    {
        $this->container['register_id'] = $register_id;

        return $this;
    }

    /**
     * Gets is_redeemed
     *
     * @return bool|null
     */
    public function getIsRedeemed()
    {
        return $this->container['is_redeemed'];
    }

    /**
     * Sets is_redeemed
     *
     * @param bool|null $is_redeemed is_redeemed
     *
     * @return self
     */
    public function setIsRedeemed($is_redeemed)
    {
        $this->container['is_redeemed'] = $is_redeemed;

        return $this;
    }

    /**
     * Gets date_time_redeemed
     *
     * @return \DateTime|null
     */
    public function getDateTimeRedeemed()
    {
        return $this->container['date_time_redeemed'];
    }

    /**
     * Sets date_time_redeemed
     *
     * @param \DateTime|null $date_time_redeemed date_time_redeemed
     *
     * @return self
     */
    public function setDateTimeRedeemed($date_time_redeemed)
    {
        $this->container['date_time_redeemed'] = $date_time_redeemed;

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


