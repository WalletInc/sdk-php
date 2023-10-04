<?php
/**
 * BusinessIndustry
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * BusinessIndustry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BusinessIndustry
{
    /**
     * Possible values of this enum
     */
    const AUTOMOTIVE = 'AUTOMOTIVE';

    const AGRICULTURE = 'AGRICULTURE';

    const BANKING = 'BANKING';

    const CONSTRUCTION = 'CONSTRUCTION';

    const CONSUMER = 'CONSUMER';

    const EDUCATION = 'EDUCATION';

    const ENGINEERING = 'ENGINEERING';

    const ENERGY = 'ENERGY';

    const OIL_AND_GAS = 'OIL_AND_GAS';

    const FAST_MOVING_CONSUMER_GOODS = 'FAST_MOVING_CONSUMER_GOODS';

    const FINANCIAL = 'FINANCIAL';

    const FINTECH = 'FINTECH';

    const FOOD_AND_BEVERAGE = 'FOOD_AND_BEVERAGE';

    const GOVERNMENT = 'GOVERNMENT';

    const HEALTHCARE = 'HEALTHCARE';

    const HOSPITALITY = 'HOSPITALITY';

    const INSURANCE = 'INSURANCE';

    const LEGAL = 'LEGAL';

    const MANUFACTURING = 'MANUFACTURING';

    const MEDIA = 'MEDIA';

    const ONLINE = 'ONLINE';

    const PROFESSIONAL_SERVICES = 'PROFESSIONAL_SERVICES';

    const RAW_MATERIALS = 'RAW_MATERIALS';

    const REAL_ESTATE = 'REAL_ESTATE';

    const RELIGION = 'RELIGION';

    const RETAIL = 'RETAIL';

    const JEWELRY = 'JEWELRY';

    const TECHNOLOGY = 'TECHNOLOGY';

    const TELECOMMUNICATIONS = 'TELECOMMUNICATIONS';

    const TRANSPORTATION = 'TRANSPORTATION';

    const TRAVEL = 'TRAVEL';

    const ELECTRONICS = 'ELECTRONICS';

    const NOT_FOR_PROFIT = 'NOT_FOR_PROFIT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTOMOTIVE,
            self::AGRICULTURE,
            self::BANKING,
            self::CONSTRUCTION,
            self::CONSUMER,
            self::EDUCATION,
            self::ENGINEERING,
            self::ENERGY,
            self::OIL_AND_GAS,
            self::FAST_MOVING_CONSUMER_GOODS,
            self::FINANCIAL,
            self::FINTECH,
            self::FOOD_AND_BEVERAGE,
            self::GOVERNMENT,
            self::HEALTHCARE,
            self::HOSPITALITY,
            self::INSURANCE,
            self::LEGAL,
            self::MANUFACTURING,
            self::MEDIA,
            self::ONLINE,
            self::PROFESSIONAL_SERVICES,
            self::RAW_MATERIALS,
            self::REAL_ESTATE,
            self::RELIGION,
            self::RETAIL,
            self::JEWELRY,
            self::TECHNOLOGY,
            self::TELECOMMUNICATIONS,
            self::TRANSPORTATION,
            self::TRAVEL,
            self::ELECTRONICS,
            self::NOT_FOR_PROFIT
        ];
    }
}

