# Address

Represents an address entity.


## Fields

| Field                                                                                  | Type                                                                                   | Required                                                                               | Description                                                                            | Example                                                                                |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `city`                                                                                 | *?string*                                                                              | :heavy_minus_sign:                                                                     | City of this address.                                                                  | Astoria                                                                                |
| `countryCode`                                                                          | [?\paddle\Paddle\Models\Shared\CountryCode2](../../Models/Shared/CountryCode2.md)      | :heavy_minus_sign:                                                                     | Supported two-letter ISO 3166-1 alpha-2 country code.                                  |                                                                                        |
| `createdAt`                                                                            | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                          | :heavy_minus_sign:                                                                     | RFC 3339 datetime string of when this entity was created. Set automatically by Paddle. | 2024-10-12T07:20:50.52Z                                                                |
| `description`                                                                          | *?string*                                                                              | :heavy_minus_sign:                                                                     | Memorable description for this address.                                                | Paddle.com                                                                             |
| `firstLine`                                                                            | *?string*                                                                              | :heavy_minus_sign:                                                                     | First line of this address.                                                            | 3811 Ditmars Blvd                                                                      |
| `id`                                                                                   | *?string*                                                                              | :heavy_minus_sign:                                                                     | Unique Paddle ID for this address entity, prefixed with `add_`.                        | add_01gm302t81w94gyjpjpqypkzkf                                                         |
| `postalCode`                                                                           | *?string*                                                                              | :heavy_minus_sign:                                                                     | ZIP or postal code of this address. Required for some countries.                       | 11105-1803                                                                             |
| `region`                                                                               | *?string*                                                                              | :heavy_minus_sign:                                                                     | State, county, or region of this address.                                              | NY                                                                                     |
| `secondLine`                                                                           | *?string*                                                                              | :heavy_minus_sign:                                                                     | Second line of this address.                                                           |                                                                                        |
| `status`                                                                               | [?\paddle\Paddle\Models\Shared\SchemaStatus](../../Models/Shared/SchemaStatus.md)      | :heavy_minus_sign:                                                                     | Whether this entity can be used in Paddle.                                             |                                                                                        |
| `updatedAt`                                                                            | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                          | :heavy_minus_sign:                                                                     | RFC 3339 datetime string of when this entity was updated. Set automatically by Paddle. | 2024-10-13T07:20:50.52Z                                                                |