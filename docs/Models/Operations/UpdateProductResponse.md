# UpdateProductResponse


## Fields

| Field                                                                                                                                                     | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredApplicationJsonObject`                                                                                                                         | [?\paddle\Paddle\Models\Operations\UpdateProductResponseBody](../../Models/Operations/UpdateProductResponseBody.md)                                       | :heavy_minus_sign:                                                                                                                                        | OK                                                                                                                                                        |
| `fourHundredApplicationJsonObject`                                                                                                                        | [?\paddle\Paddle\Models\Operations\UpdateProductProductsResponseBody](../../Models/Operations/UpdateProductProductsResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                        | Error response for validation                                                                                                                             |
| `fourHundredAndOneApplicationJsonObject`                                                                                                                  | [?\paddle\Paddle\Models\Operations\UpdateProductProductsResponseResponseBody](../../Models/Operations/UpdateProductProductsResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                 | [?\paddle\Paddle\Models\Operations\UpdateProductProductsResponse404ResponseBody](../../Models/Operations/UpdateProductProductsResponse404ResponseBody.md) | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `fiveHundredApplicationJsonObject`                                                                                                                        | [?\paddle\Paddle\Models\Operations\UpdateProductProductsResponse500ResponseBody](../../Models/Operations/UpdateProductProductsResponse500ResponseBody.md) | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `contentType`                                                                                                                                             | *string*                                                                                                                                                  | :heavy_check_mark:                                                                                                                                        | HTTP response content type for this operation                                                                                                             |
| `headers`                                                                                                                                                 | array<string, array<*string*>>                                                                                                                            | :heavy_minus_sign:                                                                                                                                        | N/A                                                                                                                                                       |
| `statusCode`                                                                                                                                              | *int*                                                                                                                                                     | :heavy_check_mark:                                                                                                                                        | HTTP response status code for this operation                                                                                                              |
| `rawResponse`                                                                                                                                             | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                              | :heavy_minus_sign:                                                                                                                                        | Raw HTTP response; suitable for custom response parsing                                                                                                   |