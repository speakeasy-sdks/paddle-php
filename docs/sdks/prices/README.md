# Prices
(*prices*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\PriceCreate;
use \paddle\Paddle\Models\Shared\Period2;
use \paddle\Paddle\Models\Shared\Period2Interval;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\PriceQuantity;
use \paddle\Paddle\Models\Shared\TaxMode1;
use \paddle\Paddle\Models\Shared\Money2;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\UnitPriceOverride;
use \paddle\Paddle\Models\Shared\CountryCode2;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PriceCreate();
    $request->billingCycle = new Period2();
    $request->billingCycle->frequency = 486589;
    $request->billingCycle->interval = Period2Interval::Week;
    $request->customData = new CustomData();
    $request->description = 'Proactive systematic Graphical User Interface';
    $request->productId = 'innovative';
    $request->quantity = new PriceQuantity();
    $request->quantity->maximum = 100;
    $request->quantity->minimum = 1;
    $request->taxMode = TaxMode1::Internal;
    $request->trialPeriod = new Period2();
    $request->trialPeriod->frequency = 69025;
    $request->trialPeriod->interval = Period2Interval::Year;
    $request->unitPrice = new Money2();
    $request->unitPrice->amount = '796.48';
    $request->unitPrice->currencyCode = CurrencyCode2::Hkd;
    $request->unitPriceOverrides = [
        new UnitPriceOverride(),
    ];

    $response = $sdk->prices->create($request);

    if ($response->createPrice201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [\paddle\Paddle\Models\Shared\PriceCreate](../../models/shared/PriceCreate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreatePriceResponse](../../models/operations/CreatePriceResponse.md)**


## get

Returns a price using its ID.

Use the `include` parameter to include the related product entity in the response.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetPriceRequest;
use \paddle\Paddle\Models\Shared\IncludePrice;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetPriceRequest();
    $request->include = IncludePrice::Product;
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';

    $response = $sdk->prices->get($request);

    if ($response->getPrice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\paddle\Paddle\Models\Operations\GetPriceRequest](../../models/operations/GetPriceRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\GetPriceResponse](../../models/operations/GetPriceResponse.md)**


## list

Returns a paginated list of prices. Use the query parameters to page through results.

By default, Paddle returns prices that are `active`. Use the `status` query parameter to return prices that are archived.

Use the `include` parameter to include the related product entity in the response.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListPricesRequest;
use \paddle\Paddle\Models\Shared\IncludePrice;
use \paddle\Paddle\Models\Shared\Status;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListPricesRequest();
    $request->after = 'Bicycle';
    $request->id = '<ID>';
    $request->include = IncludePrice::Product;
    $request->orderBy = 'Metal';
    $request->perPage = 297548;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';
    $request->recurring = false;
    $request->status = Status::Active;

    $response = $sdk->prices->list($request);

    if ($response->listPrices200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\ListPricesRequest](../../models/operations/ListPricesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ListPricesResponse](../../models/operations/ListPricesResponse.md)**


## update

Updates a price using its ID.

If successful, your response includes a copy of the updated price entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdatePriceRequest;
use \paddle\Paddle\Models\Shared\PriceUpdate;
use \paddle\Paddle\Models\Shared\Period2;
use \paddle\Paddle\Models\Shared\Period2Interval;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\PriceQuantity;
use \paddle\Paddle\Models\Shared\Schemasstatus;
use \paddle\Paddle\Models\Shared\TaxMode1;
use \paddle\Paddle\Models\Shared\Money2;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\UnitPriceOverride;
use \paddle\Paddle\Models\Shared\CountryCode2;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdatePriceRequest();
    $request->priceUpdate = new PriceUpdate();
    $request->priceUpdate->billingCycle = new Period2();
    $request->priceUpdate->billingCycle->frequency = 857478;
    $request->priceUpdate->billingCycle->interval = Period2Interval::Day;
    $request->priceUpdate->customData = new CustomData();
    $request->priceUpdate->description = 'Persistent 24/7 focus group';
    $request->priceUpdate->quantity = new PriceQuantity();
    $request->priceUpdate->quantity->maximum = 100;
    $request->priceUpdate->quantity->minimum = 1;
    $request->priceUpdate->status = Schemasstatus::Archived;
    $request->priceUpdate->taxMode = TaxMode1::Internal;
    $request->priceUpdate->trialPeriod = new Period2();
    $request->priceUpdate->trialPeriod->frequency = 270324;
    $request->priceUpdate->trialPeriod->interval = Period2Interval::Month;
    $request->priceUpdate->unitPrice = new Money2();
    $request->priceUpdate->unitPrice->amount = '684.20';
    $request->priceUpdate->unitPrice->currencyCode = CurrencyCode2::Jpy;
    $request->priceUpdate->unitPriceOverrides = [
        new UnitPriceOverride(),
    ];
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';

    $response = $sdk->prices->update($request);

    if ($response->updatePrice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\UpdatePriceRequest](../../models/operations/UpdatePriceRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\UpdatePriceResponse](../../models/operations/UpdatePriceResponse.md)**

