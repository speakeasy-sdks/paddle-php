# ListAddressesResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `headers`                                                                                                    | array<string, array<*string*>>                                                                               | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `listAddresses200ApplicationJSONObject`                                                                      | [?ListAddresses200ApplicationJSON](../../models/operations/ListAddresses200ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `listAddresses401ApplicationJSONObject`                                                                      | [?ListAddresses401ApplicationJSON](../../models/operations/ListAddresses401ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `listAddresses403ApplicationJSONObject`                                                                      | [?ListAddresses403ApplicationJSON](../../models/operations/ListAddresses403ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `listAddresses404ApplicationJSONObject`                                                                      | [?ListAddresses404ApplicationJSON](../../models/operations/ListAddresses404ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `listAddresses500ApplicationJSONObject`                                                                      | [?ListAddresses500ApplicationJSON](../../models/operations/ListAddresses500ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | General error response                                                                                       |