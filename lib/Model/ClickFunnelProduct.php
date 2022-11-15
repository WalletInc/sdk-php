<?php
/**
 * ClickFunnelProduct
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
 * ClickFunnelProduct Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClickFunnelProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClickFunnelProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'double',
        'name' => 'string',
        'stripe_plan' => 'string',
        'amount' => '\OpenAPI\Client\Model\ClickFunnelAmount',
        'amount_currency' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'subject' => 'string',
        'html_body' => 'string',
        'thank_you_page_id' => 'double',
        'stripe_cancel_after_payments' => 'mixed',
        'bump' => 'bool',
        'cart_product_id' => 'mixed',
        'billing_integration' => 'string',
        'infusionsoft_product_id' => 'mixed',
        'infusionsoft_subscription_id' => 'mixed',
        'ontraport_product_id' => 'mixed',
        'ontraport_payment_count' => 'mixed',
        'ontraport_payment_type' => 'mixed',
        'ontraport_unit' => 'mixed',
        'ontraport_gateway_id' => 'mixed',
        'ontraport_invoice_id' => 'mixed',
        'commissionable' => 'bool',
        'statement_descriptor' => 'string',
        'netsuite_id' => 'mixed',
        'netsuite_tag' => 'mixed',
        'netsuite_class' => 'mixed',
        'description' => 'string'
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
        'name' => null,
        'stripe_plan' => null,
        'amount' => null,
        'amount_currency' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'subject' => null,
        'html_body' => null,
        'thank_you_page_id' => 'double',
        'stripe_cancel_after_payments' => null,
        'bump' => null,
        'cart_product_id' => null,
        'billing_integration' => null,
        'infusionsoft_product_id' => null,
        'infusionsoft_subscription_id' => null,
        'ontraport_product_id' => null,
        'ontraport_payment_count' => null,
        'ontraport_payment_type' => null,
        'ontraport_unit' => null,
        'ontraport_gateway_id' => null,
        'ontraport_invoice_id' => null,
        'commissionable' => null,
        'statement_descriptor' => null,
        'netsuite_id' => null,
        'netsuite_tag' => null,
        'netsuite_class' => null,
        'description' => null
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
        'name' => 'name',
        'stripe_plan' => 'stripe_plan',
        'amount' => 'amount',
        'amount_currency' => 'amount_currency',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'subject' => 'subject',
        'html_body' => 'html_body',
        'thank_you_page_id' => 'thank_you_page_id',
        'stripe_cancel_after_payments' => 'stripe_cancel_after_payments',
        'bump' => 'bump',
        'cart_product_id' => 'cart_product_id',
        'billing_integration' => 'billing_integration',
        'infusionsoft_product_id' => 'infusionsoft_product_id',
        'infusionsoft_subscription_id' => 'infusionsoft_subscription_id',
        'ontraport_product_id' => 'ontraport_product_id',
        'ontraport_payment_count' => 'ontraport_payment_count',
        'ontraport_payment_type' => 'ontraport_payment_type',
        'ontraport_unit' => 'ontraport_unit',
        'ontraport_gateway_id' => 'ontraport_gateway_id',
        'ontraport_invoice_id' => 'ontraport_invoice_id',
        'commissionable' => 'commissionable',
        'statement_descriptor' => 'statement_descriptor',
        'netsuite_id' => 'netsuite_id',
        'netsuite_tag' => 'netsuite_tag',
        'netsuite_class' => 'netsuite_class',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'stripe_plan' => 'setStripePlan',
        'amount' => 'setAmount',
        'amount_currency' => 'setAmountCurrency',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'subject' => 'setSubject',
        'html_body' => 'setHtmlBody',
        'thank_you_page_id' => 'setThankYouPageId',
        'stripe_cancel_after_payments' => 'setStripeCancelAfterPayments',
        'bump' => 'setBump',
        'cart_product_id' => 'setCartProductId',
        'billing_integration' => 'setBillingIntegration',
        'infusionsoft_product_id' => 'setInfusionsoftProductId',
        'infusionsoft_subscription_id' => 'setInfusionsoftSubscriptionId',
        'ontraport_product_id' => 'setOntraportProductId',
        'ontraport_payment_count' => 'setOntraportPaymentCount',
        'ontraport_payment_type' => 'setOntraportPaymentType',
        'ontraport_unit' => 'setOntraportUnit',
        'ontraport_gateway_id' => 'setOntraportGatewayId',
        'ontraport_invoice_id' => 'setOntraportInvoiceId',
        'commissionable' => 'setCommissionable',
        'statement_descriptor' => 'setStatementDescriptor',
        'netsuite_id' => 'setNetsuiteId',
        'netsuite_tag' => 'setNetsuiteTag',
        'netsuite_class' => 'setNetsuiteClass',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'stripe_plan' => 'getStripePlan',
        'amount' => 'getAmount',
        'amount_currency' => 'getAmountCurrency',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'subject' => 'getSubject',
        'html_body' => 'getHtmlBody',
        'thank_you_page_id' => 'getThankYouPageId',
        'stripe_cancel_after_payments' => 'getStripeCancelAfterPayments',
        'bump' => 'getBump',
        'cart_product_id' => 'getCartProductId',
        'billing_integration' => 'getBillingIntegration',
        'infusionsoft_product_id' => 'getInfusionsoftProductId',
        'infusionsoft_subscription_id' => 'getInfusionsoftSubscriptionId',
        'ontraport_product_id' => 'getOntraportProductId',
        'ontraport_payment_count' => 'getOntraportPaymentCount',
        'ontraport_payment_type' => 'getOntraportPaymentType',
        'ontraport_unit' => 'getOntraportUnit',
        'ontraport_gateway_id' => 'getOntraportGatewayId',
        'ontraport_invoice_id' => 'getOntraportInvoiceId',
        'commissionable' => 'getCommissionable',
        'statement_descriptor' => 'getStatementDescriptor',
        'netsuite_id' => 'getNetsuiteId',
        'netsuite_tag' => 'getNetsuiteTag',
        'netsuite_class' => 'getNetsuiteClass',
        'description' => 'getDescription'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['stripe_plan'] = $data['stripe_plan'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_currency'] = $data['amount_currency'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['html_body'] = $data['html_body'] ?? null;
        $this->container['thank_you_page_id'] = $data['thank_you_page_id'] ?? null;
        $this->container['stripe_cancel_after_payments'] = $data['stripe_cancel_after_payments'] ?? null;
        $this->container['bump'] = $data['bump'] ?? null;
        $this->container['cart_product_id'] = $data['cart_product_id'] ?? null;
        $this->container['billing_integration'] = $data['billing_integration'] ?? null;
        $this->container['infusionsoft_product_id'] = $data['infusionsoft_product_id'] ?? null;
        $this->container['infusionsoft_subscription_id'] = $data['infusionsoft_subscription_id'] ?? null;
        $this->container['ontraport_product_id'] = $data['ontraport_product_id'] ?? null;
        $this->container['ontraport_payment_count'] = $data['ontraport_payment_count'] ?? null;
        $this->container['ontraport_payment_type'] = $data['ontraport_payment_type'] ?? null;
        $this->container['ontraport_unit'] = $data['ontraport_unit'] ?? null;
        $this->container['ontraport_gateway_id'] = $data['ontraport_gateway_id'] ?? null;
        $this->container['ontraport_invoice_id'] = $data['ontraport_invoice_id'] ?? null;
        $this->container['commissionable'] = $data['commissionable'] ?? null;
        $this->container['statement_descriptor'] = $data['statement_descriptor'] ?? null;
        $this->container['netsuite_id'] = $data['netsuite_id'] ?? null;
        $this->container['netsuite_tag'] = $data['netsuite_tag'] ?? null;
        $this->container['netsuite_class'] = $data['netsuite_class'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['stripe_plan'] === null) {
            $invalidProperties[] = "'stripe_plan' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['amount_currency'] === null) {
            $invalidProperties[] = "'amount_currency' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['html_body'] === null) {
            $invalidProperties[] = "'html_body' can't be null";
        }
        if ($this->container['thank_you_page_id'] === null) {
            $invalidProperties[] = "'thank_you_page_id' can't be null";
        }
        if ($this->container['bump'] === null) {
            $invalidProperties[] = "'bump' can't be null";
        }
        if ($this->container['billing_integration'] === null) {
            $invalidProperties[] = "'billing_integration' can't be null";
        }
        if ($this->container['commissionable'] === null) {
            $invalidProperties[] = "'commissionable' can't be null";
        }
        if ($this->container['statement_descriptor'] === null) {
            $invalidProperties[] = "'statement_descriptor' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param double $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stripe_plan
     *
     * @return string
     */
    public function getStripePlan()
    {
        return $this->container['stripe_plan'];
    }

    /**
     * Sets stripe_plan
     *
     * @param string $stripe_plan stripe_plan
     *
     * @return self
     */
    public function setStripePlan($stripe_plan)
    {
        $this->container['stripe_plan'] = $stripe_plan;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\ClickFunnelAmount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\ClickFunnelAmount $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_currency
     *
     * @return string
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param string $amount_currency amount_currency
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        $this->container['amount_currency'] = $amount_currency;

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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets html_body
     *
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->container['html_body'];
    }

    /**
     * Sets html_body
     *
     * @param string $html_body html_body
     *
     * @return self
     */
    public function setHtmlBody($html_body)
    {
        $this->container['html_body'] = $html_body;

        return $this;
    }

    /**
     * Gets thank_you_page_id
     *
     * @return double
     */
    public function getThankYouPageId()
    {
        return $this->container['thank_you_page_id'];
    }

    /**
     * Sets thank_you_page_id
     *
     * @param double $thank_you_page_id thank_you_page_id
     *
     * @return self
     */
    public function setThankYouPageId($thank_you_page_id)
    {
        $this->container['thank_you_page_id'] = $thank_you_page_id;

        return $this;
    }

    /**
     * Gets stripe_cancel_after_payments
     *
     * @return mixed|null
     */
    public function getStripeCancelAfterPayments()
    {
        return $this->container['stripe_cancel_after_payments'];
    }

    /**
     * Sets stripe_cancel_after_payments
     *
     * @param mixed|null $stripe_cancel_after_payments stripe_cancel_after_payments
     *
     * @return self
     */
    public function setStripeCancelAfterPayments($stripe_cancel_after_payments)
    {
        $this->container['stripe_cancel_after_payments'] = $stripe_cancel_after_payments;

        return $this;
    }

    /**
     * Gets bump
     *
     * @return bool
     */
    public function getBump()
    {
        return $this->container['bump'];
    }

    /**
     * Sets bump
     *
     * @param bool $bump bump
     *
     * @return self
     */
    public function setBump($bump)
    {
        $this->container['bump'] = $bump;

        return $this;
    }

    /**
     * Gets cart_product_id
     *
     * @return mixed|null
     */
    public function getCartProductId()
    {
        return $this->container['cart_product_id'];
    }

    /**
     * Sets cart_product_id
     *
     * @param mixed|null $cart_product_id cart_product_id
     *
     * @return self
     */
    public function setCartProductId($cart_product_id)
    {
        $this->container['cart_product_id'] = $cart_product_id;

        return $this;
    }

    /**
     * Gets billing_integration
     *
     * @return string
     */
    public function getBillingIntegration()
    {
        return $this->container['billing_integration'];
    }

    /**
     * Sets billing_integration
     *
     * @param string $billing_integration billing_integration
     *
     * @return self
     */
    public function setBillingIntegration($billing_integration)
    {
        $this->container['billing_integration'] = $billing_integration;

        return $this;
    }

    /**
     * Gets infusionsoft_product_id
     *
     * @return mixed|null
     */
    public function getInfusionsoftProductId()
    {
        return $this->container['infusionsoft_product_id'];
    }

    /**
     * Sets infusionsoft_product_id
     *
     * @param mixed|null $infusionsoft_product_id infusionsoft_product_id
     *
     * @return self
     */
    public function setInfusionsoftProductId($infusionsoft_product_id)
    {
        $this->container['infusionsoft_product_id'] = $infusionsoft_product_id;

        return $this;
    }

    /**
     * Gets infusionsoft_subscription_id
     *
     * @return mixed|null
     */
    public function getInfusionsoftSubscriptionId()
    {
        return $this->container['infusionsoft_subscription_id'];
    }

    /**
     * Sets infusionsoft_subscription_id
     *
     * @param mixed|null $infusionsoft_subscription_id infusionsoft_subscription_id
     *
     * @return self
     */
    public function setInfusionsoftSubscriptionId($infusionsoft_subscription_id)
    {
        $this->container['infusionsoft_subscription_id'] = $infusionsoft_subscription_id;

        return $this;
    }

    /**
     * Gets ontraport_product_id
     *
     * @return mixed|null
     */
    public function getOntraportProductId()
    {
        return $this->container['ontraport_product_id'];
    }

    /**
     * Sets ontraport_product_id
     *
     * @param mixed|null $ontraport_product_id ontraport_product_id
     *
     * @return self
     */
    public function setOntraportProductId($ontraport_product_id)
    {
        $this->container['ontraport_product_id'] = $ontraport_product_id;

        return $this;
    }

    /**
     * Gets ontraport_payment_count
     *
     * @return mixed|null
     */
    public function getOntraportPaymentCount()
    {
        return $this->container['ontraport_payment_count'];
    }

    /**
     * Sets ontraport_payment_count
     *
     * @param mixed|null $ontraport_payment_count ontraport_payment_count
     *
     * @return self
     */
    public function setOntraportPaymentCount($ontraport_payment_count)
    {
        $this->container['ontraport_payment_count'] = $ontraport_payment_count;

        return $this;
    }

    /**
     * Gets ontraport_payment_type
     *
     * @return mixed|null
     */
    public function getOntraportPaymentType()
    {
        return $this->container['ontraport_payment_type'];
    }

    /**
     * Sets ontraport_payment_type
     *
     * @param mixed|null $ontraport_payment_type ontraport_payment_type
     *
     * @return self
     */
    public function setOntraportPaymentType($ontraport_payment_type)
    {
        $this->container['ontraport_payment_type'] = $ontraport_payment_type;

        return $this;
    }

    /**
     * Gets ontraport_unit
     *
     * @return mixed|null
     */
    public function getOntraportUnit()
    {
        return $this->container['ontraport_unit'];
    }

    /**
     * Sets ontraport_unit
     *
     * @param mixed|null $ontraport_unit ontraport_unit
     *
     * @return self
     */
    public function setOntraportUnit($ontraport_unit)
    {
        $this->container['ontraport_unit'] = $ontraport_unit;

        return $this;
    }

    /**
     * Gets ontraport_gateway_id
     *
     * @return mixed|null
     */
    public function getOntraportGatewayId()
    {
        return $this->container['ontraport_gateway_id'];
    }

    /**
     * Sets ontraport_gateway_id
     *
     * @param mixed|null $ontraport_gateway_id ontraport_gateway_id
     *
     * @return self
     */
    public function setOntraportGatewayId($ontraport_gateway_id)
    {
        $this->container['ontraport_gateway_id'] = $ontraport_gateway_id;

        return $this;
    }

    /**
     * Gets ontraport_invoice_id
     *
     * @return mixed|null
     */
    public function getOntraportInvoiceId()
    {
        return $this->container['ontraport_invoice_id'];
    }

    /**
     * Sets ontraport_invoice_id
     *
     * @param mixed|null $ontraport_invoice_id ontraport_invoice_id
     *
     * @return self
     */
    public function setOntraportInvoiceId($ontraport_invoice_id)
    {
        $this->container['ontraport_invoice_id'] = $ontraport_invoice_id;

        return $this;
    }

    /**
     * Gets commissionable
     *
     * @return bool
     */
    public function getCommissionable()
    {
        return $this->container['commissionable'];
    }

    /**
     * Sets commissionable
     *
     * @param bool $commissionable commissionable
     *
     * @return self
     */
    public function setCommissionable($commissionable)
    {
        $this->container['commissionable'] = $commissionable;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string $statement_descriptor statement_descriptor
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets netsuite_id
     *
     * @return mixed|null
     */
    public function getNetsuiteId()
    {
        return $this->container['netsuite_id'];
    }

    /**
     * Sets netsuite_id
     *
     * @param mixed|null $netsuite_id netsuite_id
     *
     * @return self
     */
    public function setNetsuiteId($netsuite_id)
    {
        $this->container['netsuite_id'] = $netsuite_id;

        return $this;
    }

    /**
     * Gets netsuite_tag
     *
     * @return mixed|null
     */
    public function getNetsuiteTag()
    {
        return $this->container['netsuite_tag'];
    }

    /**
     * Sets netsuite_tag
     *
     * @param mixed|null $netsuite_tag netsuite_tag
     *
     * @return self
     */
    public function setNetsuiteTag($netsuite_tag)
    {
        $this->container['netsuite_tag'] = $netsuite_tag;

        return $this;
    }

    /**
     * Gets netsuite_class
     *
     * @return mixed|null
     */
    public function getNetsuiteClass()
    {
        return $this->container['netsuite_class'];
    }

    /**
     * Sets netsuite_class
     *
     * @param mixed|null $netsuite_class netsuite_class
     *
     * @return self
     */
    public function setNetsuiteClass($netsuite_class)
    {
        $this->container['netsuite_class'] = $netsuite_class;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


