# GetNotificationSettingResponse


## Fields

| Field                                                                                                            | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                    | *string*                                                                                                         | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `headers`                                                                                                        | array<string, array<*string*>>                                                                                   | :heavy_minus_sign:                                                                                               | N/A                                                                                                              |
| `statusCode`                                                                                                     | *int*                                                                                                            | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `rawResponse`                                                                                                    | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)     | :heavy_minus_sign:                                                                                               | N/A                                                                                                              |
| `getNotificationSetting200ApplicationJSONObject`                                                                 | [?GetNotificationSetting200ApplicationJSON](../../models/operations/GetNotificationSetting200ApplicationJSON.md) | :heavy_minus_sign:                                                                                               | OK                                                                                                               |
| `getNotificationSetting401ApplicationJSONObject`                                                                 | [?GetNotificationSetting401ApplicationJSON](../../models/operations/GetNotificationSetting401ApplicationJSON.md) | :heavy_minus_sign:                                                                                               | General error response                                                                                           |
| `getNotificationSetting404ApplicationJSONObject`                                                                 | [?GetNotificationSetting404ApplicationJSON](../../models/operations/GetNotificationSetting404ApplicationJSON.md) | :heavy_minus_sign:                                                                                               | General error response                                                                                           |
| `getNotificationSetting500ApplicationJSONObject`                                                                 | [?GetNotificationSetting500ApplicationJSON](../../models/operations/GetNotificationSetting500ApplicationJSON.md) | :heavy_minus_sign:                                                                                               | General error response                                                                                           |