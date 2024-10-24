<?php
/**
 * WTQRCodeDesignUpdateParams
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
 * WTQRCodeDesignUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WTQRCodeDesignUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTQRCodeDesignUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'size' => 'int',
        'margin' => 'int',
        'is_margin_white' => 'bool',
        'corner_radius' => 'int',
        'color_dark_hex' => 'string',
        'color_light_hex' => 'string',
        'background_dimming_hex' => 'string',
        'logo_image_url' => 'string',
        'background_image_url' => 'string',
        'animated_gif_background_url' => 'string'
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
        'is_margin_white' => null,
        'corner_radius' => 'int32',
        'color_dark_hex' => null,
        'color_light_hex' => null,
        'background_dimming_hex' => null,
        'logo_image_url' => null,
        'background_image_url' => null,
        'animated_gif_background_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'size' => false,
        'margin' => false,
        'is_margin_white' => false,
        'corner_radius' => false,
        'color_dark_hex' => false,
        'color_light_hex' => false,
        'background_dimming_hex' => false,
        'logo_image_url' => false,
        'background_image_url' => false,
        'animated_gif_background_url' => false
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
        'size' => 'size',
        'margin' => 'margin',
        'is_margin_white' => 'isMarginWhite',
        'corner_radius' => 'cornerRadius',
        'color_dark_hex' => 'colorDarkHex',
        'color_light_hex' => 'colorLightHex',
        'background_dimming_hex' => 'backgroundDimmingHex',
        'logo_image_url' => 'logoImageURL',
        'background_image_url' => 'backgroundImageURL',
        'animated_gif_background_url' => 'animatedGifBackgroundURL'
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
        'is_margin_white' => 'setIsMarginWhite',
        'corner_radius' => 'setCornerRadius',
        'color_dark_hex' => 'setColorDarkHex',
        'color_light_hex' => 'setColorLightHex',
        'background_dimming_hex' => 'setBackgroundDimmingHex',
        'logo_image_url' => 'setLogoImageUrl',
        'background_image_url' => 'setBackgroundImageUrl',
        'animated_gif_background_url' => 'setAnimatedGifBackgroundUrl'
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
        'is_margin_white' => 'getIsMarginWhite',
        'corner_radius' => 'getCornerRadius',
        'color_dark_hex' => 'getColorDarkHex',
        'color_light_hex' => 'getColorLightHex',
        'background_dimming_hex' => 'getBackgroundDimmingHex',
        'logo_image_url' => 'getLogoImageUrl',
        'background_image_url' => 'getBackgroundImageUrl',
        'animated_gif_background_url' => 'getAnimatedGifBackgroundUrl'
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
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('margin', $data ?? [], null);
        $this->setIfExists('is_margin_white', $data ?? [], null);
        $this->setIfExists('corner_radius', $data ?? [], null);
        $this->setIfExists('color_dark_hex', $data ?? [], null);
        $this->setIfExists('color_light_hex', $data ?? [], null);
        $this->setIfExists('background_dimming_hex', $data ?? [], null);
        $this->setIfExists('logo_image_url', $data ?? [], null);
        $this->setIfExists('background_image_url', $data ?? [], null);
        $this->setIfExists('animated_gif_background_url', $data ?? [], null);
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
        if (($this->container['margin'] < 0)) {
            $invalidProperties[] = "invalid value for 'margin', must be bigger than or equal to 0.";
        }

        if ($this->container['is_margin_white'] === null) {
            $invalidProperties[] = "'is_margin_white' can't be null";
        }
        if ($this->container['corner_radius'] === null) {
            $invalidProperties[] = "'corner_radius' can't be null";
        }
        if (($this->container['corner_radius'] < 0)) {
            $invalidProperties[] = "invalid value for 'corner_radius', must be bigger than or equal to 0.";
        }

        if ($this->container['color_dark_hex'] === null) {
            $invalidProperties[] = "'color_dark_hex' can't be null";
        }
        if ((mb_strlen($this->container['color_dark_hex']) < 0)) {
            $invalidProperties[] = "invalid value for 'color_dark_hex', the character length must be bigger than or equal to 0.";
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

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 1.');
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
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        if (($size < 1)) {
            throw new \InvalidArgumentException('invalid value for $size when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 1.');
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
        if (is_null($margin)) {
            throw new \InvalidArgumentException('non-nullable margin cannot be null');
        }

        if (($margin < 0)) {
            throw new \InvalidArgumentException('invalid value for $margin when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 0.');
        }

        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets is_margin_white
     *
     * @return bool
     */
    public function getIsMarginWhite()
    {
        return $this->container['is_margin_white'];
    }

    /**
     * Sets is_margin_white
     *
     * @param bool $is_margin_white is_margin_white
     *
     * @return self
     */
    public function setIsMarginWhite($is_margin_white)
    {
        if (is_null($is_margin_white)) {
            throw new \InvalidArgumentException('non-nullable is_margin_white cannot be null');
        }
        $this->container['is_margin_white'] = $is_margin_white;

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
        if (is_null($corner_radius)) {
            throw new \InvalidArgumentException('non-nullable corner_radius cannot be null');
        }

        if (($corner_radius < 0)) {
            throw new \InvalidArgumentException('invalid value for $corner_radius when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 0.');
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
        if (is_null($color_dark_hex)) {
            throw new \InvalidArgumentException('non-nullable color_dark_hex cannot be null');
        }

        if ((mb_strlen($color_dark_hex) < 0)) {
            throw new \InvalidArgumentException('invalid length for $color_dark_hex when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 0.');
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
        if (is_null($color_light_hex)) {
            throw new \InvalidArgumentException('non-nullable color_light_hex cannot be null');
        }

        if ((mb_strlen($color_light_hex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $color_light_hex when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 1.');
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
        if (is_null($background_dimming_hex)) {
            throw new \InvalidArgumentException('non-nullable background_dimming_hex cannot be null');
        }

        if ((mb_strlen($background_dimming_hex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $background_dimming_hex when calling WTQRCodeDesignUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['background_dimming_hex'] = $background_dimming_hex;

        return $this;
    }

    /**
     * Gets logo_image_url
     *
     * @return string|null
     */
    public function getLogoImageUrl()
    {
        return $this->container['logo_image_url'];
    }

    /**
     * Sets logo_image_url
     *
     * @param string|null $logo_image_url logo_image_url
     *
     * @return self
     */
    public function setLogoImageUrl($logo_image_url)
    {
        if (is_null($logo_image_url)) {
            throw new \InvalidArgumentException('non-nullable logo_image_url cannot be null');
        }
        $this->container['logo_image_url'] = $logo_image_url;

        return $this;
    }

    /**
     * Gets background_image_url
     *
     * @return string|null
     */
    public function getBackgroundImageUrl()
    {
        return $this->container['background_image_url'];
    }

    /**
     * Sets background_image_url
     *
     * @param string|null $background_image_url background_image_url
     *
     * @return self
     */
    public function setBackgroundImageUrl($background_image_url)
    {
        if (is_null($background_image_url)) {
            throw new \InvalidArgumentException('non-nullable background_image_url cannot be null');
        }
        $this->container['background_image_url'] = $background_image_url;

        return $this;
    }

    /**
     * Gets animated_gif_background_url
     *
     * @return string|null
     */
    public function getAnimatedGifBackgroundUrl()
    {
        return $this->container['animated_gif_background_url'];
    }

    /**
     * Sets animated_gif_background_url
     *
     * @param string|null $animated_gif_background_url animated_gif_background_url
     *
     * @return self
     */
    public function setAnimatedGifBackgroundUrl($animated_gif_background_url)
    {
        if (is_null($animated_gif_background_url)) {
            throw new \InvalidArgumentException('non-nullable animated_gif_background_url cannot be null');
        }
        $this->container['animated_gif_background_url'] = $animated_gif_background_url;

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


