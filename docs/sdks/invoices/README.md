# Invoices
(*invoices*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CancelInvoiceRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CancelInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';

    $response = $sdk->invoices->cancel($request);

    if ($response->cancelInvoice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\CancelInvoiceRequest](../../models/operations/CancelInvoiceRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\CancelInvoiceResponse](../../models/operations/CancelInvoiceResponse.md)**


## create

Creates a draft invoice.

Invoices are always created with the `status` as `draft`. This means they don't have an `invoice_number` and you can make changes to the invoice and its items.

If successful, your response includes a copy of the new invoice entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\InvoiceInput;
use \paddle\Paddle\Models\Shared\BillingDetails1;
use \paddle\Paddle\Models\Shared\Period1;
use \paddle\Paddle\Models\Shared\Period1Interval;
use \paddle\Paddle\Models\Shared\InvoiceBillingPeriod;
use \paddle\Paddle\Models\Shared\InvoiceBillingPeriodType;
use \paddle\Paddle\Models\Shared\CurrencyCodeInvoice;
use \paddle\Paddle\Models\Shared\CustomDataInvoice;
use \paddle\Paddle\Models\Shared\InvoiceDetailsInput;
use \paddle\Paddle\Models\Shared\InvoiceDetailsLineItemsInput;
use \paddle\Paddle\Models\Shared\ProductInput;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\TaxCategory1;
use \paddle\Paddle\Models\Shared\InvoiceItem;
use \paddle\Paddle\Models\Shared\InvoiceItemPrice;
use \paddle\Paddle\Models\Shared\MoneyInvoice;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new InvoiceInput();
    $request->addressId = 'add_01ghbkbv8s6kjram8fbfz49p45';
    $request->billingDetails = new BillingDetails1();
    $request->billingDetails->additionalInformation = 'bluetooth Extended';
    $request->billingDetails->enableCheckout = false;
    $request->billingDetails->paymentTerms = new Period1();
    $request->billingDetails->paymentTerms->frequency = 134365;
    $request->billingDetails->paymentTerms->interval = Period1Interval::Year;
    $request->billingDetails->purchaseOrderNumber = 'shred';
    $request->billingPeriod = new InvoiceBillingPeriod();
    $request->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d', '2022-02-17');
    $request->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d', '2023-11-08');
    $request->billingPeriod->type = InvoiceBillingPeriodType::Service;
    $request->businessId = 'biz_01ghbkcbs88yxj4fxecevjz9g7';
    $request->currencyCode = CurrencyCodeInvoice::Eur;
    $request->customData = new CustomDataInvoice();
    $request->customerId = 'ctm_01ghbkbbm326p19wh85fnr0xft';
    $request->details = new InvoiceDetailsInput();
    $request->details->lineItems = [
        new InvoiceDetailsLineItemsInput(),
    ];
    $request->items = [
        new InvoiceItem(),
    ];

    $response = $sdk->invoices->create($request);

    if ($response->createInvoice201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [\paddle\Paddle\Models\Shared\InvoiceInput](../../models/shared/InvoiceInput.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?\paddle\Paddle\Models\Operations\CreateInvoiceResponse](../../models/operations/CreateInvoiceResponse.md)**


## get

Returns an invoice using its ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetInvoiceRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new GetInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';

    $response = $sdk->invoices->get($request);

    if ($response->getInvoice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\GetInvoiceRequest](../../models/operations/GetInvoiceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\GetInvoiceResponse](../../models/operations/GetInvoiceResponse.md)**


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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\IssueInvoiceRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new IssueInvoiceRequest();
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';

    $response = $sdk->invoices->issueInvoice($request);

    if ($response->issueInvoice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\IssueInvoiceRequest](../../models/operations/IssueInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\IssueInvoiceResponse](../../models/operations/IssueInvoiceResponse.md)**


## list

Returns a paginated list of invoices. Use the query parameters to page through results.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListInvoicesRequest;
use \paddle\Paddle\Models\Shared\StatusInvoice;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListInvoicesRequest();
    $request->after = 'Northeast Metal Canada';
    $request->id = '<ID>';
    $request->perPage = 917416;
    $request->search = 'upgrade';
    $request->status = StatusInvoice::Unpaid;

    $response = $sdk->invoices->list($request);

    if ($response->listInvoices200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\paddle\Paddle\Models\Operations\ListInvoicesRequest](../../models/operations/ListInvoicesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListInvoicesResponse](../../models/operations/ListInvoicesResponse.md)**


## update

Updates a draft invoice using its ID.

Only invoices with the status of `draft` can be updated. You cannot update invoices that are issued, canceled, or paid.

If successful, your response includes a copy of the updated invoice entity.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateInvoiceRequest;
use \paddle\Paddle\Models\Shared\InvoiceForPatch;
use \paddle\Paddle\Models\Shared\BillingDetails1;
use \paddle\Paddle\Models\Shared\Period1;
use \paddle\Paddle\Models\Shared\Period1Interval;
use \paddle\Paddle\Models\Shared\InvoiceForPatchBillingPeriod;
use \paddle\Paddle\Models\Shared\InvoiceForPatchBillingPeriodType;
use \paddle\Paddle\Models\Shared\CurrencyCodeInvoice;
use \paddle\Paddle\Models\Shared\CustomDataInvoice;
use \paddle\Paddle\Models\Shared\InvoiceItem;
use \paddle\Paddle\Models\Shared\InvoiceItemPrice;
use \paddle\Paddle\Models\Shared\MoneyInvoice;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new UpdateInvoiceRequest();
    $request->invoiceForPatch = new InvoiceForPatch();
    $request->invoiceForPatch->addressId = 'add_01ghbm9egqcxtz4ap4dfg8dtaf';
    $request->invoiceForPatch->billingDetails = new BillingDetails1();
    $request->invoiceForPatch->billingDetails->additionalInformation = 'New Reactive dock';
    $request->invoiceForPatch->billingDetails->enableCheckout = false;
    $request->invoiceForPatch->billingDetails->paymentTerms = new Period1();
    $request->invoiceForPatch->billingDetails->paymentTerms->frequency = 627690;
    $request->invoiceForPatch->billingDetails->paymentTerms->interval = Period1Interval::Month;
    $request->invoiceForPatch->billingDetails->purchaseOrderNumber = 'invoice Arizona';
    $request->invoiceForPatch->billingPeriod = new InvoiceForPatchBillingPeriod();
    $request->invoiceForPatch->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d', '2021-11-01');
    $request->invoiceForPatch->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d', '2023-09-09');
    $request->invoiceForPatch->billingPeriod->type = InvoiceForPatchBillingPeriodType::Contract;
    $request->invoiceForPatch->businessId = 'biz_01ghbmaszjgjd47g5f3d9vw7hg';
    $request->invoiceForPatch->currencyCode = CurrencyCodeInvoice::Gbp;
    $request->invoiceForPatch->customData = new CustomDataInvoice();
    $request->invoiceForPatch->customerId = 'ctm_01ghbm8g2qxsjp07p5ywsy61cs';
    $request->invoiceForPatch->items = [
        new InvoiceItem(),
    ];
    $request->invoiceId = 'inv_01gt24rqm9618yds0pkaynrgx0';

    $response = $sdk->invoices->update($request);

    if ($response->updateInvoice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\paddle\Paddle\Models\Operations\UpdateInvoiceRequest](../../models/operations/UpdateInvoiceRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateInvoiceResponse](../../models/operations/UpdateInvoiceResponse.md)**

