# TransactionBillingPeriod

The period of time that this transaction covers. This is used by recurring subscription transactions as well as all invoicing transactions to indicate the period of time the charges in the transaction relate to


## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `endsAt`                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                      | :heavy_check_mark:                                                                                 | End of the billing period. A timestamp following the RFC 3339 standard                             |
| `startsAt`                                                                                         | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                      | :heavy_check_mark:                                                                                 | Start of the billing period. A timestamp following the RFC 3339 standard. Cannot be a future date. |