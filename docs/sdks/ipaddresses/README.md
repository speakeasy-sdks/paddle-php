# ipAddresses

## Overview

Get Paddle IP addresses.

### Available Operations

* [get](#get) - Get Paddle IP addresses

## get

Returns Paddle IP addresses. You can add these IP addresses to your allowlist.

IP addresses returned are for the environment that you're making the request in. For example, making the request to the production base URL returns all production IP addresses.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;

$sdk = Paddle::builder()
    ->build();

try {
    $response = $sdk->ipAddresses->get();

    if ($response->getIpAddresses200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\GetIpAddressesResponse](../../models/operations/GetIpAddressesResponse.md)**

