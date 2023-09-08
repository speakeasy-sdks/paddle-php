# invoices

## Overview

Work with invoices.

Invoices - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/invoices>
### Available Operations

* [getPdf](#getpdf) - Get a PDF for an invoice

## getPdf

Generates a PDF for an invoice, then returns a link to it.

The link returned is not a permanent link. It expires at the date and time returned in the `Expires` header.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetInvoicePdfRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetInvoicePdfRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';

    $response = $sdk->invoices->getPdf($request);

    if ($response->getInvoicePdf200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\GetInvoicePdfRequest](../../models/operations/GetInvoicePdfRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\GetInvoicePdfResponse](../../models/operations/GetInvoicePdfResponse.md)**

