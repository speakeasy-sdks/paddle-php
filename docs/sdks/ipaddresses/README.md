# IPAddresses


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

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
    $response = $sdk->ipAddresses->get();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\GetIpAddressesResponse](../../Models/Operations/GetIpAddressesResponse.md)**

