# GetSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONTransactionCheckout


## Fields

| Field                                                                                                                                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                                                                                                                                        | Required                                                                                                                                                                                                                                                                                                                                                                                    | Description                                                                                                                                                                                                                                                                                                                                                                                 | Example                                                                                                                                                                                                                                                                                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `url`                                                                                                                                                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                          | The URL built in order to execute a payment via a checkout. This can be `null` as we do have scenarios where a transaction can only be paid with a wire transfer or perhaps just not desired. When `collection_mode` is `automatic`, this URL will always be present. <br /><br /> It is built using the sellers approved domain along with the transaction ID param appended `?_ptxn={id}` | https://www.mydomain.com/checkout?_ptxn=txn_01ghbmbk59qye598j9zpc047y3                                                                                                                                                                                                                                                                                                                      |