<?php
/**
 * BusinessType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * BusinessType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BusinessType
{
    /**
     * Possible values of this enum
     */
    public const PARTNERSHIP = 'Partnership';

    public const LIMITED_LIABILITY_CORPORATION = 'Limited Liability Corporation';

    public const CO_OPERATIVE = 'Co-operative';

    public const NON_PROFIT_CORPORATION = 'Non-profit Corporation';

    public const CORPORATION = 'Corporation';

    public const SOLE_PROPRIETORSHIP = 'Sole Proprietorship';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTNERSHIP,
            self::LIMITED_LIABILITY_CORPORATION,
            self::CO_OPERATIVE,
            self::NON_PROFIT_CORPORATION,
            self::CORPORATION,
            self::SOLE_PROPRIETORSHIP
        ];
    }
}


