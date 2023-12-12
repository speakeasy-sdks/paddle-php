# Products


## Overview

Work with products.

Products - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/products>
### Available Operations

* [create](#create) - Create a product
* [get](#get) - Get a product
* [list](#list) - List products
* [update](#update) - Update a product

## create

Creates a new product.

Paddle does not upload product images to a CDN. For `image_url`, you should host images on an HTTPS server that's publicly accessible. We recommend using square images (`1:1` ratio).

If successful, your response includes a copy of the new product entity.

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
        $request = new Shared\ProductCreate();
    $request->customData = new Shared\CustomData();
    $request->description = 'Multi-tiered human-resource model';
    $request->imageUrl = 'https://impartial-dump.com';
    $request->name = 'string';
    $request->taxCategory = Shared\TaxCategory1::TrainingServices;;

    $response = $sdk->products->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [\paddle\Paddle\Models\Shared\ProductCreate](../../Models/Shared/ProductCreate.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?\paddle\Paddle\Models\Operations\CreateProductResponse](../../Models/Operations/CreateProductResponse.md)**


## get

Returns a product using its ID.

Use the `include` parameter to include related price entities in the response.

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
        $request = new Operations\GetProductRequest();
    $request->include = Shared\IncludeProduct::Prices;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';;

    $response = $sdk->products->get($request);

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
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetProductRequest](../../Models/Operations/GetProductRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetProductResponse](../../Models/Operations/GetProductResponse.md)**


## list

Returns a paginated list of products. Use the query parameters to page through results.

By default, Paddle returns products that are `active`. Use the `status` query parameter to return products that are archived.

Use the `include` parameter to include related price entities in the response.

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
        $request = new Operations\ListProductsRequest();
    $request->after = 'string';
    $request->id = '<ID>';
    $request->include = Shared\IncludeProduct::Prices;
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->status = Shared\Status::Active;
    $request->taxCategory = Shared\TaxCategory::Saas;;

    $response = $sdk->products->list($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\ListProductsRequest](../../Models/Operations/ListProductsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListProductsResponse](../../Models/Operations/ListProductsResponse.md)**


## update

Updates a product using its ID.

Paddle does not upload product images to a CDN. For `image_url`, you should host images on an HTTPS server that's publicly accessible. We recommend using square images (`1:1` ratio).

If successful, your response includes a copy of the updated product entity.

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
        $request = new Operations\UpdateProductRequest();
    $request->productPatch = new Shared\ProductPatch();
    $request->productPatch->customData = new Shared\CustomData();
    $request->productPatch->description = 'Synchronised 3rd generation matrix';
    $request->productPatch->imageUrl = 'http://grand-pupa.org';
    $request->productPatch->name = 'string';
    $request->productPatch->status = Shared\SchemaStatus::Active;
    $request->productPatch->taxCategory = Shared\TaxCategory1::SoftwareProgrammingServices;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';;

    $response = $sdk->products->update($request);

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
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateProductRequest](../../Models/Operations/UpdateProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateProductResponse](../../Models/Operations/UpdateProductResponse.md)**

