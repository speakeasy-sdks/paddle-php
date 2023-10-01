# ListProductsResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | HTTP response content type for this operation                                                                |
| `headers`                                                                                                    | array<string, array<*string*>>                                                                               | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | HTTP response status code for this operation                                                                 |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |
| `listProducts200ApplicationJSONObject`                                                                       | [?ListProducts200ApplicationJSON](../../models/operations/ListProducts200ApplicationJSON.md)                 | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `listProducts401ApplicationJSONObject`                                                                       | [?ListProducts401ApplicationJSON](../../models/operations/ListProducts401ApplicationJSON.md)                 | :heavy_minus_sign:                                                                                           | General error response                                                                                       |
| `listProducts500ApplicationJSONObject`                                                                       | [?ListProducts500ApplicationJSON](../../models/operations/ListProducts500ApplicationJSON.md)                 | :heavy_minus_sign:                                                                                           | General error response                                                                                       |