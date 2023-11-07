# TransactionItemProration

How proration was calculated for this item. Populated when a transaction is created from a subscription change, where `proration_billing_mode` was `prorated_immediately` or `prorated_next_billing_period`. Set automatically by Paddle.


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `billingPeriod`                                                               | [?\paddle\Paddle\Models\Shared\TimePeriod](../../models/shared/TimePeriod.md) | :heavy_minus_sign:                                                            | N/A                                                                           |
| `rate`                                                                        | *?string*                                                                     | :heavy_minus_sign:                                                            | Rate used to calculate proration.                                             |