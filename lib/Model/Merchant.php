<?php
/**
 * Merchant
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
 * Merchant Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Merchant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_name' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'phone_number' => 'string',
        'zip' => 'string',
        'currency_abbreviation' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'industry' => 'string',
        'industry_name' => 'string',
        'info_genesis_property_id' => 'string',
        'is_frozen' => 'bool',
        'billing_contact_employee_id' => 'string',
        'stripe_customer_id' => 'string',
        'is_payment_method_provided' => 'bool',
        'plan_nickname' => 'string',
        'max_sms_count' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_name' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'phone_number' => null,
        'zip' => null,
        'currency_abbreviation' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'industry' => null,
        'industry_name' => null,
        'info_genesis_property_id' => null,
        'is_frozen' => null,
        'billing_contact_employee_id' => null,
        'stripe_customer_id' => null,
        'is_payment_method_provided' => null,
        'plan_nickname' => null,
        'max_sms_count' => 'double'
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
        'company_name' => 'companyName',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'phone_number' => 'phoneNumber',
        'zip' => 'zip',
        'currency_abbreviation' => 'currencyAbbreviation',
        'id' => 'id',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'industry' => 'industry',
        'industry_name' => 'industryName',
        'info_genesis_property_id' => 'infoGenesisPropertyID',
        'is_frozen' => 'isFrozen',
        'billing_contact_employee_id' => 'billingContactEmployeeID',
        'stripe_customer_id' => 'stripeCustomerID',
        'is_payment_method_provided' => 'isPaymentMethodProvided',
        'plan_nickname' => 'planNickname',
        'max_sms_count' => 'maxSMSCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'phone_number' => 'setPhoneNumber',
        'zip' => 'setZip',
        'currency_abbreviation' => 'setCurrencyAbbreviation',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'industry' => 'setIndustry',
        'industry_name' => 'setIndustryName',
        'info_genesis_property_id' => 'setInfoGenesisPropertyId',
        'is_frozen' => 'setIsFrozen',
        'billing_contact_employee_id' => 'setBillingContactEmployeeId',
        'stripe_customer_id' => 'setStripeCustomerId',
        'is_payment_method_provided' => 'setIsPaymentMethodProvided',
        'plan_nickname' => 'setPlanNickname',
        'max_sms_count' => 'setMaxSmsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'phone_number' => 'getPhoneNumber',
        'zip' => 'getZip',
        'currency_abbreviation' => 'getCurrencyAbbreviation',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'industry' => 'getIndustry',
        'industry_name' => 'getIndustryName',
        'info_genesis_property_id' => 'getInfoGenesisPropertyId',
        'is_frozen' => 'getIsFrozen',
        'billing_contact_employee_id' => 'getBillingContactEmployeeId',
        'stripe_customer_id' => 'getStripeCustomerId',
        'is_payment_method_provided' => 'getIsPaymentMethodProvided',
        'plan_nickname' => 'getPlanNickname',
        'max_sms_count' => 'getMaxSmsCount'
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
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['address1'] = $data['address1'] ?? null;
        $this->container['address2'] = $data['address2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['currency_abbreviation'] = $data['currency_abbreviation'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['industry_name'] = $data['industry_name'] ?? null;
        $this->container['info_genesis_property_id'] = $data['info_genesis_property_id'] ?? null;
        $this->container['is_frozen'] = $data['is_frozen'] ?? null;
        $this->container['billing_contact_employee_id'] = $data['billing_contact_employee_id'] ?? null;
        $this->container['stripe_customer_id'] = $data['stripe_customer_id'] ?? null;
        $this->container['is_payment_method_provided'] = $data['is_payment_method_provided'] ?? null;
        $this->container['plan_nickname'] = $data['plan_nickname'] ?? null;
        $this->container['max_sms_count'] = $data['max_sms_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['address1'] === null) {
            $invalidProperties[] = "'address1' can't be null";
        }
        if ($this->container['address2'] === null) {
            $invalidProperties[] = "'address2' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['currency_abbreviation'] === null) {
            $invalidProperties[] = "'currency_abbreviation' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['industry'] === null) {
            $invalidProperties[] = "'industry' can't be null";
        }
        if ($this->container['industry_name'] === null) {
            $invalidProperties[] = "'industry_name' can't be null";
        }
        if ($this->container['info_genesis_property_id'] === null) {
            $invalidProperties[] = "'info_genesis_property_id' can't be null";
        }
        if ($this->container['is_frozen'] === null) {
            $invalidProperties[] = "'is_frozen' can't be null";
        }
        if ($this->container['billing_contact_employee_id'] === null) {
            $invalidProperties[] = "'billing_contact_employee_id' can't be null";
        }
        if ($this->container['stripe_customer_id'] === null) {
            $invalidProperties[] = "'stripe_customer_id' can't be null";
        }
        if ($this->container['is_payment_method_provided'] === null) {
            $invalidProperties[] = "'is_payment_method_provided' can't be null";
        }
        if ($this->container['plan_nickname'] === null) {
            $invalidProperties[] = "'plan_nickname' can't be null";
        }
        if ($this->container['max_sms_count'] === null) {
            $invalidProperties[] = "'max_sms_count' can't be null";
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets currency_abbreviation
     *
     * @return string
     */
    public function getCurrencyAbbreviation()
    {
        return $this->container['currency_abbreviation'];
    }

    /**
     * Sets currency_abbreviation
     *
     * @param string $currency_abbreviation currency_abbreviation
     *
     * @return self
     */
    public function setCurrencyAbbreviation($currency_abbreviation)
    {
        $this->container['currency_abbreviation'] = $currency_abbreviation;

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
        if ((mb_strlen($id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Merchant., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Merchant., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Merchant., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

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
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry industry
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets industry_name
     *
     * @return string
     */
    public function getIndustryName()
    {
        return $this->container['industry_name'];
    }

    /**
     * Sets industry_name
     *
     * @param string $industry_name industry_name
     *
     * @return self
     */
    public function setIndustryName($industry_name)
    {
        $this->container['industry_name'] = $industry_name;

        return $this;
    }

    /**
     * Gets info_genesis_property_id
     *
     * @return string
     */
    public function getInfoGenesisPropertyId()
    {
        return $this->container['info_genesis_property_id'];
    }

    /**
     * Sets info_genesis_property_id
     *
     * @param string $info_genesis_property_id info_genesis_property_id
     *
     * @return self
     */
    public function setInfoGenesisPropertyId($info_genesis_property_id)
    {
        $this->container['info_genesis_property_id'] = $info_genesis_property_id;

        return $this;
    }

    /**
     * Gets is_frozen
     *
     * @return bool
     */
    public function getIsFrozen()
    {
        return $this->container['is_frozen'];
    }

    /**
     * Sets is_frozen
     *
     * @param bool $is_frozen is_frozen
     *
     * @return self
     */
    public function setIsFrozen($is_frozen)
    {
        $this->container['is_frozen'] = $is_frozen;

        return $this;
    }

    /**
     * Gets billing_contact_employee_id
     *
     * @return string
     */
    public function getBillingContactEmployeeId()
    {
        return $this->container['billing_contact_employee_id'];
    }

    /**
     * Sets billing_contact_employee_id
     *
     * @param string $billing_contact_employee_id billing_contact_employee_id
     *
     * @return self
     */
    public function setBillingContactEmployeeId($billing_contact_employee_id)
    {
        $this->container['billing_contact_employee_id'] = $billing_contact_employee_id;

        return $this;
    }

    /**
     * Gets stripe_customer_id
     *
     * @return string
     */
    public function getStripeCustomerId()
    {
        return $this->container['stripe_customer_id'];
    }

    /**
     * Sets stripe_customer_id
     *
     * @param string $stripe_customer_id stripe_customer_id
     *
     * @return self
     */
    public function setStripeCustomerId($stripe_customer_id)
    {
        $this->container['stripe_customer_id'] = $stripe_customer_id;

        return $this;
    }

    /**
     * Gets is_payment_method_provided
     *
     * @return bool
     */
    public function getIsPaymentMethodProvided()
    {
        return $this->container['is_payment_method_provided'];
    }

    /**
     * Sets is_payment_method_provided
     *
     * @param bool $is_payment_method_provided is_payment_method_provided
     *
     * @return self
     */
    public function setIsPaymentMethodProvided($is_payment_method_provided)
    {
        $this->container['is_payment_method_provided'] = $is_payment_method_provided;

        return $this;
    }

    /**
     * Gets plan_nickname
     *
     * @return string
     */
    public function getPlanNickname()
    {
        return $this->container['plan_nickname'];
    }

    /**
     * Sets plan_nickname
     *
     * @param string $plan_nickname plan_nickname
     *
     * @return self
     */
    public function setPlanNickname($plan_nickname)
    {
        $this->container['plan_nickname'] = $plan_nickname;

        return $this;
    }

    /**
     * Gets max_sms_count
     *
     * @return double
     */
    public function getMaxSmsCount()
    {
        return $this->container['max_sms_count'];
    }

    /**
     * Sets max_sms_count
     *
     * @param double $max_sms_count max_sms_count
     *
     * @return self
     */
    public function setMaxSmsCount($max_sms_count)
    {
        $this->container['max_sms_count'] = $max_sms_count;

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


