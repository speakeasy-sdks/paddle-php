# DeleteNotificationSettingResponse


## Fields

| Field                                                                                                                  | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                          | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `headers`                                                                                                              | array<string, array<*string*>>                                                                                         | :heavy_minus_sign:                                                                                                     | N/A                                                                                                                    |
| `statusCode`                                                                                                           | *int*                                                                                                                  | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `rawResponse`                                                                                                          | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)           | :heavy_minus_sign:                                                                                                     | N/A                                                                                                                    |
| `deleteNotificationSetting401ApplicationJSONObject`                                                                    | [?DeleteNotificationSetting401ApplicationJSON](../../models/operations/DeleteNotificationSetting401ApplicationJSON.md) | :heavy_minus_sign:                                                                                                     | General error response                                                                                                 |
| `deleteNotificationSetting404ApplicationJSONObject`                                                                    | [?DeleteNotificationSetting404ApplicationJSON](../../models/operations/DeleteNotificationSetting404ApplicationJSON.md) | :heavy_minus_sign:                                                                                                     | General error response                                                                                                 |
| `deleteNotificationSetting500ApplicationJSONObject`                                                                    | [?DeleteNotificationSetting500ApplicationJSON](../../models/operations/DeleteNotificationSetting500ApplicationJSON.md) | :heavy_minus_sign:                                                                                                     | General error response                                                                                                 |