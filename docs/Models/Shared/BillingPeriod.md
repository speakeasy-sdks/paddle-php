# BillingPeriod


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `endsAt`                                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                  | :heavy_check_mark:                                                             | N/A                                                                            |
| `startsAt`                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                  | :heavy_check_mark:                                                             | N/A                                                                            |
| `type`                                                                         | [\paddle\Paddle\Models\Shared\InvoiceType](../../Models/Shared/InvoiceType.md) | :heavy_check_mark:                                                             | The billing period type is set to `billing` for subscriptions.                 |