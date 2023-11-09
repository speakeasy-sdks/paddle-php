# CancelInvoiceResponse


## Fields

| Field                                                                                                                                                     | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredApplicationJsonObject`                                                                                                                         | [?\paddle\Paddle\Models\Operations\CancelInvoiceResponseBody](../../Models/Operations/CancelInvoiceResponseBody.md)                                       | :heavy_minus_sign:                                                                                                                                        | OK                                                                                                                                                        |
| `fourHundredAndOneApplicationJsonObject`                                                                                                                  | [?\paddle\Paddle\Models\Operations\CancelInvoiceInvoicesResponseBody](../../Models/Operations/CancelInvoiceInvoicesResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                 | [?\paddle\Paddle\Models\Operations\CancelInvoiceInvoicesResponseResponseBody](../../Models/Operations/CancelInvoiceInvoicesResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `fiveHundredApplicationJsonObject`                                                                                                                        | [?\paddle\Paddle\Models\Operations\CancelInvoiceInvoicesResponse500ResponseBody](../../Models/Operations/CancelInvoiceInvoicesResponse500ResponseBody.md) | :heavy_minus_sign:                                                                                                                                        | General error response                                                                                                                                    |
| `contentType`                                                                                                                                             | *string*                                                                                                                                                  | :heavy_check_mark:                                                                                                                                        | HTTP response content type for this operation                                                                                                             |
| `headers`                                                                                                                                                 | array<string, array<*string*>>                                                                                                                            | :heavy_minus_sign:                                                                                                                                        | N/A                                                                                                                                                       |
| `statusCode`                                                                                                                                              | *int*                                                                                                                                                     | :heavy_check_mark:                                                                                                                                        | HTTP response status code for this operation                                                                                                              |
| `rawResponse`                                                                                                                                             | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                              | :heavy_minus_sign:                                                                                                                                        | Raw HTTP response; suitable for custom response parsing                                                                                                   |