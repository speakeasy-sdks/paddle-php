# Events

## Overview

Work with events and the event stream.

### Available Operations

* [list](#list) - List events
* [listTypes](#listtypes) - List events types

## list

Returns a paginated list of events that have occurred. Use the query parameters to page through results.

This is sometimes referred to as "the event stream."

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListEventsRequest;

$sdk = Paddle::builder()
    ->build();

try {
    $request = new ListEventsRequest();
    $request->after = 'occaecati';
    $request->orderBy = 'enim';
    $request->perPage = 881736;

    $response = $sdk->events->list($request);

    if ($response->listEvents200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\ListEventsRequest](../../models/operations/ListEventsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ListEventsResponse](../../models/operations/ListEventsResponse.md)**


## listTypes

Returns a list of event types.

The response is not paginated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;

$sdk = Paddle::builder()
    ->build();

try {
    $response = $sdk->events->listTypes();

    if ($response->listEventTypes200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\ListEventTypesResponse](../../models/operations/ListEventTypesResponse.md)**

