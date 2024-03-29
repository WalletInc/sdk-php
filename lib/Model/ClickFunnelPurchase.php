<?php
/**
 * ClickFunnelPurchase
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
 * ClickFunnelPurchase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClickFunnelPurchase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClickFunnelPurchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'products' => '\OpenAPI\Client\Model\ClickFunnelProduct[]',
        'member_id' => 'mixed',
        'contact' => '\OpenAPI\Client\Model\ClickFunnelContact',
        'funnel_id' => 'float',
        'stripe_customer_token' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'subscription_id' => 'mixed',
        'charge_id' => 'mixed',
        'ctransreceipt' => 'mixed',
        'status' => 'string',
        'fulfillment_status' => 'mixed',
        'fulfillment_id' => 'mixed',
        'fulfillments' => 'object',
        'payments_count' => 'mixed',
        'infusionsoft_ccid' => 'mixed',
        'oap_customer_id' => 'mixed',
        'payment_instrument_type' => 'mixed',
        'original_amount_cents' => 'float',
        'original_amount' => '\OpenAPI\Client\Model\ClickFunnelOriginalAmount',
        'original_amount_currency' => 'string',
        'manual' => 'bool',
        'error_message' => 'mixed',
        'nmi_customer_vault_id' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'double',
        'products' => null,
        'member_id' => null,
        'contact' => null,
        'funnel_id' => 'double',
        'stripe_customer_token' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'subscription_id' => null,
        'charge_id' => null,
        'ctransreceipt' => null,
        'status' => null,
        'fulfillment_status' => null,
        'fulfillment_id' => null,
        'fulfillments' => null,
        'payments_count' => null,
        'infusionsoft_ccid' => null,
        'oap_customer_id' => null,
        'payment_instrument_type' => null,
        'original_amount_cents' => 'double',
        'original_amount' => null,
        'original_amount_currency' => null,
        'manual' => null,
        'error_message' => null,
        'nmi_customer_vault_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'products' => false,
        'member_id' => true,
        'contact' => false,
        'funnel_id' => false,
        'stripe_customer_token' => false,
        'created_at' => false,
        'updated_at' => false,
        'subscription_id' => true,
        'charge_id' => true,
        'ctransreceipt' => true,
        'status' => false,
        'fulfillment_status' => true,
        'fulfillment_id' => true,
        'fulfillments' => false,
        'payments_count' => true,
        'infusionsoft_ccid' => true,
        'oap_customer_id' => true,
        'payment_instrument_type' => true,
        'original_amount_cents' => false,
        'original_amount' => false,
        'original_amount_currency' => false,
        'manual' => false,
        'error_message' => true,
        'nmi_customer_vault_id' => true
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
        'id' => 'id',
        'products' => 'products',
        'member_id' => 'member_id',
        'contact' => 'contact',
        'funnel_id' => 'funnel_id',
        'stripe_customer_token' => 'stripe_customer_token',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'subscription_id' => 'subscription_id',
        'charge_id' => 'charge_id',
        'ctransreceipt' => 'ctransreceipt',
        'status' => 'status',
        'fulfillment_status' => 'fulfillment_status',
        'fulfillment_id' => 'fulfillment_id',
        'fulfillments' => 'fulfillments',
        'payments_count' => 'payments_count',
        'infusionsoft_ccid' => 'infusionsoft_ccid',
        'oap_customer_id' => 'oap_customer_id',
        'payment_instrument_type' => 'payment_instrument_type',
        'original_amount_cents' => 'original_amount_cents',
        'original_amount' => 'original_amount',
        'original_amount_currency' => 'original_amount_currency',
        'manual' => 'manual',
        'error_message' => 'error_message',
        'nmi_customer_vault_id' => 'nmi_customer_vault_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'products' => 'setProducts',
        'member_id' => 'setMemberId',
        'contact' => 'setContact',
        'funnel_id' => 'setFunnelId',
        'stripe_customer_token' => 'setStripeCustomerToken',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'subscription_id' => 'setSubscriptionId',
        'charge_id' => 'setChargeId',
        'ctransreceipt' => 'setCtransreceipt',
        'status' => 'setStatus',
        'fulfillment_status' => 'setFulfillmentStatus',
        'fulfillment_id' => 'setFulfillmentId',
        'fulfillments' => 'setFulfillments',
        'payments_count' => 'setPaymentsCount',
        'infusionsoft_ccid' => 'setInfusionsoftCcid',
        'oap_customer_id' => 'setOapCustomerId',
        'payment_instrument_type' => 'setPaymentInstrumentType',
        'original_amount_cents' => 'setOriginalAmountCents',
        'original_amount' => 'setOriginalAmount',
        'original_amount_currency' => 'setOriginalAmountCurrency',
        'manual' => 'setManual',
        'error_message' => 'setErrorMessage',
        'nmi_customer_vault_id' => 'setNmiCustomerVaultId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'products' => 'getProducts',
        'member_id' => 'getMemberId',
        'contact' => 'getContact',
        'funnel_id' => 'getFunnelId',
        'stripe_customer_token' => 'getStripeCustomerToken',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'subscription_id' => 'getSubscriptionId',
        'charge_id' => 'getChargeId',
        'ctransreceipt' => 'getCtransreceipt',
        'status' => 'getStatus',
        'fulfillment_status' => 'getFulfillmentStatus',
        'fulfillment_id' => 'getFulfillmentId',
        'fulfillments' => 'getFulfillments',
        'payments_count' => 'getPaymentsCount',
        'infusionsoft_ccid' => 'getInfusionsoftCcid',
        'oap_customer_id' => 'getOapCustomerId',
        'payment_instrument_type' => 'getPaymentInstrumentType',
        'original_amount_cents' => 'getOriginalAmountCents',
        'original_amount' => 'getOriginalAmount',
        'original_amount_currency' => 'getOriginalAmountCurrency',
        'manual' => 'getManual',
        'error_message' => 'getErrorMessage',
        'nmi_customer_vault_id' => 'getNmiCustomerVaultId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('funnel_id', $data ?? [], null);
        $this->setIfExists('stripe_customer_token', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('charge_id', $data ?? [], null);
        $this->setIfExists('ctransreceipt', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('fulfillment_status', $data ?? [], null);
        $this->setIfExists('fulfillment_id', $data ?? [], null);
        $this->setIfExists('fulfillments', $data ?? [], null);
        $this->setIfExists('payments_count', $data ?? [], null);
        $this->setIfExists('infusionsoft_ccid', $data ?? [], null);
        $this->setIfExists('oap_customer_id', $data ?? [], null);
        $this->setIfExists('payment_instrument_type', $data ?? [], null);
        $this->setIfExists('original_amount_cents', $data ?? [], null);
        $this->setIfExists('original_amount', $data ?? [], null);
        $this->setIfExists('original_amount_currency', $data ?? [], null);
        $this->setIfExists('manual', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('nmi_customer_vault_id', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
        }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['funnel_id'] === null) {
            $invalidProperties[] = "'funnel_id' can't be null";
        }
        if ($this->container['stripe_customer_token'] === null) {
            $invalidProperties[] = "'stripe_customer_token' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['fulfillments'] === null) {
            $invalidProperties[] = "'fulfillments' can't be null";
        }
        if ($this->container['original_amount_cents'] === null) {
            $invalidProperties[] = "'original_amount_cents' can't be null";
        }
        if ($this->container['original_amount'] === null) {
            $invalidProperties[] = "'original_amount' can't be null";
        }
        if ($this->container['original_amount_currency'] === null) {
            $invalidProperties[] = "'original_amount_currency' can't be null";
        }
        if ($this->container['manual'] === null) {
            $invalidProperties[] = "'manual' can't be null";
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
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\ClickFunnelProduct[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\ClickFunnelProduct[] $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return mixed|null
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param mixed|null $member_id member_id
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            array_push($this->openAPINullablesSetToNull, 'member_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('member_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \OpenAPI\Client\Model\ClickFunnelContact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \OpenAPI\Client\Model\ClickFunnelContact $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets funnel_id
     *
     * @return float
     */
    public function getFunnelId()
    {
        return $this->container['funnel_id'];
    }

    /**
     * Sets funnel_id
     *
     * @param float $funnel_id funnel_id
     *
     * @return self
     */
    public function setFunnelId($funnel_id)
    {
        if (is_null($funnel_id)) {
            throw new \InvalidArgumentException('non-nullable funnel_id cannot be null');
        }
        $this->container['funnel_id'] = $funnel_id;

        return $this;
    }

    /**
     * Gets stripe_customer_token
     *
     * @return string
     */
    public function getStripeCustomerToken()
    {
        return $this->container['stripe_customer_token'];
    }

    /**
     * Sets stripe_customer_token
     *
     * @param string $stripe_customer_token stripe_customer_token
     *
     * @return self
     */
    public function setStripeCustomerToken($stripe_customer_token)
    {
        if (is_null($stripe_customer_token)) {
            throw new \InvalidArgumentException('non-nullable stripe_customer_token cannot be null');
        }
        $this->container['stripe_customer_token'] = $stripe_customer_token;

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
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
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
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return mixed|null
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param mixed|null $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        if (is_null($subscription_id)) {
            array_push($this->openAPINullablesSetToNull, 'subscription_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subscription_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets charge_id
     *
     * @return mixed|null
     */
    public function getChargeId()
    {
        return $this->container['charge_id'];
    }

    /**
     * Sets charge_id
     *
     * @param mixed|null $charge_id charge_id
     *
     * @return self
     */
    public function setChargeId($charge_id)
    {
        if (is_null($charge_id)) {
            array_push($this->openAPINullablesSetToNull, 'charge_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('charge_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['charge_id'] = $charge_id;

        return $this;
    }

    /**
     * Gets ctransreceipt
     *
     * @return mixed|null
     */
    public function getCtransreceipt()
    {
        return $this->container['ctransreceipt'];
    }

    /**
     * Sets ctransreceipt
     *
     * @param mixed|null $ctransreceipt ctransreceipt
     *
     * @return self
     */
    public function setCtransreceipt($ctransreceipt)
    {
        if (is_null($ctransreceipt)) {
            array_push($this->openAPINullablesSetToNull, 'ctransreceipt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ctransreceipt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ctransreceipt'] = $ctransreceipt;

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
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fulfillment_status
     *
     * @return mixed|null
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param mixed|null $fulfillment_status fulfillment_status
     *
     * @return self
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        if (is_null($fulfillment_status)) {
            array_push($this->openAPINullablesSetToNull, 'fulfillment_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fulfillment_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets fulfillment_id
     *
     * @return mixed|null
     */
    public function getFulfillmentId()
    {
        return $this->container['fulfillment_id'];
    }

    /**
     * Sets fulfillment_id
     *
     * @param mixed|null $fulfillment_id fulfillment_id
     *
     * @return self
     */
    public function setFulfillmentId($fulfillment_id)
    {
        if (is_null($fulfillment_id)) {
            array_push($this->openAPINullablesSetToNull, 'fulfillment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fulfillment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fulfillment_id'] = $fulfillment_id;

        return $this;
    }

    /**
     * Gets fulfillments
     *
     * @return object
     */
    public function getFulfillments()
    {
        return $this->container['fulfillments'];
    }

    /**
     * Sets fulfillments
     *
     * @param object $fulfillments fulfillments
     *
     * @return self
     */
    public function setFulfillments($fulfillments)
    {
        if (is_null($fulfillments)) {
            throw new \InvalidArgumentException('non-nullable fulfillments cannot be null');
        }
        $this->container['fulfillments'] = $fulfillments;

        return $this;
    }

    /**
     * Gets payments_count
     *
     * @return mixed|null
     */
    public function getPaymentsCount()
    {
        return $this->container['payments_count'];
    }

    /**
     * Sets payments_count
     *
     * @param mixed|null $payments_count payments_count
     *
     * @return self
     */
    public function setPaymentsCount($payments_count)
    {
        if (is_null($payments_count)) {
            array_push($this->openAPINullablesSetToNull, 'payments_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments_count'] = $payments_count;

        return $this;
    }

    /**
     * Gets infusionsoft_ccid
     *
     * @return mixed|null
     */
    public function getInfusionsoftCcid()
    {
        return $this->container['infusionsoft_ccid'];
    }

    /**
     * Sets infusionsoft_ccid
     *
     * @param mixed|null $infusionsoft_ccid infusionsoft_ccid
     *
     * @return self
     */
    public function setInfusionsoftCcid($infusionsoft_ccid)
    {
        if (is_null($infusionsoft_ccid)) {
            array_push($this->openAPINullablesSetToNull, 'infusionsoft_ccid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infusionsoft_ccid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infusionsoft_ccid'] = $infusionsoft_ccid;

        return $this;
    }

    /**
     * Gets oap_customer_id
     *
     * @return mixed|null
     */
    public function getOapCustomerId()
    {
        return $this->container['oap_customer_id'];
    }

    /**
     * Sets oap_customer_id
     *
     * @param mixed|null $oap_customer_id oap_customer_id
     *
     * @return self
     */
    public function setOapCustomerId($oap_customer_id)
    {
        if (is_null($oap_customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'oap_customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('oap_customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['oap_customer_id'] = $oap_customer_id;

        return $this;
    }

    /**
     * Gets payment_instrument_type
     *
     * @return mixed|null
     */
    public function getPaymentInstrumentType()
    {
        return $this->container['payment_instrument_type'];
    }

    /**
     * Sets payment_instrument_type
     *
     * @param mixed|null $payment_instrument_type payment_instrument_type
     *
     * @return self
     */
    public function setPaymentInstrumentType($payment_instrument_type)
    {
        if (is_null($payment_instrument_type)) {
            array_push($this->openAPINullablesSetToNull, 'payment_instrument_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_instrument_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_instrument_type'] = $payment_instrument_type;

        return $this;
    }

    /**
     * Gets original_amount_cents
     *
     * @return float
     */
    public function getOriginalAmountCents()
    {
        return $this->container['original_amount_cents'];
    }

    /**
     * Sets original_amount_cents
     *
     * @param float $original_amount_cents original_amount_cents
     *
     * @return self
     */
    public function setOriginalAmountCents($original_amount_cents)
    {
        if (is_null($original_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable original_amount_cents cannot be null');
        }
        $this->container['original_amount_cents'] = $original_amount_cents;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return \OpenAPI\Client\Model\ClickFunnelOriginalAmount
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param \OpenAPI\Client\Model\ClickFunnelOriginalAmount $original_amount original_amount
     *
     * @return self
     */
    public function setOriginalAmount($original_amount)
    {
        if (is_null($original_amount)) {
            throw new \InvalidArgumentException('non-nullable original_amount cannot be null');
        }
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets original_amount_currency
     *
     * @return string
     */
    public function getOriginalAmountCurrency()
    {
        return $this->container['original_amount_currency'];
    }

    /**
     * Sets original_amount_currency
     *
     * @param string $original_amount_currency original_amount_currency
     *
     * @return self
     */
    public function setOriginalAmountCurrency($original_amount_currency)
    {
        if (is_null($original_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable original_amount_currency cannot be null');
        }
        $this->container['original_amount_currency'] = $original_amount_currency;

        return $this;
    }

    /**
     * Gets manual
     *
     * @return bool
     */
    public function getManual()
    {
        return $this->container['manual'];
    }

    /**
     * Sets manual
     *
     * @param bool $manual manual
     *
     * @return self
     */
    public function setManual($manual)
    {
        if (is_null($manual)) {
            throw new \InvalidArgumentException('non-nullable manual cannot be null');
        }
        $this->container['manual'] = $manual;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return mixed|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param mixed|null $error_message error_message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            array_push($this->openAPINullablesSetToNull, 'error_message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error_message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets nmi_customer_vault_id
     *
     * @return mixed|null
     */
    public function getNmiCustomerVaultId()
    {
        return $this->container['nmi_customer_vault_id'];
    }

    /**
     * Sets nmi_customer_vault_id
     *
     * @param mixed|null $nmi_customer_vault_id nmi_customer_vault_id
     *
     * @return self
     */
    public function setNmiCustomerVaultId($nmi_customer_vault_id)
    {
        if (is_null($nmi_customer_vault_id)) {
            array_push($this->openAPINullablesSetToNull, 'nmi_customer_vault_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nmi_customer_vault_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nmi_customer_vault_id'] = $nmi_customer_vault_id;

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


