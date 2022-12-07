<?php
/**
 * WTDynamicVoucherSummary
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
 * WTDynamicVoucherSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTDynamicVoucherSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTDynamicVoucherSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'calc_error' => 'bool',
        'calc_error_details' => 'string',
        'current_value' => 'double',
        'current_value_decimal' => 'string',
        'current_value_string' => 'string',
        'time_value_zero' => 'bool',
        'time_value_zero_subtracted_amount' => 'double',
        'total_number_redeemed' => 'double',
        'total_value_redeemed' => 'double',
        'total_budget_remaining' => 'double',
        'maximum_budget_exhausted' => 'bool',
        'maximum_budget_exhausted_by' => 'double',
        'maximum_budget_exhausted_by_decimal' => 'string',
        'maximum_budget_exhausted_by_string' => 'string',
        'maximum_budget_exhausted_total_value_redeemed' => 'double',
        'maximum_budget_exhausted_total_value_redeemed_decimal' => 'string',
        'maximum_budget_exhausted_total_value_redeemed_string' => 'string',
        'total_amount_subtracted' => 'double',
        'total_amount_subtracted_decimal' => 'string',
        'total_amount_subtracted_string' => 'string',
        'total_decremented_multiple' => 'double',
        'redeemed_keys' => 'string[]',
        'status' => 'string',
        'expired' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'calc_error' => null,
        'calc_error_details' => null,
        'current_value' => 'double',
        'current_value_decimal' => null,
        'current_value_string' => null,
        'time_value_zero' => null,
        'time_value_zero_subtracted_amount' => 'double',
        'total_number_redeemed' => 'double',
        'total_value_redeemed' => 'double',
        'total_budget_remaining' => 'double',
        'maximum_budget_exhausted' => null,
        'maximum_budget_exhausted_by' => 'double',
        'maximum_budget_exhausted_by_decimal' => null,
        'maximum_budget_exhausted_by_string' => null,
        'maximum_budget_exhausted_total_value_redeemed' => 'double',
        'maximum_budget_exhausted_total_value_redeemed_decimal' => null,
        'maximum_budget_exhausted_total_value_redeemed_string' => null,
        'total_amount_subtracted' => 'double',
        'total_amount_subtracted_decimal' => null,
        'total_amount_subtracted_string' => null,
        'total_decremented_multiple' => 'double',
        'redeemed_keys' => null,
        'status' => null,
        'expired' => null
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
        'calc_error' => 'calcError',
        'calc_error_details' => 'calcErrorDetails',
        'current_value' => 'currentValue',
        'current_value_decimal' => 'currentValue_decimal',
        'current_value_string' => 'currentValue_string',
        'time_value_zero' => 'timeValueZero',
        'time_value_zero_subtracted_amount' => 'timeValueZeroSubtractedAmount',
        'total_number_redeemed' => 'totalNumberRedeemed',
        'total_value_redeemed' => 'totalValueRedeemed',
        'total_budget_remaining' => 'totalBudgetRemaining',
        'maximum_budget_exhausted' => 'maximumBudgetExhausted',
        'maximum_budget_exhausted_by' => 'maximumBudgetExhaustedBy',
        'maximum_budget_exhausted_by_decimal' => 'maximumBudgetExhaustedBy_decimal',
        'maximum_budget_exhausted_by_string' => 'maximumBudgetExhaustedBy_string',
        'maximum_budget_exhausted_total_value_redeemed' => 'maximumBudgetExhaustedTotalValueRedeemed',
        'maximum_budget_exhausted_total_value_redeemed_decimal' => 'maximumBudgetExhaustedTotalValueRedeemed_decimal',
        'maximum_budget_exhausted_total_value_redeemed_string' => 'maximumBudgetExhaustedTotalValueRedeemed_string',
        'total_amount_subtracted' => 'totalAmountSubtracted',
        'total_amount_subtracted_decimal' => 'totalAmountSubtracted_decimal',
        'total_amount_subtracted_string' => 'totalAmountSubtracted_string',
        'total_decremented_multiple' => 'totalDecrementedMultiple',
        'redeemed_keys' => 'redeemedKeys',
        'status' => 'status',
        'expired' => 'expired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calc_error' => 'setCalcError',
        'calc_error_details' => 'setCalcErrorDetails',
        'current_value' => 'setCurrentValue',
        'current_value_decimal' => 'setCurrentValueDecimal',
        'current_value_string' => 'setCurrentValueString',
        'time_value_zero' => 'setTimeValueZero',
        'time_value_zero_subtracted_amount' => 'setTimeValueZeroSubtractedAmount',
        'total_number_redeemed' => 'setTotalNumberRedeemed',
        'total_value_redeemed' => 'setTotalValueRedeemed',
        'total_budget_remaining' => 'setTotalBudgetRemaining',
        'maximum_budget_exhausted' => 'setMaximumBudgetExhausted',
        'maximum_budget_exhausted_by' => 'setMaximumBudgetExhaustedBy',
        'maximum_budget_exhausted_by_decimal' => 'setMaximumBudgetExhaustedByDecimal',
        'maximum_budget_exhausted_by_string' => 'setMaximumBudgetExhaustedByString',
        'maximum_budget_exhausted_total_value_redeemed' => 'setMaximumBudgetExhaustedTotalValueRedeemed',
        'maximum_budget_exhausted_total_value_redeemed_decimal' => 'setMaximumBudgetExhaustedTotalValueRedeemedDecimal',
        'maximum_budget_exhausted_total_value_redeemed_string' => 'setMaximumBudgetExhaustedTotalValueRedeemedString',
        'total_amount_subtracted' => 'setTotalAmountSubtracted',
        'total_amount_subtracted_decimal' => 'setTotalAmountSubtractedDecimal',
        'total_amount_subtracted_string' => 'setTotalAmountSubtractedString',
        'total_decremented_multiple' => 'setTotalDecrementedMultiple',
        'redeemed_keys' => 'setRedeemedKeys',
        'status' => 'setStatus',
        'expired' => 'setExpired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calc_error' => 'getCalcError',
        'calc_error_details' => 'getCalcErrorDetails',
        'current_value' => 'getCurrentValue',
        'current_value_decimal' => 'getCurrentValueDecimal',
        'current_value_string' => 'getCurrentValueString',
        'time_value_zero' => 'getTimeValueZero',
        'time_value_zero_subtracted_amount' => 'getTimeValueZeroSubtractedAmount',
        'total_number_redeemed' => 'getTotalNumberRedeemed',
        'total_value_redeemed' => 'getTotalValueRedeemed',
        'total_budget_remaining' => 'getTotalBudgetRemaining',
        'maximum_budget_exhausted' => 'getMaximumBudgetExhausted',
        'maximum_budget_exhausted_by' => 'getMaximumBudgetExhaustedBy',
        'maximum_budget_exhausted_by_decimal' => 'getMaximumBudgetExhaustedByDecimal',
        'maximum_budget_exhausted_by_string' => 'getMaximumBudgetExhaustedByString',
        'maximum_budget_exhausted_total_value_redeemed' => 'getMaximumBudgetExhaustedTotalValueRedeemed',
        'maximum_budget_exhausted_total_value_redeemed_decimal' => 'getMaximumBudgetExhaustedTotalValueRedeemedDecimal',
        'maximum_budget_exhausted_total_value_redeemed_string' => 'getMaximumBudgetExhaustedTotalValueRedeemedString',
        'total_amount_subtracted' => 'getTotalAmountSubtracted',
        'total_amount_subtracted_decimal' => 'getTotalAmountSubtractedDecimal',
        'total_amount_subtracted_string' => 'getTotalAmountSubtractedString',
        'total_decremented_multiple' => 'getTotalDecrementedMultiple',
        'redeemed_keys' => 'getRedeemedKeys',
        'status' => 'getStatus',
        'expired' => 'getExpired'
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
        $this->container['calc_error'] = $data['calc_error'] ?? null;
        $this->container['calc_error_details'] = $data['calc_error_details'] ?? null;
        $this->container['current_value'] = $data['current_value'] ?? null;
        $this->container['current_value_decimal'] = $data['current_value_decimal'] ?? null;
        $this->container['current_value_string'] = $data['current_value_string'] ?? null;
        $this->container['time_value_zero'] = $data['time_value_zero'] ?? null;
        $this->container['time_value_zero_subtracted_amount'] = $data['time_value_zero_subtracted_amount'] ?? null;
        $this->container['total_number_redeemed'] = $data['total_number_redeemed'] ?? null;
        $this->container['total_value_redeemed'] = $data['total_value_redeemed'] ?? null;
        $this->container['total_budget_remaining'] = $data['total_budget_remaining'] ?? null;
        $this->container['maximum_budget_exhausted'] = $data['maximum_budget_exhausted'] ?? null;
        $this->container['maximum_budget_exhausted_by'] = $data['maximum_budget_exhausted_by'] ?? null;
        $this->container['maximum_budget_exhausted_by_decimal'] = $data['maximum_budget_exhausted_by_decimal'] ?? null;
        $this->container['maximum_budget_exhausted_by_string'] = $data['maximum_budget_exhausted_by_string'] ?? null;
        $this->container['maximum_budget_exhausted_total_value_redeemed'] = $data['maximum_budget_exhausted_total_value_redeemed'] ?? null;
        $this->container['maximum_budget_exhausted_total_value_redeemed_decimal'] = $data['maximum_budget_exhausted_total_value_redeemed_decimal'] ?? null;
        $this->container['maximum_budget_exhausted_total_value_redeemed_string'] = $data['maximum_budget_exhausted_total_value_redeemed_string'] ?? null;
        $this->container['total_amount_subtracted'] = $data['total_amount_subtracted'] ?? null;
        $this->container['total_amount_subtracted_decimal'] = $data['total_amount_subtracted_decimal'] ?? null;
        $this->container['total_amount_subtracted_string'] = $data['total_amount_subtracted_string'] ?? null;
        $this->container['total_decremented_multiple'] = $data['total_decremented_multiple'] ?? null;
        $this->container['redeemed_keys'] = $data['redeemed_keys'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['expired'] = $data['expired'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['calc_error'] === null) {
            $invalidProperties[] = "'calc_error' can't be null";
        }
        if ($this->container['calc_error_details'] === null) {
            $invalidProperties[] = "'calc_error_details' can't be null";
        }
        if ($this->container['current_value'] === null) {
            $invalidProperties[] = "'current_value' can't be null";
        }
        if ($this->container['current_value_decimal'] === null) {
            $invalidProperties[] = "'current_value_decimal' can't be null";
        }
        if ($this->container['current_value_string'] === null) {
            $invalidProperties[] = "'current_value_string' can't be null";
        }
        if ($this->container['time_value_zero'] === null) {
            $invalidProperties[] = "'time_value_zero' can't be null";
        }
        if ($this->container['time_value_zero_subtracted_amount'] === null) {
            $invalidProperties[] = "'time_value_zero_subtracted_amount' can't be null";
        }
        if ($this->container['total_number_redeemed'] === null) {
            $invalidProperties[] = "'total_number_redeemed' can't be null";
        }
        if ($this->container['total_value_redeemed'] === null) {
            $invalidProperties[] = "'total_value_redeemed' can't be null";
        }
        if ($this->container['total_budget_remaining'] === null) {
            $invalidProperties[] = "'total_budget_remaining' can't be null";
        }
        if ($this->container['maximum_budget_exhausted'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_by'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_by' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_by_decimal'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_by_decimal' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_by_string'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_by_string' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_total_value_redeemed'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_total_value_redeemed' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_total_value_redeemed_decimal'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_total_value_redeemed_decimal' can't be null";
        }
        if ($this->container['maximum_budget_exhausted_total_value_redeemed_string'] === null) {
            $invalidProperties[] = "'maximum_budget_exhausted_total_value_redeemed_string' can't be null";
        }
        if ($this->container['total_amount_subtracted'] === null) {
            $invalidProperties[] = "'total_amount_subtracted' can't be null";
        }
        if ($this->container['total_amount_subtracted_decimal'] === null) {
            $invalidProperties[] = "'total_amount_subtracted_decimal' can't be null";
        }
        if ($this->container['total_amount_subtracted_string'] === null) {
            $invalidProperties[] = "'total_amount_subtracted_string' can't be null";
        }
        if ($this->container['total_decremented_multiple'] === null) {
            $invalidProperties[] = "'total_decremented_multiple' can't be null";
        }
        if ($this->container['redeemed_keys'] === null) {
            $invalidProperties[] = "'redeemed_keys' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['expired'] === null) {
            $invalidProperties[] = "'expired' can't be null";
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
     * Gets calc_error
     *
     * @return bool
     */
    public function getCalcError()
    {
        return $this->container['calc_error'];
    }

    /**
     * Sets calc_error
     *
     * @param bool $calc_error calc_error
     *
     * @return self
     */
    public function setCalcError($calc_error)
    {
        $this->container['calc_error'] = $calc_error;

        return $this;
    }

    /**
     * Gets calc_error_details
     *
     * @return string
     */
    public function getCalcErrorDetails()
    {
        return $this->container['calc_error_details'];
    }

    /**
     * Sets calc_error_details
     *
     * @param string $calc_error_details calc_error_details
     *
     * @return self
     */
    public function setCalcErrorDetails($calc_error_details)
    {
        $this->container['calc_error_details'] = $calc_error_details;

        return $this;
    }

    /**
     * Gets current_value
     *
     * @return double
     */
    public function getCurrentValue()
    {
        return $this->container['current_value'];
    }

    /**
     * Sets current_value
     *
     * @param double $current_value current_value
     *
     * @return self
     */
    public function setCurrentValue($current_value)
    {
        $this->container['current_value'] = $current_value;

        return $this;
    }

    /**
     * Gets current_value_decimal
     *
     * @return string
     */
    public function getCurrentValueDecimal()
    {
        return $this->container['current_value_decimal'];
    }

    /**
     * Sets current_value_decimal
     *
     * @param string $current_value_decimal current_value_decimal
     *
     * @return self
     */
    public function setCurrentValueDecimal($current_value_decimal)
    {
        $this->container['current_value_decimal'] = $current_value_decimal;

        return $this;
    }

    /**
     * Gets current_value_string
     *
     * @return string
     */
    public function getCurrentValueString()
    {
        return $this->container['current_value_string'];
    }

    /**
     * Sets current_value_string
     *
     * @param string $current_value_string current_value_string
     *
     * @return self
     */
    public function setCurrentValueString($current_value_string)
    {
        $this->container['current_value_string'] = $current_value_string;

        return $this;
    }

    /**
     * Gets time_value_zero
     *
     * @return bool
     */
    public function getTimeValueZero()
    {
        return $this->container['time_value_zero'];
    }

    /**
     * Sets time_value_zero
     *
     * @param bool $time_value_zero time_value_zero
     *
     * @return self
     */
    public function setTimeValueZero($time_value_zero)
    {
        $this->container['time_value_zero'] = $time_value_zero;

        return $this;
    }

    /**
     * Gets time_value_zero_subtracted_amount
     *
     * @return double
     */
    public function getTimeValueZeroSubtractedAmount()
    {
        return $this->container['time_value_zero_subtracted_amount'];
    }

    /**
     * Sets time_value_zero_subtracted_amount
     *
     * @param double $time_value_zero_subtracted_amount time_value_zero_subtracted_amount
     *
     * @return self
     */
    public function setTimeValueZeroSubtractedAmount($time_value_zero_subtracted_amount)
    {
        $this->container['time_value_zero_subtracted_amount'] = $time_value_zero_subtracted_amount;

        return $this;
    }

    /**
     * Gets total_number_redeemed
     *
     * @return double
     */
    public function getTotalNumberRedeemed()
    {
        return $this->container['total_number_redeemed'];
    }

    /**
     * Sets total_number_redeemed
     *
     * @param double $total_number_redeemed total_number_redeemed
     *
     * @return self
     */
    public function setTotalNumberRedeemed($total_number_redeemed)
    {
        $this->container['total_number_redeemed'] = $total_number_redeemed;

        return $this;
    }

    /**
     * Gets total_value_redeemed
     *
     * @return double
     */
    public function getTotalValueRedeemed()
    {
        return $this->container['total_value_redeemed'];
    }

    /**
     * Sets total_value_redeemed
     *
     * @param double $total_value_redeemed total_value_redeemed
     *
     * @return self
     */
    public function setTotalValueRedeemed($total_value_redeemed)
    {
        $this->container['total_value_redeemed'] = $total_value_redeemed;

        return $this;
    }

    /**
     * Gets total_budget_remaining
     *
     * @return double
     */
    public function getTotalBudgetRemaining()
    {
        return $this->container['total_budget_remaining'];
    }

    /**
     * Sets total_budget_remaining
     *
     * @param double $total_budget_remaining total_budget_remaining
     *
     * @return self
     */
    public function setTotalBudgetRemaining($total_budget_remaining)
    {
        $this->container['total_budget_remaining'] = $total_budget_remaining;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted
     *
     * @return bool
     */
    public function getMaximumBudgetExhausted()
    {
        return $this->container['maximum_budget_exhausted'];
    }

    /**
     * Sets maximum_budget_exhausted
     *
     * @param bool $maximum_budget_exhausted maximum_budget_exhausted
     *
     * @return self
     */
    public function setMaximumBudgetExhausted($maximum_budget_exhausted)
    {
        $this->container['maximum_budget_exhausted'] = $maximum_budget_exhausted;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_by
     *
     * @return double
     */
    public function getMaximumBudgetExhaustedBy()
    {
        return $this->container['maximum_budget_exhausted_by'];
    }

    /**
     * Sets maximum_budget_exhausted_by
     *
     * @param double $maximum_budget_exhausted_by maximum_budget_exhausted_by
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedBy($maximum_budget_exhausted_by)
    {
        $this->container['maximum_budget_exhausted_by'] = $maximum_budget_exhausted_by;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_by_decimal
     *
     * @return string
     */
    public function getMaximumBudgetExhaustedByDecimal()
    {
        return $this->container['maximum_budget_exhausted_by_decimal'];
    }

    /**
     * Sets maximum_budget_exhausted_by_decimal
     *
     * @param string $maximum_budget_exhausted_by_decimal maximum_budget_exhausted_by_decimal
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedByDecimal($maximum_budget_exhausted_by_decimal)
    {
        $this->container['maximum_budget_exhausted_by_decimal'] = $maximum_budget_exhausted_by_decimal;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_by_string
     *
     * @return string
     */
    public function getMaximumBudgetExhaustedByString()
    {
        return $this->container['maximum_budget_exhausted_by_string'];
    }

    /**
     * Sets maximum_budget_exhausted_by_string
     *
     * @param string $maximum_budget_exhausted_by_string maximum_budget_exhausted_by_string
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedByString($maximum_budget_exhausted_by_string)
    {
        $this->container['maximum_budget_exhausted_by_string'] = $maximum_budget_exhausted_by_string;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_total_value_redeemed
     *
     * @return double
     */
    public function getMaximumBudgetExhaustedTotalValueRedeemed()
    {
        return $this->container['maximum_budget_exhausted_total_value_redeemed'];
    }

    /**
     * Sets maximum_budget_exhausted_total_value_redeemed
     *
     * @param double $maximum_budget_exhausted_total_value_redeemed maximum_budget_exhausted_total_value_redeemed
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedTotalValueRedeemed($maximum_budget_exhausted_total_value_redeemed)
    {
        $this->container['maximum_budget_exhausted_total_value_redeemed'] = $maximum_budget_exhausted_total_value_redeemed;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_total_value_redeemed_decimal
     *
     * @return string
     */
    public function getMaximumBudgetExhaustedTotalValueRedeemedDecimal()
    {
        return $this->container['maximum_budget_exhausted_total_value_redeemed_decimal'];
    }

    /**
     * Sets maximum_budget_exhausted_total_value_redeemed_decimal
     *
     * @param string $maximum_budget_exhausted_total_value_redeemed_decimal maximum_budget_exhausted_total_value_redeemed_decimal
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedTotalValueRedeemedDecimal($maximum_budget_exhausted_total_value_redeemed_decimal)
    {
        $this->container['maximum_budget_exhausted_total_value_redeemed_decimal'] = $maximum_budget_exhausted_total_value_redeemed_decimal;

        return $this;
    }

    /**
     * Gets maximum_budget_exhausted_total_value_redeemed_string
     *
     * @return string
     */
    public function getMaximumBudgetExhaustedTotalValueRedeemedString()
    {
        return $this->container['maximum_budget_exhausted_total_value_redeemed_string'];
    }

    /**
     * Sets maximum_budget_exhausted_total_value_redeemed_string
     *
     * @param string $maximum_budget_exhausted_total_value_redeemed_string maximum_budget_exhausted_total_value_redeemed_string
     *
     * @return self
     */
    public function setMaximumBudgetExhaustedTotalValueRedeemedString($maximum_budget_exhausted_total_value_redeemed_string)
    {
        $this->container['maximum_budget_exhausted_total_value_redeemed_string'] = $maximum_budget_exhausted_total_value_redeemed_string;

        return $this;
    }

    /**
     * Gets total_amount_subtracted
     *
     * @return double
     */
    public function getTotalAmountSubtracted()
    {
        return $this->container['total_amount_subtracted'];
    }

    /**
     * Sets total_amount_subtracted
     *
     * @param double $total_amount_subtracted total_amount_subtracted
     *
     * @return self
     */
    public function setTotalAmountSubtracted($total_amount_subtracted)
    {
        $this->container['total_amount_subtracted'] = $total_amount_subtracted;

        return $this;
    }

    /**
     * Gets total_amount_subtracted_decimal
     *
     * @return string
     */
    public function getTotalAmountSubtractedDecimal()
    {
        return $this->container['total_amount_subtracted_decimal'];
    }

    /**
     * Sets total_amount_subtracted_decimal
     *
     * @param string $total_amount_subtracted_decimal total_amount_subtracted_decimal
     *
     * @return self
     */
    public function setTotalAmountSubtractedDecimal($total_amount_subtracted_decimal)
    {
        $this->container['total_amount_subtracted_decimal'] = $total_amount_subtracted_decimal;

        return $this;
    }

    /**
     * Gets total_amount_subtracted_string
     *
     * @return string
     */
    public function getTotalAmountSubtractedString()
    {
        return $this->container['total_amount_subtracted_string'];
    }

    /**
     * Sets total_amount_subtracted_string
     *
     * @param string $total_amount_subtracted_string total_amount_subtracted_string
     *
     * @return self
     */
    public function setTotalAmountSubtractedString($total_amount_subtracted_string)
    {
        $this->container['total_amount_subtracted_string'] = $total_amount_subtracted_string;

        return $this;
    }

    /**
     * Gets total_decremented_multiple
     *
     * @return double
     */
    public function getTotalDecrementedMultiple()
    {
        return $this->container['total_decremented_multiple'];
    }

    /**
     * Sets total_decremented_multiple
     *
     * @param double $total_decremented_multiple total_decremented_multiple
     *
     * @return self
     */
    public function setTotalDecrementedMultiple($total_decremented_multiple)
    {
        $this->container['total_decremented_multiple'] = $total_decremented_multiple;

        return $this;
    }

    /**
     * Gets redeemed_keys
     *
     * @return string[]
     */
    public function getRedeemedKeys()
    {
        return $this->container['redeemed_keys'];
    }

    /**
     * Sets redeemed_keys
     *
     * @param string[] $redeemed_keys redeemed_keys
     *
     * @return self
     */
    public function setRedeemedKeys($redeemed_keys)
    {
        $this->container['redeemed_keys'] = $redeemed_keys;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool $expired expired
     *
     * @return self
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

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


