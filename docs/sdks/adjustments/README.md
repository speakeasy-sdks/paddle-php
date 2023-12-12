# Adjustments


## Overview

Work with adjustments.

### Available Operations

* [create](#create) - Create an adjustment
* [list](#list) - List adjustments

## create

Creates an adjustment for one or more transaction items.

You may create adjustments for `billed` or `completed` transactions:

* Where an adjustment is for a manually-collected transaction with the status of `billed` (an issued invoice), credit adjustments reduce the balance to pay on the invoice.
* Where an adjustment is a refund, the total is returned to a customer's original payment method.

You can't create credits for automatically-collected transactions. Paddle creates and manages credits for automatically-collected transactions when you make changes to the related subscription and choose to prorate.

Refunds must be approved by Paddle. They're created with the status `pending_approval`, before moving to `approved` or `rejected`.

Adjustments can apply to some or all items on a transaction. You'll need the Paddle ID of the transaction to create a refund or credit for,
along with the Paddle ID of any transaction items (`details.line_items[].id`).

If successful, your response includes a copy of the new adjustment entity.

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
        $request = new Shared\AdjustmentCreate();
    $request->action = Shared\SchemaAction::Refund;
    $request->currencyCode = Shared\CurrencyCode2::Jpy;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->id = 'adj_01gya6twkp8y0tv1e19rsgst9m';
    $request->items = [
        new Shared\AdjustmentCreateAdjustmentItem(),
    ];
    $request->payoutTotals = new Shared\AdjustmentPayoutTotals();
    $request->payoutTotals->chargebackFee = new Shared\ChargebackFee();
    $request->payoutTotals->chargebackFee->amount = '1680';
    $request->payoutTotals->chargebackFee->original = new Shared\Original();
    $request->payoutTotals->chargebackFee->original->amount = '1500';
    $request->payoutTotals->chargebackFee->original->currencyCode = Shared\CurrencyCodeChargeback::Gbp;
    $request->payoutTotals->currencyCode = Shared\CurrencyCodePayouts::Usd;
    $request->payoutTotals->earnings = '15120';
    $request->payoutTotals->fee = '300';
    $request->payoutTotals->subtotal = '15000';
    $request->payoutTotals->tax = '1500';
    $request->payoutTotals->total = '16500';
    $request->reason = 'string';
    $request->status = Shared\SchemaStatusAdjustment::Approved;
    $request->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';
    $request->transactionId = 'string';;

    $response = $sdk->adjustments->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\paddle\Paddle\Models\Shared\AdjustmentCreate](../../Models/Shared/AdjustmentCreate.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\paddle\Paddle\Models\Operations\CreateAdjustmentResponse](../../Models/Operations/CreateAdjustmentResponse.md)**


## list

Returns a paginated list of adjustments. Use the query parameters to page through results.

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
        $request = new Operations\ListAdjustmentsRequest();
    $request->action = Shared\Action::CreditReverse;
    $request->after = 'string';
    $request->customerId = 'ctm_01gt25aq4b2zcfw12szwtjrbdt';
    $request->id = '<ID>';
    $request->orderBy = 'string';
    $request->perPage = 99895;
    $request->status = Shared\StatusAdjustment::Rejected;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';;

    $response = $sdk->adjustments->list($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\paddle\Paddle\Models\Operations\ListAdjustmentsRequest](../../Models/Operations/ListAdjustmentsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\paddle\Paddle\Models\Operations\ListAdjustmentsResponse](../../Models/Operations/ListAdjustmentsResponse.md)**

