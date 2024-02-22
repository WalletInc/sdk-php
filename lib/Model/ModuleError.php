<?php
/**
 * ModuleError
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
 * ModuleError Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModuleError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModuleError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'message' => 'string',
        'stack' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'module' => 'string',
        'module_name' => 'string',
        'module_id' => 'string',
        'code' => 'string',
        'method_type' => 'string',
        'stack_trace' => 'mixed',
        'exception' => 'mixed',
        'severity' => 'float',
        'microservice_url' => 'string',
        'microservice_data' => 'mixed',
        'microservice_method' => 'string',
        'microservice_options' => 'mixed',
        'microservice_response_code' => 'string',
        'microservice_response_message' => 'string',
        'microservice_response_http_status' => 'string',
        'microservice_response_fields' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'message' => null,
        'stack' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'module' => null,
        'module_name' => null,
        'module_id' => null,
        'code' => null,
        'method_type' => null,
        'stack_trace' => null,
        'exception' => null,
        'severity' => 'double',
        'microservice_url' => null,
        'microservice_data' => null,
        'microservice_method' => null,
        'microservice_options' => null,
        'microservice_response_code' => null,
        'microservice_response_message' => null,
        'microservice_response_http_status' => null,
        'microservice_response_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'message' => false,
        'stack' => false,
        'id' => false,
        'created_at' => false,
        'updated_at' => false,
        'module' => false,
        'module_name' => false,
        'module_id' => false,
        'code' => false,
        'method_type' => false,
        'stack_trace' => true,
        'exception' => true,
        'severity' => false,
        'microservice_url' => false,
        'microservice_data' => true,
        'microservice_method' => false,
        'microservice_options' => true,
        'microservice_response_code' => false,
        'microservice_response_message' => false,
        'microservice_response_http_status' => false,
        'microservice_response_fields' => true
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
        'name' => 'name',
        'message' => 'message',
        'stack' => 'stack',
        'id' => '#id',
        'created_at' => '#createdAt',
        'updated_at' => '#updatedAt',
        'module' => '#module',
        'module_name' => '#moduleName',
        'module_id' => '#moduleID',
        'code' => 'code',
        'method_type' => '#methodType',
        'stack_trace' => '#stackTrace',
        'exception' => '#exception',
        'severity' => '#severity',
        'microservice_url' => '#microserviceURL',
        'microservice_data' => '#microserviceData',
        'microservice_method' => '#microserviceMethod',
        'microservice_options' => '#microserviceOptions',
        'microservice_response_code' => '#microserviceResponseCode',
        'microservice_response_message' => '#microserviceResponseMessage',
        'microservice_response_http_status' => '#microserviceResponseHTTPStatus',
        'microservice_response_fields' => '#microserviceResponseFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'message' => 'setMessage',
        'stack' => 'setStack',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'module' => 'setModule',
        'module_name' => 'setModuleName',
        'module_id' => 'setModuleId',
        'code' => 'setCode',
        'method_type' => 'setMethodType',
        'stack_trace' => 'setStackTrace',
        'exception' => 'setException',
        'severity' => 'setSeverity',
        'microservice_url' => 'setMicroserviceUrl',
        'microservice_data' => 'setMicroserviceData',
        'microservice_method' => 'setMicroserviceMethod',
        'microservice_options' => 'setMicroserviceOptions',
        'microservice_response_code' => 'setMicroserviceResponseCode',
        'microservice_response_message' => 'setMicroserviceResponseMessage',
        'microservice_response_http_status' => 'setMicroserviceResponseHttpStatus',
        'microservice_response_fields' => 'setMicroserviceResponseFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'message' => 'getMessage',
        'stack' => 'getStack',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'module' => 'getModule',
        'module_name' => 'getModuleName',
        'module_id' => 'getModuleId',
        'code' => 'getCode',
        'method_type' => 'getMethodType',
        'stack_trace' => 'getStackTrace',
        'exception' => 'getException',
        'severity' => 'getSeverity',
        'microservice_url' => 'getMicroserviceUrl',
        'microservice_data' => 'getMicroserviceData',
        'microservice_method' => 'getMicroserviceMethod',
        'microservice_options' => 'getMicroserviceOptions',
        'microservice_response_code' => 'getMicroserviceResponseCode',
        'microservice_response_message' => 'getMicroserviceResponseMessage',
        'microservice_response_http_status' => 'getMicroserviceResponseHttpStatus',
        'microservice_response_fields' => 'getMicroserviceResponseFields'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('stack', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('module', $data ?? [], null);
        $this->setIfExists('module_name', $data ?? [], null);
        $this->setIfExists('module_id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('method_type', $data ?? [], null);
        $this->setIfExists('stack_trace', $data ?? [], null);
        $this->setIfExists('exception', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('microservice_url', $data ?? [], null);
        $this->setIfExists('microservice_data', $data ?? [], null);
        $this->setIfExists('microservice_method', $data ?? [], null);
        $this->setIfExists('microservice_options', $data ?? [], null);
        $this->setIfExists('microservice_response_code', $data ?? [], null);
        $this->setIfExists('microservice_response_message', $data ?? [], null);
        $this->setIfExists('microservice_response_http_status', $data ?? [], null);
        $this->setIfExists('microservice_response_fields', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['module'] === null) {
            $invalidProperties[] = "'module' can't be null";
        }
        if ($this->container['module_name'] === null) {
            $invalidProperties[] = "'module_name' can't be null";
        }
        if ($this->container['module_id'] === null) {
            $invalidProperties[] = "'module_id' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['method_type'] === null) {
            $invalidProperties[] = "'method_type' can't be null";
        }
        if ($this->container['stack_trace'] === null) {
            $invalidProperties[] = "'stack_trace' can't be null";
        }
        if ($this->container['exception'] === null) {
            $invalidProperties[] = "'exception' can't be null";
        }
        if ($this->container['severity'] === null) {
            $invalidProperties[] = "'severity' can't be null";
        }
        if ($this->container['microservice_url'] === null) {
            $invalidProperties[] = "'microservice_url' can't be null";
        }
        if ($this->container['microservice_data'] === null) {
            $invalidProperties[] = "'microservice_data' can't be null";
        }
        if ($this->container['microservice_method'] === null) {
            $invalidProperties[] = "'microservice_method' can't be null";
        }
        if ($this->container['microservice_options'] === null) {
            $invalidProperties[] = "'microservice_options' can't be null";
        }
        if ($this->container['microservice_response_code'] === null) {
            $invalidProperties[] = "'microservice_response_code' can't be null";
        }
        if ($this->container['microservice_response_message'] === null) {
            $invalidProperties[] = "'microservice_response_message' can't be null";
        }
        if ($this->container['microservice_response_http_status'] === null) {
            $invalidProperties[] = "'microservice_response_http_status' can't be null";
        }
        if ($this->container['microservice_response_fields'] === null) {
            $invalidProperties[] = "'microservice_response_fields' can't be null";
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets stack
     *
     * @return string|null
     */
    public function getStack()
    {
        return $this->container['stack'];
    }

    /**
     * Sets stack
     *
     * @param string|null $stack stack
     *
     * @return self
     */
    public function setStack($stack)
    {
        if (is_null($stack)) {
            throw new \InvalidArgumentException('non-nullable stack cannot be null');
        }
        $this->container['stack'] = $stack;

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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param string $module module
     *
     * @return self
     */
    public function setModule($module)
    {
        if (is_null($module)) {
            throw new \InvalidArgumentException('non-nullable module cannot be null');
        }
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets module_name
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->container['module_name'];
    }

    /**
     * Sets module_name
     *
     * @param string $module_name module_name
     *
     * @return self
     */
    public function setModuleName($module_name)
    {
        if (is_null($module_name)) {
            throw new \InvalidArgumentException('non-nullable module_name cannot be null');
        }
        $this->container['module_name'] = $module_name;

        return $this;
    }

    /**
     * Gets module_id
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->container['module_id'];
    }

    /**
     * Sets module_id
     *
     * @param string $module_id module_id
     *
     * @return self
     */
    public function setModuleId($module_id)
    {
        if (is_null($module_id)) {
            throw new \InvalidArgumentException('non-nullable module_id cannot be null');
        }
        $this->container['module_id'] = $module_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets method_type
     *
     * @return string
     */
    public function getMethodType()
    {
        return $this->container['method_type'];
    }

    /**
     * Sets method_type
     *
     * @param string $method_type method_type
     *
     * @return self
     */
    public function setMethodType($method_type)
    {
        if (is_null($method_type)) {
            throw new \InvalidArgumentException('non-nullable method_type cannot be null');
        }
        $this->container['method_type'] = $method_type;

        return $this;
    }

    /**
     * Gets stack_trace
     *
     * @return mixed
     */
    public function getStackTrace()
    {
        return $this->container['stack_trace'];
    }

    /**
     * Sets stack_trace
     *
     * @param mixed $stack_trace stack_trace
     *
     * @return self
     */
    public function setStackTrace($stack_trace)
    {
        if (is_null($stack_trace)) {
            array_push($this->openAPINullablesSetToNull, 'stack_trace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stack_trace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stack_trace'] = $stack_trace;

        return $this;
    }

    /**
     * Gets exception
     *
     * @return mixed
     */
    public function getException()
    {
        return $this->container['exception'];
    }

    /**
     * Sets exception
     *
     * @param mixed $exception exception
     *
     * @return self
     */
    public function setException($exception)
    {
        if (is_null($exception)) {
            array_push($this->openAPINullablesSetToNull, 'exception');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exception', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exception'] = $exception;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return float
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param float $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets microservice_url
     *
     * @return string
     */
    public function getMicroserviceUrl()
    {
        return $this->container['microservice_url'];
    }

    /**
     * Sets microservice_url
     *
     * @param string $microservice_url microservice_url
     *
     * @return self
     */
    public function setMicroserviceUrl($microservice_url)
    {
        if (is_null($microservice_url)) {
            throw new \InvalidArgumentException('non-nullable microservice_url cannot be null');
        }
        $this->container['microservice_url'] = $microservice_url;

        return $this;
    }

    /**
     * Gets microservice_data
     *
     * @return mixed
     */
    public function getMicroserviceData()
    {
        return $this->container['microservice_data'];
    }

    /**
     * Sets microservice_data
     *
     * @param mixed $microservice_data microservice_data
     *
     * @return self
     */
    public function setMicroserviceData($microservice_data)
    {
        if (is_null($microservice_data)) {
            array_push($this->openAPINullablesSetToNull, 'microservice_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('microservice_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['microservice_data'] = $microservice_data;

        return $this;
    }

    /**
     * Gets microservice_method
     *
     * @return string
     */
    public function getMicroserviceMethod()
    {
        return $this->container['microservice_method'];
    }

    /**
     * Sets microservice_method
     *
     * @param string $microservice_method microservice_method
     *
     * @return self
     */
    public function setMicroserviceMethod($microservice_method)
    {
        if (is_null($microservice_method)) {
            throw new \InvalidArgumentException('non-nullable microservice_method cannot be null');
        }
        $this->container['microservice_method'] = $microservice_method;

        return $this;
    }

    /**
     * Gets microservice_options
     *
     * @return mixed
     */
    public function getMicroserviceOptions()
    {
        return $this->container['microservice_options'];
    }

    /**
     * Sets microservice_options
     *
     * @param mixed $microservice_options microservice_options
     *
     * @return self
     */
    public function setMicroserviceOptions($microservice_options)
    {
        if (is_null($microservice_options)) {
            array_push($this->openAPINullablesSetToNull, 'microservice_options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('microservice_options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['microservice_options'] = $microservice_options;

        return $this;
    }

    /**
     * Gets microservice_response_code
     *
     * @return string
     */
    public function getMicroserviceResponseCode()
    {
        return $this->container['microservice_response_code'];
    }

    /**
     * Sets microservice_response_code
     *
     * @param string $microservice_response_code microservice_response_code
     *
     * @return self
     */
    public function setMicroserviceResponseCode($microservice_response_code)
    {
        if (is_null($microservice_response_code)) {
            throw new \InvalidArgumentException('non-nullable microservice_response_code cannot be null');
        }
        $this->container['microservice_response_code'] = $microservice_response_code;

        return $this;
    }

    /**
     * Gets microservice_response_message
     *
     * @return string
     */
    public function getMicroserviceResponseMessage()
    {
        return $this->container['microservice_response_message'];
    }

    /**
     * Sets microservice_response_message
     *
     * @param string $microservice_response_message microservice_response_message
     *
     * @return self
     */
    public function setMicroserviceResponseMessage($microservice_response_message)
    {
        if (is_null($microservice_response_message)) {
            throw new \InvalidArgumentException('non-nullable microservice_response_message cannot be null');
        }
        $this->container['microservice_response_message'] = $microservice_response_message;

        return $this;
    }

    /**
     * Gets microservice_response_http_status
     *
     * @return string
     */
    public function getMicroserviceResponseHttpStatus()
    {
        return $this->container['microservice_response_http_status'];
    }

    /**
     * Sets microservice_response_http_status
     *
     * @param string $microservice_response_http_status microservice_response_http_status
     *
     * @return self
     */
    public function setMicroserviceResponseHttpStatus($microservice_response_http_status)
    {
        if (is_null($microservice_response_http_status)) {
            throw new \InvalidArgumentException('non-nullable microservice_response_http_status cannot be null');
        }
        $this->container['microservice_response_http_status'] = $microservice_response_http_status;

        return $this;
    }

    /**
     * Gets microservice_response_fields
     *
     * @return mixed
     */
    public function getMicroserviceResponseFields()
    {
        return $this->container['microservice_response_fields'];
    }

    /**
     * Sets microservice_response_fields
     *
     * @param mixed $microservice_response_fields microservice_response_fields
     *
     * @return self
     */
    public function setMicroserviceResponseFields($microservice_response_fields)
    {
        if (is_null($microservice_response_fields)) {
            array_push($this->openAPINullablesSetToNull, 'microservice_response_fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('microservice_response_fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['microservice_response_fields'] = $microservice_response_fields;

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


