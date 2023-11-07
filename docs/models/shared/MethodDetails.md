# MethodDetails

Information about the payment method used for a payment attempt.


## Fields

| Field                                                                                        | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `card`                                                                                       | [?\paddle\Paddle\Models\Shared\Card](../../models/shared/Card.md)                            | :heavy_minus_sign:                                                                           | Information about the credit or debit card used to pay. Only returned when `type` is `card`. |
| `type`                                                                                       | [?\paddle\Paddle\Models\Shared\MethodDetailsType](../../models/shared/MethodDetailsType.md)  | :heavy_minus_sign:                                                                           | Type of payment method used for this payment attempt.                                        |