# Transactions
(*transactions*)

## Overview

Work with transactions.

Transactions - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/transactions>
### Available Operations

* [getInvoice](#getinvoice) - Get a PDF invoice for a transaction

## getInvoice

Returns a link to an invoice PDF for a transaction.

Invoice PDFs are created for both automatically and manually-collected transactions.

* The PDF for manually-collected transactions includes payment terms, purchase order number, and notes for your customer. It's a demand for payment from your customer.
* The PDF for automatically-collected transactions lets your customer know that payment was taken successfully. Customers may require this for for tax-reporting purposes.

The link returned is not a permanent link. It expires at the date and time returned in the `Expires` header.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetTransactionInvoiceRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetTransactionInvoiceRequest();
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';

    $response = $sdk->transactions->getInvoice($request);

    if ($response->getTransactionInvoice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\paddle\Paddle\Models\Operations\GetTransactionInvoiceRequest](../../models/operations/GetTransactionInvoiceRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\GetTransactionInvoiceResponse](../../models/operations/GetTransactionInvoiceResponse.md)**

