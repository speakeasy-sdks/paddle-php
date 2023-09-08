# CreateAdjustmentResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `headers`                                                                                                    | array<string, array<*string*>>                                                                               | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `createAdjustment201ApplicationJSONObject`                                                                   | [?CreateAdjustment201ApplicationJSON](../../models/operations/CreateAdjustment201ApplicationJSON.md)         | :heavy_minus_sign:                                                                                           | Created                                                                                                      |
| `createAdjustment400ApplicationJSONObject`                                                                   | [?CreateAdjustment400ApplicationJSON](../../models/operations/CreateAdjustment400ApplicationJSON.md)         | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `createAdjustment404ApplicationJSONObject`                                                                   | [?CreateAdjustment404ApplicationJSON](../../models/operations/CreateAdjustment404ApplicationJSON.md)         | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `createAdjustment409ApplicationJSONObject`                                                                   | [?CreateAdjustment409ApplicationJSON](../../models/operations/CreateAdjustment409ApplicationJSON.md)         | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `createAdjustment500ApplicationJSONObject`                                                                   | [?CreateAdjustment500ApplicationJSON](../../models/operations/CreateAdjustment500ApplicationJSON.md)         | :heavy_minus_sign:                                                                                           | General error response                                                                                       |