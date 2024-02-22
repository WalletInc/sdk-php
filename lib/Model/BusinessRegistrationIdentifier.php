<?php
/**
 * BusinessRegistrationIdentifier
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
 * BusinessRegistrationIdentifier Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BusinessRegistrationIdentifier
{
    /**
     * Possible values of this enum
     */
    public const EIN = 'EIN';

    public const DUNS = 'DUNS';

    public const CBN = 'CBN';

    public const CN = 'CN';

    public const ACN = 'ACN';

    public const CIN = 'CIN';

    public const VAT = 'VAT';

    public const VATRN = 'VATRN';

    public const RN = 'RN';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EIN,
            self::DUNS,
            self::CBN,
            self::CN,
            self::ACN,
            self::CIN,
            self::VAT,
            self::VATRN,
            self::RN,
            self::OTHER
        ];
    }
}


