# Subscription1

Represents a subscription preview.


## Fields

| Field                                                                                                                                                                                                     | Type                                                                                                                                                                                                      | Required                                                                                                                                                                                                  | Description                                                                                                                                                                                               | Example                                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `addressId`                                                                                                                                                                                               | *?string*                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                        | Unique Paddle ID for this address entity, prefixed with `add_`.                                                                                                                                           | add_01gm302t81w94gyjpjpqypkzkf                                                                                                                                                                            |
| `billingCycle`                                                                                                                                                                                            | [?\paddle\Paddle\Models\Shared\Period2](../../Models/Shared/Period2.md)                                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                        | N/A                                                                                                                                                                                                       |                                                                                                                                                                                                           |
| `billingDetails`                                                                                                                                                                                          | [?\paddle\Paddle\Models\Shared\BillingDetails2](../../Models/Shared/BillingDetails2.md)                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                        | Details for invoicing. Required if `collection_mode` is `manual`.                                                                                                                                         |                                                                                                                                                                                                           |
| `businessId`                                                                                                                                                                                              | *?string*                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                        | Unique Paddle ID for this business entity, prefixed with `biz_`.                                                                                                                                          | biz_01grrebrzaee2qj2fqqhmcyzaj                                                                                                                                                                            |
| `canceledAt`                                                                                                                                                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string.                                                                                                                                                                                 | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `collectionMode`                                                                                                                                                                                          | [?\paddle\Paddle\Models\Shared\CollectionMode2](../../Models/Shared/CollectionMode2.md)                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                        | How payment is collected. `automatic` for checkout, `manual` for invoices.                                                                                                                                |                                                                                                                                                                                                           |
| `createdAt`                                                                                                                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string of when this entity was created. Set automatically by Paddle.                                                                                                                    | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `currencyCode`                                                                                                                                                                                            | [?\paddle\Paddle\Models\Shared\CurrencyCode2](../../Models/Shared/CurrencyCode2.md)                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                        | Supported three-letter ISO 4217 currency code.                                                                                                                                                            |                                                                                                                                                                                                           |
| `currentBillingPeriod`                                                                                                                                                                                    | [?\paddle\Paddle\Models\Shared\TimePeriod](../../Models/Shared/TimePeriod.md)                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | N/A                                                                                                                                                                                                       |                                                                                                                                                                                                           |
| `customData`                                                                                                                                                                                              | [?\paddle\Paddle\Models\Shared\CustomData](../../Models/Shared/CustomData.md)                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | Your own structured key-value data.                                                                                                                                                                       |                                                                                                                                                                                                           |
| `customerId`                                                                                                                                                                                              | *?string*                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                        | Unique Paddle ID for this customer entity, prefixed with `ctm_`.                                                                                                                                          | ctm_01grnn4zta5a1mf02jjze7y2ys                                                                                                                                                                            |
| `discount`                                                                                                                                                                                                | [?\paddle\Paddle\Models\Shared\Subscription1Discount](../../Models/Shared/Subscription1Discount.md)                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                        | Details of the discount applied to this subscription.                                                                                                                                                     |                                                                                                                                                                                                           |
| `firstBilledAt`                                                                                                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string.                                                                                                                                                                                 | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `id`                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                        | Unique Paddle ID for this subscription entity, prefixed with `sub_`.                                                                                                                                      | sub_01h04vsc0qhwtsbsxh3422wjs4                                                                                                                                                                            |
| `items`                                                                                                                                                                                                   | array<[\paddle\Paddle\Models\Shared\ItemSubscription](../../Models/Shared/ItemSubscription.md)>                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                        | List of items on this subscription. Only recurring items are returned.                                                                                                                                    |                                                                                                                                                                                                           |
| `managementUrls`                                                                                                                                                                                          | [?\paddle\Paddle\Models\Shared\SubscriptionManagementUrls](../../Models/Shared/SubscriptionManagementUrls.md)                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | Public URLs that customers can use to make changes to this subscription.                                                                                                                                  |                                                                                                                                                                                                           |
| `nextBilledAt`                                                                                                                                                                                            | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string.                                                                                                                                                                                 | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `pausedAt`                                                                                                                                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string.                                                                                                                                                                                 | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `scheduledChange`                                                                                                                                                                                         | [?\paddle\Paddle\Models\Shared\SubscriptionScheduledChange](../../Models/Shared/SubscriptionScheduledChange.md)                                                                                           | :heavy_minus_sign:                                                                                                                                                                                        | Change that's scheduled to be applied to a subscription. Use the pause subscription, cancel subscription, and resume subscription operations to create scheduled changes. `null` if no scheduled changes. |                                                                                                                                                                                                           |
| `startedAt`                                                                                                                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string.                                                                                                                                                                                 | 2024-10-12T07:20:50.52Z                                                                                                                                                                                   |
| `status`                                                                                                                                                                                                  | [?\paddle\Paddle\Models\Shared\SchemaStatusSubscription](../../Models/Shared/SchemaStatusSubscription.md)                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                        | Status of this subscription. Set automatically by Paddle. Use the pause subscription or cancel subscription operations to change.                                                                         |                                                                                                                                                                                                           |
| `updatedAt`                                                                                                                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                        | RFC 3339 datetime string of when this entity was updated. Set automatically by Paddle.                                                                                                                    | 2024-10-13T07:20:50.52Z                                                                                                                                                                                   |