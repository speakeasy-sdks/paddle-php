# LineItems


## Fields

| Field                                                                                            | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `product`                                                                                        | [?\paddle\Paddle\Models\Shared\Product](../../Models/Shared/Product.md)                          | :heavy_minus_sign:                                                                               | Represents a product entity.                                                                     |
| `quantity`                                                                                       | *?int*                                                                                           | :heavy_minus_sign:                                                                               | N/A                                                                                              |
| `taxRate`                                                                                        | *?string*                                                                                        | :heavy_minus_sign:                                                                               | N/A                                                                                              |
| `totals`                                                                                         | [?\paddle\Paddle\Models\Shared\Totals2](../../Models/Shared/Totals2.md)                          | :heavy_minus_sign:                                                                               | The financial breakdown of a charge in the lowest denomination of a currency (eg cents for USD). |
| `unitTotals`                                                                                     | [?\paddle\Paddle\Models\Shared\Totals2](../../Models/Shared/Totals2.md)                          | :heavy_minus_sign:                                                                               | The financial breakdown of a charge in the lowest denomination of a currency (eg cents for USD). |