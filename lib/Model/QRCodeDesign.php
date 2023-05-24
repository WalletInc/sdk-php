<?php
/**
 * QRCodeDesign
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
 * QRCodeDesign Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class QRCodeDesign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QRCodeDesign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'size' => 'int',
        'margin' => 'int',
        'corner_radius' => 'int',
        'color_dark_hex' => 'string',
        'color_light_hex' => 'string',
        'background_dimming_hex' => 'string',
        'logo_image_url' => 'string',
        'background_image_url' => 'string',
        'animated_gif_background_url' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool',
        'merchant_id' => 'string'
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
        'size' => 'int32',
        'margin' => 'int32',
        'corner_radius' => 'int32',
        'color_dark_hex' => null,
        'color_light_hex' => null,
        'background_dimming_hex' => null,
        'logo_image_url' => null,
        'background_image_url' => null,
        'animated_gif_background_url' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null,
        'merchant_id' => null
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
        'name' => 'name',
        'size' => 'size',
        'margin' => 'margin',
        'corner_radius' => 'cornerRadius',
        'color_dark_hex' => 'colorDarkHex',
        'color_light_hex' => 'colorLightHex',
        'background_dimming_hex' => 'backgroundDimmingHex',
        'logo_image_url' => 'logoImageURL',
        'background_image_url' => 'backgroundImageURL',
        'animated_gif_background_url' => 'animatedGifBackgroundURL',
        'id' => 'id',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive',
        'merchant_id' => 'merchantID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'size' => 'setSize',
        'margin' => 'setMargin',
        'corner_radius' => 'setCornerRadius',
        'color_dark_hex' => 'setColorDarkHex',
        'color_light_hex' => 'setColorLightHex',
        'background_dimming_hex' => 'setBackgroundDimmingHex',
        'logo_image_url' => 'setLogoImageUrl',
        'background_image_url' => 'setBackgroundImageUrl',
        'animated_gif_background_url' => 'setAnimatedGifBackgroundUrl',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive',
        'merchant_id' => 'setMerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'size' => 'getSize',
        'margin' => 'getMargin',
        'corner_radius' => 'getCornerRadius',
        'color_dark_hex' => 'getColorDarkHex',
        'color_light_hex' => 'getColorLightHex',
        'background_dimming_hex' => 'getBackgroundDimmingHex',
        'logo_image_url' => 'getLogoImageUrl',
        'background_image_url' => 'getBackgroundImageUrl',
        'animated_gif_background_url' => 'getAnimatedGifBackgroundUrl',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive',
        'merchant_id' => 'getMerchantId'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['margin'] = $data['margin'] ?? null;
        $this->container['corner_radius'] = $data['corner_radius'] ?? null;
        $this->container['color_dark_hex'] = $data['color_dark_hex'] ?? null;
        $this->container['color_light_hex'] = $data['color_light_hex'] ?? null;
        $this->container['background_dimming_hex'] = $data['background_dimming_hex'] ?? null;
        $this->container['logo_image_url'] = $data['logo_image_url'] ?? null;
        $this->container['background_image_url'] = $data['background_image_url'] ?? null;
        $this->container['animated_gif_background_url'] = $data['animated_gif_background_url'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
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
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if (($this->container['size'] < 1)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
        }

        if ($this->container['margin'] === null) {
            $invalidProperties[] = "'margin' can't be null";
        }
        if (($this->container['margin'] < 1)) {
            $invalidProperties[] = "invalid value for 'margin', must be bigger than or equal to 1.";
        }

        if ($this->container['corner_radius'] === null) {
            $invalidProperties[] = "'corner_radius' can't be null";
        }
        if (($this->container['corner_radius'] < 1)) {
            $invalidProperties[] = "invalid value for 'corner_radius', must be bigger than or equal to 1.";
        }

        if ($this->container['color_dark_hex'] === null) {
            $invalidProperties[] = "'color_dark_hex' can't be null";
        }
        if ((mb_strlen($this->container['color_dark_hex']) < 1)) {
            $invalidProperties[] = "invalid value for 'color_dark_hex', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['color_light_hex'] === null) {
            $invalidProperties[] = "'color_light_hex' can't be null";
        }
        if ((mb_strlen($this->container['color_light_hex']) < 1)) {
            $invalidProperties[] = "invalid value for 'color_light_hex', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['background_dimming_hex'] === null) {
            $invalidProperties[] = "'background_dimming_hex' can't be null";
        }
        if ((mb_strlen($this->container['background_dimming_hex']) < 1)) {
            $invalidProperties[] = "invalid value for 'background_dimming_hex', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['logo_image_url'] === null) {
            $invalidProperties[] = "'logo_image_url' can't be null";
        }
        if ((mb_strlen($this->container['logo_image_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'logo_image_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['background_image_url'] === null) {
            $invalidProperties[] = "'background_image_url' can't be null";
        }
        if ((mb_strlen($this->container['background_image_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'background_image_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['animated_gif_background_url'] === null) {
            $invalidProperties[] = "'animated_gif_background_url' can't be null";
        }
        if ((mb_strlen($this->container['animated_gif_background_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'animated_gif_background_url', the character length must be bigger than or equal to 1.";
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
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
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

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return self
     */
    public function setSize($size)
    {

        if (($size < 1)) {
            throw new \InvalidArgumentException('invalid value for $size when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return int
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param int $margin margin
     *
     * @return self
     */
    public function setMargin($margin)
    {

        if (($margin < 1)) {
            throw new \InvalidArgumentException('invalid value for $margin when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets corner_radius
     *
     * @return int
     */
    public function getCornerRadius()
    {
        return $this->container['corner_radius'];
    }

    /**
     * Sets corner_radius
     *
     * @param int $corner_radius corner_radius
     *
     * @return self
     */
    public function setCornerRadius($corner_radius)
    {

        if (($corner_radius < 1)) {
            throw new \InvalidArgumentException('invalid value for $corner_radius when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['corner_radius'] = $corner_radius;

        return $this;
    }

    /**
     * Gets color_dark_hex
     *
     * @return string
     */
    public function getColorDarkHex()
    {
        return $this->container['color_dark_hex'];
    }

    /**
     * Sets color_dark_hex
     *
     * @param string $color_dark_hex color_dark_hex
     *
     * @return self
     */
    public function setColorDarkHex($color_dark_hex)
    {

        if ((mb_strlen($color_dark_hex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $color_dark_hex when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['color_dark_hex'] = $color_dark_hex;

        return $this;
    }

    /**
     * Gets color_light_hex
     *
     * @return string
     */
    public function getColorLightHex()
    {
        return $this->container['color_light_hex'];
    }

    /**
     * Sets color_light_hex
     *
     * @param string $color_light_hex color_light_hex
     *
     * @return self
     */
    public function setColorLightHex($color_light_hex)
    {

        if ((mb_strlen($color_light_hex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $color_light_hex when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['color_light_hex'] = $color_light_hex;

        return $this;
    }

    /**
     * Gets background_dimming_hex
     *
     * @return string
     */
    public function getBackgroundDimmingHex()
    {
        return $this->container['background_dimming_hex'];
    }

    /**
     * Sets background_dimming_hex
     *
     * @param string $background_dimming_hex background_dimming_hex
     *
     * @return self
     */
    public function setBackgroundDimmingHex($background_dimming_hex)
    {

        if ((mb_strlen($background_dimming_hex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $background_dimming_hex when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['background_dimming_hex'] = $background_dimming_hex;

        return $this;
    }

    /**
     * Gets logo_image_url
     *
     * @return string
     */
    public function getLogoImageUrl()
    {
        return $this->container['logo_image_url'];
    }

    /**
     * Sets logo_image_url
     *
     * @param string $logo_image_url logo_image_url
     *
     * @return self
     */
    public function setLogoImageUrl($logo_image_url)
    {

        if ((mb_strlen($logo_image_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $logo_image_url when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['logo_image_url'] = $logo_image_url;

        return $this;
    }

    /**
     * Gets background_image_url
     *
     * @return string
     */
    public function getBackgroundImageUrl()
    {
        return $this->container['background_image_url'];
    }

    /**
     * Sets background_image_url
     *
     * @param string $background_image_url background_image_url
     *
     * @return self
     */
    public function setBackgroundImageUrl($background_image_url)
    {

        if ((mb_strlen($background_image_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $background_image_url when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['background_image_url'] = $background_image_url;

        return $this;
    }

    /**
     * Gets animated_gif_background_url
     *
     * @return string
     */
    public function getAnimatedGifBackgroundUrl()
    {
        return $this->container['animated_gif_background_url'];
    }

    /**
     * Sets animated_gif_background_url
     *
     * @param string $animated_gif_background_url animated_gif_background_url
     *
     * @return self
     */
    public function setAnimatedGifBackgroundUrl($animated_gif_background_url)
    {

        if ((mb_strlen($animated_gif_background_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $animated_gif_background_url when calling QRCodeDesign., must be bigger than or equal to 1.');
        }

        $this->container['animated_gif_background_url'] = $animated_gif_background_url;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling QRCodeDesign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling QRCodeDesign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling QRCodeDesign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

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


