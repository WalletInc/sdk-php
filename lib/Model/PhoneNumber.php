<?php
/**
 * PhoneNumber
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
 * The version of the OpenAPI document: 2.1.517
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
 * PhoneNumber Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PhoneNumber implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PhoneNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_footer' => 'string',
        'help_response' => 'string',
        'stop_response' => 'string',
        'company_name' => 'string',
        'privacy_policy_url' => 'string',
        'terms_of_service_url' => 'string',
        'help_desk_keyword' => 'string',
        'help_desk_queue_response' => 'string',
        'is_connected_to_watson' => 'bool',
        'watson_conversation_workplace_id' => 'string',
        'watson_username' => 'string',
        'watson_password' => 'string',
        'mobile_number' => 'string',
        'is_short_code' => 'bool',
        'twilio_sid' => 'string',
        'twilio_account_sid' => 'string',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'is_approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message_footer' => null,
        'help_response' => null,
        'stop_response' => null,
        'company_name' => null,
        'privacy_policy_url' => null,
        'terms_of_service_url' => null,
        'help_desk_keyword' => null,
        'help_desk_queue_response' => null,
        'is_connected_to_watson' => null,
        'watson_conversation_workplace_id' => null,
        'watson_username' => null,
        'watson_password' => null,
        'mobile_number' => null,
        'is_short_code' => null,
        'twilio_sid' => null,
        'twilio_account_sid' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'is_approved' => null
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
        'message_footer' => 'messageFooter',
        'help_response' => 'helpResponse',
        'stop_response' => 'stopResponse',
        'company_name' => 'companyName',
        'privacy_policy_url' => 'privacyPolicyURL',
        'terms_of_service_url' => 'termsOfServiceURL',
        'help_desk_keyword' => 'helpDeskKeyword',
        'help_desk_queue_response' => 'helpDeskQueueResponse',
        'is_connected_to_watson' => 'isConnectedToWatson',
        'watson_conversation_workplace_id' => 'watsonConversationWorkplaceID',
        'watson_username' => 'watsonUsername',
        'watson_password' => 'watsonPassword',
        'mobile_number' => 'mobileNumber',
        'is_short_code' => 'isShortCode',
        'twilio_sid' => 'twilioSID',
        'twilio_account_sid' => 'twilioAccountSID',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'is_approved' => 'isApproved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_footer' => 'setMessageFooter',
        'help_response' => 'setHelpResponse',
        'stop_response' => 'setStopResponse',
        'company_name' => 'setCompanyName',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'terms_of_service_url' => 'setTermsOfServiceUrl',
        'help_desk_keyword' => 'setHelpDeskKeyword',
        'help_desk_queue_response' => 'setHelpDeskQueueResponse',
        'is_connected_to_watson' => 'setIsConnectedToWatson',
        'watson_conversation_workplace_id' => 'setWatsonConversationWorkplaceId',
        'watson_username' => 'setWatsonUsername',
        'watson_password' => 'setWatsonPassword',
        'mobile_number' => 'setMobileNumber',
        'is_short_code' => 'setIsShortCode',
        'twilio_sid' => 'setTwilioSid',
        'twilio_account_sid' => 'setTwilioAccountSid',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'is_approved' => 'setIsApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_footer' => 'getMessageFooter',
        'help_response' => 'getHelpResponse',
        'stop_response' => 'getStopResponse',
        'company_name' => 'getCompanyName',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'terms_of_service_url' => 'getTermsOfServiceUrl',
        'help_desk_keyword' => 'getHelpDeskKeyword',
        'help_desk_queue_response' => 'getHelpDeskQueueResponse',
        'is_connected_to_watson' => 'getIsConnectedToWatson',
        'watson_conversation_workplace_id' => 'getWatsonConversationWorkplaceId',
        'watson_username' => 'getWatsonUsername',
        'watson_password' => 'getWatsonPassword',
        'mobile_number' => 'getMobileNumber',
        'is_short_code' => 'getIsShortCode',
        'twilio_sid' => 'getTwilioSid',
        'twilio_account_sid' => 'getTwilioAccountSid',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'is_approved' => 'getIsApproved'
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
        $this->container['message_footer'] = $data['message_footer'] ?? null;
        $this->container['help_response'] = $data['help_response'] ?? null;
        $this->container['stop_response'] = $data['stop_response'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['privacy_policy_url'] = $data['privacy_policy_url'] ?? null;
        $this->container['terms_of_service_url'] = $data['terms_of_service_url'] ?? null;
        $this->container['help_desk_keyword'] = $data['help_desk_keyword'] ?? null;
        $this->container['help_desk_queue_response'] = $data['help_desk_queue_response'] ?? null;
        $this->container['is_connected_to_watson'] = $data['is_connected_to_watson'] ?? null;
        $this->container['watson_conversation_workplace_id'] = $data['watson_conversation_workplace_id'] ?? null;
        $this->container['watson_username'] = $data['watson_username'] ?? null;
        $this->container['watson_password'] = $data['watson_password'] ?? null;
        $this->container['mobile_number'] = $data['mobile_number'] ?? null;
        $this->container['is_short_code'] = $data['is_short_code'] ?? null;
        $this->container['twilio_sid'] = $data['twilio_sid'] ?? null;
        $this->container['twilio_account_sid'] = $data['twilio_account_sid'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['is_approved'] = $data['is_approved'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_footer'] === null) {
            $invalidProperties[] = "'message_footer' can't be null";
        }
        if ($this->container['help_response'] === null) {
            $invalidProperties[] = "'help_response' can't be null";
        }
        if ($this->container['stop_response'] === null) {
            $invalidProperties[] = "'stop_response' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['privacy_policy_url'] === null) {
            $invalidProperties[] = "'privacy_policy_url' can't be null";
        }
        if ($this->container['terms_of_service_url'] === null) {
            $invalidProperties[] = "'terms_of_service_url' can't be null";
        }
        if ($this->container['help_desk_keyword'] === null) {
            $invalidProperties[] = "'help_desk_keyword' can't be null";
        }
        if ($this->container['help_desk_queue_response'] === null) {
            $invalidProperties[] = "'help_desk_queue_response' can't be null";
        }
        if ($this->container['is_connected_to_watson'] === null) {
            $invalidProperties[] = "'is_connected_to_watson' can't be null";
        }
        if ($this->container['watson_conversation_workplace_id'] === null) {
            $invalidProperties[] = "'watson_conversation_workplace_id' can't be null";
        }
        if ($this->container['watson_username'] === null) {
            $invalidProperties[] = "'watson_username' can't be null";
        }
        if ($this->container['watson_password'] === null) {
            $invalidProperties[] = "'watson_password' can't be null";
        }
        if ($this->container['mobile_number'] === null) {
            $invalidProperties[] = "'mobile_number' can't be null";
        }
        if ($this->container['is_short_code'] === null) {
            $invalidProperties[] = "'is_short_code' can't be null";
        }
        if ($this->container['twilio_sid'] === null) {
            $invalidProperties[] = "'twilio_sid' can't be null";
        }
        if ($this->container['twilio_account_sid'] === null) {
            $invalidProperties[] = "'twilio_account_sid' can't be null";
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
        if ($this->container['is_approved'] === null) {
            $invalidProperties[] = "'is_approved' can't be null";
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
     * Gets message_footer
     *
     * @return string
     */
    public function getMessageFooter()
    {
        return $this->container['message_footer'];
    }

    /**
     * Sets message_footer
     *
     * @param string $message_footer message_footer
     *
     * @return self
     */
    public function setMessageFooter($message_footer)
    {
        $this->container['message_footer'] = $message_footer;

        return $this;
    }

    /**
     * Gets help_response
     *
     * @return string
     */
    public function getHelpResponse()
    {
        return $this->container['help_response'];
    }

    /**
     * Sets help_response
     *
     * @param string $help_response help_response
     *
     * @return self
     */
    public function setHelpResponse($help_response)
    {
        $this->container['help_response'] = $help_response;

        return $this;
    }

    /**
     * Gets stop_response
     *
     * @return string
     */
    public function getStopResponse()
    {
        return $this->container['stop_response'];
    }

    /**
     * Sets stop_response
     *
     * @param string $stop_response stop_response
     *
     * @return self
     */
    public function setStopResponse($stop_response)
    {
        $this->container['stop_response'] = $stop_response;

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
     * Gets privacy_policy_url
     *
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string $privacy_policy_url privacy_policy_url
     *
     * @return self
     */
    public function setPrivacyPolicyUrl($privacy_policy_url)
    {
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets terms_of_service_url
     *
     * @return string
     */
    public function getTermsOfServiceUrl()
    {
        return $this->container['terms_of_service_url'];
    }

    /**
     * Sets terms_of_service_url
     *
     * @param string $terms_of_service_url terms_of_service_url
     *
     * @return self
     */
    public function setTermsOfServiceUrl($terms_of_service_url)
    {
        $this->container['terms_of_service_url'] = $terms_of_service_url;

        return $this;
    }

    /**
     * Gets help_desk_keyword
     *
     * @return string
     */
    public function getHelpDeskKeyword()
    {
        return $this->container['help_desk_keyword'];
    }

    /**
     * Sets help_desk_keyword
     *
     * @param string $help_desk_keyword help_desk_keyword
     *
     * @return self
     */
    public function setHelpDeskKeyword($help_desk_keyword)
    {
        $this->container['help_desk_keyword'] = $help_desk_keyword;

        return $this;
    }

    /**
     * Gets help_desk_queue_response
     *
     * @return string
     */
    public function getHelpDeskQueueResponse()
    {
        return $this->container['help_desk_queue_response'];
    }

    /**
     * Sets help_desk_queue_response
     *
     * @param string $help_desk_queue_response help_desk_queue_response
     *
     * @return self
     */
    public function setHelpDeskQueueResponse($help_desk_queue_response)
    {
        $this->container['help_desk_queue_response'] = $help_desk_queue_response;

        return $this;
    }

    /**
     * Gets is_connected_to_watson
     *
     * @return bool
     */
    public function getIsConnectedToWatson()
    {
        return $this->container['is_connected_to_watson'];
    }

    /**
     * Sets is_connected_to_watson
     *
     * @param bool $is_connected_to_watson is_connected_to_watson
     *
     * @return self
     */
    public function setIsConnectedToWatson($is_connected_to_watson)
    {
        $this->container['is_connected_to_watson'] = $is_connected_to_watson;

        return $this;
    }

    /**
     * Gets watson_conversation_workplace_id
     *
     * @return string
     */
    public function getWatsonConversationWorkplaceId()
    {
        return $this->container['watson_conversation_workplace_id'];
    }

    /**
     * Sets watson_conversation_workplace_id
     *
     * @param string $watson_conversation_workplace_id watson_conversation_workplace_id
     *
     * @return self
     */
    public function setWatsonConversationWorkplaceId($watson_conversation_workplace_id)
    {
        $this->container['watson_conversation_workplace_id'] = $watson_conversation_workplace_id;

        return $this;
    }

    /**
     * Gets watson_username
     *
     * @return string
     */
    public function getWatsonUsername()
    {
        return $this->container['watson_username'];
    }

    /**
     * Sets watson_username
     *
     * @param string $watson_username watson_username
     *
     * @return self
     */
    public function setWatsonUsername($watson_username)
    {
        $this->container['watson_username'] = $watson_username;

        return $this;
    }

    /**
     * Gets watson_password
     *
     * @return string
     */
    public function getWatsonPassword()
    {
        return $this->container['watson_password'];
    }

    /**
     * Sets watson_password
     *
     * @param string $watson_password watson_password
     *
     * @return self
     */
    public function setWatsonPassword($watson_password)
    {
        $this->container['watson_password'] = $watson_password;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string $mobile_number mobile_number
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets is_short_code
     *
     * @return bool
     */
    public function getIsShortCode()
    {
        return $this->container['is_short_code'];
    }

    /**
     * Sets is_short_code
     *
     * @param bool $is_short_code is_short_code
     *
     * @return self
     */
    public function setIsShortCode($is_short_code)
    {
        $this->container['is_short_code'] = $is_short_code;

        return $this;
    }

    /**
     * Gets twilio_sid
     *
     * @return string
     */
    public function getTwilioSid()
    {
        return $this->container['twilio_sid'];
    }

    /**
     * Sets twilio_sid
     *
     * @param string $twilio_sid twilio_sid
     *
     * @return self
     */
    public function setTwilioSid($twilio_sid)
    {
        $this->container['twilio_sid'] = $twilio_sid;

        return $this;
    }

    /**
     * Gets twilio_account_sid
     *
     * @return string
     */
    public function getTwilioAccountSid()
    {
        return $this->container['twilio_account_sid'];
    }

    /**
     * Sets twilio_account_sid
     *
     * @param string $twilio_account_sid twilio_account_sid
     *
     * @return self
     */
    public function setTwilioAccountSid($twilio_account_sid)
    {
        $this->container['twilio_account_sid'] = $twilio_account_sid;

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
            throw new \InvalidArgumentException('invalid length for $id when calling PhoneNumber., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PhoneNumber., must be bigger than or equal to 10.');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling PhoneNumber., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling PhoneNumber., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling PhoneNumber., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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
     * Gets is_approved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     *
     * @param bool $is_approved is_approved
     *
     * @return self
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

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


