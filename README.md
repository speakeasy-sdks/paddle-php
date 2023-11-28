<div align="center">
    <img src="https://github.com/speakeasy-sdks/paddle-ts/assets/6267663/929e90c9-ded4-4400-8239-2ffc0f8d9299" width="300">
    <h1>PHP SDK</h1>
   <p>One platform for tax, payments, and subscriptions</p>
   <a href="https://developer.paddle.com/"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=000&style=for-the-badge" /></a>
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/paddle-php.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/paddle-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" /></a>
</div>

<!-- Start SDK Installation [installation] -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/paddle-php.git"
        }
    ],
    "require": {
        "paddle/paddle": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [Adjustments](docs/sdks/adjustments/README.md)

* [create](docs/sdks/adjustments/README.md#create) - Create an adjustment
* [list](docs/sdks/adjustments/README.md#list) - List adjustments

### [Customers](docs/sdks/customers/README.md)

* [create](docs/sdks/customers/README.md#create) - Create a customer
* [get](docs/sdks/customers/README.md#get) - Get a customer
* [list](docs/sdks/customers/README.md#list) - List customers
* [listCreditBalances](docs/sdks/customers/README.md#listcreditbalances) - List credit balances for a customer
* [update](docs/sdks/customers/README.md#update) - Update a customer

### [Addresses](docs/sdks/addresses/README.md)

* [create](docs/sdks/addresses/README.md#create) - Create an address for a customer
* [get](docs/sdks/addresses/README.md#get) - Get an address for a customer
* [list](docs/sdks/addresses/README.md#list) - List addresses for a customer
* [update](docs/sdks/addresses/README.md#update) - Update an address for a customer

### [Businesses](docs/sdks/businesses/README.md)

* [create](docs/sdks/businesses/README.md#create) - Create a business for a customer
* [get](docs/sdks/businesses/README.md#get) - Get a business for a customer
* [list](docs/sdks/businesses/README.md#list) - List businesses for a customer
* [update](docs/sdks/businesses/README.md#update) - Update a business for a customer

### [Discounts](docs/sdks/discounts/README.md)

* [create](docs/sdks/discounts/README.md#create) - Create a discount
* [get](docs/sdks/discounts/README.md#get) - Get a discount
* [list](docs/sdks/discounts/README.md#list) - List discounts
* [update](docs/sdks/discounts/README.md#update) - Update a discount

### [Events](docs/sdks/events/README.md)

* [list](docs/sdks/events/README.md#list) - List events
* [listTypes](docs/sdks/events/README.md#listtypes) - List events types

### [Invoices](docs/sdks/invoices/README.md)

* [cancel](docs/sdks/invoices/README.md#cancel) - Cancel an invoice
* [create](docs/sdks/invoices/README.md#create) - Create a draft invoice
* [get](docs/sdks/invoices/README.md#get) - Get an invoice
* [getPdf](docs/sdks/invoices/README.md#getpdf) - Get a PDF for an invoice
* [issueInvoice](docs/sdks/invoices/README.md#issueinvoice) - Issue an invoice
* [list](docs/sdks/invoices/README.md#list) - List invoices
* [update](docs/sdks/invoices/README.md#update) - Update a draft invoice

### [IPAddresses](docs/sdks/ipaddresses/README.md)

* [get](docs/sdks/ipaddresses/README.md#get) - Get Paddle IP addresses

### [Notifications](docs/sdks/notifications/README.md)

* [createSetting](docs/sdks/notifications/README.md#createsetting) - Create a notification setting
* [deleteSetting](docs/sdks/notifications/README.md#deletesetting) - Delete a notification setting
* [get](docs/sdks/notifications/README.md#get) - Get a notification
* [getSetting](docs/sdks/notifications/README.md#getsetting) - Get a notification setting
* [list](docs/sdks/notifications/README.md#list) - List notifications
* [listLogs](docs/sdks/notifications/README.md#listlogs) - List logs for a notification
* [listSettings](docs/sdks/notifications/README.md#listsettings) - List notification settings
* [replay](docs/sdks/notifications/README.md#replay) - Replay a notification
* [replayBySetting](docs/sdks/notifications/README.md#replaybysetting) - Replay notifications by notification setting
* [updateSettings](docs/sdks/notifications/README.md#updatesettings) - Update a notification setting

### [Prices](docs/sdks/prices/README.md)

* [create](docs/sdks/prices/README.md#create) - Create a price
* [get](docs/sdks/prices/README.md#get) - Get a price
* [list](docs/sdks/prices/README.md#list) - List prices
* [update](docs/sdks/prices/README.md#update) - Update a price

### [Transactions](docs/sdks/transactions/README.md)

* [create](docs/sdks/transactions/README.md#create) - Create a transaction
* [get](docs/sdks/transactions/README.md#get) - Get a transaction
* [getInvoice](docs/sdks/transactions/README.md#getinvoice) - Get a PDF invoice for a transaction
* [list](docs/sdks/transactions/README.md#list) - List transactions
* [previewTransaction](docs/sdks/transactions/README.md#previewtransaction) - Preview a transaction
* [pricePreview](docs/sdks/transactions/README.md#pricepreview) - Preview prices
* [update](docs/sdks/transactions/README.md#update) - Update a transaction

### [TransactionService](docs/sdks/transactionservice/README.md)

* [create](docs/sdks/transactionservice/README.md#create) - Create a transaction
* [get](docs/sdks/transactionservice/README.md#get) - Get a transaction
* [list](docs/sdks/transactionservice/README.md#list) - List transactions
* [previewTransaction](docs/sdks/transactionservice/README.md#previewtransaction) - Preview a transaction
* [pricePreview](docs/sdks/transactionservice/README.md#pricepreview) - Preview prices
* [update](docs/sdks/transactionservice/README.md#update) - Update a transaction

### [Products](docs/sdks/products/README.md)

* [create](docs/sdks/products/README.md#create) - Create a product
* [get](docs/sdks/products/README.md#get) - Get a product
* [list](docs/sdks/products/README.md#list) - List products
* [update](docs/sdks/products/README.md#update) - Update a product

### [Subscriptions](docs/sdks/subscriptions/README.md)

* [cancel](docs/sdks/subscriptions/README.md#cancel) - Cancel a subscription
* [create](docs/sdks/subscriptions/README.md#create) - Create a one-time charge for a subscription
* [createPreview](docs/sdks/subscriptions/README.md#createpreview) - Preview one-off charge for a subscription
* [get](docs/sdks/subscriptions/README.md#get) - Get a subscription
* [getUpdatedPaymentMethodTransaction](docs/sdks/subscriptions/README.md#getupdatedpaymentmethodtransaction) - Get a transaction to update payment method
* [list](docs/sdks/subscriptions/README.md#list) - List subscriptions
* [pause](docs/sdks/subscriptions/README.md#pause) - Pause a subscription
* [previewSubscription](docs/sdks/subscriptions/README.md#previewsubscription) - Preview an update to a subscription
* [resumeSubscription](docs/sdks/subscriptions/README.md#resumesubscription) - Resume a paused subscription
* [update](docs/sdks/subscriptions/README.md#update) - Update a subscription
<!-- End Available Resources and Operations [operations] -->



<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
