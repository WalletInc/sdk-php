<?php
/**
 * InboundSMS
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
 * The version of the OpenAPI document: 2.1.518
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
 * InboundSMS Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundSMS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundSMS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'automated_reply' => 'string',
        'automated_reply_additional_info' => 'string',
        'sms_sid' => 'string',
        'sms_message_sid' => 'string',
        'sms_status' => 'string',
        'messaging_service_sid' => 'string',
        'account_sid' => 'string',
        'message_sid' => 'string',
        'body' => 'string',
        'num_segments' => 'int',
        'to' => 'string',
        'to_city' => 'string',
        'to_state' => 'string',
        'to_zip' => 'string',
        'to_country' => 'string',
        'from' => 'string',
        'from_city' => 'string',
        'from_state' => 'string',
        'from_zip' => 'string',
        'from_country' => 'string',
        'media_urls' => 'string[]',
        'watson_intent' => 'string',
        'watson_intents' => 'string',
        'watson_context' => 'string',
        'watson_contexts' => 'string',
        'num_media' => 'int',
        'api_version' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'body_lowercase' => 'string',
        'from_localized' => 'string'
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
        'automated_reply' => null,
        'automated_reply_additional_info' => null,
        'sms_sid' => null,
        'sms_message_sid' => null,
        'sms_status' => null,
        'messaging_service_sid' => null,
        'account_sid' => null,
        'message_sid' => null,
        'body' => null,
        'num_segments' => 'int32',
        'to' => null,
        'to_city' => null,
        'to_state' => null,
        'to_zip' => null,
        'to_country' => null,
        'from' => null,
        'from_city' => null,
        'from_state' => null,
        'from_zip' => null,
        'from_country' => null,
        'media_urls' => null,
        'watson_intent' => null,
        'watson_intents' => null,
        'watson_context' => null,
        'watson_contexts' => null,
        'num_media' => 'int32',
        'api_version' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'body_lowercase' => null,
        'from_localized' => null
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
        'automated_reply' => 'automatedReply',
        'automated_reply_additional_info' => 'automatedReplyAdditionalInfo',
        'sms_sid' => 'smsSid',
        'sms_message_sid' => 'smsMessageSid',
        'sms_status' => 'smsStatus',
        'messaging_service_sid' => 'messagingServiceSid',
        'account_sid' => 'accountSid',
        'message_sid' => 'messageSid',
        'body' => 'body',
        'num_segments' => 'numSegments',
        'to' => 'to',
        'to_city' => 'toCity',
        'to_state' => 'toState',
        'to_zip' => 'toZip',
        'to_country' => 'toCountry',
        'from' => 'from',
        'from_city' => 'fromCity',
        'from_state' => 'fromState',
        'from_zip' => 'fromZip',
        'from_country' => 'fromCountry',
        'media_urls' => 'mediaURLs',
        'watson_intent' => 'watsonIntent',
        'watson_intents' => 'watsonIntents',
        'watson_context' => 'watsonContext',
        'watson_contexts' => 'watsonContexts',
        'num_media' => 'numMedia',
        'api_version' => 'apiVersion',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'body_lowercase' => 'bodyLowercase',
        'from_localized' => 'fromLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'automated_reply' => 'setAutomatedReply',
        'automated_reply_additional_info' => 'setAutomatedReplyAdditionalInfo',
        'sms_sid' => 'setSmsSid',
        'sms_message_sid' => 'setSmsMessageSid',
        'sms_status' => 'setSmsStatus',
        'messaging_service_sid' => 'setMessagingServiceSid',
        'account_sid' => 'setAccountSid',
        'message_sid' => 'setMessageSid',
        'body' => 'setBody',
        'num_segments' => 'setNumSegments',
        'to' => 'setTo',
        'to_city' => 'setToCity',
        'to_state' => 'setToState',
        'to_zip' => 'setToZip',
        'to_country' => 'setToCountry',
        'from' => 'setFrom',
        'from_city' => 'setFromCity',
        'from_state' => 'setFromState',
        'from_zip' => 'setFromZip',
        'from_country' => 'setFromCountry',
        'media_urls' => 'setMediaUrls',
        'watson_intent' => 'setWatsonIntent',
        'watson_intents' => 'setWatsonIntents',
        'watson_context' => 'setWatsonContext',
        'watson_contexts' => 'setWatsonContexts',
        'num_media' => 'setNumMedia',
        'api_version' => 'setApiVersion',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'body_lowercase' => 'setBodyLowercase',
        'from_localized' => 'setFromLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'automated_reply' => 'getAutomatedReply',
        'automated_reply_additional_info' => 'getAutomatedReplyAdditionalInfo',
        'sms_sid' => 'getSmsSid',
        'sms_message_sid' => 'getSmsMessageSid',
        'sms_status' => 'getSmsStatus',
        'messaging_service_sid' => 'getMessagingServiceSid',
        'account_sid' => 'getAccountSid',
        'message_sid' => 'getMessageSid',
        'body' => 'getBody',
        'num_segments' => 'getNumSegments',
        'to' => 'getTo',
        'to_city' => 'getToCity',
        'to_state' => 'getToState',
        'to_zip' => 'getToZip',
        'to_country' => 'getToCountry',
        'from' => 'getFrom',
        'from_city' => 'getFromCity',
        'from_state' => 'getFromState',
        'from_zip' => 'getFromZip',
        'from_country' => 'getFromCountry',
        'media_urls' => 'getMediaUrls',
        'watson_intent' => 'getWatsonIntent',
        'watson_intents' => 'getWatsonIntents',
        'watson_context' => 'getWatsonContext',
        'watson_contexts' => 'getWatsonContexts',
        'num_media' => 'getNumMedia',
        'api_version' => 'getApiVersion',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'body_lowercase' => 'getBodyLowercase',
        'from_localized' => 'getFromLocalized'
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
        $this->container['automated_reply'] = $data['automated_reply'] ?? null;
        $this->container['automated_reply_additional_info'] = $data['automated_reply_additional_info'] ?? null;
        $this->container['sms_sid'] = $data['sms_sid'] ?? null;
        $this->container['sms_message_sid'] = $data['sms_message_sid'] ?? null;
        $this->container['sms_status'] = $data['sms_status'] ?? null;
        $this->container['messaging_service_sid'] = $data['messaging_service_sid'] ?? null;
        $this->container['account_sid'] = $data['account_sid'] ?? null;
        $this->container['message_sid'] = $data['message_sid'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['num_segments'] = $data['num_segments'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['to_city'] = $data['to_city'] ?? null;
        $this->container['to_state'] = $data['to_state'] ?? null;
        $this->container['to_zip'] = $data['to_zip'] ?? null;
        $this->container['to_country'] = $data['to_country'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['from_city'] = $data['from_city'] ?? null;
        $this->container['from_state'] = $data['from_state'] ?? null;
        $this->container['from_zip'] = $data['from_zip'] ?? null;
        $this->container['from_country'] = $data['from_country'] ?? null;
        $this->container['media_urls'] = $data['media_urls'] ?? null;
        $this->container['watson_intent'] = $data['watson_intent'] ?? null;
        $this->container['watson_intents'] = $data['watson_intents'] ?? null;
        $this->container['watson_context'] = $data['watson_context'] ?? null;
        $this->container['watson_contexts'] = $data['watson_contexts'] ?? null;
        $this->container['num_media'] = $data['num_media'] ?? null;
        $this->container['api_version'] = $data['api_version'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['body_lowercase'] = $data['body_lowercase'] ?? null;
        $this->container['from_localized'] = $data['from_localized'] ?? null;
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

        if ($this->container['automated_reply'] === null) {
            $invalidProperties[] = "'automated_reply' can't be null";
        }
        if ($this->container['automated_reply_additional_info'] === null) {
            $invalidProperties[] = "'automated_reply_additional_info' can't be null";
        }
        if ($this->container['sms_sid'] === null) {
            $invalidProperties[] = "'sms_sid' can't be null";
        }
        if ($this->container['sms_message_sid'] === null) {
            $invalidProperties[] = "'sms_message_sid' can't be null";
        }
        if ($this->container['sms_status'] === null) {
            $invalidProperties[] = "'sms_status' can't be null";
        }
        if ($this->container['account_sid'] === null) {
            $invalidProperties[] = "'account_sid' can't be null";
        }
        if ($this->container['message_sid'] === null) {
            $invalidProperties[] = "'message_sid' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['num_segments'] === null) {
            $invalidProperties[] = "'num_segments' can't be null";
        }
        if (($this->container['num_segments'] < 0)) {
            $invalidProperties[] = "invalid value for 'num_segments', must be bigger than or equal to 0.";
        }

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['to_city'] === null) {
            $invalidProperties[] = "'to_city' can't be null";
        }
        if ($this->container['to_state'] === null) {
            $invalidProperties[] = "'to_state' can't be null";
        }
        if ($this->container['to_zip'] === null) {
            $invalidProperties[] = "'to_zip' can't be null";
        }
        if ($this->container['to_country'] === null) {
            $invalidProperties[] = "'to_country' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['from_city'] === null) {
            $invalidProperties[] = "'from_city' can't be null";
        }
        if ($this->container['from_state'] === null) {
            $invalidProperties[] = "'from_state' can't be null";
        }
        if ($this->container['from_zip'] === null) {
            $invalidProperties[] = "'from_zip' can't be null";
        }
        if ($this->container['from_country'] === null) {
            $invalidProperties[] = "'from_country' can't be null";
        }
        if ($this->container['num_media'] === null) {
            $invalidProperties[] = "'num_media' can't be null";
        }
        if (($this->container['num_media'] < 0)) {
            $invalidProperties[] = "invalid value for 'num_media', must be bigger than or equal to 0.";
        }

        if ($this->container['api_version'] === null) {
            $invalidProperties[] = "'api_version' can't be null";
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
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['body_lowercase'] === null) {
            $invalidProperties[] = "'body_lowercase' can't be null";
        }
        if ($this->container['from_localized'] === null) {
            $invalidProperties[] = "'from_localized' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $id when calling InboundSMS., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling InboundSMS., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets automated_reply
     *
     * @return string
     */
    public function getAutomatedReply()
    {
        return $this->container['automated_reply'];
    }

    /**
     * Sets automated_reply
     *
     * @param string $automated_reply automated_reply
     *
     * @return self
     */
    public function setAutomatedReply($automated_reply)
    {
        $this->container['automated_reply'] = $automated_reply;

        return $this;
    }

    /**
     * Gets automated_reply_additional_info
     *
     * @return string
     */
    public function getAutomatedReplyAdditionalInfo()
    {
        return $this->container['automated_reply_additional_info'];
    }

    /**
     * Sets automated_reply_additional_info
     *
     * @param string $automated_reply_additional_info automated_reply_additional_info
     *
     * @return self
     */
    public function setAutomatedReplyAdditionalInfo($automated_reply_additional_info)
    {
        $this->container['automated_reply_additional_info'] = $automated_reply_additional_info;

        return $this;
    }

    /**
     * Gets sms_sid
     *
     * @return string
     */
    public function getSmsSid()
    {
        return $this->container['sms_sid'];
    }

    /**
     * Sets sms_sid
     *
     * @param string $sms_sid sms_sid
     *
     * @return self
     */
    public function setSmsSid($sms_sid)
    {
        $this->container['sms_sid'] = $sms_sid;

        return $this;
    }

    /**
     * Gets sms_message_sid
     *
     * @return string
     */
    public function getSmsMessageSid()
    {
        return $this->container['sms_message_sid'];
    }

    /**
     * Sets sms_message_sid
     *
     * @param string $sms_message_sid sms_message_sid
     *
     * @return self
     */
    public function setSmsMessageSid($sms_message_sid)
    {
        $this->container['sms_message_sid'] = $sms_message_sid;

        return $this;
    }

    /**
     * Gets sms_status
     *
     * @return string
     */
    public function getSmsStatus()
    {
        return $this->container['sms_status'];
    }

    /**
     * Sets sms_status
     *
     * @param string $sms_status sms_status
     *
     * @return self
     */
    public function setSmsStatus($sms_status)
    {
        $this->container['sms_status'] = $sms_status;

        return $this;
    }

    /**
     * Gets messaging_service_sid
     *
     * @return string|null
     */
    public function getMessagingServiceSid()
    {
        return $this->container['messaging_service_sid'];
    }

    /**
     * Sets messaging_service_sid
     *
     * @param string|null $messaging_service_sid messaging_service_sid
     *
     * @return self
     */
    public function setMessagingServiceSid($messaging_service_sid)
    {
        $this->container['messaging_service_sid'] = $messaging_service_sid;

        return $this;
    }

    /**
     * Gets account_sid
     *
     * @return string
     */
    public function getAccountSid()
    {
        return $this->container['account_sid'];
    }

    /**
     * Sets account_sid
     *
     * @param string $account_sid account_sid
     *
     * @return self
     */
    public function setAccountSid($account_sid)
    {
        $this->container['account_sid'] = $account_sid;

        return $this;
    }

    /**
     * Gets message_sid
     *
     * @return string
     */
    public function getMessageSid()
    {
        return $this->container['message_sid'];
    }

    /**
     * Sets message_sid
     *
     * @param string $message_sid message_sid
     *
     * @return self
     */
    public function setMessageSid($message_sid)
    {
        $this->container['message_sid'] = $message_sid;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets num_segments
     *
     * @return int
     */
    public function getNumSegments()
    {
        return $this->container['num_segments'];
    }

    /**
     * Sets num_segments
     *
     * @param int $num_segments num_segments
     *
     * @return self
     */
    public function setNumSegments($num_segments)
    {

        if (($num_segments < 0)) {
            throw new \InvalidArgumentException('invalid value for $num_segments when calling InboundSMS., must be bigger than or equal to 0.');
        }

        $this->container['num_segments'] = $num_segments;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets to_city
     *
     * @return string
     */
    public function getToCity()
    {
        return $this->container['to_city'];
    }

    /**
     * Sets to_city
     *
     * @param string $to_city to_city
     *
     * @return self
     */
    public function setToCity($to_city)
    {
        $this->container['to_city'] = $to_city;

        return $this;
    }

    /**
     * Gets to_state
     *
     * @return string
     */
    public function getToState()
    {
        return $this->container['to_state'];
    }

    /**
     * Sets to_state
     *
     * @param string $to_state to_state
     *
     * @return self
     */
    public function setToState($to_state)
    {
        $this->container['to_state'] = $to_state;

        return $this;
    }

    /**
     * Gets to_zip
     *
     * @return string
     */
    public function getToZip()
    {
        return $this->container['to_zip'];
    }

    /**
     * Sets to_zip
     *
     * @param string $to_zip to_zip
     *
     * @return self
     */
    public function setToZip($to_zip)
    {
        $this->container['to_zip'] = $to_zip;

        return $this;
    }

    /**
     * Gets to_country
     *
     * @return string
     */
    public function getToCountry()
    {
        return $this->container['to_country'];
    }

    /**
     * Sets to_country
     *
     * @param string $to_country to_country
     *
     * @return self
     */
    public function setToCountry($to_country)
    {
        $this->container['to_country'] = $to_country;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets from_city
     *
     * @return string
     */
    public function getFromCity()
    {
        return $this->container['from_city'];
    }

    /**
     * Sets from_city
     *
     * @param string $from_city from_city
     *
     * @return self
     */
    public function setFromCity($from_city)
    {
        $this->container['from_city'] = $from_city;

        return $this;
    }

    /**
     * Gets from_state
     *
     * @return string
     */
    public function getFromState()
    {
        return $this->container['from_state'];
    }

    /**
     * Sets from_state
     *
     * @param string $from_state from_state
     *
     * @return self
     */
    public function setFromState($from_state)
    {
        $this->container['from_state'] = $from_state;

        return $this;
    }

    /**
     * Gets from_zip
     *
     * @return string
     */
    public function getFromZip()
    {
        return $this->container['from_zip'];
    }

    /**
     * Sets from_zip
     *
     * @param string $from_zip from_zip
     *
     * @return self
     */
    public function setFromZip($from_zip)
    {
        $this->container['from_zip'] = $from_zip;

        return $this;
    }

    /**
     * Gets from_country
     *
     * @return string
     */
    public function getFromCountry()
    {
        return $this->container['from_country'];
    }

    /**
     * Sets from_country
     *
     * @param string $from_country from_country
     *
     * @return self
     */
    public function setFromCountry($from_country)
    {
        $this->container['from_country'] = $from_country;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]|null
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[]|null $media_urls media_urls
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        $this->container['media_urls'] = $media_urls;

        return $this;
    }

    /**
     * Gets watson_intent
     *
     * @return string|null
     */
    public function getWatsonIntent()
    {
        return $this->container['watson_intent'];
    }

    /**
     * Sets watson_intent
     *
     * @param string|null $watson_intent watson_intent
     *
     * @return self
     */
    public function setWatsonIntent($watson_intent)
    {
        $this->container['watson_intent'] = $watson_intent;

        return $this;
    }

    /**
     * Gets watson_intents
     *
     * @return string|null
     */
    public function getWatsonIntents()
    {
        return $this->container['watson_intents'];
    }

    /**
     * Sets watson_intents
     *
     * @param string|null $watson_intents watson_intents
     *
     * @return self
     */
    public function setWatsonIntents($watson_intents)
    {
        $this->container['watson_intents'] = $watson_intents;

        return $this;
    }

    /**
     * Gets watson_context
     *
     * @return string|null
     */
    public function getWatsonContext()
    {
        return $this->container['watson_context'];
    }

    /**
     * Sets watson_context
     *
     * @param string|null $watson_context watson_context
     *
     * @return self
     */
    public function setWatsonContext($watson_context)
    {
        $this->container['watson_context'] = $watson_context;

        return $this;
    }

    /**
     * Gets watson_contexts
     *
     * @return string|null
     */
    public function getWatsonContexts()
    {
        return $this->container['watson_contexts'];
    }

    /**
     * Sets watson_contexts
     *
     * @param string|null $watson_contexts watson_contexts
     *
     * @return self
     */
    public function setWatsonContexts($watson_contexts)
    {
        $this->container['watson_contexts'] = $watson_contexts;

        return $this;
    }

    /**
     * Gets num_media
     *
     * @return int
     */
    public function getNumMedia()
    {
        return $this->container['num_media'];
    }

    /**
     * Sets num_media
     *
     * @param int $num_media num_media
     *
     * @return self
     */
    public function setNumMedia($num_media)
    {

        if (($num_media < 0)) {
            throw new \InvalidArgumentException('invalid value for $num_media when calling InboundSMS., must be bigger than or equal to 0.');
        }

        $this->container['num_media'] = $num_media;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string $api_version api_version
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling InboundSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling InboundSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling InboundSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets body_lowercase
     *
     * @return string
     */
    public function getBodyLowercase()
    {
        return $this->container['body_lowercase'];
    }

    /**
     * Sets body_lowercase
     *
     * @param string $body_lowercase body_lowercase
     *
     * @return self
     */
    public function setBodyLowercase($body_lowercase)
    {
        $this->container['body_lowercase'] = $body_lowercase;

        return $this;
    }

    /**
     * Gets from_localized
     *
     * @return string
     */
    public function getFromLocalized()
    {
        return $this->container['from_localized'];
    }

    /**
     * Sets from_localized
     *
     * @param string $from_localized from_localized
     *
     * @return self
     */
    public function setFromLocalized($from_localized)
    {
        $this->container['from_localized'] = $from_localized;

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


