<?php
/**
 * WTWalletPageView
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
 * The version of the OpenAPI document: 2.1.535
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
 * WTWalletPageView Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTWalletPageView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTWalletPageView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ip' => 'string',
        'wallet_object_id' => 'string',
        'wallet_object_prefix' => 'string',
        'parent_object_id' => 'string',
        'parent_object_prefix' => 'string',
        'session_id' => 'string',
        'navigator_agent' => 'string',
        'browser_name' => 'string',
        'browser_version' => 'string',
        'engine_name' => 'string',
        'engine_version' => 'string',
        'o_s_name' => 'string',
        'o_s_version' => 'string',
        'is_mobile' => 'bool',
        'device_vendor' => 'string',
        'device_model' => 'string',
        'device_type' => 'string',
        'phone_verification_token' => 'string',
        'referrer' => 'string',
        'id' => 'string',
        'status' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'region' => 'string',
        'region_name' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'timezone' => 'string',
        'isp' => 'string',
        'org' => 'string',
        'asn' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'merchant_id' => 'string',
        'is_active' => 'bool',
        'geo_point' => '\OpenAPI\Client\Model\WTWalletPageViewGeoPoint'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ip' => null,
        'wallet_object_id' => null,
        'wallet_object_prefix' => null,
        'parent_object_id' => null,
        'parent_object_prefix' => null,
        'session_id' => null,
        'navigator_agent' => null,
        'browser_name' => null,
        'browser_version' => null,
        'engine_name' => null,
        'engine_version' => null,
        'o_s_name' => null,
        'o_s_version' => null,
        'is_mobile' => null,
        'device_vendor' => null,
        'device_model' => null,
        'device_type' => null,
        'phone_verification_token' => null,
        'referrer' => null,
        'id' => null,
        'status' => null,
        'country' => null,
        'country_code' => null,
        'region' => null,
        'region_name' => null,
        'city' => null,
        'zip' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'timezone' => null,
        'isp' => null,
        'org' => null,
        'asn' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'merchant_id' => null,
        'is_active' => null,
        'geo_point' => null
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
        'ip' => 'ip',
        'wallet_object_id' => 'walletObjectID',
        'wallet_object_prefix' => 'walletObjectPrefix',
        'parent_object_id' => 'parentObjectID',
        'parent_object_prefix' => 'parentObjectPrefix',
        'session_id' => 'sessionID',
        'navigator_agent' => 'navigatorAgent',
        'browser_name' => 'browserName',
        'browser_version' => 'browserVersion',
        'engine_name' => 'engineName',
        'engine_version' => 'engineVersion',
        'o_s_name' => 'oSName',
        'o_s_version' => 'oSVersion',
        'is_mobile' => 'isMobile',
        'device_vendor' => 'deviceVendor',
        'device_model' => 'deviceModel',
        'device_type' => 'deviceType',
        'phone_verification_token' => 'phoneVerificationToken',
        'referrer' => 'referrer',
        'id' => 'id',
        'status' => 'status',
        'country' => 'country',
        'country_code' => 'countryCode',
        'region' => 'region',
        'region_name' => 'regionName',
        'city' => 'city',
        'zip' => 'zip',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'timezone' => 'timezone',
        'isp' => 'isp',
        'org' => 'org',
        'asn' => 'asn',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'merchant_id' => 'merchantID',
        'is_active' => 'isActive',
        'geo_point' => 'geoPoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip' => 'setIp',
        'wallet_object_id' => 'setWalletObjectId',
        'wallet_object_prefix' => 'setWalletObjectPrefix',
        'parent_object_id' => 'setParentObjectId',
        'parent_object_prefix' => 'setParentObjectPrefix',
        'session_id' => 'setSessionId',
        'navigator_agent' => 'setNavigatorAgent',
        'browser_name' => 'setBrowserName',
        'browser_version' => 'setBrowserVersion',
        'engine_name' => 'setEngineName',
        'engine_version' => 'setEngineVersion',
        'o_s_name' => 'setOSName',
        'o_s_version' => 'setOSVersion',
        'is_mobile' => 'setIsMobile',
        'device_vendor' => 'setDeviceVendor',
        'device_model' => 'setDeviceModel',
        'device_type' => 'setDeviceType',
        'phone_verification_token' => 'setPhoneVerificationToken',
        'referrer' => 'setReferrer',
        'id' => 'setId',
        'status' => 'setStatus',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'region' => 'setRegion',
        'region_name' => 'setRegionName',
        'city' => 'setCity',
        'zip' => 'setZip',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'timezone' => 'setTimezone',
        'isp' => 'setIsp',
        'org' => 'setOrg',
        'asn' => 'setAsn',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'merchant_id' => 'setMerchantId',
        'is_active' => 'setIsActive',
        'geo_point' => 'setGeoPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip' => 'getIp',
        'wallet_object_id' => 'getWalletObjectId',
        'wallet_object_prefix' => 'getWalletObjectPrefix',
        'parent_object_id' => 'getParentObjectId',
        'parent_object_prefix' => 'getParentObjectPrefix',
        'session_id' => 'getSessionId',
        'navigator_agent' => 'getNavigatorAgent',
        'browser_name' => 'getBrowserName',
        'browser_version' => 'getBrowserVersion',
        'engine_name' => 'getEngineName',
        'engine_version' => 'getEngineVersion',
        'o_s_name' => 'getOSName',
        'o_s_version' => 'getOSVersion',
        'is_mobile' => 'getIsMobile',
        'device_vendor' => 'getDeviceVendor',
        'device_model' => 'getDeviceModel',
        'device_type' => 'getDeviceType',
        'phone_verification_token' => 'getPhoneVerificationToken',
        'referrer' => 'getReferrer',
        'id' => 'getId',
        'status' => 'getStatus',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'region' => 'getRegion',
        'region_name' => 'getRegionName',
        'city' => 'getCity',
        'zip' => 'getZip',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'timezone' => 'getTimezone',
        'isp' => 'getIsp',
        'org' => 'getOrg',
        'asn' => 'getAsn',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'merchant_id' => 'getMerchantId',
        'is_active' => 'getIsActive',
        'geo_point' => 'getGeoPoint'
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
        $this->container['ip'] = $data['ip'] ?? null;
        $this->container['wallet_object_id'] = $data['wallet_object_id'] ?? null;
        $this->container['wallet_object_prefix'] = $data['wallet_object_prefix'] ?? null;
        $this->container['parent_object_id'] = $data['parent_object_id'] ?? null;
        $this->container['parent_object_prefix'] = $data['parent_object_prefix'] ?? null;
        $this->container['session_id'] = $data['session_id'] ?? null;
        $this->container['navigator_agent'] = $data['navigator_agent'] ?? null;
        $this->container['browser_name'] = $data['browser_name'] ?? null;
        $this->container['browser_version'] = $data['browser_version'] ?? null;
        $this->container['engine_name'] = $data['engine_name'] ?? null;
        $this->container['engine_version'] = $data['engine_version'] ?? null;
        $this->container['o_s_name'] = $data['o_s_name'] ?? null;
        $this->container['o_s_version'] = $data['o_s_version'] ?? null;
        $this->container['is_mobile'] = $data['is_mobile'] ?? null;
        $this->container['device_vendor'] = $data['device_vendor'] ?? null;
        $this->container['device_model'] = $data['device_model'] ?? null;
        $this->container['device_type'] = $data['device_type'] ?? null;
        $this->container['phone_verification_token'] = $data['phone_verification_token'] ?? null;
        $this->container['referrer'] = $data['referrer'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['region_name'] = $data['region_name'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['isp'] = $data['isp'] ?? null;
        $this->container['org'] = $data['org'] ?? null;
        $this->container['asn'] = $data['asn'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['geo_point'] = $data['geo_point'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['wallet_object_id'] === null) {
            $invalidProperties[] = "'wallet_object_id' can't be null";
        }
        if ($this->container['wallet_object_prefix'] === null) {
            $invalidProperties[] = "'wallet_object_prefix' can't be null";
        }
        if ($this->container['parent_object_id'] === null) {
            $invalidProperties[] = "'parent_object_id' can't be null";
        }
        if ($this->container['parent_object_prefix'] === null) {
            $invalidProperties[] = "'parent_object_prefix' can't be null";
        }
        if ($this->container['session_id'] === null) {
            $invalidProperties[] = "'session_id' can't be null";
        }
        if ($this->container['navigator_agent'] === null) {
            $invalidProperties[] = "'navigator_agent' can't be null";
        }
        if ($this->container['browser_name'] === null) {
            $invalidProperties[] = "'browser_name' can't be null";
        }
        if ($this->container['browser_version'] === null) {
            $invalidProperties[] = "'browser_version' can't be null";
        }
        if ($this->container['engine_name'] === null) {
            $invalidProperties[] = "'engine_name' can't be null";
        }
        if ($this->container['engine_version'] === null) {
            $invalidProperties[] = "'engine_version' can't be null";
        }
        if ($this->container['o_s_name'] === null) {
            $invalidProperties[] = "'o_s_name' can't be null";
        }
        if ($this->container['o_s_version'] === null) {
            $invalidProperties[] = "'o_s_version' can't be null";
        }
        if ($this->container['is_mobile'] === null) {
            $invalidProperties[] = "'is_mobile' can't be null";
        }
        if ($this->container['device_vendor'] === null) {
            $invalidProperties[] = "'device_vendor' can't be null";
        }
        if ($this->container['device_model'] === null) {
            $invalidProperties[] = "'device_model' can't be null";
        }
        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        if ($this->container['phone_verification_token'] === null) {
            $invalidProperties[] = "'phone_verification_token' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['id']) < 10)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['region_name'] === null) {
            $invalidProperties[] = "'region_name' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['isp'] === null) {
            $invalidProperties[] = "'isp' can't be null";
        }
        if ($this->container['org'] === null) {
            $invalidProperties[] = "'org' can't be null";
        }
        if ($this->container['asn'] === null) {
            $invalidProperties[] = "'asn' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['geo_point'] === null) {
            $invalidProperties[] = "'geo_point' can't be null";
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
     * Gets wallet_object_id
     *
     * @return string
     */
    public function getWalletObjectId()
    {
        return $this->container['wallet_object_id'];
    }

    /**
     * Sets wallet_object_id
     *
     * @param string $wallet_object_id wallet_object_id
     *
     * @return self
     */
    public function setWalletObjectId($wallet_object_id)
    {
        $this->container['wallet_object_id'] = $wallet_object_id;

        return $this;
    }

    /**
     * Gets wallet_object_prefix
     *
     * @return string
     */
    public function getWalletObjectPrefix()
    {
        return $this->container['wallet_object_prefix'];
    }

    /**
     * Sets wallet_object_prefix
     *
     * @param string $wallet_object_prefix wallet_object_prefix
     *
     * @return self
     */
    public function setWalletObjectPrefix($wallet_object_prefix)
    {
        $this->container['wallet_object_prefix'] = $wallet_object_prefix;

        return $this;
    }

    /**
     * Gets parent_object_id
     *
     * @return string
     */
    public function getParentObjectId()
    {
        return $this->container['parent_object_id'];
    }

    /**
     * Sets parent_object_id
     *
     * @param string $parent_object_id parent_object_id
     *
     * @return self
     */
    public function setParentObjectId($parent_object_id)
    {
        $this->container['parent_object_id'] = $parent_object_id;

        return $this;
    }

    /**
     * Gets parent_object_prefix
     *
     * @return string
     */
    public function getParentObjectPrefix()
    {
        return $this->container['parent_object_prefix'];
    }

    /**
     * Sets parent_object_prefix
     *
     * @param string $parent_object_prefix parent_object_prefix
     *
     * @return self
     */
    public function setParentObjectPrefix($parent_object_prefix)
    {
        $this->container['parent_object_prefix'] = $parent_object_prefix;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id session_id
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets navigator_agent
     *
     * @return string
     */
    public function getNavigatorAgent()
    {
        return $this->container['navigator_agent'];
    }

    /**
     * Sets navigator_agent
     *
     * @param string $navigator_agent navigator_agent
     *
     * @return self
     */
    public function setNavigatorAgent($navigator_agent)
    {
        $this->container['navigator_agent'] = $navigator_agent;

        return $this;
    }

    /**
     * Gets browser_name
     *
     * @return string
     */
    public function getBrowserName()
    {
        return $this->container['browser_name'];
    }

    /**
     * Sets browser_name
     *
     * @param string $browser_name browser_name
     *
     * @return self
     */
    public function setBrowserName($browser_name)
    {
        $this->container['browser_name'] = $browser_name;

        return $this;
    }

    /**
     * Gets browser_version
     *
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->container['browser_version'];
    }

    /**
     * Sets browser_version
     *
     * @param string $browser_version browser_version
     *
     * @return self
     */
    public function setBrowserVersion($browser_version)
    {
        $this->container['browser_version'] = $browser_version;

        return $this;
    }

    /**
     * Gets engine_name
     *
     * @return string
     */
    public function getEngineName()
    {
        return $this->container['engine_name'];
    }

    /**
     * Sets engine_name
     *
     * @param string $engine_name engine_name
     *
     * @return self
     */
    public function setEngineName($engine_name)
    {
        $this->container['engine_name'] = $engine_name;

        return $this;
    }

    /**
     * Gets engine_version
     *
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->container['engine_version'];
    }

    /**
     * Sets engine_version
     *
     * @param string $engine_version engine_version
     *
     * @return self
     */
    public function setEngineVersion($engine_version)
    {
        $this->container['engine_version'] = $engine_version;

        return $this;
    }

    /**
     * Gets o_s_name
     *
     * @return string
     */
    public function getOSName()
    {
        return $this->container['o_s_name'];
    }

    /**
     * Sets o_s_name
     *
     * @param string $o_s_name o_s_name
     *
     * @return self
     */
    public function setOSName($o_s_name)
    {
        $this->container['o_s_name'] = $o_s_name;

        return $this;
    }

    /**
     * Gets o_s_version
     *
     * @return string
     */
    public function getOSVersion()
    {
        return $this->container['o_s_version'];
    }

    /**
     * Sets o_s_version
     *
     * @param string $o_s_version o_s_version
     *
     * @return self
     */
    public function setOSVersion($o_s_version)
    {
        $this->container['o_s_version'] = $o_s_version;

        return $this;
    }

    /**
     * Gets is_mobile
     *
     * @return bool
     */
    public function getIsMobile()
    {
        return $this->container['is_mobile'];
    }

    /**
     * Sets is_mobile
     *
     * @param bool $is_mobile is_mobile
     *
     * @return self
     */
    public function setIsMobile($is_mobile)
    {
        $this->container['is_mobile'] = $is_mobile;

        return $this;
    }

    /**
     * Gets device_vendor
     *
     * @return string
     */
    public function getDeviceVendor()
    {
        return $this->container['device_vendor'];
    }

    /**
     * Sets device_vendor
     *
     * @param string $device_vendor device_vendor
     *
     * @return self
     */
    public function setDeviceVendor($device_vendor)
    {
        $this->container['device_vendor'] = $device_vendor;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string $device_model device_model
     *
     * @return self
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type device_type
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets phone_verification_token
     *
     * @return string
     */
    public function getPhoneVerificationToken()
    {
        return $this->container['phone_verification_token'];
    }

    /**
     * Sets phone_verification_token
     *
     * @param string $phone_verification_token phone_verification_token
     *
     * @return self
     */
    public function setPhoneVerificationToken($phone_verification_token)
    {
        $this->container['phone_verification_token'] = $phone_verification_token;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string|null $referrer referrer
     *
     * @return self
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

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
        if ((mb_strlen($id) > 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTWalletPageView., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTWalletPageView., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_name
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     *
     * @param string $region_name region_name
     *
     * @return self
     */
    public function setRegionName($region_name)
    {
        $this->container['region_name'] = $region_name;

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
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets isp
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
     * Sets isp
     *
     * @param string $isp isp
     *
     * @return self
     */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string $org org
     *
     * @return self
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets asn
     *
     * @return string
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param string $asn asn
     *
     * @return self
     */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTWalletPageView., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTWalletPageView., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTWalletPageView., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

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
     * @param bool $is_active Denotes if this resource is active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets geo_point
     *
     * @return \OpenAPI\Client\Model\WTWalletPageViewGeoPoint
     */
    public function getGeoPoint()
    {
        return $this->container['geo_point'];
    }

    /**
     * Sets geo_point
     *
     * @param \OpenAPI\Client\Model\WTWalletPageViewGeoPoint $geo_point geo_point
     *
     * @return self
     */
    public function setGeoPoint($geo_point)
    {
        $this->container['geo_point'] = $geo_point;

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


