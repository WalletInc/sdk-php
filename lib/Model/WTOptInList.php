<?php
/**
 * WTOptInList
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
 * WTOptInList Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WTOptInList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTOptInList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'is_active' => 'bool',
        'list_name' => 'string',
        'phone_number_id' => 'string',
        'estimated_messages_per_month' => 'int',
        'opt_in_keyword' => 'string',
        'opt_out_keyword' => 'string',
        'opt_in_confirmed_response' => 'string',
        'opt_out_confirmed_response' => 'string',
        'opt_in_confirmed_customer_receives' => 'string',
        'opt_out_confirmed_customer_receives' => 'string',
        'opt_in_confirmed_media_urls' => 'string[]',
        'opt_out_confirmed_media_urls' => 'string[]',
        'is_over21_required' => 'bool',
        'id' => '\OpenAPI\Client\Model\WTWalletPageViewId',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => null,
        'is_active' => null,
        'list_name' => null,
        'phone_number_id' => null,
        'estimated_messages_per_month' => 'int32',
        'opt_in_keyword' => null,
        'opt_out_keyword' => null,
        'opt_in_confirmed_response' => null,
        'opt_out_confirmed_response' => null,
        'opt_in_confirmed_customer_receives' => null,
        'opt_out_confirmed_customer_receives' => null,
        'opt_in_confirmed_media_urls' => null,
        'opt_out_confirmed_media_urls' => null,
        'is_over21_required' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
        'is_active' => false,
        'list_name' => false,
        'phone_number_id' => false,
        'estimated_messages_per_month' => false,
        'opt_in_keyword' => false,
        'opt_out_keyword' => false,
        'opt_in_confirmed_response' => false,
        'opt_out_confirmed_response' => false,
        'opt_in_confirmed_customer_receives' => false,
        'opt_out_confirmed_customer_receives' => false,
        'opt_in_confirmed_media_urls' => false,
        'opt_out_confirmed_media_urls' => false,
        'is_over21_required' => false,
        'id' => false,
        'merchant_id' => false,
        'created_at' => false,
        'updated_at' => false
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
        'employee_id' => 'employeeID',
        'is_active' => 'isActive',
        'list_name' => 'listName',
        'phone_number_id' => 'phoneNumberID',
        'estimated_messages_per_month' => 'estimatedMessagesPerMonth',
        'opt_in_keyword' => 'optInKeyword',
        'opt_out_keyword' => 'optOutKeyword',
        'opt_in_confirmed_response' => 'optInConfirmedResponse',
        'opt_out_confirmed_response' => 'optOutConfirmedResponse',
        'opt_in_confirmed_customer_receives' => 'optInConfirmedCustomerReceives',
        'opt_out_confirmed_customer_receives' => 'optOutConfirmedCustomerReceives',
        'opt_in_confirmed_media_urls' => 'optInConfirmedMediaURLs',
        'opt_out_confirmed_media_urls' => 'optOutConfirmedMediaURLs',
        'is_over21_required' => 'isOver21Required',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'is_active' => 'setIsActive',
        'list_name' => 'setListName',
        'phone_number_id' => 'setPhoneNumberId',
        'estimated_messages_per_month' => 'setEstimatedMessagesPerMonth',
        'opt_in_keyword' => 'setOptInKeyword',
        'opt_out_keyword' => 'setOptOutKeyword',
        'opt_in_confirmed_response' => 'setOptInConfirmedResponse',
        'opt_out_confirmed_response' => 'setOptOutConfirmedResponse',
        'opt_in_confirmed_customer_receives' => 'setOptInConfirmedCustomerReceives',
        'opt_out_confirmed_customer_receives' => 'setOptOutConfirmedCustomerReceives',
        'opt_in_confirmed_media_urls' => 'setOptInConfirmedMediaUrls',
        'opt_out_confirmed_media_urls' => 'setOptOutConfirmedMediaUrls',
        'is_over21_required' => 'setIsOver21Required',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'is_active' => 'getIsActive',
        'list_name' => 'getListName',
        'phone_number_id' => 'getPhoneNumberId',
        'estimated_messages_per_month' => 'getEstimatedMessagesPerMonth',
        'opt_in_keyword' => 'getOptInKeyword',
        'opt_out_keyword' => 'getOptOutKeyword',
        'opt_in_confirmed_response' => 'getOptInConfirmedResponse',
        'opt_out_confirmed_response' => 'getOptOutConfirmedResponse',
        'opt_in_confirmed_customer_receives' => 'getOptInConfirmedCustomerReceives',
        'opt_out_confirmed_customer_receives' => 'getOptOutConfirmedCustomerReceives',
        'opt_in_confirmed_media_urls' => 'getOptInConfirmedMediaUrls',
        'opt_out_confirmed_media_urls' => 'getOptOutConfirmedMediaUrls',
        'is_over21_required' => 'getIsOver21Required',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('list_name', $data ?? [], null);
        $this->setIfExists('phone_number_id', $data ?? [], null);
        $this->setIfExists('estimated_messages_per_month', $data ?? [], null);
        $this->setIfExists('opt_in_keyword', $data ?? [], null);
        $this->setIfExists('opt_out_keyword', $data ?? [], null);
        $this->setIfExists('opt_in_confirmed_response', $data ?? [], null);
        $this->setIfExists('opt_out_confirmed_response', $data ?? [], null);
        $this->setIfExists('opt_in_confirmed_customer_receives', $data ?? [], null);
        $this->setIfExists('opt_out_confirmed_customer_receives', $data ?? [], null);
        $this->setIfExists('opt_in_confirmed_media_urls', $data ?? [], null);
        $this->setIfExists('opt_out_confirmed_media_urls', $data ?? [], null);
        $this->setIfExists('is_over21_required', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['list_name'] === null) {
            $invalidProperties[] = "'list_name' can't be null";
        }
        if ((mb_strlen($this->container['list_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'list_name', the character length must be bigger than or equal to 1.";
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

        if ($this->container['estimated_messages_per_month'] === null) {
            $invalidProperties[] = "'estimated_messages_per_month' can't be null";
        }
        if (($this->container['estimated_messages_per_month'] < 0)) {
            $invalidProperties[] = "invalid value for 'estimated_messages_per_month', must be bigger than or equal to 0.";
        }

        if ($this->container['opt_in_keyword'] === null) {
            $invalidProperties[] = "'opt_in_keyword' can't be null";
        }
        if ((mb_strlen($this->container['opt_in_keyword']) > 30)) {
            $invalidProperties[] = "invalid value for 'opt_in_keyword', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['opt_in_keyword']) < 4)) {
            $invalidProperties[] = "invalid value for 'opt_in_keyword', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['opt_out_keyword'] === null) {
            $invalidProperties[] = "'opt_out_keyword' can't be null";
        }
        if ((mb_strlen($this->container['opt_out_keyword']) > 34)) {
            $invalidProperties[] = "invalid value for 'opt_out_keyword', the character length must be smaller than or equal to 34.";
        }

        if ((mb_strlen($this->container['opt_out_keyword']) < 4)) {
            $invalidProperties[] = "invalid value for 'opt_out_keyword', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['opt_in_confirmed_response'] === null) {
            $invalidProperties[] = "'opt_in_confirmed_response' can't be null";
        }
        if ($this->container['opt_out_confirmed_response'] === null) {
            $invalidProperties[] = "'opt_out_confirmed_response' can't be null";
        }
        if ($this->container['opt_in_confirmed_customer_receives'] === null) {
            $invalidProperties[] = "'opt_in_confirmed_customer_receives' can't be null";
        }
        if ($this->container['opt_out_confirmed_customer_receives'] === null) {
            $invalidProperties[] = "'opt_out_confirmed_customer_receives' can't be null";
        }
        if ($this->container['opt_in_confirmed_media_urls'] === null) {
            $invalidProperties[] = "'opt_in_confirmed_media_urls' can't be null";
        }
        if ($this->container['opt_out_confirmed_media_urls'] === null) {
            $invalidProperties[] = "'opt_out_confirmed_media_urls' can't be null";
        }
        if ($this->container['is_over21_required'] === null) {
            $invalidProperties[] = "'is_over21_required' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTOptInList., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTOptInList., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($employee_id)))) {
            throw new \InvalidArgumentException("invalid value for \$employee_id when calling WTOptInList., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

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
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets list_name
     *
     * @return string
     */
    public function getListName()
    {
        return $this->container['list_name'];
    }

    /**
     * Sets list_name
     *
     * @param string $list_name list_name
     *
     * @return self
     */
    public function setListName($list_name)
    {
        if (is_null($list_name)) {
            throw new \InvalidArgumentException('non-nullable list_name cannot be null');
        }

        if ((mb_strlen($list_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $list_name when calling WTOptInList., must be bigger than or equal to 1.');
        }

        $this->container['list_name'] = $list_name;

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
        if (is_null($phone_number_id)) {
            throw new \InvalidArgumentException('non-nullable phone_number_id cannot be null');
        }
        if ((mb_strlen($phone_number_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling WTOptInList., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($phone_number_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_id when calling WTOptInList., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($phone_number_id)))) {
            throw new \InvalidArgumentException("invalid value for \$phone_number_id when calling WTOptInList., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets estimated_messages_per_month
     *
     * @return int
     */
    public function getEstimatedMessagesPerMonth()
    {
        return $this->container['estimated_messages_per_month'];
    }

    /**
     * Sets estimated_messages_per_month
     *
     * @param int $estimated_messages_per_month estimated_messages_per_month
     *
     * @return self
     */
    public function setEstimatedMessagesPerMonth($estimated_messages_per_month)
    {
        if (is_null($estimated_messages_per_month)) {
            throw new \InvalidArgumentException('non-nullable estimated_messages_per_month cannot be null');
        }

        if (($estimated_messages_per_month < 0)) {
            throw new \InvalidArgumentException('invalid value for $estimated_messages_per_month when calling WTOptInList., must be bigger than or equal to 0.');
        }

        $this->container['estimated_messages_per_month'] = $estimated_messages_per_month;

        return $this;
    }

    /**
     * Gets opt_in_keyword
     *
     * @return string
     */
    public function getOptInKeyword()
    {
        return $this->container['opt_in_keyword'];
    }

    /**
     * Sets opt_in_keyword
     *
     * @param string $opt_in_keyword opt_in_keyword
     *
     * @return self
     */
    public function setOptInKeyword($opt_in_keyword)
    {
        if (is_null($opt_in_keyword)) {
            throw new \InvalidArgumentException('non-nullable opt_in_keyword cannot be null');
        }
        if ((mb_strlen($opt_in_keyword) > 30)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_keyword when calling WTOptInList., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($opt_in_keyword) < 4)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_keyword when calling WTOptInList., must be bigger than or equal to 4.');
        }

        $this->container['opt_in_keyword'] = $opt_in_keyword;

        return $this;
    }

    /**
     * Gets opt_out_keyword
     *
     * @return string
     */
    public function getOptOutKeyword()
    {
        return $this->container['opt_out_keyword'];
    }

    /**
     * Sets opt_out_keyword
     *
     * @param string $opt_out_keyword opt_out_keyword
     *
     * @return self
     */
    public function setOptOutKeyword($opt_out_keyword)
    {
        if (is_null($opt_out_keyword)) {
            throw new \InvalidArgumentException('non-nullable opt_out_keyword cannot be null');
        }
        if ((mb_strlen($opt_out_keyword) > 34)) {
            throw new \InvalidArgumentException('invalid length for $opt_out_keyword when calling WTOptInList., must be smaller than or equal to 34.');
        }
        if ((mb_strlen($opt_out_keyword) < 4)) {
            throw new \InvalidArgumentException('invalid length for $opt_out_keyword when calling WTOptInList., must be bigger than or equal to 4.');
        }

        $this->container['opt_out_keyword'] = $opt_out_keyword;

        return $this;
    }

    /**
     * Gets opt_in_confirmed_response
     *
     * @return string
     */
    public function getOptInConfirmedResponse()
    {
        return $this->container['opt_in_confirmed_response'];
    }

    /**
     * Sets opt_in_confirmed_response
     *
     * @param string $opt_in_confirmed_response opt_in_confirmed_response
     *
     * @return self
     */
    public function setOptInConfirmedResponse($opt_in_confirmed_response)
    {
        if (is_null($opt_in_confirmed_response)) {
            throw new \InvalidArgumentException('non-nullable opt_in_confirmed_response cannot be null');
        }
        $this->container['opt_in_confirmed_response'] = $opt_in_confirmed_response;

        return $this;
    }

    /**
     * Gets opt_out_confirmed_response
     *
     * @return string
     */
    public function getOptOutConfirmedResponse()
    {
        return $this->container['opt_out_confirmed_response'];
    }

    /**
     * Sets opt_out_confirmed_response
     *
     * @param string $opt_out_confirmed_response opt_out_confirmed_response
     *
     * @return self
     */
    public function setOptOutConfirmedResponse($opt_out_confirmed_response)
    {
        if (is_null($opt_out_confirmed_response)) {
            throw new \InvalidArgumentException('non-nullable opt_out_confirmed_response cannot be null');
        }
        $this->container['opt_out_confirmed_response'] = $opt_out_confirmed_response;

        return $this;
    }

    /**
     * Gets opt_in_confirmed_customer_receives
     *
     * @return string
     */
    public function getOptInConfirmedCustomerReceives()
    {
        return $this->container['opt_in_confirmed_customer_receives'];
    }

    /**
     * Sets opt_in_confirmed_customer_receives
     *
     * @param string $opt_in_confirmed_customer_receives opt_in_confirmed_customer_receives
     *
     * @return self
     */
    public function setOptInConfirmedCustomerReceives($opt_in_confirmed_customer_receives)
    {
        if (is_null($opt_in_confirmed_customer_receives)) {
            throw new \InvalidArgumentException('non-nullable opt_in_confirmed_customer_receives cannot be null');
        }
        $this->container['opt_in_confirmed_customer_receives'] = $opt_in_confirmed_customer_receives;

        return $this;
    }

    /**
     * Gets opt_out_confirmed_customer_receives
     *
     * @return string
     */
    public function getOptOutConfirmedCustomerReceives()
    {
        return $this->container['opt_out_confirmed_customer_receives'];
    }

    /**
     * Sets opt_out_confirmed_customer_receives
     *
     * @param string $opt_out_confirmed_customer_receives opt_out_confirmed_customer_receives
     *
     * @return self
     */
    public function setOptOutConfirmedCustomerReceives($opt_out_confirmed_customer_receives)
    {
        if (is_null($opt_out_confirmed_customer_receives)) {
            throw new \InvalidArgumentException('non-nullable opt_out_confirmed_customer_receives cannot be null');
        }
        $this->container['opt_out_confirmed_customer_receives'] = $opt_out_confirmed_customer_receives;

        return $this;
    }

    /**
     * Gets opt_in_confirmed_media_urls
     *
     * @return string[]
     */
    public function getOptInConfirmedMediaUrls()
    {
        return $this->container['opt_in_confirmed_media_urls'];
    }

    /**
     * Sets opt_in_confirmed_media_urls
     *
     * @param string[] $opt_in_confirmed_media_urls opt_in_confirmed_media_urls
     *
     * @return self
     */
    public function setOptInConfirmedMediaUrls($opt_in_confirmed_media_urls)
    {
        if (is_null($opt_in_confirmed_media_urls)) {
            throw new \InvalidArgumentException('non-nullable opt_in_confirmed_media_urls cannot be null');
        }
        $this->container['opt_in_confirmed_media_urls'] = $opt_in_confirmed_media_urls;

        return $this;
    }

    /**
     * Gets opt_out_confirmed_media_urls
     *
     * @return string[]
     */
    public function getOptOutConfirmedMediaUrls()
    {
        return $this->container['opt_out_confirmed_media_urls'];
    }

    /**
     * Sets opt_out_confirmed_media_urls
     *
     * @param string[] $opt_out_confirmed_media_urls opt_out_confirmed_media_urls
     *
     * @return self
     */
    public function setOptOutConfirmedMediaUrls($opt_out_confirmed_media_urls)
    {
        if (is_null($opt_out_confirmed_media_urls)) {
            throw new \InvalidArgumentException('non-nullable opt_out_confirmed_media_urls cannot be null');
        }
        $this->container['opt_out_confirmed_media_urls'] = $opt_out_confirmed_media_urls;

        return $this;
    }

    /**
     * Gets is_over21_required
     *
     * @return bool
     */
    public function getIsOver21Required()
    {
        return $this->container['is_over21_required'];
    }

    /**
     * Sets is_over21_required
     *
     * @param bool $is_over21_required is_over21_required
     *
     * @return self
     */
    public function setIsOver21Required($is_over21_required)
    {
        if (is_null($is_over21_required)) {
            throw new \InvalidArgumentException('non-nullable is_over21_required cannot be null');
        }
        $this->container['is_over21_required'] = $is_over21_required;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \OpenAPI\Client\Model\WTWalletPageViewId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \OpenAPI\Client\Model\WTWalletPageViewId $id id
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
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        if ((mb_strlen($merchant_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTOptInList., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTOptInList., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", ObjectSerializer::toString($merchant_id)))) {
            throw new \InvalidArgumentException("invalid value for \$merchant_id when calling WTOptInList., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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


