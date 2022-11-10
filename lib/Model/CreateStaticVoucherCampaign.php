<?php
/**
 * CreateStaticVoucherCampaign
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
 * CreateStaticVoucherCampaign Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateStaticVoucherCampaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createStaticVoucherCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date_time' => '\DateTime',
        'expiration_date_time' => '\DateTime',
        'title' => 'string',
        'notes' => 'string',
        'value_type' => 'string',
        'display_value' => 'string',
        'merchants_reference_id' => 'string',
        'valid_only_at_pos_register_ids' => 'string[]',
        'payment_design_id' => 'string',
        'is_active' => 'bool',
        'bucket' => 'string',
        'file_name' => 'string',
        'source_id' => 'int',
        'campaign_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date_time' => 'date-time',
        'expiration_date_time' => 'date-time',
        'title' => null,
        'notes' => null,
        'value_type' => null,
        'display_value' => null,
        'merchants_reference_id' => null,
        'valid_only_at_pos_register_ids' => null,
        'payment_design_id' => null,
        'is_active' => null,
        'bucket' => null,
        'file_name' => null,
        'source_id' => 'int32',
        'campaign_group_id' => null
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
        'start_date_time' => 'startDateTime',
        'expiration_date_time' => 'expirationDateTime',
        'title' => 'title',
        'notes' => 'notes',
        'value_type' => 'valueType',
        'display_value' => 'displayValue',
        'merchants_reference_id' => 'merchantsReferenceID',
        'valid_only_at_pos_register_ids' => 'validOnlyAtPOSRegisterIDs',
        'payment_design_id' => 'paymentDesignID',
        'is_active' => 'isActive',
        'bucket' => 'bucket',
        'file_name' => 'fileName',
        'source_id' => 'sourceID',
        'campaign_group_id' => 'campaignGroupID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date_time' => 'setStartDateTime',
        'expiration_date_time' => 'setExpirationDateTime',
        'title' => 'setTitle',
        'notes' => 'setNotes',
        'value_type' => 'setValueType',
        'display_value' => 'setDisplayValue',
        'merchants_reference_id' => 'setMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'setValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'setPaymentDesignId',
        'is_active' => 'setIsActive',
        'bucket' => 'setBucket',
        'file_name' => 'setFileName',
        'source_id' => 'setSourceId',
        'campaign_group_id' => 'setCampaignGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date_time' => 'getStartDateTime',
        'expiration_date_time' => 'getExpirationDateTime',
        'title' => 'getTitle',
        'notes' => 'getNotes',
        'value_type' => 'getValueType',
        'display_value' => 'getDisplayValue',
        'merchants_reference_id' => 'getMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'getValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'getPaymentDesignId',
        'is_active' => 'getIsActive',
        'bucket' => 'getBucket',
        'file_name' => 'getFileName',
        'source_id' => 'getSourceId',
        'campaign_group_id' => 'getCampaignGroupId'
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
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['expiration_date_time'] = $data['expiration_date_time'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['value_type'] = $data['value_type'] ?? null;
        $this->container['display_value'] = $data['display_value'] ?? null;
        $this->container['merchants_reference_id'] = $data['merchants_reference_id'] ?? null;
        $this->container['valid_only_at_pos_register_ids'] = $data['valid_only_at_pos_register_ids'] ?? null;
        $this->container['payment_design_id'] = $data['payment_design_id'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['bucket'] = $data['bucket'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['campaign_group_id'] = $data['campaign_group_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if ($this->container['expiration_date_time'] === null) {
            $invalidProperties[] = "'expiration_date_time' can't be null";
        }
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
        if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 1)) {
            $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['source_id'] === null) {
            $invalidProperties[] = "'source_id' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $title when calling CreateStaticVoucherCampaign., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling CreateStaticVoucherCampaign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling CreateStaticVoucherCampaign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling CreateStaticVoucherCampaign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets bucket
     *
     * @return string|null
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param string|null $bucket bucket
     *
     * @return self
     */
    public function setBucket($bucket)
    {

        if (!is_null($bucket) && (mb_strlen($bucket) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bucket when calling CreateStaticVoucherCampaign., must be bigger than or equal to 1.');
        }

        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {

        if (!is_null($file_name) && (mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling CreateStaticVoucherCampaign., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return int
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param int $source_id source_id
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets campaign_group_id
     *
     * @return string|null
     */
    public function getCampaignGroupId()
    {
        return $this->container['campaign_group_id'];
    }

    /**
     * Sets campaign_group_id
     *
     * @param string|null $campaign_group_id campaign_group_id
     *
     * @return self
     */
    public function setCampaignGroupId($campaign_group_id)
    {
        $this->container['campaign_group_id'] = $campaign_group_id;

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


