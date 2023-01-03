<?php
/**
 * PortalPage
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
 * The version of the OpenAPI document: 2.1.528
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * PortalPage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PortalPage
{
    /**
     * Possible values of this enum
     */
    const ANALYTICS_AD_CREDITS = 'analytics-ad-credits';

    const ANALYTICS_CLUB_MEMBERS = 'analytics-club-members';

    const DIGITAL_WALLET_CUSTOMER_SESSIONS = 'digital-wallet-customer-sessions';

    const ANALYTICS_DYNAMIC_VOUCHERS = 'analytics-dynamic-vouchers';

    const ANALYTICS_MEMBERSHIP_TIERS = 'analytics-membership-tiers';

    const ANALYTICS_MERCHANT_CREDITS = 'analytics-merchant-credits';

    const ANALYTICS_STATIC_VOUCHERS = 'analytics-static-vouchers';

    const ANALYTICS_BROADCASTS = 'analytics-broadcasts';

    const ANALYTICS_OUTBOUND_SMS = 'analytics-outbound-sms';

    const ANALYTICS_HELP_DESK = 'analytics-help-desk';

    const ANALYTICS_TCPA = 'analytics-tcpa';

    const CALENDAR_TEAM = 'calendar-team';

    const COMMUNICATIONS_APPLE_WALLET = 'communications-apple-wallet';

    const COMMUNICATIONS_GOOGLE_WALLET = 'communications-google-wallet';

    const COMMUNICATIONS_SMS_MEDIA = 'communications-sms-media';

    const COMMUNICATIONS_SMS_AGREEMENT = 'communications-sms-agreement';

    const COMMUNICATIONS_SMS_CREATE = 'communications-sms-create';

    const COMMUNICATIONS_SMS_CUSTOMER_SERVICE = 'communications-sms-customer-service';

    const COMMUNICATIONS_SMS_KEYWORDS = 'communications-sms-keywords';

    const COMMUNICATIONS_SMS_NUMBERS = 'communications-sms-numbers';

    const COMMUNICATIONS_SMS_SOURCES = 'communications-sms-sources';

    const COMMUNICATIONS_SMS_SUBSCRIBERS = 'communications-sms-subscribers';

    const COMMUNICATIONS_SMS_VOUCHER_CAMPAIGNS = 'communications-sms-voucher-campaigns';

    const MEMBERSHIPS_CLUB_MEMBERS = 'memberships-club-members';

    const MEMBERSHIPS_TIERS = 'memberships-tiers';

    const MERCHANT_PROFILE = 'merchant-profile';

    const MERCHANT_URLS = 'merchant-urls';

    const POS_CONFIGURATION = 'pos-configuration';

    const POS_LEDGER = 'pos-ledger';

    const POS_REGISTER_INFOGENESIS = 'pos-register-infogenesis';

    const POS_REGISTER_WEB = 'pos-register-web';

    const SEARCH = 'search';

    const SETTINGS_AUTH_CHANGES = 'settings-auth-changes';

    const SETTINGS_MANAGE_ROLES = 'settings-manage-roles';

    const SETTINGS_MANAGE_USERS = 'settings-manage-users';

    const SETTINGS_BILLING_PAYMENTS = 'settings-billing-payments';

    const SETTINGS_PLATFORM_USAGE = 'settings-platform-usage';

    const SETTINGS_PROFILE = 'settings-profile';

    const SETTINGS_PROFILE_DATA_EXPORTS = 'settings-profile-data-exports';

    const SETTINGS_USER_ACTIVITY = 'settings-user-activity';

    const ADVERTISEMENT_CREDIT = 'advertisement-credit';

    const PAYMENT_CONFIGURATION_DESIGN = 'payment-configuration-design';

    const MERCHANT_CREDIT = 'merchant-credit';

    const VOUCHERS_DYNAMIC = 'vouchers-dynamic';

    const VOUCHERS_STATIC_SINGLE = 'vouchers-static-single';

    const VOUCHERS_STATIC_SINGLE_CAMPAIGN = 'vouchers-static-single-campaign';

    const DIGITAL_WALLET_CONFIGURATION = 'digital-wallet-configuration';

    const PERFORMANCES = 'performances';

    const LINK_BOOK = 'link-book';

    const IMAGE_GRID = 'image-grid';

    const LIVE_CHAT = 'live-chat';

    const PROMO_CODES = 'promo-codes';

    const NEWS = 'news';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ANALYTICS_AD_CREDITS,
            self::ANALYTICS_CLUB_MEMBERS,
            self::DIGITAL_WALLET_CUSTOMER_SESSIONS,
            self::ANALYTICS_DYNAMIC_VOUCHERS,
            self::ANALYTICS_MEMBERSHIP_TIERS,
            self::ANALYTICS_MERCHANT_CREDITS,
            self::ANALYTICS_STATIC_VOUCHERS,
            self::ANALYTICS_BROADCASTS,
            self::ANALYTICS_OUTBOUND_SMS,
            self::ANALYTICS_HELP_DESK,
            self::ANALYTICS_TCPA,
            self::CALENDAR_TEAM,
            self::COMMUNICATIONS_APPLE_WALLET,
            self::COMMUNICATIONS_GOOGLE_WALLET,
            self::COMMUNICATIONS_SMS_MEDIA,
            self::COMMUNICATIONS_SMS_AGREEMENT,
            self::COMMUNICATIONS_SMS_CREATE,
            self::COMMUNICATIONS_SMS_CUSTOMER_SERVICE,
            self::COMMUNICATIONS_SMS_KEYWORDS,
            self::COMMUNICATIONS_SMS_NUMBERS,
            self::COMMUNICATIONS_SMS_SOURCES,
            self::COMMUNICATIONS_SMS_SUBSCRIBERS,
            self::COMMUNICATIONS_SMS_VOUCHER_CAMPAIGNS,
            self::MEMBERSHIPS_CLUB_MEMBERS,
            self::MEMBERSHIPS_TIERS,
            self::MERCHANT_PROFILE,
            self::MERCHANT_URLS,
            self::POS_CONFIGURATION,
            self::POS_LEDGER,
            self::POS_REGISTER_INFOGENESIS,
            self::POS_REGISTER_WEB,
            self::SEARCH,
            self::SETTINGS_AUTH_CHANGES,
            self::SETTINGS_MANAGE_ROLES,
            self::SETTINGS_MANAGE_USERS,
            self::SETTINGS_BILLING_PAYMENTS,
            self::SETTINGS_PLATFORM_USAGE,
            self::SETTINGS_PROFILE,
            self::SETTINGS_PROFILE_DATA_EXPORTS,
            self::SETTINGS_USER_ACTIVITY,
            self::ADVERTISEMENT_CREDIT,
            self::PAYMENT_CONFIGURATION_DESIGN,
            self::MERCHANT_CREDIT,
            self::VOUCHERS_DYNAMIC,
            self::VOUCHERS_STATIC_SINGLE,
            self::VOUCHERS_STATIC_SINGLE_CAMPAIGN,
            self::DIGITAL_WALLET_CONFIGURATION,
            self::PERFORMANCES,
            self::LINK_BOOK,
            self::IMAGE_GRID,
            self::LIVE_CHAT,
            self::PROMO_CODES,
            self::NEWS
        ];
    }
}


