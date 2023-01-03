<?php
/**
 * InlineResponse2009
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
 * The version of the OpenAPI document: 2.1.528
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
 * InlineResponse2009 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2009 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_design' => '\OpenAPI\Client\Model\PaymentDesign',
        'value_type' => 'string',
        'voucher_type' => 'double',
        'expiration_date' => '\DateTime',
        'start_date' => '\DateTime',
        'title' => 'string',
        'is_redeemed' => 'bool',
        'display_value' => 'string',
        'offer_amount_cents_decimal' => 'string',
        'offer_amount_cents' => 'double',
        'member_id' => 'string',
        'cell_phone_number' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_design' => null,
        'value_type' => null,
        'voucher_type' => 'double',
        'expiration_date' => 'date-time',
        'start_date' => 'date-time',
        'title' => null,
        'is_redeemed' => null,
        'display_value' => null,
        'offer_amount_cents_decimal' => null,
        'offer_amount_cents' => 'double',
        'member_id' => null,
        'cell_phone_number' => null,
        'id' => null
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
        'payment_design' => 'PaymentDesign',
        'value_type' => 'ValueType',
        'voucher_type' => 'VoucherType',
        'expiration_date' => 'ExpirationDate',
        'start_date' => 'StartDate',
        'title' => 'Title',
        'is_redeemed' => 'IsRedeemed',
        'display_value' => 'DisplayValue',
        'offer_amount_cents_decimal' => 'OfferAmountCents_decimal',
        'offer_amount_cents' => 'OfferAmountCents',
        'member_id' => 'MemberID',
        'cell_phone_number' => 'CellPhoneNumber',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_design' => 'setPaymentDesign',
        'value_type' => 'setValueType',
        'voucher_type' => 'setVoucherType',
        'expiration_date' => 'setExpirationDate',
        'start_date' => 'setStartDate',
        'title' => 'setTitle',
        'is_redeemed' => 'setIsRedeemed',
        'display_value' => 'setDisplayValue',
        'offer_amount_cents_decimal' => 'setOfferAmountCentsDecimal',
        'offer_amount_cents' => 'setOfferAmountCents',
        'member_id' => 'setMemberId',
        'cell_phone_number' => 'setCellPhoneNumber',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_design' => 'getPaymentDesign',
        'value_type' => 'getValueType',
        'voucher_type' => 'getVoucherType',
        'expiration_date' => 'getExpirationDate',
        'start_date' => 'getStartDate',
        'title' => 'getTitle',
        'is_redeemed' => 'getIsRedeemed',
        'display_value' => 'getDisplayValue',
        'offer_amount_cents_decimal' => 'getOfferAmountCentsDecimal',
        'offer_amount_cents' => 'getOfferAmountCents',
        'member_id' => 'getMemberId',
        'cell_phone_number' => 'getCellPhoneNumber',
        'id' => 'getId'
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
        $this->container['payment_design'] = $data['payment_design'] ?? null;
        $this->container['value_type'] = $data['value_type'] ?? null;
        $this->container['voucher_type'] = $data['voucher_type'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['is_redeemed'] = $data['is_redeemed'] ?? null;
        $this->container['display_value'] = $data['display_value'] ?? null;
        $this->container['offer_amount_cents_decimal'] = $data['offer_amount_cents_decimal'] ?? null;
        $this->container['offer_amount_cents'] = $data['offer_amount_cents'] ?? null;
        $this->container['member_id'] = $data['member_id'] ?? null;
        $this->container['cell_phone_number'] = $data['cell_phone_number'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_design'] === null) {
            $invalidProperties[] = "'payment_design' can't be null";
        }
        if ($this->container['value_type'] === null) {
            $invalidProperties[] = "'value_type' can't be null";
        }
        if ($this->container['voucher_type'] === null) {
            $invalidProperties[] = "'voucher_type' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['is_redeemed'] === null) {
            $invalidProperties[] = "'is_redeemed' can't be null";
        }
        if ($this->container['display_value'] === null) {
            $invalidProperties[] = "'display_value' can't be null";
        }
        if ($this->container['offer_amount_cents_decimal'] === null) {
            $invalidProperties[] = "'offer_amount_cents_decimal' can't be null";
        }
        if ($this->container['offer_amount_cents'] === null) {
            $invalidProperties[] = "'offer_amount_cents' can't be null";
        }
        if ($this->container['member_id'] === null) {
            $invalidProperties[] = "'member_id' can't be null";
        }
        if ($this->container['cell_phone_number'] === null) {
            $invalidProperties[] = "'cell_phone_number' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets payment_design
     *
     * @return \OpenAPI\Client\Model\PaymentDesign
     */
    public function getPaymentDesign()
    {
        return $this->container['payment_design'];
    }

    /**
     * Sets payment_design
     *
     * @param \OpenAPI\Client\Model\PaymentDesign $payment_design payment_design
     *
     * @return self
     */
    public function setPaymentDesign($payment_design)
    {
        $this->container['payment_design'] = $payment_design;

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
     * Gets voucher_type
     *
     * @return double
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param double $voucher_type voucher_type
     *
     * @return self
     */
    public function setVoucherType($voucher_type)
    {
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
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
        $this->container['title'] = $title;

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
     * Gets display_value
     *
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->container['display_value'];
    }

    /**
     * Sets display_value
     *
     * @param string $display_value display_value
     *
     * @return self
     */
    public function setDisplayValue($display_value)
    {
        $this->container['display_value'] = $display_value;

        return $this;
    }

    /**
     * Gets offer_amount_cents_decimal
     *
     * @return string
     */
    public function getOfferAmountCentsDecimal()
    {
        return $this->container['offer_amount_cents_decimal'];
    }

    /**
     * Sets offer_amount_cents_decimal
     *
     * @param string $offer_amount_cents_decimal offer_amount_cents_decimal
     *
     * @return self
     */
    public function setOfferAmountCentsDecimal($offer_amount_cents_decimal)
    {
        $this->container['offer_amount_cents_decimal'] = $offer_amount_cents_decimal;

        return $this;
    }

    /**
     * Gets offer_amount_cents
     *
     * @return double
     */
    public function getOfferAmountCents()
    {
        return $this->container['offer_amount_cents'];
    }

    /**
     * Sets offer_amount_cents
     *
     * @param double $offer_amount_cents offer_amount_cents
     *
     * @return self
     */
    public function setOfferAmountCents($offer_amount_cents)
    {
        $this->container['offer_amount_cents'] = $offer_amount_cents;

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
     * @param string $member_id member_id
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets cell_phone_number
     *
     * @return string
     */
    public function getCellPhoneNumber()
    {
        return $this->container['cell_phone_number'];
    }

    /**
     * Sets cell_phone_number
     *
     * @param string $cell_phone_number cell_phone_number
     *
     * @return self
     */
    public function setCellPhoneNumber($cell_phone_number)
    {
        $this->container['cell_phone_number'] = $cell_phone_number;

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


