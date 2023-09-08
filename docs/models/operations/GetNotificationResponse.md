# GetNotificationResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `headers`                                                                                                    | array<string, array<*string*>>                                                                               | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `getNotification200ApplicationJSONObject`                                                                    | [?GetNotification200ApplicationJSON](../../models/operations/GetNotification200ApplicationJSON.md)           | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `getNotification401ApplicationJSONObject`                                                                    | [?GetNotification401ApplicationJSON](../../models/operations/GetNotification401ApplicationJSON.md)           | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `getNotification404ApplicationJSONObject`                                                                    | [?GetNotification404ApplicationJSON](../../models/operations/GetNotification404ApplicationJSON.md)           | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `getNotification500ApplicationJSONObject`                                                                    | [?GetNotification500ApplicationJSON](../../models/operations/GetNotification500ApplicationJSON.md)           | :heavy_minus_sign:                                                                                           | General error response                                                                                       |