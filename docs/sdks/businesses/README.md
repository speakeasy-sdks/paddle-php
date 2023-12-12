# Businesses


## Overview

Work with businesses for a customer.

Businesses - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/customers#business-object>
### Available Operations

* [create](#create) - Create a business for a customer
* [get](#get) - Get a business for a customer
* [list](#list) - List businesses for a customer
* [update](#update) - Update a business for a customer

## create

Creates a new business for a customer.

If successful, your response includes a copy of the new business entity.

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

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateBusinessRequest();
    $request->businessCreate = new Shared\BusinessCreate();
    $request->businessCreate->companyNumber = '123456789';
    $request->businessCreate->contacts = [
        new Shared\Contacts(),
    ];
    $request->businessCreate->id = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->businessCreate->name = 'string';
    $request->businessCreate->taxIdentifier = 'AB0123456789';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';;

    $response = $sdk->businesses->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\CreateBusinessRequest](../../Models/Operations/CreateBusinessRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\CreateBusinessResponse](../../Models/Operations/CreateBusinessResponse.md)**


## get

Returns a business for a customer using its ID and related customer ID.

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

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetBusinessRequest();
    $request->businessId = 'biz_01gvcz4m28csa5kem2gqq5ymxn';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';;

    $response = $sdk->businesses->get($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\GetBusinessRequest](../../Models/Operations/GetBusinessRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\GetBusinessResponse](../../Models/Operations/GetBusinessResponse.md)**


## list

Returns a paginated list of businesses for a customer. Use the query parameters to page through results.

By default, Paddle returns businesses that are `active`. Use the `status` query parameter to return businesses that are archived.

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

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListBusinessesRequest();
    $request->after = 'string';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';
    $request->id = '<ID>';
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->search = 'upgrade';
    $request->status = Shared\Status::Active;;

    $response = $sdk->businesses->list($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\ListBusinessesRequest](../../Models/Operations/ListBusinessesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\ListBusinessesResponse](../../Models/Operations/ListBusinessesResponse.md)**


## update

Updates a business for a customer using its ID and related customer ID.

If successful, your response includes a copy of the updated business entity.

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

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateBusinessRequest();
    $request->business = new Shared\BusinessInput();
    $request->business->companyNumber = '123456789';
    $request->business->contacts = [
        new Shared\BusinessContacts(),
    ];
    $request->business->id = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->business->name = 'string';
    $request->business->status = Shared\SchemaStatus::Archived;
    $request->business->taxIdentifier = 'AB0123456789';
    $request->businessId = 'biz_01gvcz4m28csa5kem2gqq5ymxn';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';;

    $response = $sdk->businesses->update($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\UpdateBusinessRequest](../../Models/Operations/UpdateBusinessRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateBusinessResponse](../../Models/Operations/UpdateBusinessResponse.md)**

