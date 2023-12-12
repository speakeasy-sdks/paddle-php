# Notifications


## Overview

Work with notifications and notification settings.

### Available Operations

* [createSetting](#createsetting) - Create a notification setting
* [deleteSetting](#deletesetting) - Delete a notification setting
* [get](#get) - Get a notification
* [getSetting](#getsetting) - Get a notification setting
* [list](#list) - List notifications
* [listLogs](#listlogs) - List logs for a notification
* [listSettings](#listsettings) - List notification settings
* [replay](#replay) - Replay a notification
* [replayBySetting](#replaybysetting) - Replay notifications by notification setting
* [updateSettings](#updatesettings) - Update a notification setting

## createSetting

Creates a new notification setting (notification destination).

Pass an array of event type names to `subscribed_events` to say which events you'd like to subscribe to. Paddle responds with the full event type object for each event type.

If successful, your response includes a copy of the new notification setting entity. Use the returned `endpoint_secret_key` for webhook signature verification.

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
        $request = new Shared\NotificationSettingCreate();
    $request->active = false;
    $request->apiVersion = 659672;
    $request->description = 'Persistent next generation circuit';
    $request->destination = 'string';
    $request->includeSensitiveFields = false;
    $request->subscribedEvents = [
        'string',
    ];
    $request->type = Shared\NotificationSettingCreateType::Url;;

    $response = $sdk->notifications->createSetting($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\paddle\Paddle\Models\Shared\NotificationSettingCreate](../../Models/Shared/NotificationSettingCreate.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\CreateNotificationSettingResponse](../../Models/Operations/CreateNotificationSettingResponse.md)**


## deleteSetting

Deletes a notification setting (notification destination) using its ID.

When you delete a notification setting, it's permanently removed from your account. Paddle stops sending events to your destination, and you'll lose access to all the logs for this notification setting.

There's no way to recover a deleted notification setting. Deactivate a notification setting using the update notification setting operation if you'll need access to the logs or want to reactivate later on.

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
        $request = new Operations\DeleteNotificationSettingRequest();
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';;

    $response = $sdk->notifications->deleteSetting($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\paddle\Paddle\Models\Operations\DeleteNotificationSettingRequest](../../Models/Operations/DeleteNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\DeleteNotificationSettingResponse](../../Models/Operations/DeleteNotificationSettingResponse.md)**


## get

Returns a notification using its ID.

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
        $request = new Operations\GetNotificationRequest();
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';;

    $response = $sdk->notifications->get($request);

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
| `$request`                                                                                                   | [\paddle\Paddle\Models\Operations\GetNotificationRequest](../../Models/Operations/GetNotificationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\paddle\Paddle\Models\Operations\GetNotificationResponse](../../Models/Operations/GetNotificationResponse.md)**


## getSetting

Returns a notification setting (notification destination) using its ID.

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
        $request = new Operations\GetNotificationSettingRequest();
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';;

    $response = $sdk->notifications->getSetting($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\paddle\Paddle\Models\Operations\GetNotificationSettingRequest](../../Models/Operations/GetNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\GetNotificationSettingResponse](../../Models/Operations/GetNotificationSettingResponse.md)**


## list

Returns a paginated list of notifications. Use the query parameters to page through results.

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
        $request = new Operations\ListNotificationsRequest();
    $request->after = 'string';
    $request->filter = 'sub_01gw4rrmfrqcwkhjm04hr3ah4n';
    $request->from = '2023-04-18T17:03:26';
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';
    $request->orderBy = 'string';
    $request->perPage = 99895;
    $request->search = 'upgrade';
    $request->status = Shared\StatusNotification::NeedsRetry;
    $request->to = '2023-04-18T17:03:26';;

    $response = $sdk->notifications->list($request);

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
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\ListNotificationsRequest](../../Models/Operations/ListNotificationsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationsResponse](../../Models/Operations/ListNotificationsResponse.md)**


## listLogs

Returns a paginated list of notification logs for a notification. A log includes information about delivery attempts, including failures.

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
        $request = new Operations\ListNotificationLogsRequest();
    $request->after = 'string';
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';
    $request->perPage = 822522;;

    $response = $sdk->notifications->listLogs($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\paddle\Paddle\Models\Operations\ListNotificationLogsRequest](../../Models/Operations/ListNotificationLogsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationLogsResponse](../../Models/Operations/ListNotificationLogsResponse.md)**


## listSettings

Returns a list of notification settings (notification destinations).

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
    $response = $sdk->notifications->listSettings();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationSettingsResponse](../../Models/Operations/ListNotificationSettingsResponse.md)**


## replay

Attempts to resend a `delivered` or `failed` notification using its ID.

Paddle creates a new notification entity for the replay, related to the same `event_id`.

The new notification replay is sent to the `destination` against the `notification_setting_id`.

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
        $request = new Operations\ReplayNotificationRequest();
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';;

    $response = $sdk->notifications->replay($request);

    if ($response->twoHundredAndTwoApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\ReplayNotificationRequest](../../Models/Operations/ReplayNotificationRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ReplayNotificationResponse](../../Models/Operations/ReplayNotificationResponse.md)**


## replayBySetting

Replay notifications by notification setting

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
        $request = new Operations\PostNotificationSettingsNotificationSettingIdReplayRequest();
    $request->requestBody = new Operations\PostNotificationSettingsNotificationSettingIdReplayRequestBody();
    $request->requestBody->filter = 'txn_01h3cgmh9qn7yezn4rgze4nrg2';
    $request->requestBody->from = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->requestBody->to = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';;

    $response = $sdk->notifications->replayBySetting($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                            | Type                                                                                                                                                                                 | Required                                                                                                                                                                             | Description                                                                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                                                           | [\paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayRequest](../../Models/Operations/PostNotificationSettingsNotificationSettingIdReplayRequest.md) | :heavy_check_mark:                                                                                                                                                                   | The request object to use for the request.                                                                                                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayResponse](../../Models/Operations/PostNotificationSettingsNotificationSettingIdReplayResponse.md)**


## updateSettings

Updates a notification setting (notification destination) using its ID.

When updating subscribed events, send the complete list of event types that you'd like to subscribe to — including existing event types. If you omit event types, they're removed from the notification setting.

You only need to pass an event type name. Paddle responds with the full event type object for each event type.

If successful, your response includes a copy of the updated notification setting entity.

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
        $request = new Operations\UpdateNotificationSettingRequest();
    $request->notificationSettingUpdate = new Shared\NotificationSettingUpdate();
    $request->notificationSettingUpdate->active = false;
    $request->notificationSettingUpdate->apiVersion = 303975;
    $request->notificationSettingUpdate->description = 'Implemented clear-thinking firmware';
    $request->notificationSettingUpdate->destination = 'string';
    $request->notificationSettingUpdate->includeSensitiveFields = false;
    $request->notificationSettingUpdate->subscribedEvents = [
        'string',
    ];
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';;

    $response = $sdk->notifications->updateSettings($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\paddle\Paddle\Models\Operations\UpdateNotificationSettingRequest](../../Models/Operations/UpdateNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateNotificationSettingResponse](../../Models/Operations/UpdateNotificationSettingResponse.md)**

