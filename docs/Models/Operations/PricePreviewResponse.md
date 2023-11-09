# PricePreviewResponse


## Fields

| Field                                                                                                                                     | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredApplicationJsonObject`                                                                                                         | [?\paddle\Paddle\Models\Operations\PricePreviewResponseBodyOutput](../../Models/Operations/PricePreviewResponseBodyOutput.md)             | :heavy_minus_sign:                                                                                                                        | OK                                                                                                                                        |
| `fourHundredAndOneApplicationJsonObject`                                                                                                  | [?\paddle\Paddle\Models\Operations\PricePreviewResponseBody](../../Models/Operations/PricePreviewResponseBody.md)                         | :heavy_minus_sign:                                                                                                                        | General error response                                                                                                                    |
| `fiveHundredApplicationJsonObject`                                                                                                        | [?\paddle\Paddle\Models\Operations\PricePreviewTransactionsResponseBody](../../Models/Operations/PricePreviewTransactionsResponseBody.md) | :heavy_minus_sign:                                                                                                                        | General error response                                                                                                                    |
| `contentType`                                                                                                                             | *string*                                                                                                                                  | :heavy_check_mark:                                                                                                                        | HTTP response content type for this operation                                                                                             |
| `headers`                                                                                                                                 | array<string, array<*string*>>                                                                                                            | :heavy_minus_sign:                                                                                                                        | N/A                                                                                                                                       |
| `statusCode`                                                                                                                              | *int*                                                                                                                                     | :heavy_check_mark:                                                                                                                        | HTTP response status code for this operation                                                                                              |
| `rawResponse`                                                                                                                             | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                              | :heavy_minus_sign:                                                                                                                        | Raw HTTP response; suitable for custom response parsing                                                                                   |