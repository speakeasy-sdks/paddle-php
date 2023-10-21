# TransactionService
(*transactionService*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CreateTransactionRequest;
use \paddle\Paddle\Models\Shared\IncludeTransaction;
use \paddle\Paddle\Models\Shared\TransactionCreateInput;
use \paddle\Paddle\Models\Shared\BillingDetails2;
use \paddle\Paddle\Models\Shared\Period2;
use \paddle\Paddle\Models\Shared\Period2Interval;
use \paddle\Paddle\Models\Shared\TimePeriod;
use \paddle\Paddle\Models\Shared\CollectionMode2;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\TransactionItemInput;
use \paddle\Paddle\Models\Shared\PriceInput;
use \paddle\Paddle\Models\Shared\PriceQuantity;
use \paddle\Paddle\Models\Shared\TaxMode1;
use \paddle\Paddle\Models\Shared\Money2;
use \paddle\Paddle\Models\Shared\UnitPriceOverride;
use \paddle\Paddle\Models\Shared\CountryCode2;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTransactionRequest();
    $request->include = IncludeTransaction::AdjustmentsTotals;
    $request->transactionCreateInput = new TransactionCreateInput();
    $request->transactionCreateInput->addressId = 'string';
    $request->transactionCreateInput->billedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreateInput->billingDetails = new BillingDetails2();
    $request->transactionCreateInput->billingDetails->additionalInformation = 'string';
    $request->transactionCreateInput->billingDetails->enableCheckout = false;
    $request->transactionCreateInput->billingDetails->paymentTerms = new Period2();
    $request->transactionCreateInput->billingDetails->paymentTerms->frequency = 489382;
    $request->transactionCreateInput->billingDetails->paymentTerms->interval = Period2Interval::Month;
    $request->transactionCreateInput->billingDetails->purchaseOrderNumber = 'string';
    $request->transactionCreateInput->billingPeriod = new TimePeriod();
    $request->transactionCreateInput->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreateInput->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionCreateInput->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->transactionCreateInput->collectionMode = CollectionMode2::Manual;
    $request->transactionCreateInput->currencyCode = CurrencyCode2::Ils;
    $request->transactionCreateInput->customData = new CustomData();
    $request->transactionCreateInput->customerId = 'string';
    $request->transactionCreateInput->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->transactionCreateInput->id = 'txn_01h04vsbhqc62t8hmd4z3b578c';
    $request->transactionCreateInput->items = [
        new TransactionItemInput(),
    ];
    $request->transactionCreateInput->status = 'string';
    $request->transactionCreateInput->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';

    $response = $sdk->transactionService->create($request);

    if ($response->createTransaction201ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetTransactionRequest;
use \paddle\Paddle\Models\Shared\IncludeTransaction;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTransactionRequest();
    $request->include = IncludeTransaction::Customer;
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';

    $response = $sdk->transactionService->get($request);

    if ($response->getTransaction200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListTransactionsRequest;
use \paddle\Paddle\Models\Shared\CollectionMode;
use \paddle\Paddle\Models\Shared\IncludeTransaction;
use \paddle\Paddle\Models\Shared\StatusTransaction;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListTransactionsRequest();
    $request->after = 'string';
    $request->billedAt = '2023-04-18T17:03:26';
    $request->collectionMode = CollectionMode::Manual;
    $request->createdAt = '2023-04-18T17:03:26';
    $request->customerId = 'ctm_01gt25aq4b2zcfw12szwtjrbdt';
    $request->id = '<ID>';
    $request->include = IncludeTransaction::Address;
    $request->invoiceNumber = 'ABC-12345';
    $request->orderBy = 'string';
    $request->perPage = 547272;
    $request->status = StatusTransaction::Ready;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';
    $request->updatedAt = '2023-04-18T17:03:26';

    $response = $sdk->transactionService->list($request);

    if ($response->listTransactions200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\TransactionPreviewInput;
use \paddle\Paddle\Models\Shared\AddressPreview;
use \paddle\Paddle\Models\Shared\CountryCode2;
use \paddle\Paddle\Models\Shared\TransactionPreviewAdjustmentTotals;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\TransactionPreviewTransactionItemPreviewInput;
use \paddle\Paddle\Models\Shared\PriceInput;
use \paddle\Paddle\Models\Shared\Period2;
use \paddle\Paddle\Models\Shared\Period2Interval;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\PriceQuantity;
use \paddle\Paddle\Models\Shared\TaxMode1;
use \paddle\Paddle\Models\Shared\Money2;
use \paddle\Paddle\Models\Shared\UnitPriceOverride;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TransactionPreviewInput();
    $request->address = new AddressPreview();
    $request->address->countryCode = CountryCode2::Hm;
    $request->address->postalCode = '11105-1803';
    $request->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->adjustmentsTotals = new TransactionPreviewAdjustmentTotals();
    $request->adjustmentsTotals->otherBalances = [
        'string',
    ];
    $request->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->currencyCode = CurrencyCode2::Ars;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customerIpAddress = 'string';
    $request->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->ignoreTrials = false;
    $request->items = [
        new TransactionPreviewTransactionItemPreviewInput(),
    ];

    $response = $sdk->transactionService->previewTransaction($request);

    if ($response->previewTransaction200ApplicationJSONObject !== null) {
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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\TransactionPricingPreviewInput;
use \paddle\Paddle\Models\Shared\AddressPreview;
use \paddle\Paddle\Models\Shared\CountryCode2;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\TransactionPricingPreviewItem;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TransactionPricingPreviewInput();
    $request->address = new AddressPreview();
    $request->address->countryCode = CountryCode2::Vu;
    $request->address->postalCode = '11105-1803';
    $request->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->currencyCode = CurrencyCode2::Eur;
    $request->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->customerIpAddress = 'string';
    $request->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->items = [
        new TransactionPricingPreviewItem(),
    ];

    $response = $sdk->transactionService->pricePreview($request);

    if ($response->pricePreview200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\paddle\Paddle\Models\Shared\TransactionPricingPreviewInput](../../models/shared/TransactionPricingPreviewInput.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateTransactionRequest;
use \paddle\Paddle\Models\Shared\TransactionUpdateInput;
use \paddle\Paddle\Models\Shared\BillingDetails2;
use \paddle\Paddle\Models\Shared\Period2;
use \paddle\Paddle\Models\Shared\Period2Interval;
use \paddle\Paddle\Models\Shared\TimePeriod;
use \paddle\Paddle\Models\Shared\CollectionMode2;
use \paddle\Paddle\Models\Shared\CurrencyCode2;
use \paddle\Paddle\Models\Shared\CustomData;
use \paddle\Paddle\Models\Shared\TransactionItemInput;
use \paddle\Paddle\Models\Shared\PriceInput;
use \paddle\Paddle\Models\Shared\PriceQuantity;
use \paddle\Paddle\Models\Shared\TaxMode1;
use \paddle\Paddle\Models\Shared\Money2;
use \paddle\Paddle\Models\Shared\UnitPriceOverride;
use \paddle\Paddle\Models\Shared\CountryCode2;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateTransactionRequest();
    $request->transactionUpdateInput = new TransactionUpdateInput();
    $request->transactionUpdateInput->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->transactionUpdateInput->billedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdateInput->billingDetails = new BillingDetails2();
    $request->transactionUpdateInput->billingDetails->additionalInformation = 'string';
    $request->transactionUpdateInput->billingDetails->enableCheckout = false;
    $request->transactionUpdateInput->billingDetails->paymentTerms = new Period2();
    $request->transactionUpdateInput->billingDetails->paymentTerms->frequency = 857478;
    $request->transactionUpdateInput->billingDetails->paymentTerms->interval = Period2Interval::Day;
    $request->transactionUpdateInput->billingDetails->purchaseOrderNumber = 'string';
    $request->transactionUpdateInput->billingPeriod = new TimePeriod();
    $request->transactionUpdateInput->billingPeriod->endsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdateInput->billingPeriod->startsAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->transactionUpdateInput->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->transactionUpdateInput->collectionMode = CollectionMode2::Manual;
    $request->transactionUpdateInput->currencyCode = CurrencyCode2::Ars;
    $request->transactionUpdateInput->customData = new CustomData();
    $request->transactionUpdateInput->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->transactionUpdateInput->discountId = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->transactionUpdateInput->id = 'txn_01h04vsbhqc62t8hmd4z3b578c';
    $request->transactionUpdateInput->items = [
        new TransactionItemInput(),
    ];
    $request->transactionUpdateInput->status = 'string';
    $request->transactionUpdateInput->subscriptionId = 'sub_01h04vsc0qhwtsbsxh3422wjs4';
    $request->transactionId = 'txn_01gw225vv6tjbb5gnt062a3k5v';

    $response = $sdk->transactionService->update($request);

    if ($response->updateTransaction200ApplicationJSONObject !== null) {
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

