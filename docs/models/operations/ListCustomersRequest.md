# ListCustomersRequest


## Fields

| Field                                                                                                          | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    | Example                                                                                                        |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `after`                                                                                                        | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | Return entities after the specified cursor. Used for working through paginated results.                        |                                                                                                                |
| `id`                                                                                                           | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | Return only the IDs specified. Use a comma separated list to get multiple entities.                            |                                                                                                                |
| `orderBy`                                                                                                      | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | Order returned entities by the specified field and direction (`[ASC]` or `[DESC]`).                            |                                                                                                                |
| `perPage`                                                                                                      | *?int*                                                                                                         | :heavy_minus_sign:                                                                                             | Set how many entities are returned per page.                                                                   |                                                                                                                |
| `search`                                                                                                       | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | N/A                                                                                                            | upgrade                                                                                                        |
| `status`                                                                                                       | [?\paddle\Paddle\Models\Shared\Status](../../models/shared/Status.md)                                          | :heavy_minus_sign:                                                                                             | Return entities that match the specified status. Use a comma separated list to specify multiple status values. |                                                                                                                |