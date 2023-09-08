# Notification

Represents a notification entity.


## Fields

| Field                                                                                                                  | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            | Example                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `deliveredAt`                                                                                                          | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                          | :heavy_minus_sign:                                                                                                     | RFC 3339 datetime string.                                                                                              | 2024-10-12T07:20:50.52Z                                                                                                |
| `id`                                                                                                                   | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Unique Paddle ID for this notification, prefixed with `ntf_`.                                                          | ntf_01ghbkd0frb9k95cnhwd1bxpvk                                                                                         |
| `lastAttemptAt`                                                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                          | :heavy_minus_sign:                                                                                                     | RFC 3339 datetime string.                                                                                              | 2024-10-12T07:20:50.52Z                                                                                                |
| `notificationSettingId`                                                                                                | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Unique Paddle ID for this notification setting, prefixed with `ntfset_`.                                               | ntfset_01gt21c5pdx9q1e4mh1xrsjjn6                                                                                      |
| `occurredAt`                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                          | :heavy_minus_sign:                                                                                                     | RFC 3339 datetime string.                                                                                              | 2024-10-12T07:20:50.52Z                                                                                                |
| `origin`                                                                                                               | [?NotificationOrigin](../../models/shared/NotificationOrigin.md)                                                       | :heavy_minus_sign:                                                                                                     | Describes how this notification was created.                                                                           |                                                                                                                        |
| `payload`                                                                                                              | [?Event](../../models/shared/Event.md)                                                                                 | :heavy_minus_sign:                                                                                                     | Represents an event entity.                                                                                            |                                                                                                                        |
| `replayedAt`                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                          | :heavy_minus_sign:                                                                                                     | RFC 3339 datetime string.                                                                                              | 2024-10-12T07:20:50.52Z                                                                                                |
| `retryAt`                                                                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                          | :heavy_minus_sign:                                                                                                     | RFC 3339 datetime string.                                                                                              | 2024-10-12T07:20:50.52Z                                                                                                |
| `status`                                                                                                               | [?SchemasstatusNotification](../../models/shared/SchemasstatusNotification.md)                                         | :heavy_minus_sign:                                                                                                     | Status of this notification.                                                                                           |                                                                                                                        |
| `timesAttempted`                                                                                                       | *?int*                                                                                                                 | :heavy_minus_sign:                                                                                                     | How many times delivery of this notification has been attempted. Automatically incremented by Paddle after an attempt. |                                                                                                                        |
| `type`                                                                                                                 | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Type of event sent by Paddle, in the format `entity.event_type`.                                                       |                                                                                                                        |