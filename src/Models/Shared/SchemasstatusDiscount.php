<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Whether this entity can be used in Paddle. `expired` and `used` are set automatically by Paddle. */
enum SchemasstatusDiscount: string
{
    case Active = 'active';
    case Archived = 'archived';
    case Expired = 'expired';
    case Used = 'used';
}
