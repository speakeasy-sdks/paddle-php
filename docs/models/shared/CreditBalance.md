# CreditBalance

Represents a credit balance for a customer.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      | Example                                                          |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `balance`                                                        | [?CustomerBalance](../../models/shared/CustomerBalance.md)       | :heavy_minus_sign:                                               | N/A                                                              |                                                                  |
| `currencyCode`                                                   | [?CurrencyCode2](../../models/shared/CurrencyCode2.md)           | :heavy_minus_sign:                                               | Supported three-letter ISO 4217 currency code.                   |                                                                  |
| `customerId`                                                     | *?string*                                                        | :heavy_minus_sign:                                               | Unique Paddle ID for this customer entity, prefixed with `ctm_`. | ctm_01grnn4zta5a1mf02jjze7y2ys                                   |