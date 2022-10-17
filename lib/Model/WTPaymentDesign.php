<?php
/**
 * WTPaymentDesign
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
 * The version of the OpenAPI document: 2.1.514
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
 * WTPaymentDesign Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTPaymentDesign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTPaymentDesign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'border_color' => 'string',
        'border_style_type' => 'string',
        'border_size' => 'string',
        'border_radius' => 'int',
        'font_color' => 'string',
        'font_type' => 'string',
        'abbreviation' => 'string',
        'acronym' => 'string',
        'icon' => 'string',
        'design_name' => 'string',
        'display_name' => 'string',
        'background_image_url' => 'string',
        'company_logo_url' => 'string',
        'employee_id' => 'string',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'border_color' => null,
        'border_style_type' => null,
        'border_size' => null,
        'border_radius' => 'int32',
        'font_color' => null,
        'font_type' => null,
        'abbreviation' => null,
        'acronym' => null,
        'icon' => null,
        'design_name' => null,
        'display_name' => null,
        'background_image_url' => null,
        'company_logo_url' => null,
        'employee_id' => null,
        'id' => null,
        'merchant_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'is_active' => null
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
        'border_color' => 'borderColor',
        'border_style_type' => 'borderStyleType',
        'border_size' => 'borderSize',
        'border_radius' => 'borderRadius',
        'font_color' => 'fontColor',
        'font_type' => 'fontType',
        'abbreviation' => 'abbreviation',
        'acronym' => 'acronym',
        'icon' => 'icon',
        'design_name' => 'designName',
        'display_name' => 'displayName',
        'background_image_url' => 'backgroundImageURL',
        'company_logo_url' => 'companyLogoURL',
        'employee_id' => 'employeeID',
        'id' => 'id',
        'merchant_id' => 'merchantID',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border_color' => 'setBorderColor',
        'border_style_type' => 'setBorderStyleType',
        'border_size' => 'setBorderSize',
        'border_radius' => 'setBorderRadius',
        'font_color' => 'setFontColor',
        'font_type' => 'setFontType',
        'abbreviation' => 'setAbbreviation',
        'acronym' => 'setAcronym',
        'icon' => 'setIcon',
        'design_name' => 'setDesignName',
        'display_name' => 'setDisplayName',
        'background_image_url' => 'setBackgroundImageUrl',
        'company_logo_url' => 'setCompanyLogoUrl',
        'employee_id' => 'setEmployeeId',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border_color' => 'getBorderColor',
        'border_style_type' => 'getBorderStyleType',
        'border_size' => 'getBorderSize',
        'border_radius' => 'getBorderRadius',
        'font_color' => 'getFontColor',
        'font_type' => 'getFontType',
        'abbreviation' => 'getAbbreviation',
        'acronym' => 'getAcronym',
        'icon' => 'getIcon',
        'design_name' => 'getDesignName',
        'display_name' => 'getDisplayName',
        'background_image_url' => 'getBackgroundImageUrl',
        'company_logo_url' => 'getCompanyLogoUrl',
        'employee_id' => 'getEmployeeId',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_active' => 'getIsActive'
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
        $this->container['border_color'] = $data['border_color'] ?? null;
        $this->container['border_style_type'] = $data['border_style_type'] ?? null;
        $this->container['border_size'] = $data['border_size'] ?? null;
        $this->container['border_radius'] = $data['border_radius'] ?? null;
        $this->container['font_color'] = $data['font_color'] ?? null;
        $this->container['font_type'] = $data['font_type'] ?? null;
        $this->container['abbreviation'] = $data['abbreviation'] ?? null;
        $this->container['acronym'] = $data['acronym'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['design_name'] = $data['design_name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['background_image_url'] = $data['background_image_url'] ?? null;
        $this->container['company_logo_url'] = $data['company_logo_url'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['border_color'] === null) {
            $invalidProperties[] = "'border_color' can't be null";
        }
        if (!preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $this->container['border_color'])) {
            $invalidProperties[] = "invalid value for 'border_color', must be conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.";
        }

        if ($this->container['border_style_type'] === null) {
            $invalidProperties[] = "'border_style_type' can't be null";
        }
        if ($this->container['border_size'] === null) {
            $invalidProperties[] = "'border_size' can't be null";
        }
        if ((mb_strlen($this->container['border_size']) < 1)) {
            $invalidProperties[] = "invalid value for 'border_size', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['border_radius'] === null) {
            $invalidProperties[] = "'border_radius' can't be null";
        }
        if (($this->container['border_radius'] > 20)) {
            $invalidProperties[] = "invalid value for 'border_radius', must be smaller than or equal to 20.";
        }

        if (($this->container['border_radius'] < 0)) {
            $invalidProperties[] = "invalid value for 'border_radius', must be bigger than or equal to 0.";
        }

        if ($this->container['font_color'] === null) {
            $invalidProperties[] = "'font_color' can't be null";
        }
        if (!preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $this->container['font_color'])) {
            $invalidProperties[] = "invalid value for 'font_color', must be conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.";
        }

        if ($this->container['font_type'] === null) {
            $invalidProperties[] = "'font_type' can't be null";
        }
        if ((mb_strlen($this->container['font_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'font_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['abbreviation'] === null) {
            $invalidProperties[] = "'abbreviation' can't be null";
        }
        if ((mb_strlen($this->container['abbreviation']) < 1)) {
            $invalidProperties[] = "invalid value for 'abbreviation', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['acronym'] === null) {
            $invalidProperties[] = "'acronym' can't be null";
        }
        if ((mb_strlen($this->container['acronym']) < 1)) {
            $invalidProperties[] = "invalid value for 'acronym', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        if ((mb_strlen($this->container['icon']) < 1)) {
            $invalidProperties[] = "invalid value for 'icon', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['design_name'] === null) {
            $invalidProperties[] = "'design_name' can't be null";
        }
        if ((mb_strlen($this->container['design_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'design_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ((mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
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
     * Gets border_color
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     * @param string $border_color border_color
     *
     * @return self
     */
    public function setBorderColor($border_color)
    {

        if ((!preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $border_color))) {
            throw new \InvalidArgumentException("invalid value for $border_color when calling WTPaymentDesign., must conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.");
        }

        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets border_style_type
     *
     * @return string
     */
    public function getBorderStyleType()
    {
        return $this->container['border_style_type'];
    }

    /**
     * Sets border_style_type
     *
     * @param string $border_style_type border_style_type
     *
     * @return self
     */
    public function setBorderStyleType($border_style_type)
    {
        $this->container['border_style_type'] = $border_style_type;

        return $this;
    }

    /**
     * Gets border_size
     *
     * @return string
     */
    public function getBorderSize()
    {
        return $this->container['border_size'];
    }

    /**
     * Sets border_size
     *
     * @param string $border_size border_size
     *
     * @return self
     */
    public function setBorderSize($border_size)
    {

        if ((mb_strlen($border_size) < 1)) {
            throw new \InvalidArgumentException('invalid length for $border_size when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['border_size'] = $border_size;

        return $this;
    }

    /**
     * Gets border_radius
     *
     * @return int
     */
    public function getBorderRadius()
    {
        return $this->container['border_radius'];
    }

    /**
     * Sets border_radius
     *
     * @param int $border_radius border_radius
     *
     * @return self
     */
    public function setBorderRadius($border_radius)
    {

        if (($border_radius > 20)) {
            throw new \InvalidArgumentException('invalid value for $border_radius when calling WTPaymentDesign., must be smaller than or equal to 20.');
        }
        if (($border_radius < 0)) {
            throw new \InvalidArgumentException('invalid value for $border_radius when calling WTPaymentDesign., must be bigger than or equal to 0.');
        }

        $this->container['border_radius'] = $border_radius;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param string $font_color font_color
     *
     * @return self
     */
    public function setFontColor($font_color)
    {

        if ((!preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $font_color))) {
            throw new \InvalidArgumentException("invalid value for $font_color when calling WTPaymentDesign., must conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.");
        }

        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_type
     *
     * @return string
     */
    public function getFontType()
    {
        return $this->container['font_type'];
    }

    /**
     * Sets font_type
     *
     * @param string $font_type font_type
     *
     * @return self
     */
    public function setFontType($font_type)
    {

        if ((mb_strlen($font_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $font_type when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['font_type'] = $font_type;

        return $this;
    }

    /**
     * Gets abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     *
     * @param string $abbreviation abbreviation
     *
     * @return self
     */
    public function setAbbreviation($abbreviation)
    {

        if ((mb_strlen($abbreviation) < 1)) {
            throw new \InvalidArgumentException('invalid length for $abbreviation when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Gets acronym
     *
     * @return string
     */
    public function getAcronym()
    {
        return $this->container['acronym'];
    }

    /**
     * Sets acronym
     *
     * @param string $acronym acronym
     *
     * @return self
     */
    public function setAcronym($acronym)
    {

        if ((mb_strlen($acronym) < 1)) {
            throw new \InvalidArgumentException('invalid length for $acronym when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['acronym'] = $acronym;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {

        if ((mb_strlen($icon) < 1)) {
            throw new \InvalidArgumentException('invalid length for $icon when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets design_name
     *
     * @return string
     */
    public function getDesignName()
    {
        return $this->container['design_name'];
    }

    /**
     * Sets design_name
     *
     * @param string $design_name design_name
     *
     * @return self
     */
    public function setDesignName($design_name)
    {

        if ((mb_strlen($design_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $design_name when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['design_name'] = $design_name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {

        if ((mb_strlen($display_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling WTPaymentDesign., must be bigger than or equal to 1.');
        }

        $this->container['display_name'] = $display_name;

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
        $this->container['background_image_url'] = $background_image_url;

        return $this;
    }

    /**
     * Gets company_logo_url
     *
     * @return string|null
     */
    public function getCompanyLogoUrl()
    {
        return $this->container['company_logo_url'];
    }

    /**
     * Sets company_logo_url
     *
     * @param string|null $company_logo_url company_logo_url
     *
     * @return self
     */
    public function setCompanyLogoUrl($company_logo_url)
    {
        $this->container['company_logo_url'] = $company_logo_url;

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
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTPaymentDesign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($employee_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling WTPaymentDesign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $employee_id))) {
            throw new \InvalidArgumentException("invalid value for $employee_id when calling WTPaymentDesign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['employee_id'] = $employee_id;

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
            throw new \InvalidArgumentException('invalid length for $id when calling WTPaymentDesign., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $id when calling WTPaymentDesign., must be bigger than or equal to 10.');
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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTPaymentDesign., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($merchant_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling WTPaymentDesign., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling WTPaymentDesign., must conform to the pattern /^[a-zA-Z0-9]+$/.");
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


