<?php
/**
 * WTSMSCreateAgreement
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
 * The version of the OpenAPI document: 2.1.527
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
 * WTSMSCreateAgreement Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTSMSCreateAgreement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTSMSCreateAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_twilio_terms_read' => 'bool',
        'is_privacy_policy_on_website' => 'bool',
        'is_tos_on_website' => 'bool',
        'is_stop_understood' => 'bool',
        'is_manual_read' => 'bool',
        'is_ctia_short_code_read' => 'bool',
        'is_standards_understood' => 'bool',
        'is_short_code_understood' => 'bool',
        'is_opt_in_out_understood' => 'bool',
        'is_short_code_transfer_understood' => 'bool',
        'is_pricing_understood' => 'bool',
        'is_short_code_timeline_understood' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_twilio_terms_read' => null,
        'is_privacy_policy_on_website' => null,
        'is_tos_on_website' => null,
        'is_stop_understood' => null,
        'is_manual_read' => null,
        'is_ctia_short_code_read' => null,
        'is_standards_understood' => null,
        'is_short_code_understood' => null,
        'is_opt_in_out_understood' => null,
        'is_short_code_transfer_understood' => null,
        'is_pricing_understood' => null,
        'is_short_code_timeline_understood' => null
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
        'is_twilio_terms_read' => 'isTwilioTermsRead',
        'is_privacy_policy_on_website' => 'isPrivacyPolicyOnWebsite',
        'is_tos_on_website' => 'isTosOnWebsite',
        'is_stop_understood' => 'isStopUnderstood',
        'is_manual_read' => 'isManualRead',
        'is_ctia_short_code_read' => 'isCtiaShortCodeRead',
        'is_standards_understood' => 'isStandardsUnderstood',
        'is_short_code_understood' => 'isShortCodeUnderstood',
        'is_opt_in_out_understood' => 'isOptInOutUnderstood',
        'is_short_code_transfer_understood' => 'isShortCodeTransferUnderstood',
        'is_pricing_understood' => 'isPricingUnderstood',
        'is_short_code_timeline_understood' => 'isShortCodeTimelineUnderstood'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_twilio_terms_read' => 'setIsTwilioTermsRead',
        'is_privacy_policy_on_website' => 'setIsPrivacyPolicyOnWebsite',
        'is_tos_on_website' => 'setIsTosOnWebsite',
        'is_stop_understood' => 'setIsStopUnderstood',
        'is_manual_read' => 'setIsManualRead',
        'is_ctia_short_code_read' => 'setIsCtiaShortCodeRead',
        'is_standards_understood' => 'setIsStandardsUnderstood',
        'is_short_code_understood' => 'setIsShortCodeUnderstood',
        'is_opt_in_out_understood' => 'setIsOptInOutUnderstood',
        'is_short_code_transfer_understood' => 'setIsShortCodeTransferUnderstood',
        'is_pricing_understood' => 'setIsPricingUnderstood',
        'is_short_code_timeline_understood' => 'setIsShortCodeTimelineUnderstood'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_twilio_terms_read' => 'getIsTwilioTermsRead',
        'is_privacy_policy_on_website' => 'getIsPrivacyPolicyOnWebsite',
        'is_tos_on_website' => 'getIsTosOnWebsite',
        'is_stop_understood' => 'getIsStopUnderstood',
        'is_manual_read' => 'getIsManualRead',
        'is_ctia_short_code_read' => 'getIsCtiaShortCodeRead',
        'is_standards_understood' => 'getIsStandardsUnderstood',
        'is_short_code_understood' => 'getIsShortCodeUnderstood',
        'is_opt_in_out_understood' => 'getIsOptInOutUnderstood',
        'is_short_code_transfer_understood' => 'getIsShortCodeTransferUnderstood',
        'is_pricing_understood' => 'getIsPricingUnderstood',
        'is_short_code_timeline_understood' => 'getIsShortCodeTimelineUnderstood'
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
        $this->container['is_twilio_terms_read'] = $data['is_twilio_terms_read'] ?? null;
        $this->container['is_privacy_policy_on_website'] = $data['is_privacy_policy_on_website'] ?? null;
        $this->container['is_tos_on_website'] = $data['is_tos_on_website'] ?? null;
        $this->container['is_stop_understood'] = $data['is_stop_understood'] ?? null;
        $this->container['is_manual_read'] = $data['is_manual_read'] ?? null;
        $this->container['is_ctia_short_code_read'] = $data['is_ctia_short_code_read'] ?? null;
        $this->container['is_standards_understood'] = $data['is_standards_understood'] ?? null;
        $this->container['is_short_code_understood'] = $data['is_short_code_understood'] ?? null;
        $this->container['is_opt_in_out_understood'] = $data['is_opt_in_out_understood'] ?? null;
        $this->container['is_short_code_transfer_understood'] = $data['is_short_code_transfer_understood'] ?? null;
        $this->container['is_pricing_understood'] = $data['is_pricing_understood'] ?? null;
        $this->container['is_short_code_timeline_understood'] = $data['is_short_code_timeline_understood'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_twilio_terms_read'] === null) {
            $invalidProperties[] = "'is_twilio_terms_read' can't be null";
        }
        if ($this->container['is_privacy_policy_on_website'] === null) {
            $invalidProperties[] = "'is_privacy_policy_on_website' can't be null";
        }
        if ($this->container['is_tos_on_website'] === null) {
            $invalidProperties[] = "'is_tos_on_website' can't be null";
        }
        if ($this->container['is_stop_understood'] === null) {
            $invalidProperties[] = "'is_stop_understood' can't be null";
        }
        if ($this->container['is_manual_read'] === null) {
            $invalidProperties[] = "'is_manual_read' can't be null";
        }
        if ($this->container['is_ctia_short_code_read'] === null) {
            $invalidProperties[] = "'is_ctia_short_code_read' can't be null";
        }
        if ($this->container['is_standards_understood'] === null) {
            $invalidProperties[] = "'is_standards_understood' can't be null";
        }
        if ($this->container['is_short_code_understood'] === null) {
            $invalidProperties[] = "'is_short_code_understood' can't be null";
        }
        if ($this->container['is_opt_in_out_understood'] === null) {
            $invalidProperties[] = "'is_opt_in_out_understood' can't be null";
        }
        if ($this->container['is_short_code_transfer_understood'] === null) {
            $invalidProperties[] = "'is_short_code_transfer_understood' can't be null";
        }
        if ($this->container['is_pricing_understood'] === null) {
            $invalidProperties[] = "'is_pricing_understood' can't be null";
        }
        if ($this->container['is_short_code_timeline_understood'] === null) {
            $invalidProperties[] = "'is_short_code_timeline_understood' can't be null";
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
     * Gets is_twilio_terms_read
     *
     * @return bool
     */
    public function getIsTwilioTermsRead()
    {
        return $this->container['is_twilio_terms_read'];
    }

    /**
     * Sets is_twilio_terms_read
     *
     * @param bool $is_twilio_terms_read is_twilio_terms_read
     *
     * @return self
     */
    public function setIsTwilioTermsRead($is_twilio_terms_read)
    {
        $this->container['is_twilio_terms_read'] = $is_twilio_terms_read;

        return $this;
    }

    /**
     * Gets is_privacy_policy_on_website
     *
     * @return bool
     */
    public function getIsPrivacyPolicyOnWebsite()
    {
        return $this->container['is_privacy_policy_on_website'];
    }

    /**
     * Sets is_privacy_policy_on_website
     *
     * @param bool $is_privacy_policy_on_website is_privacy_policy_on_website
     *
     * @return self
     */
    public function setIsPrivacyPolicyOnWebsite($is_privacy_policy_on_website)
    {
        $this->container['is_privacy_policy_on_website'] = $is_privacy_policy_on_website;

        return $this;
    }

    /**
     * Gets is_tos_on_website
     *
     * @return bool
     */
    public function getIsTosOnWebsite()
    {
        return $this->container['is_tos_on_website'];
    }

    /**
     * Sets is_tos_on_website
     *
     * @param bool $is_tos_on_website is_tos_on_website
     *
     * @return self
     */
    public function setIsTosOnWebsite($is_tos_on_website)
    {
        $this->container['is_tos_on_website'] = $is_tos_on_website;

        return $this;
    }

    /**
     * Gets is_stop_understood
     *
     * @return bool
     */
    public function getIsStopUnderstood()
    {
        return $this->container['is_stop_understood'];
    }

    /**
     * Sets is_stop_understood
     *
     * @param bool $is_stop_understood is_stop_understood
     *
     * @return self
     */
    public function setIsStopUnderstood($is_stop_understood)
    {
        $this->container['is_stop_understood'] = $is_stop_understood;

        return $this;
    }

    /**
     * Gets is_manual_read
     *
     * @return bool
     */
    public function getIsManualRead()
    {
        return $this->container['is_manual_read'];
    }

    /**
     * Sets is_manual_read
     *
     * @param bool $is_manual_read is_manual_read
     *
     * @return self
     */
    public function setIsManualRead($is_manual_read)
    {
        $this->container['is_manual_read'] = $is_manual_read;

        return $this;
    }

    /**
     * Gets is_ctia_short_code_read
     *
     * @return bool
     */
    public function getIsCtiaShortCodeRead()
    {
        return $this->container['is_ctia_short_code_read'];
    }

    /**
     * Sets is_ctia_short_code_read
     *
     * @param bool $is_ctia_short_code_read is_ctia_short_code_read
     *
     * @return self
     */
    public function setIsCtiaShortCodeRead($is_ctia_short_code_read)
    {
        $this->container['is_ctia_short_code_read'] = $is_ctia_short_code_read;

        return $this;
    }

    /**
     * Gets is_standards_understood
     *
     * @return bool
     */
    public function getIsStandardsUnderstood()
    {
        return $this->container['is_standards_understood'];
    }

    /**
     * Sets is_standards_understood
     *
     * @param bool $is_standards_understood is_standards_understood
     *
     * @return self
     */
    public function setIsStandardsUnderstood($is_standards_understood)
    {
        $this->container['is_standards_understood'] = $is_standards_understood;

        return $this;
    }

    /**
     * Gets is_short_code_understood
     *
     * @return bool
     */
    public function getIsShortCodeUnderstood()
    {
        return $this->container['is_short_code_understood'];
    }

    /**
     * Sets is_short_code_understood
     *
     * @param bool $is_short_code_understood is_short_code_understood
     *
     * @return self
     */
    public function setIsShortCodeUnderstood($is_short_code_understood)
    {
        $this->container['is_short_code_understood'] = $is_short_code_understood;

        return $this;
    }

    /**
     * Gets is_opt_in_out_understood
     *
     * @return bool
     */
    public function getIsOptInOutUnderstood()
    {
        return $this->container['is_opt_in_out_understood'];
    }

    /**
     * Sets is_opt_in_out_understood
     *
     * @param bool $is_opt_in_out_understood is_opt_in_out_understood
     *
     * @return self
     */
    public function setIsOptInOutUnderstood($is_opt_in_out_understood)
    {
        $this->container['is_opt_in_out_understood'] = $is_opt_in_out_understood;

        return $this;
    }

    /**
     * Gets is_short_code_transfer_understood
     *
     * @return bool
     */
    public function getIsShortCodeTransferUnderstood()
    {
        return $this->container['is_short_code_transfer_understood'];
    }

    /**
     * Sets is_short_code_transfer_understood
     *
     * @param bool $is_short_code_transfer_understood is_short_code_transfer_understood
     *
     * @return self
     */
    public function setIsShortCodeTransferUnderstood($is_short_code_transfer_understood)
    {
        $this->container['is_short_code_transfer_understood'] = $is_short_code_transfer_understood;

        return $this;
    }

    /**
     * Gets is_pricing_understood
     *
     * @return bool
     */
    public function getIsPricingUnderstood()
    {
        return $this->container['is_pricing_understood'];
    }

    /**
     * Sets is_pricing_understood
     *
     * @param bool $is_pricing_understood is_pricing_understood
     *
     * @return self
     */
    public function setIsPricingUnderstood($is_pricing_understood)
    {
        $this->container['is_pricing_understood'] = $is_pricing_understood;

        return $this;
    }

    /**
     * Gets is_short_code_timeline_understood
     *
     * @return bool
     */
    public function getIsShortCodeTimelineUnderstood()
    {
        return $this->container['is_short_code_timeline_understood'];
    }

    /**
     * Sets is_short_code_timeline_understood
     *
     * @param bool $is_short_code_timeline_understood is_short_code_timeline_understood
     *
     * @return self
     */
    public function setIsShortCodeTimelineUnderstood($is_short_code_timeline_understood)
    {
        $this->container['is_short_code_timeline_understood'] = $is_short_code_timeline_understood;

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


