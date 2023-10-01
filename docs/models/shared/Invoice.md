# Invoice


## Fields

| Field                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                        | Example                                                                                                                                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `addressId`                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | add_01ghbkbv8s6kjram8fbfz49p45                                                                                                                                                                                                     |
| `billingDetails`                                                                                                                                                                                                                   | [BillingDetails1](../../models/shared/BillingDetails1.md)                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                 | Details for invoicing. Required if `collection_mode` is set to `manual`. Otherwise must be `null`.                                                                                                                                 |                                                                                                                                                                                                                                    |
| `billingPeriod`                                                                                                                                                                                                                    | [?InvoiceBillingPeriod](../../models/shared/InvoiceBillingPeriod.md)                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `businessId`                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | biz_01ghbkcbs88yxj4fxecevjz9g7                                                                                                                                                                                                     |
| `checkout`                                                                                                                                                                                                                         | [?InvoiceCheckout](../../models/shared/InvoiceCheckout.md)                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `createdAt`                                                                                                                                                                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `currencyCode`                                                                                                                                                                                                                     | [CurrencyCodeInvoice](../../models/shared/CurrencyCodeInvoice.md)                                                                                                                                                                  | :heavy_check_mark:                                                                                                                                                                                                                 | Currency codes accepted for invoice. Current accepted currencies for invoice: EUR, GPB and USD.                                                                                                                                    |                                                                                                                                                                                                                                    |
| `customData`                                                                                                                                                                                                                       | [CustomDataInvoice](../../models/shared/CustomDataInvoice.md)                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                                                 | Key/value pairs of any custom data                                                                                                                                                                                                 |                                                                                                                                                                                                                                    |
| `customerId`                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | ctm_01ghbkbbm326p19wh85fnr0xft                                                                                                                                                                                                     |
| `details`                                                                                                                                                                                                                          | [?InvoiceDetails](../../models/shared/InvoiceDetails.md)                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `dueAt`                                                                                                                                                                                                                            | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `id`                                                                                                                                                                                                                               | *?string*                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | inv_01ghbk4xjn4qdsmstcwzgcgg35                                                                                                                                                                                                     |
| `invoiceNumber`                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | 123-45678                                                                                                                                                                                                                          |
| `issuedAt`                                                                                                                                                                                                                         | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `items`                                                                                                                                                                                                                            | array<[InvoiceItem](../../models/shared/InvoiceItem.md)>                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `paidAt`                                                                                                                                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `status`                                                                                                                                                                                                                           | [?InvoiceStatus](../../models/shared/InvoiceStatus.md)                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                 | The status of the invoice. Most of statuses are self-explanatory. `pending_acceptance` is a state equivalent of `unpaid` but represents the fact that the customer has not yet accept Paddle's invoicing MoR terms and conditions. | paid                                                                                                                                                                                                                               |
| `transactionId`                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | txn_01gr689rcf018r2b4bjbrmdh4k                                                                                                                                                                                                     |
| `updatedAt`                                                                                                                                                                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |