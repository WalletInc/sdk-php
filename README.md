![Wallet Inc](https://resources.wallet.inc/logos/wallet-350x96.png)

# Wallet SDK for PHP

[![Latest version](https://img.shields.io/packagist/v/wallet/wallet.svg?color=2d7ff9)](https://packagist.org/packages/wallet/wallet)
[![Downloads](https://img.shields.io/packagist/dt/wallet/wallet.svg?color=2d7ff9)](https://packagist.org/packages/wallet/wallet)

The official server-side PHP SDK for the [Wallet Inc](https://wallet.inc) CRM & Digital Payments platform. Create and manage membership tiers, club members, vouchers, promotions, store credit, payment designs, SMS/MMS, and more.

> **Access note:** this module is currently restricted to Wallet Inc customers. Need access or a hand getting started? Join us on [Discord](https://discord.gg/xzwhcNCjcQ).

## Requirements

PHP 7.4+ (works on PHP 8).

## Installation

```bash
composer require wallet/wallet
```

## Quickstart

Point the client at the API host and send your API key as the `access-token` header on every request. Create your key in the [Wallet Developer Hub](https://wallet.dev).

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use OpenAPI\Client\Api\MembershipTiersApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\WTMembershipTierCreationParams;

// Set the API host, and send your API key as the access-token header on every request.
$config = Configuration::getDefaultConfiguration()->setHost('https://api.wall.et');
$client = new GuzzleHttp\Client([
    'headers' => ['access-token' => 'YOUR_API_KEY'],
]);

$membershipTiers = new MembershipTiersApi($client, $config);

$params = new WTMembershipTierCreationParams();
$params->setTierNumber('1');
$params->setTierName('GOLD');
$params->setTierDiscount(20);

$tier = $membershipTiers->createMembershipTier($params);
print_r($tier);
```

## Documentation

Full API reference and guides live in the [Wallet Developer Hub](https://wallet.dev). Per-endpoint method docs and model definitions for this client are generated into the [`docs/`](docs/) folder of this repository.
