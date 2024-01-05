# Invoices


## Overview

Work with invoices.

Invoices - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/invoices>
### Available Operations

* [cancel](#cancel) - Cancel an invoice
* [create](#create) - Create a draft invoice
* [get](#get) - Get an invoice
* [getPdf](#getpdf) - Get a PDF for an invoice
* [issueInvoice](#issueinvoice) - Issue an invoice
* [list](#list) - List invoices
* [update](#update) - Update a draft invoice

## cancel

Cancels an invoice using its ID.

Invoices can only be canceled where they are not `paid` or already canceled.

If successful, your response includes a copy of the invoice entity with the `status` of `canceled`.

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
        $request = new Operations\CancelInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';;

    $response = $sdk->invoices->cancel($request);

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
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\CancelInvoiceRequest](../../Models/Operations/CancelInvoiceRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\CancelInvoiceResponse](../../Models/Operations/CancelInvoiceResponse.md)**


## create

Creates a draft invoice.

Invoices are always created with the `status` as `draft`. This means they don't have an `invoice_number` and you can make changes to the invoice and its items.

If successful, your response includes a copy of the new invoice entity.

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
        $request = new Shared\InvoiceInput();
    $request->addressId = 'add_01ghbkbv8s6kjram8fbfz49p45';
    $request->billingDetails = new Shared\BillingDetails1();
    $request->billingDetails->additionalInformation = 'string';
    $request->billingDetails->enableCheckout = false;
    $request->billingDetails->paymentTerms = new Shared\Period1();
    $request->billingDetails->paymentTerms->frequency = 486589;
    $request->billingDetails->paymentTerms->interval = Shared\Interval::Week;
    $request->billingDetails->purchaseOrderNumber = 'string';
    $request->billingPeriod = new Shared\BillingPeriod();
    $request->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d', '2023-12-01');
    $request->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d', '2024-07-30');
    $request->billingPeriod->type = Shared\InvoiceType::Contract;
    $request->businessId = 'biz_01ghbkcbs88yxj4fxecevjz9g7';
    $request->currencyCode = Shared\CurrencyCodeInvoice::Eur;
    $request->customData = new Shared\CustomDataInvoice();
    $request->customerId = 'ctm_01ghbkbbm326p19wh85fnr0xft';
    $request->details = new Shared\InvoiceDetailsInput();
    $request->details->lineItems = [
        new Shared\InvoiceDetailsLineItems(),
    ];
    $request->items = [
        new Shared\InvoiceItem(),
    ];;

    $response = $sdk->invoices->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [\paddle\Paddle\Models\Shared\InvoiceInput](../../Models/Shared/InvoiceInput.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?\paddle\Paddle\Models\Operations\CreateInvoiceResponse](../../Models/Operations/CreateInvoiceResponse.md)**


## get

Returns an invoice using its ID.

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
        $request = new Operations\GetInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';;

    $response = $sdk->invoices->get($request);

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
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetInvoiceRequest](../../Models/Operations/GetInvoiceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetInvoiceResponse](../../Models/Operations/GetInvoiceResponse.md)**


## getPdf

Generates a PDF for an invoice, then returns a link to it.

The link returned is not a permanent link. It expires at the date and time returned in the `Expires` header.

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
        $request = new Operations\GetInvoicePdfRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';;

    $response = $sdk->invoices->getPdf($request);

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
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\GetInvoicePdfRequest](../../Models/Operations/GetInvoicePdfRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\GetInvoicePdfResponse](../../Models/Operations/GetInvoicePdfResponse.md)**


## issueInvoice

Issues a draft invoice, changing the `status` from `draft` to either:

* `pending_acceptance`, where a customer hasn't yet accepted the Paddle merchant of record terms
* `unpaid` otherwise

At this point, Paddle:

* assigns an `invoice_number`
* sends a copy of the invoice to your customer and any `contacts` against the business on the invoice

Issued invoices are considered a legal document, so you can't make any changes to them. Cancel an invoice and create another if you need to make changes.

If successful, your response includes a copy of the invoice entity with the new status.

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
        $request = new Operations\IssueInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';;

    $response = $sdk->invoices->issueInvoice($request);

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
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\IssueInvoiceRequest](../../Models/Operations/IssueInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\IssueInvoiceResponse](../../Models/Operations/IssueInvoiceResponse.md)**


## list

Returns a paginated list of invoices. Use the query parameters to page through results.

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
        $request = new Operations\ListInvoicesRequest();
    $request->after = 'string';
    $request->id = '<ID>';
    $request->perPage = 768578;
    $request->search = 'upgrade';
    $request->status = Shared\StatusInvoice::Paid;;

    $response = $sdk->invoices->list($request);

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
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\ListInvoicesRequest](../../Models/Operations/ListInvoicesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListInvoicesResponse](../../Models/Operations/ListInvoicesResponse.md)**


## update

Updates a draft invoice using its ID.

Only invoices with the status of `draft` can be updated. You cannot update invoices that are issued, canceled, or paid.

If successful, your response includes a copy of the updated invoice entity.

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
        $request = new Operations\UpdateInvoiceRequest();
    $request->invoiceForPatch = new Shared\InvoiceForPatch();
    $request->invoiceForPatch->addressId = 'add_01ghbm9egqcxtz4ap4dfg8dtaf';
    $request->invoiceForPatch->billingDetails = new Shared\BillingDetails1();
    $request->invoiceForPatch->billingDetails->additionalInformation = 'string';
    $request->invoiceForPatch->billingDetails->enableCheckout = false;
    $request->invoiceForPatch->billingDetails->paymentTerms = new Shared\Period1();
    $request->invoiceForPatch->billingDetails->paymentTerms->frequency = 857478;
    $request->invoiceForPatch->billingDetails->paymentTerms->interval = Shared\Interval::Day;
    $request->invoiceForPatch->billingDetails->purchaseOrderNumber = 'string';
    $request->invoiceForPatch->billingPeriod = new Shared\InvoiceForPatchBillingPeriod();
    $request->invoiceForPatch->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d', '2023-10-17');
    $request->invoiceForPatch->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d', '2022-01-18');
    $request->invoiceForPatch->billingPeriod->type = Shared\InvoiceForPatchType::Contract;
    $request->invoiceForPatch->businessId = 'biz_01ghbmaszjgjd47g5f3d9vw7hg';
    $request->invoiceForPatch->currencyCode = Shared\CurrencyCodeInvoice::Usd;
    $request->invoiceForPatch->customData = new Shared\CustomDataInvoice();
    $request->invoiceForPatch->customerId = 'ctm_01ghbm8g2qxsjp07p5ywsy61cs';
    $request->invoiceForPatch->items = [
        new Shared\InvoiceItem(),
    ];
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';;

    $response = $sdk->invoices->update($request);

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
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateInvoiceRequest](../../Models/Operations/UpdateInvoiceRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateInvoiceResponse](../../Models/Operations/UpdateInvoiceResponse.md)**

