# Addresses
(*addresses*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CreateAddressRequest;
use \paddle\Paddle\Models\Shared\AddressCreateInput;
use \paddle\Paddle\Models\Shared\CountryCode2;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAddressRequest();
    $request->addressCreateInput = new AddressCreateInput();
    $request->addressCreateInput->city = 'Astoria';
    $request->addressCreateInput->countryCode = CountryCode2::Kn;
    $request->addressCreateInput->description = 'Paddle.com';
    $request->addressCreateInput->firstLine = '3811 Ditmars Blvd';
    $request->addressCreateInput->id = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->addressCreateInput->postalCode = '11105-1803';
    $request->addressCreateInput->region = 'NY';
    $request->addressCreateInput->secondLine = 'bluetooth';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->create($request);

    if ($response->createAddress201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\CreateAddressRequest](../../models/operations/CreateAddressRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\CreateAddressResponse](../../models/operations/CreateAddressResponse.md)**


## get

Returns an address for a customer using its ID and related customer ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetAddressRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAddressRequest();
    $request->addressId = 'add_01gvcz6r0t0g5cphhwd8n952gb';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->get($request);

    if ($response->getAddress200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetAddressRequest](../../models/operations/GetAddressRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetAddressResponse](../../models/operations/GetAddressResponse.md)**


## list

Returns a paginated list of addresses for a customer. Use the query parameters to page through results.

By default, Paddle returns addresses that are `active`. Use the `status` query parameter to return addresses that are archived.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListAddressesRequest;
use \paddle\Paddle\Models\Shared\Status;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAddressesRequest();
    $request->after = 'Bicycle';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';
    $request->id = '<ID>';
    $request->orderBy = 'Metal';
    $request->perPage = 297548;
    $request->search = 'upgrade';
    $request->status = Status::Active;

    $response = $sdk->addresses->list($request);

    if ($response->listAddresses200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\ListAddressesRequest](../../models/operations/ListAddressesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\ListAddressesResponse](../../models/operations/ListAddressesResponse.md)**


## update

Updates an address for a customer using its ID and related customer ID.

If successful, your response includes a copy of the updated address entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateAddressRequest;
use \paddle\Paddle\Models\Shared\AddressInput;
use \paddle\Paddle\Models\Shared\CountryCode2;
use \paddle\Paddle\Models\Shared\Schemasstatus;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAddressRequest();
    $request->addressInput = new AddressInput();
    $request->addressInput->city = 'Astoria';
    $request->addressInput->countryCode = CountryCode2::Td;
    $request->addressInput->description = 'Paddle.com';
    $request->addressInput->firstLine = '3811 Ditmars Blvd';
    $request->addressInput->id = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->addressInput->postalCode = '11105-1803';
    $request->addressInput->region = 'NY';
    $request->addressInput->secondLine = 'New';
    $request->addressInput->status = Schemasstatus::Active;
    $request->addressId = 'add_01gvcz6r0t0g5cphhwd8n952gb';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->update($request);

    if ($response->updateAddress200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateAddressRequest](../../models/operations/UpdateAddressRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateAddressResponse](../../models/operations/UpdateAddressResponse.md)**

