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


## License

Copyright 2026 Wallet Inc.

This SDK is licensed under the Apache License, Version 2.0. See the `LICENSE` and
`NOTICE` files for the full text. You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0.

This SDK is auto-generated from the Wallet OpenAPI specification. Please file
issues rather than submitting code pull requests: the generated sources are
overwritten on each API release, so code PRs cannot be merged.

Your use of the Wallet platform and API is governed by the Wallet Terms of
Service, not by this license. The Apache-2.0 license covers this SDK's code only;
it does not grant any right to use the Wallet platform or service.

"Wallet", the Wallet logo, and "WALLET-IN-BIO" are trademarks of Wallet Inc.
The Apache-2.0 license grants rights to the code, not to the Wallet names, logos,
or trademarks (see Section 6 of the License).
