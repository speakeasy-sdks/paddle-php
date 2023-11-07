# Discounts


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

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\DiscountCreate();
    $request->amount = '486.59';
    $request->code = 'string';
    $request->currencyCode = Shared\CurrencyCode2::Jpy;
    $request->description = 'Proactive systematic Graphical User Interface';
    $request->enabledForCheckout = false;
    $request->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->maximumRecurringIntervals = 288408;
    $request->recur = false;
    $request->restrictTo = [
        'string',
    ];
    $request->type = Shared\Type::Flat;
    $request->usageLimit = 786546;

    $response = $sdk->discounts->create($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [\paddle\Paddle\Models\Shared\DiscountCreate](../../models/shared/DiscountCreate.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?\paddle\Paddle\Models\Operations\CreateDiscountResponse](../../models/operations/CreateDiscountResponse.md)**


## get

Returns a discount using its ID.

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
    $request = new Operations\GetDiscountRequest();
    $request->discountId = 'dsc_01gt218xfk7yztpvgmcazkes83';

    $response = $sdk->discounts->get($request);

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

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListDiscountsRequest();
    $request->after = 'string';
    $request->code = 'BLACKFRIDAY';
    $request->id = '<ID>';
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->status = Shared\StatusDiscount::Active;

    $response = $sdk->discounts->list($request);

    if ($response->object !== null) {
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

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateDiscountRequest();
    $request->discount = new Shared\DiscountInput();
    $request->discount->amount = '857.48';
    $request->discount->code = 'string';
    $request->discount->currencyCode = Shared\CurrencyCode2::Ars;
    $request->discount->description = 'Persistent 24/7 focus group';
    $request->discount->enabledForCheckout = false;
    $request->discount->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->discount->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->discount->maximumRecurringIntervals = 708455;
    $request->discount->recur = false;
    $request->discount->restrictTo = [
        'string',
    ];
    $request->discount->status = Shared\SchemaStatusDiscount::Used;
    $request->discount->type = Shared\DiscountType::Flat;
    $request->discount->usageLimit = 627690;
    $request->discountId = 'dsc_01gt218xfk7yztpvgmcazkes83';

    $response = $sdk->discounts->update($request);

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
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\UpdateDiscountRequest](../../models/operations/UpdateDiscountRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateDiscountResponse](../../models/operations/UpdateDiscountResponse.md)**

