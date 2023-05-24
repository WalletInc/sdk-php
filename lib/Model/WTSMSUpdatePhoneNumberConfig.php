<?php
/**
 * WTSMSUpdatePhoneNumberConfig
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
 * WTSMSUpdatePhoneNumberConfig Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTSMSUpdatePhoneNumberConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTSMSUpdatePhoneNumberConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_name' => 'string',
        'privacy_policy_url' => 'string',
        'terms_of_service_url' => 'string',
        'message_footer' => 'string',
        'stop_response' => 'string',
        'help_response' => 'string',
        'help_desk_keyword' => 'string',
        'help_desk_queue_response' => 'string',
        'is_connected_to_watson' => 'bool',
        'watson_username' => 'string',
        'watson_password' => 'string',
        'watson_conversation_workplace_id' => 'string'
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
        'privacy_policy_url' => null,
        'terms_of_service_url' => null,
        'message_footer' => null,
        'stop_response' => null,
        'help_response' => null,
        'help_desk_keyword' => null,
        'help_desk_queue_response' => null,
        'is_connected_to_watson' => null,
        'watson_username' => null,
        'watson_password' => null,
        'watson_conversation_workplace_id' => null
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
        'privacy_policy_url' => 'privacyPolicyURL',
        'terms_of_service_url' => 'termsOfServiceURL',
        'message_footer' => 'messageFooter',
        'stop_response' => 'stopResponse',
        'help_response' => 'helpResponse',
        'help_desk_keyword' => 'helpDeskKeyword',
        'help_desk_queue_response' => 'helpDeskQueueResponse',
        'is_connected_to_watson' => 'isConnectedToWatson',
        'watson_username' => 'watsonUsername',
        'watson_password' => 'watsonPassword',
        'watson_conversation_workplace_id' => 'watsonConversationWorkplaceID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'terms_of_service_url' => 'setTermsOfServiceUrl',
        'message_footer' => 'setMessageFooter',
        'stop_response' => 'setStopResponse',
        'help_response' => 'setHelpResponse',
        'help_desk_keyword' => 'setHelpDeskKeyword',
        'help_desk_queue_response' => 'setHelpDeskQueueResponse',
        'is_connected_to_watson' => 'setIsConnectedToWatson',
        'watson_username' => 'setWatsonUsername',
        'watson_password' => 'setWatsonPassword',
        'watson_conversation_workplace_id' => 'setWatsonConversationWorkplaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'terms_of_service_url' => 'getTermsOfServiceUrl',
        'message_footer' => 'getMessageFooter',
        'stop_response' => 'getStopResponse',
        'help_response' => 'getHelpResponse',
        'help_desk_keyword' => 'getHelpDeskKeyword',
        'help_desk_queue_response' => 'getHelpDeskQueueResponse',
        'is_connected_to_watson' => 'getIsConnectedToWatson',
        'watson_username' => 'getWatsonUsername',
        'watson_password' => 'getWatsonPassword',
        'watson_conversation_workplace_id' => 'getWatsonConversationWorkplaceId'
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
        $this->container['privacy_policy_url'] = $data['privacy_policy_url'] ?? null;
        $this->container['terms_of_service_url'] = $data['terms_of_service_url'] ?? null;
        $this->container['message_footer'] = $data['message_footer'] ?? null;
        $this->container['stop_response'] = $data['stop_response'] ?? null;
        $this->container['help_response'] = $data['help_response'] ?? null;
        $this->container['help_desk_keyword'] = $data['help_desk_keyword'] ?? null;
        $this->container['help_desk_queue_response'] = $data['help_desk_queue_response'] ?? null;
        $this->container['is_connected_to_watson'] = $data['is_connected_to_watson'] ?? null;
        $this->container['watson_username'] = $data['watson_username'] ?? null;
        $this->container['watson_password'] = $data['watson_password'] ?? null;
        $this->container['watson_conversation_workplace_id'] = $data['watson_conversation_workplace_id'] ?? null;
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
        if ($this->container['message_footer'] === null) {
            $invalidProperties[] = "'message_footer' can't be null";
        }
        if ($this->container['stop_response'] === null) {
            $invalidProperties[] = "'stop_response' can't be null";
        }
        if ($this->container['help_response'] === null) {
            $invalidProperties[] = "'help_response' can't be null";
        }
        if ($this->container['help_desk_keyword'] === null) {
            $invalidProperties[] = "'help_desk_keyword' can't be null";
        }
        if ($this->container['help_desk_queue_response'] === null) {
            $invalidProperties[] = "'help_desk_queue_response' can't be null";
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
     * Gets privacy_policy_url
     *
     * @return string|null
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string|null $privacy_policy_url privacy_policy_url
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
     * @return string|null
     */
    public function getTermsOfServiceUrl()
    {
        return $this->container['terms_of_service_url'];
    }

    /**
     * Sets terms_of_service_url
     *
     * @param string|null $terms_of_service_url terms_of_service_url
     *
     * @return self
     */
    public function setTermsOfServiceUrl($terms_of_service_url)
    {
        $this->container['terms_of_service_url'] = $terms_of_service_url;

        return $this;
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
     * @return bool|null
     */
    public function getIsConnectedToWatson()
    {
        return $this->container['is_connected_to_watson'];
    }

    /**
     * Sets is_connected_to_watson
     *
     * @param bool|null $is_connected_to_watson is_connected_to_watson
     *
     * @return self
     */
    public function setIsConnectedToWatson($is_connected_to_watson)
    {
        $this->container['is_connected_to_watson'] = $is_connected_to_watson;

        return $this;
    }

    /**
     * Gets watson_username
     *
     * @return string|null
     */
    public function getWatsonUsername()
    {
        return $this->container['watson_username'];
    }

    /**
     * Sets watson_username
     *
     * @param string|null $watson_username watson_username
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
     * @return string|null
     */
    public function getWatsonPassword()
    {
        return $this->container['watson_password'];
    }

    /**
     * Sets watson_password
     *
     * @param string|null $watson_password watson_password
     *
     * @return self
     */
    public function setWatsonPassword($watson_password)
    {
        $this->container['watson_password'] = $watson_password;

        return $this;
    }

    /**
     * Gets watson_conversation_workplace_id
     *
     * @return string|null
     */
    public function getWatsonConversationWorkplaceId()
    {
        return $this->container['watson_conversation_workplace_id'];
    }

    /**
     * Sets watson_conversation_workplace_id
     *
     * @param string|null $watson_conversation_workplace_id watson_conversation_workplace_id
     *
     * @return self
     */
    public function setWatsonConversationWorkplaceId($watson_conversation_workplace_id)
    {
        $this->container['watson_conversation_workplace_id'] = $watson_conversation_workplace_id;

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


