<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CreateAddressRequest;
use \paddle\Paddle\Models\Shared\AddressCreateInput;
use \paddle\Paddle\Models\Shared\CountryCode2;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CreateAddressRequest();
    $request->addressCreateInput = new AddressCreateInput();
    $request->addressCreateInput->city = 'Astoria';
    $request->addressCreateInput->countryCode = CountryCode2::Kn;
    $request->addressCreateInput->description = 'Paddle.com';
    $request->addressCreateInput->firstLine = '3811 Ditmars Blvd';
    $request->addressCreateInput->id = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->addressCreateInput->postalCode = '11105-1803';
    $request->addressCreateInput->region = 'NY';
    $request->addressCreateInput->secondLine = 'Configuration Money';
    $request->customerId = 'ctm_01gw1xk43eqy2rrf0cs93zvm6t';

    $response = $sdk->addresses->create($request);

    if ($response->createAddress201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->