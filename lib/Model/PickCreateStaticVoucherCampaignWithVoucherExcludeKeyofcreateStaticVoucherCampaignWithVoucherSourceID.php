<?php
/**
 * PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID
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
 * PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID Class Doc Comment
 *
 * @category Class
 * @description From T, pick a set of properties whose keys are in the union K
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pick_createStaticVoucherCampaignWithVoucher.Exclude_keyofcreateStaticVoucherCampaignWithVoucher.sourceID__';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'notes' => 'string',
        'value_type' => '\OpenAPI\Client\Model\PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDateValueType',
        'display_value' => 'string',
        'merchants_reference_id' => 'string',
        'valid_only_at_pos_register_ids' => 'string[]',
        'payment_design_id' => 'string',
        'start_date_time' => '\DateTime',
        'expiration_date_time' => '\DateTime',
        'member_id' => 'string',
        'offer_amount_cents' => 'int',
        'cell_phone' => 'string'
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
        'start_date_time' => 'date-time',
        'expiration_date_time' => 'date-time',
        'member_id' => null,
        'offer_amount_cents' => 'int32',
        'cell_phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'notes' => false,
        'value_type' => false,
        'display_value' => false,
        'merchants_reference_id' => false,
        'valid_only_at_pos_register_ids' => false,
        'payment_design_id' => false,
        'start_date_time' => false,
        'expiration_date_time' => false,
        'member_id' => false,
        'offer_amount_cents' => false,
        'cell_phone' => false
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
        'title' => 'title',
        'notes' => 'notes',
        'value_type' => 'valueType',
        'display_value' => 'displayValue',
        'merchants_reference_id' => 'merchantsReferenceID',
        'valid_only_at_pos_register_ids' => 'validOnlyAtPOSRegisterIDs',
        'payment_design_id' => 'paymentDesignID',
        'start_date_time' => 'startDateTime',
        'expiration_date_time' => 'expirationDateTime',
        'member_id' => 'memberID',
        'offer_amount_cents' => 'offerAmountCents',
        'cell_phone' => 'cellPhone'
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
        'start_date_time' => 'setStartDateTime',
        'expiration_date_time' => 'setExpirationDateTime',
        'member_id' => 'setMemberId',
        'offer_amount_cents' => 'setOfferAmountCents',
        'cell_phone' => 'setCellPhone'
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
        'start_date_time' => 'getStartDateTime',
        'expiration_date_time' => 'getExpirationDateTime',
        'member_id' => 'getMemberId',
        'offer_amount_cents' => 'getOfferAmountCents',
        'cell_phone' => 'getCellPhone'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('value_type', $data ?? [], null);
        $this->setIfExists('display_value', $data ?? [], null);
        $this->setIfExists('merchants_reference_id', $data ?? [], null);
        $this->setIfExists('valid_only_at_pos_register_ids', $data ?? [], null);
        $this->setIfExists('payment_design_id', $data ?? [], null);
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('expiration_date_time', $data ?? [], null);
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('offer_amount_cents', $data ?? [], null);
        $this->setIfExists('cell_phone', $data ?? [], null);
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
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must be bigger than or equal to 1.');
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
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return \OpenAPI\Client\Model\PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDateValueType
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param \OpenAPI\Client\Model\PickVSCampaignUpdateParamsExcludeKeyofVSCampaignUpdateParamsStartDateOrExpirationDateValueType $value_type value_type
     *
     * @return self
     */
    public function setValueType($value_type)
    {
        if (is_null($value_type)) {
            throw new \InvalidArgumentException('non-nullable value_type cannot be null');
        }
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
        if (is_null($display_value)) {
            throw new \InvalidArgumentException('non-nullable display_value cannot be null');
        }
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
        if (is_null($merchants_reference_id)) {
            throw new \InvalidArgumentException('non-nullable merchants_reference_id cannot be null');
        }
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
        if (is_null($valid_only_at_pos_register_ids)) {
            throw new \InvalidArgumentException('non-nullable valid_only_at_pos_register_ids cannot be null');
        }
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
        if (is_null($payment_design_id)) {
            throw new \InvalidArgumentException('non-nullable payment_design_id cannot be null');
        }
        if ((mb_strlen($payment_design_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($payment_design_id)))) {
            throw new \InvalidArgumentException("invalid value for \$payment_design_id when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_design_id'] = $payment_design_id;

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
        if (is_null($start_date_time)) {
            throw new \InvalidArgumentException('non-nullable start_date_time cannot be null');
        }
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
        if (is_null($expiration_date_time)) {
            throw new \InvalidArgumentException('non-nullable expiration_date_time cannot be null');
        }
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
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }

        if ((!preg_match("/^[a-zA-Z0-9]*$/", ObjectSerializer::toString($member_id)))) {
            throw new \InvalidArgumentException("invalid value for \$member_id when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must conform to the pattern /^[a-zA-Z0-9]*$/.");
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
        if (is_null($offer_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable offer_amount_cents cannot be null');
        }

        if (($offer_amount_cents < 0)) {
            throw new \InvalidArgumentException('invalid value for $offer_amount_cents when calling PickCreateStaticVoucherCampaignWithVoucherExcludeKeyofcreateStaticVoucherCampaignWithVoucherSourceID., must be bigger than or equal to 0.');
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
        if (is_null($cell_phone)) {
            throw new \InvalidArgumentException('non-nullable cell_phone cannot be null');
        }
        $this->container['cell_phone'] = $cell_phone;

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


