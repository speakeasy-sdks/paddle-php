# TotalsFormatted

The financial breakdown of a charge in the format of a given currency.


## Fields

| Field                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                           | Required                                                                                                                                                                                                                                                                       | Description                                                                                                                                                                                                                                                                    | Example                                                                                                                                                                                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `discount`                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                             | The amount discounted due to a discount code or ID being applied. <br/><br/>Except for percentage discounts, Paddle applies tax to discounts based on the line item `price.tax_mode`. If `price.tax_mode` for a line item is `internal`, Paddle removes tax from the discount applied. | $0                                                                                                                                                                                                                                                                             |
| `subtotal`                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                             | The amount times the quantity.                                                                                                                                                                                                                                                 | $150.00                                                                                                                                                                                                                                                                        |
| `tax`                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                             | The amount of tax due on the subtotal.                                                                                                                                                                                                                                         | $15.00                                                                                                                                                                                                                                                                         |
| `total`                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                             | The subtotal - discount + tax.                                                                                                                                                                                                                                                 | $165.00                                                                                                                                                                                                                                                                        |