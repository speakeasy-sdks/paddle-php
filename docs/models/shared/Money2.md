# Money2


## Fields

| Field                                                                              | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `amount`                                                                           | *string*                                                                           | :heavy_check_mark:                                                                 | Amount in the lowest denomination for the currency, e.g. 10 USD = 1000 (cents).    |
| `currencyCode`                                                                     | [\paddle\Paddle\Models\Shared\CurrencyCode2](../../models/shared/CurrencyCode2.md) | :heavy_check_mark:                                                                 | Supported three-letter ISO 4217 currency code.                                     |