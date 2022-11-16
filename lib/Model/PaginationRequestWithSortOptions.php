<?php
/**
 * PaginationRequestWithSortOptions
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
 * The version of the OpenAPI document: 2.1.523
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
 * PaginationRequestWithSortOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaginationRequestWithSortOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaginationRequestWithSortOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_archive_included' => 'bool',
        'page_size' => 'int',
        'page_num' => 'int',
        'sort_key' => 'string',
        'sort_order' => 'string'
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
        'sort_key' => null,
        'sort_order' => null
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
        'is_archive_included' => 'isArchiveIncluded',
        'page_size' => 'pageSize',
        'page_num' => 'pageNum',
        'sort_key' => 'sortKey',
        'sort_order' => 'sortOrder'
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
        'sort_key' => 'setSortKey',
        'sort_order' => 'setSortOrder'
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
        'sort_key' => 'getSortKey',
        'sort_order' => 'getSortOrder'
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

    const SORT_KEY_CREATED_AT = 'createdAt';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_CREATED_AT,
        ];
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
        $this->container['is_archive_included'] = $data['is_archive_included'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['page_num'] = $data['page_num'] ?? null;
        $this->container['sort_key'] = $data['sort_key'] ?? null;
        $this->container['sort_order'] = $data['sort_order'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSortKeyAllowableValues();
        if (!is_null($this->container['sort_key']) && !in_array($this->container['sort_key'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sort_key', must be one of '%s'",
                $this->container['sort_key'],
                implode("', '", $allowedValues)
            );
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
        $this->container['page_num'] = $page_num;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return string|null
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param string|null $sort_key Denotes the key using which the records need to be sorted
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
        $allowedValues = $this->getSortKeyAllowableValues();
        if (!is_null($sort_key) && !in_array($sort_key, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sort_key', must be one of '%s'",
                    $sort_key,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param string|null $sort_order Denotes the sort order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

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


