# Subscriptions


## Overview

Work with subscriptions.

Subscriptions - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/subscriptions>
### Available Operations

* [cancel](#cancel) - Cancel a subscription
* [create](#create) - Create a one-time charge for a subscription
* [createPreview](#createpreview) - Preview one-off charge for a subscription
* [get](#get) - Get a subscription
* [getUpdatedPaymentMethodTransaction](#getupdatedpaymentmethodtransaction) - Get a transaction to update payment method
* [list](#list) - List subscriptions
* [pause](#pause) - Pause a subscription
* [previewSubscription](#previewsubscription) - Preview an update to a subscription
* [resumeSubscription](#resumesubscription) - Resume a paused subscription
* [update](#update) - Update a subscription

## cancel

Cancels a subscription using its ID.

For active subscriptions, cancellation takes place at the end of a subscription billing period. If successful, your response includes a copy of the updated subscription entity with a `schedule_change` to say that the subscription should cancel at the end of the billing period. Its `status` remains the same until after the effective date of the scheduled change, at which point it changes to `canceled`.

For paused subscriptions, cancellation takes place immediately. If successful, your response includes a copy of the updated subscription entity with the `status` of `canceled`.

You cannot reactivate a canceled subscription.

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
        $request = new Operations\CancelSubscriptionRequest();
    $request->requestBody = new Operations\CancelSubscriptionRequestBody();
    $request->requestBody->effectiveFrom = Shared\EffectiveFromNullable::NextBillingPeriod;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->cancel($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\CancelSubscriptionRequest](../../Models/Operations/CancelSubscriptionRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\CancelSubscriptionResponse](../../Models/Operations/CancelSubscriptionResponse.md)**


## create

Creates a new one-time charge for a subscription. Use to bill non-recurring items to a subscription. Non-recurring items are price entities where the `billing_cycle` is `null`.

If successful, Paddle responds with the updated subscription entity. However, one-time charges aren't held against the subscription entity, so the charges billed aren't returned in the response.

Once created, to get details of a one-time charge:

* When created with `effective_from` as `next_billing_period`, get the subscription the charge was billed to and use the `include` query parameter with the `next_transaction` value.
* When created with `effective_from` as `immediately`, list transactions and use the `subscription_id` query parameter with the subscription ID of the subscription the charge was billed to.

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
        $request = new Operations\CreateSubscriptionChargeRequest();
    $request->subscriptionCharge = new Shared\SubscriptionCharge();
    $request->subscriptionCharge->effectiveFrom = Shared\EffectiveFrom::NextBillingPeriod;
    $request->subscriptionCharge->items = [
        new Shared\Items(),
    ];
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->create($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest](../../Models/Operations/CreateSubscriptionChargeRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreateSubscriptionChargeResponse](../../Models/Operations/CreateSubscriptionChargeResponse.md)**


## createPreview

Previews a new one-off charge for a subscription. Use to preview the outcome of adding non-recurring items to a subscription.

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
        $request = new Operations\CreateSubscriptionChargePreviewRequest();
    $request->subscriptionCharge = new Shared\SubscriptionCharge();
    $request->subscriptionCharge->effectiveFrom = Shared\EffectiveFrom::NextBillingPeriod;
    $request->subscriptionCharge->items = [
        new Shared\Items(),
    ];
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->createPreview($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                    | Type                                                                                                                                         | Required                                                                                                                                     | Description                                                                                                                                  |
| -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                   | [\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewRequest](../../Models/Operations/CreateSubscriptionChargePreviewRequest.md) | :heavy_check_mark:                                                                                                                           | The request object to use for the request.                                                                                                   |


### Response

**[?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewResponse](../../Models/Operations/CreateSubscriptionChargePreviewResponse.md)**


## get

Returns a subscription using its ID.

Use the `include` parameter to include transaction information in the response.

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
        $request = new Operations\GetSubscriptionRequest();
    $request->include = Shared\IncludeSubscription::RecurringTransactionDetails;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->get($request);

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
| `$request`                                                                                                   | [\paddle\Paddle\Models\Operations\GetSubscriptionRequest](../../Models/Operations/GetSubscriptionRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\paddle\Paddle\Models\Operations\GetSubscriptionResponse](../../Models/Operations/GetSubscriptionResponse.md)**


## getUpdatedPaymentMethodTransaction

Returns a transaction that you can pass to a checkout to let customers update their payment details. Only for subscriptions where `collection_mode` is `automatic`.

The transaction returned depends on the status of the related subscription:

* Where a subscription is `past_due`, it returns the most recent `past_due` transaction.
* Where a subscription is `active`, it creates a new zero amount transaction for the items on a subscription.

You can use the returned `checkout.url`, or pass the returned transaction ID to Paddle.js to open a checkout to present customers with a way of updating their payment details.

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
        $request = new Operations\GetSubscriptionUpdatePaymentMethodTransactionRequest();
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->getUpdatedPaymentMethodTransaction($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                | Type                                                                                                                                                                     | Required                                                                                                                                                                 | Description                                                                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                                               | [\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionRequest](../../Models/Operations/GetSubscriptionUpdatePaymentMethodTransactionRequest.md) | :heavy_check_mark:                                                                                                                                                       | The request object to use for the request.                                                                                                                               |


### Response

**[?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionResponse](../../Models/Operations/GetSubscriptionUpdatePaymentMethodTransactionResponse.md)**


## list

Returns a paginated list of subscriptions. Use the query parameters to page through results.

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
        $request = new Operations\ListSubscriptionsRequest();
    $request->after = 'string';
    $request->customerId = 'ctm_01gt25aq4b2zcfw12szwtjrbdt';
    $request->orderBy = 'string';
    $request->perPage = 768578;
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';
    $request->status = Shared\StatusSubscription::Active;;

    $response = $sdk->subscriptions->list($request);

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
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\ListSubscriptionsRequest](../../Models/Operations/ListSubscriptionsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\ListSubscriptionsResponse](../../Models/Operations/ListSubscriptionsResponse.md)**


## pause

Pauses a subscription using its ID.

To create an open-ended pause, send an empty request body. The subscription remains paused until you send a resume request.

To set a resume date, include the `resume_at` field in your request. The subscription remains paused until the resume date, or until you send a resume request.

Pauses take place at the end of a subscription billing period. If successful, your response includes a copy of the updated subscription entity with a `schedule_change` to say that the subscription should pause at the end of the billing period. Its `status` remains the same until after the effective date of the scheduled change, at which point it changes to `paused`.

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
        $request = new Operations\PauseSubscriptionRequest();
    $request->requestBody = new Operations\PauseSubscriptionRequestBody();
    $request->requestBody->effectiveFrom = Shared\EffectiveFromNullable::NextBillingPeriod;
    $request->requestBody->resumeAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->pause($request);

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
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\PauseSubscriptionRequest](../../Models/Operations/PauseSubscriptionRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\PauseSubscriptionResponse](../../Models/Operations/PauseSubscriptionResponse.md)**


## previewSubscription

Previews an update for a subscription without applying those changes. Typically used for previewing proration before making changes to a subscription.

If successful, your response includes `immediate_transaction`, `next_transaction`, and `recurring_transaction_details` so you can see expected transactions for the changes.

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
        $request = new Operations\PreviewSubscriptionRequest();
    $request->subscriptionUpdate = new Shared\SubscriptionUpdate();
    $request->subscriptionUpdate->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->subscriptionUpdate->billingDetails = new Shared\BillingDetails2();
    $request->subscriptionUpdate->billingDetails->additionalInformation = 'string';
    $request->subscriptionUpdate->billingDetails->enableCheckout = false;
    $request->subscriptionUpdate->billingDetails->paymentTerms = new Shared\Period2();
    $request->subscriptionUpdate->billingDetails->paymentTerms->frequency = 243733;
    $request->subscriptionUpdate->billingDetails->paymentTerms->interval = Shared\Period2Interval::Month;
    $request->subscriptionUpdate->billingDetails->purchaseOrderNumber = 'string';
    $request->subscriptionUpdate->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->subscriptionUpdate->collectionMode = Shared\CollectionMode2::Automatic;
    $request->subscriptionUpdate->currencyCode = Shared\CurrencyCode2::Sek;
    $request->subscriptionUpdate->customData = new Shared\CustomData();
    $request->subscriptionUpdate->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->subscriptionUpdate->discount = new Shared\SubscriptionUpdateDiscount();
    $request->subscriptionUpdate->discount->effectiveFrom = Shared\EffectiveFrom::NextBillingPeriod;
    $request->subscriptionUpdate->discount->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->subscriptionUpdate->items = [
        new Shared\SubscriptionUpdateItem(),
    ];
    $request->subscriptionUpdate->nextBilledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->subscriptionUpdate->prorationBillingMode = Shared\SubscriptionUpdateProrationBillingMode::FullNextBillingPeriod;
    $request->subscriptionUpdate->scheduledChange = 'string';
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->previewSubscription($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\paddle\Paddle\Models\Operations\PreviewSubscriptionRequest](../../Models/Operations/PreviewSubscriptionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\PreviewSubscriptionResponse](../../Models/Operations/PreviewSubscriptionResponse.md)**


## resumeSubscription

Resumes a paused subscription using its ID. Only `paused` subscriptions can be resumed. You cannot resume a `canceled` subscription.

On resume, Paddle bills for a subscription immediately. Subscription billing dates are recalculated based on the resume date.

If successful, Paddle returns a copy of the updated subscription entity. The subscription status is `active`, and billing dates are updated to reflect the resume date.

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
        $request = new Operations\ResumeSubscriptionRequest();
    $request->requestBody = 'string';
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->resumeSubscription($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\ResumeSubscriptionRequest](../../Models/Operations/ResumeSubscriptionRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ResumeSubscriptionResponse](../../Models/Operations/ResumeSubscriptionResponse.md)**


## update

Updates a subscription using its ID.

When making changes to items on a subscription, you must include the `proration_billing_mode` field to tell Paddle how to bill for those changes. Paddle returns an error if this field is missing when sending `items`.

Send the complete list of items that you'd like to be on a subscription — including existing items. If you omit items, they're removed from the subscription.

For each item, send `price_id` and `quantity`. Paddle responds with the full price object for each price. If you're updating an existing item, you can omit the `quantity` if you don't want to update it.

If successful, your response includes a copy of the updated subscription entity.

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
        $request = new Operations\UpdateSubscriptionRequest();
    $request->subscriptionUpdate = new Shared\SubscriptionUpdate();
    $request->subscriptionUpdate->addressId = 'add_01gm302t81w94gyjpjpqypkzkf';
    $request->subscriptionUpdate->billingDetails = new Shared\BillingDetails2();
    $request->subscriptionUpdate->billingDetails->additionalInformation = 'string';
    $request->subscriptionUpdate->billingDetails->enableCheckout = false;
    $request->subscriptionUpdate->billingDetails->paymentTerms = new Shared\Period2();
    $request->subscriptionUpdate->billingDetails->paymentTerms->frequency = 857478;
    $request->subscriptionUpdate->billingDetails->paymentTerms->interval = Shared\Period2Interval::Day;
    $request->subscriptionUpdate->billingDetails->purchaseOrderNumber = 'string';
    $request->subscriptionUpdate->businessId = 'biz_01grrebrzaee2qj2fqqhmcyzaj';
    $request->subscriptionUpdate->collectionMode = Shared\CollectionMode2::Manual;
    $request->subscriptionUpdate->currencyCode = Shared\CurrencyCode2::Ars;
    $request->subscriptionUpdate->customData = new Shared\CustomData();
    $request->subscriptionUpdate->customerId = 'ctm_01grnn4zta5a1mf02jjze7y2ys';
    $request->subscriptionUpdate->discount = new Shared\SubscriptionUpdateDiscount();
    $request->subscriptionUpdate->discount->effectiveFrom = Shared\EffectiveFrom::NextBillingPeriod;
    $request->subscriptionUpdate->discount->id = 'dsc_01gv5kpg05xp104ek2fmgjwttf';
    $request->subscriptionUpdate->items = [
        new Shared\SubscriptionUpdateItem(),
    ];
    $request->subscriptionUpdate->nextBilledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-12T07:20:50.52Z');
    $request->subscriptionUpdate->prorationBillingMode = Shared\SubscriptionUpdateProrationBillingMode::FullNextBillingPeriod;
    $request->subscriptionUpdate->scheduledChange = 'string';
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';;

    $response = $sdk->subscriptions->update($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\UpdateSubscriptionRequest](../../Models/Operations/UpdateSubscriptionRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateSubscriptionResponse](../../Models/Operations/UpdateSubscriptionResponse.md)**

