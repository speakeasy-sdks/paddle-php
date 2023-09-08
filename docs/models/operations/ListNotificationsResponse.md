# ListNotificationsResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `headers`                                                                                                    | array<string, array<*string*>>                                                                               | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `listNotifications200ApplicationJSONObject`                                                                  | [?ListNotifications200ApplicationJSON](../../models/operations/ListNotifications200ApplicationJSON.md)       | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `listNotifications401ApplicationJSONObject`                                                                  | [?ListNotifications401ApplicationJSON](../../models/operations/ListNotifications401ApplicationJSON.md)       | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `listNotifications500ApplicationJSONObject`                                                                  | [?ListNotifications500ApplicationJSON](../../models/operations/ListNotifications500ApplicationJSON.md)       | :heavy_minus_sign:                                                                                           | General error response                                                                                       |