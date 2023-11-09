# UpdateCustomerResponse


## Fields

| Field                                                                                                                                                         | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredApplicationJsonObject`                                                                                                                             | [?\paddle\Paddle\Models\Operations\UpdateCustomerResponseBody](../../Models/Operations/UpdateCustomerResponseBody.md)                                         | :heavy_minus_sign:                                                                                                                                            | OK                                                                                                                                                            |
| `fourHundredApplicationJsonObject`                                                                                                                            | [?\paddle\Paddle\Models\Operations\UpdateCustomerCustomersResponseBody](../../Models/Operations/UpdateCustomerCustomersResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                            | Error response for validation                                                                                                                                 |
| `fourHundredAndOneApplicationJsonObject`                                                                                                                      | [?\paddle\Paddle\Models\Operations\UpdateCustomerCustomersResponseResponseBody](../../Models/Operations/UpdateCustomerCustomersResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                            | General error response                                                                                                                                        |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                                    | [?\paddle\Paddle\Models\Operations\UpdateCustomerCustomersResponse403ResponseBody](../../Models/Operations/UpdateCustomerCustomersResponse403ResponseBody.md) | :heavy_minus_sign:                                                                                                                                            | General error response                                                                                                                                        |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                     | [?\paddle\Paddle\Models\Operations\UpdateCustomerCustomersResponse404ResponseBody](../../Models/Operations/UpdateCustomerCustomersResponse404ResponseBody.md) | :heavy_minus_sign:                                                                                                                                            | General error response                                                                                                                                        |
| `fiveHundredApplicationJsonObject`                                                                                                                            | [?\paddle\Paddle\Models\Operations\UpdateCustomerCustomersResponse500ResponseBody](../../Models/Operations/UpdateCustomerCustomersResponse500ResponseBody.md) | :heavy_minus_sign:                                                                                                                                            | General error response                                                                                                                                        |
| `contentType`                                                                                                                                                 | *string*                                                                                                                                                      | :heavy_check_mark:                                                                                                                                            | HTTP response content type for this operation                                                                                                                 |
| `headers`                                                                                                                                                     | array<string, array<*string*>>                                                                                                                                | :heavy_minus_sign:                                                                                                                                            | N/A                                                                                                                                                           |
| `statusCode`                                                                                                                                                  | *int*                                                                                                                                                         | :heavy_check_mark:                                                                                                                                            | HTTP response status code for this operation                                                                                                                  |
| `rawResponse`                                                                                                                                                 | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                  | :heavy_minus_sign:                                                                                                                                            | Raw HTTP response; suitable for custom response parsing                                                                                                       |