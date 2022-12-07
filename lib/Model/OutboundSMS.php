<?php
/**
 * OutboundSMS
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
 * OutboundSMS Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OutboundSMS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutboundSMS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'employee_id' => 'string',
        'status' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'body' => 'string',
        'phone_number_id' => 'string',
        'media_urls' => 'string[]',
        'payment_object_broadcast_id' => 'string',
        'body_template' => 'string',
        'status_callback' => 'string',
        'is_sent' => 'bool',
        'sent_at' => '\DateTime',
        'delivered_at' => '\DateTime',
        'message_sid' => 'string',
        'num_segments' => 'int',
        'num_media' => 'int',
        'error_code' => 'string',
        'error_message' => 'string',
        'to' => 'string'
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
        'employee_id' => null,
        'status' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'body' => null,
        'phone_number_id' => null,
        'media_urls' => null,
        'payment_object_broadcast_id' => null,
        'body_template' => null,
        'status_callback' => null,
        'is_sent' => null,
        'sent_at' => 'date-time',
        'delivered_at' => 'date-time',
        'message_sid' => null,
        'num_segments' => 'int32',
        'num_media' => 'int32',
        'error_code' => null,
        'error_message' => null,
        'to' => null
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
        'employee_id' => 'employeeID',
        'status' => 'status',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'body' => 'body',
        'phone_number_id' => 'phoneNumberID',
        'media_urls' => 'mediaURLs',
        'payment_object_broadcast_id' => 'paymentObjectBroadcastID',
        'body_template' => 'bodyTemplate',
        'status_callback' => 'statusCallback',
        'is_sent' => 'isSent',
        'sent_at' => 'sentAt',
        'delivered_at' => 'deliveredAt',
        'message_sid' => 'messageSid',
        'num_segments' => 'numSegments',
        'num_media' => 'numMedia',
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'status' => 'setStatus',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'body' => 'setBody',
        'phone_number_id' => 'setPhoneNumberId',
        'media_urls' => 'setMediaUrls',
        'payment_object_broadcast_id' => 'setPaymentObjectBroadcastId',
        'body_template' => 'setBodyTemplate',
        'status_callback' => 'setStatusCallback',
        'is_sent' => 'setIsSent',
        'sent_at' => 'setSentAt',
        'delivered_at' => 'setDeliveredAt',
        'message_sid' => 'setMessageSid',
        'num_segments' => 'setNumSegments',
        'num_media' => 'setNumMedia',
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'status' => 'getStatus',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'body' => 'getBody',
        'phone_number_id' => 'getPhoneNumberId',
        'media_urls' => 'getMediaUrls',
        'payment_object_broadcast_id' => 'getPaymentObjectBroadcastId',
        'body_template' => 'getBodyTemplate',
        'status_callback' => 'getStatusCallback',
        'is_sent' => 'getIsSent',
        'sent_at' => 'getSentAt',
        'delivered_at' => 'getDeliveredAt',
        'message_sid' => 'getMessageSid',
        'num_segments' => 'getNumSegments',
        'num_media' => 'getNumMedia',
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'to' => 'getTo'
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
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['phone_number_id'] = $data['phone_number_id'] ?? null;
        $this->container['media_urls'] = $data['media_urls'] ?? null;
        $this->container['payment_object_broadcast_id'] = $data['payment_object_broadcast_id'] ?? null;
        $this->container['body_template'] = $data['body_template'] ?? null;
        $this->container['status_callback'] = $data['status_callback'] ?? null;
        $this->container['is_sent'] = $data['is_sent'] ?? null;
        $this->container['sent_at'] = $data['sent_at'] ?? null;
        $this->container['delivered_at'] = $data['delivered_at'] ?? null;
        $this->container['message_sid'] = $data['message_sid'] ?? null;
        $this->container['num_segments'] = $data['num_segments'] ?? null;
        $this->container['num_media'] = $data['num_media'] ?? null;
        $this->container['error_code'] = $data['error_code'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ((mb_strlen($this->container['phone_number_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['phone_number_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'phone_number_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['phone_number_id'])) {
            $invalidProperties[] = "invalid value for 'phone_number_id', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['media_urls'] === null) {
            $invalidProperties[] = "'media_urls' can't be null";
        }
        if (!is_null($this->container['payment_object_broadcast_id']) && (mb_strlen($this->container['payment_object_broadcast_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'payment_object_broadcast_id', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['body_template'] === null) {
            $invalidProperties[] = "'body_template' can't be null";
        }
        if ($this->container['status_callback'] === null) {
            $invalidProperties[] = "'status_callback' can't be null";
        }
        if ((mb_strlen($this->container['status_callback']) < 1)) {
            $invalidProperties[] = "invalid value for 'status_callback', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['is_sent'] === null) {
            $invalidProperties[] = "'is_sent' can't be null";
        }
        if ($this->container['message_sid'] === null) {
            $invalidProperties[] = "'message_sid' can't be null";
        }
        if (!is_null($this->container['num_segments']) && ($this->container['num_segments'] < 0)) {
            $invalidProperties[] = "invalid value for 'num_segments', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['num_media']) && ($this->container['num_media'] < 0)) {
            $invalidProperties[] = "invalid value for 'num_media', must be bigger than or equal to 0.";
        }

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $id when calling OutboundSMS., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling OutboundSMS., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $employee_id when calling OutboundSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling OutboundSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $employee_id))) {
            throw new \InvalidArgumentException("invalid value for $employee_id when calling OutboundSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling OutboundSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling OutboundSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling OutboundSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id phone_number_id
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        if ((mb_strlen($phone_number_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling OutboundSMS., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($phone_number_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling OutboundSMS., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $phone_number_id))) {
            throw new \InvalidArgumentException("invalid value for $phone_number_id when calling OutboundSMS., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[] $media_urls media_urls
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        $this->container['media_urls'] = $media_urls;

        return $this;
    }

    /**
     * Gets payment_object_broadcast_id
     *
     * @return string|null
     */
    public function getPaymentObjectBroadcastId()
    {
        return $this->container['payment_object_broadcast_id'];
    }

    /**
     * Sets payment_object_broadcast_id
     *
     * @param string|null $payment_object_broadcast_id payment_object_broadcast_id
     *
     * @return self
     */
    public function setPaymentObjectBroadcastId($payment_object_broadcast_id)
    {
        if (!is_null($payment_object_broadcast_id) && (mb_strlen($payment_object_broadcast_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $payment_object_broadcast_id when calling OutboundSMS., must be smaller than or equal to 10.');
        }

        $this->container['payment_object_broadcast_id'] = $payment_object_broadcast_id;

        return $this;
    }

    /**
     * Gets body_template
     *
     * @return string
     */
    public function getBodyTemplate()
    {
        return $this->container['body_template'];
    }

    /**
     * Sets body_template
     *
     * @param string $body_template body_template
     *
     * @return self
     */
    public function setBodyTemplate($body_template)
    {
        $this->container['body_template'] = $body_template;

        return $this;
    }

    /**
     * Gets status_callback
     *
     * @return string
     */
    public function getStatusCallback()
    {
        return $this->container['status_callback'];
    }

    /**
     * Sets status_callback
     *
     * @param string $status_callback status_callback
     *
     * @return self
     */
    public function setStatusCallback($status_callback)
    {

        if ((mb_strlen($status_callback) < 1)) {
            throw new \InvalidArgumentException('invalid length for $status_callback when calling OutboundSMS., must be bigger than or equal to 1.');
        }

        $this->container['status_callback'] = $status_callback;

        return $this;
    }

    /**
     * Gets is_sent
     *
     * @return bool
     */
    public function getIsSent()
    {
        return $this->container['is_sent'];
    }

    /**
     * Sets is_sent
     *
     * @param bool $is_sent is_sent
     *
     * @return self
     */
    public function setIsSent($is_sent)
    {
        $this->container['is_sent'] = $is_sent;

        return $this;
    }

    /**
     * Gets sent_at
     *
     * @return \DateTime|null
     */
    public function getSentAt()
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param \DateTime|null $sent_at sent_at
     *
     * @return self
     */
    public function setSentAt($sent_at)
    {
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets delivered_at
     *
     * @return \DateTime|null
     */
    public function getDeliveredAt()
    {
        return $this->container['delivered_at'];
    }

    /**
     * Sets delivered_at
     *
     * @param \DateTime|null $delivered_at delivered_at
     *
     * @return self
     */
    public function setDeliveredAt($delivered_at)
    {
        $this->container['delivered_at'] = $delivered_at;

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
     * Gets num_segments
     *
     * @return int|null
     */
    public function getNumSegments()
    {
        return $this->container['num_segments'];
    }

    /**
     * Sets num_segments
     *
     * @param int|null $num_segments num_segments
     *
     * @return self
     */
    public function setNumSegments($num_segments)
    {

        if (!is_null($num_segments) && ($num_segments < 0)) {
            throw new \InvalidArgumentException('invalid value for $num_segments when calling OutboundSMS., must be bigger than or equal to 0.');
        }

        $this->container['num_segments'] = $num_segments;

        return $this;
    }

    /**
     * Gets num_media
     *
     * @return int|null
     */
    public function getNumMedia()
    {
        return $this->container['num_media'];
    }

    /**
     * Sets num_media
     *
     * @param int|null $num_media num_media
     *
     * @return self
     */
    public function setNumMedia($num_media)
    {

        if (!is_null($num_media) && ($num_media < 0)) {
            throw new \InvalidArgumentException('invalid value for $num_media when calling OutboundSMS., must be bigger than or equal to 0.');
        }

        $this->container['num_media'] = $num_media;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string|null $error_code error_code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message error_message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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


