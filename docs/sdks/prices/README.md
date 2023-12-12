# Prices


## Overview

Work with prices.

Prices - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/prices>
### Available Operations

* [create](#create) - Create a price
* [get](#get) - Get a price
* [list](#list) - List prices
* [update](#update) - Update a price

## create

Creates a new price.

Prices describe how you charge for products. You must include a `product_id` in your request to relate this price to a product.

If you omit the `quantity` object, Paddle automatically sets a minimum of `1` and a maximum of `100` for you. This means the most units that a customer can buy is 100. Set a quantity if you'd like to offer a different amount.

If successful, your response includes a copy of the new price entity.

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
        $request = new Shared\PriceCreate();
    $request->billingCycle = new Shared\Period2();
    $request->billingCycle->frequency = 486589;
    $request->billingCycle->interval = Shared\Period2Interval::Week;
    $request->customData = new Shared\CustomData();
    $request->description = 'Proactive systematic Graphical User Interface';
    $request->productId = 'string';
    $request->quantity = new Shared\PriceQuantity();
    $request->quantity->maximum = 100;
    $request->quantity->minimum = 1;
    $request->taxMode = Shared\TaxMode1::AccountSetting;
    $request->trialPeriod = new Shared\Period2();
    $request->trialPeriod->frequency = 134365;
    $request->trialPeriod->interval = Shared\Period2Interval::Year;
    $request->unitPrice = new Shared\Money2();
    $request->unitPrice->amount = '69.02';
    $request->unitPrice->currencyCode = Shared\CurrencyCode2::Zar;
    $request->unitPriceOverrides = [
        new Shared\UnitPriceOverride(),
    ];;

    $response = $sdk->prices->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [\paddle\Paddle\Models\Shared\PriceCreate](../../Models/Shared/PriceCreate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreatePriceResponse](../../Models/Operations/CreatePriceResponse.md)**


## get

Returns a price using its ID.

Use the `include` parameter to include the related product entity in the response.

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
        $request = new Operations\GetPriceRequest();
    $request->include = Shared\IncludePrice::Product;
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';;

    $response = $sdk->prices->get($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\paddle\Paddle\Models\Operations\GetPriceRequest](../../Models/Operations/GetPriceRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\GetPriceResponse](../../Models/Operations/GetPriceResponse.md)**


## list

Returns a paginated list of prices. Use the query parameters to page through results.

By default, Paddle returns prices that are `active`. Use the `status` query parameter to return prices that are archived.

Use the `include` parameter to include the related product entity in the response.

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
        $request = new Operations\ListPricesRequest();
    $request->after = 'string';
    $request->id = '<ID>';
    $request->include = Shared\IncludePrice::Product;
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';
    $request->recurring = false;
    $request->status = Shared\Status::Active;;

    $response = $sdk->prices->list($request);

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
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\ListPricesRequest](../../Models/Operations/ListPricesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ListPricesResponse](../../Models/Operations/ListPricesResponse.md)**


## update

Updates a price using its ID.

If successful, your response includes a copy of the updated price entity.

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
        $request = new Operations\UpdatePriceRequest();
    $request->priceUpdate = new Shared\PriceUpdate();
    $request->priceUpdate->billingCycle = new Shared\Period2();
    $request->priceUpdate->billingCycle->frequency = 857478;
    $request->priceUpdate->billingCycle->interval = Shared\Period2Interval::Day;
    $request->priceUpdate->customData = new Shared\CustomData();
    $request->priceUpdate->description = 'Persistent 24/7 focus group';
    $request->priceUpdate->quantity = new Shared\PriceQuantity();
    $request->priceUpdate->quantity->maximum = 100;
    $request->priceUpdate->quantity->minimum = 1;
    $request->priceUpdate->status = Shared\SchemaStatus::Archived;
    $request->priceUpdate->taxMode = Shared\TaxMode1::Internal;
    $request->priceUpdate->trialPeriod = new Shared\Period2();
    $request->priceUpdate->trialPeriod->frequency = 270324;
    $request->priceUpdate->trialPeriod->interval = Shared\Period2Interval::Month;
    $request->priceUpdate->unitPrice = new Shared\Money2();
    $request->priceUpdate->unitPrice->amount = '684.20';
    $request->priceUpdate->unitPrice->currencyCode = Shared\CurrencyCode2::Jpy;
    $request->priceUpdate->unitPriceOverrides = [
        new Shared\UnitPriceOverride(),
    ];
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';;

    $response = $sdk->prices->update($request);

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
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\UpdatePriceRequest](../../Models/Operations/UpdatePriceRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\UpdatePriceResponse](../../Models/Operations/UpdatePriceResponse.md)**

