# Businesses
(*businesses*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CreateBusinessRequest;
use \paddle\Paddle\Models\Shared\BusinessCreateInput;
use \paddle\Paddle\Models\Shared\BusinessCreateContacts;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateBusinessRequest();
    $request->businessCreateInput = new BusinessCreateInput();
    $request->businessCreateInput->companyNumber = '123456789';
    $request->businessCreateInput->contacts = [
        new BusinessCreateContacts(),
    ];
    $request->businessCreateInput->id = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->businessCreateInput->name = 'online';
    $request->businessCreateInput->taxIdentifier = 'AB0123456789';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->businesses->create($request);

    if ($response->createBusiness201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\CreateBusinessRequest](../../models/operations/CreateBusinessRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\CreateBusinessResponse](../../models/operations/CreateBusinessResponse.md)**


## get

Returns a business for a customer using its ID and related customer ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetBusinessRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetBusinessRequest();
    $request->businessId = 'biz_01gvcz4m28csa5kem2gqq5ymxn';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->businesses->get($request);

    if ($response->getBusiness200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\GetBusinessRequest](../../models/operations/GetBusinessRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\GetBusinessResponse](../../models/operations/GetBusinessResponse.md)**


## list

Returns a paginated list of businesses for a customer. Use the query parameters to page through results.

By default, Paddle returns businesses that are `active`. Use the `status` query parameter to return businesses that are archived.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListBusinessesRequest;
use \paddle\Paddle\Models\Shared\Status;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListBusinessesRequest();
    $request->after = 'Bicycle';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';
    $request->id = '<ID>';
    $request->orderBy = 'Metal';
    $request->perPage = 297548;
    $request->search = 'upgrade';
    $request->status = Status::Active;

    $response = $sdk->businesses->list($request);

    if ($response->listBusinesses200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\ListBusinessesRequest](../../models/operations/ListBusinessesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\ListBusinessesResponse](../../models/operations/ListBusinessesResponse.md)**


## update

Updates a business for a customer using its ID and related customer ID.

If successful, your response includes a copy of the updated business entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateBusinessRequest;
use \paddle\Paddle\Models\Shared\BusinessInput;
use \paddle\Paddle\Models\Shared\BusinessContacts;
use \paddle\Paddle\Models\Shared\Schemasstatus;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateBusinessRequest();
    $request->businessInput = new BusinessInput();
    $request->businessInput->companyNumber = '123456789';
    $request->businessInput->contacts = [
        new BusinessContacts(),
    ];
    $request->businessInput->id = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->businessInput->name = 'Van';
    $request->businessInput->status = Schemasstatus::Active;
    $request->businessInput->taxIdentifier = 'AB0123456789';
    $request->businessId = 'biz_01gvcz4m28csa5kem2gqq5ymxn';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->businesses->update($request);

    if ($response->updateBusiness200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\UpdateBusinessRequest](../../models/operations/UpdateBusinessRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateBusinessResponse](../../models/operations/UpdateBusinessResponse.md)**

