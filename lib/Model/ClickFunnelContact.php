<?php
/**
 * ClickFunnelContact
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
 * ClickFunnelContact Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClickFunnelContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClickFunnelContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'double',
        'page_id' => 'double',
        'first_name' => 'string',
        'last_name' => 'string',
        'name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'country' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'webinar_at' => 'mixed',
        'webinar_last_time' => 'mixed',
        'webinar_ext' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'ip' => 'string',
        'funnel_id' => 'double',
        'funnel_step_id' => 'double',
        'unsubscribed_at' => 'mixed',
        'cf_uvid' => 'string',
        'cart_affiliate_id' => 'string',
        'shipping_address' => 'string',
        'shipping_city' => 'string',
        'shipping_country' => 'string',
        'shipping_state' => 'string',
        'shipping_zip' => 'string',
        'vat_number' => 'string',
        'affiliate_id' => 'mixed',
        'aff_sub' => 'string',
        'aff_sub2' => 'string',
        'cf_affiliate_id' => 'mixed',
        'contact_profile' => '\OpenAPI\Client\Model\ClickFunnelContactProfile',
        'time_zone' => 'string',
        'company_name' => 'string',
        'company_industry' => 'string'
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
        'page_id' => 'double',
        'first_name' => null,
        'last_name' => null,
        'name' => null,
        'address' => null,
        'city' => null,
        'country' => null,
        'state' => null,
        'zip' => null,
        'email' => null,
        'phone' => null,
        'webinar_at' => null,
        'webinar_last_time' => null,
        'webinar_ext' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'ip' => null,
        'funnel_id' => 'double',
        'funnel_step_id' => 'double',
        'unsubscribed_at' => null,
        'cf_uvid' => null,
        'cart_affiliate_id' => null,
        'shipping_address' => null,
        'shipping_city' => null,
        'shipping_country' => null,
        'shipping_state' => null,
        'shipping_zip' => null,
        'vat_number' => null,
        'affiliate_id' => null,
        'aff_sub' => null,
        'aff_sub2' => null,
        'cf_affiliate_id' => null,
        'contact_profile' => null,
        'time_zone' => null,
        'company_name' => null,
        'company_industry' => null
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
        'page_id' => 'page_id',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'name' => 'name',
        'address' => 'address',
        'city' => 'city',
        'country' => 'country',
        'state' => 'state',
        'zip' => 'zip',
        'email' => 'email',
        'phone' => 'phone',
        'webinar_at' => 'webinar_at',
        'webinar_last_time' => 'webinar_last_time',
        'webinar_ext' => 'webinar_ext',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'ip' => 'ip',
        'funnel_id' => 'funnel_id',
        'funnel_step_id' => 'funnel_step_id',
        'unsubscribed_at' => 'unsubscribed_at',
        'cf_uvid' => 'cf_uvid',
        'cart_affiliate_id' => 'cart_affiliate_id',
        'shipping_address' => 'shipping_address',
        'shipping_city' => 'shipping_city',
        'shipping_country' => 'shipping_country',
        'shipping_state' => 'shipping_state',
        'shipping_zip' => 'shipping_zip',
        'vat_number' => 'vat_number',
        'affiliate_id' => 'affiliate_id',
        'aff_sub' => 'aff_sub',
        'aff_sub2' => 'aff_sub2',
        'cf_affiliate_id' => 'cf_affiliate_id',
        'contact_profile' => 'contact_profile',
        'time_zone' => 'time_zone',
        'company_name' => 'company_name',
        'company_industry' => 'company_industry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'page_id' => 'setPageId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'name' => 'setName',
        'address' => 'setAddress',
        'city' => 'setCity',
        'country' => 'setCountry',
        'state' => 'setState',
        'zip' => 'setZip',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'webinar_at' => 'setWebinarAt',
        'webinar_last_time' => 'setWebinarLastTime',
        'webinar_ext' => 'setWebinarExt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'ip' => 'setIp',
        'funnel_id' => 'setFunnelId',
        'funnel_step_id' => 'setFunnelStepId',
        'unsubscribed_at' => 'setUnsubscribedAt',
        'cf_uvid' => 'setCfUvid',
        'cart_affiliate_id' => 'setCartAffiliateId',
        'shipping_address' => 'setShippingAddress',
        'shipping_city' => 'setShippingCity',
        'shipping_country' => 'setShippingCountry',
        'shipping_state' => 'setShippingState',
        'shipping_zip' => 'setShippingZip',
        'vat_number' => 'setVatNumber',
        'affiliate_id' => 'setAffiliateId',
        'aff_sub' => 'setAffSub',
        'aff_sub2' => 'setAffSub2',
        'cf_affiliate_id' => 'setCfAffiliateId',
        'contact_profile' => 'setContactProfile',
        'time_zone' => 'setTimeZone',
        'company_name' => 'setCompanyName',
        'company_industry' => 'setCompanyIndustry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'page_id' => 'getPageId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'name' => 'getName',
        'address' => 'getAddress',
        'city' => 'getCity',
        'country' => 'getCountry',
        'state' => 'getState',
        'zip' => 'getZip',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'webinar_at' => 'getWebinarAt',
        'webinar_last_time' => 'getWebinarLastTime',
        'webinar_ext' => 'getWebinarExt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'ip' => 'getIp',
        'funnel_id' => 'getFunnelId',
        'funnel_step_id' => 'getFunnelStepId',
        'unsubscribed_at' => 'getUnsubscribedAt',
        'cf_uvid' => 'getCfUvid',
        'cart_affiliate_id' => 'getCartAffiliateId',
        'shipping_address' => 'getShippingAddress',
        'shipping_city' => 'getShippingCity',
        'shipping_country' => 'getShippingCountry',
        'shipping_state' => 'getShippingState',
        'shipping_zip' => 'getShippingZip',
        'vat_number' => 'getVatNumber',
        'affiliate_id' => 'getAffiliateId',
        'aff_sub' => 'getAffSub',
        'aff_sub2' => 'getAffSub2',
        'cf_affiliate_id' => 'getCfAffiliateId',
        'contact_profile' => 'getContactProfile',
        'time_zone' => 'getTimeZone',
        'company_name' => 'getCompanyName',
        'company_industry' => 'getCompanyIndustry'
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
        $this->container['page_id'] = $data['page_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['webinar_at'] = $data['webinar_at'] ?? null;
        $this->container['webinar_last_time'] = $data['webinar_last_time'] ?? null;
        $this->container['webinar_ext'] = $data['webinar_ext'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['ip'] = $data['ip'] ?? null;
        $this->container['funnel_id'] = $data['funnel_id'] ?? null;
        $this->container['funnel_step_id'] = $data['funnel_step_id'] ?? null;
        $this->container['unsubscribed_at'] = $data['unsubscribed_at'] ?? null;
        $this->container['cf_uvid'] = $data['cf_uvid'] ?? null;
        $this->container['cart_affiliate_id'] = $data['cart_affiliate_id'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['shipping_city'] = $data['shipping_city'] ?? null;
        $this->container['shipping_country'] = $data['shipping_country'] ?? null;
        $this->container['shipping_state'] = $data['shipping_state'] ?? null;
        $this->container['shipping_zip'] = $data['shipping_zip'] ?? null;
        $this->container['vat_number'] = $data['vat_number'] ?? null;
        $this->container['affiliate_id'] = $data['affiliate_id'] ?? null;
        $this->container['aff_sub'] = $data['aff_sub'] ?? null;
        $this->container['aff_sub2'] = $data['aff_sub2'] ?? null;
        $this->container['cf_affiliate_id'] = $data['cf_affiliate_id'] ?? null;
        $this->container['contact_profile'] = $data['contact_profile'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['company_industry'] = $data['company_industry'] ?? null;
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
        if ($this->container['page_id'] === null) {
            $invalidProperties[] = "'page_id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['webinar_ext'] === null) {
            $invalidProperties[] = "'webinar_ext' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['funnel_id'] === null) {
            $invalidProperties[] = "'funnel_id' can't be null";
        }
        if ($this->container['funnel_step_id'] === null) {
            $invalidProperties[] = "'funnel_step_id' can't be null";
        }
        if ($this->container['cf_uvid'] === null) {
            $invalidProperties[] = "'cf_uvid' can't be null";
        }
        if ($this->container['cart_affiliate_id'] === null) {
            $invalidProperties[] = "'cart_affiliate_id' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
        }
        if ($this->container['shipping_city'] === null) {
            $invalidProperties[] = "'shipping_city' can't be null";
        }
        if ($this->container['shipping_country'] === null) {
            $invalidProperties[] = "'shipping_country' can't be null";
        }
        if ($this->container['shipping_state'] === null) {
            $invalidProperties[] = "'shipping_state' can't be null";
        }
        if ($this->container['shipping_zip'] === null) {
            $invalidProperties[] = "'shipping_zip' can't be null";
        }
        if ($this->container['vat_number'] === null) {
            $invalidProperties[] = "'vat_number' can't be null";
        }
        if ($this->container['aff_sub'] === null) {
            $invalidProperties[] = "'aff_sub' can't be null";
        }
        if ($this->container['aff_sub2'] === null) {
            $invalidProperties[] = "'aff_sub2' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['company_industry'] === null) {
            $invalidProperties[] = "'company_industry' can't be null";
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
     * Gets page_id
     *
     * @return double
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param double $page_id page_id
     *
     * @return self
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets webinar_at
     *
     * @return mixed|null
     */
    public function getWebinarAt()
    {
        return $this->container['webinar_at'];
    }

    /**
     * Sets webinar_at
     *
     * @param mixed|null $webinar_at webinar_at
     *
     * @return self
     */
    public function setWebinarAt($webinar_at)
    {
        $this->container['webinar_at'] = $webinar_at;

        return $this;
    }

    /**
     * Gets webinar_last_time
     *
     * @return mixed|null
     */
    public function getWebinarLastTime()
    {
        return $this->container['webinar_last_time'];
    }

    /**
     * Sets webinar_last_time
     *
     * @param mixed|null $webinar_last_time webinar_last_time
     *
     * @return self
     */
    public function setWebinarLastTime($webinar_last_time)
    {
        $this->container['webinar_last_time'] = $webinar_last_time;

        return $this;
    }

    /**
     * Gets webinar_ext
     *
     * @return string
     */
    public function getWebinarExt()
    {
        return $this->container['webinar_ext'];
    }

    /**
     * Sets webinar_ext
     *
     * @param string $webinar_ext webinar_ext
     *
     * @return self
     */
    public function setWebinarExt($webinar_ext)
    {
        $this->container['webinar_ext'] = $webinar_ext;

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
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets funnel_id
     *
     * @return double
     */
    public function getFunnelId()
    {
        return $this->container['funnel_id'];
    }

    /**
     * Sets funnel_id
     *
     * @param double $funnel_id funnel_id
     *
     * @return self
     */
    public function setFunnelId($funnel_id)
    {
        $this->container['funnel_id'] = $funnel_id;

        return $this;
    }

    /**
     * Gets funnel_step_id
     *
     * @return double
     */
    public function getFunnelStepId()
    {
        return $this->container['funnel_step_id'];
    }

    /**
     * Sets funnel_step_id
     *
     * @param double $funnel_step_id funnel_step_id
     *
     * @return self
     */
    public function setFunnelStepId($funnel_step_id)
    {
        $this->container['funnel_step_id'] = $funnel_step_id;

        return $this;
    }

    /**
     * Gets unsubscribed_at
     *
     * @return mixed|null
     */
    public function getUnsubscribedAt()
    {
        return $this->container['unsubscribed_at'];
    }

    /**
     * Sets unsubscribed_at
     *
     * @param mixed|null $unsubscribed_at unsubscribed_at
     *
     * @return self
     */
    public function setUnsubscribedAt($unsubscribed_at)
    {
        $this->container['unsubscribed_at'] = $unsubscribed_at;

        return $this;
    }

    /**
     * Gets cf_uvid
     *
     * @return string
     */
    public function getCfUvid()
    {
        return $this->container['cf_uvid'];
    }

    /**
     * Sets cf_uvid
     *
     * @param string $cf_uvid cf_uvid
     *
     * @return self
     */
    public function setCfUvid($cf_uvid)
    {
        $this->container['cf_uvid'] = $cf_uvid;

        return $this;
    }

    /**
     * Gets cart_affiliate_id
     *
     * @return string
     */
    public function getCartAffiliateId()
    {
        return $this->container['cart_affiliate_id'];
    }

    /**
     * Sets cart_affiliate_id
     *
     * @param string $cart_affiliate_id cart_affiliate_id
     *
     * @return self
     */
    public function setCartAffiliateId($cart_affiliate_id)
    {
        $this->container['cart_affiliate_id'] = $cart_affiliate_id;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param string $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets shipping_city
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->container['shipping_city'];
    }

    /**
     * Sets shipping_city
     *
     * @param string $shipping_city shipping_city
     *
     * @return self
     */
    public function setShippingCity($shipping_city)
    {
        $this->container['shipping_city'] = $shipping_city;

        return $this;
    }

    /**
     * Gets shipping_country
     *
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->container['shipping_country'];
    }

    /**
     * Sets shipping_country
     *
     * @param string $shipping_country shipping_country
     *
     * @return self
     */
    public function setShippingCountry($shipping_country)
    {
        $this->container['shipping_country'] = $shipping_country;

        return $this;
    }

    /**
     * Gets shipping_state
     *
     * @return string
     */
    public function getShippingState()
    {
        return $this->container['shipping_state'];
    }

    /**
     * Sets shipping_state
     *
     * @param string $shipping_state shipping_state
     *
     * @return self
     */
    public function setShippingState($shipping_state)
    {
        $this->container['shipping_state'] = $shipping_state;

        return $this;
    }

    /**
     * Gets shipping_zip
     *
     * @return string
     */
    public function getShippingZip()
    {
        return $this->container['shipping_zip'];
    }

    /**
     * Sets shipping_zip
     *
     * @param string $shipping_zip shipping_zip
     *
     * @return self
     */
    public function setShippingZip($shipping_zip)
    {
        $this->container['shipping_zip'] = $shipping_zip;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number vat_number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets affiliate_id
     *
     * @return mixed|null
     */
    public function getAffiliateId()
    {
        return $this->container['affiliate_id'];
    }

    /**
     * Sets affiliate_id
     *
     * @param mixed|null $affiliate_id affiliate_id
     *
     * @return self
     */
    public function setAffiliateId($affiliate_id)
    {
        $this->container['affiliate_id'] = $affiliate_id;

        return $this;
    }

    /**
     * Gets aff_sub
     *
     * @return string
     */
    public function getAffSub()
    {
        return $this->container['aff_sub'];
    }

    /**
     * Sets aff_sub
     *
     * @param string $aff_sub aff_sub
     *
     * @return self
     */
    public function setAffSub($aff_sub)
    {
        $this->container['aff_sub'] = $aff_sub;

        return $this;
    }

    /**
     * Gets aff_sub2
     *
     * @return string
     */
    public function getAffSub2()
    {
        return $this->container['aff_sub2'];
    }

    /**
     * Sets aff_sub2
     *
     * @param string $aff_sub2 aff_sub2
     *
     * @return self
     */
    public function setAffSub2($aff_sub2)
    {
        $this->container['aff_sub2'] = $aff_sub2;

        return $this;
    }

    /**
     * Gets cf_affiliate_id
     *
     * @return mixed|null
     */
    public function getCfAffiliateId()
    {
        return $this->container['cf_affiliate_id'];
    }

    /**
     * Sets cf_affiliate_id
     *
     * @param mixed|null $cf_affiliate_id cf_affiliate_id
     *
     * @return self
     */
    public function setCfAffiliateId($cf_affiliate_id)
    {
        $this->container['cf_affiliate_id'] = $cf_affiliate_id;

        return $this;
    }

    /**
     * Gets contact_profile
     *
     * @return \OpenAPI\Client\Model\ClickFunnelContactProfile|null
     */
    public function getContactProfile()
    {
        return $this->container['contact_profile'];
    }

    /**
     * Sets contact_profile
     *
     * @param \OpenAPI\Client\Model\ClickFunnelContactProfile|null $contact_profile contact_profile
     *
     * @return self
     */
    public function setContactProfile($contact_profile)
    {
        $this->container['contact_profile'] = $contact_profile;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone time_zone
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
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
     * Gets company_industry
     *
     * @return string
     */
    public function getCompanyIndustry()
    {
        return $this->container['company_industry'];
    }

    /**
     * Sets company_industry
     *
     * @param string $company_industry company_industry
     *
     * @return self
     */
    public function setCompanyIndustry($company_industry)
    {
        $this->container['company_industry'] = $company_industry;

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


