<?php
/**
 * StaticVoucherCampaign
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
 * The version of the OpenAPI document: 2.1.522
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
 * StaticVoucherCampaign Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StaticVoucherCampaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StaticVoucherCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'title' => 'string',
        'notes' => 'string',
        'value_type' => 'string',
        'is_loaded' => 'bool',
        'display_value' => 'string',
        'merchants_reference_id' => 'string',
        'valid_only_at_pos_register_ids' => 'string[]',
        'payment_design_id' => 'string',
        'employee_id' => 'string',
        'reinvestment_sum' => 'int',
        'number_of_vouchers_in_file' => 'int',
        'is_active' => 'bool',
        'campaign_group_id' => 'string',
        'bucket' => 'string',
        'created_by_source_id' => 'int',
        'original_file_name' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'voucher_type' => 'double',
        'reinvestment_sum_decimal' => 'string',
        'reinvestment_sum_string' => 'string',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime'
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
        'title' => null,
        'notes' => null,
        'value_type' => null,
        'is_loaded' => null,
        'display_value' => null,
        'merchants_reference_id' => null,
        'valid_only_at_pos_register_ids' => null,
        'payment_design_id' => null,
        'employee_id' => null,
        'reinvestment_sum' => 'int32',
        'number_of_vouchers_in_file' => 'int32',
        'is_active' => null,
        'campaign_group_id' => null,
        'bucket' => null,
        'created_by_source_id' => 'int32',
        'original_file_name' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'voucher_type' => 'double',
        'reinvestment_sum_decimal' => null,
        'reinvestment_sum_string' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time'
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
        'title' => 'title',
        'notes' => 'notes',
        'value_type' => 'valueType',
        'is_loaded' => 'isLoaded',
        'display_value' => 'displayValue',
        'merchants_reference_id' => 'merchantsReferenceID',
        'valid_only_at_pos_register_ids' => 'validOnlyAtPOSRegisterIDs',
        'payment_design_id' => 'paymentDesignID',
        'employee_id' => 'employeeID',
        'reinvestment_sum' => 'reinvestmentSum',
        'number_of_vouchers_in_file' => 'numberOfVouchersInFile',
        'is_active' => 'isActive',
        'campaign_group_id' => 'campaignGroupID',
        'bucket' => 'bucket',
        'created_by_source_id' => 'createdBySourceID',
        'original_file_name' => 'originalFileName',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'voucher_type' => 'voucherType',
        'reinvestment_sum_decimal' => 'reinvestmentSum_decimal',
        'reinvestment_sum_string' => 'reinvestmentSum_string',
        'start_date' => 'startDate',
        'expiration_date' => 'expirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'notes' => 'setNotes',
        'value_type' => 'setValueType',
        'is_loaded' => 'setIsLoaded',
        'display_value' => 'setDisplayValue',
        'merchants_reference_id' => 'setMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'setValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'setPaymentDesignId',
        'employee_id' => 'setEmployeeId',
        'reinvestment_sum' => 'setReinvestmentSum',
        'number_of_vouchers_in_file' => 'setNumberOfVouchersInFile',
        'is_active' => 'setIsActive',
        'campaign_group_id' => 'setCampaignGroupId',
        'bucket' => 'setBucket',
        'created_by_source_id' => 'setCreatedBySourceId',
        'original_file_name' => 'setOriginalFileName',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'voucher_type' => 'setVoucherType',
        'reinvestment_sum_decimal' => 'setReinvestmentSumDecimal',
        'reinvestment_sum_string' => 'setReinvestmentSumString',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'notes' => 'getNotes',
        'value_type' => 'getValueType',
        'is_loaded' => 'getIsLoaded',
        'display_value' => 'getDisplayValue',
        'merchants_reference_id' => 'getMerchantsReferenceId',
        'valid_only_at_pos_register_ids' => 'getValidOnlyAtPosRegisterIds',
        'payment_design_id' => 'getPaymentDesignId',
        'employee_id' => 'getEmployeeId',
        'reinvestment_sum' => 'getReinvestmentSum',
        'number_of_vouchers_in_file' => 'getNumberOfVouchersInFile',
        'is_active' => 'getIsActive',
        'campaign_group_id' => 'getCampaignGroupId',
        'bucket' => 'getBucket',
        'created_by_source_id' => 'getCreatedBySourceId',
        'original_file_name' => 'getOriginalFileName',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'voucher_type' => 'getVoucherType',
        'reinvestment_sum_decimal' => 'getReinvestmentSumDecimal',
        'reinvestment_sum_string' => 'getReinvestmentSumString',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['value_type'] = $data['value_type'] ?? null;
        $this->container['is_loaded'] = $data['is_loaded'] ?? null;
        $this->container['display_value'] = $data['display_value'] ?? null;
        $this->container['merchants_reference_id'] = $data['merchants_reference_id'] ?? null;
        $this->container['valid_only_at_pos_register_ids'] = $data['valid_only_at_pos_register_ids'] ?? null;
        $this->container['payment_design_id'] = $data['payment_design_id'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['reinvestment_sum'] = $data['reinvestment_sum'] ?? null;
        $this->container['number_of_vouchers_in_file'] = $data['number_of_vouchers_in_file'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['campaign_group_id'] = $data['campaign_group_id'] ?? null;
        $this->container['bucket'] = $data['bucket'] ?? null;
        $this->container['created_by_source_id'] = $data['created_by_source_id'] ?? null;
        $this->container['original_file_name'] = $data['original_file_name'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['voucher_type'] = $data['voucher_type'] ?? null;
        $this->container['reinvestment_sum_decimal'] = $data['reinvestment_sum_decimal'] ?? null;
        $this->container['reinvestment_sum_string'] = $data['reinvestment_sum_string'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
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
        if ($this->container['is_loaded'] === null) {
            $invalidProperties[] = "'is_loaded' can't be null";
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

        if ($this->container['reinvestment_sum'] === null) {
            $invalidProperties[] = "'reinvestment_sum' can't be null";
        }
        if (($this->container['reinvestment_sum'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinvestment_sum', must be bigger than or equal to 0.";
        }

        if ($this->container['number_of_vouchers_in_file'] === null) {
            $invalidProperties[] = "'number_of_vouchers_in_file' can't be null";
        }
        if (($this->container['number_of_vouchers_in_file'] < 0)) {
            $invalidProperties[] = "invalid value for 'number_of_vouchers_in_file', must be bigger than or equal to 0.";
        }

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if (!is_null($this->container['campaign_group_id']) && (mb_strlen($this->container['campaign_group_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'campaign_group_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['campaign_group_id']) && (mb_strlen($this->container['campaign_group_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'campaign_group_id', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['campaign_group_id']) && !preg_match("/^[a-zA-Z0-9]+$/", $this->container['campaign_group_id'])) {
            $invalidProperties[] = "invalid value for 'campaign_group_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['created_by_source_id'] === null) {
            $invalidProperties[] = "'created_by_source_id' can't be null";
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
        if ($this->container['voucher_type'] === null) {
            $invalidProperties[] = "'voucher_type' can't be null";
        }
        if ($this->container['reinvestment_sum_decimal'] === null) {
            $invalidProperties[] = "'reinvestment_sum_decimal' can't be null";
        }
        if ($this->container['reinvestment_sum_string'] === null) {
            $invalidProperties[] = "'reinvestment_sum_string' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $id when calling StaticVoucherCampaign., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling StaticVoucherCampaign., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $title when calling StaticVoucherCampaign., must be bigger than or equal to 1.');
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
     * Gets is_loaded
     *
     * @return bool
     */
    public function getIsLoaded()
    {
        return $this->container['is_loaded'];
    }

    /**
     * Sets is_loaded
     *
     * @param bool $is_loaded is_loaded
     *
     * @return self
     */
    public function setIsLoaded($is_loaded)
    {
        $this->container['is_loaded'] = $is_loaded;

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
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling StaticVoucherCampaign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($payment_design_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_design_id when calling StaticVoucherCampaign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $payment_design_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_design_id when calling StaticVoucherCampaign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['payment_design_id'] = $payment_design_id;

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
        if ((mb_strlen($employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling StaticVoucherCampaign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling StaticVoucherCampaign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $employee_id))) {
            throw new \InvalidArgumentException("invalid value for $employee_id when calling StaticVoucherCampaign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets reinvestment_sum
     *
     * @return int
     */
    public function getReinvestmentSum()
    {
        return $this->container['reinvestment_sum'];
    }

    /**
     * Sets reinvestment_sum
     *
     * @param int $reinvestment_sum reinvestment_sum
     *
     * @return self
     */
    public function setReinvestmentSum($reinvestment_sum)
    {

        if (($reinvestment_sum < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinvestment_sum when calling StaticVoucherCampaign., must be bigger than or equal to 0.');
        }

        $this->container['reinvestment_sum'] = $reinvestment_sum;

        return $this;
    }

    /**
     * Gets number_of_vouchers_in_file
     *
     * @return int
     */
    public function getNumberOfVouchersInFile()
    {
        return $this->container['number_of_vouchers_in_file'];
    }

    /**
     * Sets number_of_vouchers_in_file
     *
     * @param int $number_of_vouchers_in_file number_of_vouchers_in_file
     *
     * @return self
     */
    public function setNumberOfVouchersInFile($number_of_vouchers_in_file)
    {

        if (($number_of_vouchers_in_file < 0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_vouchers_in_file when calling StaticVoucherCampaign., must be bigger than or equal to 0.');
        }

        $this->container['number_of_vouchers_in_file'] = $number_of_vouchers_in_file;

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
        if (!is_null($campaign_group_id) && (mb_strlen($campaign_group_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $campaign_group_id when calling StaticVoucherCampaign., must be smaller than or equal to 10.');
        }
        if (!is_null($campaign_group_id) && (mb_strlen($campaign_group_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $campaign_group_id when calling StaticVoucherCampaign., must be bigger than or equal to 10.');
        }
        if (!is_null($campaign_group_id) && (!preg_match("/^[a-zA-Z0-9]+$/", $campaign_group_id))) {
            throw new \InvalidArgumentException("invalid value for $campaign_group_id when calling StaticVoucherCampaign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['campaign_group_id'] = $campaign_group_id;

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
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets created_by_source_id
     *
     * @return int
     */
    public function getCreatedBySourceId()
    {
        return $this->container['created_by_source_id'];
    }

    /**
     * Sets created_by_source_id
     *
     * @param int $created_by_source_id created_by_source_id
     *
     * @return self
     */
    public function setCreatedBySourceId($created_by_source_id)
    {
        $this->container['created_by_source_id'] = $created_by_source_id;

        return $this;
    }

    /**
     * Gets original_file_name
     *
     * @return string|null
     */
    public function getOriginalFileName()
    {
        return $this->container['original_file_name'];
    }

    /**
     * Sets original_file_name
     *
     * @param string|null $original_file_name original_file_name
     *
     * @return self
     */
    public function setOriginalFileName($original_file_name)
    {
        $this->container['original_file_name'] = $original_file_name;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling StaticVoucherCampaign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling StaticVoucherCampaign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling StaticVoucherCampaign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets reinvestment_sum_decimal
     *
     * @return string
     */
    public function getReinvestmentSumDecimal()
    {
        return $this->container['reinvestment_sum_decimal'];
    }

    /**
     * Sets reinvestment_sum_decimal
     *
     * @param string $reinvestment_sum_decimal reinvestment_sum_decimal
     *
     * @return self
     */
    public function setReinvestmentSumDecimal($reinvestment_sum_decimal)
    {
        $this->container['reinvestment_sum_decimal'] = $reinvestment_sum_decimal;

        return $this;
    }

    /**
     * Gets reinvestment_sum_string
     *
     * @return string
     */
    public function getReinvestmentSumString()
    {
        return $this->container['reinvestment_sum_string'];
    }

    /**
     * Sets reinvestment_sum_string
     *
     * @param string $reinvestment_sum_string reinvestment_sum_string
     *
     * @return self
     */
    public function setReinvestmentSumString($reinvestment_sum_string)
    {
        $this->container['reinvestment_sum_string'] = $reinvestment_sum_string;

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


