<?php
/**
 * FetchDomainsByIndustry200Response
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
 * FetchDomainsByIndustry200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FetchDomainsByIndustry200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fetchDomainsByIndustry_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entertainment' => 'mixed[]',
        'grocery' => 'mixed[]',
        'service' => 'mixed[]',
        'casino' => 'mixed[]',
        'hospitality' => 'mixed[]',
        'food' => 'mixed[]',
        'retail' => 'mixed[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entertainment' => null,
        'grocery' => null,
        'service' => null,
        'casino' => null,
        'hospitality' => null,
        'food' => null,
        'retail' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'entertainment' => false,
        'grocery' => false,
        'service' => false,
        'casino' => false,
        'hospitality' => false,
        'food' => false,
        'retail' => false
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
        'entertainment' => 'entertainment',
        'grocery' => 'grocery',
        'service' => 'service',
        'casino' => 'casino',
        'hospitality' => 'hospitality',
        'food' => 'food',
        'retail' => 'retail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entertainment' => 'setEntertainment',
        'grocery' => 'setGrocery',
        'service' => 'setService',
        'casino' => 'setCasino',
        'hospitality' => 'setHospitality',
        'food' => 'setFood',
        'retail' => 'setRetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entertainment' => 'getEntertainment',
        'grocery' => 'getGrocery',
        'service' => 'getService',
        'casino' => 'getCasino',
        'hospitality' => 'getHospitality',
        'food' => 'getFood',
        'retail' => 'getRetail'
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
        $this->setIfExists('entertainment', $data ?? [], null);
        $this->setIfExists('grocery', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
        $this->setIfExists('casino', $data ?? [], null);
        $this->setIfExists('hospitality', $data ?? [], null);
        $this->setIfExists('food', $data ?? [], null);
        $this->setIfExists('retail', $data ?? [], null);
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

        if ($this->container['entertainment'] === null) {
            $invalidProperties[] = "'entertainment' can't be null";
        }
        if ($this->container['grocery'] === null) {
            $invalidProperties[] = "'grocery' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['casino'] === null) {
            $invalidProperties[] = "'casino' can't be null";
        }
        if ($this->container['hospitality'] === null) {
            $invalidProperties[] = "'hospitality' can't be null";
        }
        if ($this->container['food'] === null) {
            $invalidProperties[] = "'food' can't be null";
        }
        if ($this->container['retail'] === null) {
            $invalidProperties[] = "'retail' can't be null";
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
     * Gets entertainment
     *
     * @return mixed[]
     */
    public function getEntertainment()
    {
        return $this->container['entertainment'];
    }

    /**
     * Sets entertainment
     *
     * @param mixed[] $entertainment entertainment
     *
     * @return self
     */
    public function setEntertainment($entertainment)
    {
        if (is_null($entertainment)) {
            throw new \InvalidArgumentException('non-nullable entertainment cannot be null');
        }
        $this->container['entertainment'] = $entertainment;

        return $this;
    }

    /**
     * Gets grocery
     *
     * @return mixed[]
     */
    public function getGrocery()
    {
        return $this->container['grocery'];
    }

    /**
     * Sets grocery
     *
     * @param mixed[] $grocery grocery
     *
     * @return self
     */
    public function setGrocery($grocery)
    {
        if (is_null($grocery)) {
            throw new \InvalidArgumentException('non-nullable grocery cannot be null');
        }
        $this->container['grocery'] = $grocery;

        return $this;
    }

    /**
     * Gets service
     *
     * @return mixed[]
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param mixed[] $service service
     *
     * @return self
     */
    public function setService($service)
    {
        if (is_null($service)) {
            throw new \InvalidArgumentException('non-nullable service cannot be null');
        }
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets casino
     *
     * @return mixed[]
     */
    public function getCasino()
    {
        return $this->container['casino'];
    }

    /**
     * Sets casino
     *
     * @param mixed[] $casino casino
     *
     * @return self
     */
    public function setCasino($casino)
    {
        if (is_null($casino)) {
            throw new \InvalidArgumentException('non-nullable casino cannot be null');
        }
        $this->container['casino'] = $casino;

        return $this;
    }

    /**
     * Gets hospitality
     *
     * @return mixed[]
     */
    public function getHospitality()
    {
        return $this->container['hospitality'];
    }

    /**
     * Sets hospitality
     *
     * @param mixed[] $hospitality hospitality
     *
     * @return self
     */
    public function setHospitality($hospitality)
    {
        if (is_null($hospitality)) {
            throw new \InvalidArgumentException('non-nullable hospitality cannot be null');
        }
        $this->container['hospitality'] = $hospitality;

        return $this;
    }

    /**
     * Gets food
     *
     * @return mixed[]
     */
    public function getFood()
    {
        return $this->container['food'];
    }

    /**
     * Sets food
     *
     * @param mixed[] $food food
     *
     * @return self
     */
    public function setFood($food)
    {
        if (is_null($food)) {
            throw new \InvalidArgumentException('non-nullable food cannot be null');
        }
        $this->container['food'] = $food;

        return $this;
    }

    /**
     * Gets retail
     *
     * @return mixed[]
     */
    public function getRetail()
    {
        return $this->container['retail'];
    }

    /**
     * Sets retail
     *
     * @param mixed[] $retail retail
     *
     * @return self
     */
    public function setRetail($retail)
    {
        if (is_null($retail)) {
            throw new \InvalidArgumentException('non-nullable retail cannot be null');
        }
        $this->container['retail'] = $retail;

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


