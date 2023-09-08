<!-- Start SDK Example Usage -->


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
    $request->orderID = 548814;

    $response = $sdk->order->deleteOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->