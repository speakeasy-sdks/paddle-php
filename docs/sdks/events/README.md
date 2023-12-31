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

use \paddle\Paddle;
use \paddle\Paddle\Models\Shared;
use \paddle\Paddle\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle\Paddle::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListEventsRequest();
    $request->after = 'string';
    $request->orderBy = 'string';
    $request->perPage = 768578;;

    $response = $sdk->events->list($request);

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
| `$request`                                                                                         | [\paddle\Paddle\Models\Operations\ListEventsRequest](../../Models/Operations/ListEventsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ListEventsResponse](../../Models/Operations/ListEventsResponse.md)**


## listTypes

Returns a list of event types.

The response is not paginated.

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
    $response = $sdk->events->listTypes();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\ListEventTypesResponse](../../Models/Operations/ListEventTypesResponse.md)**

