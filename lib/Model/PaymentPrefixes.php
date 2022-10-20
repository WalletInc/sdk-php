<?php
/**
 * PaymentPrefixes
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
 * The version of the OpenAPI document: 2.1.515
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
 * PaymentPrefixes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPrefixes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentPrefixes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membership_tier' => 'string',
        'member' => 'string',
        'merchant_credit' => 'string',
        'news_article' => 'string',
        'performance' => 'string',
        'advertisement_credit' => 'string',
        'advertisement_credit_scan' => 'string',
        'dynamic_voucher' => 'string',
        'static_voucher_campaign' => 'string',
        'static_voucher' => 'string',
        'digital_wallet_session' => 'string',
        'wallet_configuration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'membership_tier' => null,
        'member' => null,
        'merchant_credit' => null,
        'news_article' => null,
        'performance' => null,
        'advertisement_credit' => null,
        'advertisement_credit_scan' => null,
        'dynamic_voucher' => null,
        'static_voucher_campaign' => null,
        'static_voucher' => null,
        'digital_wallet_session' => null,
        'wallet_configuration' => null
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
        'membership_tier' => 'MembershipTier',
        'member' => 'Member',
        'merchant_credit' => 'MerchantCredit',
        'news_article' => 'NewsArticle',
        'performance' => 'Performance',
        'advertisement_credit' => 'AdvertisementCredit',
        'advertisement_credit_scan' => 'AdvertisementCreditScan',
        'dynamic_voucher' => 'DynamicVoucher',
        'static_voucher_campaign' => 'StaticVoucherCampaign',
        'static_voucher' => 'StaticVoucher',
        'digital_wallet_session' => 'DigitalWalletSession',
        'wallet_configuration' => 'WalletConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membership_tier' => 'setMembershipTier',
        'member' => 'setMember',
        'merchant_credit' => 'setMerchantCredit',
        'news_article' => 'setNewsArticle',
        'performance' => 'setPerformance',
        'advertisement_credit' => 'setAdvertisementCredit',
        'advertisement_credit_scan' => 'setAdvertisementCreditScan',
        'dynamic_voucher' => 'setDynamicVoucher',
        'static_voucher_campaign' => 'setStaticVoucherCampaign',
        'static_voucher' => 'setStaticVoucher',
        'digital_wallet_session' => 'setDigitalWalletSession',
        'wallet_configuration' => 'setWalletConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membership_tier' => 'getMembershipTier',
        'member' => 'getMember',
        'merchant_credit' => 'getMerchantCredit',
        'news_article' => 'getNewsArticle',
        'performance' => 'getPerformance',
        'advertisement_credit' => 'getAdvertisementCredit',
        'advertisement_credit_scan' => 'getAdvertisementCreditScan',
        'dynamic_voucher' => 'getDynamicVoucher',
        'static_voucher_campaign' => 'getStaticVoucherCampaign',
        'static_voucher' => 'getStaticVoucher',
        'digital_wallet_session' => 'getDigitalWalletSession',
        'wallet_configuration' => 'getWalletConfiguration'
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
        $this->container['membership_tier'] = $data['membership_tier'] ?? null;
        $this->container['member'] = $data['member'] ?? null;
        $this->container['merchant_credit'] = $data['merchant_credit'] ?? null;
        $this->container['news_article'] = $data['news_article'] ?? null;
        $this->container['performance'] = $data['performance'] ?? null;
        $this->container['advertisement_credit'] = $data['advertisement_credit'] ?? null;
        $this->container['advertisement_credit_scan'] = $data['advertisement_credit_scan'] ?? null;
        $this->container['dynamic_voucher'] = $data['dynamic_voucher'] ?? null;
        $this->container['static_voucher_campaign'] = $data['static_voucher_campaign'] ?? null;
        $this->container['static_voucher'] = $data['static_voucher'] ?? null;
        $this->container['digital_wallet_session'] = $data['digital_wallet_session'] ?? null;
        $this->container['wallet_configuration'] = $data['wallet_configuration'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['membership_tier'] === null) {
            $invalidProperties[] = "'membership_tier' can't be null";
        }
        if ($this->container['member'] === null) {
            $invalidProperties[] = "'member' can't be null";
        }
        if ($this->container['merchant_credit'] === null) {
            $invalidProperties[] = "'merchant_credit' can't be null";
        }
        if ($this->container['news_article'] === null) {
            $invalidProperties[] = "'news_article' can't be null";
        }
        if ($this->container['performance'] === null) {
            $invalidProperties[] = "'performance' can't be null";
        }
        if ($this->container['advertisement_credit'] === null) {
            $invalidProperties[] = "'advertisement_credit' can't be null";
        }
        if ($this->container['advertisement_credit_scan'] === null) {
            $invalidProperties[] = "'advertisement_credit_scan' can't be null";
        }
        if ($this->container['dynamic_voucher'] === null) {
            $invalidProperties[] = "'dynamic_voucher' can't be null";
        }
        if ($this->container['static_voucher_campaign'] === null) {
            $invalidProperties[] = "'static_voucher_campaign' can't be null";
        }
        if ($this->container['static_voucher'] === null) {
            $invalidProperties[] = "'static_voucher' can't be null";
        }
        if ($this->container['digital_wallet_session'] === null) {
            $invalidProperties[] = "'digital_wallet_session' can't be null";
        }
        if ($this->container['wallet_configuration'] === null) {
            $invalidProperties[] = "'wallet_configuration' can't be null";
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
     * Gets membership_tier
     *
     * @return string
     */
    public function getMembershipTier()
    {
        return $this->container['membership_tier'];
    }

    /**
     * Sets membership_tier
     *
     * @param string $membership_tier membership_tier
     *
     * @return self
     */
    public function setMembershipTier($membership_tier)
    {
        $this->container['membership_tier'] = $membership_tier;

        return $this;
    }

    /**
     * Gets member
     *
     * @return string
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param string $member member
     *
     * @return self
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets merchant_credit
     *
     * @return string
     */
    public function getMerchantCredit()
    {
        return $this->container['merchant_credit'];
    }

    /**
     * Sets merchant_credit
     *
     * @param string $merchant_credit merchant_credit
     *
     * @return self
     */
    public function setMerchantCredit($merchant_credit)
    {
        $this->container['merchant_credit'] = $merchant_credit;

        return $this;
    }

    /**
     * Gets news_article
     *
     * @return string
     */
    public function getNewsArticle()
    {
        return $this->container['news_article'];
    }

    /**
     * Sets news_article
     *
     * @param string $news_article news_article
     *
     * @return self
     */
    public function setNewsArticle($news_article)
    {
        $this->container['news_article'] = $news_article;

        return $this;
    }

    /**
     * Gets performance
     *
     * @return string
     */
    public function getPerformance()
    {
        return $this->container['performance'];
    }

    /**
     * Sets performance
     *
     * @param string $performance performance
     *
     * @return self
     */
    public function setPerformance($performance)
    {
        $this->container['performance'] = $performance;

        return $this;
    }

    /**
     * Gets advertisement_credit
     *
     * @return string
     */
    public function getAdvertisementCredit()
    {
        return $this->container['advertisement_credit'];
    }

    /**
     * Sets advertisement_credit
     *
     * @param string $advertisement_credit advertisement_credit
     *
     * @return self
     */
    public function setAdvertisementCredit($advertisement_credit)
    {
        $this->container['advertisement_credit'] = $advertisement_credit;

        return $this;
    }

    /**
     * Gets advertisement_credit_scan
     *
     * @return string
     */
    public function getAdvertisementCreditScan()
    {
        return $this->container['advertisement_credit_scan'];
    }

    /**
     * Sets advertisement_credit_scan
     *
     * @param string $advertisement_credit_scan advertisement_credit_scan
     *
     * @return self
     */
    public function setAdvertisementCreditScan($advertisement_credit_scan)
    {
        $this->container['advertisement_credit_scan'] = $advertisement_credit_scan;

        return $this;
    }

    /**
     * Gets dynamic_voucher
     *
     * @return string
     */
    public function getDynamicVoucher()
    {
        return $this->container['dynamic_voucher'];
    }

    /**
     * Sets dynamic_voucher
     *
     * @param string $dynamic_voucher dynamic_voucher
     *
     * @return self
     */
    public function setDynamicVoucher($dynamic_voucher)
    {
        $this->container['dynamic_voucher'] = $dynamic_voucher;

        return $this;
    }

    /**
     * Gets static_voucher_campaign
     *
     * @return string
     */
    public function getStaticVoucherCampaign()
    {
        return $this->container['static_voucher_campaign'];
    }

    /**
     * Sets static_voucher_campaign
     *
     * @param string $static_voucher_campaign static_voucher_campaign
     *
     * @return self
     */
    public function setStaticVoucherCampaign($static_voucher_campaign)
    {
        $this->container['static_voucher_campaign'] = $static_voucher_campaign;

        return $this;
    }

    /**
     * Gets static_voucher
     *
     * @return string
     */
    public function getStaticVoucher()
    {
        return $this->container['static_voucher'];
    }

    /**
     * Sets static_voucher
     *
     * @param string $static_voucher static_voucher
     *
     * @return self
     */
    public function setStaticVoucher($static_voucher)
    {
        $this->container['static_voucher'] = $static_voucher;

        return $this;
    }

    /**
     * Gets digital_wallet_session
     *
     * @return string
     */
    public function getDigitalWalletSession()
    {
        return $this->container['digital_wallet_session'];
    }

    /**
     * Sets digital_wallet_session
     *
     * @param string $digital_wallet_session digital_wallet_session
     *
     * @return self
     */
    public function setDigitalWalletSession($digital_wallet_session)
    {
        $this->container['digital_wallet_session'] = $digital_wallet_session;

        return $this;
    }

    /**
     * Gets wallet_configuration
     *
     * @return string
     */
    public function getWalletConfiguration()
    {
        return $this->container['wallet_configuration'];
    }

    /**
     * Sets wallet_configuration
     *
     * @param string $wallet_configuration wallet_configuration
     *
     * @return self
     */
    public function setWalletConfiguration($wallet_configuration)
    {
        $this->container['wallet_configuration'] = $wallet_configuration;

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


