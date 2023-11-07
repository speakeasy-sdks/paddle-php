# TransactionService


### Available Operations

* [create](#create) - Create a transaction
* [get](#get) - Get a transaction
* [list](#list) - List transactions
* [previewTransaction](#previewtransaction) - Preview a transaction
* [pricePreview](#pricepreview) - Preview prices
* [update](#update) - Update a transaction

## create

Creates a new transaction.

Transactions are typically created with the status of `draft` or `ready` initially:

* Draft transactions have `items` against them, but don't have all of the required fields for billing. Paddle creates draft transactions automatically when a checkout is opened.
* Paddle automatically marks transactions as `ready` when all of the required fields are present for billing. This includes `customer_id` and `address_id` for automatically-collected transactions, and `billing_details` for manually-collected transactions.

The `collection_mode` against a transaction determines how Paddle tries to collect for payment:

* Manually-collected transactions are for sales-assisted billing. Paddle sends an invoice to your customer when a transaction is `billed`. Payment is often by wire transfer.
* Automatically-collected transactions are for self-serve checkouts. Paddle tries to collect using a payment method on file, or you may pass the transaction to a checkout to collect for payment.

When a manually-collected transaction is marked as `billed` or an automatically-collected transaction is `completed`, Paddle automatically creates a related subscription for the items on the transaction.

If successful, your response includes a copy of the new transaction entity.

Use the `include` parameter to include related entities in the response.

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

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateTransactionRequest();
    $request->include = Shared\IncludeTransaction::AdjustmentsTotals;
    $request->transactionCreate = new Shared\TransactionCreate();
    $request->transactionCreate->addressId = 'string';
    $request->transactionCreate->billedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreate->billingDetails = new Shared\BillingDetails2();
    $request->transactionCreate->billingDetails->additionalInformation = 'string';
    $request->transactionCreate->billingDetails->enableCheckout = false;
    $request->transactionCreate->billingDetails->paymentTerms = new Shared\Period2();
    $request->transactionCreate->billingDetails->paymentTerms->frequency = 489382;
    $request->transactionCreate->billingDetails->paymentTerms->interval = Shared\Period2Interval::Month;
    $request->transactionCreate->billingDetails->purchaseOrderNumber = 'string';
    $request->transactionCreate->billingPeriod = new Shared\TimePeriod();
    $request->transactionCreate->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreate->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreate->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->transactionCreate->collectionMode = Shared\CollectionMode2::Manual;
    $request->transactionCreate->currencyCode = Shared\CurrencyCode2::Ils;
    $request->transactionCreate->customData = new Shared\CustomData();
    $request->transactionCreate->customerId = 'string';
    $request->transactionCreate->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->transactionCreate->id = 'txn_01h04vsbhqc62t8hmd4z3b578c';
    $request->transactionCreate->items = [
        new Shared\TransactionItemInput(),
    ];
    $request->transactionCreate->status = 'string';
    $request->transactionCreate->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';

    $response = $sdk->transactionService->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\CreateTransactionRequest](../../models/operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\CreateTransactionResponse](../../models/operations/CreateTransactionResponse.md)**


## get

Returns a transaction using its ID.

Use the `include` parameter to include related entities in the response.

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

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetTransactionRequest();
    $request->include = Shared\IncludeTransaction::Customer;
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';

    $response = $sdk->transactionService->get($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Operations\GetTransactionRequest](../../models/operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\GetTransactionResponse](../../models/operations/GetTransactionResponse.md)**


## list

Returns a paginated list of transactions. Use the query parameters to page through results.

Use the `include` parameter to include related entities in the response.

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

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListTransactionsRequest();
    $request->after = 'string';
    $request->billedAt = '2023-04-18T17:03:26';
    $request->collectionMode = Shared\CollectionMode::Manual;
    $request->createdAt = '2023-04-18T17:03:26';
    $request->customerId = 'ctm_01gt25aq4b2zcfw12szwtjrbdt';
    $request->id = '<ID>';
    $request->include = Shared\IncludeTransaction::Address;
    $request->invoiceNumber = 'ABC-12345';
    $request->orderBy = 'string';
    $request->perPage = 547272;
    $request->status = Shared\StatusTransaction::Ready;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';
    $request->updatedAt = '2023-04-18T17:03:26';

    $response = $sdk->transactionService->list($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\paddle\Paddle\Models\Operations\ListTransactionsRequest](../../models/operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\ListTransactionsResponse](../../models/operations/ListTransactionsResponse.md)**


## previewTransaction

Previews a transaction without creating a transaction entity. Typically used for creating more advanced, dynamic pricing pages where users can build their own plans.

Consider using [the preview prices operation](/api-reference/transactions/preview-prices) for simpler pricing pages.

You can provide location information to preview a transaction. Paddle uses this to calculate tax. You can provide one of:

* `customer_ip_address`: Paddle fetches location using the IP address to calculate totals.
* `address`: Paddle uses the country and ZIP code (where supplied) to calculate totals.
* `customer_id`, `address_id`, `business_id`: Paddle uses existing customer data to calculate totals. Typically used for logged-in customers.

When supplying items, you can exclude items from the total calculation using the `include_in_totals` boolean.

By default, recurring items with trials are considered to have a zero charge when previewing. Set `ignore_trials` to `true` to ignore trial periods against prices for transaction preview calculations.

If successful, your response includes the data you sent with a `details` object that includes totals for the supplied prices.

Transaction previews do not create transactions, so no `id` is returned.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\TransactionPreviewInput();
    $request->address = new Shared\AddressPreview();
    $request->address->countryCode = Shared\CountryCode2::Hm;
    $request->address->postalCode = '11105-1803';
    $request->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->adjustmentsTotals = new Shared\TransactionPreviewAdjustmentTotals();
    $request->adjustmentsTotals->otherBalances = [
        'string',
    ];
    $request->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->currencyCode = Shared\CurrencyCode2::Ars;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customerIpAddress = 'string';
    $request->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->ignoreTrials = false;
    $request->items = [
        new Shared\TransactionPreviewTransactionItemPreview(),
    ];

    $response = $sdk->transactionService->previewTransaction($request);

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
| `$request`                                                                                             | [\paddle\Paddle\Models\Shared\TransactionPreviewInput](../../models/shared/TransactionPreviewInput.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\PreviewTransactionResponse](../../models/operations/PreviewTransactionResponse.md)**


## pricePreview

Previews calculations for one or more prices. Typically used for building pricing pages.

You can provide location information when previewing prices. Paddle uses this to calculate tax. You can provide one of:

* `customer_ip_address`: Paddle fetches location using the IP address to calculate totals.
* `address`: Paddle uses the country and ZIP code (where supplied) to calculate totals.
* `customer_id`, `address_id`, `business_id`: Paddle uses existing customer data to calculate totals. Typically used for logged-in customers.

If successful, your response includes the data you sent with a `details` object that includes totals for the supplied prices. 

Each line item includes `formatted_unit_totals` and `formatted_totals` objects that return totals formatted for the country or region you're working with, including the currency symbol.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\TransactionPricingPreview();
    $request->address = new Shared\AddressPreview();
    $request->address->countryCode = Shared\CountryCode2::Vu;
    $request->address->postalCode = '11105-1803';
    $request->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->currencyCode = Shared\CurrencyCode2::Eur;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customerIpAddress = 'string';
    $request->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->items = [
        new Shared\TransactionPricingPreviewItem(),
    ];

    $response = $sdk->transactionService->pricePreview($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Shared\TransactionPricingPreview](../../models/shared/TransactionPricingPreview.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\PricePreviewResponse](../../models/operations/PricePreviewResponse.md)**


## update

Updates a transaction using its ID.

You can update transactions that are `draft` or `ready`. `billed` and `completed` transactions are considered records for tax and legal purposes, so they can't be changed. You can either:

* Create [an adjustment](/api-reference/adjustments/overview) to record a refund or credit for a transaction.
* Cancel a `billed` transaction by sending a PATCH request to set `status` to `canceled`.

The transaction `status` may only be set to `billed` or `canceled`. Other statuses are set automatically by Paddle. Set a manually-collected transaction to `billed` to mark it as finalized. This is essentially issuing an invoice. At this point, it becomes a legal record so you can't make changes to it. Paddle automatically assigns an invoice number, creates [a related subscription](/api-reference/subscriptions/overview), and sends it to your customer.

When making changes to items on a transaction, send the complete list of items that you'd like to be on a transaction — including existing items. For each item, send an object containing `price_id` and `quantity`. Paddle responds with the full `price` object for each item. See: [Work with lists](/api-reference/about/lists)

If successful, your response includes a copy of the updated transaction entity.

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

$sdk = Paddle\Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateTransactionRequest();
    $request->transactionUpdate = new Shared\TransactionUpdate();
    $request->transactionUpdate->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->transactionUpdate->billedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdate->billingDetails = new Shared\BillingDetails2();
    $request->transactionUpdate->billingDetails->additionalInformation = 'string';
    $request->transactionUpdate->billingDetails->enableCheckout = false;
    $request->transactionUpdate->billingDetails->paymentTerms = new Shared\Period2();
    $request->transactionUpdate->billingDetails->paymentTerms->frequency = 857478;
    $request->transactionUpdate->billingDetails->paymentTerms->interval = Shared\Period2Interval::Day;
    $request->transactionUpdate->billingDetails->purchaseOrderNumber = 'string';
    $request->transactionUpdate->billingPeriod = new Shared\TimePeriod();
    $request->transactionUpdate->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdate->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdate->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->transactionUpdate->collectionMode = Shared\CollectionMode2::Manual;
    $request->transactionUpdate->currencyCode = Shared\CurrencyCode2::Ars;
    $request->transactionUpdate->customData = new Shared\CustomData();
    $request->transactionUpdate->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->transactionUpdate->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->transactionUpdate->id = 'txn_01h04vsbhqc62t8hmd4z3b578c';
    $request->transactionUpdate->items = [
        new Shared\TransactionItemInput(),
    ];
    $request->transactionUpdate->status = 'string';
    $request->transactionUpdate->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';

    $response = $sdk->transactionService->update($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\UpdateTransactionRequest](../../models/operations/UpdateTransactionRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateTransactionResponse](../../models/operations/UpdateTransactionResponse.md)**

