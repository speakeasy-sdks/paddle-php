# Notifications
(*notifications*)

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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Shared\NotificationSettingCreateInput;
use \paddle\Paddle\Models\Shared\NotificationSettingCreateType;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new NotificationSettingCreateInput();
    $request->active = false;
    $request->apiVersion = 659672;
    $request->description = 'Persistent next generation circuit';
    $request->destination = 'string';
    $request->includeSensitiveFields = false;
    $request->subscribedEvents = [
        'string',
    ];
    $request->type = NotificationSettingCreateType::Url;

    $response = $sdk->notifications->createSetting($request);

    if ($response->createNotificationSetting201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\paddle\Paddle\Models\Shared\NotificationSettingCreateInput](../../models/shared/NotificationSettingCreateInput.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\CreateNotificationSettingResponse](../../models/operations/CreateNotificationSettingResponse.md)**


## deleteSetting

Deletes a notification setting (notification destination) using its ID.

When you delete a notification setting, it's permanently removed from your account. Paddle stops sending events to your destination, and you'll lose access to all the logs for this notification setting.

There's no way to recover a deleted notification setting. Deactivate a notification setting using the update notification setting operation if you'll need access to the logs or want to reactivate later on.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\DeleteNotificationSettingRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteNotificationSettingRequest();
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';

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
| `$request`                                                                                                                       | [\paddle\Paddle\Models\Operations\DeleteNotificationSettingRequest](../../models/operations/DeleteNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\DeleteNotificationSettingResponse](../../models/operations/DeleteNotificationSettingResponse.md)**


## get

Returns a notification using its ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetNotificationRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetNotificationRequest();
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';

    $response = $sdk->notifications->get($request);

    if ($response->getNotification200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\paddle\Paddle\Models\Operations\GetNotificationRequest](../../models/operations/GetNotificationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\paddle\Paddle\Models\Operations\GetNotificationResponse](../../models/operations/GetNotificationResponse.md)**


## getSetting

Returns a notification setting (notification destination) using its ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\GetNotificationSettingRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetNotificationSettingRequest();
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';

    $response = $sdk->notifications->getSetting($request);

    if ($response->getNotificationSetting200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\paddle\Paddle\Models\Operations\GetNotificationSettingRequest](../../models/operations/GetNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\paddle\Paddle\Models\Operations\GetNotificationSettingResponse](../../models/operations/GetNotificationSettingResponse.md)**


## list

Returns a paginated list of notifications. Use the query parameters to page through results.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListNotificationsRequest;
use \paddle\Paddle\Models\Shared\StatusNotification;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListNotificationsRequest();
    $request->after = 'string';
    $request->filter = 'sub_01gw4rrmfrqcwkhjm04hr3ah4n';
    $request->from = '2023-04-18T17:03:26';
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';
    $request->orderBy = 'string';
    $request->perPage = 99895;
    $request->search = 'upgrade';
    $request->status = StatusNotification::NeedsRetry;
    $request->to = '2023-04-18T17:03:26';

    $response = $sdk->notifications->list($request);

    if ($response->listNotifications200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\paddle\Paddle\Models\Operations\ListNotificationsRequest](../../models/operations/ListNotificationsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationsResponse](../../models/operations/ListNotificationsResponse.md)**


## listLogs

Returns a paginated list of notification logs for a notification. A log includes information about delivery attempts, including failures.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ListNotificationLogsRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListNotificationLogsRequest();
    $request->after = 'string';
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';
    $request->perPage = 822522;

    $response = $sdk->notifications->listLogs($request);

    if ($response->listNotificationLogs200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\paddle\Paddle\Models\Operations\ListNotificationLogsRequest](../../models/operations/ListNotificationLogsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationLogsResponse](../../models/operations/ListNotificationLogsResponse.md)**


## listSettings

Returns a list of notification settings (notification destinations).

The response is not paginated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->notifications->listSettings();

    if ($response->listNotificationSettings200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\paddle\Paddle\Models\Operations\ListNotificationSettingsResponse](../../models/operations/ListNotificationSettingsResponse.md)**


## replay

Attempts to resend a `delivered` or `failed` notification using its ID.

Paddle creates a new notification entity for the replay, related to the same `event_id`.

The new notification replay is sent to the `destination` against the `notification_setting_id`.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\ReplayNotificationRequest;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReplayNotificationRequest();
    $request->notificationId = 'ntf_01gt261ms8ew72a0vnm5p5ne2q';

    $response = $sdk->notifications->replay($request);

    if ($response->replayNotification202ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\paddle\Paddle\Models\Operations\ReplayNotificationRequest](../../models/operations/ReplayNotificationRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\paddle\Paddle\Models\Operations\ReplayNotificationResponse](../../models/operations/ReplayNotificationResponse.md)**


## replayBySetting

Replay notifications by notification setting

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayRequest;
use \paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayRequestBody;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostNotificationSettingsNotificationSettingIdReplayRequest();
    $request->requestBody = new PostNotificationSettingsNotificationSettingIdReplayRequestBody();
    $request->requestBody->filter = 'txn_01h3cgmh9qn7yezn4rgze4nrg2';
    $request->requestBody->from = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->requestBody->to = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2019-10-12T07:20:50.52Z');
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';

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
| `$request`                                                                                                                                                                           | [\paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayRequest](../../models/operations/PostNotificationSettingsNotificationSettingIdReplayRequest.md) | :heavy_check_mark:                                                                                                                                                                   | The request object to use for the request.                                                                                                                                           |


### Response

**[?\paddle\Paddle\Models\Operations\PostNotificationSettingsNotificationSettingIdReplayResponse](../../models/operations/PostNotificationSettingsNotificationSettingIdReplayResponse.md)**


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

use \paddle\Paddle\Paddle;
use \paddle\Paddle\Models\Shared\Security;
use \paddle\Paddle\Models\Operations\UpdateNotificationSettingRequest;
use \paddle\Paddle\Models\Shared\NotificationSettingUpdate;

$security = new Security();
$security->bearerAuth = 'YOUR_API_KEY';

$sdk = Paddle::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateNotificationSettingRequest();
    $request->notificationSettingUpdate = new NotificationSettingUpdate();
    $request->notificationSettingUpdate->active = false;
    $request->notificationSettingUpdate->apiVersion = 303975;
    $request->notificationSettingUpdate->description = 'Implemented clear-thinking firmware';
    $request->notificationSettingUpdate->destination = 'string';
    $request->notificationSettingUpdate->includeSensitiveFields = false;
    $request->notificationSettingUpdate->subscribedEvents = [
        'string',
    ];
    $request->notificationSettingId = 'ntfset_01gt21c5pdx9q1e4mh1xrsjjn6';

    $response = $sdk->notifications->updateSettings($request);

    if ($response->updateNotificationSetting200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\paddle\Paddle\Models\Operations\UpdateNotificationSettingRequest](../../models/operations/UpdateNotificationSettingRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\paddle\Paddle\Models\Operations\UpdateNotificationSettingResponse](../../models/operations/UpdateNotificationSettingResponse.md)**

