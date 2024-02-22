<?php
/**
 * TrustBundleStatuses
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
 * TrustBundleStatuses Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrustBundleStatuses
{
    /**
     * Possible values of this enum
     */
    public const DRAFT = 'draft';

    public const PENDING_REVIEW = 'pending-review';

    public const IN_REVIEW = 'in-review';

    public const TWILIO_REJECTED = 'twilio-rejected';

    public const TWILIO_APPROVED = 'twilio-approved';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::PENDING_REVIEW,
            self::IN_REVIEW,
            self::TWILIO_REJECTED,
            self::TWILIO_APPROVED
        ];
    }
}


