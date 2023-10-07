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

$sdk = Paddle::builder()
    ->build();

try {
    $request = [
        'online' => 'Configuration',
    ]

    $response = $sdk->prices->create($request);

    if ($response->createPrice201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


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

$sdk = Paddle::builder()
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

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListPricesRequest();
    $request->after = 'Northeast Metal Canada';
    $request->id = '<ID>';
    $request->include = IncludePrice::Product;
    $request->orderBy = 'Data Response West';
    $request->perPage = 718303;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';
    $request->recurring = false;
    $request->status = Status::Archived;

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

$sdk = Paddle::builder()
    ->build();

try {
    $request = new UpdatePriceRequest();
    $request->requestBody = [
        'Van' => 'East',
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

