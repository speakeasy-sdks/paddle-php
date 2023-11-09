# DiscountCreate

Represents a discount entity.


## Fields

| Field                                                                                                                                                                                                                                 | Type                                                                                                                                                                                                                                  | Required                                                                                                                                                                                                                              | Description                                                                                                                                                                                                                           | Example                                                                                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `amount`                                                                                                                                                                                                                              | *string*                                                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                    | Amount to discount by. For `percentage` discounts, must be an amount between `0.01` and `100`. For `flat` and `flat_per_seat` discounts, amount in the lowest denomination for a currency.                                            |                                                                                                                                                                                                                                       |
| `code`                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                    | Unique code that customers can use to apply this discount at checkout. Use letters and numbers only, up to 16 characters. Paddle generates a random 10-character code if a code is not provided and `enabled_for_checkout` is `true`. |                                                                                                                                                                                                                                       |
| `currencyCode`                                                                                                                                                                                                                        | [?\paddle\Paddle\Models\Shared\CurrencyCode2](../../Models/Shared/CurrencyCode2.md)                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                                                    | Supported three-letter ISO 4217 currency code.                                                                                                                                                                                        |                                                                                                                                                                                                                                       |
| `description`                                                                                                                                                                                                                         | *string*                                                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                    | Short description for this discount for your reference. Not shown to customers.                                                                                                                                                       |                                                                                                                                                                                                                                       |
| `enabledForCheckout`                                                                                                                                                                                                                  | *?bool*                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                    | Whether this discount can be applied by a customer at checkout.                                                                                                                                                                       |                                                                                                                                                                                                                                       |
| `expiresAt`                                                                                                                                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                    | RFC 3339 datetime string.                                                                                                                                                                                                             | 2024-10-12T07:20:50.52Z                                                                                                                                                                                                               |
| `id`                                                                                                                                                                                                                                  | *?string*                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                    | Unique Paddle ID for this discount, prefixed with `dsc_`.                                                                                                                                                                             | dsc_01gv5kpg05xp104ek2fmgjwttf                                                                                                                                                                                                        |
| `maximumRecurringIntervals`                                                                                                                                                                                                           | *?int*                                                                                                                                                                                                                                | :heavy_minus_sign:                                                                                                                                                                                                                    | Amount of subscription billing periods that this discount recurs for. Requires `recur`. `null` if this discount recurs forever.                                                                                                       |                                                                                                                                                                                                                                       |
| `recur`                                                                                                                                                                                                                               | *?bool*                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                    | Whether this discount applies for multiple billing periods.                                                                                                                                                                           |                                                                                                                                                                                                                                       |
| `restrictTo`                                                                                                                                                                                                                          | array<*string*>                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                    | Product or price IDs that this discount is for. When including a product ID, all prices for that product can be discounted. `null` if this discount applies to all products and prices.                                               |                                                                                                                                                                                                                                       |
| `type`                                                                                                                                                                                                                                | [\paddle\Paddle\Models\Shared\Type](../../Models/Shared/Type.md)                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                                                    | Type of discount.                                                                                                                                                                                                                     |                                                                                                                                                                                                                                       |
| `usageLimit`                                                                                                                                                                                                                          | *?int*                                                                                                                                                                                                                                | :heavy_minus_sign:                                                                                                                                                                                                                    | Maximum amount of times this discount can be used. This is an overall limit, rather than a per-customer limit. `null` if this discount can be used an unlimited amount of times.                                                      |                                                                                                                                                                                                                                       |