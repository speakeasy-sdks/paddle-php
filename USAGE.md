<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use paddle\Paddle;
use paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\AdjustmentCreate();
    $request->action = Shared\SchemaAction::Refund;
    $request->currencyCode = Shared\CurrencyCode2::Jpy;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->id = 'adj_01gya6twkp8y0tv1e19rsgst9m';
    $request->items = [new Shared\AdjustmentCreateAdjustmentItem()];
    $request->payoutTotals = new Shared\AdjustmentPayoutTotals();
    $request->payoutTotals->chargebackFee = new Shared\ChargebackFee();
    $request->payoutTotals->chargebackFee->amount = '1680';
    $request->payoutTotals->chargebackFee->original = new Shared\Original();
    $request->payoutTotals->chargebackFee->original->amount = '1500';
    $request->payoutTotals->chargebackFee->original->currencyCode =
        Shared\CurrencyCodeChargeback::Gbp;
    $request->payoutTotals->currencyCode = Shared\CurrencyCodePayouts::Usd;
    $request->payoutTotals->earnings = '15120';
    $request->payoutTotals->fee = '300';
    $request->payoutTotals->subtotal = '15000';
    $request->payoutTotals->tax = '1500';
    $request->payoutTotals->total = '16500';
    $request->reason = 'string';
    $request->status = Shared\SchemaStatusAdjustment::Approved;
    $request->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';
    $request->transactionId = 'string';

    $response = $sdk->adjustments->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->