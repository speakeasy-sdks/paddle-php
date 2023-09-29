# Subscriptions
(*subscriptions*)

## Overview

Work with subscriptions.

Subscriptions - Paddle Developer Center
<https://paddle.stoplight.io/docs/next-gen-billing/entities/subscriptions>
### Available Operations

* [cancel](#cancel) - Cancel a subscription
* [create](#create) - Create a one-time charge for a subscription
* [list](#list) - List subscriptions
* [pause](#pause) - Pause a subscription

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CancelSubscriptionRequest;
use \paddle\Paddle\Models\Operations\CancelSubscriptionRequestBody;
use \paddle\Paddle\Models\Shared\EffectiveFromNullable;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CancelSubscriptionRequest();
    $request->requestBody = new CancelSubscriptionRequestBody();
    $request->requestBody->effectiveFrom = EffectiveFromNullable::NextBillingPeriod;
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';

    $response = $sdk->subscriptions->cancel($request);

    if ($response->cancelSubscription200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\CancelSubscriptionRequest](../../models/operations/CancelSubscriptionRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\CancelSubscriptionResponse](../../models/operations/CancelSubscriptionResponse.md)**


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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest;
use \paddle\Paddle\Models\Shared\SubscriptionCharge;
use \paddle\Paddle\Models\Shared\EffectiveFrom;
use \paddle\Paddle\Models\Shared\SubscriptionChargeItems;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new CreateSubscriptionChargeRequest();
    $request->subscriptionCharge = new SubscriptionCharge();
    $request->subscriptionCharge->effectiveFrom = EffectiveFrom::NextBillingPeriod;
    $request->subscriptionCharge->items = [
        new SubscriptionChargeItems(),
    ];
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';

    $response = $sdk->subscriptions->create($request);

    if ($response->createSubscriptionCharge201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest](../../models/operations/CreateSubscriptionChargeRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\paddle\Paddle\Models\Operations\CreateSubscriptionChargeResponse](../../models/operations/CreateSubscriptionChargeResponse.md)**


## list

Returns a paginated list of subscriptions. Use the query parameters to page through results.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListSubscriptionsRequest;
use \paddle\Paddle\Models\Shared\StatusSubscription;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListSubscriptionsRequest();
    $request->after = 'Northeast Metal Canada';
    $request->customerId = 'ctm_01gt25aq4b2zcfw12szwtjrbdt';
    $request->orderBy = 'Data Response West';
    $request->perPage = 718303;
    $request->priceId = 'pri_01gvne87kv8vbqa9jkfbmgtsed';
    $request->status = StatusSubscription::Trialing;

    $response = $sdk->subscriptions->list($request);

    if ($response->listSubscriptions200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\ListSubscriptionsRequest](../../models/operations/ListSubscriptionsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\ListSubscriptionsResponse](../../models/operations/ListSubscriptionsResponse.md)**


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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\PauseSubscriptionRequest;
use \paddle\Paddle\Models\Operations\PauseSubscriptionRequestBody;
use \paddle\Paddle\Models\Shared\EffectiveFromNullable;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new PauseSubscriptionRequest();
    $request->requestBody = new PauseSubscriptionRequestBody();
    $request->requestBody->effectiveFrom = EffectiveFromNullable::NextBillingPeriod;
    $request->requestBody->resumeAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->subscriptionId = 'sub_01gvne45dvdhg5gdxrz6hh511r';

    $response = $sdk->subscriptions->pause($request);

    if ($response->pauseSubscription200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\PauseSubscriptionRequest](../../models/operations/PauseSubscriptionRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\PauseSubscriptionResponse](../../models/operations/PauseSubscriptionResponse.md)**

