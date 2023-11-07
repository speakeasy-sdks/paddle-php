# Event

Represents an event entity.


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `data`                                                            | [?\paddle\Paddle\Models\Shared\Data](../../models/shared/Data.md) | :heavy_minus_sign:                                                | New or changed entity.                                            |                                                                   |
| `eventId`                                                         | *?string*                                                         | :heavy_minus_sign:                                                | Unique Paddle ID for this event, prefixed with `evt_`.            | evt_01gks14ge726w50ch2tmaw2a1x                                    |
| `eventType`                                                       | *?string*                                                         | :heavy_minus_sign:                                                | Type of event sent by Paddle, in the format `entity.event_type`.  |                                                                   |
| `notificationId`                                                  | *?string*                                                         | :heavy_minus_sign:                                                | Unique Paddle ID for this notification, prefixed with `ntf_`.     | ntf_01ghbkd0frb9k95cnhwd1bxpvk                                    |
| `occurredAt`                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)     | :heavy_minus_sign:                                                | RFC 3339 datetime string.                                         | 2024-10-12T07:20:50.52Z                                           |