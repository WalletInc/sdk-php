<?php
/**
 * WTWalletConfigurationSaveWalletRecord
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
 * WTWalletConfigurationSaveWalletRecord Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WTWalletConfigurationSaveWalletRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WTWalletConfigurationSaveWalletRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'header_background_color' => 'string',
        'header_button_color' => 'string',
        'left_menu_section_color' => 'string',
        'left_menu_arrow_color' => 'string',
        'company_logo_url' => 'string',
        'welcome_message' => 'string',
        'is_apple_enabled' => 'bool',
        'is_google_enabled' => 'bool',
        'is_samsung_enabled' => 'bool',
        'is_ad_credits' => 'bool',
        'is_static_vouchers' => 'bool',
        'is_dynamic_vouchers' => 'bool',
        'is_membership_tier' => 'bool',
        'is_membership_points' => 'bool',
        'is_membership_level' => 'bool',
        'is_gift_cards' => 'bool',
        'is_gift_certificates' => 'bool',
        'is_promotions' => 'bool',
        'is_merchant_credit' => 'bool',
        'is_tickets' => 'bool',
        'is_news_articles' => 'bool',
        'is_performances' => 'bool',
        'is_messages' => 'bool',
        'is_call' => 'bool',
        'is_representatives' => 'bool',
        'is_map_directions' => 'bool',
        'is_link_book' => 'bool',
        'is_image_grid' => 'bool',
        'is_transaction_history' => 'bool',
        'is_profile' => 'bool',
        'is_settings' => 'bool',
        'is_chat_room' => 'bool',
        'google_analytics_id' => 'string',
        'public_chat_room_channel_id' => 'double',
        'vanity_handle' => 'string',
        'vanity_page_wallet_prefix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'header_background_color' => null,
        'header_button_color' => null,
        'left_menu_section_color' => null,
        'left_menu_arrow_color' => null,
        'company_logo_url' => null,
        'welcome_message' => null,
        'is_apple_enabled' => null,
        'is_google_enabled' => null,
        'is_samsung_enabled' => null,
        'is_ad_credits' => null,
        'is_static_vouchers' => null,
        'is_dynamic_vouchers' => null,
        'is_membership_tier' => null,
        'is_membership_points' => null,
        'is_membership_level' => null,
        'is_gift_cards' => null,
        'is_gift_certificates' => null,
        'is_promotions' => null,
        'is_merchant_credit' => null,
        'is_tickets' => null,
        'is_news_articles' => null,
        'is_performances' => null,
        'is_messages' => null,
        'is_call' => null,
        'is_representatives' => null,
        'is_map_directions' => null,
        'is_link_book' => null,
        'is_image_grid' => null,
        'is_transaction_history' => null,
        'is_profile' => null,
        'is_settings' => null,
        'is_chat_room' => null,
        'google_analytics_id' => null,
        'public_chat_room_channel_id' => 'double',
        'vanity_handle' => null,
        'vanity_page_wallet_prefix' => null
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
        'header_background_color' => 'headerBackgroundColor',
        'header_button_color' => 'headerButtonColor',
        'left_menu_section_color' => 'leftMenuSectionColor',
        'left_menu_arrow_color' => 'leftMenuArrowColor',
        'company_logo_url' => 'companyLogoURL',
        'welcome_message' => 'welcomeMessage',
        'is_apple_enabled' => 'isAppleEnabled',
        'is_google_enabled' => 'isGoogleEnabled',
        'is_samsung_enabled' => 'isSamsungEnabled',
        'is_ad_credits' => 'isAdCredits',
        'is_static_vouchers' => 'isStaticVouchers',
        'is_dynamic_vouchers' => 'isDynamicVouchers',
        'is_membership_tier' => 'isMembershipTier',
        'is_membership_points' => 'isMembershipPoints',
        'is_membership_level' => 'isMembershipLevel',
        'is_gift_cards' => 'isGiftCards',
        'is_gift_certificates' => 'isGiftCertificates',
        'is_promotions' => 'isPromotions',
        'is_merchant_credit' => 'isMerchantCredit',
        'is_tickets' => 'isTickets',
        'is_news_articles' => 'isNewsArticles',
        'is_performances' => 'isPerformances',
        'is_messages' => 'isMessages',
        'is_call' => 'isCall',
        'is_representatives' => 'isRepresentatives',
        'is_map_directions' => 'isMapDirections',
        'is_link_book' => 'isLinkBook',
        'is_image_grid' => 'isImageGrid',
        'is_transaction_history' => 'isTransactionHistory',
        'is_profile' => 'isProfile',
        'is_settings' => 'isSettings',
        'is_chat_room' => 'isChatRoom',
        'google_analytics_id' => 'googleAnalyticsID',
        'public_chat_room_channel_id' => 'publicChatRoomChannelID',
        'vanity_handle' => 'vanityHandle',
        'vanity_page_wallet_prefix' => 'vanityPageWalletPrefix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'header_background_color' => 'setHeaderBackgroundColor',
        'header_button_color' => 'setHeaderButtonColor',
        'left_menu_section_color' => 'setLeftMenuSectionColor',
        'left_menu_arrow_color' => 'setLeftMenuArrowColor',
        'company_logo_url' => 'setCompanyLogoUrl',
        'welcome_message' => 'setWelcomeMessage',
        'is_apple_enabled' => 'setIsAppleEnabled',
        'is_google_enabled' => 'setIsGoogleEnabled',
        'is_samsung_enabled' => 'setIsSamsungEnabled',
        'is_ad_credits' => 'setIsAdCredits',
        'is_static_vouchers' => 'setIsStaticVouchers',
        'is_dynamic_vouchers' => 'setIsDynamicVouchers',
        'is_membership_tier' => 'setIsMembershipTier',
        'is_membership_points' => 'setIsMembershipPoints',
        'is_membership_level' => 'setIsMembershipLevel',
        'is_gift_cards' => 'setIsGiftCards',
        'is_gift_certificates' => 'setIsGiftCertificates',
        'is_promotions' => 'setIsPromotions',
        'is_merchant_credit' => 'setIsMerchantCredit',
        'is_tickets' => 'setIsTickets',
        'is_news_articles' => 'setIsNewsArticles',
        'is_performances' => 'setIsPerformances',
        'is_messages' => 'setIsMessages',
        'is_call' => 'setIsCall',
        'is_representatives' => 'setIsRepresentatives',
        'is_map_directions' => 'setIsMapDirections',
        'is_link_book' => 'setIsLinkBook',
        'is_image_grid' => 'setIsImageGrid',
        'is_transaction_history' => 'setIsTransactionHistory',
        'is_profile' => 'setIsProfile',
        'is_settings' => 'setIsSettings',
        'is_chat_room' => 'setIsChatRoom',
        'google_analytics_id' => 'setGoogleAnalyticsId',
        'public_chat_room_channel_id' => 'setPublicChatRoomChannelId',
        'vanity_handle' => 'setVanityHandle',
        'vanity_page_wallet_prefix' => 'setVanityPageWalletPrefix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'header_background_color' => 'getHeaderBackgroundColor',
        'header_button_color' => 'getHeaderButtonColor',
        'left_menu_section_color' => 'getLeftMenuSectionColor',
        'left_menu_arrow_color' => 'getLeftMenuArrowColor',
        'company_logo_url' => 'getCompanyLogoUrl',
        'welcome_message' => 'getWelcomeMessage',
        'is_apple_enabled' => 'getIsAppleEnabled',
        'is_google_enabled' => 'getIsGoogleEnabled',
        'is_samsung_enabled' => 'getIsSamsungEnabled',
        'is_ad_credits' => 'getIsAdCredits',
        'is_static_vouchers' => 'getIsStaticVouchers',
        'is_dynamic_vouchers' => 'getIsDynamicVouchers',
        'is_membership_tier' => 'getIsMembershipTier',
        'is_membership_points' => 'getIsMembershipPoints',
        'is_membership_level' => 'getIsMembershipLevel',
        'is_gift_cards' => 'getIsGiftCards',
        'is_gift_certificates' => 'getIsGiftCertificates',
        'is_promotions' => 'getIsPromotions',
        'is_merchant_credit' => 'getIsMerchantCredit',
        'is_tickets' => 'getIsTickets',
        'is_news_articles' => 'getIsNewsArticles',
        'is_performances' => 'getIsPerformances',
        'is_messages' => 'getIsMessages',
        'is_call' => 'getIsCall',
        'is_representatives' => 'getIsRepresentatives',
        'is_map_directions' => 'getIsMapDirections',
        'is_link_book' => 'getIsLinkBook',
        'is_image_grid' => 'getIsImageGrid',
        'is_transaction_history' => 'getIsTransactionHistory',
        'is_profile' => 'getIsProfile',
        'is_settings' => 'getIsSettings',
        'is_chat_room' => 'getIsChatRoom',
        'google_analytics_id' => 'getGoogleAnalyticsId',
        'public_chat_room_channel_id' => 'getPublicChatRoomChannelId',
        'vanity_handle' => 'getVanityHandle',
        'vanity_page_wallet_prefix' => 'getVanityPageWalletPrefix'
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
        $this->container['header_background_color'] = $data['header_background_color'] ?? null;
        $this->container['header_button_color'] = $data['header_button_color'] ?? null;
        $this->container['left_menu_section_color'] = $data['left_menu_section_color'] ?? null;
        $this->container['left_menu_arrow_color'] = $data['left_menu_arrow_color'] ?? null;
        $this->container['company_logo_url'] = $data['company_logo_url'] ?? null;
        $this->container['welcome_message'] = $data['welcome_message'] ?? null;
        $this->container['is_apple_enabled'] = $data['is_apple_enabled'] ?? null;
        $this->container['is_google_enabled'] = $data['is_google_enabled'] ?? null;
        $this->container['is_samsung_enabled'] = $data['is_samsung_enabled'] ?? null;
        $this->container['is_ad_credits'] = $data['is_ad_credits'] ?? null;
        $this->container['is_static_vouchers'] = $data['is_static_vouchers'] ?? null;
        $this->container['is_dynamic_vouchers'] = $data['is_dynamic_vouchers'] ?? null;
        $this->container['is_membership_tier'] = $data['is_membership_tier'] ?? null;
        $this->container['is_membership_points'] = $data['is_membership_points'] ?? null;
        $this->container['is_membership_level'] = $data['is_membership_level'] ?? null;
        $this->container['is_gift_cards'] = $data['is_gift_cards'] ?? null;
        $this->container['is_gift_certificates'] = $data['is_gift_certificates'] ?? null;
        $this->container['is_promotions'] = $data['is_promotions'] ?? null;
        $this->container['is_merchant_credit'] = $data['is_merchant_credit'] ?? null;
        $this->container['is_tickets'] = $data['is_tickets'] ?? null;
        $this->container['is_news_articles'] = $data['is_news_articles'] ?? null;
        $this->container['is_performances'] = $data['is_performances'] ?? null;
        $this->container['is_messages'] = $data['is_messages'] ?? null;
        $this->container['is_call'] = $data['is_call'] ?? null;
        $this->container['is_representatives'] = $data['is_representatives'] ?? null;
        $this->container['is_map_directions'] = $data['is_map_directions'] ?? null;
        $this->container['is_link_book'] = $data['is_link_book'] ?? null;
        $this->container['is_image_grid'] = $data['is_image_grid'] ?? null;
        $this->container['is_transaction_history'] = $data['is_transaction_history'] ?? null;
        $this->container['is_profile'] = $data['is_profile'] ?? null;
        $this->container['is_settings'] = $data['is_settings'] ?? null;
        $this->container['is_chat_room'] = $data['is_chat_room'] ?? null;
        $this->container['google_analytics_id'] = $data['google_analytics_id'] ?? null;
        $this->container['public_chat_room_channel_id'] = $data['public_chat_room_channel_id'] ?? null;
        $this->container['vanity_handle'] = $data['vanity_handle'] ?? null;
        $this->container['vanity_page_wallet_prefix'] = $data['vanity_page_wallet_prefix'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['header_background_color'] === null) {
            $invalidProperties[] = "'header_background_color' can't be null";
        }
        if ($this->container['header_button_color'] === null) {
            $invalidProperties[] = "'header_button_color' can't be null";
        }
        if ($this->container['left_menu_section_color'] === null) {
            $invalidProperties[] = "'left_menu_section_color' can't be null";
        }
        if ($this->container['left_menu_arrow_color'] === null) {
            $invalidProperties[] = "'left_menu_arrow_color' can't be null";
        }
        if ($this->container['company_logo_url'] === null) {
            $invalidProperties[] = "'company_logo_url' can't be null";
        }
        if ($this->container['welcome_message'] === null) {
            $invalidProperties[] = "'welcome_message' can't be null";
        }
        if ($this->container['is_apple_enabled'] === null) {
            $invalidProperties[] = "'is_apple_enabled' can't be null";
        }
        if ($this->container['is_google_enabled'] === null) {
            $invalidProperties[] = "'is_google_enabled' can't be null";
        }
        if ($this->container['is_samsung_enabled'] === null) {
            $invalidProperties[] = "'is_samsung_enabled' can't be null";
        }
        if ($this->container['is_ad_credits'] === null) {
            $invalidProperties[] = "'is_ad_credits' can't be null";
        }
        if ($this->container['is_static_vouchers'] === null) {
            $invalidProperties[] = "'is_static_vouchers' can't be null";
        }
        if ($this->container['is_dynamic_vouchers'] === null) {
            $invalidProperties[] = "'is_dynamic_vouchers' can't be null";
        }
        if ($this->container['is_membership_tier'] === null) {
            $invalidProperties[] = "'is_membership_tier' can't be null";
        }
        if ($this->container['is_membership_points'] === null) {
            $invalidProperties[] = "'is_membership_points' can't be null";
        }
        if ($this->container['is_membership_level'] === null) {
            $invalidProperties[] = "'is_membership_level' can't be null";
        }
        if ($this->container['is_gift_cards'] === null) {
            $invalidProperties[] = "'is_gift_cards' can't be null";
        }
        if ($this->container['is_gift_certificates'] === null) {
            $invalidProperties[] = "'is_gift_certificates' can't be null";
        }
        if ($this->container['is_promotions'] === null) {
            $invalidProperties[] = "'is_promotions' can't be null";
        }
        if ($this->container['is_merchant_credit'] === null) {
            $invalidProperties[] = "'is_merchant_credit' can't be null";
        }
        if ($this->container['is_news_articles'] === null) {
            $invalidProperties[] = "'is_news_articles' can't be null";
        }
        if ($this->container['is_performances'] === null) {
            $invalidProperties[] = "'is_performances' can't be null";
        }
        if ($this->container['is_messages'] === null) {
            $invalidProperties[] = "'is_messages' can't be null";
        }
        if ($this->container['is_call'] === null) {
            $invalidProperties[] = "'is_call' can't be null";
        }
        if ($this->container['is_representatives'] === null) {
            $invalidProperties[] = "'is_representatives' can't be null";
        }
        if ($this->container['is_map_directions'] === null) {
            $invalidProperties[] = "'is_map_directions' can't be null";
        }
        if ($this->container['is_link_book'] === null) {
            $invalidProperties[] = "'is_link_book' can't be null";
        }
        if ($this->container['is_image_grid'] === null) {
            $invalidProperties[] = "'is_image_grid' can't be null";
        }
        if ($this->container['is_transaction_history'] === null) {
            $invalidProperties[] = "'is_transaction_history' can't be null";
        }
        if ($this->container['is_profile'] === null) {
            $invalidProperties[] = "'is_profile' can't be null";
        }
        if ($this->container['is_settings'] === null) {
            $invalidProperties[] = "'is_settings' can't be null";
        }
        if ($this->container['is_chat_room'] === null) {
            $invalidProperties[] = "'is_chat_room' can't be null";
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
     * Gets header_background_color
     *
     * @return string
     */
    public function getHeaderBackgroundColor()
    {
        return $this->container['header_background_color'];
    }

    /**
     * Sets header_background_color
     *
     * @param string $header_background_color header_background_color
     *
     * @return self
     */
    public function setHeaderBackgroundColor($header_background_color)
    {
        $this->container['header_background_color'] = $header_background_color;

        return $this;
    }

    /**
     * Gets header_button_color
     *
     * @return string
     */
    public function getHeaderButtonColor()
    {
        return $this->container['header_button_color'];
    }

    /**
     * Sets header_button_color
     *
     * @param string $header_button_color header_button_color
     *
     * @return self
     */
    public function setHeaderButtonColor($header_button_color)
    {
        $this->container['header_button_color'] = $header_button_color;

        return $this;
    }

    /**
     * Gets left_menu_section_color
     *
     * @return string
     */
    public function getLeftMenuSectionColor()
    {
        return $this->container['left_menu_section_color'];
    }

    /**
     * Sets left_menu_section_color
     *
     * @param string $left_menu_section_color left_menu_section_color
     *
     * @return self
     */
    public function setLeftMenuSectionColor($left_menu_section_color)
    {
        $this->container['left_menu_section_color'] = $left_menu_section_color;

        return $this;
    }

    /**
     * Gets left_menu_arrow_color
     *
     * @return string
     */
    public function getLeftMenuArrowColor()
    {
        return $this->container['left_menu_arrow_color'];
    }

    /**
     * Sets left_menu_arrow_color
     *
     * @param string $left_menu_arrow_color left_menu_arrow_color
     *
     * @return self
     */
    public function setLeftMenuArrowColor($left_menu_arrow_color)
    {
        $this->container['left_menu_arrow_color'] = $left_menu_arrow_color;

        return $this;
    }

    /**
     * Gets company_logo_url
     *
     * @return string
     */
    public function getCompanyLogoUrl()
    {
        return $this->container['company_logo_url'];
    }

    /**
     * Sets company_logo_url
     *
     * @param string $company_logo_url company_logo_url
     *
     * @return self
     */
    public function setCompanyLogoUrl($company_logo_url)
    {
        $this->container['company_logo_url'] = $company_logo_url;

        return $this;
    }

    /**
     * Gets welcome_message
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->container['welcome_message'];
    }

    /**
     * Sets welcome_message
     *
     * @param string $welcome_message welcome_message
     *
     * @return self
     */
    public function setWelcomeMessage($welcome_message)
    {
        $this->container['welcome_message'] = $welcome_message;

        return $this;
    }

    /**
     * Gets is_apple_enabled
     *
     * @return bool
     */
    public function getIsAppleEnabled()
    {
        return $this->container['is_apple_enabled'];
    }

    /**
     * Sets is_apple_enabled
     *
     * @param bool $is_apple_enabled is_apple_enabled
     *
     * @return self
     */
    public function setIsAppleEnabled($is_apple_enabled)
    {
        $this->container['is_apple_enabled'] = $is_apple_enabled;

        return $this;
    }

    /**
     * Gets is_google_enabled
     *
     * @return bool
     */
    public function getIsGoogleEnabled()
    {
        return $this->container['is_google_enabled'];
    }

    /**
     * Sets is_google_enabled
     *
     * @param bool $is_google_enabled is_google_enabled
     *
     * @return self
     */
    public function setIsGoogleEnabled($is_google_enabled)
    {
        $this->container['is_google_enabled'] = $is_google_enabled;

        return $this;
    }

    /**
     * Gets is_samsung_enabled
     *
     * @return bool
     */
    public function getIsSamsungEnabled()
    {
        return $this->container['is_samsung_enabled'];
    }

    /**
     * Sets is_samsung_enabled
     *
     * @param bool $is_samsung_enabled is_samsung_enabled
     *
     * @return self
     */
    public function setIsSamsungEnabled($is_samsung_enabled)
    {
        $this->container['is_samsung_enabled'] = $is_samsung_enabled;

        return $this;
    }

    /**
     * Gets is_ad_credits
     *
     * @return bool
     */
    public function getIsAdCredits()
    {
        return $this->container['is_ad_credits'];
    }

    /**
     * Sets is_ad_credits
     *
     * @param bool $is_ad_credits is_ad_credits
     *
     * @return self
     */
    public function setIsAdCredits($is_ad_credits)
    {
        $this->container['is_ad_credits'] = $is_ad_credits;

        return $this;
    }

    /**
     * Gets is_static_vouchers
     *
     * @return bool
     */
    public function getIsStaticVouchers()
    {
        return $this->container['is_static_vouchers'];
    }

    /**
     * Sets is_static_vouchers
     *
     * @param bool $is_static_vouchers is_static_vouchers
     *
     * @return self
     */
    public function setIsStaticVouchers($is_static_vouchers)
    {
        $this->container['is_static_vouchers'] = $is_static_vouchers;

        return $this;
    }

    /**
     * Gets is_dynamic_vouchers
     *
     * @return bool
     */
    public function getIsDynamicVouchers()
    {
        return $this->container['is_dynamic_vouchers'];
    }

    /**
     * Sets is_dynamic_vouchers
     *
     * @param bool $is_dynamic_vouchers is_dynamic_vouchers
     *
     * @return self
     */
    public function setIsDynamicVouchers($is_dynamic_vouchers)
    {
        $this->container['is_dynamic_vouchers'] = $is_dynamic_vouchers;

        return $this;
    }

    /**
     * Gets is_membership_tier
     *
     * @return bool
     */
    public function getIsMembershipTier()
    {
        return $this->container['is_membership_tier'];
    }

    /**
     * Sets is_membership_tier
     *
     * @param bool $is_membership_tier is_membership_tier
     *
     * @return self
     */
    public function setIsMembershipTier($is_membership_tier)
    {
        $this->container['is_membership_tier'] = $is_membership_tier;

        return $this;
    }

    /**
     * Gets is_membership_points
     *
     * @return bool
     */
    public function getIsMembershipPoints()
    {
        return $this->container['is_membership_points'];
    }

    /**
     * Sets is_membership_points
     *
     * @param bool $is_membership_points is_membership_points
     *
     * @return self
     */
    public function setIsMembershipPoints($is_membership_points)
    {
        $this->container['is_membership_points'] = $is_membership_points;

        return $this;
    }

    /**
     * Gets is_membership_level
     *
     * @return bool
     */
    public function getIsMembershipLevel()
    {
        return $this->container['is_membership_level'];
    }

    /**
     * Sets is_membership_level
     *
     * @param bool $is_membership_level is_membership_level
     *
     * @return self
     */
    public function setIsMembershipLevel($is_membership_level)
    {
        $this->container['is_membership_level'] = $is_membership_level;

        return $this;
    }

    /**
     * Gets is_gift_cards
     *
     * @return bool
     */
    public function getIsGiftCards()
    {
        return $this->container['is_gift_cards'];
    }

    /**
     * Sets is_gift_cards
     *
     * @param bool $is_gift_cards is_gift_cards
     *
     * @return self
     */
    public function setIsGiftCards($is_gift_cards)
    {
        $this->container['is_gift_cards'] = $is_gift_cards;

        return $this;
    }

    /**
     * Gets is_gift_certificates
     *
     * @return bool
     */
    public function getIsGiftCertificates()
    {
        return $this->container['is_gift_certificates'];
    }

    /**
     * Sets is_gift_certificates
     *
     * @param bool $is_gift_certificates is_gift_certificates
     *
     * @return self
     */
    public function setIsGiftCertificates($is_gift_certificates)
    {
        $this->container['is_gift_certificates'] = $is_gift_certificates;

        return $this;
    }

    /**
     * Gets is_promotions
     *
     * @return bool
     */
    public function getIsPromotions()
    {
        return $this->container['is_promotions'];
    }

    /**
     * Sets is_promotions
     *
     * @param bool $is_promotions is_promotions
     *
     * @return self
     */
    public function setIsPromotions($is_promotions)
    {
        $this->container['is_promotions'] = $is_promotions;

        return $this;
    }

    /**
     * Gets is_merchant_credit
     *
     * @return bool
     */
    public function getIsMerchantCredit()
    {
        return $this->container['is_merchant_credit'];
    }

    /**
     * Sets is_merchant_credit
     *
     * @param bool $is_merchant_credit is_merchant_credit
     *
     * @return self
     */
    public function setIsMerchantCredit($is_merchant_credit)
    {
        $this->container['is_merchant_credit'] = $is_merchant_credit;

        return $this;
    }

    /**
     * Gets is_tickets
     *
     * @return bool|null
     */
    public function getIsTickets()
    {
        return $this->container['is_tickets'];
    }

    /**
     * Sets is_tickets
     *
     * @param bool|null $is_tickets is_tickets
     *
     * @return self
     */
    public function setIsTickets($is_tickets)
    {
        $this->container['is_tickets'] = $is_tickets;

        return $this;
    }

    /**
     * Gets is_news_articles
     *
     * @return bool
     */
    public function getIsNewsArticles()
    {
        return $this->container['is_news_articles'];
    }

    /**
     * Sets is_news_articles
     *
     * @param bool $is_news_articles is_news_articles
     *
     * @return self
     */
    public function setIsNewsArticles($is_news_articles)
    {
        $this->container['is_news_articles'] = $is_news_articles;

        return $this;
    }

    /**
     * Gets is_performances
     *
     * @return bool
     */
    public function getIsPerformances()
    {
        return $this->container['is_performances'];
    }

    /**
     * Sets is_performances
     *
     * @param bool $is_performances is_performances
     *
     * @return self
     */
    public function setIsPerformances($is_performances)
    {
        $this->container['is_performances'] = $is_performances;

        return $this;
    }

    /**
     * Gets is_messages
     *
     * @return bool
     */
    public function getIsMessages()
    {
        return $this->container['is_messages'];
    }

    /**
     * Sets is_messages
     *
     * @param bool $is_messages is_messages
     *
     * @return self
     */
    public function setIsMessages($is_messages)
    {
        $this->container['is_messages'] = $is_messages;

        return $this;
    }

    /**
     * Gets is_call
     *
     * @return bool
     */
    public function getIsCall()
    {
        return $this->container['is_call'];
    }

    /**
     * Sets is_call
     *
     * @param bool $is_call is_call
     *
     * @return self
     */
    public function setIsCall($is_call)
    {
        $this->container['is_call'] = $is_call;

        return $this;
    }

    /**
     * Gets is_representatives
     *
     * @return bool
     */
    public function getIsRepresentatives()
    {
        return $this->container['is_representatives'];
    }

    /**
     * Sets is_representatives
     *
     * @param bool $is_representatives is_representatives
     *
     * @return self
     */
    public function setIsRepresentatives($is_representatives)
    {
        $this->container['is_representatives'] = $is_representatives;

        return $this;
    }

    /**
     * Gets is_map_directions
     *
     * @return bool
     */
    public function getIsMapDirections()
    {
        return $this->container['is_map_directions'];
    }

    /**
     * Sets is_map_directions
     *
     * @param bool $is_map_directions is_map_directions
     *
     * @return self
     */
    public function setIsMapDirections($is_map_directions)
    {
        $this->container['is_map_directions'] = $is_map_directions;

        return $this;
    }

    /**
     * Gets is_link_book
     *
     * @return bool
     */
    public function getIsLinkBook()
    {
        return $this->container['is_link_book'];
    }

    /**
     * Sets is_link_book
     *
     * @param bool $is_link_book is_link_book
     *
     * @return self
     */
    public function setIsLinkBook($is_link_book)
    {
        $this->container['is_link_book'] = $is_link_book;

        return $this;
    }

    /**
     * Gets is_image_grid
     *
     * @return bool
     */
    public function getIsImageGrid()
    {
        return $this->container['is_image_grid'];
    }

    /**
     * Sets is_image_grid
     *
     * @param bool $is_image_grid is_image_grid
     *
     * @return self
     */
    public function setIsImageGrid($is_image_grid)
    {
        $this->container['is_image_grid'] = $is_image_grid;

        return $this;
    }

    /**
     * Gets is_transaction_history
     *
     * @return bool
     */
    public function getIsTransactionHistory()
    {
        return $this->container['is_transaction_history'];
    }

    /**
     * Sets is_transaction_history
     *
     * @param bool $is_transaction_history is_transaction_history
     *
     * @return self
     */
    public function setIsTransactionHistory($is_transaction_history)
    {
        $this->container['is_transaction_history'] = $is_transaction_history;

        return $this;
    }

    /**
     * Gets is_profile
     *
     * @return bool
     */
    public function getIsProfile()
    {
        return $this->container['is_profile'];
    }

    /**
     * Sets is_profile
     *
     * @param bool $is_profile is_profile
     *
     * @return self
     */
    public function setIsProfile($is_profile)
    {
        $this->container['is_profile'] = $is_profile;

        return $this;
    }

    /**
     * Gets is_settings
     *
     * @return bool
     */
    public function getIsSettings()
    {
        return $this->container['is_settings'];
    }

    /**
     * Sets is_settings
     *
     * @param bool $is_settings is_settings
     *
     * @return self
     */
    public function setIsSettings($is_settings)
    {
        $this->container['is_settings'] = $is_settings;

        return $this;
    }

    /**
     * Gets is_chat_room
     *
     * @return bool
     */
    public function getIsChatRoom()
    {
        return $this->container['is_chat_room'];
    }

    /**
     * Sets is_chat_room
     *
     * @param bool $is_chat_room is_chat_room
     *
     * @return self
     */
    public function setIsChatRoom($is_chat_room)
    {
        $this->container['is_chat_room'] = $is_chat_room;

        return $this;
    }

    /**
     * Gets google_analytics_id
     *
     * @return string|null
     */
    public function getGoogleAnalyticsId()
    {
        return $this->container['google_analytics_id'];
    }

    /**
     * Sets google_analytics_id
     *
     * @param string|null $google_analytics_id google_analytics_id
     *
     * @return self
     */
    public function setGoogleAnalyticsId($google_analytics_id)
    {
        $this->container['google_analytics_id'] = $google_analytics_id;

        return $this;
    }

    /**
     * Gets public_chat_room_channel_id
     *
     * @return double|null
     */
    public function getPublicChatRoomChannelId()
    {
        return $this->container['public_chat_room_channel_id'];
    }

    /**
     * Sets public_chat_room_channel_id
     *
     * @param double|null $public_chat_room_channel_id public_chat_room_channel_id
     *
     * @return self
     */
    public function setPublicChatRoomChannelId($public_chat_room_channel_id)
    {
        $this->container['public_chat_room_channel_id'] = $public_chat_room_channel_id;

        return $this;
    }

    /**
     * Gets vanity_handle
     *
     * @return string|null
     */
    public function getVanityHandle()
    {
        return $this->container['vanity_handle'];
    }

    /**
     * Sets vanity_handle
     *
     * @param string|null $vanity_handle vanity_handle
     *
     * @return self
     */
    public function setVanityHandle($vanity_handle)
    {
        $this->container['vanity_handle'] = $vanity_handle;

        return $this;
    }

    /**
     * Gets vanity_page_wallet_prefix
     *
     * @return string|null
     */
    public function getVanityPageWalletPrefix()
    {
        return $this->container['vanity_page_wallet_prefix'];
    }

    /**
     * Sets vanity_page_wallet_prefix
     *
     * @param string|null $vanity_page_wallet_prefix vanity_page_wallet_prefix
     *
     * @return self
     */
    public function setVanityPageWalletPrefix($vanity_page_wallet_prefix)
    {
        $this->container['vanity_page_wallet_prefix'] = $vanity_page_wallet_prefix;

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


