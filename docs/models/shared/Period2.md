# Period2

How often this price should be charged. `null` if price is non-recurring (one-time).


## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `frequency`                                               | *int*                                                     | :heavy_check_mark:                                        | Amount of time.                                           |
| `interval`                                                | [Period2Interval](../../models/shared/Period2Interval.md) | :heavy_check_mark:                                        | Unit of time.                                             |