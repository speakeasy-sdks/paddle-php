# customers

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\CustomerCreateInput;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CustomerCreateInput();
    $request->email = 'weloveyourproduct@paddle.com';
    $request->id = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->locale = 'id';
    $request->name = 'Richard Boyer';

    $response = $sdk->customers->create($request);

    if ($response->createCustomer201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\paddle\Paddle\Models\Shared\CustomerCreateInput](../../models/shared/CustomerCreateInput.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreateCustomerResponse](../../models/operations/CreateCustomerResponse.md)**


## get

Returns a customer using its ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetCustomerRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetCustomerRequest();
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->get($request);

    if ($response->getCustomer200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListCustomersRequest;
use \paddle\Paddle\Models\Shared\Status;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListCustomersRequest();
    $request->after = 'laborum';
    $request->id = '1ffe78f0-97b0-4074-b154-71b5e6e13b99';
    $request->orderBy = 'pariatur';
    $request->perPage = 265389;
    $request->search = 'upgrade';
    $request->status = Status::Archived;

    $response = $sdk->customers->list($request);

    if ($response->listCustomers200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListCreditBalancesRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListCreditBalancesRequest();
    $request->currencyCode = 'EUR';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->listCreditBalances($request);

    if ($response->listCreditBalances200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateCustomerRequest;
use \paddle\Paddle\Models\Shared\CustomerInput;
use \paddle\Paddle\Models\Shared\Schemasstatus;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new UpdateCustomerRequest();
    $request->customerInput = new CustomerInput();
    $request->customerInput->email = 'weloveyourproduct@paddle.com';
    $request->customerInput->id = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customerInput->locale = 'rem';
    $request->customerInput->name = 'Carl Waelchi DVM';
    $request->customerInput->status = Schemasstatus::Active;
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->customers->update($request);

    if ($response->updateCustomer200ApplicationJSONObject !== null) {
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

