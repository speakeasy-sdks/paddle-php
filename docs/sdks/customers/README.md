# Customers


## Overview

Work with customers.

Customers - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/customers>
### Available Operations

* [create](#create) - Create a customer
* [get](#get) - Get a customer
* [list](#list) - List customers
* [listCreditBalances](#listcreditbalances) - List credit balances for a customer
* [update](#update) - Update a customer

## create

Creates a new customer.

If successful, your response includes a copy of the new customer entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CustomerCreate();
    $request->email = 'weloveyourproduct@paddle.com';
    $request->id = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->locale = 'fr_CH';
    $request->name = 'string';

    $response = $sdk->customers->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [\paddle\Paddle\Models\Shared\CustomerCreate](../../models/shared/CustomerCreate.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?\paddle\Paddle\Models\Operations\CreateCustomerResponse](../../models/operations/CreateCustomerResponse.md)**


## get

Returns a customer using its ID.

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
    $request = new Operations\GetCustomerRequest();
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->get($request);

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
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\GetCustomerRequest](../../models/operations/GetCustomerRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\GetCustomerResponse](../../models/operations/GetCustomerResponse.md)**


## list

Returns a paginated list of customers. Use the query parameters to page through results.

By default, Paddle returns customers that are `active`. Use the `status` query parameter to return customers that are archived.

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
    $request = new Operations\ListCustomersRequest();
    $request->after = 'string';
    $request->id = '<ID>';
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->search = 'upgrade';
    $request->status = Shared\Status::Active;

    $response = $sdk->customers->list($request);

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
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\ListCustomersRequest](../../models/operations/ListCustomersRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\ListCustomersResponse](../../models/operations/ListCustomersResponse.md)**


## listCreditBalances

Returns a list of credit balances for each currency for a customer. Each balance has three totals:

* `available`: total available to use.
* `reserved`: total temporarily reserved for billed transactions.
* `used`: total amount of credit used.

Credit is added to the `available` total initially. When used, it moves to the `used` total.

The `reserved` total is used when a credit balance is applied to a transaction that's marked as `billed`, like when working with an issued invoice. It's not available for other transactions at this point, but isn't considered `used` until the transaction is completed. If a `billed` transaction is `canceled`, any reserved credit moves back to `available`.

The response is not paginated.

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
    $request = new Operations\ListCreditBalancesRequest();
    $request->currencyCode = 'EUR';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->listCreditBalances($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\ListCreditBalancesRequest](../../models/operations/ListCreditBalancesRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ListCreditBalancesResponse](../../models/operations/ListCreditBalancesResponse.md)**


## update

Updates a customer using its ID.

If successful, your response includes a copy of the updated customer entity.

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
    $request = new Operations\UpdateCustomerRequest();
    $request->customer = new Shared\CustomerInput();
    $request->customer->email = 'weloveyourproduct@paddle.com';
    $request->customer->id = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customer->locale = 'sk';
    $request->customer->name = 'string';
    $request->customer->status = Shared\SchemaStatus::Active;
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->update($request);

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
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\UpdateCustomerRequest](../../models/operations/UpdateCustomerRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateCustomerResponse](../../models/operations/UpdateCustomerResponse.md)**

