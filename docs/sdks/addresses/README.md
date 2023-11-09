# Addresses


## Overview

Work with addresses for a customer.

Addresses - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/customers#address-object>
### Available Operations

* [create](#create) - Create an address for a customer
* [get](#get) - Get an address for a customer
* [list](#list) - List addresses for a customer
* [update](#update) - Update an address for a customer

## create

Creates a new address for a customer.

For tax calculation, fraud prevention, and compliance purposes, you must include a `postal_code` when creating addresses for some countries. For example, ZIP codes in the USA and postcodes in the UK. See: [Supported countries](/concepts/sell/supported-countries-locales)

If successful, your response includes a copy of the new address entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAddressRequest();
    $request->addressCreate = new Shared\AddressCreate();
    $request->addressCreate->city = 'Astoria';
    $request->addressCreate->countryCode = Shared\CountryCode2::Kn;
    $request->addressCreate->description = 'Paddle.com';
    $request->addressCreate->firstLine = '3811 Ditmars Blvd';
    $request->addressCreate->id = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->addressCreate->postalCode = '11105-1803';
    $request->addressCreate->region = 'NY';
    $request->addressCreate->secondLine = 'string';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\CreateAddressRequest](../../Models/Operations/CreateAddressRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\CreateAddressResponse](../../Models/Operations/CreateAddressResponse.md)**


## get

Returns an address for a customer using its ID and related customer ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAddressRequest();
    $request->addressId = 'add_01gvcz6r0t0g5cphhwd8n952gb';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->get($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetAddressRequest](../../Models/Operations/GetAddressRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetAddressResponse](../../Models/Operations/GetAddressResponse.md)**


## list

Returns a paginated list of addresses for a customer. Use the query parameters to page through results.

By default, Paddle returns addresses that are `active`. Use the `status` query parameter to return addresses that are archived.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListAddressesRequest();
    $request->after = 'string';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';
    $request->id = '<ID>';
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->search = 'upgrade';
    $request->status = Shared\Status::Active;

    $response = $sdk->addresses->list($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\ListAddressesRequest](../../Models/Operations/ListAddressesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\ListAddressesResponse](../../Models/Operations/ListAddressesResponse.md)**


## update

Updates an address for a customer using its ID and related customer ID.

If successful, your response includes a copy of the updated address entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateAddressRequest();
    $request->address = new Shared\AddressInput();
    $request->address->city = 'Astoria';
    $request->address->countryCode = Shared\CountryCode2::Td;
    $request->address->description = 'Paddle.com';
    $request->address->firstLine = '3811 Ditmars Blvd';
    $request->address->id = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->address->postalCode = '11105-1803';
    $request->address->region = 'NY';
    $request->address->secondLine = 'string';
    $request->address->status = Shared\SchemaStatus::Active;
    $request->addressId = 'add_01gvcz6r0t0g5cphhwd8n952gb';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->update($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateAddressRequest](../../Models/Operations/UpdateAddressRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateAddressResponse](../../Models/Operations/UpdateAddressResponse.md)**

