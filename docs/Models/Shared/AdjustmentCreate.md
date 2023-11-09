# AdjustmentCreate

Represents an adjustment entity.


## Fields

| Field                                                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                                                | Required                                                                                                                                                                                                                                                                            | Description                                                                                                                                                                                                                                                                         | Example                                                                                                                                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `action`                                                                                                                                                                                                                                                                            | [\paddle\Paddle\Models\Shared\SchemaAction](../../Models/Shared/SchemaAction.md)                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                  | How this adjustment impacts the related transaction. `refund` adjustments must be approved by Paddle, and are created with the status `pending_approval`. `chargeback` and `chargeback_warning` adjustments are created automatically by Paddle.                                    |                                                                                                                                                                                                                                                                                     |
| `currencyCode`                                                                                                                                                                                                                                                                      | [?\paddle\Paddle\Models\Shared\CurrencyCode2](../../Models/Shared/CurrencyCode2.md)                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Supported three-letter ISO 4217 currency code.                                                                                                                                                                                                                                      |                                                                                                                                                                                                                                                                                     |
| `customerId`                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Unique Paddle ID for this customer entity, prefixed with `ctm_`.                                                                                                                                                                                                                    | ctm_01grnn4zta5a1mf02jjze7y2ys                                                                                                                                                                                                                                                      |
| `id`                                                                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Unique Paddle ID for this adjustment entity, prefixed with `adj_`.                                                                                                                                                                                                                  | adj_01gya6twkp8y0tv1e19rsgst9m                                                                                                                                                                                                                                                      |
| `items`                                                                                                                                                                                                                                                                             | array<[\paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItem](../../Models/Shared/AdjustmentCreateAdjustmentItem.md)>                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                                                                                                  | List of items on this adjustment.                                                                                                                                                                                                                                                   |                                                                                                                                                                                                                                                                                     |
| `payoutTotals`                                                                                                                                                                                                                                                                      | [?\paddle\Paddle\Models\Shared\AdjustmentPayoutTotals](../../Models/Shared/AdjustmentPayoutTotals.md)                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Breakdown of how this adjustment affects your payout balance.                                                                                                                                                                                                                       |                                                                                                                                                                                                                                                                                     |
| `reason`                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                                                                                                                  | Why this adjustment was created. Appears in the Paddle Dashboard. Retained for record-keeping purposes.                                                                                                                                                                             |                                                                                                                                                                                                                                                                                     |
| `status`                                                                                                                                                                                                                                                                            | [?\paddle\Paddle\Models\Shared\SchemaStatusAdjustment](../../Models/Shared/SchemaStatusAdjustment.md)                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Status of this adjustment. Set automatically by Paddle. <br/><br/>`refund` adjustments must be approved by Paddle, and are created with the status `pending_approval` <br/>until they move to `approved` or `rejected` on review.  `credit` adjustments are created with the status `approved`. |                                                                                                                                                                                                                                                                                     |
| `subscriptionId`                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                                                                                  | Unique Paddle ID for this subscription entity, prefixed with `sub_`.                                                                                                                                                                                                                | sub_01h04vsc0qhwtsbsxh3422wjs4                                                                                                                                                                                                                                                      |
| `transactionId`                                                                                                                                                                                                                                                                     | *mixed*                                                                                                                                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                                                                                                                  | Paddle ID for the transaction related to this adjustment, prefixed with `txn_`.<br/>Transactions must be `billed` or `completed`. You can't create an adjustment for a transaction<br/>that has an adjustment that's `pending_approval`.                                            |                                                                                                                                                                                                                                                                                     |