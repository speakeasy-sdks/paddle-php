# UnitPriceOverride


## Fields

| Field                                                                                                                           | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `countryCodes`                                                                                                                  | array<[CountryCode2](../../models/shared/CountryCode2.md)>                                                                      | :heavy_check_mark:                                                                                                              | Supported two-letter ISO 3166-1 alpha-2 country code. Customers located in the listed countries are charged the override price. |
| `unitPrice`                                                                                                                     | [Money2](../../models/shared/Money2.md)                                                                                         | :heavy_check_mark:                                                                                                              | N/A                                                                                                                             |