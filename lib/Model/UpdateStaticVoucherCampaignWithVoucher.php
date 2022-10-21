<?php
/**
 * UpdateStaticVoucherCampaignWithVoucher
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
 * The version of the OpenAPI document: 2.1.517
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
 * UpdateStaticVoucherCampaignWithVoucher Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateStaticVoucherCampaignWithVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateStaticVoucherCampaignWithVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'notes' => 'string',
        'value_type' => 'string',
        'display_value' => 'string',
        'merchants_reference_id' => 'string',
        'valid_only_at_pos_register_ids' => 'string[]',
        'payment_design_id' => 'string',
        'is_active' => 'bool',
        'start_date_time' => '\DateTime',
        'expiration_date_time' => '\DateTime',
        'member_id' => 'string',
        'offer_amount_cents' => 'int',
        'cell_phone' => 'string',
        'voucher_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'notes' => null,
        'value_type' => null,
        'display_value' => null,
        'merchants_reference_id' => null,
        'valid_only_at_pos_register_ids' => null,
        'payment_design_id' => null,
        'is_active' => null,
        'start_date_time' => 'date-time',
        'expiration_date_time' => 'date-time',
        'member_id' => null,
        'offer_amount_cents' => 'int32',
        'cell_phone' => null,
        'voucher_id' => null
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
        'title' => 'title',
        'notes' => 'notes',
        'value_type' => 'valueType',
        'display_value' => 'displayValue',
        'merchants_reference_id' => 'merchantsReferenceID',
        'valid_only_at_pos_register_ids' => 'validOnlyAtPOSRegisterIDs',
        'payment_design_id' => 'paymentDesignID',
        'is_active' => 'isActive',
        'start_date_time' => 'startDateTime',
        'expiration_date_time' => 'expirationDateTime',
        'member_id' => 'memberID',
        'offer_amount_cents' => 'offerAmountCents',
        'cell_phone' => 'cellPhone',
        'voucher_id' => 'voucherID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'notes' => 'setNotes',
        'value_type' => 'setValueType',
        'display_value' => 'setDisplayValue',
        'merchants_reference_id' => 'setMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'setValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'setPaymentDesignId',
        'is_active' => 'setIsActive',
        'start_date_time' => 'setStartDateTime',
        'expiration_date_time' => 'setExpirationDateTime',
        'member_id' => 'setMemberId',
        'offer_amount_cents' => 'setOfferAmountCents',
        'cell_phone' => 'setCellPhone',
        'voucher_id' => 'setVoucherId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'notes' => 'getNotes',
        'value_type' => 'getValueType',
        'display_value' => 'getDisplayValue',
        'merchants_reference_id' => 'getMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'getValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'getPaymentDesignId',
        'is_active' => 'getIsActive',
        'start_date_time' => 'getStartDateTime',
        'expiration_date_time' => 'getExpirationDateTime',
        'member_id' => 'getMemberId',
        'offer_amount_cents' => 'getOfferAmountCents',
        'cell_phone' => 'getCellPhone',
        'voucher_id' => 'getVoucherId'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['value_type'] = $data['value_type'] ?? null;
        $this->container['display_value'] = $data['display_value'] ?? null;
        $this->container['merchants_reference_id'] = $data['merchants_reference_id'] ?? null;
        $this->container['valid_only_at_pos_register_ids'] = $data['valid_only_at_pos_register_ids'] ?? null;
        $this->container['payment_design_id'] = $data['payment_design_id'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['expiration_date_time'] = $data['expiration_date_time'] ?? null;
        $this->container['member_id'] = $data['member_id'] ?? null;
        $this->container['offer_amount_cents'] = $data['offer_amount_cents'] ?? null;
        $this->container['cell_phone'] = $data['cell_phone'] ?? null;
        $this->container['voucher_id'] = $data['voucher_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['value_type'] === null) {
            $invalidProperties[] = "'value_type' can't be null";
        }
        if ($this->container['payment_design_id'] === null) {
            $invalidProperties[] = "'payment_design_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_design_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'payment_design_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['payment_design_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'payment_design_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['payment_design_id'])) {
            $invalidProperties[] = "invalid value for 'payment_design_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if ($this->container['expiration_date_time'] === null) {
            $invalidProperties[] = "'expiration_date_time' can't be null";
        }
        if (!is_null($this->container['member_id']) && !preg_match("/^[a-zA-Z0-9]*$/", $this->container['member_id'])) {
            $invalidProperties[] = "invalid value for 'member_id', must be conform to the pattern /^[a-zA-Z0-9]*$/.";
        }

        if ($this->container['offer_amount_cents'] === null) {
            $invalidProperties[] = "'offer_amount_cents' can't be null";
        }
        if (($this->container['offer_amount_cents'] < 0)) {
            $invalidProperties[] = "invalid value for 'offer_amount_cents', must be bigger than or equal to 0.";
        }

        if ($this->container['voucher_id'] === null) {
            $invalidProperties[] = "'voucher_id' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling UpdateStaticVoucherCampaignWithVoucher., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param string $value_type value_type
     *
     * @return self
     */
    public function setValueType($value_type)
    {
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets display_value
     *
     * @return string|null
     */
    public function getDisplayValue()
    {
        return $this->container['display_value'];
    }

    /**
     * Sets display_value
     *
     * @param string|null $display_value display_value
     *
     * @return self
     */
    public function setDisplayValue($display_value)
    {
        $this->container['display_value'] = $display_value;

        return $this;
    }

    /**
     * Gets merchants_reference_id
     *
     * @return string|null
     */
    public function getMerchantsReferenceId()
    {
        return $this->container['merchants_reference_id'];
    }

    /**
     * Sets merchants_reference_id
     *
     * @param string|null $merchants_reference_id merchants_reference_id
     *
     * @return self
     */
    public function setMerchantsReferenceId($merchants_reference_id)
    {
        $this->container['merchants_reference_id'] = $merchants_reference_id;

        return $this;
    }

    /**
     * Gets valid_only_at_pos_register_ids
     *
     * @return string[]|null
     */
    public function getValidOnlyAtPosRegisterIds()
    {
        return $this->container['valid_only_at_pos_register_ids'];
    }

    /**
     * Sets valid_only_at_pos_register_ids
     *
     * @param string[]|null $valid_only_at_pos_register_ids valid_only_at_pos_register_ids
     *
     * @return self
     */
    public function setValidOnlyAtPosRegisterIds($valid_only_at_pos_register_ids)
    {
        $this->container['valid_only_at_pos_register_ids'] = $valid_only_at_pos_register_ids;

        return $this;
    }

    /**
     * Gets payment_design_id
     *
     * @return string
     */
    public function getPaymentDesignId()
    {
        return $this->container['payment_design_id'];
    }

    /**
     * Sets payment_design_id
     *
     * @param string $payment_design_id payment_design_id
     *
     * @return self
     */
    public function setPaymentDesignId($payment_design_id)
    {
        if ((mb_strlen($payment_design_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling UpdateStaticVoucherCampaignWithVoucher., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling UpdateStaticVoucherCampaignWithVoucher., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling UpdateStaticVoucherCampaignWithVoucher., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_design_id'] = $payment_design_id;

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
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time start_date_time
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets expiration_date_time
     *
     * @return \DateTime
     */
    public function getExpirationDateTime()
    {
        return $this->container['expiration_date_time'];
    }

    /**
     * Sets expiration_date_time
     *
     * @param \DateTime $expiration_date_time expiration_date_time
     *
     * @return self
     */
    public function setExpirationDateTime($expiration_date_time)
    {
        $this->container['expiration_date_time'] = $expiration_date_time;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string|null $member_id member_id
     *
     * @return self
     */
    public function setMemberId($member_id)
    {

        if (!is_null($member_id) && (!preg_match("/^[a-zA-Z0-9]*$/", $member_id))) {
            throw new \InvalidArgumentException("invalid value for $member_id when calling UpdateStaticVoucherCampaignWithVoucher., must conform to the pattern /^[a-zA-Z0-9]*$/.");
        }

        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets offer_amount_cents
     *
     * @return int
     */
    public function getOfferAmountCents()
    {
        return $this->container['offer_amount_cents'];
    }

    /**
     * Sets offer_amount_cents
     *
     * @param int $offer_amount_cents offer_amount_cents
     *
     * @return self
     */
    public function setOfferAmountCents($offer_amount_cents)
    {

        if (($offer_amount_cents < 0)) {
            throw new \InvalidArgumentException('invalid value for $offer_amount_cents when calling UpdateStaticVoucherCampaignWithVoucher., must be bigger than or equal to 0.');
        }

        $this->container['offer_amount_cents'] = $offer_amount_cents;

        return $this;
    }

    /**
     * Gets cell_phone
     *
     * @return string|null
     */
    public function getCellPhone()
    {
        return $this->container['cell_phone'];
    }

    /**
     * Sets cell_phone
     *
     * @param string|null $cell_phone cell_phone
     *
     * @return self
     */
    public function setCellPhone($cell_phone)
    {
        $this->container['cell_phone'] = $cell_phone;

        return $this;
    }

    /**
     * Gets voucher_id
     *
     * @return string
     */
    public function getVoucherId()
    {
        return $this->container['voucher_id'];
    }

    /**
     * Sets voucher_id
     *
     * @param string $voucher_id voucher_id
     *
     * @return self
     */
    public function setVoucherId($voucher_id)
    {
        $this->container['voucher_id'] = $voucher_id;

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


