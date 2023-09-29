# Discounts
(*discounts*)

## Overview

Work with discounts.

Discounts - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/discounts>
### Available Operations

* [create](#create) - Create a discount
* [get](#get) - Get a discount
* [list](#list) - List discounts
* [update](#update) - Update a discount

## create

Creates a new discount.

If successful, your response includes a copy of the new discount entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\DiscountCreateInput;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\DiscountCreateType;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new DiscountCreateInput();
    $request->amount = '486.59';
    $request->code = 'Configuration Money';
    $request->currencyCode = CurrencyCode2::Sgd;
    $request->description = 'Business-focused zero tolerance project';
    $request->enabledForCheckout = false;
    $request->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->maximumRecurringIntervals = 376844;
    $request->recur = false;
    $request->restrictTo = [
        'technology',
    ];
    $request->type = DiscountCreateType::Flat;
    $request->usageLimit = 455222;

    $response = $sdk->discounts->create($request);

    if ($response->createDiscount200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\paddle\Paddle\Models\Shared\DiscountCreateInput](../../models/shared/DiscountCreateInput.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreateDiscountResponse](../../models/operations/CreateDiscountResponse.md)**


## get

Returns a discount using its ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetDiscountRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetDiscountRequest();
    $request->discountId = 'dsc_01gt218xfk7yztpvgmcazkes83';

    $response = $sdk->discounts->get($request);

    if ($response->getDiscount200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\GetDiscountRequest](../../models/operations/GetDiscountRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\GetDiscountResponse](../../models/operations/GetDiscountResponse.md)**


## list

Returns a paginated list of discounts. Use the query parameters to page through results.

By default, Paddle returns discounts that are `active`. Use the `status` query parameter to return discounts that are archived or expired.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListDiscountsRequest;
use \paddle\Paddle\Models\Shared\StatusDiscount;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListDiscountsRequest();
    $request->after = 'Northeast Metal Canada';
    $request->code = 'BLACKFRIDAY';
    $request->id = '<ID>';
    $request->orderBy = 'Data Response West';
    $request->perPage = 718303;
    $request->status = StatusDiscount::Used;

    $response = $sdk->discounts->list($request);

    if ($response->listDiscounts200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\ListDiscountsRequest](../../models/operations/ListDiscountsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\ListDiscountsResponse](../../models/operations/ListDiscountsResponse.md)**


## update

Updates a discount using its ID.

If successful, your response includes a copy of the updated discount entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateDiscountRequest;
use \paddle\Paddle\Models\Shared\DiscountInput;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\SchemasstatusDiscount;
use \paddle\Paddle\Models\Shared\DiscountType;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new UpdateDiscountRequest();
    $request->discountInput = new DiscountInput();
    $request->discountInput->amount = '857.48';
    $request->discountInput->code = 'Rock';
    $request->discountInput->currencyCode = CurrencyCode2::Gbp;
    $request->discountInput->description = 'Reactive zero tolerance definition';
    $request->discountInput->enabledForCheckout = false;
    $request->discountInput->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->discountInput->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->discountInput->maximumRecurringIntervals = 627690;
    $request->discountInput->recur = false;
    $request->discountInput->restrictTo = [
        'Analyst',
    ];
    $request->discountInput->status = SchemasstatusDiscount::Archived;
    $request->discountInput->type = DiscountType::Percentage;
    $request->discountInput->usageLimit = 134151;
    $request->discountId = 'dsc_01gt218xfk7yztpvgmcazkes83';

    $response = $sdk->discounts->update($request);

    if ($response->updateDiscount200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\UpdateDiscountRequest](../../models/operations/UpdateDiscountRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateDiscountResponse](../../models/operations/UpdateDiscountResponse.md)**

