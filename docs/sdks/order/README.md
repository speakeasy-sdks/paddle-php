# order

### Available Operations

* [deleteOrder](#deleteorder) - Delete an order
* [getOrder](#getorder) - Get an order
* [upsertOrder](#upsertorder) - Create an order

## deleteOrder

Delete an order

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\DeleteOrderRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new DeleteOrderRequest();
    $request->orderID = 592845;

    $response = $sdk->order->deleteOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\paddle\Paddle\Models\Operations\DeleteOrderRequest](../../models/operations/DeleteOrderRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\DeleteOrderResponse](../../models/operations/DeleteOrderResponse.md)**


## getOrder

Get an order

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetOrderRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetOrderRequest();
    $request->orderID = 715190;

    $response = $sdk->order->getOrder($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\paddle\Paddle\Models\Operations\GetOrderRequest](../../models/operations/GetOrderRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\GetOrderResponse](../../models/operations/GetOrderResponse.md)**


## upsertOrder

Create an order

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\CreateOrderInput;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CreateOrderInput();
    $request->description = 'quibusdam';
    $request->image = 'unde';
    $request->name = 'Johnnie Stamm';
    $request->price = 6458.94;
    $request->teaser = 'suscipit';

    $response = $sdk->order->upsertOrder($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\paddle\Paddle\Models\Shared\CreateOrderInput](../../models/shared/CreateOrderInput.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpsertOrderResponse](../../models/operations/UpsertOrderResponse.md)**

