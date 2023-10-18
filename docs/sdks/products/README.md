# Products
(*products*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\ProductCreate;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\TaxCategory1;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ProductCreate();
    $request->customData = new CustomData();
    $request->description = 'Multi-tiered human-resource model';
    $request->imageUrl = 'https://impartial-dump.com';
    $request->name = 'blue';
    $request->taxCategory = TaxCategory1::WebsiteHosting;

    $response = $sdk->products->create($request);

    if ($response->createProduct201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [\paddle\Paddle\Models\Shared\ProductCreate](../../models/shared/ProductCreate.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?\paddle\Paddle\Models\Operations\CreateProductResponse](../../models/operations/CreateProductResponse.md)**


## get

Returns a product using its ID.

Use the `include` parameter to include related price entities in the response.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetProductRequest;
use \paddle\Paddle\Models\Shared\IncludeProduct;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetProductRequest();
    $request->include = IncludeProduct::Prices;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';

    $response = $sdk->products->get($request);

    if ($response->getProduct200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetProductRequest](../../models/operations/GetProductRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetProductResponse](../../models/operations/GetProductResponse.md)**


## list

Returns a paginated list of products. Use the query parameters to page through results.

By default, Paddle returns products that are `active`. Use the `status` query parameter to return products that are archived.

Use the `include` parameter to include related price entities in the response.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListProductsRequest;
use \paddle\Paddle\Models\Shared\IncludeProduct;
use \paddle\Paddle\Models\Shared\Status;
use \paddle\Paddle\Models\Shared\TaxCategory;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListProductsRequest();
    $request->after = 'Bicycle';
    $request->id = '<ID>';
    $request->include = IncludeProduct::Prices;
    $request->orderBy = 'Metal';
    $request->perPage = 297548;
    $request->status = Status::Active;
    $request->taxCategory = TaxCategory::SoftwareProgrammingServices;

    $response = $sdk->products->list($request);

    if ($response->listProducts200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\ListProductsRequest](../../models/operations/ListProductsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListProductsResponse](../../models/operations/ListProductsResponse.md)**


## update

Updates a product using its ID.

Paddle does not upload product images to a CDN. For `image_url`, you should host images on an HTTPS server that's publicly accessible. We recommend using square images (`1:1` ratio).

If successful, your response includes a copy of the updated product entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateProductRequest;
use \paddle\Paddle\Models\Shared\ProductPatch;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\Schemasstatus;
use \paddle\Paddle\Models\Shared\TaxCategory1;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateProductRequest();
    $request->productPatch = new ProductPatch();
    $request->productPatch->customData = new CustomData();
    $request->productPatch->description = 'Synchronised 3rd generation matrix';
    $request->productPatch->imageUrl = 'http://grand-pupa.org';
    $request->productPatch->name = 'Metal';
    $request->productPatch->status = Schemasstatus::Archived;
    $request->productPatch->taxCategory = TaxCategory1::Ebooks;
    $request->productId = 'pro_01gsz4vmqbjk3x4vvtafffd540';

    $response = $sdk->products->update($request);

    if ($response->updateProduct200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateProductRequest](../../models/operations/UpdateProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateProductResponse](../../models/operations/UpdateProductResponse.md)**

