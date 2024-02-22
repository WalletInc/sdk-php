<?php
/**
 * MemberSearch
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
 * MemberSearch Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MemberSearch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MemberSearch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_archive_included' => 'bool',
        'page_size' => 'int',
        'page_num' => 'int',
        'sort_order' => '\OpenAPI\Client\Model\PaginationRequestWithSortOptionsSortOrder',
        'sort_key' => '\OpenAPI\Client\Model\MemberSearchSortKey',
        'search_key' => '\OpenAPI\Client\Model\MemberSearchSearchKey',
        'search_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_archive_included' => null,
        'page_size' => 'int32',
        'page_num' => 'int32',
        'sort_order' => null,
        'sort_key' => null,
        'search_key' => null,
        'search_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_archive_included' => false,
        'page_size' => false,
        'page_num' => false,
        'sort_order' => false,
        'sort_key' => false,
        'search_key' => false,
        'search_value' => false
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
        'is_archive_included' => 'isArchiveIncluded',
        'page_size' => 'pageSize',
        'page_num' => 'pageNum',
        'sort_order' => 'sortOrder',
        'sort_key' => 'sortKey',
        'search_key' => 'searchKey',
        'search_value' => 'searchValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_archive_included' => 'setIsArchiveIncluded',
        'page_size' => 'setPageSize',
        'page_num' => 'setPageNum',
        'sort_order' => 'setSortOrder',
        'sort_key' => 'setSortKey',
        'search_key' => 'setSearchKey',
        'search_value' => 'setSearchValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_archive_included' => 'getIsArchiveIncluded',
        'page_size' => 'getPageSize',
        'page_num' => 'getPageNum',
        'sort_order' => 'getSortOrder',
        'sort_key' => 'getSortKey',
        'search_key' => 'getSearchKey',
        'search_value' => 'getSearchValue'
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
        $this->setIfExists('is_archive_included', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('page_num', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('sort_key', $data ?? [], null);
        $this->setIfExists('search_key', $data ?? [], null);
        $this->setIfExists('search_value', $data ?? [], null);
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

        if ($this->container['search_key'] === null) {
            $invalidProperties[] = "'search_key' can't be null";
        }
        if ($this->container['search_value'] === null) {
            $invalidProperties[] = "'search_value' can't be null";
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
     * Gets is_archive_included
     *
     * @return bool|null
     */
    public function getIsArchiveIncluded()
    {
        return $this->container['is_archive_included'];
    }

    /**
     * Sets is_archive_included
     *
     * @param bool|null $is_archive_included Denotes if archived records should be included in the response payload
     *
     * @return self
     */
    public function setIsArchiveIncluded($is_archive_included)
    {
        if (is_null($is_archive_included)) {
            throw new \InvalidArgumentException('non-nullable is_archive_included cannot be null');
        }
        $this->container['is_archive_included'] = $is_archive_included;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size Denotes the number of records per page
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_num
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['page_num'];
    }

    /**
     * Sets page_num
     *
     * @param int|null $page_num Denotes the page number
     *
     * @return self
     */
    public function setPageNum($page_num)
    {
        if (is_null($page_num)) {
            throw new \InvalidArgumentException('non-nullable page_num cannot be null');
        }
        $this->container['page_num'] = $page_num;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return \OpenAPI\Client\Model\PaginationRequestWithSortOptionsSortOrder|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param \OpenAPI\Client\Model\PaginationRequestWithSortOptionsSortOrder|null $sort_order sort_order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        if (is_null($sort_order)) {
            throw new \InvalidArgumentException('non-nullable sort_order cannot be null');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return \OpenAPI\Client\Model\MemberSearchSortKey|null
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param \OpenAPI\Client\Model\MemberSearchSortKey|null $sort_key sort_key
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
        if (is_null($sort_key)) {
            throw new \InvalidArgumentException('non-nullable sort_key cannot be null');
        }
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets search_key
     *
     * @return \OpenAPI\Client\Model\MemberSearchSearchKey
     */
    public function getSearchKey()
    {
        return $this->container['search_key'];
    }

    /**
     * Sets search_key
     *
     * @param \OpenAPI\Client\Model\MemberSearchSearchKey $search_key search_key
     *
     * @return self
     */
    public function setSearchKey($search_key)
    {
        if (is_null($search_key)) {
            throw new \InvalidArgumentException('non-nullable search_key cannot be null');
        }
        $this->container['search_key'] = $search_key;

        return $this;
    }

    /**
     * Gets search_value
     *
     * @return string
     */
    public function getSearchValue()
    {
        return $this->container['search_value'];
    }

    /**
     * Sets search_value
     *
     * @param string $search_value The search value to be queried
     *
     * @return self
     */
    public function setSearchValue($search_value)
    {
        if (is_null($search_value)) {
            throw new \InvalidArgumentException('non-nullable search_value cannot be null');
        }
        $this->container['search_value'] = $search_value;

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


